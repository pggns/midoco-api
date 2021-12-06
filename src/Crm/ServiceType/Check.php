<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Check ServiceType
 * @subpackage Services
 */
class Check extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Api\Crm\ServiceType\Check
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named checkContactEntries
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\CheckContactEntriesRequest $paramCheckContactEntriesRequest
     * @return \Pggns\MidocoApi\Api\Crm\StructType\CheckContactEntriesResponse|bool
     */
    public function checkContactEntries(\Pggns\MidocoApi\Api\Crm\StructType\CheckContactEntriesRequest $paramCheckContactEntriesRequest)
    {
        try {
            $this->setResult($resultCheckContactEntries = $this->getSoapClient()->__soapCall('checkContactEntries', [
                $paramCheckContactEntriesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultCheckContactEntries;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named checkMediatorAccess
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\CheckMediatorAccessRequest $paramCheckMediatorAccessRequest
     * @return \Pggns\MidocoApi\Api\Crm\StructType\CheckMediatorAccessResponse|bool
     */
    public function checkMediatorAccess(\Pggns\MidocoApi\Api\Crm\StructType\CheckMediatorAccessRequest $paramCheckMediatorAccessRequest)
    {
        try {
            $this->setResult($resultCheckMediatorAccess = $this->getSoapClient()->__soapCall('checkMediatorAccess', [
                $paramCheckMediatorAccessRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultCheckMediatorAccess;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named checkAddressesForCustomer
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\CheckAddressesForCustomerRequest $paramCheckAddressesForCustomerRequest
     * @return \Pggns\MidocoApi\Api\Crm\StructType\CheckAddressesForCustomerResponse|bool
     */
    public function checkAddressesForCustomer(\Pggns\MidocoApi\Api\Crm\StructType\CheckAddressesForCustomerRequest $paramCheckAddressesForCustomerRequest)
    {
        try {
            $this->setResult($resultCheckAddressesForCustomer = $this->getSoapClient()->__soapCall('checkAddressesForCustomer', [
                $paramCheckAddressesForCustomerRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultCheckAddressesForCustomer;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named checkAllAddressesStatistikAT
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\CheckAllAddressesStatistikATRequest $paramCheckAllAddressesStatistikATRequest
     * @return \Pggns\MidocoApi\Api\Crm\StructType\CheckAllAddressesStatistikATResponse|bool
     */
    public function checkAllAddressesStatistikAT(\Pggns\MidocoApi\Api\Crm\StructType\CheckAllAddressesStatistikATRequest $paramCheckAllAddressesStatistikATRequest)
    {
        try {
            $this->setResult($resultCheckAllAddressesStatistikAT = $this->getSoapClient()->__soapCall('checkAllAddressesStatistikAT', [
                $paramCheckAllAddressesStatistikATRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultCheckAllAddressesStatistikAT;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Api\Crm\StructType\CheckAddressesForCustomerResponse|\Pggns\MidocoApi\Api\Crm\StructType\CheckAllAddressesStatistikATResponse|\Pggns\MidocoApi\Api\Crm\StructType\CheckContactEntriesResponse|\Pggns\MidocoApi\Api\Crm\StructType\CheckMediatorAccessResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
