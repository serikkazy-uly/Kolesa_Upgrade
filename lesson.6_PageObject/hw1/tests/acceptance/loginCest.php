<?php

use Page\Acceptance\LoginPage;

/**
 * class for check collapse authorization
 */

class loginCest
{

/**
 * proof error appearance authorization and -> locked_out_user
 */
    public function checkWrongLogin(AcceptanceTester $I)
    {
      $loginPage = new LoginPage($I);
      $I -> amOnPage('');
        $loginPage -> fillUsernameField()
            -> fillPasswordField()
            -> clickSubmit()
            -> errorBoxDetect()
            -> clickClose()
            -> closeErrorBoxDetect();
  
    }
}