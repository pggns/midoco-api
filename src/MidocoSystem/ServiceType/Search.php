<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Search ServiceType
 * @subpackage Services
 */
class Search extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Pggns\MidocoApi\MidocoSystem\ServiceType\Search
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\MidocoSystem\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named searchAttributeLocalization
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\MidocoSystem\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\SearchMidocoAttributeLocalizationRequest $paramSearchMidocoAttributeLocalizationRequest
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\SearchMidocoAttributeLocalizationResponse|bool
     */
    public function searchAttributeLocalization(\Pggns\MidocoApi\MidocoSystem\StructType\SearchMidocoAttributeLocalizationRequest $paramSearchMidocoAttributeLocalizationRequest)
    {
        try {
            $this->setResult($resultSearchAttributeLocalization = $this->getSoapClient()->__soapCall('searchAttributeLocalization', [
                $paramSearchMidocoAttributeLocalizationRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchAttributeLocalization;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchAttributeChoiceValue
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\MidocoSystem\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\SearchMidocoAttributeChoiceValueRequest $paramSearchMidocoAttributeChoiceValueRequest
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\SearchMidocoAttributeChoiceValueResponse|bool
     */
    public function searchAttributeChoiceValue(\Pggns\MidocoApi\MidocoSystem\StructType\SearchMidocoAttributeChoiceValueRequest $paramSearchMidocoAttributeChoiceValueRequest)
    {
        try {
            $this->setResult($resultSearchAttributeChoiceValue = $this->getSoapClient()->__soapCall('searchAttributeChoiceValue', [
                $paramSearchMidocoAttributeChoiceValueRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchAttributeChoiceValue;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\SearchMidocoAttributeChoiceValueResponse|\Pggns\MidocoApi\MidocoSystem\StructType\SearchMidocoAttributeLocalizationResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
