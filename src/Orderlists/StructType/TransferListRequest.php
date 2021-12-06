<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransferListRequest StructType
 * @subpackage Structs
 */
class TransferListRequest extends AbstractStructBase
{
    /**
     * The MidocoTransferListCriteria
     * Meta information extracted from the WSDL
     * - ref: MidocoTransferListCriteria
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTransferListCriteriaType|null
     */
    protected ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTransferListCriteriaType $MidocoTransferListCriteria = null;
    /**
     * The maxReturned
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $maxReturned = null;
    /**
     * Constructor method for TransferListRequest
     * @uses TransferListRequest::setMidocoTransferListCriteria()
     * @uses TransferListRequest::setMaxReturned()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTransferListCriteriaType $midocoTransferListCriteria
     * @param int $maxReturned
     */
    public function __construct(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTransferListCriteriaType $midocoTransferListCriteria = null, ?int $maxReturned = null)
    {
        $this
            ->setMidocoTransferListCriteria($midocoTransferListCriteria)
            ->setMaxReturned($maxReturned);
    }
    /**
     * Get MidocoTransferListCriteria value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTransferListCriteriaType|null
     */
    public function getMidocoTransferListCriteria(): ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTransferListCriteriaType
    {
        return $this->MidocoTransferListCriteria;
    }
    /**
     * Set MidocoTransferListCriteria value
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTransferListCriteriaType $midocoTransferListCriteria
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\TransferListRequest
     */
    public function setMidocoTransferListCriteria(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTransferListCriteriaType $midocoTransferListCriteria = null): self
    {
        $this->MidocoTransferListCriteria = $midocoTransferListCriteria;
        
        return $this;
    }
    /**
     * Get maxReturned value
     * @return int|null
     */
    public function getMaxReturned(): ?int
    {
        return $this->maxReturned;
    }
    /**
     * Set maxReturned value
     * @param int $maxReturned
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\TransferListRequest
     */
    public function setMaxReturned(?int $maxReturned = null): self
    {
        // validation for constraint: int
        if (!is_null($maxReturned) && !(is_int($maxReturned) || ctype_digit($maxReturned))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxReturned, true), gettype($maxReturned)), __LINE__);
        }
        $this->maxReturned = $maxReturned;
        
        return $this;
    }
}
