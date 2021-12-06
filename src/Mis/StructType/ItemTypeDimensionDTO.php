<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItemTypeDimensionDTO StructType
 * @subpackage Structs
 */
class ItemTypeDimensionDTO extends AbstractStructBase
{
    /**
     * The itemType
     * @var string|null
     */
    protected ?string $itemType = null;
    /**
     * The itemTypeId
     * @var int|null
     */
    protected ?int $itemTypeId = null;
    /**
     * Constructor method for ItemTypeDimensionDTO
     * @uses ItemTypeDimensionDTO::setItemType()
     * @uses ItemTypeDimensionDTO::setItemTypeId()
     * @param string $itemType
     * @param int $itemTypeId
     */
    public function __construct(?string $itemType = null, ?int $itemTypeId = null)
    {
        $this
            ->setItemType($itemType)
            ->setItemTypeId($itemTypeId);
    }
    /**
     * Get itemType value
     * @return string|null
     */
    public function getItemType(): ?string
    {
        return $this->itemType;
    }
    /**
     * Set itemType value
     * @param string $itemType
     * @return \Pggns\MidocoApi\Mis\StructType\ItemTypeDimensionDTO
     */
    public function setItemType(?string $itemType = null): self
    {
        // validation for constraint: string
        if (!is_null($itemType) && !is_string($itemType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemType, true), gettype($itemType)), __LINE__);
        }
        $this->itemType = $itemType;
        
        return $this;
    }
    /**
     * Get itemTypeId value
     * @return int|null
     */
    public function getItemTypeId(): ?int
    {
        return $this->itemTypeId;
    }
    /**
     * Set itemTypeId value
     * @param int $itemTypeId
     * @return \Pggns\MidocoApi\Mis\StructType\ItemTypeDimensionDTO
     */
    public function setItemTypeId(?int $itemTypeId = null): self
    {
        // validation for constraint: int
        if (!is_null($itemTypeId) && !(is_int($itemTypeId) || ctype_digit($itemTypeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemTypeId, true), gettype($itemTypeId)), __LINE__);
        }
        $this->itemTypeId = $itemTypeId;
        
        return $this;
    }
}
