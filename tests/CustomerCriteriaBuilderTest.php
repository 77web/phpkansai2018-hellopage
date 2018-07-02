<?php


namespace Quartetcom\HelloPage;


use PHPUnit\Framework\TestCase;

class CustomerCriteriaBuilderTest extends TestCase
{
    public function test_build()
    {
        $SUT = new CustomerCriteriaBuilder();
        $criteria = $SUT->build(['tel' => '052-111-1111', 'keyword' => '']);

        $this->assertInstanceOf(CustomerCriteriaInterface::class, $criteria);
        $this->assertEquals('052-111-1111', $criteria->getTel());
    }
}
