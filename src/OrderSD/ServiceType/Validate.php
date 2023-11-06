<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Validate ServiceType
 * @subpackage Services
 */
class Validate extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Pggns\MidocoApi\OrderSD\ServiceType\Validate
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named validatePremiumRule
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\ValidatePremiumRuleContentRequest $paramValidatePremiumRuleContentRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\ValidatePremiumRuleContentResponse|bool
     */
    public function validatePremiumRule(\Pggns\MidocoApi\OrderSD\StructType\ValidatePremiumRuleContentRequest $paramValidatePremiumRuleContentRequest)
    {
        try {
            $this->setResult($resultValidatePremiumRule = $this->getSoapClient()->__soapCall('validatePremiumRule', [
                $paramValidatePremiumRuleContentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultValidatePremiumRule;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named validateCompetitionRule
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\ValidateCompetitionRuleContentRequest $paramValidateCompetitionRuleContentRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\ValidateCompetitionRuleContentResponse|bool
     */
    public function validateCompetitionRule(\Pggns\MidocoApi\OrderSD\StructType\ValidateCompetitionRuleContentRequest $paramValidateCompetitionRuleContentRequest)
    {
        try {
            $this->setResult($resultValidateCompetitionRule = $this->getSoapClient()->__soapCall('validateCompetitionRule', [
                $paramValidateCompetitionRuleContentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultValidateCompetitionRule;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named validateSupplierAccess
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\ValidateSupplierAccessRequest $paramValidateSupplierAccessRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\ValidateSupplierAccessResponse|bool
     */
    public function validateSupplierAccess(\Pggns\MidocoApi\OrderSD\StructType\ValidateSupplierAccessRequest $paramValidateSupplierAccessRequest)
    {
        try {
            $this->setResult($resultValidateSupplierAccess = $this->getSoapClient()->__soapCall('validateSupplierAccess', [
                $paramValidateSupplierAccessRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultValidateSupplierAccess;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\OrderSD\StructType\ValidateCompetitionRuleContentResponse|\Pggns\MidocoApi\OrderSD\StructType\ValidatePremiumRuleContentResponse|\Pggns\MidocoApi\OrderSD\StructType\ValidateSupplierAccessResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
