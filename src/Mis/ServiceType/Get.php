<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Mis\ServiceType;

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
     * @param \Pggns\MidocoApi\Api\Mis\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Api\Mis\ServiceType\Get
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Api\Mis\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named getCampaignWS
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Mis\StructType\GetCampaignReqType $paramGetCampaignWSRequest
     * @return \Pggns\MidocoApi\Api\Mis\StructType\GetCampaignWSResponse|bool
     */
    public function getCampaignWS(\Pggns\MidocoApi\Api\Mis\StructType\GetCampaignReqType $paramGetCampaignWSRequest)
    {
        try {
            $this->setResult($resultGetCampaignWS = $this->getSoapClient()->__soapCall('getCampaignWS', [
                $paramGetCampaignWSRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCampaignWS;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCampaignNextPageWS
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Mis\StructType\GetCampaignPrevNextPageReqType $paramGetCampaignNextPageWSRequest
     * @return \Pggns\MidocoApi\Api\Mis\StructType\GetCampaignNextPageWSResponse|bool
     */
    public function getCampaignNextPageWS(\Pggns\MidocoApi\Api\Mis\StructType\GetCampaignPrevNextPageReqType $paramGetCampaignNextPageWSRequest)
    {
        try {
            $this->setResult($resultGetCampaignNextPageWS = $this->getSoapClient()->__soapCall('getCampaignNextPageWS', [
                $paramGetCampaignNextPageWSRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCampaignNextPageWS;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCampaignPrevPageWS
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Mis\StructType\GetCampaignPrevNextPageReqType $paramGetCampaignPrevPageWSRequest
     * @return \Pggns\MidocoApi\Api\Mis\StructType\GetCampaignPrevPageWSResponse|bool
     */
    public function getCampaignPrevPageWS(\Pggns\MidocoApi\Api\Mis\StructType\GetCampaignPrevNextPageReqType $paramGetCampaignPrevPageWSRequest)
    {
        try {
            $this->setResult($resultGetCampaignPrevPageWS = $this->getSoapClient()->__soapCall('getCampaignPrevPageWS', [
                $paramGetCampaignPrevPageWSRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCampaignPrevPageWS;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCampaignFirstPageWS
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Mis\StructType\GetCampaignFirstLastPageReqType $paramGetCampaignFirstPageWSRequest
     * @return \Pggns\MidocoApi\Api\Mis\StructType\GetCampaignFirstPageWSResponse|bool
     */
    public function getCampaignFirstPageWS(\Pggns\MidocoApi\Api\Mis\StructType\GetCampaignFirstLastPageReqType $paramGetCampaignFirstPageWSRequest)
    {
        try {
            $this->setResult($resultGetCampaignFirstPageWS = $this->getSoapClient()->__soapCall('getCampaignFirstPageWS', [
                $paramGetCampaignFirstPageWSRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCampaignFirstPageWS;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCampaignLastPageWS
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Mis\StructType\GetCampaignFirstLastPageReqType $paramGetCampaignLastPageWSRequest
     * @return \Pggns\MidocoApi\Api\Mis\StructType\GetCampaignLastPageWSResponse|bool
     */
    public function getCampaignLastPageWS(\Pggns\MidocoApi\Api\Mis\StructType\GetCampaignFirstLastPageReqType $paramGetCampaignLastPageWSRequest)
    {
        try {
            $this->setResult($resultGetCampaignLastPageWS = $this->getSoapClient()->__soapCall('getCampaignLastPageWS', [
                $paramGetCampaignLastPageWSRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCampaignLastPageWS;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getTextTemplate
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Mis\StructType\GetTextTemplateRequest $paramGetTextTemplateRequest
     * @return \Pggns\MidocoApi\Api\Mis\StructType\GetTextTemplateResponse|bool
     */
    public function getTextTemplate(\Pggns\MidocoApi\Api\Mis\StructType\GetTextTemplateRequest $paramGetTextTemplateRequest)
    {
        try {
            $this->setResult($resultGetTextTemplate = $this->getSoapClient()->__soapCall('getTextTemplate', [
                $paramGetTextTemplateRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetTextTemplate;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCampaignDefinition
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Mis\StructType\GetCampaignDefinitionRequest $paramGetCampaignDefinitionRequest
     * @return \Pggns\MidocoApi\Api\Mis\StructType\GetCampaignDefinitionResponse|bool
     */
    public function getCampaignDefinition(\Pggns\MidocoApi\Api\Mis\StructType\GetCampaignDefinitionRequest $paramGetCampaignDefinitionRequest)
    {
        try {
            $this->setResult($resultGetCampaignDefinition = $this->getSoapClient()->__soapCall('getCampaignDefinition', [
                $paramGetCampaignDefinitionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCampaignDefinition;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getTemplateTextForCustomer
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Mis\StructType\GetTemplateTextForCustomerRequest $paramGetTemplateTextForCustomerRequest
     * @return \Pggns\MidocoApi\Api\Mis\StructType\GetTemplateTextForCustomerResponse|bool
     */
    public function getTemplateTextForCustomer(\Pggns\MidocoApi\Api\Mis\StructType\GetTemplateTextForCustomerRequest $paramGetTemplateTextForCustomerRequest)
    {
        try {
            $this->setResult($resultGetTemplateTextForCustomer = $this->getSoapClient()->__soapCall('getTemplateTextForCustomer', [
                $paramGetTemplateTextForCustomerRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetTemplateTextForCustomer;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAvailableCampaignFields
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Mis\StructType\GetAvailableCampaignFieldsRequest $paramGetAvailableCampaignFieldsRequest
     * @return \Pggns\MidocoApi\Api\Mis\StructType\GetAvailableCampaignFieldsResponse|bool
     */
    public function getAvailableCampaignFields(\Pggns\MidocoApi\Api\Mis\StructType\GetAvailableCampaignFieldsRequest $paramGetAvailableCampaignFieldsRequest)
    {
        try {
            $this->setResult($resultGetAvailableCampaignFields = $this->getSoapClient()->__soapCall('getAvailableCampaignFields', [
                $paramGetAvailableCampaignFieldsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAvailableCampaignFields;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSqlMappingInfo
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Mis\StructType\GetSqlMappingInfoRequest $paramGetSqlMappingInfoRequest
     * @return \Pggns\MidocoApi\Api\Mis\StructType\GetSqlMappingInfoResponse|bool
     */
    public function getSqlMappingInfo(\Pggns\MidocoApi\Api\Mis\StructType\GetSqlMappingInfoRequest $paramGetSqlMappingInfoRequest)
    {
        try {
            $this->setResult($resultGetSqlMappingInfo = $this->getSoapClient()->__soapCall('getSqlMappingInfo', [
                $paramGetSqlMappingInfoRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSqlMappingInfo;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getJasperReport
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Mis\StructType\GetJasperReportRequest $paramGetJasperReportRequest
     * @return \Pggns\MidocoApi\Api\Mis\StructType\GetJasperReportResponse|bool
     */
    public function getJasperReport(\Pggns\MidocoApi\Api\Mis\StructType\GetJasperReportRequest $paramGetJasperReportRequest)
    {
        try {
            $this->setResult($resultGetJasperReport = $this->getSoapClient()->__soapCall('getJasperReport', [
                $paramGetJasperReportRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetJasperReport;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getJasperParameter
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Mis\StructType\GetJasperParameterRequest $paramGetJasperParameterRequest
     * @return \Pggns\MidocoApi\Api\Mis\StructType\GetJasperParameterResponse|bool
     */
    public function getJasperParameter(\Pggns\MidocoApi\Api\Mis\StructType\GetJasperParameterRequest $paramGetJasperParameterRequest)
    {
        try {
            $this->setResult($resultGetJasperParameter = $this->getSoapClient()->__soapCall('getJasperParameter', [
                $paramGetJasperParameterRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetJasperParameter;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getJasperReportParam
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Mis\StructType\GetJasperReportParamRequest $paramGetJasperReportParamRequest
     * @return \Pggns\MidocoApi\Api\Mis\StructType\GetJasperReportParamResponse|bool
     */
    public function getJasperReportParam(\Pggns\MidocoApi\Api\Mis\StructType\GetJasperReportParamRequest $paramGetJasperReportParamRequest)
    {
        try {
            $this->setResult($resultGetJasperReportParam = $this->getSoapClient()->__soapCall('getJasperReportParam', [
                $paramGetJasperReportParamRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetJasperReportParam;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAllJasperReports
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Mis\StructType\GetAllJasperReportsRequest $paramGetAllJasperReportsRequest
     * @return \Pggns\MidocoApi\Api\Mis\StructType\GetAllJasperReportsResponse|bool
     */
    public function getAllJasperReports(\Pggns\MidocoApi\Api\Mis\StructType\GetAllJasperReportsRequest $paramGetAllJasperReportsRequest)
    {
        try {
            $this->setResult($resultGetAllJasperReports = $this->getSoapClient()->__soapCall('getAllJasperReports', [
                $paramGetAllJasperReportsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAllJasperReports;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAllJasperParameters
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Mis\StructType\GetAllJasperParametersRequest $paramGetAllJasperParametersRequest
     * @return \Pggns\MidocoApi\Api\Mis\StructType\GetAllJasperParametersResponse|bool
     */
    public function getAllJasperParameters(\Pggns\MidocoApi\Api\Mis\StructType\GetAllJasperParametersRequest $paramGetAllJasperParametersRequest)
    {
        try {
            $this->setResult($resultGetAllJasperParameters = $this->getSoapClient()->__soapCall('getAllJasperParameters', [
                $paramGetAllJasperParametersRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAllJasperParameters;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getValuesFromTable
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Mis\StructType\GetValuesFromTableRequest $paramGetValuesFromTableRequest
     * @return \Pggns\MidocoApi\Api\Mis\StructType\GetValuesFromTableResponse|bool
     */
    public function getValuesFromTable(\Pggns\MidocoApi\Api\Mis\StructType\GetValuesFromTableRequest $paramGetValuesFromTableRequest)
    {
        try {
            $this->setResult($resultGetValuesFromTable = $this->getSoapClient()->__soapCall('getValuesFromTable', [
                $paramGetValuesFromTableRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetValuesFromTable;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAssignedJasperReportParameters
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Mis\StructType\GetAssignedJasperReportParametersRequest $paramGetAssignedJasperReportParametersRequest
     * @return \Pggns\MidocoApi\Api\Mis\StructType\GetAssignedJasperReportParametersResponse|bool
     */
    public function getAssignedJasperReportParameters(\Pggns\MidocoApi\Api\Mis\StructType\GetAssignedJasperReportParametersRequest $paramGetAssignedJasperReportParametersRequest)
    {
        try {
            $this->setResult($resultGetAssignedJasperReportParameters = $this->getSoapClient()->__soapCall('getAssignedJasperReportParameters', [
                $paramGetAssignedJasperReportParametersRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAssignedJasperReportParameters;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAssignedSavedReport
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Mis\StructType\SearchAssignedSavedReportsRequest $paramSearchAssignedSavedReportsRequest
     * @return \Pggns\MidocoApi\Api\Mis\StructType\SearchAssignedSavedReportsResponse|bool
     */
    public function getAssignedSavedReport(\Pggns\MidocoApi\Api\Mis\StructType\SearchAssignedSavedReportsRequest $paramSearchAssignedSavedReportsRequest)
    {
        try {
            $this->setResult($resultGetAssignedSavedReport = $this->getSoapClient()->__soapCall('getAssignedSavedReport', [
                $paramSearchAssignedSavedReportsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAssignedSavedReport;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSavedReport
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Mis\StructType\GetSavedReportRequest $paramGetSavedReportRequest
     * @return \Pggns\MidocoApi\Api\Mis\StructType\GetSavedReportResponse|bool
     */
    public function getSavedReport(\Pggns\MidocoApi\Api\Mis\StructType\GetSavedReportRequest $paramGetSavedReportRequest)
    {
        try {
            $this->setResult($resultGetSavedReport = $this->getSoapClient()->__soapCall('getSavedReport', [
                $paramGetSavedReportRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSavedReport;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAssignedReportForRole
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Mis\StructType\GetAssignedReportForRoleRequest $paramGetAssignedReportForRoleRequest
     * @return \Pggns\MidocoApi\Api\Mis\StructType\GetAssignedReportForRoleResponse|bool
     */
    public function getAssignedReportForRole(\Pggns\MidocoApi\Api\Mis\StructType\GetAssignedReportForRoleRequest $paramGetAssignedReportForRoleRequest)
    {
        try {
            $this->setResult($resultGetAssignedReportForRole = $this->getSoapClient()->__soapCall('getAssignedReportForRole', [
                $paramGetAssignedReportForRoleRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAssignedReportForRole;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAllJasperReport
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Mis\StructType\GetAllJasperReportRequest $paramGetAllJasperReportRequest
     * @return \Pggns\MidocoApi\Api\Mis\StructType\GetAllJasperReportResponse|bool
     */
    public function getAllJasperReport(\Pggns\MidocoApi\Api\Mis\StructType\GetAllJasperReportRequest $paramGetAllJasperReportRequest)
    {
        try {
            $this->setResult($resultGetAllJasperReport = $this->getSoapClient()->__soapCall('getAllJasperReport', [
                $paramGetAllJasperReportRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAllJasperReport;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getReportIdenticalParamList
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Mis\StructType\GetReportWithSameParamRequest $paramGetReportWithSameParamRequest
     * @return \Pggns\MidocoApi\Api\Mis\StructType\GetReportWithSameParamResponse|bool
     */
    public function getReportIdenticalParamList(\Pggns\MidocoApi\Api\Mis\StructType\GetReportWithSameParamRequest $paramGetReportWithSameParamRequest)
    {
        try {
            $this->setResult($resultGetReportIdenticalParamList = $this->getSoapClient()->__soapCall('getReportIdenticalParamList', [
                $paramGetReportWithSameParamRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetReportIdenticalParamList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMidocoExportList
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Mis\StructType\GetMidocoExportListRequest $paramGetMidocoExportListRequest
     * @return \Pggns\MidocoApi\Api\Mis\StructType\GetMidocoExportListResponse|bool
     */
    public function getMidocoExportList(\Pggns\MidocoApi\Api\Mis\StructType\GetMidocoExportListRequest $paramGetMidocoExportListRequest)
    {
        try {
            $this->setResult($resultGetMidocoExportList = $this->getSoapClient()->__soapCall('getMidocoExportList', [
                $paramGetMidocoExportListRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMidocoExportList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCriteriaFieldsForDisplay
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Mis\StructType\GetCriteriaFieldsForDisplayRequest $paramGetCriteriaFieldsForDisplayRequest
     * @return \Pggns\MidocoApi\Api\Mis\StructType\GetCriteriaFieldsForDisplayResponse|bool
     */
    public function getCriteriaFieldsForDisplay(\Pggns\MidocoApi\Api\Mis\StructType\GetCriteriaFieldsForDisplayRequest $paramGetCriteriaFieldsForDisplayRequest)
    {
        try {
            $this->setResult($resultGetCriteriaFieldsForDisplay = $this->getSoapClient()->__soapCall('getCriteriaFieldsForDisplay', [
                $paramGetCriteriaFieldsForDisplayRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCriteriaFieldsForDisplay;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCampaignFieldValues
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Mis\StructType\GetCampaignFieldValuesRequest $paramGetCampaignFieldValuesRequest
     * @return \Pggns\MidocoApi\Api\Mis\StructType\GetCampaignFieldValuesResponse|bool
     */
    public function getCampaignFieldValues(\Pggns\MidocoApi\Api\Mis\StructType\GetCampaignFieldValuesRequest $paramGetCampaignFieldValuesRequest)
    {
        try {
            $this->setResult($resultGetCampaignFieldValues = $this->getSoapClient()->__soapCall('getCampaignFieldValues', [
                $paramGetCampaignFieldValuesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCampaignFieldValues;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCampaignOrgUnits
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Mis\StructType\GetCampaignOrgUnitsRequest $paramGetCampaignOrgUnitsRequest
     * @return \Pggns\MidocoApi\Api\Mis\StructType\GetCampaignOrgUnitsResponse|bool
     */
    public function getCampaignOrgUnits(\Pggns\MidocoApi\Api\Mis\StructType\GetCampaignOrgUnitsRequest $paramGetCampaignOrgUnitsRequest)
    {
        try {
            $this->setResult($resultGetCampaignOrgUnits = $this->getSoapClient()->__soapCall('getCampaignOrgUnits', [
                $paramGetCampaignOrgUnitsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCampaignOrgUnits;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMisCampaignDocuments
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Mis\StructType\GetMisCampaignDocumentsRequest $paramGetMisCampaignDocumentsRequest
     * @return \Pggns\MidocoApi\Api\Mis\StructType\GetMisCampaignDocumentsResponse|bool
     */
    public function getMisCampaignDocuments(\Pggns\MidocoApi\Api\Mis\StructType\GetMisCampaignDocumentsRequest $paramGetMisCampaignDocumentsRequest)
    {
        try {
            $this->setResult($resultGetMisCampaignDocuments = $this->getSoapClient()->__soapCall('getMisCampaignDocuments', [
                $paramGetMisCampaignDocumentsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMisCampaignDocuments;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * getEstimateMisCampaignTemplateResults
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Mis\StructType\GetEstimateMisCampaignTemplateResultsRequest $paramGetEstimateMisCampaignTemplateResultsRequest
     * @return \Pggns\MidocoApi\Api\Mis\StructType\GetEstimateMisCampaignTemplateResultsResponse|bool
     */
    public function getEstimateMisCampaignTemplateResults(\Pggns\MidocoApi\Api\Mis\StructType\GetEstimateMisCampaignTemplateResultsRequest $paramGetEstimateMisCampaignTemplateResultsRequest)
    {
        try {
            $this->setResult($resultGetEstimateMisCampaignTemplateResults = $this->getSoapClient()->__soapCall('getEstimateMisCampaignTemplateResults', [
                $paramGetEstimateMisCampaignTemplateResultsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetEstimateMisCampaignTemplateResults;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMidocoMisCampaignOrgUnits
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Mis\StructType\GetMidocoMisCampaignOrgUnitsRequest $paramGetMidocoMisCampaignOrgUnitsRequest
     * @return \Pggns\MidocoApi\Api\Mis\StructType\GetMidocoMisCampaignOrgUnitsResponse|bool
     */
    public function getMidocoMisCampaignOrgUnits(\Pggns\MidocoApi\Api\Mis\StructType\GetMidocoMisCampaignOrgUnitsRequest $paramGetMidocoMisCampaignOrgUnitsRequest)
    {
        try {
            $this->setResult($resultGetMidocoMisCampaignOrgUnits = $this->getSoapClient()->__soapCall('getMidocoMisCampaignOrgUnits', [
                $paramGetMidocoMisCampaignOrgUnitsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMidocoMisCampaignOrgUnits;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getExecutedCampaignsForTemplate
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Mis\StructType\GetExecutedCampaignsForTemplateRequest $paramGetExecutedCampaignsForTemplateRequest
     * @return \Pggns\MidocoApi\Api\Mis\StructType\GetExecutedCampaignsForTemplateResponse|bool
     */
    public function getExecutedCampaignsForTemplate(\Pggns\MidocoApi\Api\Mis\StructType\GetExecutedCampaignsForTemplateRequest $paramGetExecutedCampaignsForTemplateRequest)
    {
        try {
            $this->setResult($resultGetExecutedCampaignsForTemplate = $this->getSoapClient()->__soapCall('getExecutedCampaignsForTemplate', [
                $paramGetExecutedCampaignsForTemplateRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetExecutedCampaignsForTemplate;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCampaignResultsInfo
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Mis\StructType\GetCampaignResultsInfoRequest $paramGetCampaignResultsInfoRequest
     * @return \Pggns\MidocoApi\Api\Mis\StructType\GetCampaignResultsInfoResponse|bool
     */
    public function getCampaignResultsInfo(\Pggns\MidocoApi\Api\Mis\StructType\GetCampaignResultsInfoRequest $paramGetCampaignResultsInfoRequest)
    {
        try {
            $this->setResult($resultGetCampaignResultsInfo = $this->getSoapClient()->__soapCall('getCampaignResultsInfo', [
                $paramGetCampaignResultsInfoRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCampaignResultsInfo;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Api\Mis\StructType\GetAllJasperParametersResponse|\Pggns\MidocoApi\Api\Mis\StructType\GetAllJasperReportResponse|\Pggns\MidocoApi\Api\Mis\StructType\GetAllJasperReportsResponse|\Pggns\MidocoApi\Api\Mis\StructType\GetAssignedJasperReportParametersResponse|\Pggns\MidocoApi\Api\Mis\StructType\GetAssignedReportForRoleResponse|\Pggns\MidocoApi\Api\Mis\StructType\GetAvailableCampaignFieldsResponse|\Pggns\MidocoApi\Api\Mis\StructType\GetCampaignDefinitionResponse|\Pggns\MidocoApi\Api\Mis\StructType\GetCampaignFieldValuesResponse|\Pggns\MidocoApi\Api\Mis\StructType\GetCampaignFirstPageWSResponse|\Pggns\MidocoApi\Api\Mis\StructType\GetCampaignLastPageWSResponse|\Pggns\MidocoApi\Api\Mis\StructType\GetCampaignNextPageWSResponse|\Pggns\MidocoApi\Api\Mis\StructType\GetCampaignOrgUnitsResponse|\Pggns\MidocoApi\Api\Mis\StructType\GetCampaignPrevPageWSResponse|\Pggns\MidocoApi\Api\Mis\StructType\GetCampaignResultsInfoResponse|\Pggns\MidocoApi\Api\Mis\StructType\GetCampaignWSResponse|\Pggns\MidocoApi\Api\Mis\StructType\GetCriteriaFieldsForDisplayResponse|\Pggns\MidocoApi\Api\Mis\StructType\GetEstimateMisCampaignTemplateResultsResponse|\Pggns\MidocoApi\Api\Mis\StructType\GetExecutedCampaignsForTemplateResponse|\Pggns\MidocoApi\Api\Mis\StructType\GetJasperParameterResponse|\Pggns\MidocoApi\Api\Mis\StructType\GetJasperReportParamResponse|\Pggns\MidocoApi\Api\Mis\StructType\GetJasperReportResponse|\Pggns\MidocoApi\Api\Mis\StructType\GetMidocoExportListResponse|\Pggns\MidocoApi\Api\Mis\StructType\GetMidocoMisCampaignOrgUnitsResponse|\Pggns\MidocoApi\Api\Mis\StructType\GetMisCampaignDocumentsResponse|\Pggns\MidocoApi\Api\Mis\StructType\GetReportWithSameParamResponse|\Pggns\MidocoApi\Api\Mis\StructType\GetSavedReportResponse|\Pggns\MidocoApi\Api\Mis\StructType\GetSqlMappingInfoResponse|\Pggns\MidocoApi\Api\Mis\StructType\GetTemplateTextForCustomerResponse|\Pggns\MidocoApi\Api\Mis\StructType\GetTextTemplateResponse|\Pggns\MidocoApi\Api\Mis\StructType\GetValuesFromTableResponse|\Pggns\MidocoApi\Api\Mis\StructType\SearchAssignedSavedReportsResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
