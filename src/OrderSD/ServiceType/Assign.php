<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\OrderSD\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Assign ServiceType
 * @subpackage Services
 */
class Assign extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Api\OrderSD\ServiceType\Assign
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named assignMidocoRuleSet
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\AssignMidocoRuleRequest $paramAssignMidocoRuleRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\AssignMidocoRuleResponse|bool
     */
    public function assignMidocoRuleSet(\Pggns\MidocoApi\Api\OrderSD\StructType\AssignMidocoRuleRequest $paramAssignMidocoRuleRequest)
    {
        try {
            $this->setResult($resultAssignMidocoRuleSet = $this->getSoapClient()->__soapCall('assignMidocoRuleSet', [
                $paramAssignMidocoRuleRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultAssignMidocoRuleSet;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named assignTemplateToSuppliers
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\TemplateSuppliersAssignType $paramAssignTemplateToSuppliersRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\AssignTemplateToSuppliersResponse|bool
     */
    public function assignTemplateToSuppliers(\Pggns\MidocoApi\Api\OrderSD\StructType\TemplateSuppliersAssignType $paramAssignTemplateToSuppliersRequest)
    {
        try {
            $this->setResult($resultAssignTemplateToSuppliers = $this->getSoapClient()->__soapCall('assignTemplateToSuppliers', [
                $paramAssignTemplateToSuppliersRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultAssignTemplateToSuppliers;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named assignOrdCriteriaTypesToCategory
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\AssignOrdCriteriaTypesToCategoryRequest $paramAssignOrdCriteriaTypesToCategoryRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\AssignOrdCriteriaTypesToCategoryResponse|bool
     */
    public function assignOrdCriteriaTypesToCategory(\Pggns\MidocoApi\Api\OrderSD\StructType\AssignOrdCriteriaTypesToCategoryRequest $paramAssignOrdCriteriaTypesToCategoryRequest)
    {
        try {
            $this->setResult($resultAssignOrdCriteriaTypesToCategory = $this->getSoapClient()->__soapCall('assignOrdCriteriaTypesToCategory', [
                $paramAssignOrdCriteriaTypesToCategoryRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultAssignOrdCriteriaTypesToCategory;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\AssignMidocoRuleResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\AssignOrdCriteriaTypesToCategoryResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\AssignTemplateToSuppliersResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
