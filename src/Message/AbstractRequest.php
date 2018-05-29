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

\Omnipay\Common\Message\AbstractRequest as BaseAbstractRequest;

abstract class AbstractRequest extends BaseAbstractRequest
{



  public function getType() 
  {
    return $this->getParameter('type');
  }

  public function setType( $value )
  {
    return $this->setParameter( 'type', $value );
  }

  public function getUsername()
  {
      return $this->getParameter('username');
  }

  public function setUsername( $value )
  {
      return $this->setParameter( 'username', $value );
  }

  public function getPassword()
  {
      return $this->getParameter( 'password' );
  }

  public function setPassword( $value )
  {
      return $this->setParameter( 'password', $value );
  }



}