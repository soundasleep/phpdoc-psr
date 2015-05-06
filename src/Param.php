<?php

namespace PHPDoc2\Psr;

/**
 * From {@link https://github.com/phpDocumentor/fig-standards/blob/master/proposed/phpdoc.md#813-param 8.13. @param}
 */
class Param
{

  /**
   * Counts the number of items in the provided array.
   *
   * @param mixed[] $array Array structure to count the elements of.
   *
   * @return int Returns the number of elements.
   */
  function count(array $items)
  {
      // <...>
  }

  /**
   * Initializes this class with the given options.
   *
   * @param array $options {
   *     @var bool   $required Whether this element is required
   *     @var string $label    The display name for this element
   * }
   */
  public function __construct(array $options = array())
  {
      // <...>
  }
}
