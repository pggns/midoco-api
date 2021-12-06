<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPrintSelectsForCustomerResponse StructType
 * @subpackage Structs
 */
class GetPrintSelectsForCustomerResponse extends AbstractStructBase
{
    /**
     * The MidocoPrintSelect
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: system:MidocoPrintSelect
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoPrintSelect[]
     */
    protected ?array $MidocoPrintSelect = null;
    /**
     * The MidocoPrintSelectionGroupForCustomer
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoPrintSelectionGroupForCustomer
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoPrintSelectionGroupForCustomer[]
     */
    protected ?array $MidocoPrintSelectionGroupForCustomer = null;
    /**
     * Constructor method for GetPrintSelectsForCustomerResponse
     * @uses GetPrintSelectsForCustomerResponse::setMidocoPrintSelect()
     * @uses GetPrintSelectsForCustomerResponse::setMidocoPrintSelectionGroupForCustomer()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoPrintSelect[] $midocoPrintSelect
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoPrintSelectionGroupForCustomer[] $midocoPrintSelectionGroupForCustomer
     */
    public function __construct(?array $midocoPrintSelect = null, ?array $midocoPrintSelectionGroupForCustomer = null)
    {
        $this
            ->setMidocoPrintSelect($midocoPrintSelect)
            ->setMidocoPrintSelectionGroupForCustomer($midocoPrintSelectionGroupForCustomer);
    }
    /**
     * Get MidocoPrintSelect value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoPrintSelect[]
     */
    public function getMidocoPrintSelect(): ?array
    {
        return $this->MidocoPrintSelect;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoPrintSelect method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoPrintSelect method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoPrintSelectForArrayConstraintsFromSetMidocoPrintSelect(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getPrintSelectsForCustomerResponseMidocoPrintSelectItem) {
            // validation for constraint: itemType
            if (!$getPrintSelectsForCustomerResponseMidocoPrintSelectItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoPrintSelect) {
                $invalidValues[] = is_object($getPrintSelectsForCustomerResponseMidocoPrintSelectItem) ? get_class($getPrintSelectsForCustomerResponseMidocoPrintSelectItem) : sprintf('%s(%s)', gettype($getPrintSelectsForCustomerResponseMidocoPrintSelectItem), var_export($getPrintSelectsForCustomerResponseMidocoPrintSelectItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoPrintSelect property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoPrintSelect, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoPrintSelect value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoPrintSelect[] $midocoPrintSelect
     * @return \Pggns\MidocoApi\Crm\StructType\GetPrintSelectsForCustomerResponse
     */
    public function setMidocoPrintSelect(?array $midocoPrintSelect = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoPrintSelectArrayErrorMessage = self::validateMidocoPrintSelectForArrayConstraintsFromSetMidocoPrintSelect($midocoPrintSelect))) {
            throw new InvalidArgumentException($midocoPrintSelectArrayErrorMessage, __LINE__);
        }
        $this->MidocoPrintSelect = $midocoPrintSelect;
        
        return $this;
    }
    /**
     * Add item to MidocoPrintSelect value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoPrintSelect $item
     * @return \Pggns\MidocoApi\Crm\StructType\GetPrintSelectsForCustomerResponse
     */
    public function addToMidocoPrintSelect(\Pggns\MidocoApi\Crm\StructType\MidocoPrintSelect $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\MidocoPrintSelect) {
            throw new InvalidArgumentException(sprintf('The MidocoPrintSelect property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoPrintSelect, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoPrintSelect[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoPrintSelectionGroupForCustomer value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoPrintSelectionGroupForCustomer[]
     */
    public function getMidocoPrintSelectionGroupForCustomer(): ?array
    {
        return $this->MidocoPrintSelectionGroupForCustomer;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoPrintSelectionGroupForCustomer method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoPrintSelectionGroupForCustomer method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoPrintSelectionGroupForCustomerForArrayConstraintsFromSetMidocoPrintSelectionGroupForCustomer(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getPrintSelectsForCustomerResponseMidocoPrintSelectionGroupForCustomerItem) {
            // validation for constraint: itemType
            if (!$getPrintSelectsForCustomerResponseMidocoPrintSelectionGroupForCustomerItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoPrintSelectionGroupForCustomer) {
                $invalidValues[] = is_object($getPrintSelectsForCustomerResponseMidocoPrintSelectionGroupForCustomerItem) ? get_class($getPrintSelectsForCustomerResponseMidocoPrintSelectionGroupForCustomerItem) : sprintf('%s(%s)', gettype($getPrintSelectsForCustomerResponseMidocoPrintSelectionGroupForCustomerItem), var_export($getPrintSelectsForCustomerResponseMidocoPrintSelectionGroupForCustomerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoPrintSelectionGroupForCustomer property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoPrintSelectionGroupForCustomer, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoPrintSelectionGroupForCustomer value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoPrintSelectionGroupForCustomer[] $midocoPrintSelectionGroupForCustomer
     * @return \Pggns\MidocoApi\Crm\StructType\GetPrintSelectsForCustomerResponse
     */
    public function setMidocoPrintSelectionGroupForCustomer(?array $midocoPrintSelectionGroupForCustomer = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoPrintSelectionGroupForCustomerArrayErrorMessage = self::validateMidocoPrintSelectionGroupForCustomerForArrayConstraintsFromSetMidocoPrintSelectionGroupForCustomer($midocoPrintSelectionGroupForCustomer))) {
            throw new InvalidArgumentException($midocoPrintSelectionGroupForCustomerArrayErrorMessage, __LINE__);
        }
        $this->MidocoPrintSelectionGroupForCustomer = $midocoPrintSelectionGroupForCustomer;
        
        return $this;
    }
    /**
     * Add item to MidocoPrintSelectionGroupForCustomer value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoPrintSelectionGroupForCustomer $item
     * @return \Pggns\MidocoApi\Crm\StructType\GetPrintSelectsForCustomerResponse
     */
    public function addToMidocoPrintSelectionGroupForCustomer(\Pggns\MidocoApi\Crm\StructType\MidocoPrintSelectionGroupForCustomer $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\MidocoPrintSelectionGroupForCustomer) {
            throw new InvalidArgumentException(sprintf('The MidocoPrintSelectionGroupForCustomer property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoPrintSelectionGroupForCustomer, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoPrintSelectionGroupForCustomer[] = $item;
        
        return $this;
    }
}
