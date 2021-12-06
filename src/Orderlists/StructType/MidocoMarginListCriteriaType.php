<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoMarginListCriteriaType StructType
 * @subpackage Structs
 */
class MidocoMarginListCriteriaType extends AbstractStructBase
{
    /**
     * The MidocoMarginInterval
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoMarginIntervalType[]
     */
    protected array $MidocoMarginInterval;
    /**
     * The orgUnits
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $orgUnits = null;
    /**
     * The creationDateStart
     * @var string|null
     */
    protected ?string $creationDateStart = null;
    /**
     * The creationDateEnd
     * @var string|null
     */
    protected ?string $creationDateEnd = null;
    /**
     * The travelDateStart
     * @var string|null
     */
    protected ?string $travelDateStart = null;
    /**
     * The travelDateEnd
     * @var string|null
     */
    protected ?string $travelDateEnd = null;
    /**
     * The includeAgencyCommission
     * @var bool|null
     */
    protected ?bool $includeAgencyCommission = null;
    /**
     * The includeMediatorCommission
     * @var bool|null
     */
    protected ?bool $includeMediatorCommission = null;
    /**
     * Constructor method for MidocoMarginListCriteriaType
     * @uses MidocoMarginListCriteriaType::setMidocoMarginInterval()
     * @uses MidocoMarginListCriteriaType::setOrgUnits()
     * @uses MidocoMarginListCriteriaType::setCreationDateStart()
     * @uses MidocoMarginListCriteriaType::setCreationDateEnd()
     * @uses MidocoMarginListCriteriaType::setTravelDateStart()
     * @uses MidocoMarginListCriteriaType::setTravelDateEnd()
     * @uses MidocoMarginListCriteriaType::setIncludeAgencyCommission()
     * @uses MidocoMarginListCriteriaType::setIncludeMediatorCommission()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoMarginIntervalType[] $midocoMarginInterval
     * @param string[] $orgUnits
     * @param string $creationDateStart
     * @param string $creationDateEnd
     * @param string $travelDateStart
     * @param string $travelDateEnd
     * @param bool $includeAgencyCommission
     * @param bool $includeMediatorCommission
     */
    public function __construct(array $midocoMarginInterval, ?array $orgUnits = null, ?string $creationDateStart = null, ?string $creationDateEnd = null, ?string $travelDateStart = null, ?string $travelDateEnd = null, ?bool $includeAgencyCommission = null, ?bool $includeMediatorCommission = null)
    {
        $this
            ->setMidocoMarginInterval($midocoMarginInterval)
            ->setOrgUnits($orgUnits)
            ->setCreationDateStart($creationDateStart)
            ->setCreationDateEnd($creationDateEnd)
            ->setTravelDateStart($travelDateStart)
            ->setTravelDateEnd($travelDateEnd)
            ->setIncludeAgencyCommission($includeAgencyCommission)
            ->setIncludeMediatorCommission($includeMediatorCommission);
    }
    /**
     * Get MidocoMarginInterval value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoMarginIntervalType[]
     */
    public function getMidocoMarginInterval(): array
    {
        return $this->MidocoMarginInterval;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoMarginInterval method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMarginInterval method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMarginIntervalForArrayConstraintsFromSetMidocoMarginInterval(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoMarginListCriteriaTypeMidocoMarginIntervalItem) {
            // validation for constraint: itemType
            if (!$midocoMarginListCriteriaTypeMidocoMarginIntervalItem instanceof \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoMarginIntervalType) {
                $invalidValues[] = is_object($midocoMarginListCriteriaTypeMidocoMarginIntervalItem) ? get_class($midocoMarginListCriteriaTypeMidocoMarginIntervalItem) : sprintf('%s(%s)', gettype($midocoMarginListCriteriaTypeMidocoMarginIntervalItem), var_export($midocoMarginListCriteriaTypeMidocoMarginIntervalItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMarginInterval property can only contain items of type \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoMarginIntervalType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMarginInterval value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoMarginIntervalType[] $midocoMarginInterval
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoMarginListCriteriaType
     */
    public function setMidocoMarginInterval(array $midocoMarginInterval): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMarginIntervalArrayErrorMessage = self::validateMidocoMarginIntervalForArrayConstraintsFromSetMidocoMarginInterval($midocoMarginInterval))) {
            throw new InvalidArgumentException($midocoMarginIntervalArrayErrorMessage, __LINE__);
        }
        $this->MidocoMarginInterval = $midocoMarginInterval;
        
        return $this;
    }
    /**
     * Add item to MidocoMarginInterval value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoMarginIntervalType $item
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoMarginListCriteriaType
     */
    public function addToMidocoMarginInterval(\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoMarginIntervalType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoMarginIntervalType) {
            throw new InvalidArgumentException(sprintf('The MidocoMarginInterval property can only contain items of type \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoMarginIntervalType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMarginInterval[] = $item;
        
        return $this;
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
     * This method is responsible for validating the values passed to the setOrgUnits method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrgUnits method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOrgUnitsForArrayConstraintsFromSetOrgUnits(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoMarginListCriteriaTypeOrgUnitsItem) {
            // validation for constraint: itemType
            if (!is_string($midocoMarginListCriteriaTypeOrgUnitsItem)) {
                $invalidValues[] = is_object($midocoMarginListCriteriaTypeOrgUnitsItem) ? get_class($midocoMarginListCriteriaTypeOrgUnitsItem) : sprintf('%s(%s)', gettype($midocoMarginListCriteriaTypeOrgUnitsItem), var_export($midocoMarginListCriteriaTypeOrgUnitsItem, true));
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
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoMarginListCriteriaType
     */
    public function setOrgUnits(?array $orgUnits = null): self
    {
        // validation for constraint: array
        if ('' !== ($orgUnitsArrayErrorMessage = self::validateOrgUnitsForArrayConstraintsFromSetOrgUnits($orgUnits))) {
            throw new InvalidArgumentException($orgUnitsArrayErrorMessage, __LINE__);
        }
        $this->orgUnits = $orgUnits;
        
        return $this;
    }
    /**
     * Add item to orgUnits value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoMarginListCriteriaType
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
     * Get creationDateStart value
     * @return string|null
     */
    public function getCreationDateStart(): ?string
    {
        return $this->creationDateStart;
    }
    /**
     * Set creationDateStart value
     * @param string $creationDateStart
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoMarginListCriteriaType
     */
    public function setCreationDateStart(?string $creationDateStart = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDateStart) && !is_string($creationDateStart)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDateStart, true), gettype($creationDateStart)), __LINE__);
        }
        $this->creationDateStart = $creationDateStart;
        
        return $this;
    }
    /**
     * Get creationDateEnd value
     * @return string|null
     */
    public function getCreationDateEnd(): ?string
    {
        return $this->creationDateEnd;
    }
    /**
     * Set creationDateEnd value
     * @param string $creationDateEnd
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoMarginListCriteriaType
     */
    public function setCreationDateEnd(?string $creationDateEnd = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDateEnd) && !is_string($creationDateEnd)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDateEnd, true), gettype($creationDateEnd)), __LINE__);
        }
        $this->creationDateEnd = $creationDateEnd;
        
        return $this;
    }
    /**
     * Get travelDateStart value
     * @return string|null
     */
    public function getTravelDateStart(): ?string
    {
        return $this->travelDateStart;
    }
    /**
     * Set travelDateStart value
     * @param string $travelDateStart
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoMarginListCriteriaType
     */
    public function setTravelDateStart(?string $travelDateStart = null): self
    {
        // validation for constraint: string
        if (!is_null($travelDateStart) && !is_string($travelDateStart)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelDateStart, true), gettype($travelDateStart)), __LINE__);
        }
        $this->travelDateStart = $travelDateStart;
        
        return $this;
    }
    /**
     * Get travelDateEnd value
     * @return string|null
     */
    public function getTravelDateEnd(): ?string
    {
        return $this->travelDateEnd;
    }
    /**
     * Set travelDateEnd value
     * @param string $travelDateEnd
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoMarginListCriteriaType
     */
    public function setTravelDateEnd(?string $travelDateEnd = null): self
    {
        // validation for constraint: string
        if (!is_null($travelDateEnd) && !is_string($travelDateEnd)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelDateEnd, true), gettype($travelDateEnd)), __LINE__);
        }
        $this->travelDateEnd = $travelDateEnd;
        
        return $this;
    }
    /**
     * Get includeAgencyCommission value
     * @return bool|null
     */
    public function getIncludeAgencyCommission(): ?bool
    {
        return $this->includeAgencyCommission;
    }
    /**
     * Set includeAgencyCommission value
     * @param bool $includeAgencyCommission
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoMarginListCriteriaType
     */
    public function setIncludeAgencyCommission(?bool $includeAgencyCommission = null): self
    {
        // validation for constraint: boolean
        if (!is_null($includeAgencyCommission) && !is_bool($includeAgencyCommission)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeAgencyCommission, true), gettype($includeAgencyCommission)), __LINE__);
        }
        $this->includeAgencyCommission = $includeAgencyCommission;
        
        return $this;
    }
    /**
     * Get includeMediatorCommission value
     * @return bool|null
     */
    public function getIncludeMediatorCommission(): ?bool
    {
        return $this->includeMediatorCommission;
    }
    /**
     * Set includeMediatorCommission value
     * @param bool $includeMediatorCommission
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoMarginListCriteriaType
     */
    public function setIncludeMediatorCommission(?bool $includeMediatorCommission = null): self
    {
        // validation for constraint: boolean
        if (!is_null($includeMediatorCommission) && !is_bool($includeMediatorCommission)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeMediatorCommission, true), gettype($includeMediatorCommission)), __LINE__);
        }
        $this->includeMediatorCommission = $includeMediatorCommission;
        
        return $this;
    }
}
