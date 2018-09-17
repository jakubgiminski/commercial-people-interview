<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Controller\UpdateTeamController' shared autowired service.

include_once $this->targetDirs[3].'/src/Service/UpdateTeam.php';
include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
include_once $this->targetDirs[3].'/src/Controller/UpdateTeamController.php';
include_once $this->targetDirs[3].'/src/Service/ValidateRequest.php';

$this->services['App\Controller\UpdateTeamController'] = $instance = new \App\Controller\UpdateTeamController(($this->privates['App\Service\ValidateRequest'] ?? $this->privates['App\Service\ValidateRequest'] = new \App\Service\ValidateRequest()), new \App\Service\UpdateTeam(($this->privates['App\Repository\TeamRepository'] ?? $this->load('getTeamRepositoryService.php')), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->load('getDoctrine_Orm_DefaultEntityManagerService.php'))));

$instance->setContainer(($this->privates['.service_locator.ychIlgF'] ?? $this->load('get_ServiceLocator_YchIlgFService.php'))->withContext('App\\Controller\\UpdateTeamController', $this));

return $instance;