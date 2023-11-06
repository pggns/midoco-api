<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MarginExtListResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MarginExtListResponse extends AbstractStructBase
{
    /**
     * The MidocoMarginExtList
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoMarginExtListType[]
     */
    protected ?array $MidocoMarginExtList = null;
    /**
     * The noOfResults
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $noOfResults = null;
    /**
     * Constructor method for MarginExtListResponse
     * @uses MarginExtListResponse::setMidocoMarginExtList()
     * @uses MarginExtListResponse::setNoOfResults()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoMarginExtListType[] $midocoMarginExtList
     * @param int $noOfResults
     */
    public function __construct(?array $midocoMarginExtList = null, ?int $noOfResults = null)
    {
        $this
            ->setMidocoMarginExtList($midocoMarginExtList)
            ->setNoOfResults($noOfResults);
    }
    /**
     * Get MidocoMarginExtList value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoMarginExtListType[]
     */
    public function getMidocoMarginExtList(): ?array
    {
        return $this->MidocoMarginExtList;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoMarginExtList method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMarginExtList method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMarginExtListForArrayConstraintFromSetMidocoMarginExtList(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $marginExtListResponseMidocoMarginExtListItem) {
            // validation for constraint: itemType
            if (!$marginExtListResponseMidocoMarginExtListItem instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoMarginExtListType) {
                $invalidValues[] = is_object($marginExtListResponseMidocoMarginExtListItem) ? get_class($marginExtListResponseMidocoMarginExtListItem) : sprintf('%s(%s)', gettype($marginExtListResponseMidocoMarginExtListItem), var_export($marginExtListResponseMidocoMarginExtListItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMarginExtList property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoMarginExtListType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMarginExtList value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoMarginExtListType[] $midocoMarginExtList
     * @return \Pggns\MidocoApi\Orderlists\StructType\MarginExtListResponse
     */
    public function setMidocoMarginExtList(?array $midocoMarginExtList = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMarginExtListArrayErrorMessage = self::validateMidocoMarginExtListForArrayConstraintFromSetMidocoMarginExtList($midocoMarginExtList))) {
            throw new InvalidArgumentException($midocoMarginExtListArrayErrorMessage, __LINE__);
        }
        $this->MidocoMarginExtList = $midocoMarginExtList;
        
        return $this;
    }
    /**
     * Add item to MidocoMarginExtList value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoMarginExtListType $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\MarginExtListResponse
     */
    public function addToMidocoMarginExtList(\Pggns\MidocoApi\Orderlists\StructType\MidocoMarginExtListType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoMarginExtListType) {
            throw new InvalidArgumentException(sprintf('The MidocoMarginExtList property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoMarginExtListType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMarginExtList[] = $item;
        
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MarginExtListResponse
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
