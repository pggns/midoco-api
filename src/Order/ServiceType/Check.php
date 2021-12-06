<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\ServiceType;

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
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Api\Order\ServiceType\Check
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named checkAccessTravelDataForCustomer
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\CheckAccess_TravelDataForCustomerRequest $paramCheckAccess_TravelDataForCustomerRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\CheckAccess_TravelDataForCustomerResponse|bool
     */
    public function checkAccessTravelDataForCustomer(\Pggns\MidocoApi\Api\Order\StructType\CheckAccess_TravelDataForCustomerRequest $paramCheckAccess_TravelDataForCustomerRequest)
    {
        try {
            $this->setResult($resultCheckAccessTravelDataForCustomer = $this->getSoapClient()->__soapCall('checkAccessTravelDataForCustomer', [
                $paramCheckAccess_TravelDataForCustomerRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultCheckAccessTravelDataForCustomer;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named checkIfPaidBillingDoc
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\CheckIfPaidBillingDocRequest $paramCheckIfPaidBillingDocRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\CheckIfPaidBillingDocResponse|bool
     */
    public function checkIfPaidBillingDoc(\Pggns\MidocoApi\Api\Order\StructType\CheckIfPaidBillingDocRequest $paramCheckIfPaidBillingDocRequest)
    {
        try {
            $this->setResult($resultCheckIfPaidBillingDoc = $this->getSoapClient()->__soapCall('checkIfPaidBillingDoc', [
                $paramCheckIfPaidBillingDocRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultCheckIfPaidBillingDoc;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named checkIfPaidOrder
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\CheckIfPaidOrderRequest $paramCheckIfPaidOrderRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\CheckIfPaidOrderResponse|bool
     */
    public function checkIfPaidOrder(\Pggns\MidocoApi\Api\Order\StructType\CheckIfPaidOrderRequest $paramCheckIfPaidOrderRequest)
    {
        try {
            $this->setResult($resultCheckIfPaidOrder = $this->getSoapClient()->__soapCall('checkIfPaidOrder', [
                $paramCheckIfPaidOrderRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultCheckIfPaidOrder;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * checkSupplierAgencySettlementBooking
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\CheckSupplierAgencySettlementBookingRequest $paramCheckSupplierAgencySettlementBookingRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\CheckSupplierAgencySettlementBookingResponse|bool
     */
    public function checkSupplierAgencySettlementBooking(\Pggns\MidocoApi\Api\Order\StructType\CheckSupplierAgencySettlementBookingRequest $paramCheckSupplierAgencySettlementBookingRequest)
    {
        try {
            $this->setResult($resultCheckSupplierAgencySettlementBooking = $this->getSoapClient()->__soapCall('checkSupplierAgencySettlementBooking', [
                $paramCheckSupplierAgencySettlementBookingRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultCheckSupplierAgencySettlementBooking;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named checkCreditLimit
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\CheckCreditLimitRequest $paramCheckCreditLimitRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\CheckCreditLimitResponse|bool
     */
    public function checkCreditLimit(\Pggns\MidocoApi\Api\Order\StructType\CheckCreditLimitRequest $paramCheckCreditLimitRequest)
    {
        try {
            $this->setResult($resultCheckCreditLimit = $this->getSoapClient()->__soapCall('checkCreditLimit', [
                $paramCheckCreditLimitRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultCheckCreditLimit;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named checkCreditLimitByOrder
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\CheckCreditLimitByOrderRequest $paramCheckCreditLimitByOrderRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\CheckCreditLimitByOrderResponse|bool
     */
    public function checkCreditLimitByOrder(\Pggns\MidocoApi\Api\Order\StructType\CheckCreditLimitByOrderRequest $paramCheckCreditLimitByOrderRequest)
    {
        try {
            $this->setResult($resultCheckCreditLimitByOrder = $this->getSoapClient()->__soapCall('checkCreditLimitByOrder', [
                $paramCheckCreditLimitByOrderRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultCheckCreditLimitByOrder;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named checkLockedUserByMail
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\CheckLockedUserByMailRequest $paramCheckLockedUserByMailRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\CheckLockedUserByMailResponse|bool
     */
    public function checkLockedUserByMail(\Pggns\MidocoApi\Api\Order\StructType\CheckLockedUserByMailRequest $paramCheckLockedUserByMailRequest)
    {
        try {
            $this->setResult($resultCheckLockedUserByMail = $this->getSoapClient()->__soapCall('checkLockedUserByMail', [
                $paramCheckLockedUserByMailRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultCheckLockedUserByMail;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * checkIfMultipleMdcSettlementBilling
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\CheckIfMultipleMdcSettlementBillingRequest $paramCheckIfMultipleMdcSettlementBillingRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\CheckIfMultipleMdcSettlementBillingResponse|bool
     */
    public function checkIfMultipleMdcSettlementBilling(\Pggns\MidocoApi\Api\Order\StructType\CheckIfMultipleMdcSettlementBillingRequest $paramCheckIfMultipleMdcSettlementBillingRequest)
    {
        try {
            $this->setResult($resultCheckIfMultipleMdcSettlementBilling = $this->getSoapClient()->__soapCall('checkIfMultipleMdcSettlementBilling', [
                $paramCheckIfMultipleMdcSettlementBillingRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultCheckIfMultipleMdcSettlementBilling;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named checkExistingAgencySettlementLevel
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\CheckAgencySettlementLevelRequest $paramCheckAgencySettlementLevelRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\CheckAgencySettlementLevelResponse|bool
     */
    public function checkExistingAgencySettlementLevel(\Pggns\MidocoApi\Api\Order\StructType\CheckAgencySettlementLevelRequest $paramCheckAgencySettlementLevelRequest)
    {
        try {
            $this->setResult($resultCheckExistingAgencySettlementLevel = $this->getSoapClient()->__soapCall('checkExistingAgencySettlementLevel', [
                $paramCheckAgencySettlementLevelRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultCheckExistingAgencySettlementLevel;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * checkPaymentProviderSettlementBooking
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\CheckPaymentProviderSettlementBookingRequest $paramCheckPaymentProviderSettlementBookingRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\CheckPaymentProviderSettlementBookingResponse|bool
     */
    public function checkPaymentProviderSettlementBooking(\Pggns\MidocoApi\Api\Order\StructType\CheckPaymentProviderSettlementBookingRequest $paramCheckPaymentProviderSettlementBookingRequest)
    {
        try {
            $this->setResult($resultCheckPaymentProviderSettlementBooking = $this->getSoapClient()->__soapCall('checkPaymentProviderSettlementBooking', [
                $paramCheckPaymentProviderSettlementBookingRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultCheckPaymentProviderSettlementBooking;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named checkSupplierAgencySettlement
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\CheckSupplierAgencySettlementRequest $paramCheckSupplierAgencySettlementRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\CheckSupplierAgencySettlementResponse|bool
     */
    public function checkSupplierAgencySettlement(\Pggns\MidocoApi\Api\Order\StructType\CheckSupplierAgencySettlementRequest $paramCheckSupplierAgencySettlementRequest)
    {
        try {
            $this->setResult($resultCheckSupplierAgencySettlement = $this->getSoapClient()->__soapCall('checkSupplierAgencySettlement', [
                $paramCheckSupplierAgencySettlementRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultCheckSupplierAgencySettlement;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Api\Order\StructType\CheckAccess_TravelDataForCustomerResponse|\Pggns\MidocoApi\Api\Order\StructType\CheckAgencySettlementLevelResponse|\Pggns\MidocoApi\Api\Order\StructType\CheckCreditLimitByOrderResponse|\Pggns\MidocoApi\Api\Order\StructType\CheckCreditLimitResponse|\Pggns\MidocoApi\Api\Order\StructType\CheckIfMultipleMdcSettlementBillingResponse|\Pggns\MidocoApi\Api\Order\StructType\CheckIfPaidBillingDocResponse|\Pggns\MidocoApi\Api\Order\StructType\CheckIfPaidOrderResponse|\Pggns\MidocoApi\Api\Order\StructType\CheckLockedUserByMailResponse|\Pggns\MidocoApi\Api\Order\StructType\CheckPaymentProviderSettlementBookingResponse|\Pggns\MidocoApi\Api\Order\StructType\CheckSupplierAgencySettlementBookingResponse|\Pggns\MidocoApi\Api\Order\StructType\CheckSupplierAgencySettlementResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
