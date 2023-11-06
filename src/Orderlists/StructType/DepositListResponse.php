<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DepositListResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DepositListResponse extends AbstractStructBase
{
    /**
     * The MidocoDepositList
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoDepositList
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListType[]
     */
    protected ?array $MidocoDepositList = null;
    /**
     * The MidocoDepositListSums
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoDepositListSums
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListSumsType[]
     */
    protected ?array $MidocoDepositListSums = null;
    /**
     * The MidocoDepositListOverall
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoDepositListOverall
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListOverallType[]
     */
    protected ?array $MidocoDepositListOverall = null;
    /**
     * The noOfResults
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $noOfResults = null;
    /**
     * Constructor method for DepositListResponse
     * @uses DepositListResponse::setMidocoDepositList()
     * @uses DepositListResponse::setMidocoDepositListSums()
     * @uses DepositListResponse::setMidocoDepositListOverall()
     * @uses DepositListResponse::setNoOfResults()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListType[] $midocoDepositList
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListSumsType[] $midocoDepositListSums
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListOverallType[] $midocoDepositListOverall
     * @param int $noOfResults
     */
    public function __construct(?array $midocoDepositList = null, ?array $midocoDepositListSums = null, ?array $midocoDepositListOverall = null, ?int $noOfResults = null)
    {
        $this
            ->setMidocoDepositList($midocoDepositList)
            ->setMidocoDepositListSums($midocoDepositListSums)
            ->setMidocoDepositListOverall($midocoDepositListOverall)
            ->setNoOfResults($noOfResults);
    }
    /**
     * Get MidocoDepositList value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListType[]
     */
    public function getMidocoDepositList(): ?array
    {
        return $this->MidocoDepositList;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoDepositList method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoDepositList method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoDepositListForArrayConstraintFromSetMidocoDepositList(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $depositListResponseMidocoDepositListItem) {
            // validation for constraint: itemType
            if (!$depositListResponseMidocoDepositListItem instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListType) {
                $invalidValues[] = is_object($depositListResponseMidocoDepositListItem) ? get_class($depositListResponseMidocoDepositListItem) : sprintf('%s(%s)', gettype($depositListResponseMidocoDepositListItem), var_export($depositListResponseMidocoDepositListItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoDepositList property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoDepositList value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListType[] $midocoDepositList
     * @return \Pggns\MidocoApi\Orderlists\StructType\DepositListResponse
     */
    public function setMidocoDepositList(?array $midocoDepositList = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoDepositListArrayErrorMessage = self::validateMidocoDepositListForArrayConstraintFromSetMidocoDepositList($midocoDepositList))) {
            throw new InvalidArgumentException($midocoDepositListArrayErrorMessage, __LINE__);
        }
        $this->MidocoDepositList = $midocoDepositList;
        
        return $this;
    }
    /**
     * Add item to MidocoDepositList value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListType $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\DepositListResponse
     */
    public function addToMidocoDepositList(\Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListType) {
            throw new InvalidArgumentException(sprintf('The MidocoDepositList property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoDepositList[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoDepositListSums value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListSumsType[]
     */
    public function getMidocoDepositListSums(): ?array
    {
        return $this->MidocoDepositListSums;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoDepositListSums method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoDepositListSums method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoDepositListSumsForArrayConstraintFromSetMidocoDepositListSums(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $depositListResponseMidocoDepositListSumsItem) {
            // validation for constraint: itemType
            if (!$depositListResponseMidocoDepositListSumsItem instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListSumsType) {
                $invalidValues[] = is_object($depositListResponseMidocoDepositListSumsItem) ? get_class($depositListResponseMidocoDepositListSumsItem) : sprintf('%s(%s)', gettype($depositListResponseMidocoDepositListSumsItem), var_export($depositListResponseMidocoDepositListSumsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoDepositListSums property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListSumsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoDepositListSums value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListSumsType[] $midocoDepositListSums
     * @return \Pggns\MidocoApi\Orderlists\StructType\DepositListResponse
     */
    public function setMidocoDepositListSums(?array $midocoDepositListSums = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoDepositListSumsArrayErrorMessage = self::validateMidocoDepositListSumsForArrayConstraintFromSetMidocoDepositListSums($midocoDepositListSums))) {
            throw new InvalidArgumentException($midocoDepositListSumsArrayErrorMessage, __LINE__);
        }
        $this->MidocoDepositListSums = $midocoDepositListSums;
        
        return $this;
    }
    /**
     * Add item to MidocoDepositListSums value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListSumsType $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\DepositListResponse
     */
    public function addToMidocoDepositListSums(\Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListSumsType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListSumsType) {
            throw new InvalidArgumentException(sprintf('The MidocoDepositListSums property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListSumsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoDepositListSums[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoDepositListOverall value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListOverallType[]
     */
    public function getMidocoDepositListOverall(): ?array
    {
        return $this->MidocoDepositListOverall;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoDepositListOverall method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoDepositListOverall method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoDepositListOverallForArrayConstraintFromSetMidocoDepositListOverall(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $depositListResponseMidocoDepositListOverallItem) {
            // validation for constraint: itemType
            if (!$depositListResponseMidocoDepositListOverallItem instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListOverallType) {
                $invalidValues[] = is_object($depositListResponseMidocoDepositListOverallItem) ? get_class($depositListResponseMidocoDepositListOverallItem) : sprintf('%s(%s)', gettype($depositListResponseMidocoDepositListOverallItem), var_export($depositListResponseMidocoDepositListOverallItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoDepositListOverall property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListOverallType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoDepositListOverall value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListOverallType[] $midocoDepositListOverall
     * @return \Pggns\MidocoApi\Orderlists\StructType\DepositListResponse
     */
    public function setMidocoDepositListOverall(?array $midocoDepositListOverall = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoDepositListOverallArrayErrorMessage = self::validateMidocoDepositListOverallForArrayConstraintFromSetMidocoDepositListOverall($midocoDepositListOverall))) {
            throw new InvalidArgumentException($midocoDepositListOverallArrayErrorMessage, __LINE__);
        }
        $this->MidocoDepositListOverall = $midocoDepositListOverall;
        
        return $this;
    }
    /**
     * Add item to MidocoDepositListOverall value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListOverallType $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\DepositListResponse
     */
    public function addToMidocoDepositListOverall(\Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListOverallType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListOverallType) {
            throw new InvalidArgumentException(sprintf('The MidocoDepositListOverall property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListOverallType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoDepositListOverall[] = $item;
        
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\DepositListResponse
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
}
