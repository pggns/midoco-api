<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Search ServiceType
 * @subpackage Services
 */
class Search extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Pggns\MidocoApi\Documents\ServiceType\Search
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Documents\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named searchExternDocument
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Documents\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Documents\StructType\SearchExternDocumentRequest $paramSearchExternDocumentRequest
     * @return \Pggns\MidocoApi\Documents\StructType\SearchExternDocumentResponse|bool
     */
    public function searchExternDocument(\Pggns\MidocoApi\Documents\StructType\SearchExternDocumentRequest $paramSearchExternDocumentRequest)
    {
        try {
            $this->setResult($resultSearchExternDocument = $this->getSoapClient()->__soapCall('searchExternDocument', [
                $paramSearchExternDocumentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchExternDocument;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Documents\StructType\SearchExternDocumentResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
