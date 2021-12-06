<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SupplierDimensionDTO StructType
 * @subpackage Structs
 */
class SupplierDimensionDTO extends AbstractStructBase
{
    /**
     * The group1
     * @var string|null
     */
    protected ?string $group1 = null;
    /**
     * The group2
     * @var string|null
     */
    protected ?string $group2 = null;
    /**
     * The group3
     * @var string|null
     */
    protected ?string $group3 = null;
    /**
     * The midocoSupplierId
     * @var string|null
     */
    protected ?string $midocoSupplierId = null;
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The supplierId
     * @var int|null
     */
    protected ?int $supplierId = null;
    /**
     * Constructor method for SupplierDimensionDTO
     * @uses SupplierDimensionDTO::setGroup1()
     * @uses SupplierDimensionDTO::setGroup2()
     * @uses SupplierDimensionDTO::setGroup3()
     * @uses SupplierDimensionDTO::setMidocoSupplierId()
     * @uses SupplierDimensionDTO::setName()
     * @uses SupplierDimensionDTO::setSupplierId()
     * @param string $group1
     * @param string $group2
     * @param string $group3
     * @param string $midocoSupplierId
     * @param string $name
     * @param int $supplierId
     */
    public function __construct(?string $group1 = null, ?string $group2 = null, ?string $group3 = null, ?string $midocoSupplierId = null, ?string $name = null, ?int $supplierId = null)
    {
        $this
            ->setGroup1($group1)
            ->setGroup2($group2)
            ->setGroup3($group3)
            ->setMidocoSupplierId($midocoSupplierId)
            ->setName($name)
            ->setSupplierId($supplierId);
    }
    /**
     * Get group1 value
     * @return string|null
     */
    public function getGroup1(): ?string
    {
        return $this->group1;
    }
    /**
     * Set group1 value
     * @param string $group1
     * @return \Pggns\MidocoApi\Mis\StructType\SupplierDimensionDTO
     */
    public function setGroup1(?string $group1 = null): self
    {
        // validation for constraint: string
        if (!is_null($group1) && !is_string($group1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($group1, true), gettype($group1)), __LINE__);
        }
        $this->group1 = $group1;
        
        return $this;
    }
    /**
     * Get group2 value
     * @return string|null
     */
    public function getGroup2(): ?string
    {
        return $this->group2;
    }
    /**
     * Set group2 value
     * @param string $group2
     * @return \Pggns\MidocoApi\Mis\StructType\SupplierDimensionDTO
     */
    public function setGroup2(?string $group2 = null): self
    {
        // validation for constraint: string
        if (!is_null($group2) && !is_string($group2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($group2, true), gettype($group2)), __LINE__);
        }
        $this->group2 = $group2;
        
        return $this;
    }
    /**
     * Get group3 value
     * @return string|null
     */
    public function getGroup3(): ?string
    {
        return $this->group3;
    }
    /**
     * Set group3 value
     * @param string $group3
     * @return \Pggns\MidocoApi\Mis\StructType\SupplierDimensionDTO
     */
    public function setGroup3(?string $group3 = null): self
    {
        // validation for constraint: string
        if (!is_null($group3) && !is_string($group3)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($group3, true), gettype($group3)), __LINE__);
        }
        $this->group3 = $group3;
        
        return $this;
    }
    /**
     * Get midocoSupplierId value
     * @return string|null
     */
    public function getMidocoSupplierId(): ?string
    {
        return $this->midocoSupplierId;
    }
    /**
     * Set midocoSupplierId value
     * @param string $midocoSupplierId
     * @return \Pggns\MidocoApi\Mis\StructType\SupplierDimensionDTO
     */
    public function setMidocoSupplierId(?string $midocoSupplierId = null): self
    {
        // validation for constraint: string
        if (!is_null($midocoSupplierId) && !is_string($midocoSupplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($midocoSupplierId, true), gettype($midocoSupplierId)), __LINE__);
        }
        $this->midocoSupplierId = $midocoSupplierId;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\SupplierDimensionDTO
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
     * Get supplierId value
     * @return int|null
     */
    public function getSupplierId(): ?int
    {
        return $this->supplierId;
    }
    /**
     * Set supplierId value
     * @param int $supplierId
     * @return \Pggns\MidocoApi\Mis\StructType\SupplierDimensionDTO
     */
    public function setSupplierId(?int $supplierId = null): self
    {
        // validation for constraint: int
        if (!is_null($supplierId) && !(is_int($supplierId) || ctype_digit($supplierId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($supplierId, true), gettype($supplierId)), __LINE__);
        }
        $this->supplierId = $supplierId;
        
        return $this;
    }
}
