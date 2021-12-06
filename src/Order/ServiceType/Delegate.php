<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Delegate ServiceType
 * @subpackage Services
 */
class Delegate extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Api\Order\ServiceType\Delegate
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named delegatePrepareAgencySettlement
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\DelegatePrepareAgencySettlementRequest $paramDelegatePrepareAgencySettlementRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\DelegatePrepareAgencySettlementResponse|bool
     */
    public function delegatePrepareAgencySettlement(\Pggns\MidocoApi\Api\Order\StructType\DelegatePrepareAgencySettlementRequest $paramDelegatePrepareAgencySettlementRequest)
    {
        try {
            $this->setResult($resultDelegatePrepareAgencySettlement = $this->getSoapClient()->__soapCall('delegatePrepareAgencySettlement', [
                $paramDelegatePrepareAgencySettlementRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDelegatePrepareAgencySettlement;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Api\Order\StructType\DelegatePrepareAgencySettlementResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
