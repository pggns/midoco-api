<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrgUnitDimensionDTO StructType
 * @subpackage Structs
 */
class OrgUnitDimensionDTO extends AbstractStructBase
{
    /**
     * The city
     * @var string|null
     */
    protected ?string $city = null;
    /**
     * The countryCode
     * @var string|null
     */
    protected ?string $countryCode = null;
    /**
     * The midocoOrgUnit
     * @var string|null
     */
    protected ?string $midocoOrgUnit = null;
    /**
     * The orgUnitId
     * @var int|null
     */
    protected ?int $orgUnitId = null;
    /**
     * The parentId
     * @var int|null
     */
    protected ?int $parentId = null;
    /**
     * The parentOrgUnit
     * @var string|null
     */
    protected ?string $parentOrgUnit = null;
    /**
     * The postalCode
     * @var string|null
     */
    protected ?string $postalCode = null;
    /**
     * The printName
     * @var string|null
     */
    protected ?string $printName = null;
    /**
     * The state
     * @var string|null
     */
    protected ?string $state = null;
    /**
     * Constructor method for OrgUnitDimensionDTO
     * @uses OrgUnitDimensionDTO::setCity()
     * @uses OrgUnitDimensionDTO::setCountryCode()
     * @uses OrgUnitDimensionDTO::setMidocoOrgUnit()
     * @uses OrgUnitDimensionDTO::setOrgUnitId()
     * @uses OrgUnitDimensionDTO::setParentId()
     * @uses OrgUnitDimensionDTO::setParentOrgUnit()
     * @uses OrgUnitDimensionDTO::setPostalCode()
     * @uses OrgUnitDimensionDTO::setPrintName()
     * @uses OrgUnitDimensionDTO::setState()
     * @param string $city
     * @param string $countryCode
     * @param string $midocoOrgUnit
     * @param int $orgUnitId
     * @param int $parentId
     * @param string $parentOrgUnit
     * @param string $postalCode
     * @param string $printName
     * @param string $state
     */
    public function __construct(?string $city = null, ?string $countryCode = null, ?string $midocoOrgUnit = null, ?int $orgUnitId = null, ?int $parentId = null, ?string $parentOrgUnit = null, ?string $postalCode = null, ?string $printName = null, ?string $state = null)
    {
        $this
            ->setCity($city)
            ->setCountryCode($countryCode)
            ->setMidocoOrgUnit($midocoOrgUnit)
            ->setOrgUnitId($orgUnitId)
            ->setParentId($parentId)
            ->setParentOrgUnit($parentOrgUnit)
            ->setPostalCode($postalCode)
            ->setPrintName($printName)
            ->setState($state);
    }
    /**
     * Get city value
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }
    /**
     * Set city value
     * @param string $city
     * @return \Pggns\MidocoApi\Mis\StructType\OrgUnitDimensionDTO
     */
    public function setCity(?string $city = null): self
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($city, true), gettype($city)), __LINE__);
        }
        $this->city = $city;
        
        return $this;
    }
    /**
     * Get countryCode value
     * @return string|null
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }
    /**
     * Set countryCode value
     * @param string $countryCode
     * @return \Pggns\MidocoApi\Mis\StructType\OrgUnitDimensionDTO
     */
    public function setCountryCode(?string $countryCode = null): self
    {
        // validation for constraint: string
        if (!is_null($countryCode) && !is_string($countryCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryCode, true), gettype($countryCode)), __LINE__);
        }
        $this->countryCode = $countryCode;
        
        return $this;
    }
    /**
     * Get midocoOrgUnit value
     * @return string|null
     */
    public function getMidocoOrgUnit(): ?string
    {
        return $this->midocoOrgUnit;
    }
    /**
     * Set midocoOrgUnit value
     * @param string $midocoOrgUnit
     * @return \Pggns\MidocoApi\Mis\StructType\OrgUnitDimensionDTO
     */
    public function setMidocoOrgUnit(?string $midocoOrgUnit = null): self
    {
        // validation for constraint: string
        if (!is_null($midocoOrgUnit) && !is_string($midocoOrgUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($midocoOrgUnit, true), gettype($midocoOrgUnit)), __LINE__);
        }
        $this->midocoOrgUnit = $midocoOrgUnit;
        
        return $this;
    }
    /**
     * Get orgUnitId value
     * @return int|null
     */
    public function getOrgUnitId(): ?int
    {
        return $this->orgUnitId;
    }
    /**
     * Set orgUnitId value
     * @param int $orgUnitId
     * @return \Pggns\MidocoApi\Mis\StructType\OrgUnitDimensionDTO
     */
    public function setOrgUnitId(?int $orgUnitId = null): self
    {
        // validation for constraint: int
        if (!is_null($orgUnitId) && !(is_int($orgUnitId) || ctype_digit($orgUnitId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orgUnitId, true), gettype($orgUnitId)), __LINE__);
        }
        $this->orgUnitId = $orgUnitId;
        
        return $this;
    }
    /**
     * Get parentId value
     * @return int|null
     */
    public function getParentId(): ?int
    {
        return $this->parentId;
    }
    /**
     * Set parentId value
     * @param int $parentId
     * @return \Pggns\MidocoApi\Mis\StructType\OrgUnitDimensionDTO
     */
    public function setParentId(?int $parentId = null): self
    {
        // validation for constraint: int
        if (!is_null($parentId) && !(is_int($parentId) || ctype_digit($parentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($parentId, true), gettype($parentId)), __LINE__);
        }
        $this->parentId = $parentId;
        
        return $this;
    }
    /**
     * Get parentOrgUnit value
     * @return string|null
     */
    public function getParentOrgUnit(): ?string
    {
        return $this->parentOrgUnit;
    }
    /**
     * Set parentOrgUnit value
     * @param string $parentOrgUnit
     * @return \Pggns\MidocoApi\Mis\StructType\OrgUnitDimensionDTO
     */
    public function setParentOrgUnit(?string $parentOrgUnit = null): self
    {
        // validation for constraint: string
        if (!is_null($parentOrgUnit) && !is_string($parentOrgUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parentOrgUnit, true), gettype($parentOrgUnit)), __LINE__);
        }
        $this->parentOrgUnit = $parentOrgUnit;
        
        return $this;
    }
    /**
     * Get postalCode value
     * @return string|null
     */
    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }
    /**
     * Set postalCode value
     * @param string $postalCode
     * @return \Pggns\MidocoApi\Mis\StructType\OrgUnitDimensionDTO
     */
    public function setPostalCode(?string $postalCode = null): self
    {
        // validation for constraint: string
        if (!is_null($postalCode) && !is_string($postalCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postalCode, true), gettype($postalCode)), __LINE__);
        }
        $this->postalCode = $postalCode;
        
        return $this;
    }
    /**
     * Get printName value
     * @return string|null
     */
    public function getPrintName(): ?string
    {
        return $this->printName;
    }
    /**
     * Set printName value
     * @param string $printName
     * @return \Pggns\MidocoApi\Mis\StructType\OrgUnitDimensionDTO
     */
    public function setPrintName(?string $printName = null): self
    {
        // validation for constraint: string
        if (!is_null($printName) && !is_string($printName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printName, true), gettype($printName)), __LINE__);
        }
        $this->printName = $printName;
        
        return $this;
    }
    /**
     * Get state value
     * @return string|null
     */
    public function getState(): ?string
    {
        return $this->state;
    }
    /**
     * Set state value
     * @param string $state
     * @return \Pggns\MidocoApi\Mis\StructType\OrgUnitDimensionDTO
     */
    public function setState(?string $state = null): self
    {
        // validation for constraint: string
        if (!is_null($state) && !is_string($state)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($state, true), gettype($state)), __LINE__);
        }
        $this->state = $state;
        
        return $this;
    }
}
