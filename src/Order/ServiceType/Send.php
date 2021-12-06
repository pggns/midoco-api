<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Send ServiceType
 * @subpackage Services
 */
class Send extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Api\Order\ServiceType\Send
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named sendBatchInvoiceEmail
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\SendBatchInvoiceEmailRequest $paramSendBatchInvoiceEmailRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\SendBatchInvoiceEmailResponse|bool
     */
    public function sendBatchInvoiceEmail(\Pggns\MidocoApi\Api\Order\StructType\SendBatchInvoiceEmailRequest $paramSendBatchInvoiceEmailRequest)
    {
        try {
            $this->setResult($resultSendBatchInvoiceEmail = $this->getSoapClient()->__soapCall('sendBatchInvoiceEmail', [
                $paramSendBatchInvoiceEmailRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSendBatchInvoiceEmail;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named sendInvoiceByEMail
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\SendInvoiceByEMailRequest $paramSendInvoiceByEMailRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\SendInvoiceByEMailResponse|bool
     */
    public function sendInvoiceByEMail(\Pggns\MidocoApi\Api\Order\StructType\SendInvoiceByEMailRequest $paramSendInvoiceByEMailRequest)
    {
        try {
            $this->setResult($resultSendInvoiceByEMail = $this->getSoapClient()->__soapCall('sendInvoiceByEMail', [
                $paramSendInvoiceByEMailRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSendInvoiceByEMail;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Api\Order\StructType\SendBatchInvoiceEmailResponse|\Pggns\MidocoApi\Api\Order\StructType\SendInvoiceByEMailResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
