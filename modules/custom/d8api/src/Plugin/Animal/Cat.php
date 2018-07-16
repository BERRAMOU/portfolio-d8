<?php

namespace Drupal\d8api\Plugin\Animal;

use Drupal\d8api\Annotation\Animal;

/**
 * Define a concrete class for a cat.
 *
 * @Animal(
 *   id = "animal_cat",
 *   name = @Translation("Cat")
 * )
 */
class Cat extends AbstractMammal {

  /**
   * {@inheritDoc}
   */
  public function retrieveCall() {
    return "Meow";
  }

}
