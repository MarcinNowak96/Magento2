<?php

namespace SimpleField\HelloModule\Helper;

use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\App\Helper\AbstractHelper;

class Data extends AbstractHelper
{
    /**
     * @var ScopeConfigInterface
     */
    protected $scopeConfig;

    public function __construct(ScopeConfigInterface $scopeConfig, Context $context)
    {
        parent::__construct($context);
        $this->scopeConfig = $scopeConfig;
    }

    public function getGeneralConfig()
    {
        return $this->scopeConfig->getValue('code/general/enable');
    }
}

