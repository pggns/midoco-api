<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCollectiveBillingDetails StructType
 * @subpackage Structs
 */
class MidocoCollectiveBillingDetails extends AbstractStructBase
{
    /**
     * The MidocoBillingPositionsDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBillingPositionsDetails
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoBillingPositionsDetails[]
     */
    protected ?array $MidocoBillingPositionsDetails = null;
    /**
     * Constructor method for MidocoCollectiveBillingDetails
     * @uses MidocoCollectiveBillingDetails::setMidocoBillingPositionsDetails()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoBillingPositionsDetails[] $midocoBillingPositionsDetails
     */
    public function __construct(?array $midocoBillingPositionsDetails = null)
    {
        $this
            ->setMidocoBillingPositionsDetails($midocoBillingPositionsDetails);
    }
    /**
     * Get MidocoBillingPositionsDetails value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoBillingPositionsDetails[]
     */
    public function getMidocoBillingPositionsDetails(): ?array
    {
        return $this->MidocoBillingPositionsDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoBillingPositionsDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBillingPositionsDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBillingPositionsDetailsForArrayConstraintsFromSetMidocoBillingPositionsDetails(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCollectiveBillingDetailsMidocoBillingPositionsDetailsItem) {
            // validation for constraint: itemType
            if (!$midocoCollectiveBillingDetailsMidocoBillingPositionsDetailsItem instanceof \Pggns\MidocoApi\Documents\StructType\MidocoBillingPositionsDetails) {
                $invalidValues[] = is_object($midocoCollectiveBillingDetailsMidocoBillingPositionsDetailsItem) ? get_class($midocoCollectiveBillingDetailsMidocoBillingPositionsDetailsItem) : sprintf('%s(%s)', gettype($midocoCollectiveBillingDetailsMidocoBillingPositionsDetailsItem), var_export($midocoCollectiveBillingDetailsMidocoBillingPositionsDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBillingPositionsDetails property can only contain items of type \Pggns\MidocoApi\Documents\StructType\MidocoBillingPositionsDetails, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBillingPositionsDetails value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoBillingPositionsDetails[] $midocoBillingPositionsDetails
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoCollectiveBillingDetails
     */
    public function setMidocoBillingPositionsDetails(?array $midocoBillingPositionsDetails = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBillingPositionsDetailsArrayErrorMessage = self::validateMidocoBillingPositionsDetailsForArrayConstraintsFromSetMidocoBillingPositionsDetails($midocoBillingPositionsDetails))) {
            throw new InvalidArgumentException($midocoBillingPositionsDetailsArrayErrorMessage, __LINE__);
        }
        $this->MidocoBillingPositionsDetails = $midocoBillingPositionsDetails;
        
        return $this;
    }
    /**
     * Add item to MidocoBillingPositionsDetails value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoBillingPositionsDetails $item
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoCollectiveBillingDetails
     */
    public function addToMidocoBillingPositionsDetails(\Pggns\MidocoApi\Documents\StructType\MidocoBillingPositionsDetails $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Documents\StructType\MidocoBillingPositionsDetails) {
            throw new InvalidArgumentException(sprintf('The MidocoBillingPositionsDetails property can only contain items of type \Pggns\MidocoApi\Documents\StructType\MidocoBillingPositionsDetails, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBillingPositionsDetails[] = $item;
        
        return $this;
    }
}
