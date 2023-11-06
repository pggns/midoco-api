<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\ServiceType;

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
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Pggns\MidocoApi\Mis\ServiceType\Get
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named getCampaignWS
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Mis\StructType\GetCampaignReqType $paramGetCampaignWSRequest
     * @return \Pggns\MidocoApi\Mis\StructType\GetCampaignWSResponse|bool
     */
    public function getCampaignWS(\Pggns\MidocoApi\Mis\StructType\GetCampaignReqType $paramGetCampaignWSRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Mis\StructType\GetCampaignPrevNextPageReqType $paramGetCampaignNextPageWSRequest
     * @return \Pggns\MidocoApi\Mis\StructType\GetCampaignNextPageWSResponse|bool
     */
    public function getCampaignNextPageWS(\Pggns\MidocoApi\Mis\StructType\GetCampaignPrevNextPageReqType $paramGetCampaignNextPageWSRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Mis\StructType\GetCampaignPrevNextPageReqType $paramGetCampaignPrevPageWSRequest
     * @return \Pggns\MidocoApi\Mis\StructType\GetCampaignPrevPageWSResponse|bool
     */
    public function getCampaignPrevPageWS(\Pggns\MidocoApi\Mis\StructType\GetCampaignPrevNextPageReqType $paramGetCampaignPrevPageWSRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Mis\StructType\GetCampaignFirstLastPageReqType $paramGetCampaignFirstPageWSRequest
     * @return \Pggns\MidocoApi\Mis\StructType\GetCampaignFirstPageWSResponse|bool
     */
    public function getCampaignFirstPageWS(\Pggns\MidocoApi\Mis\StructType\GetCampaignFirstLastPageReqType $paramGetCampaignFirstPageWSRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Mis\StructType\GetCampaignFirstLastPageReqType $paramGetCampaignLastPageWSRequest
     * @return \Pggns\MidocoApi\Mis\StructType\GetCampaignLastPageWSResponse|bool
     */
    public function getCampaignLastPageWS(\Pggns\MidocoApi\Mis\StructType\GetCampaignFirstLastPageReqType $paramGetCampaignLastPageWSRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Mis\StructType\GetTextTemplateRequest $paramGetTextTemplateRequest
     * @return \Pggns\MidocoApi\Mis\StructType\GetTextTemplateResponse|bool
     */
    public function getTextTemplate(\Pggns\MidocoApi\Mis\StructType\GetTextTemplateRequest $paramGetTextTemplateRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Mis\StructType\GetCampaignDefinitionRequest $paramGetCampaignDefinitionRequest
     * @return \Pggns\MidocoApi\Mis\StructType\GetCampaignDefinitionResponse|bool
     */
    public function getCampaignDefinition(\Pggns\MidocoApi\Mis\StructType\GetCampaignDefinitionRequest $paramGetCampaignDefinitionRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Mis\StructType\GetTemplateTextForCustomerRequest $paramGetTemplateTextForCustomerRequest
     * @return \Pggns\MidocoApi\Mis\StructType\GetTemplateTextForCustomerResponse|bool
     */
    public function getTemplateTextForCustomer(\Pggns\MidocoApi\Mis\StructType\GetTemplateTextForCustomerRequest $paramGetTemplateTextForCustomerRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Mis\StructType\GetAvailableCampaignFieldsRequest $paramGetAvailableCampaignFieldsRequest
     * @return \Pggns\MidocoApi\Mis\StructType\GetAvailableCampaignFieldsResponse|bool
     */
    public function getAvailableCampaignFields(\Pggns\MidocoApi\Mis\StructType\GetAvailableCampaignFieldsRequest $paramGetAvailableCampaignFieldsRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Mis\StructType\GetSqlMappingInfoRequest $paramGetSqlMappingInfoRequest
     * @return \Pggns\MidocoApi\Mis\StructType\GetSqlMappingInfoResponse|bool
     */
    public function getSqlMappingInfo(\Pggns\MidocoApi\Mis\StructType\GetSqlMappingInfoRequest $paramGetSqlMappingInfoRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Mis\StructType\GetJasperReportRequest $paramGetJasperReportRequest
     * @return \Pggns\MidocoApi\Mis\StructType\GetJasperReportResponse|bool
     */
    public function getJasperReport(\Pggns\MidocoApi\Mis\StructType\GetJasperReportRequest $paramGetJasperReportRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Mis\StructType\GetJasperParameterRequest $paramGetJasperParameterRequest
     * @return \Pggns\MidocoApi\Mis\StructType\GetJasperParameterResponse|bool
     */
    public function getJasperParameter(\Pggns\MidocoApi\Mis\StructType\GetJasperParameterRequest $paramGetJasperParameterRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Mis\StructType\GetJasperReportParamRequest $paramGetJasperReportParamRequest
     * @return \Pggns\MidocoApi\Mis\StructType\GetJasperReportParamResponse|bool
     */
    public function getJasperReportParam(\Pggns\MidocoApi\Mis\StructType\GetJasperReportParamRequest $paramGetJasperReportParamRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Mis\StructType\GetAllJasperReportsRequest $paramGetAllJasperReportsRequest
     * @return \Pggns\MidocoApi\Mis\StructType\GetAllJasperReportsResponse|bool
     */
    public function getAllJasperReports(\Pggns\MidocoApi\Mis\StructType\GetAllJasperReportsRequest $paramGetAllJasperReportsRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Mis\StructType\GetAllJasperParametersRequest $paramGetAllJasperParametersRequest
     * @return \Pggns\MidocoApi\Mis\StructType\GetAllJasperParametersResponse|bool
     */
    public function getAllJasperParameters(\Pggns\MidocoApi\Mis\StructType\GetAllJasperParametersRequest $paramGetAllJasperParametersRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Mis\StructType\GetValuesFromTableRequest $paramGetValuesFromTableRequest
     * @return \Pggns\MidocoApi\Mis\StructType\GetValuesFromTableResponse|bool
     */
    public function getValuesFromTable(\Pggns\MidocoApi\Mis\StructType\GetValuesFromTableRequest $paramGetValuesFromTableRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Mis\StructType\GetAssignedJasperReportParametersRequest $paramGetAssignedJasperReportParametersRequest
     * @return \Pggns\MidocoApi\Mis\StructType\GetAssignedJasperReportParametersResponse|bool
     */
    public function getAssignedJasperReportParameters(\Pggns\MidocoApi\Mis\StructType\GetAssignedJasperReportParametersRequest $paramGetAssignedJasperReportParametersRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Mis\StructType\SearchAssignedSavedReportsRequest $paramSearchAssignedSavedReportsRequest
     * @return \Pggns\MidocoApi\Mis\StructType\SearchAssignedSavedReportsResponse|bool
     */
    public function getAssignedSavedReport(\Pggns\MidocoApi\Mis\StructType\SearchAssignedSavedReportsRequest $paramSearchAssignedSavedReportsRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Mis\StructType\GetSavedReportRequest $paramGetSavedReportRequest
     * @return \Pggns\MidocoApi\Mis\StructType\GetSavedReportResponse|bool
     */
    public function getSavedReport(\Pggns\MidocoApi\Mis\StructType\GetSavedReportRequest $paramGetSavedReportRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Mis\StructType\GetAssignedReportForRoleRequest $paramGetAssignedReportForRoleRequest
     * @return \Pggns\MidocoApi\Mis\StructType\GetAssignedReportForRoleResponse|bool
     */
    public function getAssignedReportForRole(\Pggns\MidocoApi\Mis\StructType\GetAssignedReportForRoleRequest $paramGetAssignedReportForRoleRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Mis\StructType\GetAllJasperReportRequest $paramGetAllJasperReportRequest
     * @return \Pggns\MidocoApi\Mis\StructType\GetAllJasperReportResponse|bool
     */
    public function getAllJasperReport(\Pggns\MidocoApi\Mis\StructType\GetAllJasperReportRequest $paramGetAllJasperReportRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Mis\StructType\GetReportWithSameParamRequest $paramGetReportWithSameParamRequest
     * @return \Pggns\MidocoApi\Mis\StructType\GetReportWithSameParamResponse|bool
     */
    public function getReportIdenticalParamList(\Pggns\MidocoApi\Mis\StructType\GetReportWithSameParamRequest $paramGetReportWithSameParamRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Mis\StructType\GetMidocoExportListRequest $paramGetMidocoExportListRequest
     * @return \Pggns\MidocoApi\Mis\StructType\GetMidocoExportListResponse|bool
     */
    public function getMidocoExportList(\Pggns\MidocoApi\Mis\StructType\GetMidocoExportListRequest $paramGetMidocoExportListRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Mis\StructType\GetCriteriaFieldsForDisplayRequest $paramGetCriteriaFieldsForDisplayRequest
     * @return \Pggns\MidocoApi\Mis\StructType\GetCriteriaFieldsForDisplayResponse|bool
     */
    public function getCriteriaFieldsForDisplay(\Pggns\MidocoApi\Mis\StructType\GetCriteriaFieldsForDisplayRequest $paramGetCriteriaFieldsForDisplayRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Mis\StructType\GetCampaignFieldValuesRequest $paramGetCampaignFieldValuesRequest
     * @return \Pggns\MidocoApi\Mis\StructType\GetCampaignFieldValuesResponse|bool
     */
    public function getCampaignFieldValues(\Pggns\MidocoApi\Mis\StructType\GetCampaignFieldValuesRequest $paramGetCampaignFieldValuesRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Mis\StructType\GetCampaignOrgUnitsRequest $paramGetCampaignOrgUnitsRequest
     * @return \Pggns\MidocoApi\Mis\StructType\GetCampaignOrgUnitsResponse|bool
     */
    public function getCampaignOrgUnits(\Pggns\MidocoApi\Mis\StructType\GetCampaignOrgUnitsRequest $paramGetCampaignOrgUnitsRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Mis\StructType\GetMisCampaignDocumentsRequest $paramGetMisCampaignDocumentsRequest
     * @return \Pggns\MidocoApi\Mis\StructType\GetMisCampaignDocumentsResponse|bool
     */
    public function getMisCampaignDocuments(\Pggns\MidocoApi\Mis\StructType\GetMisCampaignDocumentsRequest $paramGetMisCampaignDocumentsRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Mis\StructType\GetEstimateMisCampaignTemplateResultsRequest $paramGetEstimateMisCampaignTemplateResultsRequest
     * @return \Pggns\MidocoApi\Mis\StructType\GetEstimateMisCampaignTemplateResultsResponse|bool
     */
    public function getEstimateMisCampaignTemplateResults(\Pggns\MidocoApi\Mis\StructType\GetEstimateMisCampaignTemplateResultsRequest $paramGetEstimateMisCampaignTemplateResultsRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Mis\StructType\GetMidocoMisCampaignOrgUnitsRequest $paramGetMidocoMisCampaignOrgUnitsRequest
     * @return \Pggns\MidocoApi\Mis\StructType\GetMidocoMisCampaignOrgUnitsResponse|bool
     */
    public function getMidocoMisCampaignOrgUnits(\Pggns\MidocoApi\Mis\StructType\GetMidocoMisCampaignOrgUnitsRequest $paramGetMidocoMisCampaignOrgUnitsRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Mis\StructType\GetExecutedCampaignsForTemplateRequest $paramGetExecutedCampaignsForTemplateRequest
     * @return \Pggns\MidocoApi\Mis\StructType\GetExecutedCampaignsForTemplateResponse|bool
     */
    public function getExecutedCampaignsForTemplate(\Pggns\MidocoApi\Mis\StructType\GetExecutedCampaignsForTemplateRequest $paramGetExecutedCampaignsForTemplateRequest)
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
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Mis\StructType\GetCampaignResultsInfoRequest $paramGetCampaignResultsInfoRequest
     * @return \Pggns\MidocoApi\Mis\StructType\GetCampaignResultsInfoResponse|bool
     */
    public function getCampaignResultsInfo(\Pggns\MidocoApi\Mis\StructType\GetCampaignResultsInfoRequest $paramGetCampaignResultsInfoRequest)
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
     * @return \Pggns\MidocoApi\Mis\StructType\GetAllJasperParametersResponse|\Pggns\MidocoApi\Mis\StructType\GetAllJasperReportResponse|\Pggns\MidocoApi\Mis\StructType\GetAllJasperReportsResponse|\Pggns\MidocoApi\Mis\StructType\GetAssignedJasperReportParametersResponse|\Pggns\MidocoApi\Mis\StructType\GetAssignedReportForRoleResponse|\Pggns\MidocoApi\Mis\StructType\GetAvailableCampaignFieldsResponse|\Pggns\MidocoApi\Mis\StructType\GetCampaignDefinitionResponse|\Pggns\MidocoApi\Mis\StructType\GetCampaignFieldValuesResponse|\Pggns\MidocoApi\Mis\StructType\GetCampaignFirstPageWSResponse|\Pggns\MidocoApi\Mis\StructType\GetCampaignLastPageWSResponse|\Pggns\MidocoApi\Mis\StructType\GetCampaignNextPageWSResponse|\Pggns\MidocoApi\Mis\StructType\GetCampaignOrgUnitsResponse|\Pggns\MidocoApi\Mis\StructType\GetCampaignPrevPageWSResponse|\Pggns\MidocoApi\Mis\StructType\GetCampaignResultsInfoResponse|\Pggns\MidocoApi\Mis\StructType\GetCampaignWSResponse|\Pggns\MidocoApi\Mis\StructType\GetCriteriaFieldsForDisplayResponse|\Pggns\MidocoApi\Mis\StructType\GetEstimateMisCampaignTemplateResultsResponse|\Pggns\MidocoApi\Mis\StructType\GetExecutedCampaignsForTemplateResponse|\Pggns\MidocoApi\Mis\StructType\GetJasperParameterResponse|\Pggns\MidocoApi\Mis\StructType\GetJasperReportParamResponse|\Pggns\MidocoApi\Mis\StructType\GetJasperReportResponse|\Pggns\MidocoApi\Mis\StructType\GetMidocoExportListResponse|\Pggns\MidocoApi\Mis\StructType\GetMidocoMisCampaignOrgUnitsResponse|\Pggns\MidocoApi\Mis\StructType\GetMisCampaignDocumentsResponse|\Pggns\MidocoApi\Mis\StructType\GetReportWithSameParamResponse|\Pggns\MidocoApi\Mis\StructType\GetSavedReportResponse|\Pggns\MidocoApi\Mis\StructType\GetSqlMappingInfoResponse|\Pggns\MidocoApi\Mis\StructType\GetTemplateTextForCustomerResponse|\Pggns\MidocoApi\Mis\StructType\GetTextTemplateResponse|\Pggns\MidocoApi\Mis\StructType\GetValuesFromTableResponse|\Pggns\MidocoApi\Mis\StructType\SearchAssignedSavedReportsResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
