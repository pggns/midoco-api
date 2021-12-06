<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\OrderSD\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Load ServiceType
 * @subpackage Services
 */
class Load extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Api\OrderSD\ServiceType\Load
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named loadOrdTypeValuesAndDescriptions
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetOrdTypeValuesAndDescriptionsRequest $paramGetOrdTypeValuesAndDescriptionsRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetOrdTypeValuesAndDescriptionsResponse|bool
     */
    public function loadOrdTypeValuesAndDescriptions(\Pggns\MidocoApi\Api\OrderSD\StructType\GetOrdTypeValuesAndDescriptionsRequest $paramGetOrdTypeValuesAndDescriptionsRequest)
    {
        try {
            $this->setResult($resultLoadOrdTypeValuesAndDescriptions = $this->getSoapClient()->__soapCall('loadOrdTypeValuesAndDescriptions', [
                $paramGetOrdTypeValuesAndDescriptionsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultLoadOrdTypeValuesAndDescriptions;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetOrdTypeValuesAndDescriptionsResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
