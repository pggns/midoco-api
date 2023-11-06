<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Add ServiceType
 * @subpackage Services
 */
class Add extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Pggns\MidocoApi\Crm\ServiceType\Add
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named addHistoryEntry
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\AddHistoryEntryRequest $paramAddHistoryEntryRequest
     * @return \Pggns\MidocoApi\Crm\StructType\AddHistoryEntryResponse|bool
     */
    public function addHistoryEntry(\Pggns\MidocoApi\Crm\StructType\AddHistoryEntryRequest $paramAddHistoryEntryRequest)
    {
        try {
            $this->setResult($resultAddHistoryEntry = $this->getSoapClient()->__soapCall('addHistoryEntry', [
                $paramAddHistoryEntryRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultAddHistoryEntry;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named addAgencyCommission
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\AddAgencyCommissionRequest $paramAddAgencyCommissionRequest
     * @return \Pggns\MidocoApi\Crm\StructType\AddAgencyCommissionResponse|bool
     */
    public function addAgencyCommission(\Pggns\MidocoApi\Crm\StructType\AddAgencyCommissionRequest $paramAddAgencyCommissionRequest)
    {
        try {
            $this->setResult($resultAddAgencyCommission = $this->getSoapClient()->__soapCall('addAgencyCommission', [
                $paramAddAgencyCommissionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultAddAgencyCommission;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Crm\StructType\AddAgencyCommissionResponse|\Pggns\MidocoApi\Crm\StructType\AddHistoryEntryResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
