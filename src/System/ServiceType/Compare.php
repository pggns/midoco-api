<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\System\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Compare ServiceType
 * @subpackage Services
 */
class Compare extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Api\System\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Api\System\ServiceType\Compare
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Api\System\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named compareDatastoreEntry
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\System\StructType\CompareDatastoreEntryRequest $paramCompareDatastoreEntryRequest
     * @return \Pggns\MidocoApi\Api\System\StructType\CompareDatastoreEntryResponse|bool
     */
    public function compareDatastoreEntry(\Pggns\MidocoApi\Api\System\StructType\CompareDatastoreEntryRequest $paramCompareDatastoreEntryRequest)
    {
        try {
            $this->setResult($resultCompareDatastoreEntry = $this->getSoapClient()->__soapCall('compareDatastoreEntry', [
                $paramCompareDatastoreEntryRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultCompareDatastoreEntry;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Api\System\StructType\CompareDatastoreEntryResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
