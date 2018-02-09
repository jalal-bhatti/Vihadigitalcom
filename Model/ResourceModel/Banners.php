<?php

namespace Vihadigitalcom\Banners\Model\ResourceModel;

class Banners extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
        
        
           
    protected function _construct()
    {
        $this->_init('vihadigitalcom_banners', 'banners_id');
    }
}
