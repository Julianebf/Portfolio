<?php

namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class HomePageCest 
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function ContactAreaTest(AcceptanceTester $I)
    {
        $I->amOnPage("/");
        $I->seeInTitle("Portfolio");
        $I->click("Inicio");
        $I->see("Juliane");
        $I->click("Sobre");
        $I->see("Download CV");
        $I->click("Certificados");
        $I->see("Certificados");
        $I->click("Especialidade");
        $I->see("HTML");
        $I->click("Projetos");
        $I->see("Projetos");
        $I->click("Contato");
        $I->see("Mensagem");
    }
}
