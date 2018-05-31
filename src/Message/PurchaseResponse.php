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
   * Parse Response String
   * @param RequestInterface $request [description]
   * @param [type]           $data    [description]
   */
  public function __construct( RequestInterface $request, $data )
  {
     $this->request = $request;

     print_r($request->getConfig());

     parse_str($data->getBody(), $this->data);
  }

  /**
   * {@inheritdoc}
   */
  public function isSuccessful()
  {
    return isset($this->data['response']) && $this->data['response'] == 1;
  }
}