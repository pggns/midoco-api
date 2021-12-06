<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Search ServiceType
 * @subpackage Services
 */
class Search extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Mis\ServiceType\Search
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named searchCampaignWS
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Mis\StructType\SearchCampaignReqType $paramSearchCampaignWSRequest
     * @return \Pggns\MidocoApi\Mis\StructType\SearchCampaignWSResponse|bool
     */
    public function searchCampaignWS(\Pggns\MidocoApi\Mis\StructType\SearchCampaignReqType $paramSearchCampaignWSRequest)
    {
        try {
            $this->setResult($resultSearchCampaignWS = $this->getSoapClient()->__soapCall('searchCampaignWS', [
                $paramSearchCampaignWSRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchCampaignWS;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchTextTemplate
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Mis\StructType\SearchTextTemplateRequest $paramSearchTextTemplateRequest
     * @return \Pggns\MidocoApi\Mis\StructType\SearchTextTemplateResponse|bool
     */
    public function searchTextTemplate(\Pggns\MidocoApi\Mis\StructType\SearchTextTemplateRequest $paramSearchTextTemplateRequest)
    {
        try {
            $this->setResult($resultSearchTextTemplate = $this->getSoapClient()->__soapCall('searchTextTemplate', [
                $paramSearchTextTemplateRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchTextTemplate;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchJasperReport
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Mis\StructType\SearchJasperReportRequest $paramSearchJasperReportRequest
     * @return \Pggns\MidocoApi\Mis\StructType\SearchJasperReportResponse|bool
     */
    public function searchJasperReport(\Pggns\MidocoApi\Mis\StructType\SearchJasperReportRequest $paramSearchJasperReportRequest)
    {
        try {
            $this->setResult($resultSearchJasperReport = $this->getSoapClient()->__soapCall('searchJasperReport', [
                $paramSearchJasperReportRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchJasperReport;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Mis\StructType\SearchCampaignWSResponse|\Pggns\MidocoApi\Mis\StructType\SearchJasperReportResponse|\Pggns\MidocoApi\Mis\StructType\SearchTextTemplateResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
