<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\OrderSD\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Api\OrderSD\ServiceType\Get
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named getAvailableSuppliers
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetAvailableSupplierRequest $paramGetAvailableSupplierRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetAvailableSupplierResponse|bool
     */
    public function getAvailableSuppliers(\Pggns\MidocoApi\Api\OrderSD\StructType\GetAvailableSupplierRequest $paramGetAvailableSupplierRequest)
    {
        try {
            $this->setResult($resultGetAvailableSuppliers = $this->getSoapClient()->__soapCall('getAvailableSuppliers', [
                $paramGetAvailableSupplierRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAvailableSuppliers;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAvailableSupplierAddresses
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierAddressRequest $paramGetSupplierAddressRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierAddressResponse|bool
     */
    public function getAvailableSupplierAddresses(\Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierAddressRequest $paramGetSupplierAddressRequest)
    {
        try {
            $this->setResult($resultGetAvailableSupplierAddresses = $this->getSoapClient()->__soapCall('getAvailableSupplierAddresses', [
                $paramGetSupplierAddressRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAvailableSupplierAddresses;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAvailableSupplierCcCard
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierCcCardRequest $paramGetSupplierCcCardRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierCcCardResponse|bool
     */
    public function getAvailableSupplierCcCard(\Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierCcCardRequest $paramGetSupplierCcCardRequest)
    {
        try {
            $this->setResult($resultGetAvailableSupplierCcCard = $this->getSoapClient()->__soapCall('getAvailableSupplierCcCard', [
                $paramGetSupplierCcCardRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAvailableSupplierCcCard;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAvailableSupplierAccountAssign
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierAccountAssignRequest $paramGetSupplierAccountAssignRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierAccountAssignResponse|bool
     */
    public function getAvailableSupplierAccountAssign(\Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierAccountAssignRequest $paramGetSupplierAccountAssignRequest)
    {
        try {
            $this->setResult($resultGetAvailableSupplierAccountAssign = $this->getSoapClient()->__soapCall('getAvailableSupplierAccountAssign', [
                $paramGetSupplierAccountAssignRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAvailableSupplierAccountAssign;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * getAvailableSupplierDocumentShipping
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierDocumentShippingRequest $paramGetSupplierDocumentShippingRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierDocumentShippingResponse|bool
     */
    public function getAvailableSupplierDocumentShipping(\Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierDocumentShippingRequest $paramGetSupplierDocumentShippingRequest)
    {
        try {
            $this->setResult($resultGetAvailableSupplierDocumentShipping = $this->getSoapClient()->__soapCall('getAvailableSupplierDocumentShipping', [
                $paramGetSupplierDocumentShippingRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAvailableSupplierDocumentShipping;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * getAvailableSupplierPaymentCondition
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierPaymentConditionRequest $paramGetSupplierPaymentConditionRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierPaymentConditionResponse|bool
     */
    public function getAvailableSupplierPaymentCondition(\Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierPaymentConditionRequest $paramGetSupplierPaymentConditionRequest)
    {
        try {
            $this->setResult($resultGetAvailableSupplierPaymentCondition = $this->getSoapClient()->__soapCall('getAvailableSupplierPaymentCondition', [
                $paramGetSupplierPaymentConditionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAvailableSupplierPaymentCondition;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * getAvailableSupplierCancelCondition
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierCancelConditionRequest $paramGetSupplierCancelConditionRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierCancelConditionResponse|bool
     */
    public function getAvailableSupplierCancelCondition(\Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierCancelConditionRequest $paramGetSupplierCancelConditionRequest)
    {
        try {
            $this->setResult($resultGetAvailableSupplierCancelCondition = $this->getSoapClient()->__soapCall('getAvailableSupplierCancelCondition', [
                $paramGetSupplierCancelConditionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAvailableSupplierCancelCondition;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAssignedSuppCancelCMapping
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetAssignedSuppCancelCMappingRequest $paramGetAssignedSuppCancelCMappingRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetAssignedSuppCancelCMappingResponse|bool
     */
    public function getAssignedSuppCancelCMapping(\Pggns\MidocoApi\Api\OrderSD\StructType\GetAssignedSuppCancelCMappingRequest $paramGetAssignedSuppCancelCMappingRequest)
    {
        try {
            $this->setResult($resultGetAssignedSuppCancelCMapping = $this->getSoapClient()->__soapCall('getAssignedSuppCancelCMapping', [
                $paramGetAssignedSuppCancelCMappingRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAssignedSuppCancelCMapping;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSuppCancelCMapping
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetSuppCancelCMappingRequest $paramGetSuppCancelCMappingRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetSuppCancelCMappingResponse|bool
     */
    public function getSuppCancelCMapping(\Pggns\MidocoApi\Api\OrderSD\StructType\GetSuppCancelCMappingRequest $paramGetSuppCancelCMappingRequest)
    {
        try {
            $this->setResult($resultGetSuppCancelCMapping = $this->getSoapClient()->__soapCall('getSuppCancelCMapping', [
                $paramGetSuppCancelCMappingRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSuppCancelCMapping;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSuppCancelCEmail
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetSuppCancelCEmailRequest $paramGetSuppCancelCEmailRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetSuppCancelCEmailResponse|bool
     */
    public function getSuppCancelCEmail(\Pggns\MidocoApi\Api\OrderSD\StructType\GetSuppCancelCEmailRequest $paramGetSuppCancelCEmailRequest)
    {
        try {
            $this->setResult($resultGetSuppCancelCEmail = $this->getSoapClient()->__soapCall('getSuppCancelCEmail', [
                $paramGetSuppCancelCEmailRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSuppCancelCEmail;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSupplierPaymentCondition
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetSpecifiedSupplierPaymentConditionRequest $paramGetSpecifiedSupplierPaymentConditionRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetSpecifiedSupplierPaymentConditionResponse|bool
     */
    public function getSupplierPaymentCondition(\Pggns\MidocoApi\Api\OrderSD\StructType\GetSpecifiedSupplierPaymentConditionRequest $paramGetSpecifiedSupplierPaymentConditionRequest)
    {
        try {
            $this->setResult($resultGetSupplierPaymentCondition = $this->getSoapClient()->__soapCall('getSupplierPaymentCondition', [
                $paramGetSpecifiedSupplierPaymentConditionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSupplierPaymentCondition;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAvailableAccounts
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetAvailableAccountsRequest $paramGetAvailableAccountsRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetAvailableAccountsResponse|bool
     */
    public function getAvailableAccounts(\Pggns\MidocoApi\Api\OrderSD\StructType\GetAvailableAccountsRequest $paramGetAvailableAccountsRequest)
    {
        try {
            $this->setResult($resultGetAvailableAccounts = $this->getSoapClient()->__soapCall('getAvailableAccounts', [
                $paramGetAvailableAccountsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAvailableAccounts;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAccountsFromSupplier
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetAccountsFromAccountAssignRequest $paramGetAccountsFromAccountAssignRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetAccountsFromAccountAssignResponse|bool
     */
    public function getAccountsFromSupplier(\Pggns\MidocoApi\Api\OrderSD\StructType\GetAccountsFromAccountAssignRequest $paramGetAccountsFromAccountAssignRequest)
    {
        try {
            $this->setResult($resultGetAccountsFromSupplier = $this->getSoapClient()->__soapCall('getAccountsFromSupplier', [
                $paramGetAccountsFromAccountAssignRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAccountsFromSupplier;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getTextRemarks
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetMidocoTextRemarksRequest $paramGetMidocoTextRemarksRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetMidocoTextRemarksResponse|bool
     */
    public function getTextRemarks(\Pggns\MidocoApi\Api\OrderSD\StructType\GetMidocoTextRemarksRequest $paramGetMidocoTextRemarksRequest)
    {
        try {
            $this->setResult($resultGetTextRemarks = $this->getSoapClient()->__soapCall('getTextRemarks', [
                $paramGetMidocoTextRemarksRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetTextRemarks;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getDeliveryForCulture
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetDeliveriesForCultureRequest $paramGetDeliveriesForCultureRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetDeliveriesForCultureResponse|bool
     */
    public function getDeliveryForCulture(\Pggns\MidocoApi\Api\OrderSD\StructType\GetDeliveriesForCultureRequest $paramGetDeliveriesForCultureRequest)
    {
        try {
            $this->setResult($resultGetDeliveryForCulture = $this->getSoapClient()->__soapCall('getDeliveryForCulture', [
                $paramGetDeliveriesForCultureRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetDeliveryForCulture;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMidocoRuleTypes
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetMidocoRuleTypesRequest $paramGetMidocoRuleTypesRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetMidocoRuleTypesResponse|bool
     */
    public function getMidocoRuleTypes(\Pggns\MidocoApi\Api\OrderSD\StructType\GetMidocoRuleTypesRequest $paramGetMidocoRuleTypesRequest)
    {
        try {
            $this->setResult($resultGetMidocoRuleTypes = $this->getSoapClient()->__soapCall('getMidocoRuleTypes', [
                $paramGetMidocoRuleTypesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMidocoRuleTypes;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMidocoRuleSets
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetRuleSetsRequest $paramGetRuleSetsRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetRuleSetsResponse|bool
     */
    public function getMidocoRuleSets(\Pggns\MidocoApi\Api\OrderSD\StructType\GetRuleSetsRequest $paramGetRuleSetsRequest)
    {
        try {
            $this->setResult($resultGetMidocoRuleSets = $this->getSoapClient()->__soapCall('getMidocoRuleSets', [
                $paramGetRuleSetsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMidocoRuleSets;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAssignedOrgunitsForRule
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetAssignedOrgunitsForRuleRequest $paramGetAssignedOrgunitsForRuleRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetAssignedOrgunitsForRuleResponse|bool
     */
    public function getAssignedOrgunitsForRule(\Pggns\MidocoApi\Api\OrderSD\StructType\GetAssignedOrgunitsForRuleRequest $paramGetAssignedOrgunitsForRuleRequest)
    {
        try {
            $this->setResult($resultGetAssignedOrgunitsForRule = $this->getSoapClient()->__soapCall('getAssignedOrgunitsForRule', [
                $paramGetAssignedOrgunitsForRuleRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAssignedOrgunitsForRule;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAssignedRuleSet
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetAssignedMidocoRuleSetRequest $paramGetAssignedMidocoRuleSetRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetAssignedMidocoRuleSetResponse|bool
     */
    public function getAssignedRuleSet(\Pggns\MidocoApi\Api\OrderSD\StructType\GetAssignedMidocoRuleSetRequest $paramGetAssignedMidocoRuleSetRequest)
    {
        try {
            $this->setResult($resultGetAssignedRuleSet = $this->getSoapClient()->__soapCall('getAssignedRuleSet', [
                $paramGetAssignedMidocoRuleSetRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAssignedRuleSet;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAssignedMidocoRuleSetForOrgunit
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetAssignedMidocoRuleSetForOrgunitRequest $paramGetAssignedMidocoRuleSetForOrgunitRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetAssignedMidocoRuleSetForOrgunitResponse|bool
     */
    public function getAssignedMidocoRuleSetForOrgunit(\Pggns\MidocoApi\Api\OrderSD\StructType\GetAssignedMidocoRuleSetForOrgunitRequest $paramGetAssignedMidocoRuleSetForOrgunitRequest)
    {
        try {
            $this->setResult($resultGetAssignedMidocoRuleSetForOrgunit = $this->getSoapClient()->__soapCall('getAssignedMidocoRuleSetForOrgunit', [
                $paramGetAssignedMidocoRuleSetForOrgunitRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAssignedMidocoRuleSetForOrgunit;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMidocoFeeType
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetMidocoFeeTypeRequest $paramGetMidocoFeeTypeRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetMidocoFeeTypeResponse|bool
     */
    public function getMidocoFeeType(\Pggns\MidocoApi\Api\OrderSD\StructType\GetMidocoFeeTypeRequest $paramGetMidocoFeeTypeRequest)
    {
        try {
            $this->setResult($resultGetMidocoFeeType = $this->getSoapClient()->__soapCall('getMidocoFeeType', [
                $paramGetMidocoFeeTypeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMidocoFeeType;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getBankAccount
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetBankAccountRequest $paramGetBankAccountRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetBankAccountResponse|bool
     */
    public function getBankAccount(\Pggns\MidocoApi\Api\OrderSD\StructType\GetBankAccountRequest $paramGetBankAccountRequest)
    {
        try {
            $this->setResult($resultGetBankAccount = $this->getSoapClient()->__soapCall('getBankAccount', [
                $paramGetBankAccountRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetBankAccount;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getBankAccounts4OrgUnit
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetBankAccounts4OrgUnitRequest $paramGetBankAccounts4OrgUnitRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetBankAccounts4OrgUnitResponse|bool
     */
    public function getBankAccounts4OrgUnit(\Pggns\MidocoApi\Api\OrderSD\StructType\GetBankAccounts4OrgUnitRequest $paramGetBankAccounts4OrgUnitRequest)
    {
        try {
            $this->setResult($resultGetBankAccounts4OrgUnit = $this->getSoapClient()->__soapCall('getBankAccounts4OrgUnit', [
                $paramGetBankAccounts4OrgUnitRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetBankAccounts4OrgUnit;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMidocoTemplates
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetMidocoTemplatesRequest $paramGetMidocoTemplatesRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetMidocoTemplatesResponse|bool
     */
    public function getMidocoTemplates(\Pggns\MidocoApi\Api\OrderSD\StructType\GetMidocoTemplatesRequest $paramGetMidocoTemplatesRequest)
    {
        try {
            $this->setResult($resultGetMidocoTemplates = $this->getSoapClient()->__soapCall('getMidocoTemplates', [
                $paramGetMidocoTemplatesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMidocoTemplates;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMidocoTemplateTypes
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetMidocoTemplateTypesRequest $paramGetMidocoTemplateTypesRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetMidocoTemplateTypesResponse|bool
     */
    public function getMidocoTemplateTypes(\Pggns\MidocoApi\Api\OrderSD\StructType\GetMidocoTemplateTypesRequest $paramGetMidocoTemplateTypesRequest)
    {
        try {
            $this->setResult($resultGetMidocoTemplateTypes = $this->getSoapClient()->__soapCall('getMidocoTemplateTypes', [
                $paramGetMidocoTemplateTypesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMidocoTemplateTypes;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMidocoSupplierTemplate
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetMidocoSupplierTemplateRequest $paramGetMidocoSupplierTemplateRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetMidocoSupplierTemplateResponse|bool
     */
    public function getMidocoSupplierTemplate(\Pggns\MidocoApi\Api\OrderSD\StructType\GetMidocoSupplierTemplateRequest $paramGetMidocoSupplierTemplateRequest)
    {
        try {
            $this->setResult($resultGetMidocoSupplierTemplate = $this->getSoapClient()->__soapCall('getMidocoSupplierTemplate', [
                $paramGetMidocoSupplierTemplateRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMidocoSupplierTemplate;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAssignedSuppliersToTemplate
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetAssignedSuppliersToTemplateRequest $paramGetAssignedSuppliersToTemplateRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetAssignedSuppliersToTemplateResponse|bool
     */
    public function getAssignedSuppliersToTemplate(\Pggns\MidocoApi\Api\OrderSD\StructType\GetAssignedSuppliersToTemplateRequest $paramGetAssignedSuppliersToTemplateRequest)
    {
        try {
            $this->setResult($resultGetAssignedSuppliersToTemplate = $this->getSoapClient()->__soapCall('getAssignedSuppliersToTemplate', [
                $paramGetAssignedSuppliersToTemplateRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAssignedSuppliersToTemplate;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMidocoSupplierCommissions
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetMidocoSupplierCommissionRequest $paramGetMidocoSupplierCommissionRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetMidocoSupplierCommissionResponse|bool
     */
    public function getMidocoSupplierCommissions(\Pggns\MidocoApi\Api\OrderSD\StructType\GetMidocoSupplierCommissionRequest $paramGetMidocoSupplierCommissionRequest)
    {
        try {
            $this->setResult($resultGetMidocoSupplierCommissions = $this->getSoapClient()->__soapCall('getMidocoSupplierCommissions', [
                $paramGetMidocoSupplierCommissionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMidocoSupplierCommissions;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSupplierCommissionByLevelId
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierCommissionByLevelIdRequest $paramGetSupplierCommissionByLevelIdRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierCommissionByLevelIdResponse|bool
     */
    public function getSupplierCommissionByLevelId(\Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierCommissionByLevelIdRequest $paramGetSupplierCommissionByLevelIdRequest)
    {
        try {
            $this->setResult($resultGetSupplierCommissionByLevelId = $this->getSoapClient()->__soapCall('getSupplierCommissionByLevelId', [
                $paramGetSupplierCommissionByLevelIdRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSupplierCommissionByLevelId;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCashBookItemType
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetCashBookItemTypeRequest $paramGetCashBookItemTypeRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetCashBookItemTypeResponse|bool
     */
    public function getCashBookItemType(\Pggns\MidocoApi\Api\OrderSD\StructType\GetCashBookItemTypeRequest $paramGetCashBookItemTypeRequest)
    {
        try {
            $this->setResult($resultGetCashBookItemType = $this->getSoapClient()->__soapCall('getCashBookItemType', [
                $paramGetCashBookItemTypeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCashBookItemType;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAccomodationCodes
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetAccomodationCodesRequest $paramGetAccomodationCodesRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetAccomodationCodesResponse|bool
     */
    public function getAccomodationCodes(\Pggns\MidocoApi\Api\OrderSD\StructType\GetAccomodationCodesRequest $paramGetAccomodationCodesRequest)
    {
        try {
            $this->setResult($resultGetAccomodationCodes = $this->getSoapClient()->__soapCall('getAccomodationCodes', [
                $paramGetAccomodationCodesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAccomodationCodes;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCateringCodes
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetCateringCodesRequest $paramGetCateringCodesRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetCateringCodesResponse|bool
     */
    public function getCateringCodes(\Pggns\MidocoApi\Api\OrderSD\StructType\GetCateringCodesRequest $paramGetCateringCodesRequest)
    {
        try {
            $this->setResult($resultGetCateringCodes = $this->getSoapClient()->__soapCall('getCateringCodes', [
                $paramGetCateringCodesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCateringCodes;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAreaCodes
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetAreaCodesRequest $paramGetAreaCodesRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetAreaCodesResponse|bool
     */
    public function getAreaCodes(\Pggns\MidocoApi\Api\OrderSD\StructType\GetAreaCodesRequest $paramGetAreaCodesRequest)
    {
        try {
            $this->setResult($resultGetAreaCodes = $this->getSoapClient()->__soapCall('getAreaCodes', [
                $paramGetAreaCodesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAreaCodes;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getRemarkOrgunits
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetRemarkOrgunitsRequest $paramGetRemarkOrgunitsRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetRemarkOrgunitsResponse|bool
     */
    public function getRemarkOrgunits(\Pggns\MidocoApi\Api\OrderSD\StructType\GetRemarkOrgunitsRequest $paramGetRemarkOrgunitsRequest)
    {
        try {
            $this->setResult($resultGetRemarkOrgunits = $this->getSoapClient()->__soapCall('getRemarkOrgunits', [
                $paramGetRemarkOrgunitsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetRemarkOrgunits;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSupplierSettlementAccounts
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierSettlementAccountsRequest $paramGetSupplierSettlementAccountsRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierSettlementAccountsResponse|bool
     */
    public function getSupplierSettlementAccounts(\Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierSettlementAccountsRequest $paramGetSupplierSettlementAccountsRequest)
    {
        try {
            $this->setResult($resultGetSupplierSettlementAccounts = $this->getSoapClient()->__soapCall('getSupplierSettlementAccounts', [
                $paramGetSupplierSettlementAccountsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSupplierSettlementAccounts;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getRemarkSuppliers
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetRemarkSuppliersRequest $paramGetRemarkSuppliersRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetRemarkSuppliersResponse|bool
     */
    public function getRemarkSuppliers(\Pggns\MidocoApi\Api\OrderSD\StructType\GetRemarkSuppliersRequest $paramGetRemarkSuppliersRequest)
    {
        try {
            $this->setResult($resultGetRemarkSuppliers = $this->getSoapClient()->__soapCall('getRemarkSuppliers', [
                $paramGetRemarkSuppliersRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetRemarkSuppliers;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getShortRemarkIdentifiers
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetShortRemarkIdentifiersRequest $paramGetShortRemarkIdentifiersRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetShortRemarkIdentifiersResponse|bool
     */
    public function getShortRemarkIdentifiers(\Pggns\MidocoApi\Api\OrderSD\StructType\GetShortRemarkIdentifiersRequest $paramGetShortRemarkIdentifiersRequest)
    {
        try {
            $this->setResult($resultGetShortRemarkIdentifiers = $this->getSoapClient()->__soapCall('getShortRemarkIdentifiers', [
                $paramGetShortRemarkIdentifiersRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetShortRemarkIdentifiers;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSupplierInkassoModes
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierInkassoModesRequest $paramGetSupplierInkassoModesRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierInkassoModesResponse|bool
     */
    public function getSupplierInkassoModes(\Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierInkassoModesRequest $paramGetSupplierInkassoModesRequest)
    {
        try {
            $this->setResult($resultGetSupplierInkassoModes = $this->getSoapClient()->__soapCall('getSupplierInkassoModes', [
                $paramGetSupplierInkassoModesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSupplierInkassoModes;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSupplierAgencies
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierAgenciesRequest $paramGetSupplierAgenciesRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierAgenciesResponse|bool
     */
    public function getSupplierAgencies(\Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierAgenciesRequest $paramGetSupplierAgenciesRequest)
    {
        try {
            $this->setResult($resultGetSupplierAgencies = $this->getSoapClient()->__soapCall('getSupplierAgencies', [
                $paramGetSupplierAgenciesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSupplierAgencies;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSupplierAgency
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierAgencyRequest $paramGetSupplierAgencyRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierAgencyResponse|bool
     */
    public function getSupplierAgency(\Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierAgencyRequest $paramGetSupplierAgencyRequest)
    {
        try {
            $this->setResult($resultGetSupplierAgency = $this->getSoapClient()->__soapCall('getSupplierAgency', [
                $paramGetSupplierAgencyRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSupplierAgency;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSupplierAgencyReservation
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierAgencyReservationRequest $paramGetSupplierAgencyReservationRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierAgencyReservationResponse|bool
     */
    public function getSupplierAgencyReservation(\Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierAgencyReservationRequest $paramGetSupplierAgencyReservationRequest)
    {
        try {
            $this->setResult($resultGetSupplierAgencyReservation = $this->getSoapClient()->__soapCall('getSupplierAgencyReservation', [
                $paramGetSupplierAgencyReservationRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSupplierAgencyReservation;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSupplier
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierRequest $paramGetSupplierRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierResponse|bool
     */
    public function getSupplier(\Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierRequest $paramGetSupplierRequest)
    {
        try {
            $this->setResult($resultGetSupplier = $this->getSoapClient()->__soapCall('getSupplier', [
                $paramGetSupplierRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSupplier;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getQueryCriteriaOpNames
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetQueryCriteriaOpNamesRequest $paramGetQueryCriteriaOpNamesRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetQueryCriteriaOpNamesResponse|bool
     */
    public function getQueryCriteriaOpNames(\Pggns\MidocoApi\Api\OrderSD\StructType\GetQueryCriteriaOpNamesRequest $paramGetQueryCriteriaOpNamesRequest)
    {
        try {
            $this->setResult($resultGetQueryCriteriaOpNames = $this->getSoapClient()->__soapCall('getQueryCriteriaOpNames', [
                $paramGetQueryCriteriaOpNamesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetQueryCriteriaOpNames;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAvailableQueryCriteriaOps
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetAvailableQueryCriteriaOpsRequest $paramGetAvailableQueryCriteriaOpsRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetAvailableQueryCriteriaOpsResponse|bool
     */
    public function getAvailableQueryCriteriaOps(\Pggns\MidocoApi\Api\OrderSD\StructType\GetAvailableQueryCriteriaOpsRequest $paramGetAvailableQueryCriteriaOpsRequest)
    {
        try {
            $this->setResult($resultGetAvailableQueryCriteriaOps = $this->getSoapClient()->__soapCall('getAvailableQueryCriteriaOps', [
                $paramGetAvailableQueryCriteriaOpsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAvailableQueryCriteriaOps;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAvailableQueryFields
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetAvailableQueryFieldsRequest $paramGetAvailableQueryFieldsRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetAvailableQueryFieldsResponse|bool
     */
    public function getAvailableQueryFields(\Pggns\MidocoApi\Api\OrderSD\StructType\GetAvailableQueryFieldsRequest $paramGetAvailableQueryFieldsRequest)
    {
        try {
            $this->setResult($resultGetAvailableQueryFields = $this->getSoapClient()->__soapCall('getAvailableQueryFields', [
                $paramGetAvailableQueryFieldsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAvailableQueryFields;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getQueryPage
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetQueryPageRequest $paramGetQueryPageRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetQueryPageResponse|bool
     */
    public function getQueryPage(\Pggns\MidocoApi\Api\OrderSD\StructType\GetQueryPageRequest $paramGetQueryPageRequest)
    {
        try {
            $this->setResult($resultGetQueryPage = $this->getSoapClient()->__soapCall('getQueryPage', [
                $paramGetQueryPageRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetQueryPage;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getUserQuery
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetUserQueryRequest $paramGetUserQueryRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetUserQueryResponse|bool
     */
    public function getUserQuery(\Pggns\MidocoApi\Api\OrderSD\StructType\GetUserQueryRequest $paramGetUserQueryRequest)
    {
        try {
            $this->setResult($resultGetUserQuery = $this->getSoapClient()->__soapCall('getUserQuery', [
                $paramGetUserQueryRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetUserQuery;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getDunningLetters
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetDunningLettersRequest $paramGetDunningLettersRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetDunningLettersResponse|bool
     */
    public function getDunningLetters(\Pggns\MidocoApi\Api\OrderSD\StructType\GetDunningLettersRequest $paramGetDunningLettersRequest)
    {
        try {
            $this->setResult($resultGetDunningLetters = $this->getSoapClient()->__soapCall('getDunningLetters', [
                $paramGetDunningLettersRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetDunningLetters;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getQueryFieldValues
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetQueryFieldValuesRequest $paramGetQueryFieldValuesRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetQueryFieldValuesResponse|bool
     */
    public function getQueryFieldValues(\Pggns\MidocoApi\Api\OrderSD\StructType\GetQueryFieldValuesRequest $paramGetQueryFieldValuesRequest)
    {
        try {
            $this->setResult($resultGetQueryFieldValues = $this->getSoapClient()->__soapCall('getQueryFieldValues', [
                $paramGetQueryFieldValuesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetQueryFieldValues;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getProductTypeMediatorConditions
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetProductTypeMediatorConditionsRequest $paramGetProductTypeMediatorConditionsRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetProductTypeMediatorConditionsResponse|bool
     */
    public function getProductTypeMediatorConditions(\Pggns\MidocoApi\Api\OrderSD\StructType\GetProductTypeMediatorConditionsRequest $paramGetProductTypeMediatorConditionsRequest)
    {
        try {
            $this->setResult($resultGetProductTypeMediatorConditions = $this->getSoapClient()->__soapCall('getProductTypeMediatorConditions', [
                $paramGetProductTypeMediatorConditionsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetProductTypeMediatorConditions;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getFeeTypeForOrgunit
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetFeeTypeForOrgunitRequest $paramGetFeeTypeForOrgunitRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetFeeTypeForOrgunitResponse|bool
     */
    public function getFeeTypeForOrgunit(\Pggns\MidocoApi\Api\OrderSD\StructType\GetFeeTypeForOrgunitRequest $paramGetFeeTypeForOrgunitRequest)
    {
        try {
            $this->setResult($resultGetFeeTypeForOrgunit = $this->getSoapClient()->__soapCall('getFeeTypeForOrgunit', [
                $paramGetFeeTypeForOrgunitRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetFeeTypeForOrgunit;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getFeeGroupAssigns
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetFeeGroupAssignsRequest $paramGetFeeGroupAssignsRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetFeeGroupAssignsResponse|bool
     */
    public function getFeeGroupAssigns(\Pggns\MidocoApi\Api\OrderSD\StructType\GetFeeGroupAssignsRequest $paramGetFeeGroupAssignsRequest)
    {
        try {
            $this->setResult($resultGetFeeGroupAssigns = $this->getSoapClient()->__soapCall('getFeeGroupAssigns', [
                $paramGetFeeGroupAssignsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetFeeGroupAssigns;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getFeeGroups
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetFeeGroupsRequest $paramGetFeeGroupsRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetFeeGroupsResponse|bool
     */
    public function getFeeGroups(\Pggns\MidocoApi\Api\OrderSD\StructType\GetFeeGroupsRequest $paramGetFeeGroupsRequest)
    {
        try {
            $this->setResult($resultGetFeeGroups = $this->getSoapClient()->__soapCall('getFeeGroups', [
                $paramGetFeeGroupsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetFeeGroups;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSupplierByAccount
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierByAccountRequest $paramGetSupplierByAccountRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierByAccountResponse|bool
     */
    public function getSupplierByAccount(\Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierByAccountRequest $paramGetSupplierByAccountRequest)
    {
        try {
            $this->setResult($resultGetSupplierByAccount = $this->getSoapClient()->__soapCall('getSupplierByAccount', [
                $paramGetSupplierByAccountRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSupplierByAccount;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMidocoPrintOption
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetMidocoPrintOptionRequest $paramGetMidocoPrintOptionRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetMidocoPrintOptionResponse|bool
     */
    public function getMidocoPrintOption(\Pggns\MidocoApi\Api\OrderSD\StructType\GetMidocoPrintOptionRequest $paramGetMidocoPrintOptionRequest)
    {
        try {
            $this->setResult($resultGetMidocoPrintOption = $this->getSoapClient()->__soapCall('getMidocoPrintOption', [
                $paramGetMidocoPrintOptionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMidocoPrintOption;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAutoRemarks
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetAutoRemarksRequest $paramGetAutoRemarksRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetAutoRemarksResponse|bool
     */
    public function getAutoRemarks(\Pggns\MidocoApi\Api\OrderSD\StructType\GetAutoRemarksRequest $paramGetAutoRemarksRequest)
    {
        try {
            $this->setResult($resultGetAutoRemarks = $this->getSoapClient()->__soapCall('getAutoRemarks', [
                $paramGetAutoRemarksRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAutoRemarks;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSupplierTraveltypes
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierTraveltypesRequest $paramGetSupplierTraveltypesRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierTraveltypesResponse|bool
     */
    public function getSupplierTraveltypes(\Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierTraveltypesRequest $paramGetSupplierTraveltypesRequest)
    {
        try {
            $this->setResult($resultGetSupplierTraveltypes = $this->getSoapClient()->__soapCall('getSupplierTraveltypes', [
                $paramGetSupplierTraveltypesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSupplierTraveltypes;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMarketingKeysForType
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetMarketingKeysForTypeRequest $paramGetMarketingKeysForTypeRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetMarketingKeysForTypeResponse|bool
     */
    public function getMarketingKeysForType(\Pggns\MidocoApi\Api\OrderSD\StructType\GetMarketingKeysForTypeRequest $paramGetMarketingKeysForTypeRequest)
    {
        try {
            $this->setResult($resultGetMarketingKeysForType = $this->getSoapClient()->__soapCall('getMarketingKeysForType', [
                $paramGetMarketingKeysForTypeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMarketingKeysForType;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMarketingKeysLocalizedForType
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetMarketingKeysLocalizedForTypeRequest $paramGetMarketingKeysLocalizedForTypeRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetMarketingKeysLocalizedForTypeResponse|bool
     */
    public function getMarketingKeysLocalizedForType(\Pggns\MidocoApi\Api\OrderSD\StructType\GetMarketingKeysLocalizedForTypeRequest $paramGetMarketingKeysLocalizedForTypeRequest)
    {
        try {
            $this->setResult($resultGetMarketingKeysLocalizedForType = $this->getSoapClient()->__soapCall('getMarketingKeysLocalizedForType', [
                $paramGetMarketingKeysLocalizedForTypeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMarketingKeysLocalizedForType;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMarketingKeyDescriptionsForType
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetMarketingKeyDescriptionsForTypeRequest $paramGetMarketingKeyDescriptionsForTypeRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetMarketingKeyDescriptionsForTypeResponse|bool
     */
    public function getMarketingKeyDescriptionsForType(\Pggns\MidocoApi\Api\OrderSD\StructType\GetMarketingKeyDescriptionsForTypeRequest $paramGetMarketingKeyDescriptionsForTypeRequest)
    {
        try {
            $this->setResult($resultGetMarketingKeyDescriptionsForType = $this->getSoapClient()->__soapCall('getMarketingKeyDescriptionsForType', [
                $paramGetMarketingKeyDescriptionsForTypeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMarketingKeyDescriptionsForType;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getBookingTexts
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetBookingTextsRequest $paramGetBookingTextsRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetBookingTextsResponse|bool
     */
    public function getBookingTexts(\Pggns\MidocoApi\Api\OrderSD\StructType\GetBookingTextsRequest $paramGetBookingTextsRequest)
    {
        try {
            $this->setResult($resultGetBookingTexts = $this->getSoapClient()->__soapCall('getBookingTexts', [
                $paramGetBookingTextsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetBookingTexts;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMidocoSupplierImportFormat
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetMidocoSupplierImportFormatRequest $paramGetMidocoSupplierImportFormatRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetMidocoSupplierImportFormatResponse|bool
     */
    public function getMidocoSupplierImportFormat(\Pggns\MidocoApi\Api\OrderSD\StructType\GetMidocoSupplierImportFormatRequest $paramGetMidocoSupplierImportFormatRequest)
    {
        try {
            $this->setResult($resultGetMidocoSupplierImportFormat = $this->getSoapClient()->__soapCall('getMidocoSupplierImportFormat', [
                $paramGetMidocoSupplierImportFormatRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMidocoSupplierImportFormat;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMidocoSettlementTypes
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetMidocoSettlementTypesRequest $paramGetMidocoSettlementTypesRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetMidocoSettlementTypesResponse|bool
     */
    public function getMidocoSettlementTypes(\Pggns\MidocoApi\Api\OrderSD\StructType\GetMidocoSettlementTypesRequest $paramGetMidocoSettlementTypesRequest)
    {
        try {
            $this->setResult($resultGetMidocoSettlementTypes = $this->getSoapClient()->__soapCall('getMidocoSettlementTypes', [
                $paramGetMidocoSettlementTypesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMidocoSettlementTypes;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCurrencyRate
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetCurrencyRateRequest $paramGetCurrencyRateRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetCurrencyRateResponse|bool
     */
    public function getCurrencyRate(\Pggns\MidocoApi\Api\OrderSD\StructType\GetCurrencyRateRequest $paramGetCurrencyRateRequest)
    {
        try {
            $this->setResult($resultGetCurrencyRate = $this->getSoapClient()->__soapCall('getCurrencyRate', [
                $paramGetCurrencyRateRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCurrencyRate;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getHedgeCurrencyRate
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetHedgeCurrencyRateRequest $paramGetHedgeCurrencyRateRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetHedgeCurrencyRateResponse|bool
     */
    public function getHedgeCurrencyRate(\Pggns\MidocoApi\Api\OrderSD\StructType\GetHedgeCurrencyRateRequest $paramGetHedgeCurrencyRateRequest)
    {
        try {
            $this->setResult($resultGetHedgeCurrencyRate = $this->getSoapClient()->__soapCall('getHedgeCurrencyRate', [
                $paramGetHedgeCurrencyRateRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetHedgeCurrencyRate;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAvailableSupplierId
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetAvailableSupplierIdRequest $paramGetAvailableSupplierIdRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetAvailableSupplierIdResponse|bool
     */
    public function getAvailableSupplierId(\Pggns\MidocoApi\Api\OrderSD\StructType\GetAvailableSupplierIdRequest $paramGetAvailableSupplierIdRequest)
    {
        try {
            $this->setResult($resultGetAvailableSupplierId = $this->getSoapClient()->__soapCall('getAvailableSupplierId', [
                $paramGetAvailableSupplierIdRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAvailableSupplierId;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getTravelNumber
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetTravelNumberRequest $paramGetTravelNumberRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetTravelNumberResponse|bool
     */
    public function getTravelNumber(\Pggns\MidocoApi\Api\OrderSD\StructType\GetTravelNumberRequest $paramGetTravelNumberRequest)
    {
        try {
            $this->setResult($resultGetTravelNumber = $this->getSoapClient()->__soapCall('getTravelNumber', [
                $paramGetTravelNumberRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetTravelNumber;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCostCentres
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetCostCentresRequest $paramGetCostCentresRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetCostCentresResponse|bool
     */
    public function getCostCentres(\Pggns\MidocoApi\Api\OrderSD\StructType\GetCostCentresRequest $paramGetCostCentresRequest)
    {
        try {
            $this->setResult($resultGetCostCentres = $this->getSoapClient()->__soapCall('getCostCentres', [
                $paramGetCostCentresRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCostCentres;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAvailableSupplierAddressesList
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierAddressListRequest $paramGetSupplierAddressListRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierAddressListResponse|bool
     */
    public function getAvailableSupplierAddressesList(\Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierAddressListRequest $paramGetSupplierAddressListRequest)
    {
        try {
            $this->setResult($resultGetAvailableSupplierAddressesList = $this->getSoapClient()->__soapCall('getAvailableSupplierAddressesList', [
                $paramGetSupplierAddressListRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAvailableSupplierAddressesList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSupplierNotices
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierNoticesRequest $paramGetSupplierNoticesRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierNoticesResponse|bool
     */
    public function getSupplierNotices(\Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierNoticesRequest $paramGetSupplierNoticesRequest)
    {
        try {
            $this->setResult($resultGetSupplierNotices = $this->getSoapClient()->__soapCall('getSupplierNotices', [
                $paramGetSupplierNoticesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSupplierNotices;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getRemarks4Orgunit
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetRemarks4OrgunitRequest $paramGetRemarks4OrgunitRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetRemarks4OrgunitResponse|bool
     */
    public function getRemarks4Orgunit(\Pggns\MidocoApi\Api\OrderSD\StructType\GetRemarks4OrgunitRequest $paramGetRemarks4OrgunitRequest)
    {
        try {
            $this->setResult($resultGetRemarks4Orgunit = $this->getSoapClient()->__soapCall('getRemarks4Orgunit', [
                $paramGetRemarks4OrgunitRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetRemarks4Orgunit;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAvailableMiscPaymentSettings
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetAvailableMiscPaymentSettingRequest $paramGetAvailableMiscPaymentSettingRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetAvailableMiscPaymentSettingResponse|bool
     */
    public function getAvailableMiscPaymentSettings(\Pggns\MidocoApi\Api\OrderSD\StructType\GetAvailableMiscPaymentSettingRequest $paramGetAvailableMiscPaymentSettingRequest)
    {
        try {
            $this->setResult($resultGetAvailableMiscPaymentSettings = $this->getSoapClient()->__soapCall('getAvailableMiscPaymentSettings', [
                $paramGetAvailableMiscPaymentSettingRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAvailableMiscPaymentSettings;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMidocoSupplierTemplates
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetMidocoSupplierTemplatesRequest $paramGetMidocoSupplierTemplatesRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetMidocoSupplierTemplatesResponse|bool
     */
    public function getMidocoSupplierTemplates(\Pggns\MidocoApi\Api\OrderSD\StructType\GetMidocoSupplierTemplatesRequest $paramGetMidocoSupplierTemplatesRequest)
    {
        try {
            $this->setResult($resultGetMidocoSupplierTemplates = $this->getSoapClient()->__soapCall('getMidocoSupplierTemplates', [
                $paramGetMidocoSupplierTemplatesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMidocoSupplierTemplates;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMidocoCrsSystem
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetMidocoCrsSystemRequest $paramGetMidocoCrsSystemRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetMidocoCrsSystemResponse|bool
     */
    public function getMidocoCrsSystem(\Pggns\MidocoApi\Api\OrderSD\StructType\GetMidocoCrsSystemRequest $paramGetMidocoCrsSystemRequest)
    {
        try {
            $this->setResult($resultGetMidocoCrsSystem = $this->getSoapClient()->__soapCall('getMidocoCrsSystem', [
                $paramGetMidocoCrsSystemRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMidocoCrsSystem;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMidocoQuestion
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetMidocoQuestionRequest $paramGetMidocoQuestionRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetMidocoQuestionResponse|bool
     */
    public function getMidocoQuestion(\Pggns\MidocoApi\Api\OrderSD\StructType\GetMidocoQuestionRequest $paramGetMidocoQuestionRequest)
    {
        try {
            $this->setResult($resultGetMidocoQuestion = $this->getSoapClient()->__soapCall('getMidocoQuestion', [
                $paramGetMidocoQuestionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMidocoQuestion;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMidocoQuestionValue
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetMidocoQuestionValueRequest $paramGetMidocoQuestionValueRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetMidocoQuestionValueResponse|bool
     */
    public function getMidocoQuestionValue(\Pggns\MidocoApi\Api\OrderSD\StructType\GetMidocoQuestionValueRequest $paramGetMidocoQuestionValueRequest)
    {
        try {
            $this->setResult($resultGetMidocoQuestionValue = $this->getSoapClient()->__soapCall('getMidocoQuestionValue', [
                $paramGetMidocoQuestionValueRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMidocoQuestionValue;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getOrderLockReasons
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetOrderLockReasonsRequest $paramGetOrderLockReasonsRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetOrderLockReasonsResponse|bool
     */
    public function getOrderLockReasons(\Pggns\MidocoApi\Api\OrderSD\StructType\GetOrderLockReasonsRequest $paramGetOrderLockReasonsRequest)
    {
        try {
            $this->setResult($resultGetOrderLockReasons = $this->getSoapClient()->__soapCall('getOrderLockReasons', [
                $paramGetOrderLockReasonsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetOrderLockReasons;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAvailableOrderLockReasons
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetAvailableOrderLockReasonsRequest $paramGetAvailableOrderLockReasonsRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetAvailableOrderLockReasonsResponse|bool
     */
    public function getAvailableOrderLockReasons(\Pggns\MidocoApi\Api\OrderSD\StructType\GetAvailableOrderLockReasonsRequest $paramGetAvailableOrderLockReasonsRequest)
    {
        try {
            $this->setResult($resultGetAvailableOrderLockReasons = $this->getSoapClient()->__soapCall('getAvailableOrderLockReasons', [
                $paramGetAvailableOrderLockReasonsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAvailableOrderLockReasons;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getOrderLockReasonDescriptions
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetOrderLockReasonDescriptionsRequest $paramGetOrderLockReasonDescriptionsRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetOrderLockReasonDescriptionsResponse|bool
     */
    public function getOrderLockReasonDescriptions(\Pggns\MidocoApi\Api\OrderSD\StructType\GetOrderLockReasonDescriptionsRequest $paramGetOrderLockReasonDescriptionsRequest)
    {
        try {
            $this->setResult($resultGetOrderLockReasonDescriptions = $this->getSoapClient()->__soapCall('getOrderLockReasonDescriptions', [
                $paramGetOrderLockReasonDescriptionsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetOrderLockReasonDescriptions;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * getAvailableOrderLockReasonDescriptions
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetAvailableOrderLockReasonDescriptionsRequest $paramGetAvailableOrderLockReasonDescriptionsRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetAvailableOrderLockReasonDescriptionsResponse|bool
     */
    public function getAvailableOrderLockReasonDescriptions(\Pggns\MidocoApi\Api\OrderSD\StructType\GetAvailableOrderLockReasonDescriptionsRequest $paramGetAvailableOrderLockReasonDescriptionsRequest)
    {
        try {
            $this->setResult($resultGetAvailableOrderLockReasonDescriptions = $this->getSoapClient()->__soapCall('getAvailableOrderLockReasonDescriptions', [
                $paramGetAvailableOrderLockReasonDescriptionsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAvailableOrderLockReasonDescriptions;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getTravelNumberAutoRemarks
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetTravelNumberAutoRemarksRequest $paramGetTravelNumberAutoRemarksRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetTravelNumberAutoRemarksResponse|bool
     */
    public function getTravelNumberAutoRemarks(\Pggns\MidocoApi\Api\OrderSD\StructType\GetTravelNumberAutoRemarksRequest $paramGetTravelNumberAutoRemarksRequest)
    {
        try {
            $this->setResult($resultGetTravelNumberAutoRemarks = $this->getSoapClient()->__soapCall('getTravelNumberAutoRemarks', [
                $paramGetTravelNumberAutoRemarksRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetTravelNumberAutoRemarks;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getTravelNumberDocuments
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetTravelNumberDocumentsRequest $paramGetTravelNumberDocumentsRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetTravelNumberDocumentsResponse|bool
     */
    public function getTravelNumberDocuments(\Pggns\MidocoApi\Api\OrderSD\StructType\GetTravelNumberDocumentsRequest $paramGetTravelNumberDocumentsRequest)
    {
        try {
            $this->setResult($resultGetTravelNumberDocuments = $this->getSoapClient()->__soapCall('getTravelNumberDocuments', [
                $paramGetTravelNumberDocumentsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetTravelNumberDocuments;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getDestinationAutoRemarks
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetDestinationAutoRemarksRequest $paramGetDestinationAutoRemarksRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetDestinationAutoRemarksResponse|bool
     */
    public function getDestinationAutoRemarks(\Pggns\MidocoApi\Api\OrderSD\StructType\GetDestinationAutoRemarksRequest $paramGetDestinationAutoRemarksRequest)
    {
        try {
            $this->setResult($resultGetDestinationAutoRemarks = $this->getSoapClient()->__soapCall('getDestinationAutoRemarks', [
                $paramGetDestinationAutoRemarksRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetDestinationAutoRemarks;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getDestinationDocuments
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetDestinationDocumentsRequest $paramGetDestinationDocumentsRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetDestinationDocumentsResponse|bool
     */
    public function getDestinationDocuments(\Pggns\MidocoApi\Api\OrderSD\StructType\GetDestinationDocumentsRequest $paramGetDestinationDocumentsRequest)
    {
        try {
            $this->setResult($resultGetDestinationDocuments = $this->getSoapClient()->__soapCall('getDestinationDocuments', [
                $paramGetDestinationDocumentsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetDestinationDocuments;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSupplierDisabledUnits
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierDisabledUnitsRequest $paramGetSupplierDisabledUnitsRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierDisabledUnitsResponse|bool
     */
    public function getSupplierDisabledUnits(\Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierDisabledUnitsRequest $paramGetSupplierDisabledUnitsRequest)
    {
        try {
            $this->setResult($resultGetSupplierDisabledUnits = $this->getSoapClient()->__soapCall('getSupplierDisabledUnits', [
                $paramGetSupplierDisabledUnitsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSupplierDisabledUnits;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSupplierDocuments
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierDocumentsRequest $paramGetSupplierDocumentsRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierDocumentsResponse|bool
     */
    public function getSupplierDocuments(\Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierDocumentsRequest $paramGetSupplierDocumentsRequest)
    {
        try {
            $this->setResult($resultGetSupplierDocuments = $this->getSoapClient()->__soapCall('getSupplierDocuments', [
                $paramGetSupplierDocumentsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSupplierDocuments;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMidocoSettlementTypeForSupplier
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetMidocoSettlementTypeForSupplierRequest $paramGetMidocoSettlementTypeForSupplierRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetMidocoSettlementTypeForSupplierResponse|bool
     */
    public function getMidocoSettlementTypeForSupplier(\Pggns\MidocoApi\Api\OrderSD\StructType\GetMidocoSettlementTypeForSupplierRequest $paramGetMidocoSettlementTypeForSupplierRequest)
    {
        try {
            $this->setResult($resultGetMidocoSettlementTypeForSupplier = $this->getSoapClient()->__soapCall('getMidocoSettlementTypeForSupplier', [
                $paramGetMidocoSettlementTypeForSupplierRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMidocoSettlementTypeForSupplier;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getProductTypeSupplier
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetProductTypeSupplierRequest $paramGetProductTypeSupplierRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetProductTypeSupplierResponse|bool
     */
    public function getProductTypeSupplier(\Pggns\MidocoApi\Api\OrderSD\StructType\GetProductTypeSupplierRequest $paramGetProductTypeSupplierRequest)
    {
        try {
            $this->setResult($resultGetProductTypeSupplier = $this->getSoapClient()->__soapCall('getProductTypeSupplier', [
                $paramGetProductTypeSupplierRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetProductTypeSupplier;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * getOrdCriteriaTypeCategoryDescriptions
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetOrdCriteriaTypeCategoryDescriptionsRequest $paramGetOrdCriteriaTypeCategoryDescriptionsRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetOrdCriteriaTypeCategoryDescriptionsResponse|bool
     */
    public function getOrdCriteriaTypeCategoryDescriptions(\Pggns\MidocoApi\Api\OrderSD\StructType\GetOrdCriteriaTypeCategoryDescriptionsRequest $paramGetOrdCriteriaTypeCategoryDescriptionsRequest)
    {
        try {
            $this->setResult($resultGetOrdCriteriaTypeCategoryDescriptions = $this->getSoapClient()->__soapCall('getOrdCriteriaTypeCategoryDescriptions', [
                $paramGetOrdCriteriaTypeCategoryDescriptionsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetOrdCriteriaTypeCategoryDescriptions;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getOrdCriteriaTypesForCategory
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetOrdCriteriaTypesForCategoryRequest $paramGetOrdCriteriaTypesForCategoryRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetOrdCriteriaTypesForCategoryResponse|bool
     */
    public function getOrdCriteriaTypesForCategory(\Pggns\MidocoApi\Api\OrderSD\StructType\GetOrdCriteriaTypesForCategoryRequest $paramGetOrdCriteriaTypesForCategoryRequest)
    {
        try {
            $this->setResult($resultGetOrdCriteriaTypesForCategory = $this->getSoapClient()->__soapCall('getOrdCriteriaTypesForCategory', [
                $paramGetOrdCriteriaTypesForCategoryRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetOrdCriteriaTypesForCategory;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAllOrdCriteriaDescriptions
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetAllOrdCriteriaDescriptionsRequest $paramGetAllOrdCriteriaDescriptionsRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetAllOrdCriteriaDescriptionsResponse|bool
     */
    public function getAllOrdCriteriaDescriptions(\Pggns\MidocoApi\Api\OrderSD\StructType\GetAllOrdCriteriaDescriptionsRequest $paramGetAllOrdCriteriaDescriptionsRequest)
    {
        try {
            $this->setResult($resultGetAllOrdCriteriaDescriptions = $this->getSoapClient()->__soapCall('getAllOrdCriteriaDescriptions', [
                $paramGetAllOrdCriteriaDescriptionsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAllOrdCriteriaDescriptions;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMatchingProductTypeSupplier
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetMatchingProductTypeSupplierRequest $paramGetMatchingProductTypeSupplierRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetMatchingProductTypeSupplierResponse|bool
     */
    public function getMatchingProductTypeSupplier(\Pggns\MidocoApi\Api\OrderSD\StructType\GetMatchingProductTypeSupplierRequest $paramGetMatchingProductTypeSupplierRequest)
    {
        try {
            $this->setResult($resultGetMatchingProductTypeSupplier = $this->getSoapClient()->__soapCall('getMatchingProductTypeSupplier', [
                $paramGetMatchingProductTypeSupplierRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMatchingProductTypeSupplier;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getVoucherType
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetVoucherTypeRequest $paramGetVoucherTypeRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetVoucherTypeResponse|bool
     */
    public function getVoucherType(\Pggns\MidocoApi\Api\OrderSD\StructType\GetVoucherTypeRequest $paramGetVoucherTypeRequest)
    {
        try {
            $this->setResult($resultGetVoucherType = $this->getSoapClient()->__soapCall('getVoucherType', [
                $paramGetVoucherTypeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetVoucherType;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getExternVoucherType
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetExternVoucherTypeRequest $paramGetExternVoucherTypeRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetExternVoucherTypeResponse|bool
     */
    public function getExternVoucherType(\Pggns\MidocoApi\Api\OrderSD\StructType\GetExternVoucherTypeRequest $paramGetExternVoucherTypeRequest)
    {
        try {
            $this->setResult($resultGetExternVoucherType = $this->getSoapClient()->__soapCall('getExternVoucherType', [
                $paramGetExternVoucherTypeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetExternVoucherType;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSupplierShipNames
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierShipNamesRequest $paramGetSupplierShipNamesRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierShipNamesResponse|bool
     */
    public function getSupplierShipNames(\Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierShipNamesRequest $paramGetSupplierShipNamesRequest)
    {
        try {
            $this->setResult($resultGetSupplierShipNames = $this->getSoapClient()->__soapCall('getSupplierShipNames', [
                $paramGetSupplierShipNamesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSupplierShipNames;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAvailableSupplierHistorics
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetAvailableSupplierHistoricRequest $paramGetAvailableSupplierHistoricRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetAvailableSupplierHistoricResponse|bool
     */
    public function getAvailableSupplierHistorics(\Pggns\MidocoApi\Api\OrderSD\StructType\GetAvailableSupplierHistoricRequest $paramGetAvailableSupplierHistoricRequest)
    {
        try {
            $this->setResult($resultGetAvailableSupplierHistorics = $this->getSoapClient()->__soapCall('getAvailableSupplierHistorics', [
                $paramGetAvailableSupplierHistoricRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAvailableSupplierHistorics;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSupplierSettlementDiff
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetSpecifiedSupplierSettlementDiffRequest $paramGetSpecifiedSupplierSettlementDiffRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetSpecifiedSupplierSettlementDiffResponse|bool
     */
    public function getSupplierSettlementDiff(\Pggns\MidocoApi\Api\OrderSD\StructType\GetSpecifiedSupplierSettlementDiffRequest $paramGetSpecifiedSupplierSettlementDiffRequest)
    {
        try {
            $this->setResult($resultGetSupplierSettlementDiff = $this->getSoapClient()->__soapCall('getSupplierSettlementDiff', [
                $paramGetSpecifiedSupplierSettlementDiffRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSupplierSettlementDiff;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSupplierCommissionCondition
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierCommissionConditionRequest $paramGetSupplierCommissionConditionRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierCommissionConditionResponse|bool
     */
    public function getSupplierCommissionCondition(\Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierCommissionConditionRequest $paramGetSupplierCommissionConditionRequest)
    {
        try {
            $this->setResult($resultGetSupplierCommissionCondition = $this->getSoapClient()->__soapCall('getSupplierCommissionCondition', [
                $paramGetSupplierCommissionConditionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSupplierCommissionCondition;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSupplierSettlPaymentCondition
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierSettlPaymentConditionRequest $paramGetSupplierSettlPaymentConditionRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierSettlPaymentConditionResponse|bool
     */
    public function getSupplierSettlPaymentCondition(\Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierSettlPaymentConditionRequest $paramGetSupplierSettlPaymentConditionRequest)
    {
        try {
            $this->setResult($resultGetSupplierSettlPaymentCondition = $this->getSoapClient()->__soapCall('getSupplierSettlPaymentCondition', [
                $paramGetSupplierSettlPaymentConditionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSupplierSettlPaymentCondition;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAvailableSupplierNames
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetAvailableSupplierNamesRequest $paramGetAvailableSupplierNamesRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetAvailableSupplierNamesResponse|bool
     */
    public function getAvailableSupplierNames(\Pggns\MidocoApi\Api\OrderSD\StructType\GetAvailableSupplierNamesRequest $paramGetAvailableSupplierNamesRequest)
    {
        try {
            $this->setResult($resultGetAvailableSupplierNames = $this->getSoapClient()->__soapCall('getAvailableSupplierNames', [
                $paramGetAvailableSupplierNamesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAvailableSupplierNames;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getPaymentProviders
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetPaymentProvidersRequest $paramGetPaymentProvidersRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetPaymentProvidersResponse|bool
     */
    public function getPaymentProviders(\Pggns\MidocoApi\Api\OrderSD\StructType\GetPaymentProvidersRequest $paramGetPaymentProvidersRequest)
    {
        try {
            $this->setResult($resultGetPaymentProviders = $this->getSoapClient()->__soapCall('getPaymentProviders', [
                $paramGetPaymentProvidersRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetPaymentProviders;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getPaymentProviderImportFormat
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetPaymentProviderImportFormatRequest $paramGetPaymentProviderImportFormatRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetPaymentProviderImportFormatResponse|bool
     */
    public function getPaymentProviderImportFormat(\Pggns\MidocoApi\Api\OrderSD\StructType\GetPaymentProviderImportFormatRequest $paramGetPaymentProviderImportFormatRequest)
    {
        try {
            $this->setResult($resultGetPaymentProviderImportFormat = $this->getSoapClient()->__soapCall('getPaymentProviderImportFormat', [
                $paramGetPaymentProviderImportFormatRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetPaymentProviderImportFormat;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getATOLClassifications
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetATOLClassificationsRequest $paramGetATOLClassificationsRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetATOLClassificationsResponse|bool
     */
    public function getATOLClassifications(\Pggns\MidocoApi\Api\OrderSD\StructType\GetATOLClassificationsRequest $paramGetATOLClassificationsRequest)
    {
        try {
            $this->setResult($resultGetATOLClassifications = $this->getSoapClient()->__soapCall('getATOLClassifications', [
                $paramGetATOLClassificationsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetATOLClassifications;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCabinClass
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetCabinClassRequest $paramGetCabinClassRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetCabinClassResponse|bool
     */
    public function getCabinClass(\Pggns\MidocoApi\Api\OrderSD\StructType\GetCabinClassRequest $paramGetCabinClassRequest)
    {
        try {
            $this->setResult($resultGetCabinClass = $this->getSoapClient()->__soapCall('getCabinClass', [
                $paramGetCabinClassRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCabinClass;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAutoInvoiceConditions
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\GetAutoInvoiceConditionsRequest $paramGetAutoInvoiceConditionsRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetAutoInvoiceConditionsResponse|bool
     */
    public function getAutoInvoiceConditions(\Pggns\MidocoApi\Api\OrderSD\StructType\GetAutoInvoiceConditionsRequest $paramGetAutoInvoiceConditionsRequest)
    {
        try {
            $this->setResult($resultGetAutoInvoiceConditions = $this->getSoapClient()->__soapCall('getAutoInvoiceConditions', [
                $paramGetAutoInvoiceConditionsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAutoInvoiceConditions;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetAccomodationCodesResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetAccountsFromAccountAssignResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetAllOrdCriteriaDescriptionsResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetAreaCodesResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetAssignedMidocoRuleSetForOrgunitResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetAssignedMidocoRuleSetResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetAssignedOrgunitsForRuleResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetAssignedSuppCancelCMappingResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetAssignedSuppliersToTemplateResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetATOLClassificationsResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetAutoInvoiceConditionsResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetAutoRemarksResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetAvailableAccountsResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetAvailableMiscPaymentSettingResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetAvailableOrderLockReasonDescriptionsResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetAvailableOrderLockReasonsResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetAvailableQueryCriteriaOpsResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetAvailableQueryFieldsResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetAvailableSupplierHistoricResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetAvailableSupplierIdResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetAvailableSupplierNamesResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetAvailableSupplierResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetBankAccountResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetBankAccounts4OrgUnitResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetBookingTextsResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetCabinClassResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetCashBookItemTypeResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetCateringCodesResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetCostCentresResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetCurrencyRateResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetDeliveriesForCultureResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetDestinationAutoRemarksResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetDestinationDocumentsResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetDunningLettersResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetExternVoucherTypeResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetFeeGroupAssignsResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetFeeGroupsResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetFeeTypeForOrgunitResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetHedgeCurrencyRateResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetMarketingKeyDescriptionsForTypeResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetMarketingKeysForTypeResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetMarketingKeysLocalizedForTypeResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetMatchingProductTypeSupplierResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetMidocoCrsSystemResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetMidocoFeeTypeResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetMidocoPrintOptionResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetMidocoQuestionResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetMidocoQuestionValueResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetMidocoRuleTypesResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetMidocoSettlementTypeForSupplierResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetMidocoSettlementTypesResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetMidocoSupplierCommissionResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetMidocoSupplierImportFormatResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetMidocoSupplierTemplateResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetMidocoSupplierTemplatesResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetMidocoTemplatesResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetMidocoTemplateTypesResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetMidocoTextRemarksResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetOrdCriteriaTypeCategoryDescriptionsResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetOrdCriteriaTypesForCategoryResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetOrderLockReasonDescriptionsResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetOrderLockReasonsResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetPaymentProviderImportFormatResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetPaymentProvidersResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetProductTypeMediatorConditionsResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetProductTypeSupplierResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetQueryCriteriaOpNamesResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetQueryFieldValuesResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetQueryPageResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetRemarkOrgunitsResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetRemarks4OrgunitResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetRemarkSuppliersResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetRuleSetsResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetShortRemarkIdentifiersResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetSpecifiedSupplierPaymentConditionResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetSpecifiedSupplierSettlementDiffResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetSuppCancelCEmailResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetSuppCancelCMappingResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierAccountAssignResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierAddressListResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierAddressResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierAgenciesResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierAgencyReservationResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierAgencyResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierByAccountResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierCancelConditionResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierCcCardResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierCommissionByLevelIdResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierCommissionConditionResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierDisabledUnitsResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierDocumentShippingResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierDocumentsResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierInkassoModesResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierNoticesResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierPaymentConditionResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierSettlementAccountsResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierSettlPaymentConditionResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierShipNamesResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierTraveltypesResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetTravelNumberAutoRemarksResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetTravelNumberDocumentsResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetTravelNumberResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetUserQueryResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\GetVoucherTypeResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
