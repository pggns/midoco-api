<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SavedTravelDateDimDTO StructType
 * @subpackage Structs
 */
class SavedTravelDateDimDTO extends AbstractStructBase
{
    /**
     * The databaseDate
     * @var string|null
     */
    protected ?string $databaseDate = null;
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
     * The travelDateId
     * @var int|null
     */
    protected ?int $travelDateId = null;
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
     * Constructor method for SavedTravelDateDimDTO
     * @uses SavedTravelDateDimDTO::setDatabaseDate()
     * @uses SavedTravelDateDimDTO::setDayNoInMonth()
     * @uses SavedTravelDateDimDTO::setDayOfWeek()
     * @uses SavedTravelDateDimDTO::setMonth()
     * @uses SavedTravelDateDimDTO::setQuarter()
     * @uses SavedTravelDateDimDTO::setTravelDateId()
     * @uses SavedTravelDateDimDTO::setWeekNoInYear()
     * @uses SavedTravelDateDimDTO::setWeekend()
     * @uses SavedTravelDateDimDTO::setYear()
     * @param string $databaseDate
     * @param int $dayNoInMonth
     * @param string $dayOfWeek
     * @param int $month
     * @param int $quarter
     * @param int $travelDateId
     * @param int $weekNoInYear
     * @param bool $weekend
     * @param int $year
     */
    public function __construct(?string $databaseDate = null, ?int $dayNoInMonth = null, ?string $dayOfWeek = null, ?int $month = null, ?int $quarter = null, ?int $travelDateId = null, ?int $weekNoInYear = null, ?bool $weekend = null, ?int $year = null)
    {
        $this
            ->setDatabaseDate($databaseDate)
            ->setDayNoInMonth($dayNoInMonth)
            ->setDayOfWeek($dayOfWeek)
            ->setMonth($month)
            ->setQuarter($quarter)
            ->setTravelDateId($travelDateId)
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
     * @return \Pggns\MidocoApi\Mis\StructType\SavedTravelDateDimDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\SavedTravelDateDimDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\SavedTravelDateDimDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\SavedTravelDateDimDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\SavedTravelDateDimDTO
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
     * Get travelDateId value
     * @return int|null
     */
    public function getTravelDateId(): ?int
    {
        return $this->travelDateId;
    }
    /**
     * Set travelDateId value
     * @param int $travelDateId
     * @return \Pggns\MidocoApi\Mis\StructType\SavedTravelDateDimDTO
     */
    public function setTravelDateId(?int $travelDateId = null): self
    {
        // validation for constraint: int
        if (!is_null($travelDateId) && !(is_int($travelDateId) || ctype_digit($travelDateId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($travelDateId, true), gettype($travelDateId)), __LINE__);
        }
        $this->travelDateId = $travelDateId;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\SavedTravelDateDimDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\SavedTravelDateDimDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\SavedTravelDateDimDTO
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
