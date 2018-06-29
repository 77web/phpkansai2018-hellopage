<?php


namespace Quartetcom\HelloPage;


use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

class CustomerSearchAppTest extends TestCase
{
    public function test()
    {
        $get = [];
        $criteria = $this->createMock(CustomerCriteriaInterface::class);
        $filteredCustomers = [];

        /** @var CustomerCriteriaBuilderInterface|MockObject $criteriaBuilder */
        $criteriaBuilder = $this->createMock(CustomerCriteriaBuilderInterface::class);
        /** @var CustomerSearchInterface|MockObject $customerSearch */
        $customerSearch = $this->createMock(CustomerSearchInterface::class);

        $criteriaBuilder->expects($this->once())->method('build')->with($get)->willReturn($criteria);
        $customerSearch->expects($this->once())->method('search')->with($criteria)->willReturn($filteredCustomers);

        $app = new CustomerSearchApp($criteriaBuilder, $customerSearch);
        $this->assertEquals($filteredCustomers, $app->search($get));
    }
}
