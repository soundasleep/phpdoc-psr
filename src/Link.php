<?php

namespace PHPDoc2\Psr;

/**
 * From {@link https://github.com/phpDocumentor/fig-standards/blob/master/proposed/phpdoc.md#810-link-deprecated 8.10. @link [deprecated]}
 */
class Link
{

  /**
   * @link http://example.com/my/bar Documentation of Foo.
   *
   * @return int Indicates the number of items.
   */
  function count()
  {
      // <...>
  }

  /**
   * This method counts the occurrences of Foo.
   *
   * When no more Foo ({@link http://example.com/my/bar}) are given this
   * function will add one as there must always be one Foo.
   *
   * @return int Indicates the number of items.
   */
  function countInline()
  {
      // <...>
  }

}
