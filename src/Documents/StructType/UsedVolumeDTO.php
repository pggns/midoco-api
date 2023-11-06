<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UsedVolumeDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UsedVolumeDTO extends AbstractStructBase
{
    /**
     * The count
     * @var int|null
     */
    protected ?int $count = null;
    /**
     * The documentCreationDate
     * @var string|null
     */
    protected ?string $documentCreationDate = null;
    /**
     * The documentNatureId
     * @var string|null
     */
    protected ?string $documentNatureId = null;
    /**
     * The forCharging
     * @var bool|null
     */
    protected ?bool $forCharging = null;
    /**
     * The size
     * @var int|null
     */
    protected ?int $size = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for UsedVolumeDTO
     * @uses UsedVolumeDTO::setCount()
     * @uses UsedVolumeDTO::setDocumentCreationDate()
     * @uses UsedVolumeDTO::setDocumentNatureId()
     * @uses UsedVolumeDTO::setForCharging()
     * @uses UsedVolumeDTO::setSize()
     * @uses UsedVolumeDTO::setUnitName()
     * @param int $count
     * @param string $documentCreationDate
     * @param string $documentNatureId
     * @param bool $forCharging
     * @param int $size
     * @param string $unitName
     */
    public function __construct(?int $count = null, ?string $documentCreationDate = null, ?string $documentNatureId = null, ?bool $forCharging = null, ?int $size = null, ?string $unitName = null)
    {
        $this
            ->setCount($count)
            ->setDocumentCreationDate($documentCreationDate)
            ->setDocumentNatureId($documentNatureId)
            ->setForCharging($forCharging)
            ->setSize($size)
            ->setUnitName($unitName);
    }
    /**
     * Get count value
     * @return int|null
     */
    public function getCount(): ?int
    {
        return $this->count;
    }
    /**
     * Set count value
     * @param int $count
     * @return \Pggns\MidocoApi\Documents\StructType\UsedVolumeDTO
     */
    public function setCount(?int $count = null): self
    {
        // validation for constraint: int
        if (!is_null($count) && !(is_int($count) || ctype_digit($count))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($count, true), gettype($count)), __LINE__);
        }
        $this->count = $count;
        
        return $this;
    }
    /**
     * Get documentCreationDate value
     * @return string|null
     */
    public function getDocumentCreationDate(): ?string
    {
        return $this->documentCreationDate;
    }
    /**
     * Set documentCreationDate value
     * @param string $documentCreationDate
     * @return \Pggns\MidocoApi\Documents\StructType\UsedVolumeDTO
     */
    public function setDocumentCreationDate(?string $documentCreationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($documentCreationDate) && !is_string($documentCreationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentCreationDate, true), gettype($documentCreationDate)), __LINE__);
        }
        $this->documentCreationDate = $documentCreationDate;
        
        return $this;
    }
    /**
     * Get documentNatureId value
     * @return string|null
     */
    public function getDocumentNatureId(): ?string
    {
        return $this->documentNatureId;
    }
    /**
     * Set documentNatureId value
     * @param string $documentNatureId
     * @return \Pggns\MidocoApi\Documents\StructType\UsedVolumeDTO
     */
    public function setDocumentNatureId(?string $documentNatureId = null): self
    {
        // validation for constraint: string
        if (!is_null($documentNatureId) && !is_string($documentNatureId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentNatureId, true), gettype($documentNatureId)), __LINE__);
        }
        $this->documentNatureId = $documentNatureId;
        
        return $this;
    }
    /**
     * Get forCharging value
     * @return bool|null
     */
    public function getForCharging(): ?bool
    {
        return $this->forCharging;
    }
    /**
     * Set forCharging value
     * @param bool $forCharging
     * @return \Pggns\MidocoApi\Documents\StructType\UsedVolumeDTO
     */
    public function setForCharging(?bool $forCharging = null): self
    {
        // validation for constraint: boolean
        if (!is_null($forCharging) && !is_bool($forCharging)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($forCharging, true), gettype($forCharging)), __LINE__);
        }
        $this->forCharging = $forCharging;
        
        return $this;
    }
    /**
     * Get size value
     * @return int|null
     */
    public function getSize(): ?int
    {
        return $this->size;
    }
    /**
     * Set size value
     * @param int $size
     * @return \Pggns\MidocoApi\Documents\StructType\UsedVolumeDTO
     */
    public function setSize(?int $size = null): self
    {
        // validation for constraint: int
        if (!is_null($size) && !(is_int($size) || ctype_digit($size))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($size, true), gettype($size)), __LINE__);
        }
        $this->size = $size;
        
        return $this;
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Documents\StructType\UsedVolumeDTO
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
}
