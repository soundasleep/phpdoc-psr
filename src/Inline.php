<?php

namespace PHPDoc2\Psr;

/**
 * From {@link https://github.com/phpDocumentor/fig-standards/blob/master/proposed/phpdoc.md#54-inline-phpdoc 5.4. Inline PHPDoc}
 *
 * @method int MyMagicMethod(string $argument1) {
 *     This is the summary for MyMagicMethod.
 *
 *     @param string $argument1 Description for argument 1.
 *
 *     @return int
 * }
 */
class Inline
{
  public function MyMagicMethod($argument1) {
    // something
  }
}
