<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for De ServiceType
 * @subpackage Services
 */
class De extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Pggns\MidocoApi\OrderSD\ServiceType\De
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named deAssignMidocoRuleSet
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\DeAssignMidocoRuleRequest $paramDeAssignMidocoRuleRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeAssignMidocoRuleResponse|bool
     */
    public function deAssignMidocoRuleSet(\Pggns\MidocoApi\OrderSD\StructType\DeAssignMidocoRuleRequest $paramDeAssignMidocoRuleRequest)
    {
        try {
            $this->setResult($resultDeAssignMidocoRuleSet = $this->getSoapClient()->__soapCall('deAssignMidocoRuleSet', [
                $paramDeAssignMidocoRuleRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeAssignMidocoRuleSet;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeAssignMidocoRuleResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
