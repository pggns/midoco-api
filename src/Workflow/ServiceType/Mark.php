<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Workflow\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Mark ServiceType
 * @subpackage Services
 */
class Mark extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Api\Workflow\ServiceType\Mark
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Api\Workflow\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named markVoidedGlobalNoticeComment
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\MarkVoidedGlobalNoticeCommentRequest $paramMarkVoidedGlobalNoticeCommentRequest
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\MarkVoidedGlobalNoticeCommentResponse|bool
     */
    public function markVoidedGlobalNoticeComment(\Pggns\MidocoApi\Api\Workflow\StructType\MarkVoidedGlobalNoticeCommentRequest $paramMarkVoidedGlobalNoticeCommentRequest)
    {
        try {
            $this->setResult($resultMarkVoidedGlobalNoticeComment = $this->getSoapClient()->__soapCall('markVoidedGlobalNoticeComment', [
                $paramMarkVoidedGlobalNoticeCommentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultMarkVoidedGlobalNoticeComment;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\MarkVoidedGlobalNoticeCommentResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
