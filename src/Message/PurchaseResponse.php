<?php 


/**
 * MobiusPay Driver for Omnipay PHP payment processing library
 * https://mobiuspay.com/
 *
 * Latest driver release:
 * https://github.com/nathanmal/omnipay-mobiuspay
 *
 * 
 */

namespace Omnipay\Mobiuspay\Message;

use Omnipay\Mobiuspay\Message\AbstractResponse;
use Omnipay\Common\Message\RequestInterface;

class PurchaseResponse extends AbstractResponse 
{ 
  /**
   * {@inheritdoc}
   */
  public function isSuccessful()
  {
    $response = $this->getResponseData('response');

    return intval($response) === 1;
  }


  public function getResponseText()
  {
    return $this->getResponseData('responsetext');
  }


  public function getTransactionId()
  {
    return $this->getResponseData('transactionid');
  }


}