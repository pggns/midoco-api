<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Execute ServiceType
 * @subpackage Services
 */
class Execute extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\OrderSD\ServiceType\Execute
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named executeBillingQuery
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\ExecuteBillingQueryRequest $paramExecuteBillingQueryRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\ExecuteBillingQueryResponse|bool
     */
    public function executeBillingQuery(\Pggns\MidocoApi\OrderSD\StructType\ExecuteBillingQueryRequest $paramExecuteBillingQueryRequest)
    {
        try {
            $this->setResult($resultExecuteBillingQuery = $this->getSoapClient()->__soapCall('executeBillingQuery', [
                $paramExecuteBillingQueryRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultExecuteBillingQuery;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named executeBookingsQuery
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\ExecuteBookingsQueryRequest $paramExecuteBookingsQueryRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\ExecuteBookingsQueryResponse|bool
     */
    public function executeBookingsQuery(\Pggns\MidocoApi\OrderSD\StructType\ExecuteBookingsQueryRequest $paramExecuteBookingsQueryRequest)
    {
        try {
            $this->setResult($resultExecuteBookingsQuery = $this->getSoapClient()->__soapCall('executeBookingsQuery', [
                $paramExecuteBookingsQueryRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultExecuteBookingsQuery;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named executeCustomerQuery
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\ExecuteCustomerQueryRequest $paramExecuteCustomerQueryRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\ExecuteCustomerQueryResponse|bool
     */
    public function executeCustomerQuery(\Pggns\MidocoApi\OrderSD\StructType\ExecuteCustomerQueryRequest $paramExecuteCustomerQueryRequest)
    {
        try {
            $this->setResult($resultExecuteCustomerQuery = $this->getSoapClient()->__soapCall('executeCustomerQuery', [
                $paramExecuteCustomerQueryRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultExecuteCustomerQuery;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named executeUserQuery
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\ExecuteUserQueryRequest $paramExecuteUserQueryRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\ExecuteUserQueryResponse|bool
     */
    public function executeUserQuery(\Pggns\MidocoApi\OrderSD\StructType\ExecuteUserQueryRequest $paramExecuteUserQueryRequest)
    {
        try {
            $this->setResult($resultExecuteUserQuery = $this->getSoapClient()->__soapCall('executeUserQuery', [
                $paramExecuteUserQueryRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultExecuteUserQuery;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named executeOrgunitQuery
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\ExecuteOrgunitQueryRequest $paramExecuteOrgunitQueryRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\ExecuteOrgunitQueryResponse|bool
     */
    public function executeOrgunitQuery(\Pggns\MidocoApi\OrderSD\StructType\ExecuteOrgunitQueryRequest $paramExecuteOrgunitQueryRequest)
    {
        try {
            $this->setResult($resultExecuteOrgunitQuery = $this->getSoapClient()->__soapCall('executeOrgunitQuery', [
                $paramExecuteOrgunitQueryRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultExecuteOrgunitQuery;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\OrderSD\StructType\ExecuteBillingQueryResponse|\Pggns\MidocoApi\OrderSD\StructType\ExecuteBookingsQueryResponse|\Pggns\MidocoApi\OrderSD\StructType\ExecuteCustomerQueryResponse|\Pggns\MidocoApi\OrderSD\StructType\ExecuteOrgunitQueryResponse|\Pggns\MidocoApi\OrderSD\StructType\ExecuteUserQueryResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
