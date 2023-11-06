<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Update ServiceType
 * @subpackage Services
 */
class Update extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Pggns\MidocoApi\Documents\ServiceType\Update
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Documents\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named updateExternDocumentDesc
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Documents\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Documents\StructType\UpdateExternDocumentDescRequest $paramUpdateExternDocumentDescRequest
     * @return \Pggns\MidocoApi\Documents\StructType\UpdateExternDocumentDescResponse|bool
     */
    public function updateExternDocumentDesc(\Pggns\MidocoApi\Documents\StructType\UpdateExternDocumentDescRequest $paramUpdateExternDocumentDescRequest)
    {
        try {
            $this->setResult($resultUpdateExternDocumentDesc = $this->getSoapClient()->__soapCall('updateExternDocumentDesc', [
                $paramUpdateExternDocumentDescRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateExternDocumentDesc;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Documents\StructType\UpdateExternDocumentDescResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
