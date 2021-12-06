<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Assign ServiceType
 * @subpackage Services
 */
class Assign extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Api\Crm\ServiceType\Assign
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named assignCustomer
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\AssignCustomerRequest $paramAssignCustomerRequest
     * @return \Pggns\MidocoApi\Api\Crm\StructType\AssignCustomerResponse|bool
     */
    public function assignCustomer(\Pggns\MidocoApi\Api\Crm\StructType\AssignCustomerRequest $paramAssignCustomerRequest)
    {
        try {
            $this->setResult($resultAssignCustomer = $this->getSoapClient()->__soapCall('assignCustomer', [
                $paramAssignCustomerRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultAssignCustomer;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named assignDebitorToOrgunit
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\AssignDebitorToOrgunitRequest $paramAssignDebitorToOrgunitRequest
     * @return \Pggns\MidocoApi\Api\Crm\StructType\AssignDebitorToOrgunitResponse|bool
     */
    public function assignDebitorToOrgunit(\Pggns\MidocoApi\Api\Crm\StructType\AssignDebitorToOrgunitRequest $paramAssignDebitorToOrgunitRequest)
    {
        try {
            $this->setResult($resultAssignDebitorToOrgunit = $this->getSoapClient()->__soapCall('assignDebitorToOrgunit', [
                $paramAssignDebitorToOrgunitRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultAssignDebitorToOrgunit;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Api\Crm\StructType\AssignCustomerResponse|\Pggns\MidocoApi\Api\Crm\StructType\AssignDebitorToOrgunitResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
