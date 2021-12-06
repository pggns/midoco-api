<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Mark ServiceType
 * @subpackage Services
 */
class Mark extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Api\Order\ServiceType\Mark
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named markTravelplanHistoryEmailsSent
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MarkTravelplanHistoryEmailsSentRequest $paramMarkTravelplanHistoryEmailsSentRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\MarkTravelplanHistoryEmailsSentResponse|bool
     */
    public function markTravelplanHistoryEmailsSent(\Pggns\MidocoApi\Api\Order\StructType\MarkTravelplanHistoryEmailsSentRequest $paramMarkTravelplanHistoryEmailsSentRequest)
    {
        try {
            $this->setResult($resultMarkTravelplanHistoryEmailsSent = $this->getSoapClient()->__soapCall('markTravelplanHistoryEmailsSent', [
                $paramMarkTravelplanHistoryEmailsSentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultMarkTravelplanHistoryEmailsSent;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named markInvoiceHistoryEmailSent
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MarkInvoiceHistoryEmailSentRequest $paramMarkInvoiceHistoryEmailSentRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\MarkInvoiceHistoryEmailSentResponse|bool
     */
    public function markInvoiceHistoryEmailSent(\Pggns\MidocoApi\Api\Order\StructType\MarkInvoiceHistoryEmailSentRequest $paramMarkInvoiceHistoryEmailSentRequest)
    {
        try {
            $this->setResult($resultMarkInvoiceHistoryEmailSent = $this->getSoapClient()->__soapCall('markInvoiceHistoryEmailSent', [
                $paramMarkInvoiceHistoryEmailSentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultMarkInvoiceHistoryEmailSent;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named markExportChangedOrders
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MarkExportChangedOrdersRequest $paramMarkExportChangedOrdersRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\MarkExportChangedOrdersResponse|bool
     */
    public function markExportChangedOrders(\Pggns\MidocoApi\Api\Order\StructType\MarkExportChangedOrdersRequest $paramMarkExportChangedOrdersRequest)
    {
        try {
            $this->setResult($resultMarkExportChangedOrders = $this->getSoapClient()->__soapCall('markExportChangedOrders', [
                $paramMarkExportChangedOrdersRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultMarkExportChangedOrders;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named markOrderDocumentEmailSent
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MarkOrderDocumentEmailSentRequest $paramMarkOrderDocumentEmailSentRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\MarkOrderDocumentEmailSentResponse|bool
     */
    public function markOrderDocumentEmailSent(\Pggns\MidocoApi\Api\Order\StructType\MarkOrderDocumentEmailSentRequest $paramMarkOrderDocumentEmailSentRequest)
    {
        try {
            $this->setResult($resultMarkOrderDocumentEmailSent = $this->getSoapClient()->__soapCall('markOrderDocumentEmailSent', [
                $paramMarkOrderDocumentEmailSentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultMarkOrderDocumentEmailSent;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named markVoidedBillingNoticeComment
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MarkVoidedBillingNoticeCommentRequest $paramMarkVoidedBillingNoticeCommentRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\MarkVoidedBillingNoticeCommentResponse|bool
     */
    public function markVoidedBillingNoticeComment(\Pggns\MidocoApi\Api\Order\StructType\MarkVoidedBillingNoticeCommentRequest $paramMarkVoidedBillingNoticeCommentRequest)
    {
        try {
            $this->setResult($resultMarkVoidedBillingNoticeComment = $this->getSoapClient()->__soapCall('markVoidedBillingNoticeComment', [
                $paramMarkVoidedBillingNoticeCommentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultMarkVoidedBillingNoticeComment;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named markVoidedOrderNoticeComment
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Order\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MarkVoidedOrderNoticeCommentRequest $paramMarkVoidedOrderNoticeCommentRequest
     * @return \Pggns\MidocoApi\Api\Order\StructType\MarkVoidedOrderNoticeCommentResponse|bool
     */
    public function markVoidedOrderNoticeComment(\Pggns\MidocoApi\Api\Order\StructType\MarkVoidedOrderNoticeCommentRequest $paramMarkVoidedOrderNoticeCommentRequest)
    {
        try {
            $this->setResult($resultMarkVoidedOrderNoticeComment = $this->getSoapClient()->__soapCall('markVoidedOrderNoticeComment', [
                $paramMarkVoidedOrderNoticeCommentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultMarkVoidedOrderNoticeComment;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Api\Order\StructType\MarkExportChangedOrdersResponse|\Pggns\MidocoApi\Api\Order\StructType\MarkInvoiceHistoryEmailSentResponse|\Pggns\MidocoApi\Api\Order\StructType\MarkOrderDocumentEmailSentResponse|\Pggns\MidocoApi\Api\Order\StructType\MarkTravelplanHistoryEmailsSentResponse|\Pggns\MidocoApi\Api\Order\StructType\MarkVoidedBillingNoticeCommentResponse|\Pggns\MidocoApi\Api\Order\StructType\MarkVoidedOrderNoticeCommentResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
