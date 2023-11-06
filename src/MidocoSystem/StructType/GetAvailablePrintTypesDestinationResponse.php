<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAvailablePrintTypesDestinationResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAvailablePrintTypesDestinationResponse extends AbstractStructBase
{
    /**
     * The printType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $printType = null;
    /**
     * Constructor method for GetAvailablePrintTypesDestinationResponse
     * @uses GetAvailablePrintTypesDestinationResponse::setPrintType()
     * @param string[] $printType
     */
    public function __construct(?array $printType = null)
    {
        $this
            ->setPrintType($printType);
    }
    /**
     * Get printType value
     * @return string[]
     */
    public function getPrintType(): ?array
    {
        return $this->printType;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPrintType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPrintType method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePrintTypeForArrayConstraintFromSetPrintType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAvailablePrintTypesDestinationResponsePrintTypeItem) {
            // validation for constraint: itemType
            if (!is_string($getAvailablePrintTypesDestinationResponsePrintTypeItem)) {
                $invalidValues[] = is_object($getAvailablePrintTypesDestinationResponsePrintTypeItem) ? get_class($getAvailablePrintTypesDestinationResponsePrintTypeItem) : sprintf('%s(%s)', gettype($getAvailablePrintTypesDestinationResponsePrintTypeItem), var_export($getAvailablePrintTypesDestinationResponsePrintTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The printType property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set printType value
     * @throws InvalidArgumentException
     * @param string[] $printType
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetAvailablePrintTypesDestinationResponse
     */
    public function setPrintType(?array $printType = null): self
    {
        // validation for constraint: array
        if ('' !== ($printTypeArrayErrorMessage = self::validatePrintTypeForArrayConstraintFromSetPrintType($printType))) {
            throw new InvalidArgumentException($printTypeArrayErrorMessage, __LINE__);
        }
        $this->printType = $printType;
        
        return $this;
    }
    /**
     * Add item to printType value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetAvailablePrintTypesDestinationResponse
     */
    public function addToPrintType(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The printType property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->printType[] = $item;
        
        return $this;
    }
}
