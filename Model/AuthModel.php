<?php

namespace Cardinity\Magento\Model;

class AuthModel
{
    public function __construct(
        \Magento\Checkout\Model\Session $checkoutSession
    )
    {
        $this->_checkoutSession = $checkoutSession;
    }

    public function setData($data)
    {
        $this->_getSession()->setData('crd_auth_data', $data);
    }

    public function getData()
    {
        return $this->_getSession()->getData('crd_auth_data');
    }

    public function setUrl($url)
    {
        $this->_getSession()->setData('crd_auth_url', $url);
    }

    public function getUrl()
    {
        return $this->_getSession()->getData('crd_auth_url');
    }

    public function setPaymentId($paymentId)
    {
        $this->_getSession()->setData('crd_payment_id', $paymentId);
    }

    public function getPaymentId()
    {
        return $this->_getSession()->getData('crd_payment_id');
    }

    public function setOrderId($orderId)
    {
        $this->_getSession()->setData('crd_order_id', $orderId);
    }

    public function getOrderId()
    {
        return $this->_getSession()->getData('crd_order_id');
    }

    public function setRealOrderId($orderId)
    {
        $this->_getSession()->setData('crd_real_order_id', $orderId);
    }

    public function getRealOrderId()
    {
        return $this->_getSession()->getData('crd_real_order_id');
    }

    public function setSuccess($success)
    {
        $this->_getSession()->setData('crd_success', $success);
    }

    public function getSuccess()
    {
        return $this->_getSession()->getData('crd_success');
    }

    public function setFailure($success)
    {
        $this->_getSession()->setData('crd_failure', $success);
    }

    public function getFailure()
    {
        return $this->_getSession()->getData('crd_failure');
    }

    public function setThreeDSecureNeeded($needed)
    {
        $this->_getSession()->setData('crd_3ds_needed', $needed);
    }

    public function getThreeDSecureNeeded()
    {
        return $this->_getSession()->getData('crd_3ds_needed');
    }


    /* added for v2*/
    public function setThreeDSecureV2Needed($needed)
    {
        $this->_getSession()->setData('crd_3dsv2_needed', $needed);
    }

    public function getThreeDSecureV2Needed()
    {
        return $this->_getSession()->getData('crd_3dsv2_needed');
    }


     /* added for transaction history*/
     public function setThreeDSecureVHistory($needed)
     {
         $this->_getSession()->setData('crd_3dsv_history', $needed);
     }
 
     public function getThreeDSecureVHistory()
     {
         return $this->_getSession()->getData('crd_3dsv_history');
     }

    /**
     * Cleanup data
     */
    public function cleanup()
    {
        $this->_getSession()->setData('crd_auth_data', null);
        $this->_getSession()->setData('crd_auth_url', null);
        $this->_getSession()->setData('crd_payment_id', null);
        $this->_getSession()->setData('crd_order_id', null);
        $this->_getSession()->setData('crd_real_order_id', null);
        $this->_getSession()->setData('crd_3ds_needed', null);
        $this->_getSession()->setData('crd_3dsv2_needed', null);
        $this->_getSession()->setData('crd_3dsv_history', null);
        $this->_getSession()->setData('crd_success', null);
        $this->_getSession()->setData('crd_failure', null);
        
    }

    private function _getSession()
    {
        return $this->_checkoutSession;
    }
}
