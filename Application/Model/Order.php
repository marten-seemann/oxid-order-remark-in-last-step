<?php
namespace SeemannIT\OrderRemarkInLastStepModule\Application\Model;

class Order extends Order_parent {
  public function finalizeOrder(\OxidEsales\Eshop\Application\Model\Basket $oBasket, $oUser, $blRecalculatingOrder = false) {
    $sOrderRemark = \OxidEsales\Eshop\Core\Registry::getConfig()->getRequestParameter('order_remark', true);
    \OxidEsales\Eshop\Core\Registry::getSession()->setVariable('ordrem', $sOrderRemark);

    return parent::finalizeOrder($oBasket, $oUser, $blRecalculatingOrder);
  }
}
