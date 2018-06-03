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

use Omnipay\Common\Message\AbstractResponse;
use Omnipay\Common\Message\RequestInterface;

class PurchaseResponse extends AbstractResponse 
{ 
  /**
   * {@inheritdoc}
   */
  public function isSuccessful()
  {
    return isset($this->data['response']) && $this->data['response'] == 1;
  }
}