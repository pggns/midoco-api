<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchCrmExternalOfferResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchCrmExternalOfferResponse extends AbstractStructBase
{
    /**
     * The MidocoCrmExternalOffer
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmExternalOffer
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoCrmExternalOffer[]
     */
    protected ?array $MidocoCrmExternalOffer = null;
    /**
     * Constructor method for SearchCrmExternalOfferResponse
     * @uses SearchCrmExternalOfferResponse::setMidocoCrmExternalOffer()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmExternalOffer[] $midocoCrmExternalOffer
     */
    public function __construct(?array $midocoCrmExternalOffer = null)
    {
        $this
            ->setMidocoCrmExternalOffer($midocoCrmExternalOffer);
    }
    /**
     * Get MidocoCrmExternalOffer value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCrmExternalOffer[]
     */
    public function getMidocoCrmExternalOffer(): ?array
    {
        return $this->MidocoCrmExternalOffer;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCrmExternalOffer method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmExternalOffer method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmExternalOfferForArrayConstraintFromSetMidocoCrmExternalOffer(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchCrmExternalOfferResponseMidocoCrmExternalOfferItem) {
            // validation for constraint: itemType
            if (!$searchCrmExternalOfferResponseMidocoCrmExternalOfferItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoCrmExternalOffer) {
                $invalidValues[] = is_object($searchCrmExternalOfferResponseMidocoCrmExternalOfferItem) ? get_class($searchCrmExternalOfferResponseMidocoCrmExternalOfferItem) : sprintf('%s(%s)', gettype($searchCrmExternalOfferResponseMidocoCrmExternalOfferItem), var_export($searchCrmExternalOfferResponseMidocoCrmExternalOfferItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmExternalOffer property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoCrmExternalOffer, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmExternalOffer value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmExternalOffer[] $midocoCrmExternalOffer
     * @return \Pggns\MidocoApi\Crm\StructType\SearchCrmExternalOfferResponse
     */
    public function setMidocoCrmExternalOffer(?array $midocoCrmExternalOffer = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmExternalOfferArrayErrorMessage = self::validateMidocoCrmExternalOfferForArrayConstraintFromSetMidocoCrmExternalOffer($midocoCrmExternalOffer))) {
            throw new InvalidArgumentException($midocoCrmExternalOfferArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmExternalOffer = $midocoCrmExternalOffer;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmExternalOffer value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCrmExternalOffer $item
     * @return \Pggns\MidocoApi\Crm\StructType\SearchCrmExternalOfferResponse
     */
    public function addToMidocoCrmExternalOffer(\Pggns\MidocoApi\Crm\StructType\MidocoCrmExternalOffer $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\MidocoCrmExternalOffer) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmExternalOffer property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoCrmExternalOffer, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmExternalOffer[] = $item;
        
        return $this;
    }
}
