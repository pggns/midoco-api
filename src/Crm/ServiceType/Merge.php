<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Merge ServiceType
 * @subpackage Services
 */
class Merge extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Api\Crm\ServiceType\Merge
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named mergeCustomers
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MergeCustomersRequest $paramMergeCustomersRequest
     * @return \Pggns\MidocoApi\Api\Crm\StructType\MergeCustomersResponse|bool
     */
    public function mergeCustomers(\Pggns\MidocoApi\Api\Crm\StructType\MergeCustomersRequest $paramMergeCustomersRequest)
    {
        try {
            $this->setResult($resultMergeCustomers = $this->getSoapClient()->__soapCall('mergeCustomers', [
                $paramMergeCustomersRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultMergeCustomers;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Api\Crm\StructType\MergeCustomersResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
