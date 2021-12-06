<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\ServiceType;

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
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\OrderSD\ServiceType\Update
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named updateFeeGroupComment
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\UpdateFeeGroupCommentRequest $paramUpdateFeeGroupCommentRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\UpdateFeeGroupCommentResponse|bool
     */
    public function updateFeeGroupComment(\Pggns\MidocoApi\OrderSD\StructType\UpdateFeeGroupCommentRequest $paramUpdateFeeGroupCommentRequest)
    {
        try {
            $this->setResult($resultUpdateFeeGroupComment = $this->getSoapClient()->__soapCall('updateFeeGroupComment', [
                $paramUpdateFeeGroupCommentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateFeeGroupComment;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\OrderSD\StructType\UpdateFeeGroupCommentResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
