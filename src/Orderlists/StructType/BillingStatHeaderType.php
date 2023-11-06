<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BillingStatHeaderType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class BillingStatHeaderType extends AbstractStructBase
{
    /**
     * The HeaderTranslation
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Orderlists\StructType\HeaderTranslation[]
     */
    protected ?array $HeaderTranslation = null;
    /**
     * Constructor method for BillingStatHeaderType
     * @uses BillingStatHeaderType::setHeaderTranslation()
     * @param \Pggns\MidocoApi\Orderlists\StructType\HeaderTranslation[] $headerTranslation
     */
    public function __construct(?array $headerTranslation = null)
    {
        $this
            ->setHeaderTranslation($headerTranslation);
    }
    /**
     * Get HeaderTranslation value
     * @return \Pggns\MidocoApi\Orderlists\StructType\HeaderTranslation[]
     */
    public function getHeaderTranslation(): ?array
    {
        return $this->HeaderTranslation;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setHeaderTranslation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHeaderTranslation method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHeaderTranslationForArrayConstraintFromSetHeaderTranslation(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $billingStatHeaderTypeHeaderTranslationItem) {
            // validation for constraint: itemType
            if (!$billingStatHeaderTypeHeaderTranslationItem instanceof \Pggns\MidocoApi\Orderlists\StructType\HeaderTranslation) {
                $invalidValues[] = is_object($billingStatHeaderTypeHeaderTranslationItem) ? get_class($billingStatHeaderTypeHeaderTranslationItem) : sprintf('%s(%s)', gettype($billingStatHeaderTypeHeaderTranslationItem), var_export($billingStatHeaderTypeHeaderTranslationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The HeaderTranslation property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\HeaderTranslation, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set HeaderTranslation value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\HeaderTranslation[] $headerTranslation
     * @return \Pggns\MidocoApi\Orderlists\StructType\BillingStatHeaderType
     */
    public function setHeaderTranslation(?array $headerTranslation = null): self
    {
        // validation for constraint: array
        if ('' !== ($headerTranslationArrayErrorMessage = self::validateHeaderTranslationForArrayConstraintFromSetHeaderTranslation($headerTranslation))) {
            throw new InvalidArgumentException($headerTranslationArrayErrorMessage, __LINE__);
        }
        $this->HeaderTranslation = $headerTranslation;
        
        return $this;
    }
    /**
     * Add item to HeaderTranslation value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\HeaderTranslation $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\BillingStatHeaderType
     */
    public function addToHeaderTranslation(\Pggns\MidocoApi\Orderlists\StructType\HeaderTranslation $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\HeaderTranslation) {
            throw new InvalidArgumentException(sprintf('The HeaderTranslation property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\HeaderTranslation, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->HeaderTranslation[] = $item;
        
        return $this;
    }
}
