<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddHistoryEntryRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AddHistoryEntryRequest extends AbstractStructBase
{
    /**
     * The MidocoContactHistory
     * Meta information extracted from the WSDL
     * - ref: MidocoContactHistory
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoContactHistory|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoContactHistory $MidocoContactHistory = null;
    /**
     * The MidocoCrmNotice
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoCrmNotice
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoCrmNotice|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoCrmNotice $MidocoCrmNotice = null;
    /**
     * The MidocoOrderTask
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoOrderTask
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoOrderTask|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoOrderTask $MidocoOrderTask = null;
    /**
     * The internalVersion
     * @var int|null
     */
    protected ?int $internalVersion = null;
    /**
     * Constructor method for AddHistoryEntryRequest
     * @uses AddHistoryEntryRequest::setMidocoContactHistory()
     * @uses AddHistoryEntryRequest::setMidocoCrmNotice()
     * @uses AddHistoryEntryRequest::setMidocoOrderTask()
     * @uses AddHistoryEntryRequest::setInternalVersion()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoContactHistory $midocoContactHistory
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmNotice $midocoCrmNotice
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoOrderTask $midocoOrderTask
     * @param int $internalVersion
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\MidocoContactHistory $midocoContactHistory = null, ?\Pggns\MidocoApi\Crm\StructType\MidocoCrmNotice $midocoCrmNotice = null, ?\Pggns\MidocoApi\Crm\StructType\MidocoOrderTask $midocoOrderTask = null, ?int $internalVersion = null)
    {
        $this
            ->setMidocoContactHistory($midocoContactHistory)
            ->setMidocoCrmNotice($midocoCrmNotice)
            ->setMidocoOrderTask($midocoOrderTask)
            ->setInternalVersion($internalVersion);
    }
    /**
     * Get MidocoContactHistory value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoContactHistory|null
     */
    public function getMidocoContactHistory(): ?\Pggns\MidocoApi\Crm\StructType\MidocoContactHistory
    {
        return $this->MidocoContactHistory;
    }
    /**
     * Set MidocoContactHistory value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoContactHistory $midocoContactHistory
     * @return \Pggns\MidocoApi\Crm\StructType\AddHistoryEntryRequest
     */
    public function setMidocoContactHistory(?\Pggns\MidocoApi\Crm\StructType\MidocoContactHistory $midocoContactHistory = null): self
    {
        $this->MidocoContactHistory = $midocoContactHistory;
        
        return $this;
    }
    /**
     * Get MidocoCrmNotice value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCrmNotice|null
     */
    public function getMidocoCrmNotice(): ?\Pggns\MidocoApi\Crm\StructType\MidocoCrmNotice
    {
        return $this->MidocoCrmNotice;
    }
    /**
     * Set MidocoCrmNotice value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmNotice $midocoCrmNotice
     * @return \Pggns\MidocoApi\Crm\StructType\AddHistoryEntryRequest
     */
    public function setMidocoCrmNotice(?\Pggns\MidocoApi\Crm\StructType\MidocoCrmNotice $midocoCrmNotice = null): self
    {
        $this->MidocoCrmNotice = $midocoCrmNotice;
        
        return $this;
    }
    /**
     * Get MidocoOrderTask value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoOrderTask|null
     */
    public function getMidocoOrderTask(): ?\Pggns\MidocoApi\Crm\StructType\MidocoOrderTask
    {
        return $this->MidocoOrderTask;
    }
    /**
     * Set MidocoOrderTask value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoOrderTask $midocoOrderTask
     * @return \Pggns\MidocoApi\Crm\StructType\AddHistoryEntryRequest
     */
    public function setMidocoOrderTask(?\Pggns\MidocoApi\Crm\StructType\MidocoOrderTask $midocoOrderTask = null): self
    {
        $this->MidocoOrderTask = $midocoOrderTask;
        
        return $this;
    }
    /**
     * Get internalVersion value
     * @return int|null
     */
    public function getInternalVersion(): ?int
    {
        return $this->internalVersion;
    }
    /**
     * Set internalVersion value
     * @param int $internalVersion
     * @return \Pggns\MidocoApi\Crm\StructType\AddHistoryEntryRequest
     */
    public function setInternalVersion(?int $internalVersion = null): self
    {
        // validation for constraint: int
        if (!is_null($internalVersion) && !(is_int($internalVersion) || ctype_digit($internalVersion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($internalVersion, true), gettype($internalVersion)), __LINE__);
        }
        $this->internalVersion = $internalVersion;
        
        return $this;
    }
}
