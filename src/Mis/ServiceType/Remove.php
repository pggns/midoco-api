<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Mis\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Remove ServiceType
 * @subpackage Services
 */
class Remove extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Api\Mis\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Api\Mis\ServiceType\Remove
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Api\Mis\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named removeNonReachableWS
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Mis\StructType\RemoveNonReachableWSRequest $paramRemoveNonReachableWSRequest
     * @return \Pggns\MidocoApi\Api\Mis\StructType\RemoveNonReachableWSResponse|bool
     */
    public function removeNonReachableWS(\Pggns\MidocoApi\Api\Mis\StructType\RemoveNonReachableWSRequest $paramRemoveNonReachableWSRequest)
    {
        try {
            $this->setResult($resultRemoveNonReachableWS = $this->getSoapClient()->__soapCall('removeNonReachableWS', [
                $paramRemoveNonReachableWSRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveNonReachableWS;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Api\Mis\StructType\RemoveNonReachableWSResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
