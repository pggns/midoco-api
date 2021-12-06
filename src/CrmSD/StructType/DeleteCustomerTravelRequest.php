<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteCustomerTravelRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: deleteCustomerTravel
 * @subpackage Structs
 */
class DeleteCustomerTravelRequest extends AbstractStructBase
{
    /**
     * The MidocoCustomerTravel
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCustomerTravel
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCustomerTravelType[]
     */
    protected ?array $MidocoCustomerTravel = null;
    /**
     * Constructor method for DeleteCustomerTravelRequest
     * @uses DeleteCustomerTravelRequest::setMidocoCustomerTravel()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCustomerTravelType[] $midocoCustomerTravel
     */
    public function __construct(?array $midocoCustomerTravel = null)
    {
        $this
            ->setMidocoCustomerTravel($midocoCustomerTravel);
    }
    /**
     * Get MidocoCustomerTravel value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCustomerTravelType[]
     */
    public function getMidocoCustomerTravel(): ?array
    {
        return $this->MidocoCustomerTravel;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCustomerTravel method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCustomerTravel method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCustomerTravelForArrayConstraintsFromSetMidocoCustomerTravel(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $deleteCustomerTravelRequestMidocoCustomerTravelItem) {
            // validation for constraint: itemType
            if (!$deleteCustomerTravelRequestMidocoCustomerTravelItem instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCustomerTravelType) {
                $invalidValues[] = is_object($deleteCustomerTravelRequestMidocoCustomerTravelItem) ? get_class($deleteCustomerTravelRequestMidocoCustomerTravelItem) : sprintf('%s(%s)', gettype($deleteCustomerTravelRequestMidocoCustomerTravelItem), var_export($deleteCustomerTravelRequestMidocoCustomerTravelItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCustomerTravel property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCustomerTravelType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCustomerTravel value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCustomerTravelType[] $midocoCustomerTravel
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\DeleteCustomerTravelRequest
     */
    public function setMidocoCustomerTravel(?array $midocoCustomerTravel = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCustomerTravelArrayErrorMessage = self::validateMidocoCustomerTravelForArrayConstraintsFromSetMidocoCustomerTravel($midocoCustomerTravel))) {
            throw new InvalidArgumentException($midocoCustomerTravelArrayErrorMessage, __LINE__);
        }
        $this->MidocoCustomerTravel = $midocoCustomerTravel;
        
        return $this;
    }
    /**
     * Add item to MidocoCustomerTravel value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCustomerTravelType $item
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\DeleteCustomerTravelRequest
     */
    public function addToMidocoCustomerTravel(\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCustomerTravelType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCustomerTravelType) {
            throw new InvalidArgumentException(sprintf('The MidocoCustomerTravel property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCustomerTravelType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCustomerTravel[] = $item;
        
        return $this;
    }
}
