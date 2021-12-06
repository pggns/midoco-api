<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetInvoiceFileFormatResponse StructType
 * @subpackage Structs
 */
class GetInvoiceFileFormatResponse extends AbstractStructBase
{
    /**
     * The MidocoInvoiceFileFormat
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoInvoiceFileFormat
     * @var \Pggns\MidocoApi\Api\Crm\StructType\MidocoInvoiceFileFormat[]
     */
    protected ?array $MidocoInvoiceFileFormat = null;
    /**
     * Constructor method for GetInvoiceFileFormatResponse
     * @uses GetInvoiceFileFormatResponse::setMidocoInvoiceFileFormat()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoInvoiceFileFormat[] $midocoInvoiceFileFormat
     */
    public function __construct(?array $midocoInvoiceFileFormat = null)
    {
        $this
            ->setMidocoInvoiceFileFormat($midocoInvoiceFileFormat);
    }
    /**
     * Get MidocoInvoiceFileFormat value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\MidocoInvoiceFileFormat[]
     */
    public function getMidocoInvoiceFileFormat(): ?array
    {
        return $this->MidocoInvoiceFileFormat;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoInvoiceFileFormat method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoInvoiceFileFormat method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoInvoiceFileFormatForArrayConstraintsFromSetMidocoInvoiceFileFormat(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getInvoiceFileFormatResponseMidocoInvoiceFileFormatItem) {
            // validation for constraint: itemType
            if (!$getInvoiceFileFormatResponseMidocoInvoiceFileFormatItem instanceof \Pggns\MidocoApi\Api\Crm\StructType\MidocoInvoiceFileFormat) {
                $invalidValues[] = is_object($getInvoiceFileFormatResponseMidocoInvoiceFileFormatItem) ? get_class($getInvoiceFileFormatResponseMidocoInvoiceFileFormatItem) : sprintf('%s(%s)', gettype($getInvoiceFileFormatResponseMidocoInvoiceFileFormatItem), var_export($getInvoiceFileFormatResponseMidocoInvoiceFileFormatItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoInvoiceFileFormat property can only contain items of type \Pggns\MidocoApi\Api\Crm\StructType\MidocoInvoiceFileFormat, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoInvoiceFileFormat value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoInvoiceFileFormat[] $midocoInvoiceFileFormat
     * @return \Pggns\MidocoApi\Api\Crm\StructType\GetInvoiceFileFormatResponse
     */
    public function setMidocoInvoiceFileFormat(?array $midocoInvoiceFileFormat = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoInvoiceFileFormatArrayErrorMessage = self::validateMidocoInvoiceFileFormatForArrayConstraintsFromSetMidocoInvoiceFileFormat($midocoInvoiceFileFormat))) {
            throw new InvalidArgumentException($midocoInvoiceFileFormatArrayErrorMessage, __LINE__);
        }
        $this->MidocoInvoiceFileFormat = $midocoInvoiceFileFormat;
        
        return $this;
    }
    /**
     * Add item to MidocoInvoiceFileFormat value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoInvoiceFileFormat $item
     * @return \Pggns\MidocoApi\Api\Crm\StructType\GetInvoiceFileFormatResponse
     */
    public function addToMidocoInvoiceFileFormat(\Pggns\MidocoApi\Api\Crm\StructType\MidocoInvoiceFileFormat $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Crm\StructType\MidocoInvoiceFileFormat) {
            throw new InvalidArgumentException(sprintf('The MidocoInvoiceFileFormat property can only contain items of type \Pggns\MidocoApi\Api\Crm\StructType\MidocoInvoiceFileFormat, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoInvoiceFileFormat[] = $item;
        
        return $this;
    }
}
