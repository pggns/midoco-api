<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Booking\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Announce ServiceType
 * @subpackage Services
 */
class Announce extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Booking\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Booking\ServiceType\Announce
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Booking\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named announceBookingMessage
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Booking\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Booking\StructType\AnnounceBookingMessageRequest $paramAnnounceBookingMessageRequest
     * @return \Pggns\MidocoApi\Booking\StructType\AnnounceBookingMessageResponse|bool
     */
    public function announceBookingMessage(\Pggns\MidocoApi\Booking\StructType\AnnounceBookingMessageRequest $paramAnnounceBookingMessageRequest)
    {
        try {
            $this->setResult($resultAnnounceBookingMessage = $this->getSoapClient()->__soapCall('announceBookingMessage', [
                $paramAnnounceBookingMessageRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultAnnounceBookingMessage;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named announceBookingMessageNorm
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Booking\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Booking\StructType\AnnounceBookingMessageNormRequest $paramAnnounceBookingMessageNormRequest
     * @return \Pggns\MidocoApi\Booking\StructType\AnnounceBookingMessageNormResponse|bool
     */
    public function announceBookingMessageNorm(\Pggns\MidocoApi\Booking\StructType\AnnounceBookingMessageNormRequest $paramAnnounceBookingMessageNormRequest)
    {
        try {
            $this->setResult($resultAnnounceBookingMessageNorm = $this->getSoapClient()->__soapCall('announceBookingMessageNorm', [
                $paramAnnounceBookingMessageNormRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultAnnounceBookingMessageNorm;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named announceAgencySaleMessage
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Booking\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Booking\StructType\AnnounceAgencySaleMessageRequest $paramAnnounceAgencySaleMessageRequest
     * @return \Pggns\MidocoApi\Booking\StructType\AnnounceAgencySaleMessageResponse|bool
     */
    public function announceAgencySaleMessage(\Pggns\MidocoApi\Booking\StructType\AnnounceAgencySaleMessageRequest $paramAnnounceAgencySaleMessageRequest)
    {
        try {
            $this->setResult($resultAnnounceAgencySaleMessage = $this->getSoapClient()->__soapCall('announceAgencySaleMessage', [
                $paramAnnounceAgencySaleMessageRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultAnnounceAgencySaleMessage;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named announceExternalPayment
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Booking\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Booking\StructType\AnnounceExternalPaymentRequest $paramAnnounceExternalPaymentRequest
     * @return \Pggns\MidocoApi\Booking\StructType\AnnounceExternalPaymentResponse|bool
     */
    public function announceExternalPayment(\Pggns\MidocoApi\Booking\StructType\AnnounceExternalPaymentRequest $paramAnnounceExternalPaymentRequest)
    {
        try {
            $this->setResult($resultAnnounceExternalPayment = $this->getSoapClient()->__soapCall('announceExternalPayment', [
                $paramAnnounceExternalPaymentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultAnnounceExternalPayment;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Booking\StructType\AnnounceAgencySaleMessageResponse|\Pggns\MidocoApi\Booking\StructType\AnnounceBookingMessageNormResponse|\Pggns\MidocoApi\Booking\StructType\AnnounceBookingMessageResponse|\Pggns\MidocoApi\Booking\StructType\AnnounceExternalPaymentResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
