<?php


namespace Quartetcom\HelloPage;


use Quartetcom\HelloPage\Exception\EmptyCriteriaException;

class CustomerCriteriaBuilder implements CustomerCriteriaBuilderInterface
{
    /**
     * @param array $get
     * @return CustomerCriteriaInterface
     * @throws EmptyCriteriaException
     */
    public function build(array $get): CustomerCriteriaInterface
    {
        $get = array_merge(['tel' => '', 'keyword' => ''], $get);

        $criteria = new CustomerCriteria();
        $criteria->setTel($get['tel']);
        $criteria->setKeyword($get['keyword']);

        if ($criteria->getTel() === '' && $criteria === '') {
            throw new EmptyCriteriaException();
        }

        return $criteria;
    }
}
