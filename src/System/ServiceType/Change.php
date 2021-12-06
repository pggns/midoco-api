<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\System\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Change ServiceType
 * @subpackage Services
 */
class Change extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\System\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\System\ServiceType\Change
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\System\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named changeUserPassword
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\System\StructType\ChangeUserPasswordRequest $paramChangeUserPasswordRequest
     * @return \Pggns\MidocoApi\System\StructType\ChangeUserPasswordResponse|bool
     */
    public function changeUserPassword(\Pggns\MidocoApi\System\StructType\ChangeUserPasswordRequest $paramChangeUserPasswordRequest)
    {
        try {
            $this->setResult($resultChangeUserPassword = $this->getSoapClient()->__soapCall('changeUserPassword', [
                $paramChangeUserPasswordRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultChangeUserPassword;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\System\StructType\ChangeUserPasswordResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
