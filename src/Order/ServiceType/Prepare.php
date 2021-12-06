<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Prepare ServiceType
 * @subpackage Services
 */
class Prepare extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Api\Order\ServiceType\Prepare
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named prepareMidocoMailMessage
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\PrepareMidocoMailMessageRequest $paramPrepareMidocoMailMessageRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\PrepareMidocoMailMessageResponse|bool
     */
    public function prepareMidocoMailMessage(\Pggns\MidocoApi\Api\Order\StructType\PrepareMidocoMailMessageRequest $paramPrepareMidocoMailMessageRequest)
    {
        try {
            $this->setResult($resultPrepareMidocoMailMessage = $this->getSoapClient()->__soapCall('prepareMidocoMailMessage', [
                $paramPrepareMidocoMailMessageRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultPrepareMidocoMailMessage;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named prepareMediatorSettlement
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\PrepareMediatorSettlementRequest $paramPrepareMediatorSettlementRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\PrepareMediatorSettlementResponse|bool
     */
    public function prepareMediatorSettlement(\Pggns\MidocoApi\Api\Order\StructType\PrepareMediatorSettlementRequest $paramPrepareMediatorSettlementRequest)
    {
        try {
            $this->setResult($resultPrepareMediatorSettlement = $this->getSoapClient()->__soapCall('prepareMediatorSettlement', [
                $paramPrepareMediatorSettlementRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultPrepareMediatorSettlement;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named prepareAgencyProvision
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\PrepareAgencyProvisionRequest $paramPrepareAgencyProvisionRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\PrepareAgencyProvisionResponse|bool
     */
    public function prepareAgencyProvision(\Pggns\MidocoApi\Api\Order\StructType\PrepareAgencyProvisionRequest $paramPrepareAgencyProvisionRequest)
    {
        try {
            $this->setResult($resultPrepareAgencyProvision = $this->getSoapClient()->__soapCall('prepareAgencyProvision', [
                $paramPrepareAgencyProvisionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultPrepareAgencyProvision;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named prepareGroupAdvisorCommission
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\PrepareGroupAdvisorCommissionRequest $paramPrepareGroupAdvisorCommissionRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\PrepareGroupAdvisorCommissionResponse|bool
     */
    public function prepareGroupAdvisorCommission(\Pggns\MidocoApi\Api\Order\StructType\PrepareGroupAdvisorCommissionRequest $paramPrepareGroupAdvisorCommissionRequest)
    {
        try {
            $this->setResult($resultPrepareGroupAdvisorCommission = $this->getSoapClient()->__soapCall('prepareGroupAdvisorCommission', [
                $paramPrepareGroupAdvisorCommissionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultPrepareGroupAdvisorCommission;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named prepareAgenciesListForSettlement
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\PrepareAgenciesListForSettlementRequest $paramPrepareAgenciesListForSettlementRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\PrepareAgenciesListForSettlementResponse|bool
     */
    public function prepareAgenciesListForSettlement(\Pggns\MidocoApi\Api\Order\StructType\PrepareAgenciesListForSettlementRequest $paramPrepareAgenciesListForSettlementRequest)
    {
        try {
            $this->setResult($resultPrepareAgenciesListForSettlement = $this->getSoapClient()->__soapCall('prepareAgenciesListForSettlement', [
                $paramPrepareAgenciesListForSettlementRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultPrepareAgenciesListForSettlement;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named prepareBillingDocumentForCustomer
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\PrepareBillingDocumentForCustomerRequest $paramPrepareBillingDocumentForCustomerRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\PrepareBillingDocumentForCustomerResponse|bool
     */
    public function prepareBillingDocumentForCustomer(\Pggns\MidocoApi\Api\Order\StructType\PrepareBillingDocumentForCustomerRequest $paramPrepareBillingDocumentForCustomerRequest)
    {
        try {
            $this->setResult($resultPrepareBillingDocumentForCustomer = $this->getSoapClient()->__soapCall('prepareBillingDocumentForCustomer', [
                $paramPrepareBillingDocumentForCustomerRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultPrepareBillingDocumentForCustomer;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named prepareDunningBillings
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\PrepareDunningBillingsRequest $paramPrepareDunningBillingsRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\PrepareDunningBillingsResponse|bool
     */
    public function prepareDunningBillings(\Pggns\MidocoApi\Api\Order\StructType\PrepareDunningBillingsRequest $paramPrepareDunningBillingsRequest)
    {
        try {
            $this->setResult($resultPrepareDunningBillings = $this->getSoapClient()->__soapCall('prepareDunningBillings', [
                $paramPrepareDunningBillingsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultPrepareDunningBillings;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named prepareAdvice
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\PrepareAdviceRequest $paramPrepareAdviceRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\PrepareAdviceInfoResponse|bool
     */
    public function prepareAdvice(\Pggns\MidocoApi\Api\Order\StructType\PrepareAdviceRequest $paramPrepareAdviceRequest)
    {
        try {
            $this->setResult($resultPrepareAdvice = $this->getSoapClient()->__soapCall('prepareAdvice', [
                $paramPrepareAdviceRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultPrepareAdvice;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named prepareCommissionInvoice
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\PrepareCommissionInvoiceRequest $paramPrepareCommissionInvoiceRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\PrepareAdviceInfoResponse|bool
     */
    public function prepareCommissionInvoice(\Pggns\MidocoApi\Api\Order\StructType\PrepareCommissionInvoiceRequest $paramPrepareCommissionInvoiceRequest)
    {
        try {
            $this->setResult($resultPrepareCommissionInvoice = $this->getSoapClient()->__soapCall('prepareCommissionInvoice', [
                $paramPrepareCommissionInvoiceRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultPrepareCommissionInvoice;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named prepareMidocoSettlement
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\PrepareMidocoSettlementRequest $paramPrepareMidocoSettlementRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\PrepareMidocoSettlementResponse|bool
     */
    public function prepareMidocoSettlement(\Pggns\MidocoApi\Api\Order\StructType\PrepareMidocoSettlementRequest $paramPrepareMidocoSettlementRequest)
    {
        try {
            $this->setResult($resultPrepareMidocoSettlement = $this->getSoapClient()->__soapCall('prepareMidocoSettlement', [
                $paramPrepareMidocoSettlementRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultPrepareMidocoSettlement;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named preparePseudoRevenueBooking
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\PreparePseudoRevenueBookingRequest $paramPreparePseudoRevenueBookingRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\PreparePseudoRevenueBookingResponse|bool
     */
    public function preparePseudoRevenueBooking(\Pggns\MidocoApi\Api\Order\StructType\PreparePseudoRevenueBookingRequest $paramPreparePseudoRevenueBookingRequest)
    {
        try {
            $this->setResult($resultPreparePseudoRevenueBooking = $this->getSoapClient()->__soapCall('preparePseudoRevenueBooking', [
                $paramPreparePseudoRevenueBookingRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultPreparePseudoRevenueBooking;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named prepareSubOrders
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\PrepareSubOrdersRequest $paramPrepareSubOrdersRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\PrepareSubOrdersResponse|bool
     */
    public function prepareSubOrders(\Pggns\MidocoApi\Api\Order\StructType\PrepareSubOrdersRequest $paramPrepareSubOrdersRequest)
    {
        try {
            $this->setResult($resultPrepareSubOrders = $this->getSoapClient()->__soapCall('prepareSubOrders', [
                $paramPrepareSubOrdersRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultPrepareSubOrders;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Api\Order\StructType\PrepareAdviceInfoResponse|\Pggns\MidocoApi\Api\Order\StructType\PrepareAgenciesListForSettlementResponse|\Pggns\MidocoApi\Api\Order\StructType\PrepareAgencyProvisionResponse|\Pggns\MidocoApi\Api\Order\StructType\PrepareBillingDocumentForCustomerResponse|\Pggns\MidocoApi\Api\Order\StructType\PrepareDunningBillingsResponse|\Pggns\MidocoApi\Api\Order\StructType\PrepareGroupAdvisorCommissionResponse|\Pggns\MidocoApi\Api\Order\StructType\PrepareMediatorSettlementResponse|\Pggns\MidocoApi\Api\Order\StructType\PrepareMidocoMailMessageResponse|\Pggns\MidocoApi\Api\Order\StructType\PrepareMidocoSettlementResponse|\Pggns\MidocoApi\Api\Order\StructType\PreparePseudoRevenueBookingResponse|\Pggns\MidocoApi\Api\Order\StructType\PrepareSubOrdersResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
