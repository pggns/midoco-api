<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Workflow\ServiceType;

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
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Api\Workflow\ServiceType\Save
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Api\Workflow\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named saveTask
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\SaveTaskRequest $paramSaveTaskRequest
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\SaveTaskResponse|bool
     */
    public function saveTask(\Pggns\MidocoApi\Api\Workflow\StructType\SaveTaskRequest $paramSaveTaskRequest)
    {
        try {
            $this->setResult($resultSaveTask = $this->getSoapClient()->__soapCall('saveTask', [
                $paramSaveTaskRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveTask;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveGlobalNotices
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\SaveGlobalNoticesRequest $paramSaveGlobalNoticesRequest
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\SaveGlobalNoticesResponse|bool
     */
    public function saveGlobalNotices(\Pggns\MidocoApi\Api\Workflow\StructType\SaveGlobalNoticesRequest $paramSaveGlobalNoticesRequest)
    {
        try {
            $this->setResult($resultSaveGlobalNotices = $this->getSoapClient()->__soapCall('saveGlobalNotices', [
                $paramSaveGlobalNoticesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveGlobalNotices;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveGlobalNoticeComment
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\SaveGlobalNoticeCommentRequest $paramSaveGlobalNoticeCommentRequest
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\SaveGlobalNoticeCommentResponse|bool
     */
    public function saveGlobalNoticeComment(\Pggns\MidocoApi\Api\Workflow\StructType\SaveGlobalNoticeCommentRequest $paramSaveGlobalNoticeCommentRequest)
    {
        try {
            $this->setResult($resultSaveGlobalNoticeComment = $this->getSoapClient()->__soapCall('saveGlobalNoticeComment', [
                $paramSaveGlobalNoticeCommentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveGlobalNoticeComment;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveMidocoTaskDefinition
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\SaveMidocoTaskDefinitionRequest $paramSaveMidocoTaskDefinitionRequest
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\SaveMidocoTaskDefinitionResponse|bool
     */
    public function saveMidocoTaskDefinition(\Pggns\MidocoApi\Api\Workflow\StructType\SaveMidocoTaskDefinitionRequest $paramSaveMidocoTaskDefinitionRequest)
    {
        try {
            $this->setResult($resultSaveMidocoTaskDefinition = $this->getSoapClient()->__soapCall('saveMidocoTaskDefinition', [
                $paramSaveMidocoTaskDefinitionRequest,
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\SaveMidocoTaskPriorityRequest $paramSaveMidocoTaskPriorityRequest
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\SaveMidocoTaskPriorityResponse|bool
     */
    public function saveMidocoTaskPriority(\Pggns\MidocoApi\Api\Workflow\StructType\SaveMidocoTaskPriorityRequest $paramSaveMidocoTaskPriorityRequest)
    {
        try {
            $this->setResult($resultSaveMidocoTaskPriority = $this->getSoapClient()->__soapCall('saveMidocoTaskPriority', [
                $paramSaveMidocoTaskPriorityRequest,
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\SaveMidocoTaskDefinitionDescriptionRequest $paramSaveMidocoTaskDefinitionDescriptionRequest
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\SaveMidocoTaskDefinitionDescriptionResponse|bool
     */
    public function saveMidocoTaskDefinitionDescription(\Pggns\MidocoApi\Api\Workflow\StructType\SaveMidocoTaskDefinitionDescriptionRequest $paramSaveMidocoTaskDefinitionDescriptionRequest)
    {
        try {
            $this->setResult($resultSaveMidocoTaskDefinitionDescription = $this->getSoapClient()->__soapCall('saveMidocoTaskDefinitionDescription', [
                $paramSaveMidocoTaskDefinitionDescriptionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveMidocoTaskDefinitionDescription;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveWorkingUser
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\SaveWorkingUserRequest $paramSaveWorkingUserRequest
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\SaveWorkingUserResponse|bool
     */
    public function saveWorkingUser(\Pggns\MidocoApi\Api\Workflow\StructType\SaveWorkingUserRequest $paramSaveWorkingUserRequest)
    {
        try {
            $this->setResult($resultSaveWorkingUser = $this->getSoapClient()->__soapCall('saveWorkingUser', [
                $paramSaveWorkingUserRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveWorkingUser;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveRuleDefinition
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\SaveRuleDefinitionRequest $paramSaveRuleDefinitionRequest
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\SaveRuleDefinitionResponse|bool
     */
    public function saveRuleDefinition(\Pggns\MidocoApi\Api\Workflow\StructType\SaveRuleDefinitionRequest $paramSaveRuleDefinitionRequest)
    {
        try {
            $this->setResult($resultSaveRuleDefinition = $this->getSoapClient()->__soapCall('saveRuleDefinition', [
                $paramSaveRuleDefinitionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveRuleDefinition;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveRuleCriteriaOrder
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\SaveRuleCriteriaOrderRequest $paramSaveRuleCriteriaOrderRequest
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\SaveRuleCriteriaOrderResponse|bool
     */
    public function saveRuleCriteriaOrder(\Pggns\MidocoApi\Api\Workflow\StructType\SaveRuleCriteriaOrderRequest $paramSaveRuleCriteriaOrderRequest)
    {
        try {
            $this->setResult($resultSaveRuleCriteriaOrder = $this->getSoapClient()->__soapCall('saveRuleCriteriaOrder', [
                $paramSaveRuleCriteriaOrderRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveRuleCriteriaOrder;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveRuleCriteriaCrmAttribute
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\SaveRuleCriteriaCrmAttributeRequest $paramSaveRuleCriteriaCrmAttributeRequest
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\SaveRuleCriteriaCrmAttributeResponse|bool
     */
    public function saveRuleCriteriaCrmAttribute(\Pggns\MidocoApi\Api\Workflow\StructType\SaveRuleCriteriaCrmAttributeRequest $paramSaveRuleCriteriaCrmAttributeRequest)
    {
        try {
            $this->setResult($resultSaveRuleCriteriaCrmAttribute = $this->getSoapClient()->__soapCall('saveRuleCriteriaCrmAttribute', [
                $paramSaveRuleCriteriaCrmAttributeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveRuleCriteriaCrmAttribute;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveRuleCriteriaCrm
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\SaveRuleCriteriaCrmRequest $paramSaveRuleCriteriaCrmRequest
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\SaveRuleCriteriaCrmResponse|bool
     */
    public function saveRuleCriteriaCrm(\Pggns\MidocoApi\Api\Workflow\StructType\SaveRuleCriteriaCrmRequest $paramSaveRuleCriteriaCrmRequest)
    {
        try {
            $this->setResult($resultSaveRuleCriteriaCrm = $this->getSoapClient()->__soapCall('saveRuleCriteriaCrm', [
                $paramSaveRuleCriteriaCrmRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveRuleCriteriaCrm;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveRuleCriteriaOrderAttribute
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\SaveRuleCriteriaOrderAttributeRequest $paramSaveRuleCriteriaOrderAttributeRequest
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\SaveRuleCriteriaOrderAttributeResponse|bool
     */
    public function saveRuleCriteriaOrderAttribute(\Pggns\MidocoApi\Api\Workflow\StructType\SaveRuleCriteriaOrderAttributeRequest $paramSaveRuleCriteriaOrderAttributeRequest)
    {
        try {
            $this->setResult($resultSaveRuleCriteriaOrderAttribute = $this->getSoapClient()->__soapCall('saveRuleCriteriaOrderAttribute', [
                $paramSaveRuleCriteriaOrderAttributeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveRuleCriteriaOrderAttribute;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveMyTaskViews
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\SaveMyTaskViewsRequest $paramSaveMyTaskViewsRequest
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\SaveMyTaskViewsResponse|bool
     */
    public function saveMyTaskViews(\Pggns\MidocoApi\Api\Workflow\StructType\SaveMyTaskViewsRequest $paramSaveMyTaskViewsRequest)
    {
        try {
            $this->setResult($resultSaveMyTaskViews = $this->getSoapClient()->__soapCall('saveMyTaskViews', [
                $paramSaveMyTaskViewsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveMyTaskViews;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveMyTaskViewQueues
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\SaveMyTaskViewQueuesRequest $paramSaveMyTaskViewQueuesRequest
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\SaveMyTaskViewQueuesResponse|bool
     */
    public function saveMyTaskViewQueues(\Pggns\MidocoApi\Api\Workflow\StructType\SaveMyTaskViewQueuesRequest $paramSaveMyTaskViewQueuesRequest)
    {
        try {
            $this->setResult($resultSaveMyTaskViewQueues = $this->getSoapClient()->__soapCall('saveMyTaskViewQueues', [
                $paramSaveMyTaskViewQueuesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveMyTaskViewQueues;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveMyTaskViewUnits
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\SaveMyTaskViewUnitsRequest $paramSaveMyTaskViewUnitsRequest
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\SaveMyTaskViewUnitsResponse|bool
     */
    public function saveMyTaskViewUnits(\Pggns\MidocoApi\Api\Workflow\StructType\SaveMyTaskViewUnitsRequest $paramSaveMyTaskViewUnitsRequest)
    {
        try {
            $this->setResult($resultSaveMyTaskViewUnits = $this->getSoapClient()->__soapCall('saveMyTaskViewUnits', [
                $paramSaveMyTaskViewUnitsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveMyTaskViewUnits;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\SaveGlobalNoticeCommentResponse|\Pggns\MidocoApi\Api\Workflow\StructType\SaveGlobalNoticesResponse|\Pggns\MidocoApi\Api\Workflow\StructType\SaveMidocoTaskDefinitionDescriptionResponse|\Pggns\MidocoApi\Api\Workflow\StructType\SaveMidocoTaskDefinitionResponse|\Pggns\MidocoApi\Api\Workflow\StructType\SaveMidocoTaskPriorityResponse|\Pggns\MidocoApi\Api\Workflow\StructType\SaveMyTaskViewQueuesResponse|\Pggns\MidocoApi\Api\Workflow\StructType\SaveMyTaskViewsResponse|\Pggns\MidocoApi\Api\Workflow\StructType\SaveMyTaskViewUnitsResponse|\Pggns\MidocoApi\Api\Workflow\StructType\SaveRuleCriteriaCrmAttributeResponse|\Pggns\MidocoApi\Api\Workflow\StructType\SaveRuleCriteriaCrmResponse|\Pggns\MidocoApi\Api\Workflow\StructType\SaveRuleCriteriaOrderAttributeResponse|\Pggns\MidocoApi\Api\Workflow\StructType\SaveRuleCriteriaOrderResponse|\Pggns\MidocoApi\Api\Workflow\StructType\SaveRuleDefinitionResponse|\Pggns\MidocoApi\Api\Workflow\StructType\SaveTaskResponse|\Pggns\MidocoApi\Api\Workflow\StructType\SaveWorkingUserResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
