<?php

namespace PHPDoc2\Psr;

/**
 * From {@link https://github.com/phpDocumentor/fig-standards/blob/master/proposed/phpdoc.md#814-property 8.14. @property}
 */
class Parent_Property
{
    public function __get()
    {
        // <...>
    }
}

/**
 * From {@link https://github.com/phpDocumentor/fig-standards/blob/master/proposed/phpdoc.md#814-property 8.14. @property}
 * @property string $myProperty
 */
class Child_Property extends Parent_Property
{
    // <...>
}
