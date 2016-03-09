<?php 
$I = new WebGuy($scenario);
$I->wantTo('ensure Toupper form works');
$I->amOnPage('toupper.html');
$I->see('Convert Me!');
?>
