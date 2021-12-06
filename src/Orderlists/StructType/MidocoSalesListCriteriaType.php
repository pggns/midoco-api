<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoSalesListCriteriaType StructType
 * @subpackage Structs
 */
class MidocoSalesListCriteriaType extends AbstractStructBase
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
     * The travelStartDate
     * @var string|null
     */
    protected ?string $travelStartDate = null;
    /**
     * The travelEndDate
     * @var string|null
     */
    protected ?string $travelEndDate = null;
    /**
     * The creationStartDate
     * @var string|null
     */
    protected ?string $creationStartDate = null;
    /**
     * The creationEndDate
     * @var string|null
     */
    protected ?string $creationEndDate = null;
    /**
     * The priceStartDate
     * @var string|null
     */
    protected ?string $priceStartDate = null;
    /**
     * The priceEndDate
     * @var string|null
     */
    protected ?string $priceEndDate = null;
    /**
     * The employee
     * @var int|null
     */
    protected ?int $employee = null;
    /**
     * The listType
     * @var int|null
     */
    protected ?int $listType = null;
    /**
     * Constructor method for MidocoSalesListCriteriaType
     * @uses MidocoSalesListCriteriaType::setOrgUnits()
     * @uses MidocoSalesListCriteriaType::setTravelStartDate()
     * @uses MidocoSalesListCriteriaType::setTravelEndDate()
     * @uses MidocoSalesListCriteriaType::setCreationStartDate()
     * @uses MidocoSalesListCriteriaType::setCreationEndDate()
     * @uses MidocoSalesListCriteriaType::setPriceStartDate()
     * @uses MidocoSalesListCriteriaType::setPriceEndDate()
     * @uses MidocoSalesListCriteriaType::setEmployee()
     * @uses MidocoSalesListCriteriaType::setListType()
     * @param string[] $orgUnits
     * @param string $travelStartDate
     * @param string $travelEndDate
     * @param string $creationStartDate
     * @param string $creationEndDate
     * @param string $priceStartDate
     * @param string $priceEndDate
     * @param int $employee
     * @param int $listType
     */
    public function __construct(?array $orgUnits = null, ?string $travelStartDate = null, ?string $travelEndDate = null, ?string $creationStartDate = null, ?string $creationEndDate = null, ?string $priceStartDate = null, ?string $priceEndDate = null, ?int $employee = null, ?int $listType = null)
    {
        $this
            ->setOrgUnits($orgUnits)
            ->setTravelStartDate($travelStartDate)
            ->setTravelEndDate($travelEndDate)
            ->setCreationStartDate($creationStartDate)
            ->setCreationEndDate($creationEndDate)
            ->setPriceStartDate($priceStartDate)
            ->setPriceEndDate($priceEndDate)
            ->setEmployee($employee)
            ->setListType($listType);
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
        foreach ($values as $midocoSalesListCriteriaTypeOrgUnitsItem) {
            // validation for constraint: itemType
            if (!is_string($midocoSalesListCriteriaTypeOrgUnitsItem)) {
                $invalidValues[] = is_object($midocoSalesListCriteriaTypeOrgUnitsItem) ? get_class($midocoSalesListCriteriaTypeOrgUnitsItem) : sprintf('%s(%s)', gettype($midocoSalesListCriteriaTypeOrgUnitsItem), var_export($midocoSalesListCriteriaTypeOrgUnitsItem, true));
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
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListCriteriaType
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
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListCriteriaType
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
     * Get travelStartDate value
     * @return string|null
     */
    public function getTravelStartDate(): ?string
    {
        return $this->travelStartDate;
    }
    /**
     * Set travelStartDate value
     * @param string $travelStartDate
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListCriteriaType
     */
    public function setTravelStartDate(?string $travelStartDate = null): self
    {
        // validation for constraint: string
        if (!is_null($travelStartDate) && !is_string($travelStartDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelStartDate, true), gettype($travelStartDate)), __LINE__);
        }
        $this->travelStartDate = $travelStartDate;
        
        return $this;
    }
    /**
     * Get travelEndDate value
     * @return string|null
     */
    public function getTravelEndDate(): ?string
    {
        return $this->travelEndDate;
    }
    /**
     * Set travelEndDate value
     * @param string $travelEndDate
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListCriteriaType
     */
    public function setTravelEndDate(?string $travelEndDate = null): self
    {
        // validation for constraint: string
        if (!is_null($travelEndDate) && !is_string($travelEndDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelEndDate, true), gettype($travelEndDate)), __LINE__);
        }
        $this->travelEndDate = $travelEndDate;
        
        return $this;
    }
    /**
     * Get creationStartDate value
     * @return string|null
     */
    public function getCreationStartDate(): ?string
    {
        return $this->creationStartDate;
    }
    /**
     * Set creationStartDate value
     * @param string $creationStartDate
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListCriteriaType
     */
    public function setCreationStartDate(?string $creationStartDate = null): self
    {
        // validation for constraint: string
        if (!is_null($creationStartDate) && !is_string($creationStartDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationStartDate, true), gettype($creationStartDate)), __LINE__);
        }
        $this->creationStartDate = $creationStartDate;
        
        return $this;
    }
    /**
     * Get creationEndDate value
     * @return string|null
     */
    public function getCreationEndDate(): ?string
    {
        return $this->creationEndDate;
    }
    /**
     * Set creationEndDate value
     * @param string $creationEndDate
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListCriteriaType
     */
    public function setCreationEndDate(?string $creationEndDate = null): self
    {
        // validation for constraint: string
        if (!is_null($creationEndDate) && !is_string($creationEndDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationEndDate, true), gettype($creationEndDate)), __LINE__);
        }
        $this->creationEndDate = $creationEndDate;
        
        return $this;
    }
    /**
     * Get priceStartDate value
     * @return string|null
     */
    public function getPriceStartDate(): ?string
    {
        return $this->priceStartDate;
    }
    /**
     * Set priceStartDate value
     * @param string $priceStartDate
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListCriteriaType
     */
    public function setPriceStartDate(?string $priceStartDate = null): self
    {
        // validation for constraint: string
        if (!is_null($priceStartDate) && !is_string($priceStartDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($priceStartDate, true), gettype($priceStartDate)), __LINE__);
        }
        $this->priceStartDate = $priceStartDate;
        
        return $this;
    }
    /**
     * Get priceEndDate value
     * @return string|null
     */
    public function getPriceEndDate(): ?string
    {
        return $this->priceEndDate;
    }
    /**
     * Set priceEndDate value
     * @param string $priceEndDate
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListCriteriaType
     */
    public function setPriceEndDate(?string $priceEndDate = null): self
    {
        // validation for constraint: string
        if (!is_null($priceEndDate) && !is_string($priceEndDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($priceEndDate, true), gettype($priceEndDate)), __LINE__);
        }
        $this->priceEndDate = $priceEndDate;
        
        return $this;
    }
    /**
     * Get employee value
     * @return int|null
     */
    public function getEmployee(): ?int
    {
        return $this->employee;
    }
    /**
     * Set employee value
     * @param int $employee
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListCriteriaType
     */
    public function setEmployee(?int $employee = null): self
    {
        // validation for constraint: int
        if (!is_null($employee) && !(is_int($employee) || ctype_digit($employee))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($employee, true), gettype($employee)), __LINE__);
        }
        $this->employee = $employee;
        
        return $this;
    }
    /**
     * Get listType value
     * @return int|null
     */
    public function getListType(): ?int
    {
        return $this->listType;
    }
    /**
     * Set listType value
     * @param int $listType
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSalesListCriteriaType
     */
    public function setListType(?int $listType = null): self
    {
        // validation for constraint: int
        if (!is_null($listType) && !(is_int($listType) || ctype_digit($listType))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($listType, true), gettype($listType)), __LINE__);
        }
        $this->listType = $listType;
        
        return $this;
    }
}
