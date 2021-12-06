<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchCustDoubleAddrResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: searchCustDoubleAddr --- search the customer with potential double addresses
 * @subpackage Structs
 */
class SearchCustDoubleAddrResponse extends AbstractStructBase
{
    /**
     * The MidocoCustDoubleAddrInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCustDoubleAddrInfo
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\CustomerDoubleAddrInfo[]
     */
    protected ?array $MidocoCustDoubleAddrInfo = null;
    /**
     * The numberOfResults
     * @var int|null
     */
    protected ?int $numberOfResults = null;
    /**
     * Constructor method for SearchCustDoubleAddrResponse
     * @uses SearchCustDoubleAddrResponse::setMidocoCustDoubleAddrInfo()
     * @uses SearchCustDoubleAddrResponse::setNumberOfResults()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\CustomerDoubleAddrInfo[] $midocoCustDoubleAddrInfo
     * @param int $numberOfResults
     */
    public function __construct(?array $midocoCustDoubleAddrInfo = null, ?int $numberOfResults = null)
    {
        $this
            ->setMidocoCustDoubleAddrInfo($midocoCustDoubleAddrInfo)
            ->setNumberOfResults($numberOfResults);
    }
    /**
     * Get MidocoCustDoubleAddrInfo value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\CustomerDoubleAddrInfo[]
     */
    public function getMidocoCustDoubleAddrInfo(): ?array
    {
        return $this->MidocoCustDoubleAddrInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCustDoubleAddrInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCustDoubleAddrInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCustDoubleAddrInfoForArrayConstraintsFromSetMidocoCustDoubleAddrInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchCustDoubleAddrResponseMidocoCustDoubleAddrInfoItem) {
            // validation for constraint: itemType
            if (!$searchCustDoubleAddrResponseMidocoCustDoubleAddrInfoItem instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\CustomerDoubleAddrInfo) {
                $invalidValues[] = is_object($searchCustDoubleAddrResponseMidocoCustDoubleAddrInfoItem) ? get_class($searchCustDoubleAddrResponseMidocoCustDoubleAddrInfoItem) : sprintf('%s(%s)', gettype($searchCustDoubleAddrResponseMidocoCustDoubleAddrInfoItem), var_export($searchCustDoubleAddrResponseMidocoCustDoubleAddrInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCustDoubleAddrInfo property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\CustomerDoubleAddrInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCustDoubleAddrInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\CustomerDoubleAddrInfo[] $midocoCustDoubleAddrInfo
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\SearchCustDoubleAddrResponse
     */
    public function setMidocoCustDoubleAddrInfo(?array $midocoCustDoubleAddrInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCustDoubleAddrInfoArrayErrorMessage = self::validateMidocoCustDoubleAddrInfoForArrayConstraintsFromSetMidocoCustDoubleAddrInfo($midocoCustDoubleAddrInfo))) {
            throw new InvalidArgumentException($midocoCustDoubleAddrInfoArrayErrorMessage, __LINE__);
        }
        $this->MidocoCustDoubleAddrInfo = $midocoCustDoubleAddrInfo;
        
        return $this;
    }
    /**
     * Add item to MidocoCustDoubleAddrInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\CustomerDoubleAddrInfo $item
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\SearchCustDoubleAddrResponse
     */
    public function addToMidocoCustDoubleAddrInfo(\Pggns\MidocoApi\Api\CrmSD\StructType\CustomerDoubleAddrInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\CustomerDoubleAddrInfo) {
            throw new InvalidArgumentException(sprintf('The MidocoCustDoubleAddrInfo property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\CustomerDoubleAddrInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCustDoubleAddrInfo[] = $item;
        
        return $this;
    }
    /**
     * Get numberOfResults value
     * @return int|null
     */
    public function getNumberOfResults(): ?int
    {
        return $this->numberOfResults;
    }
    /**
     * Set numberOfResults value
     * @param int $numberOfResults
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\SearchCustDoubleAddrResponse
     */
    public function setNumberOfResults(?int $numberOfResults = null): self
    {
        // validation for constraint: int
        if (!is_null($numberOfResults) && !(is_int($numberOfResults) || ctype_digit($numberOfResults))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfResults, true), gettype($numberOfResults)), __LINE__);
        }
        $this->numberOfResults = $numberOfResults;
        
        return $this;
    }
}
