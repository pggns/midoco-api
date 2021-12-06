<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Void ServiceType
 * @subpackage Services
 */
class _Void extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Api\Order\ServiceType\_Void
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named voidBillingDocument
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\VoidBillingDocumentRequest $paramVoidBillingDocumentRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\VoidBillingDocumentResponse|bool
     */
    public function voidBillingDocument(\Pggns\MidocoApi\Api\Order\StructType\VoidBillingDocumentRequest $paramVoidBillingDocumentRequest)
    {
        try {
            $this->setResult($resultVoidBillingDocument = $this->getSoapClient()->__soapCall('voidBillingDocument', [
                $paramVoidBillingDocumentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultVoidBillingDocument;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named voidMediatorBilling
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\VoidMediatorBillingRequest $paramVoidMediatorBillingRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\VoidMediatorBillingResponse|bool
     */
    public function voidMediatorBilling(\Pggns\MidocoApi\Api\Order\StructType\VoidMediatorBillingRequest $paramVoidMediatorBillingRequest)
    {
        try {
            $this->setResult($resultVoidMediatorBilling = $this->getSoapClient()->__soapCall('voidMediatorBilling', [
                $paramVoidMediatorBillingRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultVoidMediatorBilling;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named voidMediatorSettlement
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\VoidMediatorSettlementRequest $paramVoidMediatorSettlementRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\VoidMediatorSettlementResponse|bool
     */
    public function voidMediatorSettlement(\Pggns\MidocoApi\Api\Order\StructType\VoidMediatorSettlementRequest $paramVoidMediatorSettlementRequest)
    {
        try {
            $this->setResult($resultVoidMediatorSettlement = $this->getSoapClient()->__soapCall('voidMediatorSettlement', [
                $paramVoidMediatorSettlementRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultVoidMediatorSettlement;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named voidMediatorProductSettlement
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\VoidMediatorProductSettlementRequest $paramVoidMediatorProductSettlementRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\VoidMediatorProductSettlementResponse|bool
     */
    public function voidMediatorProductSettlement(\Pggns\MidocoApi\Api\Order\StructType\VoidMediatorProductSettlementRequest $paramVoidMediatorProductSettlementRequest)
    {
        try {
            $this->setResult($resultVoidMediatorProductSettlement = $this->getSoapClient()->__soapCall('voidMediatorProductSettlement', [
                $paramVoidMediatorProductSettlementRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultVoidMediatorProductSettlement;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named voidReceipt
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\VoidReceiptRequest $paramVoidReceiptRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\VoidReceiptResponse|bool
     */
    public function voidReceipt(\Pggns\MidocoApi\Api\Order\StructType\VoidReceiptRequest $paramVoidReceiptRequest)
    {
        try {
            $this->setResult($resultVoidReceipt = $this->getSoapClient()->__soapCall('voidReceipt', [
                $paramVoidReceiptRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultVoidReceipt;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named voidJournalEntry
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\VoidJournalEntryRequest $paramVoidJournalEntryRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\VoidJournalEntryResponse|bool
     */
    public function voidJournalEntry(\Pggns\MidocoApi\Api\Order\StructType\VoidJournalEntryRequest $paramVoidJournalEntryRequest)
    {
        try {
            $this->setResult($resultVoidJournalEntry = $this->getSoapClient()->__soapCall('voidJournalEntry', [
                $paramVoidJournalEntryRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultVoidJournalEntry;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named voidRevenueBooking
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\VoidRevenueBookingRequest $paramVoidRevenueBookingRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\VoidRevenueBookingResponse|bool
     */
    public function voidRevenueBooking(\Pggns\MidocoApi\Api\Order\StructType\VoidRevenueBookingRequest $paramVoidRevenueBookingRequest)
    {
        try {
            $this->setResult($resultVoidRevenueBooking = $this->getSoapClient()->__soapCall('voidRevenueBooking', [
                $paramVoidRevenueBookingRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultVoidRevenueBooking;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * voidAndRebookForeignCurencyEntryHistory
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\VoidAndRebookForeignCurrencyEntryHistoryRequest $paramVoidAndRebookForeignCurrencyEntryHistoryRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\VoidAndRebookForeignCurrencyEntryHistoryResponse|bool
     */
    public function voidAndRebookForeignCurencyEntryHistory(\Pggns\MidocoApi\Api\Order\StructType\VoidAndRebookForeignCurrencyEntryHistoryRequest $paramVoidAndRebookForeignCurrencyEntryHistoryRequest)
    {
        try {
            $this->setResult($resultVoidAndRebookForeignCurencyEntryHistory = $this->getSoapClient()->__soapCall('voidAndRebookForeignCurencyEntryHistory', [
                $paramVoidAndRebookForeignCurrencyEntryHistoryRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultVoidAndRebookForeignCurencyEntryHistory;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named voidAgencySettlement
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\VoidAgencySettlementRequest $paramVoidAgencySettlementRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\VoidAgencySettlementResponse|bool
     */
    public function voidAgencySettlement(\Pggns\MidocoApi\Api\Order\StructType\VoidAgencySettlementRequest $paramVoidAgencySettlementRequest)
    {
        try {
            $this->setResult($resultVoidAgencySettlement = $this->getSoapClient()->__soapCall('voidAgencySettlement', [
                $paramVoidAgencySettlementRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultVoidAgencySettlement;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named voidTravelNoMarginBooking
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\VoidTravelNoMarginBookingRequest $paramVoidTravelNoMarginBookingRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\VoidTravelNoMarginBookingResponse|bool
     */
    public function voidTravelNoMarginBooking(\Pggns\MidocoApi\Api\Order\StructType\VoidTravelNoMarginBookingRequest $paramVoidTravelNoMarginBookingRequest)
    {
        try {
            $this->setResult($resultVoidTravelNoMarginBooking = $this->getSoapClient()->__soapCall('voidTravelNoMarginBooking', [
                $paramVoidTravelNoMarginBookingRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultVoidTravelNoMarginBooking;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Api\Order\StructType\VoidAgencySettlementResponse|\Pggns\MidocoApi\Api\Order\StructType\VoidAndRebookForeignCurrencyEntryHistoryResponse|\Pggns\MidocoApi\Api\Order\StructType\VoidBillingDocumentResponse|\Pggns\MidocoApi\Api\Order\StructType\VoidJournalEntryResponse|\Pggns\MidocoApi\Api\Order\StructType\VoidMediatorBillingResponse|\Pggns\MidocoApi\Api\Order\StructType\VoidMediatorProductSettlementResponse|\Pggns\MidocoApi\Api\Order\StructType\VoidMediatorSettlementResponse|\Pggns\MidocoApi\Api\Order\StructType\VoidReceiptResponse|\Pggns\MidocoApi\Api\Order\StructType\VoidRevenueBookingResponse|\Pggns\MidocoApi\Api\Order\StructType\VoidTravelNoMarginBookingResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
