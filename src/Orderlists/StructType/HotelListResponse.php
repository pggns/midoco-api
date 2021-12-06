<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelListResponse StructType
 * @subpackage Structs
 */
class HotelListResponse extends AbstractStructBase
{
    /**
     * The MidocoHotelList
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoHotelList
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoHotelListType[]
     */
    protected ?array $MidocoHotelList = null;
    /**
     * The noOfResults
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $noOfResults = null;
    /**
     * Constructor method for HotelListResponse
     * @uses HotelListResponse::setMidocoHotelList()
     * @uses HotelListResponse::setNoOfResults()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoHotelListType[] $midocoHotelList
     * @param int $noOfResults
     */
    public function __construct(?array $midocoHotelList = null, ?int $noOfResults = null)
    {
        $this
            ->setMidocoHotelList($midocoHotelList)
            ->setNoOfResults($noOfResults);
    }
    /**
     * Get MidocoHotelList value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoHotelListType[]
     */
    public function getMidocoHotelList(): ?array
    {
        return $this->MidocoHotelList;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoHotelList method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoHotelList method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoHotelListForArrayConstraintsFromSetMidocoHotelList(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $hotelListResponseMidocoHotelListItem) {
            // validation for constraint: itemType
            if (!$hotelListResponseMidocoHotelListItem instanceof \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoHotelListType) {
                $invalidValues[] = is_object($hotelListResponseMidocoHotelListItem) ? get_class($hotelListResponseMidocoHotelListItem) : sprintf('%s(%s)', gettype($hotelListResponseMidocoHotelListItem), var_export($hotelListResponseMidocoHotelListItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoHotelList property can only contain items of type \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoHotelListType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoHotelList value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoHotelListType[] $midocoHotelList
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\HotelListResponse
     */
    public function setMidocoHotelList(?array $midocoHotelList = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoHotelListArrayErrorMessage = self::validateMidocoHotelListForArrayConstraintsFromSetMidocoHotelList($midocoHotelList))) {
            throw new InvalidArgumentException($midocoHotelListArrayErrorMessage, __LINE__);
        }
        $this->MidocoHotelList = $midocoHotelList;
        
        return $this;
    }
    /**
     * Add item to MidocoHotelList value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoHotelListType $item
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\HotelListResponse
     */
    public function addToMidocoHotelList(\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoHotelListType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoHotelListType) {
            throw new InvalidArgumentException(sprintf('The MidocoHotelList property can only contain items of type \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoHotelListType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoHotelList[] = $item;
        
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
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\HotelListResponse
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
