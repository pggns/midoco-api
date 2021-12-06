<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DateDimensionDTO StructType
 * @subpackage Structs
 */
class DateDimensionDTO extends AbstractStructBase
{
    /**
     * The databaseDate
     * @var string|null
     */
    protected ?string $databaseDate = null;
    /**
     * The dateId
     * @var int|null
     */
    protected ?int $dateId = null;
    /**
     * The dayNoInMonth
     * @var int|null
     */
    protected ?int $dayNoInMonth = null;
    /**
     * The dayOfWeek
     * @var string|null
     */
    protected ?string $dayOfWeek = null;
    /**
     * The month
     * @var int|null
     */
    protected ?int $month = null;
    /**
     * The quarter
     * @var int|null
     */
    protected ?int $quarter = null;
    /**
     * The weekNoInYear
     * @var int|null
     */
    protected ?int $weekNoInYear = null;
    /**
     * The weekend
     * @var bool|null
     */
    protected ?bool $weekend = null;
    /**
     * The year
     * @var int|null
     */
    protected ?int $year = null;
    /**
     * Constructor method for DateDimensionDTO
     * @uses DateDimensionDTO::setDatabaseDate()
     * @uses DateDimensionDTO::setDateId()
     * @uses DateDimensionDTO::setDayNoInMonth()
     * @uses DateDimensionDTO::setDayOfWeek()
     * @uses DateDimensionDTO::setMonth()
     * @uses DateDimensionDTO::setQuarter()
     * @uses DateDimensionDTO::setWeekNoInYear()
     * @uses DateDimensionDTO::setWeekend()
     * @uses DateDimensionDTO::setYear()
     * @param string $databaseDate
     * @param int $dateId
     * @param int $dayNoInMonth
     * @param string $dayOfWeek
     * @param int $month
     * @param int $quarter
     * @param int $weekNoInYear
     * @param bool $weekend
     * @param int $year
     */
    public function __construct(?string $databaseDate = null, ?int $dateId = null, ?int $dayNoInMonth = null, ?string $dayOfWeek = null, ?int $month = null, ?int $quarter = null, ?int $weekNoInYear = null, ?bool $weekend = null, ?int $year = null)
    {
        $this
            ->setDatabaseDate($databaseDate)
            ->setDateId($dateId)
            ->setDayNoInMonth($dayNoInMonth)
            ->setDayOfWeek($dayOfWeek)
            ->setMonth($month)
            ->setQuarter($quarter)
            ->setWeekNoInYear($weekNoInYear)
            ->setWeekend($weekend)
            ->setYear($year);
    }
    /**
     * Get databaseDate value
     * @return string|null
     */
    public function getDatabaseDate(): ?string
    {
        return $this->databaseDate;
    }
    /**
     * Set databaseDate value
     * @param string $databaseDate
     * @return \Pggns\MidocoApi\Mis\StructType\DateDimensionDTO
     */
    public function setDatabaseDate(?string $databaseDate = null): self
    {
        // validation for constraint: string
        if (!is_null($databaseDate) && !is_string($databaseDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($databaseDate, true), gettype($databaseDate)), __LINE__);
        }
        $this->databaseDate = $databaseDate;
        
        return $this;
    }
    /**
     * Get dateId value
     * @return int|null
     */
    public function getDateId(): ?int
    {
        return $this->dateId;
    }
    /**
     * Set dateId value
     * @param int $dateId
     * @return \Pggns\MidocoApi\Mis\StructType\DateDimensionDTO
     */
    public function setDateId(?int $dateId = null): self
    {
        // validation for constraint: int
        if (!is_null($dateId) && !(is_int($dateId) || ctype_digit($dateId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($dateId, true), gettype($dateId)), __LINE__);
        }
        $this->dateId = $dateId;
        
        return $this;
    }
    /**
     * Get dayNoInMonth value
     * @return int|null
     */
    public function getDayNoInMonth(): ?int
    {
        return $this->dayNoInMonth;
    }
    /**
     * Set dayNoInMonth value
     * @param int $dayNoInMonth
     * @return \Pggns\MidocoApi\Mis\StructType\DateDimensionDTO
     */
    public function setDayNoInMonth(?int $dayNoInMonth = null): self
    {
        // validation for constraint: int
        if (!is_null($dayNoInMonth) && !(is_int($dayNoInMonth) || ctype_digit($dayNoInMonth))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($dayNoInMonth, true), gettype($dayNoInMonth)), __LINE__);
        }
        $this->dayNoInMonth = $dayNoInMonth;
        
        return $this;
    }
    /**
     * Get dayOfWeek value
     * @return string|null
     */
    public function getDayOfWeek(): ?string
    {
        return $this->dayOfWeek;
    }
    /**
     * Set dayOfWeek value
     * @param string $dayOfWeek
     * @return \Pggns\MidocoApi\Mis\StructType\DateDimensionDTO
     */
    public function setDayOfWeek(?string $dayOfWeek = null): self
    {
        // validation for constraint: string
        if (!is_null($dayOfWeek) && !is_string($dayOfWeek)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dayOfWeek, true), gettype($dayOfWeek)), __LINE__);
        }
        $this->dayOfWeek = $dayOfWeek;
        
        return $this;
    }
    /**
     * Get month value
     * @return int|null
     */
    public function getMonth(): ?int
    {
        return $this->month;
    }
    /**
     * Set month value
     * @param int $month
     * @return \Pggns\MidocoApi\Mis\StructType\DateDimensionDTO
     */
    public function setMonth(?int $month = null): self
    {
        // validation for constraint: int
        if (!is_null($month) && !(is_int($month) || ctype_digit($month))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($month, true), gettype($month)), __LINE__);
        }
        $this->month = $month;
        
        return $this;
    }
    /**
     * Get quarter value
     * @return int|null
     */
    public function getQuarter(): ?int
    {
        return $this->quarter;
    }
    /**
     * Set quarter value
     * @param int $quarter
     * @return \Pggns\MidocoApi\Mis\StructType\DateDimensionDTO
     */
    public function setQuarter(?int $quarter = null): self
    {
        // validation for constraint: int
        if (!is_null($quarter) && !(is_int($quarter) || ctype_digit($quarter))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($quarter, true), gettype($quarter)), __LINE__);
        }
        $this->quarter = $quarter;
        
        return $this;
    }
    /**
     * Get weekNoInYear value
     * @return int|null
     */
    public function getWeekNoInYear(): ?int
    {
        return $this->weekNoInYear;
    }
    /**
     * Set weekNoInYear value
     * @param int $weekNoInYear
     * @return \Pggns\MidocoApi\Mis\StructType\DateDimensionDTO
     */
    public function setWeekNoInYear(?int $weekNoInYear = null): self
    {
        // validation for constraint: int
        if (!is_null($weekNoInYear) && !(is_int($weekNoInYear) || ctype_digit($weekNoInYear))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($weekNoInYear, true), gettype($weekNoInYear)), __LINE__);
        }
        $this->weekNoInYear = $weekNoInYear;
        
        return $this;
    }
    /**
     * Get weekend value
     * @return bool|null
     */
    public function getWeekend(): ?bool
    {
        return $this->weekend;
    }
    /**
     * Set weekend value
     * @param bool $weekend
     * @return \Pggns\MidocoApi\Mis\StructType\DateDimensionDTO
     */
    public function setWeekend(?bool $weekend = null): self
    {
        // validation for constraint: boolean
        if (!is_null($weekend) && !is_bool($weekend)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($weekend, true), gettype($weekend)), __LINE__);
        }
        $this->weekend = $weekend;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Mis\StructType\DateDimensionDTO
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
