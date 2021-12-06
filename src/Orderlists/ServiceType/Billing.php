<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Billing ServiceType
 * @subpackage Services
 */
class Billing extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Orderlists\ServiceType\Billing
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Orderlists\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named billingList
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Orderlists\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Orderlists\StructType\BillingListRequest $paramBillingListRequest
     * @return \Pggns\MidocoApi\Orderlists\StructType\BillingListResponse|bool
     */
    public function billingList(\Pggns\MidocoApi\Orderlists\StructType\BillingListRequest $paramBillingListRequest)
    {
        try {
            $this->setResult($resultBillingList = $this->getSoapClient()->__soapCall('billingList', [
                $paramBillingListRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultBillingList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named billingDataList
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Orderlists\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Orderlists\StructType\BillingDataListRequest $paramBillingDataListRequest
     * @return \Pggns\MidocoApi\Orderlists\StructType\BillingDataListResponse|bool
     */
    public function billingDataList(\Pggns\MidocoApi\Orderlists\StructType\BillingDataListRequest $paramBillingDataListRequest)
    {
        try {
            $this->setResult($resultBillingDataList = $this->getSoapClient()->__soapCall('billingDataList', [
                $paramBillingDataListRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultBillingDataList;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Orderlists\StructType\BillingDataListResponse|\Pggns\MidocoApi\Orderlists\StructType\BillingListResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
