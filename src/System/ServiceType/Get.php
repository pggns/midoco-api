<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\System\ServiceType;

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
     * @param \Pggns\MidocoApi\System\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\System\ServiceType\Get
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\System\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named getOrgUnit
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\System\StructType\GetOrgUnitRequest $paramGetOrgUnitRequest
     * @return \Pggns\MidocoApi\System\StructType\OrgunitDTO|bool
     */
    public function getOrgUnit(\Pggns\MidocoApi\System\StructType\GetOrgUnitRequest $paramGetOrgUnitRequest)
    {
        try {
            $this->setResult($resultGetOrgUnit = $this->getSoapClient()->__soapCall('getOrgUnit', [
                $paramGetOrgUnitRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetOrgUnit;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getChildrenForOrgUnit
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\System\StructType\GetChildrenForOrgUnitRequest $paramGetChildrenForOrgUnitRequest
     * @return \Pggns\MidocoApi\System\StructType\GetChildrenForOrgUnitResponse|bool
     */
    public function getChildrenForOrgUnit(\Pggns\MidocoApi\System\StructType\GetChildrenForOrgUnitRequest $paramGetChildrenForOrgUnitRequest)
    {
        try {
            $this->setResult($resultGetChildrenForOrgUnit = $this->getSoapClient()->__soapCall('getChildrenForOrgUnit', [
                $paramGetChildrenForOrgUnitRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetChildrenForOrgUnit;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAllowedRolesForCurrentUser
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\System\StructType\GetAllowedRolesForCurrentUserRequest $paramGetAllowedRolesForCurrentUserRequest
     * @return \Pggns\MidocoApi\System\StructType\GetAllowedRolesForCurrentUserResponse|bool
     */
    public function getAllowedRolesForCurrentUser(\Pggns\MidocoApi\System\StructType\GetAllowedRolesForCurrentUserRequest $paramGetAllowedRolesForCurrentUserRequest)
    {
        try {
            $this->setResult($resultGetAllowedRolesForCurrentUser = $this->getSoapClient()->__soapCall('getAllowedRolesForCurrentUser', [
                $paramGetAllowedRolesForCurrentUserRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAllowedRolesForCurrentUser;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getApplicationsForCurrentRole
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\System\StructType\GetApplicationsForCurrentRoleRequest $paramGetApplicationsForCurrentRoleRequest
     * @return \Pggns\MidocoApi\System\StructType\GetApplicationsForCurrentRoleResponse|bool
     */
    public function getApplicationsForCurrentRole(\Pggns\MidocoApi\System\StructType\GetApplicationsForCurrentRoleRequest $paramGetApplicationsForCurrentRoleRequest)
    {
        try {
            $this->setResult($resultGetApplicationsForCurrentRole = $this->getSoapClient()->__soapCall('getApplicationsForCurrentRole', [
                $paramGetApplicationsForCurrentRoleRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetApplicationsForCurrentRole;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getOrgUnitsForUser
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\System\StructType\GetOrgUnitsForUserRequest $paramGetOrgUnitsForUserRequest
     * @return \Pggns\MidocoApi\System\StructType\GetOrgUnitsForUserResponse|bool
     */
    public function getOrgUnitsForUser(\Pggns\MidocoApi\System\StructType\GetOrgUnitsForUserRequest $paramGetOrgUnitsForUserRequest)
    {
        try {
            $this->setResult($resultGetOrgUnitsForUser = $this->getSoapClient()->__soapCall('getOrgUnitsForUser', [
                $paramGetOrgUnitsForUserRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetOrgUnitsForUser;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getUser
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\System\StructType\GetUserRequest $paramGetUserRequest
     * @return \Pggns\MidocoApi\System\StructType\UserDTO|bool
     */
    public function getUser(\Pggns\MidocoApi\System\StructType\GetUserRequest $paramGetUserRequest)
    {
        try {
            $this->setResult($resultGetUser = $this->getSoapClient()->__soapCall('getUser', [
                $paramGetUserRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetUser;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getUserById
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\System\StructType\GetUserByIdRequest $paramGetUserByIdRequest
     * @return \Pggns\MidocoApi\System\StructType\UserDTO|bool
     */
    public function getUserById(\Pggns\MidocoApi\System\StructType\GetUserByIdRequest $paramGetUserByIdRequest)
    {
        try {
            $this->setResult($resultGetUserById = $this->getSoapClient()->__soapCall('getUserById', [
                $paramGetUserByIdRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetUserById;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getOrgUnitSequence
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\System\StructType\GetOrgUnitSequenceRequest $paramGetOrgUnitSequenceRequest
     * @return \Pggns\MidocoApi\System\StructType\GetOrgUnitSequenceResponse|bool
     */
    public function getOrgUnitSequence(\Pggns\MidocoApi\System\StructType\GetOrgUnitSequenceRequest $paramGetOrgUnitSequenceRequest)
    {
        try {
            $this->setResult($resultGetOrgUnitSequence = $this->getSoapClient()->__soapCall('getOrgUnitSequence', [
                $paramGetOrgUnitSequenceRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetOrgUnitSequence;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMfGroup
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\System\StructType\GetMfGroupRequest $paramGetMfGroupRequest
     * @return \Pggns\MidocoApi\System\StructType\GetMfGroupResponse|bool
     */
    public function getMfGroup(\Pggns\MidocoApi\System\StructType\GetMfGroupRequest $paramGetMfGroupRequest)
    {
        try {
            $this->setResult($resultGetMfGroup = $this->getSoapClient()->__soapCall('getMfGroup', [
                $paramGetMfGroupRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMfGroup;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMfs4Group
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\System\StructType\GetMfs4GroupRequest $paramGetMfs4GroupRequest
     * @return \Pggns\MidocoApi\System\StructType\GetMfs4GroupResponse|bool
     */
    public function getMfs4Group(\Pggns\MidocoApi\System\StructType\GetMfs4GroupRequest $paramGetMfs4GroupRequest)
    {
        try {
            $this->setResult($resultGetMfs4Group = $this->getSoapClient()->__soapCall('getMfs4Group', [
                $paramGetMfs4GroupRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMfs4Group;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getInexsoUrl
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\System\StructType\GetInexsoUrlRequest $paramGetInexsoUrlRequest
     * @return \Pggns\MidocoApi\System\StructType\GetInexsoUrlResponse|bool
     */
    public function getInexsoUrl(\Pggns\MidocoApi\System\StructType\GetInexsoUrlRequest $paramGetInexsoUrlRequest)
    {
        try {
            $this->setResult($resultGetInexsoUrl = $this->getSoapClient()->__soapCall('getInexsoUrl', [
                $paramGetInexsoUrlRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetInexsoUrl;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getPrintRemarkDestination
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\System\StructType\GetPrintRemarkDestinationRequest $paramGetPrintRemarkDestinationRequest
     * @return \Pggns\MidocoApi\System\StructType\GetPrintRemarkDestinationResponse|bool
     */
    public function getPrintRemarkDestination(\Pggns\MidocoApi\System\StructType\GetPrintRemarkDestinationRequest $paramGetPrintRemarkDestinationRequest)
    {
        try {
            $this->setResult($resultGetPrintRemarkDestination = $this->getSoapClient()->__soapCall('getPrintRemarkDestination', [
                $paramGetPrintRemarkDestinationRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetPrintRemarkDestination;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAssignedRemarksDestination
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\System\StructType\GetAssignedRemarksDestinationRequest $paramGetAssignedRemarksDestinationRequest
     * @return \Pggns\MidocoApi\System\StructType\GetAssignedRemarksDestinationResponse|bool
     */
    public function getAssignedRemarksDestination(\Pggns\MidocoApi\System\StructType\GetAssignedRemarksDestinationRequest $paramGetAssignedRemarksDestinationRequest)
    {
        try {
            $this->setResult($resultGetAssignedRemarksDestination = $this->getSoapClient()->__soapCall('getAssignedRemarksDestination', [
                $paramGetAssignedRemarksDestinationRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAssignedRemarksDestination;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAvailablePrintTypesDestination
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\System\StructType\GetAvailablePrintTypesDestinationRequest $paramGetAvailablePrintTypesDestinationRequest
     * @return \Pggns\MidocoApi\System\StructType\GetAvailablePrintTypesDestinationResponse|bool
     */
    public function getAvailablePrintTypesDestination(\Pggns\MidocoApi\System\StructType\GetAvailablePrintTypesDestinationRequest $paramGetAvailablePrintTypesDestinationRequest)
    {
        try {
            $this->setResult($resultGetAvailablePrintTypesDestination = $this->getSoapClient()->__soapCall('getAvailablePrintTypesDestination', [
                $paramGetAvailablePrintTypesDestinationRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAvailablePrintTypesDestination;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMfLocal
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\System\StructType\GetMfLocalRequest $paramGetMfLocalRequest
     * @return \Pggns\MidocoApi\System\StructType\GetMfLocalResponse|bool
     */
    public function getMfLocal(\Pggns\MidocoApi\System\StructType\GetMfLocalRequest $paramGetMfLocalRequest)
    {
        try {
            $this->setResult($resultGetMfLocal = $this->getSoapClient()->__soapCall('getMfLocal', [
                $paramGetMfLocalRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMfLocal;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAvailablePrintQueues4Orgunit
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\System\StructType\GetAvailablePrintQueues4OrgunitRequest $paramGetAvailablePrintQueues4OrgunitRequest
     * @return \Pggns\MidocoApi\System\StructType\GetAvailablePrintQueues4OrgunitResponse|bool
     */
    public function getAvailablePrintQueues4Orgunit(\Pggns\MidocoApi\System\StructType\GetAvailablePrintQueues4OrgunitRequest $paramGetAvailablePrintQueues4OrgunitRequest)
    {
        try {
            $this->setResult($resultGetAvailablePrintQueues4Orgunit = $this->getSoapClient()->__soapCall('getAvailablePrintQueues4Orgunit', [
                $paramGetAvailablePrintQueues4OrgunitRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAvailablePrintQueues4Orgunit;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAvailablePrintQueues4User
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\System\StructType\GetAvailablePrintQueues4UserRequest $paramGetAvailablePrintQueues4UserRequest
     * @return \Pggns\MidocoApi\System\StructType\GetAvailablePrintQueues4UserResponse|bool
     */
    public function getAvailablePrintQueues4User(\Pggns\MidocoApi\System\StructType\GetAvailablePrintQueues4UserRequest $paramGetAvailablePrintQueues4UserRequest)
    {
        try {
            $this->setResult($resultGetAvailablePrintQueues4User = $this->getSoapClient()->__soapCall('getAvailablePrintQueues4User', [
                $paramGetAvailablePrintQueues4UserRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAvailablePrintQueues4User;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getUsers4PrintQueue
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\System\StructType\GetUsers4PrintQueueRequest $paramGetUsers4PrintQueueRequest
     * @return \Pggns\MidocoApi\System\StructType\GetUsers4PrintQueueResponse|bool
     */
    public function getUsers4PrintQueue(\Pggns\MidocoApi\System\StructType\GetUsers4PrintQueueRequest $paramGetUsers4PrintQueueRequest)
    {
        try {
            $this->setResult($resultGetUsers4PrintQueue = $this->getSoapClient()->__soapCall('getUsers4PrintQueue', [
                $paramGetUsers4PrintQueueRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetUsers4PrintQueue;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getOrgunits4PrintQueue
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\System\StructType\GetOrgunits4PrintQueueRequest $paramGetOrgunits4PrintQueueRequest
     * @return \Pggns\MidocoApi\System\StructType\GetOrgunits4PrintQueueResponse|bool
     */
    public function getOrgunits4PrintQueue(\Pggns\MidocoApi\System\StructType\GetOrgunits4PrintQueueRequest $paramGetOrgunits4PrintQueueRequest)
    {
        try {
            $this->setResult($resultGetOrgunits4PrintQueue = $this->getSoapClient()->__soapCall('getOrgunits4PrintQueue', [
                $paramGetOrgunits4PrintQueueRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetOrgunits4PrintQueue;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getPrintJobs4PrintQueue
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\System\StructType\GetPrintjobs4PrintQueueRequest $paramGetPrintjobs4PrintQueueRequest
     * @return \Pggns\MidocoApi\System\StructType\GetPrintJobs4PrintQueueResponse|bool
     */
    public function getPrintJobs4PrintQueue(\Pggns\MidocoApi\System\StructType\GetPrintjobs4PrintQueueRequest $paramGetPrintjobs4PrintQueueRequest)
    {
        try {
            $this->setResult($resultGetPrintJobs4PrintQueue = $this->getSoapClient()->__soapCall('getPrintJobs4PrintQueue', [
                $paramGetPrintjobs4PrintQueueRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetPrintJobs4PrintQueue;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getPrintQueue4User
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\System\StructType\GetPrintQueue4UserRequest $paramGetPrintQueue4UserRequest
     * @return \Pggns\MidocoApi\System\StructType\GetPrintQueue4UserResponse|bool
     */
    public function getPrintQueue4User(\Pggns\MidocoApi\System\StructType\GetPrintQueue4UserRequest $paramGetPrintQueue4UserRequest)
    {
        try {
            $this->setResult($resultGetPrintQueue4User = $this->getSoapClient()->__soapCall('getPrintQueue4User', [
                $paramGetPrintQueue4UserRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetPrintQueue4User;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getPrintQueue4Orgunit
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\System\StructType\GetPrintQueue4OrgunitRequest $paramGetPrintQueue4OrgunitRequest
     * @return \Pggns\MidocoApi\System\StructType\GetPrintQueue4OrgunitResponse|bool
     */
    public function getPrintQueue4Orgunit(\Pggns\MidocoApi\System\StructType\GetPrintQueue4OrgunitRequest $paramGetPrintQueue4OrgunitRequest)
    {
        try {
            $this->setResult($resultGetPrintQueue4Orgunit = $this->getSoapClient()->__soapCall('getPrintQueue4Orgunit', [
                $paramGetPrintQueue4OrgunitRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetPrintQueue4Orgunit;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMfClassName
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\System\StructType\GetMfClassNameRequest $paramGetMfClassNameRequest
     * @return \Pggns\MidocoApi\System\StructType\GetMfClassNameResponse|bool
     */
    public function getMfClassName(\Pggns\MidocoApi\System\StructType\GetMfClassNameRequest $paramGetMfClassNameRequest)
    {
        try {
            $this->setResult($resultGetMfClassName = $this->getSoapClient()->__soapCall('getMfClassName', [
                $paramGetMfClassNameRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMfClassName;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAttributeDefinition
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\System\StructType\GetMidocoAttributeDefinitionRequest $paramGetMidocoAttributeDefinitionRequest
     * @return \Pggns\MidocoApi\System\StructType\GetMidocoAttributeDefinitionResponse|bool
     */
    public function getAttributeDefinition(\Pggns\MidocoApi\System\StructType\GetMidocoAttributeDefinitionRequest $paramGetMidocoAttributeDefinitionRequest)
    {
        try {
            $this->setResult($resultGetAttributeDefinition = $this->getSoapClient()->__soapCall('getAttributeDefinition', [
                $paramGetMidocoAttributeDefinitionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAttributeDefinition;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getOrgunitForCrsAgency
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\System\StructType\GetOrgunitForCrsAgencyRequest $paramGetOrgunitForCrsAgencyRequest
     * @return \Pggns\MidocoApi\System\StructType\GetOrgunitForCrsAgencyResponse|bool
     */
    public function getOrgunitForCrsAgency(\Pggns\MidocoApi\System\StructType\GetOrgunitForCrsAgencyRequest $paramGetOrgunitForCrsAgencyRequest)
    {
        try {
            $this->setResult($resultGetOrgunitForCrsAgency = $this->getSoapClient()->__soapCall('getOrgunitForCrsAgency', [
                $paramGetOrgunitForCrsAgencyRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetOrgunitForCrsAgency;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMidocoCredentialsForUserSession
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\System\StructType\GetMidocoCredentialsForUserSessionRequest $paramGetMidocoCredentialsForUserSessionRequest
     * @return \Pggns\MidocoApi\System\StructType\GetMidocoCredentialsForUserSessionResponse|bool
     */
    public function getMidocoCredentialsForUserSession(\Pggns\MidocoApi\System\StructType\GetMidocoCredentialsForUserSessionRequest $paramGetMidocoCredentialsForUserSessionRequest)
    {
        try {
            $this->setResult($resultGetMidocoCredentialsForUserSession = $this->getSoapClient()->__soapCall('getMidocoCredentialsForUserSession', [
                $paramGetMidocoCredentialsForUserSessionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMidocoCredentialsForUserSession;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMidocoGUIAttributeDefinition
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\System\StructType\GetMidocoGuiAttributeDefinitionRequest $paramGetMidocoGuiAttributeDefinitionRequest
     * @return \Pggns\MidocoApi\System\StructType\GetMidocoGuiAttributeDefinitionResponse|bool
     */
    public function getMidocoGUIAttributeDefinition(\Pggns\MidocoApi\System\StructType\GetMidocoGuiAttributeDefinitionRequest $paramGetMidocoGuiAttributeDefinitionRequest)
    {
        try {
            $this->setResult($resultGetMidocoGUIAttributeDefinition = $this->getSoapClient()->__soapCall('getMidocoGUIAttributeDefinition', [
                $paramGetMidocoGuiAttributeDefinitionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMidocoGUIAttributeDefinition;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMidocoOrgUnitGUIAttribute
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\System\StructType\GetMidocoOrgUnitGuiAttributeRequest $paramGetMidocoOrgUnitGuiAttributeRequest
     * @return \Pggns\MidocoApi\System\StructType\GetMidocoOrgUnitGuiAttributeResponse|bool
     */
    public function getMidocoOrgUnitGUIAttribute(\Pggns\MidocoApi\System\StructType\GetMidocoOrgUnitGuiAttributeRequest $paramGetMidocoOrgUnitGuiAttributeRequest)
    {
        try {
            $this->setResult($resultGetMidocoOrgUnitGUIAttribute = $this->getSoapClient()->__soapCall('getMidocoOrgUnitGUIAttribute', [
                $paramGetMidocoOrgUnitGuiAttributeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMidocoOrgUnitGUIAttribute;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getPrintJob
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\System\StructType\GetPrintjobRequest $paramGetPrintjobRequest
     * @return \Pggns\MidocoApi\System\StructType\GetPrintjobResponse|bool
     */
    public function getPrintJob(\Pggns\MidocoApi\System\StructType\GetPrintjobRequest $paramGetPrintjobRequest)
    {
        try {
            $this->setResult($resultGetPrintJob = $this->getSoapClient()->__soapCall('getPrintJob', [
                $paramGetPrintjobRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetPrintJob;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getMidocoOrgTemplateText
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\System\StructType\GetMidocoOrgTemplateTextRequest $paramGetMidocoOrgTemplateTextRequest
     * @return \Pggns\MidocoApi\System\StructType\GetMidocoOrgTemplateTextResponse|bool
     */
    public function getMidocoOrgTemplateText(\Pggns\MidocoApi\System\StructType\GetMidocoOrgTemplateTextRequest $paramGetMidocoOrgTemplateTextRequest)
    {
        try {
            $this->setResult($resultGetMidocoOrgTemplateText = $this->getSoapClient()->__soapCall('getMidocoOrgTemplateText', [
                $paramGetMidocoOrgTemplateTextRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetMidocoOrgTemplateText;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getOrgTemplateTextFooter
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\System\StructType\GetOrgTemplateTextFooterRequest $paramGetOrgTemplateTextFooterRequest
     * @return \Pggns\MidocoApi\System\StructType\GetOrgTemplateTextFooterResponse|bool
     */
    public function getOrgTemplateTextFooter(\Pggns\MidocoApi\System\StructType\GetOrgTemplateTextFooterRequest $paramGetOrgTemplateTextFooterRequest)
    {
        try {
            $this->setResult($resultGetOrgTemplateTextFooter = $this->getSoapClient()->__soapCall('getOrgTemplateTextFooter', [
                $paramGetOrgTemplateTextFooterRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetOrgTemplateTextFooter;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getUnitName4UserSession
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\System\StructType\GetUnitName4UserSessionRequest $paramGetUnitName4UserSessionRequest
     * @return \Pggns\MidocoApi\System\StructType\GetUnitName4UserSessionResponse|bool
     */
    public function getUnitName4UserSession(\Pggns\MidocoApi\System\StructType\GetUnitName4UserSessionRequest $paramGetUnitName4UserSessionRequest)
    {
        try {
            $this->setResult($resultGetUnitName4UserSession = $this->getSoapClient()->__soapCall('getUnitName4UserSession', [
                $paramGetUnitName4UserSessionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetUnitName4UserSession;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getOrgUnitInfo
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\System\StructType\GetOrgUnitInfoRequest $paramGetOrgUnitInfoRequest
     * @return \Pggns\MidocoApi\System\StructType\GetOrgUnitInfoResponse|bool
     */
    public function getOrgUnitInfo(\Pggns\MidocoApi\System\StructType\GetOrgUnitInfoRequest $paramGetOrgUnitInfoRequest)
    {
        try {
            $this->setResult($resultGetOrgUnitInfo = $this->getSoapClient()->__soapCall('getOrgUnitInfo', [
                $paramGetOrgUnitInfoRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetOrgUnitInfo;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSessionStatus
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\System\StructType\GetSessionStatusRequest $paramGetSessionStatusRequest
     * @return \Pggns\MidocoApi\System\StructType\GetSessionStatusResponse|bool
     */
    public function getSessionStatus(\Pggns\MidocoApi\System\StructType\GetSessionStatusRequest $paramGetSessionStatusRequest)
    {
        try {
            $this->setResult($resultGetSessionStatus = $this->getSoapClient()->__soapCall('getSessionStatus', [
                $paramGetSessionStatusRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSessionStatus;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCrsExpedientForUserId
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\System\StructType\GetCrsExpedientForUserIdRequest $paramGetCrsExpedientForUserIdRequest
     * @return \Pggns\MidocoApi\System\StructType\GetCrsExpedientForUserIdResponse|bool
     */
    public function getCrsExpedientForUserId(\Pggns\MidocoApi\System\StructType\GetCrsExpedientForUserIdRequest $paramGetCrsExpedientForUserIdRequest)
    {
        try {
            $this->setResult($resultGetCrsExpedientForUserId = $this->getSoapClient()->__soapCall('getCrsExpedientForUserId', [
                $paramGetCrsExpedientForUserIdRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCrsExpedientForUserId;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAssignedSequenceRanges
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\System\StructType\GetAssignedSequenceRangesRequest $paramGetAssignedSequenceRangesRequest
     * @return \Pggns\MidocoApi\System\StructType\GetAssignedSequenceRangesResponse|bool
     */
    public function getAssignedSequenceRanges(\Pggns\MidocoApi\System\StructType\GetAssignedSequenceRangesRequest $paramGetAssignedSequenceRangesRequest)
    {
        try {
            $this->setResult($resultGetAssignedSequenceRanges = $this->getSoapClient()->__soapCall('getAssignedSequenceRanges', [
                $paramGetAssignedSequenceRangesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAssignedSequenceRanges;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getUserHistory
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\System\StructType\GetUserHistoryRequest $paramGetUserHistoryRequest
     * @return \Pggns\MidocoApi\System\StructType\GetUserHistoryResponse|bool
     */
    public function getUserHistory(\Pggns\MidocoApi\System\StructType\GetUserHistoryRequest $paramGetUserHistoryRequest)
    {
        try {
            $this->setResult($resultGetUserHistory = $this->getSoapClient()->__soapCall('getUserHistory', [
                $paramGetUserHistoryRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetUserHistory;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getTssClient
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\System\StructType\GetTssClientRequest $paramGetTssClientRequest
     * @return \Pggns\MidocoApi\System\StructType\GetTssClientResponse|bool
     */
    public function getTssClient(\Pggns\MidocoApi\System\StructType\GetTssClientRequest $paramGetTssClientRequest)
    {
        try {
            $this->setResult($resultGetTssClient = $this->getSoapClient()->__soapCall('getTssClient', [
                $paramGetTssClientRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetTssClient;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getTssClient4Unit
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\System\StructType\GetTssClient4UnitRequest $paramGetTssClient4UnitRequest
     * @return \Pggns\MidocoApi\System\StructType\GetTssClient4UnitResponse|bool
     */
    public function getTssClient4Unit(\Pggns\MidocoApi\System\StructType\GetTssClient4UnitRequest $paramGetTssClient4UnitRequest)
    {
        try {
            $this->setResult($resultGetTssClient4Unit = $this->getSoapClient()->__soapCall('getTssClient4Unit', [
                $paramGetTssClient4UnitRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetTssClient4Unit;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAllTssClients4Unit
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\System\StructType\GetAllTssClients4UnitRequest $paramGetAllTssClients4UnitRequest
     * @return \Pggns\MidocoApi\System\StructType\GetAllTssClients4UnitResponse|bool
     */
    public function getAllTssClients4Unit(\Pggns\MidocoApi\System\StructType\GetAllTssClients4UnitRequest $paramGetAllTssClients4UnitRequest)
    {
        try {
            $this->setResult($resultGetAllTssClients4Unit = $this->getSoapClient()->__soapCall('getAllTssClients4Unit', [
                $paramGetAllTssClients4UnitRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAllTssClients4Unit;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\System\StructType\GetAllowedRolesForCurrentUserResponse|\Pggns\MidocoApi\System\StructType\GetAllTssClients4UnitResponse|\Pggns\MidocoApi\System\StructType\GetApplicationsForCurrentRoleResponse|\Pggns\MidocoApi\System\StructType\GetAssignedRemarksDestinationResponse|\Pggns\MidocoApi\System\StructType\GetAssignedSequenceRangesResponse|\Pggns\MidocoApi\System\StructType\GetAvailablePrintQueues4OrgunitResponse|\Pggns\MidocoApi\System\StructType\GetAvailablePrintQueues4UserResponse|\Pggns\MidocoApi\System\StructType\GetAvailablePrintTypesDestinationResponse|\Pggns\MidocoApi\System\StructType\GetChildrenForOrgUnitResponse|\Pggns\MidocoApi\System\StructType\GetCrsExpedientForUserIdResponse|\Pggns\MidocoApi\System\StructType\GetInexsoUrlResponse|\Pggns\MidocoApi\System\StructType\GetMfClassNameResponse|\Pggns\MidocoApi\System\StructType\GetMfGroupResponse|\Pggns\MidocoApi\System\StructType\GetMfLocalResponse|\Pggns\MidocoApi\System\StructType\GetMfs4GroupResponse|\Pggns\MidocoApi\System\StructType\GetMidocoAttributeDefinitionResponse|\Pggns\MidocoApi\System\StructType\GetMidocoCredentialsForUserSessionResponse|\Pggns\MidocoApi\System\StructType\GetMidocoGuiAttributeDefinitionResponse|\Pggns\MidocoApi\System\StructType\GetMidocoOrgTemplateTextResponse|\Pggns\MidocoApi\System\StructType\GetMidocoOrgUnitGuiAttributeResponse|\Pggns\MidocoApi\System\StructType\GetOrgTemplateTextFooterResponse|\Pggns\MidocoApi\System\StructType\GetOrgunitForCrsAgencyResponse|\Pggns\MidocoApi\System\StructType\GetOrgUnitInfoResponse|\Pggns\MidocoApi\System\StructType\GetOrgunits4PrintQueueResponse|\Pggns\MidocoApi\System\StructType\GetOrgUnitSequenceResponse|\Pggns\MidocoApi\System\StructType\GetOrgUnitsForUserResponse|\Pggns\MidocoApi\System\StructType\GetPrintjobResponse|\Pggns\MidocoApi\System\StructType\GetPrintJobs4PrintQueueResponse|\Pggns\MidocoApi\System\StructType\GetPrintQueue4OrgunitResponse|\Pggns\MidocoApi\System\StructType\GetPrintQueue4UserResponse|\Pggns\MidocoApi\System\StructType\GetPrintRemarkDestinationResponse|\Pggns\MidocoApi\System\StructType\GetSessionStatusResponse|\Pggns\MidocoApi\System\StructType\GetTssClient4UnitResponse|\Pggns\MidocoApi\System\StructType\GetTssClientResponse|\Pggns\MidocoApi\System\StructType\GetUnitName4UserSessionResponse|\Pggns\MidocoApi\System\StructType\GetUserHistoryResponse|\Pggns\MidocoApi\System\StructType\GetUsers4PrintQueueResponse|\Pggns\MidocoApi\System\StructType\OrgunitDTO|\Pggns\MidocoApi\System\StructType\UserDTO
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
