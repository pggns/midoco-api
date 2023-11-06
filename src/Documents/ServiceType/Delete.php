<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Delete ServiceType
 * @subpackage Services
 */
class Delete extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Pggns\MidocoApi\Documents\ServiceType\Delete
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Documents\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named deleteDocumentRepository
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Documents\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Documents\StructType\DeleteDocumentRepositoryRequest $paramDeleteDocumentRepositoryRequest
     * @return \Pggns\MidocoApi\Documents\StructType\DeleteDocumentRepositoryResponse|bool
     */
    public function deleteDocumentRepository(\Pggns\MidocoApi\Documents\StructType\DeleteDocumentRepositoryRequest $paramDeleteDocumentRepositoryRequest)
    {
        try {
            $this->setResult($resultDeleteDocumentRepository = $this->getSoapClient()->__soapCall('deleteDocumentRepository', [
                $paramDeleteDocumentRepositoryRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteDocumentRepository;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteExternDocument
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Documents\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Documents\StructType\DeleteExternDocumentRequest $paramDeleteExternDocumentRequest
     * @return \Pggns\MidocoApi\Documents\StructType\DeleteExternDocumentResponse|bool
     */
    public function deleteExternDocument(\Pggns\MidocoApi\Documents\StructType\DeleteExternDocumentRequest $paramDeleteExternDocumentRequest)
    {
        try {
            $this->setResult($resultDeleteExternDocument = $this->getSoapClient()->__soapCall('deleteExternDocument', [
                $paramDeleteExternDocumentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteExternDocument;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteOrgunitDocument
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Documents\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Documents\StructType\DeleteOrgunitDocumentRequest $paramDeleteOrgunitDocumentRequest
     * @return \Pggns\MidocoApi\Documents\StructType\DeleteOrgunitDocumentResponse|bool
     */
    public function deleteOrgunitDocument(\Pggns\MidocoApi\Documents\StructType\DeleteOrgunitDocumentRequest $paramDeleteOrgunitDocumentRequest)
    {
        try {
            $this->setResult($resultDeleteOrgunitDocument = $this->getSoapClient()->__soapCall('deleteOrgunitDocument', [
                $paramDeleteOrgunitDocumentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteOrgunitDocument;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Documents\StructType\DeleteDocumentRepositoryResponse|\Pggns\MidocoApi\Documents\StructType\DeleteExternDocumentResponse|\Pggns\MidocoApi\Documents\StructType\DeleteOrgunitDocumentResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
