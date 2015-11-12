<?php
class Example extends PHPUnit_Extensions_SeleniumTestCase
{
  protected function setUp()
  {
    $this->setBrowser("*chrome");
    $this->setBrowserUrl("http://localhost:8000/cdp/public/project/new");
  }

  public function testMyTestCase()
  {
    $this->open("/cdp/public/project/new");
    $this->type("name=title", "projet TEST cdp");
    $this->type("name=description", "Ceci est un projet de test ...............................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................");
    $this->type("name=startDate", "aujourdhui");
    $this->click("css=button.btn");
    $this->waitForPageToLoad("30000");
    $this->assertEquals("The start date does not match the format Y-m-d.", $this->getText("css=li"));
    $this->type("name=title", "145245421515154121");
    $this->type("name=description", "coucou");
    $this->type("name=startDate", "2015-11-03");
    $this->click("css=button.btn");
    $this->waitForPageToLoad("30000");
    $this->assertEquals("Votre projet a bien été créé.", $this->getText("css=div.alert.alert-success"));
  }
}
?>