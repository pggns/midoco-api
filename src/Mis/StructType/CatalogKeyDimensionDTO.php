<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CatalogKeyDimensionDTO StructType
 * @subpackage Structs
 */
class CatalogKeyDimensionDTO extends AbstractStructBase
{
    /**
     * The catalogKey
     * @var string|null
     */
    protected ?string $catalogKey = null;
    /**
     * The catalogKeyDescription
     * @var string|null
     */
    protected ?string $catalogKeyDescription = null;
    /**
     * The catalogKeyId
     * @var int|null
     */
    protected ?int $catalogKeyId = null;
    /**
     * The catalogKeyLocDescr
     * @var string|null
     */
    protected ?string $catalogKeyLocDescr = null;
    /**
     * Constructor method for CatalogKeyDimensionDTO
     * @uses CatalogKeyDimensionDTO::setCatalogKey()
     * @uses CatalogKeyDimensionDTO::setCatalogKeyDescription()
     * @uses CatalogKeyDimensionDTO::setCatalogKeyId()
     * @uses CatalogKeyDimensionDTO::setCatalogKeyLocDescr()
     * @param string $catalogKey
     * @param string $catalogKeyDescription
     * @param int $catalogKeyId
     * @param string $catalogKeyLocDescr
     */
    public function __construct(?string $catalogKey = null, ?string $catalogKeyDescription = null, ?int $catalogKeyId = null, ?string $catalogKeyLocDescr = null)
    {
        $this
            ->setCatalogKey($catalogKey)
            ->setCatalogKeyDescription($catalogKeyDescription)
            ->setCatalogKeyId($catalogKeyId)
            ->setCatalogKeyLocDescr($catalogKeyLocDescr);
    }
    /**
     * Get catalogKey value
     * @return string|null
     */
    public function getCatalogKey(): ?string
    {
        return $this->catalogKey;
    }
    /**
     * Set catalogKey value
     * @param string $catalogKey
     * @return \Pggns\MidocoApi\Mis\StructType\CatalogKeyDimensionDTO
     */
    public function setCatalogKey(?string $catalogKey = null): self
    {
        // validation for constraint: string
        if (!is_null($catalogKey) && !is_string($catalogKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($catalogKey, true), gettype($catalogKey)), __LINE__);
        }
        $this->catalogKey = $catalogKey;
        
        return $this;
    }
    /**
     * Get catalogKeyDescription value
     * @return string|null
     */
    public function getCatalogKeyDescription(): ?string
    {
        return $this->catalogKeyDescription;
    }
    /**
     * Set catalogKeyDescription value
     * @param string $catalogKeyDescription
     * @return \Pggns\MidocoApi\Mis\StructType\CatalogKeyDimensionDTO
     */
    public function setCatalogKeyDescription(?string $catalogKeyDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($catalogKeyDescription) && !is_string($catalogKeyDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($catalogKeyDescription, true), gettype($catalogKeyDescription)), __LINE__);
        }
        $this->catalogKeyDescription = $catalogKeyDescription;
        
        return $this;
    }
    /**
     * Get catalogKeyId value
     * @return int|null
     */
    public function getCatalogKeyId(): ?int
    {
        return $this->catalogKeyId;
    }
    /**
     * Set catalogKeyId value
     * @param int $catalogKeyId
     * @return \Pggns\MidocoApi\Mis\StructType\CatalogKeyDimensionDTO
     */
    public function setCatalogKeyId(?int $catalogKeyId = null): self
    {
        // validation for constraint: int
        if (!is_null($catalogKeyId) && !(is_int($catalogKeyId) || ctype_digit($catalogKeyId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($catalogKeyId, true), gettype($catalogKeyId)), __LINE__);
        }
        $this->catalogKeyId = $catalogKeyId;
        
        return $this;
    }
    /**
     * Get catalogKeyLocDescr value
     * @return string|null
     */
    public function getCatalogKeyLocDescr(): ?string
    {
        return $this->catalogKeyLocDescr;
    }
    /**
     * Set catalogKeyLocDescr value
     * @param string $catalogKeyLocDescr
     * @return \Pggns\MidocoApi\Mis\StructType\CatalogKeyDimensionDTO
     */
    public function setCatalogKeyLocDescr(?string $catalogKeyLocDescr = null): self
    {
        // validation for constraint: string
        if (!is_null($catalogKeyLocDescr) && !is_string($catalogKeyLocDescr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($catalogKeyLocDescr, true), gettype($catalogKeyLocDescr)), __LINE__);
        }
        $this->catalogKeyLocDescr = $catalogKeyLocDescr;
        
        return $this;
    }
}
