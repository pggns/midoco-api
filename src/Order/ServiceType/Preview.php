<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Preview ServiceType
 * @subpackage Services
 */
class Preview extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Api\Order\ServiceType\Preview
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named previewBillingDocument
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\PreviewBillingDocumentRequest $paramPreviewBillingDocumentRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\PreviewBillingDocumentResponse|bool
     */
    public function previewBillingDocument(\Pggns\MidocoApi\Api\Order\StructType\PreviewBillingDocumentRequest $paramPreviewBillingDocumentRequest)
    {
        try {
            $this->setResult($resultPreviewBillingDocument = $this->getSoapClient()->__soapCall('previewBillingDocument', [
                $paramPreviewBillingDocumentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultPreviewBillingDocument;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named previewCashbookForCrtUser
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\PreviewCashbookForCrtUserRequest $paramPreviewCashbookForCrtUserRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\PreviewCashbookForCrtUserResponse|bool
     */
    public function previewCashbookForCrtUser(\Pggns\MidocoApi\Api\Order\StructType\PreviewCashbookForCrtUserRequest $paramPreviewCashbookForCrtUserRequest)
    {
        try {
            $this->setResult($resultPreviewCashbookForCrtUser = $this->getSoapClient()->__soapCall('previewCashbookForCrtUser', [
                $paramPreviewCashbookForCrtUserRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultPreviewCashbookForCrtUser;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Api\Order\StructType\PreviewBillingDocumentResponse|\Pggns\MidocoApi\Api\Order\StructType\PreviewCashbookForCrtUserResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
