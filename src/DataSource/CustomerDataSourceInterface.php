<?php


namespace Quartetcom\HelloPage\DataSource;


interface CustomerDataSourceInterface
{
    public function getAll(): array;
}
