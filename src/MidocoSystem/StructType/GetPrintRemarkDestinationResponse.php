<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPrintRemarkDestinationResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetPrintRemarkDestinationResponse extends AbstractStructBase
{
    /**
     * The MidocoPrintRemarkDestination
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoPrintRemarkDestination
     * @var \Pggns\MidocoApi\MidocoSystem\StructType\MidocoPrintRemarkDestination[]
     */
    protected ?array $MidocoPrintRemarkDestination = null;
    /**
     * Constructor method for GetPrintRemarkDestinationResponse
     * @uses GetPrintRemarkDestinationResponse::setMidocoPrintRemarkDestination()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\MidocoPrintRemarkDestination[] $midocoPrintRemarkDestination
     */
    public function __construct(?array $midocoPrintRemarkDestination = null)
    {
        $this
            ->setMidocoPrintRemarkDestination($midocoPrintRemarkDestination);
    }
    /**
     * Get MidocoPrintRemarkDestination value
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\MidocoPrintRemarkDestination[]
     */
    public function getMidocoPrintRemarkDestination(): ?array
    {
        return $this->MidocoPrintRemarkDestination;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoPrintRemarkDestination method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoPrintRemarkDestination method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoPrintRemarkDestinationForArrayConstraintFromSetMidocoPrintRemarkDestination(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getPrintRemarkDestinationResponseMidocoPrintRemarkDestinationItem) {
            // validation for constraint: itemType
            if (!$getPrintRemarkDestinationResponseMidocoPrintRemarkDestinationItem instanceof \Pggns\MidocoApi\MidocoSystem\StructType\MidocoPrintRemarkDestination) {
                $invalidValues[] = is_object($getPrintRemarkDestinationResponseMidocoPrintRemarkDestinationItem) ? get_class($getPrintRemarkDestinationResponseMidocoPrintRemarkDestinationItem) : sprintf('%s(%s)', gettype($getPrintRemarkDestinationResponseMidocoPrintRemarkDestinationItem), var_export($getPrintRemarkDestinationResponseMidocoPrintRemarkDestinationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoPrintRemarkDestination property can only contain items of type \Pggns\MidocoApi\MidocoSystem\StructType\MidocoPrintRemarkDestination, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoPrintRemarkDestination value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\MidocoPrintRemarkDestination[] $midocoPrintRemarkDestination
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetPrintRemarkDestinationResponse
     */
    public function setMidocoPrintRemarkDestination(?array $midocoPrintRemarkDestination = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoPrintRemarkDestinationArrayErrorMessage = self::validateMidocoPrintRemarkDestinationForArrayConstraintFromSetMidocoPrintRemarkDestination($midocoPrintRemarkDestination))) {
            throw new InvalidArgumentException($midocoPrintRemarkDestinationArrayErrorMessage, __LINE__);
        }
        $this->MidocoPrintRemarkDestination = $midocoPrintRemarkDestination;
        
        return $this;
    }
    /**
     * Add item to MidocoPrintRemarkDestination value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\MidocoPrintRemarkDestination $item
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetPrintRemarkDestinationResponse
     */
    public function addToMidocoPrintRemarkDestination(\Pggns\MidocoApi\MidocoSystem\StructType\MidocoPrintRemarkDestination $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\MidocoSystem\StructType\MidocoPrintRemarkDestination) {
            throw new InvalidArgumentException(sprintf('The MidocoPrintRemarkDestination property can only contain items of type \Pggns\MidocoApi\MidocoSystem\StructType\MidocoPrintRemarkDestination, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoPrintRemarkDestination[] = $item;
        
        return $this;
    }
}
