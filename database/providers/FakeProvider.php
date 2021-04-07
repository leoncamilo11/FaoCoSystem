<?php

use Faker\Provider\Company;

class FakeProvider extends Company
{
  protected static $tipoDocumento_id = [1,2,3,4,5];
  public function tipoDocumento_id()
    {
        return static::randomElement(static::$tipoDocumento_id);
    }
}
