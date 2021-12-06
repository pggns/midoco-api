<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBonusCardsResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getBonusCards --- returns the list of bonus cards corresponding to a customer id
 * @subpackage Structs
 */
class GetBonusCardsResponse extends AbstractStructBase
{
    /**
     * The MidocoCrmBonusCard
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmBonusCard
     * @var \Pggns\MidocoApi\CrmSD\StructType\CrmBonusCardDTO[]
     */
    protected ?array $MidocoCrmBonusCard = null;
    /**
     * Constructor method for GetBonusCardsResponse
     * @uses GetBonusCardsResponse::setMidocoCrmBonusCard()
     * @param \Pggns\MidocoApi\CrmSD\StructType\CrmBonusCardDTO[] $midocoCrmBonusCard
     */
    public function __construct(?array $midocoCrmBonusCard = null)
    {
        $this
            ->setMidocoCrmBonusCard($midocoCrmBonusCard);
    }
    /**
     * Get MidocoCrmBonusCard value
     * @return \Pggns\MidocoApi\CrmSD\StructType\CrmBonusCardDTO[]
     */
    public function getMidocoCrmBonusCard(): ?array
    {
        return $this->MidocoCrmBonusCard;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCrmBonusCard method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmBonusCard method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmBonusCardForArrayConstraintsFromSetMidocoCrmBonusCard(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getBonusCardsResponseMidocoCrmBonusCardItem) {
            // validation for constraint: itemType
            if (!$getBonusCardsResponseMidocoCrmBonusCardItem instanceof \Pggns\MidocoApi\CrmSD\StructType\CrmBonusCardDTO) {
                $invalidValues[] = is_object($getBonusCardsResponseMidocoCrmBonusCardItem) ? get_class($getBonusCardsResponseMidocoCrmBonusCardItem) : sprintf('%s(%s)', gettype($getBonusCardsResponseMidocoCrmBonusCardItem), var_export($getBonusCardsResponseMidocoCrmBonusCardItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmBonusCard property can only contain items of type \Pggns\MidocoApi\CrmSD\StructType\CrmBonusCardDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmBonusCard value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\CrmSD\StructType\CrmBonusCardDTO[] $midocoCrmBonusCard
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetBonusCardsResponse
     */
    public function setMidocoCrmBonusCard(?array $midocoCrmBonusCard = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmBonusCardArrayErrorMessage = self::validateMidocoCrmBonusCardForArrayConstraintsFromSetMidocoCrmBonusCard($midocoCrmBonusCard))) {
            throw new InvalidArgumentException($midocoCrmBonusCardArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmBonusCard = $midocoCrmBonusCard;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmBonusCard value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\CrmSD\StructType\CrmBonusCardDTO $item
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetBonusCardsResponse
     */
    public function addToMidocoCrmBonusCard(\Pggns\MidocoApi\CrmSD\StructType\CrmBonusCardDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\CrmSD\StructType\CrmBonusCardDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmBonusCard property can only contain items of type \Pggns\MidocoApi\CrmSD\StructType\CrmBonusCardDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmBonusCard[] = $item;
        
        return $this;
    }
}
