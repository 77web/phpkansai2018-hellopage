<?php


namespace Quartetcom\HelloPage;


class CustomerSearchApp
{
    /**
     * @var CustomerCriteriaBuilderInterface
     */
    private $customerCriteriaBuilder;

    /**
     * @var CustomerSearchInterface
     */
    private $customerSearch;

    /**
     * @param CustomerCriteriaBuilderInterface $customerCriteriaBuilder
     * @param CustomerSearchInterface $customerSearch
     */
    public function __construct(CustomerCriteriaBuilderInterface $customerCriteriaBuilder, CustomerSearchInterface $customerSearch)
    {
        $this->customerCriteriaBuilder = $customerCriteriaBuilder;
        $this->customerSearch = $customerSearch;
    }

    public function search($get)
    {
        $criteria = $this->customerCriteriaBuilder->build($get);

        return $this->customerSearch->search($criteria);
    }
}
