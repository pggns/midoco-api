<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ClientPerformanceLogInfoType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ClientPerformanceLogInfoType extends AbstractStructBase
{
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The minDuration1
     * @var int|null
     */
    protected ?int $minDuration1 = null;
    /**
     * The minDuration2
     * @var int|null
     */
    protected ?int $minDuration2 = null;
    /**
     * The maxDuration1
     * @var int|null
     */
    protected ?int $maxDuration1 = null;
    /**
     * The maxDuration2
     * @var int|null
     */
    protected ?int $maxDuration2 = null;
    /**
     * The avgDuration1
     * @var int|null
     */
    protected ?int $avgDuration1 = null;
    /**
     * The avgDuration2
     * @var int|null
     */
    protected ?int $avgDuration2 = null;
    /**
     * The count1
     * @var int|null
     */
    protected ?int $count1 = null;
    /**
     * The count2
     * @var int|null
     */
    protected ?int $count2 = null;
    /**
     * The minDurationPercent
     * @var float|null
     */
    protected ?float $minDurationPercent = null;
    /**
     * The maxDurationPercent
     * @var float|null
     */
    protected ?float $maxDurationPercent = null;
    /**
     * The avgDurationPercent
     * @var float|null
     */
    protected ?float $avgDurationPercent = null;
    /**
     * The countPercent
     * @var float|null
     */
    protected ?float $countPercent = null;
    /**
     * Constructor method for ClientPerformanceLogInfoType
     * @uses ClientPerformanceLogInfoType::setUnitName()
     * @uses ClientPerformanceLogInfoType::setMinDuration1()
     * @uses ClientPerformanceLogInfoType::setMinDuration2()
     * @uses ClientPerformanceLogInfoType::setMaxDuration1()
     * @uses ClientPerformanceLogInfoType::setMaxDuration2()
     * @uses ClientPerformanceLogInfoType::setAvgDuration1()
     * @uses ClientPerformanceLogInfoType::setAvgDuration2()
     * @uses ClientPerformanceLogInfoType::setCount1()
     * @uses ClientPerformanceLogInfoType::setCount2()
     * @uses ClientPerformanceLogInfoType::setMinDurationPercent()
     * @uses ClientPerformanceLogInfoType::setMaxDurationPercent()
     * @uses ClientPerformanceLogInfoType::setAvgDurationPercent()
     * @uses ClientPerformanceLogInfoType::setCountPercent()
     * @param string $unitName
     * @param int $minDuration1
     * @param int $minDuration2
     * @param int $maxDuration1
     * @param int $maxDuration2
     * @param int $avgDuration1
     * @param int $avgDuration2
     * @param int $count1
     * @param int $count2
     * @param float $minDurationPercent
     * @param float $maxDurationPercent
     * @param float $avgDurationPercent
     * @param float $countPercent
     */
    public function __construct(?string $unitName = null, ?int $minDuration1 = null, ?int $minDuration2 = null, ?int $maxDuration1 = null, ?int $maxDuration2 = null, ?int $avgDuration1 = null, ?int $avgDuration2 = null, ?int $count1 = null, ?int $count2 = null, ?float $minDurationPercent = null, ?float $maxDurationPercent = null, ?float $avgDurationPercent = null, ?float $countPercent = null)
    {
        $this
            ->setUnitName($unitName)
            ->setMinDuration1($minDuration1)
            ->setMinDuration2($minDuration2)
            ->setMaxDuration1($maxDuration1)
            ->setMaxDuration2($maxDuration2)
            ->setAvgDuration1($avgDuration1)
            ->setAvgDuration2($avgDuration2)
            ->setCount1($count1)
            ->setCount2($count2)
            ->setMinDurationPercent($minDurationPercent)
            ->setMaxDurationPercent($maxDurationPercent)
            ->setAvgDurationPercent($avgDurationPercent)
            ->setCountPercent($countPercent);
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Orderlists\StructType\ClientPerformanceLogInfoType
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
    /**
     * Get minDuration1 value
     * @return int|null
     */
    public function getMinDuration1(): ?int
    {
        return $this->minDuration1;
    }
    /**
     * Set minDuration1 value
     * @param int $minDuration1
     * @return \Pggns\MidocoApi\Orderlists\StructType\ClientPerformanceLogInfoType
     */
    public function setMinDuration1(?int $minDuration1 = null): self
    {
        // validation for constraint: int
        if (!is_null($minDuration1) && !(is_int($minDuration1) || ctype_digit($minDuration1))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($minDuration1, true), gettype($minDuration1)), __LINE__);
        }
        $this->minDuration1 = $minDuration1;
        
        return $this;
    }
    /**
     * Get minDuration2 value
     * @return int|null
     */
    public function getMinDuration2(): ?int
    {
        return $this->minDuration2;
    }
    /**
     * Set minDuration2 value
     * @param int $minDuration2
     * @return \Pggns\MidocoApi\Orderlists\StructType\ClientPerformanceLogInfoType
     */
    public function setMinDuration2(?int $minDuration2 = null): self
    {
        // validation for constraint: int
        if (!is_null($minDuration2) && !(is_int($minDuration2) || ctype_digit($minDuration2))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($minDuration2, true), gettype($minDuration2)), __LINE__);
        }
        $this->minDuration2 = $minDuration2;
        
        return $this;
    }
    /**
     * Get maxDuration1 value
     * @return int|null
     */
    public function getMaxDuration1(): ?int
    {
        return $this->maxDuration1;
    }
    /**
     * Set maxDuration1 value
     * @param int $maxDuration1
     * @return \Pggns\MidocoApi\Orderlists\StructType\ClientPerformanceLogInfoType
     */
    public function setMaxDuration1(?int $maxDuration1 = null): self
    {
        // validation for constraint: int
        if (!is_null($maxDuration1) && !(is_int($maxDuration1) || ctype_digit($maxDuration1))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxDuration1, true), gettype($maxDuration1)), __LINE__);
        }
        $this->maxDuration1 = $maxDuration1;
        
        return $this;
    }
    /**
     * Get maxDuration2 value
     * @return int|null
     */
    public function getMaxDuration2(): ?int
    {
        return $this->maxDuration2;
    }
    /**
     * Set maxDuration2 value
     * @param int $maxDuration2
     * @return \Pggns\MidocoApi\Orderlists\StructType\ClientPerformanceLogInfoType
     */
    public function setMaxDuration2(?int $maxDuration2 = null): self
    {
        // validation for constraint: int
        if (!is_null($maxDuration2) && !(is_int($maxDuration2) || ctype_digit($maxDuration2))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxDuration2, true), gettype($maxDuration2)), __LINE__);
        }
        $this->maxDuration2 = $maxDuration2;
        
        return $this;
    }
    /**
     * Get avgDuration1 value
     * @return int|null
     */
    public function getAvgDuration1(): ?int
    {
        return $this->avgDuration1;
    }
    /**
     * Set avgDuration1 value
     * @param int $avgDuration1
     * @return \Pggns\MidocoApi\Orderlists\StructType\ClientPerformanceLogInfoType
     */
    public function setAvgDuration1(?int $avgDuration1 = null): self
    {
        // validation for constraint: int
        if (!is_null($avgDuration1) && !(is_int($avgDuration1) || ctype_digit($avgDuration1))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($avgDuration1, true), gettype($avgDuration1)), __LINE__);
        }
        $this->avgDuration1 = $avgDuration1;
        
        return $this;
    }
    /**
     * Get avgDuration2 value
     * @return int|null
     */
    public function getAvgDuration2(): ?int
    {
        return $this->avgDuration2;
    }
    /**
     * Set avgDuration2 value
     * @param int $avgDuration2
     * @return \Pggns\MidocoApi\Orderlists\StructType\ClientPerformanceLogInfoType
     */
    public function setAvgDuration2(?int $avgDuration2 = null): self
    {
        // validation for constraint: int
        if (!is_null($avgDuration2) && !(is_int($avgDuration2) || ctype_digit($avgDuration2))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($avgDuration2, true), gettype($avgDuration2)), __LINE__);
        }
        $this->avgDuration2 = $avgDuration2;
        
        return $this;
    }
    /**
     * Get count1 value
     * @return int|null
     */
    public function getCount1(): ?int
    {
        return $this->count1;
    }
    /**
     * Set count1 value
     * @param int $count1
     * @return \Pggns\MidocoApi\Orderlists\StructType\ClientPerformanceLogInfoType
     */
    public function setCount1(?int $count1 = null): self
    {
        // validation for constraint: int
        if (!is_null($count1) && !(is_int($count1) || ctype_digit($count1))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($count1, true), gettype($count1)), __LINE__);
        }
        $this->count1 = $count1;
        
        return $this;
    }
    /**
     * Get count2 value
     * @return int|null
     */
    public function getCount2(): ?int
    {
        return $this->count2;
    }
    /**
     * Set count2 value
     * @param int $count2
     * @return \Pggns\MidocoApi\Orderlists\StructType\ClientPerformanceLogInfoType
     */
    public function setCount2(?int $count2 = null): self
    {
        // validation for constraint: int
        if (!is_null($count2) && !(is_int($count2) || ctype_digit($count2))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($count2, true), gettype($count2)), __LINE__);
        }
        $this->count2 = $count2;
        
        return $this;
    }
    /**
     * Get minDurationPercent value
     * @return float|null
     */
    public function getMinDurationPercent(): ?float
    {
        return $this->minDurationPercent;
    }
    /**
     * Set minDurationPercent value
     * @param float $minDurationPercent
     * @return \Pggns\MidocoApi\Orderlists\StructType\ClientPerformanceLogInfoType
     */
    public function setMinDurationPercent(?float $minDurationPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($minDurationPercent) && !(is_float($minDurationPercent) || is_numeric($minDurationPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($minDurationPercent, true), gettype($minDurationPercent)), __LINE__);
        }
        $this->minDurationPercent = $minDurationPercent;
        
        return $this;
    }
    /**
     * Get maxDurationPercent value
     * @return float|null
     */
    public function getMaxDurationPercent(): ?float
    {
        return $this->maxDurationPercent;
    }
    /**
     * Set maxDurationPercent value
     * @param float $maxDurationPercent
     * @return \Pggns\MidocoApi\Orderlists\StructType\ClientPerformanceLogInfoType
     */
    public function setMaxDurationPercent(?float $maxDurationPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($maxDurationPercent) && !(is_float($maxDurationPercent) || is_numeric($maxDurationPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($maxDurationPercent, true), gettype($maxDurationPercent)), __LINE__);
        }
        $this->maxDurationPercent = $maxDurationPercent;
        
        return $this;
    }
    /**
     * Get avgDurationPercent value
     * @return float|null
     */
    public function getAvgDurationPercent(): ?float
    {
        return $this->avgDurationPercent;
    }
    /**
     * Set avgDurationPercent value
     * @param float $avgDurationPercent
     * @return \Pggns\MidocoApi\Orderlists\StructType\ClientPerformanceLogInfoType
     */
    public function setAvgDurationPercent(?float $avgDurationPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($avgDurationPercent) && !(is_float($avgDurationPercent) || is_numeric($avgDurationPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($avgDurationPercent, true), gettype($avgDurationPercent)), __LINE__);
        }
        $this->avgDurationPercent = $avgDurationPercent;
        
        return $this;
    }
    /**
     * Get countPercent value
     * @return float|null
     */
    public function getCountPercent(): ?float
    {
        return $this->countPercent;
    }
    /**
     * Set countPercent value
     * @param float $countPercent
     * @return \Pggns\MidocoApi\Orderlists\StructType\ClientPerformanceLogInfoType
     */
    public function setCountPercent(?float $countPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($countPercent) && !(is_float($countPercent) || is_numeric($countPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($countPercent, true), gettype($countPercent)), __LINE__);
        }
        $this->countPercent = $countPercent;
        
        return $this;
    }
}
