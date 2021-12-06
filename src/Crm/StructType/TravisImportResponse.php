<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TravisImportResponse StructType
 * @subpackage Structs
 */
class TravisImportResponse extends AbstractStructBase
{
    /**
     * The ImportCustomersStatus
     * @var \Pggns\MidocoApi\Crm\StructType\ImportCustomersStatus|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\ImportCustomersStatus $ImportCustomersStatus = null;
    /**
     * The ImportContactsStatus
     * @var \Pggns\MidocoApi\Crm\StructType\ImportContactsStatus|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\ImportContactsStatus $ImportContactsStatus = null;
    /**
     * The ImportAttributesStatus
     * @var \Pggns\MidocoApi\Crm\StructType\ImportAttributesStatus|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\ImportAttributesStatus $ImportAttributesStatus = null;
    /**
     * The ImportBookingsStatus
     * @var \Pggns\MidocoApi\Crm\StructType\ImportBookingsStatus|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\ImportBookingsStatus $ImportBookingsStatus = null;
    /**
     * The ImportTravellersStatus
     * @var \Pggns\MidocoApi\Crm\StructType\ImportTravellersStatus|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\ImportTravellersStatus $ImportTravellersStatus = null;
    /**
     * Constructor method for TravisImportResponse
     * @uses TravisImportResponse::setImportCustomersStatus()
     * @uses TravisImportResponse::setImportContactsStatus()
     * @uses TravisImportResponse::setImportAttributesStatus()
     * @uses TravisImportResponse::setImportBookingsStatus()
     * @uses TravisImportResponse::setImportTravellersStatus()
     * @param \Pggns\MidocoApi\Crm\StructType\ImportCustomersStatus $importCustomersStatus
     * @param \Pggns\MidocoApi\Crm\StructType\ImportContactsStatus $importContactsStatus
     * @param \Pggns\MidocoApi\Crm\StructType\ImportAttributesStatus $importAttributesStatus
     * @param \Pggns\MidocoApi\Crm\StructType\ImportBookingsStatus $importBookingsStatus
     * @param \Pggns\MidocoApi\Crm\StructType\ImportTravellersStatus $importTravellersStatus
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\ImportCustomersStatus $importCustomersStatus = null, ?\Pggns\MidocoApi\Crm\StructType\ImportContactsStatus $importContactsStatus = null, ?\Pggns\MidocoApi\Crm\StructType\ImportAttributesStatus $importAttributesStatus = null, ?\Pggns\MidocoApi\Crm\StructType\ImportBookingsStatus $importBookingsStatus = null, ?\Pggns\MidocoApi\Crm\StructType\ImportTravellersStatus $importTravellersStatus = null)
    {
        $this
            ->setImportCustomersStatus($importCustomersStatus)
            ->setImportContactsStatus($importContactsStatus)
            ->setImportAttributesStatus($importAttributesStatus)
            ->setImportBookingsStatus($importBookingsStatus)
            ->setImportTravellersStatus($importTravellersStatus);
    }
    /**
     * Get ImportCustomersStatus value
     * @return \Pggns\MidocoApi\Crm\StructType\ImportCustomersStatus|null
     */
    public function getImportCustomersStatus(): ?\Pggns\MidocoApi\Crm\StructType\ImportCustomersStatus
    {
        return $this->ImportCustomersStatus;
    }
    /**
     * Set ImportCustomersStatus value
     * @param \Pggns\MidocoApi\Crm\StructType\ImportCustomersStatus $importCustomersStatus
     * @return \Pggns\MidocoApi\Crm\StructType\TravisImportResponse
     */
    public function setImportCustomersStatus(?\Pggns\MidocoApi\Crm\StructType\ImportCustomersStatus $importCustomersStatus = null): self
    {
        $this->ImportCustomersStatus = $importCustomersStatus;
        
        return $this;
    }
    /**
     * Get ImportContactsStatus value
     * @return \Pggns\MidocoApi\Crm\StructType\ImportContactsStatus|null
     */
    public function getImportContactsStatus(): ?\Pggns\MidocoApi\Crm\StructType\ImportContactsStatus
    {
        return $this->ImportContactsStatus;
    }
    /**
     * Set ImportContactsStatus value
     * @param \Pggns\MidocoApi\Crm\StructType\ImportContactsStatus $importContactsStatus
     * @return \Pggns\MidocoApi\Crm\StructType\TravisImportResponse
     */
    public function setImportContactsStatus(?\Pggns\MidocoApi\Crm\StructType\ImportContactsStatus $importContactsStatus = null): self
    {
        $this->ImportContactsStatus = $importContactsStatus;
        
        return $this;
    }
    /**
     * Get ImportAttributesStatus value
     * @return \Pggns\MidocoApi\Crm\StructType\ImportAttributesStatus|null
     */
    public function getImportAttributesStatus(): ?\Pggns\MidocoApi\Crm\StructType\ImportAttributesStatus
    {
        return $this->ImportAttributesStatus;
    }
    /**
     * Set ImportAttributesStatus value
     * @param \Pggns\MidocoApi\Crm\StructType\ImportAttributesStatus $importAttributesStatus
     * @return \Pggns\MidocoApi\Crm\StructType\TravisImportResponse
     */
    public function setImportAttributesStatus(?\Pggns\MidocoApi\Crm\StructType\ImportAttributesStatus $importAttributesStatus = null): self
    {
        $this->ImportAttributesStatus = $importAttributesStatus;
        
        return $this;
    }
    /**
     * Get ImportBookingsStatus value
     * @return \Pggns\MidocoApi\Crm\StructType\ImportBookingsStatus|null
     */
    public function getImportBookingsStatus(): ?\Pggns\MidocoApi\Crm\StructType\ImportBookingsStatus
    {
        return $this->ImportBookingsStatus;
    }
    /**
     * Set ImportBookingsStatus value
     * @param \Pggns\MidocoApi\Crm\StructType\ImportBookingsStatus $importBookingsStatus
     * @return \Pggns\MidocoApi\Crm\StructType\TravisImportResponse
     */
    public function setImportBookingsStatus(?\Pggns\MidocoApi\Crm\StructType\ImportBookingsStatus $importBookingsStatus = null): self
    {
        $this->ImportBookingsStatus = $importBookingsStatus;
        
        return $this;
    }
    /**
     * Get ImportTravellersStatus value
     * @return \Pggns\MidocoApi\Crm\StructType\ImportTravellersStatus|null
     */
    public function getImportTravellersStatus(): ?\Pggns\MidocoApi\Crm\StructType\ImportTravellersStatus
    {
        return $this->ImportTravellersStatus;
    }
    /**
     * Set ImportTravellersStatus value
     * @param \Pggns\MidocoApi\Crm\StructType\ImportTravellersStatus $importTravellersStatus
     * @return \Pggns\MidocoApi\Crm\StructType\TravisImportResponse
     */
    public function setImportTravellersStatus(?\Pggns\MidocoApi\Crm\StructType\ImportTravellersStatus $importTravellersStatus = null): self
    {
        $this->ImportTravellersStatus = $importTravellersStatus;
        
        return $this;
    }
}
