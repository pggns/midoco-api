<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\OrderSD\ServiceType;

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
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Api\OrderSD\ServiceType\_List
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named listAvailableSuppCancelCMapping
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\ListSuppCancelCMappingRequest $paramListSuppCancelCMappingRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\ListSuppCancelCMappingResponse|bool
     */
    public function listAvailableSuppCancelCMapping(\Pggns\MidocoApi\Api\OrderSD\StructType\ListSuppCancelCMappingRequest $paramListSuppCancelCMappingRequest)
    {
        try {
            $this->setResult($resultListAvailableSuppCancelCMapping = $this->getSoapClient()->__soapCall('listAvailableSuppCancelCMapping', [
                $paramListSuppCancelCMappingRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultListAvailableSuppCancelCMapping;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named listAvailableSuppCancelCEmail
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\ListSuppCancelCEmailRequest $paramListSuppCancelCEmailRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\ListSuppCancelCEmailResponse|bool
     */
    public function listAvailableSuppCancelCEmail(\Pggns\MidocoApi\Api\OrderSD\StructType\ListSuppCancelCEmailRequest $paramListSuppCancelCEmailRequest)
    {
        try {
            $this->setResult($resultListAvailableSuppCancelCEmail = $this->getSoapClient()->__soapCall('listAvailableSuppCancelCEmail', [
                $paramListSuppCancelCEmailRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultListAvailableSuppCancelCEmail;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named listMidocoFeeTypes
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\ListMidocoFeeTypesRequest $paramListMidocoFeeTypesRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\ListMidocoFeeTypesResponse|bool
     */
    public function listMidocoFeeTypes(\Pggns\MidocoApi\Api\OrderSD\StructType\ListMidocoFeeTypesRequest $paramListMidocoFeeTypesRequest)
    {
        try {
            $this->setResult($resultListMidocoFeeTypes = $this->getSoapClient()->__soapCall('listMidocoFeeTypes', [
                $paramListMidocoFeeTypesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultListMidocoFeeTypes;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named listMidocoFeeTypesLocal
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\ListMidocoFeeTypesLocalRequest $paramListMidocoFeeTypesLocalRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\ListMidocoFeeTypesLocalResponse|bool
     */
    public function listMidocoFeeTypesLocal(\Pggns\MidocoApi\Api\OrderSD\StructType\ListMidocoFeeTypesLocalRequest $paramListMidocoFeeTypesLocalRequest)
    {
        try {
            $this->setResult($resultListMidocoFeeTypesLocal = $this->getSoapClient()->__soapCall('listMidocoFeeTypesLocal', [
                $paramListMidocoFeeTypesLocalRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultListMidocoFeeTypesLocal;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named listAssignedMidocoFeeTypes
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\ListAssignedMidocoFeeTypesRequest $paramListAssignedMidocoFeeTypesRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\ListAssignedMidocoFeeTypesResponse|bool
     */
    public function listAssignedMidocoFeeTypes(\Pggns\MidocoApi\Api\OrderSD\StructType\ListAssignedMidocoFeeTypesRequest $paramListAssignedMidocoFeeTypesRequest)
    {
        try {
            $this->setResult($resultListAssignedMidocoFeeTypes = $this->getSoapClient()->__soapCall('listAssignedMidocoFeeTypes', [
                $paramListAssignedMidocoFeeTypesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultListAssignedMidocoFeeTypes;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named listCashBookItemTypes
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\ListCashBookItemTypesRequest $paramListCashBookItemTypesRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\ListCashBookItemTypesResponse|bool
     */
    public function listCashBookItemTypes(\Pggns\MidocoApi\Api\OrderSD\StructType\ListCashBookItemTypesRequest $paramListCashBookItemTypesRequest)
    {
        try {
            $this->setResult($resultListCashBookItemTypes = $this->getSoapClient()->__soapCall('listCashBookItemTypes', [
                $paramListCashBookItemTypesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultListCashBookItemTypes;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named listSettlementCharges
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\ListSettlementChargesRequest $paramListSettlementChargesRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\ListSettlementChargesResponse|bool
     */
    public function listSettlementCharges(\Pggns\MidocoApi\Api\OrderSD\StructType\ListSettlementChargesRequest $paramListSettlementChargesRequest)
    {
        try {
            $this->setResult($resultListSettlementCharges = $this->getSoapClient()->__soapCall('listSettlementCharges', [
                $paramListSettlementChargesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultListSettlementCharges;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named listSettlementChargesForOrgUnit
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\ListSettlementChargesForOrgUnitRequest $paramListSettlementChargesForOrgUnitRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\ListSettlementChargesForOrgUnitResponse|bool
     */
    public function listSettlementChargesForOrgUnit(\Pggns\MidocoApi\Api\OrderSD\StructType\ListSettlementChargesForOrgUnitRequest $paramListSettlementChargesForOrgUnitRequest)
    {
        try {
            $this->setResult($resultListSettlementChargesForOrgUnit = $this->getSoapClient()->__soapCall('listSettlementChargesForOrgUnit', [
                $paramListSettlementChargesForOrgUnitRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultListSettlementChargesForOrgUnit;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named listUserQueries
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\ListUserQueriesRequest $paramListUserQueriesRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\ListUserQueriesResponse|bool
     */
    public function listUserQueries(\Pggns\MidocoApi\Api\OrderSD\StructType\ListUserQueriesRequest $paramListUserQueriesRequest)
    {
        try {
            $this->setResult($resultListUserQueries = $this->getSoapClient()->__soapCall('listUserQueries', [
                $paramListUserQueriesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultListUserQueries;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named listMidocoQuestion
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\ListMidocoQuestionRequest $paramListMidocoQuestionRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\ListMidocoQuestionResponse|bool
     */
    public function listMidocoQuestion(\Pggns\MidocoApi\Api\OrderSD\StructType\ListMidocoQuestionRequest $paramListMidocoQuestionRequest)
    {
        try {
            $this->setResult($resultListMidocoQuestion = $this->getSoapClient()->__soapCall('listMidocoQuestion', [
                $paramListMidocoQuestionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultListMidocoQuestion;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named listMidocoQuestionValue
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\ListMidocoQuestionValueRequest $paramListMidocoQuestionValueRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\ListMidocoQuestionValueResponse|bool
     */
    public function listMidocoQuestionValue(\Pggns\MidocoApi\Api\OrderSD\StructType\ListMidocoQuestionValueRequest $paramListMidocoQuestionValueRequest)
    {
        try {
            $this->setResult($resultListMidocoQuestionValue = $this->getSoapClient()->__soapCall('listMidocoQuestionValue', [
                $paramListMidocoQuestionValueRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultListMidocoQuestionValue;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named listOrdCriteriaTypeCategories
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\ListOrdCriteriaTypeCategoriesRequest $paramListOrdCriteriaTypeCategoriesRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\ListOrdCriteriaTypeCategoriesResponse|bool
     */
    public function listOrdCriteriaTypeCategories(\Pggns\MidocoApi\Api\OrderSD\StructType\ListOrdCriteriaTypeCategoriesRequest $paramListOrdCriteriaTypeCategoriesRequest)
    {
        try {
            $this->setResult($resultListOrdCriteriaTypeCategories = $this->getSoapClient()->__soapCall('listOrdCriteriaTypeCategories', [
                $paramListOrdCriteriaTypeCategoriesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultListOrdCriteriaTypeCategories;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named listSupplierCommissionConditions
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\ListSupplierCommissionConditionsRequest $paramListSupplierCommissionConditionsRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\ListSupplierCommissionConditionsResponse|bool
     */
    public function listSupplierCommissionConditions(\Pggns\MidocoApi\Api\OrderSD\StructType\ListSupplierCommissionConditionsRequest $paramListSupplierCommissionConditionsRequest)
    {
        try {
            $this->setResult($resultListSupplierCommissionConditions = $this->getSoapClient()->__soapCall('listSupplierCommissionConditions', [
                $paramListSupplierCommissionConditionsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultListSupplierCommissionConditions;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named listCabinClass
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\ListCabinClassRequest $paramListCabinClassRequest
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\ListCabinClassResponse|bool
     */
    public function listCabinClass(\Pggns\MidocoApi\Api\OrderSD\StructType\ListCabinClassRequest $paramListCabinClassRequest)
    {
        try {
            $this->setResult($resultListCabinClass = $this->getSoapClient()->__soapCall('listCabinClass', [
                $paramListCabinClassRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultListCabinClass;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\ListAssignedMidocoFeeTypesResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\ListCabinClassResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\ListCashBookItemTypesResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\ListMidocoFeeTypesLocalResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\ListMidocoFeeTypesResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\ListMidocoQuestionResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\ListMidocoQuestionValueResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\ListOrdCriteriaTypeCategoriesResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\ListSettlementChargesForOrgUnitResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\ListSettlementChargesResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\ListSuppCancelCEmailResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\ListSuppCancelCMappingResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\ListSupplierCommissionConditionsResponse|\Pggns\MidocoApi\Api\OrderSD\StructType\ListUserQueriesResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
