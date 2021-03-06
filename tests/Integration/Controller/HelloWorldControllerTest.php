<?php

namespace App\Tests\Integration\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HelloWorldControllerTest extends WebTestCase
{
    public function testHelloWorldControllerReturnsHelloWorld(): void
    {
        $client = self::createClient();

        $response = $client->request(Request::METHOD_GET, '/hello_world');

        self::assertResponseStatusCodeSame(Response::HTTP_OK);

        $this->assertEquals('Hello world', $response->getNode(0)?->textContent);
    }
}
