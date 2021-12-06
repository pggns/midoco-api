<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\ServiceType;

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
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\CrmSD\ServiceType\Load
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\CrmSD\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named loadTypeValuesAndDescriptions
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\CrmSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\CrmSD\StructType\GetTypeValuesAndDescriptionsRequest $paramGetTypeValuesAndDescriptionsRequest
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetTypeValuesAndDescriptionsResponse|bool
     */
    public function loadTypeValuesAndDescriptions(\Pggns\MidocoApi\CrmSD\StructType\GetTypeValuesAndDescriptionsRequest $paramGetTypeValuesAndDescriptionsRequest)
    {
        try {
            $this->setResult($resultLoadTypeValuesAndDescriptions = $this->getSoapClient()->__soapCall('loadTypeValuesAndDescriptions', [
                $paramGetTypeValuesAndDescriptionsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultLoadTypeValuesAndDescriptions;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetTypeValuesAndDescriptionsResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
