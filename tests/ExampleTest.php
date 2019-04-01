<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;
use App\Events\BoomEvent;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->get('/');

        $this->assertEquals(
            $this->app->version(), $this->response->getContent()
        );
        $this->assertResponseStatus(201);
    }

    public function testThatSometimesFails()
    {
        $this->assertTrue(false);
    }

    public function testLogicThatTanks() {
        $this->expectException(\InvalidArgumentException::class);
        $this->assertTrue(true);
    }

}
