<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConnectedCustomerListResponse StructType
 * @subpackage Structs
 */
class ConnectedCustomerListResponse extends AbstractStructBase
{
    /**
     * The MidocoConnectedCustomerList
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoConnectedCustomerList
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoConnectedCustomerListType[]
     */
    protected ?array $MidocoConnectedCustomerList = null;
    /**
     * The noOfResults
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $noOfResults = null;
    /**
     * The MidocoConnectedCustomerListSums
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoConnectedCustomerListType|null
     */
    protected ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoConnectedCustomerListType $MidocoConnectedCustomerListSums = null;
    /**
     * Constructor method for ConnectedCustomerListResponse
     * @uses ConnectedCustomerListResponse::setMidocoConnectedCustomerList()
     * @uses ConnectedCustomerListResponse::setNoOfResults()
     * @uses ConnectedCustomerListResponse::setMidocoConnectedCustomerListSums()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoConnectedCustomerListType[] $midocoConnectedCustomerList
     * @param int $noOfResults
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoConnectedCustomerListType $midocoConnectedCustomerListSums
     */
    public function __construct(?array $midocoConnectedCustomerList = null, ?int $noOfResults = null, ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoConnectedCustomerListType $midocoConnectedCustomerListSums = null)
    {
        $this
            ->setMidocoConnectedCustomerList($midocoConnectedCustomerList)
            ->setNoOfResults($noOfResults)
            ->setMidocoConnectedCustomerListSums($midocoConnectedCustomerListSums);
    }
    /**
     * Get MidocoConnectedCustomerList value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoConnectedCustomerListType[]
     */
    public function getMidocoConnectedCustomerList(): ?array
    {
        return $this->MidocoConnectedCustomerList;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoConnectedCustomerList method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoConnectedCustomerList method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoConnectedCustomerListForArrayConstraintsFromSetMidocoConnectedCustomerList(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $connectedCustomerListResponseMidocoConnectedCustomerListItem) {
            // validation for constraint: itemType
            if (!$connectedCustomerListResponseMidocoConnectedCustomerListItem instanceof \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoConnectedCustomerListType) {
                $invalidValues[] = is_object($connectedCustomerListResponseMidocoConnectedCustomerListItem) ? get_class($connectedCustomerListResponseMidocoConnectedCustomerListItem) : sprintf('%s(%s)', gettype($connectedCustomerListResponseMidocoConnectedCustomerListItem), var_export($connectedCustomerListResponseMidocoConnectedCustomerListItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoConnectedCustomerList property can only contain items of type \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoConnectedCustomerListType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoConnectedCustomerList value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoConnectedCustomerListType[] $midocoConnectedCustomerList
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\ConnectedCustomerListResponse
     */
    public function setMidocoConnectedCustomerList(?array $midocoConnectedCustomerList = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoConnectedCustomerListArrayErrorMessage = self::validateMidocoConnectedCustomerListForArrayConstraintsFromSetMidocoConnectedCustomerList($midocoConnectedCustomerList))) {
            throw new InvalidArgumentException($midocoConnectedCustomerListArrayErrorMessage, __LINE__);
        }
        $this->MidocoConnectedCustomerList = $midocoConnectedCustomerList;
        
        return $this;
    }
    /**
     * Add item to MidocoConnectedCustomerList value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoConnectedCustomerListType $item
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\ConnectedCustomerListResponse
     */
    public function addToMidocoConnectedCustomerList(\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoConnectedCustomerListType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoConnectedCustomerListType) {
            throw new InvalidArgumentException(sprintf('The MidocoConnectedCustomerList property can only contain items of type \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoConnectedCustomerListType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoConnectedCustomerList[] = $item;
        
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
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\ConnectedCustomerListResponse
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
     * Get MidocoConnectedCustomerListSums value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoConnectedCustomerListType|null
     */
    public function getMidocoConnectedCustomerListSums(): ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoConnectedCustomerListType
    {
        return $this->MidocoConnectedCustomerListSums;
    }
    /**
     * Set MidocoConnectedCustomerListSums value
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoConnectedCustomerListType $midocoConnectedCustomerListSums
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\ConnectedCustomerListResponse
     */
    public function setMidocoConnectedCustomerListSums(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoConnectedCustomerListType $midocoConnectedCustomerListSums = null): self
    {
        $this->MidocoConnectedCustomerListSums = $midocoConnectedCustomerListSums;
        
        return $this;
    }
}
