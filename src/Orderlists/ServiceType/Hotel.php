<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Hotel ServiceType
 * @subpackage Services
 */
class Hotel extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Api\Orderlists\ServiceType\Hotel
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named hotelList
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\HotelListRequest $paramHotelListRequest
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\HotelListResponse|bool
     */
    public function hotelList(\Pggns\MidocoApi\Api\Orderlists\StructType\HotelListRequest $paramHotelListRequest)
    {
        try {
            $this->setResult($resultHotelList = $this->getSoapClient()->__soapCall('hotelList', [
                $paramHotelListRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultHotelList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\HotelListResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
