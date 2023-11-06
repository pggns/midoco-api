<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Discharge ServiceType
 * @subpackage Services
 */
class Discharge extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Pggns\MidocoApi\OrderSD\ServiceType\Discharge
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named dischargeTemplateFromSuppliers
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\TemplateSuppliersAssignType $paramDischargeTemplateFromSuppliersRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\DischargeTemplateFromSuppliersResponse|bool
     */
    public function dischargeTemplateFromSuppliers(\Pggns\MidocoApi\OrderSD\StructType\TemplateSuppliersAssignType $paramDischargeTemplateFromSuppliersRequest)
    {
        try {
            $this->setResult($resultDischargeTemplateFromSuppliers = $this->getSoapClient()->__soapCall('dischargeTemplateFromSuppliers', [
                $paramDischargeTemplateFromSuppliersRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDischargeTemplateFromSuppliers;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\OrderSD\StructType\DischargeTemplateFromSuppliersResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
