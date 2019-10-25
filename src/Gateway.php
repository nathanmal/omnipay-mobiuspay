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
namespace Omnipay\Mobiuspay;

use Omnipay\Common\AbstractGateway;

/**
 * Mobiuspay Omnipay gateway class
 *
 * @author  Nathan Malachowski <nathanmal@gmail.com>
 */
class Gateway extends AbstractGateway
{

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
      return 'MobiusPay';
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultParameters()
    {
      return array(
        'postUri'  => 'https://secure.mobiusgateway.com/api/transact.php',
        'queryUri' => 'https://secure.mobiusgateway.com/api/query.php',
        'type'     => '',
        'username' => '',
        'password' => '',
      );
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->getParameter( 'type' );
    }

    /**
     * @param string $value transaction type
     */
    public function setType( $value )
    {
      return $this->setParameter( 'type', $value );
    }

    /**
     * @return string
     */
    public function getUsername()
    {
      return $this->getParameter( 'username' );
    }

    /**
     * @param string $value account username
     */
    public function setUsername( $value )
    {
      return $this->setParameter( 'username', $value );
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->getParameter( 'password' );
    }

    /**
     * @param string $value account password
     * @return $this
     */
    public function setPassword( $value )
    {
      return $this->setParameter( 'password', $value );
    }

    /**
     * @return string
     */
    public function getPostUri()
    {
      return $this->getParameter( 'postUri' );
    }

    /**
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
     * Get order ID parameter
     * @return [type] [description]
     */
    public function getOrderID()
    {
        return $this->getParameter( 'orderid' );
    }

    /**
     * Set order ID parameter
     * @param [type] $order_id [description]
     */
    public function setOrderID( $order_id )
    {
        return $this->setParameter( 'orderid', $order_id );
    }

    /**
     * Get IP Address parameter
     * @return [type] [description]
     */
    public function getIpaddress()
    {
        return $this->getParameter( 'ipaddress' );
    }

    /**
     * Set IP Address parameter
     * @param [type] $ip_address [description]
     */
    public function setIpaddress( $ip_address )
    {
        return $this->setParameter( 'ipaddress', $ip_address );
    }

    /**
     * Get email parameter
     * @return [type] [description]
     */
    public function getEmail()
    {
        return $this->getParameter( 'email' );
    }

    /**
     * Set email parameter
     * @param [type] $email [description]
     */
    public function setEmail( $email )
    {
        return $this->setParameter( 'email', $email );
    }

    /**
     * Send purchase request 
     * @param  array  $parameters array of options
     * @return \Omnipay\Mobiuspay\Message\PurchaseRequest
     */
    public function purchase( array $parameters = array() )
    { 
      return $this->createRequest('\Omnipay\Mobiuspay\Message\PurchaseRequest', $parameters);
    }





}
