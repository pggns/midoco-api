<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCashTurnoverExportsResponse StructType
 * @subpackage Structs
 */
class GetCashTurnoverExportsResponse extends AbstractStructBase
{
    /**
     * The MidocoCashTurnoverExport
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCashTurnoverExport
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoCashTurnoverExport[]
     */
    protected ?array $MidocoCashTurnoverExport = null;
    /**
     * Constructor method for GetCashTurnoverExportsResponse
     * @uses GetCashTurnoverExportsResponse::setMidocoCashTurnoverExport()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoCashTurnoverExport[] $midocoCashTurnoverExport
     */
    public function __construct(?array $midocoCashTurnoverExport = null)
    {
        $this
            ->setMidocoCashTurnoverExport($midocoCashTurnoverExport);
    }
    /**
     * Get MidocoCashTurnoverExport value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoCashTurnoverExport[]
     */
    public function getMidocoCashTurnoverExport(): ?array
    {
        return $this->MidocoCashTurnoverExport;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCashTurnoverExport method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCashTurnoverExport method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCashTurnoverExportForArrayConstraintsFromSetMidocoCashTurnoverExport(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCashTurnoverExportsResponseMidocoCashTurnoverExportItem) {
            // validation for constraint: itemType
            if (!$getCashTurnoverExportsResponseMidocoCashTurnoverExportItem instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoCashTurnoverExport) {
                $invalidValues[] = is_object($getCashTurnoverExportsResponseMidocoCashTurnoverExportItem) ? get_class($getCashTurnoverExportsResponseMidocoCashTurnoverExportItem) : sprintf('%s(%s)', gettype($getCashTurnoverExportsResponseMidocoCashTurnoverExportItem), var_export($getCashTurnoverExportsResponseMidocoCashTurnoverExportItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCashTurnoverExport property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoCashTurnoverExport, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCashTurnoverExport value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoCashTurnoverExport[] $midocoCashTurnoverExport
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetCashTurnoverExportsResponse
     */
    public function setMidocoCashTurnoverExport(?array $midocoCashTurnoverExport = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCashTurnoverExportArrayErrorMessage = self::validateMidocoCashTurnoverExportForArrayConstraintsFromSetMidocoCashTurnoverExport($midocoCashTurnoverExport))) {
            throw new InvalidArgumentException($midocoCashTurnoverExportArrayErrorMessage, __LINE__);
        }
        $this->MidocoCashTurnoverExport = $midocoCashTurnoverExport;
        
        return $this;
    }
    /**
     * Add item to MidocoCashTurnoverExport value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoCashTurnoverExport $item
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetCashTurnoverExportsResponse
     */
    public function addToMidocoCashTurnoverExport(\Pggns\MidocoApi\Api\Order\StructType\MidocoCashTurnoverExport $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoCashTurnoverExport) {
            throw new InvalidArgumentException(sprintf('The MidocoCashTurnoverExport property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoCashTurnoverExport, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCashTurnoverExport[] = $item;
        
        return $this;
    }
}
