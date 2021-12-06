<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TicketListResponse StructType
 * @subpackage Structs
 */
class TicketListResponse extends AbstractStructBase
{
    /**
     * The MidocoTicketList
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTicketList
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTicketListType[]
     */
    protected ?array $MidocoTicketList = null;
    /**
     * The noOfResults
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $noOfResults = null;
    /**
     * The MidocoTicketListSums
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTicketListType|null
     */
    protected ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTicketListType $MidocoTicketListSums = null;
    /**
     * Constructor method for TicketListResponse
     * @uses TicketListResponse::setMidocoTicketList()
     * @uses TicketListResponse::setNoOfResults()
     * @uses TicketListResponse::setMidocoTicketListSums()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTicketListType[] $midocoTicketList
     * @param int $noOfResults
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTicketListType $midocoTicketListSums
     */
    public function __construct(?array $midocoTicketList = null, ?int $noOfResults = null, ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTicketListType $midocoTicketListSums = null)
    {
        $this
            ->setMidocoTicketList($midocoTicketList)
            ->setNoOfResults($noOfResults)
            ->setMidocoTicketListSums($midocoTicketListSums);
    }
    /**
     * Get MidocoTicketList value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTicketListType[]
     */
    public function getMidocoTicketList(): ?array
    {
        return $this->MidocoTicketList;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoTicketList method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTicketList method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTicketListForArrayConstraintsFromSetMidocoTicketList(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $ticketListResponseMidocoTicketListItem) {
            // validation for constraint: itemType
            if (!$ticketListResponseMidocoTicketListItem instanceof \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTicketListType) {
                $invalidValues[] = is_object($ticketListResponseMidocoTicketListItem) ? get_class($ticketListResponseMidocoTicketListItem) : sprintf('%s(%s)', gettype($ticketListResponseMidocoTicketListItem), var_export($ticketListResponseMidocoTicketListItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTicketList property can only contain items of type \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTicketListType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTicketList value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTicketListType[] $midocoTicketList
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\TicketListResponse
     */
    public function setMidocoTicketList(?array $midocoTicketList = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTicketListArrayErrorMessage = self::validateMidocoTicketListForArrayConstraintsFromSetMidocoTicketList($midocoTicketList))) {
            throw new InvalidArgumentException($midocoTicketListArrayErrorMessage, __LINE__);
        }
        $this->MidocoTicketList = $midocoTicketList;
        
        return $this;
    }
    /**
     * Add item to MidocoTicketList value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTicketListType $item
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\TicketListResponse
     */
    public function addToMidocoTicketList(\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTicketListType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTicketListType) {
            throw new InvalidArgumentException(sprintf('The MidocoTicketList property can only contain items of type \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTicketListType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTicketList[] = $item;
        
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
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\TicketListResponse
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
    /**
     * Get MidocoTicketListSums value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTicketListType|null
     */
    public function getMidocoTicketListSums(): ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTicketListType
    {
        return $this->MidocoTicketListSums;
    }
    /**
     * Set MidocoTicketListSums value
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTicketListType $midocoTicketListSums
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\TicketListResponse
     */
    public function setMidocoTicketListSums(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoTicketListType $midocoTicketListSums = null): self
    {
        $this->MidocoTicketListSums = $midocoTicketListSums;
        
        return $this;
    }
}
