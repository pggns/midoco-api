<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SalesListBySupplierGroupResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SalesListBySupplierGroupResponse extends AbstractStructBase
{
    /**
     * The MidocoSalesListsBySupplierGroup
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSalesListsBySupplierGroup
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsBySupplierGroupType[]
     */
    protected ?array $MidocoSalesListsBySupplierGroup = null;
    /**
     * The noOfResults
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $noOfResults = null;
    /**
     * The SalesListsBySupplierGroupSums
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsBySupplierGroupType|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsBySupplierGroupType $SalesListsBySupplierGroupSums = null;
    /**
     * Constructor method for SalesListBySupplierGroupResponse
     * @uses SalesListBySupplierGroupResponse::setMidocoSalesListsBySupplierGroup()
     * @uses SalesListBySupplierGroupResponse::setNoOfResults()
     * @uses SalesListBySupplierGroupResponse::setSalesListsBySupplierGroupSums()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsBySupplierGroupType[] $midocoSalesListsBySupplierGroup
     * @param int $noOfResults
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsBySupplierGroupType $salesListsBySupplierGroupSums
     */
    public function __construct(?array $midocoSalesListsBySupplierGroup = null, ?int $noOfResults = null, ?\Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsBySupplierGroupType $salesListsBySupplierGroupSums = null)
    {
        $this
            ->setMidocoSalesListsBySupplierGroup($midocoSalesListsBySupplierGroup)
            ->setNoOfResults($noOfResults)
            ->setSalesListsBySupplierGroupSums($salesListsBySupplierGroupSums);
    }
    /**
     * Get MidocoSalesListsBySupplierGroup value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsBySupplierGroupType[]
     */
    public function getMidocoSalesListsBySupplierGroup(): ?array
    {
        return $this->MidocoSalesListsBySupplierGroup;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoSalesListsBySupplierGroup method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSalesListsBySupplierGroup method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSalesListsBySupplierGroupForArrayConstraintFromSetMidocoSalesListsBySupplierGroup(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $salesListBySupplierGroupResponseMidocoSalesListsBySupplierGroupItem) {
            // validation for constraint: itemType
            if (!$salesListBySupplierGroupResponseMidocoSalesListsBySupplierGroupItem instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsBySupplierGroupType) {
                $invalidValues[] = is_object($salesListBySupplierGroupResponseMidocoSalesListsBySupplierGroupItem) ? get_class($salesListBySupplierGroupResponseMidocoSalesListsBySupplierGroupItem) : sprintf('%s(%s)', gettype($salesListBySupplierGroupResponseMidocoSalesListsBySupplierGroupItem), var_export($salesListBySupplierGroupResponseMidocoSalesListsBySupplierGroupItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSalesListsBySupplierGroup property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsBySupplierGroupType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSalesListsBySupplierGroup value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsBySupplierGroupType[] $midocoSalesListsBySupplierGroup
     * @return \Pggns\MidocoApi\Orderlists\StructType\SalesListBySupplierGroupResponse
     */
    public function setMidocoSalesListsBySupplierGroup(?array $midocoSalesListsBySupplierGroup = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSalesListsBySupplierGroupArrayErrorMessage = self::validateMidocoSalesListsBySupplierGroupForArrayConstraintFromSetMidocoSalesListsBySupplierGroup($midocoSalesListsBySupplierGroup))) {
            throw new InvalidArgumentException($midocoSalesListsBySupplierGroupArrayErrorMessage, __LINE__);
        }
        $this->MidocoSalesListsBySupplierGroup = $midocoSalesListsBySupplierGroup;
        
        return $this;
    }
    /**
     * Add item to MidocoSalesListsBySupplierGroup value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsBySupplierGroupType $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\SalesListBySupplierGroupResponse
     */
    public function addToMidocoSalesListsBySupplierGroup(\Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsBySupplierGroupType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsBySupplierGroupType) {
            throw new InvalidArgumentException(sprintf('The MidocoSalesListsBySupplierGroup property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsBySupplierGroupType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSalesListsBySupplierGroup[] = $item;
        
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\SalesListBySupplierGroupResponse
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
     * Get SalesListsBySupplierGroupSums value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsBySupplierGroupType|null
     */
    public function getSalesListsBySupplierGroupSums(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsBySupplierGroupType
    {
        return $this->SalesListsBySupplierGroupSums;
    }
    /**
     * Set SalesListsBySupplierGroupSums value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsBySupplierGroupType $salesListsBySupplierGroupSums
     * @return \Pggns\MidocoApi\Orderlists\StructType\SalesListBySupplierGroupResponse
     */
    public function setSalesListsBySupplierGroupSums(?\Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListsBySupplierGroupType $salesListsBySupplierGroupSums = null): self
    {
        $this->SalesListsBySupplierGroupSums = $salesListsBySupplierGroupSums;
        
        return $this;
    }
}
