<?php

namespace Cardinity\Payments\Block;

class AuthBlock extends \Magento\Framework\View\Element\Template
{
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Framework\ObjectManagerInterface $objectManager,
        array $data = []
    ) {
        parent::__construct(
            $context,
            $data
        );

        $this->_urlBuilder = $context->getUrlBuilder();
        $this->_objectManager = $objectManager;
    }

    public function getAuthUrl()
    {
        return $this->_getAuthModel()->getUrl();
    }

    public function getAuthData()
    {
        return $this->_getAuthModel()->getData();
    }

    public function getRealOrderId()
    {
        return $this->_getAuthModel()->getRealOrderId();
    }

    public function getCallbackUrl()
    {
        return $this->_urlBuilder->getUrl('cardinity/payment/callback', ['_secure' => true]);
    }

    private function _getAuthModel()
    {
        return $this->_objectManager->create('Cardinity\Payments\Model\AuthModel');
    }
}