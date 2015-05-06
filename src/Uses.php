<?php

namespace PHPDoc2\Psr;

/**
 * From {@link https://github.com/phpDocumentor/fig-standards/blob/master/proposed/phpdoc.md#823-uses 8.23. @uses}
 */
class Uses
{
  /**
   * @uses \SimpleXMLElement::__construct()
   */
  function initializeXml()
  {
      // <...>
  }

  /**
   * @uses MyView.php
   */
  function executeMyView()
  {
      // <...>
  }
}
