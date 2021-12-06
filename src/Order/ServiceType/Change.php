<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Change ServiceType
 * @subpackage Services
 */
class Change extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Api\Order\ServiceType\Change
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named changeSellItemCreationUser
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\ChangeSellItemCreationUserRequest $paramChangeSellItemCreationUserRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\ChangeSellItemCreationUserResponse|bool
     */
    public function changeSellItemCreationUser(\Pggns\MidocoApi\Api\Order\StructType\ChangeSellItemCreationUserRequest $paramChangeSellItemCreationUserRequest)
    {
        try {
            $this->setResult($resultChangeSellItemCreationUser = $this->getSoapClient()->__soapCall('changeSellItemCreationUser', [
                $paramChangeSellItemCreationUserRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultChangeSellItemCreationUser;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named changeOrderCreationUser
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\ChangeOrderCreationUserRequest $paramChangeOrderCreationUserRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\ChangeOrderCreationUserResponse|bool
     */
    public function changeOrderCreationUser(\Pggns\MidocoApi\Api\Order\StructType\ChangeOrderCreationUserRequest $paramChangeOrderCreationUserRequest)
    {
        try {
            $this->setResult($resultChangeOrderCreationUser = $this->getSoapClient()->__soapCall('changeOrderCreationUser', [
                $paramChangeOrderCreationUserRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultChangeOrderCreationUser;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Api\Order\StructType\ChangeOrderCreationUserResponse|\Pggns\MidocoApi\Api\Order\StructType\ChangeSellItemCreationUserResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
