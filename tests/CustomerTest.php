<?php
use PHPUnit\Framework\TestCase;

class CustomerTest Extends TestCase
{
    /**
     * @var Customer
     */
    private $customer;

    /**
     * @var Token
     */
    private $token;

    public function setUp()
    {
        $this->customer = new Customer();
        $this->token = new Token();
    }

    public function testCreate()
    {
        $params = array(
            'card' => array(
                'name' => 'Saroj Sangphongamphai',
                'number' => '4242424242424242',
                'expiration_month' => 01,
                'expiration_year' => 2025,
                'security_code' => 123,
            )
        );

        $token = $this->token->create($params);

        $this->assertEquals('token', $token['object']);
        echo "\u{1F60D}\u{1F60D}\u{1F60D}";
    }
}
