<?php

namespace Tests\Unit\Controller;

use App\Controller\HelloWorldController;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\Response;

class HelloWorldControllerTest extends TestCase
{
    private HelloWorldController $controller;

    protected function setUp(): void
    {
        $this->controller = new HelloWorldController();
    }

    public function testHelloWorldControllerReturnsHelloWorld(): void
    {
        $response = ($this->controller)();

        $this->assertEquals($response->getStatusCode(), Response::HTTP_OK);
        $this->assertEquals($response->getContent(), 'Hello world');
    }
}
