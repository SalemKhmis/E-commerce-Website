<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.4HYVMOK' shared service.

return $this->privates['.service_locator.4HYVMOK'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, array(
    'categorie' => array('privates', '.errored..service_locator.4HYVMOK.App\\Entity\\Categorie', NULL, 'Cannot autowire service ".service_locator.4HYVMOK": it references class "App\\Entity\\Categorie" but no such service exists.'),
    'repo' => array('privates', 'App\\Repository\\ProduitRepository', 'getProduitRepositoryService.php', true),
));