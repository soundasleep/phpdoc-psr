<?php

namespace PHPDoc2\Psr;

/**
 * From {@link https://github.com/phpDocumentor/fig-standards/blob/master/proposed/phpdoc.md#820-throws 8.20. @throws}
 */
class Throws
{
    /**
     * Counts the number of items in the provided array.
     *
     * @param mixed[] $array Array structure to count the elements of.
     *
     * @throws InvalidArgumentException if the provided argument is not of type
     *     'array'.
     *
     * @return int Returns the number of elements.
     */
    function count($items) {
        // <...>
    }
}
