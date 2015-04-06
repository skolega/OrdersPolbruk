<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class OrderControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/zamowienie/');
    }

    public function testAdd()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/zamowienie/dodaj');
    }

    public function testRemove()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/zamowienie/remove');
    }

    public function testEditquantity()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/zamowienie/{id}/edit/{quntity}');
    }

    public function testOrder()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/zamowienie/order');
    }

    public function testClear()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/zamowienie/clear');
    }

}
