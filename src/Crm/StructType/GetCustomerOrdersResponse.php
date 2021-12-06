<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCustomerOrdersResponse StructType
 * @subpackage Structs
 */
class GetCustomerOrdersResponse extends AbstractStructBase
{
    /**
     * The MidocoCustomerOrder
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCustomerOrder
     * @var \Pggns\MidocoApi\Api\Crm\StructType\MidocoCustomerOrder[]
     */
    protected ?array $MidocoCustomerOrder = null;
    /**
     * Constructor method for GetCustomerOrdersResponse
     * @uses GetCustomerOrdersResponse::setMidocoCustomerOrder()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoCustomerOrder[] $midocoCustomerOrder
     */
    public function __construct(?array $midocoCustomerOrder = null)
    {
        $this
            ->setMidocoCustomerOrder($midocoCustomerOrder);
    }
    /**
     * Get MidocoCustomerOrder value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\MidocoCustomerOrder[]
     */
    public function getMidocoCustomerOrder(): ?array
    {
        return $this->MidocoCustomerOrder;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCustomerOrder method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCustomerOrder method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCustomerOrderForArrayConstraintsFromSetMidocoCustomerOrder(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCustomerOrdersResponseMidocoCustomerOrderItem) {
            // validation for constraint: itemType
            if (!$getCustomerOrdersResponseMidocoCustomerOrderItem instanceof \Pggns\MidocoApi\Api\Crm\StructType\MidocoCustomerOrder) {
                $invalidValues[] = is_object($getCustomerOrdersResponseMidocoCustomerOrderItem) ? get_class($getCustomerOrdersResponseMidocoCustomerOrderItem) : sprintf('%s(%s)', gettype($getCustomerOrdersResponseMidocoCustomerOrderItem), var_export($getCustomerOrdersResponseMidocoCustomerOrderItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCustomerOrder property can only contain items of type \Pggns\MidocoApi\Api\Crm\StructType\MidocoCustomerOrder, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCustomerOrder value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoCustomerOrder[] $midocoCustomerOrder
     * @return \Pggns\MidocoApi\Api\Crm\StructType\GetCustomerOrdersResponse
     */
    public function setMidocoCustomerOrder(?array $midocoCustomerOrder = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCustomerOrderArrayErrorMessage = self::validateMidocoCustomerOrderForArrayConstraintsFromSetMidocoCustomerOrder($midocoCustomerOrder))) {
            throw new InvalidArgumentException($midocoCustomerOrderArrayErrorMessage, __LINE__);
        }
        $this->MidocoCustomerOrder = $midocoCustomerOrder;
        
        return $this;
    }
    /**
     * Add item to MidocoCustomerOrder value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoCustomerOrder $item
     * @return \Pggns\MidocoApi\Api\Crm\StructType\GetCustomerOrdersResponse
     */
    public function addToMidocoCustomerOrder(\Pggns\MidocoApi\Api\Crm\StructType\MidocoCustomerOrder $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Crm\StructType\MidocoCustomerOrder) {
            throw new InvalidArgumentException(sprintf('The MidocoCustomerOrder property can only contain items of type \Pggns\MidocoApi\Api\Crm\StructType\MidocoCustomerOrder, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCustomerOrder[] = $item;
        
        return $this;
    }
}
