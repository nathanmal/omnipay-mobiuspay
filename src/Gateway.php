<?php 

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



    public function getDefaultParameters()
    {
      return array(
        'accountNumber' => '',
        'username' => 'demo',
        'password' => 'password',
        'testMode' => TRUE,
        'endpoint' => 'https://secure.mobiusgateway.com/api/transact.php',
      );
    }






}
