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

use \Omnipay\Common\Message\AbstractRequest as BaseAbstractRequest;

abstract class AbstractRequest extends BaseAbstractRequest
{

  /**
   * Parse Response String
   * @param RequestInterface $request [description]
   * @param [type]           $data    [description]
   */
  public function __construct( RequestInterface $request, $data )
  {
     $this->request = $request;

     parse_str($data->getBody(), $this->data);
  }


  
}