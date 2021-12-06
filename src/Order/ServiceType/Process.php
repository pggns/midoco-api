<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Process ServiceType
 * @subpackage Services
 */
class Process extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Api\Order\ServiceType\Process
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named processBillingDocs
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\ProcessBillingDocsRequest $paramProcessBillingDocsRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\ProcessBillingDocsResponse|bool
     */
    public function processBillingDocs(\Pggns\MidocoApi\Api\Order\StructType\ProcessBillingDocsRequest $paramProcessBillingDocsRequest)
    {
        try {
            $this->setResult($resultProcessBillingDocs = $this->getSoapClient()->__soapCall('processBillingDocs', [
                $paramProcessBillingDocsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultProcessBillingDocs;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named processInvoiceMixedMode
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\ProcessInvoiceMixedModeRequest $paramProcessInvoiceMixedModeRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\ProcessInvoiceMixedModeResponse|bool
     */
    public function processInvoiceMixedMode(\Pggns\MidocoApi\Api\Order\StructType\ProcessInvoiceMixedModeRequest $paramProcessInvoiceMixedModeRequest)
    {
        try {
            $this->setResult($resultProcessInvoiceMixedMode = $this->getSoapClient()->__soapCall('processInvoiceMixedMode', [
                $paramProcessInvoiceMixedModeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultProcessInvoiceMixedMode;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named processReceiptMixedMode
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\ProcessReceiptMixedModeRequest $paramProcessReceiptMixedModeRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\ProcessReceiptMixedModeResponse|bool
     */
    public function processReceiptMixedMode(\Pggns\MidocoApi\Api\Order\StructType\ProcessReceiptMixedModeRequest $paramProcessReceiptMixedModeRequest)
    {
        try {
            $this->setResult($resultProcessReceiptMixedMode = $this->getSoapClient()->__soapCall('processReceiptMixedMode', [
                $paramProcessReceiptMixedModeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultProcessReceiptMixedMode;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named processSofortTransaction
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\ProcessSofortTransactionRequest $paramProcessSofortTransactionRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\ProcessSofortTransactionResponse|bool
     */
    public function processSofortTransaction(\Pggns\MidocoApi\Api\Order\StructType\ProcessSofortTransactionRequest $paramProcessSofortTransactionRequest)
    {
        try {
            $this->setResult($resultProcessSofortTransaction = $this->getSoapClient()->__soapCall('processSofortTransaction', [
                $paramProcessSofortTransactionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultProcessSofortTransaction;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named processFairplaneFlightData
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\ProcessFairplaneFlightDataRequest $paramProcessFairplaneFlightDataRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\ProcessFairplaneFlightDataResponse|bool
     */
    public function processFairplaneFlightData(\Pggns\MidocoApi\Api\Order\StructType\ProcessFairplaneFlightDataRequest $paramProcessFairplaneFlightDataRequest)
    {
        try {
            $this->setResult($resultProcessFairplaneFlightData = $this->getSoapClient()->__soapCall('processFairplaneFlightData', [
                $paramProcessFairplaneFlightDataRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultProcessFairplaneFlightData;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named processCompensation2GoNotification
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\ProcessCompensation2GoNotificationRequest $paramProcessCompensation2GoNotificationRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\Compensation2GoNotificationResponseType|bool
     */
    public function processCompensation2GoNotification(\Pggns\MidocoApi\Api\Order\StructType\ProcessCompensation2GoNotificationRequest $paramProcessCompensation2GoNotificationRequest)
    {
        try {
            $this->setResult($resultProcessCompensation2GoNotification = $this->getSoapClient()->__soapCall('processCompensation2GoNotification', [
                $paramProcessCompensation2GoNotificationRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultProcessCompensation2GoNotification;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Api\Order\StructType\Compensation2GoNotificationResponseType|\Pggns\MidocoApi\Api\Order\StructType\ProcessBillingDocsResponse|\Pggns\MidocoApi\Api\Order\StructType\ProcessFairplaneFlightDataResponse|\Pggns\MidocoApi\Api\Order\StructType\ProcessInvoiceMixedModeResponse|\Pggns\MidocoApi\Api\Order\StructType\ProcessReceiptMixedModeResponse|\Pggns\MidocoApi\Api\Order\StructType\ProcessSofortTransactionResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
