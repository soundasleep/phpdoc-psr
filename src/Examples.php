<?php

namespace PHPDoc2\Psr;

/**
 * From {@link https://github.com/phpDocumentor/fig-standards/blob/master/proposed/phpdoc.md#55-examples 5.5. Examples}
 */
class Examples
{
  /**
   * This is a Summary.
   *
   * This is a Description. It may span multiple lines
   * or contain 'code' examples using the _Markdown_ markup
   * language.
   *
   * @see Markdown
   *
   * @param int        $parameter1 A parameter description.
   * @param \Exception $e          Another parameter description.
   *
   * @\Doctrine\Orm\Mapper\Entity()
   *
   * @return string
   */
  function test($parameter1, $e)
  {
      // ...
  }

  /**
   * This is a Summary.
   *
   * @see Markdown
   *
   * @param int        $parameter1 A parameter description.
   * @param \Exception $parameter2 Another parameter description.
   *
   * @\Doctrine\Orm\Mapper\Entity()
   *
   * @return string
   */
  function testWithNoDescription($parameter1, $parameter2)
  {
      // ...
  }

  /**
   * This is a Summary.
   */
  function testWithNoTags($parameter1, $parameter2)
  {
  }

  /** @var \ArrayObject $array */
  public $array = null;

}
