<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetInfoForCustomerResponse StructType
 * @subpackage Structs
 */
class GetInfoForCustomerResponse extends AbstractStructBase
{
    /**
     * The InfoForCustomer
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\InfoForCustomer[]
     */
    protected ?array $InfoForCustomer = null;
    /**
     * The InfoForCustomerSum
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\InfoForCustomer|null
     */
    protected ?\Pggns\MidocoApi\Api\Orderlists\StructType\InfoForCustomer $InfoForCustomerSum = null;
    /**
     * The noOfResults
     * @var int|null
     */
    protected ?int $noOfResults = null;
    /**
     * Constructor method for GetInfoForCustomerResponse
     * @uses GetInfoForCustomerResponse::setInfoForCustomer()
     * @uses GetInfoForCustomerResponse::setInfoForCustomerSum()
     * @uses GetInfoForCustomerResponse::setNoOfResults()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\InfoForCustomer[] $infoForCustomer
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\InfoForCustomer $infoForCustomerSum
     * @param int $noOfResults
     */
    public function __construct(?array $infoForCustomer = null, ?\Pggns\MidocoApi\Api\Orderlists\StructType\InfoForCustomer $infoForCustomerSum = null, ?int $noOfResults = null)
    {
        $this
            ->setInfoForCustomer($infoForCustomer)
            ->setInfoForCustomerSum($infoForCustomerSum)
            ->setNoOfResults($noOfResults);
    }
    /**
     * Get InfoForCustomer value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\InfoForCustomer[]
     */
    public function getInfoForCustomer(): ?array
    {
        return $this->InfoForCustomer;
    }
    /**
     * This method is responsible for validating the values passed to the setInfoForCustomer method
     * This method is willingly generated in order to preserve the one-line inline validation within the setInfoForCustomer method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateInfoForCustomerForArrayConstraintsFromSetInfoForCustomer(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getInfoForCustomerResponseInfoForCustomerItem) {
            // validation for constraint: itemType
            if (!$getInfoForCustomerResponseInfoForCustomerItem instanceof \Pggns\MidocoApi\Api\Orderlists\StructType\InfoForCustomer) {
                $invalidValues[] = is_object($getInfoForCustomerResponseInfoForCustomerItem) ? get_class($getInfoForCustomerResponseInfoForCustomerItem) : sprintf('%s(%s)', gettype($getInfoForCustomerResponseInfoForCustomerItem), var_export($getInfoForCustomerResponseInfoForCustomerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The InfoForCustomer property can only contain items of type \Pggns\MidocoApi\Api\Orderlists\StructType\InfoForCustomer, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set InfoForCustomer value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\InfoForCustomer[] $infoForCustomer
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\GetInfoForCustomerResponse
     */
    public function setInfoForCustomer(?array $infoForCustomer = null): self
    {
        // validation for constraint: array
        if ('' !== ($infoForCustomerArrayErrorMessage = self::validateInfoForCustomerForArrayConstraintsFromSetInfoForCustomer($infoForCustomer))) {
            throw new InvalidArgumentException($infoForCustomerArrayErrorMessage, __LINE__);
        }
        $this->InfoForCustomer = $infoForCustomer;
        
        return $this;
    }
    /**
     * Add item to InfoForCustomer value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\InfoForCustomer $item
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\GetInfoForCustomerResponse
     */
    public function addToInfoForCustomer(\Pggns\MidocoApi\Api\Orderlists\StructType\InfoForCustomer $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Orderlists\StructType\InfoForCustomer) {
            throw new InvalidArgumentException(sprintf('The InfoForCustomer property can only contain items of type \Pggns\MidocoApi\Api\Orderlists\StructType\InfoForCustomer, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->InfoForCustomer[] = $item;
        
        return $this;
    }
    /**
     * Get InfoForCustomerSum value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\InfoForCustomer|null
     */
    public function getInfoForCustomerSum(): ?\Pggns\MidocoApi\Api\Orderlists\StructType\InfoForCustomer
    {
        return $this->InfoForCustomerSum;
    }
    /**
     * Set InfoForCustomerSum value
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\InfoForCustomer $infoForCustomerSum
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\GetInfoForCustomerResponse
     */
    public function setInfoForCustomerSum(?\Pggns\MidocoApi\Api\Orderlists\StructType\InfoForCustomer $infoForCustomerSum = null): self
    {
        $this->InfoForCustomerSum = $infoForCustomerSum;
        
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
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\GetInfoForCustomerResponse
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
