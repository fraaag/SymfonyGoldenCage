<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

# Acme/DemoBundle/DependencyInjection/AcmeDemoBundleExtension.php for YAML configurations

namespace MyApp\UserBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\Loader;
use Symfony\Component\Config\FileLocator;

class AcmeDemoBundleExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container) {
        // ...
        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('admin.yml');
    }
}