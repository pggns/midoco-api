<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Ar ServiceType
 * @subpackage Services
 */
class Ar extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Api\Orderlists\ServiceType\Ar
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named arErList
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\ArErListRequest $paramArErListRequest
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\ArErListResponse|bool
     */
    public function arErList(\Pggns\MidocoApi\Api\Orderlists\StructType\ArErListRequest $paramArErListRequest)
    {
        try {
            $this->setResult($resultArErList = $this->getSoapClient()->__soapCall('arErList', [
                $paramArErListRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultArErList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named arErCsvExport
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\ArErCsvExportRequest $paramArErCsvExportRequest
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\ArErCsvExportResponse|bool
     */
    public function arErCsvExport(\Pggns\MidocoApi\Api\Orderlists\StructType\ArErCsvExportRequest $paramArErCsvExportRequest)
    {
        try {
            $this->setResult($resultArErCsvExport = $this->getSoapClient()->__soapCall('arErCsvExport', [
                $paramArErCsvExportRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultArErCsvExport;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\ArErCsvExportResponse|\Pggns\MidocoApi\Api\Orderlists\StructType\ArErListResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
