<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Sales ServiceType
 * @subpackage Services
 */
class Sales extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Orderlists\ServiceType\Sales
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Orderlists\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named salesListBySupplier
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Orderlists\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Orderlists\StructType\SalesListBySupplierRequest $paramSalesListBySupplierRequest
     * @return \Pggns\MidocoApi\Orderlists\StructType\SalesListBySupplierResponse|bool
     */
    public function salesListBySupplier(\Pggns\MidocoApi\Orderlists\StructType\SalesListBySupplierRequest $paramSalesListBySupplierRequest)
    {
        try {
            $this->setResult($resultSalesListBySupplier = $this->getSoapClient()->__soapCall('salesListBySupplier', [
                $paramSalesListBySupplierRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSalesListBySupplier;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named salesListBySupplierAndMonth
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Orderlists\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Orderlists\StructType\SalesListBySupplierAndMonthRequest $paramSalesListBySupplierAndMonthRequest
     * @return \Pggns\MidocoApi\Orderlists\StructType\SalesListBySupplierAndMonthResponse|bool
     */
    public function salesListBySupplierAndMonth(\Pggns\MidocoApi\Orderlists\StructType\SalesListBySupplierAndMonthRequest $paramSalesListBySupplierAndMonthRequest)
    {
        try {
            $this->setResult($resultSalesListBySupplierAndMonth = $this->getSoapClient()->__soapCall('salesListBySupplierAndMonth', [
                $paramSalesListBySupplierAndMonthRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSalesListBySupplierAndMonth;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named salesListByProductType
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Orderlists\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Orderlists\StructType\SalesListByProductTypeRequest $paramSalesListByProductTypeRequest
     * @return \Pggns\MidocoApi\Orderlists\StructType\SalesListByProductTypeResponse|bool
     */
    public function salesListByProductType(\Pggns\MidocoApi\Orderlists\StructType\SalesListByProductTypeRequest $paramSalesListByProductTypeRequest)
    {
        try {
            $this->setResult($resultSalesListByProductType = $this->getSoapClient()->__soapCall('salesListByProductType', [
                $paramSalesListByProductTypeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSalesListByProductType;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named salesListBySupplierGroup
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Orderlists\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Orderlists\StructType\SalesListBySupplierGroupRequest $paramSalesListBySupplierGroupRequest
     * @return \Pggns\MidocoApi\Orderlists\StructType\SalesListBySupplierGroupResponse|bool
     */
    public function salesListBySupplierGroup(\Pggns\MidocoApi\Orderlists\StructType\SalesListBySupplierGroupRequest $paramSalesListBySupplierGroupRequest)
    {
        try {
            $this->setResult($resultSalesListBySupplierGroup = $this->getSoapClient()->__soapCall('salesListBySupplierGroup', [
                $paramSalesListBySupplierGroupRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSalesListBySupplierGroup;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named salesListByEmployee
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Orderlists\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Orderlists\StructType\SalesListByEmployeeRequest $paramSalesListByEmployeeRequest
     * @return \Pggns\MidocoApi\Orderlists\StructType\SalesListByEmployeeResponse|bool
     */
    public function salesListByEmployee(\Pggns\MidocoApi\Orderlists\StructType\SalesListByEmployeeRequest $paramSalesListByEmployeeRequest)
    {
        try {
            $this->setResult($resultSalesListByEmployee = $this->getSoapClient()->__soapCall('salesListByEmployee', [
                $paramSalesListByEmployeeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSalesListByEmployee;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named salesListByAgency
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Orderlists\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Orderlists\StructType\SalesListByAgencyRequest $paramSalesListByAgencyRequest
     * @return \Pggns\MidocoApi\Orderlists\StructType\SalesListByAgencyResponse|bool
     */
    public function salesListByAgency(\Pggns\MidocoApi\Orderlists\StructType\SalesListByAgencyRequest $paramSalesListByAgencyRequest)
    {
        try {
            $this->setResult($resultSalesListByAgency = $this->getSoapClient()->__soapCall('salesListByAgency', [
                $paramSalesListByAgencyRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSalesListByAgency;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named salesListByPaymentType
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Orderlists\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Orderlists\StructType\SalesListByPaymentTypeRequest $paramSalesListByPaymentTypeRequest
     * @return \Pggns\MidocoApi\Orderlists\StructType\SalesListByPaymentTypeResponse|bool
     */
    public function salesListByPaymentType(\Pggns\MidocoApi\Orderlists\StructType\SalesListByPaymentTypeRequest $paramSalesListByPaymentTypeRequest)
    {
        try {
            $this->setResult($resultSalesListByPaymentType = $this->getSoapClient()->__soapCall('salesListByPaymentType', [
                $paramSalesListByPaymentTypeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSalesListByPaymentType;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Orderlists\StructType\SalesListByAgencyResponse|\Pggns\MidocoApi\Orderlists\StructType\SalesListByEmployeeResponse|\Pggns\MidocoApi\Orderlists\StructType\SalesListByPaymentTypeResponse|\Pggns\MidocoApi\Orderlists\StructType\SalesListByProductTypeResponse|\Pggns\MidocoApi\Orderlists\StructType\SalesListBySupplierAndMonthResponse|\Pggns\MidocoApi\Orderlists\StructType\SalesListBySupplierGroupResponse|\Pggns\MidocoApi\Orderlists\StructType\SalesListBySupplierResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
