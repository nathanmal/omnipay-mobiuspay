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

use Omnipay\Common\Message\AbstractResponse as BaseAbstractResponse;
use Omnipay\Mobiuspay\Message\PurchaseRequest;

abstract class AbstractResponse extends BaseAbstractResponse
{

  protected $responseData = array();


  /**
   * Parse Response String
   * @param RequestInterface $request [description]
   * @param [type]           $data    [description]
   */
  public function __construct( PurchaseRequest $request, $data )
  {
     $this->request = $request;

     // Parse data body
     parse_str($data->getBody(), $this->responseData);

  }

  /**
   * Get the response data
   * @return [type] [description]
   */
  public function getResponseData( $item = NULL )
  {
    if( empty($item) ) return $this->responseData;

    return isset($this->responseData[$item]) ? $this->responseData[$item] : NULL;
  }




  
}