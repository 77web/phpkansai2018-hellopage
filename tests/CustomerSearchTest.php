<?php


namespace Quartetcom\HelloPage;


use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use Quartetcom\HelloPage\DataSource\CustomerDataSourceInterface;

class CustomerSearchTest extends TestCase
{
    public function test_電話番号検索()
    {
        /** @var CustomerDataSourceInterface|MockObject $dataSource */
        $dataSource = $this->createMock(CustomerDataSourceInterface::class);
        $customer1 = ['company_name' => 'c1', 'name' => 'c1-company', 'project_name' => 'c1-project', 'tel' => '052-111-1111'];
        $customer2 = ['company_name' => 'c2', 'name' => 'c2-company', 'project_name' => 'c2-project', 'tel' => '011-111-1052'];

        $allCustomers = [$customer1, $customer2];

        /** @var CustomerCriteriaInterface|MockObject $criteria */
        $criteria = $this->createMock(CustomerCriteriaInterface::class);
        $criteria->expects($this->atLeastOnce())->method('getTel')->willReturn('052');
        $dataSource->expects($this->once())->method('getAll')->willReturn($allCustomers);

        $search = new CustomerSearch($dataSource);
        $this->assertEquals([$customer1], $search->search($criteria));
    }
}
