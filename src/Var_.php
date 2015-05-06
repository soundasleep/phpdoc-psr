<?php

namespace PHPDoc2\Psr;

/**
 * From {@link https://github.com/phpDocumentor/fig-standards/blob/master/proposed/phpdoc.md#824-var 8.24. @var}
 */
class Var_
{
  /** @var string|null Should contain a description */
  protected $description = null;

  public function setDescription($description)
  {
      // there should be no docblock here
      $this->description = $description;
  }

  protected
      /**
       * @var string Should contain a description
       */
      $name,
      /**
       * @var string Should contain a description
       */
      $description2;

  const
      /**
       * @var string Should contain a description
       */
      MY_CONST1 = "1",
      /**
       * @var string Should contain a description
       */
      MY_CONST2 = "2";

}
