<?php

namespace PHPDoc2\Psr;

/**
 * From {@link https://github.com/phpDocumentor/fig-standards/blob/master/proposed/phpdoc.md#816-see 8.16. @see}
 */
class See
{

  /**
   * @see number_of() :alias:
   * @see MyClass::$items           For the property whose items are counted.
   * @see MyClass::setItems()       To set the items for this collection.
   * @see http://example.com/my/bar Documentation of Foo.
   *
   * @return int Indicates the number of items.
   */
  function count()
  {
      // <...>
  }

}
