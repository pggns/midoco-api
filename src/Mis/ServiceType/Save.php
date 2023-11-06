<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\ServiceType;

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
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Pggns\MidocoApi\Mis\ServiceType\Save
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named saveCampaign
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Mis\StructType\SaveCampaignRequest $paramSaveCampaignRequest
     * @return \Pggns\MidocoApi\Mis\StructType\SaveCampaignRespType|bool
     */
    public function saveCampaign(\Pggns\MidocoApi\Mis\StructType\SaveCampaignRequest $paramSaveCampaignRequest)
    {
        try {
            $this->setResult($resultSaveCampaign = $this->getSoapClient()->__soapCall('saveCampaign', [
                $paramSaveCampaignRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveCampaign;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveCampaignWS
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Mis\StructType\SaveCampaignWSRequest $paramSaveCampaignWSRequest
     * @return \Pggns\MidocoApi\Mis\StructType\SaveCampaignWSResponse|bool
     */
    public function saveCampaignWS(\Pggns\MidocoApi\Mis\StructType\SaveCampaignWSRequest $paramSaveCampaignWSRequest)
    {
        try {
            $this->setResult($resultSaveCampaignWS = $this->getSoapClient()->__soapCall('saveCampaignWS', [
                $paramSaveCampaignWSRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveCampaignWS;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveJasperReportParamValue
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Mis\StructType\SaveJasperReportParamValueRequest $paramSaveJasperReportParamValueRequest
     * @return \Pggns\MidocoApi\Mis\StructType\SaveJasperReportParamValueResponse|bool
     */
    public function saveJasperReportParamValue(\Pggns\MidocoApi\Mis\StructType\SaveJasperReportParamValueRequest $paramSaveJasperReportParamValueRequest)
    {
        try {
            $this->setResult($resultSaveJasperReportParamValue = $this->getSoapClient()->__soapCall('saveJasperReportParamValue', [
                $paramSaveJasperReportParamValueRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveJasperReportParamValue;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveJasperParameter
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Mis\StructType\SaveJasperParameterRequest $paramSaveJasperParameterRequest
     * @return \Pggns\MidocoApi\Mis\StructType\SaveJasperParameterResponse|bool
     */
    public function saveJasperParameter(\Pggns\MidocoApi\Mis\StructType\SaveJasperParameterRequest $paramSaveJasperParameterRequest)
    {
        try {
            $this->setResult($resultSaveJasperParameter = $this->getSoapClient()->__soapCall('saveJasperParameter', [
                $paramSaveJasperParameterRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveJasperParameter;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveJasperReport
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Mis\StructType\SaveJasperReportRequest $paramSaveJasperReportRequest
     * @return \Pggns\MidocoApi\Mis\StructType\SaveJasperReportResponse|bool
     */
    public function saveJasperReport(\Pggns\MidocoApi\Mis\StructType\SaveJasperReportRequest $paramSaveJasperReportRequest)
    {
        try {
            $this->setResult($resultSaveJasperReport = $this->getSoapClient()->__soapCall('saveJasperReport', [
                $paramSaveJasperReportRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveJasperReport;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveJasperReportWithParameterValue
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Mis\StructType\SaveJasperReportWithParamValueRequest $paramSaveJasperReportWithParamValueRequest
     * @return \Pggns\MidocoApi\Mis\StructType\SaveJasperReportWithParamValueResponse|bool
     */
    public function saveJasperReportWithParameterValue(\Pggns\MidocoApi\Mis\StructType\SaveJasperReportWithParamValueRequest $paramSaveJasperReportWithParamValueRequest)
    {
        try {
            $this->setResult($resultSaveJasperReportWithParameterValue = $this->getSoapClient()->__soapCall('saveJasperReportWithParameterValue', [
                $paramSaveJasperReportWithParamValueRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveJasperReportWithParameterValue;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveAccessJasperReport
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Mis\StructType\SaveAccessJasperReportRequest $paramSaveAccessJasperReportRequest
     * @return \Pggns\MidocoApi\Mis\StructType\SaveAccessJasperReportResponse|bool
     */
    public function saveAccessJasperReport(\Pggns\MidocoApi\Mis\StructType\SaveAccessJasperReportRequest $paramSaveAccessJasperReportRequest)
    {
        try {
            $this->setResult($resultSaveAccessJasperReport = $this->getSoapClient()->__soapCall('saveAccessJasperReport', [
                $paramSaveAccessJasperReportRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveAccessJasperReport;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveReportVersion
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Mis\StructType\SaveReportVersionRequest $paramSaveReportVersionRequest
     * @return \Pggns\MidocoApi\Mis\StructType\SaveReportVersionResponse|bool
     */
    public function saveReportVersion(\Pggns\MidocoApi\Mis\StructType\SaveReportVersionRequest $paramSaveReportVersionRequest)
    {
        try {
            $this->setResult($resultSaveReportVersion = $this->getSoapClient()->__soapCall('saveReportVersion', [
                $paramSaveReportVersionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveReportVersion;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveCopyOfSavedReport
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Mis\StructType\SaveCopyJasperReportWithParamValueRequest $paramSaveCopyJasperReportWithParamValueRequest
     * @return \Pggns\MidocoApi\Mis\StructType\SaveCopyJasperReportWithParamValueResponse|bool
     */
    public function saveCopyOfSavedReport(\Pggns\MidocoApi\Mis\StructType\SaveCopyJasperReportWithParamValueRequest $paramSaveCopyJasperReportWithParamValueRequest)
    {
        try {
            $this->setResult($resultSaveCopyOfSavedReport = $this->getSoapClient()->__soapCall('saveCopyOfSavedReport', [
                $paramSaveCopyJasperReportWithParamValueRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveCopyOfSavedReport;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveCampaignOrgUnit
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Mis\StructType\SaveCampaignOrgUnitRequest $paramSaveCampaignOrgUnitRequest
     * @return \Pggns\MidocoApi\Mis\StructType\SaveCampaignOrgUnitResponse|bool
     */
    public function saveCampaignOrgUnit(\Pggns\MidocoApi\Mis\StructType\SaveCampaignOrgUnitRequest $paramSaveCampaignOrgUnitRequest)
    {
        try {
            $this->setResult($resultSaveCampaignOrgUnit = $this->getSoapClient()->__soapCall('saveCampaignOrgUnit', [
                $paramSaveCampaignOrgUnitRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveCampaignOrgUnit;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveMisCampaignDocument
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Mis\StructType\SaveMisCampaignDocumentRequest $paramSaveMisCampaignDocumentRequest
     * @return \Pggns\MidocoApi\Mis\StructType\SaveMisCampaignDocumentResponse|bool
     */
    public function saveMisCampaignDocument(\Pggns\MidocoApi\Mis\StructType\SaveMisCampaignDocumentRequest $paramSaveMisCampaignDocumentRequest)
    {
        try {
            $this->setResult($resultSaveMisCampaignDocument = $this->getSoapClient()->__soapCall('saveMisCampaignDocument', [
                $paramSaveMisCampaignDocumentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveMisCampaignDocument;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Mis\StructType\SaveAccessJasperReportResponse|\Pggns\MidocoApi\Mis\StructType\SaveCampaignOrgUnitResponse|\Pggns\MidocoApi\Mis\StructType\SaveCampaignRespType|\Pggns\MidocoApi\Mis\StructType\SaveCampaignWSResponse|\Pggns\MidocoApi\Mis\StructType\SaveCopyJasperReportWithParamValueResponse|\Pggns\MidocoApi\Mis\StructType\SaveJasperParameterResponse|\Pggns\MidocoApi\Mis\StructType\SaveJasperReportParamValueResponse|\Pggns\MidocoApi\Mis\StructType\SaveJasperReportResponse|\Pggns\MidocoApi\Mis\StructType\SaveJasperReportWithParamValueResponse|\Pggns\MidocoApi\Mis\StructType\SaveMisCampaignDocumentResponse|\Pggns\MidocoApi\Mis\StructType\SaveReportVersionResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
