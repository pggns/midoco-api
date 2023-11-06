<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\ServiceType;

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
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Pggns\MidocoApi\MidocoSystem\ServiceType\_List
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\MidocoSystem\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named listMidocoOrgTemplateText
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\MidocoSystem\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\ListMidocoOrgTemplateTextRequest $paramListMidocoOrgTemplateTextRequest
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\ListMidocoOrgTemplateTextResponse|bool
     */
    public function listMidocoOrgTemplateText(\Pggns\MidocoApi\MidocoSystem\StructType\ListMidocoOrgTemplateTextRequest $paramListMidocoOrgTemplateTextRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\MidocoSystem\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\ListPrintSelectsRequest $paramListPrintSelectsRequest
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\ListPrintSelectsResponse|bool
     */
    public function listPrintSelects(\Pggns\MidocoApi\MidocoSystem\StructType\ListPrintSelectsRequest $paramListPrintSelectsRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\MidocoSystem\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\ListTssClientRequest $paramListTssClientRequest
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\ListTssClientResponse|bool
     */
    public function listTssClient(\Pggns\MidocoApi\MidocoSystem\StructType\ListTssClientRequest $paramListTssClientRequest)
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
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\ListMidocoOrgTemplateTextResponse|\Pggns\MidocoApi\MidocoSystem\StructType\ListPrintSelectsResponse|\Pggns\MidocoApi\MidocoSystem\StructType\ListTssClientResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
