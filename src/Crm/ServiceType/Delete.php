<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\ServiceType;

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
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Pggns\MidocoApi\Crm\ServiceType\Delete
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named deleteCustomer
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\DeleteCustomerRequest $paramDeleteCustomerRequest
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteCustomerResponse|bool
     */
    public function deleteCustomer(\Pggns\MidocoApi\Crm\StructType\DeleteCustomerRequest $paramDeleteCustomerRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\DeleteAddressRequest $paramDeleteAddressRequest
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteAddressResponse|bool
     */
    public function deleteAddress(\Pggns\MidocoApi\Crm\StructType\DeleteAddressRequest $paramDeleteAddressRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\DeleteTravellerRequest $paramDeleteTravellerRequest
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteTravellerResponse|bool
     */
    public function deleteTraveller(\Pggns\MidocoApi\Crm\StructType\DeleteTravellerRequest $paramDeleteTravellerRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\DeleteContactEntryRequest $paramDeleteContactEntryRequest
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteContactEntryResponse|bool
     */
    public function deleteContactEntry(\Pggns\MidocoApi\Crm\StructType\DeleteContactEntryRequest $paramDeleteContactEntryRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\DeleteCustomerCriteriaRequest $paramDeleteCustomerCriteriaRequest
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteCustomerCriteriaResponse|bool
     */
    public function deleteCustomerCriteria(\Pggns\MidocoApi\Crm\StructType\DeleteCustomerCriteriaRequest $paramDeleteCustomerCriteriaRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\DeleteDocumentRequest $paramDeleteDocumentRequest
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteDocumentResponse|bool
     */
    public function deleteDocument(\Pggns\MidocoApi\Crm\StructType\DeleteDocumentRequest $paramDeleteDocumentRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\DeleteDebitCardRequest $paramDeleteDebitCardRequest
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteDebitCardResponse|bool
     */
    public function deleteDebitCard(\Pggns\MidocoApi\Crm\StructType\DeleteDebitCardRequest $paramDeleteDebitCardRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\DeleteCcCardRequest $paramDeleteCcCardRequest
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteCcCardResponse|bool
     */
    public function deleteCcCard(\Pggns\MidocoApi\Crm\StructType\DeleteCcCardRequest $paramDeleteCcCardRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\DeleteBonusCardRequest $paramDeleteBonusCardRequest
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteBonusCardResponse|bool
     */
    public function deleteBonusCard(\Pggns\MidocoApi\Crm\StructType\DeleteBonusCardRequest $paramDeleteBonusCardRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\DeleteComplaintRequest $paramDeleteComplaintRequest
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteComplaintResponse|bool
     */
    public function deleteComplaint(\Pggns\MidocoApi\Crm\StructType\DeleteComplaintRequest $paramDeleteComplaintRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\DeleteComplaintDocumentRequest $paramDeleteComplaintDocumentRequest
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteComplaintDocumentResponse|bool
     */
    public function deleteComplaintDocument(\Pggns\MidocoApi\Crm\StructType\DeleteComplaintDocumentRequest $paramDeleteComplaintDocumentRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\DeleteComplaintReasonRequest $paramDeleteComplaintReasonRequest
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteComplaintReasonResponse|bool
     */
    public function deleteComplaintReason(\Pggns\MidocoApi\Crm\StructType\DeleteComplaintReasonRequest $paramDeleteComplaintReasonRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\DeleteMidocoCrmCustomerPaymentRequest $paramDeleteMidocoCrmCustomerPaymentRequest
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteMidocoCrmCustomerPaymentResponse|bool
     */
    public function deleteMidocoCrmCustomerPayment(\Pggns\MidocoApi\Crm\StructType\DeleteMidocoCrmCustomerPaymentRequest $paramDeleteMidocoCrmCustomerPaymentRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\DeleteAgencyCommissionRequest $paramDeleteAgencyCommissionRequest
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteAgencyCommissionResponse|bool
     */
    public function deleteAgencyCommission(\Pggns\MidocoApi\Crm\StructType\DeleteAgencyCommissionRequest $paramDeleteAgencyCommissionRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\DeleteMediatorTextTemplateRequest $paramDeleteMediatorTextTemplateRequest
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteMediatorTextTemplateResponse|bool
     */
    public function deleteMediatorTextTemplate(\Pggns\MidocoApi\Crm\StructType\DeleteMediatorTextTemplateRequest $paramDeleteMediatorTextTemplateRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\DeleteMediatorSettlementLevelsRequest $paramDeleteMediatorSettlementLevelsRequest
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteMediatorSettlementLevelsResponse|bool
     */
    public function deleteMediatorSettlementLevel(\Pggns\MidocoApi\Crm\StructType\DeleteMediatorSettlementLevelsRequest $paramDeleteMediatorSettlementLevelsRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\DeleteMediatorChargeRequest $paramDeleteMediatorChargeRequest
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteMediatorChargeResponse|bool
     */
    public function deleteMediatorCharge(\Pggns\MidocoApi\Crm\StructType\DeleteMediatorChargeRequest $paramDeleteMediatorChargeRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\DeleteGroupAdvisorRequest $paramDeleteGroupAdvisorRequest
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteGroupAdvisorResponse|bool
     */
    public function deleteGroupAdvisor(\Pggns\MidocoApi\Crm\StructType\DeleteGroupAdvisorRequest $paramDeleteGroupAdvisorRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\DeleteMidocoAgencyNumberRequest $paramDeleteMidocoAgencyNumberRequest
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteMidocoAgencyNumberResponse|bool
     */
    public function deleteAgencyNumber(\Pggns\MidocoApi\Crm\StructType\DeleteMidocoAgencyNumberRequest $paramDeleteMidocoAgencyNumberRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\DeleteSupplierReportFormatRequest $paramDeleteSupplierReportFormatRequest
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteSupplierReportFormatResponse|bool
     */
    public function deleteSupplierReportFormat(\Pggns\MidocoApi\Crm\StructType\DeleteSupplierReportFormatRequest $paramDeleteSupplierReportFormatRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\DeleteCrmNoticeRequest $paramDeleteCrmNoticeRequest
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteCrmNoticeResponse|bool
     */
    public function deleteCrmNotice(\Pggns\MidocoApi\Crm\StructType\DeleteCrmNoticeRequest $paramDeleteCrmNoticeRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\DeleteCustomerCommissionDefinitionRequest $paramDeleteCustomerCommissionDefinitionRequest
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteCustomerCommissionDefinitionResponse|bool
     */
    public function deleteCustomerCommissionDefinition(\Pggns\MidocoApi\Crm\StructType\DeleteCustomerCommissionDefinitionRequest $paramDeleteCustomerCommissionDefinitionRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\DeletePrintRecipientRequest $paramDeletePrintRecipientRequest
     * @return \Pggns\MidocoApi\Crm\StructType\DeletePrintRecipientResponse|bool
     */
    public function deletePrintRecipient(\Pggns\MidocoApi\Crm\StructType\DeletePrintRecipientRequest $paramDeletePrintRecipientRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\DeleteCrmPersonTravellerRequest $paramDeleteCrmPersonTravellerRequest
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteCrmPersonTravellerResponse|bool
     */
    public function deleteCrmPersonTraveller(\Pggns\MidocoApi\Crm\StructType\DeleteCrmPersonTravellerRequest $paramDeleteCrmPersonTravellerRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\DeleteFrequentFlyerNumberRequest $paramDeleteFrequentFlyerNumberRequest
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteFrequentFlyerNumberResponse|bool
     */
    public function deleteFrequentFlyerNumbers(\Pggns\MidocoApi\Crm\StructType\DeleteFrequentFlyerNumberRequest $paramDeleteFrequentFlyerNumberRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\DeleteCustomerMfRequest $paramDeleteCustomerMfRequest
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteCustomerMfResponse|bool
     */
    public function deleteCustomerMf(\Pggns\MidocoApi\Crm\StructType\DeleteCustomerMfRequest $paramDeleteCustomerMfRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\DeleteContactSourceRequest $paramDeleteContactSourceRequest
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteContactSourceResponse|bool
     */
    public function deleteContactSource(\Pggns\MidocoApi\Crm\StructType\DeleteContactSourceRequest $paramDeleteContactSourceRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\DeleteCreditorRequest $paramDeleteCreditorRequest
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteCreditorResponse|bool
     */
    public function deleteCreditor(\Pggns\MidocoApi\Crm\StructType\DeleteCreditorRequest $paramDeleteCreditorRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\DeleteCommunicationHistoriesRequest $paramDeleteCommunicationHistoriesRequest
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteCommunicationHistoriesResponse|bool
     */
    public function deleteCommunicationHistories(\Pggns\MidocoApi\Crm\StructType\DeleteCommunicationHistoriesRequest $paramDeleteCommunicationHistoriesRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\DeleteAgencyCooperationHistoryRequest $paramDeleteAgencyCooperationHistoryRequest
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteAgencyCooperationHistoryResponse|bool
     */
    public function deleteAgencyCooperationHistory(\Pggns\MidocoApi\Crm\StructType\DeleteAgencyCooperationHistoryRequest $paramDeleteAgencyCooperationHistoryRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\DeleteCollectiveInvoiceSettingRequest $paramDeleteCollectiveInvoiceSettingRequest
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteCollectiveInvoiceSettingResponse|bool
     */
    public function deleteCollectiveInvoiceSetting(\Pggns\MidocoApi\Crm\StructType\DeleteCollectiveInvoiceSettingRequest $paramDeleteCollectiveInvoiceSettingRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\DeleteMidocoChargeRequest $paramDeleteMidocoChargeRequest
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteMidocoChargeResponse|bool
     */
    public function deleteMidocoCharge(\Pggns\MidocoApi\Crm\StructType\DeleteMidocoChargeRequest $paramDeleteMidocoChargeRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\DeleteMidocoChargeOrgUnitRequest $paramDeleteMidocoChargeOrgUnitRequest
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteMidocoChargeOrgUnitResponse|bool
     */
    public function deleteMidocoChargeOrgUnit(\Pggns\MidocoApi\Crm\StructType\DeleteMidocoChargeOrgUnitRequest $paramDeleteMidocoChargeOrgUnitRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\DeleteMidocoMandateRequest $paramDeleteMidocoMandateRequest
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteMidocoMandateResponse|bool
     */
    public function deleteMidocoMandate(\Pggns\MidocoApi\Crm\StructType\DeleteMidocoMandateRequest $paramDeleteMidocoMandateRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\DeleteAutoBillingMatrixRequest $paramDeleteAutoBillingMatrixRequest
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteAutoBillingMatrixResponse|bool
     */
    public function deleteAutoBillingMatrix(\Pggns\MidocoApi\Crm\StructType\DeleteAutoBillingMatrixRequest $paramDeleteAutoBillingMatrixRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\DeleteGroupConsentRequest $paramDeleteGroupConsentRequest
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteGroupConsentResponse|bool
     */
    public function deleteGroupConsent(\Pggns\MidocoApi\Crm\StructType\DeleteGroupConsentRequest $paramDeleteGroupConsentRequest)
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
     * Method to call the operation originally named deleteCrmExternalOffer
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\DeleteCrmExternalOfferRequest $paramDeleteCrmExternalOfferRequest
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteCrmExternalOfferResponse|bool
     */
    public function deleteCrmExternalOffer(\Pggns\MidocoApi\Crm\StructType\DeleteCrmExternalOfferRequest $paramDeleteCrmExternalOfferRequest)
    {
        try {
            $this->setResult($resultDeleteCrmExternalOffer = $this->getSoapClient()->__soapCall('deleteCrmExternalOffer', [
                $paramDeleteCrmExternalOfferRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteCrmExternalOffer;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteAddressResponse|\Pggns\MidocoApi\Crm\StructType\DeleteAgencyCommissionResponse|\Pggns\MidocoApi\Crm\StructType\DeleteAgencyCooperationHistoryResponse|\Pggns\MidocoApi\Crm\StructType\DeleteAutoBillingMatrixResponse|\Pggns\MidocoApi\Crm\StructType\DeleteBonusCardResponse|\Pggns\MidocoApi\Crm\StructType\DeleteCcCardResponse|\Pggns\MidocoApi\Crm\StructType\DeleteCollectiveInvoiceSettingResponse|\Pggns\MidocoApi\Crm\StructType\DeleteCommunicationHistoriesResponse|\Pggns\MidocoApi\Crm\StructType\DeleteComplaintDocumentResponse|\Pggns\MidocoApi\Crm\StructType\DeleteComplaintReasonResponse|\Pggns\MidocoApi\Crm\StructType\DeleteComplaintResponse|\Pggns\MidocoApi\Crm\StructType\DeleteContactEntryResponse|\Pggns\MidocoApi\Crm\StructType\DeleteContactSourceResponse|\Pggns\MidocoApi\Crm\StructType\DeleteCreditorResponse|\Pggns\MidocoApi\Crm\StructType\DeleteCrmExternalOfferResponse|\Pggns\MidocoApi\Crm\StructType\DeleteCrmNoticeResponse|\Pggns\MidocoApi\Crm\StructType\DeleteCrmPersonTravellerResponse|\Pggns\MidocoApi\Crm\StructType\DeleteCustomerCommissionDefinitionResponse|\Pggns\MidocoApi\Crm\StructType\DeleteCustomerCriteriaResponse|\Pggns\MidocoApi\Crm\StructType\DeleteCustomerMfResponse|\Pggns\MidocoApi\Crm\StructType\DeleteCustomerResponse|\Pggns\MidocoApi\Crm\StructType\DeleteDebitCardResponse|\Pggns\MidocoApi\Crm\StructType\DeleteDocumentResponse|\Pggns\MidocoApi\Crm\StructType\DeleteFrequentFlyerNumberResponse|\Pggns\MidocoApi\Crm\StructType\DeleteGroupAdvisorResponse|\Pggns\MidocoApi\Crm\StructType\DeleteGroupConsentResponse|\Pggns\MidocoApi\Crm\StructType\DeleteMediatorChargeResponse|\Pggns\MidocoApi\Crm\StructType\DeleteMediatorSettlementLevelsResponse|\Pggns\MidocoApi\Crm\StructType\DeleteMediatorTextTemplateResponse|\Pggns\MidocoApi\Crm\StructType\DeleteMidocoAgencyNumberResponse|\Pggns\MidocoApi\Crm\StructType\DeleteMidocoChargeOrgUnitResponse|\Pggns\MidocoApi\Crm\StructType\DeleteMidocoChargeResponse|\Pggns\MidocoApi\Crm\StructType\DeleteMidocoCrmCustomerPaymentResponse|\Pggns\MidocoApi\Crm\StructType\DeleteMidocoMandateResponse|\Pggns\MidocoApi\Crm\StructType\DeletePrintRecipientResponse|\Pggns\MidocoApi\Crm\StructType\DeleteSupplierReportFormatResponse|\Pggns\MidocoApi\Crm\StructType\DeleteTravellerResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
