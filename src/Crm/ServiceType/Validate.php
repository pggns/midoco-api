<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\ServiceType;

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
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Api\Crm\ServiceType\Validate
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named validateDebitorForBilling
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\ValidateDebitorForBillingRequest $paramValidateDebitorForBillingRequest
     * @return \Pggns\MidocoApi\Api\Crm\StructType\ValidateDebitorForBillingResponse|bool
     */
    public function validateDebitorForBilling(\Pggns\MidocoApi\Api\Crm\StructType\ValidateDebitorForBillingRequest $paramValidateDebitorForBillingRequest)
    {
        try {
            $this->setResult($resultValidateDebitorForBilling = $this->getSoapClient()->__soapCall('validateDebitorForBilling', [
                $paramValidateDebitorForBillingRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultValidateDebitorForBilling;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named validateDebitor
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\ValidateDebitorRequest $paramValidateDebitorRequest
     * @return \Pggns\MidocoApi\Api\Crm\StructType\ValidateDebitorResponse|bool
     */
    public function validateDebitor(\Pggns\MidocoApi\Api\Crm\StructType\ValidateDebitorRequest $paramValidateDebitorRequest)
    {
        try {
            $this->setResult($resultValidateDebitor = $this->getSoapClient()->__soapCall('validateDebitor', [
                $paramValidateDebitorRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultValidateDebitor;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named validateDebitCard
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\ValidateDebitCardRequest $paramValidateDebitCardRequest
     * @return \Pggns\MidocoApi\Api\Crm\StructType\ValidateDebitCardResponse|bool
     */
    public function validateDebitCard(\Pggns\MidocoApi\Api\Crm\StructType\ValidateDebitCardRequest $paramValidateDebitCardRequest)
    {
        try {
            $this->setResult($resultValidateDebitCard = $this->getSoapClient()->__soapCall('validateDebitCard', [
                $paramValidateDebitCardRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultValidateDebitCard;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named validateCreditCard
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\ValidateCreditCardRequest $paramValidateCreditCardRequest
     * @return \Pggns\MidocoApi\Api\Crm\StructType\ValidateCreditCardResponse|bool
     */
    public function validateCreditCard(\Pggns\MidocoApi\Api\Crm\StructType\ValidateCreditCardRequest $paramValidateCreditCardRequest)
    {
        try {
            $this->setResult($resultValidateCreditCard = $this->getSoapClient()->__soapCall('validateCreditCard', [
                $paramValidateCreditCardRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultValidateCreditCard;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named validateUstId
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\ValidateUstIdRequest $paramValidateUstIdRequest
     * @return \Pggns\MidocoApi\Api\Crm\StructType\ValidateUstIdResponse|bool
     */
    public function validateUstId(\Pggns\MidocoApi\Api\Crm\StructType\ValidateUstIdRequest $paramValidateUstIdRequest)
    {
        try {
            $this->setResult($resultValidateUstId = $this->getSoapClient()->__soapCall('validateUstId', [
                $paramValidateUstIdRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultValidateUstId;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Api\Crm\StructType\ValidateCreditCardResponse|\Pggns\MidocoApi\Api\Crm\StructType\ValidateDebitCardResponse|\Pggns\MidocoApi\Api\Crm\StructType\ValidateDebitorForBillingResponse|\Pggns\MidocoApi\Api\Crm\StructType\ValidateDebitorResponse|\Pggns\MidocoApi\Api\Crm\StructType\ValidateUstIdResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
