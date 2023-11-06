<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\ServiceType;

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
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Pggns\MidocoApi\Crm\ServiceType\Get
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named getCustomer
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetCustomerRequest $paramGetCustomerRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetCustomerResponse|bool
     */
    public function getCustomer(\Pggns\MidocoApi\Crm\StructType\GetCustomerRequest $paramGetCustomerRequest)
    {
        try {
            $this->setResult($resultGetCustomer = $this->getSoapClient()->__soapCall('getCustomer', [
                $paramGetCustomerRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCustomer;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCustomerLinks
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetCustomerLinksRequest $paramGetCustomerLinksRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetCustomerLinksResponse|bool
     */
    public function getCustomerLinks(\Pggns\MidocoApi\Crm\StructType\GetCustomerLinksRequest $paramGetCustomerLinksRequest)
    {
        try {
            $this->setResult($resultGetCustomerLinks = $this->getSoapClient()->__soapCall('getCustomerLinks', [
                $paramGetCustomerLinksRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCustomerLinks;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSalutationTypes
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetSalutationTypesRequest $paramGetSalutationTypesRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetSalutationTypesResponse|bool
     */
    public function getSalutationTypes(\Pggns\MidocoApi\Crm\StructType\GetSalutationTypesRequest $paramGetSalutationTypesRequest)
    {
        try {
            $this->setResult($resultGetSalutationTypes = $this->getSoapClient()->__soapCall('getSalutationTypes', [
                $paramGetSalutationTypesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSalutationTypes;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSimilarAddress
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetSimilarAddressRequest $paramGetSimilarAddressRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetSimilarAddressResponse|bool
     */
    public function getSimilarAddress(\Pggns\MidocoApi\Crm\StructType\GetSimilarAddressRequest $paramGetSimilarAddressRequest)
    {
        try {
            $this->setResult($resultGetSimilarAddress = $this->getSoapClient()->__soapCall('getSimilarAddress', [
                $paramGetSimilarAddressRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSimilarAddress;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getTraveller
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetTravellerRequest $paramGetTravellerRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetTravellerResponse|bool
     */
    public function getTraveller(\Pggns\MidocoApi\Crm\StructType\GetTravellerRequest $paramGetTravellerRequest)
    {
        try {
            $this->setResult($resultGetTraveller = $this->getSoapClient()->__soapCall('getTraveller', [
                $paramGetTravellerRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetTraveller;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAvailableLockReasonDescriptions
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetAvailableLockReasonDescriptionsRequest $paramGetAvailableLockReasonDescriptionsRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetAvailableLockReasonDescriptionsResponse|bool
     */
    public function getAvailableLockReasonDescriptions(\Pggns\MidocoApi\Crm\StructType\GetAvailableLockReasonDescriptionsRequest $paramGetAvailableLockReasonDescriptionsRequest)
    {
        try {
            $this->setResult($resultGetAvailableLockReasonDescriptions = $this->getSoapClient()->__soapCall('getAvailableLockReasonDescriptions', [
                $paramGetAvailableLockReasonDescriptionsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAvailableLockReasonDescriptions;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAvailableLockReasons
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetAvailableLockReasonsRequest $paramGetAvailableLockReasonsRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetAvailableLockReasonsResponse|bool
     */
    public function getAvailableLockReasons(\Pggns\MidocoApi\Crm\StructType\GetAvailableLockReasonsRequest $paramGetAvailableLockReasonsRequest)
    {
        try {
            $this->setResult($resultGetAvailableLockReasons = $this->getSoapClient()->__soapCall('getAvailableLockReasons', [
                $paramGetAvailableLockReasonsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAvailableLockReasons;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getContactMedia
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetContactMediaRequest $paramGetContactMediaRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetContactMediaResponse|bool
     */
    public function getContactMedia(\Pggns\MidocoApi\Crm\StructType\GetContactMediaRequest $paramGetContactMediaRequest)
    {
        try {
            $this->setResult($resultGetContactMedia = $this->getSoapClient()->__soapCall('getContactMedia', [
                $paramGetContactMediaRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetContactMedia;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getContactEntries
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetContactEntriesRequest $paramGetContactEntriesRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetContactEntriesResponse|bool
     */
    public function getContactEntries(\Pggns\MidocoApi\Crm\StructType\GetContactEntriesRequest $paramGetContactEntriesRequest)
    {
        try {
            $this->setResult($resultGetContactEntries = $this->getSoapClient()->__soapCall('getContactEntries', [
                $paramGetContactEntriesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetContactEntries;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCustomerCriteria
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetCustomerCriteriaRequest $paramGetCustomerCriteriaRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetCustomerCriteriaResponse|bool
     */
    public function getCustomerCriteria(\Pggns\MidocoApi\Crm\StructType\GetCustomerCriteriaRequest $paramGetCustomerCriteriaRequest)
    {
        try {
            $this->setResult($resultGetCustomerCriteria = $this->getSoapClient()->__soapCall('getCustomerCriteria', [
                $paramGetCustomerCriteriaRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCustomerCriteria;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAvailableContactDescriptions
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetAvailableContactDescriptionsRequest $paramGetAvailableContactDescriptionsRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetAvailableContactDescriptionsResponse|bool
     */
    public function getAvailableContactDescriptions(\Pggns\MidocoApi\Crm\StructType\GetAvailableContactDescriptionsRequest $paramGetAvailableContactDescriptionsRequest)
    {
        try {
            $this->setResult($resultGetAvailableContactDescriptions = $this->getSoapClient()->__soapCall('getAvailableContactDescriptions', [
                $paramGetAvailableContactDescriptionsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAvailableContactDescriptions;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getHistory
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetHistoryRequest $paramGetHistoryRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetHistoryResponse|bool
     */
    public function getHistory(\Pggns\MidocoApi\Crm\StructType\GetHistoryRequest $paramGetHistoryRequest)
    {
        try {
            $this->setResult($resultGetHistory = $this->getSoapClient()->__soapCall('getHistory', [
                $paramGetHistoryRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetHistory;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getDebitors
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetDebitorsRequest $paramGetDebitorsRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetDebitorsResponse|bool
     */
    public function getDebitors(\Pggns\MidocoApi\Crm\StructType\GetDebitorsRequest $paramGetDebitorsRequest)
    {
        try {
            $this->setResult($resultGetDebitors = $this->getSoapClient()->__soapCall('getDebitors', [
                $paramGetDebitorsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetDebitors;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getDocuments
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetDocumentsRequest $paramGetDocumentsRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetDocumentsResponse|bool
     */
    public function getDocuments(\Pggns\MidocoApi\Crm\StructType\GetDocumentsRequest $paramGetDocumentsRequest)
    {
        try {
            $this->setResult($resultGetDocuments = $this->getSoapClient()->__soapCall('getDocuments', [
                $paramGetDocumentsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetDocuments;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getDocument
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetDocumentRequest $paramGetDocumentRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetDocumentResponse|bool
     */
    public function getDocument(\Pggns\MidocoApi\Crm\StructType\GetDocumentRequest $paramGetDocumentRequest)
    {
        try {
            $this->setResult($resultGetDocument = $this->getSoapClient()->__soapCall('getDocument', [
                $paramGetDocumentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetDocument;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * getAvailableComplaintTypeDescription
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetAvailableComplaintTypeDescriptionsRequest $paramGetAvailableComplaintTypeDescriptionsRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetAvailableComplaintTypeDescriptionsResponse|bool
     */
    public function getAvailableComplaintTypeDescription(\Pggns\MidocoApi\Crm\StructType\GetAvailableComplaintTypeDescriptionsRequest $paramGetAvailableComplaintTypeDescriptionsRequest)
    {
        try {
            $this->setResult($resultGetAvailableComplaintTypeDescription = $this->getSoapClient()->__soapCall('getAvailableComplaintTypeDescription', [
                $paramGetAvailableComplaintTypeDescriptionsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAvailableComplaintTypeDescription;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * getAvailableComplaintReasonDescriptions
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetAvailableComplaintReasonDescriptionsRequest $paramGetAvailableComplaintReasonDescriptionsRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetAvailableComplaintReasonDescriptionsResponse|bool
     */
    public function getAvailableComplaintReasonDescriptions(\Pggns\MidocoApi\Crm\StructType\GetAvailableComplaintReasonDescriptionsRequest $paramGetAvailableComplaintReasonDescriptionsRequest)
    {
        try {
            $this->setResult($resultGetAvailableComplaintReasonDescriptions = $this->getSoapClient()->__soapCall('getAvailableComplaintReasonDescriptions', [
                $paramGetAvailableComplaintReasonDescriptionsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAvailableComplaintReasonDescriptions;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAvailableCardDescriptions
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetAvailableCardDescriptionsRequest $paramGetAvailableCardDescriptionsRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetAvailableCardDescriptionsResponse|bool
     */
    public function getAvailableCardDescriptions(\Pggns\MidocoApi\Crm\StructType\GetAvailableCardDescriptionsRequest $paramGetAvailableCardDescriptionsRequest)
    {
        try {
            $this->setResult($resultGetAvailableCardDescriptions = $this->getSoapClient()->__soapCall('getAvailableCardDescriptions', [
                $paramGetAvailableCardDescriptionsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAvailableCardDescriptions;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAvailableBonusDescriptions
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetAvailableBonusDescriptionsRequest $paramGetAvailableBonusDescriptionsRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetAvailableBonusDescriptionsResponse|bool
     */
    public function getAvailableBonusDescriptions(\Pggns\MidocoApi\Crm\StructType\GetAvailableBonusDescriptionsRequest $paramGetAvailableBonusDescriptionsRequest)
    {
        try {
            $this->setResult($resultGetAvailableBonusDescriptions = $this->getSoapClient()->__soapCall('getAvailableBonusDescriptions', [
                $paramGetAvailableBonusDescriptionsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAvailableBonusDescriptions;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getDebitCards
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetDebitCardsRequest $paramGetDebitCardsRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetDebitCardsResponse|bool
     */
    public function getDebitCards(\Pggns\MidocoApi\Crm\StructType\GetDebitCardsRequest $paramGetDebitCardsRequest)
    {
        try {
            $this->setResult($resultGetDebitCards = $this->getSoapClient()->__soapCall('getDebitCards', [
                $paramGetDebitCardsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetDebitCards;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCcCards
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetCcCardsRequest $paramGetCcCardsRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetCcCardsResponse|bool
     */
    public function getCcCards(\Pggns\MidocoApi\Crm\StructType\GetCcCardsRequest $paramGetCcCardsRequest)
    {
        try {
            $this->setResult($resultGetCcCards = $this->getSoapClient()->__soapCall('getCcCards', [
                $paramGetCcCardsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCcCards;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getBonusCards
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetBonusCardsRequest $paramGetBonusCardsRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetBonusCardsResponse|bool
     */
    public function getBonusCards(\Pggns\MidocoApi\Crm\StructType\GetBonusCardsRequest $paramGetBonusCardsRequest)
    {
        try {
            $this->setResult($resultGetBonusCards = $this->getSoapClient()->__soapCall('getBonusCards', [
                $paramGetBonusCardsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetBonusCards;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getComplaints
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetComplaintsRequest $paramGetComplaintsRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetComplaintsResponse|bool
     */
    public function getComplaints(\Pggns\MidocoApi\Crm\StructType\GetComplaintsRequest $paramGetComplaintsRequest)
    {
        try {
            $this->setResult($resultGetComplaints = $this->getSoapClient()->__soapCall('getComplaints', [
                $paramGetComplaintsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetComplaints;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getComplaintDocuments
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetComplaintDocumentsRequest $paramGetComplaintDocumentsRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetComplaintDocumentsResponse|bool
     */
    public function getComplaintDocuments(\Pggns\MidocoApi\Crm\StructType\GetComplaintDocumentsRequest $paramGetComplaintDocumentsRequest)
    {
        try {
            $this->setResult($resultGetComplaintDocuments = $this->getSoapClient()->__soapCall('getComplaintDocuments', [
                $paramGetComplaintDocumentsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetComplaintDocuments;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getComplaintReasons
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetComplaintReasonsRequest $paramGetComplaintReasonsRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetComplaintReasonsResponse|bool
     */
    public function getComplaintReasons(\Pggns\MidocoApi\Crm\StructType\GetComplaintReasonsRequest $paramGetComplaintReasonsRequest)
    {
        try {
            $this->setResult($resultGetComplaintReasons = $this->getSoapClient()->__soapCall('getComplaintReasons', [
                $paramGetComplaintReasonsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetComplaintReasons;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAvailableDocumentTypes
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetAvailableDocumentTypesRequest $paramGetAvailableDocumentTypesRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetAvailableDocumentTypesResponse|bool
     */
    public function getAvailableDocumentTypes(\Pggns\MidocoApi\Crm\StructType\GetAvailableDocumentTypesRequest $paramGetAvailableDocumentTypesRequest)
    {
        try {
            $this->setResult($resultGetAvailableDocumentTypes = $this->getSoapClient()->__soapCall('getAvailableDocumentTypes', [
                $paramGetAvailableDocumentTypesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAvailableDocumentTypes;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAddress
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetAddressRequest $paramGetAddressRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetAddressResponse|bool
     */
    public function getAddress(\Pggns\MidocoApi\Crm\StructType\GetAddressRequest $paramGetAddressRequest)
    {
        try {
            $this->setResult($resultGetAddress = $this->getSoapClient()->__soapCall('getAddress', [
                $paramGetAddressRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAddress;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCrmCampaignes
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetCrmCampaignesRequest $paramGetCrmCampaignesRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetCrmCampaignesResponse|bool
     */
    public function getCrmCampaignes(\Pggns\MidocoApi\Crm\StructType\GetCrmCampaignesRequest $paramGetCrmCampaignesRequest)
    {
        try {
            $this->setResult($resultGetCrmCampaignes = $this->getSoapClient()->__soapCall('getCrmCampaignes', [
                $paramGetCrmCampaignesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCrmCampaignes;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCustomerTravels
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetCustomerTravelsRequest $paramGetCustomerTravelsRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetCustomerTravelsResponse|bool
     */
    public function getCustomerTravels(\Pggns\MidocoApi\Crm\StructType\GetCustomerTravelsRequest $paramGetCustomerTravelsRequest)
    {
        try {
            $this->setResult($resultGetCustomerTravels = $this->getSoapClient()->__soapCall('getCustomerTravels', [
                $paramGetCustomerTravelsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCustomerTravels;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getExtendedCustomerTravels
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetExtendedCustomerTravelsRequest $paramGetExtendedCustomerTravelsRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetExtendedCustomerTravelsResponse|bool
     */
    public function getExtendedCustomerTravels(\Pggns\MidocoApi\Crm\StructType\GetExtendedCustomerTravelsRequest $paramGetExtendedCustomerTravelsRequest)
    {
        try {
            $this->setResult($resultGetExtendedCustomerTravels = $this->getSoapClient()->__soapCall('getExtendedCustomerTravels', [
                $paramGetExtendedCustomerTravelsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetExtendedCustomerTravels;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAvailableMediators
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetAvailableMediatorsRequest $paramGetAvailableMediatorsRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetAvailableMediatorsResponse|bool
     */
    public function getAvailableMediators(\Pggns\MidocoApi\Crm\StructType\GetAvailableMediatorsRequest $paramGetAvailableMediatorsRequest)
    {
        try {
            $this->setResult($resultGetAvailableMediators = $this->getSoapClient()->__soapCall('getAvailableMediators', [
                $paramGetAvailableMediatorsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAvailableMediators;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getDiversDebitors
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetIsDiversDebitorsRequest $paramGetIsDiversDebitorsRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetIsDiversDebitorsResponse|bool
     */
    public function getDiversDebitors(\Pggns\MidocoApi\Crm\StructType\GetIsDiversDebitorsRequest $paramGetIsDiversDebitorsRequest)
    {
        try {
            $this->setResult($resultGetDiversDebitors = $this->getSoapClient()->__soapCall('getDiversDebitors', [
                $paramGetIsDiversDebitorsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetDiversDebitors;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMidocoCrmCustomerPayment
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetMidocoCrmCustomerPaymentRequest $paramGetMidocoCrmCustomerPaymentRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetMidocoCrmCustomerPaymentResponse|bool
     */
    public function getMidocoCrmCustomerPayment(\Pggns\MidocoApi\Crm\StructType\GetMidocoCrmCustomerPaymentRequest $paramGetMidocoCrmCustomerPaymentRequest)
    {
        try {
            $this->setResult($resultGetMidocoCrmCustomerPayment = $this->getSoapClient()->__soapCall('getMidocoCrmCustomerPayment', [
                $paramGetMidocoCrmCustomerPaymentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMidocoCrmCustomerPayment;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCrmCustomerPaymentGroupFee
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetCrmCustomerPaymentGroupFeeRequest $paramGetCrmCustomerPaymentGroupFeeRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetCrmCustomerPaymentGroupFeeResponse|bool
     */
    public function getCrmCustomerPaymentGroupFee(\Pggns\MidocoApi\Crm\StructType\GetCrmCustomerPaymentGroupFeeRequest $paramGetCrmCustomerPaymentGroupFeeRequest)
    {
        try {
            $this->setResult($resultGetCrmCustomerPaymentGroupFee = $this->getSoapClient()->__soapCall('getCrmCustomerPaymentGroupFee', [
                $paramGetCrmCustomerPaymentGroupFeeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCrmCustomerPaymentGroupFee;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMediator
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetMediatorRequest $paramGetMediatorRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetMediatorResponse|bool
     */
    public function getMediator(\Pggns\MidocoApi\Crm\StructType\GetMediatorRequest $paramGetMediatorRequest)
    {
        try {
            $this->setResult($resultGetMediator = $this->getSoapClient()->__soapCall('getMediator', [
                $paramGetMediatorRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMediator;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSalutationForCulture
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetSalutationForCultureRequest $paramGetSalutationForCultureRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetSalutationForCultureResponse|bool
     */
    public function getSalutationForCulture(\Pggns\MidocoApi\Crm\StructType\GetSalutationForCultureRequest $paramGetSalutationForCultureRequest)
    {
        try {
            $this->setResult($resultGetSalutationForCulture = $this->getSoapClient()->__soapCall('getSalutationForCulture', [
                $paramGetSalutationForCultureRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSalutationForCulture;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getDebitor
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetDebitorRequest $paramGetDebitorRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetDebitorResponse|bool
     */
    public function getDebitor(\Pggns\MidocoApi\Crm\StructType\GetDebitorRequest $paramGetDebitorRequest)
    {
        try {
            $this->setResult($resultGetDebitor = $this->getSoapClient()->__soapCall('getDebitor', [
                $paramGetDebitorRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetDebitor;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCustomerCompanyInfo
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetCustomerCompanyRequest $paramGetCustomerCompanyRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetCustomerCompanyResponse|bool
     */
    public function getCustomerCompanyInfo(\Pggns\MidocoApi\Crm\StructType\GetCustomerCompanyRequest $paramGetCustomerCompanyRequest)
    {
        try {
            $this->setResult($resultGetCustomerCompanyInfo = $this->getSoapClient()->__soapCall('getCustomerCompanyInfo', [
                $paramGetCustomerCompanyRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCustomerCompanyInfo;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCustomerByMediatorId
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetCustomerByMediatorIdRequest $paramGetCustomerByMediatorIdRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetCustomerByMediatorIdResponse|bool
     */
    public function getCustomerByMediatorId(\Pggns\MidocoApi\Crm\StructType\GetCustomerByMediatorIdRequest $paramGetCustomerByMediatorIdRequest)
    {
        try {
            $this->setResult($resultGetCustomerByMediatorId = $this->getSoapClient()->__soapCall('getCustomerByMediatorId', [
                $paramGetCustomerByMediatorIdRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCustomerByMediatorId;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAvailableCountries
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetAvailableCountriesRequest $paramGetAvailableCountriesRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetAvailableCountriesResponse|bool
     */
    public function getAvailableCountries(\Pggns\MidocoApi\Crm\StructType\GetAvailableCountriesRequest $paramGetAvailableCountriesRequest)
    {
        try {
            $this->setResult($resultGetAvailableCountries = $this->getSoapClient()->__soapCall('getAvailableCountries', [
                $paramGetAvailableCountriesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAvailableCountries;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCustomerOrders
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetCustomerOrdersRequest $paramGetCustomerOrdersRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetCustomerOrdersResponse|bool
     */
    public function getCustomerOrders(\Pggns\MidocoApi\Crm\StructType\GetCustomerOrdersRequest $paramGetCustomerOrdersRequest)
    {
        try {
            $this->setResult($resultGetCustomerOrders = $this->getSoapClient()->__soapCall('getCustomerOrders', [
                $paramGetCustomerOrdersRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCustomerOrders;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCrmContext
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetCrmContextRequest $paramGetCrmContextRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetCrmContextResponse|bool
     */
    public function getCrmContext(\Pggns\MidocoApi\Crm\StructType\GetCrmContextRequest $paramGetCrmContextRequest)
    {
        try {
            $this->setResult($resultGetCrmContext = $this->getSoapClient()->__soapCall('getCrmContext', [
                $paramGetCrmContextRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCrmContext;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAgencyDetails
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetAgencyDetailsRequest $paramGetAgencyDetailsRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetAgencyDetailsResponse|bool
     */
    public function getAgencyDetails(\Pggns\MidocoApi\Crm\StructType\GetAgencyDetailsRequest $paramGetAgencyDetailsRequest)
    {
        try {
            $this->setResult($resultGetAgencyDetails = $this->getSoapClient()->__soapCall('getAgencyDetails', [
                $paramGetAgencyDetailsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAgencyDetails;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAgencyCommission
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetAgencyCommissionRequest $paramGetAgencyCommissionRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetAgencyCommissionResponse|bool
     */
    public function getAgencyCommission(\Pggns\MidocoApi\Crm\StructType\GetAgencyCommissionRequest $paramGetAgencyCommissionRequest)
    {
        try {
            $this->setResult($resultGetAgencyCommission = $this->getSoapClient()->__soapCall('getAgencyCommission', [
                $paramGetAgencyCommissionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAgencyCommission;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMidocoCustomerTextTemplates
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetMediatorTextTemplatesRequest $paramGetMediatorTextTemplatesRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetMediatorTextTemplatesResponse|bool
     */
    public function getMidocoCustomerTextTemplates(\Pggns\MidocoApi\Crm\StructType\GetMediatorTextTemplatesRequest $paramGetMediatorTextTemplatesRequest)
    {
        try {
            $this->setResult($resultGetMidocoCustomerTextTemplates = $this->getSoapClient()->__soapCall('getMidocoCustomerTextTemplates', [
                $paramGetMediatorTextTemplatesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMidocoCustomerTextTemplates;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCustomerAssignableDebitors
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetCustomerAssignableDebitorsRequest $paramGetCustomerAssignableDebitorsRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetCustomerAssignableDebitorsResponse|bool
     */
    public function getCustomerAssignableDebitors(\Pggns\MidocoApi\Crm\StructType\GetCustomerAssignableDebitorsRequest $paramGetCustomerAssignableDebitorsRequest)
    {
        try {
            $this->setResult($resultGetCustomerAssignableDebitors = $this->getSoapClient()->__soapCall('getCustomerAssignableDebitors', [
                $paramGetCustomerAssignableDebitorsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCustomerAssignableDebitors;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getDebitorInfo
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetDebitorInfoRequest $paramGetDebitorInfoRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetDebitorInfoResponse|bool
     */
    public function getDebitorInfo(\Pggns\MidocoApi\Crm\StructType\GetDebitorInfoRequest $paramGetDebitorInfoRequest)
    {
        try {
            $this->setResult($resultGetDebitorInfo = $this->getSoapClient()->__soapCall('getDebitorInfo', [
                $paramGetDebitorInfoRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetDebitorInfo;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMediatorSettlementLevel
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetMediatorSettlementLevelRequest $paramGetMediatorSettlementLevelRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetMediatorSettlementLevelResponse|bool
     */
    public function getMediatorSettlementLevel(\Pggns\MidocoApi\Crm\StructType\GetMediatorSettlementLevelRequest $paramGetMediatorSettlementLevelRequest)
    {
        try {
            $this->setResult($resultGetMediatorSettlementLevel = $this->getSoapClient()->__soapCall('getMediatorSettlementLevel', [
                $paramGetMediatorSettlementLevelRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMediatorSettlementLevel;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCustInfoIfDifferent
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetCustInfoIfDifferentRequest $paramGetCustInfoIfDifferentRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetCustInfoIfDifferentResponse|bool
     */
    public function getCustInfoIfDifferent(\Pggns\MidocoApi\Crm\StructType\GetCustInfoIfDifferentRequest $paramGetCustInfoIfDifferentRequest)
    {
        try {
            $this->setResult($resultGetCustInfoIfDifferent = $this->getSoapClient()->__soapCall('getCustInfoIfDifferent', [
                $paramGetCustInfoIfDifferentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCustInfoIfDifferent;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMerlinExportString
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetMerlinExportStringRequest $paramGetMerlinExportStringRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetMerlinExportStringResponse|bool
     */
    public function getMerlinExportString(\Pggns\MidocoApi\Crm\StructType\GetMerlinExportStringRequest $paramGetMerlinExportStringRequest)
    {
        try {
            $this->setResult($resultGetMerlinExportString = $this->getSoapClient()->__soapCall('getMerlinExportString', [
                $paramGetMerlinExportStringRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMerlinExportString;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMidocoAgency
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetMidocoAgencyRequest $paramGetMidocoAgencyRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetMidocoAgencyResponse|bool
     */
    public function getMidocoAgency(\Pggns\MidocoApi\Crm\StructType\GetMidocoAgencyRequest $paramGetMidocoAgencyRequest)
    {
        try {
            $this->setResult($resultGetMidocoAgency = $this->getSoapClient()->__soapCall('getMidocoAgency', [
                $paramGetMidocoAgencyRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMidocoAgency;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAllCompanyCustomers
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetAllCompanyCustomersRequest $paramGetAllCompanyCustomersRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetAllCompanyCustomersResponse|bool
     */
    public function getAllCompanyCustomers(\Pggns\MidocoApi\Crm\StructType\GetAllCompanyCustomersRequest $paramGetAllCompanyCustomersRequest)
    {
        try {
            $this->setResult($resultGetAllCompanyCustomers = $this->getSoapClient()->__soapCall('getAllCompanyCustomers', [
                $paramGetAllCompanyCustomersRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAllCompanyCustomers;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAgencyExternalSystemAttributes
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetAgencyExternalSystemAttributesRequest $paramGetAgencyExternalSystemAttributesRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetAgencyExternalSystemAttributesResponse|bool
     */
    public function getAgencyExternalSystemAttributes(\Pggns\MidocoApi\Crm\StructType\GetAgencyExternalSystemAttributesRequest $paramGetAgencyExternalSystemAttributesRequest)
    {
        try {
            $this->setResult($resultGetAgencyExternalSystemAttributes = $this->getSoapClient()->__soapCall('getAgencyExternalSystemAttributes', [
                $paramGetAgencyExternalSystemAttributesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAgencyExternalSystemAttributes;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMediatorCharge
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetMediatorChargeRequest $paramGetMediatorChargeRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetMediatorChargeResponse|bool
     */
    public function getMediatorCharge(\Pggns\MidocoApi\Crm\StructType\GetMediatorChargeRequest $paramGetMediatorChargeRequest)
    {
        try {
            $this->setResult($resultGetMediatorCharge = $this->getSoapClient()->__soapCall('getMediatorCharge', [
                $paramGetMediatorChargeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMediatorCharge;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMediatorChargesList
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetMediatorChargesListRequest $paramGetMediatorChargesListRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetMediatorChargesListResponse|bool
     */
    public function getMediatorChargesList(\Pggns\MidocoApi\Crm\StructType\GetMediatorChargesListRequest $paramGetMediatorChargesListRequest)
    {
        try {
            $this->setResult($resultGetMediatorChargesList = $this->getSoapClient()->__soapCall('getMediatorChargesList', [
                $paramGetMediatorChargesListRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMediatorChargesList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getDueMediatorCharges
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetDueMediatorChargesRequest $paramGetDueMediatorChargesRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetDueMediatorChargesResponse|bool
     */
    public function getDueMediatorCharges(\Pggns\MidocoApi\Crm\StructType\GetDueMediatorChargesRequest $paramGetDueMediatorChargesRequest)
    {
        try {
            $this->setResult($resultGetDueMediatorCharges = $this->getSoapClient()->__soapCall('getDueMediatorCharges', [
                $paramGetDueMediatorChargesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetDueMediatorCharges;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getGroupAdvisors
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetGroupAdvisorRequest $paramGetGroupAdvisorRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetGroupAdvisorResponse|bool
     */
    public function getGroupAdvisors(\Pggns\MidocoApi\Crm\StructType\GetGroupAdvisorRequest $paramGetGroupAdvisorRequest)
    {
        try {
            $this->setResult($resultGetGroupAdvisors = $this->getSoapClient()->__soapCall('getGroupAdvisors', [
                $paramGetGroupAdvisorRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetGroupAdvisors;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAgencyNumbers
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetAgencyNumbersRequest $paramGetAgencyNumbersRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetAgencyNumbersResponse|bool
     */
    public function getAgencyNumbers(\Pggns\MidocoApi\Crm\StructType\GetAgencyNumbersRequest $paramGetAgencyNumbersRequest)
    {
        try {
            $this->setResult($resultGetAgencyNumbers = $this->getSoapClient()->__soapCall('getAgencyNumbers', [
                $paramGetAgencyNumbersRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAgencyNumbers;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMidocoSupplierFormat
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetMidocoSupplierFormatRequest $paramGetMidocoSupplierFormatRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetMidocoSupplierFormatResponse|bool
     */
    public function getMidocoSupplierFormat(\Pggns\MidocoApi\Crm\StructType\GetMidocoSupplierFormatRequest $paramGetMidocoSupplierFormatRequest)
    {
        try {
            $this->setResult($resultGetMidocoSupplierFormat = $this->getSoapClient()->__soapCall('getMidocoSupplierFormat', [
                $paramGetMidocoSupplierFormatRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMidocoSupplierFormat;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSupplierReportForSupplier
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetSupplierReportForSupplierRequest $paramGetSupplierReportForSupplierRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetSupplierReportForSupplierResponse|bool
     */
    public function getSupplierReportForSupplier(\Pggns\MidocoApi\Crm\StructType\GetSupplierReportForSupplierRequest $paramGetSupplierReportForSupplierRequest)
    {
        try {
            $this->setResult($resultGetSupplierReportForSupplier = $this->getSoapClient()->__soapCall('getSupplierReportForSupplier', [
                $paramGetSupplierReportForSupplierRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSupplierReportForSupplier;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSupplierReportForMediator
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetSupplierReportForMediatorRequest $paramGetSupplierReportForMediatorRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetSupplierReportForMediatorResponse|bool
     */
    public function getSupplierReportForMediator(\Pggns\MidocoApi\Crm\StructType\GetSupplierReportForMediatorRequest $paramGetSupplierReportForMediatorRequest)
    {
        try {
            $this->setResult($resultGetSupplierReportForMediator = $this->getSoapClient()->__soapCall('getSupplierReportForMediator', [
                $paramGetSupplierReportForMediatorRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSupplierReportForMediator;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMediatorByCriteria
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetMediatorByCriteriaRequest $paramGetMediatorByCriteriaRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetMediatorByCriteriaResponse|bool
     */
    public function getMediatorByCriteria(\Pggns\MidocoApi\Crm\StructType\GetMediatorByCriteriaRequest $paramGetMediatorByCriteriaRequest)
    {
        try {
            $this->setResult($resultGetMediatorByCriteria = $this->getSoapClient()->__soapCall('getMediatorByCriteria', [
                $paramGetMediatorByCriteriaRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMediatorByCriteria;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAmadeusExportString
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetAmadeusExportStringRequest $paramGetAmadeusExportStringRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetAmadeusExportStringResponse|bool
     */
    public function getAmadeusExportString(\Pggns\MidocoApi\Crm\StructType\GetAmadeusExportStringRequest $paramGetAmadeusExportStringRequest)
    {
        try {
            $this->setResult($resultGetAmadeusExportString = $this->getSoapClient()->__soapCall('getAmadeusExportString', [
                $paramGetAmadeusExportStringRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAmadeusExportString;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCrmNotices
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetCrmNoticesRequest $paramGetCrmNoticesRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetCrmNoticesResponse|bool
     */
    public function getCrmNotices(\Pggns\MidocoApi\Crm\StructType\GetCrmNoticesRequest $paramGetCrmNoticesRequest)
    {
        try {
            $this->setResult($resultGetCrmNotices = $this->getSoapClient()->__soapCall('getCrmNotices', [
                $paramGetCrmNoticesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCrmNotices;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCustomerCommissionDefinition
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetCustomerCommissionDefinitionsRequest $paramGetCustomerCommissionDefinitionsRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetCustomerCommissionDefinitionsResponse|bool
     */
    public function getCustomerCommissionDefinition(\Pggns\MidocoApi\Crm\StructType\GetCustomerCommissionDefinitionsRequest $paramGetCustomerCommissionDefinitionsRequest)
    {
        try {
            $this->setResult($resultGetCustomerCommissionDefinition = $this->getSoapClient()->__soapCall('getCustomerCommissionDefinition', [
                $paramGetCustomerCommissionDefinitionsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCustomerCommissionDefinition;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCooperations
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetCooperationsRequest $paramGetCooperationsRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetCooperationsResponse|bool
     */
    public function getCooperations(\Pggns\MidocoApi\Crm\StructType\GetCooperationsRequest $paramGetCooperationsRequest)
    {
        try {
            $this->setResult($resultGetCooperations = $this->getSoapClient()->__soapCall('getCooperations', [
                $paramGetCooperationsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCooperations;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getPrintRecipient
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetPrintRecipientRequest $paramGetPrintRecipientRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetPrintRecipientResponse|bool
     */
    public function getPrintRecipient(\Pggns\MidocoApi\Crm\StructType\GetPrintRecipientRequest $paramGetPrintRecipientRequest)
    {
        try {
            $this->setResult($resultGetPrintRecipient = $this->getSoapClient()->__soapCall('getPrintRecipient', [
                $paramGetPrintRecipientRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetPrintRecipient;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAvailablePrintRecipient
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetAvailablePrintRecipientRequest $paramGetAvailablePrintRecipientRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetAvailablePrintRecipientResponse|bool
     */
    public function getAvailablePrintRecipient(\Pggns\MidocoApi\Crm\StructType\GetAvailablePrintRecipientRequest $paramGetAvailablePrintRecipientRequest)
    {
        try {
            $this->setResult($resultGetAvailablePrintRecipient = $this->getSoapClient()->__soapCall('getAvailablePrintRecipient', [
                $paramGetAvailablePrintRecipientRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAvailablePrintRecipient;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getErmMailInfo
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetErmMailInfoRequest $paramGetErmMailInfoRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetErmMailInfoResponse|bool
     */
    public function getErmMailInfo(\Pggns\MidocoApi\Crm\StructType\GetErmMailInfoRequest $paramGetErmMailInfoRequest)
    {
        try {
            $this->setResult($resultGetErmMailInfo = $this->getSoapClient()->__soapCall('getErmMailInfo', [
                $paramGetErmMailInfoRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetErmMailInfo;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMidocoMediator
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetMidocoMediatorRequest $paramGetMidocoMediatorRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetMidocoMediatorResponse|bool
     */
    public function getMidocoMediator(\Pggns\MidocoApi\Crm\StructType\GetMidocoMediatorRequest $paramGetMidocoMediatorRequest)
    {
        try {
            $this->setResult($resultGetMidocoMediator = $this->getSoapClient()->__soapCall('getMidocoMediator', [
                $paramGetMidocoMediatorRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMidocoMediator;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCrmPersonTravellers
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetCrmPersonTravellersRequest $paramGetCrmPersonTravellersRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetCrmPersonTravellersResponse|bool
     */
    public function getCrmPersonTravellers(\Pggns\MidocoApi\Crm\StructType\GetCrmPersonTravellersRequest $paramGetCrmPersonTravellersRequest)
    {
        try {
            $this->setResult($resultGetCrmPersonTravellers = $this->getSoapClient()->__soapCall('getCrmPersonTravellers', [
                $paramGetCrmPersonTravellersRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCrmPersonTravellers;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCustomerAddresses
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetCustomerAddressesRequest $paramGetCustomerAddressesRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetCustomerAddressesResponse|bool
     */
    public function getCustomerAddresses(\Pggns\MidocoApi\Crm\StructType\GetCustomerAddressesRequest $paramGetCustomerAddressesRequest)
    {
        try {
            $this->setResult($resultGetCustomerAddresses = $this->getSoapClient()->__soapCall('getCustomerAddresses', [
                $paramGetCustomerAddressesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCustomerAddresses;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getFrequentFlyerNumbers
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetFrequentFlyerNumbersRequest $paramGetFrequentFlyerNumbersRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetFrequentFlyerNumbersResponse|bool
     */
    public function getFrequentFlyerNumbers(\Pggns\MidocoApi\Crm\StructType\GetFrequentFlyerNumbersRequest $paramGetFrequentFlyerNumbersRequest)
    {
        try {
            $this->setResult($resultGetFrequentFlyerNumbers = $this->getSoapClient()->__soapCall('getFrequentFlyerNumbers', [
                $paramGetFrequentFlyerNumbersRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetFrequentFlyerNumbers;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCustomerErrors
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetCustomerErrorsRequest $paramGetCustomerErrorsRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetCustomerErrorsResponse|bool
     */
    public function getCustomerErrors(\Pggns\MidocoApi\Crm\StructType\GetCustomerErrorsRequest $paramGetCustomerErrorsRequest)
    {
        try {
            $this->setResult($resultGetCustomerErrors = $this->getSoapClient()->__soapCall('getCustomerErrors', [
                $paramGetCustomerErrorsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCustomerErrors;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCustomerMf
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetCustomerMfRequest $paramGetCustomerMfRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetCustomerMfResponse|bool
     */
    public function getCustomerMf(\Pggns\MidocoApi\Crm\StructType\GetCustomerMfRequest $paramGetCustomerMfRequest)
    {
        try {
            $this->setResult($resultGetCustomerMf = $this->getSoapClient()->__soapCall('getCustomerMf', [
                $paramGetCustomerMfRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCustomerMf;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getEmails
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetEmailsRequest $paramGetEmailsRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetEmailsResponse|bool
     */
    public function getEmails(\Pggns\MidocoApi\Crm\StructType\GetEmailsRequest $paramGetEmailsRequest)
    {
        try {
            $this->setResult($resultGetEmails = $this->getSoapClient()->__soapCall('getEmails', [
                $paramGetEmailsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetEmails;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMediatorContacts
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetMediatorContactsRequest $paramGetMediatorContactsRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetMediatorContactsResponse|bool
     */
    public function getMediatorContacts(\Pggns\MidocoApi\Crm\StructType\GetMediatorContactsRequest $paramGetMediatorContactsRequest)
    {
        try {
            $this->setResult($resultGetMediatorContacts = $this->getSoapClient()->__soapCall('getMediatorContacts', [
                $paramGetMediatorContactsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMediatorContacts;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCreditor
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetCreditorRequest $paramGetCreditorRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetCreditorResponse|bool
     */
    public function getCreditor(\Pggns\MidocoApi\Crm\StructType\GetCreditorRequest $paramGetCreditorRequest)
    {
        try {
            $this->setResult($resultGetCreditor = $this->getSoapClient()->__soapCall('getCreditor', [
                $paramGetCreditorRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCreditor;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCommunicationHistories
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetCommunicationHistoriesRequest $paramGetCommunicationHistoriesRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetCommunicationHistoriesResponse|bool
     */
    public function getCommunicationHistories(\Pggns\MidocoApi\Crm\StructType\GetCommunicationHistoriesRequest $paramGetCommunicationHistoriesRequest)
    {
        try {
            $this->setResult($resultGetCommunicationHistories = $this->getSoapClient()->__soapCall('getCommunicationHistories', [
                $paramGetCommunicationHistoriesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCommunicationHistories;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAgencyCooperationHistory
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetAgencyCooperationHistoryRequest $paramGetAgencyCooperationHistoryRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetAgencyCooperationHistoryResponse|bool
     */
    public function getAgencyCooperationHistory(\Pggns\MidocoApi\Crm\StructType\GetAgencyCooperationHistoryRequest $paramGetAgencyCooperationHistoryRequest)
    {
        try {
            $this->setResult($resultGetAgencyCooperationHistory = $this->getSoapClient()->__soapCall('getAgencyCooperationHistory', [
                $paramGetAgencyCooperationHistoryRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAgencyCooperationHistory;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCollectiveInvoiceSettings
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetCollectiveInvoiceSettingsRequest $paramGetCollectiveInvoiceSettingsRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetCollectiveInvoiceSettingsResponse|bool
     */
    public function getCollectiveInvoiceSettings(\Pggns\MidocoApi\Crm\StructType\GetCollectiveInvoiceSettingsRequest $paramGetCollectiveInvoiceSettingsRequest)
    {
        try {
            $this->setResult($resultGetCollectiveInvoiceSettings = $this->getSoapClient()->__soapCall('getCollectiveInvoiceSettings', [
                $paramGetCollectiveInvoiceSettingsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCollectiveInvoiceSettings;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAgenciesWithCollectiveInvoice
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetAgenciesWithCollectiveInvoiceRequest $paramGetAgenciesWithCollectiveInvoiceRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetAgenciesWithCollectiveInvoiceResponse|bool
     */
    public function getAgenciesWithCollectiveInvoice(\Pggns\MidocoApi\Crm\StructType\GetAgenciesWithCollectiveInvoiceRequest $paramGetAgenciesWithCollectiveInvoiceRequest)
    {
        try {
            $this->setResult($resultGetAgenciesWithCollectiveInvoice = $this->getSoapClient()->__soapCall('getAgenciesWithCollectiveInvoice', [
                $paramGetAgenciesWithCollectiveInvoiceRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAgenciesWithCollectiveInvoice;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getUnprintedCustomerInvoices
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetUnprintedCustomerInvoicesRequest $paramGetUnprintedCustomerInvoicesRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetUnprintedCustomerInvoicesResponse|bool
     */
    public function getUnprintedCustomerInvoices(\Pggns\MidocoApi\Crm\StructType\GetUnprintedCustomerInvoicesRequest $paramGetUnprintedCustomerInvoicesRequest)
    {
        try {
            $this->setResult($resultGetUnprintedCustomerInvoices = $this->getSoapClient()->__soapCall('getUnprintedCustomerInvoices', [
                $paramGetUnprintedCustomerInvoicesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetUnprintedCustomerInvoices;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getDirectDebitorContacts
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetDirectDebitorContactsRequest $paramGetDirectDebitorContactsRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetDirectDebitorContactsResponse|bool
     */
    public function getDirectDebitorContacts(\Pggns\MidocoApi\Crm\StructType\GetDirectDebitorContactsRequest $paramGetDirectDebitorContactsRequest)
    {
        try {
            $this->setResult($resultGetDirectDebitorContacts = $this->getSoapClient()->__soapCall('getDirectDebitorContacts', [
                $paramGetDirectDebitorContactsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetDirectDebitorContacts;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAgencyByCriteria
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetAgencyByCriteriaRequest $paramGetAgencyByCriteriaRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetAgencyByCriteriaResponse|bool
     */
    public function getAgencyByCriteria(\Pggns\MidocoApi\Crm\StructType\GetAgencyByCriteriaRequest $paramGetAgencyByCriteriaRequest)
    {
        try {
            $this->setResult($resultGetAgencyByCriteria = $this->getSoapClient()->__soapCall('getAgencyByCriteria', [
                $paramGetAgencyByCriteriaRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAgencyByCriteria;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCcToken
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetCcTokenRequest $paramGetCcTokenRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetCcTokenResponse|bool
     */
    public function getCcToken(\Pggns\MidocoApi\Crm\StructType\GetCcTokenRequest $paramGetCcTokenRequest)
    {
        try {
            $this->setResult($resultGetCcToken = $this->getSoapClient()->__soapCall('getCcToken', [
                $paramGetCcTokenRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCcToken;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCustomerStatisticData
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetCustomerStatisticDataRequest $paramGetCustomerStatisticDataRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetCustomerStatisticDataResponse|bool
     */
    public function getCustomerStatisticData(\Pggns\MidocoApi\Crm\StructType\GetCustomerStatisticDataRequest $paramGetCustomerStatisticDataRequest)
    {
        try {
            $this->setResult($resultGetCustomerStatisticData = $this->getSoapClient()->__soapCall('getCustomerStatisticData', [
                $paramGetCustomerStatisticDataRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCustomerStatisticData;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getPrintSelectsForCustomer
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetPrintSelectsForCustomerRequest $paramGetPrintSelectsForCustomerRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetPrintSelectsForCustomerResponse|bool
     */
    public function getPrintSelectsForCustomer(\Pggns\MidocoApi\Crm\StructType\GetPrintSelectsForCustomerRequest $paramGetPrintSelectsForCustomerRequest)
    {
        try {
            $this->setResult($resultGetPrintSelectsForCustomer = $this->getSoapClient()->__soapCall('getPrintSelectsForCustomer', [
                $paramGetPrintSelectsForCustomerRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetPrintSelectsForCustomer;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMidocoCharge
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetMidocoChargeRequest $paramGetMidocoChargeRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetMidocoChargeResponse|bool
     */
    public function getMidocoCharge(\Pggns\MidocoApi\Crm\StructType\GetMidocoChargeRequest $paramGetMidocoChargeRequest)
    {
        try {
            $this->setResult($resultGetMidocoCharge = $this->getSoapClient()->__soapCall('getMidocoCharge', [
                $paramGetMidocoChargeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMidocoCharge;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMidocoChargesList
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetMidocoChargesListRequest $paramGetMidocoChargesListRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetMidocoChargesListResponse|bool
     */
    public function getMidocoChargesList(\Pggns\MidocoApi\Crm\StructType\GetMidocoChargesListRequest $paramGetMidocoChargesListRequest)
    {
        try {
            $this->setResult($resultGetMidocoChargesList = $this->getSoapClient()->__soapCall('getMidocoChargesList', [
                $paramGetMidocoChargesListRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMidocoChargesList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getDueMidocoCharges
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetDueMidocoChargesRequest $paramGetDueMidocoChargesRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetDueMidocoChargesResponse|bool
     */
    public function getDueMidocoCharges(\Pggns\MidocoApi\Crm\StructType\GetDueMidocoChargesRequest $paramGetDueMidocoChargesRequest)
    {
        try {
            $this->setResult($resultGetDueMidocoCharges = $this->getSoapClient()->__soapCall('getDueMidocoCharges', [
                $paramGetDueMidocoChargesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetDueMidocoCharges;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCrmPrintTypes
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetCrmPrintTypesRequest $paramGetCrmPrintTypesRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetCrmPrintTypesResponse|bool
     */
    public function getCrmPrintTypes(\Pggns\MidocoApi\Crm\StructType\GetCrmPrintTypesRequest $paramGetCrmPrintTypesRequest)
    {
        try {
            $this->setResult($resultGetCrmPrintTypes = $this->getSoapClient()->__soapCall('getCrmPrintTypes', [
                $paramGetCrmPrintTypesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCrmPrintTypes;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCrmPrintTypeNoOfCopies
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetCrmPrintTypeNoOfCopiesRequest $paramGetCrmPrintTypeNoOfCopiesRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetCrmPrintTypeNoOfCopiesResponse|bool
     */
    public function getCrmPrintTypeNoOfCopies(\Pggns\MidocoApi\Crm\StructType\GetCrmPrintTypeNoOfCopiesRequest $paramGetCrmPrintTypeNoOfCopiesRequest)
    {
        try {
            $this->setResult($resultGetCrmPrintTypeNoOfCopies = $this->getSoapClient()->__soapCall('getCrmPrintTypeNoOfCopies', [
                $paramGetCrmPrintTypeNoOfCopiesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCrmPrintTypeNoOfCopies;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getLinkedCrmCompaniesToSupplier
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetLinkedCrmCompaniesToSupplierRequest $paramGetLinkedCrmCompaniesToSupplierRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetLinkedCrmCompaniesToSupplierResponse|bool
     */
    public function getLinkedCrmCompaniesToSupplier(\Pggns\MidocoApi\Crm\StructType\GetLinkedCrmCompaniesToSupplierRequest $paramGetLinkedCrmCompaniesToSupplierRequest)
    {
        try {
            $this->setResult($resultGetLinkedCrmCompaniesToSupplier = $this->getSoapClient()->__soapCall('getLinkedCrmCompaniesToSupplier', [
                $paramGetLinkedCrmCompaniesToSupplierRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetLinkedCrmCompaniesToSupplier;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCrmHistory
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetCrmHistoryRequest $paramGetCrmHistoryRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetCrmHistoryResponse|bool
     */
    public function getCrmHistory(\Pggns\MidocoApi\Crm\StructType\GetCrmHistoryRequest $paramGetCrmHistoryRequest)
    {
        try {
            $this->setResult($resultGetCrmHistory = $this->getSoapClient()->__soapCall('getCrmHistory', [
                $paramGetCrmHistoryRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCrmHistory;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getValidCustomerMandate
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetCustomerMandateRequest $paramGetCustomerMandateRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetCustomerMandateResponse|bool
     */
    public function getValidCustomerMandate(\Pggns\MidocoApi\Crm\StructType\GetCustomerMandateRequest $paramGetCustomerMandateRequest)
    {
        try {
            $this->setResult($resultGetValidCustomerMandate = $this->getSoapClient()->__soapCall('getValidCustomerMandate', [
                $paramGetCustomerMandateRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetValidCustomerMandate;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getModifiedCustomers
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetModifiedCustomersRequest $paramGetModifiedCustomersRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetModifiedCustomersResponse|bool
     */
    public function getModifiedCustomers(\Pggns\MidocoApi\Crm\StructType\GetModifiedCustomersRequest $paramGetModifiedCustomersRequest)
    {
        try {
            $this->setResult($resultGetModifiedCustomers = $this->getSoapClient()->__soapCall('getModifiedCustomers', [
                $paramGetModifiedCustomersRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetModifiedCustomers;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getDuplicateAddress
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetDuplicateAddressRequest $paramGetDuplicateAddressRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetDuplicateAddressResponse|bool
     */
    public function getDuplicateAddress(\Pggns\MidocoApi\Crm\StructType\GetDuplicateAddressRequest $paramGetDuplicateAddressRequest)
    {
        try {
            $this->setResult($resultGetDuplicateAddress = $this->getSoapClient()->__soapCall('getDuplicateAddress', [
                $paramGetDuplicateAddressRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetDuplicateAddress;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAutoBillingMatrix
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetAutoBillingMatrixRequest $paramGetAutoBillingMatrixRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetAutoBillingMatrixResponse|bool
     */
    public function getAutoBillingMatrix(\Pggns\MidocoApi\Crm\StructType\GetAutoBillingMatrixRequest $paramGetAutoBillingMatrixRequest)
    {
        try {
            $this->setResult($resultGetAutoBillingMatrix = $this->getSoapClient()->__soapCall('getAutoBillingMatrix', [
                $paramGetAutoBillingMatrixRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAutoBillingMatrix;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMailForDocumentId
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetMailForDocumentIdRequest $paramGetMailForDocumentIdRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetMailForDocumentIdResponse|bool
     */
    public function getMailForDocumentId(\Pggns\MidocoApi\Crm\StructType\GetMailForDocumentIdRequest $paramGetMailForDocumentIdRequest)
    {
        try {
            $this->setResult($resultGetMailForDocumentId = $this->getSoapClient()->__soapCall('getMailForDocumentId', [
                $paramGetMailForDocumentIdRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMailForDocumentId;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getYearlyTurnover
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetYearlyTurnoverRequest $paramGetYearlyTurnoverRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetYearlyTurnoverResponse|bool
     */
    public function getYearlyTurnover(\Pggns\MidocoApi\Crm\StructType\GetYearlyTurnoverRequest $paramGetYearlyTurnoverRequest)
    {
        try {
            $this->setResult($resultGetYearlyTurnover = $this->getSoapClient()->__soapCall('getYearlyTurnover', [
                $paramGetYearlyTurnoverRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetYearlyTurnover;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCustomerInfo
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetCustomerInfoRequest $paramGetCustomerInfoRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetCustomerInfoResponse|bool
     */
    public function getCustomerInfo(\Pggns\MidocoApi\Crm\StructType\GetCustomerInfoRequest $paramGetCustomerInfoRequest)
    {
        try {
            $this->setResult($resultGetCustomerInfo = $this->getSoapClient()->__soapCall('getCustomerInfo', [
                $paramGetCustomerInfoRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCustomerInfo;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getExportChangedCustomers
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetExportChangedCustomersRequest $paramGetExportChangedCustomersRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetExportChangedCustomersResponse|bool
     */
    public function getExportChangedCustomers(\Pggns\MidocoApi\Crm\StructType\GetExportChangedCustomersRequest $paramGetExportChangedCustomersRequest)
    {
        try {
            $this->setResult($resultGetExportChangedCustomers = $this->getSoapClient()->__soapCall('getExportChangedCustomers', [
                $paramGetExportChangedCustomersRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetExportChangedCustomers;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCustomerInternalVersion
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetCustomerInternalVersionRequest $paramGetCustomerInternalVersionRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetCustomerInternalVersionResponse|bool
     */
    public function getCustomerInternalVersion(\Pggns\MidocoApi\Crm\StructType\GetCustomerInternalVersionRequest $paramGetCustomerInternalVersionRequest)
    {
        try {
            $this->setResult($resultGetCustomerInternalVersion = $this->getSoapClient()->__soapCall('getCustomerInternalVersion', [
                $paramGetCustomerInternalVersionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCustomerInternalVersion;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getUnitDebitor
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetUnitDebitorRequest $paramGetUnitDebitorRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetUnitDebitorResponse|bool
     */
    public function getUnitDebitor(\Pggns\MidocoApi\Crm\StructType\GetUnitDebitorRequest $paramGetUnitDebitorRequest)
    {
        try {
            $this->setResult($resultGetUnitDebitor = $this->getSoapClient()->__soapCall('getUnitDebitor', [
                $paramGetUnitDebitorRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetUnitDebitor;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCrmNoticeComments
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetCrmNoticeCommentsRequest $paramGetCrmNoticeCommentsRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetCrmNoticeCommentsResponse|bool
     */
    public function getCrmNoticeComments(\Pggns\MidocoApi\Crm\StructType\GetCrmNoticeCommentsRequest $paramGetCrmNoticeCommentsRequest)
    {
        try {
            $this->setResult($resultGetCrmNoticeComments = $this->getSoapClient()->__soapCall('getCrmNoticeComments', [
                $paramGetCrmNoticeCommentsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCrmNoticeComments;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getGroupConsent
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetGroupConsentRequest $paramGetGroupConsentRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetGroupConsentResponse|bool
     */
    public function getGroupConsent(\Pggns\MidocoApi\Crm\StructType\GetGroupConsentRequest $paramGetGroupConsentRequest)
    {
        try {
            $this->setResult($resultGetGroupConsent = $this->getSoapClient()->__soapCall('getGroupConsent', [
                $paramGetGroupConsentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetGroupConsent;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getNeoExportString
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetNeoExportStringRequest $paramGetNeoExportStringRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetNeoExportStringResponse|bool
     */
    public function getNeoExportString(\Pggns\MidocoApi\Crm\StructType\GetNeoExportStringRequest $paramGetNeoExportStringRequest)
    {
        try {
            $this->setResult($resultGetNeoExportString = $this->getSoapClient()->__soapCall('getNeoExportString', [
                $paramGetNeoExportStringRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetNeoExportString;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSabreVacationsExportString
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetSabreVacationsExportStringRequest $paramGetSabreVacationsExportStringRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetSabreVacationsExportStringResponse|bool
     */
    public function getSabreVacationsExportString(\Pggns\MidocoApi\Crm\StructType\GetSabreVacationsExportStringRequest $paramGetSabreVacationsExportStringRequest)
    {
        try {
            $this->setResult($resultGetSabreVacationsExportString = $this->getSoapClient()->__soapCall('getSabreVacationsExportString', [
                $paramGetSabreVacationsExportStringRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSabreVacationsExportString;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCrmExternalOffer
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\GetCrmExternalOfferRequest $paramGetCrmExternalOfferRequest
     * @return \Pggns\MidocoApi\Crm\StructType\GetCrmExternalOfferResponse|bool
     */
    public function getCrmExternalOffer(\Pggns\MidocoApi\Crm\StructType\GetCrmExternalOfferRequest $paramGetCrmExternalOfferRequest)
    {
        try {
            $this->setResult($resultGetCrmExternalOffer = $this->getSoapClient()->__soapCall('getCrmExternalOffer', [
                $paramGetCrmExternalOfferRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCrmExternalOffer;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Crm\StructType\GetAddressResponse|\Pggns\MidocoApi\Crm\StructType\GetAgenciesWithCollectiveInvoiceResponse|\Pggns\MidocoApi\Crm\StructType\GetAgencyByCriteriaResponse|\Pggns\MidocoApi\Crm\StructType\GetAgencyCommissionResponse|\Pggns\MidocoApi\Crm\StructType\GetAgencyCooperationHistoryResponse|\Pggns\MidocoApi\Crm\StructType\GetAgencyDetailsResponse|\Pggns\MidocoApi\Crm\StructType\GetAgencyExternalSystemAttributesResponse|\Pggns\MidocoApi\Crm\StructType\GetAgencyNumbersResponse|\Pggns\MidocoApi\Crm\StructType\GetAllCompanyCustomersResponse|\Pggns\MidocoApi\Crm\StructType\GetAmadeusExportStringResponse|\Pggns\MidocoApi\Crm\StructType\GetAutoBillingMatrixResponse|\Pggns\MidocoApi\Crm\StructType\GetAvailableBonusDescriptionsResponse|\Pggns\MidocoApi\Crm\StructType\GetAvailableCardDescriptionsResponse|\Pggns\MidocoApi\Crm\StructType\GetAvailableComplaintReasonDescriptionsResponse|\Pggns\MidocoApi\Crm\StructType\GetAvailableComplaintTypeDescriptionsResponse|\Pggns\MidocoApi\Crm\StructType\GetAvailableContactDescriptionsResponse|\Pggns\MidocoApi\Crm\StructType\GetAvailableCountriesResponse|\Pggns\MidocoApi\Crm\StructType\GetAvailableDocumentTypesResponse|\Pggns\MidocoApi\Crm\StructType\GetAvailableLockReasonDescriptionsResponse|\Pggns\MidocoApi\Crm\StructType\GetAvailableLockReasonsResponse|\Pggns\MidocoApi\Crm\StructType\GetAvailableMediatorsResponse|\Pggns\MidocoApi\Crm\StructType\GetAvailablePrintRecipientResponse|\Pggns\MidocoApi\Crm\StructType\GetBonusCardsResponse|\Pggns\MidocoApi\Crm\StructType\GetCcCardsResponse|\Pggns\MidocoApi\Crm\StructType\GetCcTokenResponse|\Pggns\MidocoApi\Crm\StructType\GetCollectiveInvoiceSettingsResponse|\Pggns\MidocoApi\Crm\StructType\GetCommunicationHistoriesResponse|\Pggns\MidocoApi\Crm\StructType\GetComplaintDocumentsResponse|\Pggns\MidocoApi\Crm\StructType\GetComplaintReasonsResponse|\Pggns\MidocoApi\Crm\StructType\GetComplaintsResponse|\Pggns\MidocoApi\Crm\StructType\GetContactEntriesResponse|\Pggns\MidocoApi\Crm\StructType\GetContactMediaResponse|\Pggns\MidocoApi\Crm\StructType\GetCooperationsResponse|\Pggns\MidocoApi\Crm\StructType\GetCreditorResponse|\Pggns\MidocoApi\Crm\StructType\GetCrmCampaignesResponse|\Pggns\MidocoApi\Crm\StructType\GetCrmContextResponse|\Pggns\MidocoApi\Crm\StructType\GetCrmCustomerPaymentGroupFeeResponse|\Pggns\MidocoApi\Crm\StructType\GetCrmExternalOfferResponse|\Pggns\MidocoApi\Crm\StructType\GetCrmHistoryResponse|\Pggns\MidocoApi\Crm\StructType\GetCrmNoticeCommentsResponse|\Pggns\MidocoApi\Crm\StructType\GetCrmNoticesResponse|\Pggns\MidocoApi\Crm\StructType\GetCrmPersonTravellersResponse|\Pggns\MidocoApi\Crm\StructType\GetCrmPrintTypeNoOfCopiesResponse|\Pggns\MidocoApi\Crm\StructType\GetCrmPrintTypesResponse|\Pggns\MidocoApi\Crm\StructType\GetCustInfoIfDifferentResponse|\Pggns\MidocoApi\Crm\StructType\GetCustomerAddressesResponse|\Pggns\MidocoApi\Crm\StructType\GetCustomerAssignableDebitorsResponse|\Pggns\MidocoApi\Crm\StructType\GetCustomerByMediatorIdResponse|\Pggns\MidocoApi\Crm\StructType\GetCustomerCommissionDefinitionsResponse|\Pggns\MidocoApi\Crm\StructType\GetCustomerCompanyResponse|\Pggns\MidocoApi\Crm\StructType\GetCustomerCriteriaResponse|\Pggns\MidocoApi\Crm\StructType\GetCustomerErrorsResponse|\Pggns\MidocoApi\Crm\StructType\GetCustomerInfoResponse|\Pggns\MidocoApi\Crm\StructType\GetCustomerInternalVersionResponse|\Pggns\MidocoApi\Crm\StructType\GetCustomerLinksResponse|\Pggns\MidocoApi\Crm\StructType\GetCustomerMandateResponse|\Pggns\MidocoApi\Crm\StructType\GetCustomerMfResponse|\Pggns\MidocoApi\Crm\StructType\GetCustomerOrdersResponse|\Pggns\MidocoApi\Crm\StructType\GetCustomerResponse|\Pggns\MidocoApi\Crm\StructType\GetCustomerStatisticDataResponse|\Pggns\MidocoApi\Crm\StructType\GetCustomerTravelsResponse|\Pggns\MidocoApi\Crm\StructType\GetDebitCardsResponse|\Pggns\MidocoApi\Crm\StructType\GetDebitorInfoResponse|\Pggns\MidocoApi\Crm\StructType\GetDebitorResponse|\Pggns\MidocoApi\Crm\StructType\GetDebitorsResponse|\Pggns\MidocoApi\Crm\StructType\GetDirectDebitorContactsResponse|\Pggns\MidocoApi\Crm\StructType\GetDocumentResponse|\Pggns\MidocoApi\Crm\StructType\GetDocumentsResponse|\Pggns\MidocoApi\Crm\StructType\GetDueMediatorChargesResponse|\Pggns\MidocoApi\Crm\StructType\GetDueMidocoChargesResponse|\Pggns\MidocoApi\Crm\StructType\GetDuplicateAddressResponse|\Pggns\MidocoApi\Crm\StructType\GetEmailsResponse|\Pggns\MidocoApi\Crm\StructType\GetErmMailInfoResponse|\Pggns\MidocoApi\Crm\StructType\GetExportChangedCustomersResponse|\Pggns\MidocoApi\Crm\StructType\GetExtendedCustomerTravelsResponse|\Pggns\MidocoApi\Crm\StructType\GetFrequentFlyerNumbersResponse|\Pggns\MidocoApi\Crm\StructType\GetGroupAdvisorResponse|\Pggns\MidocoApi\Crm\StructType\GetGroupConsentResponse|\Pggns\MidocoApi\Crm\StructType\GetHistoryResponse|\Pggns\MidocoApi\Crm\StructType\GetIsDiversDebitorsResponse|\Pggns\MidocoApi\Crm\StructType\GetLinkedCrmCompaniesToSupplierResponse|\Pggns\MidocoApi\Crm\StructType\GetMailForDocumentIdResponse|\Pggns\MidocoApi\Crm\StructType\GetMediatorByCriteriaResponse|\Pggns\MidocoApi\Crm\StructType\GetMediatorChargeResponse|\Pggns\MidocoApi\Crm\StructType\GetMediatorChargesListResponse|\Pggns\MidocoApi\Crm\StructType\GetMediatorContactsResponse|\Pggns\MidocoApi\Crm\StructType\GetMediatorResponse|\Pggns\MidocoApi\Crm\StructType\GetMediatorSettlementLevelResponse|\Pggns\MidocoApi\Crm\StructType\GetMediatorTextTemplatesResponse|\Pggns\MidocoApi\Crm\StructType\GetMerlinExportStringResponse|\Pggns\MidocoApi\Crm\StructType\GetMidocoAgencyResponse|\Pggns\MidocoApi\Crm\StructType\GetMidocoChargeResponse|\Pggns\MidocoApi\Crm\StructType\GetMidocoChargesListResponse|\Pggns\MidocoApi\Crm\StructType\GetMidocoCrmCustomerPaymentResponse|\Pggns\MidocoApi\Crm\StructType\GetMidocoMediatorResponse|\Pggns\MidocoApi\Crm\StructType\GetMidocoSupplierFormatResponse|\Pggns\MidocoApi\Crm\StructType\GetModifiedCustomersResponse|\Pggns\MidocoApi\Crm\StructType\GetNeoExportStringResponse|\Pggns\MidocoApi\Crm\StructType\GetPrintRecipientResponse|\Pggns\MidocoApi\Crm\StructType\GetPrintSelectsForCustomerResponse|\Pggns\MidocoApi\Crm\StructType\GetSabreVacationsExportStringResponse|\Pggns\MidocoApi\Crm\StructType\GetSalutationForCultureResponse|\Pggns\MidocoApi\Crm\StructType\GetSalutationTypesResponse|\Pggns\MidocoApi\Crm\StructType\GetSimilarAddressResponse|\Pggns\MidocoApi\Crm\StructType\GetSupplierReportForMediatorResponse|\Pggns\MidocoApi\Crm\StructType\GetSupplierReportForSupplierResponse|\Pggns\MidocoApi\Crm\StructType\GetTravellerResponse|\Pggns\MidocoApi\Crm\StructType\GetUnitDebitorResponse|\Pggns\MidocoApi\Crm\StructType\GetUnprintedCustomerInvoicesResponse|\Pggns\MidocoApi\Crm\StructType\GetYearlyTurnoverResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
