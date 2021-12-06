<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Import ServiceType
 * @subpackage Services
 */
class Import extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Crm\ServiceType\Import
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named importCRMCsv
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\ImportCRMCsvRequest $paramImportCRMCsvRequest
     * @return \Pggns\MidocoApi\Crm\StructType\ImportCRMCsvResponse|bool
     */
    public function importCRMCsv(\Pggns\MidocoApi\Crm\StructType\ImportCRMCsvRequest $paramImportCRMCsvRequest)
    {
        try {
            $this->setResult($resultImportCRMCsv = $this->getSoapClient()->__soapCall('importCRMCsv', [
                $paramImportCRMCsvRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultImportCRMCsv;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named importRawCustomer
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Crm\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Crm\StructType\ImportRawCustomerRequest $paramImportRawCustomerRequest
     * @return \Pggns\MidocoApi\Crm\StructType\ImportRawCustomerResponse|bool
     */
    public function importRawCustomer(\Pggns\MidocoApi\Crm\StructType\ImportRawCustomerRequest $paramImportRawCustomerRequest)
    {
        try {
            $this->setResult($resultImportRawCustomer = $this->getSoapClient()->__soapCall('importRawCustomer', [
                $paramImportRawCustomerRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultImportRawCustomer;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Crm\StructType\ImportCRMCsvResponse|\Pggns\MidocoApi\Crm\StructType\ImportRawCustomerResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
