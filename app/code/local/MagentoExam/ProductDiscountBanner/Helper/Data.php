<?php

class MagentoExam_ProductDiscountBanner_Helper_Data extends Mage_Core_Helper_Abstract
{
    public function calculateDiscount($initialPrice, $changedPrice)
    {
        $diff = $initialPrice - $changedPrice;
        $discount = $diff / $initialPrice * 100;

        return ($initialPrice <= $changedPrice ? '+' : '-') . round($discount) . '%';
    }
}