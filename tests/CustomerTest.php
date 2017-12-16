<?php
use PHPUnit\Framework\TestCase;

class CustomerTest Extends TestCase
{
    private $token;

    public function setUp()
    {
        $this->token = OmiseToken::create(array(
            'card' => array(
                'name' => 'Saroj Sangphongamphai',
                'number' => '4242424242424242',
                'expiration_month' => 01,
                'expiration_year' => 2025,
                'security_code' => 123,
            )
        ));
    }

    public function testCreate_successfullyCreateACustomer_responseObjectIsCustomer()
    {
        $customer = OmiseCustomer::create(array(
            'email' => 'ss.saroj@gmail.com',
            'card' => $this->token['id'],
        ));

        $this->assertEquals('customer', $customer['object']);
        echo "\u{1F60D}\u{1F60D}\u{1F60D}";
    }
}
