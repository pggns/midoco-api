<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItemTypeDTO StructType
 * @subpackage Structs
 */
class ItemTypeDTO extends AbstractStructBase
{
    /**
     * The cultureId
     * @var string|null
     */
    protected ?string $cultureId = null;
    /**
     * The localizedDesc
     * @var string|null
     */
    protected ?string $localizedDesc = null;
    /**
     * The typeDesc
     * @var string|null
     */
    protected ?string $typeDesc = null;
    /**
     * The typeId
     * @var int|null
     */
    protected ?int $typeId = null;
    /**
     * Constructor method for ItemTypeDTO
     * @uses ItemTypeDTO::setCultureId()
     * @uses ItemTypeDTO::setLocalizedDesc()
     * @uses ItemTypeDTO::setTypeDesc()
     * @uses ItemTypeDTO::setTypeId()
     * @param string $cultureId
     * @param string $localizedDesc
     * @param string $typeDesc
     * @param int $typeId
     */
    public function __construct(?string $cultureId = null, ?string $localizedDesc = null, ?string $typeDesc = null, ?int $typeId = null)
    {
        $this
            ->setCultureId($cultureId)
            ->setLocalizedDesc($localizedDesc)
            ->setTypeDesc($typeDesc)
            ->setTypeId($typeId);
    }
    /**
     * Get cultureId value
     * @return string|null
     */
    public function getCultureId(): ?string
    {
        return $this->cultureId;
    }
    /**
     * Set cultureId value
     * @param string $cultureId
     * @return \Pggns\MidocoApi\Documents\StructType\ItemTypeDTO
     */
    public function setCultureId(?string $cultureId = null): self
    {
        // validation for constraint: string
        if (!is_null($cultureId) && !is_string($cultureId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cultureId, true), gettype($cultureId)), __LINE__);
        }
        $this->cultureId = $cultureId;
        
        return $this;
    }
    /**
     * Get localizedDesc value
     * @return string|null
     */
    public function getLocalizedDesc(): ?string
    {
        return $this->localizedDesc;
    }
    /**
     * Set localizedDesc value
     * @param string $localizedDesc
     * @return \Pggns\MidocoApi\Documents\StructType\ItemTypeDTO
     */
    public function setLocalizedDesc(?string $localizedDesc = null): self
    {
        // validation for constraint: string
        if (!is_null($localizedDesc) && !is_string($localizedDesc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($localizedDesc, true), gettype($localizedDesc)), __LINE__);
        }
        $this->localizedDesc = $localizedDesc;
        
        return $this;
    }
    /**
     * Get typeDesc value
     * @return string|null
     */
    public function getTypeDesc(): ?string
    {
        return $this->typeDesc;
    }
    /**
     * Set typeDesc value
     * @param string $typeDesc
     * @return \Pggns\MidocoApi\Documents\StructType\ItemTypeDTO
     */
    public function setTypeDesc(?string $typeDesc = null): self
    {
        // validation for constraint: string
        if (!is_null($typeDesc) && !is_string($typeDesc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typeDesc, true), gettype($typeDesc)), __LINE__);
        }
        $this->typeDesc = $typeDesc;
        
        return $this;
    }
    /**
     * Get typeId value
     * @return int|null
     */
    public function getTypeId(): ?int
    {
        return $this->typeId;
    }
    /**
     * Set typeId value
     * @param int $typeId
     * @return \Pggns\MidocoApi\Documents\StructType\ItemTypeDTO
     */
    public function setTypeId(?int $typeId = null): self
    {
        // validation for constraint: int
        if (!is_null($typeId) && !(is_int($typeId) || ctype_digit($typeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($typeId, true), gettype($typeId)), __LINE__);
        }
        $this->typeId = $typeId;
        
        return $this;
    }
}
