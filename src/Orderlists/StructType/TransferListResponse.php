<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransferListResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class TransferListResponse extends AbstractStructBase
{
    /**
     * The MidocoTransferList
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTransferList
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoTransferListType[]
     */
    protected ?array $MidocoTransferList = null;
    /**
     * The noOfResults
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $noOfResults = null;
    /**
     * Constructor method for TransferListResponse
     * @uses TransferListResponse::setMidocoTransferList()
     * @uses TransferListResponse::setNoOfResults()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoTransferListType[] $midocoTransferList
     * @param int $noOfResults
     */
    public function __construct(?array $midocoTransferList = null, ?int $noOfResults = null)
    {
        $this
            ->setMidocoTransferList($midocoTransferList)
            ->setNoOfResults($noOfResults);
    }
    /**
     * Get MidocoTransferList value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoTransferListType[]
     */
    public function getMidocoTransferList(): ?array
    {
        return $this->MidocoTransferList;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoTransferList method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTransferList method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTransferListForArrayConstraintFromSetMidocoTransferList(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $transferListResponseMidocoTransferListItem) {
            // validation for constraint: itemType
            if (!$transferListResponseMidocoTransferListItem instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoTransferListType) {
                $invalidValues[] = is_object($transferListResponseMidocoTransferListItem) ? get_class($transferListResponseMidocoTransferListItem) : sprintf('%s(%s)', gettype($transferListResponseMidocoTransferListItem), var_export($transferListResponseMidocoTransferListItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTransferList property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoTransferListType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTransferList value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoTransferListType[] $midocoTransferList
     * @return \Pggns\MidocoApi\Orderlists\StructType\TransferListResponse
     */
    public function setMidocoTransferList(?array $midocoTransferList = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTransferListArrayErrorMessage = self::validateMidocoTransferListForArrayConstraintFromSetMidocoTransferList($midocoTransferList))) {
            throw new InvalidArgumentException($midocoTransferListArrayErrorMessage, __LINE__);
        }
        $this->MidocoTransferList = $midocoTransferList;
        
        return $this;
    }
    /**
     * Add item to MidocoTransferList value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoTransferListType $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\TransferListResponse
     */
    public function addToMidocoTransferList(\Pggns\MidocoApi\Orderlists\StructType\MidocoTransferListType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoTransferListType) {
            throw new InvalidArgumentException(sprintf('The MidocoTransferList property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoTransferListType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTransferList[] = $item;
        
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\TransferListResponse
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
