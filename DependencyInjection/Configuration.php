<?php

namespace Fulgurio\TablePrefixBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
	/**
	 * {@inheritDoc}
	 */
	public function getConfigTreeBuilder()
	{
		$treeBuilder = new TreeBuilder();
		$rootNode = $treeBuilder->root('fulgurio_table_prefix');
		$rootNode
			->children()
				->scalarNode('prefix')->defaultValue("fulgurio_table_prefix_bundle.db.table_prefix")->end()
				->end();

		return $treeBuilder;
	}
}