<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DiffDocumentRefId StructType
 * @subpackage Structs
 */
class DiffDocumentRefId extends AbstractStructBase
{
    /**
     * The refId
     * @var int|null
     */
    protected ?int $refId = null;
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The subType
     * @var string|null
     */
    protected ?string $subType = null;
    /**
     * Constructor method for DiffDocumentRefId
     * @uses DiffDocumentRefId::setRefId()
     * @uses DiffDocumentRefId::setType()
     * @uses DiffDocumentRefId::setSubType()
     * @param int $refId
     * @param string $type
     * @param string $subType
     */
    public function __construct(?int $refId = null, ?string $type = null, ?string $subType = null)
    {
        $this
            ->setRefId($refId)
            ->setType($type)
            ->setSubType($subType);
    }
    /**
     * Get refId value
     * @return int|null
     */
    public function getRefId(): ?int
    {
        return $this->refId;
    }
    /**
     * Set refId value
     * @param int $refId
     * @return \Pggns\MidocoApi\Documents\StructType\DiffDocumentRefId
     */
    public function setRefId(?int $refId = null): self
    {
        // validation for constraint: int
        if (!is_null($refId) && !(is_int($refId) || ctype_digit($refId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($refId, true), gettype($refId)), __LINE__);
        }
        $this->refId = $refId;
        
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Pggns\MidocoApi\Documents\StructType\DiffDocumentRefId
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
    /**
     * Get subType value
     * @return string|null
     */
    public function getSubType(): ?string
    {
        return $this->subType;
    }
    /**
     * Set subType value
     * @param string $subType
     * @return \Pggns\MidocoApi\Documents\StructType\DiffDocumentRefId
     */
    public function setSubType(?string $subType = null): self
    {
        // validation for constraint: string
        if (!is_null($subType) && !is_string($subType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subType, true), gettype($subType)), __LINE__);
        }
        $this->subType = $subType;
        
        return $this;
    }
}
