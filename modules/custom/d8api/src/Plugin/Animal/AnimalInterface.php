<?php

namespace Drupal\d8api\Plugin\Animal;

/**
 * Define interface common to all animals.
 */
interface AnimalInterface {

  /**
   * Is the animal capable of sustaining its body temperature?
   *
   * @return bool
   *   Response to the question.
   */
  public function isHomeothermic();

  /**
   * The animal's call.
   *
   * @return string
   *   Animal's response.
   */
  public function retrieveCall();

}
