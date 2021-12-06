<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for List ServiceType
 * @subpackage Services
 */
class _List extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Orderlists\ServiceType\_List
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Orderlists\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named listFIBUInvRbBalance
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Orderlists\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Orderlists\StructType\ListFIBUInvRbBalanceRequest $paramListFIBUInvRbBalanceRequest
     * @return \Pggns\MidocoApi\Orderlists\StructType\ListFIBUInvRbBalanceResponse|bool
     */
    public function listFIBUInvRbBalance(\Pggns\MidocoApi\Orderlists\StructType\ListFIBUInvRbBalanceRequest $paramListFIBUInvRbBalanceRequest)
    {
        try {
            $this->setResult($resultListFIBUInvRbBalance = $this->getSoapClient()->__soapCall('listFIBUInvRbBalance', [
                $paramListFIBUInvRbBalanceRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultListFIBUInvRbBalance;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Orderlists\StructType\ListFIBUInvRbBalanceResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
