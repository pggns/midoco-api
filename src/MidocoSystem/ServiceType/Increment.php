<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Increment ServiceType
 * @subpackage Services
 */
class Increment extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Pggns\MidocoApi\MidocoSystem\ServiceType\Increment
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\MidocoSystem\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named incrementSequence
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\MidocoSystem\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\IncrementSequenceRequest $paramIncrementSequenceRequest
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\IncrementSequenceResponse|bool
     */
    public function incrementSequence(\Pggns\MidocoApi\MidocoSystem\StructType\IncrementSequenceRequest $paramIncrementSequenceRequest)
    {
        try {
            $this->setResult($resultIncrementSequence = $this->getSoapClient()->__soapCall('incrementSequence', [
                $paramIncrementSequenceRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultIncrementSequence;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\IncrementSequenceResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
