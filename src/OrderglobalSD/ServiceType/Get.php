<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\OrderglobalSD\ServiceType;

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
     * @param \Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Api\OrderglobalSD\ServiceType\Get
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named getAirportDescription
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetAirportDescriptionRequest $paramGetAirportDescriptionRequest
     * @return \Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetAirportDescriptionResponse|bool
     */
    public function getAirportDescription(\Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetAirportDescriptionRequest $paramGetAirportDescriptionRequest)
    {
        try {
            $this->setResult($resultGetAirportDescription = $this->getSoapClient()->__soapCall('getAirportDescription', [
                $paramGetAirportDescriptionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAirportDescription;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAirportDescriptionWithLanguage
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetAirportDescriptionWithLanguageRequest $paramGetAirportDescriptionWithLanguageRequest
     * @return \Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetAirportDescriptionWithLanguageResponse|bool
     */
    public function getAirportDescriptionWithLanguage(\Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetAirportDescriptionWithLanguageRequest $paramGetAirportDescriptionWithLanguageRequest)
    {
        try {
            $this->setResult($resultGetAirportDescriptionWithLanguage = $this->getSoapClient()->__soapCall('getAirportDescriptionWithLanguage', [
                $paramGetAirportDescriptionWithLanguageRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAirportDescriptionWithLanguage;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAirportFullDescription
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoAirportFullDescriptionRequest $paramMidocoAirportFullDescriptionRequest
     * @return \Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoAirportFullDescriptionResponse|bool
     */
    public function getAirportFullDescription(\Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoAirportFullDescriptionRequest $paramMidocoAirportFullDescriptionRequest)
    {
        try {
            $this->setResult($resultGetAirportFullDescription = $this->getSoapClient()->__soapCall('getAirportFullDescription', [
                $paramMidocoAirportFullDescriptionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAirportFullDescription;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAvailableAirportDescriptions
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetAvailableAirportDescriptionsRequest $paramGetAvailableAirportDescriptionsRequest
     * @return \Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetAvailableAirportDescriptionsResponse|bool
     */
    public function getAvailableAirportDescriptions(\Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetAvailableAirportDescriptionsRequest $paramGetAvailableAirportDescriptionsRequest)
    {
        try {
            $this->setResult($resultGetAvailableAirportDescriptions = $this->getSoapClient()->__soapCall('getAvailableAirportDescriptions', [
                $paramGetAvailableAirportDescriptionsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAvailableAirportDescriptions;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAvailableAirlineDescriptions
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetAvailableAirlineDescriptionsRequest $paramGetAvailableAirlineDescriptionsRequest
     * @return \Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetAvailableAirlineDescriptionsResponse|bool
     */
    public function getAvailableAirlineDescriptions(\Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetAvailableAirlineDescriptionsRequest $paramGetAvailableAirlineDescriptionsRequest)
    {
        try {
            $this->setResult($resultGetAvailableAirlineDescriptions = $this->getSoapClient()->__soapCall('getAvailableAirlineDescriptions', [
                $paramGetAvailableAirlineDescriptionsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAvailableAirlineDescriptions;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getVATPercents
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetVATPercentsRequest $paramGetVATPercentsRequest
     * @return \Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetVATPercentsResponse|bool
     */
    public function getVATPercents(\Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetVATPercentsRequest $paramGetVATPercentsRequest)
    {
        try {
            $this->setResult($resultGetVATPercents = $this->getSoapClient()->__soapCall('getVATPercents', [
                $paramGetVATPercentsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetVATPercents;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCurrencyForCountry
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetCurrencyForCountryRequest $paramGetCurrencyForCountryRequest
     * @return \Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetCurrencyForCountryResponse|bool
     */
    public function getCurrencyForCountry(\Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetCurrencyForCountryRequest $paramGetCurrencyForCountryRequest)
    {
        try {
            $this->setResult($resultGetCurrencyForCountry = $this->getSoapClient()->__soapCall('getCurrencyForCountry', [
                $paramGetCurrencyForCountryRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCurrencyForCountry;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAccountPlan
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetAccountPlanRequest $paramGetAccountPlanRequest
     * @return \Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetAccountPlanResponse|bool
     */
    public function getAccountPlan(\Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetAccountPlanRequest $paramGetAccountPlanRequest)
    {
        try {
            $this->setResult($resultGetAccountPlan = $this->getSoapClient()->__soapCall('getAccountPlan', [
                $paramGetAccountPlanRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAccountPlan;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCurrencyForOrgUnit
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetCurrencyForOrgUnitRequest $paramGetCurrencyForOrgUnitRequest
     * @return \Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetCurrencyForOrgUnitResponse|bool
     */
    public function getCurrencyForOrgUnit(\Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetCurrencyForOrgUnitRequest $paramGetCurrencyForOrgUnitRequest)
    {
        try {
            $this->setResult($resultGetCurrencyForOrgUnit = $this->getSoapClient()->__soapCall('getCurrencyForOrgUnit', [
                $paramGetCurrencyForOrgUnitRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCurrencyForOrgUnit;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAirlineForBSPCode
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetAirlineForBSPCodeRequest $paramGetAirlineForBSPCodeRequest
     * @return \Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetAirlineForBSPCodeResponse|bool
     */
    public function getAirlineForBSPCode(\Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetAirlineForBSPCodeRequest $paramGetAirlineForBSPCodeRequest)
    {
        try {
            $this->setResult($resultGetAirlineForBSPCode = $this->getSoapClient()->__soapCall('getAirlineForBSPCode', [
                $paramGetAirlineForBSPCodeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAirlineForBSPCode;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAirlineByCode
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetAirlineByCodeRequest $paramGetAirlineByCodeRequest
     * @return \Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetAirlineByCodeResponse|bool
     */
    public function getAirlineByCode(\Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetAirlineByCodeRequest $paramGetAirlineByCodeRequest)
    {
        try {
            $this->setResult($resultGetAirlineByCode = $this->getSoapClient()->__soapCall('getAirlineByCode', [
                $paramGetAirlineByCodeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAirlineByCode;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getValidVatCodes
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetValidVatCodesRequest $paramGetValidVatCodesRequest
     * @return \Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetValidVatCodesResponse|bool
     */
    public function getValidVatCodes(\Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetValidVatCodesRequest $paramGetValidVatCodesRequest)
    {
        try {
            $this->setResult($resultGetValidVatCodes = $this->getSoapClient()->__soapCall('getValidVatCodes', [
                $paramGetValidVatCodesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetValidVatCodes;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAirportCountry
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetAirportCountryRequest $paramGetAirportCountryRequest
     * @return \Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetAirportCountryResponse|bool
     */
    public function getAirportCountry(\Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetAirportCountryRequest $paramGetAirportCountryRequest)
    {
        try {
            $this->setResult($resultGetAirportCountry = $this->getSoapClient()->__soapCall('getAirportCountry', [
                $paramGetAirportCountryRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAirportCountry;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMergedServiceStatus
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetMergedServiceStatusRequest $paramGetMergedServiceStatusRequest
     * @return \Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetMergedServiceStatusResponse|bool
     */
    public function getMergedServiceStatus(\Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetMergedServiceStatusRequest $paramGetMergedServiceStatusRequest)
    {
        try {
            $this->setResult($resultGetMergedServiceStatus = $this->getSoapClient()->__soapCall('getMergedServiceStatus', [
                $paramGetMergedServiceStatusRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMergedServiceStatus;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMergedServiceStati
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetMergedServiceStatiRequest $paramGetMergedServiceStatiRequest
     * @return \Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetMergedServiceStatiResponse|bool
     */
    public function getMergedServiceStati(\Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetMergedServiceStatiRequest $paramGetMergedServiceStatiRequest)
    {
        try {
            $this->setResult($resultGetMergedServiceStati = $this->getSoapClient()->__soapCall('getMergedServiceStati', [
                $paramGetMergedServiceStatiRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMergedServiceStati;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAvailableCurrencies
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetAvailableCurrenciesRequest $paramGetAvailableCurrenciesRequest
     * @return \Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetAvailableCurrenciesResponse|bool
     */
    public function getAvailableCurrencies(\Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetAvailableCurrenciesRequest $paramGetAvailableCurrenciesRequest)
    {
        try {
            $this->setResult($resultGetAvailableCurrencies = $this->getSoapClient()->__soapCall('getAvailableCurrencies', [
                $paramGetAvailableCurrenciesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAvailableCurrencies;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getDbiUpdate
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetDbiUpdateRequest $paramGetDbiUpdateRequest
     * @return \Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetDbiUpdateResponse|bool
     */
    public function getDbiUpdate(\Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetDbiUpdateRequest $paramGetDbiUpdateRequest)
    {
        try {
            $this->setResult($resultGetDbiUpdate = $this->getSoapClient()->__soapCall('getDbiUpdate', [
                $paramGetDbiUpdateRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetDbiUpdate;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getDbiDefinitionHistory
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetDbiDefinitionHistoryRequest $paramGetDbiDefinitionHistoryRequest
     * @return \Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetDbiDefinitionHistoryResponse|bool
     */
    public function getDbiDefinitionHistory(\Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetDbiDefinitionHistoryRequest $paramGetDbiDefinitionHistoryRequest)
    {
        try {
            $this->setResult($resultGetDbiDefinitionHistory = $this->getSoapClient()->__soapCall('getDbiDefinitionHistory', [
                $paramGetDbiDefinitionHistoryRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetDbiDefinitionHistory;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCurrencyByISOCode
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetCurrencyByISOCodeRequest $paramGetCurrencyByISOCodeRequest
     * @return \Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetCurrencyByISOCodeResponse|bool
     */
    public function getCurrencyByISOCode(\Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetCurrencyByISOCodeRequest $paramGetCurrencyByISOCodeRequest)
    {
        try {
            $this->setResult($resultGetCurrencyByISOCode = $this->getSoapClient()->__soapCall('getCurrencyByISOCode', [
                $paramGetCurrencyByISOCodeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCurrencyByISOCode;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCurrency
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetCurrencyRequest $paramGetCurrencyRequest
     * @return \Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetCurrencyResponse|bool
     */
    public function getCurrency(\Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetCurrencyRequest $paramGetCurrencyRequest)
    {
        try {
            $this->setResult($resultGetCurrency = $this->getSoapClient()->__soapCall('getCurrency', [
                $paramGetCurrencyRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCurrency;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getDistributionMethodDescription
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetDistributionMethodDescriptionRequest $paramGetDistributionMethodDescriptionRequest
     * @return \Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetDistributionMethodDescriptionResponse|bool
     */
    public function getDistributionMethodDescription(\Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetDistributionMethodDescriptionRequest $paramGetDistributionMethodDescriptionRequest)
    {
        try {
            $this->setResult($resultGetDistributionMethodDescription = $this->getSoapClient()->__soapCall('getDistributionMethodDescription', [
                $paramGetDistributionMethodDescriptionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetDistributionMethodDescription;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetAccountPlanResponse|\Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetAirlineByCodeResponse|\Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetAirlineForBSPCodeResponse|\Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetAirportCountryResponse|\Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetAirportDescriptionResponse|\Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetAirportDescriptionWithLanguageResponse|\Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetAvailableAirlineDescriptionsResponse|\Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetAvailableAirportDescriptionsResponse|\Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetAvailableCurrenciesResponse|\Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetCurrencyByISOCodeResponse|\Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetCurrencyForCountryResponse|\Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetCurrencyForOrgUnitResponse|\Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetCurrencyResponse|\Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetDbiDefinitionHistoryResponse|\Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetDbiUpdateResponse|\Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetDistributionMethodDescriptionResponse|\Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetMergedServiceStatiResponse|\Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetMergedServiceStatusResponse|\Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetValidVatCodesResponse|\Pggns\MidocoApi\Api\OrderglobalSD\StructType\GetVATPercentsResponse|\Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoAirportFullDescriptionResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
