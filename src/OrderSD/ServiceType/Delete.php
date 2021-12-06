<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\OrderSD\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Delete ServiceType
 * @subpackage Services
 */
class Delete extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Api\OrderSD\ServiceType\Delete
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named deleteSupplier
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSupplierRequest $paramDeleteSupplierRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSupplierResponse|bool
     */
    public function deleteSupplier(\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSupplierRequest $paramDeleteSupplierRequest)
    {
        try {
            $this->setResult($resultDeleteSupplier = $this->getSoapClient()->__soapCall('deleteSupplier', [
                $paramDeleteSupplierRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteSupplier;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteSupplierCcCard
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSupplierCcCardRequest $paramDeleteSupplierCcCardRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSupplierCcCardResponse|bool
     */
    public function deleteSupplierCcCard(\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSupplierCcCardRequest $paramDeleteSupplierCcCardRequest)
    {
        try {
            $this->setResult($resultDeleteSupplierCcCard = $this->getSoapClient()->__soapCall('deleteSupplierCcCard', [
                $paramDeleteSupplierCcCardRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteSupplierCcCard;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteSupplierAccountAssign
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSupplierAccountAssignRequest $paramDeleteSupplierAccountAssignRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSupplierAccountAssignResponse|bool
     */
    public function deleteSupplierAccountAssign(\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSupplierAccountAssignRequest $paramDeleteSupplierAccountAssignRequest)
    {
        try {
            $this->setResult($resultDeleteSupplierAccountAssign = $this->getSoapClient()->__soapCall('deleteSupplierAccountAssign', [
                $paramDeleteSupplierAccountAssignRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteSupplierAccountAssign;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteSupplierDocumentShipping
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSupplierDocumentShippingRequest $paramDeleteSupplierDocumentShippingRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSupplierDocumentShippingResponse|bool
     */
    public function deleteSupplierDocumentShipping(\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSupplierDocumentShippingRequest $paramDeleteSupplierDocumentShippingRequest)
    {
        try {
            $this->setResult($resultDeleteSupplierDocumentShipping = $this->getSoapClient()->__soapCall('deleteSupplierDocumentShipping', [
                $paramDeleteSupplierDocumentShippingRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteSupplierDocumentShipping;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteSupplierPaymentCondition
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSupplierPaymentConditionRequest $paramDeleteSupplierPaymentConditionRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSupplierPaymentConditionResponse|bool
     */
    public function deleteSupplierPaymentCondition(\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSupplierPaymentConditionRequest $paramDeleteSupplierPaymentConditionRequest)
    {
        try {
            $this->setResult($resultDeleteSupplierPaymentCondition = $this->getSoapClient()->__soapCall('deleteSupplierPaymentCondition', [
                $paramDeleteSupplierPaymentConditionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteSupplierPaymentCondition;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteSupplierCancelCondition
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSupplierCancelConditionRequest $paramDeleteSupplierCancelConditionRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSupplierCancelConditionResponse|bool
     */
    public function deleteSupplierCancelCondition(\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSupplierCancelConditionRequest $paramDeleteSupplierCancelConditionRequest)
    {
        try {
            $this->setResult($resultDeleteSupplierCancelCondition = $this->getSoapClient()->__soapCall('deleteSupplierCancelCondition', [
                $paramDeleteSupplierCancelConditionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteSupplierCancelCondition;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteSuppCancelCMapping
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSuppCancelCMappingRequest $paramDeleteSuppCancelCMappingRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSuppCancelCMappingResponse|bool
     */
    public function deleteSuppCancelCMapping(\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSuppCancelCMappingRequest $paramDeleteSuppCancelCMappingRequest)
    {
        try {
            $this->setResult($resultDeleteSuppCancelCMapping = $this->getSoapClient()->__soapCall('deleteSuppCancelCMapping', [
                $paramDeleteSuppCancelCMappingRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteSuppCancelCMapping;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteSuppCancelCEmail
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSuppCancelCEmailRequest $paramDeleteSuppCancelCEmailRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSuppCancelCEmailResponse|bool
     */
    public function deleteSuppCancelCEmail(\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSuppCancelCEmailRequest $paramDeleteSuppCancelCEmailRequest)
    {
        try {
            $this->setResult($resultDeleteSuppCancelCEmail = $this->getSoapClient()->__soapCall('deleteSuppCancelCEmail', [
                $paramDeleteSuppCancelCEmailRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteSuppCancelCEmail;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteAccount
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteAccountRequest $paramDeleteAccountRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteAccountResponse|bool
     */
    public function deleteAccount(\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteAccountRequest $paramDeleteAccountRequest)
    {
        try {
            $this->setResult($resultDeleteAccount = $this->getSoapClient()->__soapCall('deleteAccount', [
                $paramDeleteAccountRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteAccount;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteMediatorCondition
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteMediatorConditionRequest $paramDeleteMediatorConditionRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteMediatorConditionResponse|bool
     */
    public function deleteMediatorCondition(\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteMediatorConditionRequest $paramDeleteMediatorConditionRequest)
    {
        try {
            $this->setResult($resultDeleteMediatorCondition = $this->getSoapClient()->__soapCall('deleteMediatorCondition', [
                $paramDeleteMediatorConditionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteMediatorCondition;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteMediatorType
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteMediatorTypeRequest $paramDeleteMediatorTypeRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteMediatorTypeResponse|bool
     */
    public function deleteMediatorType(\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteMediatorTypeRequest $paramDeleteMediatorTypeRequest)
    {
        try {
            $this->setResult($resultDeleteMediatorType = $this->getSoapClient()->__soapCall('deleteMediatorType', [
                $paramDeleteMediatorTypeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteMediatorType;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteMidocoTextRemark
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteMidocoTextRemarksRequest $paramDeleteMidocoTextRemarksRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteMidocoTextRemarksResponse|bool
     */
    public function deleteMidocoTextRemark(\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteMidocoTextRemarksRequest $paramDeleteMidocoTextRemarksRequest)
    {
        try {
            $this->setResult($resultDeleteMidocoTextRemark = $this->getSoapClient()->__soapCall('deleteMidocoTextRemark', [
                $paramDeleteMidocoTextRemarksRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteMidocoTextRemark;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteMidocoRuleSet
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteMidocoRuleSetRequest $paramDeleteMidocoRuleSetRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteMidocoRuleSetResponse|bool
     */
    public function deleteMidocoRuleSet(\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteMidocoRuleSetRequest $paramDeleteMidocoRuleSetRequest)
    {
        try {
            $this->setResult($resultDeleteMidocoRuleSet = $this->getSoapClient()->__soapCall('deleteMidocoRuleSet', [
                $paramDeleteMidocoRuleSetRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteMidocoRuleSet;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteMidocoFeeType
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteMidocoFeeTypeRequest $paramDeleteMidocoFeeTypeRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteMidocoFeeTypeResponse|bool
     */
    public function deleteMidocoFeeType(\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteMidocoFeeTypeRequest $paramDeleteMidocoFeeTypeRequest)
    {
        try {
            $this->setResult($resultDeleteMidocoFeeType = $this->getSoapClient()->__soapCall('deleteMidocoFeeType', [
                $paramDeleteMidocoFeeTypeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteMidocoFeeType;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteMidocoFeeTypeLocal
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteMidocoFeeTypeLocalRequest $paramDeleteMidocoFeeTypeLocalRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteMidocoFeeTypeLocalResponse|bool
     */
    public function deleteMidocoFeeTypeLocal(\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteMidocoFeeTypeLocalRequest $paramDeleteMidocoFeeTypeLocalRequest)
    {
        try {
            $this->setResult($resultDeleteMidocoFeeTypeLocal = $this->getSoapClient()->__soapCall('deleteMidocoFeeTypeLocal', [
                $paramDeleteMidocoFeeTypeLocalRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteMidocoFeeTypeLocal;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteBankAccount
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteBankAccountRequest $paramDeleteBankAccountRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteBankAccountResponse|bool
     */
    public function deleteBankAccount(\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteBankAccountRequest $paramDeleteBankAccountRequest)
    {
        try {
            $this->setResult($resultDeleteBankAccount = $this->getSoapClient()->__soapCall('deleteBankAccount', [
                $paramDeleteBankAccountRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteBankAccount;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteMidocoTemplate
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteMidocoTemplateRequest $paramDeleteMidocoTemplateRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteMidocoTemplateResponse|bool
     */
    public function deleteMidocoTemplate(\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteMidocoTemplateRequest $paramDeleteMidocoTemplateRequest)
    {
        try {
            $this->setResult($resultDeleteMidocoTemplate = $this->getSoapClient()->__soapCall('deleteMidocoTemplate', [
                $paramDeleteMidocoTemplateRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteMidocoTemplate;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteMidocoTemplateType
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteMidocoTemplateTypeRequest $paramDeleteMidocoTemplateTypeRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteMidocoTemplateTypeResponse|bool
     */
    public function deleteMidocoTemplateType(\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteMidocoTemplateTypeRequest $paramDeleteMidocoTemplateTypeRequest)
    {
        try {
            $this->setResult($resultDeleteMidocoTemplateType = $this->getSoapClient()->__soapCall('deleteMidocoTemplateType', [
                $paramDeleteMidocoTemplateTypeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteMidocoTemplateType;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteMidocoSupplierCommisssion
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteMidocoSupplierCommissionRequest $paramDeleteMidocoSupplierCommissionRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteMidocoSupplierCommissionResponse|bool
     */
    public function deleteMidocoSupplierCommisssion(\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteMidocoSupplierCommissionRequest $paramDeleteMidocoSupplierCommissionRequest)
    {
        try {
            $this->setResult($resultDeleteMidocoSupplierCommisssion = $this->getSoapClient()->__soapCall('deleteMidocoSupplierCommisssion', [
                $paramDeleteMidocoSupplierCommissionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteMidocoSupplierCommisssion;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteCashBookItemType
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteCashBookItemTypeRequest $paramDeleteCashBookItemTypeRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteCashBookItemTypeResponse|bool
     */
    public function deleteCashBookItemType(\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteCashBookItemTypeRequest $paramDeleteCashBookItemTypeRequest)
    {
        try {
            $this->setResult($resultDeleteCashBookItemType = $this->getSoapClient()->__soapCall('deleteCashBookItemType', [
                $paramDeleteCashBookItemTypeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteCashBookItemType;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteAccomodationCode
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteAccomodationCodeRequest $paramDeleteAccomodationCodeRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteAccomodationCodeResponse|bool
     */
    public function deleteAccomodationCode(\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteAccomodationCodeRequest $paramDeleteAccomodationCodeRequest)
    {
        try {
            $this->setResult($resultDeleteAccomodationCode = $this->getSoapClient()->__soapCall('deleteAccomodationCode', [
                $paramDeleteAccomodationCodeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteAccomodationCode;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteCateringCode
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteCateringCodeRequest $paramDeleteCateringCodeRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteCateringCodeResponse|bool
     */
    public function deleteCateringCode(\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteCateringCodeRequest $paramDeleteCateringCodeRequest)
    {
        try {
            $this->setResult($resultDeleteCateringCode = $this->getSoapClient()->__soapCall('deleteCateringCode', [
                $paramDeleteCateringCodeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteCateringCode;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteAreaCode
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteAreaCodeRequest $paramDeleteAreaCodeRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteAreaCodeResponse|bool
     */
    public function deleteAreaCode(\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteAreaCodeRequest $paramDeleteAreaCodeRequest)
    {
        try {
            $this->setResult($resultDeleteAreaCode = $this->getSoapClient()->__soapCall('deleteAreaCode', [
                $paramDeleteAreaCodeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteAreaCode;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteRemarkOrgunit
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteRemarkOrgunitRequest $paramDeleteRemarkOrgunitRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteRemarkOrgunitResponse|bool
     */
    public function deleteRemarkOrgunit(\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteRemarkOrgunitRequest $paramDeleteRemarkOrgunitRequest)
    {
        try {
            $this->setResult($resultDeleteRemarkOrgunit = $this->getSoapClient()->__soapCall('deleteRemarkOrgunit', [
                $paramDeleteRemarkOrgunitRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteRemarkOrgunit;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteSupplierSettlementAccount
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSupplierSettlementAccountRequest $paramDeleteSupplierSettlementAccountRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSupplierSettlementAccountResponse|bool
     */
    public function deleteSupplierSettlementAccount(\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSupplierSettlementAccountRequest $paramDeleteSupplierSettlementAccountRequest)
    {
        try {
            $this->setResult($resultDeleteSupplierSettlementAccount = $this->getSoapClient()->__soapCall('deleteSupplierSettlementAccount', [
                $paramDeleteSupplierSettlementAccountRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteSupplierSettlementAccount;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteRemarkSupplier
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteRemarkSupplierRequest $paramDeleteRemarkSupplierRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteRemarkSupplierResponse|bool
     */
    public function deleteRemarkSupplier(\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteRemarkSupplierRequest $paramDeleteRemarkSupplierRequest)
    {
        try {
            $this->setResult($resultDeleteRemarkSupplier = $this->getSoapClient()->__soapCall('deleteRemarkSupplier', [
                $paramDeleteRemarkSupplierRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteRemarkSupplier;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteSettlementCharge
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSettlementChargeRequest $paramDeleteSettlementChargeRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSettlementChargeResponse|bool
     */
    public function deleteSettlementCharge(\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSettlementChargeRequest $paramDeleteSettlementChargeRequest)
    {
        try {
            $this->setResult($resultDeleteSettlementCharge = $this->getSoapClient()->__soapCall('deleteSettlementCharge', [
                $paramDeleteSettlementChargeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteSettlementCharge;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteSupplierAgency
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSupplierAgencyRequest $paramDeleteSupplierAgencyRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSupplierAgencyResponse|bool
     */
    public function deleteSupplierAgency(\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSupplierAgencyRequest $paramDeleteSupplierAgencyRequest)
    {
        try {
            $this->setResult($resultDeleteSupplierAgency = $this->getSoapClient()->__soapCall('deleteSupplierAgency', [
                $paramDeleteSupplierAgencyRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteSupplierAgency;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteSupplierAgencyReservation
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSupplierAgencyReservationRequest $paramDeleteSupplierAgencyReservationRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSupplierAgencyReservationResponse|bool
     */
    public function deleteSupplierAgencyReservation(\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSupplierAgencyReservationRequest $paramDeleteSupplierAgencyReservationRequest)
    {
        try {
            $this->setResult($resultDeleteSupplierAgencyReservation = $this->getSoapClient()->__soapCall('deleteSupplierAgencyReservation', [
                $paramDeleteSupplierAgencyReservationRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteSupplierAgencyReservation;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteUserQuery
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteUserQueryRequest $paramDeleteUserQueryRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteUserQueryResponse|bool
     */
    public function deleteUserQuery(\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteUserQueryRequest $paramDeleteUserQueryRequest)
    {
        try {
            $this->setResult($resultDeleteUserQuery = $this->getSoapClient()->__soapCall('deleteUserQuery', [
                $paramDeleteUserQueryRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteUserQuery;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteDunningLetter
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteDunningLetterRequest $paramDeleteDunningLetterRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteDunningLetterResponse|bool
     */
    public function deleteDunningLetter(\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteDunningLetterRequest $paramDeleteDunningLetterRequest)
    {
        try {
            $this->setResult($resultDeleteDunningLetter = $this->getSoapClient()->__soapCall('deleteDunningLetter', [
                $paramDeleteDunningLetterRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteDunningLetter;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteProductTypeMediatorCondition
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteProductTypeMediatorConditionRequest $paramDeleteProductTypeMediatorConditionRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteProductTypeMediatorConditionResponse|bool
     */
    public function deleteProductTypeMediatorCondition(\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteProductTypeMediatorConditionRequest $paramDeleteProductTypeMediatorConditionRequest)
    {
        try {
            $this->setResult($resultDeleteProductTypeMediatorCondition = $this->getSoapClient()->__soapCall('deleteProductTypeMediatorCondition', [
                $paramDeleteProductTypeMediatorConditionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteProductTypeMediatorCondition;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteFeeTypeForOrgunit
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteFeeTypeForOrgunitRequest $paramDeleteFeeTypeForOrgunitRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteFeeTypeForOrgunitResponse|bool
     */
    public function deleteFeeTypeForOrgunit(\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteFeeTypeForOrgunitRequest $paramDeleteFeeTypeForOrgunitRequest)
    {
        try {
            $this->setResult($resultDeleteFeeTypeForOrgunit = $this->getSoapClient()->__soapCall('deleteFeeTypeForOrgunit', [
                $paramDeleteFeeTypeForOrgunitRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteFeeTypeForOrgunit;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteFeeGroupAssign
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteFeeGroupAssignRequest $paramDeleteFeeGroupAssignRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteFeeGroupAssignResponse|bool
     */
    public function deleteFeeGroupAssign(\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteFeeGroupAssignRequest $paramDeleteFeeGroupAssignRequest)
    {
        try {
            $this->setResult($resultDeleteFeeGroupAssign = $this->getSoapClient()->__soapCall('deleteFeeGroupAssign', [
                $paramDeleteFeeGroupAssignRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteFeeGroupAssign;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteFeeGroup
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteFeeGroupRequest $paramDeleteFeeGroupRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteFeeGroupResponse|bool
     */
    public function deleteFeeGroup(\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteFeeGroupRequest $paramDeleteFeeGroupRequest)
    {
        try {
            $this->setResult($resultDeleteFeeGroup = $this->getSoapClient()->__soapCall('deleteFeeGroup', [
                $paramDeleteFeeGroupRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteFeeGroup;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteAutoRemark
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteAutoRemarkRequest $paramDeleteAutoRemarkRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteAutoRemarkResponse|bool
     */
    public function deleteAutoRemark(\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteAutoRemarkRequest $paramDeleteAutoRemarkRequest)
    {
        try {
            $this->setResult($resultDeleteAutoRemark = $this->getSoapClient()->__soapCall('deleteAutoRemark', [
                $paramDeleteAutoRemarkRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteAutoRemark;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteSupplierTraveltype
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSupplierTraveltypeRequest $paramDeleteSupplierTraveltypeRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSupplierTraveltypeResponse|bool
     */
    public function deleteSupplierTraveltype(\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSupplierTraveltypeRequest $paramDeleteSupplierTraveltypeRequest)
    {
        try {
            $this->setResult($resultDeleteSupplierTraveltype = $this->getSoapClient()->__soapCall('deleteSupplierTraveltype', [
                $paramDeleteSupplierTraveltypeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteSupplierTraveltype;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteMarketingKeyDescription
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteMarketingKeyDescriptionRequest $paramDeleteMarketingKeyDescriptionRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteMarketingKeyDescriptionResponse|bool
     */
    public function deleteMarketingKeyDescription(\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteMarketingKeyDescriptionRequest $paramDeleteMarketingKeyDescriptionRequest)
    {
        try {
            $this->setResult($resultDeleteMarketingKeyDescription = $this->getSoapClient()->__soapCall('deleteMarketingKeyDescription', [
                $paramDeleteMarketingKeyDescriptionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteMarketingKeyDescription;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteMarketingKey
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteMarketingKeyRequest $paramDeleteMarketingKeyRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteMarketingKeyResponse|bool
     */
    public function deleteMarketingKey(\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteMarketingKeyRequest $paramDeleteMarketingKeyRequest)
    {
        try {
            $this->setResult($resultDeleteMarketingKey = $this->getSoapClient()->__soapCall('deleteMarketingKey', [
                $paramDeleteMarketingKeyRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteMarketingKey;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteBookingText
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteBookingTextRequest $paramDeleteBookingTextRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteBookingTextResponse|bool
     */
    public function deleteBookingText(\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteBookingTextRequest $paramDeleteBookingTextRequest)
    {
        try {
            $this->setResult($resultDeleteBookingText = $this->getSoapClient()->__soapCall('deleteBookingText', [
                $paramDeleteBookingTextRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteBookingText;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteMidocoSettlementType
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteMidocoSettlementTypeRequest $paramDeleteMidocoSettlementTypeRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteMidocoSettlementTypeResponse|bool
     */
    public function deleteMidocoSettlementType(\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteMidocoSettlementTypeRequest $paramDeleteMidocoSettlementTypeRequest)
    {
        try {
            $this->setResult($resultDeleteMidocoSettlementType = $this->getSoapClient()->__soapCall('deleteMidocoSettlementType', [
                $paramDeleteMidocoSettlementTypeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteMidocoSettlementType;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteCurrencyRate
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteCurrencyRateRequest $paramDeleteCurrencyRateRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteCurrencyRateResponse|bool
     */
    public function deleteCurrencyRate(\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteCurrencyRateRequest $paramDeleteCurrencyRateRequest)
    {
        try {
            $this->setResult($resultDeleteCurrencyRate = $this->getSoapClient()->__soapCall('deleteCurrencyRate', [
                $paramDeleteCurrencyRateRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteCurrencyRate;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteHedgeCurrencyRate
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteHedgeCurrencyRateRequest $paramDeleteHedgeCurrencyRateRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteHedgeCurrencyRateResponse|bool
     */
    public function deleteHedgeCurrencyRate(\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteHedgeCurrencyRateRequest $paramDeleteHedgeCurrencyRateRequest)
    {
        try {
            $this->setResult($resultDeleteHedgeCurrencyRate = $this->getSoapClient()->__soapCall('deleteHedgeCurrencyRate', [
                $paramDeleteHedgeCurrencyRateRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteHedgeCurrencyRate;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteTravelNumber
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteTravelNumberRequest $paramDeleteTravelNumberRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteTravelNumberResponse|bool
     */
    public function deleteTravelNumber(\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteTravelNumberRequest $paramDeleteTravelNumberRequest)
    {
        try {
            $this->setResult($resultDeleteTravelNumber = $this->getSoapClient()->__soapCall('deleteTravelNumber', [
                $paramDeleteTravelNumberRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteTravelNumber;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteCostCentre
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteCostCentreRequest $paramDeleteCostCentreRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteCostCentreResponse|bool
     */
    public function deleteCostCentre(\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteCostCentreRequest $paramDeleteCostCentreRequest)
    {
        try {
            $this->setResult($resultDeleteCostCentre = $this->getSoapClient()->__soapCall('deleteCostCentre', [
                $paramDeleteCostCentreRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteCostCentre;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteSupplierAddress
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSupplierAddressRequest $paramDeleteSupplierAddressRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSupplierAddressResponse|bool
     */
    public function deleteSupplierAddress(\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSupplierAddressRequest $paramDeleteSupplierAddressRequest)
    {
        try {
            $this->setResult($resultDeleteSupplierAddress = $this->getSoapClient()->__soapCall('deleteSupplierAddress', [
                $paramDeleteSupplierAddressRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteSupplierAddress;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteSupplierNotice
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSupplierNoticeRequest $paramDeleteSupplierNoticeRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSupplierNoticeResponse|bool
     */
    public function deleteSupplierNotice(\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSupplierNoticeRequest $paramDeleteSupplierNoticeRequest)
    {
        try {
            $this->setResult($resultDeleteSupplierNotice = $this->getSoapClient()->__soapCall('deleteSupplierNotice', [
                $paramDeleteSupplierNoticeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteSupplierNotice;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteMiscPaymentSetting
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteMiscPaymentSettingRequest $paramDeleteMiscPaymentSettingRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteMiscPaymentSettingResponse|bool
     */
    public function deleteMiscPaymentSetting(\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteMiscPaymentSettingRequest $paramDeleteMiscPaymentSettingRequest)
    {
        try {
            $this->setResult($resultDeleteMiscPaymentSetting = $this->getSoapClient()->__soapCall('deleteMiscPaymentSetting', [
                $paramDeleteMiscPaymentSettingRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteMiscPaymentSetting;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteMidocoSupplierTemplate
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteMidocoSupplierTemplateRequest $paramDeleteMidocoSupplierTemplateRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteMidocoSupplierTemplateResponse|bool
     */
    public function deleteMidocoSupplierTemplate(\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteMidocoSupplierTemplateRequest $paramDeleteMidocoSupplierTemplateRequest)
    {
        try {
            $this->setResult($resultDeleteMidocoSupplierTemplate = $this->getSoapClient()->__soapCall('deleteMidocoSupplierTemplate', [
                $paramDeleteMidocoSupplierTemplateRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteMidocoSupplierTemplate;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteMidocoCrsSystem
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteMidocoCrsSystemRequest $paramDeleteMidocoCrsSystemRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteMidocoCrsSystemResponse|bool
     */
    public function deleteMidocoCrsSystem(\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteMidocoCrsSystemRequest $paramDeleteMidocoCrsSystemRequest)
    {
        try {
            $this->setResult($resultDeleteMidocoCrsSystem = $this->getSoapClient()->__soapCall('deleteMidocoCrsSystem', [
                $paramDeleteMidocoCrsSystemRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteMidocoCrsSystem;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteMidocoQuestion
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteMidocoQuestionRequest $paramDeleteMidocoQuestionRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteMidocoQuestionResponse|bool
     */
    public function deleteMidocoQuestion(\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteMidocoQuestionRequest $paramDeleteMidocoQuestionRequest)
    {
        try {
            $this->setResult($resultDeleteMidocoQuestion = $this->getSoapClient()->__soapCall('deleteMidocoQuestion', [
                $paramDeleteMidocoQuestionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteMidocoQuestion;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteMidocoQuestionValue
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteMidocoQuestionValueRequest $paramDeleteMidocoQuestionValueRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteMidocoQuestionValueResponse|bool
     */
    public function deleteMidocoQuestionValue(\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteMidocoQuestionValueRequest $paramDeleteMidocoQuestionValueRequest)
    {
        try {
            $this->setResult($resultDeleteMidocoQuestionValue = $this->getSoapClient()->__soapCall('deleteMidocoQuestionValue', [
                $paramDeleteMidocoQuestionValueRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteMidocoQuestionValue;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteTravelNumberAutoRemark
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteTravelNumberAutoRemarkRequest $paramDeleteTravelNumberAutoRemarkRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteTravelNumberAutoRemarkResponse|bool
     */
    public function deleteTravelNumberAutoRemark(\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteTravelNumberAutoRemarkRequest $paramDeleteTravelNumberAutoRemarkRequest)
    {
        try {
            $this->setResult($resultDeleteTravelNumberAutoRemark = $this->getSoapClient()->__soapCall('deleteTravelNumberAutoRemark', [
                $paramDeleteTravelNumberAutoRemarkRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteTravelNumberAutoRemark;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteTravelNumberDocument
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteTravelNumberDocumentRequest $paramDeleteTravelNumberDocumentRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteTravelNumberDocumentResponse|bool
     */
    public function deleteTravelNumberDocument(\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteTravelNumberDocumentRequest $paramDeleteTravelNumberDocumentRequest)
    {
        try {
            $this->setResult($resultDeleteTravelNumberDocument = $this->getSoapClient()->__soapCall('deleteTravelNumberDocument', [
                $paramDeleteTravelNumberDocumentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteTravelNumberDocument;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteDestinationAutoRemark
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteDestinationAutoRemarkRequest $paramDeleteDestinationAutoRemarkRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteDestinationAutoRemarkResponse|bool
     */
    public function deleteDestinationAutoRemark(\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteDestinationAutoRemarkRequest $paramDeleteDestinationAutoRemarkRequest)
    {
        try {
            $this->setResult($resultDeleteDestinationAutoRemark = $this->getSoapClient()->__soapCall('deleteDestinationAutoRemark', [
                $paramDeleteDestinationAutoRemarkRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteDestinationAutoRemark;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteDestinationDocument
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteDestinationDocumentRequest $paramDeleteDestinationDocumentRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteDestinationDocumentResponse|bool
     */
    public function deleteDestinationDocument(\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteDestinationDocumentRequest $paramDeleteDestinationDocumentRequest)
    {
        try {
            $this->setResult($resultDeleteDestinationDocument = $this->getSoapClient()->__soapCall('deleteDestinationDocument', [
                $paramDeleteDestinationDocumentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteDestinationDocument;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteSupplierDocument
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSupplierDocumentRequest $paramDeleteSupplierDocumentRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSupplierDocumentResponse|bool
     */
    public function deleteSupplierDocument(\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSupplierDocumentRequest $paramDeleteSupplierDocumentRequest)
    {
        try {
            $this->setResult($resultDeleteSupplierDocument = $this->getSoapClient()->__soapCall('deleteSupplierDocument', [
                $paramDeleteSupplierDocumentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteSupplierDocument;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteSupplierDisabledUnits
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSupplierDisabledUnitsRequest $paramDeleteSupplierDisabledUnitsRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSupplierDisabledUnitsResponse|bool
     */
    public function deleteSupplierDisabledUnits(\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSupplierDisabledUnitsRequest $paramDeleteSupplierDisabledUnitsRequest)
    {
        try {
            $this->setResult($resultDeleteSupplierDisabledUnits = $this->getSoapClient()->__soapCall('deleteSupplierDisabledUnits', [
                $paramDeleteSupplierDisabledUnitsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteSupplierDisabledUnits;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * deleteOrdCriteriaTypeCategoryDescription
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteOrdCriteriaTypeCategoryDescriptionRequest $paramDeleteOrdCriteriaTypeCategoryDescriptionRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteOrdCriteriaTypeCategoryDescriptionResponse|bool
     */
    public function deleteOrdCriteriaTypeCategoryDescription(\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteOrdCriteriaTypeCategoryDescriptionRequest $paramDeleteOrdCriteriaTypeCategoryDescriptionRequest)
    {
        try {
            $this->setResult($resultDeleteOrdCriteriaTypeCategoryDescription = $this->getSoapClient()->__soapCall('deleteOrdCriteriaTypeCategoryDescription', [
                $paramDeleteOrdCriteriaTypeCategoryDescriptionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteOrdCriteriaTypeCategoryDescription;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteOrdCriteriaTypeCategory
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteOrdCriteriaTypeCategoryRequest $paramDeleteOrdCriteriaTypeCategoryRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteOrdCriteriaTypeCategoryResponse|bool
     */
    public function deleteOrdCriteriaTypeCategory(\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteOrdCriteriaTypeCategoryRequest $paramDeleteOrdCriteriaTypeCategoryRequest)
    {
        try {
            $this->setResult($resultDeleteOrdCriteriaTypeCategory = $this->getSoapClient()->__soapCall('deleteOrdCriteriaTypeCategory', [
                $paramDeleteOrdCriteriaTypeCategoryRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteOrdCriteriaTypeCategory;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteProductTypeSupplier
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteProductTypeSupplierRequest $paramDeleteProductTypeSupplierRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteProductTypeSupplierResponse|bool
     */
    public function deleteProductTypeSupplier(\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteProductTypeSupplierRequest $paramDeleteProductTypeSupplierRequest)
    {
        try {
            $this->setResult($resultDeleteProductTypeSupplier = $this->getSoapClient()->__soapCall('deleteProductTypeSupplier', [
                $paramDeleteProductTypeSupplierRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteProductTypeSupplier;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteVoucherType
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteVoucherTypeRequest $paramDeleteVoucherTypeRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteVoucherTypeResponse|bool
     */
    public function deleteVoucherType(\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteVoucherTypeRequest $paramDeleteVoucherTypeRequest)
    {
        try {
            $this->setResult($resultDeleteVoucherType = $this->getSoapClient()->__soapCall('deleteVoucherType', [
                $paramDeleteVoucherTypeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteVoucherType;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteExternVoucherType
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteExternVoucherTypeRequest $paramDeleteExternVoucherTypeRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteExternVoucherTypeResponse|bool
     */
    public function deleteExternVoucherType(\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteExternVoucherTypeRequest $paramDeleteExternVoucherTypeRequest)
    {
        try {
            $this->setResult($resultDeleteExternVoucherType = $this->getSoapClient()->__soapCall('deleteExternVoucherType', [
                $paramDeleteExternVoucherTypeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteExternVoucherType;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteSupplierShipName
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSupplierShipNameRequest $paramDeleteSupplierShipNameRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSupplierShipNameResponse|bool
     */
    public function deleteSupplierShipName(\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSupplierShipNameRequest $paramDeleteSupplierShipNameRequest)
    {
        try {
            $this->setResult($resultDeleteSupplierShipName = $this->getSoapClient()->__soapCall('deleteSupplierShipName', [
                $paramDeleteSupplierShipNameRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteSupplierShipName;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteSupplierSettlementDiff
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSupplierSettlementDiffRequest $paramDeleteSupplierSettlementDiffRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSupplierSettlementDiffResponse|bool
     */
    public function deleteSupplierSettlementDiff(\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSupplierSettlementDiffRequest $paramDeleteSupplierSettlementDiffRequest)
    {
        try {
            $this->setResult($resultDeleteSupplierSettlementDiff = $this->getSoapClient()->__soapCall('deleteSupplierSettlementDiff', [
                $paramDeleteSupplierSettlementDiffRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteSupplierSettlementDiff;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteSupplierCommissionCondition
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSupplierCommissionConditionRequest $paramDeleteSupplierCommissionConditionRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSupplierCommissionConditionResponse|bool
     */
    public function deleteSupplierCommissionCondition(\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSupplierCommissionConditionRequest $paramDeleteSupplierCommissionConditionRequest)
    {
        try {
            $this->setResult($resultDeleteSupplierCommissionCondition = $this->getSoapClient()->__soapCall('deleteSupplierCommissionCondition', [
                $paramDeleteSupplierCommissionConditionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteSupplierCommissionCondition;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * deleteSupplierSettlPaymentCondition
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSupplierSettlPaymentConditionRequest $paramDeleteSupplierSettlPaymentConditionRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSupplierSettlPaymentConditionResponse|bool
     */
    public function deleteSupplierSettlPaymentCondition(\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSupplierSettlPaymentConditionRequest $paramDeleteSupplierSettlPaymentConditionRequest)
    {
        try {
            $this->setResult($resultDeleteSupplierSettlPaymentCondition = $this->getSoapClient()->__soapCall('deleteSupplierSettlPaymentCondition', [
                $paramDeleteSupplierSettlPaymentConditionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteSupplierSettlPaymentCondition;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deletePaymentProvider
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\DeletePaymentProviderRequest $paramDeletePaymentProviderRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeletePaymentProviderResponse|bool
     */
    public function deletePaymentProvider(\Pggns\MidocoApi\Api\OrderSD\StructType\DeletePaymentProviderRequest $paramDeletePaymentProviderRequest)
    {
        try {
            $this->setResult($resultDeletePaymentProvider = $this->getSoapClient()->__soapCall('deletePaymentProvider', [
                $paramDeletePaymentProviderRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeletePaymentProvider;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteCabinClass
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteCabinClassRequest $paramDeleteCabinClassRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteCabinClassResponse|bool
     */
    public function deleteCabinClass(\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteCabinClassRequest $paramDeleteCabinClassRequest)
    {
        try {
            $this->setResult($resultDeleteCabinClass = $this->getSoapClient()->__soapCall('deleteCabinClass', [
                $paramDeleteCabinClassRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteCabinClass;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteAccomodationCodeResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteAccountResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteAreaCodeResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteAutoRemarkResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteBankAccountResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteBookingTextResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteCabinClassResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteCashBookItemTypeResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteCateringCodeResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteCostCentreResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteCurrencyRateResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteDestinationAutoRemarkResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteDestinationDocumentResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteDunningLetterResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteExternVoucherTypeResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteFeeGroupAssignResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteFeeGroupResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteFeeTypeForOrgunitResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteHedgeCurrencyRateResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteMarketingKeyDescriptionResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteMarketingKeyResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteMediatorConditionResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteMediatorTypeResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteMidocoCrsSystemResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteMidocoFeeTypeLocalResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteMidocoFeeTypeResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteMidocoQuestionResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteMidocoQuestionValueResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteMidocoRuleSetResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteMidocoSettlementTypeResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteMidocoSupplierCommissionResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteMidocoSupplierTemplateResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteMidocoTemplateResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteMidocoTemplateTypeResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteMidocoTextRemarksResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteMiscPaymentSettingResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteOrdCriteriaTypeCategoryDescriptionResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteOrdCriteriaTypeCategoryResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\DeletePaymentProviderResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteProductTypeMediatorConditionResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteProductTypeSupplierResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteRemarkOrgunitResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteRemarkSupplierResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSettlementChargeResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSuppCancelCEmailResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSuppCancelCMappingResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSupplierAccountAssignResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSupplierAddressResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSupplierAgencyReservationResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSupplierAgencyResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSupplierCancelConditionResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSupplierCcCardResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSupplierCommissionConditionResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSupplierDisabledUnitsResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSupplierDocumentResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSupplierDocumentShippingResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSupplierNoticeResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSupplierPaymentConditionResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSupplierResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSupplierSettlementAccountResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSupplierSettlementDiffResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSupplierSettlPaymentConditionResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSupplierShipNameResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteSupplierTraveltypeResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteTravelNumberAutoRemarkResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteTravelNumberDocumentResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteTravelNumberResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteUserQueryResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\DeleteVoucherTypeResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
