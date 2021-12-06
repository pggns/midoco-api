<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\ServiceType;

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
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Api\Crm\ServiceType\Search
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named searchCustomer
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\SearchCustomerRequest $paramSearchCustomerRequest
     * @return \Pggns\MidocoApi\Api\Crm\StructType\SearchCustomerResponse|bool
     */
    public function searchCustomer(\Pggns\MidocoApi\Api\Crm\StructType\SearchCustomerRequest $paramSearchCustomerRequest)
    {
        try {
            $this->setResult($resultSearchCustomer = $this->getSoapClient()->__soapCall('searchCustomer', [
                $paramSearchCustomerRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchCustomer;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchBank
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\SearchBankRequest $paramSearchBankRequest
     * @return \Pggns\MidocoApi\Api\Crm\StructType\SearchBankResponse|bool
     */
    public function searchBank(\Pggns\MidocoApi\Api\Crm\StructType\SearchBankRequest $paramSearchBankRequest)
    {
        try {
            $this->setResult($resultSearchBank = $this->getSoapClient()->__soapCall('searchBank', [
                $paramSearchBankRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchBank;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchCustDoubleAddr
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\SearchCustDoubleAddrRequest $paramSearchCustDoubleAddrRequest
     * @return \Pggns\MidocoApi\Api\Crm\StructType\SearchCustDoubleAddrResponse|bool
     */
    public function searchCustDoubleAddr(\Pggns\MidocoApi\Api\Crm\StructType\SearchCustDoubleAddrRequest $paramSearchCustDoubleAddrRequest)
    {
        try {
            $this->setResult($resultSearchCustDoubleAddr = $this->getSoapClient()->__soapCall('searchCustDoubleAddr', [
                $paramSearchCustDoubleAddrRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchCustDoubleAddr;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchCrmTravellers
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\SearchCrmTravellersRequest $paramSearchCrmTravellersRequest
     * @return \Pggns\MidocoApi\Api\Crm\StructType\SearchCrmTravellersResponse|bool
     */
    public function searchCrmTravellers(\Pggns\MidocoApi\Api\Crm\StructType\SearchCrmTravellersRequest $paramSearchCrmTravellersRequest)
    {
        try {
            $this->setResult($resultSearchCrmTravellers = $this->getSoapClient()->__soapCall('searchCrmTravellers', [
                $paramSearchCrmTravellersRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchCrmTravellers;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchBlackList
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\SearchBlackListRequest $paramSearchBlackListRequest
     * @return \Pggns\MidocoApi\Api\Crm\StructType\SearchBlackListResponse|bool
     */
    public function searchBlackList(\Pggns\MidocoApi\Api\Crm\StructType\SearchBlackListRequest $paramSearchBlackListRequest)
    {
        try {
            $this->setResult($resultSearchBlackList = $this->getSoapClient()->__soapCall('searchBlackList', [
                $paramSearchBlackListRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchBlackList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchCustomerByTravel
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\SearchCustomerByTravelRequest $paramSearchCustomerByTravelRequest
     * @return \Pggns\MidocoApi\Api\Crm\StructType\SearchCustomerByTravelResponse|bool
     */
    public function searchCustomerByTravel(\Pggns\MidocoApi\Api\Crm\StructType\SearchCustomerByTravelRequest $paramSearchCustomerByTravelRequest)
    {
        try {
            $this->setResult($resultSearchCustomerByTravel = $this->getSoapClient()->__soapCall('searchCustomerByTravel', [
                $paramSearchCustomerByTravelRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchCustomerByTravel;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchMidocoMandate
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\SearchMidocoMandateRequest $paramSearchMidocoMandateRequest
     * @return \Pggns\MidocoApi\Api\Crm\StructType\SearchMidocoMandateResponse|bool
     */
    public function searchMidocoMandate(\Pggns\MidocoApi\Api\Crm\StructType\SearchMidocoMandateRequest $paramSearchMidocoMandateRequest)
    {
        try {
            $this->setResult($resultSearchMidocoMandate = $this->getSoapClient()->__soapCall('searchMidocoMandate', [
                $paramSearchMidocoMandateRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchMidocoMandate;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchMandateReference
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\SearchMandatesRequest $paramSearchMandatesRequest
     * @return \Pggns\MidocoApi\Api\Crm\StructType\SearchMidocoMandateResponse|bool
     */
    public function searchMandateReference(\Pggns\MidocoApi\Api\Crm\StructType\SearchMandatesRequest $paramSearchMandatesRequest)
    {
        try {
            $this->setResult($resultSearchMandateReference = $this->getSoapClient()->__soapCall('searchMandateReference', [
                $paramSearchMandatesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchMandateReference;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named searchCustomerByPhone
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\SearchCustomerByPhoneRequest $paramSearchCustomerByPhoneRequest
     * @return \Pggns\MidocoApi\Api\Crm\StructType\SearchCustomerByPhoneResponse|bool
     */
    public function searchCustomerByPhone(\Pggns\MidocoApi\Api\Crm\StructType\SearchCustomerByPhoneRequest $paramSearchCustomerByPhoneRequest)
    {
        try {
            $this->setResult($resultSearchCustomerByPhone = $this->getSoapClient()->__soapCall('searchCustomerByPhone', [
                $paramSearchCustomerByPhoneRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSearchCustomerByPhone;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Api\Crm\StructType\SearchBankResponse|\Pggns\MidocoApi\Api\Crm\StructType\SearchBlackListResponse|\Pggns\MidocoApi\Api\Crm\StructType\SearchCrmTravellersResponse|\Pggns\MidocoApi\Api\Crm\StructType\SearchCustDoubleAddrResponse|\Pggns\MidocoApi\Api\Crm\StructType\SearchCustomerByPhoneResponse|\Pggns\MidocoApi\Api\Crm\StructType\SearchCustomerByTravelResponse|\Pggns\MidocoApi\Api\Crm\StructType\SearchCustomerResponse|\Pggns\MidocoApi\Api\Crm\StructType\SearchMidocoMandateResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
