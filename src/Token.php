<?php
require_once __DIR__ . '/../vendor/autoload.php';

class Token
{
    public function create($params)
    {
        return OmiseToken::create($params);
    }
}
