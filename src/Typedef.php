<?php

namespace PHPDoc2\Psr;

/**
 * From {@link https://github.com/phpDocumentor/fig-standards/blob/master/proposed/phpdoc.md#822-typedef 8.22. @typedef}
 *
 * @typedef \Storage \Session
 *
 * @typedef \Storage \Session {
 *   This class represents a session that stores user specific information.
 *
 *   @property string $session_id
 * }
 *
 * @typedef \Mockery\MockInterface|\My\DiContainer DicStub
 *
 * @typedef array \Configuration {
 *   @var string $setting1
 *   @var string $setting2
 * }
 */
class Typedef
{
}
