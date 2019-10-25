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

use Guzzle\Http\Exception\BadResponseException;
use Omnipay\Common\CreditCard;
use Omnipay\Common\Exception\InvalidRequestException;
use Omnipay\Mobiuspay\Message\AbstractRequest;
use Omnipay\Mobiuspay\Message\PurchaseResponse;


class PurchaseRequest extends AbstractRequest
{

  /**
   * Get Request Data
   * @return array
   */
  public function getData()
  {  
    $this->validate('type','amount','username','password','card');

    $data = array();

    $data['type']     = $this->getType();
    $data['username'] = $this->getUsername();
    $data['password'] = $this->getPassword();
    $data['amount']   = $this->getAmount();
    $data['currency'] = $this->getCurrency();

    $card = $this->getCard();

    $card->validate();

    $month = (string) $card->getExpiryDate('m');
    $year  = (string) $card->getExpiryYear('y');

    if( strlen($year) == 4 ) {
      $year = substr($year, 2);
    }

    $data['ccnumber']  = $card->getNumber();
    $data['ccexp']     = $month . $year;
    $data['cvv']       = $card->getCvv();
    
    $data['orderid']   = $this->getOrderId();
    $data['ipaddress'] = $this->getIpaddress();
    $data['email']     = $this->getEmail();

    return $data;

  }

  /**
   * Send Request Data
   * @param  array $data 
   * @return Omnipay\Mobiuspay\Message\PurchaseResponse
   */
  public function sendData( $data )
  {
      try {

        $headers = array('Content-Type' => 'application/x-www-form-urlencoded');
        $query   = http_build_query($data);
        $uri     = $this->getPostUri();

        $response = $this->httpClient->request('POST', $uri, $headers, $query);

      } 
      catch ( BadResponseException $e ) 
      {
        $response = $e->getResponse();
      }

      return new PurchaseResponse($this, $response);
   }


}