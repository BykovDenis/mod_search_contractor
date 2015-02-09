<?php

defined('_JEXEC') or die("Restricted access1");

require_once dirname(__FILE__).'/helper.php';

$contractor = modSearchContractorHelper::getContractor();

require JModuleHelper::getLayoutPath('mod_search_contractor', $params->get('layout', 'default'));