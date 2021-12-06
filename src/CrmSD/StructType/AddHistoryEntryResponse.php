<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddHistoryEntryResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: addHistoryEntry --- adds a history entry for a customer id
 * @subpackage Structs
 */
class AddHistoryEntryResponse extends AbstractStructBase
{
    /**
     * The MidocoContactHistory
     * Meta information extracted from the WSDL
     * - ref: MidocoContactHistory
     * @var \Pggns\MidocoApi\CrmSD\StructType\MidocoContactHistory|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\MidocoContactHistory $MidocoContactHistory = null;
    /**
     * The MidocoCrmNotice
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoCrmNotice
     * @var \Pggns\MidocoApi\CrmSD\StructType\MidocoCrmNotice|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\MidocoCrmNotice $MidocoCrmNotice = null;
    /**
     * The MidocoOrderTask
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoOrderTask
     * @var \Pggns\MidocoApi\CrmSD\StructType\MidocoOrderTask|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\MidocoOrderTask $MidocoOrderTask = null;
    /**
     * The internalVersion
     * @var int|null
     */
    protected ?int $internalVersion = null;
    /**
     * Constructor method for AddHistoryEntryResponse
     * @uses AddHistoryEntryResponse::setMidocoContactHistory()
     * @uses AddHistoryEntryResponse::setMidocoCrmNotice()
     * @uses AddHistoryEntryResponse::setMidocoOrderTask()
     * @uses AddHistoryEntryResponse::setInternalVersion()
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoContactHistory $midocoContactHistory
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoCrmNotice $midocoCrmNotice
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoOrderTask $midocoOrderTask
     * @param int $internalVersion
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\MidocoContactHistory $midocoContactHistory = null, ?\Pggns\MidocoApi\CrmSD\StructType\MidocoCrmNotice $midocoCrmNotice = null, ?\Pggns\MidocoApi\CrmSD\StructType\MidocoOrderTask $midocoOrderTask = null, ?int $internalVersion = null)
    {
        $this
            ->setMidocoContactHistory($midocoContactHistory)
            ->setMidocoCrmNotice($midocoCrmNotice)
            ->setMidocoOrderTask($midocoOrderTask)
            ->setInternalVersion($internalVersion);
    }
    /**
     * Get MidocoContactHistory value
     * @return \Pggns\MidocoApi\CrmSD\StructType\MidocoContactHistory|null
     */
    public function getMidocoContactHistory(): ?\Pggns\MidocoApi\CrmSD\StructType\MidocoContactHistory
    {
        return $this->MidocoContactHistory;
    }
    /**
     * Set MidocoContactHistory value
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoContactHistory $midocoContactHistory
     * @return \Pggns\MidocoApi\CrmSD\StructType\AddHistoryEntryResponse
     */
    public function setMidocoContactHistory(?\Pggns\MidocoApi\CrmSD\StructType\MidocoContactHistory $midocoContactHistory = null): self
    {
        $this->MidocoContactHistory = $midocoContactHistory;
        
        return $this;
    }
    /**
     * Get MidocoCrmNotice value
     * @return \Pggns\MidocoApi\CrmSD\StructType\MidocoCrmNotice|null
     */
    public function getMidocoCrmNotice(): ?\Pggns\MidocoApi\CrmSD\StructType\MidocoCrmNotice
    {
        return $this->MidocoCrmNotice;
    }
    /**
     * Set MidocoCrmNotice value
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoCrmNotice $midocoCrmNotice
     * @return \Pggns\MidocoApi\CrmSD\StructType\AddHistoryEntryResponse
     */
    public function setMidocoCrmNotice(?\Pggns\MidocoApi\CrmSD\StructType\MidocoCrmNotice $midocoCrmNotice = null): self
    {
        $this->MidocoCrmNotice = $midocoCrmNotice;
        
        return $this;
    }
    /**
     * Get MidocoOrderTask value
     * @return \Pggns\MidocoApi\CrmSD\StructType\MidocoOrderTask|null
     */
    public function getMidocoOrderTask(): ?\Pggns\MidocoApi\CrmSD\StructType\MidocoOrderTask
    {
        return $this->MidocoOrderTask;
    }
    /**
     * Set MidocoOrderTask value
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoOrderTask $midocoOrderTask
     * @return \Pggns\MidocoApi\CrmSD\StructType\AddHistoryEntryResponse
     */
    public function setMidocoOrderTask(?\Pggns\MidocoApi\CrmSD\StructType\MidocoOrderTask $midocoOrderTask = null): self
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
     * @return \Pggns\MidocoApi\CrmSD\StructType\AddHistoryEntryResponse
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
