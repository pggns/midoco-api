<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomerDimensionDTO StructType
 * @subpackage Structs
 */
class CustomerDimensionDTO extends AbstractStructBase
{
    /**
     * The addressType
     * @var string|null
     */
    protected ?string $addressType = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The forename
     * @var string|null
     */
    protected ?string $forename = null;
    /**
     * The midocoCustOrgUnit
     * @var string|null
     */
    protected ?string $midocoCustOrgUnit = null;
    /**
     * The midocoCustomerId
     * @var int|null
     */
    protected ?int $midocoCustomerId = null;
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The state
     * @var string|null
     */
    protected ?string $state = null;
    /**
     * The street
     * @var string|null
     */
    protected ?string $street = null;
    /**
     * The streetNo
     * @var string|null
     */
    protected ?string $streetNo = null;
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * Constructor method for CustomerDimensionDTO
     * @uses CustomerDimensionDTO::setAddressType()
     * @uses CustomerDimensionDTO::setCustomerId()
     * @uses CustomerDimensionDTO::setForename()
     * @uses CustomerDimensionDTO::setMidocoCustOrgUnit()
     * @uses CustomerDimensionDTO::setMidocoCustomerId()
     * @uses CustomerDimensionDTO::setName()
     * @uses CustomerDimensionDTO::setState()
     * @uses CustomerDimensionDTO::setStreet()
     * @uses CustomerDimensionDTO::setStreetNo()
     * @uses CustomerDimensionDTO::setType()
     * @param string $addressType
     * @param int $customerId
     * @param string $forename
     * @param string $midocoCustOrgUnit
     * @param int $midocoCustomerId
     * @param string $name
     * @param string $state
     * @param string $street
     * @param string $streetNo
     * @param string $type
     */
    public function __construct(?string $addressType = null, ?int $customerId = null, ?string $forename = null, ?string $midocoCustOrgUnit = null, ?int $midocoCustomerId = null, ?string $name = null, ?string $state = null, ?string $street = null, ?string $streetNo = null, ?string $type = null)
    {
        $this
            ->setAddressType($addressType)
            ->setCustomerId($customerId)
            ->setForename($forename)
            ->setMidocoCustOrgUnit($midocoCustOrgUnit)
            ->setMidocoCustomerId($midocoCustomerId)
            ->setName($name)
            ->setState($state)
            ->setStreet($street)
            ->setStreetNo($streetNo)
            ->setType($type);
    }
    /**
     * Get addressType value
     * @return string|null
     */
    public function getAddressType(): ?string
    {
        return $this->addressType;
    }
    /**
     * Set addressType value
     * @param string $addressType
     * @return \Pggns\MidocoApi\Mis\StructType\CustomerDimensionDTO
     */
    public function setAddressType(?string $addressType = null): self
    {
        // validation for constraint: string
        if (!is_null($addressType) && !is_string($addressType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($addressType, true), gettype($addressType)), __LINE__);
        }
        $this->addressType = $addressType;
        
        return $this;
    }
    /**
     * Get customerId value
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Mis\StructType\CustomerDimensionDTO
     */
    public function setCustomerId(?int $customerId = null): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
    /**
     * Get forename value
     * @return string|null
     */
    public function getForename(): ?string
    {
        return $this->forename;
    }
    /**
     * Set forename value
     * @param string $forename
     * @return \Pggns\MidocoApi\Mis\StructType\CustomerDimensionDTO
     */
    public function setForename(?string $forename = null): self
    {
        // validation for constraint: string
        if (!is_null($forename) && !is_string($forename)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($forename, true), gettype($forename)), __LINE__);
        }
        $this->forename = $forename;
        
        return $this;
    }
    /**
     * Get midocoCustOrgUnit value
     * @return string|null
     */
    public function getMidocoCustOrgUnit(): ?string
    {
        return $this->midocoCustOrgUnit;
    }
    /**
     * Set midocoCustOrgUnit value
     * @param string $midocoCustOrgUnit
     * @return \Pggns\MidocoApi\Mis\StructType\CustomerDimensionDTO
     */
    public function setMidocoCustOrgUnit(?string $midocoCustOrgUnit = null): self
    {
        // validation for constraint: string
        if (!is_null($midocoCustOrgUnit) && !is_string($midocoCustOrgUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($midocoCustOrgUnit, true), gettype($midocoCustOrgUnit)), __LINE__);
        }
        $this->midocoCustOrgUnit = $midocoCustOrgUnit;
        
        return $this;
    }
    /**
     * Get midocoCustomerId value
     * @return int|null
     */
    public function getMidocoCustomerId(): ?int
    {
        return $this->midocoCustomerId;
    }
    /**
     * Set midocoCustomerId value
     * @param int $midocoCustomerId
     * @return \Pggns\MidocoApi\Mis\StructType\CustomerDimensionDTO
     */
    public function setMidocoCustomerId(?int $midocoCustomerId = null): self
    {
        // validation for constraint: int
        if (!is_null($midocoCustomerId) && !(is_int($midocoCustomerId) || ctype_digit($midocoCustomerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($midocoCustomerId, true), gettype($midocoCustomerId)), __LINE__);
        }
        $this->midocoCustomerId = $midocoCustomerId;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\CustomerDimensionDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\CustomerDimensionDTO
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
    /**
     * Get street value
     * @return string|null
     */
    public function getStreet(): ?string
    {
        return $this->street;
    }
    /**
     * Set street value
     * @param string $street
     * @return \Pggns\MidocoApi\Mis\StructType\CustomerDimensionDTO
     */
    public function setStreet(?string $street = null): self
    {
        // validation for constraint: string
        if (!is_null($street) && !is_string($street)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($street, true), gettype($street)), __LINE__);
        }
        $this->street = $street;
        
        return $this;
    }
    /**
     * Get streetNo value
     * @return string|null
     */
    public function getStreetNo(): ?string
    {
        return $this->streetNo;
    }
    /**
     * Set streetNo value
     * @param string $streetNo
     * @return \Pggns\MidocoApi\Mis\StructType\CustomerDimensionDTO
     */
    public function setStreetNo(?string $streetNo = null): self
    {
        // validation for constraint: string
        if (!is_null($streetNo) && !is_string($streetNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($streetNo, true), gettype($streetNo)), __LINE__);
        }
        $this->streetNo = $streetNo;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\CustomerDimensionDTO
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
