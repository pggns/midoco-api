<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\System\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPrintSelectsForPRRLResponse StructType
 * @subpackage Structs
 */
class GetPrintSelectsForPRRLResponse extends AbstractStructBase
{
    /**
     * The MidocoPrintSelect
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoPrintSelect
     * @var \Pggns\MidocoApi\System\StructType\MidocoPrintSelect[]
     */
    protected ?array $MidocoPrintSelect = null;
    /**
     * Constructor method for GetPrintSelectsForPRRLResponse
     * @uses GetPrintSelectsForPRRLResponse::setMidocoPrintSelect()
     * @param \Pggns\MidocoApi\System\StructType\MidocoPrintSelect[] $midocoPrintSelect
     */
    public function __construct(?array $midocoPrintSelect = null)
    {
        $this
            ->setMidocoPrintSelect($midocoPrintSelect);
    }
    /**
     * Get MidocoPrintSelect value
     * @return \Pggns\MidocoApi\System\StructType\MidocoPrintSelect[]
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
        foreach ($values as $getPrintSelectsForPRRLResponseMidocoPrintSelectItem) {
            // validation for constraint: itemType
            if (!$getPrintSelectsForPRRLResponseMidocoPrintSelectItem instanceof \Pggns\MidocoApi\System\StructType\MidocoPrintSelect) {
                $invalidValues[] = is_object($getPrintSelectsForPRRLResponseMidocoPrintSelectItem) ? get_class($getPrintSelectsForPRRLResponseMidocoPrintSelectItem) : sprintf('%s(%s)', gettype($getPrintSelectsForPRRLResponseMidocoPrintSelectItem), var_export($getPrintSelectsForPRRLResponseMidocoPrintSelectItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoPrintSelect property can only contain items of type \Pggns\MidocoApi\System\StructType\MidocoPrintSelect, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoPrintSelect value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\System\StructType\MidocoPrintSelect[] $midocoPrintSelect
     * @return \Pggns\MidocoApi\System\StructType\GetPrintSelectsForPRRLResponse
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
     * @param \Pggns\MidocoApi\System\StructType\MidocoPrintSelect $item
     * @return \Pggns\MidocoApi\System\StructType\GetPrintSelectsForPRRLResponse
     */
    public function addToMidocoPrintSelect(\Pggns\MidocoApi\System\StructType\MidocoPrintSelect $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\System\StructType\MidocoPrintSelect) {
            throw new InvalidArgumentException(sprintf('The MidocoPrintSelect property can only contain items of type \Pggns\MidocoApi\System\StructType\MidocoPrintSelect, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoPrintSelect[] = $item;
        
        return $this;
    }
}
