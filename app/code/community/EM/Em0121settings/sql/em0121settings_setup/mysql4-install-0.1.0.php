<?php
$installer = $this;
Mage::helper('em0121settings/sample')->importSampleData($installer);

$helper = Mage::helper('em0121settings');
$block = Mage::getModel('cms/block');
$stores = array(0);
$prefixBlock = 'em0121_';

$widgetInstance = Mage::getModel('widget/widget_instance');
$package_theme  = 'default/em0121';

function em0121_install_fix_widget_block_id(&$widget, $block_id) {
	$params = unserialize($widget['widget_parameters']);
	$params['block_id'] = $block_id;
	$widget['widget_parameters'] = serialize($params);
}
?>