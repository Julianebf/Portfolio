<?php

namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class ContactPageCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function ContactAreaTest(AcceptanceTester $I)
    {
        $I->amOnPage("/contact");
        $I->seeInTitle("Portfolio");
        $I->see("Contato","h2");
        $I->see("Juliane Bezerra");
        $I->see("Enviar");
    }

    public function InstagramLinkTest(AcceptanceTester $I)
    {
        $I->amOnPage("/contact");
        $I->click('.insta');
        $I->see('juliane_bzrr');
    }

    public function GithubLinkTest(AcceptanceTester $I)
    {
        $I->amOnPage("/contact");
        $I->click('.github');
        $I->see('Bacharel em Sistemas de Informações IFCE - Campus Cedro.');
    }

    public function WhatsapLinkTest(AcceptanceTester $I)
    {
        $I->amOnPage("/contact");
        $I->click('.whats');
    }

}
