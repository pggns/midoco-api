<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckContactEntriesRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: check ContactEntries for customers or all if emtpy
 * @subpackage Structs
 */
class CheckContactEntriesRequest extends AbstractStructBase
{
    /**
     * The MidocoCustomerId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCustomerId
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\CustomerIdDTO[]
     */
    protected ?array $MidocoCustomerId = null;
    /**
     * The noOfResults
     * Meta information extracted from the WSDL
     * - default: 1000
     * @var int|null
     */
    protected ?int $noOfResults = null;
    /**
     * Constructor method for CheckContactEntriesRequest
     * @uses CheckContactEntriesRequest::setMidocoCustomerId()
     * @uses CheckContactEntriesRequest::setNoOfResults()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\CustomerIdDTO[] $midocoCustomerId
     * @param int $noOfResults
     */
    public function __construct(?array $midocoCustomerId = null, ?int $noOfResults = 1000)
    {
        $this
            ->setMidocoCustomerId($midocoCustomerId)
            ->setNoOfResults($noOfResults);
    }
    /**
     * Get MidocoCustomerId value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\CustomerIdDTO[]
     */
    public function getMidocoCustomerId(): ?array
    {
        return $this->MidocoCustomerId;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCustomerId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCustomerId method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCustomerIdForArrayConstraintsFromSetMidocoCustomerId(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $checkContactEntriesRequestMidocoCustomerIdItem) {
            // validation for constraint: itemType
            if (!$checkContactEntriesRequestMidocoCustomerIdItem instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\CustomerIdDTO) {
                $invalidValues[] = is_object($checkContactEntriesRequestMidocoCustomerIdItem) ? get_class($checkContactEntriesRequestMidocoCustomerIdItem) : sprintf('%s(%s)', gettype($checkContactEntriesRequestMidocoCustomerIdItem), var_export($checkContactEntriesRequestMidocoCustomerIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCustomerId property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\CustomerIdDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCustomerId value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\CustomerIdDTO[] $midocoCustomerId
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\CheckContactEntriesRequest
     */
    public function setMidocoCustomerId(?array $midocoCustomerId = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCustomerIdArrayErrorMessage = self::validateMidocoCustomerIdForArrayConstraintsFromSetMidocoCustomerId($midocoCustomerId))) {
            throw new InvalidArgumentException($midocoCustomerIdArrayErrorMessage, __LINE__);
        }
        $this->MidocoCustomerId = $midocoCustomerId;
        
        return $this;
    }
    /**
     * Add item to MidocoCustomerId value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\CustomerIdDTO $item
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\CheckContactEntriesRequest
     */
    public function addToMidocoCustomerId(\Pggns\MidocoApi\Api\CrmSD\StructType\CustomerIdDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\CustomerIdDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCustomerId property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\CustomerIdDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCustomerId[] = $item;
        
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
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\CheckContactEntriesRequest
     */
    public function setNoOfResults(?int $noOfResults = 1000): self
    {
        // validation for constraint: int
        if (!is_null($noOfResults) && !(is_int($noOfResults) || ctype_digit($noOfResults))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noOfResults, true), gettype($noOfResults)), __LINE__);
        }
        $this->noOfResults = $noOfResults;
        
        return $this;
    }
}
