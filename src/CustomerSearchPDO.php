<?php

namespace Quartetcom\HelloPage;

class CustomerSearchPDO implements CustomerSearchInterface
{
    /**
     * @var \PDO
     */
    private $conn;

    public function search(CustomerCriteriaInterface $criteria): array
    {
        $sql = 'SELECT * FROM customer WHERE ';

        $wheres = [];
        $params = [];
        if ($criteria->getTel()) {
            $wheres[] = ' tel LIKE ? ';
            $params[] = $criteria->getTel().'%';
        }
        if ($criteria->getKeyword()) {
            $wheres[] = ' (company_name LIKE ? OR name LIKE ? OR project_name LIKE ?) ';
            $keyword = '%'.$criteria->getKeyword().'%';
            $params = array_merge($params, str_repeat($keyword, 3));
        }

        $statement = $this->conn->prepare($sql);
        $statement->execute($params);

        return $statement->fetchAll();
    }
}
