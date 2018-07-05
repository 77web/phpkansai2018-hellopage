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
     * @param CustomerCriteriaInterface $criteria
     * @return array
     */
    public function search(CustomerCriteriaInterface $criteria): array
    {
        $allCustomers = $this->dataSource->getAll();

        $foundCustomers = [];
        foreach ($allCustomers as $customer) {
            if (strpos($customer['tel'], $criteria->getTel()) === 0) {
                $foundCustomers[] = $customer;
            } elseif (strpos($customer['company_name'], $criteria->getKeyword()) !== false) {
                $foundCustomers[] = $customer;
            } elseif (strpos($customer['name'], $criteria->getKeyword()) !== false) {
                $foundCustomers[] = $customer;
            } elseif (strpos($customer['project_name'], $criteria->getKeyword()) !== false) {
                $foundCustomers[] = $customer;
            }
        }

        return $foundCustomers;
    }
}
