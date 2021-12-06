<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ParticipantListResponse StructType
 * @subpackage Structs
 */
class ParticipantListResponse extends AbstractStructBase
{
    /**
     * The MidocoParticipantList
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoParticipantList[]
     */
    protected ?array $MidocoParticipantList = null;
    /**
     * The noOfResults
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $noOfResults = null;
    /**
     * The ParticipantListSums
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoParticipantListType|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoParticipantListType $ParticipantListSums = null;
    /**
     * Constructor method for ParticipantListResponse
     * @uses ParticipantListResponse::setMidocoParticipantList()
     * @uses ParticipantListResponse::setNoOfResults()
     * @uses ParticipantListResponse::setParticipantListSums()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoParticipantList[] $midocoParticipantList
     * @param int $noOfResults
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoParticipantListType $participantListSums
     */
    public function __construct(?array $midocoParticipantList = null, ?int $noOfResults = null, ?\Pggns\MidocoApi\Orderlists\StructType\MidocoParticipantListType $participantListSums = null)
    {
        $this
            ->setMidocoParticipantList($midocoParticipantList)
            ->setNoOfResults($noOfResults)
            ->setParticipantListSums($participantListSums);
    }
    /**
     * Get MidocoParticipantList value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoParticipantList[]
     */
    public function getMidocoParticipantList(): ?array
    {
        return $this->MidocoParticipantList;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoParticipantList method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoParticipantList method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoParticipantListForArrayConstraintsFromSetMidocoParticipantList(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $participantListResponseMidocoParticipantListItem) {
            // validation for constraint: itemType
            if (!$participantListResponseMidocoParticipantListItem instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoParticipantList) {
                $invalidValues[] = is_object($participantListResponseMidocoParticipantListItem) ? get_class($participantListResponseMidocoParticipantListItem) : sprintf('%s(%s)', gettype($participantListResponseMidocoParticipantListItem), var_export($participantListResponseMidocoParticipantListItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoParticipantList property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoParticipantList, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoParticipantList value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoParticipantList[] $midocoParticipantList
     * @return \Pggns\MidocoApi\Orderlists\StructType\ParticipantListResponse
     */
    public function setMidocoParticipantList(?array $midocoParticipantList = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoParticipantListArrayErrorMessage = self::validateMidocoParticipantListForArrayConstraintsFromSetMidocoParticipantList($midocoParticipantList))) {
            throw new InvalidArgumentException($midocoParticipantListArrayErrorMessage, __LINE__);
        }
        $this->MidocoParticipantList = $midocoParticipantList;
        
        return $this;
    }
    /**
     * Add item to MidocoParticipantList value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoParticipantList $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\ParticipantListResponse
     */
    public function addToMidocoParticipantList(\Pggns\MidocoApi\Orderlists\StructType\MidocoParticipantList $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoParticipantList) {
            throw new InvalidArgumentException(sprintf('The MidocoParticipantList property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoParticipantList, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoParticipantList[] = $item;
        
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\ParticipantListResponse
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
     * Get ParticipantListSums value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoParticipantListType|null
     */
    public function getParticipantListSums(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoParticipantListType
    {
        return $this->ParticipantListSums;
    }
    /**
     * Set ParticipantListSums value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoParticipantListType $participantListSums
     * @return \Pggns\MidocoApi\Orderlists\StructType\ParticipantListResponse
     */
    public function setParticipantListSums(?\Pggns\MidocoApi\Orderlists\StructType\MidocoParticipantListType $participantListSums = null): self
    {
        $this->ParticipantListSums = $participantListSums;
        
        return $this;
    }
}
