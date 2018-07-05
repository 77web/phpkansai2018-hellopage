<?php


namespace Quartetcom\HelloPage\DataSource;


class ArrayCustomerDataSource implements CustomerDataSourceInterface
{
    public function getAll(): array
    {
        return [
            ['company_name' => 'aaa', 'name' => '山田', 'project_name' => 'prj1', 'tel' => '052-111-1111', 'staff_name' => '開発部 菱田', 'memo' => 'xxx'],
            ['company_name' => 'bbb', 'name' => '鈴木', 'project_name' => 'prj2', 'tel' => '011-111-1052', 'staff_name' => '開発部 菱田', 'memo' => 'yyy'],
            ['company_name' => 'ccc', 'name' => '鈴木', 'project_name' => 'prj3', 'tel' => '052-111-1111', 'staff_name' => '開発部 菱田', 'memo' => 'zzz'],
        ];
    }
}
