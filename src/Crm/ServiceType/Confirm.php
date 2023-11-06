<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Confirm ServiceType
 * @subpackage Services
 */
class Confirm extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Pggns\MidocoApi\Crm\ServiceType\Confirm
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named confirmCrmExternalOffer
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\ConfirmCrmExternalOfferRequest $paramConfirmCrmExternalOfferRequest
     * @return \Pggns\MidocoApi\Crm\StructType\ConfirmCrmExternalOfferResponse|bool
     */
    public function confirmCrmExternalOffer(\Pggns\MidocoApi\Crm\StructType\ConfirmCrmExternalOfferRequest $paramConfirmCrmExternalOfferRequest)
    {
        try {
            $this->setResult($resultConfirmCrmExternalOffer = $this->getSoapClient()->__soapCall('confirmCrmExternalOffer', [
                $paramConfirmCrmExternalOfferRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultConfirmCrmExternalOffer;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Crm\StructType\ConfirmCrmExternalOfferResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
