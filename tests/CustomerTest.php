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

    public function testCreate_parameterIsInvalidArrayHasNoKey_customerHasBeenCreatedButCardHasNotBeenCreated()
    {
        $customer = OmiseCustomer::create(array(
            $this->token['id']
        ));

        $this->assertEquals('customer', $customer['object']);
        $this->assertEquals(0, count($customer['cards']['data']));
    }

    public function testCreate_successfullyCreateACustomer_responseObjectIsCustomer()
    {
        $customer = OmiseCustomer::create(array(
            'email' => 'ss.saroj@gmail.com',
            'card' => $this->token['id'],
        ));

        $this->assertEquals('customer', $customer['object']);
        $this->assertEquals('ss.saroj@gmail.com', $customer['email']);
        $this->assertEquals(1, count($customer['cards']['data']));
        $this->assertEquals('card', $customer['cards']['data'][0]['object']);
        $this->assertEquals('4242', $customer['cards']['data'][0]['last_digits']);
        $this->assertEquals(1, $customer['cards']['data'][0]['expiration_month']);
        $this->assertEquals(2025, $customer['cards']['data'][0]['expiration_year']);
        $this->assertEquals('Saroj Sangphongamphai', $customer['cards']['data'][0]['name']);
        echo "\u{1F60D}\u{1F60D}\u{1F60D}";
    }
}
