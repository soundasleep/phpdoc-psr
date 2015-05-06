<?php

namespace PHPDoc2\Psr;

/**
 * From {@link https://github.com/phpDocumentor/fig-standards/blob/master/proposed/phpdoc.md#811-method 8.11. @method}
 */
class Method_Parent
{
    public function __call()
    {
        // ...
    }
}

/**
 * From {@link https://github.com/phpDocumentor/fig-standards/blob/master/proposed/phpdoc.md#811-method 8.11. @method}
 * @method string getString()
 * @method void setInteger(int $integer)
 * @method setString(int $integer)
 */
class Method_Child extends Method_Parent
{
    // ...
}
