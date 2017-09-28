<?php

namespace {

	use Joomla\CMS\Application\CliApplication;
	use Joomla\CMS\Factory;
	use Joomla\CMS\Plugin\PluginHelper;
	use Joomla\CMS\Router\Route;
	use Joomla\CMS\Router\Router;

	class JFactory extends Factory{}

	class JPluginHelper extends PluginHelper{}

	class JRoute extends Route {}

	class JRouter extends Router {}

	class JApplicationCli extends CliApplication {}
}
