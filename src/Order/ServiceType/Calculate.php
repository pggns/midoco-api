<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Calculate ServiceType
 * @subpackage Services
 */
class Calculate extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Api\Order\ServiceType\Calculate
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named calculateBilling
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\CalculateBillingRequest $paramCalculateBillingRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\CalculateBillingResponse|bool
     */
    public function calculateBilling(\Pggns\MidocoApi\Api\Order\StructType\CalculateBillingRequest $paramCalculateBillingRequest)
    {
        try {
            $this->setResult($resultCalculateBilling = $this->getSoapClient()->__soapCall('calculateBilling', [
                $paramCalculateBillingRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultCalculateBilling;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named calculateEntryPeriodSums
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\CalculateEntryPeriodSumsRequest $paramCalculateEntryPeriodSumsRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\CalculateEntryPeriodSumsResponse|bool
     */
    public function calculateEntryPeriodSums(\Pggns\MidocoApi\Api\Order\StructType\CalculateEntryPeriodSumsRequest $paramCalculateEntryPeriodSumsRequest)
    {
        try {
            $this->setResult($resultCalculateEntryPeriodSums = $this->getSoapClient()->__soapCall('calculateEntryPeriodSums', [
                $paramCalculateEntryPeriodSumsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultCalculateEntryPeriodSums;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named calculateSellItemPricing
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\CalculateSellItemPricingRequest $paramCalculateSellItemPricingRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\CalculateSellItemPricingResponse|bool
     */
    public function calculateSellItemPricing(\Pggns\MidocoApi\Api\Order\StructType\CalculateSellItemPricingRequest $paramCalculateSellItemPricingRequest)
    {
        try {
            $this->setResult($resultCalculateSellItemPricing = $this->getSoapClient()->__soapCall('calculateSellItemPricing', [
                $paramCalculateSellItemPricingRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultCalculateSellItemPricing;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named calculateStatistics
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\CalculateStatisticsRequest $paramCalculateStatisticsRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\CalculateStatisticsResponse|bool
     */
    public function calculateStatistics(\Pggns\MidocoApi\Api\Order\StructType\CalculateStatisticsRequest $paramCalculateStatisticsRequest)
    {
        try {
            $this->setResult($resultCalculateStatistics = $this->getSoapClient()->__soapCall('calculateStatistics', [
                $paramCalculateStatisticsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultCalculateStatistics;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named calculateSupplierCommission
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\CalculateSupplierCommissionRequest $paramCalculateSupplierCommissionRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\CalculateSupplierCommissionResponse|bool
     */
    public function calculateSupplierCommission(\Pggns\MidocoApi\Api\Order\StructType\CalculateSupplierCommissionRequest $paramCalculateSupplierCommissionRequest)
    {
        try {
            $this->setResult($resultCalculateSupplierCommission = $this->getSoapClient()->__soapCall('calculateSupplierCommission', [
                $paramCalculateSupplierCommissionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultCalculateSupplierCommission;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named calculateRetentionPeriod4Order
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\CalculateRetentionPeriod4OrderRequest $paramCalculateRetentionPeriod4OrderRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\CalculateRetentionPeriod4OrderResponse|bool
     */
    public function calculateRetentionPeriod4Order(\Pggns\MidocoApi\Api\Order\StructType\CalculateRetentionPeriod4OrderRequest $paramCalculateRetentionPeriod4OrderRequest)
    {
        try {
            $this->setResult($resultCalculateRetentionPeriod4Order = $this->getSoapClient()->__soapCall('calculateRetentionPeriod4Order', [
                $paramCalculateRetentionPeriod4OrderRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultCalculateRetentionPeriod4Order;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Api\Order\StructType\CalculateBillingResponse|\Pggns\MidocoApi\Api\Order\StructType\CalculateEntryPeriodSumsResponse|\Pggns\MidocoApi\Api\Order\StructType\CalculateRetentionPeriod4OrderResponse|\Pggns\MidocoApi\Api\Order\StructType\CalculateSellItemPricingResponse|\Pggns\MidocoApi\Api\Order\StructType\CalculateStatisticsResponse|\Pggns\MidocoApi\Api\Order\StructType\CalculateSupplierCommissionResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
