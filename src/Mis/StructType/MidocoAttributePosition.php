<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoAttributePosition StructType
 * @subpackage Structs
 */
class MidocoAttributePosition extends AttributePositionDTO
{
    /**
     * The localizedName
     * @var string|null
     */
    protected ?string $localizedName = null;
    /**
     * Constructor method for MidocoAttributePosition
     * @uses MidocoAttributePosition::setLocalizedName()
     * @param string $localizedName
     */
    public function __construct(?string $localizedName = null)
    {
        $this
            ->setLocalizedName($localizedName);
    }
    /**
     * Get localizedName value
     * @return string|null
     */
    public function getLocalizedName(): ?string
    {
        return $this->localizedName;
    }
    /**
     * Set localizedName value
     * @param string $localizedName
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoAttributePosition
     */
    public function setLocalizedName(?string $localizedName = null): self
    {
        // validation for constraint: string
        if (!is_null($localizedName) && !is_string($localizedName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($localizedName, true), gettype($localizedName)), __LINE__);
        }
        $this->localizedName = $localizedName;
        
        return $this;
    }
}
