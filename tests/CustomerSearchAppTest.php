<?php


namespace Quartetcom\HelloPage;


use PHPUnit\Framework\TestCase;

class CustomerSearchAppTest extends TestCase
{
    public function test()
    {
        $get = [];

        $app = new CustomerSearchApp();
        $app->search($get);
    }
}
