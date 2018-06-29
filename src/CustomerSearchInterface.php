<?php


namespace Quartetcom\HelloPage;

/**
 * Interface CustomerSearchInterface
 * 顧客を検索する
 *
 * @package Quartetcom\HelloPage
 */
interface CustomerSearchInterface
{
    /**
     * @param CustomerCriteriaInterface $criteria
     * @return array
     */
    public function search(CustomerCriteriaInterface $criteria): array;
}
