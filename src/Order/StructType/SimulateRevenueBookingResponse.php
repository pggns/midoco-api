<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SimulateRevenueBookingResponse StructType
 * @subpackage Structs
 */
class SimulateRevenueBookingResponse extends AbstractStructBase
{
    /**
     * The MidocoBookingJournal
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBookingJournal
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoBookingJournal[]
     */
    protected ?array $MidocoBookingJournal = null;
    /**
     * Constructor method for SimulateRevenueBookingResponse
     * @uses SimulateRevenueBookingResponse::setMidocoBookingJournal()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoBookingJournal[] $midocoBookingJournal
     */
    public function __construct(?array $midocoBookingJournal = null)
    {
        $this
            ->setMidocoBookingJournal($midocoBookingJournal);
    }
    /**
     * Get MidocoBookingJournal value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoBookingJournal[]
     */
    public function getMidocoBookingJournal(): ?array
    {
        return $this->MidocoBookingJournal;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoBookingJournal method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBookingJournal method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBookingJournalForArrayConstraintsFromSetMidocoBookingJournal(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $simulateRevenueBookingResponseMidocoBookingJournalItem) {
            // validation for constraint: itemType
            if (!$simulateRevenueBookingResponseMidocoBookingJournalItem instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoBookingJournal) {
                $invalidValues[] = is_object($simulateRevenueBookingResponseMidocoBookingJournalItem) ? get_class($simulateRevenueBookingResponseMidocoBookingJournalItem) : sprintf('%s(%s)', gettype($simulateRevenueBookingResponseMidocoBookingJournalItem), var_export($simulateRevenueBookingResponseMidocoBookingJournalItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBookingJournal property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoBookingJournal, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBookingJournal value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoBookingJournal[] $midocoBookingJournal
     * @return \Pggns\MidocoApi\Api\Order\StructType\SimulateRevenueBookingResponse
     */
    public function setMidocoBookingJournal(?array $midocoBookingJournal = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBookingJournalArrayErrorMessage = self::validateMidocoBookingJournalForArrayConstraintsFromSetMidocoBookingJournal($midocoBookingJournal))) {
            throw new InvalidArgumentException($midocoBookingJournalArrayErrorMessage, __LINE__);
        }
        $this->MidocoBookingJournal = $midocoBookingJournal;
        
        return $this;
    }
    /**
     * Add item to MidocoBookingJournal value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoBookingJournal $item
     * @return \Pggns\MidocoApi\Api\Order\StructType\SimulateRevenueBookingResponse
     */
    public function addToMidocoBookingJournal(\Pggns\MidocoApi\Api\Order\StructType\MidocoBookingJournal $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoBookingJournal) {
            throw new InvalidArgumentException(sprintf('The MidocoBookingJournal property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoBookingJournal, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBookingJournal[] = $item;
        
        return $this;
    }
}
