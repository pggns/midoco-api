<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Edit ServiceType
 * @subpackage Services
 */
class Edit extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\OrderSD\ServiceType\Edit
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named editMidocoTextRemark
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\EditMidocoTextRemarkRequest $paramEditMidocoTextRemarkRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\EditMidocoTextRemarkResponse|bool
     */
    public function editMidocoTextRemark(\Pggns\MidocoApi\OrderSD\StructType\EditMidocoTextRemarkRequest $paramEditMidocoTextRemarkRequest)
    {
        try {
            $this->setResult($resultEditMidocoTextRemark = $this->getSoapClient()->__soapCall('editMidocoTextRemark', [
                $paramEditMidocoTextRemarkRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultEditMidocoTextRemark;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\OrderSD\StructType\EditMidocoTextRemarkResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
