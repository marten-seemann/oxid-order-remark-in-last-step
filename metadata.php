<?php
/**
 * Metadata version
 */

$sMetadataVersion = '2.0';

$aModule = array(
    'id'           => 'orderremarkinlaststep',
    'title'        => [
        'en' => 'Order Remark in last Order Step',
        'de' => 'Bestellmitteilung im letzten Bestellschritt',
    ],
    'description'  => [
    ],
    'version'      => '1.0',
    'author'       => 'Marten Seemann',
   
    'url'          => 'https://www.oxid-responsive.com/',
    'extend' => [
        \OxidEsales\Eshop\Application\Model\Order::class => SeemannIT\OrderRemarkInLastStepModule\Application\Model\Order::class,
    ],
);
