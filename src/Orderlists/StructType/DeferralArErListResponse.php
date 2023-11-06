<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeferralArErListResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeferralArErListResponse extends AbstractStructBase
{
    /**
     * The midocoDeferralArErOutputList
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralArErOutputListType[]
     */
    protected ?array $midocoDeferralArErOutputList = null;
    /**
     * The midocoDeferralArErListSums
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralArErListSumsType[]
     */
    protected ?array $midocoDeferralArErListSums = null;
    /**
     * The noOfResults
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $noOfResults = null;
    /**
     * Constructor method for DeferralArErListResponse
     * @uses DeferralArErListResponse::setMidocoDeferralArErOutputList()
     * @uses DeferralArErListResponse::setMidocoDeferralArErListSums()
     * @uses DeferralArErListResponse::setNoOfResults()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralArErOutputListType[] $midocoDeferralArErOutputList
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralArErListSumsType[] $midocoDeferralArErListSums
     * @param int $noOfResults
     */
    public function __construct(?array $midocoDeferralArErOutputList = null, ?array $midocoDeferralArErListSums = null, ?int $noOfResults = null)
    {
        $this
            ->setMidocoDeferralArErOutputList($midocoDeferralArErOutputList)
            ->setMidocoDeferralArErListSums($midocoDeferralArErListSums)
            ->setNoOfResults($noOfResults);
    }
    /**
     * Get midocoDeferralArErOutputList value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralArErOutputListType[]
     */
    public function getMidocoDeferralArErOutputList(): ?array
    {
        return $this->midocoDeferralArErOutputList;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoDeferralArErOutputList method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoDeferralArErOutputList method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoDeferralArErOutputListForArrayConstraintFromSetMidocoDeferralArErOutputList(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $deferralArErListResponseMidocoDeferralArErOutputListItem) {
            // validation for constraint: itemType
            if (!$deferralArErListResponseMidocoDeferralArErOutputListItem instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralArErOutputListType) {
                $invalidValues[] = is_object($deferralArErListResponseMidocoDeferralArErOutputListItem) ? get_class($deferralArErListResponseMidocoDeferralArErOutputListItem) : sprintf('%s(%s)', gettype($deferralArErListResponseMidocoDeferralArErOutputListItem), var_export($deferralArErListResponseMidocoDeferralArErOutputListItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The midocoDeferralArErOutputList property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralArErOutputListType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set midocoDeferralArErOutputList value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralArErOutputListType[] $midocoDeferralArErOutputList
     * @return \Pggns\MidocoApi\Orderlists\StructType\DeferralArErListResponse
     */
    public function setMidocoDeferralArErOutputList(?array $midocoDeferralArErOutputList = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoDeferralArErOutputListArrayErrorMessage = self::validateMidocoDeferralArErOutputListForArrayConstraintFromSetMidocoDeferralArErOutputList($midocoDeferralArErOutputList))) {
            throw new InvalidArgumentException($midocoDeferralArErOutputListArrayErrorMessage, __LINE__);
        }
        $this->midocoDeferralArErOutputList = $midocoDeferralArErOutputList;
        
        return $this;
    }
    /**
     * Add item to midocoDeferralArErOutputList value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralArErOutputListType $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\DeferralArErListResponse
     */
    public function addToMidocoDeferralArErOutputList(\Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralArErOutputListType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralArErOutputListType) {
            throw new InvalidArgumentException(sprintf('The midocoDeferralArErOutputList property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralArErOutputListType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->midocoDeferralArErOutputList[] = $item;
        
        return $this;
    }
    /**
     * Get midocoDeferralArErListSums value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralArErListSumsType[]
     */
    public function getMidocoDeferralArErListSums(): ?array
    {
        return $this->midocoDeferralArErListSums;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoDeferralArErListSums method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoDeferralArErListSums method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoDeferralArErListSumsForArrayConstraintFromSetMidocoDeferralArErListSums(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $deferralArErListResponseMidocoDeferralArErListSumsItem) {
            // validation for constraint: itemType
            if (!$deferralArErListResponseMidocoDeferralArErListSumsItem instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralArErListSumsType) {
                $invalidValues[] = is_object($deferralArErListResponseMidocoDeferralArErListSumsItem) ? get_class($deferralArErListResponseMidocoDeferralArErListSumsItem) : sprintf('%s(%s)', gettype($deferralArErListResponseMidocoDeferralArErListSumsItem), var_export($deferralArErListResponseMidocoDeferralArErListSumsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The midocoDeferralArErListSums property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralArErListSumsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set midocoDeferralArErListSums value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralArErListSumsType[] $midocoDeferralArErListSums
     * @return \Pggns\MidocoApi\Orderlists\StructType\DeferralArErListResponse
     */
    public function setMidocoDeferralArErListSums(?array $midocoDeferralArErListSums = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoDeferralArErListSumsArrayErrorMessage = self::validateMidocoDeferralArErListSumsForArrayConstraintFromSetMidocoDeferralArErListSums($midocoDeferralArErListSums))) {
            throw new InvalidArgumentException($midocoDeferralArErListSumsArrayErrorMessage, __LINE__);
        }
        $this->midocoDeferralArErListSums = $midocoDeferralArErListSums;
        
        return $this;
    }
    /**
     * Add item to midocoDeferralArErListSums value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralArErListSumsType $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\DeferralArErListResponse
     */
    public function addToMidocoDeferralArErListSums(\Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralArErListSumsType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralArErListSumsType) {
            throw new InvalidArgumentException(sprintf('The midocoDeferralArErListSums property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralArErListSumsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->midocoDeferralArErListSums[] = $item;
        
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\DeferralArErListResponse
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
