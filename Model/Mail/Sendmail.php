<?php

namespace Dotdigitalgroup\Email\Model\Mail;

use Magento\Framework\App\ObjectManager;

class Sendmail extends \Zend_Mail_Transport_Sendmail
{
    public function __construct($parameters = null)
    {
        if ($parameters instanceof ObjectManager) {
            parent::__construct();
        } else {
            parent::__construct($parameters);
        }
    }

}