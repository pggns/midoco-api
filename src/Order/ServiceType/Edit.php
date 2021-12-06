<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Edit ServiceType
 * @subpackage Services
 */
class Edit extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Api\Order\ServiceType\Edit
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named editEntry
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\EditEntryRequest $paramEditEntryRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\EditEntryResponse|bool
     */
    public function editEntry(\Pggns\MidocoApi\Api\Order\StructType\EditEntryRequest $paramEditEntryRequest)
    {
        try {
            $this->setResult($resultEditEntry = $this->getSoapClient()->__soapCall('editEntry', [
                $paramEditEntryRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultEditEntry;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named editTravelNoMargin
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\EditTravelNoMarginRequest $paramEditTravelNoMarginRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\EditTravelNoMarginResponse|bool
     */
    public function editTravelNoMargin(\Pggns\MidocoApi\Api\Order\StructType\EditTravelNoMarginRequest $paramEditTravelNoMarginRequest)
    {
        try {
            $this->setResult($resultEditTravelNoMargin = $this->getSoapClient()->__soapCall('editTravelNoMargin', [
                $paramEditTravelNoMarginRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultEditTravelNoMargin;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Api\Order\StructType\EditEntryResponse|\Pggns\MidocoApi\Api\Order\StructType\EditTravelNoMarginResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
