<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Add ServiceType
 * @subpackage Services
 */
class Add extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Api\Order\ServiceType\Add
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named addSkippedBooking
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\AddSkippedBookingRequest $paramAddSkippedBookingRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\AddSkippedBookingResponse|bool
     */
    public function addSkippedBooking(\Pggns\MidocoApi\Api\Order\StructType\AddSkippedBookingRequest $paramAddSkippedBookingRequest)
    {
        try {
            $this->setResult($resultAddSkippedBooking = $this->getSoapClient()->__soapCall('addSkippedBooking', [
                $paramAddSkippedBookingRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultAddSkippedBooking;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named addBillingPosForOfflineCC
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\AddBillingPosForOfflineCCRequest $paramAddBillingPosForOfflineCCRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\AddBillingPosForOfflineCCResponse|bool
     */
    public function addBillingPosForOfflineCC(\Pggns\MidocoApi\Api\Order\StructType\AddBillingPosForOfflineCCRequest $paramAddBillingPosForOfflineCCRequest)
    {
        try {
            $this->setResult($resultAddBillingPosForOfflineCC = $this->getSoapClient()->__soapCall('addBillingPosForOfflineCC', [
                $paramAddBillingPosForOfflineCCRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultAddBillingPosForOfflineCC;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named addProcessedBooking
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\AddProcessedBookingRequest $paramAddProcessedBookingRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\AddProcessedBookingResponse|bool
     */
    public function addProcessedBooking(\Pggns\MidocoApi\Api\Order\StructType\AddProcessedBookingRequest $paramAddProcessedBookingRequest)
    {
        try {
            $this->setResult($resultAddProcessedBooking = $this->getSoapClient()->__soapCall('addProcessedBooking', [
                $paramAddProcessedBookingRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultAddProcessedBooking;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named addOrderContactHistoryEntry
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\AddOrderContactHistoryEntryRequest $paramAddOrderContactHistoryEntryRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\AddOrderContactHistoryEntryResponse|bool
     */
    public function addOrderContactHistoryEntry(\Pggns\MidocoApi\Api\Order\StructType\AddOrderContactHistoryEntryRequest $paramAddOrderContactHistoryEntryRequest)
    {
        try {
            $this->setResult($resultAddOrderContactHistoryEntry = $this->getSoapClient()->__soapCall('addOrderContactHistoryEntry', [
                $paramAddOrderContactHistoryEntryRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultAddOrderContactHistoryEntry;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named addAdditionalServices
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\AddAdditionalServicesRequest $paramAddAdditionalServicesRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\AddAdditionalServicesResponse|bool
     */
    public function addAdditionalServices(\Pggns\MidocoApi\Api\Order\StructType\AddAdditionalServicesRequest $paramAddAdditionalServicesRequest)
    {
        try {
            $this->setResult($resultAddAdditionalServices = $this->getSoapClient()->__soapCall('addAdditionalServices', [
                $paramAddAdditionalServicesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultAddAdditionalServices;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Api\Order\StructType\AddAdditionalServicesResponse|\Pggns\MidocoApi\Api\Order\StructType\AddBillingPosForOfflineCCResponse|\Pggns\MidocoApi\Api\Order\StructType\AddOrderContactHistoryEntryResponse|\Pggns\MidocoApi\Api\Order\StructType\AddProcessedBookingResponse|\Pggns\MidocoApi\Api\Order\StructType\AddSkippedBookingResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
