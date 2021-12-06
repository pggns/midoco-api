<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Execute ServiceType
 * @subpackage Services
 */
class Execute extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Mis\ServiceType\Execute
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named executeQueryWS
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Mis\StructType\ExecuteQueryReqType $paramExecuteQueryWSRequest
     * @return \Pggns\MidocoApi\Mis\StructType\ExecuteQueryWSResponse|bool
     */
    public function executeQueryWS(\Pggns\MidocoApi\Mis\StructType\ExecuteQueryReqType $paramExecuteQueryWSRequest)
    {
        try {
            $this->setResult($resultExecuteQueryWS = $this->getSoapClient()->__soapCall('executeQueryWS', [
                $paramExecuteQueryWSRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultExecuteQueryWS;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Mis\StructType\ExecuteQueryWSResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
