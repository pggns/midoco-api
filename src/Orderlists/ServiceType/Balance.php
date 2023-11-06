<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Balance ServiceType
 * @subpackage Services
 */
class Balance extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Pggns\MidocoApi\Orderlists\ServiceType\Balance
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Orderlists\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named balanceList
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Orderlists\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Orderlists\StructType\BalanceListRequest $paramBalanceListRequest
     * @return \Pggns\MidocoApi\Orderlists\StructType\BalanceListResponse|bool
     */
    public function balanceList(\Pggns\MidocoApi\Orderlists\StructType\BalanceListRequest $paramBalanceListRequest)
    {
        try {
            $this->setResult($resultBalanceList = $this->getSoapClient()->__soapCall('balanceList', [
                $paramBalanceListRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultBalanceList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Orderlists\StructType\BalanceListResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
