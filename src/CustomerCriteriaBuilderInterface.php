<?php


namespace Quartetcom\HelloPage;

/**
 * Interface CustomerCriteriaBuilderInterface
 * 顧客の検索条件を作る
 *
 * @package Quartetcom\HelloPage
 */
interface CustomerCriteriaBuilderInterface
{
    public function build(array $get): CustomerCriteriaInterface;
}
