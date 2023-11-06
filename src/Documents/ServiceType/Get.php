<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\ServiceType;

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
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Pggns\MidocoApi\Documents\ServiceType\Get
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Documents\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named getDocumentRepositoryById
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Documents\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Documents\StructType\GetDocumentRepositoryByIdRequest $paramGetDocumentRepositoryByIdRequest
     * @return \Pggns\MidocoApi\Documents\StructType\GetDocumentRepositoryByIdResponse|bool
     */
    public function getDocumentRepositoryById(\Pggns\MidocoApi\Documents\StructType\GetDocumentRepositoryByIdRequest $paramGetDocumentRepositoryByIdRequest)
    {
        try {
            $this->setResult($resultGetDocumentRepositoryById = $this->getSoapClient()->__soapCall('getDocumentRepositoryById', [
                $paramGetDocumentRepositoryByIdRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetDocumentRepositoryById;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getDocumentRefId
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Documents\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Documents\StructType\GetDocumentRefIdRequest $paramGetDocumentRefIdRequest
     * @return \Pggns\MidocoApi\Documents\StructType\GetDocumentRefIdResponse|bool
     */
    public function getDocumentRefId(\Pggns\MidocoApi\Documents\StructType\GetDocumentRefIdRequest $paramGetDocumentRefIdRequest)
    {
        try {
            $this->setResult($resultGetDocumentRefId = $this->getSoapClient()->__soapCall('getDocumentRefId', [
                $paramGetDocumentRefIdRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetDocumentRefId;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getHistoryDocument
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Documents\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Documents\StructType\GetHistoryDocumentRequest $paramGetHistoryDocumentRequest
     * @return \Pggns\MidocoApi\Documents\StructType\GetHistoryDocumentResponse|bool
     */
    public function getHistoryDocument(\Pggns\MidocoApi\Documents\StructType\GetHistoryDocumentRequest $paramGetHistoryDocumentRequest)
    {
        try {
            $this->setResult($resultGetHistoryDocument = $this->getSoapClient()->__soapCall('getHistoryDocument', [
                $paramGetHistoryDocumentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetHistoryDocument;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getExternDocumentById
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Documents\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Documents\StructType\GetExternDocumentByIdRequest $paramGetExternDocumentByIdRequest
     * @return \Pggns\MidocoApi\Documents\StructType\GetExternDocumentByIdResponse|bool
     */
    public function getExternDocumentById(\Pggns\MidocoApi\Documents\StructType\GetExternDocumentByIdRequest $paramGetExternDocumentByIdRequest)
    {
        try {
            $this->setResult($resultGetExternDocumentById = $this->getSoapClient()->__soapCall('getExternDocumentById', [
                $paramGetExternDocumentByIdRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetExternDocumentById;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getExternDocumentDesc
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Documents\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Documents\StructType\GetExternDocumentDescRequest $paramGetExternDocumentDescRequest
     * @return \Pggns\MidocoApi\Documents\StructType\GetExternDocumentDescResponse|bool
     */
    public function getExternDocumentDesc(\Pggns\MidocoApi\Documents\StructType\GetExternDocumentDescRequest $paramGetExternDocumentDescRequest)
    {
        try {
            $this->setResult($resultGetExternDocumentDesc = $this->getSoapClient()->__soapCall('getExternDocumentDesc', [
                $paramGetExternDocumentDescRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetExternDocumentDesc;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAvailableOrgunitDocuments
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Documents\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Documents\StructType\GetAvailableOrgunitDocumentsRequest $paramGetAvailableOrgunitDocumentsRequest
     * @return \Pggns\MidocoApi\Documents\StructType\GetAvailableOrgunitDocumentsResponse|bool
     */
    public function getAvailableOrgunitDocuments(\Pggns\MidocoApi\Documents\StructType\GetAvailableOrgunitDocumentsRequest $paramGetAvailableOrgunitDocumentsRequest)
    {
        try {
            $this->setResult($resultGetAvailableOrgunitDocuments = $this->getSoapClient()->__soapCall('getAvailableOrgunitDocuments', [
                $paramGetAvailableOrgunitDocumentsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAvailableOrgunitDocuments;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getOrgunitDocument
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Documents\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Documents\StructType\GetOrgunitDocumentRequest $paramGetOrgunitDocumentRequest
     * @return \Pggns\MidocoApi\Documents\StructType\GetOrgunitDocumentResponse|bool
     */
    public function getOrgunitDocument(\Pggns\MidocoApi\Documents\StructType\GetOrgunitDocumentRequest $paramGetOrgunitDocumentRequest)
    {
        try {
            $this->setResult($resultGetOrgunitDocument = $this->getSoapClient()->__soapCall('getOrgunitDocument', [
                $paramGetOrgunitDocumentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetOrgunitDocument;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getTempDocumentRepositoryById
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Documents\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Documents\StructType\GetTempDocumentRepositoryByIdRequest $paramGetTempDocumentRepositoryByIdRequest
     * @return \Pggns\MidocoApi\Documents\StructType\GetTempDocumentRepositoryByIdResponse|bool
     */
    public function getTempDocumentRepositoryById(\Pggns\MidocoApi\Documents\StructType\GetTempDocumentRepositoryByIdRequest $paramGetTempDocumentRepositoryByIdRequest)
    {
        try {
            $this->setResult($resultGetTempDocumentRepositoryById = $this->getSoapClient()->__soapCall('getTempDocumentRepositoryById', [
                $paramGetTempDocumentRepositoryByIdRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetTempDocumentRepositoryById;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getUsedVolume
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Documents\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Documents\StructType\GetUsedVolumeRequest $paramGetUsedVolumeRequest
     * @return \Pggns\MidocoApi\Documents\StructType\GetUsedVolumeResponse|bool
     */
    public function getUsedVolume(\Pggns\MidocoApi\Documents\StructType\GetUsedVolumeRequest $paramGetUsedVolumeRequest)
    {
        try {
            $this->setResult($resultGetUsedVolume = $this->getSoapClient()->__soapCall('getUsedVolume', [
                $paramGetUsedVolumeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetUsedVolume;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getDocumentConsistency
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Documents\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Documents\StructType\GetDocumentConsistencyRequest $paramGetDocumentConsistencyRequest
     * @return \Pggns\MidocoApi\Documents\StructType\GetDocumentConsistencyResponse|bool
     */
    public function getDocumentConsistency(\Pggns\MidocoApi\Documents\StructType\GetDocumentConsistencyRequest $paramGetDocumentConsistencyRequest)
    {
        try {
            $this->setResult($resultGetDocumentConsistency = $this->getSoapClient()->__soapCall('getDocumentConsistency', [
                $paramGetDocumentConsistencyRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetDocumentConsistency;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Documents\StructType\GetAvailableOrgunitDocumentsResponse|\Pggns\MidocoApi\Documents\StructType\GetDocumentConsistencyResponse|\Pggns\MidocoApi\Documents\StructType\GetDocumentRefIdResponse|\Pggns\MidocoApi\Documents\StructType\GetDocumentRepositoryByIdResponse|\Pggns\MidocoApi\Documents\StructType\GetExternDocumentByIdResponse|\Pggns\MidocoApi\Documents\StructType\GetExternDocumentDescResponse|\Pggns\MidocoApi\Documents\StructType\GetHistoryDocumentResponse|\Pggns\MidocoApi\Documents\StructType\GetOrgunitDocumentResponse|\Pggns\MidocoApi\Documents\StructType\GetTempDocumentRepositoryByIdResponse|\Pggns\MidocoApi\Documents\StructType\GetUsedVolumeResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
