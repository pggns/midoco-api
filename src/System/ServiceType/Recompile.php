<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\System\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Recompile ServiceType
 * @subpackage Services
 */
class Recompile extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Api\System\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Api\System\ServiceType\Recompile
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Api\System\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named recompileRulesets
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\System\StructType\RecompileRulesetsRequest $paramRecompileRulesetsRequest
     * @return \Pggns\MidocoApi\Api\System\StructType\RecompileRulesetsResponse|bool
     */
    public function recompileRulesets(\Pggns\MidocoApi\Api\System\StructType\RecompileRulesetsRequest $paramRecompileRulesetsRequest)
    {
        try {
            $this->setResult($resultRecompileRulesets = $this->getSoapClient()->__soapCall('recompileRulesets', [
                $paramRecompileRulesetsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultRecompileRulesets;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Api\System\StructType\RecompileRulesetsResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
