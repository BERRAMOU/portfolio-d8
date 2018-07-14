<?php

namespace Drupal\d8api\Plugin\Animal;

use Drupal\Core\Cache\CacheBackendInterface;
use Drupal\Core\Extension\ModuleHandlerInterface;
use Drupal\Core\Plugin\DefaultPluginManager;

/**
 * Manages discovery and instantiation of animal plugins.
 */
class AnimalManager extends DefaultPluginManager {

  /**
   * {@inheritDoc}
   */
  public function __construct(
    \Traversable $namespaces,
    CacheBackendInterface $cache_backend,
    ModuleHandlerInterface $module_handler
  ) {
    parent::__construct(
      'Plugin/Animal',
      $namespaces,
      $module_handler,
      'Drupal\d8api\Plugin\Animal\AnimalInterface',
      'Drupal\d8api\Annotation\Animal'
    );
  }

}
