<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OpenErListResponse StructType
 * @subpackage Structs
 */
class OpenErListResponse extends AbstractStructBase
{
    /**
     * The midocoOpenErOutputList
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoOpenErOutputListType[]
     */
    protected ?array $midocoOpenErOutputList = null;
    /**
     * The midocoOpenErListSums
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoOpenErListSumsType[]
     */
    protected ?array $midocoOpenErListSums = null;
    /**
     * The midocoOpenErListErrors
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoOpenErErrorListType[]
     */
    protected ?array $midocoOpenErListErrors = null;
    /**
     * The noOfResults
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $noOfResults = null;
    /**
     * Constructor method for OpenErListResponse
     * @uses OpenErListResponse::setMidocoOpenErOutputList()
     * @uses OpenErListResponse::setMidocoOpenErListSums()
     * @uses OpenErListResponse::setMidocoOpenErListErrors()
     * @uses OpenErListResponse::setNoOfResults()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoOpenErOutputListType[] $midocoOpenErOutputList
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoOpenErListSumsType[] $midocoOpenErListSums
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoOpenErErrorListType[] $midocoOpenErListErrors
     * @param int $noOfResults
     */
    public function __construct(?array $midocoOpenErOutputList = null, ?array $midocoOpenErListSums = null, ?array $midocoOpenErListErrors = null, ?int $noOfResults = null)
    {
        $this
            ->setMidocoOpenErOutputList($midocoOpenErOutputList)
            ->setMidocoOpenErListSums($midocoOpenErListSums)
            ->setMidocoOpenErListErrors($midocoOpenErListErrors)
            ->setNoOfResults($noOfResults);
    }
    /**
     * Get midocoOpenErOutputList value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoOpenErOutputListType[]
     */
    public function getMidocoOpenErOutputList(): ?array
    {
        return $this->midocoOpenErOutputList;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoOpenErOutputList method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOpenErOutputList method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOpenErOutputListForArrayConstraintsFromSetMidocoOpenErOutputList(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $openErListResponseMidocoOpenErOutputListItem) {
            // validation for constraint: itemType
            if (!$openErListResponseMidocoOpenErOutputListItem instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoOpenErOutputListType) {
                $invalidValues[] = is_object($openErListResponseMidocoOpenErOutputListItem) ? get_class($openErListResponseMidocoOpenErOutputListItem) : sprintf('%s(%s)', gettype($openErListResponseMidocoOpenErOutputListItem), var_export($openErListResponseMidocoOpenErOutputListItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The midocoOpenErOutputList property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoOpenErOutputListType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set midocoOpenErOutputList value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoOpenErOutputListType[] $midocoOpenErOutputList
     * @return \Pggns\MidocoApi\Orderlists\StructType\OpenErListResponse
     */
    public function setMidocoOpenErOutputList(?array $midocoOpenErOutputList = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOpenErOutputListArrayErrorMessage = self::validateMidocoOpenErOutputListForArrayConstraintsFromSetMidocoOpenErOutputList($midocoOpenErOutputList))) {
            throw new InvalidArgumentException($midocoOpenErOutputListArrayErrorMessage, __LINE__);
        }
        $this->midocoOpenErOutputList = $midocoOpenErOutputList;
        
        return $this;
    }
    /**
     * Add item to midocoOpenErOutputList value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoOpenErOutputListType $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\OpenErListResponse
     */
    public function addToMidocoOpenErOutputList(\Pggns\MidocoApi\Orderlists\StructType\MidocoOpenErOutputListType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoOpenErOutputListType) {
            throw new InvalidArgumentException(sprintf('The midocoOpenErOutputList property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoOpenErOutputListType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->midocoOpenErOutputList[] = $item;
        
        return $this;
    }
    /**
     * Get midocoOpenErListSums value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoOpenErListSumsType[]
     */
    public function getMidocoOpenErListSums(): ?array
    {
        return $this->midocoOpenErListSums;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoOpenErListSums method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOpenErListSums method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOpenErListSumsForArrayConstraintsFromSetMidocoOpenErListSums(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $openErListResponseMidocoOpenErListSumsItem) {
            // validation for constraint: itemType
            if (!$openErListResponseMidocoOpenErListSumsItem instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoOpenErListSumsType) {
                $invalidValues[] = is_object($openErListResponseMidocoOpenErListSumsItem) ? get_class($openErListResponseMidocoOpenErListSumsItem) : sprintf('%s(%s)', gettype($openErListResponseMidocoOpenErListSumsItem), var_export($openErListResponseMidocoOpenErListSumsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The midocoOpenErListSums property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoOpenErListSumsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set midocoOpenErListSums value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoOpenErListSumsType[] $midocoOpenErListSums
     * @return \Pggns\MidocoApi\Orderlists\StructType\OpenErListResponse
     */
    public function setMidocoOpenErListSums(?array $midocoOpenErListSums = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOpenErListSumsArrayErrorMessage = self::validateMidocoOpenErListSumsForArrayConstraintsFromSetMidocoOpenErListSums($midocoOpenErListSums))) {
            throw new InvalidArgumentException($midocoOpenErListSumsArrayErrorMessage, __LINE__);
        }
        $this->midocoOpenErListSums = $midocoOpenErListSums;
        
        return $this;
    }
    /**
     * Add item to midocoOpenErListSums value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoOpenErListSumsType $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\OpenErListResponse
     */
    public function addToMidocoOpenErListSums(\Pggns\MidocoApi\Orderlists\StructType\MidocoOpenErListSumsType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoOpenErListSumsType) {
            throw new InvalidArgumentException(sprintf('The midocoOpenErListSums property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoOpenErListSumsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->midocoOpenErListSums[] = $item;
        
        return $this;
    }
    /**
     * Get midocoOpenErListErrors value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoOpenErErrorListType[]
     */
    public function getMidocoOpenErListErrors(): ?array
    {
        return $this->midocoOpenErListErrors;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoOpenErListErrors method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOpenErListErrors method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOpenErListErrorsForArrayConstraintsFromSetMidocoOpenErListErrors(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $openErListResponseMidocoOpenErListErrorsItem) {
            // validation for constraint: itemType
            if (!$openErListResponseMidocoOpenErListErrorsItem instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoOpenErErrorListType) {
                $invalidValues[] = is_object($openErListResponseMidocoOpenErListErrorsItem) ? get_class($openErListResponseMidocoOpenErListErrorsItem) : sprintf('%s(%s)', gettype($openErListResponseMidocoOpenErListErrorsItem), var_export($openErListResponseMidocoOpenErListErrorsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The midocoOpenErListErrors property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoOpenErErrorListType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set midocoOpenErListErrors value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoOpenErErrorListType[] $midocoOpenErListErrors
     * @return \Pggns\MidocoApi\Orderlists\StructType\OpenErListResponse
     */
    public function setMidocoOpenErListErrors(?array $midocoOpenErListErrors = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOpenErListErrorsArrayErrorMessage = self::validateMidocoOpenErListErrorsForArrayConstraintsFromSetMidocoOpenErListErrors($midocoOpenErListErrors))) {
            throw new InvalidArgumentException($midocoOpenErListErrorsArrayErrorMessage, __LINE__);
        }
        $this->midocoOpenErListErrors = $midocoOpenErListErrors;
        
        return $this;
    }
    /**
     * Add item to midocoOpenErListErrors value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoOpenErErrorListType $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\OpenErListResponse
     */
    public function addToMidocoOpenErListErrors(\Pggns\MidocoApi\Orderlists\StructType\MidocoOpenErErrorListType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoOpenErErrorListType) {
            throw new InvalidArgumentException(sprintf('The midocoOpenErListErrors property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoOpenErErrorListType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->midocoOpenErListErrors[] = $item;
        
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\OpenErListResponse
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
