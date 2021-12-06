<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\OrderSD\ServiceType;

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
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Api\OrderSD\ServiceType\Search
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named searchSupplierCcCard
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\SearchSupplierCcCardRequest $paramSearchSupplierCcCardRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\SearchSupplierCcCardResponse|bool
     */
    public function searchSupplierCcCard(\Pggns\MidocoApi\Api\OrderSD\StructType\SearchSupplierCcCardRequest $paramSearchSupplierCcCardRequest)
    {
        try {
            $this->setResult($resultSearchSupplierCcCard = $this->getSoapClient()->__soapCall('searchSupplierCcCard', [
                $paramSearchSupplierCcCardRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchSupplierCcCard;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchSupplierAccountAssign
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\SearchSupplierAccountAssignRequest $paramSearchSupplierAccountAssignRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\SearchSupplierAccountAssignResponse|bool
     */
    public function searchSupplierAccountAssign(\Pggns\MidocoApi\Api\OrderSD\StructType\SearchSupplierAccountAssignRequest $paramSearchSupplierAccountAssignRequest)
    {
        try {
            $this->setResult($resultSearchSupplierAccountAssign = $this->getSoapClient()->__soapCall('searchSupplierAccountAssign', [
                $paramSearchSupplierAccountAssignRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchSupplierAccountAssign;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchSupplierDocumentShipping
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\SearchSupplierDocumentShippingRequest $paramSearchSupplierDocumentShippingRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\SearchSupplierDocumentShippingResponse|bool
     */
    public function searchSupplierDocumentShipping(\Pggns\MidocoApi\Api\OrderSD\StructType\SearchSupplierDocumentShippingRequest $paramSearchSupplierDocumentShippingRequest)
    {
        try {
            $this->setResult($resultSearchSupplierDocumentShipping = $this->getSoapClient()->__soapCall('searchSupplierDocumentShipping', [
                $paramSearchSupplierDocumentShippingRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchSupplierDocumentShipping;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchSupplierPaymentCondition
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\SearchSupplierPaymentConditionRequest $paramSearchSupplierPaymentConditionRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\SearchSupplierPaymentConditionResponse|bool
     */
    public function searchSupplierPaymentCondition(\Pggns\MidocoApi\Api\OrderSD\StructType\SearchSupplierPaymentConditionRequest $paramSearchSupplierPaymentConditionRequest)
    {
        try {
            $this->setResult($resultSearchSupplierPaymentCondition = $this->getSoapClient()->__soapCall('searchSupplierPaymentCondition', [
                $paramSearchSupplierPaymentConditionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchSupplierPaymentCondition;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchAccount
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\SearchAccountRequest $paramSearchAccountRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\SearchAccountResponse|bool
     */
    public function searchAccount(\Pggns\MidocoApi\Api\OrderSD\StructType\SearchAccountRequest $paramSearchAccountRequest)
    {
        try {
            $this->setResult($resultSearchAccount = $this->getSoapClient()->__soapCall('searchAccount', [
                $paramSearchAccountRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchAccount;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchMediatorConditions
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\SearchMediatorConditionRequest $paramSearchMediatorConditionRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\SearchMediatorConditionResponse|bool
     */
    public function searchMediatorConditions(\Pggns\MidocoApi\Api\OrderSD\StructType\SearchMediatorConditionRequest $paramSearchMediatorConditionRequest)
    {
        try {
            $this->setResult($resultSearchMediatorConditions = $this->getSoapClient()->__soapCall('searchMediatorConditions', [
                $paramSearchMediatorConditionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchMediatorConditions;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchMediatorTypes
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\SearchMediatorTypeRequest $paramSearchMediatorTypeRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\SearchMediatorTypeResponse|bool
     */
    public function searchMediatorTypes(\Pggns\MidocoApi\Api\OrderSD\StructType\SearchMediatorTypeRequest $paramSearchMediatorTypeRequest)
    {
        try {
            $this->setResult($resultSearchMediatorTypes = $this->getSoapClient()->__soapCall('searchMediatorTypes', [
                $paramSearchMediatorTypeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchMediatorTypes;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchBankAccount
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\SearchBankAccountRequest $paramSearchBankAccountRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\SearchBankAccountResponse|bool
     */
    public function searchBankAccount(\Pggns\MidocoApi\Api\OrderSD\StructType\SearchBankAccountRequest $paramSearchBankAccountRequest)
    {
        try {
            $this->setResult($resultSearchBankAccount = $this->getSoapClient()->__soapCall('searchBankAccount', [
                $paramSearchBankAccountRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchBankAccount;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchCurrencyRates
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\SearchCurrencyRatesRequest $paramSearchCurrencyRatesRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\SearchCurrencyRatesResponse|bool
     */
    public function searchCurrencyRates(\Pggns\MidocoApi\Api\OrderSD\StructType\SearchCurrencyRatesRequest $paramSearchCurrencyRatesRequest)
    {
        try {
            $this->setResult($resultSearchCurrencyRates = $this->getSoapClient()->__soapCall('searchCurrencyRates', [
                $paramSearchCurrencyRatesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchCurrencyRates;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchSupplierSettlementDiff
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\SearchSupplierSettlementDiffRequest $paramSearchSupplierSettlementDiffRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\SearchSupplierSettlementDiffResponse|bool
     */
    public function searchSupplierSettlementDiff(\Pggns\MidocoApi\Api\OrderSD\StructType\SearchSupplierSettlementDiffRequest $paramSearchSupplierSettlementDiffRequest)
    {
        try {
            $this->setResult($resultSearchSupplierSettlementDiff = $this->getSoapClient()->__soapCall('searchSupplierSettlementDiff', [
                $paramSearchSupplierSettlementDiffRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchSupplierSettlementDiff;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * searchSupplierSettlPaymentCondition
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\SearchSupplierSettlPaymentConditionRequest $paramSearchSupplierSettlPaymentConditionRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\SearchSupplierSettlPaymentConditionResponse|bool
     */
    public function searchSupplierSettlPaymentCondition(\Pggns\MidocoApi\Api\OrderSD\StructType\SearchSupplierSettlPaymentConditionRequest $paramSearchSupplierSettlPaymentConditionRequest)
    {
        try {
            $this->setResult($resultSearchSupplierSettlPaymentCondition = $this->getSoapClient()->__soapCall('searchSupplierSettlPaymentCondition', [
                $paramSearchSupplierSettlPaymentConditionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchSupplierSettlPaymentCondition;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\SearchAccountResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\SearchBankAccountResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\SearchCurrencyRatesResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\SearchMediatorConditionResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\SearchMediatorTypeResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\SearchSupplierAccountAssignResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\SearchSupplierCcCardResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\SearchSupplierDocumentShippingResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\SearchSupplierPaymentConditionResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\SearchSupplierSettlementDiffResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\SearchSupplierSettlPaymentConditionResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
