<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\ServiceType;

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
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Api\Order\ServiceType\Get
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named getBillingDocument
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetBillingDocumentRequest $paramGetBillingDocumentRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetBillingDocumentResponse|bool
     */
    public function getBillingDocument(\Pggns\MidocoApi\Api\Order\StructType\GetBillingDocumentRequest $paramGetBillingDocumentRequest)
    {
        try {
            $this->setResult($resultGetBillingDocument = $this->getSoapClient()->__soapCall('getBillingDocument', [
                $paramGetBillingDocumentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetBillingDocument;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getBillingDocumentForCustomer
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetBillingDocumentForCustomerRequest $paramGetBillingDocumentForCustomerRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetBillingDocumentForCustomerResponse|bool
     */
    public function getBillingDocumentForCustomer(\Pggns\MidocoApi\Api\Order\StructType\GetBillingDocumentForCustomerRequest $paramGetBillingDocumentForCustomerRequest)
    {
        try {
            $this->setResult($resultGetBillingDocumentForCustomer = $this->getSoapClient()->__soapCall('getBillingDocumentForCustomer', [
                $paramGetBillingDocumentForCustomerRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetBillingDocumentForCustomer;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getBillingDocumentForOrder
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetBillingDocumentForOrderRequest $paramGetBillingDocumentForOrderRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetBillingDocumentForOrderResponse|bool
     */
    public function getBillingDocumentForOrder(\Pggns\MidocoApi\Api\Order\StructType\GetBillingDocumentForOrderRequest $paramGetBillingDocumentForOrderRequest)
    {
        try {
            $this->setResult($resultGetBillingDocumentForOrder = $this->getSoapClient()->__soapCall('getBillingDocumentForOrder', [
                $paramGetBillingDocumentForOrderRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetBillingDocumentForOrder;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getBillingDocumentForSellItem
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetBillingDocumentForSellItemRequest $paramGetBillingDocumentForSellItemRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetBillingDocumentForSellItemResponse|bool
     */
    public function getBillingDocumentForSellItem(\Pggns\MidocoApi\Api\Order\StructType\GetBillingDocumentForSellItemRequest $paramGetBillingDocumentForSellItemRequest)
    {
        try {
            $this->setResult($resultGetBillingDocumentForSellItem = $this->getSoapClient()->__soapCall('getBillingDocumentForSellItem', [
                $paramGetBillingDocumentForSellItemRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetBillingDocumentForSellItem;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getOrder
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetOrderRequest $paramGetOrderRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetOrderResponse|bool
     */
    public function getOrder(\Pggns\MidocoApi\Api\Order\StructType\GetOrderRequest $paramGetOrderRequest)
    {
        try {
            $this->setResult($resultGetOrder = $this->getSoapClient()->__soapCall('getOrder', [
                $paramGetOrderRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetOrder;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getUnitNameForBookingById
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetUnitNameForBookingByIdRequest $paramGetUnitNameForBookingByIdRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetUnitNameForBookingByIdResponse|bool
     */
    public function getUnitNameForBookingById(\Pggns\MidocoApi\Api\Order\StructType\GetUnitNameForBookingByIdRequest $paramGetUnitNameForBookingByIdRequest)
    {
        try {
            $this->setResult($resultGetUnitNameForBookingById = $this->getSoapClient()->__soapCall('getUnitNameForBookingById', [
                $paramGetUnitNameForBookingByIdRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetUnitNameForBookingById;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSellItem
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetSellItemRequest $paramGetSellItemRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetSellItemResponse|bool
     */
    public function getSellItem(\Pggns\MidocoApi\Api\Order\StructType\GetSellItemRequest $paramGetSellItemRequest)
    {
        try {
            $this->setResult($resultGetSellItem = $this->getSoapClient()->__soapCall('getSellItem', [
                $paramGetSellItemRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSellItem;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getUnassignedBookings
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetUnassignedBookingsRequest $paramGetUnassignedBookingsRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetUnassignedBookingsResponse|bool
     */
    public function getUnassignedBookings(\Pggns\MidocoApi\Api\Order\StructType\GetUnassignedBookingsRequest $paramGetUnassignedBookingsRequest)
    {
        try {
            $this->setResult($resultGetUnassignedBookings = $this->getSoapClient()->__soapCall('getUnassignedBookings', [
                $paramGetUnassignedBookingsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetUnassignedBookings;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getTravelersForDocumentId
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetTravelersForDocumentIdRequest $paramGetTravelersForDocumentIdRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetTravelersForDocumentIdResponse|bool
     */
    public function getTravelersForDocumentId(\Pggns\MidocoApi\Api\Order\StructType\GetTravelersForDocumentIdRequest $paramGetTravelersForDocumentIdRequest)
    {
        try {
            $this->setResult($resultGetTravelersForDocumentId = $this->getSoapClient()->__soapCall('getTravelersForDocumentId', [
                $paramGetTravelersForDocumentIdRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetTravelersForDocumentId;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getBillingPositionsForDocumentId
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetBillingPositionsForDocumentIdRequest $paramGetBillingPositionsForDocumentIdRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetBillingPositionsForDocumentIdResponse|bool
     */
    public function getBillingPositionsForDocumentId(\Pggns\MidocoApi\Api\Order\StructType\GetBillingPositionsForDocumentIdRequest $paramGetBillingPositionsForDocumentIdRequest)
    {
        try {
            $this->setResult($resultGetBillingPositionsForDocumentId = $this->getSoapClient()->__soapCall('getBillingPositionsForDocumentId', [
                $paramGetBillingPositionsForDocumentIdRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetBillingPositionsForDocumentId;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getOrderDebitPayment
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetOrderDebitPaymentRequest $paramGetOrderDebitPaymentRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetOrderDebitPaymentResponse|bool
     */
    public function getOrderDebitPayment(\Pggns\MidocoApi\Api\Order\StructType\GetOrderDebitPaymentRequest $paramGetOrderDebitPaymentRequest)
    {
        try {
            $this->setResult($resultGetOrderDebitPayment = $this->getSoapClient()->__soapCall('getOrderDebitPayment', [
                $paramGetOrderDebitPaymentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetOrderDebitPayment;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getOrderOnlinePayment
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetOrderOnlinePaymentRequest $paramGetOrderOnlinePaymentRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetOrderOnlinePaymentResponse|bool
     */
    public function getOrderOnlinePayment(\Pggns\MidocoApi\Api\Order\StructType\GetOrderOnlinePaymentRequest $paramGetOrderOnlinePaymentRequest)
    {
        try {
            $this->setResult($resultGetOrderOnlinePayment = $this->getSoapClient()->__soapCall('getOrderOnlinePayment', [
                $paramGetOrderOnlinePaymentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetOrderOnlinePayment;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMediatorCommission
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetMediatorCommissionRequest $paramGetMediatorCommissionRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetMediatorCommissionResponse|bool
     */
    public function getMediatorCommission(\Pggns\MidocoApi\Api\Order\StructType\GetMediatorCommissionRequest $paramGetMediatorCommissionRequest)
    {
        try {
            $this->setResult($resultGetMediatorCommission = $this->getSoapClient()->__soapCall('getMediatorCommission', [
                $paramGetMediatorCommissionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMediatorCommission;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * getFilteredBillingDocumentsForOrder
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetFilteredBillingDocumentsForOrderRequest $paramGetFilteredBillingDocumentsForOrderRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetFilteredBillingDocumentsForOrderResponse|bool
     */
    public function getFilteredBillingDocumentsForOrder(\Pggns\MidocoApi\Api\Order\StructType\GetFilteredBillingDocumentsForOrderRequest $paramGetFilteredBillingDocumentsForOrderRequest)
    {
        try {
            $this->setResult($resultGetFilteredBillingDocumentsForOrder = $this->getSoapClient()->__soapCall('getFilteredBillingDocumentsForOrder', [
                $paramGetFilteredBillingDocumentsForOrderRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetFilteredBillingDocumentsForOrder;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getTravelPlans
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetTravelPlansRequest $paramGetTravelPlansRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetTravelPlansResponse|bool
     */
    public function getTravelPlans(\Pggns\MidocoApi\Api\Order\StructType\GetTravelPlansRequest $paramGetTravelPlansRequest)
    {
        try {
            $this->setResult($resultGetTravelPlans = $this->getSoapClient()->__soapCall('getTravelPlans', [
                $paramGetTravelPlansRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetTravelPlans;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSettlementInfoDetails
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetSettlementInfoDetailsRequest $paramGetSettlementInfoDetailsRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetSettlementInfoDetailsResponse|bool
     */
    public function getSettlementInfoDetails(\Pggns\MidocoApi\Api\Order\StructType\GetSettlementInfoDetailsRequest $paramGetSettlementInfoDetailsRequest)
    {
        try {
            $this->setResult($resultGetSettlementInfoDetails = $this->getSoapClient()->__soapCall('getSettlementInfoDetails', [
                $paramGetSettlementInfoDetailsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSettlementInfoDetails;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSupplierSettlementError
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetSupplierSettlementErrorRequest $paramGetSupplierSettlementErrorRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetSupplierSettlementErrorResponse|bool
     */
    public function getSupplierSettlementError(\Pggns\MidocoApi\Api\Order\StructType\GetSupplierSettlementErrorRequest $paramGetSupplierSettlementErrorRequest)
    {
        try {
            $this->setResult($resultGetSupplierSettlementError = $this->getSoapClient()->__soapCall('getSupplierSettlementError', [
                $paramGetSupplierSettlementErrorRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSupplierSettlementError;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCashbooks
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetCashbooksRequest $paramGetCashbooksRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetCashbooksResponse|bool
     */
    public function getCashbooks(\Pggns\MidocoApi\Api\Order\StructType\GetCashbooksRequest $paramGetCashbooksRequest)
    {
        try {
            $this->setResult($resultGetCashbooks = $this->getSoapClient()->__soapCall('getCashbooks', [
                $paramGetCashbooksRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCashbooks;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getBookingJournal
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetBookingJournalRequest $paramGetBookingJournalRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetBookingJournalResponse|bool
     */
    public function getBookingJournal(\Pggns\MidocoApi\Api\Order\StructType\GetBookingJournalRequest $paramGetBookingJournalRequest)
    {
        try {
            $this->setResult($resultGetBookingJournal = $this->getSoapClient()->__soapCall('getBookingJournal', [
                $paramGetBookingJournalRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetBookingJournal;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getJournalExportFile
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetJournalExportFileRequest $paramGetJournalExportFileRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetJournalExportFileResponse|bool
     */
    public function getJournalExportFile(\Pggns\MidocoApi\Api\Order\StructType\GetJournalExportFileRequest $paramGetJournalExportFileRequest)
    {
        try {
            $this->setResult($resultGetJournalExportFile = $this->getSoapClient()->__soapCall('getJournalExportFile', [
                $paramGetJournalExportFileRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetJournalExportFile;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getOrderRemarks
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetOrderRemarksRequest $paramGetOrderRemarksRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetOrderRemarksResponse|bool
     */
    public function getOrderRemarks(\Pggns\MidocoApi\Api\Order\StructType\GetOrderRemarksRequest $paramGetOrderRemarksRequest)
    {
        try {
            $this->setResult($resultGetOrderRemarks = $this->getSoapClient()->__soapCall('getOrderRemarks', [
                $paramGetOrderRemarksRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetOrderRemarks;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getOrgUnitUserCashbooks
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetOrgUnitAndUserCashbookRequest $paramGetOrgUnitAndUserCashbookRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetOrgUnitAndUserCashbookResponse|bool
     */
    public function getOrgUnitUserCashbooks(\Pggns\MidocoApi\Api\Order\StructType\GetOrgUnitAndUserCashbookRequest $paramGetOrgUnitAndUserCashbookRequest)
    {
        try {
            $this->setResult($resultGetOrgUnitUserCashbooks = $this->getSoapClient()->__soapCall('getOrgUnitUserCashbooks', [
                $paramGetOrgUnitAndUserCashbookRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetOrgUnitUserCashbooks;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getBillingPrintInfo
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetBillingPrintInfoRequest $paramGetBillingPrintInfoRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetBillingPrintInfoResponse|bool
     */
    public function getBillingPrintInfo(\Pggns\MidocoApi\Api\Order\StructType\GetBillingPrintInfoRequest $paramGetBillingPrintInfoRequest)
    {
        try {
            $this->setResult($resultGetBillingPrintInfo = $this->getSoapClient()->__soapCall('getBillingPrintInfo', [
                $paramGetBillingPrintInfoRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetBillingPrintInfo;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSellItemProvision
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetSellItemProvisionRequest $paramGetSellItemProvisionRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetSellItemProvisionResponse|bool
     */
    public function getSellItemProvision(\Pggns\MidocoApi\Api\Order\StructType\GetSellItemProvisionRequest $paramGetSellItemProvisionRequest)
    {
        try {
            $this->setResult($resultGetSellItemProvision = $this->getSoapClient()->__soapCall('getSellItemProvision', [
                $paramGetSellItemProvisionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSellItemProvision;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getPrintedBillingDoc
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetPrintedBillingDocRequest $paramGetPrintedBillingDocRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetPrintedBillingDocResponse|bool
     */
    public function getPrintedBillingDoc(\Pggns\MidocoApi\Api\Order\StructType\GetPrintedBillingDocRequest $paramGetPrintedBillingDocRequest)
    {
        try {
            $this->setResult($resultGetPrintedBillingDoc = $this->getSoapClient()->__soapCall('getPrintedBillingDoc', [
                $paramGetPrintedBillingDocRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetPrintedBillingDoc;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getBillingPositionsForOrder
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetBillingPositionsForOrderRequest $paramGetBillingPositionsForOrderRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetBillingPositionsForOrderResponse|bool
     */
    public function getBillingPositionsForOrder(\Pggns\MidocoApi\Api\Order\StructType\GetBillingPositionsForOrderRequest $paramGetBillingPositionsForOrderRequest)
    {
        try {
            $this->setResult($resultGetBillingPositionsForOrder = $this->getSoapClient()->__soapCall('getBillingPositionsForOrder', [
                $paramGetBillingPositionsForOrderRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetBillingPositionsForOrder;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMidocoBonusCalculations
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetMidocoBonusCalculationRequest $paramGetMidocoBonusCalculationRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetMidocoBonusCalculationResponse|bool
     */
    public function getMidocoBonusCalculations(\Pggns\MidocoApi\Api\Order\StructType\GetMidocoBonusCalculationRequest $paramGetMidocoBonusCalculationRequest)
    {
        try {
            $this->setResult($resultGetMidocoBonusCalculations = $this->getSoapClient()->__soapCall('getMidocoBonusCalculations', [
                $paramGetMidocoBonusCalculationRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMidocoBonusCalculations;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getUsersFromBonusCalculation
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetUsersFromBonusCalculationRequest $paramGetUsersFromBonusCalculationRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetUsersFromBonusCalculationResponse|bool
     */
    public function getUsersFromBonusCalculation(\Pggns\MidocoApi\Api\Order\StructType\GetUsersFromBonusCalculationRequest $paramGetUsersFromBonusCalculationRequest)
    {
        try {
            $this->setResult($resultGetUsersFromBonusCalculation = $this->getSoapClient()->__soapCall('getUsersFromBonusCalculation', [
                $paramGetUsersFromBonusCalculationRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetUsersFromBonusCalculation;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSkippedBookings
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetSkippedBookingsRequest $paramGetSkippedBookingsRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetSkippedBookingsResponse|bool
     */
    public function getSkippedBookings(\Pggns\MidocoApi\Api\Order\StructType\GetSkippedBookingsRequest $paramGetSkippedBookingsRequest)
    {
        try {
            $this->setResult($resultGetSkippedBookings = $this->getSoapClient()->__soapCall('getSkippedBookings', [
                $paramGetSkippedBookingsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSkippedBookings;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getBonusForEmployee
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetMidocoBonusEmployeeRequest $paramGetMidocoBonusEmployeeRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetMidocoBonusEmployeeResponse|bool
     */
    public function getBonusForEmployee(\Pggns\MidocoApi\Api\Order\StructType\GetMidocoBonusEmployeeRequest $paramGetMidocoBonusEmployeeRequest)
    {
        try {
            $this->setResult($resultGetBonusForEmployee = $this->getSoapClient()->__soapCall('getBonusForEmployee', [
                $paramGetMidocoBonusEmployeeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetBonusForEmployee;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSellitemDetailsForBonusEmployee
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetSellitemDetailsForBonusEmployeeRequest $paramGetSellitemDetailsForBonusEmployeeRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetSellitemDetailsForBonusEmployeeResponse|bool
     */
    public function getSellitemDetailsForBonusEmployee(\Pggns\MidocoApi\Api\Order\StructType\GetSellitemDetailsForBonusEmployeeRequest $paramGetSellitemDetailsForBonusEmployeeRequest)
    {
        try {
            $this->setResult($resultGetSellitemDetailsForBonusEmployee = $this->getSoapClient()->__soapCall('getSellitemDetailsForBonusEmployee', [
                $paramGetSellitemDetailsForBonusEmployeeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSellitemDetailsForBonusEmployee;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMidocoBonusAddition
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetMidocoBonusAdditionRequest $paramGetMidocoBonusAdditionRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetMidocoBonusAdditionResponse|bool
     */
    public function getMidocoBonusAddition(\Pggns\MidocoApi\Api\Order\StructType\GetMidocoBonusAdditionRequest $paramGetMidocoBonusAdditionRequest)
    {
        try {
            $this->setResult($resultGetMidocoBonusAddition = $this->getSoapClient()->__soapCall('getMidocoBonusAddition', [
                $paramGetMidocoBonusAdditionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMidocoBonusAddition;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getOrderPayments
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetOrderPaymentsRequest $paramGetOrderPaymentsRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetOrderPaymentsResponse|bool
     */
    public function getOrderPayments(\Pggns\MidocoApi\Api\Order\StructType\GetOrderPaymentsRequest $paramGetOrderPaymentsRequest)
    {
        try {
            $this->setResult($resultGetOrderPayments = $this->getSoapClient()->__soapCall('getOrderPayments', [
                $paramGetOrderPaymentsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetOrderPayments;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getOrderInvoices
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetOrderInvoicesRequest $paramGetOrderInvoicesRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetOrderInvoicesResponse|bool
     */
    public function getOrderInvoices(\Pggns\MidocoApi\Api\Order\StructType\GetOrderInvoicesRequest $paramGetOrderInvoicesRequest)
    {
        try {
            $this->setResult($resultGetOrderInvoices = $this->getSoapClient()->__soapCall('getOrderInvoices', [
                $paramGetOrderInvoicesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetOrderInvoices;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMidocoAgencySettlement
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetMidocoAgencySettlementRequest $paramGetMidocoAgencySettlementRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetMidocoAgencySettlementResponse|bool
     */
    public function getMidocoAgencySettlement(\Pggns\MidocoApi\Api\Order\StructType\GetMidocoAgencySettlementRequest $paramGetMidocoAgencySettlementRequest)
    {
        try {
            $this->setResult($resultGetMidocoAgencySettlement = $this->getSoapClient()->__soapCall('getMidocoAgencySettlement', [
                $paramGetMidocoAgencySettlementRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMidocoAgencySettlement;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * getMidocoAgencySettlementOrderDetails
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetMidocoAgencySettlementOrderDetailsRequest $paramGetMidocoAgencySettlementOrderDetailsRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetMidocoAgencySettlementOrderDetailsResponse|bool
     */
    public function getMidocoAgencySettlementOrderDetails(\Pggns\MidocoApi\Api\Order\StructType\GetMidocoAgencySettlementOrderDetailsRequest $paramGetMidocoAgencySettlementOrderDetailsRequest)
    {
        try {
            $this->setResult($resultGetMidocoAgencySettlementOrderDetails = $this->getSoapClient()->__soapCall('getMidocoAgencySettlementOrderDetails', [
                $paramGetMidocoAgencySettlementOrderDetailsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMidocoAgencySettlementOrderDetails;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSellItemDocuments
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetSellItemDocumentsRequest $paramGetSellItemDocumentsRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetSellItemDocumentsResponse|bool
     */
    public function getSellItemDocuments(\Pggns\MidocoApi\Api\Order\StructType\GetSellItemDocumentsRequest $paramGetSellItemDocumentsRequest)
    {
        try {
            $this->setResult($resultGetSellItemDocuments = $this->getSoapClient()->__soapCall('getSellItemDocuments', [
                $paramGetSellItemDocumentsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSellItemDocuments;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getReceipt
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetReceiptRequest $paramGetReceiptRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetReceiptResponse|bool
     */
    public function getReceipt(\Pggns\MidocoApi\Api\Order\StructType\GetReceiptRequest $paramGetReceiptRequest)
    {
        try {
            $this->setResult($resultGetReceipt = $this->getSoapClient()->__soapCall('getReceipt', [
                $paramGetReceiptRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetReceipt;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getUnprintedOrderIDs
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetUnprintedOrderIDsRequest $paramGetUnprintedOrderIDsRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetUnprintedOrderIDsResponse|bool
     */
    public function getUnprintedOrderIDs(\Pggns\MidocoApi\Api\Order\StructType\GetUnprintedOrderIDsRequest $paramGetUnprintedOrderIDsRequest)
    {
        try {
            $this->setResult($resultGetUnprintedOrderIDs = $this->getSoapClient()->__soapCall('getUnprintedOrderIDs', [
                $paramGetUnprintedOrderIDsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetUnprintedOrderIDs;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAgencySettlement
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetAgencySettlementRequest $paramGetAgencySettlementRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetAgencySettlementResponse|bool
     */
    public function getAgencySettlement(\Pggns\MidocoApi\Api\Order\StructType\GetAgencySettlementRequest $paramGetAgencySettlementRequest)
    {
        try {
            $this->setResult($resultGetAgencySettlement = $this->getSoapClient()->__soapCall('getAgencySettlement', [
                $paramGetAgencySettlementRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAgencySettlement;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAccountEntriesForOrder
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetAccountEntriesForOrderRequest $paramGetAccountEntriesForOrderRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetAccountEntriesForOrderResponse|bool
     */
    public function getAccountEntriesForOrder(\Pggns\MidocoApi\Api\Order\StructType\GetAccountEntriesForOrderRequest $paramGetAccountEntriesForOrderRequest)
    {
        try {
            $this->setResult($resultGetAccountEntriesForOrder = $this->getSoapClient()->__soapCall('getAccountEntriesForOrder', [
                $paramGetAccountEntriesForOrderRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAccountEntriesForOrder;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAccountEntriesForDebitor
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetAccountEntriesForDebitorRequest $paramGetAccountEntriesForDebitorRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetAccountEntriesForDebitorResponse|bool
     */
    public function getAccountEntriesForDebitor(\Pggns\MidocoApi\Api\Order\StructType\GetAccountEntriesForDebitorRequest $paramGetAccountEntriesForDebitorRequest)
    {
        try {
            $this->setResult($resultGetAccountEntriesForDebitor = $this->getSoapClient()->__soapCall('getAccountEntriesForDebitor', [
                $paramGetAccountEntriesForDebitorRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAccountEntriesForDebitor;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getOrderAttributes
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetOrderAttributesRequest $paramGetOrderAttributesRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetOrderAttributesResponse|bool
     */
    public function getOrderAttributes(\Pggns\MidocoApi\Api\Order\StructType\GetOrderAttributesRequest $paramGetOrderAttributesRequest)
    {
        try {
            $this->setResult($resultGetOrderAttributes = $this->getSoapClient()->__soapCall('getOrderAttributes', [
                $paramGetOrderAttributesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetOrderAttributes;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSellItemAttributes
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetSellItemAttributesRequest $paramGetSellItemAttributesRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetSellItemAttributesResponse|bool
     */
    public function getSellItemAttributes(\Pggns\MidocoApi\Api\Order\StructType\GetSellItemAttributesRequest $paramGetSellItemAttributesRequest)
    {
        try {
            $this->setResult($resultGetSellItemAttributes = $this->getSoapClient()->__soapCall('getSellItemAttributes', [
                $paramGetSellItemAttributesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSellItemAttributes;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSellItemAttributesForOrder
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetSellItemAttributesForOrderRequest $paramGetSellItemAttributesForOrderRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetSellItemAttributesForOrderResponse|bool
     */
    public function getSellItemAttributesForOrder(\Pggns\MidocoApi\Api\Order\StructType\GetSellItemAttributesForOrderRequest $paramGetSellItemAttributesForOrderRequest)
    {
        try {
            $this->setResult($resultGetSellItemAttributesForOrder = $this->getSoapClient()->__soapCall('getSellItemAttributesForOrder', [
                $paramGetSellItemAttributesForOrderRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSellItemAttributesForOrder;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getInvoiceOrderByCustomer
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetInvoiceOrderByCustomerIdRequest $paramGetInvoiceOrderByCustomerIdRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetInvoiceOrderByCustomerIdResponse|bool
     */
    public function getInvoiceOrderByCustomer(\Pggns\MidocoApi\Api\Order\StructType\GetInvoiceOrderByCustomerIdRequest $paramGetInvoiceOrderByCustomerIdRequest)
    {
        try {
            $this->setResult($resultGetInvoiceOrderByCustomer = $this->getSoapClient()->__soapCall('getInvoiceOrderByCustomer', [
                $paramGetInvoiceOrderByCustomerIdRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetInvoiceOrderByCustomer;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMediatorBillingDetails
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetMediatorBillingDetailsRequest $paramGetMediatorBillingDetailsRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetMediatorBillingDetailsResponse|bool
     */
    public function getMediatorBillingDetails(\Pggns\MidocoApi\Api\Order\StructType\GetMediatorBillingDetailsRequest $paramGetMediatorBillingDetailsRequest)
    {
        try {
            $this->setResult($resultGetMediatorBillingDetails = $this->getSoapClient()->__soapCall('getMediatorBillingDetails', [
                $paramGetMediatorBillingDetailsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMediatorBillingDetails;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMerlinExportString
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetMerlinExportStringRequest $paramGetMerlinExportStringRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetMerlinExportStringResponse|bool
     */
    public function getMerlinExportString(\Pggns\MidocoApi\Api\Order\StructType\GetMerlinExportStringRequest $paramGetMerlinExportStringRequest)
    {
        try {
            $this->setResult($resultGetMerlinExportString = $this->getSoapClient()->__soapCall('getMerlinExportString', [
                $paramGetMerlinExportStringRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMerlinExportString;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getDocumentIdForInvoice
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetDocumentIdForInvoiceRequest $paramGetDocumentIdForInvoiceRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetDocumentIdForInvoiceResponse|bool
     */
    public function getDocumentIdForInvoice(\Pggns\MidocoApi\Api\Order\StructType\GetDocumentIdForInvoiceRequest $paramGetDocumentIdForInvoiceRequest)
    {
        try {
            $this->setResult($resultGetDocumentIdForInvoice = $this->getSoapClient()->__soapCall('getDocumentIdForInvoice', [
                $paramGetDocumentIdForInvoiceRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetDocumentIdForInvoice;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getOrderNotices
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetOrderNoticesRequest $paramGetOrderNoticesRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetOrderNoticesResponse|bool
     */
    public function getOrderNotices(\Pggns\MidocoApi\Api\Order\StructType\GetOrderNoticesRequest $paramGetOrderNoticesRequest)
    {
        try {
            $this->setResult($resultGetOrderNotices = $this->getSoapClient()->__soapCall('getOrderNotices', [
                $paramGetOrderNoticesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetOrderNotices;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getOrdersForTraveller
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetOrdersForTravellerRequest $paramGetOrdersForTravellerRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetOrdersForTravellerResponse|bool
     */
    public function getOrdersForTraveller(\Pggns\MidocoApi\Api\Order\StructType\GetOrdersForTravellerRequest $paramGetOrdersForTravellerRequest)
    {
        try {
            $this->setResult($resultGetOrdersForTraveller = $this->getSoapClient()->__soapCall('getOrdersForTraveller', [
                $paramGetOrdersForTravellerRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetOrdersForTraveller;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getOrdersForMediator
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetOrdersForMediatorRequest $paramGetOrdersForMediatorRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetOrdersForMediatorResponse|bool
     */
    public function getOrdersForMediator(\Pggns\MidocoApi\Api\Order\StructType\GetOrdersForMediatorRequest $paramGetOrdersForMediatorRequest)
    {
        try {
            $this->setResult($resultGetOrdersForMediator = $this->getSoapClient()->__soapCall('getOrdersForMediator', [
                $paramGetOrdersForMediatorRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetOrdersForMediator;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * getConfirmationReceivedSellitemsForSupplier
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetConfirmationReceivedSellitemsForSupplierRequest $paramGetConfirmationReceivedSellitemsForSupplierRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetConfirmationReceivedSellitemsForSupplierResponse|bool
     */
    public function getConfirmationReceivedSellitemsForSupplier(\Pggns\MidocoApi\Api\Order\StructType\GetConfirmationReceivedSellitemsForSupplierRequest $paramGetConfirmationReceivedSellitemsForSupplierRequest)
    {
        try {
            $this->setResult($resultGetConfirmationReceivedSellitemsForSupplier = $this->getSoapClient()->__soapCall('getConfirmationReceivedSellitemsForSupplier', [
                $paramGetConfirmationReceivedSellitemsForSupplierRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetConfirmationReceivedSellitemsForSupplier;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * getSupplierAgencySettlementBookings
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetSupplierAgencySettlementBookingsRequest $paramGetSupplierAgencySettlementBookingsRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetSupplierAgencySettlementBookingsResponse|bool
     */
    public function getSupplierAgencySettlementBookings(\Pggns\MidocoApi\Api\Order\StructType\GetSupplierAgencySettlementBookingsRequest $paramGetSupplierAgencySettlementBookingsRequest)
    {
        try {
            $this->setResult($resultGetSupplierAgencySettlementBookings = $this->getSoapClient()->__soapCall('getSupplierAgencySettlementBookings', [
                $paramGetSupplierAgencySettlementBookingsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSupplierAgencySettlementBookings;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSupplierAgencySettlementDetails
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetSupplierAgencySettlementDetailsRequest $paramGetSupplierAgencySettlementDetailsRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetSupplierAgencySettlementDetailsResponse|bool
     */
    public function getSupplierAgencySettlementDetails(\Pggns\MidocoApi\Api\Order\StructType\GetSupplierAgencySettlementDetailsRequest $paramGetSupplierAgencySettlementDetailsRequest)
    {
        try {
            $this->setResult($resultGetSupplierAgencySettlementDetails = $this->getSoapClient()->__soapCall('getSupplierAgencySettlementDetails', [
                $paramGetSupplierAgencySettlementDetailsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSupplierAgencySettlementDetails;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getOrderIdForSellItemId
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetOrderIdForSellItemIdRequest $paramGetOrderIdForSellItemIdRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetOrderIdForSellItemIdResponse|bool
     */
    public function getOrderIdForSellItemId(\Pggns\MidocoApi\Api\Order\StructType\GetOrderIdForSellItemIdRequest $paramGetOrderIdForSellItemIdRequest)
    {
        try {
            $this->setResult($resultGetOrderIdForSellItemId = $this->getSoapClient()->__soapCall('getOrderIdForSellItemId', [
                $paramGetOrderIdForSellItemIdRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetOrderIdForSellItemId;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCmsHotelData
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetCmsHotelDataRequestType $paramGetCmsHotelDataRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetCmsHotelDataResponseType|bool
     */
    public function getCmsHotelData(\Pggns\MidocoApi\Api\Order\StructType\GetCmsHotelDataRequestType $paramGetCmsHotelDataRequest)
    {
        try {
            $this->setResult($resultGetCmsHotelData = $this->getSoapClient()->__soapCall('getCmsHotelData', [
                $paramGetCmsHotelDataRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCmsHotelData;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getICmsHotelData
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetCmsHotelDataRequestType $paramGetICmsHotelDataRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetCmsHotelDataResponseType|bool
     */
    public function getICmsHotelData(\Pggns\MidocoApi\Api\Order\StructType\GetCmsHotelDataRequestType $paramGetICmsHotelDataRequest)
    {
        try {
            $this->setResult($resultGetICmsHotelData = $this->getSoapClient()->__soapCall('getICmsHotelData', [
                $paramGetICmsHotelDataRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetICmsHotelData;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getTextForSellItemError
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetTextForSellItemErrorRequest $paramGetTextForSellItemErrorRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetTextForSellItemErrorResponse|bool
     */
    public function getTextForSellItemError(\Pggns\MidocoApi\Api\Order\StructType\GetTextForSellItemErrorRequest $paramGetTextForSellItemErrorRequest)
    {
        try {
            $this->setResult($resultGetTextForSellItemError = $this->getSoapClient()->__soapCall('getTextForSellItemError', [
                $paramGetTextForSellItemErrorRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetTextForSellItemError;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAmwayMediatorBookings
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetAmwayMediatorBookingsRequest $paramGetAmwayMediatorBookingsRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetAmwayMediatorBookingsResponse|bool
     */
    public function getAmwayMediatorBookings(\Pggns\MidocoApi\Api\Order\StructType\GetAmwayMediatorBookingsRequest $paramGetAmwayMediatorBookingsRequest)
    {
        try {
            $this->setResult($resultGetAmwayMediatorBookings = $this->getSoapClient()->__soapCall('getAmwayMediatorBookings', [
                $paramGetAmwayMediatorBookingsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAmwayMediatorBookings;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getOrderHistory
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetOrderHistoryRequest $paramGetOrderHistoryRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetOrderHistoryResponse|bool
     */
    public function getOrderHistory(\Pggns\MidocoApi\Api\Order\StructType\GetOrderHistoryRequest $paramGetOrderHistoryRequest)
    {
        try {
            $this->setResult($resultGetOrderHistory = $this->getSoapClient()->__soapCall('getOrderHistory', [
                $paramGetOrderHistoryRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetOrderHistory;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getBookingMessage4Order
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetBookingMessage4OrderRequest $paramGetBookingMessage4OrderRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetBookingMessage4OrderResponse|bool
     */
    public function getBookingMessage4Order(\Pggns\MidocoApi\Api\Order\StructType\GetBookingMessage4OrderRequest $paramGetBookingMessage4OrderRequest)
    {
        try {
            $this->setResult($resultGetBookingMessage4Order = $this->getSoapClient()->__soapCall('getBookingMessage4Order', [
                $paramGetBookingMessage4OrderRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetBookingMessage4Order;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getRevenueBookingForSellitem
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetRevenueBookingForSellitemRequest $paramGetRevenueBookingForSellitemRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetRevenueBookingForSellitemResponse|bool
     */
    public function getRevenueBookingForSellitem(\Pggns\MidocoApi\Api\Order\StructType\GetRevenueBookingForSellitemRequest $paramGetRevenueBookingForSellitemRequest)
    {
        try {
            $this->setResult($resultGetRevenueBookingForSellitem = $this->getSoapClient()->__soapCall('getRevenueBookingForSellitem', [
                $paramGetRevenueBookingForSellitemRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetRevenueBookingForSellitem;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * getMediatorProductSettlementDetails
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetMediatorProductSettlementDetailsRequest $paramGetMediatorProductSettlementDetailsRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetMediatorProductSettlementDetailsResponse|bool
     */
    public function getMediatorProductSettlementDetails(\Pggns\MidocoApi\Api\Order\StructType\GetMediatorProductSettlementDetailsRequest $paramGetMediatorProductSettlementDetailsRequest)
    {
        try {
            $this->setResult($resultGetMediatorProductSettlementDetails = $this->getSoapClient()->__soapCall('getMediatorProductSettlementDetails', [
                $paramGetMediatorProductSettlementDetailsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMediatorProductSettlementDetails;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getDebitInfoForReceipt
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetDebitInfoForReceiptRequest $paramGetDebitInfoForReceiptRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetDebitInfoForReceiptResponse|bool
     */
    public function getDebitInfoForReceipt(\Pggns\MidocoApi\Api\Order\StructType\GetDebitInfoForReceiptRequest $paramGetDebitInfoForReceiptRequest)
    {
        try {
            $this->setResult($resultGetDebitInfoForReceipt = $this->getSoapClient()->__soapCall('getDebitInfoForReceipt', [
                $paramGetDebitInfoForReceiptRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetDebitInfoForReceipt;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getDebitorForOrgunit
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetDebitorForOrgunitRequest $paramGetDebitorForOrgunitRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetDebitorForOrgunitResponse|bool
     */
    public function getDebitorForOrgunit(\Pggns\MidocoApi\Api\Order\StructType\GetDebitorForOrgunitRequest $paramGetDebitorForOrgunitRequest)
    {
        try {
            $this->setResult($resultGetDebitorForOrgunit = $this->getSoapClient()->__soapCall('getDebitorForOrgunit', [
                $paramGetDebitorForOrgunitRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetDebitorForOrgunit;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAmadeusExportString
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetAmadeusExportStringRequest $paramGetAmadeusExportStringRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetAmadeusExportStringResponse|bool
     */
    public function getAmadeusExportString(\Pggns\MidocoApi\Api\Order\StructType\GetAmadeusExportStringRequest $paramGetAmadeusExportStringRequest)
    {
        try {
            $this->setResult($resultGetAmadeusExportString = $this->getSoapClient()->__soapCall('getAmadeusExportString', [
                $paramGetAmadeusExportStringRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAmadeusExportString;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getEntryHistory
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetEntryHistoryRequest $paramGetEntryHistoryRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetEntryHistoryResponse|bool
     */
    public function getEntryHistory(\Pggns\MidocoApi\Api\Order\StructType\GetEntryHistoryRequest $paramGetEntryHistoryRequest)
    {
        try {
            $this->setResult($resultGetEntryHistory = $this->getSoapClient()->__soapCall('getEntryHistory', [
                $paramGetEntryHistoryRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetEntryHistory;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getBookingMessage4Takeoff
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetBookingMessage4TakeoffRequest $paramGetBookingMessage4TakeoffRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetBookingMessage4TakeoffResponse|bool
     */
    public function getBookingMessage4Takeoff(\Pggns\MidocoApi\Api\Order\StructType\GetBookingMessage4TakeoffRequest $paramGetBookingMessage4TakeoffRequest)
    {
        try {
            $this->setResult($resultGetBookingMessage4Takeoff = $this->getSoapClient()->__soapCall('getBookingMessage4Takeoff', [
                $paramGetBookingMessage4TakeoffRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetBookingMessage4Takeoff;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getProcessedBookings
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetProcessedBookingsRequest $paramGetProcessedBookingsRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetProcessedBookingsResponse|bool
     */
    public function getProcessedBookings(\Pggns\MidocoApi\Api\Order\StructType\GetProcessedBookingsRequest $paramGetProcessedBookingsRequest)
    {
        try {
            $this->setResult($resultGetProcessedBookings = $this->getSoapClient()->__soapCall('getProcessedBookings', [
                $paramGetProcessedBookingsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetProcessedBookings;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getTravelDocsPrintInfo
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetTravelDocsPrintInfoRequest $paramGetTravelDocsPrintInfoRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetTravelDocsPrintInfoResponse|bool
     */
    public function getTravelDocsPrintInfo(\Pggns\MidocoApi\Api\Order\StructType\GetTravelDocsPrintInfoRequest $paramGetTravelDocsPrintInfoRequest)
    {
        try {
            $this->setResult($resultGetTravelDocsPrintInfo = $this->getSoapClient()->__soapCall('getTravelDocsPrintInfo', [
                $paramGetTravelDocsPrintInfoRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetTravelDocsPrintInfo;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMergedDunningList
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetMergedDunningRequest $paramGetMergedDunningRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetMergedDunningResponse|bool
     */
    public function getMergedDunningList(\Pggns\MidocoApi\Api\Order\StructType\GetMergedDunningRequest $paramGetMergedDunningRequest)
    {
        try {
            $this->setResult($resultGetMergedDunningList = $this->getSoapClient()->__soapCall('getMergedDunningList', [
                $paramGetMergedDunningRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMergedDunningList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAgencySettlementLevelDetails
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetAgencySettlementLevelDetailsRequest $paramGetAgencySettlementLevelDetailsRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetAgencySettlementLevelDetailsResponse|bool
     */
    public function getAgencySettlementLevelDetails(\Pggns\MidocoApi\Api\Order\StructType\GetAgencySettlementLevelDetailsRequest $paramGetAgencySettlementLevelDetailsRequest)
    {
        try {
            $this->setResult($resultGetAgencySettlementLevelDetails = $this->getSoapClient()->__soapCall('getAgencySettlementLevelDetails', [
                $paramGetAgencySettlementLevelDetailsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAgencySettlementLevelDetails;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getOrderDocumentsInfo
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetOrderDocumentsRequest $paramGetOrderDocumentsRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetOrderDocumentsResponse|bool
     */
    public function getOrderDocumentsInfo(\Pggns\MidocoApi\Api\Order\StructType\GetOrderDocumentsRequest $paramGetOrderDocumentsRequest)
    {
        try {
            $this->setResult($resultGetOrderDocumentsInfo = $this->getSoapClient()->__soapCall('getOrderDocumentsInfo', [
                $paramGetOrderDocumentsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetOrderDocumentsInfo;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getBillingPrintSettings
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetBillingPrintSettingsRequest $paramGetBillingPrintSettingsRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetBillingPrintSettingsResponse|bool
     */
    public function getBillingPrintSettings(\Pggns\MidocoApi\Api\Order\StructType\GetBillingPrintSettingsRequest $paramGetBillingPrintSettingsRequest)
    {
        try {
            $this->setResult($resultGetBillingPrintSettings = $this->getSoapClient()->__soapCall('getBillingPrintSettings', [
                $paramGetBillingPrintSettingsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetBillingPrintSettings;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getBillingDocumentDocumentsInfo
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetBillingDocumentDocumentsRequest $paramGetBillingDocumentDocumentsRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetBillingDocumentDocumentsResponse|bool
     */
    public function getBillingDocumentDocumentsInfo(\Pggns\MidocoApi\Api\Order\StructType\GetBillingDocumentDocumentsRequest $paramGetBillingDocumentDocumentsRequest)
    {
        try {
            $this->setResult($resultGetBillingDocumentDocumentsInfo = $this->getSoapClient()->__soapCall('getBillingDocumentDocumentsInfo', [
                $paramGetBillingDocumentDocumentsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetBillingDocumentDocumentsInfo;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getLastDunning
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetLastDunningRequest $paramGetLastDunningRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetLastDunningResponse|bool
     */
    public function getLastDunning(\Pggns\MidocoApi\Api\Order\StructType\GetLastDunningRequest $paramGetLastDunningRequest)
    {
        try {
            $this->setResult($resultGetLastDunning = $this->getSoapClient()->__soapCall('getLastDunning', [
                $paramGetLastDunningRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetLastDunning;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getIncomingInvoices
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetIncomingInvoiceRequest $paramGetIncomingInvoiceRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetIncomingInvoiceResponse|bool
     */
    public function getIncomingInvoices(\Pggns\MidocoApi\Api\Order\StructType\GetIncomingInvoiceRequest $paramGetIncomingInvoiceRequest)
    {
        try {
            $this->setResult($resultGetIncomingInvoices = $this->getSoapClient()->__soapCall('getIncomingInvoices', [
                $paramGetIncomingInvoiceRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetIncomingInvoices;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getExistingVoucherNumber
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetExistingVoucherNumberRequest $paramGetExistingVoucherNumberRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetExistingVoucherNumberResponse|bool
     */
    public function getExistingVoucherNumber(\Pggns\MidocoApi\Api\Order\StructType\GetExistingVoucherNumberRequest $paramGetExistingVoucherNumberRequest)
    {
        try {
            $this->setResult($resultGetExistingVoucherNumber = $this->getSoapClient()->__soapCall('getExistingVoucherNumber', [
                $paramGetExistingVoucherNumberRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetExistingVoucherNumber;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getBillingDocValue
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetBillingDocValueRequest $paramGetBillingDocValueRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetBillingDocValueResponse|bool
     */
    public function getBillingDocValue(\Pggns\MidocoApi\Api\Order\StructType\GetBillingDocValueRequest $paramGetBillingDocValueRequest)
    {
        try {
            $this->setResult($resultGetBillingDocValue = $this->getSoapClient()->__soapCall('getBillingDocValue', [
                $paramGetBillingDocValueRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetBillingDocValue;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getOrderContactHistory
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetOrderContactHistoryRequest $paramGetOrderContactHistoryRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetOrderContactHistoryResponse|bool
     */
    public function getOrderContactHistory(\Pggns\MidocoApi\Api\Order\StructType\GetOrderContactHistoryRequest $paramGetOrderContactHistoryRequest)
    {
        try {
            $this->setResult($resultGetOrderContactHistory = $this->getSoapClient()->__soapCall('getOrderContactHistory', [
                $paramGetOrderContactHistoryRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetOrderContactHistory;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getOrdersDbiInfos
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetOrdersDbiInfosRequest $paramGetOrdersDbiInfosRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetOrdersDbiInfosResponse|bool
     */
    public function getOrdersDbiInfos(\Pggns\MidocoApi\Api\Order\StructType\GetOrdersDbiInfosRequest $paramGetOrdersDbiInfosRequest)
    {
        try {
            $this->setResult($resultGetOrdersDbiInfos = $this->getSoapClient()->__soapCall('getOrdersDbiInfos', [
                $paramGetOrdersDbiInfosRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetOrdersDbiInfos;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getShortOrderStatus
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetShortOrderStatusRequest $paramGetShortOrderStatusRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetShortOrderStatusResponse|bool
     */
    public function getShortOrderStatus(\Pggns\MidocoApi\Api\Order\StructType\GetShortOrderStatusRequest $paramGetShortOrderStatusRequest)
    {
        try {
            $this->setResult($resultGetShortOrderStatus = $this->getSoapClient()->__soapCall('getShortOrderStatus', [
                $paramGetShortOrderStatusRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetShortOrderStatus;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getErmMailInfo
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetErmMailInfoRequest $paramGetErmMailInfoRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetErmMailInfoResponse|bool
     */
    public function getErmMailInfo(\Pggns\MidocoApi\Api\Order\StructType\GetErmMailInfoRequest $paramGetErmMailInfoRequest)
    {
        try {
            $this->setResult($resultGetErmMailInfo = $this->getSoapClient()->__soapCall('getErmMailInfo', [
                $paramGetErmMailInfoRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetErmMailInfo;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getOrderCustomer
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetOrderCustomerRequest $paramGetOrderCustomerRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetOrderCustomerResponse|bool
     */
    public function getOrderCustomer(\Pggns\MidocoApi\Api\Order\StructType\GetOrderCustomerRequest $paramGetOrderCustomerRequest)
    {
        try {
            $this->setResult($resultGetOrderCustomer = $this->getSoapClient()->__soapCall('getOrderCustomer', [
                $paramGetOrderCustomerRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetOrderCustomer;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getBookingControlData
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetBookingControlDataRequest $paramGetBookingControlDataRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetBookingControlDataResponse|bool
     */
    public function getBookingControlData(\Pggns\MidocoApi\Api\Order\StructType\GetBookingControlDataRequest $paramGetBookingControlDataRequest)
    {
        try {
            $this->setResult($resultGetBookingControlData = $this->getSoapClient()->__soapCall('getBookingControlData', [
                $paramGetBookingControlDataRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetBookingControlData;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSaveBookingControl
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetSaveBookingControlRequest $paramGetSaveBookingControlRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetSaveBookingControlResponse|bool
     */
    public function getSaveBookingControl(\Pggns\MidocoApi\Api\Order\StructType\GetSaveBookingControlRequest $paramGetSaveBookingControlRequest)
    {
        try {
            $this->setResult($resultGetSaveBookingControl = $this->getSoapClient()->__soapCall('getSaveBookingControl', [
                $paramGetSaveBookingControlRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSaveBookingControl;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAdviceSettlementDetails
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetAdviceSettlementDetailsRequest $paramGetAdviceSettlementDetailsRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetAdviceSettlementDetailsResponse|bool
     */
    public function getAdviceSettlementDetails(\Pggns\MidocoApi\Api\Order\StructType\GetAdviceSettlementDetailsRequest $paramGetAdviceSettlementDetailsRequest)
    {
        try {
            $this->setResult($resultGetAdviceSettlementDetails = $this->getSoapClient()->__soapCall('getAdviceSettlementDetails', [
                $paramGetAdviceSettlementDetailsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAdviceSettlementDetails;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMergedBillingDunningList
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetMergedBillingDunningRequest $paramGetMergedBillingDunningRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetMergedBillingDunningResponse|bool
     */
    public function getMergedBillingDunningList(\Pggns\MidocoApi\Api\Order\StructType\GetMergedBillingDunningRequest $paramGetMergedBillingDunningRequest)
    {
        try {
            $this->setResult($resultGetMergedBillingDunningList = $this->getSoapClient()->__soapCall('getMergedBillingDunningList', [
                $paramGetMergedBillingDunningRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMergedBillingDunningList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getTotalPartialPayments
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\TotalPartialPaymentsRequest $paramTotalPartialPaymentsRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\TotalPartialPaymentsResponse|bool
     */
    public function getTotalPartialPayments(\Pggns\MidocoApi\Api\Order\StructType\TotalPartialPaymentsRequest $paramTotalPartialPaymentsRequest)
    {
        try {
            $this->setResult($resultGetTotalPartialPayments = $this->getSoapClient()->__soapCall('getTotalPartialPayments', [
                $paramTotalPartialPaymentsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetTotalPartialPayments;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getBillingPositions4BonusClearing
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetBillingPositions4BonusClearingRequest $paramGetBillingPositions4BonusClearingRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetBillingPositions4BonusClearingResponse|bool
     */
    public function getBillingPositions4BonusClearing(\Pggns\MidocoApi\Api\Order\StructType\GetBillingPositions4BonusClearingRequest $paramGetBillingPositions4BonusClearingRequest)
    {
        try {
            $this->setResult($resultGetBillingPositions4BonusClearing = $this->getSoapClient()->__soapCall('getBillingPositions4BonusClearing', [
                $paramGetBillingPositions4BonusClearingRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetBillingPositions4BonusClearing;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getEmailList
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetEmailListRequest $paramGetEmailListRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetEmailListResponse|bool
     */
    public function getEmailList(\Pggns\MidocoApi\Api\Order\StructType\GetEmailListRequest $paramGetEmailListRequest)
    {
        try {
            $this->setResult($resultGetEmailList = $this->getSoapClient()->__soapCall('getEmailList', [
                $paramGetEmailListRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetEmailList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getExportMessages4Order
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetExportMessages4OrderRequest $paramGetExportMessages4OrderRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetExportMessages4OrderResponse|bool
     */
    public function getExportMessages4Order(\Pggns\MidocoApi\Api\Order\StructType\GetExportMessages4OrderRequest $paramGetExportMessages4OrderRequest)
    {
        try {
            $this->setResult($resultGetExportMessages4Order = $this->getSoapClient()->__soapCall('getExportMessages4Order', [
                $paramGetExportMessages4OrderRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetExportMessages4Order;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getOrderStatus
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetOrderStatusRequest $paramGetOrderStatusRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetOrderStatusResponse|bool
     */
    public function getOrderStatus(\Pggns\MidocoApi\Api\Order\StructType\GetOrderStatusRequest $paramGetOrderStatusRequest)
    {
        try {
            $this->setResult($resultGetOrderStatus = $this->getSoapClient()->__soapCall('getOrderStatus', [
                $paramGetOrderStatusRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetOrderStatus;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getPackageInfoForBooking
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetPackageInfoForBookingRequest $paramGetPackageInfoForBookingRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetPackageInfoForBookingResponse|bool
     */
    public function getPackageInfoForBooking(\Pggns\MidocoApi\Api\Order\StructType\GetPackageInfoForBookingRequest $paramGetPackageInfoForBookingRequest)
    {
        try {
            $this->setResult($resultGetPackageInfoForBooking = $this->getSoapClient()->__soapCall('getPackageInfoForBooking', [
                $paramGetPackageInfoForBookingRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetPackageInfoForBooking;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getBillingDocDbiInfos
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetBillingDocDbiInfosRequest $paramGetBillingDocDbiInfosRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetBillingDocDbiInfosResponse|bool
     */
    public function getBillingDocDbiInfos(\Pggns\MidocoApi\Api\Order\StructType\GetBillingDocDbiInfosRequest $paramGetBillingDocDbiInfosRequest)
    {
        try {
            $this->setResult($resultGetBillingDocDbiInfos = $this->getSoapClient()->__soapCall('getBillingDocDbiInfos', [
                $paramGetBillingDocDbiInfosRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetBillingDocDbiInfos;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getExternalLinks
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetExternalLinksRequest $paramGetExternalLinksRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetExternalLinksResponse|bool
     */
    public function getExternalLinks(\Pggns\MidocoApi\Api\Order\StructType\GetExternalLinksRequest $paramGetExternalLinksRequest)
    {
        try {
            $this->setResult($resultGetExternalLinks = $this->getSoapClient()->__soapCall('getExternalLinks', [
                $paramGetExternalLinksRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetExternalLinks;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getTravelDocuments
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetTravelDocumentsRequest $paramGetTravelDocumentsRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetTravelDocumentsResponse|bool
     */
    public function getTravelDocuments(\Pggns\MidocoApi\Api\Order\StructType\GetTravelDocumentsRequest $paramGetTravelDocumentsRequest)
    {
        try {
            $this->setResult($resultGetTravelDocuments = $this->getSoapClient()->__soapCall('getTravelDocuments', [
                $paramGetTravelDocumentsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetTravelDocuments;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getDetailedBillingPositionsInfo
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetDetailedBillingPositionsInfoRequest $paramGetDetailedBillingPositionsInfoRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetDetailedBillingPositionsInfoResponse|bool
     */
    public function getDetailedBillingPositionsInfo(\Pggns\MidocoApi\Api\Order\StructType\GetDetailedBillingPositionsInfoRequest $paramGetDetailedBillingPositionsInfoRequest)
    {
        try {
            $this->setResult($resultGetDetailedBillingPositionsInfo = $this->getSoapClient()->__soapCall('getDetailedBillingPositionsInfo', [
                $paramGetDetailedBillingPositionsInfoRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetDetailedBillingPositionsInfo;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSupplAgencySettlemJournal
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetSupplAgencySettlemJournalRequest $paramGetSupplAgencySettlemJournalRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetSupplAgencySettlemJournalResponse|bool
     */
    public function getSupplAgencySettlemJournal(\Pggns\MidocoApi\Api\Order\StructType\GetSupplAgencySettlemJournalRequest $paramGetSupplAgencySettlemJournalRequest)
    {
        try {
            $this->setResult($resultGetSupplAgencySettlemJournal = $this->getSoapClient()->__soapCall('getSupplAgencySettlemJournal', [
                $paramGetSupplAgencySettlemJournalRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSupplAgencySettlemJournal;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getFeeTypesForAgency
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetFeeTypesForAgencyRequest $paramGetFeeTypesForAgencyRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetFeeTypesForAgencyResponse|bool
     */
    public function getFeeTypesForAgency(\Pggns\MidocoApi\Api\Order\StructType\GetFeeTypesForAgencyRequest $paramGetFeeTypesForAgencyRequest)
    {
        try {
            $this->setResult($resultGetFeeTypesForAgency = $this->getSoapClient()->__soapCall('getFeeTypesForAgency', [
                $paramGetFeeTypesForAgencyRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetFeeTypesForAgency;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getBillingPositions4AgencyFeeType
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetBillingPositions4AgencyFeeTypeRequest $paramGetBillingPositions4AgencyFeeTypeRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetBillingPositions4AgencyFeeTypeResponse|bool
     */
    public function getBillingPositions4AgencyFeeType(\Pggns\MidocoApi\Api\Order\StructType\GetBillingPositions4AgencyFeeTypeRequest $paramGetBillingPositions4AgencyFeeTypeRequest)
    {
        try {
            $this->setResult($resultGetBillingPositions4AgencyFeeType = $this->getSoapClient()->__soapCall('getBillingPositions4AgencyFeeType', [
                $paramGetBillingPositions4AgencyFeeTypeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetBillingPositions4AgencyFeeType;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getOrderInternalVersion
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetOrderInternalVersionRequest $paramGetOrderInternalVersionRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetOrderInternalVersionResponse|bool
     */
    public function getOrderInternalVersion(\Pggns\MidocoApi\Api\Order\StructType\GetOrderInternalVersionRequest $paramGetOrderInternalVersionRequest)
    {
        try {
            $this->setResult($resultGetOrderInternalVersion = $this->getSoapClient()->__soapCall('getOrderInternalVersion', [
                $paramGetOrderInternalVersionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetOrderInternalVersion;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getOrderAndCrmContactHistory
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetOrderAndCrmContactHistoryRequest $paramGetOrderAndCrmContactHistoryRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetOrderAndCrmContactHistoryResponse|bool
     */
    public function getOrderAndCrmContactHistory(\Pggns\MidocoApi\Api\Order\StructType\GetOrderAndCrmContactHistoryRequest $paramGetOrderAndCrmContactHistoryRequest)
    {
        try {
            $this->setResult($resultGetOrderAndCrmContactHistory = $this->getSoapClient()->__soapCall('getOrderAndCrmContactHistory', [
                $paramGetOrderAndCrmContactHistoryRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetOrderAndCrmContactHistory;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAccountEntriesForDebitorBalance
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetAccountEntriesForDebitorBalanceRequest $paramGetAccountEntriesForDebitorBalanceRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetAccountEntriesForDebitorBalanceResponse|bool
     */
    public function getAccountEntriesForDebitorBalance(\Pggns\MidocoApi\Api\Order\StructType\GetAccountEntriesForDebitorBalanceRequest $paramGetAccountEntriesForDebitorBalanceRequest)
    {
        try {
            $this->setResult($resultGetAccountEntriesForDebitorBalance = $this->getSoapClient()->__soapCall('getAccountEntriesForDebitorBalance', [
                $paramGetAccountEntriesForDebitorBalanceRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAccountEntriesForDebitorBalance;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getOrderVoucher
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetOrderVoucherRequest $paramGetOrderVoucherRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetOrderVoucherResponse|bool
     */
    public function getOrderVoucher(\Pggns\MidocoApi\Api\Order\StructType\GetOrderVoucherRequest $paramGetOrderVoucherRequest)
    {
        try {
            $this->setResult($resultGetOrderVoucher = $this->getSoapClient()->__soapCall('getOrderVoucher', [
                $paramGetOrderVoucherRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetOrderVoucher;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSellItemTooltips
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetSellItemTooltipsRequest $paramGetSellItemTooltipsRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetSellItemTooltipsResponse|bool
     */
    public function getSellItemTooltips(\Pggns\MidocoApi\Api\Order\StructType\GetSellItemTooltipsRequest $paramGetSellItemTooltipsRequest)
    {
        try {
            $this->setResult($resultGetSellItemTooltips = $this->getSoapClient()->__soapCall('getSellItemTooltips', [
                $paramGetSellItemTooltipsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSellItemTooltips;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * getMidocoAgencySettlementSellItemDetails
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetMidocoAgencySettlementSellItemDetailsRequest $paramGetMidocoAgencySettlementSellItemDetailsRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetMidocoAgencySettlementSellItemDetailsResponse|bool
     */
    public function getMidocoAgencySettlementSellItemDetails(\Pggns\MidocoApi\Api\Order\StructType\GetMidocoAgencySettlementSellItemDetailsRequest $paramGetMidocoAgencySettlementSellItemDetailsRequest)
    {
        try {
            $this->setResult($resultGetMidocoAgencySettlementSellItemDetails = $this->getSoapClient()->__soapCall('getMidocoAgencySettlementSellItemDetails', [
                $paramGetMidocoAgencySettlementSellItemDetailsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMidocoAgencySettlementSellItemDetails;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getBillingPositionsForSellItem
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetBillingPositionsForSellItemRequest $paramGetBillingPositionsForSellItemRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetBillingPositionsForSellItemResponse|bool
     */
    public function getBillingPositionsForSellItem(\Pggns\MidocoApi\Api\Order\StructType\GetBillingPositionsForSellItemRequest $paramGetBillingPositionsForSellItemRequest)
    {
        try {
            $this->setResult($resultGetBillingPositionsForSellItem = $this->getSoapClient()->__soapCall('getBillingPositionsForSellItem', [
                $paramGetBillingPositionsForSellItemRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetBillingPositionsForSellItem;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getOrderMargin
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetOrderMarginRequest $paramGetOrderMarginRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetOrderMarginResponse|bool
     */
    public function getOrderMargin(\Pggns\MidocoApi\Api\Order\StructType\GetOrderMarginRequest $paramGetOrderMarginRequest)
    {
        try {
            $this->setResult($resultGetOrderMargin = $this->getSoapClient()->__soapCall('getOrderMargin', [
                $paramGetOrderMarginRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetOrderMargin;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getPaymentAccrualForCreditor
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetPaymentAccrualForCreditorRequest $paramGetPaymentAccrualForCreditorRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetPaymentAccrualForCreditorResponse|bool
     */
    public function getPaymentAccrualForCreditor(\Pggns\MidocoApi\Api\Order\StructType\GetPaymentAccrualForCreditorRequest $paramGetPaymentAccrualForCreditorRequest)
    {
        try {
            $this->setResult($resultGetPaymentAccrualForCreditor = $this->getSoapClient()->__soapCall('getPaymentAccrualForCreditor', [
                $paramGetPaymentAccrualForCreditorRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetPaymentAccrualForCreditor;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getPrintSelectsForOrder
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetPrintSelectsForOrderRequest $paramGetPrintSelectsForOrderRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetPrintSelectsForOrderResponse|bool
     */
    public function getPrintSelectsForOrder(\Pggns\MidocoApi\Api\Order\StructType\GetPrintSelectsForOrderRequest $paramGetPrintSelectsForOrderRequest)
    {
        try {
            $this->setResult($resultGetPrintSelectsForOrder = $this->getSoapClient()->__soapCall('getPrintSelectsForOrder', [
                $paramGetPrintSelectsForOrderRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetPrintSelectsForOrder;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getTravelStartDatesFromCustomer
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetTravelStartDatesFromCustomerRequest $paramGetTravelStartDatesFromCustomerRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetTravelStartDatesFromCustomerResponse|bool
     */
    public function getTravelStartDatesFromCustomer(\Pggns\MidocoApi\Api\Order\StructType\GetTravelStartDatesFromCustomerRequest $paramGetTravelStartDatesFromCustomerRequest)
    {
        try {
            $this->setResult($resultGetTravelStartDatesFromCustomer = $this->getSoapClient()->__soapCall('getTravelStartDatesFromCustomer', [
                $paramGetTravelStartDatesFromCustomerRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetTravelStartDatesFromCustomer;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getTravelStartDatesFromAgency
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetTravelStartDatesFromAgencyRequest $paramGetTravelStartDatesFromAgencyRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetTravelStartDatesFromAgencyResponse|bool
     */
    public function getTravelStartDatesFromAgency(\Pggns\MidocoApi\Api\Order\StructType\GetTravelStartDatesFromAgencyRequest $paramGetTravelStartDatesFromAgencyRequest)
    {
        try {
            $this->setResult($resultGetTravelStartDatesFromAgency = $this->getSoapClient()->__soapCall('getTravelStartDatesFromAgency', [
                $paramGetTravelStartDatesFromAgencyRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetTravelStartDatesFromAgency;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getTotalPartialInvoice
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetTotalPartialInvoiceRequest $paramGetTotalPartialInvoiceRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetTotalPartialInvoiceResponse|bool
     */
    public function getTotalPartialInvoice(\Pggns\MidocoApi\Api\Order\StructType\GetTotalPartialInvoiceRequest $paramGetTotalPartialInvoiceRequest)
    {
        try {
            $this->setResult($resultGetTotalPartialInvoice = $this->getSoapClient()->__soapCall('getTotalPartialInvoice', [
                $paramGetTotalPartialInvoiceRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetTotalPartialInvoice;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMidocoOrderRecapMessage
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetMidocoOrderRecapMessageRequest $paramGetMidocoOrderRecapMessageRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetMidocoOrderRecapMessageResponse|bool
     */
    public function getMidocoOrderRecapMessage(\Pggns\MidocoApi\Api\Order\StructType\GetMidocoOrderRecapMessageRequest $paramGetMidocoOrderRecapMessageRequest)
    {
        try {
            $this->setResult($resultGetMidocoOrderRecapMessage = $this->getSoapClient()->__soapCall('getMidocoOrderRecapMessage', [
                $paramGetMidocoOrderRecapMessageRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMidocoOrderRecapMessage;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getOrdersContactHistoryForCustomer
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetOrdersContactHistoryForCustomerRequest $paramGetOrdersContactHistoryForCustomerRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetOrdersContactHistoryForCustomerResponse|bool
     */
    public function getOrdersContactHistoryForCustomer(\Pggns\MidocoApi\Api\Order\StructType\GetOrdersContactHistoryForCustomerRequest $paramGetOrdersContactHistoryForCustomerRequest)
    {
        try {
            $this->setResult($resultGetOrdersContactHistoryForCustomer = $this->getSoapClient()->__soapCall('getOrdersContactHistoryForCustomer', [
                $paramGetOrdersContactHistoryForCustomerRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetOrdersContactHistoryForCustomer;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMdcSettlementBilling
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetMdcSettlementBillingRequest $paramGetMdcSettlementBillingRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetMdcSettlementBillingResponse|bool
     */
    public function getMdcSettlementBilling(\Pggns\MidocoApi\Api\Order\StructType\GetMdcSettlementBillingRequest $paramGetMdcSettlementBillingRequest)
    {
        try {
            $this->setResult($resultGetMdcSettlementBilling = $this->getSoapClient()->__soapCall('getMdcSettlementBilling', [
                $paramGetMdcSettlementBillingRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMdcSettlementBilling;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getOrderPaymentPaycodes
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetOrderPaymentPaycodesRequest $paramGetOrderPaymentPaycodesRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetOrderPaymentPaycodesResponse|bool
     */
    public function getOrderPaymentPaycodes(\Pggns\MidocoApi\Api\Order\StructType\GetOrderPaymentPaycodesRequest $paramGetOrderPaymentPaycodesRequest)
    {
        try {
            $this->setResult($resultGetOrderPaymentPaycodes = $this->getSoapClient()->__soapCall('getOrderPaymentPaycodes', [
                $paramGetOrderPaymentPaycodesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetOrderPaymentPaycodes;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getOrderContext
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetOrderContextRequest $paramGetOrderContextRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetOrderContextResponse|bool
     */
    public function getOrderContext(\Pggns\MidocoApi\Api\Order\StructType\GetOrderContextRequest $paramGetOrderContextRequest)
    {
        try {
            $this->setResult($resultGetOrderContext = $this->getSoapClient()->__soapCall('getOrderContext', [
                $paramGetOrderContextRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetOrderContext;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAccountEntriesForDebitorPage
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetAccountEntriesForDebitorPageRequest $paramGetAccountEntriesForDebitorPageRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetAccountEntriesForDebitorPageResponse|bool
     */
    public function getAccountEntriesForDebitorPage(\Pggns\MidocoApi\Api\Order\StructType\GetAccountEntriesForDebitorPageRequest $paramGetAccountEntriesForDebitorPageRequest)
    {
        try {
            $this->setResult($resultGetAccountEntriesForDebitorPage = $this->getSoapClient()->__soapCall('getAccountEntriesForDebitorPage', [
                $paramGetAccountEntriesForDebitorPageRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAccountEntriesForDebitorPage;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getEmailText4PrintType
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetEmailText4PrintTypeRequest $paramGetEmailText4PrintTypeRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetEmailText4PrintTypeResponse|bool
     */
    public function getEmailText4PrintType(\Pggns\MidocoApi\Api\Order\StructType\GetEmailText4PrintTypeRequest $paramGetEmailText4PrintTypeRequest)
    {
        try {
            $this->setResult($resultGetEmailText4PrintType = $this->getSoapClient()->__soapCall('getEmailText4PrintType', [
                $paramGetEmailText4PrintTypeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetEmailText4PrintType;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getVouchersForOrder
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetVouchersForOrderRequest $paramGetVouchersForOrderRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetVouchersForOrderResponse|bool
     */
    public function getVouchersForOrder(\Pggns\MidocoApi\Api\Order\StructType\GetVouchersForOrderRequest $paramGetVouchersForOrderRequest)
    {
        try {
            $this->setResult($resultGetVouchersForOrder = $this->getSoapClient()->__soapCall('getVouchersForOrder', [
                $paramGetVouchersForOrderRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetVouchersForOrder;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getTravelCms
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetTravelCMSRequest $paramGetTravelCMSRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetTravelCMSResponse|bool
     */
    public function getTravelCms(\Pggns\MidocoApi\Api\Order\StructType\GetTravelCMSRequest $paramGetTravelCMSRequest)
    {
        try {
            $this->setResult($resultGetTravelCms = $this->getSoapClient()->__soapCall('getTravelCms', [
                $paramGetTravelCMSRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetTravelCms;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getPPTransactions
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetPPTransactionsRequest $paramGetPPTransactionsRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetPPTransactionsResponse|bool
     */
    public function getPPTransactions(\Pggns\MidocoApi\Api\Order\StructType\GetPPTransactionsRequest $paramGetPPTransactionsRequest)
    {
        try {
            $this->setResult($resultGetPPTransactions = $this->getSoapClient()->__soapCall('getPPTransactions', [
                $paramGetPPTransactionsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetPPTransactions;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getOrderLockPeriod
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetOrderLockPeriodRequest $paramGetOrderLockPeriodRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetOrderLockPeriodResponse|bool
     */
    public function getOrderLockPeriod(\Pggns\MidocoApi\Api\Order\StructType\GetOrderLockPeriodRequest $paramGetOrderLockPeriodRequest)
    {
        try {
            $this->setResult($resultGetOrderLockPeriod = $this->getSoapClient()->__soapCall('getOrderLockPeriod', [
                $paramGetOrderLockPeriodRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetOrderLockPeriod;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSellItemsSettlementNeeded
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetSellItemsSettlementNeededRequest $paramGetSellItemsSettlementNeededRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetSellItemsSettlementNeededResponse|bool
     */
    public function getSellItemsSettlementNeeded(\Pggns\MidocoApi\Api\Order\StructType\GetSellItemsSettlementNeededRequest $paramGetSellItemsSettlementNeededRequest)
    {
        try {
            $this->setResult($resultGetSellItemsSettlementNeeded = $this->getSoapClient()->__soapCall('getSellItemsSettlementNeeded', [
                $paramGetSellItemsSettlementNeededRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSellItemsSettlementNeeded;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSellItemRevenues
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetSellItemRevenuesRequest $paramGetSellItemRevenuesRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetSellItemRevenuesResponse|bool
     */
    public function getSellItemRevenues(\Pggns\MidocoApi\Api\Order\StructType\GetSellItemRevenuesRequest $paramGetSellItemRevenuesRequest)
    {
        try {
            $this->setResult($resultGetSellItemRevenues = $this->getSoapClient()->__soapCall('getSellItemRevenues', [
                $paramGetSellItemRevenuesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSellItemRevenues;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAdviceDetail
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetAdviceDetailRequest $paramGetAdviceDetailRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetAdviceDetailResponse|bool
     */
    public function getAdviceDetail(\Pggns\MidocoApi\Api\Order\StructType\GetAdviceDetailRequest $paramGetAdviceDetailRequest)
    {
        try {
            $this->setResult($resultGetAdviceDetail = $this->getSoapClient()->__soapCall('getAdviceDetail', [
                $paramGetAdviceDetailRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAdviceDetail;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSubOrdersInfo
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetSubOrdersInfoRequest $paramGetSubOrdersInfoRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetSubOrdersInfoResponse|bool
     */
    public function getSubOrdersInfo(\Pggns\MidocoApi\Api\Order\StructType\GetSubOrdersInfoRequest $paramGetSubOrdersInfoRequest)
    {
        try {
            $this->setResult($resultGetSubOrdersInfo = $this->getSoapClient()->__soapCall('getSubOrdersInfo', [
                $paramGetSubOrdersInfoRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSubOrdersInfo;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCashTurnoverExports
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetCashTurnoverExportsRequest $paramGetCashTurnoverExportsRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetCashTurnoverExportsResponse|bool
     */
    public function getCashTurnoverExports(\Pggns\MidocoApi\Api\Order\StructType\GetCashTurnoverExportsRequest $paramGetCashTurnoverExportsRequest)
    {
        try {
            $this->setResult($resultGetCashTurnoverExports = $this->getSoapClient()->__soapCall('getCashTurnoverExports', [
                $paramGetCashTurnoverExportsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCashTurnoverExports;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getBillingNotices
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetBillingNoticesRequest $paramGetBillingNoticesRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetBillingNoticesResponse|bool
     */
    public function getBillingNotices(\Pggns\MidocoApi\Api\Order\StructType\GetBillingNoticesRequest $paramGetBillingNoticesRequest)
    {
        try {
            $this->setResult($resultGetBillingNotices = $this->getSoapClient()->__soapCall('getBillingNotices', [
                $paramGetBillingNoticesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetBillingNotices;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * getPaymentProviderSettlementBookings
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetPaymentProviderSettlementBookingsRequest $paramGetPaymentProviderSettlementBookingsRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetPaymentProviderSettlementBookingsResponse|bool
     */
    public function getPaymentProviderSettlementBookings(\Pggns\MidocoApi\Api\Order\StructType\GetPaymentProviderSettlementBookingsRequest $paramGetPaymentProviderSettlementBookingsRequest)
    {
        try {
            $this->setResult($resultGetPaymentProviderSettlementBookings = $this->getSoapClient()->__soapCall('getPaymentProviderSettlementBookings', [
                $paramGetPaymentProviderSettlementBookingsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetPaymentProviderSettlementBookings;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getPaymentProviderSettlement
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetPaymentProviderSettlementRequest $paramGetPaymentProviderSettlementRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetPaymentProviderSettlementResponse|bool
     */
    public function getPaymentProviderSettlement(\Pggns\MidocoApi\Api\Order\StructType\GetPaymentProviderSettlementRequest $paramGetPaymentProviderSettlementRequest)
    {
        try {
            $this->setResult($resultGetPaymentProviderSettlement = $this->getSoapClient()->__soapCall('getPaymentProviderSettlement', [
                $paramGetPaymentProviderSettlementRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetPaymentProviderSettlement;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getBookingInfo4Kickback
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetBookingInfo4KickbackRequest $paramGetBookingInfo4KickbackRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetBookingInfo4KickbackResponse|bool
     */
    public function getBookingInfo4Kickback(\Pggns\MidocoApi\Api\Order\StructType\GetBookingInfo4KickbackRequest $paramGetBookingInfo4KickbackRequest)
    {
        try {
            $this->setResult($resultGetBookingInfo4Kickback = $this->getSoapClient()->__soapCall('getBookingInfo4Kickback', [
                $paramGetBookingInfo4KickbackRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetBookingInfo4Kickback;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMidocoVoucher4Kickback
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetMidocoVoucher4KickbackRequest $paramGetMidocoVoucher4KickbackRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetMidocoVoucher4KickbackResponse|bool
     */
    public function getMidocoVoucher4Kickback(\Pggns\MidocoApi\Api\Order\StructType\GetMidocoVoucher4KickbackRequest $paramGetMidocoVoucher4KickbackRequest)
    {
        try {
            $this->setResult($resultGetMidocoVoucher4Kickback = $this->getSoapClient()->__soapCall('getMidocoVoucher4Kickback', [
                $paramGetMidocoVoucher4KickbackRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMidocoVoucher4Kickback;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getOrderInfo
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetOrderInfoRequest $paramGetOrderInfoRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetOrderInfoResponse|bool
     */
    public function getOrderInfo(\Pggns\MidocoApi\Api\Order\StructType\GetOrderInfoRequest $paramGetOrderInfoRequest)
    {
        try {
            $this->setResult($resultGetOrderInfo = $this->getSoapClient()->__soapCall('getOrderInfo', [
                $paramGetOrderInfoRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetOrderInfo;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getExportChangedOrders
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetExportChangedOrdersRequest $paramGetExportChangedOrdersRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetExportChangedOrdersResponse|bool
     */
    public function getExportChangedOrders(\Pggns\MidocoApi\Api\Order\StructType\GetExportChangedOrdersRequest $paramGetExportChangedOrdersRequest)
    {
        try {
            $this->setResult($resultGetExportChangedOrders = $this->getSoapClient()->__soapCall('getExportChangedOrders', [
                $paramGetExportChangedOrdersRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetExportChangedOrders;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getBillingPrints
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetBillingPrintsRequest $paramGetBillingPrintsRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetBillingPrintsResponse|bool
     */
    public function getBillingPrints(\Pggns\MidocoApi\Api\Order\StructType\GetBillingPrintsRequest $paramGetBillingPrintsRequest)
    {
        try {
            $this->setResult($resultGetBillingPrints = $this->getSoapClient()->__soapCall('getBillingPrints', [
                $paramGetBillingPrintsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetBillingPrints;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getOrderWithSellItemExportLog
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetOrderWithSellItemExportLogRequest $paramGetOrderWithSellItemExportLogRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetOrderWithSellItemExportLogResponse|bool
     */
    public function getOrderWithSellItemExportLog(\Pggns\MidocoApi\Api\Order\StructType\GetOrderWithSellItemExportLogRequest $paramGetOrderWithSellItemExportLogRequest)
    {
        try {
            $this->setResult($resultGetOrderWithSellItemExportLog = $this->getSoapClient()->__soapCall('getOrderWithSellItemExportLog', [
                $paramGetOrderWithSellItemExportLogRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetOrderWithSellItemExportLog;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getBillingInternalVersion
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetBillingInternalVersionRequest $paramGetBillingInternalVersionRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetBillingInternalVersionResponse|bool
     */
    public function getBillingInternalVersion(\Pggns\MidocoApi\Api\Order\StructType\GetBillingInternalVersionRequest $paramGetBillingInternalVersionRequest)
    {
        try {
            $this->setResult($resultGetBillingInternalVersion = $this->getSoapClient()->__soapCall('getBillingInternalVersion', [
                $paramGetBillingInternalVersionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetBillingInternalVersion;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMidocoItemSellingModes
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetMidocoItemSellingModesRequest $paramGetMidocoItemSellingModesRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetMidocoItemSellingModesResponse|bool
     */
    public function getMidocoItemSellingModes(\Pggns\MidocoApi\Api\Order\StructType\GetMidocoItemSellingModesRequest $paramGetMidocoItemSellingModesRequest)
    {
        try {
            $this->setResult($resultGetMidocoItemSellingModes = $this->getSoapClient()->__soapCall('getMidocoItemSellingModes', [
                $paramGetMidocoItemSellingModesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMidocoItemSellingModes;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getBillingNoticeComments
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetBillingNoticeCommentsRequest $paramGetBillingNoticeCommentsRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetBillingNoticeCommentsResponse|bool
     */
    public function getBillingNoticeComments(\Pggns\MidocoApi\Api\Order\StructType\GetBillingNoticeCommentsRequest $paramGetBillingNoticeCommentsRequest)
    {
        try {
            $this->setResult($resultGetBillingNoticeComments = $this->getSoapClient()->__soapCall('getBillingNoticeComments', [
                $paramGetBillingNoticeCommentsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetBillingNoticeComments;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getOrderNoticeComments
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetOrderNoticeCommentsRequest $paramGetOrderNoticeCommentsRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetOrderNoticeCommentsResponse|bool
     */
    public function getOrderNoticeComments(\Pggns\MidocoApi\Api\Order\StructType\GetOrderNoticeCommentsRequest $paramGetOrderNoticeCommentsRequest)
    {
        try {
            $this->setResult($resultGetOrderNoticeComments = $this->getSoapClient()->__soapCall('getOrderNoticeComments', [
                $paramGetOrderNoticeCommentsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetOrderNoticeComments;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getTravelNoMarginItems
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetTravelNoMarginItemsRequest $paramGetTravelNoMarginItemsRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetTravelNoMarginItemsResponse|bool
     */
    public function getTravelNoMarginItems(\Pggns\MidocoApi\Api\Order\StructType\GetTravelNoMarginItemsRequest $paramGetTravelNoMarginItemsRequest)
    {
        try {
            $this->setResult($resultGetTravelNoMarginItems = $this->getSoapClient()->__soapCall('getTravelNoMarginItems', [
                $paramGetTravelNoMarginItemsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetTravelNoMarginItems;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getTravelNoMargins4SettlType
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetTravelNoMargins4SettlTypeRequest $paramGetTravelNoMargins4SettlTypeRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetTravelNoMargins4SettlTypeResponse|bool
     */
    public function getTravelNoMargins4SettlType(\Pggns\MidocoApi\Api\Order\StructType\GetTravelNoMargins4SettlTypeRequest $paramGetTravelNoMargins4SettlTypeRequest)
    {
        try {
            $this->setResult($resultGetTravelNoMargins4SettlType = $this->getSoapClient()->__soapCall('getTravelNoMargins4SettlType', [
                $paramGetTravelNoMargins4SettlTypeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetTravelNoMargins4SettlType;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getATOLType4Order
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetATOLType4OrderRequest $paramGetATOLType4OrderRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetATOLType4OrderResponse|bool
     */
    public function getATOLType4Order(\Pggns\MidocoApi\Api\Order\StructType\GetATOLType4OrderRequest $paramGetATOLType4OrderRequest)
    {
        try {
            $this->setResult($resultGetATOLType4Order = $this->getSoapClient()->__soapCall('getATOLType4Order', [
                $paramGetATOLType4OrderRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetATOLType4Order;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getTssProtocol
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GetTssProtocolRequest $paramGetTssProtocolRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetTssProtocolResponse|bool
     */
    public function getTssProtocol(\Pggns\MidocoApi\Api\Order\StructType\GetTssProtocolRequest $paramGetTssProtocolRequest)
    {
        try {
            $this->setResult($resultGetTssProtocol = $this->getSoapClient()->__soapCall('getTssProtocol', [
                $paramGetTssProtocolRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetTssProtocol;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetAccountEntriesForDebitorBalanceResponse|\Pggns\MidocoApi\Api\Order\StructType\GetAccountEntriesForDebitorPageResponse|\Pggns\MidocoApi\Api\Order\StructType\GetAccountEntriesForDebitorResponse|\Pggns\MidocoApi\Api\Order\StructType\GetAccountEntriesForOrderResponse|\Pggns\MidocoApi\Api\Order\StructType\GetAdviceDetailResponse|\Pggns\MidocoApi\Api\Order\StructType\GetAdviceSettlementDetailsResponse|\Pggns\MidocoApi\Api\Order\StructType\GetAgencySettlementLevelDetailsResponse|\Pggns\MidocoApi\Api\Order\StructType\GetAgencySettlementResponse|\Pggns\MidocoApi\Api\Order\StructType\GetAmadeusExportStringResponse|\Pggns\MidocoApi\Api\Order\StructType\GetAmwayMediatorBookingsResponse|\Pggns\MidocoApi\Api\Order\StructType\GetATOLType4OrderResponse|\Pggns\MidocoApi\Api\Order\StructType\GetBillingDocDbiInfosResponse|\Pggns\MidocoApi\Api\Order\StructType\GetBillingDocumentDocumentsResponse|\Pggns\MidocoApi\Api\Order\StructType\GetBillingDocumentForCustomerResponse|\Pggns\MidocoApi\Api\Order\StructType\GetBillingDocumentForOrderResponse|\Pggns\MidocoApi\Api\Order\StructType\GetBillingDocumentForSellItemResponse|\Pggns\MidocoApi\Api\Order\StructType\GetBillingDocumentResponse|\Pggns\MidocoApi\Api\Order\StructType\GetBillingDocValueResponse|\Pggns\MidocoApi\Api\Order\StructType\GetBillingInternalVersionResponse|\Pggns\MidocoApi\Api\Order\StructType\GetBillingNoticeCommentsResponse|\Pggns\MidocoApi\Api\Order\StructType\GetBillingNoticesResponse|\Pggns\MidocoApi\Api\Order\StructType\GetBillingPositions4AgencyFeeTypeResponse|\Pggns\MidocoApi\Api\Order\StructType\GetBillingPositions4BonusClearingResponse|\Pggns\MidocoApi\Api\Order\StructType\GetBillingPositionsForDocumentIdResponse|\Pggns\MidocoApi\Api\Order\StructType\GetBillingPositionsForOrderResponse|\Pggns\MidocoApi\Api\Order\StructType\GetBillingPositionsForSellItemResponse|\Pggns\MidocoApi\Api\Order\StructType\GetBillingPrintInfoResponse|\Pggns\MidocoApi\Api\Order\StructType\GetBillingPrintSettingsResponse|\Pggns\MidocoApi\Api\Order\StructType\GetBillingPrintsResponse|\Pggns\MidocoApi\Api\Order\StructType\GetBookingControlDataResponse|\Pggns\MidocoApi\Api\Order\StructType\GetBookingInfo4KickbackResponse|\Pggns\MidocoApi\Api\Order\StructType\GetBookingJournalResponse|\Pggns\MidocoApi\Api\Order\StructType\GetBookingMessage4OrderResponse|\Pggns\MidocoApi\Api\Order\StructType\GetBookingMessage4TakeoffResponse|\Pggns\MidocoApi\Api\Order\StructType\GetCashbooksResponse|\Pggns\MidocoApi\Api\Order\StructType\GetCashTurnoverExportsResponse|\Pggns\MidocoApi\Api\Order\StructType\GetCmsHotelDataResponseType|\Pggns\MidocoApi\Api\Order\StructType\GetConfirmationReceivedSellitemsForSupplierResponse|\Pggns\MidocoApi\Api\Order\StructType\GetDebitInfoForReceiptResponse|\Pggns\MidocoApi\Api\Order\StructType\GetDebitorForOrgunitResponse|\Pggns\MidocoApi\Api\Order\StructType\GetDetailedBillingPositionsInfoResponse|\Pggns\MidocoApi\Api\Order\StructType\GetDocumentIdForInvoiceResponse|\Pggns\MidocoApi\Api\Order\StructType\GetEmailListResponse|\Pggns\MidocoApi\Api\Order\StructType\GetEmailText4PrintTypeResponse|\Pggns\MidocoApi\Api\Order\StructType\GetEntryHistoryResponse|\Pggns\MidocoApi\Api\Order\StructType\GetErmMailInfoResponse|\Pggns\MidocoApi\Api\Order\StructType\GetExistingVoucherNumberResponse|\Pggns\MidocoApi\Api\Order\StructType\GetExportChangedOrdersResponse|\Pggns\MidocoApi\Api\Order\StructType\GetExportMessages4OrderResponse|\Pggns\MidocoApi\Api\Order\StructType\GetExternalLinksResponse|\Pggns\MidocoApi\Api\Order\StructType\GetFeeTypesForAgencyResponse|\Pggns\MidocoApi\Api\Order\StructType\GetFilteredBillingDocumentsForOrderResponse|\Pggns\MidocoApi\Api\Order\StructType\GetIncomingInvoiceResponse|\Pggns\MidocoApi\Api\Order\StructType\GetInvoiceOrderByCustomerIdResponse|\Pggns\MidocoApi\Api\Order\StructType\GetJournalExportFileResponse|\Pggns\MidocoApi\Api\Order\StructType\GetLastDunningResponse|\Pggns\MidocoApi\Api\Order\StructType\GetMdcSettlementBillingResponse|\Pggns\MidocoApi\Api\Order\StructType\GetMediatorBillingDetailsResponse|\Pggns\MidocoApi\Api\Order\StructType\GetMediatorCommissionResponse|\Pggns\MidocoApi\Api\Order\StructType\GetMediatorProductSettlementDetailsResponse|\Pggns\MidocoApi\Api\Order\StructType\GetMergedBillingDunningResponse|\Pggns\MidocoApi\Api\Order\StructType\GetMergedDunningResponse|\Pggns\MidocoApi\Api\Order\StructType\GetMerlinExportStringResponse|\Pggns\MidocoApi\Api\Order\StructType\GetMidocoAgencySettlementOrderDetailsResponse|\Pggns\MidocoApi\Api\Order\StructType\GetMidocoAgencySettlementResponse|\Pggns\MidocoApi\Api\Order\StructType\GetMidocoAgencySettlementSellItemDetailsResponse|\Pggns\MidocoApi\Api\Order\StructType\GetMidocoBonusAdditionResponse|\Pggns\MidocoApi\Api\Order\StructType\GetMidocoBonusCalculationResponse|\Pggns\MidocoApi\Api\Order\StructType\GetMidocoBonusEmployeeResponse|\Pggns\MidocoApi\Api\Order\StructType\GetMidocoItemSellingModesResponse|\Pggns\MidocoApi\Api\Order\StructType\GetMidocoOrderRecapMessageResponse|\Pggns\MidocoApi\Api\Order\StructType\GetMidocoVoucher4KickbackResponse|\Pggns\MidocoApi\Api\Order\StructType\GetOrderAndCrmContactHistoryResponse|\Pggns\MidocoApi\Api\Order\StructType\GetOrderAttributesResponse|\Pggns\MidocoApi\Api\Order\StructType\GetOrderContactHistoryResponse|\Pggns\MidocoApi\Api\Order\StructType\GetOrderContextResponse|\Pggns\MidocoApi\Api\Order\StructType\GetOrderCustomerResponse|\Pggns\MidocoApi\Api\Order\StructType\GetOrderDebitPaymentResponse|\Pggns\MidocoApi\Api\Order\StructType\GetOrderDocumentsResponse|\Pggns\MidocoApi\Api\Order\StructType\GetOrderHistoryResponse|\Pggns\MidocoApi\Api\Order\StructType\GetOrderIdForSellItemIdResponse|\Pggns\MidocoApi\Api\Order\StructType\GetOrderInfoResponse|\Pggns\MidocoApi\Api\Order\StructType\GetOrderInternalVersionResponse|\Pggns\MidocoApi\Api\Order\StructType\GetOrderInvoicesResponse|\Pggns\MidocoApi\Api\Order\StructType\GetOrderLockPeriodResponse|\Pggns\MidocoApi\Api\Order\StructType\GetOrderMarginResponse|\Pggns\MidocoApi\Api\Order\StructType\GetOrderNoticeCommentsResponse|\Pggns\MidocoApi\Api\Order\StructType\GetOrderNoticesResponse|\Pggns\MidocoApi\Api\Order\StructType\GetOrderOnlinePaymentResponse|\Pggns\MidocoApi\Api\Order\StructType\GetOrderPaymentPaycodesResponse|\Pggns\MidocoApi\Api\Order\StructType\GetOrderPaymentsResponse|\Pggns\MidocoApi\Api\Order\StructType\GetOrderRemarksResponse|\Pggns\MidocoApi\Api\Order\StructType\GetOrderResponse|\Pggns\MidocoApi\Api\Order\StructType\GetOrdersContactHistoryForCustomerResponse|\Pggns\MidocoApi\Api\Order\StructType\GetOrdersDbiInfosResponse|\Pggns\MidocoApi\Api\Order\StructType\GetOrdersForMediatorResponse|\Pggns\MidocoApi\Api\Order\StructType\GetOrdersForTravellerResponse|\Pggns\MidocoApi\Api\Order\StructType\GetOrderStatusResponse|\Pggns\MidocoApi\Api\Order\StructType\GetOrderVoucherResponse|\Pggns\MidocoApi\Api\Order\StructType\GetOrderWithSellItemExportLogResponse|\Pggns\MidocoApi\Api\Order\StructType\GetOrgUnitAndUserCashbookResponse|\Pggns\MidocoApi\Api\Order\StructType\GetPackageInfoForBookingResponse|\Pggns\MidocoApi\Api\Order\StructType\GetPaymentAccrualForCreditorResponse|\Pggns\MidocoApi\Api\Order\StructType\GetPaymentProviderSettlementBookingsResponse|\Pggns\MidocoApi\Api\Order\StructType\GetPaymentProviderSettlementResponse|\Pggns\MidocoApi\Api\Order\StructType\GetPPTransactionsResponse|\Pggns\MidocoApi\Api\Order\StructType\GetPrintedBillingDocResponse|\Pggns\MidocoApi\Api\Order\StructType\GetPrintSelectsForOrderResponse|\Pggns\MidocoApi\Api\Order\StructType\GetProcessedBookingsResponse|\Pggns\MidocoApi\Api\Order\StructType\GetReceiptResponse|\Pggns\MidocoApi\Api\Order\StructType\GetRevenueBookingForSellitemResponse|\Pggns\MidocoApi\Api\Order\StructType\GetSaveBookingControlResponse|\Pggns\MidocoApi\Api\Order\StructType\GetSellItemAttributesForOrderResponse|\Pggns\MidocoApi\Api\Order\StructType\GetSellItemAttributesResponse|\Pggns\MidocoApi\Api\Order\StructType\GetSellitemDetailsForBonusEmployeeResponse|\Pggns\MidocoApi\Api\Order\StructType\GetSellItemDocumentsResponse|\Pggns\MidocoApi\Api\Order\StructType\GetSellItemProvisionResponse|\Pggns\MidocoApi\Api\Order\StructType\GetSellItemResponse|\Pggns\MidocoApi\Api\Order\StructType\GetSellItemRevenuesResponse|\Pggns\MidocoApi\Api\Order\StructType\GetSellItemsSettlementNeededResponse|\Pggns\MidocoApi\Api\Order\StructType\GetSellItemTooltipsResponse|\Pggns\MidocoApi\Api\Order\StructType\GetSettlementInfoDetailsResponse|\Pggns\MidocoApi\Api\Order\StructType\GetShortOrderStatusResponse|\Pggns\MidocoApi\Api\Order\StructType\GetSkippedBookingsResponse|\Pggns\MidocoApi\Api\Order\StructType\GetSubOrdersInfoResponse|\Pggns\MidocoApi\Api\Order\StructType\GetSupplAgencySettlemJournalResponse|\Pggns\MidocoApi\Api\Order\StructType\GetSupplierAgencySettlementBookingsResponse|\Pggns\MidocoApi\Api\Order\StructType\GetSupplierAgencySettlementDetailsResponse|\Pggns\MidocoApi\Api\Order\StructType\GetSupplierSettlementErrorResponse|\Pggns\MidocoApi\Api\Order\StructType\GetTextForSellItemErrorResponse|\Pggns\MidocoApi\Api\Order\StructType\GetTotalPartialInvoiceResponse|\Pggns\MidocoApi\Api\Order\StructType\GetTravelCMSResponse|\Pggns\MidocoApi\Api\Order\StructType\GetTravelDocsPrintInfoResponse|\Pggns\MidocoApi\Api\Order\StructType\GetTravelDocumentsResponse|\Pggns\MidocoApi\Api\Order\StructType\GetTravelersForDocumentIdResponse|\Pggns\MidocoApi\Api\Order\StructType\GetTravelNoMarginItemsResponse|\Pggns\MidocoApi\Api\Order\StructType\GetTravelNoMargins4SettlTypeResponse|\Pggns\MidocoApi\Api\Order\StructType\GetTravelPlansResponse|\Pggns\MidocoApi\Api\Order\StructType\GetTravelStartDatesFromAgencyResponse|\Pggns\MidocoApi\Api\Order\StructType\GetTravelStartDatesFromCustomerResponse|\Pggns\MidocoApi\Api\Order\StructType\GetTssProtocolResponse|\Pggns\MidocoApi\Api\Order\StructType\GetUnassignedBookingsResponse|\Pggns\MidocoApi\Api\Order\StructType\GetUnitNameForBookingByIdResponse|\Pggns\MidocoApi\Api\Order\StructType\GetUnprintedOrderIDsResponse|\Pggns\MidocoApi\Api\Order\StructType\GetUsersFromBonusCalculationResponse|\Pggns\MidocoApi\Api\Order\StructType\GetVouchersForOrderResponse|\Pggns\MidocoApi\Api\Order\StructType\TotalPartialPaymentsResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
