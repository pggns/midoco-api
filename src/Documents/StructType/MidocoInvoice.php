<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoInvoice StructType
 * @subpackage Structs
 */
class MidocoInvoice extends InvoiceDTO
{
    /**
     * The MidocoInvoicePosition
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoInvoicePosition
     * @var \Pggns\MidocoApi\Api\Documents\StructType\MidocoInvoicePosition[]
     */
    protected ?array $MidocoInvoicePosition = null;
    /**
     * The MidocoInvoiceVatPosition
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoInvoiceVatPosition
     * @var \Pggns\MidocoApi\Api\Documents\StructType\MidocoInvoiceVatPosition[]
     */
    protected ?array $MidocoInvoiceVatPosition = null;
    /**
     * The MidocoInvoiceVatCalculation
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoInvoiceVatCalculation
     * @var \Pggns\MidocoApi\Api\Documents\StructType\InvoiceVatCalculationDTO[]
     */
    protected ?array $MidocoInvoiceVatCalculation = null;
    /**
     * Constructor method for MidocoInvoice
     * @uses MidocoInvoice::setMidocoInvoicePosition()
     * @uses MidocoInvoice::setMidocoInvoiceVatPosition()
     * @uses MidocoInvoice::setMidocoInvoiceVatCalculation()
     * @param \Pggns\MidocoApi\Api\Documents\StructType\MidocoInvoicePosition[] $midocoInvoicePosition
     * @param \Pggns\MidocoApi\Api\Documents\StructType\MidocoInvoiceVatPosition[] $midocoInvoiceVatPosition
     * @param \Pggns\MidocoApi\Api\Documents\StructType\InvoiceVatCalculationDTO[] $midocoInvoiceVatCalculation
     */
    public function __construct(?array $midocoInvoicePosition = null, ?array $midocoInvoiceVatPosition = null, ?array $midocoInvoiceVatCalculation = null)
    {
        $this
            ->setMidocoInvoicePosition($midocoInvoicePosition)
            ->setMidocoInvoiceVatPosition($midocoInvoiceVatPosition)
            ->setMidocoInvoiceVatCalculation($midocoInvoiceVatCalculation);
    }
    /**
     * Get MidocoInvoicePosition value
     * @return \Pggns\MidocoApi\Api\Documents\StructType\MidocoInvoicePosition[]
     */
    public function getMidocoInvoicePosition(): ?array
    {
        return $this->MidocoInvoicePosition;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoInvoicePosition method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoInvoicePosition method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoInvoicePositionForArrayConstraintsFromSetMidocoInvoicePosition(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoInvoiceMidocoInvoicePositionItem) {
            // validation for constraint: itemType
            if (!$midocoInvoiceMidocoInvoicePositionItem instanceof \Pggns\MidocoApi\Api\Documents\StructType\MidocoInvoicePosition) {
                $invalidValues[] = is_object($midocoInvoiceMidocoInvoicePositionItem) ? get_class($midocoInvoiceMidocoInvoicePositionItem) : sprintf('%s(%s)', gettype($midocoInvoiceMidocoInvoicePositionItem), var_export($midocoInvoiceMidocoInvoicePositionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoInvoicePosition property can only contain items of type \Pggns\MidocoApi\Api\Documents\StructType\MidocoInvoicePosition, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoInvoicePosition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Documents\StructType\MidocoInvoicePosition[] $midocoInvoicePosition
     * @return \Pggns\MidocoApi\Api\Documents\StructType\MidocoInvoice
     */
    public function setMidocoInvoicePosition(?array $midocoInvoicePosition = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoInvoicePositionArrayErrorMessage = self::validateMidocoInvoicePositionForArrayConstraintsFromSetMidocoInvoicePosition($midocoInvoicePosition))) {
            throw new InvalidArgumentException($midocoInvoicePositionArrayErrorMessage, __LINE__);
        }
        $this->MidocoInvoicePosition = $midocoInvoicePosition;
        
        return $this;
    }
    /**
     * Add item to MidocoInvoicePosition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Documents\StructType\MidocoInvoicePosition $item
     * @return \Pggns\MidocoApi\Api\Documents\StructType\MidocoInvoice
     */
    public function addToMidocoInvoicePosition(\Pggns\MidocoApi\Api\Documents\StructType\MidocoInvoicePosition $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Documents\StructType\MidocoInvoicePosition) {
            throw new InvalidArgumentException(sprintf('The MidocoInvoicePosition property can only contain items of type \Pggns\MidocoApi\Api\Documents\StructType\MidocoInvoicePosition, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoInvoicePosition[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoInvoiceVatPosition value
     * @return \Pggns\MidocoApi\Api\Documents\StructType\MidocoInvoiceVatPosition[]
     */
    public function getMidocoInvoiceVatPosition(): ?array
    {
        return $this->MidocoInvoiceVatPosition;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoInvoiceVatPosition method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoInvoiceVatPosition method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoInvoiceVatPositionForArrayConstraintsFromSetMidocoInvoiceVatPosition(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoInvoiceMidocoInvoiceVatPositionItem) {
            // validation for constraint: itemType
            if (!$midocoInvoiceMidocoInvoiceVatPositionItem instanceof \Pggns\MidocoApi\Api\Documents\StructType\MidocoInvoiceVatPosition) {
                $invalidValues[] = is_object($midocoInvoiceMidocoInvoiceVatPositionItem) ? get_class($midocoInvoiceMidocoInvoiceVatPositionItem) : sprintf('%s(%s)', gettype($midocoInvoiceMidocoInvoiceVatPositionItem), var_export($midocoInvoiceMidocoInvoiceVatPositionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoInvoiceVatPosition property can only contain items of type \Pggns\MidocoApi\Api\Documents\StructType\MidocoInvoiceVatPosition, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoInvoiceVatPosition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Documents\StructType\MidocoInvoiceVatPosition[] $midocoInvoiceVatPosition
     * @return \Pggns\MidocoApi\Api\Documents\StructType\MidocoInvoice
     */
    public function setMidocoInvoiceVatPosition(?array $midocoInvoiceVatPosition = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoInvoiceVatPositionArrayErrorMessage = self::validateMidocoInvoiceVatPositionForArrayConstraintsFromSetMidocoInvoiceVatPosition($midocoInvoiceVatPosition))) {
            throw new InvalidArgumentException($midocoInvoiceVatPositionArrayErrorMessage, __LINE__);
        }
        $this->MidocoInvoiceVatPosition = $midocoInvoiceVatPosition;
        
        return $this;
    }
    /**
     * Add item to MidocoInvoiceVatPosition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Documents\StructType\MidocoInvoiceVatPosition $item
     * @return \Pggns\MidocoApi\Api\Documents\StructType\MidocoInvoice
     */
    public function addToMidocoInvoiceVatPosition(\Pggns\MidocoApi\Api\Documents\StructType\MidocoInvoiceVatPosition $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Documents\StructType\MidocoInvoiceVatPosition) {
            throw new InvalidArgumentException(sprintf('The MidocoInvoiceVatPosition property can only contain items of type \Pggns\MidocoApi\Api\Documents\StructType\MidocoInvoiceVatPosition, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoInvoiceVatPosition[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoInvoiceVatCalculation value
     * @return \Pggns\MidocoApi\Api\Documents\StructType\InvoiceVatCalculationDTO[]
     */
    public function getMidocoInvoiceVatCalculation(): ?array
    {
        return $this->MidocoInvoiceVatCalculation;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoInvoiceVatCalculation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoInvoiceVatCalculation method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoInvoiceVatCalculationForArrayConstraintsFromSetMidocoInvoiceVatCalculation(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoInvoiceMidocoInvoiceVatCalculationItem) {
            // validation for constraint: itemType
            if (!$midocoInvoiceMidocoInvoiceVatCalculationItem instanceof \Pggns\MidocoApi\Api\Documents\StructType\InvoiceVatCalculationDTO) {
                $invalidValues[] = is_object($midocoInvoiceMidocoInvoiceVatCalculationItem) ? get_class($midocoInvoiceMidocoInvoiceVatCalculationItem) : sprintf('%s(%s)', gettype($midocoInvoiceMidocoInvoiceVatCalculationItem), var_export($midocoInvoiceMidocoInvoiceVatCalculationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoInvoiceVatCalculation property can only contain items of type \Pggns\MidocoApi\Api\Documents\StructType\InvoiceVatCalculationDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoInvoiceVatCalculation value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Documents\StructType\InvoiceVatCalculationDTO[] $midocoInvoiceVatCalculation
     * @return \Pggns\MidocoApi\Api\Documents\StructType\MidocoInvoice
     */
    public function setMidocoInvoiceVatCalculation(?array $midocoInvoiceVatCalculation = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoInvoiceVatCalculationArrayErrorMessage = self::validateMidocoInvoiceVatCalculationForArrayConstraintsFromSetMidocoInvoiceVatCalculation($midocoInvoiceVatCalculation))) {
            throw new InvalidArgumentException($midocoInvoiceVatCalculationArrayErrorMessage, __LINE__);
        }
        $this->MidocoInvoiceVatCalculation = $midocoInvoiceVatCalculation;
        
        return $this;
    }
    /**
     * Add item to MidocoInvoiceVatCalculation value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Documents\StructType\InvoiceVatCalculationDTO $item
     * @return \Pggns\MidocoApi\Api\Documents\StructType\MidocoInvoice
     */
    public function addToMidocoInvoiceVatCalculation(\Pggns\MidocoApi\Api\Documents\StructType\InvoiceVatCalculationDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Documents\StructType\InvoiceVatCalculationDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoInvoiceVatCalculation property can only contain items of type \Pggns\MidocoApi\Api\Documents\StructType\InvoiceVatCalculationDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoInvoiceVatCalculation[] = $item;
        
        return $this;
    }
}