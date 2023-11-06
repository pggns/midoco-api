<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderglobalSD\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Save ServiceType
 * @subpackage Services
 */
class Save extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\OrderglobalSD\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Pggns\MidocoApi\OrderglobalSD\ServiceType\Save
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\OrderglobalSD\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named saveServiceStatus
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderglobalSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderglobalSD\StructType\SaveServiceStatusRequest $paramSaveServiceStatusRequest
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\SaveServiceStatusResponse|bool
     */
    public function saveServiceStatus(\Pggns\MidocoApi\OrderglobalSD\StructType\SaveServiceStatusRequest $paramSaveServiceStatusRequest)
    {
        try {
            $this->setResult($resultSaveServiceStatus = $this->getSoapClient()->__soapCall('saveServiceStatus', [
                $paramSaveServiceStatusRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveServiceStatus;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveCurrency
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderglobalSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderglobalSD\StructType\SaveCurrencyRequest $paramSaveCurrencyRequest
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\SaveCurrencyResponse|bool
     */
    public function saveCurrency(\Pggns\MidocoApi\OrderglobalSD\StructType\SaveCurrencyRequest $paramSaveCurrencyRequest)
    {
        try {
            $this->setResult($resultSaveCurrency = $this->getSoapClient()->__soapCall('saveCurrency', [
                $paramSaveCurrencyRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveCurrency;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveDbiUpdate
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderglobalSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderglobalSD\StructType\SaveDbiUpdateRequest $paramSaveDbiUpdateRequest
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\SaveDbiUpdateResponse|bool
     */
    public function saveDbiUpdate(\Pggns\MidocoApi\OrderglobalSD\StructType\SaveDbiUpdateRequest $paramSaveDbiUpdateRequest)
    {
        try {
            $this->setResult($resultSaveDbiUpdate = $this->getSoapClient()->__soapCall('saveDbiUpdate', [
                $paramSaveDbiUpdateRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveDbiUpdate;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named saveDbiDefs
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderglobalSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderglobalSD\StructType\SaveDbiDefsRequest $paramSaveDbiDefsRequest
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\SaveDbiDefsResponse|bool
     */
    public function saveDbiDefs(\Pggns\MidocoApi\OrderglobalSD\StructType\SaveDbiDefsRequest $paramSaveDbiDefsRequest)
    {
        try {
            $this->setResult($resultSaveDbiDefs = $this->getSoapClient()->__soapCall('saveDbiDefs', [
                $paramSaveDbiDefsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultSaveDbiDefs;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\SaveCurrencyResponse|\Pggns\MidocoApi\OrderglobalSD\StructType\SaveDbiDefsResponse|\Pggns\MidocoApi\OrderglobalSD\StructType\SaveDbiUpdateResponse|\Pggns\MidocoApi\OrderglobalSD\StructType\SaveServiceStatusResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
