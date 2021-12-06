<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\System\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Create ServiceType
 * @subpackage Services
 */
class Create extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\System\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\System\ServiceType\Create
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\System\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named createUserSession
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\System\StructType\CreateUserSessionRequest $paramCreateUserSessionRequest
     * @return \Pggns\MidocoApi\System\StructType\CreateUserSessionResponse|bool
     */
    public function createUserSession(\Pggns\MidocoApi\System\StructType\CreateUserSessionRequest $paramCreateUserSessionRequest)
    {
        try {
            $this->setResult($resultCreateUserSession = $this->getSoapClient()->__soapCall('createUserSession', [
                $paramCreateUserSessionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateUserSession;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named createSequenceRangeFromPool
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\System\StructType\CreateSequenceRangeFromPoolRequest $paramCreateSequenceRangeFromPoolRequest
     * @return \Pggns\MidocoApi\System\StructType\CreateSequenceRangeFromPoolResponse|bool
     */
    public function createSequenceRangeFromPool(\Pggns\MidocoApi\System\StructType\CreateSequenceRangeFromPoolRequest $paramCreateSequenceRangeFromPoolRequest)
    {
        try {
            $this->setResult($resultCreateSequenceRangeFromPool = $this->getSoapClient()->__soapCall('createSequenceRangeFromPool', [
                $paramCreateSequenceRangeFromPoolRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateSequenceRangeFromPool;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named createTssClient
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\System\StructType\CreateTssClientRequest $paramCreateTssClientRequest
     * @return \Pggns\MidocoApi\System\StructType\CreateTssClientResponse|bool
     */
    public function createTssClient(\Pggns\MidocoApi\System\StructType\CreateTssClientRequest $paramCreateTssClientRequest)
    {
        try {
            $this->setResult($resultCreateTssClient = $this->getSoapClient()->__soapCall('createTssClient', [
                $paramCreateTssClientRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateTssClient;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\System\StructType\CreateSequenceRangeFromPoolResponse|\Pggns\MidocoApi\System\StructType\CreateTssClientResponse|\Pggns\MidocoApi\System\StructType\CreateUserSessionResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
