<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BillingListResponse StructType
 * @subpackage Structs
 */
class BillingListResponse extends AbstractStructBase
{
    /**
     * The MidocoBillingListResults
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBillingListResults
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingListResultsType[]
     */
    protected ?array $MidocoBillingListResults = null;
    /**
     * The noOfResults
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $noOfResults = null;
    /**
     * The Sums
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingListResultsType|null
     */
    protected ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingListResultsType $Sums = null;
    /**
     * Constructor method for BillingListResponse
     * @uses BillingListResponse::setMidocoBillingListResults()
     * @uses BillingListResponse::setNoOfResults()
     * @uses BillingListResponse::setSums()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingListResultsType[] $midocoBillingListResults
     * @param int $noOfResults
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingListResultsType $sums
     */
    public function __construct(?array $midocoBillingListResults = null, ?int $noOfResults = null, ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingListResultsType $sums = null)
    {
        $this
            ->setMidocoBillingListResults($midocoBillingListResults)
            ->setNoOfResults($noOfResults)
            ->setSums($sums);
    }
    /**
     * Get MidocoBillingListResults value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingListResultsType[]
     */
    public function getMidocoBillingListResults(): ?array
    {
        return $this->MidocoBillingListResults;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoBillingListResults method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBillingListResults method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBillingListResultsForArrayConstraintsFromSetMidocoBillingListResults(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $billingListResponseMidocoBillingListResultsItem) {
            // validation for constraint: itemType
            if (!$billingListResponseMidocoBillingListResultsItem instanceof \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingListResultsType) {
                $invalidValues[] = is_object($billingListResponseMidocoBillingListResultsItem) ? get_class($billingListResponseMidocoBillingListResultsItem) : sprintf('%s(%s)', gettype($billingListResponseMidocoBillingListResultsItem), var_export($billingListResponseMidocoBillingListResultsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBillingListResults property can only contain items of type \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingListResultsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBillingListResults value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingListResultsType[] $midocoBillingListResults
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\BillingListResponse
     */
    public function setMidocoBillingListResults(?array $midocoBillingListResults = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBillingListResultsArrayErrorMessage = self::validateMidocoBillingListResultsForArrayConstraintsFromSetMidocoBillingListResults($midocoBillingListResults))) {
            throw new InvalidArgumentException($midocoBillingListResultsArrayErrorMessage, __LINE__);
        }
        $this->MidocoBillingListResults = $midocoBillingListResults;
        
        return $this;
    }
    /**
     * Add item to MidocoBillingListResults value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingListResultsType $item
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\BillingListResponse
     */
    public function addToMidocoBillingListResults(\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingListResultsType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingListResultsType) {
            throw new InvalidArgumentException(sprintf('The MidocoBillingListResults property can only contain items of type \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingListResultsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBillingListResults[] = $item;
        
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
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\BillingListResponse
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
     * Get Sums value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingListResultsType|null
     */
    public function getSums(): ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingListResultsType
    {
        return $this->Sums;
    }
    /**
     * Set Sums value
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingListResultsType $sums
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\BillingListResponse
     */
    public function setSums(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingListResultsType $sums = null): self
    {
        $this->Sums = $sums;
        
        return $this;
    }
}
