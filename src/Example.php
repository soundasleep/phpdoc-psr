<?php

namespace PHPDoc2\Psr;

/**
 * From {@link https://github.com/phpDocumentor/fig-standards/blob/master/proposed/phpdoc.md#86-example 8.6. @example}
 */
class Example
{

  /**
   * Counts the number of items.
   * {@example http://example.com/foo-inline.https:2..8}
   *
   * @example http://example.com/foo.phps
   *
   * @return int Indicates the number of items.
   */
  function count() {
    // ...
  }

}
