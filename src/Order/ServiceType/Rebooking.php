<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Rebooking ServiceType
 * @subpackage Services
 */
class Rebooking extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Api\Order\ServiceType\Rebooking
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named rebookingSupplierInvoice
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\RebookingSupplierInvoiceRequest $paramRebookingSupplierInvoiceRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\RebookingSupplierInvoiceResponse|bool
     */
    public function rebookingSupplierInvoice(\Pggns\MidocoApi\Api\Order\StructType\RebookingSupplierInvoiceRequest $paramRebookingSupplierInvoiceRequest)
    {
        try {
            $this->setResult($resultRebookingSupplierInvoice = $this->getSoapClient()->__soapCall('rebookingSupplierInvoice', [
                $paramRebookingSupplierInvoiceRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultRebookingSupplierInvoice;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Api\Order\StructType\RebookingSupplierInvoiceResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
