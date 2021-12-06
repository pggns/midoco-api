<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\OrderglobalSD\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Tokenize ServiceType
 * @subpackage Services
 */
class Tokenize extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Api\OrderglobalSD\ServiceType\Tokenize
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named tokenizeAllDbiData
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderglobalSD\StructType\TokenizeAllDbiDataRequest $paramTokenizeAllDbiDataRequest
     * @return \Pggns\MidocoApi\Api\OrderglobalSD\StructType\TokenizeAllDbiDataResponse|bool
     */
    public function tokenizeAllDbiData(\Pggns\MidocoApi\Api\OrderglobalSD\StructType\TokenizeAllDbiDataRequest $paramTokenizeAllDbiDataRequest)
    {
        try {
            $this->setResult($resultTokenizeAllDbiData = $this->getSoapClient()->__soapCall('tokenizeAllDbiData', [
                $paramTokenizeAllDbiDataRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultTokenizeAllDbiData;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Api\OrderglobalSD\StructType\TokenizeAllDbiDataResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
