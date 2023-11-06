<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Find ServiceType
 * @subpackage Services
 */
class Find extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Pggns\MidocoApi\Crm\ServiceType\Find
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named findCustomerForEmail
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\FindCustomerForEmailRequest $paramFindCustomerForEmailRequest
     * @return \Pggns\MidocoApi\Crm\StructType\FindCustomerForEmailResponse|bool
     */
    public function findCustomerForEmail(\Pggns\MidocoApi\Crm\StructType\FindCustomerForEmailRequest $paramFindCustomerForEmailRequest)
    {
        try {
            $this->setResult($resultFindCustomerForEmail = $this->getSoapClient()->__soapCall('findCustomerForEmail', [
                $paramFindCustomerForEmailRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultFindCustomerForEmail;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named findCustomerOrDebitor
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\FindCustomerOrDebitorRequest $paramFindCustomerOrDebitorRequest
     * @return \Pggns\MidocoApi\Crm\StructType\FindCustomerOrDebitorResponse|bool
     */
    public function findCustomerOrDebitor(\Pggns\MidocoApi\Crm\StructType\FindCustomerOrDebitorRequest $paramFindCustomerOrDebitorRequest)
    {
        try {
            $this->setResult($resultFindCustomerOrDebitor = $this->getSoapClient()->__soapCall('findCustomerOrDebitor', [
                $paramFindCustomerOrDebitorRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultFindCustomerOrDebitor;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Crm\StructType\FindCustomerForEmailResponse|\Pggns\MidocoApi\Crm\StructType\FindCustomerOrDebitorResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
