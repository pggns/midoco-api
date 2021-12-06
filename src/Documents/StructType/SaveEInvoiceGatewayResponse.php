<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveEInvoiceGatewayResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: Return the saved e-invoice gateway configurations.
 * @subpackage Structs
 */
class SaveEInvoiceGatewayResponse extends AbstractStructBase
{
    /**
     * The MidocoEInvoiceGateway
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: MidocoEInvoiceGateway
     * @var \Pggns\MidocoApi\Api\Documents\StructType\EinvoiceGatewayDTO[]
     */
    protected ?array $MidocoEInvoiceGateway = null;
    /**
     * Constructor method for SaveEInvoiceGatewayResponse
     * @uses SaveEInvoiceGatewayResponse::setMidocoEInvoiceGateway()
     * @param \Pggns\MidocoApi\Api\Documents\StructType\EinvoiceGatewayDTO[] $midocoEInvoiceGateway
     */
    public function __construct(?array $midocoEInvoiceGateway = null)
    {
        $this
            ->setMidocoEInvoiceGateway($midocoEInvoiceGateway);
    }
    /**
     * Get MidocoEInvoiceGateway value
     * @return \Pggns\MidocoApi\Api\Documents\StructType\EinvoiceGatewayDTO[]
     */
    public function getMidocoEInvoiceGateway(): ?array
    {
        return $this->MidocoEInvoiceGateway;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoEInvoiceGateway method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoEInvoiceGateway method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoEInvoiceGatewayForArrayConstraintsFromSetMidocoEInvoiceGateway(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $saveEInvoiceGatewayResponseMidocoEInvoiceGatewayItem) {
            // validation for constraint: itemType
            if (!$saveEInvoiceGatewayResponseMidocoEInvoiceGatewayItem instanceof \Pggns\MidocoApi\Api\Documents\StructType\EinvoiceGatewayDTO) {
                $invalidValues[] = is_object($saveEInvoiceGatewayResponseMidocoEInvoiceGatewayItem) ? get_class($saveEInvoiceGatewayResponseMidocoEInvoiceGatewayItem) : sprintf('%s(%s)', gettype($saveEInvoiceGatewayResponseMidocoEInvoiceGatewayItem), var_export($saveEInvoiceGatewayResponseMidocoEInvoiceGatewayItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoEInvoiceGateway property can only contain items of type \Pggns\MidocoApi\Api\Documents\StructType\EinvoiceGatewayDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoEInvoiceGateway value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Documents\StructType\EinvoiceGatewayDTO[] $midocoEInvoiceGateway
     * @return \Pggns\MidocoApi\Api\Documents\StructType\SaveEInvoiceGatewayResponse
     */
    public function setMidocoEInvoiceGateway(?array $midocoEInvoiceGateway = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoEInvoiceGatewayArrayErrorMessage = self::validateMidocoEInvoiceGatewayForArrayConstraintsFromSetMidocoEInvoiceGateway($midocoEInvoiceGateway))) {
            throw new InvalidArgumentException($midocoEInvoiceGatewayArrayErrorMessage, __LINE__);
        }
        $this->MidocoEInvoiceGateway = $midocoEInvoiceGateway;
        
        return $this;
    }
    /**
     * Add item to MidocoEInvoiceGateway value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Documents\StructType\EinvoiceGatewayDTO $item
     * @return \Pggns\MidocoApi\Api\Documents\StructType\SaveEInvoiceGatewayResponse
     */
    public function addToMidocoEInvoiceGateway(\Pggns\MidocoApi\Api\Documents\StructType\EinvoiceGatewayDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Documents\StructType\EinvoiceGatewayDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoEInvoiceGateway property can only contain items of type \Pggns\MidocoApi\Api\Documents\StructType\EinvoiceGatewayDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoEInvoiceGateway[] = $item;
        
        return $this;
    }
}