<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Finish ServiceType
 * @subpackage Services
 */
class Finish extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Api\Order\ServiceType\Finish
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named finishBillingDocument
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\FinishBillingDocumentRequest $paramFinishBillingDocumentRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\FinishBillingDocumentResponse|bool
     */
    public function finishBillingDocument(\Pggns\MidocoApi\Api\Order\StructType\FinishBillingDocumentRequest $paramFinishBillingDocumentRequest)
    {
        try {
            $this->setResult($resultFinishBillingDocument = $this->getSoapClient()->__soapCall('finishBillingDocument', [
                $paramFinishBillingDocumentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultFinishBillingDocument;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named finishMidocoBonusCalculation
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\FinishMidocoBonusCalculationRequest $paramFinishMidocoBonusCalculationRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\FinishMidocoBonusCalculationResponse|bool
     */
    public function finishMidocoBonusCalculation(\Pggns\MidocoApi\Api\Order\StructType\FinishMidocoBonusCalculationRequest $paramFinishMidocoBonusCalculationRequest)
    {
        try {
            $this->setResult($resultFinishMidocoBonusCalculation = $this->getSoapClient()->__soapCall('finishMidocoBonusCalculation', [
                $paramFinishMidocoBonusCalculationRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultFinishMidocoBonusCalculation;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named finishAgencySettlement
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\FinishAgencySettlementRequest $paramFinishAgencySettlementRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\FinishAgencySettlementResponse|bool
     */
    public function finishAgencySettlement(\Pggns\MidocoApi\Api\Order\StructType\FinishAgencySettlementRequest $paramFinishAgencySettlementRequest)
    {
        try {
            $this->setResult($resultFinishAgencySettlement = $this->getSoapClient()->__soapCall('finishAgencySettlement', [
                $paramFinishAgencySettlementRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultFinishAgencySettlement;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named finishOrderNotice
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\FinishOrderNoticeRequest $paramFinishOrderNoticeRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\FinishOrderNoticeResponse|bool
     */
    public function finishOrderNotice(\Pggns\MidocoApi\Api\Order\StructType\FinishOrderNoticeRequest $paramFinishOrderNoticeRequest)
    {
        try {
            $this->setResult($resultFinishOrderNotice = $this->getSoapClient()->__soapCall('finishOrderNotice', [
                $paramFinishOrderNoticeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultFinishOrderNotice;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named finishBillingDocumentFibu
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\FinishBillingDocumentFibuRequest $paramFinishBillingDocumentFibuRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\FinishBillingDocumentResponse|bool
     */
    public function finishBillingDocumentFibu(\Pggns\MidocoApi\Api\Order\StructType\FinishBillingDocumentFibuRequest $paramFinishBillingDocumentFibuRequest)
    {
        try {
            $this->setResult($resultFinishBillingDocumentFibu = $this->getSoapClient()->__soapCall('finishBillingDocumentFibu', [
                $paramFinishBillingDocumentFibuRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultFinishBillingDocumentFibu;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Api\Order\StructType\FinishAgencySettlementResponse|\Pggns\MidocoApi\Api\Order\StructType\FinishBillingDocumentResponse|\Pggns\MidocoApi\Api\Order\StructType\FinishMidocoBonusCalculationResponse|\Pggns\MidocoApi\Api\Order\StructType\FinishOrderNoticeResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
