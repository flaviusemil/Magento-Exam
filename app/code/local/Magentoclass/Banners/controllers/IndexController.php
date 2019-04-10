<?php
class Magentoclass_Banners_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        echo "<h2>Welcome to MagentoClass</h2>";


        $collection = Mage::getModel('catalog/product')->getCollection();
        $collection->addAttributeToSelect('featured2');
        $collection->addFieldToFilter('featured2', true);

        echo "<h4>Number of featured products: " . $collection->getSize() . "</h4>";

    }
}