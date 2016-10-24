<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class BetaTest extends TestCase
{
    public function testDisplayBetaPage()
    {
        $this->visit('/beta')
            ->see('Beta')
            ->dontSee('Alpha Page Hello How are you ?');
    }

    public function testClickGoToAlphaPage()
    {
        $this->visit('/beta')
            ->click('Go To Alpha Page')
            ->seePageIs('/alpha');
    }
}
