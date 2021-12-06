<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEInvoiceGatewayResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: Response with all e-invoice gateway configurations available in the org unit.
 * @subpackage Structs
 */
class GetEInvoiceGatewayResponse extends AbstractStructBase
{
    /**
     * The orgUnit
     * @var string|null
     */
    protected ?string $orgUnit = null;
    /**
     * The MidocoEInvoiceGateway
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoEInvoiceGateway
     * @var \Pggns\MidocoApi\Documents\StructType\EinvoiceGatewayDTO[]
     */
    protected ?array $MidocoEInvoiceGateway = null;
    /**
     * Constructor method for GetEInvoiceGatewayResponse
     * @uses GetEInvoiceGatewayResponse::setOrgUnit()
     * @uses GetEInvoiceGatewayResponse::setMidocoEInvoiceGateway()
     * @param string $orgUnit
     * @param \Pggns\MidocoApi\Documents\StructType\EinvoiceGatewayDTO[] $midocoEInvoiceGateway
     */
    public function __construct(?string $orgUnit = null, ?array $midocoEInvoiceGateway = null)
    {
        $this
            ->setOrgUnit($orgUnit)
            ->setMidocoEInvoiceGateway($midocoEInvoiceGateway);
    }
    /**
     * Get orgUnit value
     * @return string|null
     */
    public function getOrgUnit(): ?string
    {
        return $this->orgUnit;
    }
    /**
     * Set orgUnit value
     * @param string $orgUnit
     * @return \Pggns\MidocoApi\Documents\StructType\GetEInvoiceGatewayResponse
     */
    public function setOrgUnit(?string $orgUnit = null): self
    {
        // validation for constraint: string
        if (!is_null($orgUnit) && !is_string($orgUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgUnit, true), gettype($orgUnit)), __LINE__);
        }
        $this->orgUnit = $orgUnit;
        
        return $this;
    }
    /**
     * Get MidocoEInvoiceGateway value
     * @return \Pggns\MidocoApi\Documents\StructType\EinvoiceGatewayDTO[]
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
        foreach ($values as $getEInvoiceGatewayResponseMidocoEInvoiceGatewayItem) {
            // validation for constraint: itemType
            if (!$getEInvoiceGatewayResponseMidocoEInvoiceGatewayItem instanceof \Pggns\MidocoApi\Documents\StructType\EinvoiceGatewayDTO) {
                $invalidValues[] = is_object($getEInvoiceGatewayResponseMidocoEInvoiceGatewayItem) ? get_class($getEInvoiceGatewayResponseMidocoEInvoiceGatewayItem) : sprintf('%s(%s)', gettype($getEInvoiceGatewayResponseMidocoEInvoiceGatewayItem), var_export($getEInvoiceGatewayResponseMidocoEInvoiceGatewayItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoEInvoiceGateway property can only contain items of type \Pggns\MidocoApi\Documents\StructType\EinvoiceGatewayDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoEInvoiceGateway value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\EinvoiceGatewayDTO[] $midocoEInvoiceGateway
     * @return \Pggns\MidocoApi\Documents\StructType\GetEInvoiceGatewayResponse
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
     * @param \Pggns\MidocoApi\Documents\StructType\EinvoiceGatewayDTO $item
     * @return \Pggns\MidocoApi\Documents\StructType\GetEInvoiceGatewayResponse
     */
    public function addToMidocoEInvoiceGateway(\Pggns\MidocoApi\Documents\StructType\EinvoiceGatewayDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Documents\StructType\EinvoiceGatewayDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoEInvoiceGateway property can only contain items of type \Pggns\MidocoApi\Documents\StructType\EinvoiceGatewayDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoEInvoiceGateway[] = $item;
        
        return $this;
    }
}
