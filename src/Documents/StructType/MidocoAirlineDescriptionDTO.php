<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoAirlineDescriptionDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoAirlineDescriptionDTO extends AbstractStructBase
{
    /**
     * The airlineCode
     * @var string|null
     */
    protected ?string $airlineCode = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * Constructor method for MidocoAirlineDescriptionDTO
     * @uses MidocoAirlineDescriptionDTO::setAirlineCode()
     * @uses MidocoAirlineDescriptionDTO::setDescription()
     * @param string $airlineCode
     * @param string $description
     */
    public function __construct(?string $airlineCode = null, ?string $description = null)
    {
        $this
            ->setAirlineCode($airlineCode)
            ->setDescription($description);
    }
    /**
     * Get airlineCode value
     * @return string|null
     */
    public function getAirlineCode(): ?string
    {
        return $this->airlineCode;
    }
    /**
     * Set airlineCode value
     * @param string $airlineCode
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoAirlineDescriptionDTO
     */
    public function setAirlineCode(?string $airlineCode = null): self
    {
        // validation for constraint: string
        if (!is_null($airlineCode) && !is_string($airlineCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($airlineCode, true), gettype($airlineCode)), __LINE__);
        }
        $this->airlineCode = $airlineCode;
        
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoAirlineDescriptionDTO
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
}
