<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetErmMailInfoResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetErmMailInfoResponse extends AbstractStructBase
{
    /**
     * The MidocoCustomerMailErm
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCustomerMailErm
     * @var \Pggns\MidocoApi\Crm\StructType\CustomerMailErmDTO[]
     */
    protected ?array $MidocoCustomerMailErm = null;
    /**
     * Constructor method for GetErmMailInfoResponse
     * @uses GetErmMailInfoResponse::setMidocoCustomerMailErm()
     * @param \Pggns\MidocoApi\Crm\StructType\CustomerMailErmDTO[] $midocoCustomerMailErm
     */
    public function __construct(?array $midocoCustomerMailErm = null)
    {
        $this
            ->setMidocoCustomerMailErm($midocoCustomerMailErm);
    }
    /**
     * Get MidocoCustomerMailErm value
     * @return \Pggns\MidocoApi\Crm\StructType\CustomerMailErmDTO[]
     */
    public function getMidocoCustomerMailErm(): ?array
    {
        return $this->MidocoCustomerMailErm;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCustomerMailErm method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCustomerMailErm method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCustomerMailErmForArrayConstraintFromSetMidocoCustomerMailErm(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getErmMailInfoResponseMidocoCustomerMailErmItem) {
            // validation for constraint: itemType
            if (!$getErmMailInfoResponseMidocoCustomerMailErmItem instanceof \Pggns\MidocoApi\Crm\StructType\CustomerMailErmDTO) {
                $invalidValues[] = is_object($getErmMailInfoResponseMidocoCustomerMailErmItem) ? get_class($getErmMailInfoResponseMidocoCustomerMailErmItem) : sprintf('%s(%s)', gettype($getErmMailInfoResponseMidocoCustomerMailErmItem), var_export($getErmMailInfoResponseMidocoCustomerMailErmItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCustomerMailErm property can only contain items of type \Pggns\MidocoApi\Crm\StructType\CustomerMailErmDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCustomerMailErm value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\CustomerMailErmDTO[] $midocoCustomerMailErm
     * @return \Pggns\MidocoApi\Crm\StructType\GetErmMailInfoResponse
     */
    public function setMidocoCustomerMailErm(?array $midocoCustomerMailErm = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCustomerMailErmArrayErrorMessage = self::validateMidocoCustomerMailErmForArrayConstraintFromSetMidocoCustomerMailErm($midocoCustomerMailErm))) {
            throw new InvalidArgumentException($midocoCustomerMailErmArrayErrorMessage, __LINE__);
        }
        $this->MidocoCustomerMailErm = $midocoCustomerMailErm;
        
        return $this;
    }
    /**
     * Add item to MidocoCustomerMailErm value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\CustomerMailErmDTO $item
     * @return \Pggns\MidocoApi\Crm\StructType\GetErmMailInfoResponse
     */
    public function addToMidocoCustomerMailErm(\Pggns\MidocoApi\Crm\StructType\CustomerMailErmDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\CustomerMailErmDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCustomerMailErm property can only contain items of type \Pggns\MidocoApi\Crm\StructType\CustomerMailErmDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCustomerMailErm[] = $item;
        
        return $this;
    }
}
