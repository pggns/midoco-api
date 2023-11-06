<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BalanceListResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class BalanceListResponse extends AbstractStructBase
{
    /**
     * The MidocoBalanceList
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoBalanceListType[]
     */
    protected ?array $MidocoBalanceList = null;
    /**
     * The MidocoBalanceListSums
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoBalanceListSumsType[]
     */
    protected ?array $MidocoBalanceListSums = null;
    /**
     * The noOfResults
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $noOfResults = null;
    /**
     * Constructor method for BalanceListResponse
     * @uses BalanceListResponse::setMidocoBalanceList()
     * @uses BalanceListResponse::setMidocoBalanceListSums()
     * @uses BalanceListResponse::setNoOfResults()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoBalanceListType[] $midocoBalanceList
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoBalanceListSumsType[] $midocoBalanceListSums
     * @param int $noOfResults
     */
    public function __construct(?array $midocoBalanceList = null, ?array $midocoBalanceListSums = null, ?int $noOfResults = null)
    {
        $this
            ->setMidocoBalanceList($midocoBalanceList)
            ->setMidocoBalanceListSums($midocoBalanceListSums)
            ->setNoOfResults($noOfResults);
    }
    /**
     * Get MidocoBalanceList value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBalanceListType[]
     */
    public function getMidocoBalanceList(): ?array
    {
        return $this->MidocoBalanceList;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoBalanceList method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBalanceList method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBalanceListForArrayConstraintFromSetMidocoBalanceList(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $balanceListResponseMidocoBalanceListItem) {
            // validation for constraint: itemType
            if (!$balanceListResponseMidocoBalanceListItem instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoBalanceListType) {
                $invalidValues[] = is_object($balanceListResponseMidocoBalanceListItem) ? get_class($balanceListResponseMidocoBalanceListItem) : sprintf('%s(%s)', gettype($balanceListResponseMidocoBalanceListItem), var_export($balanceListResponseMidocoBalanceListItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBalanceList property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoBalanceListType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBalanceList value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoBalanceListType[] $midocoBalanceList
     * @return \Pggns\MidocoApi\Orderlists\StructType\BalanceListResponse
     */
    public function setMidocoBalanceList(?array $midocoBalanceList = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBalanceListArrayErrorMessage = self::validateMidocoBalanceListForArrayConstraintFromSetMidocoBalanceList($midocoBalanceList))) {
            throw new InvalidArgumentException($midocoBalanceListArrayErrorMessage, __LINE__);
        }
        $this->MidocoBalanceList = $midocoBalanceList;
        
        return $this;
    }
    /**
     * Add item to MidocoBalanceList value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoBalanceListType $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\BalanceListResponse
     */
    public function addToMidocoBalanceList(\Pggns\MidocoApi\Orderlists\StructType\MidocoBalanceListType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoBalanceListType) {
            throw new InvalidArgumentException(sprintf('The MidocoBalanceList property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoBalanceListType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBalanceList[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoBalanceListSums value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBalanceListSumsType[]
     */
    public function getMidocoBalanceListSums(): ?array
    {
        return $this->MidocoBalanceListSums;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoBalanceListSums method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBalanceListSums method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBalanceListSumsForArrayConstraintFromSetMidocoBalanceListSums(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $balanceListResponseMidocoBalanceListSumsItem) {
            // validation for constraint: itemType
            if (!$balanceListResponseMidocoBalanceListSumsItem instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoBalanceListSumsType) {
                $invalidValues[] = is_object($balanceListResponseMidocoBalanceListSumsItem) ? get_class($balanceListResponseMidocoBalanceListSumsItem) : sprintf('%s(%s)', gettype($balanceListResponseMidocoBalanceListSumsItem), var_export($balanceListResponseMidocoBalanceListSumsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBalanceListSums property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoBalanceListSumsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBalanceListSums value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoBalanceListSumsType[] $midocoBalanceListSums
     * @return \Pggns\MidocoApi\Orderlists\StructType\BalanceListResponse
     */
    public function setMidocoBalanceListSums(?array $midocoBalanceListSums = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBalanceListSumsArrayErrorMessage = self::validateMidocoBalanceListSumsForArrayConstraintFromSetMidocoBalanceListSums($midocoBalanceListSums))) {
            throw new InvalidArgumentException($midocoBalanceListSumsArrayErrorMessage, __LINE__);
        }
        $this->MidocoBalanceListSums = $midocoBalanceListSums;
        
        return $this;
    }
    /**
     * Add item to MidocoBalanceListSums value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoBalanceListSumsType $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\BalanceListResponse
     */
    public function addToMidocoBalanceListSums(\Pggns\MidocoApi\Orderlists\StructType\MidocoBalanceListSumsType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoBalanceListSumsType) {
            throw new InvalidArgumentException(sprintf('The MidocoBalanceListSums property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoBalanceListSumsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBalanceListSums[] = $item;
        
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\BalanceListResponse
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
