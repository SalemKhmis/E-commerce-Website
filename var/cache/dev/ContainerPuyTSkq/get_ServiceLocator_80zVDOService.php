<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.80zV_DO' shared service.

return $this->privates['.service_locator.80zV_DO'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, array(
    'em' => array('services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService.php', true),
    'produit' => array('privates', '.errored..service_locator.80zV_DO.App\\Entity\\Produit', NULL, 'Cannot autowire service ".service_locator.80zV_DO": it references class "App\\Entity\\Produit" but no such service exists.'),
    'repoAvis' => array('privates', 'App\\Repository\\AvisRepository', 'getAvisRepositoryService.php', true),
));
