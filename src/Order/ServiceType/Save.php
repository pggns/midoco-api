<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Save ServiceType
 * @subpackage Services
 */
class Save extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Api\Order\ServiceType\Save
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named saveBillingDocument
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\SaveBillingDocumentRequest $paramSaveBillingDocumentRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveBillingDocumentResponse|bool
     */
    public function saveBillingDocument(\Pggns\MidocoApi\Api\Order\StructType\SaveBillingDocumentRequest $paramSaveBillingDocumentRequest)
    {
        try {
            $this->setResult($resultSaveBillingDocument = $this->getSoapClient()->__soapCall('saveBillingDocument', [
                $paramSaveBillingDocumentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveBillingDocument;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveBillingPosition
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\SaveBillingPositionRequest $paramSaveBillingPositionRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveBillingPositionResponse|bool
     */
    public function saveBillingPosition(\Pggns\MidocoApi\Api\Order\StructType\SaveBillingPositionRequest $paramSaveBillingPositionRequest)
    {
        try {
            $this->setResult($resultSaveBillingPosition = $this->getSoapClient()->__soapCall('saveBillingPosition', [
                $paramSaveBillingPositionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveBillingPosition;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveDunningLockForBillingDocument
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\SaveDunningLockForBillingDocumentRequest $paramSaveDunningLockForBillingDocumentRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveDunningLockForBillingDocumentResponse|bool
     */
    public function saveDunningLockForBillingDocument(\Pggns\MidocoApi\Api\Order\StructType\SaveDunningLockForBillingDocumentRequest $paramSaveDunningLockForBillingDocumentRequest)
    {
        try {
            $this->setResult($resultSaveDunningLockForBillingDocument = $this->getSoapClient()->__soapCall('saveDunningLockForBillingDocument', [
                $paramSaveDunningLockForBillingDocumentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveDunningLockForBillingDocument;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveManualItem
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\SaveManualItemRequest $paramSaveManualItemRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveManualItemResponse|bool
     */
    public function saveManualItem(\Pggns\MidocoApi\Api\Order\StructType\SaveManualItemRequest $paramSaveManualItemRequest)
    {
        try {
            $this->setResult($resultSaveManualItem = $this->getSoapClient()->__soapCall('saveManualItem', [
                $paramSaveManualItemRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveManualItem;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveOrder
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\SaveOrderRequest $paramSaveOrderRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveOrderResponse|bool
     */
    public function saveOrder(\Pggns\MidocoApi\Api\Order\StructType\SaveOrderRequest $paramSaveOrderRequest)
    {
        try {
            $this->setResult($resultSaveOrder = $this->getSoapClient()->__soapCall('saveOrder', [
                $paramSaveOrderRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveOrder;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveSellItem
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\SaveSellItemRequest $paramSaveSellItemRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveSellItemResponse|bool
     */
    public function saveSellItem(\Pggns\MidocoApi\Api\Order\StructType\SaveSellItemRequest $paramSaveSellItemRequest)
    {
        try {
            $this->setResult($resultSaveSellItem = $this->getSoapClient()->__soapCall('saveSellItem', [
                $paramSaveSellItemRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveSellItem;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveBillingDocRemark
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\SaveBillingDocRemarkRequest $paramSaveBillingDocRemarkRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveBillingDocRemarkResponse|bool
     */
    public function saveBillingDocRemark(\Pggns\MidocoApi\Api\Order\StructType\SaveBillingDocRemarkRequest $paramSaveBillingDocRemarkRequest)
    {
        try {
            $this->setResult($resultSaveBillingDocRemark = $this->getSoapClient()->__soapCall('saveBillingDocRemark', [
                $paramSaveBillingDocRemarkRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveBillingDocRemark;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveBillingPosRemark
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\SaveBillingPosRemarkRequest $paramSaveBillingPosRemarkRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveBillingPosRemarkResponse|bool
     */
    public function saveBillingPosRemark(\Pggns\MidocoApi\Api\Order\StructType\SaveBillingPosRemarkRequest $paramSaveBillingPosRemarkRequest)
    {
        try {
            $this->setResult($resultSaveBillingPosRemark = $this->getSoapClient()->__soapCall('saveBillingPosRemark', [
                $paramSaveBillingPosRemarkRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveBillingPosRemark;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveBillingDocumentPosition
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\SaveBillingDocumentPositionRequest $paramSaveBillingDocumentPositionRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveBillingDocumentPositionResponse|bool
     */
    public function saveBillingDocumentPosition(\Pggns\MidocoApi\Api\Order\StructType\SaveBillingDocumentPositionRequest $paramSaveBillingDocumentPositionRequest)
    {
        try {
            $this->setResult($resultSaveBillingDocumentPosition = $this->getSoapClient()->__soapCall('saveBillingDocumentPosition', [
                $paramSaveBillingDocumentPositionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveBillingDocumentPosition;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveDebitInfo
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\SaveDebitInfoRequest $paramSaveDebitInfoRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveDebitInfoResponse|bool
     */
    public function saveDebitInfo(\Pggns\MidocoApi\Api\Order\StructType\SaveDebitInfoRequest $paramSaveDebitInfoRequest)
    {
        try {
            $this->setResult($resultSaveDebitInfo = $this->getSoapClient()->__soapCall('saveDebitInfo', [
                $paramSaveDebitInfoRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveDebitInfo;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveOrderDebitPayment
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\SaveOrderDebitPaymentRequest $paramSaveOrderDebitPaymentRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveOrderDebitPaymentResponse|bool
     */
    public function saveOrderDebitPayment(\Pggns\MidocoApi\Api\Order\StructType\SaveOrderDebitPaymentRequest $paramSaveOrderDebitPaymentRequest)
    {
        try {
            $this->setResult($resultSaveOrderDebitPayment = $this->getSoapClient()->__soapCall('saveOrderDebitPayment', [
                $paramSaveOrderDebitPaymentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveOrderDebitPayment;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveOrderOnlinePayment
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\SaveOrderOnlinePaymentRequest $paramSaveOrderOnlinePaymentRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveOrderOnlinePaymentResponse|bool
     */
    public function saveOrderOnlinePayment(\Pggns\MidocoApi\Api\Order\StructType\SaveOrderOnlinePaymentRequest $paramSaveOrderOnlinePaymentRequest)
    {
        try {
            $this->setResult($resultSaveOrderOnlinePayment = $this->getSoapClient()->__soapCall('saveOrderOnlinePayment', [
                $paramSaveOrderOnlinePaymentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveOrderOnlinePayment;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveBillingVatCalculation
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\SaveBillingVatCalculationsRequest $paramSaveBillingVatCalculationsRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveBillingVatCalculationsResponse|bool
     */
    public function saveBillingVatCalculation(\Pggns\MidocoApi\Api\Order\StructType\SaveBillingVatCalculationsRequest $paramSaveBillingVatCalculationsRequest)
    {
        try {
            $this->setResult($resultSaveBillingVatCalculation = $this->getSoapClient()->__soapCall('saveBillingVatCalculation', [
                $paramSaveBillingVatCalculationsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveBillingVatCalculation;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveCashbook
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\SaveCashbookRequest $paramSaveCashbookRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveCashbookResponse|bool
     */
    public function saveCashbook(\Pggns\MidocoApi\Api\Order\StructType\SaveCashbookRequest $paramSaveCashbookRequest)
    {
        try {
            $this->setResult($resultSaveCashbook = $this->getSoapClient()->__soapCall('saveCashbook', [
                $paramSaveCashbookRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveCashbook;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveOrderRemark
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\SaveOrderRemarkRequest $paramSaveOrderRemarkRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveOrderRemarkResponse|bool
     */
    public function saveOrderRemark(\Pggns\MidocoApi\Api\Order\StructType\SaveOrderRemarkRequest $paramSaveOrderRemarkRequest)
    {
        try {
            $this->setResult($resultSaveOrderRemark = $this->getSoapClient()->__soapCall('saveOrderRemark', [
                $paramSaveOrderRemarkRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveOrderRemark;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveRevenueBooking
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\SaveRevenueBookingRequest $paramSaveRevenueBookingRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveRevenueBookingResponse|bool
     */
    public function saveRevenueBooking(\Pggns\MidocoApi\Api\Order\StructType\SaveRevenueBookingRequest $paramSaveRevenueBookingRequest)
    {
        try {
            $this->setResult($resultSaveRevenueBooking = $this->getSoapClient()->__soapCall('saveRevenueBooking', [
                $paramSaveRevenueBookingRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveRevenueBooking;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveBookingJournal
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\SaveBookingJournalRequest $paramSaveBookingJournalRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveBookingJournalResponse|bool
     */
    public function saveBookingJournal(\Pggns\MidocoApi\Api\Order\StructType\SaveBookingJournalRequest $paramSaveBookingJournalRequest)
    {
        try {
            $this->setResult($resultSaveBookingJournal = $this->getSoapClient()->__soapCall('saveBookingJournal', [
                $paramSaveBookingJournalRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveBookingJournal;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveMidocoBonusCalculation
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\SaveMidocoBonusCalculationRequest $paramSaveMidocoBonusCalculationRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveMidocoBonusCalculationResponse|bool
     */
    public function saveMidocoBonusCalculation(\Pggns\MidocoApi\Api\Order\StructType\SaveMidocoBonusCalculationRequest $paramSaveMidocoBonusCalculationRequest)
    {
        try {
            $this->setResult($resultSaveMidocoBonusCalculation = $this->getSoapClient()->__soapCall('saveMidocoBonusCalculation', [
                $paramSaveMidocoBonusCalculationRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveMidocoBonusCalculation;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveMidocoBonusAddition
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\SaveMidocoBonusAdditionRequest $paramSaveMidocoBonusAdditionRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveMidocoBonusAdditionResponse|bool
     */
    public function saveMidocoBonusAddition(\Pggns\MidocoApi\Api\Order\StructType\SaveMidocoBonusAdditionRequest $paramSaveMidocoBonusAdditionRequest)
    {
        try {
            $this->setResult($resultSaveMidocoBonusAddition = $this->getSoapClient()->__soapCall('saveMidocoBonusAddition', [
                $paramSaveMidocoBonusAdditionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveMidocoBonusAddition;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveSellItemDocument
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\SaveSellItemDocumentRequest $paramSaveSellItemDocumentRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveSellItemDocumentResponse|bool
     */
    public function saveSellItemDocument(\Pggns\MidocoApi\Api\Order\StructType\SaveSellItemDocumentRequest $paramSaveSellItemDocumentRequest)
    {
        try {
            $this->setResult($resultSaveSellItemDocument = $this->getSoapClient()->__soapCall('saveSellItemDocument', [
                $paramSaveSellItemDocumentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveSellItemDocument;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveOrderAttributes
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\SaveOrderAttributesRequest $paramSaveOrderAttributesRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveOrderAttributesResponse|bool
     */
    public function saveOrderAttributes(\Pggns\MidocoApi\Api\Order\StructType\SaveOrderAttributesRequest $paramSaveOrderAttributesRequest)
    {
        try {
            $this->setResult($resultSaveOrderAttributes = $this->getSoapClient()->__soapCall('saveOrderAttributes', [
                $paramSaveOrderAttributesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveOrderAttributes;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveSellItemAttributes
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\SaveSellItemAttributesRequest $paramSaveSellItemAttributesRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveSellItemAttributesResponse|bool
     */
    public function saveSellItemAttributes(\Pggns\MidocoApi\Api\Order\StructType\SaveSellItemAttributesRequest $paramSaveSellItemAttributesRequest)
    {
        try {
            $this->setResult($resultSaveSellItemAttributes = $this->getSoapClient()->__soapCall('saveSellItemAttributes', [
                $paramSaveSellItemAttributesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveSellItemAttributes;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveMediatorBilling
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\SaveMediatorBillingRequest $paramSaveMediatorBillingRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveMediatorBillingResponse|bool
     */
    public function saveMediatorBilling(\Pggns\MidocoApi\Api\Order\StructType\SaveMediatorBillingRequest $paramSaveMediatorBillingRequest)
    {
        try {
            $this->setResult($resultSaveMediatorBilling = $this->getSoapClient()->__soapCall('saveMediatorBilling', [
                $paramSaveMediatorBillingRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveMediatorBilling;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveOrderNotice
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\SaveOrderNoticeRequest $paramSaveOrderNoticeRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveOrderNoticeResponse|bool
     */
    public function saveOrderNotice(\Pggns\MidocoApi\Api\Order\StructType\SaveOrderNoticeRequest $paramSaveOrderNoticeRequest)
    {
        try {
            $this->setResult($resultSaveOrderNotice = $this->getSoapClient()->__soapCall('saveOrderNotice', [
                $paramSaveOrderNoticeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveOrderNotice;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveMultiNotice
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\SaveMultiNoticeRequest $paramSaveMultiNoticeRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveMultiNoticeResponse|bool
     */
    public function saveMultiNotice(\Pggns\MidocoApi\Api\Order\StructType\SaveMultiNoticeRequest $paramSaveMultiNoticeRequest)
    {
        try {
            $this->setResult($resultSaveMultiNotice = $this->getSoapClient()->__soapCall('saveMultiNotice', [
                $paramSaveMultiNoticeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveMultiNotice;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveOrderHistory
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\SaveOrderHistoryRequest $paramSaveOrderHistoryRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveOrderHistoryResponse|bool
     */
    public function saveOrderHistory(\Pggns\MidocoApi\Api\Order\StructType\SaveOrderHistoryRequest $paramSaveOrderHistoryRequest)
    {
        try {
            $this->setResult($resultSaveOrderHistory = $this->getSoapClient()->__soapCall('saveOrderHistory', [
                $paramSaveOrderHistoryRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveOrderHistory;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveDebitInfoForReceipt
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\SaveDebitInfoForReceiptRequest $paramSaveDebitInfoForReceiptRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveDebitInfoForReceiptResponse|bool
     */
    public function saveDebitInfoForReceipt(\Pggns\MidocoApi\Api\Order\StructType\SaveDebitInfoForReceiptRequest $paramSaveDebitInfoForReceiptRequest)
    {
        try {
            $this->setResult($resultSaveDebitInfoForReceipt = $this->getSoapClient()->__soapCall('saveDebitInfoForReceipt', [
                $paramSaveDebitInfoForReceiptRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveDebitInfoForReceipt;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveOrderDocument
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\SaveOrderDocumentRequest $paramSaveOrderDocumentRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveOrderDocumentResponse|bool
     */
    public function saveOrderDocument(\Pggns\MidocoApi\Api\Order\StructType\SaveOrderDocumentRequest $paramSaveOrderDocumentRequest)
    {
        try {
            $this->setResult($resultSaveOrderDocument = $this->getSoapClient()->__soapCall('saveOrderDocument', [
                $paramSaveOrderDocumentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveOrderDocument;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveBillingPrintSettings
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\SaveBillingPrintSettingsRequest $paramSaveBillingPrintSettingsRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveBillingPrintSettingsResponse|bool
     */
    public function saveBillingPrintSettings(\Pggns\MidocoApi\Api\Order\StructType\SaveBillingPrintSettingsRequest $paramSaveBillingPrintSettingsRequest)
    {
        try {
            $this->setResult($resultSaveBillingPrintSettings = $this->getSoapClient()->__soapCall('saveBillingPrintSettings', [
                $paramSaveBillingPrintSettingsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveBillingPrintSettings;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveBillingDocumentDocument
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\SaveBillingDocumentDocumentRequest $paramSaveBillingDocumentDocumentRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveBillingDocumentDocumentResponse|bool
     */
    public function saveBillingDocumentDocument(\Pggns\MidocoApi\Api\Order\StructType\SaveBillingDocumentDocumentRequest $paramSaveBillingDocumentDocumentRequest)
    {
        try {
            $this->setResult($resultSaveBillingDocumentDocument = $this->getSoapClient()->__soapCall('saveBillingDocumentDocument', [
                $paramSaveBillingDocumentDocumentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveBillingDocumentDocument;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveIncomingInvoice
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\SaveIncomingInvoiceRequest $paramSaveIncomingInvoiceRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveIncomingInvoiceResponse|bool
     */
    public function saveIncomingInvoice(\Pggns\MidocoApi\Api\Order\StructType\SaveIncomingInvoiceRequest $paramSaveIncomingInvoiceRequest)
    {
        try {
            $this->setResult($resultSaveIncomingInvoice = $this->getSoapClient()->__soapCall('saveIncomingInvoice', [
                $paramSaveIncomingInvoiceRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveIncomingInvoice;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveOrdersDbiInfos
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\SaveOrdersDbiInfosRequest $paramSaveOrdersDbiInfosRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveOrdersDbiInfosResponse|bool
     */
    public function saveOrdersDbiInfos(\Pggns\MidocoApi\Api\Order\StructType\SaveOrdersDbiInfosRequest $paramSaveOrdersDbiInfosRequest)
    {
        try {
            $this->setResult($resultSaveOrdersDbiInfos = $this->getSoapClient()->__soapCall('saveOrdersDbiInfos', [
                $paramSaveOrdersDbiInfosRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveOrdersDbiInfos;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveAdviceSettlement
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\SaveAdviceSettlementRequest $paramSaveAdviceSettlementRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveAdviceSettlementResponse|bool
     */
    public function saveAdviceSettlement(\Pggns\MidocoApi\Api\Order\StructType\SaveAdviceSettlementRequest $paramSaveAdviceSettlementRequest)
    {
        try {
            $this->setResult($resultSaveAdviceSettlement = $this->getSoapClient()->__soapCall('saveAdviceSettlement', [
                $paramSaveAdviceSettlementRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveAdviceSettlement;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveAdviceSettlementDetail
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\SaveAdviceSettlementDetailRequest $paramSaveAdviceSettlementDetailRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveAdviceSettlementDetailResponse|bool
     */
    public function saveAdviceSettlementDetail(\Pggns\MidocoApi\Api\Order\StructType\SaveAdviceSettlementDetailRequest $paramSaveAdviceSettlementDetailRequest)
    {
        try {
            $this->setResult($resultSaveAdviceSettlementDetail = $this->getSoapClient()->__soapCall('saveAdviceSettlementDetail', [
                $paramSaveAdviceSettlementDetailRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveAdviceSettlementDetail;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveFlightTimeChangeEmail
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\SaveFlightTimeChangeEmailRequest $paramSaveFlightTimeChangeEmailRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveFlightTimeChangeEmailResponse|bool
     */
    public function saveFlightTimeChangeEmail(\Pggns\MidocoApi\Api\Order\StructType\SaveFlightTimeChangeEmailRequest $paramSaveFlightTimeChangeEmailRequest)
    {
        try {
            $this->setResult($resultSaveFlightTimeChangeEmail = $this->getSoapClient()->__soapCall('saveFlightTimeChangeEmail', [
                $paramSaveFlightTimeChangeEmailRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveFlightTimeChangeEmail;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveBillingDocDbiInfos
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\SaveBillingDocDbiInfosRequest $paramSaveBillingDocDbiInfosRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveBillingDocDbiInfosResponse|bool
     */
    public function saveBillingDocDbiInfos(\Pggns\MidocoApi\Api\Order\StructType\SaveBillingDocDbiInfosRequest $paramSaveBillingDocDbiInfosRequest)
    {
        try {
            $this->setResult($resultSaveBillingDocDbiInfos = $this->getSoapClient()->__soapCall('saveBillingDocDbiInfos', [
                $paramSaveBillingDocDbiInfosRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveBillingDocDbiInfos;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveSupplierAgencySettlement
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\SaveSupplierAgencySettlementRequest $paramSaveSupplierAgencySettlementRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveSupplierAgencySettlementResponse|bool
     */
    public function saveSupplierAgencySettlement(\Pggns\MidocoApi\Api\Order\StructType\SaveSupplierAgencySettlementRequest $paramSaveSupplierAgencySettlementRequest)
    {
        try {
            $this->setResult($resultSaveSupplierAgencySettlement = $this->getSoapClient()->__soapCall('saveSupplierAgencySettlement', [
                $paramSaveSupplierAgencySettlementRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveSupplierAgencySettlement;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveSupplAgencySettlemBook
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\SaveSupplAgencySettlemBookRequest $paramSaveSupplAgencySettlemBookRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveSupplAgencySettlemBookResponse|bool
     */
    public function saveSupplAgencySettlemBook(\Pggns\MidocoApi\Api\Order\StructType\SaveSupplAgencySettlemBookRequest $paramSaveSupplAgencySettlemBookRequest)
    {
        try {
            $this->setResult($resultSaveSupplAgencySettlemBook = $this->getSoapClient()->__soapCall('saveSupplAgencySettlemBook', [
                $paramSaveSupplAgencySettlemBookRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveSupplAgencySettlemBook;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveSupplAgencySettlemJournal
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\SaveSupplAgencySettlemJournalsRequest $paramSaveSupplAgencySettlemJournalsRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveSupplAgencySettlemJournalsResponse|bool
     */
    public function saveSupplAgencySettlemJournal(\Pggns\MidocoApi\Api\Order\StructType\SaveSupplAgencySettlemJournalsRequest $paramSaveSupplAgencySettlemJournalsRequest)
    {
        try {
            $this->setResult($resultSaveSupplAgencySettlemJournal = $this->getSoapClient()->__soapCall('saveSupplAgencySettlemJournal', [
                $paramSaveSupplAgencySettlemJournalsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveSupplAgencySettlemJournal;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveOrderMarginInfo
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\SaveOrderMarginInfoRequest $paramSaveOrderMarginInfoRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveOrderMarginInfoResponse|bool
     */
    public function saveOrderMarginInfo(\Pggns\MidocoApi\Api\Order\StructType\SaveOrderMarginInfoRequest $paramSaveOrderMarginInfoRequest)
    {
        try {
            $this->setResult($resultSaveOrderMarginInfo = $this->getSoapClient()->__soapCall('saveOrderMarginInfo', [
                $paramSaveOrderMarginInfoRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveOrderMarginInfo;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveMidocoOrderQm
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\SaveMidocoOrderQmRequest $paramSaveMidocoOrderQmRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveMidocoOrderQmResponse|bool
     */
    public function saveMidocoOrderQm(\Pggns\MidocoApi\Api\Order\StructType\SaveMidocoOrderQmRequest $paramSaveMidocoOrderQmRequest)
    {
        try {
            $this->setResult($resultSaveMidocoOrderQm = $this->getSoapClient()->__soapCall('saveMidocoOrderQm', [
                $paramSaveMidocoOrderQmRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveMidocoOrderQm;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveMdcSettlementBilling
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\SaveMdcSettlementBillingRequest $paramSaveMdcSettlementBillingRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveMdcSettlementBillingResponse|bool
     */
    public function saveMdcSettlementBilling(\Pggns\MidocoApi\Api\Order\StructType\SaveMdcSettlementBillingRequest $paramSaveMdcSettlementBillingRequest)
    {
        try {
            $this->setResult($resultSaveMdcSettlementBilling = $this->getSoapClient()->__soapCall('saveMdcSettlementBilling', [
                $paramSaveMdcSettlementBillingRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveMdcSettlementBilling;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveOrderPaymentPaycode
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\SaveOrderPaymentPaycodeRequest $paramSaveOrderPaymentPaycodeRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveOrderPaymentPaycodeResponse|bool
     */
    public function saveOrderPaymentPaycode(\Pggns\MidocoApi\Api\Order\StructType\SaveOrderPaymentPaycodeRequest $paramSaveOrderPaymentPaycodeRequest)
    {
        try {
            $this->setResult($resultSaveOrderPaymentPaycode = $this->getSoapClient()->__soapCall('saveOrderPaymentPaycode', [
                $paramSaveOrderPaymentPaycodeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveOrderPaymentPaycode;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveTravelCms
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\SaveTravelCMSRequest $paramSaveTravelCMSRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveTravelCMSResponse|bool
     */
    public function saveTravelCms(\Pggns\MidocoApi\Api\Order\StructType\SaveTravelCMSRequest $paramSaveTravelCMSRequest)
    {
        try {
            $this->setResult($resultSaveTravelCms = $this->getSoapClient()->__soapCall('saveTravelCms', [
                $paramSaveTravelCMSRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveTravelCms;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveFairplaneEmail4Order
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\SaveFairplaneEmail4OrderRequest $paramSaveFairplaneEmail4OrderRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveFairplaneEmail4OrderResponse|bool
     */
    public function saveFairplaneEmail4Order(\Pggns\MidocoApi\Api\Order\StructType\SaveFairplaneEmail4OrderRequest $paramSaveFairplaneEmail4OrderRequest)
    {
        try {
            $this->setResult($resultSaveFairplaneEmail4Order = $this->getSoapClient()->__soapCall('saveFairplaneEmail4Order', [
                $paramSaveFairplaneEmail4OrderRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveFairplaneEmail4Order;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveOrderLockPeriod
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\SaveOrderLockPeriodRequest $paramSaveOrderLockPeriodRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveOrderLockPeriodResponse|bool
     */
    public function saveOrderLockPeriod(\Pggns\MidocoApi\Api\Order\StructType\SaveOrderLockPeriodRequest $paramSaveOrderLockPeriodRequest)
    {
        try {
            $this->setResult($resultSaveOrderLockPeriod = $this->getSoapClient()->__soapCall('saveOrderLockPeriod', [
                $paramSaveOrderLockPeriodRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveOrderLockPeriod;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveSubOrders
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\SaveSubOrdersRequest $paramSaveSubOrdersRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveSubOrdersResponse|bool
     */
    public function saveSubOrders(\Pggns\MidocoApi\Api\Order\StructType\SaveSubOrdersRequest $paramSaveSubOrdersRequest)
    {
        try {
            $this->setResult($resultSaveSubOrders = $this->getSoapClient()->__soapCall('saveSubOrders', [
                $paramSaveSubOrdersRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveSubOrders;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveSellRemark
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\SaveSellRemarkRequest $paramSaveSellRemarkRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveSellRemarkResponse|bool
     */
    public function saveSellRemark(\Pggns\MidocoApi\Api\Order\StructType\SaveSellRemarkRequest $paramSaveSellRemarkRequest)
    {
        try {
            $this->setResult($resultSaveSellRemark = $this->getSoapClient()->__soapCall('saveSellRemark', [
                $paramSaveSellRemarkRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveSellRemark;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveBillingNotices
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\SaveBillingNoticesRequest $paramSaveBillingNoticesRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveBillingNoticesResponse|bool
     */
    public function saveBillingNotices(\Pggns\MidocoApi\Api\Order\StructType\SaveBillingNoticesRequest $paramSaveBillingNoticesRequest)
    {
        try {
            $this->setResult($resultSaveBillingNotices = $this->getSoapClient()->__soapCall('saveBillingNotices', [
                $paramSaveBillingNoticesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveBillingNotices;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named savePaymentProviderSettlement
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\SavePaymentProviderSettlementRequest $paramSavePaymentProviderSettlementRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\SavePaymentProviderSettlementResponse|bool
     */
    public function savePaymentProviderSettlement(\Pggns\MidocoApi\Api\Order\StructType\SavePaymentProviderSettlementRequest $paramSavePaymentProviderSettlementRequest)
    {
        try {
            $this->setResult($resultSavePaymentProviderSettlement = $this->getSoapClient()->__soapCall('savePaymentProviderSettlement', [
                $paramSavePaymentProviderSettlementRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSavePaymentProviderSettlement;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * savePaymentProviderSettlementBooking
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\SavePaymentProviderSettlementBookingRequest $paramSavePaymentProviderSettlementBookingRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\SavePaymentProviderSettlementBookingResponse|bool
     */
    public function savePaymentProviderSettlementBooking(\Pggns\MidocoApi\Api\Order\StructType\SavePaymentProviderSettlementBookingRequest $paramSavePaymentProviderSettlementBookingRequest)
    {
        try {
            $this->setResult($resultSavePaymentProviderSettlementBooking = $this->getSoapClient()->__soapCall('savePaymentProviderSettlementBooking', [
                $paramSavePaymentProviderSettlementBookingRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSavePaymentProviderSettlementBooking;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveMidocoItemSellingModes
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\SaveMidocoItemSellingModesRequest $paramSaveMidocoItemSellingModesRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveMidocoItemSellingModesResponse|bool
     */
    public function saveMidocoItemSellingModes(\Pggns\MidocoApi\Api\Order\StructType\SaveMidocoItemSellingModesRequest $paramSaveMidocoItemSellingModesRequest)
    {
        try {
            $this->setResult($resultSaveMidocoItemSellingModes = $this->getSoapClient()->__soapCall('saveMidocoItemSellingModes', [
                $paramSaveMidocoItemSellingModesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveMidocoItemSellingModes;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveBillingNoticeComment
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\SaveBillingNoticeCommentRequest $paramSaveBillingNoticeCommentRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveBillingNoticeCommentResponse|bool
     */
    public function saveBillingNoticeComment(\Pggns\MidocoApi\Api\Order\StructType\SaveBillingNoticeCommentRequest $paramSaveBillingNoticeCommentRequest)
    {
        try {
            $this->setResult($resultSaveBillingNoticeComment = $this->getSoapClient()->__soapCall('saveBillingNoticeComment', [
                $paramSaveBillingNoticeCommentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveBillingNoticeComment;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveOrderNoticeComment
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\SaveOrderNoticeCommentRequest $paramSaveOrderNoticeCommentRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveOrderNoticeCommentResponse|bool
     */
    public function saveOrderNoticeComment(\Pggns\MidocoApi\Api\Order\StructType\SaveOrderNoticeCommentRequest $paramSaveOrderNoticeCommentRequest)
    {
        try {
            $this->setResult($resultSaveOrderNoticeComment = $this->getSoapClient()->__soapCall('saveOrderNoticeComment', [
                $paramSaveOrderNoticeCommentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveOrderNoticeComment;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveSellItemAndRevenueBooking
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\SaveSellItemAndRevenueBookingRequest $paramSaveSellItemAndRevenueBookingRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveSellItemAndRevenueBookingResponse|bool
     */
    public function saveSellItemAndRevenueBooking(\Pggns\MidocoApi\Api\Order\StructType\SaveSellItemAndRevenueBookingRequest $paramSaveSellItemAndRevenueBookingRequest)
    {
        try {
            $this->setResult($resultSaveSellItemAndRevenueBooking = $this->getSoapClient()->__soapCall('saveSellItemAndRevenueBooking', [
                $paramSaveSellItemAndRevenueBookingRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveSellItemAndRevenueBooking;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveAdviceSettlementDetailResponse|\Pggns\MidocoApi\Api\Order\StructType\SaveAdviceSettlementResponse|\Pggns\MidocoApi\Api\Order\StructType\SaveBillingDocDbiInfosResponse|\Pggns\MidocoApi\Api\Order\StructType\SaveBillingDocRemarkResponse|\Pggns\MidocoApi\Api\Order\StructType\SaveBillingDocumentDocumentResponse|\Pggns\MidocoApi\Api\Order\StructType\SaveBillingDocumentPositionResponse|\Pggns\MidocoApi\Api\Order\StructType\SaveBillingDocumentResponse|\Pggns\MidocoApi\Api\Order\StructType\SaveBillingNoticeCommentResponse|\Pggns\MidocoApi\Api\Order\StructType\SaveBillingNoticesResponse|\Pggns\MidocoApi\Api\Order\StructType\SaveBillingPositionResponse|\Pggns\MidocoApi\Api\Order\StructType\SaveBillingPosRemarkResponse|\Pggns\MidocoApi\Api\Order\StructType\SaveBillingPrintSettingsResponse|\Pggns\MidocoApi\Api\Order\StructType\SaveBillingVatCalculationsResponse|\Pggns\MidocoApi\Api\Order\StructType\SaveBookingJournalResponse|\Pggns\MidocoApi\Api\Order\StructType\SaveCashbookResponse|\Pggns\MidocoApi\Api\Order\StructType\SaveDebitInfoForReceiptResponse|\Pggns\MidocoApi\Api\Order\StructType\SaveDebitInfoResponse|\Pggns\MidocoApi\Api\Order\StructType\SaveDunningLockForBillingDocumentResponse|\Pggns\MidocoApi\Api\Order\StructType\SaveFairplaneEmail4OrderResponse|\Pggns\MidocoApi\Api\Order\StructType\SaveFlightTimeChangeEmailResponse|\Pggns\MidocoApi\Api\Order\StructType\SaveIncomingInvoiceResponse|\Pggns\MidocoApi\Api\Order\StructType\SaveManualItemResponse|\Pggns\MidocoApi\Api\Order\StructType\SaveMdcSettlementBillingResponse|\Pggns\MidocoApi\Api\Order\StructType\SaveMediatorBillingResponse|\Pggns\MidocoApi\Api\Order\StructType\SaveMidocoBonusAdditionResponse|\Pggns\MidocoApi\Api\Order\StructType\SaveMidocoBonusCalculationResponse|\Pggns\MidocoApi\Api\Order\StructType\SaveMidocoItemSellingModesResponse|\Pggns\MidocoApi\Api\Order\StructType\SaveMidocoOrderQmResponse|\Pggns\MidocoApi\Api\Order\StructType\SaveMultiNoticeResponse|\Pggns\MidocoApi\Api\Order\StructType\SaveOrderAttributesResponse|\Pggns\MidocoApi\Api\Order\StructType\SaveOrderDebitPaymentResponse|\Pggns\MidocoApi\Api\Order\StructType\SaveOrderDocumentResponse|\Pggns\MidocoApi\Api\Order\StructType\SaveOrderHistoryResponse|\Pggns\MidocoApi\Api\Order\StructType\SaveOrderLockPeriodResponse|\Pggns\MidocoApi\Api\Order\StructType\SaveOrderMarginInfoResponse|\Pggns\MidocoApi\Api\Order\StructType\SaveOrderNoticeCommentResponse|\Pggns\MidocoApi\Api\Order\StructType\SaveOrderNoticeResponse|\Pggns\MidocoApi\Api\Order\StructType\SaveOrderOnlinePaymentResponse|\Pggns\MidocoApi\Api\Order\StructType\SaveOrderPaymentPaycodeResponse|\Pggns\MidocoApi\Api\Order\StructType\SaveOrderRemarkResponse|\Pggns\MidocoApi\Api\Order\StructType\SaveOrderResponse|\Pggns\MidocoApi\Api\Order\StructType\SaveOrdersDbiInfosResponse|\Pggns\MidocoApi\Api\Order\StructType\SavePaymentProviderSettlementBookingResponse|\Pggns\MidocoApi\Api\Order\StructType\SavePaymentProviderSettlementResponse|\Pggns\MidocoApi\Api\Order\StructType\SaveRevenueBookingResponse|\Pggns\MidocoApi\Api\Order\StructType\SaveSellItemAndRevenueBookingResponse|\Pggns\MidocoApi\Api\Order\StructType\SaveSellItemAttributesResponse|\Pggns\MidocoApi\Api\Order\StructType\SaveSellItemDocumentResponse|\Pggns\MidocoApi\Api\Order\StructType\SaveSellItemResponse|\Pggns\MidocoApi\Api\Order\StructType\SaveSellRemarkResponse|\Pggns\MidocoApi\Api\Order\StructType\SaveSubOrdersResponse|\Pggns\MidocoApi\Api\Order\StructType\SaveSupplAgencySettlemBookResponse|\Pggns\MidocoApi\Api\Order\StructType\SaveSupplAgencySettlemJournalsResponse|\Pggns\MidocoApi\Api\Order\StructType\SaveSupplierAgencySettlementResponse|\Pggns\MidocoApi\Api\Order\StructType\SaveTravelCMSResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
