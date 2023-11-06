<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\ServiceType;

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
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Pggns\MidocoApi\Crm\ServiceType\Filter
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named filterSettlementCandidates
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\FilterSettlementCandidatesRequest $paramFilterSettlementCandidatesRequest
     * @return \Pggns\MidocoApi\Crm\StructType\FilterSettlementCandidatesResponse|bool
     */
    public function filterSettlementCandidates(\Pggns\MidocoApi\Crm\StructType\FilterSettlementCandidatesRequest $paramFilterSettlementCandidatesRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\FilterMidocoSettlementCandidatesRequest $paramFilterMidocoSettlementCandidatesRequest
     * @return \Pggns\MidocoApi\Crm\StructType\FilterMidocoSettlementCandidatesResponse|bool
     */
    public function filterMidocoSettlementCandidates(\Pggns\MidocoApi\Crm\StructType\FilterMidocoSettlementCandidatesRequest $paramFilterMidocoSettlementCandidatesRequest)
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
     * @return \Pggns\MidocoApi\Crm\StructType\FilterMidocoSettlementCandidatesResponse|\Pggns\MidocoApi\Crm\StructType\FilterSettlementCandidatesResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
