<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\ServiceType;

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
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Api\CrmSD\ServiceType\Save
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named saveExternalSystem
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\SaveExternalSystemRequest $paramSaveExternalSystemRequest
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\SaveExternalSystemResponse|bool
     */
    public function saveExternalSystem(\Pggns\MidocoApi\Api\CrmSD\StructType\SaveExternalSystemRequest $paramSaveExternalSystemRequest)
    {
        try {
            $this->setResult($resultSaveExternalSystem = $this->getSoapClient()->__soapCall('saveExternalSystem', [
                $paramSaveExternalSystemRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveExternalSystem;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * saveExternalSystemAttributeAttribute
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\SaveExternalSystemAttributeRequest $paramSaveExternalSystemAttributeRequest
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\SaveExternalSystemAttributeResponse|bool
     */
    public function saveExternalSystemAttributeAttribute(\Pggns\MidocoApi\Api\CrmSD\StructType\SaveExternalSystemAttributeRequest $paramSaveExternalSystemAttributeRequest)
    {
        try {
            $this->setResult($resultSaveExternalSystemAttributeAttribute = $this->getSoapClient()->__soapCall('saveExternalSystemAttributeAttribute', [
                $paramSaveExternalSystemAttributeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveExternalSystemAttributeAttribute;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveInvoiceFileFormat
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\SaveInvoiceFileFormatRequest $paramSaveInvoiceFileFormatRequest
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\SaveInvoiceFileFormatResponse|bool
     */
    public function saveInvoiceFileFormat(\Pggns\MidocoApi\Api\CrmSD\StructType\SaveInvoiceFileFormatRequest $paramSaveInvoiceFileFormatRequest)
    {
        try {
            $this->setResult($resultSaveInvoiceFileFormat = $this->getSoapClient()->__soapCall('saveInvoiceFileFormat', [
                $paramSaveInvoiceFileFormatRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveInvoiceFileFormat;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveDebitCardType
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\SaveDebitCardTypeRequest $paramSaveDebitCardTypeRequest
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\SaveDebitCardTypeResponse|bool
     */
    public function saveDebitCardType(\Pggns\MidocoApi\Api\CrmSD\StructType\SaveDebitCardTypeRequest $paramSaveDebitCardTypeRequest)
    {
        try {
            $this->setResult($resultSaveDebitCardType = $this->getSoapClient()->__soapCall('saveDebitCardType', [
                $paramSaveDebitCardTypeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveDebitCardType;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveJobFunction
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\SaveJobFunctionRequest $paramSaveJobFunctionRequest
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\SaveJobFunctionResponse|bool
     */
    public function saveJobFunction(\Pggns\MidocoApi\Api\CrmSD\StructType\SaveJobFunctionRequest $paramSaveJobFunctionRequest)
    {
        try {
            $this->setResult($resultSaveJobFunction = $this->getSoapClient()->__soapCall('saveJobFunction', [
                $paramSaveJobFunctionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveJobFunction;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveCommissionDefinition
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\SaveCommissionDefinitionRequest $paramSaveCommissionDefinitionRequest
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\SaveCommissionDefinitionResponse|bool
     */
    public function saveCommissionDefinition(\Pggns\MidocoApi\Api\CrmSD\StructType\SaveCommissionDefinitionRequest $paramSaveCommissionDefinitionRequest)
    {
        try {
            $this->setResult($resultSaveCommissionDefinition = $this->getSoapClient()->__soapCall('saveCommissionDefinition', [
                $paramSaveCommissionDefinitionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveCommissionDefinition;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveCommissionDefinitionLevel
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\SaveCommissionDefinitionLevelRequest $paramSaveCommissionDefinitionLevelRequest
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\SaveCommissionDefinitionLevelResponse|bool
     */
    public function saveCommissionDefinitionLevel(\Pggns\MidocoApi\Api\CrmSD\StructType\SaveCommissionDefinitionLevelRequest $paramSaveCommissionDefinitionLevelRequest)
    {
        try {
            $this->setResult($resultSaveCommissionDefinitionLevel = $this->getSoapClient()->__soapCall('saveCommissionDefinitionLevel', [
                $paramSaveCommissionDefinitionLevelRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveCommissionDefinitionLevel;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * saveCriteriaTypeCategoryDescription
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\SaveCriteriaTypeCategoryDescriptionRequest $paramSaveCriteriaTypeCategoryDescriptionRequest
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\SaveCriteriaTypeCategoryDescriptionResponse|bool
     */
    public function saveCriteriaTypeCategoryDescription(\Pggns\MidocoApi\Api\CrmSD\StructType\SaveCriteriaTypeCategoryDescriptionRequest $paramSaveCriteriaTypeCategoryDescriptionRequest)
    {
        try {
            $this->setResult($resultSaveCriteriaTypeCategoryDescription = $this->getSoapClient()->__soapCall('saveCriteriaTypeCategoryDescription', [
                $paramSaveCriteriaTypeCategoryDescriptionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveCriteriaTypeCategoryDescription;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveCriteriaTypeCategory
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\SaveCriteriaTypeCategoryRequest $paramSaveCriteriaTypeCategoryRequest
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\SaveCriteriaTypeCategoryResponse|bool
     */
    public function saveCriteriaTypeCategory(\Pggns\MidocoApi\Api\CrmSD\StructType\SaveCriteriaTypeCategoryRequest $paramSaveCriteriaTypeCategoryRequest)
    {
        try {
            $this->setResult($resultSaveCriteriaTypeCategory = $this->getSoapClient()->__soapCall('saveCriteriaTypeCategory', [
                $paramSaveCriteriaTypeCategoryRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveCriteriaTypeCategory;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveDictionaryName
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\SaveDictionaryNameRequest $paramSaveDictionaryNameRequest
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\SaveDictionaryNameResponse|bool
     */
    public function saveDictionaryName(\Pggns\MidocoApi\Api\CrmSD\StructType\SaveDictionaryNameRequest $paramSaveDictionaryNameRequest)
    {
        try {
            $this->setResult($resultSaveDictionaryName = $this->getSoapClient()->__soapCall('saveDictionaryName', [
                $paramSaveDictionaryNameRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveDictionaryName;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveBookingSource
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\SaveBookingSourceRequest $paramSaveBookingSourceRequest
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\SaveBookingSourceResponse|bool
     */
    public function saveBookingSource(\Pggns\MidocoApi\Api\CrmSD\StructType\SaveBookingSourceRequest $paramSaveBookingSourceRequest)
    {
        try {
            $this->setResult($resultSaveBookingSource = $this->getSoapClient()->__soapCall('saveBookingSource', [
                $paramSaveBookingSourceRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveBookingSource;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveTextTemplateType
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\SaveTextTemplateTypeRequest $paramSaveTextTemplateTypeRequest
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\SaveTextTemplateTypeResponse|bool
     */
    public function saveTextTemplateType(\Pggns\MidocoApi\Api\CrmSD\StructType\SaveTextTemplateTypeRequest $paramSaveTextTemplateTypeRequest)
    {
        try {
            $this->setResult($resultSaveTextTemplateType = $this->getSoapClient()->__soapCall('saveTextTemplateType', [
                $paramSaveTextTemplateTypeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveTextTemplateType;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named savePersonTitle
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\SavePersonTitleRequest $paramSavePersonTitleRequest
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\SavePersonTitleResponse|bool
     */
    public function savePersonTitle(\Pggns\MidocoApi\Api\CrmSD\StructType\SavePersonTitleRequest $paramSavePersonTitleRequest)
    {
        try {
            $this->setResult($resultSavePersonTitle = $this->getSoapClient()->__soapCall('savePersonTitle', [
                $paramSavePersonTitleRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSavePersonTitle;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveConsent
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\SaveConsentRequest $paramSaveConsentRequest
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\SaveConsentResponse|bool
     */
    public function saveConsent(\Pggns\MidocoApi\Api\CrmSD\StructType\SaveConsentRequest $paramSaveConsentRequest)
    {
        try {
            $this->setResult($resultSaveConsent = $this->getSoapClient()->__soapCall('saveConsent', [
                $paramSaveConsentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveConsent;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveConsentUnits
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\SaveConsentUnitsRequest $paramSaveConsentUnitsRequest
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\SaveConsentUnitsResponse|bool
     */
    public function saveConsentUnits(\Pggns\MidocoApi\Api\CrmSD\StructType\SaveConsentUnitsRequest $paramSaveConsentUnitsRequest)
    {
        try {
            $this->setResult($resultSaveConsentUnits = $this->getSoapClient()->__soapCall('saveConsentUnits', [
                $paramSaveConsentUnitsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveConsentUnits;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\SaveBookingSourceResponse|\Pggns\MidocoApi\Api\CrmSD\StructType\SaveCommissionDefinitionLevelResponse|\Pggns\MidocoApi\Api\CrmSD\StructType\SaveCommissionDefinitionResponse|\Pggns\MidocoApi\Api\CrmSD\StructType\SaveConsentResponse|\Pggns\MidocoApi\Api\CrmSD\StructType\SaveConsentUnitsResponse|\Pggns\MidocoApi\Api\CrmSD\StructType\SaveCriteriaTypeCategoryDescriptionResponse|\Pggns\MidocoApi\Api\CrmSD\StructType\SaveCriteriaTypeCategoryResponse|\Pggns\MidocoApi\Api\CrmSD\StructType\SaveDebitCardTypeResponse|\Pggns\MidocoApi\Api\CrmSD\StructType\SaveDictionaryNameResponse|\Pggns\MidocoApi\Api\CrmSD\StructType\SaveExternalSystemAttributeResponse|\Pggns\MidocoApi\Api\CrmSD\StructType\SaveExternalSystemResponse|\Pggns\MidocoApi\Api\CrmSD\StructType\SaveInvoiceFileFormatResponse|\Pggns\MidocoApi\Api\CrmSD\StructType\SaveJobFunctionResponse|\Pggns\MidocoApi\Api\CrmSD\StructType\SavePersonTitleResponse|\Pggns\MidocoApi\Api\CrmSD\StructType\SaveTextTemplateTypeResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
