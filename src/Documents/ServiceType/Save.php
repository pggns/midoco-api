<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\ServiceType;

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
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Pggns\MidocoApi\Documents\ServiceType\Save
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Documents\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named saveDocumentRepository
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Documents\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Documents\StructType\SaveDocumentRepositoryRequest $paramSaveDocumentRepositoryRequest
     * @return \Pggns\MidocoApi\Documents\StructType\SaveDocumentRepositoryResponse|bool
     */
    public function saveDocumentRepository(\Pggns\MidocoApi\Documents\StructType\SaveDocumentRepositoryRequest $paramSaveDocumentRepositoryRequest)
    {
        try {
            $this->setResult($resultSaveDocumentRepository = $this->getSoapClient()->__soapCall('saveDocumentRepository', [
                $paramSaveDocumentRepositoryRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveDocumentRepository;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveExternDocument
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Documents\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Documents\StructType\SaveExternDocumentRequest $paramSaveExternDocumentRequest
     * @return \Pggns\MidocoApi\Documents\StructType\SaveExternDocumentResponse|bool
     */
    public function saveExternDocument(\Pggns\MidocoApi\Documents\StructType\SaveExternDocumentRequest $paramSaveExternDocumentRequest)
    {
        try {
            $this->setResult($resultSaveExternDocument = $this->getSoapClient()->__soapCall('saveExternDocument', [
                $paramSaveExternDocumentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveExternDocument;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveOrgunitDocument
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Documents\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Documents\StructType\SaveOrgunitDocumentRequest $paramSaveOrgunitDocumentRequest
     * @return \Pggns\MidocoApi\Documents\StructType\SaveOrgunitDocumentResponse|bool
     */
    public function saveOrgunitDocument(\Pggns\MidocoApi\Documents\StructType\SaveOrgunitDocumentRequest $paramSaveOrgunitDocumentRequest)
    {
        try {
            $this->setResult($resultSaveOrgunitDocument = $this->getSoapClient()->__soapCall('saveOrgunitDocument', [
                $paramSaveOrgunitDocumentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveOrgunitDocument;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Documents\StructType\SaveDocumentRepositoryResponse|\Pggns\MidocoApi\Documents\StructType\SaveExternDocumentResponse|\Pggns\MidocoApi\Documents\StructType\SaveOrgunitDocumentResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
