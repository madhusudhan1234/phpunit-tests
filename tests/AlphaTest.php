<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AlphaTest extends TestCase
{
    public function testDisplayAlphaPage()
    {
        $this->visit('/alpha')
            ->see('alpha')
            ->dontSee('Beta Page Hello How are you ?? :D');
    }

    public function testClickGoToBetaPage()
    {
        $this->visit('/alpha')
            ->click('Go To Beta Page')
            ->seePageIs('/beta');
    }
}
