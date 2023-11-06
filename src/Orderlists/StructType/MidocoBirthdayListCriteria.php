<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoBirthdayListCriteria StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoBirthdayListCriteria extends AbstractStructBase
{
    /**
     * The orgUnits
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $orgUnits = null;
    /**
     * The creationUserId
     * @var int|null
     */
    protected ?int $creationUserId = null;
    /**
     * The dayStart
     * @var int|null
     */
    protected ?int $dayStart = null;
    /**
     * The dayEnd
     * @var int|null
     */
    protected ?int $dayEnd = null;
    /**
     * The monthStart
     * @var int|null
     */
    protected ?int $monthStart = null;
    /**
     * The monthEnd
     * @var int|null
     */
    protected ?int $monthEnd = null;
    /**
     * The yearStart
     * @var int|null
     */
    protected ?int $yearStart = null;
    /**
     * The yearEnd
     * @var int|null
     */
    protected ?int $yearEnd = null;
    /**
     * Constructor method for MidocoBirthdayListCriteria
     * @uses MidocoBirthdayListCriteria::setOrgUnits()
     * @uses MidocoBirthdayListCriteria::setCreationUserId()
     * @uses MidocoBirthdayListCriteria::setDayStart()
     * @uses MidocoBirthdayListCriteria::setDayEnd()
     * @uses MidocoBirthdayListCriteria::setMonthStart()
     * @uses MidocoBirthdayListCriteria::setMonthEnd()
     * @uses MidocoBirthdayListCriteria::setYearStart()
     * @uses MidocoBirthdayListCriteria::setYearEnd()
     * @param string[] $orgUnits
     * @param int $creationUserId
     * @param int $dayStart
     * @param int $dayEnd
     * @param int $monthStart
     * @param int $monthEnd
     * @param int $yearStart
     * @param int $yearEnd
     */
    public function __construct(?array $orgUnits = null, ?int $creationUserId = null, ?int $dayStart = null, ?int $dayEnd = null, ?int $monthStart = null, ?int $monthEnd = null, ?int $yearStart = null, ?int $yearEnd = null)
    {
        $this
            ->setOrgUnits($orgUnits)
            ->setCreationUserId($creationUserId)
            ->setDayStart($dayStart)
            ->setDayEnd($dayEnd)
            ->setMonthStart($monthStart)
            ->setMonthEnd($monthEnd)
            ->setYearStart($yearStart)
            ->setYearEnd($yearEnd);
    }
    /**
     * Get orgUnits value
     * @return string[]
     */
    public function getOrgUnits(): ?array
    {
        return $this->orgUnits;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setOrgUnits method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrgUnits method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOrgUnitsForArrayConstraintFromSetOrgUnits(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoBirthdayListCriteriaOrgUnitsItem) {
            // validation for constraint: itemType
            if (!is_string($midocoBirthdayListCriteriaOrgUnitsItem)) {
                $invalidValues[] = is_object($midocoBirthdayListCriteriaOrgUnitsItem) ? get_class($midocoBirthdayListCriteriaOrgUnitsItem) : sprintf('%s(%s)', gettype($midocoBirthdayListCriteriaOrgUnitsItem), var_export($midocoBirthdayListCriteriaOrgUnitsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The orgUnits property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set orgUnits value
     * @throws InvalidArgumentException
     * @param string[] $orgUnits
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBirthdayListCriteria
     */
    public function setOrgUnits(?array $orgUnits = null): self
    {
        // validation for constraint: array
        if ('' !== ($orgUnitsArrayErrorMessage = self::validateOrgUnitsForArrayConstraintFromSetOrgUnits($orgUnits))) {
            throw new InvalidArgumentException($orgUnitsArrayErrorMessage, __LINE__);
        }
        $this->orgUnits = $orgUnits;
        
        return $this;
    }
    /**
     * Add item to orgUnits value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBirthdayListCriteria
     */
    public function addToOrgUnits(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The orgUnits property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->orgUnits[] = $item;
        
        return $this;
    }
    /**
     * Get creationUserId value
     * @return int|null
     */
    public function getCreationUserId(): ?int
    {
        return $this->creationUserId;
    }
    /**
     * Set creationUserId value
     * @param int $creationUserId
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBirthdayListCriteria
     */
    public function setCreationUserId(?int $creationUserId = null): self
    {
        // validation for constraint: int
        if (!is_null($creationUserId) && !(is_int($creationUserId) || ctype_digit($creationUserId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($creationUserId, true), gettype($creationUserId)), __LINE__);
        }
        $this->creationUserId = $creationUserId;
        
        return $this;
    }
    /**
     * Get dayStart value
     * @return int|null
     */
    public function getDayStart(): ?int
    {
        return $this->dayStart;
    }
    /**
     * Set dayStart value
     * @param int $dayStart
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBirthdayListCriteria
     */
    public function setDayStart(?int $dayStart = null): self
    {
        // validation for constraint: int
        if (!is_null($dayStart) && !(is_int($dayStart) || ctype_digit($dayStart))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($dayStart, true), gettype($dayStart)), __LINE__);
        }
        $this->dayStart = $dayStart;
        
        return $this;
    }
    /**
     * Get dayEnd value
     * @return int|null
     */
    public function getDayEnd(): ?int
    {
        return $this->dayEnd;
    }
    /**
     * Set dayEnd value
     * @param int $dayEnd
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBirthdayListCriteria
     */
    public function setDayEnd(?int $dayEnd = null): self
    {
        // validation for constraint: int
        if (!is_null($dayEnd) && !(is_int($dayEnd) || ctype_digit($dayEnd))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($dayEnd, true), gettype($dayEnd)), __LINE__);
        }
        $this->dayEnd = $dayEnd;
        
        return $this;
    }
    /**
     * Get monthStart value
     * @return int|null
     */
    public function getMonthStart(): ?int
    {
        return $this->monthStart;
    }
    /**
     * Set monthStart value
     * @param int $monthStart
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBirthdayListCriteria
     */
    public function setMonthStart(?int $monthStart = null): self
    {
        // validation for constraint: int
        if (!is_null($monthStart) && !(is_int($monthStart) || ctype_digit($monthStart))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($monthStart, true), gettype($monthStart)), __LINE__);
        }
        $this->monthStart = $monthStart;
        
        return $this;
    }
    /**
     * Get monthEnd value
     * @return int|null
     */
    public function getMonthEnd(): ?int
    {
        return $this->monthEnd;
    }
    /**
     * Set monthEnd value
     * @param int $monthEnd
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBirthdayListCriteria
     */
    public function setMonthEnd(?int $monthEnd = null): self
    {
        // validation for constraint: int
        if (!is_null($monthEnd) && !(is_int($monthEnd) || ctype_digit($monthEnd))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($monthEnd, true), gettype($monthEnd)), __LINE__);
        }
        $this->monthEnd = $monthEnd;
        
        return $this;
    }
    /**
     * Get yearStart value
     * @return int|null
     */
    public function getYearStart(): ?int
    {
        return $this->yearStart;
    }
    /**
     * Set yearStart value
     * @param int $yearStart
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBirthdayListCriteria
     */
    public function setYearStart(?int $yearStart = null): self
    {
        // validation for constraint: int
        if (!is_null($yearStart) && !(is_int($yearStart) || ctype_digit($yearStart))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($yearStart, true), gettype($yearStart)), __LINE__);
        }
        $this->yearStart = $yearStart;
        
        return $this;
    }
    /**
     * Get yearEnd value
     * @return int|null
     */
    public function getYearEnd(): ?int
    {
        return $this->yearEnd;
    }
    /**
     * Set yearEnd value
     * @param int $yearEnd
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBirthdayListCriteria
     */
    public function setYearEnd(?int $yearEnd = null): self
    {
        // validation for constraint: int
        if (!is_null($yearEnd) && !(is_int($yearEnd) || ctype_digit($yearEnd))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($yearEnd, true), gettype($yearEnd)), __LINE__);
        }
        $this->yearEnd = $yearEnd;
        
        return $this;
    }
}
