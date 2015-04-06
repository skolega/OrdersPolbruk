<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class StatsControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/statystyki');
    }

    public function testFilter()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/statystyki/{filter}');
    }

}
