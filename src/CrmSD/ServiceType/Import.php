<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Import ServiceType
 * @subpackage Services
 */
class Import extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Api\CrmSD\ServiceType\Import
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named importDictionaryNames
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\ImportDictionaryNamesRequest $paramImportDictionaryNamesRequest
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\ImportDictionaryNamesResponse|bool
     */
    public function importDictionaryNames(\Pggns\MidocoApi\Api\CrmSD\StructType\ImportDictionaryNamesRequest $paramImportDictionaryNamesRequest)
    {
        try {
            $this->setResult($resultImportDictionaryNames = $this->getSoapClient()->__soapCall('importDictionaryNames', [
                $paramImportDictionaryNamesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultImportDictionaryNames;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\ImportDictionaryNamesResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
