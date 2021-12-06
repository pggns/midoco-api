<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBookingSourcesResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getBookingSources --- returns the list of booking sources
 * @subpackage Structs
 */
class GetBookingSourcesResponse extends AbstractStructBase
{
    /**
     * The MidocoBookingSource
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBookingSource
     * @var \Pggns\MidocoApi\CrmSD\StructType\BookingSourceDTO[]
     */
    protected ?array $MidocoBookingSource = null;
    /**
     * Constructor method for GetBookingSourcesResponse
     * @uses GetBookingSourcesResponse::setMidocoBookingSource()
     * @param \Pggns\MidocoApi\CrmSD\StructType\BookingSourceDTO[] $midocoBookingSource
     */
    public function __construct(?array $midocoBookingSource = null)
    {
        $this
            ->setMidocoBookingSource($midocoBookingSource);
    }
    /**
     * Get MidocoBookingSource value
     * @return \Pggns\MidocoApi\CrmSD\StructType\BookingSourceDTO[]
     */
    public function getMidocoBookingSource(): ?array
    {
        return $this->MidocoBookingSource;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoBookingSource method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBookingSource method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBookingSourceForArrayConstraintsFromSetMidocoBookingSource(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getBookingSourcesResponseMidocoBookingSourceItem) {
            // validation for constraint: itemType
            if (!$getBookingSourcesResponseMidocoBookingSourceItem instanceof \Pggns\MidocoApi\CrmSD\StructType\BookingSourceDTO) {
                $invalidValues[] = is_object($getBookingSourcesResponseMidocoBookingSourceItem) ? get_class($getBookingSourcesResponseMidocoBookingSourceItem) : sprintf('%s(%s)', gettype($getBookingSourcesResponseMidocoBookingSourceItem), var_export($getBookingSourcesResponseMidocoBookingSourceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBookingSource property can only contain items of type \Pggns\MidocoApi\CrmSD\StructType\BookingSourceDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBookingSource value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\CrmSD\StructType\BookingSourceDTO[] $midocoBookingSource
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetBookingSourcesResponse
     */
    public function setMidocoBookingSource(?array $midocoBookingSource = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBookingSourceArrayErrorMessage = self::validateMidocoBookingSourceForArrayConstraintsFromSetMidocoBookingSource($midocoBookingSource))) {
            throw new InvalidArgumentException($midocoBookingSourceArrayErrorMessage, __LINE__);
        }
        $this->MidocoBookingSource = $midocoBookingSource;
        
        return $this;
    }
    /**
     * Add item to MidocoBookingSource value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\CrmSD\StructType\BookingSourceDTO $item
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetBookingSourcesResponse
     */
    public function addToMidocoBookingSource(\Pggns\MidocoApi\CrmSD\StructType\BookingSourceDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\CrmSD\StructType\BookingSourceDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoBookingSource property can only contain items of type \Pggns\MidocoApi\CrmSD\StructType\BookingSourceDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBookingSource[] = $item;
        
        return $this;
    }
}
