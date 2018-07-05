<?php

namespace Quartetcom\HelloPage;

use Quartetcom\HelloPage\DataSource\CustomerDataSourceInterface;

class CustomerSearch implements CustomerSearchInterface
{
    /**
     * @var CustomerDataSourceInterface
     */
    private $dataSource;

    /**
     * @param CustomerDataSourceInterface $dataSource
     */
    public function __construct(CustomerDataSourceInterface $dataSource)
    {
        $this->dataSource = $dataSource;
    }

    /**
     * @param CustomerCriteriaInterface $criteria
     * @return array
     */
    public function search(CustomerCriteriaInterface $criteria): array
    {
        $allCustomers = $this->dataSource->getAll();

        $foundCustomers = [];
        foreach ($allCustomers as $customer) {
            if ($criteria->getTel() && strpos($customer['tel'], $criteria->getTel()) === 0) {
                $foundCustomers[] = $customer;
            } elseif ($criteria->getKeyword() && strpos($customer['company_name'], $criteria->getKeyword()) !== false) {
                $foundCustomers[] = $customer;
            } elseif ($criteria->getKeyword() && strpos($customer['name'], $criteria->getKeyword()) !== false) {
                $foundCustomers[] = $customer;
            } elseif ($criteria->getKeyword() && strpos($customer['project_name'], $criteria->getKeyword()) !== false) {
                $foundCustomers[] = $customer;
            }
        }

        return $foundCustomers;
    }
}
