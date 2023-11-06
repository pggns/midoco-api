<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Deposit ServiceType
 * @subpackage Services
 */
class Deposit extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Pggns\MidocoApi\Orderlists\ServiceType\Deposit
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Orderlists\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named depositList
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Orderlists\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Orderlists\StructType\DepositListRequest $paramDepositListRequest
     * @return \Pggns\MidocoApi\Orderlists\StructType\DepositListResponse|bool
     */
    public function depositList(\Pggns\MidocoApi\Orderlists\StructType\DepositListRequest $paramDepositListRequest)
    {
        try {
            $this->setResult($resultDepositList = $this->getSoapClient()->__soapCall('depositList', [
                $paramDepositListRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDepositList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named depositListCsvExport
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Orderlists\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Orderlists\StructType\DepositListCsvExportRequest $paramDepositListCsvExportRequest
     * @return \Pggns\MidocoApi\Orderlists\StructType\DepositListCsvExportResponse|bool
     */
    public function depositListCsvExport(\Pggns\MidocoApi\Orderlists\StructType\DepositListCsvExportRequest $paramDepositListCsvExportRequest)
    {
        try {
            $this->setResult($resultDepositListCsvExport = $this->getSoapClient()->__soapCall('depositListCsvExport', [
                $paramDepositListCsvExportRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDepositListCsvExport;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Orderlists\StructType\DepositListCsvExportResponse|\Pggns\MidocoApi\Orderlists\StructType\DepositListResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
