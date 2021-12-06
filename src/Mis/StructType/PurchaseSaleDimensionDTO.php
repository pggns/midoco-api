<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PurchaseSaleDimensionDTO StructType
 * @subpackage Structs
 */
class PurchaseSaleDimensionDTO extends AbstractStructBase
{
    /**
     * The isChild
     * @var string|null
     */
    protected ?string $isChild = null;
    /**
     * The isMain
     * @var string|null
     */
    protected ?string $isMain = null;
    /**
     * The isPackage
     * @var string|null
     */
    protected ?string $isPackage = null;
    /**
     * The purchaseSaleId
     * @var int|null
     */
    protected ?int $purchaseSaleId = null;
    /**
     * Constructor method for PurchaseSaleDimensionDTO
     * @uses PurchaseSaleDimensionDTO::setIsChild()
     * @uses PurchaseSaleDimensionDTO::setIsMain()
     * @uses PurchaseSaleDimensionDTO::setIsPackage()
     * @uses PurchaseSaleDimensionDTO::setPurchaseSaleId()
     * @param string $isChild
     * @param string $isMain
     * @param string $isPackage
     * @param int $purchaseSaleId
     */
    public function __construct(?string $isChild = null, ?string $isMain = null, ?string $isPackage = null, ?int $purchaseSaleId = null)
    {
        $this
            ->setIsChild($isChild)
            ->setIsMain($isMain)
            ->setIsPackage($isPackage)
            ->setPurchaseSaleId($purchaseSaleId);
    }
    /**
     * Get isChild value
     * @return string|null
     */
    public function getIsChild(): ?string
    {
        return $this->isChild;
    }
    /**
     * Set isChild value
     * @param string $isChild
     * @return \Pggns\MidocoApi\Mis\StructType\PurchaseSaleDimensionDTO
     */
    public function setIsChild(?string $isChild = null): self
    {
        // validation for constraint: string
        if (!is_null($isChild) && !is_string($isChild)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($isChild, true), gettype($isChild)), __LINE__);
        }
        $this->isChild = $isChild;
        
        return $this;
    }
    /**
     * Get isMain value
     * @return string|null
     */
    public function getIsMain(): ?string
    {
        return $this->isMain;
    }
    /**
     * Set isMain value
     * @param string $isMain
     * @return \Pggns\MidocoApi\Mis\StructType\PurchaseSaleDimensionDTO
     */
    public function setIsMain(?string $isMain = null): self
    {
        // validation for constraint: string
        if (!is_null($isMain) && !is_string($isMain)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($isMain, true), gettype($isMain)), __LINE__);
        }
        $this->isMain = $isMain;
        
        return $this;
    }
    /**
     * Get isPackage value
     * @return string|null
     */
    public function getIsPackage(): ?string
    {
        return $this->isPackage;
    }
    /**
     * Set isPackage value
     * @param string $isPackage
     * @return \Pggns\MidocoApi\Mis\StructType\PurchaseSaleDimensionDTO
     */
    public function setIsPackage(?string $isPackage = null): self
    {
        // validation for constraint: string
        if (!is_null($isPackage) && !is_string($isPackage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($isPackage, true), gettype($isPackage)), __LINE__);
        }
        $this->isPackage = $isPackage;
        
        return $this;
    }
    /**
     * Get purchaseSaleId value
     * @return int|null
     */
    public function getPurchaseSaleId(): ?int
    {
        return $this->purchaseSaleId;
    }
    /**
     * Set purchaseSaleId value
     * @param int $purchaseSaleId
     * @return \Pggns\MidocoApi\Mis\StructType\PurchaseSaleDimensionDTO
     */
    public function setPurchaseSaleId(?int $purchaseSaleId = null): self
    {
        // validation for constraint: int
        if (!is_null($purchaseSaleId) && !(is_int($purchaseSaleId) || ctype_digit($purchaseSaleId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($purchaseSaleId, true), gettype($purchaseSaleId)), __LINE__);
        }
        $this->purchaseSaleId = $purchaseSaleId;
        
        return $this;
    }
}
