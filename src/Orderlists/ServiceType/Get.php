<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\ServiceType;

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
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Pggns\MidocoApi\Orderlists\ServiceType\Get
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Orderlists\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named getAvailableSupplierGroupValues
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Orderlists\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Orderlists\StructType\GetAvailableSupplierGroupValuesRequest $paramGetAvailableSupplierGroupValuesRequest
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetAvailableSupplierGroupValuesResponse|bool
     */
    public function getAvailableSupplierGroupValues(\Pggns\MidocoApi\Orderlists\StructType\GetAvailableSupplierGroupValuesRequest $paramGetAvailableSupplierGroupValuesRequest)
    {
        try {
            $this->setResult($resultGetAvailableSupplierGroupValues = $this->getSoapClient()->__soapCall('getAvailableSupplierGroupValues', [
                $paramGetAvailableSupplierGroupValuesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAvailableSupplierGroupValues;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getInfoForCustomer
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Orderlists\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Orderlists\StructType\GetInfoForCustomerRequest $paramGetInfoForCustomerRequest
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetInfoForCustomerResponse|bool
     */
    public function getInfoForCustomer(\Pggns\MidocoApi\Orderlists\StructType\GetInfoForCustomerRequest $paramGetInfoForCustomerRequest)
    {
        try {
            $this->setResult($resultGetInfoForCustomer = $this->getSoapClient()->__soapCall('getInfoForCustomer', [
                $paramGetInfoForCustomerRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetInfoForCustomer;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getTTVByProduct
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Orderlists\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Orderlists\StructType\GetTTVByProductRequest $paramGetTTVByProductRequest
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetTTVByProductResponse|bool
     */
    public function getTTVByProduct(\Pggns\MidocoApi\Orderlists\StructType\GetTTVByProductRequest $paramGetTTVByProductRequest)
    {
        try {
            $this->setResult($resultGetTTVByProduct = $this->getSoapClient()->__soapCall('getTTVByProduct', [
                $paramGetTTVByProductRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetTTVByProduct;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getGroupAdvisorInfo
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Orderlists\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Orderlists\StructType\GetGroupAdvisorInfoRequest $paramGetGroupAdvisorInfoRequest
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetGroupAdvisorInfoResponse|bool
     */
    public function getGroupAdvisorInfo(\Pggns\MidocoApi\Orderlists\StructType\GetGroupAdvisorInfoRequest $paramGetGroupAdvisorInfoRequest)
    {
        try {
            $this->setResult($resultGetGroupAdvisorInfo = $this->getSoapClient()->__soapCall('getGroupAdvisorInfo', [
                $paramGetGroupAdvisorInfoRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetGroupAdvisorInfo;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getOrderBookingJournals
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Orderlists\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Orderlists\StructType\GetOrderBookingJournalsRequest $paramGetOrderBookingJournalsRequest
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetOrderBookingJournalsResponse|bool
     */
    public function getOrderBookingJournals(\Pggns\MidocoApi\Orderlists\StructType\GetOrderBookingJournalsRequest $paramGetOrderBookingJournalsRequest)
    {
        try {
            $this->setResult($resultGetOrderBookingJournals = $this->getSoapClient()->__soapCall('getOrderBookingJournals', [
                $paramGetOrderBookingJournalsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetOrderBookingJournals;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getBillingBookingJournals
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Orderlists\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Orderlists\StructType\GetBillingBookingJournalsRequest $paramGetBillingBookingJournalsRequest
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetBillingBookingJournalsResponse|bool
     */
    public function getBillingBookingJournals(\Pggns\MidocoApi\Orderlists\StructType\GetBillingBookingJournalsRequest $paramGetBillingBookingJournalsRequest)
    {
        try {
            $this->setResult($resultGetBillingBookingJournals = $this->getSoapClient()->__soapCall('getBillingBookingJournals', [
                $paramGetBillingBookingJournalsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetBillingBookingJournals;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMidocoCCSaleList
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Orderlists\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Orderlists\StructType\GetMidocoCCSaleListRequest $paramGetMidocoCCSaleListRequest
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetMidocoCCSaleListResponse|bool
     */
    public function getMidocoCCSaleList(\Pggns\MidocoApi\Orderlists\StructType\GetMidocoCCSaleListRequest $paramGetMidocoCCSaleListRequest)
    {
        try {
            $this->setResult($resultGetMidocoCCSaleList = $this->getSoapClient()->__soapCall('getMidocoCCSaleList', [
                $paramGetMidocoCCSaleListRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMidocoCCSaleList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSupplierInvoiceList
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Orderlists\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Orderlists\StructType\GetSupplierInvoiceListRequest $paramGetSupplierInvoiceListRequest
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetSupplierInvoiceListResponse|bool
     */
    public function getSupplierInvoiceList(\Pggns\MidocoApi\Orderlists\StructType\GetSupplierInvoiceListRequest $paramGetSupplierInvoiceListRequest)
    {
        try {
            $this->setResult($resultGetSupplierInvoiceList = $this->getSoapClient()->__soapCall('getSupplierInvoiceList', [
                $paramGetSupplierInvoiceListRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSupplierInvoiceList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getOpenErList
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Orderlists\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Orderlists\StructType\OpenErListRequest $paramOpenErListRequest
     * @return \Pggns\MidocoApi\Orderlists\StructType\OpenErListResponse|bool
     */
    public function getOpenErList(\Pggns\MidocoApi\Orderlists\StructType\OpenErListRequest $paramOpenErListRequest)
    {
        try {
            $this->setResult($resultGetOpenErList = $this->getSoapClient()->__soapCall('getOpenErList', [
                $paramOpenErListRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetOpenErList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getOpenErCvsExport
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Orderlists\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Orderlists\StructType\OpenErCsvExportRequest $paramOpenErCsvExportRequest
     * @return \Pggns\MidocoApi\Orderlists\StructType\OpenErCsvExportResponse|bool
     */
    public function getOpenErCvsExport(\Pggns\MidocoApi\Orderlists\StructType\OpenErCsvExportRequest $paramOpenErCsvExportRequest)
    {
        try {
            $this->setResult($resultGetOpenErCvsExport = $this->getSoapClient()->__soapCall('getOpenErCvsExport', [
                $paramOpenErCsvExportRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetOpenErCvsExport;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getConnectedCustomerList
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Orderlists\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Orderlists\StructType\ConnectedCustomerListRequest $paramConnectedCustomerListRequest
     * @return \Pggns\MidocoApi\Orderlists\StructType\ConnectedCustomerListResponse|bool
     */
    public function getConnectedCustomerList(\Pggns\MidocoApi\Orderlists\StructType\ConnectedCustomerListRequest $paramConnectedCustomerListRequest)
    {
        try {
            $this->setResult($resultGetConnectedCustomerList = $this->getSoapClient()->__soapCall('getConnectedCustomerList', [
                $paramConnectedCustomerListRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetConnectedCustomerList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getBillingStat
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Orderlists\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Orderlists\StructType\GetBillingStatsRequest $paramGetBillingStatsRequest
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetBillingStatsResponse|bool
     */
    public function getBillingStat(\Pggns\MidocoApi\Orderlists\StructType\GetBillingStatsRequest $paramGetBillingStatsRequest)
    {
        try {
            $this->setResult($resultGetBillingStat = $this->getSoapClient()->__soapCall('getBillingStat', [
                $paramGetBillingStatsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetBillingStat;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getBillingStatCustomer
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Orderlists\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Orderlists\StructType\GetBillingStatsCustomerRequest $paramGetBillingStatsCustomerRequest
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetBillingStatsCustomerResponse|bool
     */
    public function getBillingStatCustomer(\Pggns\MidocoApi\Orderlists\StructType\GetBillingStatsCustomerRequest $paramGetBillingStatsCustomerRequest)
    {
        try {
            $this->setResult($resultGetBillingStatCustomer = $this->getSoapClient()->__soapCall('getBillingStatCustomer', [
                $paramGetBillingStatsCustomerRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetBillingStatCustomer;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Orderlists\StructType\ConnectedCustomerListResponse|\Pggns\MidocoApi\Orderlists\StructType\GetAvailableSupplierGroupValuesResponse|\Pggns\MidocoApi\Orderlists\StructType\GetBillingBookingJournalsResponse|\Pggns\MidocoApi\Orderlists\StructType\GetBillingStatsCustomerResponse|\Pggns\MidocoApi\Orderlists\StructType\GetBillingStatsResponse|\Pggns\MidocoApi\Orderlists\StructType\GetGroupAdvisorInfoResponse|\Pggns\MidocoApi\Orderlists\StructType\GetInfoForCustomerResponse|\Pggns\MidocoApi\Orderlists\StructType\GetMidocoCCSaleListResponse|\Pggns\MidocoApi\Orderlists\StructType\GetOrderBookingJournalsResponse|\Pggns\MidocoApi\Orderlists\StructType\GetSupplierInvoiceListResponse|\Pggns\MidocoApi\Orderlists\StructType\GetTTVByProductResponse|\Pggns\MidocoApi\Orderlists\StructType\OpenErCsvExportResponse|\Pggns\MidocoApi\Orderlists\StructType\OpenErListResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
