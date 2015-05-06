<?php

namespace PHPDoc2\Psr;

/**
 * From {@link https://github.com/phpDocumentor/fig-standards/blob/master/proposed/phpdoc.md#85-deprecated 8.5. @deprecated}
 */
class Deprecated
{

  /**
   * @deprecated
   */
  function deprecatedBlank() { }

  /**
   * @deprecated 1.0.0:2.0.0
   * @see \New\Recommended::method()
   */
  function deprecatedRangeWithSee() { }

  /**
   * @deprecated 1.0.0
   */
  function deprecatedStartingVersion() { }

  /**
   * @deprecated :2.0.0
   */
  function deprecatedEndingVersion() { }

  /**
   * @deprecated No longer used by internal code and not recommended.
   */
  function deprecatedAdditionalInformation() { }

  /**
   * @deprecated 1.0.0 No longer used by internal code and not recommended.
   */
  function deprecatedVersionAdditionalInformation() { }

}
