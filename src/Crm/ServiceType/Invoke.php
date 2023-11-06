<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Invoke ServiceType
 * @subpackage Services
 */
class Invoke extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Pggns\MidocoApi\Crm\ServiceType\Invoke
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named invokeCustomerWorkflow
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\InvokeCustomerWorkflowRequest $paramInvokeCustomerWorkflowRequest
     * @return \Pggns\MidocoApi\Crm\StructType\InvokeCustomerWorkflowResponse|bool
     */
    public function invokeCustomerWorkflow(\Pggns\MidocoApi\Crm\StructType\InvokeCustomerWorkflowRequest $paramInvokeCustomerWorkflowRequest)
    {
        try {
            $this->setResult($resultInvokeCustomerWorkflow = $this->getSoapClient()->__soapCall('invokeCustomerWorkflow', [
                $paramInvokeCustomerWorkflowRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultInvokeCustomerWorkflow;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Crm\StructType\InvokeCustomerWorkflowResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
