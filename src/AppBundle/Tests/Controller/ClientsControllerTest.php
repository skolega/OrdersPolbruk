<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ClientsControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/klijenci');
    }

    public function testAdd()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/klijenci/dodaj');
    }

    public function testRemove()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/klijenci/usun/{id}');
    }

    public function testEdit()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/klienci/edytuj/{id}');
    }

}
