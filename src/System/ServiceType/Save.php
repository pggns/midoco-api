<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\System\ServiceType;

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
     * @param \Pggns\MidocoApi\System\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\System\ServiceType\Save
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\System\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named savePrintRemarkDestination
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\System\StructType\SavePrintRemarkDestinationRequest $paramSavePrintRemarkDestinationRequest
     * @return \Pggns\MidocoApi\System\StructType\SavePrintRemarkDestinationResponse|bool
     */
    public function savePrintRemarkDestination(\Pggns\MidocoApi\System\StructType\SavePrintRemarkDestinationRequest $paramSavePrintRemarkDestinationRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\System\StructType\SavePrintQueueRequest $paramSavePrintQueueRequest
     * @return \Pggns\MidocoApi\System\StructType\SavePrintQueueResponse|bool
     */
    public function savePrintQueue(\Pggns\MidocoApi\System\StructType\SavePrintQueueRequest $paramSavePrintQueueRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\System\StructType\SaveMfLocalRequest $paramSaveMfLocalRequest
     * @return \Pggns\MidocoApi\System\StructType\SaveMfLocalResponse|bool
     */
    public function saveMfLocal(\Pggns\MidocoApi\System\StructType\SaveMfLocalRequest $paramSaveMfLocalRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\System\StructType\SaveMidocoAttributeDefinitionRequest $paramSaveMidocoAttributeDefinitionRequest
     * @return \Pggns\MidocoApi\System\StructType\SaveMidocoAttributeDefinitionResponse|bool
     */
    public function saveAttributeDefinition(\Pggns\MidocoApi\System\StructType\SaveMidocoAttributeDefinitionRequest $paramSaveMidocoAttributeDefinitionRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\System\StructType\SaveMidocoAttributeLocalizationRequest $paramSaveMidocoAttributeLocalizationRequest
     * @return \Pggns\MidocoApi\System\StructType\SaveMidocoAttributeLocalizationResponse|bool
     */
    public function saveAttributeLocalization(\Pggns\MidocoApi\System\StructType\SaveMidocoAttributeLocalizationRequest $paramSaveMidocoAttributeLocalizationRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\System\StructType\SaveMidocoAttributeChoiceValueRequest $paramSaveMidocoAttributeChoiceValueRequest
     * @return \Pggns\MidocoApi\System\StructType\SaveMidocoAttributeChoiceValueResponse|bool
     */
    public function saveAttributeChoiceValue(\Pggns\MidocoApi\System\StructType\SaveMidocoAttributeChoiceValueRequest $paramSaveMidocoAttributeChoiceValueRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\System\StructType\SaveMidocoGuiAttributeDefinitionRequest $paramSaveMidocoGuiAttributeDefinitionRequest
     * @return \Pggns\MidocoApi\System\StructType\SaveMidocoGuiAttributeDefinitionResponse|bool
     */
    public function saveMidocoGuiAttributeDefinition(\Pggns\MidocoApi\System\StructType\SaveMidocoGuiAttributeDefinitionRequest $paramSaveMidocoGuiAttributeDefinitionRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\System\StructType\SaveMidocoOrgUnitGuiAttributeRequest $paramSaveMidocoOrgUnitGuiAttributeRequest
     * @return \Pggns\MidocoApi\System\StructType\SaveMidocoOrgUnitGuiAttributeResponse|bool
     */
    public function saveMidocoOrgUnitGuiAttribute(\Pggns\MidocoApi\System\StructType\SaveMidocoOrgUnitGuiAttributeRequest $paramSaveMidocoOrgUnitGuiAttributeRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\System\StructType\SaveMidocoOrgTemplateTextRequest $paramSaveMidocoOrgTemplateTextRequest
     * @return \Pggns\MidocoApi\System\StructType\SaveMidocoOrgTemplateTextResponse|bool
     */
    public function saveMidocoOrgTemplateText(\Pggns\MidocoApi\System\StructType\SaveMidocoOrgTemplateTextRequest $paramSaveMidocoOrgTemplateTextRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\System\StructType\SaveUserHistoryRequest $paramSaveUserHistoryRequest
     * @return \Pggns\MidocoApi\System\StructType\SaveUserHistoryResponse|bool
     */
    public function saveUserHistory(\Pggns\MidocoApi\System\StructType\SaveUserHistoryRequest $paramSaveUserHistoryRequest)
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
     * @return \Pggns\MidocoApi\System\StructType\SaveMfLocalResponse|\Pggns\MidocoApi\System\StructType\SaveMidocoAttributeChoiceValueResponse|\Pggns\MidocoApi\System\StructType\SaveMidocoAttributeDefinitionResponse|\Pggns\MidocoApi\System\StructType\SaveMidocoAttributeLocalizationResponse|\Pggns\MidocoApi\System\StructType\SaveMidocoGuiAttributeDefinitionResponse|\Pggns\MidocoApi\System\StructType\SaveMidocoOrgTemplateTextResponse|\Pggns\MidocoApi\System\StructType\SaveMidocoOrgUnitGuiAttributeResponse|\Pggns\MidocoApi\System\StructType\SavePrintQueueResponse|\Pggns\MidocoApi\System\StructType\SavePrintRemarkDestinationResponse|\Pggns\MidocoApi\System\StructType\SaveUserHistoryResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
