<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MarginListResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MarginListResponse extends AbstractStructBase
{
    /**
     * The MidocoMarginList
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoMarginListType[]
     */
    protected ?array $MidocoMarginList = null;
    /**
     * The noOfResults
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $noOfResults = null;
    /**
     * Constructor method for MarginListResponse
     * @uses MarginListResponse::setMidocoMarginList()
     * @uses MarginListResponse::setNoOfResults()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoMarginListType[] $midocoMarginList
     * @param int $noOfResults
     */
    public function __construct(?array $midocoMarginList = null, ?int $noOfResults = null)
    {
        $this
            ->setMidocoMarginList($midocoMarginList)
            ->setNoOfResults($noOfResults);
    }
    /**
     * Get MidocoMarginList value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoMarginListType[]
     */
    public function getMidocoMarginList(): ?array
    {
        return $this->MidocoMarginList;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoMarginList method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMarginList method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMarginListForArrayConstraintFromSetMidocoMarginList(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $marginListResponseMidocoMarginListItem) {
            // validation for constraint: itemType
            if (!$marginListResponseMidocoMarginListItem instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoMarginListType) {
                $invalidValues[] = is_object($marginListResponseMidocoMarginListItem) ? get_class($marginListResponseMidocoMarginListItem) : sprintf('%s(%s)', gettype($marginListResponseMidocoMarginListItem), var_export($marginListResponseMidocoMarginListItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMarginList property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoMarginListType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMarginList value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoMarginListType[] $midocoMarginList
     * @return \Pggns\MidocoApi\Orderlists\StructType\MarginListResponse
     */
    public function setMidocoMarginList(?array $midocoMarginList = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMarginListArrayErrorMessage = self::validateMidocoMarginListForArrayConstraintFromSetMidocoMarginList($midocoMarginList))) {
            throw new InvalidArgumentException($midocoMarginListArrayErrorMessage, __LINE__);
        }
        $this->MidocoMarginList = $midocoMarginList;
        
        return $this;
    }
    /**
     * Add item to MidocoMarginList value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoMarginListType $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\MarginListResponse
     */
    public function addToMidocoMarginList(\Pggns\MidocoApi\Orderlists\StructType\MidocoMarginListType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoMarginListType) {
            throw new InvalidArgumentException(sprintf('The MidocoMarginList property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoMarginListType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMarginList[] = $item;
        
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MarginListResponse
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
