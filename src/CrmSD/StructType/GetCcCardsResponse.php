<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCcCardsResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getCcCards --- returns the list of CC cards that correspond to a given customer id
 * @subpackage Structs
 */
class GetCcCardsResponse extends AbstractStructBase
{
    /**
     * The MidocoCrmCcCard
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmCcCard
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmCcCard[]
     */
    protected ?array $MidocoCrmCcCard = null;
    /**
     * Constructor method for GetCcCardsResponse
     * @uses GetCcCardsResponse::setMidocoCrmCcCard()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmCcCard[] $midocoCrmCcCard
     */
    public function __construct(?array $midocoCrmCcCard = null)
    {
        $this
            ->setMidocoCrmCcCard($midocoCrmCcCard);
    }
    /**
     * Get MidocoCrmCcCard value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmCcCard[]
     */
    public function getMidocoCrmCcCard(): ?array
    {
        return $this->MidocoCrmCcCard;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCrmCcCard method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmCcCard method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmCcCardForArrayConstraintsFromSetMidocoCrmCcCard(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCcCardsResponseMidocoCrmCcCardItem) {
            // validation for constraint: itemType
            if (!$getCcCardsResponseMidocoCrmCcCardItem instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmCcCard) {
                $invalidValues[] = is_object($getCcCardsResponseMidocoCrmCcCardItem) ? get_class($getCcCardsResponseMidocoCrmCcCardItem) : sprintf('%s(%s)', gettype($getCcCardsResponseMidocoCrmCcCardItem), var_export($getCcCardsResponseMidocoCrmCcCardItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmCcCard property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmCcCard, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmCcCard value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmCcCard[] $midocoCrmCcCard
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\GetCcCardsResponse
     */
    public function setMidocoCrmCcCard(?array $midocoCrmCcCard = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmCcCardArrayErrorMessage = self::validateMidocoCrmCcCardForArrayConstraintsFromSetMidocoCrmCcCard($midocoCrmCcCard))) {
            throw new InvalidArgumentException($midocoCrmCcCardArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmCcCard = $midocoCrmCcCard;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmCcCard value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmCcCard $item
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\GetCcCardsResponse
     */
    public function addToMidocoCrmCcCard(\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmCcCard $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmCcCard) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmCcCard property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCrmCcCard, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmCcCard[] = $item;
        
        return $this;
    }
}
