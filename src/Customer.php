<?php
require_once __DIR__ . '/../vendor/autoload.php';

class Customer
{
    public function create($params)
    {
        return OmiseCustomer::create($params);
    }
}
