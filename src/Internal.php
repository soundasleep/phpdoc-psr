<?php

namespace PHPDoc2\Psr;

/**
 * From {@link https://github.com/phpDocumentor/fig-standards/blob/master/proposed/phpdoc.md#88-internal 8.8. @internal}
 */
class Internal
{

  /**
   * @internal
   *
   * @return int Indicates the number of items.
   */
  function count()
  {
      // <...>
  }

  /**
   * Counts the number of Foo.
   *
   * {@internal Silently adds one extra Foo to compensate for lack of Foo }}
   *
   * @return int Indicates the number of items.
   */
  function countInline()
  {
      // <...>
  }

}
