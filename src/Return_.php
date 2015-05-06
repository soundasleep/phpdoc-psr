<?php

namespace PHPDoc2\Psr;

/**
 * From {@link https://github.com/phpDocumentor/fig-standards/blob/master/proposed/phpdoc.md#815-return 8.15. @return}
 */
class Return_
{
  /**
   * @return int Indicates the number of items.
   */
  function count()
  {
      // <...>
  }

  /**
   * @return string|null The label's text or null if none provided.
   */
  function getLabel()
  {
      // <...>
  }

  /**
   * @return void
   */
  function returnVoid()
  {
      // <...>
  }

  function returnVoidIsOptional()
  {
      // <...>
  }

  /**
   * From {@link https://github.com/phpDocumentor/fig-standards/blob/master/proposed/phpdoc.md#collections collections}
   * @return \ArrayObject<string>
   */
  function returnArrayObject() {

  }

  /**
   * From {@link https://github.com/phpDocumentor/fig-standards/blob/master/proposed/phpdoc.md#collections collections}
   * @return \ArrayObject<\ArrayObject<int>>
   */
  function returnArrayObjectCollection() {

  }

  /**
   * From {@link https://github.com/phpDocumentor/fig-standards/blob/master/proposed/phpdoc.md#collections collections}
   * @return \ArrayObject<int, string>
   */
  function returnArrayObjectKeys() {

  }

  /**
   * From {@link https://github.com/phpDocumentor/fig-standards/blob/master/proposed/phpdoc.md#collections collections}
   * @return \ArrayObject<string|bool>
   */
  function returnArrayObjectMultiple() {

  }

  /**
   * From {@link https://github.com/phpDocumentor/fig-standards/blob/master/proposed/phpdoc.md#keyword Keyword}
   * @return null
   */
  function returnNull() {

  }

  /**
   * From {@link https://github.com/phpDocumentor/fig-standards/blob/master/proposed/phpdoc.md#keyword Keyword}
   * @return stdClass|null
   */
  function returnClassOrNull() {

  }

}
