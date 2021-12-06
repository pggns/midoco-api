<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ArErListResponse StructType
 * @subpackage Structs
 */
class ArErListResponse extends AbstractStructBase
{
    /**
     * The midocoArErOutputList
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoArErOutputListType[]
     */
    protected ?array $midocoArErOutputList = null;
    /**
     * The midocoArErListSums
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoArErListSumsType[]
     */
    protected ?array $midocoArErListSums = null;
    /**
     * The midocoArErListSumsOverall
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoArErListSumsOverallType[]
     */
    protected ?array $midocoArErListSumsOverall = null;
    /**
     * The noOfResults
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $noOfResults = null;
    /**
     * Constructor method for ArErListResponse
     * @uses ArErListResponse::setMidocoArErOutputList()
     * @uses ArErListResponse::setMidocoArErListSums()
     * @uses ArErListResponse::setMidocoArErListSumsOverall()
     * @uses ArErListResponse::setNoOfResults()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoArErOutputListType[] $midocoArErOutputList
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoArErListSumsType[] $midocoArErListSums
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoArErListSumsOverallType[] $midocoArErListSumsOverall
     * @param int $noOfResults
     */
    public function __construct(?array $midocoArErOutputList = null, ?array $midocoArErListSums = null, ?array $midocoArErListSumsOverall = null, ?int $noOfResults = null)
    {
        $this
            ->setMidocoArErOutputList($midocoArErOutputList)
            ->setMidocoArErListSums($midocoArErListSums)
            ->setMidocoArErListSumsOverall($midocoArErListSumsOverall)
            ->setNoOfResults($noOfResults);
    }
    /**
     * Get midocoArErOutputList value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoArErOutputListType[]
     */
    public function getMidocoArErOutputList(): ?array
    {
        return $this->midocoArErOutputList;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoArErOutputList method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoArErOutputList method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoArErOutputListForArrayConstraintsFromSetMidocoArErOutputList(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arErListResponseMidocoArErOutputListItem) {
            // validation for constraint: itemType
            if (!$arErListResponseMidocoArErOutputListItem instanceof \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoArErOutputListType) {
                $invalidValues[] = is_object($arErListResponseMidocoArErOutputListItem) ? get_class($arErListResponseMidocoArErOutputListItem) : sprintf('%s(%s)', gettype($arErListResponseMidocoArErOutputListItem), var_export($arErListResponseMidocoArErOutputListItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The midocoArErOutputList property can only contain items of type \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoArErOutputListType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set midocoArErOutputList value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoArErOutputListType[] $midocoArErOutputList
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\ArErListResponse
     */
    public function setMidocoArErOutputList(?array $midocoArErOutputList = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoArErOutputListArrayErrorMessage = self::validateMidocoArErOutputListForArrayConstraintsFromSetMidocoArErOutputList($midocoArErOutputList))) {
            throw new InvalidArgumentException($midocoArErOutputListArrayErrorMessage, __LINE__);
        }
        $this->midocoArErOutputList = $midocoArErOutputList;
        
        return $this;
    }
    /**
     * Add item to midocoArErOutputList value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoArErOutputListType $item
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\ArErListResponse
     */
    public function addToMidocoArErOutputList(\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoArErOutputListType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoArErOutputListType) {
            throw new InvalidArgumentException(sprintf('The midocoArErOutputList property can only contain items of type \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoArErOutputListType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->midocoArErOutputList[] = $item;
        
        return $this;
    }
    /**
     * Get midocoArErListSums value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoArErListSumsType[]
     */
    public function getMidocoArErListSums(): ?array
    {
        return $this->midocoArErListSums;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoArErListSums method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoArErListSums method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoArErListSumsForArrayConstraintsFromSetMidocoArErListSums(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arErListResponseMidocoArErListSumsItem) {
            // validation for constraint: itemType
            if (!$arErListResponseMidocoArErListSumsItem instanceof \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoArErListSumsType) {
                $invalidValues[] = is_object($arErListResponseMidocoArErListSumsItem) ? get_class($arErListResponseMidocoArErListSumsItem) : sprintf('%s(%s)', gettype($arErListResponseMidocoArErListSumsItem), var_export($arErListResponseMidocoArErListSumsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The midocoArErListSums property can only contain items of type \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoArErListSumsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set midocoArErListSums value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoArErListSumsType[] $midocoArErListSums
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\ArErListResponse
     */
    public function setMidocoArErListSums(?array $midocoArErListSums = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoArErListSumsArrayErrorMessage = self::validateMidocoArErListSumsForArrayConstraintsFromSetMidocoArErListSums($midocoArErListSums))) {
            throw new InvalidArgumentException($midocoArErListSumsArrayErrorMessage, __LINE__);
        }
        $this->midocoArErListSums = $midocoArErListSums;
        
        return $this;
    }
    /**
     * Add item to midocoArErListSums value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoArErListSumsType $item
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\ArErListResponse
     */
    public function addToMidocoArErListSums(\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoArErListSumsType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoArErListSumsType) {
            throw new InvalidArgumentException(sprintf('The midocoArErListSums property can only contain items of type \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoArErListSumsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->midocoArErListSums[] = $item;
        
        return $this;
    }
    /**
     * Get midocoArErListSumsOverall value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoArErListSumsOverallType[]
     */
    public function getMidocoArErListSumsOverall(): ?array
    {
        return $this->midocoArErListSumsOverall;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoArErListSumsOverall method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoArErListSumsOverall method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoArErListSumsOverallForArrayConstraintsFromSetMidocoArErListSumsOverall(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $arErListResponseMidocoArErListSumsOverallItem) {
            // validation for constraint: itemType
            if (!$arErListResponseMidocoArErListSumsOverallItem instanceof \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoArErListSumsOverallType) {
                $invalidValues[] = is_object($arErListResponseMidocoArErListSumsOverallItem) ? get_class($arErListResponseMidocoArErListSumsOverallItem) : sprintf('%s(%s)', gettype($arErListResponseMidocoArErListSumsOverallItem), var_export($arErListResponseMidocoArErListSumsOverallItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The midocoArErListSumsOverall property can only contain items of type \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoArErListSumsOverallType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set midocoArErListSumsOverall value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoArErListSumsOverallType[] $midocoArErListSumsOverall
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\ArErListResponse
     */
    public function setMidocoArErListSumsOverall(?array $midocoArErListSumsOverall = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoArErListSumsOverallArrayErrorMessage = self::validateMidocoArErListSumsOverallForArrayConstraintsFromSetMidocoArErListSumsOverall($midocoArErListSumsOverall))) {
            throw new InvalidArgumentException($midocoArErListSumsOverallArrayErrorMessage, __LINE__);
        }
        $this->midocoArErListSumsOverall = $midocoArErListSumsOverall;
        
        return $this;
    }
    /**
     * Add item to midocoArErListSumsOverall value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoArErListSumsOverallType $item
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\ArErListResponse
     */
    public function addToMidocoArErListSumsOverall(\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoArErListSumsOverallType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoArErListSumsOverallType) {
            throw new InvalidArgumentException(sprintf('The midocoArErListSumsOverall property can only contain items of type \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoArErListSumsOverallType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->midocoArErListSumsOverall[] = $item;
        
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
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\ArErListResponse
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
