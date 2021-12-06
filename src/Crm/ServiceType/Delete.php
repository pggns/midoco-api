<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\ServiceType;

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
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Api\Crm\ServiceType\Delete
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named deleteCustomer
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\DeleteCustomerRequest $paramDeleteCustomerRequest
     * @return \Pggns\MidocoApi\Api\Crm\StructType\DeleteCustomerResponse|bool
     */
    public function deleteCustomer(\Pggns\MidocoApi\Api\Crm\StructType\DeleteCustomerRequest $paramDeleteCustomerRequest)
    {
        try {
            $this->setResult($resultDeleteCustomer = $this->getSoapClient()->__soapCall('deleteCustomer', [
                $paramDeleteCustomerRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteCustomer;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteAddress
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\DeleteAddressRequest $paramDeleteAddressRequest
     * @return \Pggns\MidocoApi\Api\Crm\StructType\DeleteAddressResponse|bool
     */
    public function deleteAddress(\Pggns\MidocoApi\Api\Crm\StructType\DeleteAddressRequest $paramDeleteAddressRequest)
    {
        try {
            $this->setResult($resultDeleteAddress = $this->getSoapClient()->__soapCall('deleteAddress', [
                $paramDeleteAddressRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteAddress;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteTraveller
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\DeleteTravellerRequest $paramDeleteTravellerRequest
     * @return \Pggns\MidocoApi\Api\Crm\StructType\DeleteTravellerResponse|bool
     */
    public function deleteTraveller(\Pggns\MidocoApi\Api\Crm\StructType\DeleteTravellerRequest $paramDeleteTravellerRequest)
    {
        try {
            $this->setResult($resultDeleteTraveller = $this->getSoapClient()->__soapCall('deleteTraveller', [
                $paramDeleteTravellerRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteTraveller;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteContactEntry
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\DeleteContactEntryRequest $paramDeleteContactEntryRequest
     * @return \Pggns\MidocoApi\Api\Crm\StructType\DeleteContactEntryResponse|bool
     */
    public function deleteContactEntry(\Pggns\MidocoApi\Api\Crm\StructType\DeleteContactEntryRequest $paramDeleteContactEntryRequest)
    {
        try {
            $this->setResult($resultDeleteContactEntry = $this->getSoapClient()->__soapCall('deleteContactEntry', [
                $paramDeleteContactEntryRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteContactEntry;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteCustomerCriteria
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\DeleteCustomerCriteriaRequest $paramDeleteCustomerCriteriaRequest
     * @return \Pggns\MidocoApi\Api\Crm\StructType\DeleteCustomerCriteriaResponse|bool
     */
    public function deleteCustomerCriteria(\Pggns\MidocoApi\Api\Crm\StructType\DeleteCustomerCriteriaRequest $paramDeleteCustomerCriteriaRequest)
    {
        try {
            $this->setResult($resultDeleteCustomerCriteria = $this->getSoapClient()->__soapCall('deleteCustomerCriteria', [
                $paramDeleteCustomerCriteriaRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteCustomerCriteria;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteDocument
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\DeleteDocumentRequest $paramDeleteDocumentRequest
     * @return \Pggns\MidocoApi\Api\Crm\StructType\DeleteDocumentResponse|bool
     */
    public function deleteDocument(\Pggns\MidocoApi\Api\Crm\StructType\DeleteDocumentRequest $paramDeleteDocumentRequest)
    {
        try {
            $this->setResult($resultDeleteDocument = $this->getSoapClient()->__soapCall('deleteDocument', [
                $paramDeleteDocumentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteDocument;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteDebitCard
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\DeleteDebitCardRequest $paramDeleteDebitCardRequest
     * @return \Pggns\MidocoApi\Api\Crm\StructType\DeleteDebitCardResponse|bool
     */
    public function deleteDebitCard(\Pggns\MidocoApi\Api\Crm\StructType\DeleteDebitCardRequest $paramDeleteDebitCardRequest)
    {
        try {
            $this->setResult($resultDeleteDebitCard = $this->getSoapClient()->__soapCall('deleteDebitCard', [
                $paramDeleteDebitCardRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteDebitCard;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteCcCard
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\DeleteCcCardRequest $paramDeleteCcCardRequest
     * @return \Pggns\MidocoApi\Api\Crm\StructType\DeleteCcCardResponse|bool
     */
    public function deleteCcCard(\Pggns\MidocoApi\Api\Crm\StructType\DeleteCcCardRequest $paramDeleteCcCardRequest)
    {
        try {
            $this->setResult($resultDeleteCcCard = $this->getSoapClient()->__soapCall('deleteCcCard', [
                $paramDeleteCcCardRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteCcCard;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteBonusCard
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\DeleteBonusCardRequest $paramDeleteBonusCardRequest
     * @return \Pggns\MidocoApi\Api\Crm\StructType\DeleteBonusCardResponse|bool
     */
    public function deleteBonusCard(\Pggns\MidocoApi\Api\Crm\StructType\DeleteBonusCardRequest $paramDeleteBonusCardRequest)
    {
        try {
            $this->setResult($resultDeleteBonusCard = $this->getSoapClient()->__soapCall('deleteBonusCard', [
                $paramDeleteBonusCardRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteBonusCard;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteComplaint
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\DeleteComplaintRequest $paramDeleteComplaintRequest
     * @return \Pggns\MidocoApi\Api\Crm\StructType\DeleteComplaintResponse|bool
     */
    public function deleteComplaint(\Pggns\MidocoApi\Api\Crm\StructType\DeleteComplaintRequest $paramDeleteComplaintRequest)
    {
        try {
            $this->setResult($resultDeleteComplaint = $this->getSoapClient()->__soapCall('deleteComplaint', [
                $paramDeleteComplaintRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteComplaint;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteComplaintDocument
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\DeleteComplaintDocumentRequest $paramDeleteComplaintDocumentRequest
     * @return \Pggns\MidocoApi\Api\Crm\StructType\DeleteComplaintDocumentResponse|bool
     */
    public function deleteComplaintDocument(\Pggns\MidocoApi\Api\Crm\StructType\DeleteComplaintDocumentRequest $paramDeleteComplaintDocumentRequest)
    {
        try {
            $this->setResult($resultDeleteComplaintDocument = $this->getSoapClient()->__soapCall('deleteComplaintDocument', [
                $paramDeleteComplaintDocumentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteComplaintDocument;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteComplaintReason
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\DeleteComplaintReasonRequest $paramDeleteComplaintReasonRequest
     * @return \Pggns\MidocoApi\Api\Crm\StructType\DeleteComplaintReasonResponse|bool
     */
    public function deleteComplaintReason(\Pggns\MidocoApi\Api\Crm\StructType\DeleteComplaintReasonRequest $paramDeleteComplaintReasonRequest)
    {
        try {
            $this->setResult($resultDeleteComplaintReason = $this->getSoapClient()->__soapCall('deleteComplaintReason', [
                $paramDeleteComplaintReasonRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteComplaintReason;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteMidocoCrmCustomerPayment
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\DeleteMidocoCrmCustomerPaymentRequest $paramDeleteMidocoCrmCustomerPaymentRequest
     * @return \Pggns\MidocoApi\Api\Crm\StructType\DeleteMidocoCrmCustomerPaymentResponse|bool
     */
    public function deleteMidocoCrmCustomerPayment(\Pggns\MidocoApi\Api\Crm\StructType\DeleteMidocoCrmCustomerPaymentRequest $paramDeleteMidocoCrmCustomerPaymentRequest)
    {
        try {
            $this->setResult($resultDeleteMidocoCrmCustomerPayment = $this->getSoapClient()->__soapCall('deleteMidocoCrmCustomerPayment', [
                $paramDeleteMidocoCrmCustomerPaymentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteMidocoCrmCustomerPayment;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteAgencyCommission
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\DeleteAgencyCommissionRequest $paramDeleteAgencyCommissionRequest
     * @return \Pggns\MidocoApi\Api\Crm\StructType\DeleteAgencyCommissionResponse|bool
     */
    public function deleteAgencyCommission(\Pggns\MidocoApi\Api\Crm\StructType\DeleteAgencyCommissionRequest $paramDeleteAgencyCommissionRequest)
    {
        try {
            $this->setResult($resultDeleteAgencyCommission = $this->getSoapClient()->__soapCall('deleteAgencyCommission', [
                $paramDeleteAgencyCommissionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteAgencyCommission;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteMediatorTextTemplate
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\DeleteMediatorTextTemplateRequest $paramDeleteMediatorTextTemplateRequest
     * @return \Pggns\MidocoApi\Api\Crm\StructType\DeleteMediatorTextTemplateResponse|bool
     */
    public function deleteMediatorTextTemplate(\Pggns\MidocoApi\Api\Crm\StructType\DeleteMediatorTextTemplateRequest $paramDeleteMediatorTextTemplateRequest)
    {
        try {
            $this->setResult($resultDeleteMediatorTextTemplate = $this->getSoapClient()->__soapCall('deleteMediatorTextTemplate', [
                $paramDeleteMediatorTextTemplateRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteMediatorTextTemplate;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteMediatorSettlementLevel
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\DeleteMediatorSettlementLevelsRequest $paramDeleteMediatorSettlementLevelsRequest
     * @return \Pggns\MidocoApi\Api\Crm\StructType\DeleteMediatorSettlementLevelsResponse|bool
     */
    public function deleteMediatorSettlementLevel(\Pggns\MidocoApi\Api\Crm\StructType\DeleteMediatorSettlementLevelsRequest $paramDeleteMediatorSettlementLevelsRequest)
    {
        try {
            $this->setResult($resultDeleteMediatorSettlementLevel = $this->getSoapClient()->__soapCall('deleteMediatorSettlementLevel', [
                $paramDeleteMediatorSettlementLevelsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteMediatorSettlementLevel;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteMediatorCharge
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\DeleteMediatorChargeRequest $paramDeleteMediatorChargeRequest
     * @return \Pggns\MidocoApi\Api\Crm\StructType\DeleteMediatorChargeResponse|bool
     */
    public function deleteMediatorCharge(\Pggns\MidocoApi\Api\Crm\StructType\DeleteMediatorChargeRequest $paramDeleteMediatorChargeRequest)
    {
        try {
            $this->setResult($resultDeleteMediatorCharge = $this->getSoapClient()->__soapCall('deleteMediatorCharge', [
                $paramDeleteMediatorChargeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteMediatorCharge;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteGroupAdvisor
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\DeleteGroupAdvisorRequest $paramDeleteGroupAdvisorRequest
     * @return \Pggns\MidocoApi\Api\Crm\StructType\DeleteGroupAdvisorResponse|bool
     */
    public function deleteGroupAdvisor(\Pggns\MidocoApi\Api\Crm\StructType\DeleteGroupAdvisorRequest $paramDeleteGroupAdvisorRequest)
    {
        try {
            $this->setResult($resultDeleteGroupAdvisor = $this->getSoapClient()->__soapCall('deleteGroupAdvisor', [
                $paramDeleteGroupAdvisorRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteGroupAdvisor;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteAgencyNumber
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\DeleteMidocoAgencyNumberRequest $paramDeleteMidocoAgencyNumberRequest
     * @return \Pggns\MidocoApi\Api\Crm\StructType\DeleteMidocoAgencyNumberResponse|bool
     */
    public function deleteAgencyNumber(\Pggns\MidocoApi\Api\Crm\StructType\DeleteMidocoAgencyNumberRequest $paramDeleteMidocoAgencyNumberRequest)
    {
        try {
            $this->setResult($resultDeleteAgencyNumber = $this->getSoapClient()->__soapCall('deleteAgencyNumber', [
                $paramDeleteMidocoAgencyNumberRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteAgencyNumber;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteSupplierReportFormat
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\DeleteSupplierReportFormatRequest $paramDeleteSupplierReportFormatRequest
     * @return \Pggns\MidocoApi\Api\Crm\StructType\DeleteSupplierReportFormatResponse|bool
     */
    public function deleteSupplierReportFormat(\Pggns\MidocoApi\Api\Crm\StructType\DeleteSupplierReportFormatRequest $paramDeleteSupplierReportFormatRequest)
    {
        try {
            $this->setResult($resultDeleteSupplierReportFormat = $this->getSoapClient()->__soapCall('deleteSupplierReportFormat', [
                $paramDeleteSupplierReportFormatRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteSupplierReportFormat;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteCrmNotice
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\DeleteCrmNoticeRequest $paramDeleteCrmNoticeRequest
     * @return \Pggns\MidocoApi\Api\Crm\StructType\DeleteCrmNoticeResponse|bool
     */
    public function deleteCrmNotice(\Pggns\MidocoApi\Api\Crm\StructType\DeleteCrmNoticeRequest $paramDeleteCrmNoticeRequest)
    {
        try {
            $this->setResult($resultDeleteCrmNotice = $this->getSoapClient()->__soapCall('deleteCrmNotice', [
                $paramDeleteCrmNoticeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteCrmNotice;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteCustomerCommissionDefinition
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\DeleteCustomerCommissionDefinitionRequest $paramDeleteCustomerCommissionDefinitionRequest
     * @return \Pggns\MidocoApi\Api\Crm\StructType\DeleteCustomerCommissionDefinitionResponse|bool
     */
    public function deleteCustomerCommissionDefinition(\Pggns\MidocoApi\Api\Crm\StructType\DeleteCustomerCommissionDefinitionRequest $paramDeleteCustomerCommissionDefinitionRequest)
    {
        try {
            $this->setResult($resultDeleteCustomerCommissionDefinition = $this->getSoapClient()->__soapCall('deleteCustomerCommissionDefinition', [
                $paramDeleteCustomerCommissionDefinitionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteCustomerCommissionDefinition;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deletePrintRecipient
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\DeletePrintRecipientRequest $paramDeletePrintRecipientRequest
     * @return \Pggns\MidocoApi\Api\Crm\StructType\DeletePrintRecipientResponse|bool
     */
    public function deletePrintRecipient(\Pggns\MidocoApi\Api\Crm\StructType\DeletePrintRecipientRequest $paramDeletePrintRecipientRequest)
    {
        try {
            $this->setResult($resultDeletePrintRecipient = $this->getSoapClient()->__soapCall('deletePrintRecipient', [
                $paramDeletePrintRecipientRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeletePrintRecipient;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteCrmPersonTraveller
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\DeleteCrmPersonTravellerRequest $paramDeleteCrmPersonTravellerRequest
     * @return \Pggns\MidocoApi\Api\Crm\StructType\DeleteCrmPersonTravellerResponse|bool
     */
    public function deleteCrmPersonTraveller(\Pggns\MidocoApi\Api\Crm\StructType\DeleteCrmPersonTravellerRequest $paramDeleteCrmPersonTravellerRequest)
    {
        try {
            $this->setResult($resultDeleteCrmPersonTraveller = $this->getSoapClient()->__soapCall('deleteCrmPersonTraveller', [
                $paramDeleteCrmPersonTravellerRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteCrmPersonTraveller;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteFrequentFlyerNumbers
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\DeleteFrequentFlyerNumberRequest $paramDeleteFrequentFlyerNumberRequest
     * @return \Pggns\MidocoApi\Api\Crm\StructType\DeleteFrequentFlyerNumberResponse|bool
     */
    public function deleteFrequentFlyerNumbers(\Pggns\MidocoApi\Api\Crm\StructType\DeleteFrequentFlyerNumberRequest $paramDeleteFrequentFlyerNumberRequest)
    {
        try {
            $this->setResult($resultDeleteFrequentFlyerNumbers = $this->getSoapClient()->__soapCall('deleteFrequentFlyerNumbers', [
                $paramDeleteFrequentFlyerNumberRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteFrequentFlyerNumbers;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteCustomerMf
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\DeleteCustomerMfRequest $paramDeleteCustomerMfRequest
     * @return \Pggns\MidocoApi\Api\Crm\StructType\DeleteCustomerMfResponse|bool
     */
    public function deleteCustomerMf(\Pggns\MidocoApi\Api\Crm\StructType\DeleteCustomerMfRequest $paramDeleteCustomerMfRequest)
    {
        try {
            $this->setResult($resultDeleteCustomerMf = $this->getSoapClient()->__soapCall('deleteCustomerMf', [
                $paramDeleteCustomerMfRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteCustomerMf;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteContactSource
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\DeleteContactSourceRequest $paramDeleteContactSourceRequest
     * @return \Pggns\MidocoApi\Api\Crm\StructType\DeleteContactSourceResponse|bool
     */
    public function deleteContactSource(\Pggns\MidocoApi\Api\Crm\StructType\DeleteContactSourceRequest $paramDeleteContactSourceRequest)
    {
        try {
            $this->setResult($resultDeleteContactSource = $this->getSoapClient()->__soapCall('deleteContactSource', [
                $paramDeleteContactSourceRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteContactSource;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteCreditor
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\DeleteCreditorRequest $paramDeleteCreditorRequest
     * @return \Pggns\MidocoApi\Api\Crm\StructType\DeleteCreditorResponse|bool
     */
    public function deleteCreditor(\Pggns\MidocoApi\Api\Crm\StructType\DeleteCreditorRequest $paramDeleteCreditorRequest)
    {
        try {
            $this->setResult($resultDeleteCreditor = $this->getSoapClient()->__soapCall('deleteCreditor', [
                $paramDeleteCreditorRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteCreditor;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteCommunicationHistories
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\DeleteCommunicationHistoriesRequest $paramDeleteCommunicationHistoriesRequest
     * @return \Pggns\MidocoApi\Api\Crm\StructType\DeleteCommunicationHistoriesResponse|bool
     */
    public function deleteCommunicationHistories(\Pggns\MidocoApi\Api\Crm\StructType\DeleteCommunicationHistoriesRequest $paramDeleteCommunicationHistoriesRequest)
    {
        try {
            $this->setResult($resultDeleteCommunicationHistories = $this->getSoapClient()->__soapCall('deleteCommunicationHistories', [
                $paramDeleteCommunicationHistoriesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteCommunicationHistories;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteAgencyCooperationHistory
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\DeleteAgencyCooperationHistoryRequest $paramDeleteAgencyCooperationHistoryRequest
     * @return \Pggns\MidocoApi\Api\Crm\StructType\DeleteAgencyCooperationHistoryResponse|bool
     */
    public function deleteAgencyCooperationHistory(\Pggns\MidocoApi\Api\Crm\StructType\DeleteAgencyCooperationHistoryRequest $paramDeleteAgencyCooperationHistoryRequest)
    {
        try {
            $this->setResult($resultDeleteAgencyCooperationHistory = $this->getSoapClient()->__soapCall('deleteAgencyCooperationHistory', [
                $paramDeleteAgencyCooperationHistoryRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteAgencyCooperationHistory;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteCollectiveInvoiceSetting
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\DeleteCollectiveInvoiceSettingRequest $paramDeleteCollectiveInvoiceSettingRequest
     * @return \Pggns\MidocoApi\Api\Crm\StructType\DeleteCollectiveInvoiceSettingResponse|bool
     */
    public function deleteCollectiveInvoiceSetting(\Pggns\MidocoApi\Api\Crm\StructType\DeleteCollectiveInvoiceSettingRequest $paramDeleteCollectiveInvoiceSettingRequest)
    {
        try {
            $this->setResult($resultDeleteCollectiveInvoiceSetting = $this->getSoapClient()->__soapCall('deleteCollectiveInvoiceSetting', [
                $paramDeleteCollectiveInvoiceSettingRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteCollectiveInvoiceSetting;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteMidocoCharge
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\DeleteMidocoChargeRequest $paramDeleteMidocoChargeRequest
     * @return \Pggns\MidocoApi\Api\Crm\StructType\DeleteMidocoChargeResponse|bool
     */
    public function deleteMidocoCharge(\Pggns\MidocoApi\Api\Crm\StructType\DeleteMidocoChargeRequest $paramDeleteMidocoChargeRequest)
    {
        try {
            $this->setResult($resultDeleteMidocoCharge = $this->getSoapClient()->__soapCall('deleteMidocoCharge', [
                $paramDeleteMidocoChargeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteMidocoCharge;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteMidocoChargeOrgUnit
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\DeleteMidocoChargeOrgUnitRequest $paramDeleteMidocoChargeOrgUnitRequest
     * @return \Pggns\MidocoApi\Api\Crm\StructType\DeleteMidocoChargeOrgUnitResponse|bool
     */
    public function deleteMidocoChargeOrgUnit(\Pggns\MidocoApi\Api\Crm\StructType\DeleteMidocoChargeOrgUnitRequest $paramDeleteMidocoChargeOrgUnitRequest)
    {
        try {
            $this->setResult($resultDeleteMidocoChargeOrgUnit = $this->getSoapClient()->__soapCall('deleteMidocoChargeOrgUnit', [
                $paramDeleteMidocoChargeOrgUnitRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteMidocoChargeOrgUnit;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteMidocoMandate
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\DeleteMidocoMandateRequest $paramDeleteMidocoMandateRequest
     * @return \Pggns\MidocoApi\Api\Crm\StructType\DeleteMidocoMandateResponse|bool
     */
    public function deleteMidocoMandate(\Pggns\MidocoApi\Api\Crm\StructType\DeleteMidocoMandateRequest $paramDeleteMidocoMandateRequest)
    {
        try {
            $this->setResult($resultDeleteMidocoMandate = $this->getSoapClient()->__soapCall('deleteMidocoMandate', [
                $paramDeleteMidocoMandateRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteMidocoMandate;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteAutoBillingMatrix
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\DeleteAutoBillingMatrixRequest $paramDeleteAutoBillingMatrixRequest
     * @return \Pggns\MidocoApi\Api\Crm\StructType\DeleteAutoBillingMatrixResponse|bool
     */
    public function deleteAutoBillingMatrix(\Pggns\MidocoApi\Api\Crm\StructType\DeleteAutoBillingMatrixRequest $paramDeleteAutoBillingMatrixRequest)
    {
        try {
            $this->setResult($resultDeleteAutoBillingMatrix = $this->getSoapClient()->__soapCall('deleteAutoBillingMatrix', [
                $paramDeleteAutoBillingMatrixRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteAutoBillingMatrix;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteGroupConsent
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\DeleteGroupConsentRequest $paramDeleteGroupConsentRequest
     * @return \Pggns\MidocoApi\Api\Crm\StructType\DeleteGroupConsentResponse|bool
     */
    public function deleteGroupConsent(\Pggns\MidocoApi\Api\Crm\StructType\DeleteGroupConsentRequest $paramDeleteGroupConsentRequest)
    {
        try {
            $this->setResult($resultDeleteGroupConsent = $this->getSoapClient()->__soapCall('deleteGroupConsent', [
                $paramDeleteGroupConsentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteGroupConsent;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Api\Crm\StructType\DeleteAddressResponse|\Pggns\MidocoApi\Api\Crm\StructType\DeleteAgencyCommissionResponse|\Pggns\MidocoApi\Api\Crm\StructType\DeleteAgencyCooperationHistoryResponse|\Pggns\MidocoApi\Api\Crm\StructType\DeleteAutoBillingMatrixResponse|\Pggns\MidocoApi\Api\Crm\StructType\DeleteBonusCardResponse|\Pggns\MidocoApi\Api\Crm\StructType\DeleteCcCardResponse|\Pggns\MidocoApi\Api\Crm\StructType\DeleteCollectiveInvoiceSettingResponse|\Pggns\MidocoApi\Api\Crm\StructType\DeleteCommunicationHistoriesResponse|\Pggns\MidocoApi\Api\Crm\StructType\DeleteComplaintDocumentResponse|\Pggns\MidocoApi\Api\Crm\StructType\DeleteComplaintReasonResponse|\Pggns\MidocoApi\Api\Crm\StructType\DeleteComplaintResponse|\Pggns\MidocoApi\Api\Crm\StructType\DeleteContactEntryResponse|\Pggns\MidocoApi\Api\Crm\StructType\DeleteContactSourceResponse|\Pggns\MidocoApi\Api\Crm\StructType\DeleteCreditorResponse|\Pggns\MidocoApi\Api\Crm\StructType\DeleteCrmNoticeResponse|\Pggns\MidocoApi\Api\Crm\StructType\DeleteCrmPersonTravellerResponse|\Pggns\MidocoApi\Api\Crm\StructType\DeleteCustomerCommissionDefinitionResponse|\Pggns\MidocoApi\Api\Crm\StructType\DeleteCustomerCriteriaResponse|\Pggns\MidocoApi\Api\Crm\StructType\DeleteCustomerMfResponse|\Pggns\MidocoApi\Api\Crm\StructType\DeleteCustomerResponse|\Pggns\MidocoApi\Api\Crm\StructType\DeleteDebitCardResponse|\Pggns\MidocoApi\Api\Crm\StructType\DeleteDocumentResponse|\Pggns\MidocoApi\Api\Crm\StructType\DeleteFrequentFlyerNumberResponse|\Pggns\MidocoApi\Api\Crm\StructType\DeleteGroupAdvisorResponse|\Pggns\MidocoApi\Api\Crm\StructType\DeleteGroupConsentResponse|\Pggns\MidocoApi\Api\Crm\StructType\DeleteMediatorChargeResponse|\Pggns\MidocoApi\Api\Crm\StructType\DeleteMediatorSettlementLevelsResponse|\Pggns\MidocoApi\Api\Crm\StructType\DeleteMediatorTextTemplateResponse|\Pggns\MidocoApi\Api\Crm\StructType\DeleteMidocoAgencyNumberResponse|\Pggns\MidocoApi\Api\Crm\StructType\DeleteMidocoChargeOrgUnitResponse|\Pggns\MidocoApi\Api\Crm\StructType\DeleteMidocoChargeResponse|\Pggns\MidocoApi\Api\Crm\StructType\DeleteMidocoCrmCustomerPaymentResponse|\Pggns\MidocoApi\Api\Crm\StructType\DeleteMidocoMandateResponse|\Pggns\MidocoApi\Api\Crm\StructType\DeletePrintRecipientResponse|\Pggns\MidocoApi\Api\Crm\StructType\DeleteSupplierReportFormatResponse|\Pggns\MidocoApi\Api\Crm\StructType\DeleteTravellerResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
