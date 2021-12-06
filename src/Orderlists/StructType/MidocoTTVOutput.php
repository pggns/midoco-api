<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoTTVOutput StructType
 * @subpackage Structs
 */
class MidocoTTVOutput extends AbstractStructBase
{
    /**
     * The productType
     * @var string|null
     */
    protected ?string $productType = null;
    /**
     * The personCount
     * @var int|null
     */
    protected ?int $personCount = null;
    /**
     * The ttv
     * @var float|null
     */
    protected ?float $ttv = null;
    /**
     * Constructor method for MidocoTTVOutput
     * @uses MidocoTTVOutput::setProductType()
     * @uses MidocoTTVOutput::setPersonCount()
     * @uses MidocoTTVOutput::setTtv()
     * @param string $productType
     * @param int $personCount
     * @param float $ttv
     */
    public function __construct(?string $productType = null, ?int $personCount = null, ?float $ttv = null)
    {
        $this
            ->setProductType($productType)
            ->setPersonCount($personCount)
            ->setTtv($ttv);
    }
    /**
     * Get productType value
     * @return string|null
     */
    public function getProductType(): ?string
    {
        return $this->productType;
    }
    /**
     * Set productType value
     * @param string $productType
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTTVOutput
     */
    public function setProductType(?string $productType = null): self
    {
        // validation for constraint: string
        if (!is_null($productType) && !is_string($productType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productType, true), gettype($productType)), __LINE__);
        }
        $this->productType = $productType;
        
        return $this;
    }
    /**
     * Get personCount value
     * @return int|null
     */
    public function getPersonCount(): ?int
    {
        return $this->personCount;
    }
    /**
     * Set personCount value
     * @param int $personCount
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTTVOutput
     */
    public function setPersonCount(?int $personCount = null): self
    {
        // validation for constraint: int
        if (!is_null($personCount) && !(is_int($personCount) || ctype_digit($personCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($personCount, true), gettype($personCount)), __LINE__);
        }
        $this->personCount = $personCount;
        
        return $this;
    }
    /**
     * Get ttv value
     * @return float|null
     */
    public function getTtv(): ?float
    {
        return $this->ttv;
    }
    /**
     * Set ttv value
     * @param float $ttv
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTTVOutput
     */
    public function setTtv(?float $ttv = null): self
    {
        // validation for constraint: float
        if (!is_null($ttv) && !(is_float($ttv) || is_numeric($ttv))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($ttv, true), gettype($ttv)), __LINE__);
        }
        $this->ttv = $ttv;
        
        return $this;
    }
}
