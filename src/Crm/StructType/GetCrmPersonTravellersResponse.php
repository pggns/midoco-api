<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCrmPersonTravellersResponse StructType
 * @subpackage Structs
 */
class GetCrmPersonTravellersResponse extends AbstractStructBase
{
    /**
     * The MidocoCrmPersonTraveller
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmPersonTraveller
     * @var \Pggns\MidocoApi\Api\Crm\StructType\CrmPersonTravellerDTO[]
     */
    protected ?array $MidocoCrmPersonTraveller = null;
    /**
     * Constructor method for GetCrmPersonTravellersResponse
     * @uses GetCrmPersonTravellersResponse::setMidocoCrmPersonTraveller()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\CrmPersonTravellerDTO[] $midocoCrmPersonTraveller
     */
    public function __construct(?array $midocoCrmPersonTraveller = null)
    {
        $this
            ->setMidocoCrmPersonTraveller($midocoCrmPersonTraveller);
    }
    /**
     * Get MidocoCrmPersonTraveller value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\CrmPersonTravellerDTO[]
     */
    public function getMidocoCrmPersonTraveller(): ?array
    {
        return $this->MidocoCrmPersonTraveller;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCrmPersonTraveller method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmPersonTraveller method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmPersonTravellerForArrayConstraintsFromSetMidocoCrmPersonTraveller(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCrmPersonTravellersResponseMidocoCrmPersonTravellerItem) {
            // validation for constraint: itemType
            if (!$getCrmPersonTravellersResponseMidocoCrmPersonTravellerItem instanceof \Pggns\MidocoApi\Api\Crm\StructType\CrmPersonTravellerDTO) {
                $invalidValues[] = is_object($getCrmPersonTravellersResponseMidocoCrmPersonTravellerItem) ? get_class($getCrmPersonTravellersResponseMidocoCrmPersonTravellerItem) : sprintf('%s(%s)', gettype($getCrmPersonTravellersResponseMidocoCrmPersonTravellerItem), var_export($getCrmPersonTravellersResponseMidocoCrmPersonTravellerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmPersonTraveller property can only contain items of type \Pggns\MidocoApi\Api\Crm\StructType\CrmPersonTravellerDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmPersonTraveller value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Crm\StructType\CrmPersonTravellerDTO[] $midocoCrmPersonTraveller
     * @return \Pggns\MidocoApi\Api\Crm\StructType\GetCrmPersonTravellersResponse
     */
    public function setMidocoCrmPersonTraveller(?array $midocoCrmPersonTraveller = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmPersonTravellerArrayErrorMessage = self::validateMidocoCrmPersonTravellerForArrayConstraintsFromSetMidocoCrmPersonTraveller($midocoCrmPersonTraveller))) {
            throw new InvalidArgumentException($midocoCrmPersonTravellerArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmPersonTraveller = $midocoCrmPersonTraveller;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmPersonTraveller value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Crm\StructType\CrmPersonTravellerDTO $item
     * @return \Pggns\MidocoApi\Api\Crm\StructType\GetCrmPersonTravellersResponse
     */
    public function addToMidocoCrmPersonTraveller(\Pggns\MidocoApi\Api\Crm\StructType\CrmPersonTravellerDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Crm\StructType\CrmPersonTravellerDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmPersonTraveller property can only contain items of type \Pggns\MidocoApi\Api\Crm\StructType\CrmPersonTravellerDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmPersonTraveller[] = $item;
        
        return $this;
    }
}
