<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderglobalSD\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Delete ServiceType
 * @subpackage Services
 */
class Delete extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\OrderglobalSD\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Pggns\MidocoApi\OrderglobalSD\ServiceType\Delete
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\OrderglobalSD\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named deleteServiceStatus
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderglobalSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderglobalSD\StructType\DeleteServiceStatusRequest $paramDeleteServiceStatusRequest
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\DeleteServiceStatusResponse|bool
     */
    public function deleteServiceStatus(\Pggns\MidocoApi\OrderglobalSD\StructType\DeleteServiceStatusRequest $paramDeleteServiceStatusRequest)
    {
        try {
            $this->setResult($resultDeleteServiceStatus = $this->getSoapClient()->__soapCall('deleteServiceStatus', [
                $paramDeleteServiceStatusRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteServiceStatus;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteCurrency
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderglobalSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderglobalSD\StructType\DeleteCurrencyRequest $paramDeleteCurrencyRequest
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\DeleteCurrencyResponse|bool
     */
    public function deleteCurrency(\Pggns\MidocoApi\OrderglobalSD\StructType\DeleteCurrencyRequest $paramDeleteCurrencyRequest)
    {
        try {
            $this->setResult($resultDeleteCurrency = $this->getSoapClient()->__soapCall('deleteCurrency', [
                $paramDeleteCurrencyRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteCurrency;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteDbiUpdate
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderglobalSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderglobalSD\StructType\DeleteDbiUpdateRequest $paramDeleteDbiUpdateRequest
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\DeleteDbiUpdateResponse|bool
     */
    public function deleteDbiUpdate(\Pggns\MidocoApi\OrderglobalSD\StructType\DeleteDbiUpdateRequest $paramDeleteDbiUpdateRequest)
    {
        try {
            $this->setResult($resultDeleteDbiUpdate = $this->getSoapClient()->__soapCall('deleteDbiUpdate', [
                $paramDeleteDbiUpdateRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteDbiUpdate;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named deleteDbiDefs
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderglobalSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderglobalSD\StructType\DeleteDbiDefsRequest $paramDeleteDbiDefsRequest
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\DeleteDbiDefsResponse|bool
     */
    public function deleteDbiDefs(\Pggns\MidocoApi\OrderglobalSD\StructType\DeleteDbiDefsRequest $paramDeleteDbiDefsRequest)
    {
        try {
            $this->setResult($resultDeleteDbiDefs = $this->getSoapClient()->__soapCall('deleteDbiDefs', [
                $paramDeleteDbiDefsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteDbiDefs;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\DeleteCurrencyResponse|\Pggns\MidocoApi\OrderglobalSD\StructType\DeleteDbiDefsResponse|\Pggns\MidocoApi\OrderglobalSD\StructType\DeleteDbiUpdateResponse|\Pggns\MidocoApi\OrderglobalSD\StructType\DeleteServiceStatusResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
