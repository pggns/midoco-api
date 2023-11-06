<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\WorkflowSD\ServiceType;

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
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Pggns\MidocoApi\WorkflowSD\ServiceType\Save
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\WorkflowSD\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named saveMidocoTaskDefinition
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\WorkflowSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\SaveMidocoTaskDefinitionRequest $paramSaveMidocoTaskDefinitionRequest
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\MidocoCredentialsType $credentials
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\SaveMidocoTaskDefinitionResponse|bool
     */
    public function saveMidocoTaskDefinition(\Pggns\MidocoApi\WorkflowSD\StructType\SaveMidocoTaskDefinitionRequest $paramSaveMidocoTaskDefinitionRequest, \Pggns\MidocoApi\WorkflowSD\StructType\MidocoCredentialsType $credentials)
    {
        try {
            $this->setResult($resultSaveMidocoTaskDefinition = $this->getSoapClient()->__soapCall('saveMidocoTaskDefinition', [
                $paramSaveMidocoTaskDefinitionRequest,
                $credentials,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveMidocoTaskDefinition;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveMidocoTaskPriority
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\WorkflowSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\SaveMidocoTaskPriorityRequest $paramSaveMidocoTaskPriorityRequest
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\MidocoCredentialsType $credentials
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\SaveMidocoTaskPriorityResponse|bool
     */
    public function saveMidocoTaskPriority(\Pggns\MidocoApi\WorkflowSD\StructType\SaveMidocoTaskPriorityRequest $paramSaveMidocoTaskPriorityRequest, \Pggns\MidocoApi\WorkflowSD\StructType\MidocoCredentialsType $credentials)
    {
        try {
            $this->setResult($resultSaveMidocoTaskPriority = $this->getSoapClient()->__soapCall('saveMidocoTaskPriority', [
                $paramSaveMidocoTaskPriorityRequest,
                $credentials,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveMidocoTaskPriority;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * saveMidocoTaskDefinitionDescription
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\WorkflowSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\SaveMidocoTaskDefinitionDescriptionRequest $paramSaveMidocoTaskDefinitionDescriptionRequest
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\MidocoCredentialsType $credentials
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\SaveMidocoTaskDefinitionDescriptionResponse|bool
     */
    public function saveMidocoTaskDefinitionDescription(\Pggns\MidocoApi\WorkflowSD\StructType\SaveMidocoTaskDefinitionDescriptionRequest $paramSaveMidocoTaskDefinitionDescriptionRequest, \Pggns\MidocoApi\WorkflowSD\StructType\MidocoCredentialsType $credentials)
    {
        try {
            $this->setResult($resultSaveMidocoTaskDefinitionDescription = $this->getSoapClient()->__soapCall('saveMidocoTaskDefinitionDescription', [
                $paramSaveMidocoTaskDefinitionDescriptionRequest,
                $credentials,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveMidocoTaskDefinitionDescription;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveMidocoTaskQueue
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\WorkflowSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\SaveMidocoTaskQueueRequest $paramSaveMidocoTaskQueueRequest
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\MidocoCredentialsType $credentials
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\SaveMidocoTaskQueueResponse|bool
     */
    public function saveMidocoTaskQueue(\Pggns\MidocoApi\WorkflowSD\StructType\SaveMidocoTaskQueueRequest $paramSaveMidocoTaskQueueRequest, \Pggns\MidocoApi\WorkflowSD\StructType\MidocoCredentialsType $credentials)
    {
        try {
            $this->setResult($resultSaveMidocoTaskQueue = $this->getSoapClient()->__soapCall('saveMidocoTaskQueue', [
                $paramSaveMidocoTaskQueueRequest,
                $credentials,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveMidocoTaskQueue;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveTaskView
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\WorkflowSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\SaveTaskViewRequest $paramSaveTaskViewRequest
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\MidocoCredentialsType $credentials
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\SaveTaskViewResponse|bool
     */
    public function saveTaskView(\Pggns\MidocoApi\WorkflowSD\StructType\SaveTaskViewRequest $paramSaveTaskViewRequest, \Pggns\MidocoApi\WorkflowSD\StructType\MidocoCredentialsType $credentials)
    {
        try {
            $this->setResult($resultSaveTaskView = $this->getSoapClient()->__soapCall('saveTaskView', [
                $paramSaveTaskViewRequest,
                $credentials,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveTaskView;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\SaveMidocoTaskDefinitionDescriptionResponse|\Pggns\MidocoApi\WorkflowSD\StructType\SaveMidocoTaskDefinitionResponse|\Pggns\MidocoApi\WorkflowSD\StructType\SaveMidocoTaskPriorityResponse|\Pggns\MidocoApi\WorkflowSD\StructType\SaveMidocoTaskQueueResponse|\Pggns\MidocoApi\WorkflowSD\StructType\SaveTaskViewResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
