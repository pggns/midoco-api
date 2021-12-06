<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CCAccessListResponse StructType
 * @subpackage Structs
 */
class CCAccessListResponse extends AbstractStructBase
{
    /**
     * The MidocoCCAccessList
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoCCAccessListType[]
     */
    protected ?array $MidocoCCAccessList = null;
    /**
     * The noOfResults
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $noOfResults = null;
    /**
     * Constructor method for CCAccessListResponse
     * @uses CCAccessListResponse::setMidocoCCAccessList()
     * @uses CCAccessListResponse::setNoOfResults()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoCCAccessListType[] $midocoCCAccessList
     * @param int $noOfResults
     */
    public function __construct(?array $midocoCCAccessList = null, ?int $noOfResults = null)
    {
        $this
            ->setMidocoCCAccessList($midocoCCAccessList)
            ->setNoOfResults($noOfResults);
    }
    /**
     * Get MidocoCCAccessList value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoCCAccessListType[]
     */
    public function getMidocoCCAccessList(): ?array
    {
        return $this->MidocoCCAccessList;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCCAccessList method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCCAccessList method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCCAccessListForArrayConstraintsFromSetMidocoCCAccessList(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $cCAccessListResponseMidocoCCAccessListItem) {
            // validation for constraint: itemType
            if (!$cCAccessListResponseMidocoCCAccessListItem instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoCCAccessListType) {
                $invalidValues[] = is_object($cCAccessListResponseMidocoCCAccessListItem) ? get_class($cCAccessListResponseMidocoCCAccessListItem) : sprintf('%s(%s)', gettype($cCAccessListResponseMidocoCCAccessListItem), var_export($cCAccessListResponseMidocoCCAccessListItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCCAccessList property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoCCAccessListType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCCAccessList value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoCCAccessListType[] $midocoCCAccessList
     * @return \Pggns\MidocoApi\Orderlists\StructType\CCAccessListResponse
     */
    public function setMidocoCCAccessList(?array $midocoCCAccessList = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCCAccessListArrayErrorMessage = self::validateMidocoCCAccessListForArrayConstraintsFromSetMidocoCCAccessList($midocoCCAccessList))) {
            throw new InvalidArgumentException($midocoCCAccessListArrayErrorMessage, __LINE__);
        }
        $this->MidocoCCAccessList = $midocoCCAccessList;
        
        return $this;
    }
    /**
     * Add item to MidocoCCAccessList value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoCCAccessListType $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\CCAccessListResponse
     */
    public function addToMidocoCCAccessList(\Pggns\MidocoApi\Orderlists\StructType\MidocoCCAccessListType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoCCAccessListType) {
            throw new InvalidArgumentException(sprintf('The MidocoCCAccessList property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoCCAccessListType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCCAccessList[] = $item;
        
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\CCAccessListResponse
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
