<?php
defined('_JEXEC') or die;

use Joomla\CMS\Helper\ModuleHelper;

require_once __DIR__ . '/helper.php';

$pending_articles = ModWorkflowEnhancerHelper::getPendingArticles();
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

require ModuleHelper::getLayoutPath('mod_workflow_enhancer', $params->get('layout', 'default'));