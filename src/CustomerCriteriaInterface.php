<?php


namespace Quartetcom\HelloPage;

/**
 * Interface CustomerCriteriaInterface
 * 顧客の検索条件
 *
 * @package Quartetcom\HelloPage
 */
interface CustomerCriteriaInterface
{
    public function getTel(): string;

    public function getKeyword(): string;
}
