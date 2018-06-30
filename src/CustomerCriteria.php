<?php


namespace Quartetcom\HelloPage;


class CustomerCriteria implements CustomerCriteriaInterface
{
    /**
     * @var string
     */
    private $tel;

    /**
     * @var string
     */
    private $keyword;

    /**
     * @return string
     */
    public function getTel(): string
    {
        return $this->tel;
    }

    /**
     * @param string $tel
     * @return CustomerCriteria
     */
    public function setTel(string $tel): CustomerCriteria
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * @return string
     */
    public function getKeyword(): string
    {
        return $this->keyword;
    }

    /**
     * @param string $keyword
     * @return CustomerCriteria
     */
    public function setKeyword(string $keyword): CustomerCriteria
    {
        $this->keyword = $keyword;

        return $this;
    }
}
