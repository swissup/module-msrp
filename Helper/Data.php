<?php

namespace Swissup\Msrp\Helper;

use Magento\Store\Model\ScopeInterface;
use Magento\Framework\App\Helper\Context;
use Magento\Framework\App\Helper\AbstractHelper;

class Data extends AbstractHelper
{
    /**
     * Path to store config is module enabled
     *
     * @var string
     */
    const XML_PATH_ENABLED = 'swissup_msrp/general/enabled';

    /**
     * Constructor
     *
     * @param Context $context
     */
    public function __construct(
        Context $context
    ) {
        parent::__construct($context);
    }

    /**
     * Get config value by key
     * @param  string $key
     * @return mixed
     */
    public function getConfig($key)
    {
        return $this->scopeConfig->getValue($key, ScopeInterface::SCOPE_STORE);
    }

    /**
     * Check if module is enabled
     * @return boolean
     */
    public function isEnabled()
    {
        return (bool)$this->getConfig(self::XML_PATH_ENABLED);
    }
}
