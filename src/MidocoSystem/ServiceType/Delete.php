<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\ServiceType;

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
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Pggns\MidocoApi\MidocoSystem\ServiceType\Delete
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\MidocoSystem\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named deletePrintRemarkDestination
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\MidocoSystem\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\DeletePrintRemarkDestinationRequest $paramDeletePrintRemarkDestinationRequest
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\DeletePrintRemarkDestinationResponse|bool
     */
    public function deletePrintRemarkDestination(\Pggns\MidocoApi\MidocoSystem\StructType\DeletePrintRemarkDestinationRequest $paramDeletePrintRemarkDestinationRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\MidocoSystem\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\DeletePrintQueueRequest $paramDeletePrintQueueRequest
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\DeletePrintQueueResponse|bool
     */
    public function deletePrintQueue(\Pggns\MidocoApi\MidocoSystem\StructType\DeletePrintQueueRequest $paramDeletePrintQueueRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\MidocoSystem\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\DeleteMfLocalRequest $paramDeleteMfLocalRequest
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\DeleteMfLocalResponse|bool
     */
    public function deleteMfLocal(\Pggns\MidocoApi\MidocoSystem\StructType\DeleteMfLocalRequest $paramDeleteMfLocalRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\MidocoSystem\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\DeleteMidocoAttributeDefinitionRequest $paramDeleteMidocoAttributeDefinitionRequest
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\DeleteMidocoAttributeDefinitionResponse|bool
     */
    public function deleteAttributeDefinition(\Pggns\MidocoApi\MidocoSystem\StructType\DeleteMidocoAttributeDefinitionRequest $paramDeleteMidocoAttributeDefinitionRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\MidocoSystem\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\DeleteMidocoAttributeLocalizationRequest $paramDeleteMidocoAttributeLocalizationRequest
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\DeleteMidocoAttributeLocalizationResponse|bool
     */
    public function deleteAttributeLocalization(\Pggns\MidocoApi\MidocoSystem\StructType\DeleteMidocoAttributeLocalizationRequest $paramDeleteMidocoAttributeLocalizationRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\MidocoSystem\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\DeleteMidocoAttributeChoiceValueRequest $paramDeleteMidocoAttributeChoiceValueRequest
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\DeleteMidocoAttributeChoiceValueResponse|bool
     */
    public function deleteAttributeChoiceValue(\Pggns\MidocoApi\MidocoSystem\StructType\DeleteMidocoAttributeChoiceValueRequest $paramDeleteMidocoAttributeChoiceValueRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\MidocoSystem\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\DeleteMidocoGuiAttributeDefinitionRequest $paramDeleteMidocoGuiAttributeDefinitionRequest
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\DeleteMidocoGuiAttributeDefinitionResponse|bool
     */
    public function deleteMidocoGuiAttributeDefinition(\Pggns\MidocoApi\MidocoSystem\StructType\DeleteMidocoGuiAttributeDefinitionRequest $paramDeleteMidocoGuiAttributeDefinitionRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\MidocoSystem\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\DeleteMidocoOrgUnitGuiAttributeRequest $paramDeleteMidocoOrgUnitGuiAttributeRequest
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\DeleteMidocoOrgUnitGuiAttributeResponse|bool
     */
    public function deleteMidocoOrgUnitGuiAttribute(\Pggns\MidocoApi\MidocoSystem\StructType\DeleteMidocoOrgUnitGuiAttributeRequest $paramDeleteMidocoOrgUnitGuiAttributeRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\MidocoSystem\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\DeletePrintjobRequest $paramDeletePrintjobRequest
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\DeletePrintjobResponse|bool
     */
    public function deletePrintJob(\Pggns\MidocoApi\MidocoSystem\StructType\DeletePrintjobRequest $paramDeletePrintjobRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\MidocoSystem\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\DeleteMidocoOrgTemplateTextRequest $paramDeleteMidocoOrgTemplateTextRequest
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\DeleteMidocoOrgTemplateTextResponse|bool
     */
    public function deleteMidocoOrgTemplateText(\Pggns\MidocoApi\MidocoSystem\StructType\DeleteMidocoOrgTemplateTextRequest $paramDeleteMidocoOrgTemplateTextRequest)
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
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\DeleteMfLocalResponse|\Pggns\MidocoApi\MidocoSystem\StructType\DeleteMidocoAttributeChoiceValueResponse|\Pggns\MidocoApi\MidocoSystem\StructType\DeleteMidocoAttributeDefinitionResponse|\Pggns\MidocoApi\MidocoSystem\StructType\DeleteMidocoAttributeLocalizationResponse|\Pggns\MidocoApi\MidocoSystem\StructType\DeleteMidocoGuiAttributeDefinitionResponse|\Pggns\MidocoApi\MidocoSystem\StructType\DeleteMidocoOrgTemplateTextResponse|\Pggns\MidocoApi\MidocoSystem\StructType\DeleteMidocoOrgUnitGuiAttributeResponse|\Pggns\MidocoApi\MidocoSystem\StructType\DeletePrintjobResponse|\Pggns\MidocoApi\MidocoSystem\StructType\DeletePrintQueueResponse|\Pggns\MidocoApi\MidocoSystem\StructType\DeletePrintRemarkDestinationResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
