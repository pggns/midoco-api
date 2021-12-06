<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\System\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Save ServiceType
 * @subpackage Services
 */
class Save extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Api\System\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Api\System\ServiceType\Save
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Api\System\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named savePrintRemarkDestination
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\System\StructType\SavePrintRemarkDestinationRequest $paramSavePrintRemarkDestinationRequest
     * @return \Pggns\MidocoApi\Api\System\StructType\SavePrintRemarkDestinationResponse|bool
     */
    public function savePrintRemarkDestination(\Pggns\MidocoApi\Api\System\StructType\SavePrintRemarkDestinationRequest $paramSavePrintRemarkDestinationRequest)
    {
        try {
            $this->setResult($resultSavePrintRemarkDestination = $this->getSoapClient()->__soapCall('savePrintRemarkDestination', [
                $paramSavePrintRemarkDestinationRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSavePrintRemarkDestination;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named savePrintQueue
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\System\StructType\SavePrintQueueRequest $paramSavePrintQueueRequest
     * @return \Pggns\MidocoApi\Api\System\StructType\SavePrintQueueResponse|bool
     */
    public function savePrintQueue(\Pggns\MidocoApi\Api\System\StructType\SavePrintQueueRequest $paramSavePrintQueueRequest)
    {
        try {
            $this->setResult($resultSavePrintQueue = $this->getSoapClient()->__soapCall('savePrintQueue', [
                $paramSavePrintQueueRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSavePrintQueue;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveMfLocal
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\System\StructType\SaveMfLocalRequest $paramSaveMfLocalRequest
     * @return \Pggns\MidocoApi\Api\System\StructType\SaveMfLocalResponse|bool
     */
    public function saveMfLocal(\Pggns\MidocoApi\Api\System\StructType\SaveMfLocalRequest $paramSaveMfLocalRequest)
    {
        try {
            $this->setResult($resultSaveMfLocal = $this->getSoapClient()->__soapCall('saveMfLocal', [
                $paramSaveMfLocalRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveMfLocal;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveAttributeDefinition
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\System\StructType\SaveMidocoAttributeDefinitionRequest $paramSaveMidocoAttributeDefinitionRequest
     * @return \Pggns\MidocoApi\Api\System\StructType\SaveMidocoAttributeDefinitionResponse|bool
     */
    public function saveAttributeDefinition(\Pggns\MidocoApi\Api\System\StructType\SaveMidocoAttributeDefinitionRequest $paramSaveMidocoAttributeDefinitionRequest)
    {
        try {
            $this->setResult($resultSaveAttributeDefinition = $this->getSoapClient()->__soapCall('saveAttributeDefinition', [
                $paramSaveMidocoAttributeDefinitionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveAttributeDefinition;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveAttributeLocalization
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\System\StructType\SaveMidocoAttributeLocalizationRequest $paramSaveMidocoAttributeLocalizationRequest
     * @return \Pggns\MidocoApi\Api\System\StructType\SaveMidocoAttributeLocalizationResponse|bool
     */
    public function saveAttributeLocalization(\Pggns\MidocoApi\Api\System\StructType\SaveMidocoAttributeLocalizationRequest $paramSaveMidocoAttributeLocalizationRequest)
    {
        try {
            $this->setResult($resultSaveAttributeLocalization = $this->getSoapClient()->__soapCall('saveAttributeLocalization', [
                $paramSaveMidocoAttributeLocalizationRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveAttributeLocalization;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveAttributeChoiceValue
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\System\StructType\SaveMidocoAttributeChoiceValueRequest $paramSaveMidocoAttributeChoiceValueRequest
     * @return \Pggns\MidocoApi\Api\System\StructType\SaveMidocoAttributeChoiceValueResponse|bool
     */
    public function saveAttributeChoiceValue(\Pggns\MidocoApi\Api\System\StructType\SaveMidocoAttributeChoiceValueRequest $paramSaveMidocoAttributeChoiceValueRequest)
    {
        try {
            $this->setResult($resultSaveAttributeChoiceValue = $this->getSoapClient()->__soapCall('saveAttributeChoiceValue', [
                $paramSaveMidocoAttributeChoiceValueRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveAttributeChoiceValue;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveMidocoGuiAttributeDefinition
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\System\StructType\SaveMidocoGuiAttributeDefinitionRequest $paramSaveMidocoGuiAttributeDefinitionRequest
     * @return \Pggns\MidocoApi\Api\System\StructType\SaveMidocoGuiAttributeDefinitionResponse|bool
     */
    public function saveMidocoGuiAttributeDefinition(\Pggns\MidocoApi\Api\System\StructType\SaveMidocoGuiAttributeDefinitionRequest $paramSaveMidocoGuiAttributeDefinitionRequest)
    {
        try {
            $this->setResult($resultSaveMidocoGuiAttributeDefinition = $this->getSoapClient()->__soapCall('saveMidocoGuiAttributeDefinition', [
                $paramSaveMidocoGuiAttributeDefinitionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveMidocoGuiAttributeDefinition;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveMidocoOrgUnitGuiAttribute
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\System\StructType\SaveMidocoOrgUnitGuiAttributeRequest $paramSaveMidocoOrgUnitGuiAttributeRequest
     * @return \Pggns\MidocoApi\Api\System\StructType\SaveMidocoOrgUnitGuiAttributeResponse|bool
     */
    public function saveMidocoOrgUnitGuiAttribute(\Pggns\MidocoApi\Api\System\StructType\SaveMidocoOrgUnitGuiAttributeRequest $paramSaveMidocoOrgUnitGuiAttributeRequest)
    {
        try {
            $this->setResult($resultSaveMidocoOrgUnitGuiAttribute = $this->getSoapClient()->__soapCall('saveMidocoOrgUnitGuiAttribute', [
                $paramSaveMidocoOrgUnitGuiAttributeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveMidocoOrgUnitGuiAttribute;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveMidocoOrgTemplateText
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\System\StructType\SaveMidocoOrgTemplateTextRequest $paramSaveMidocoOrgTemplateTextRequest
     * @return \Pggns\MidocoApi\Api\System\StructType\SaveMidocoOrgTemplateTextResponse|bool
     */
    public function saveMidocoOrgTemplateText(\Pggns\MidocoApi\Api\System\StructType\SaveMidocoOrgTemplateTextRequest $paramSaveMidocoOrgTemplateTextRequest)
    {
        try {
            $this->setResult($resultSaveMidocoOrgTemplateText = $this->getSoapClient()->__soapCall('saveMidocoOrgTemplateText', [
                $paramSaveMidocoOrgTemplateTextRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveMidocoOrgTemplateText;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveUserHistory
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\System\StructType\SaveUserHistoryRequest $paramSaveUserHistoryRequest
     * @return \Pggns\MidocoApi\Api\System\StructType\SaveUserHistoryResponse|bool
     */
    public function saveUserHistory(\Pggns\MidocoApi\Api\System\StructType\SaveUserHistoryRequest $paramSaveUserHistoryRequest)
    {
        try {
            $this->setResult($resultSaveUserHistory = $this->getSoapClient()->__soapCall('saveUserHistory', [
                $paramSaveUserHistoryRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveUserHistory;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Api\System\StructType\SaveMfLocalResponse|\Pggns\MidocoApi\Api\System\StructType\SaveMidocoAttributeChoiceValueResponse|\Pggns\MidocoApi\Api\System\StructType\SaveMidocoAttributeDefinitionResponse|\Pggns\MidocoApi\Api\System\StructType\SaveMidocoAttributeLocalizationResponse|\Pggns\MidocoApi\Api\System\StructType\SaveMidocoGuiAttributeDefinitionResponse|\Pggns\MidocoApi\Api\System\StructType\SaveMidocoOrgTemplateTextResponse|\Pggns\MidocoApi\Api\System\StructType\SaveMidocoOrgUnitGuiAttributeResponse|\Pggns\MidocoApi\Api\System\StructType\SavePrintQueueResponse|\Pggns\MidocoApi\Api\System\StructType\SavePrintRemarkDestinationResponse|\Pggns\MidocoApi\Api\System\StructType\SaveUserHistoryResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
