<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReprintMidocoSettlementRequest StructType
 * @subpackage Structs
 */
class ReprintMidocoSettlementRequest extends AbstractStructBase
{
    /**
     * The reprintDocumentId
     * @var int|null
     */
    protected ?int $reprintDocumentId = null;
    /**
     * Constructor method for ReprintMidocoSettlementRequest
     * @uses ReprintMidocoSettlementRequest::setReprintDocumentId()
     * @param int $reprintDocumentId
     */
    public function __construct(?int $reprintDocumentId = null)
    {
        $this
            ->setReprintDocumentId($reprintDocumentId);
    }
    /**
     * Get reprintDocumentId value
     * @return int|null
     */
    public function getReprintDocumentId(): ?int
    {
        return $this->reprintDocumentId;
    }
    /**
     * Set reprintDocumentId value
     * @param int $reprintDocumentId
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\ReprintMidocoSettlementRequest
     */
    public function setReprintDocumentId(?int $reprintDocumentId = null): self
    {
        // validation for constraint: int
        if (!is_null($reprintDocumentId) && !(is_int($reprintDocumentId) || ctype_digit($reprintDocumentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($reprintDocumentId, true), gettype($reprintDocumentId)), __LINE__);
        }
        $this->reprintDocumentId = $reprintDocumentId;
        
        return $this;
    }
}
