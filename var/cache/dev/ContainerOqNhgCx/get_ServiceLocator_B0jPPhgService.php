<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.b0jPPhg' shared service.

return $this->privates['.service_locator.b0jPPhg'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, array(
    'repo' => array('privates', 'App\\Repository\\CommandeRepository', 'getCommandeRepositoryService.php', true),
));
