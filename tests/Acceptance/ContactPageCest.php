<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class ContactPageCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function ContactPage(AcceptanceTester $I)
    {
        $I->amOnPage("/contact");
        $I->seeInTitle("Portfolio");
        $I->see("Contato","h2");
        $I->see("Juliane Bezerra");
        //$I->click("https://www.instagram.com/juliane_bzrr/", "a");
        $I->click('.insta');
        $I->see('juliane_bzrr');
    }
}
