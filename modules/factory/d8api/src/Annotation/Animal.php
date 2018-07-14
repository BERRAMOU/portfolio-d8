<?php

namespace Drupal\d8api\Annotation;

use Drupal\Component\Annotation\Plugin;

/**
 * Defines an Animal annotation object.
 *
 * @Annotation
 */
class Animal extends Plugin {

  /**
   * The plugin ID.
   *
   * @var string
   */
  public $id;

  /**
   * The plugin name.
   *
   * @var string
   */
  public $name;

}
