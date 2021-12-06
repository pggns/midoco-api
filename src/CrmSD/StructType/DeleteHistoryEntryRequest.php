<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteHistoryEntryRequest StructType
 * @subpackage Structs
 */
class DeleteHistoryEntryRequest extends AbstractStructBase
{
    /**
     * The MidocoContactHistory
     * Meta information extracted from the WSDL
     * - ref: MidocoContactHistory
     * @var \Pggns\MidocoApi\CrmSD\StructType\MidocoContactHistory|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\MidocoContactHistory $MidocoContactHistory = null;
    /**
     * The internalVersion
     * @var int|null
     */
    protected ?int $internalVersion = null;
    /**
     * Constructor method for DeleteHistoryEntryRequest
     * @uses DeleteHistoryEntryRequest::setMidocoContactHistory()
     * @uses DeleteHistoryEntryRequest::setInternalVersion()
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoContactHistory $midocoContactHistory
     * @param int $internalVersion
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\MidocoContactHistory $midocoContactHistory = null, ?int $internalVersion = null)
    {
        $this
            ->setMidocoContactHistory($midocoContactHistory)
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
     * @return \Pggns\MidocoApi\CrmSD\StructType\DeleteHistoryEntryRequest
     */
    public function setMidocoContactHistory(?\Pggns\MidocoApi\CrmSD\StructType\MidocoContactHistory $midocoContactHistory = null): self
    {
        $this->MidocoContactHistory = $midocoContactHistory;
        
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
     * @return \Pggns\MidocoApi\CrmSD\StructType\DeleteHistoryEntryRequest
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
