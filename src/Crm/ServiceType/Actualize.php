<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Actualize ServiceType
 * @subpackage Services
 */
class Actualize extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Pggns\MidocoApi\Crm\ServiceType\Actualize
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named actualizePhoneticData
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\ActualizePhoneticDataRequest $paramActualizePhoneticDataRequest
     * @return \Pggns\MidocoApi\Crm\StructType\ActualizePhoneticDataResponse|bool
     */
    public function actualizePhoneticData(\Pggns\MidocoApi\Crm\StructType\ActualizePhoneticDataRequest $paramActualizePhoneticDataRequest)
    {
        try {
            $this->setResult($resultActualizePhoneticData = $this->getSoapClient()->__soapCall('actualizePhoneticData', [
                $paramActualizePhoneticDataRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultActualizePhoneticData;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named actualizeCustomerErmMail
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\ActualizeCustomerErmMailRequest $paramActualizeCustomerErmMailRequest
     * @return \Pggns\MidocoApi\Crm\StructType\ActualizeCustomerErmMailResponse|bool
     */
    public function actualizeCustomerErmMail(\Pggns\MidocoApi\Crm\StructType\ActualizeCustomerErmMailRequest $paramActualizeCustomerErmMailRequest)
    {
        try {
            $this->setResult($resultActualizeCustomerErmMail = $this->getSoapClient()->__soapCall('actualizeCustomerErmMail', [
                $paramActualizeCustomerErmMailRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultActualizeCustomerErmMail;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Crm\StructType\ActualizeCustomerErmMailResponse|\Pggns\MidocoApi\Crm\StructType\ActualizePhoneticDataResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
