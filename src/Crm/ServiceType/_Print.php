<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Print ServiceType
 * @subpackage Services
 */
class _Print extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \Pggns\MidocoApi\Crm\ServiceType\_Print
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named printCustomerLetter
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\PrintCustomerLetterRequest $paramPrintCustomerLetterRequest
     * @return \Pggns\MidocoApi\Crm\StructType\PrintCustomerLetterResponse|bool
     */
    public function printCustomerLetter(\Pggns\MidocoApi\Crm\StructType\PrintCustomerLetterRequest $paramPrintCustomerLetterRequest)
    {
        try {
            $this->setResult($resultPrintCustomerLetter = $this->getSoapClient()->__soapCall('printCustomerLetter', [
                $paramPrintCustomerLetterRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultPrintCustomerLetter;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named printSupplierReportForMediator
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\PrintSupplierReportForMediatorRequest $paramPrintSupplierReportForMediatorRequest
     * @return \Pggns\MidocoApi\Crm\StructType\PrintSupplierReportForMediatorResponse|bool
     */
    public function printSupplierReportForMediator(\Pggns\MidocoApi\Crm\StructType\PrintSupplierReportForMediatorRequest $paramPrintSupplierReportForMediatorRequest)
    {
        try {
            $this->setResult($resultPrintSupplierReportForMediator = $this->getSoapClient()->__soapCall('printSupplierReportForMediator', [
                $paramPrintSupplierReportForMediatorRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultPrintSupplierReportForMediator;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named printCommunicationHistory
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\PrintCommunicationHistoryRequest $paramPrintCommunicationHistoryRequest
     * @return \Pggns\MidocoApi\Crm\StructType\PrintCommunicationHistoryResponse|bool
     */
    public function printCommunicationHistory(\Pggns\MidocoApi\Crm\StructType\PrintCommunicationHistoryRequest $paramPrintCommunicationHistoryRequest)
    {
        try {
            $this->setResult($resultPrintCommunicationHistory = $this->getSoapClient()->__soapCall('printCommunicationHistory', [
                $paramPrintCommunicationHistoryRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultPrintCommunicationHistory;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Crm\StructType\PrintCommunicationHistoryResponse|\Pggns\MidocoApi\Crm\StructType\PrintCustomerLetterResponse|\Pggns\MidocoApi\Crm\StructType\PrintSupplierReportForMediatorResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
