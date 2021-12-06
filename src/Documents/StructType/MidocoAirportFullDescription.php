<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoAirportFullDescription StructType
 * @subpackage Structs
 */
class MidocoAirportFullDescription extends AirportDTO
{
    /**
     * The localizedDescription
     * @var string|null
     */
    protected ?string $localizedDescription = null;
    /**
     * The isEUCountry
     * @var bool|null
     */
    protected ?bool $isEUCountry = null;
    /**
     * Constructor method for MidocoAirportFullDescription
     * @uses MidocoAirportFullDescription::setLocalizedDescription()
     * @uses MidocoAirportFullDescription::setIsEUCountry()
     * @param string $localizedDescription
     * @param bool $isEUCountry
     */
    public function __construct(?string $localizedDescription = null, ?bool $isEUCountry = null)
    {
        $this
            ->setLocalizedDescription($localizedDescription)
            ->setIsEUCountry($isEUCountry);
    }
    /**
     * Get localizedDescription value
     * @return string|null
     */
    public function getLocalizedDescription(): ?string
    {
        return $this->localizedDescription;
    }
    /**
     * Set localizedDescription value
     * @param string $localizedDescription
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoAirportFullDescription
     */
    public function setLocalizedDescription(?string $localizedDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($localizedDescription) && !is_string($localizedDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($localizedDescription, true), gettype($localizedDescription)), __LINE__);
        }
        $this->localizedDescription = $localizedDescription;
        
        return $this;
    }
    /**
     * Get isEUCountry value
     * @return bool|null
     */
    public function getIsEUCountry(): ?bool
    {
        return $this->isEUCountry;
    }
    /**
     * Set isEUCountry value
     * @param bool $isEUCountry
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoAirportFullDescription
     */
    public function setIsEUCountry(?bool $isEUCountry = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isEUCountry) && !is_bool($isEUCountry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isEUCountry, true), gettype($isEUCountry)), __LINE__);
        }
        $this->isEUCountry = $isEUCountry;
        
        return $this;
    }
}
