<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Create ServiceType
 * @subpackage Services
 */
class Create extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Api\Crm\ServiceType\Create
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named createCustomerLetter
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\CreateCustomerLetterRequest $paramCreateCustomerLetterRequest
     * @return \Pggns\MidocoApi\Api\Crm\StructType\CreateCustomerLetterResponse|bool
     */
    public function createCustomerLetter(\Pggns\MidocoApi\Api\Crm\StructType\CreateCustomerLetterRequest $paramCreateCustomerLetterRequest)
    {
        try {
            $this->setResult($resultCreateCustomerLetter = $this->getSoapClient()->__soapCall('createCustomerLetter', [
                $paramCreateCustomerLetterRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateCustomerLetter;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named createAutomaticCrmNotice
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\CreateAutomaticCrmNoticeRequest $paramCreateAutomaticCrmNoticeRequest
     * @return \Pggns\MidocoApi\Api\Crm\StructType\CreateAutomaticCrmNoticeResponse|bool
     */
    public function createAutomaticCrmNotice(\Pggns\MidocoApi\Api\Crm\StructType\CreateAutomaticCrmNoticeRequest $paramCreateAutomaticCrmNoticeRequest)
    {
        try {
            $this->setResult($resultCreateAutomaticCrmNotice = $this->getSoapClient()->__soapCall('createAutomaticCrmNotice', [
                $paramCreateAutomaticCrmNoticeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateAutomaticCrmNotice;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named createExternalCampaign
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoExternalCampaign $paramCreateExternalCampaignRequest
     * @return \Pggns\MidocoApi\Api\Crm\StructType\CreateExternalCampaignResponseType|bool
     */
    public function createExternalCampaign(\Pggns\MidocoApi\Api\Crm\StructType\MidocoExternalCampaign $paramCreateExternalCampaignRequest)
    {
        try {
            $this->setResult($resultCreateExternalCampaign = $this->getSoapClient()->__soapCall('createExternalCampaign', [
                $paramCreateExternalCampaignRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultCreateExternalCampaign;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Api\Crm\StructType\CreateAutomaticCrmNoticeResponse|\Pggns\MidocoApi\Api\Crm\StructType\CreateCustomerLetterResponse|\Pggns\MidocoApi\Api\Crm\StructType\CreateExternalCampaignResponseType
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
