<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Workflow\ServiceType;

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
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Api\Workflow\ServiceType\Delete
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Api\Workflow\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named deleteSubject
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\DeleteSubjectRequest $paramDeleteSubjectRequest
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\DeleteSubjectResponse|bool
     */
    public function deleteSubject(\Pggns\MidocoApi\Api\Workflow\StructType\DeleteSubjectRequest $paramDeleteSubjectRequest)
    {
        try {
            $this->setResult($resultDeleteSubject = $this->getSoapClient()->__soapCall('deleteSubject', [
                $paramDeleteSubjectRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteSubject;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteGlobalNotices
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\DeleteGlobalNoticesRequest $paramDeleteGlobalNoticesRequest
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\DeleteGlobalNoticesResponse|bool
     */
    public function deleteGlobalNotices(\Pggns\MidocoApi\Api\Workflow\StructType\DeleteGlobalNoticesRequest $paramDeleteGlobalNoticesRequest)
    {
        try {
            $this->setResult($resultDeleteGlobalNotices = $this->getSoapClient()->__soapCall('deleteGlobalNotices', [
                $paramDeleteGlobalNoticesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteGlobalNotices;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteMidocoTaskDefinition
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\DeleteMidocoTaskDefinitionRequest $paramDeleteMidocoTaskDefinitionRequest
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\DeleteMidocoTaskDefinitionResponse|bool
     */
    public function deleteMidocoTaskDefinition(\Pggns\MidocoApi\Api\Workflow\StructType\DeleteMidocoTaskDefinitionRequest $paramDeleteMidocoTaskDefinitionRequest)
    {
        try {
            $this->setResult($resultDeleteMidocoTaskDefinition = $this->getSoapClient()->__soapCall('deleteMidocoTaskDefinition', [
                $paramDeleteMidocoTaskDefinitionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteMidocoTaskDefinition;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteMidocoTaskPriority
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\DeleteMidocoTaskPriorityRequest $paramDeleteMidocoTaskPriorityRequest
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\DeleteMidocoTaskPriorityResponse|bool
     */
    public function deleteMidocoTaskPriority(\Pggns\MidocoApi\Api\Workflow\StructType\DeleteMidocoTaskPriorityRequest $paramDeleteMidocoTaskPriorityRequest)
    {
        try {
            $this->setResult($resultDeleteMidocoTaskPriority = $this->getSoapClient()->__soapCall('deleteMidocoTaskPriority', [
                $paramDeleteMidocoTaskPriorityRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteMidocoTaskPriority;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * deleteMidocoTaskDefinitionDescription
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\DeleteMidocoTaskDefinitionDescriptionRequest $paramDeleteMidocoTaskDefinitionDescriptionRequest
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\DeleteMidocoTaskDefinitionDescriptionResponse|bool
     */
    public function deleteMidocoTaskDefinitionDescription(\Pggns\MidocoApi\Api\Workflow\StructType\DeleteMidocoTaskDefinitionDescriptionRequest $paramDeleteMidocoTaskDefinitionDescriptionRequest)
    {
        try {
            $this->setResult($resultDeleteMidocoTaskDefinitionDescription = $this->getSoapClient()->__soapCall('deleteMidocoTaskDefinitionDescription', [
                $paramDeleteMidocoTaskDefinitionDescriptionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteMidocoTaskDefinitionDescription;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteRuleDefinition
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\DeleteRuleDefinitionRequest $paramDeleteRuleDefinitionRequest
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\DeleteRuleDefinitionResponse|bool
     */
    public function deleteRuleDefinition(\Pggns\MidocoApi\Api\Workflow\StructType\DeleteRuleDefinitionRequest $paramDeleteRuleDefinitionRequest)
    {
        try {
            $this->setResult($resultDeleteRuleDefinition = $this->getSoapClient()->__soapCall('deleteRuleDefinition', [
                $paramDeleteRuleDefinitionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteRuleDefinition;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteRuleCriteriaOrder
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\DeleteRuleCriteriaOrderRequest $paramDeleteRuleCriteriaOrderRequest
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\DeleteRuleCriteriaOrderResponse|bool
     */
    public function deleteRuleCriteriaOrder(\Pggns\MidocoApi\Api\Workflow\StructType\DeleteRuleCriteriaOrderRequest $paramDeleteRuleCriteriaOrderRequest)
    {
        try {
            $this->setResult($resultDeleteRuleCriteriaOrder = $this->getSoapClient()->__soapCall('deleteRuleCriteriaOrder', [
                $paramDeleteRuleCriteriaOrderRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteRuleCriteriaOrder;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteRuleCriteriaCrmAttribute
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\DeleteRuleCriteriaCrmAttributeRequest $paramDeleteRuleCriteriaCrmAttributeRequest
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\DeleteRuleCriteriaCrmAttributeResponse|bool
     */
    public function deleteRuleCriteriaCrmAttribute(\Pggns\MidocoApi\Api\Workflow\StructType\DeleteRuleCriteriaCrmAttributeRequest $paramDeleteRuleCriteriaCrmAttributeRequest)
    {
        try {
            $this->setResult($resultDeleteRuleCriteriaCrmAttribute = $this->getSoapClient()->__soapCall('deleteRuleCriteriaCrmAttribute', [
                $paramDeleteRuleCriteriaCrmAttributeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteRuleCriteriaCrmAttribute;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteRuleCriteriaCrm
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\DeleteRuleCriteriaCrmRequest $paramDeleteRuleCriteriaCrmRequest
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\DeleteRuleCriteriaCrmResponse|bool
     */
    public function deleteRuleCriteriaCrm(\Pggns\MidocoApi\Api\Workflow\StructType\DeleteRuleCriteriaCrmRequest $paramDeleteRuleCriteriaCrmRequest)
    {
        try {
            $this->setResult($resultDeleteRuleCriteriaCrm = $this->getSoapClient()->__soapCall('deleteRuleCriteriaCrm', [
                $paramDeleteRuleCriteriaCrmRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteRuleCriteriaCrm;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteRuleCriteriaOrderAttribute
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Workflow\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Workflow\StructType\DeleteRuleCriteriaOrderAttributeRequest $paramDeleteRuleCriteriaOrderAttributeRequest
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\DeleteRuleCriteriaOrderAttributeResponse|bool
     */
    public function deleteRuleCriteriaOrderAttribute(\Pggns\MidocoApi\Api\Workflow\StructType\DeleteRuleCriteriaOrderAttributeRequest $paramDeleteRuleCriteriaOrderAttributeRequest)
    {
        try {
            $this->setResult($resultDeleteRuleCriteriaOrderAttribute = $this->getSoapClient()->__soapCall('deleteRuleCriteriaOrderAttribute', [
                $paramDeleteRuleCriteriaOrderAttributeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteRuleCriteriaOrderAttribute;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\DeleteGlobalNoticesResponse|\Pggns\MidocoApi\Api\Workflow\StructType\DeleteMidocoTaskDefinitionDescriptionResponse|\Pggns\MidocoApi\Api\Workflow\StructType\DeleteMidocoTaskDefinitionResponse|\Pggns\MidocoApi\Api\Workflow\StructType\DeleteMidocoTaskPriorityResponse|\Pggns\MidocoApi\Api\Workflow\StructType\DeleteRuleCriteriaCrmAttributeResponse|\Pggns\MidocoApi\Api\Workflow\StructType\DeleteRuleCriteriaCrmResponse|\Pggns\MidocoApi\Api\Workflow\StructType\DeleteRuleCriteriaOrderAttributeResponse|\Pggns\MidocoApi\Api\Workflow\StructType\DeleteRuleCriteriaOrderResponse|\Pggns\MidocoApi\Api\Workflow\StructType\DeleteRuleDefinitionResponse|\Pggns\MidocoApi\Api\Workflow\StructType\DeleteSubjectResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
