<?php

namespace Cardinity\Magento\Controller\Payment;

class Auth extends \Cardinity\Magento\Controller\Payment
{
    public function execute()
    {
        $authModel = $this->_getAuthModel();

        if ($authModel && ($authModel->getThreeDSecureNeeded() )) {
            return $this->_pageFactory->create();
        }else {
            $this->_setMessage(__('Invalid auth request.'), 'error');
            $authModel->cleanup();

            $this->_forceRedirect('checkout');
        }
    }
}
