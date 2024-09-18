<?php

namespace Brunoduarte\ModuleCheckoutSuccessMessage\Block;

use Magento\Framework\View\Element\{ Template, Template\Context };

class Success extends Template
{
    public function __construct(Context $context, array $data = [])
    {
        parent::__construct($context, $data);
    }

    public function getSuccessMessage()
    {
        $isEnabled = $this->_scopeConfig->getValue('checkout/options/enable_checkout_success_message');
        if ($isEnabled) {
            $message = $this->_scopeConfig->getValue('checkout/options/checkout_message');
            return $message;
        }
        return '';
    }
}