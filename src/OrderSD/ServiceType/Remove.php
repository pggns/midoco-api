<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Remove ServiceType
 * @subpackage Services
 */
class Remove extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\OrderSD\ServiceType\Remove
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named removeOrdCriteriaTypesFromCategory
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\OrderSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\OrderSD\StructType\RemoveOrdCriteriaTypesFromCategoryRequest $paramRemoveOrdCriteriaTypesFromCategoryRequest
     * @return \Pggns\MidocoApi\OrderSD\StructType\RemoveOrdCriteriaTypesFromCategoryResponse|bool
     */
    public function removeOrdCriteriaTypesFromCategory(\Pggns\MidocoApi\OrderSD\StructType\RemoveOrdCriteriaTypesFromCategoryRequest $paramRemoveOrdCriteriaTypesFromCategoryRequest)
    {
        try {
            $this->setResult($resultRemoveOrdCriteriaTypesFromCategory = $this->getSoapClient()->__soapCall('removeOrdCriteriaTypesFromCategory', [
                $paramRemoveOrdCriteriaTypesFromCategoryRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultRemoveOrdCriteriaTypesFromCategory;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\OrderSD\StructType\RemoveOrdCriteriaTypesFromCategoryResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
