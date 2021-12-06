<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Update ServiceType
 * @subpackage Services
 */
class Update extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Api\Crm\ServiceType\Update
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named updateContactEntries
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\UpdateContactEntriesRequest $paramUpdateContactEntriesRequest
     * @return \Pggns\MidocoApi\Api\Crm\StructType\UpdateContactEntriesResponse|bool
     */
    public function updateContactEntries(\Pggns\MidocoApi\Api\Crm\StructType\UpdateContactEntriesRequest $paramUpdateContactEntriesRequest)
    {
        try {
            $this->setResult($resultUpdateContactEntries = $this->getSoapClient()->__soapCall('updateContactEntries', [
                $paramUpdateContactEntriesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateContactEntries;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateAllContactEntries
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\UpdateAllContactEntriesRequest $paramUpdateAllContactEntriesRequest
     * @return \Pggns\MidocoApi\Api\Crm\StructType\UpdateAllContactEntriesResponse|bool
     */
    public function updateAllContactEntries(\Pggns\MidocoApi\Api\Crm\StructType\UpdateAllContactEntriesRequest $paramUpdateAllContactEntriesRequest)
    {
        try {
            $this->setResult($resultUpdateAllContactEntries = $this->getSoapClient()->__soapCall('updateAllContactEntries', [
                $paramUpdateAllContactEntriesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateAllContactEntries;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateCustomerMailingProhibited
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\UpdateCustomerMailingProhibitedRequest $paramUpdateCustomerMailingProhibitedRequest
     * @return \Pggns\MidocoApi\Api\Crm\StructType\UpdateCustomerMailingProhibitedResponse|bool
     */
    public function updateCustomerMailingProhibited(\Pggns\MidocoApi\Api\Crm\StructType\UpdateCustomerMailingProhibitedRequest $paramUpdateCustomerMailingProhibitedRequest)
    {
        try {
            $this->setResult($resultUpdateCustomerMailingProhibited = $this->getSoapClient()->__soapCall('updateCustomerMailingProhibited', [
                $paramUpdateCustomerMailingProhibitedRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateCustomerMailingProhibited;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateAllCrmAddresses
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\UpdateAllCrmAddressesRequest $paramUpdateAllCrmAddressesRequest
     * @return \Pggns\MidocoApi\Api\Crm\StructType\UpdateAllCrmAddressesResponse|bool
     */
    public function updateAllCrmAddresses(\Pggns\MidocoApi\Api\Crm\StructType\UpdateAllCrmAddressesRequest $paramUpdateAllCrmAddressesRequest)
    {
        try {
            $this->setResult($resultUpdateAllCrmAddresses = $this->getSoapClient()->__soapCall('updateAllCrmAddresses', [
                $paramUpdateAllCrmAddressesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateAllCrmAddresses;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateLinkedCrmCompaniesToSupplier
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\UpdateLinkedCrmCompaniesToSupplierRequest $paramUpdateLinkedCrmCompaniesToSupplierRequest
     * @return \Pggns\MidocoApi\Api\Crm\StructType\UpdateLinkedCrmCompaniesToSupplierResponse|bool
     */
    public function updateLinkedCrmCompaniesToSupplier(\Pggns\MidocoApi\Api\Crm\StructType\UpdateLinkedCrmCompaniesToSupplierRequest $paramUpdateLinkedCrmCompaniesToSupplierRequest)
    {
        try {
            $this->setResult($resultUpdateLinkedCrmCompaniesToSupplier = $this->getSoapClient()->__soapCall('updateLinkedCrmCompaniesToSupplier', [
                $paramUpdateLinkedCrmCompaniesToSupplierRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateLinkedCrmCompaniesToSupplier;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Api\Crm\StructType\UpdateAllContactEntriesResponse|\Pggns\MidocoApi\Api\Crm\StructType\UpdateAllCrmAddressesResponse|\Pggns\MidocoApi\Api\Crm\StructType\UpdateContactEntriesResponse|\Pggns\MidocoApi\Api\Crm\StructType\UpdateCustomerMailingProhibitedResponse|\Pggns\MidocoApi\Api\Crm\StructType\UpdateLinkedCrmCompaniesToSupplierResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
