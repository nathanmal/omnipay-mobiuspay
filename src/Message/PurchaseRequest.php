<?php 

/**
 * MobiusPay Driver for Omnipay PHP payment processing library
 * https://mobiuspay.com/
 *
 * Latest driver release:
 * https://github.com/nathanmal/omnipay-mobiuspay
 *
 * valid types: 'sale', 'auth', 'credit', or 'validate'
 * 
 */

namespace Omnipay\Mobiuspay\Message;

use Omnipay\Common\CreditCard;
use Omnipay\Common\Exception\InvalidRequestException;
use Guzzle\Http\Exception\BadResponseException;


class PurchaseRequest extends AbstractRequest
{

   public function getData()
   {  
      $this->validate('amount','card');

      $data = array();

      $data['type'] = $this->getType();

      $data['amount'] = $this->getAmount();

      $data['currency'] = $this->getCurrency();

      return $data;

   }


  public function sendData( $data )
   {
      /*
      var_dump($this->httpClient);
      $class = get_class($this->httpClient);
      echo 'methods for ' . $class . PHP_EOL;
      $methods = get_class_methods($class);
      print_r($methods);
      exit(0);
*/
      var_dump($data);


      try {

        $method  = 'POST';
        $url     = $this->getPostUri();
        $data    = http_build_query($data);
        $headers = array('Content-Type' => 'application/x-www-form-urlencoded');

        $response = $this->httpClient->request($method, $url, $headers, $data);
        // $response = $this->httpClient->post($this->transactURL, array(), $data)->send();
      } catch ( BadResponseException $e ) {
        $response = $e->getResponse();
      }

      return new PurchaseResponse($this, $response);


   }


}