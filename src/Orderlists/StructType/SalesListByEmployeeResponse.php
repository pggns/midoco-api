<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SalesListByEmployeeResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SalesListByEmployeeResponse extends AbstractStructBase
{
    /**
     * The MidocoSalesListsByEmployee
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSalesListsByEmployee
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsByEmployeeType[]
     */
    protected ?array $MidocoSalesListsByEmployee = null;
    /**
     * The noOfResults
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $noOfResults = null;
    /**
     * The SalesListsByEmployeeSums
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsByEmployeeType|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsByEmployeeType $SalesListsByEmployeeSums = null;
    /**
     * Constructor method for SalesListByEmployeeResponse
     * @uses SalesListByEmployeeResponse::setMidocoSalesListsByEmployee()
     * @uses SalesListByEmployeeResponse::setNoOfResults()
     * @uses SalesListByEmployeeResponse::setSalesListsByEmployeeSums()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsByEmployeeType[] $midocoSalesListsByEmployee
     * @param int $noOfResults
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsByEmployeeType $salesListsByEmployeeSums
     */
    public function __construct(?array $midocoSalesListsByEmployee = null, ?int $noOfResults = null, ?\Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsByEmployeeType $salesListsByEmployeeSums = null)
    {
        $this
            ->setMidocoSalesListsByEmployee($midocoSalesListsByEmployee)
            ->setNoOfResults($noOfResults)
            ->setSalesListsByEmployeeSums($salesListsByEmployeeSums);
    }
    /**
     * Get MidocoSalesListsByEmployee value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsByEmployeeType[]
     */
    public function getMidocoSalesListsByEmployee(): ?array
    {
        return $this->MidocoSalesListsByEmployee;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoSalesListsByEmployee method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSalesListsByEmployee method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSalesListsByEmployeeForArrayConstraintFromSetMidocoSalesListsByEmployee(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $salesListByEmployeeResponseMidocoSalesListsByEmployeeItem) {
            // validation for constraint: itemType
            if (!$salesListByEmployeeResponseMidocoSalesListsByEmployeeItem instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsByEmployeeType) {
                $invalidValues[] = is_object($salesListByEmployeeResponseMidocoSalesListsByEmployeeItem) ? get_class($salesListByEmployeeResponseMidocoSalesListsByEmployeeItem) : sprintf('%s(%s)', gettype($salesListByEmployeeResponseMidocoSalesListsByEmployeeItem), var_export($salesListByEmployeeResponseMidocoSalesListsByEmployeeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSalesListsByEmployee property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsByEmployeeType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSalesListsByEmployee value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsByEmployeeType[] $midocoSalesListsByEmployee
     * @return \Pggns\MidocoApi\Orderlists\StructType\SalesListByEmployeeResponse
     */
    public function setMidocoSalesListsByEmployee(?array $midocoSalesListsByEmployee = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSalesListsByEmployeeArrayErrorMessage = self::validateMidocoSalesListsByEmployeeForArrayConstraintFromSetMidocoSalesListsByEmployee($midocoSalesListsByEmployee))) {
            throw new InvalidArgumentException($midocoSalesListsByEmployeeArrayErrorMessage, __LINE__);
        }
        $this->MidocoSalesListsByEmployee = $midocoSalesListsByEmployee;
        
        return $this;
    }
    /**
     * Add item to MidocoSalesListsByEmployee value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsByEmployeeType $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\SalesListByEmployeeResponse
     */
    public function addToMidocoSalesListsByEmployee(\Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsByEmployeeType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsByEmployeeType) {
            throw new InvalidArgumentException(sprintf('The MidocoSalesListsByEmployee property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsByEmployeeType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSalesListsByEmployee[] = $item;
        
        return $this;
    }
    /**
     * Get noOfResults value
     * @return int|null
     */
    public function getNoOfResults(): ?int
    {
        return $this->noOfResults;
    }
    /**
     * Set noOfResults value
     * @param int $noOfResults
     * @return \Pggns\MidocoApi\Orderlists\StructType\SalesListByEmployeeResponse
     */
    public function setNoOfResults(?int $noOfResults = null): self
    {
        // validation for constraint: int
        if (!is_null($noOfResults) && !(is_int($noOfResults) || ctype_digit($noOfResults))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noOfResults, true), gettype($noOfResults)), __LINE__);
        }
        $this->noOfResults = $noOfResults;
        
        return $this;
    }
    /**
     * Get SalesListsByEmployeeSums value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsByEmployeeType|null
     */
    public function getSalesListsByEmployeeSums(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsByEmployeeType
    {
        return $this->SalesListsByEmployeeSums;
    }
    /**
     * Set SalesListsByEmployeeSums value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsByEmployeeType $salesListsByEmployeeSums
     * @return \Pggns\MidocoApi\Orderlists\StructType\SalesListByEmployeeResponse
     */
    public function setSalesListsByEmployeeSums(?\Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsByEmployeeType $salesListsByEmployeeSums = null): self
    {
        $this->SalesListsByEmployeeSums = $salesListsByEmployeeSums;
        
        return $this;
    }
}
