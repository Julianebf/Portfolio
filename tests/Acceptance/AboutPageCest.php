<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class AboutPageCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    
    public function viewfrontTest(AcceptanceTester $I)
    {
        $I->amOnPage("/about");
        $I->see("Juliane");
    }

    public function buttonTest(AcceptanceTester $I)
    {
        $I->amOnPage("/about");
        $I->click("Download CV");
    }

}
