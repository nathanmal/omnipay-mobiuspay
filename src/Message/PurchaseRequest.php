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

use Omnipay\Common\Message\AbstractRequest;
use Omnipay\Common\CreditCard;
use Omnipay\Common\Exception\InvalidRequestException;
use Guzzle\Http\Exception\BadResponseException;


class PurchaseRequest extends AbstractRequest
{

    


}