<?php

namespace Drupal\d8api\Plugin\Animal;

/**
 * Define the abstract mammal class for extension.
 */
abstract class AbstractMammal implements AnimalInterface {

  /**
   * {@inheritDoc}
   */
  public function isHomeothermic() {
    return TRUE;
  }

}
