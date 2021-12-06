<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\ServiceType;

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
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Mis\ServiceType\Delete
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named deleteCampaign
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Mis\StructType\DeleteCampaignRequest $paramDeleteCampaignRequest
     * @return \Pggns\MidocoApi\Mis\StructType\DeleteCampaignResponse|bool
     */
    public function deleteCampaign(\Pggns\MidocoApi\Mis\StructType\DeleteCampaignRequest $paramDeleteCampaignRequest)
    {
        try {
            $this->setResult($resultDeleteCampaign = $this->getSoapClient()->__soapCall('deleteCampaign', [
                $paramDeleteCampaignRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteCampaign;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteCampaignCustomers
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Mis\StructType\DeleteCampaignCustomersRequest $paramDeleteCampaignCustomersRequest
     * @return \Pggns\MidocoApi\Mis\StructType\DeleteCampaignCustomersResponse|bool
     */
    public function deleteCampaignCustomers(\Pggns\MidocoApi\Mis\StructType\DeleteCampaignCustomersRequest $paramDeleteCampaignCustomersRequest)
    {
        try {
            $this->setResult($resultDeleteCampaignCustomers = $this->getSoapClient()->__soapCall('deleteCampaignCustomers', [
                $paramDeleteCampaignCustomersRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteCampaignCustomers;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteJasperParameter
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Mis\StructType\DeleteJasperParameterRequest $paramDeleteJasperParameterRequest
     * @return \Pggns\MidocoApi\Mis\StructType\DeleteJasperParameterResponse|bool
     */
    public function deleteJasperParameter(\Pggns\MidocoApi\Mis\StructType\DeleteJasperParameterRequest $paramDeleteJasperParameterRequest)
    {
        try {
            $this->setResult($resultDeleteJasperParameter = $this->getSoapClient()->__soapCall('deleteJasperParameter', [
                $paramDeleteJasperParameterRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteJasperParameter;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteJasperReport
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Mis\StructType\DeleteJasperReportRequest $paramDeleteJasperReportRequest
     * @return \Pggns\MidocoApi\Mis\StructType\DeleteJasperReportResponse|bool
     */
    public function deleteJasperReport(\Pggns\MidocoApi\Mis\StructType\DeleteJasperReportRequest $paramDeleteJasperReportRequest)
    {
        try {
            $this->setResult($resultDeleteJasperReport = $this->getSoapClient()->__soapCall('deleteJasperReport', [
                $paramDeleteJasperReportRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteJasperReport;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteJasperReportParamValue
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Mis\StructType\DeleteJasperReportParamValueRequest $paramDeleteJasperReportParamValueRequest
     * @return \Pggns\MidocoApi\Mis\StructType\DeleteJasperReportParamValueResponse|bool
     */
    public function deleteJasperReportParamValue(\Pggns\MidocoApi\Mis\StructType\DeleteJasperReportParamValueRequest $paramDeleteJasperReportParamValueRequest)
    {
        try {
            $this->setResult($resultDeleteJasperReportParamValue = $this->getSoapClient()->__soapCall('deleteJasperReportParamValue', [
                $paramDeleteJasperReportParamValueRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteJasperReportParamValue;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteJasperReportParameter
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Mis\StructType\DeleteJasperReportParameterRequest $paramDeleteJasperReportParameterRequest
     * @return \Pggns\MidocoApi\Mis\StructType\DeleteJasperReportParameterResponse|bool
     */
    public function deleteJasperReportParameter(\Pggns\MidocoApi\Mis\StructType\DeleteJasperReportParameterRequest $paramDeleteJasperReportParameterRequest)
    {
        try {
            $this->setResult($resultDeleteJasperReportParameter = $this->getSoapClient()->__soapCall('deleteJasperReportParameter', [
                $paramDeleteJasperReportParameterRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteJasperReportParameter;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteSavedReport
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Mis\StructType\DeleteSavedReportRequest $paramDeleteSavedReportRequest
     * @return \Pggns\MidocoApi\Mis\StructType\DeleteSavedReportResponse|bool
     */
    public function deleteSavedReport(\Pggns\MidocoApi\Mis\StructType\DeleteSavedReportRequest $paramDeleteSavedReportRequest)
    {
        try {
            $this->setResult($resultDeleteSavedReport = $this->getSoapClient()->__soapCall('deleteSavedReport', [
                $paramDeleteSavedReportRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteSavedReport;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteMisCampaignDocument
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Mis\StructType\DeleteMisCampaignDocumentRequest $paramDeleteMisCampaignDocumentRequest
     * @return \Pggns\MidocoApi\Mis\StructType\DeleteMisCampaignDocumentResponse|bool
     */
    public function deleteMisCampaignDocument(\Pggns\MidocoApi\Mis\StructType\DeleteMisCampaignDocumentRequest $paramDeleteMisCampaignDocumentRequest)
    {
        try {
            $this->setResult($resultDeleteMisCampaignDocument = $this->getSoapClient()->__soapCall('deleteMisCampaignDocument', [
                $paramDeleteMisCampaignDocumentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteMisCampaignDocument;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * deleteCentralCampaignAssignedOrgUnit
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Mis\StructType\DeleteCentralCampaignAssignedOrgUnitRequest $paramDeleteCentralCampaignAssignedOrgUnitRequest
     * @return \Pggns\MidocoApi\Mis\StructType\DeleteCentralCampaignAssignedOrgUnitResponse|bool
     */
    public function deleteCentralCampaignAssignedOrgUnit(\Pggns\MidocoApi\Mis\StructType\DeleteCentralCampaignAssignedOrgUnitRequest $paramDeleteCentralCampaignAssignedOrgUnitRequest)
    {
        try {
            $this->setResult($resultDeleteCentralCampaignAssignedOrgUnit = $this->getSoapClient()->__soapCall('deleteCentralCampaignAssignedOrgUnit', [
                $paramDeleteCentralCampaignAssignedOrgUnitRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteCentralCampaignAssignedOrgUnit;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Mis\StructType\DeleteCampaignCustomersResponse|\Pggns\MidocoApi\Mis\StructType\DeleteCampaignResponse|\Pggns\MidocoApi\Mis\StructType\DeleteCentralCampaignAssignedOrgUnitResponse|\Pggns\MidocoApi\Mis\StructType\DeleteJasperParameterResponse|\Pggns\MidocoApi\Mis\StructType\DeleteJasperReportParameterResponse|\Pggns\MidocoApi\Mis\StructType\DeleteJasperReportParamValueResponse|\Pggns\MidocoApi\Mis\StructType\DeleteJasperReportResponse|\Pggns\MidocoApi\Mis\StructType\DeleteMisCampaignDocumentResponse|\Pggns\MidocoApi\Mis\StructType\DeleteSavedReportResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
