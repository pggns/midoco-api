<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Create ServiceType
 * @subpackage Services
 */
class Create extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Api\Order\ServiceType\Create
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named createBillingPrintjob
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\CreateBillingPrintjobRequest $paramCreateBillingPrintjobRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\CreateBillingPrintjobResponse|bool
     */
    public function createBillingPrintjob(\Pggns\MidocoApi\Api\Order\StructType\CreateBillingPrintjobRequest $paramCreateBillingPrintjobRequest)
    {
        try {
            $this->setResult($resultCreateBillingPrintjob = $this->getSoapClient()->__soapCall('createBillingPrintjob', [
                $paramCreateBillingPrintjobRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateBillingPrintjob;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named createTravelPlanPrintjob
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\CreateTravelPlanPrintjobRequest $paramCreateTravelPlanPrintjobRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\CreateTravelPlanPrintjobResponse|bool
     */
    public function createTravelPlanPrintjob(\Pggns\MidocoApi\Api\Order\StructType\CreateTravelPlanPrintjobRequest $paramCreateTravelPlanPrintjobRequest)
    {
        try {
            $this->setResult($resultCreateTravelPlanPrintjob = $this->getSoapClient()->__soapCall('createTravelPlanPrintjob', [
                $paramCreateTravelPlanPrintjobRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateTravelPlanPrintjob;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named createSupplierMessage
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\CreateSupplierMessageRequest $paramCreateSupplierMessageRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\CreateSupplierMessageResponse|bool
     */
    public function createSupplierMessage(\Pggns\MidocoApi\Api\Order\StructType\CreateSupplierMessageRequest $paramCreateSupplierMessageRequest)
    {
        try {
            $this->setResult($resultCreateSupplierMessage = $this->getSoapClient()->__soapCall('createSupplierMessage', [
                $paramCreateSupplierMessageRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateSupplierMessage;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named createVermiLink
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\CreateVermiLinkRequest $paramCreateVermiLinkRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\CreateVermiLinkResponse|bool
     */
    public function createVermiLink(\Pggns\MidocoApi\Api\Order\StructType\CreateVermiLinkRequest $paramCreateVermiLinkRequest)
    {
        try {
            $this->setResult($resultCreateVermiLink = $this->getSoapClient()->__soapCall('createVermiLink', [
                $paramCreateVermiLinkRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateVermiLink;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named createAcconLink
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\CreateAcconLinkRequest $paramCreateAcconLinkRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\CreateAcconLinkResponse|bool
     */
    public function createAcconLink(\Pggns\MidocoApi\Api\Order\StructType\CreateAcconLinkRequest $paramCreateAcconLinkRequest)
    {
        try {
            $this->setResult($resultCreateAcconLink = $this->getSoapClient()->__soapCall('createAcconLink', [
                $paramCreateAcconLinkRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateAcconLink;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * createExternDocument4BillingDocument
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\CreateExternDocument4BillingDocumentRequest $paramCreateExternDocument4BillingDocumentRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\CreateExternDocument4BillingDocumentResponse|bool
     */
    public function createExternDocument4BillingDocument(\Pggns\MidocoApi\Api\Order\StructType\CreateExternDocument4BillingDocumentRequest $paramCreateExternDocument4BillingDocumentRequest)
    {
        try {
            $this->setResult($resultCreateExternDocument4BillingDocument = $this->getSoapClient()->__soapCall('createExternDocument4BillingDocument', [
                $paramCreateExternDocument4BillingDocumentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateExternDocument4BillingDocument;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named createAutomaticOrderNotice
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\CreateAutomaticOrderNoticeRequest $paramCreateAutomaticOrderNoticeRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\CreateAutomaticOrderNoticeResponse|bool
     */
    public function createAutomaticOrderNotice(\Pggns\MidocoApi\Api\Order\StructType\CreateAutomaticOrderNoticeRequest $paramCreateAutomaticOrderNoticeRequest)
    {
        try {
            $this->setResult($resultCreateAutomaticOrderNotice = $this->getSoapClient()->__soapCall('createAutomaticOrderNotice', [
                $paramCreateAutomaticOrderNoticeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateAutomaticOrderNotice;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named createVatCorrectionBillingDocument
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\CreateVatCorrectionBillingDocumentRequest $paramCreateVatCorrectionBillingDocumentRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\CreateVatCorrectionBillingDocumentResponse|bool
     */
    public function createVatCorrectionBillingDocument(\Pggns\MidocoApi\Api\Order\StructType\CreateVatCorrectionBillingDocumentRequest $paramCreateVatCorrectionBillingDocumentRequest)
    {
        try {
            $this->setResult($resultCreateVatCorrectionBillingDocument = $this->getSoapClient()->__soapCall('createVatCorrectionBillingDocument', [
                $paramCreateVatCorrectionBillingDocumentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateVatCorrectionBillingDocument;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named createDSFinVKExport
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\CreateDSFinVKExportRequest $paramCreateDSFinVKExportRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\CreateDSFinVKExportResponse|bool
     */
    public function createDSFinVKExport(\Pggns\MidocoApi\Api\Order\StructType\CreateDSFinVKExportRequest $paramCreateDSFinVKExportRequest)
    {
        try {
            $this->setResult($resultCreateDSFinVKExport = $this->getSoapClient()->__soapCall('createDSFinVKExport', [
                $paramCreateDSFinVKExportRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateDSFinVKExport;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Api\Order\StructType\CreateAcconLinkResponse|\Pggns\MidocoApi\Api\Order\StructType\CreateAutomaticOrderNoticeResponse|\Pggns\MidocoApi\Api\Order\StructType\CreateBillingPrintjobResponse|\Pggns\MidocoApi\Api\Order\StructType\CreateDSFinVKExportResponse|\Pggns\MidocoApi\Api\Order\StructType\CreateExternDocument4BillingDocumentResponse|\Pggns\MidocoApi\Api\Order\StructType\CreateSupplierMessageResponse|\Pggns\MidocoApi\Api\Order\StructType\CreateTravelPlanPrintjobResponse|\Pggns\MidocoApi\Api\Order\StructType\CreateVatCorrectionBillingDocumentResponse|\Pggns\MidocoApi\Api\Order\StructType\CreateVermiLinkResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
