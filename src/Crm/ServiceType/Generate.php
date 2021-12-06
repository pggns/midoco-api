<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Generate ServiceType
 * @subpackage Services
 */
class Generate extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Crm\ServiceType\Generate
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named generateMandateReference
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GenerateMandateReferenceRequest $paramGenerateMandateReferenceRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GenerateMandateReferenceResponse|bool
     */
    public function generateMandateReference(\Pggns\MidocoApi\Crm\StructType\GenerateMandateReferenceRequest $paramGenerateMandateReferenceRequest)
    {
        try {
            $this->setResult($resultGenerateMandateReference = $this->getSoapClient()->__soapCall('generateMandateReference', [
                $paramGenerateMandateReferenceRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGenerateMandateReference;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named generateMidocoMandate
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GenerateMidocoMandateRequest $paramGenerateMidocoMandateRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GenerateMidocoMandateResponse|bool
     */
    public function generateMidocoMandate(\Pggns\MidocoApi\Crm\StructType\GenerateMidocoMandateRequest $paramGenerateMidocoMandateRequest)
    {
        try {
            $this->setResult($resultGenerateMidocoMandate = $this->getSoapClient()->__soapCall('generateMidocoMandate', [
                $paramGenerateMidocoMandateRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGenerateMidocoMandate;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Crm\StructType\GenerateMandateReferenceResponse|\Pggns\MidocoApi\Crm\StructType\GenerateMidocoMandateResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
