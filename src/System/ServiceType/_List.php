<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\System\ServiceType;

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
     * @param \Pggns\MidocoApi\Api\System\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Api\System\ServiceType\_List
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Api\System\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named listMidocoOrgTemplateText
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\System\StructType\ListMidocoOrgTemplateTextRequest $paramListMidocoOrgTemplateTextRequest
     * @return \Pggns\MidocoApi\Api\System\StructType\ListMidocoOrgTemplateTextResponse|bool
     */
    public function listMidocoOrgTemplateText(\Pggns\MidocoApi\Api\System\StructType\ListMidocoOrgTemplateTextRequest $paramListMidocoOrgTemplateTextRequest)
    {
        try {
            $this->setResult($resultListMidocoOrgTemplateText = $this->getSoapClient()->__soapCall('listMidocoOrgTemplateText', [
                $paramListMidocoOrgTemplateTextRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultListMidocoOrgTemplateText;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named listPrintSelects
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\System\StructType\ListPrintSelectsRequest $paramListPrintSelectsRequest
     * @return \Pggns\MidocoApi\Api\System\StructType\ListPrintSelectsResponse|bool
     */
    public function listPrintSelects(\Pggns\MidocoApi\Api\System\StructType\ListPrintSelectsRequest $paramListPrintSelectsRequest)
    {
        try {
            $this->setResult($resultListPrintSelects = $this->getSoapClient()->__soapCall('listPrintSelects', [
                $paramListPrintSelectsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultListPrintSelects;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named listTssClient
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\System\StructType\ListTssClientRequest $paramListTssClientRequest
     * @return \Pggns\MidocoApi\Api\System\StructType\ListTssClientResponse|bool
     */
    public function listTssClient(\Pggns\MidocoApi\Api\System\StructType\ListTssClientRequest $paramListTssClientRequest)
    {
        try {
            $this->setResult($resultListTssClient = $this->getSoapClient()->__soapCall('listTssClient', [
                $paramListTssClientRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultListTssClient;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Api\System\StructType\ListMidocoOrgTemplateTextResponse|\Pggns\MidocoApi\Api\System\StructType\ListPrintSelectsResponse|\Pggns\MidocoApi\Api\System\StructType\ListTssClientResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
