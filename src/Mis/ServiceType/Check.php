<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Check ServiceType
 * @subpackage Services
 */
class Check extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Mis\ServiceType\Check
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named checkEmailReachability
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Mis\StructType\CheckEmailReachabilityRequest $paramCheckEmailReachabilityRequest
     * @return \Pggns\MidocoApi\Mis\StructType\CheckEmailReachabilityResponse|bool
     */
    public function checkEmailReachability(\Pggns\MidocoApi\Mis\StructType\CheckEmailReachabilityRequest $paramCheckEmailReachabilityRequest)
    {
        try {
            $this->setResult($resultCheckEmailReachability = $this->getSoapClient()->__soapCall('checkEmailReachability', [
                $paramCheckEmailReachabilityRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultCheckEmailReachability;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named checkSMSReachability
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Mis\StructType\CheckSMSReachabilityRequest $paramCheckSMSReachabilityRequest
     * @return \Pggns\MidocoApi\Mis\StructType\CheckSMSReachabilityResponse|bool
     */
    public function checkSMSReachability(\Pggns\MidocoApi\Mis\StructType\CheckSMSReachabilityRequest $paramCheckSMSReachabilityRequest)
    {
        try {
            $this->setResult($resultCheckSMSReachability = $this->getSoapClient()->__soapCall('checkSMSReachability', [
                $paramCheckSMSReachabilityRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultCheckSMSReachability;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named checkLetterReachability
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Mis\StructType\CheckLetterReachabilityRequest $paramCheckLetterReachabilityRequest
     * @return \Pggns\MidocoApi\Mis\StructType\CheckLetterReachabilityResponse|bool
     */
    public function checkLetterReachability(\Pggns\MidocoApi\Mis\StructType\CheckLetterReachabilityRequest $paramCheckLetterReachabilityRequest)
    {
        try {
            $this->setResult($resultCheckLetterReachability = $this->getSoapClient()->__soapCall('checkLetterReachability', [
                $paramCheckLetterReachabilityRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultCheckLetterReachability;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Mis\StructType\CheckEmailReachabilityResponse|\Pggns\MidocoApi\Mis\StructType\CheckLetterReachabilityResponse|\Pggns\MidocoApi\Mis\StructType\CheckSMSReachabilityResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
