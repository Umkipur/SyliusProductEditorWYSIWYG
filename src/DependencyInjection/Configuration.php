<?php

declare(strict_types=1);

namespace umkipur\syliusproducteditorwysiwyg\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

final class Configuration implements ConfigurationInterface
{
    /**
     * @psalm-suppress UnusedVariable
     */
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('umkipur_sylius_example');
        $rootNode = $treeBuilder->getRootNode();

        return $treeBuilder;
    }
}
