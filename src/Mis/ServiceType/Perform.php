<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Perform ServiceType
 * @subpackage Services
 */
class Perform extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Pggns\MidocoApi\Mis\ServiceType\Perform
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named performEmailCampaign
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Mis\StructType\PerformEmailCampaignRequest $paramPerformEmailCampaignRequest
     * @return \Pggns\MidocoApi\Mis\StructType\PerformEmailCampaignResponse|bool
     */
    public function performEmailCampaign(\Pggns\MidocoApi\Mis\StructType\PerformEmailCampaignRequest $paramPerformEmailCampaignRequest)
    {
        try {
            $this->setResult($resultPerformEmailCampaign = $this->getSoapClient()->__soapCall('performEmailCampaign', [
                $paramPerformEmailCampaignRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultPerformEmailCampaign;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named performSMSCampaign
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Mis\StructType\PerformSMSCampaignRequest $paramPerformSMSCampaignRequest
     * @return \Pggns\MidocoApi\Mis\StructType\PerformSMSCampaignResponse|bool
     */
    public function performSMSCampaign(\Pggns\MidocoApi\Mis\StructType\PerformSMSCampaignRequest $paramPerformSMSCampaignRequest)
    {
        try {
            $this->setResult($resultPerformSMSCampaign = $this->getSoapClient()->__soapCall('performSMSCampaign', [
                $paramPerformSMSCampaignRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultPerformSMSCampaign;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named performLetterCampaign
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Mis\StructType\PerformLetterCampaignRequest $paramPerformLetterCampaignRequest
     * @return \Pggns\MidocoApi\Mis\StructType\PerformLetterCampaignResponse|bool
     */
    public function performLetterCampaign(\Pggns\MidocoApi\Mis\StructType\PerformLetterCampaignRequest $paramPerformLetterCampaignRequest)
    {
        try {
            $this->setResult($resultPerformLetterCampaign = $this->getSoapClient()->__soapCall('performLetterCampaign', [
                $paramPerformLetterCampaignRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultPerformLetterCampaign;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Mis\StructType\PerformEmailCampaignResponse|\Pggns\MidocoApi\Mis\StructType\PerformLetterCampaignResponse|\Pggns\MidocoApi\Mis\StructType\PerformSMSCampaignResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
