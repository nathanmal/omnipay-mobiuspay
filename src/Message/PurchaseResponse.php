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
  protected $responseCodes = array(
    '100' => 'Transaction was approved.',
    '200' => 'Transaction was declined by processor. ',
    '201' => 'Do not honor.',
    '202' => 'Insufficient funds.',
    '203' => 'Over limit.',
    '204' => 'Transaction not allowed.',
    '220' => 'Incorrect payment information.',
    '221' => 'No such card issuer.',
    '222' => 'No card number on file with issuer. ',
    '223' => 'Expired card.',
    '224' => 'Invalid expiration date.',
    '225' => 'Invalid card security code.',
    '240' => 'Call issuer for further information.',
    '250' => 'Pick up card.',
    '251' => 'Lost card.',
    '252' => 'Stolen card.',
    '253' => 'Fraudulent card.',
    '260' => 'Declined with further instructions available. (See response text) ',
    '261' => 'Declined-Stop all recurring payments.',
    '262' => 'Declined-Stop this recurring program.',
    '263' => 'Declined-Update cardholder data available.',
    '264' => 'Declined-Retry in a few days.',
    '300' => 'Transaction was rejected by gateway.',
    '400' => 'Transaction error returned by processor.',
    '410' => 'Invalid merchant configuration.',
    '411' => 'Merchant account is inactive.',
    '420' => 'Communication error.',
    '421' => 'Communication error with issuer.',
    '430' => 'Duplicate transaction at processor.',
    '440' => 'Processor format error.',
    '441' => 'Invalid transaction information.',
    '460' => 'Processor feature not available.',
    '461' => 'Unsupported card type.'
  );

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

  public function getResponseCode()
  {
    return $this->getResponseData('response_code');
  }

  public function getAuthCode()
  {
    return $this->getResponseData('authcode');
  }

  public function getResponseCodeMessage( $code )
  {
    return isset($this->responseCodes[$code]) ? $this->responseCode[$code] : '';
  }





}