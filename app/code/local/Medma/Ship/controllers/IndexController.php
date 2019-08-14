<?php
class Medma_Ship_IndexController extends Mage_Core_Controller_Front_Action
{
    public function shippingAction()
	{
		$orderId     		= $this->getRequest()->getParam('order_id');
		$customShipTitle	= Mage::getStoreConfig('carriers/medma/title');
		$order = Mage::getModel('sales/order')->load($orderId);//print_r($order);
		#$setShipment = $order->setShippingMethod('excellence_excellence')->setShippingDescription($customShipTitle)->save();
		$setShipment = $order->setShippingDescription($customShipTitle)->save();
		$this->_redirectReferer('');
	}
}
