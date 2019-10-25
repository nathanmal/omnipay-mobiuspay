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
   * Get type of transaction
   * @return [type] [description]
   */
  public function getType() 
  {
    return $this->getParameter('type');
  }

  /**
   * Set type of transaction
   * possible values are 'sale', 'auth', 'credit', or 'validate'
   * @param [type] $value [description]
   */
  public function setType( $value )
  {
    return $this->setParameter( 'type', $value );
  }

  /**
   * Get Username
   * @return string
   */
  public function getUsername()
  {
      return $this->getParameter('username');
  }

  /**
   * Set Username
   * @param string $value
   */
  public function setUsername( $value )
  {
      return $this->setParameter( 'username', $value );
  }

  /**
   * Get Password
   * @return string
   */
  public function getPassword()
  {
      return $this->getParameter( 'password' );
  }

  /**
   * Set Password
   * @param string $value
   */
  public function setPassword( $value )
  {
      return $this->setParameter( 'password', $value );
  }

  /**
   * Get the Post URI
   * @return string
   */
  public function getPostUri()
  {
    return $this->getParameter( 'postUri' );
  }

  /**
   * Set the Post URI
   * @param string $value account password
   * @return $this
   */
  public function setPostUri( $value )
  {
    return $this->setParameter( 'postUri', $value );
  }

  /**
   * @return string
   */
  public function getQueryUri()
  {
    return $this->getParameter( 'queryUri' );
  }

  /**
   * @param string $value account password
   * @return $this
   */
  public function setQueryUri( $value )
  {
    return $this->setParameter( 'queryUri', $value );
  }

  /**
   * Get the Order ID
   * @return [type] [description]
   */
  public function getOrderID()
  {
      return $this->getParameter( 'orderid' );
  }

  /**
   * Set the order ID
   * @param [type] $order_id [description]
   */
  public function setOrderID( $order_id )
  {
      return $this->setParameter( 'orderid', $order_id );
  }

  /**
   * Get IP address
   * @return [type] [description]
   */
  public function getIpaddress()
  {
      return $this->getParameter( 'ipaddress' );
  }

  /**
   * Set IP address
   * @param [type] $ip_address [description]
   */
  public function setIpaddress( $ip_address )
  {
      return $this->setParameter( 'ipaddress', $ip_address );
  }

  /**
   * Get email
   * @return [type] [description]
   */
  public function getEmail()
  {
      return $this->getParameter( 'email' );
  }

  /**
   * Set email
   * @param [type] $email [description]
   */
  public function setEmail( $email )
  {
      return $this->setParameter( 'email', $email );
  }




}