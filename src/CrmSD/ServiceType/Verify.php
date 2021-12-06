<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Verify ServiceType
 * @subpackage Services
 */
class Verify extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Api\CrmSD\ServiceType\Verify
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named verifyDictionaryNames
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\VerifyDictionaryNamesRequest $paramVerifyDictionaryNamesRequest
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\VerifyDictionaryNamesResponse|bool
     */
    public function verifyDictionaryNames(\Pggns\MidocoApi\Api\CrmSD\StructType\VerifyDictionaryNamesRequest $paramVerifyDictionaryNamesRequest)
    {
        try {
            $this->setResult($resultVerifyDictionaryNames = $this->getSoapClient()->__soapCall('verifyDictionaryNames', [
                $paramVerifyDictionaryNamesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultVerifyDictionaryNames;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\VerifyDictionaryNamesResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
