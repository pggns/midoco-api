<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirlineDimensionDTO StructType
 * @subpackage Structs
 */
class AirlineDimensionDTO extends AbstractStructBase
{
    /**
     * The airlineId
     * @var int|null
     */
    protected ?int $airlineId = null;
    /**
     * The bspCode
     * @var string|null
     */
    protected ?string $bspCode = null;
    /**
     * The carrierCode
     * @var string|null
     */
    protected ?string $carrierCode = null;
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * Constructor method for AirlineDimensionDTO
     * @uses AirlineDimensionDTO::setAirlineId()
     * @uses AirlineDimensionDTO::setBspCode()
     * @uses AirlineDimensionDTO::setCarrierCode()
     * @uses AirlineDimensionDTO::setName()
     * @param int $airlineId
     * @param string $bspCode
     * @param string $carrierCode
     * @param string $name
     */
    public function __construct(?int $airlineId = null, ?string $bspCode = null, ?string $carrierCode = null, ?string $name = null)
    {
        $this
            ->setAirlineId($airlineId)
            ->setBspCode($bspCode)
            ->setCarrierCode($carrierCode)
            ->setName($name);
    }
    /**
     * Get airlineId value
     * @return int|null
     */
    public function getAirlineId(): ?int
    {
        return $this->airlineId;
    }
    /**
     * Set airlineId value
     * @param int $airlineId
     * @return \Pggns\MidocoApi\Mis\StructType\AirlineDimensionDTO
     */
    public function setAirlineId(?int $airlineId = null): self
    {
        // validation for constraint: int
        if (!is_null($airlineId) && !(is_int($airlineId) || ctype_digit($airlineId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($airlineId, true), gettype($airlineId)), __LINE__);
        }
        $this->airlineId = $airlineId;
        
        return $this;
    }
    /**
     * Get bspCode value
     * @return string|null
     */
    public function getBspCode(): ?string
    {
        return $this->bspCode;
    }
    /**
     * Set bspCode value
     * @param string $bspCode
     * @return \Pggns\MidocoApi\Mis\StructType\AirlineDimensionDTO
     */
    public function setBspCode(?string $bspCode = null): self
    {
        // validation for constraint: string
        if (!is_null($bspCode) && !is_string($bspCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bspCode, true), gettype($bspCode)), __LINE__);
        }
        $this->bspCode = $bspCode;
        
        return $this;
    }
    /**
     * Get carrierCode value
     * @return string|null
     */
    public function getCarrierCode(): ?string
    {
        return $this->carrierCode;
    }
    /**
     * Set carrierCode value
     * @param string $carrierCode
     * @return \Pggns\MidocoApi\Mis\StructType\AirlineDimensionDTO
     */
    public function setCarrierCode(?string $carrierCode = null): self
    {
        // validation for constraint: string
        if (!is_null($carrierCode) && !is_string($carrierCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($carrierCode, true), gettype($carrierCode)), __LINE__);
        }
        $this->carrierCode = $carrierCode;
        
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Pggns\MidocoApi\Mis\StructType\AirlineDimensionDTO
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        
        return $this;
    }
}
