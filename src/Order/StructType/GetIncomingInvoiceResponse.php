<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetIncomingInvoiceResponse StructType
 * @subpackage Structs
 */
class GetIncomingInvoiceResponse extends AbstractStructBase
{
    /**
     * The MidocoIncomingInvoice
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoIncomingInvoice
     * @var \Pggns\MidocoApi\Api\Order\StructType\IncomingInvoiceDTO[]
     */
    protected ?array $MidocoIncomingInvoice = null;
    /**
     * Constructor method for GetIncomingInvoiceResponse
     * @uses GetIncomingInvoiceResponse::setMidocoIncomingInvoice()
     * @param \Pggns\MidocoApi\Api\Order\StructType\IncomingInvoiceDTO[] $midocoIncomingInvoice
     */
    public function __construct(?array $midocoIncomingInvoice = null)
    {
        $this
            ->setMidocoIncomingInvoice($midocoIncomingInvoice);
    }
    /**
     * Get MidocoIncomingInvoice value
     * @return \Pggns\MidocoApi\Api\Order\StructType\IncomingInvoiceDTO[]
     */
    public function getMidocoIncomingInvoice(): ?array
    {
        return $this->MidocoIncomingInvoice;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoIncomingInvoice method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoIncomingInvoice method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoIncomingInvoiceForArrayConstraintsFromSetMidocoIncomingInvoice(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getIncomingInvoiceResponseMidocoIncomingInvoiceItem) {
            // validation for constraint: itemType
            if (!$getIncomingInvoiceResponseMidocoIncomingInvoiceItem instanceof \Pggns\MidocoApi\Api\Order\StructType\IncomingInvoiceDTO) {
                $invalidValues[] = is_object($getIncomingInvoiceResponseMidocoIncomingInvoiceItem) ? get_class($getIncomingInvoiceResponseMidocoIncomingInvoiceItem) : sprintf('%s(%s)', gettype($getIncomingInvoiceResponseMidocoIncomingInvoiceItem), var_export($getIncomingInvoiceResponseMidocoIncomingInvoiceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoIncomingInvoice property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\IncomingInvoiceDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoIncomingInvoice value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\IncomingInvoiceDTO[] $midocoIncomingInvoice
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetIncomingInvoiceResponse
     */
    public function setMidocoIncomingInvoice(?array $midocoIncomingInvoice = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoIncomingInvoiceArrayErrorMessage = self::validateMidocoIncomingInvoiceForArrayConstraintsFromSetMidocoIncomingInvoice($midocoIncomingInvoice))) {
            throw new InvalidArgumentException($midocoIncomingInvoiceArrayErrorMessage, __LINE__);
        }
        $this->MidocoIncomingInvoice = $midocoIncomingInvoice;
        
        return $this;
    }
    /**
     * Add item to MidocoIncomingInvoice value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\IncomingInvoiceDTO $item
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetIncomingInvoiceResponse
     */
    public function addToMidocoIncomingInvoice(\Pggns\MidocoApi\Api\Order\StructType\IncomingInvoiceDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Order\StructType\IncomingInvoiceDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoIncomingInvoice property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\IncomingInvoiceDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoIncomingInvoice[] = $item;
        
        return $this;
    }
}