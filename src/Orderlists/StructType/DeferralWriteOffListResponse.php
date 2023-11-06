<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeferralWriteOffListResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeferralWriteOffListResponse extends AbstractStructBase
{
    /**
     * The midocoDeferralWriteOffOutputList
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralWriteOffOutputListType[]
     */
    protected ?array $midocoDeferralWriteOffOutputList = null;
    /**
     * The noOfResults
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $noOfResults = null;
    /**
     * Constructor method for DeferralWriteOffListResponse
     * @uses DeferralWriteOffListResponse::setMidocoDeferralWriteOffOutputList()
     * @uses DeferralWriteOffListResponse::setNoOfResults()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralWriteOffOutputListType[] $midocoDeferralWriteOffOutputList
     * @param int $noOfResults
     */
    public function __construct(?array $midocoDeferralWriteOffOutputList = null, ?int $noOfResults = null)
    {
        $this
            ->setMidocoDeferralWriteOffOutputList($midocoDeferralWriteOffOutputList)
            ->setNoOfResults($noOfResults);
    }
    /**
     * Get midocoDeferralWriteOffOutputList value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralWriteOffOutputListType[]
     */
    public function getMidocoDeferralWriteOffOutputList(): ?array
    {
        return $this->midocoDeferralWriteOffOutputList;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoDeferralWriteOffOutputList method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoDeferralWriteOffOutputList method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoDeferralWriteOffOutputListForArrayConstraintFromSetMidocoDeferralWriteOffOutputList(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $deferralWriteOffListResponseMidocoDeferralWriteOffOutputListItem) {
            // validation for constraint: itemType
            if (!$deferralWriteOffListResponseMidocoDeferralWriteOffOutputListItem instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralWriteOffOutputListType) {
                $invalidValues[] = is_object($deferralWriteOffListResponseMidocoDeferralWriteOffOutputListItem) ? get_class($deferralWriteOffListResponseMidocoDeferralWriteOffOutputListItem) : sprintf('%s(%s)', gettype($deferralWriteOffListResponseMidocoDeferralWriteOffOutputListItem), var_export($deferralWriteOffListResponseMidocoDeferralWriteOffOutputListItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The midocoDeferralWriteOffOutputList property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralWriteOffOutputListType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set midocoDeferralWriteOffOutputList value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralWriteOffOutputListType[] $midocoDeferralWriteOffOutputList
     * @return \Pggns\MidocoApi\Orderlists\StructType\DeferralWriteOffListResponse
     */
    public function setMidocoDeferralWriteOffOutputList(?array $midocoDeferralWriteOffOutputList = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoDeferralWriteOffOutputListArrayErrorMessage = self::validateMidocoDeferralWriteOffOutputListForArrayConstraintFromSetMidocoDeferralWriteOffOutputList($midocoDeferralWriteOffOutputList))) {
            throw new InvalidArgumentException($midocoDeferralWriteOffOutputListArrayErrorMessage, __LINE__);
        }
        $this->midocoDeferralWriteOffOutputList = $midocoDeferralWriteOffOutputList;
        
        return $this;
    }
    /**
     * Add item to midocoDeferralWriteOffOutputList value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralWriteOffOutputListType $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\DeferralWriteOffListResponse
     */
    public function addToMidocoDeferralWriteOffOutputList(\Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralWriteOffOutputListType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralWriteOffOutputListType) {
            throw new InvalidArgumentException(sprintf('The midocoDeferralWriteOffOutputList property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralWriteOffOutputListType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->midocoDeferralWriteOffOutputList[] = $item;
        
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\DeferralWriteOffListResponse
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
