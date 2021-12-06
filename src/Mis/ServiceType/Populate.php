<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Populate ServiceType
 * @subpackage Services
 */
class Populate extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Mis\ServiceType\Populate
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named populateMisTimeTables
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Mis\StructType\PopulateMisTimeTablesRequest $paramPopulateMisTimeTablesRequest
     * @return \Pggns\MidocoApi\Mis\StructType\PopulateMisTimeTablesResponse|bool
     */
    public function populateMisTimeTables(\Pggns\MidocoApi\Mis\StructType\PopulateMisTimeTablesRequest $paramPopulateMisTimeTablesRequest)
    {
        try {
            $this->setResult($resultPopulateMisTimeTables = $this->getSoapClient()->__soapCall('populateMisTimeTables', [
                $paramPopulateMisTimeTablesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultPopulateMisTimeTables;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Mis\StructType\PopulateMisTimeTablesResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
