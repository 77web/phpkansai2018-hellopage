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


    public function search($get)
    {
        $criteria = $this->customerCriteriaBuilder->build($get);

        return $this->customerSearch->search($criteria);
    }
}
