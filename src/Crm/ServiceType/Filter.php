<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Filter ServiceType
 * @subpackage Services
 */
class Filter extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Api\Crm\ServiceType\Filter
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named filterSettlementCandidates
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\FilterSettlementCandidatesRequest $paramFilterSettlementCandidatesRequest
     * @return \Pggns\MidocoApi\Api\Crm\StructType\FilterSettlementCandidatesResponse|bool
     */
    public function filterSettlementCandidates(\Pggns\MidocoApi\Api\Crm\StructType\FilterSettlementCandidatesRequest $paramFilterSettlementCandidatesRequest)
    {
        try {
            $this->setResult($resultFilterSettlementCandidates = $this->getSoapClient()->__soapCall('filterSettlementCandidates', [
                $paramFilterSettlementCandidatesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultFilterSettlementCandidates;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named filterMidocoSettlementCandidates
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\FilterMidocoSettlementCandidatesRequest $paramFilterMidocoSettlementCandidatesRequest
     * @return \Pggns\MidocoApi\Api\Crm\StructType\FilterMidocoSettlementCandidatesResponse|bool
     */
    public function filterMidocoSettlementCandidates(\Pggns\MidocoApi\Api\Crm\StructType\FilterMidocoSettlementCandidatesRequest $paramFilterMidocoSettlementCandidatesRequest)
    {
        try {
            $this->setResult($resultFilterMidocoSettlementCandidates = $this->getSoapClient()->__soapCall('filterMidocoSettlementCandidates', [
                $paramFilterMidocoSettlementCandidatesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultFilterMidocoSettlementCandidates;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Api\Crm\StructType\FilterMidocoSettlementCandidatesResponse|\Pggns\MidocoApi\Api\Crm\StructType\FilterSettlementCandidatesResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
