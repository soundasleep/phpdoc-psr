<?php

namespace PHPDoc2\Psr;

/**
 * From {@link https://github.com/phpDocumentor/fig-standards/blob/master/proposed/phpdoc.md#817-since 8.17. @since}
 *
 * This is Foo
 * @version MyApp 2.1.7
 * @since 2.0.0 introduced
 */
class Since
{
    /**
     * Make a bar.
     *
     * @since 2.1.5 bar($arg1 = '', $arg2 = null)
     *        introduced the optional $arg2
     * @since 2.1.0 bar($arg1 = '')
     *        introduced the optional $arg1
     * @since 2.0.0 bar()
     *        introduced new method bar()
     */
    public function bar($arg1 = '', $arg2 = null)
    {
        // <...>
    }
}
