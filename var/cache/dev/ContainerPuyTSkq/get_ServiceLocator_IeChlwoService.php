<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.ieChlwo' shared service.

return $this->privates['.service_locator.ieChlwo'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, array(
    'repo' => array('privates', 'App\\Repository\\ProduitRepository', 'getProduitRepositoryService.php', true),
));
