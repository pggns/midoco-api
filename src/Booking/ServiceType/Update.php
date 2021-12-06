<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Booking\ServiceType;

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
     * @param \Pggns\MidocoApi\Booking\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Booking\ServiceType\Update
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Booking\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named updateBookingStatus
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Booking\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Booking\StructType\UpdateBookingStatusRequest $paramUpdateBookingStatusRequest
     * @return \Pggns\MidocoApi\Booking\StructType\UpdateBookingStatusResponse|bool
     */
    public function updateBookingStatus(\Pggns\MidocoApi\Booking\StructType\UpdateBookingStatusRequest $paramUpdateBookingStatusRequest)
    {
        try {
            $this->setResult($resultUpdateBookingStatus = $this->getSoapClient()->__soapCall('updateBookingStatus', [
                $paramUpdateBookingStatusRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateBookingStatus;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named updateOrderPaymentInfo
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Booking\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Booking\StructType\UpdateOrderPaymentInfoRequest $paramUpdateOrderPaymentInfoRequest
     * @return \Pggns\MidocoApi\Booking\StructType\UpdateOrderPaymentInfoResponse|bool
     */
    public function updateOrderPaymentInfo(\Pggns\MidocoApi\Booking\StructType\UpdateOrderPaymentInfoRequest $paramUpdateOrderPaymentInfoRequest)
    {
        try {
            $this->setResult($resultUpdateOrderPaymentInfo = $this->getSoapClient()->__soapCall('updateOrderPaymentInfo', [
                $paramUpdateOrderPaymentInfoRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultUpdateOrderPaymentInfo;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Booking\StructType\UpdateBookingStatusResponse|\Pggns\MidocoApi\Booking\StructType\UpdateOrderPaymentInfoResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
