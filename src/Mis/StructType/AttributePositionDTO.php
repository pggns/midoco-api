<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AttributePositionDTO StructType
 * @subpackage Structs
 */
class AttributePositionDTO extends AbstractStructBase
{
    /**
     * The attribName
     * @var string|null
     */
    protected ?string $attribName = null;
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * Constructor method for AttributePositionDTO
     * @uses AttributePositionDTO::setAttribName()
     * @uses AttributePositionDTO::setPosition()
     * @uses AttributePositionDTO::setType()
     * @param string $attribName
     * @param int $position
     * @param string $type
     */
    public function __construct(?string $attribName = null, ?int $position = null, ?string $type = null)
    {
        $this
            ->setAttribName($attribName)
            ->setPosition($position)
            ->setType($type);
    }
    /**
     * Get attribName value
     * @return string|null
     */
    public function getAttribName(): ?string
    {
        return $this->attribName;
    }
    /**
     * Set attribName value
     * @param string $attribName
     * @return \Pggns\MidocoApi\Mis\StructType\AttributePositionDTO
     */
    public function setAttribName(?string $attribName = null): self
    {
        // validation for constraint: string
        if (!is_null($attribName) && !is_string($attribName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attribName, true), gettype($attribName)), __LINE__);
        }
        $this->attribName = $attribName;
        
        return $this;
    }
    /**
     * Get position value
     * @return int|null
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }
    /**
     * Set position value
     * @param int $position
     * @return \Pggns\MidocoApi\Mis\StructType\AttributePositionDTO
     */
    public function setPosition(?int $position = null): self
    {
        // validation for constraint: int
        if (!is_null($position) && !(is_int($position) || ctype_digit($position))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($position, true), gettype($position)), __LINE__);
        }
        $this->position = $position;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\AttributePositionDTO
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
}
