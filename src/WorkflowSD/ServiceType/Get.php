<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\WorkflowSD\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Pggns\MidocoApi\WorkflowSD\ServiceType\Get
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\WorkflowSD\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named getMidocoTaskDefinition
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\WorkflowSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\GetMidocoTaskDefinitionRequest $paramGetMidocoTaskDefinitionRequest
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\MidocoCredentialsType $credentials
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\GetMidocoTaskDefinitionResponse|bool
     */
    public function getMidocoTaskDefinition(\Pggns\MidocoApi\WorkflowSD\StructType\GetMidocoTaskDefinitionRequest $paramGetMidocoTaskDefinitionRequest, \Pggns\MidocoApi\WorkflowSD\StructType\MidocoCredentialsType $credentials)
    {
        try {
            $this->setResult($resultGetMidocoTaskDefinition = $this->getSoapClient()->__soapCall('getMidocoTaskDefinition', [
                $paramGetMidocoTaskDefinitionRequest,
                $credentials,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMidocoTaskDefinition;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMidocoTaskPriority
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\WorkflowSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\GetMidocoTaskPriorityRequest $paramGetMidocoTaskPriorityRequest
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\MidocoCredentialsType $credentials
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\GetMidocoTaskPriorityResponse|bool
     */
    public function getMidocoTaskPriority(\Pggns\MidocoApi\WorkflowSD\StructType\GetMidocoTaskPriorityRequest $paramGetMidocoTaskPriorityRequest, \Pggns\MidocoApi\WorkflowSD\StructType\MidocoCredentialsType $credentials)
    {
        try {
            $this->setResult($resultGetMidocoTaskPriority = $this->getSoapClient()->__soapCall('getMidocoTaskPriority', [
                $paramGetMidocoTaskPriorityRequest,
                $credentials,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMidocoTaskPriority;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMidocoTaskDefinitionDescription
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\WorkflowSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\GetMidocoTaskDefinitionDescriptionRequest $paramGetMidocoTaskDefinitionDescriptionRequest
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\MidocoCredentialsType $credentials
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\GetMidocoTaskDefinitionDescriptionResponse|bool
     */
    public function getMidocoTaskDefinitionDescription(\Pggns\MidocoApi\WorkflowSD\StructType\GetMidocoTaskDefinitionDescriptionRequest $paramGetMidocoTaskDefinitionDescriptionRequest, \Pggns\MidocoApi\WorkflowSD\StructType\MidocoCredentialsType $credentials)
    {
        try {
            $this->setResult($resultGetMidocoTaskDefinitionDescription = $this->getSoapClient()->__soapCall('getMidocoTaskDefinitionDescription', [
                $paramGetMidocoTaskDefinitionDescriptionRequest,
                $credentials,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMidocoTaskDefinitionDescription;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMidocoTaskQueue
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\WorkflowSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\GetMidocoTaskQueueRequest $paramGetMidocoTaskQueueRequest
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\MidocoCredentialsType $credentials
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\GetMidocoTaskQueueResponse|bool
     */
    public function getMidocoTaskQueue(\Pggns\MidocoApi\WorkflowSD\StructType\GetMidocoTaskQueueRequest $paramGetMidocoTaskQueueRequest, \Pggns\MidocoApi\WorkflowSD\StructType\MidocoCredentialsType $credentials)
    {
        try {
            $this->setResult($resultGetMidocoTaskQueue = $this->getSoapClient()->__soapCall('getMidocoTaskQueue', [
                $paramGetMidocoTaskQueueRequest,
                $credentials,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMidocoTaskQueue;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getTaskView
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\WorkflowSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\GetTaskViewRequest $paramGetTaskViewRequest
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\MidocoCredentialsType $credentials
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\GetTaskViewResponse|bool
     */
    public function getTaskView(\Pggns\MidocoApi\WorkflowSD\StructType\GetTaskViewRequest $paramGetTaskViewRequest, \Pggns\MidocoApi\WorkflowSD\StructType\MidocoCredentialsType $credentials)
    {
        try {
            $this->setResult($resultGetTaskView = $this->getSoapClient()->__soapCall('getTaskView', [
                $paramGetTaskViewRequest,
                $credentials,
            ], [], [], $this->outputHeaders));
        
            return $resultGetTaskView;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\GetMidocoTaskDefinitionDescriptionResponse|\Pggns\MidocoApi\WorkflowSD\StructType\GetMidocoTaskDefinitionResponse|\Pggns\MidocoApi\WorkflowSD\StructType\GetMidocoTaskPriorityResponse|\Pggns\MidocoApi\WorkflowSD\StructType\GetMidocoTaskQueueResponse|\Pggns\MidocoApi\WorkflowSD\StructType\GetTaskViewResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
