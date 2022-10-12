<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class testAreaContatoCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function contactArea(AcceptanceTester $I)
    {
        $I->amOnPage("/contact");
        $I->seeInTitle("Portfolio");
        $I->see("Contato","h2");
        $I->see("Juliane Bezerra");
        $I->click("Enviar");
    }
}
