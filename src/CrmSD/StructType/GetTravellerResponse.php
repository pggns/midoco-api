<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTravellerResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getCostCenter --- returns the list of CompanyCostCenters for the given customer id
 * @subpackage Structs
 */
class GetTravellerResponse extends AbstractStructBase
{
    /**
     * The MidocoCrmTraveller
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmTraveller
     * @var \Pggns\MidocoApi\CrmSD\StructType\MidocoCrmTraveller[]
     */
    protected ?array $MidocoCrmTraveller = null;
    /**
     * Constructor method for GetTravellerResponse
     * @uses GetTravellerResponse::setMidocoCrmTraveller()
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoCrmTraveller[] $midocoCrmTraveller
     */
    public function __construct(?array $midocoCrmTraveller = null)
    {
        $this
            ->setMidocoCrmTraveller($midocoCrmTraveller);
    }
    /**
     * Get MidocoCrmTraveller value
     * @return \Pggns\MidocoApi\CrmSD\StructType\MidocoCrmTraveller[]
     */
    public function getMidocoCrmTraveller(): ?array
    {
        return $this->MidocoCrmTraveller;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCrmTraveller method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmTraveller method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmTravellerForArrayConstraintsFromSetMidocoCrmTraveller(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getTravellerResponseMidocoCrmTravellerItem) {
            // validation for constraint: itemType
            if (!$getTravellerResponseMidocoCrmTravellerItem instanceof \Pggns\MidocoApi\CrmSD\StructType\MidocoCrmTraveller) {
                $invalidValues[] = is_object($getTravellerResponseMidocoCrmTravellerItem) ? get_class($getTravellerResponseMidocoCrmTravellerItem) : sprintf('%s(%s)', gettype($getTravellerResponseMidocoCrmTravellerItem), var_export($getTravellerResponseMidocoCrmTravellerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmTraveller property can only contain items of type \Pggns\MidocoApi\CrmSD\StructType\MidocoCrmTraveller, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmTraveller value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoCrmTraveller[] $midocoCrmTraveller
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetTravellerResponse
     */
    public function setMidocoCrmTraveller(?array $midocoCrmTraveller = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmTravellerArrayErrorMessage = self::validateMidocoCrmTravellerForArrayConstraintsFromSetMidocoCrmTraveller($midocoCrmTraveller))) {
            throw new InvalidArgumentException($midocoCrmTravellerArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmTraveller = $midocoCrmTraveller;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmTraveller value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoCrmTraveller $item
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetTravellerResponse
     */
    public function addToMidocoCrmTraveller(\Pggns\MidocoApi\CrmSD\StructType\MidocoCrmTraveller $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\CrmSD\StructType\MidocoCrmTraveller) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmTraveller property can only contain items of type \Pggns\MidocoApi\CrmSD\StructType\MidocoCrmTraveller, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmTraveller[] = $item;
        
        return $this;
    }
}
