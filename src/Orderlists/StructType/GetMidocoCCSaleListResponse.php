<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoCCSaleListResponse StructType
 * @subpackage Structs
 */
class GetMidocoCCSaleListResponse extends AbstractStructBase
{
    /**
     * The MidocoCCSaleListType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $MidocoCCSaleListType = null;
    /**
     * The noOfResults
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $noOfResults = null;
    /**
     * Constructor method for GetMidocoCCSaleListResponse
     * @uses GetMidocoCCSaleListResponse::setMidocoCCSaleListType()
     * @uses GetMidocoCCSaleListResponse::setNoOfResults()
     * @param string[] $midocoCCSaleListType
     * @param int $noOfResults
     */
    public function __construct(?array $midocoCCSaleListType = null, ?int $noOfResults = null)
    {
        $this
            ->setMidocoCCSaleListType($midocoCCSaleListType)
            ->setNoOfResults($noOfResults);
    }
    /**
     * Get MidocoCCSaleListType value
     * @return string[]
     */
    public function getMidocoCCSaleListType(): ?array
    {
        return $this->MidocoCCSaleListType;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCCSaleListType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCCSaleListType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCCSaleListTypeForArrayConstraintsFromSetMidocoCCSaleListType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMidocoCCSaleListResponseMidocoCCSaleListTypeItem) {
            // validation for constraint: itemType
            if (!is_string($getMidocoCCSaleListResponseMidocoCCSaleListTypeItem)) {
                $invalidValues[] = is_object($getMidocoCCSaleListResponseMidocoCCSaleListTypeItem) ? get_class($getMidocoCCSaleListResponseMidocoCCSaleListTypeItem) : sprintf('%s(%s)', gettype($getMidocoCCSaleListResponseMidocoCCSaleListTypeItem), var_export($getMidocoCCSaleListResponseMidocoCCSaleListTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCCSaleListType property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCCSaleListType value
     * @throws InvalidArgumentException
     * @param string[] $midocoCCSaleListType
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\GetMidocoCCSaleListResponse
     */
    public function setMidocoCCSaleListType(?array $midocoCCSaleListType = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCCSaleListTypeArrayErrorMessage = self::validateMidocoCCSaleListTypeForArrayConstraintsFromSetMidocoCCSaleListType($midocoCCSaleListType))) {
            throw new InvalidArgumentException($midocoCCSaleListTypeArrayErrorMessage, __LINE__);
        }
        $this->MidocoCCSaleListType = $midocoCCSaleListType;
        
        return $this;
    }
    /**
     * Add item to MidocoCCSaleListType value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\GetMidocoCCSaleListResponse
     */
    public function addToMidocoCCSaleListType(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The MidocoCCSaleListType property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCCSaleListType[] = $item;
        
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
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\GetMidocoCCSaleListResponse
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
