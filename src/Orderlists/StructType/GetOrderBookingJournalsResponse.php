<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrderBookingJournalsResponse StructType
 * @subpackage Structs
 */
class GetOrderBookingJournalsResponse extends AbstractStructBase
{
    /**
     * The MidocoJournalPosition
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: order:MidocoJournalPosition
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoJournalPosition[]
     */
    protected ?array $MidocoJournalPosition = null;
    /**
     * Constructor method for GetOrderBookingJournalsResponse
     * @uses GetOrderBookingJournalsResponse::setMidocoJournalPosition()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoJournalPosition[] $midocoJournalPosition
     */
    public function __construct(?array $midocoJournalPosition = null)
    {
        $this
            ->setMidocoJournalPosition($midocoJournalPosition);
    }
    /**
     * Get MidocoJournalPosition value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoJournalPosition[]
     */
    public function getMidocoJournalPosition(): ?array
    {
        return $this->MidocoJournalPosition;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoJournalPosition method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoJournalPosition method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoJournalPositionForArrayConstraintsFromSetMidocoJournalPosition(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getOrderBookingJournalsResponseMidocoJournalPositionItem) {
            // validation for constraint: itemType
            if (!$getOrderBookingJournalsResponseMidocoJournalPositionItem instanceof \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoJournalPosition) {
                $invalidValues[] = is_object($getOrderBookingJournalsResponseMidocoJournalPositionItem) ? get_class($getOrderBookingJournalsResponseMidocoJournalPositionItem) : sprintf('%s(%s)', gettype($getOrderBookingJournalsResponseMidocoJournalPositionItem), var_export($getOrderBookingJournalsResponseMidocoJournalPositionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoJournalPosition property can only contain items of type \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoJournalPosition, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoJournalPosition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoJournalPosition[] $midocoJournalPosition
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\GetOrderBookingJournalsResponse
     */
    public function setMidocoJournalPosition(?array $midocoJournalPosition = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoJournalPositionArrayErrorMessage = self::validateMidocoJournalPositionForArrayConstraintsFromSetMidocoJournalPosition($midocoJournalPosition))) {
            throw new InvalidArgumentException($midocoJournalPositionArrayErrorMessage, __LINE__);
        }
        $this->MidocoJournalPosition = $midocoJournalPosition;
        
        return $this;
    }
    /**
     * Add item to MidocoJournalPosition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoJournalPosition $item
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\GetOrderBookingJournalsResponse
     */
    public function addToMidocoJournalPosition(\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoJournalPosition $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoJournalPosition) {
            throw new InvalidArgumentException(sprintf('The MidocoJournalPosition property can only contain items of type \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoJournalPosition, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoJournalPosition[] = $item;
        
        return $this;
    }
}
