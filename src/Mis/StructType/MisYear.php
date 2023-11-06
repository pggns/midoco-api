<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MisYear StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MisYear extends AbstractStructBase
{
    /**
     * The year
     * @var int|null
     */
    protected ?int $year = null;
    /**
     * Constructor method for MisYear
     * @uses MisYear::setYear()
     * @param int $year
     */
    public function __construct(?int $year = null)
    {
        $this
            ->setYear($year);
    }
    /**
     * Get year value
     * @return int|null
     */
    public function getYear(): ?int
    {
        return $this->year;
    }
    /**
     * Set year value
     * @param int $year
     * @return \Pggns\MidocoApi\Mis\StructType\MisYear
     */
    public function setYear(?int $year = null): self
    {
        // validation for constraint: int
        if (!is_null($year) && !(is_int($year) || ctype_digit($year))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($year, true), gettype($year)), __LINE__);
        }
        $this->year = $year;
        
        return $this;
    }
}
