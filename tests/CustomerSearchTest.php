<?php


namespace Quartetcom\HelloPage;


use PHPUnit\Framework\TestCase;

class CustomerSearchTest extends TestCase
{
    public function test()
    {
        $foundCustomers = ['c1', 'c2'];
        /** @var CustomerCriteriaInterface $criteria */
        $criteria = $this->createMock(CustomerCriteriaInterface::class);

        $search = new CustomerSearch();
        $this->assertEquals($foundCustomers, $search->search($criteria));
    }
}
