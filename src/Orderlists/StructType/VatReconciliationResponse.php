<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VatReconciliationResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class VatReconciliationResponse extends AbstractStructBase
{
    /**
     * The MidocoVatReconciliation
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoVatReconciliationType[]
     */
    protected ?array $MidocoVatReconciliation = null;
    /**
     * The MidocoVatReconciliationSums
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoVatReconciliationSumsType[]
     */
    protected ?array $MidocoVatReconciliationSums = null;
    /**
     * The noOfResults
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $noOfResults = null;
    /**
     * Constructor method for VatReconciliationResponse
     * @uses VatReconciliationResponse::setMidocoVatReconciliation()
     * @uses VatReconciliationResponse::setMidocoVatReconciliationSums()
     * @uses VatReconciliationResponse::setNoOfResults()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoVatReconciliationType[] $midocoVatReconciliation
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoVatReconciliationSumsType[] $midocoVatReconciliationSums
     * @param int $noOfResults
     */
    public function __construct(?array $midocoVatReconciliation = null, ?array $midocoVatReconciliationSums = null, ?int $noOfResults = null)
    {
        $this
            ->setMidocoVatReconciliation($midocoVatReconciliation)
            ->setMidocoVatReconciliationSums($midocoVatReconciliationSums)
            ->setNoOfResults($noOfResults);
    }
    /**
     * Get MidocoVatReconciliation value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoVatReconciliationType[]
     */
    public function getMidocoVatReconciliation(): ?array
    {
        return $this->MidocoVatReconciliation;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoVatReconciliation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoVatReconciliation method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoVatReconciliationForArrayConstraintFromSetMidocoVatReconciliation(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $vatReconciliationResponseMidocoVatReconciliationItem) {
            // validation for constraint: itemType
            if (!$vatReconciliationResponseMidocoVatReconciliationItem instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoVatReconciliationType) {
                $invalidValues[] = is_object($vatReconciliationResponseMidocoVatReconciliationItem) ? get_class($vatReconciliationResponseMidocoVatReconciliationItem) : sprintf('%s(%s)', gettype($vatReconciliationResponseMidocoVatReconciliationItem), var_export($vatReconciliationResponseMidocoVatReconciliationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoVatReconciliation property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoVatReconciliationType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoVatReconciliation value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoVatReconciliationType[] $midocoVatReconciliation
     * @return \Pggns\MidocoApi\Orderlists\StructType\VatReconciliationResponse
     */
    public function setMidocoVatReconciliation(?array $midocoVatReconciliation = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoVatReconciliationArrayErrorMessage = self::validateMidocoVatReconciliationForArrayConstraintFromSetMidocoVatReconciliation($midocoVatReconciliation))) {
            throw new InvalidArgumentException($midocoVatReconciliationArrayErrorMessage, __LINE__);
        }
        $this->MidocoVatReconciliation = $midocoVatReconciliation;
        
        return $this;
    }
    /**
     * Add item to MidocoVatReconciliation value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoVatReconciliationType $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\VatReconciliationResponse
     */
    public function addToMidocoVatReconciliation(\Pggns\MidocoApi\Orderlists\StructType\MidocoVatReconciliationType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoVatReconciliationType) {
            throw new InvalidArgumentException(sprintf('The MidocoVatReconciliation property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoVatReconciliationType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoVatReconciliation[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoVatReconciliationSums value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoVatReconciliationSumsType[]
     */
    public function getMidocoVatReconciliationSums(): ?array
    {
        return $this->MidocoVatReconciliationSums;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoVatReconciliationSums method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoVatReconciliationSums method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoVatReconciliationSumsForArrayConstraintFromSetMidocoVatReconciliationSums(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $vatReconciliationResponseMidocoVatReconciliationSumsItem) {
            // validation for constraint: itemType
            if (!$vatReconciliationResponseMidocoVatReconciliationSumsItem instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoVatReconciliationSumsType) {
                $invalidValues[] = is_object($vatReconciliationResponseMidocoVatReconciliationSumsItem) ? get_class($vatReconciliationResponseMidocoVatReconciliationSumsItem) : sprintf('%s(%s)', gettype($vatReconciliationResponseMidocoVatReconciliationSumsItem), var_export($vatReconciliationResponseMidocoVatReconciliationSumsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoVatReconciliationSums property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoVatReconciliationSumsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoVatReconciliationSums value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoVatReconciliationSumsType[] $midocoVatReconciliationSums
     * @return \Pggns\MidocoApi\Orderlists\StructType\VatReconciliationResponse
     */
    public function setMidocoVatReconciliationSums(?array $midocoVatReconciliationSums = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoVatReconciliationSumsArrayErrorMessage = self::validateMidocoVatReconciliationSumsForArrayConstraintFromSetMidocoVatReconciliationSums($midocoVatReconciliationSums))) {
            throw new InvalidArgumentException($midocoVatReconciliationSumsArrayErrorMessage, __LINE__);
        }
        $this->MidocoVatReconciliationSums = $midocoVatReconciliationSums;
        
        return $this;
    }
    /**
     * Add item to MidocoVatReconciliationSums value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoVatReconciliationSumsType $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\VatReconciliationResponse
     */
    public function addToMidocoVatReconciliationSums(\Pggns\MidocoApi\Orderlists\StructType\MidocoVatReconciliationSumsType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoVatReconciliationSumsType) {
            throw new InvalidArgumentException(sprintf('The MidocoVatReconciliationSums property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoVatReconciliationSumsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoVatReconciliationSums[] = $item;
        
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\VatReconciliationResponse
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
