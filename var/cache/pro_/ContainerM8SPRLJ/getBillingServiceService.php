<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShopCorp\Billing\Services\BillingService' shared service.

return $this->services['PrestaShopCorp\\Billing\\Services\\BillingService'] = new \PrestaShopCorp\Billing\Services\BillingService(($this->privates['PrestaShopCorp\\Billing\\Wrappers\\BillingContextWrapper'] ?? $this->load('getBillingContextWrapperService.php')), ($this->services['ps_facebook'] ?? $this->load('getPsFacebookService.php')));
