<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Eccube\Service\TaxRuleService' shared autowired service.

include_once $this->targetDirs[3].'/src/Eccube/Service/TaxRuleService.php';

if ($lazyLoad) {
    return $this->services['Eccube\\Service\\TaxRuleService'] = $this->createProxy('TaxRuleService_289f969', function () {
        return \TaxRuleService_289f969::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
            $wrappedInstance = $this->load('getTaxRuleServiceService.php', false);

            $proxy->setProxyInitializer(null);

            return true;
        });
    });
}

return new \Eccube\Service\TaxRuleService(${($_ = isset($this->services['Eccube\\Repository\\TaxRuleRepository']) ? $this->services['Eccube\\Repository\\TaxRuleRepository'] : $this->getTaxRuleRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['Eccube\\Repository\\BaseInfoRepository']) ? $this->services['Eccube\\Repository\\BaseInfoRepository'] : $this->getBaseInfoRepositoryService()) && false ?: '_'});
