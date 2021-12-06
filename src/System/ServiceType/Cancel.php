<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\System\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Cancel ServiceType
 * @subpackage Services
 */
class Cancel extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Api\System\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Api\System\ServiceType\Cancel
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Api\System\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named cancelLongOperation
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\System\StructType\CancelLongOperationRequest $paramCancelLongOperationRequest
     * @return \Pggns\MidocoApi\Api\System\StructType\CancelLongOperationResponse|bool
     */
    public function cancelLongOperation(\Pggns\MidocoApi\Api\System\StructType\CancelLongOperationRequest $paramCancelLongOperationRequest)
    {
        try {
            $this->setResult($resultCancelLongOperation = $this->getSoapClient()->__soapCall('cancelLongOperation', [
                $paramCancelLongOperationRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultCancelLongOperation;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named cancelTssClient
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\System\StructType\CancelTssClientRequest $paramCancelTssClientRequest
     * @return \Pggns\MidocoApi\Api\System\StructType\CancelTssClientResponse|bool
     */
    public function cancelTssClient(\Pggns\MidocoApi\Api\System\StructType\CancelTssClientRequest $paramCancelTssClientRequest)
    {
        try {
            $this->setResult($resultCancelTssClient = $this->getSoapClient()->__soapCall('cancelTssClient', [
                $paramCancelTssClientRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultCancelTssClient;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Api\System\StructType\CancelLongOperationResponse|\Pggns\MidocoApi\Api\System\StructType\CancelTssClientResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
