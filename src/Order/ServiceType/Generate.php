<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Generate ServiceType
 * @subpackage Services
 */
class Generate extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Api\Order\ServiceType\Generate
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named generateCsvForCollectiveBilling
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GenerateCsvForCollectiveBillingRequest $paramGenerateCsvForCollectiveBillingRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GenerateCsvForCollectiveBillingResponse|bool
     */
    public function generateCsvForCollectiveBilling(\Pggns\MidocoApi\Api\Order\StructType\GenerateCsvForCollectiveBillingRequest $paramGenerateCsvForCollectiveBillingRequest)
    {
        try {
            $this->setResult($resultGenerateCsvForCollectiveBilling = $this->getSoapClient()->__soapCall('generateCsvForCollectiveBilling', [
                $paramGenerateCsvForCollectiveBillingRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGenerateCsvForCollectiveBilling;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named generateCsvForBatchInvoicing
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GenerateCsvForBatchInvoicingRequest $paramGenerateCsvForBatchInvoicingRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GenerateCsvForBatchInvoicingResponse|bool
     */
    public function generateCsvForBatchInvoicing(\Pggns\MidocoApi\Api\Order\StructType\GenerateCsvForBatchInvoicingRequest $paramGenerateCsvForBatchInvoicingRequest)
    {
        try {
            $this->setResult($resultGenerateCsvForBatchInvoicing = $this->getSoapClient()->__soapCall('generateCsvForBatchInvoicing', [
                $paramGenerateCsvForBatchInvoicingRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGenerateCsvForBatchInvoicing;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named generateInvoiceFile
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\GenerateInvoiceFileRequest $paramGenerateInvoiceFileRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\GenerateInvoiceFileResponse|bool
     */
    public function generateInvoiceFile(\Pggns\MidocoApi\Api\Order\StructType\GenerateInvoiceFileRequest $paramGenerateInvoiceFileRequest)
    {
        try {
            $this->setResult($resultGenerateInvoiceFile = $this->getSoapClient()->__soapCall('generateInvoiceFile', [
                $paramGenerateInvoiceFileRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGenerateInvoiceFile;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Api\Order\StructType\GenerateCsvForBatchInvoicingResponse|\Pggns\MidocoApi\Api\Order\StructType\GenerateCsvForCollectiveBillingResponse|\Pggns\MidocoApi\Api\Order\StructType\GenerateInvoiceFileResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
