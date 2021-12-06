<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\System\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Delete ServiceType
 * @subpackage Services
 */
class Delete extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Api\System\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Api\System\ServiceType\Delete
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Api\System\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named deletePrintRemarkDestination
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\System\StructType\DeletePrintRemarkDestinationRequest $paramDeletePrintRemarkDestinationRequest
     * @return \Pggns\MidocoApi\Api\System\StructType\DeletePrintRemarkDestinationResponse|bool
     */
    public function deletePrintRemarkDestination(\Pggns\MidocoApi\Api\System\StructType\DeletePrintRemarkDestinationRequest $paramDeletePrintRemarkDestinationRequest)
    {
        try {
            $this->setResult($resultDeletePrintRemarkDestination = $this->getSoapClient()->__soapCall('deletePrintRemarkDestination', [
                $paramDeletePrintRemarkDestinationRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeletePrintRemarkDestination;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deletePrintQueue
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\System\StructType\DeletePrintQueueRequest $paramDeletePrintQueueRequest
     * @return \Pggns\MidocoApi\Api\System\StructType\DeletePrintQueueResponse|bool
     */
    public function deletePrintQueue(\Pggns\MidocoApi\Api\System\StructType\DeletePrintQueueRequest $paramDeletePrintQueueRequest)
    {
        try {
            $this->setResult($resultDeletePrintQueue = $this->getSoapClient()->__soapCall('deletePrintQueue', [
                $paramDeletePrintQueueRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeletePrintQueue;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteMfLocal
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\System\StructType\DeleteMfLocalRequest $paramDeleteMfLocalRequest
     * @return \Pggns\MidocoApi\Api\System\StructType\DeleteMfLocalResponse|bool
     */
    public function deleteMfLocal(\Pggns\MidocoApi\Api\System\StructType\DeleteMfLocalRequest $paramDeleteMfLocalRequest)
    {
        try {
            $this->setResult($resultDeleteMfLocal = $this->getSoapClient()->__soapCall('deleteMfLocal', [
                $paramDeleteMfLocalRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteMfLocal;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteAttributeDefinition
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\System\StructType\DeleteMidocoAttributeDefinitionRequest $paramDeleteMidocoAttributeDefinitionRequest
     * @return \Pggns\MidocoApi\Api\System\StructType\DeleteMidocoAttributeDefinitionResponse|bool
     */
    public function deleteAttributeDefinition(\Pggns\MidocoApi\Api\System\StructType\DeleteMidocoAttributeDefinitionRequest $paramDeleteMidocoAttributeDefinitionRequest)
    {
        try {
            $this->setResult($resultDeleteAttributeDefinition = $this->getSoapClient()->__soapCall('deleteAttributeDefinition', [
                $paramDeleteMidocoAttributeDefinitionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteAttributeDefinition;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteAttributeLocalization
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\System\StructType\DeleteMidocoAttributeLocalizationRequest $paramDeleteMidocoAttributeLocalizationRequest
     * @return \Pggns\MidocoApi\Api\System\StructType\DeleteMidocoAttributeLocalizationResponse|bool
     */
    public function deleteAttributeLocalization(\Pggns\MidocoApi\Api\System\StructType\DeleteMidocoAttributeLocalizationRequest $paramDeleteMidocoAttributeLocalizationRequest)
    {
        try {
            $this->setResult($resultDeleteAttributeLocalization = $this->getSoapClient()->__soapCall('deleteAttributeLocalization', [
                $paramDeleteMidocoAttributeLocalizationRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteAttributeLocalization;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteAttributeChoiceValue
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\System\StructType\DeleteMidocoAttributeChoiceValueRequest $paramDeleteMidocoAttributeChoiceValueRequest
     * @return \Pggns\MidocoApi\Api\System\StructType\DeleteMidocoAttributeChoiceValueResponse|bool
     */
    public function deleteAttributeChoiceValue(\Pggns\MidocoApi\Api\System\StructType\DeleteMidocoAttributeChoiceValueRequest $paramDeleteMidocoAttributeChoiceValueRequest)
    {
        try {
            $this->setResult($resultDeleteAttributeChoiceValue = $this->getSoapClient()->__soapCall('deleteAttributeChoiceValue', [
                $paramDeleteMidocoAttributeChoiceValueRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteAttributeChoiceValue;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteMidocoGuiAttributeDefinition
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\System\StructType\DeleteMidocoGuiAttributeDefinitionRequest $paramDeleteMidocoGuiAttributeDefinitionRequest
     * @return \Pggns\MidocoApi\Api\System\StructType\DeleteMidocoGuiAttributeDefinitionResponse|bool
     */
    public function deleteMidocoGuiAttributeDefinition(\Pggns\MidocoApi\Api\System\StructType\DeleteMidocoGuiAttributeDefinitionRequest $paramDeleteMidocoGuiAttributeDefinitionRequest)
    {
        try {
            $this->setResult($resultDeleteMidocoGuiAttributeDefinition = $this->getSoapClient()->__soapCall('deleteMidocoGuiAttributeDefinition', [
                $paramDeleteMidocoGuiAttributeDefinitionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteMidocoGuiAttributeDefinition;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteMidocoOrgUnitGuiAttribute
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\System\StructType\DeleteMidocoOrgUnitGuiAttributeRequest $paramDeleteMidocoOrgUnitGuiAttributeRequest
     * @return \Pggns\MidocoApi\Api\System\StructType\DeleteMidocoOrgUnitGuiAttributeResponse|bool
     */
    public function deleteMidocoOrgUnitGuiAttribute(\Pggns\MidocoApi\Api\System\StructType\DeleteMidocoOrgUnitGuiAttributeRequest $paramDeleteMidocoOrgUnitGuiAttributeRequest)
    {
        try {
            $this->setResult($resultDeleteMidocoOrgUnitGuiAttribute = $this->getSoapClient()->__soapCall('deleteMidocoOrgUnitGuiAttribute', [
                $paramDeleteMidocoOrgUnitGuiAttributeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteMidocoOrgUnitGuiAttribute;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deletePrintJob
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\System\StructType\DeletePrintjobRequest $paramDeletePrintjobRequest
     * @return \Pggns\MidocoApi\Api\System\StructType\DeletePrintjobResponse|bool
     */
    public function deletePrintJob(\Pggns\MidocoApi\Api\System\StructType\DeletePrintjobRequest $paramDeletePrintjobRequest)
    {
        try {
            $this->setResult($resultDeletePrintJob = $this->getSoapClient()->__soapCall('deletePrintJob', [
                $paramDeletePrintjobRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeletePrintJob;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteMidocoOrgTemplateText
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\System\StructType\DeleteMidocoOrgTemplateTextRequest $paramDeleteMidocoOrgTemplateTextRequest
     * @return \Pggns\MidocoApi\Api\System\StructType\DeleteMidocoOrgTemplateTextResponse|bool
     */
    public function deleteMidocoOrgTemplateText(\Pggns\MidocoApi\Api\System\StructType\DeleteMidocoOrgTemplateTextRequest $paramDeleteMidocoOrgTemplateTextRequest)
    {
        try {
            $this->setResult($resultDeleteMidocoOrgTemplateText = $this->getSoapClient()->__soapCall('deleteMidocoOrgTemplateText', [
                $paramDeleteMidocoOrgTemplateTextRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteMidocoOrgTemplateText;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Api\System\StructType\DeleteMfLocalResponse|\Pggns\MidocoApi\Api\System\StructType\DeleteMidocoAttributeChoiceValueResponse|\Pggns\MidocoApi\Api\System\StructType\DeleteMidocoAttributeDefinitionResponse|\Pggns\MidocoApi\Api\System\StructType\DeleteMidocoAttributeLocalizationResponse|\Pggns\MidocoApi\Api\System\StructType\DeleteMidocoGuiAttributeDefinitionResponse|\Pggns\MidocoApi\Api\System\StructType\DeleteMidocoOrgTemplateTextResponse|\Pggns\MidocoApi\Api\System\StructType\DeleteMidocoOrgUnitGuiAttributeResponse|\Pggns\MidocoApi\Api\System\StructType\DeletePrintjobResponse|\Pggns\MidocoApi\Api\System\StructType\DeletePrintQueueResponse|\Pggns\MidocoApi\Api\System\StructType\DeletePrintRemarkDestinationResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
