<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchMidocoAttributeLocalizationResponse StructType
 * @subpackage Structs
 */
class SearchMidocoAttributeLocalizationResponse extends AbstractStructBase
{
    /**
     * The MidocoSystemAttributeLocalization
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSystemAttributeLocalization
     * @var \Pggns\MidocoApi\Documents\StructType\AttributeDefinitionLocalDTO[]
     */
    protected ?array $MidocoSystemAttributeLocalization = null;
    /**
     * Constructor method for SearchMidocoAttributeLocalizationResponse
     * @uses SearchMidocoAttributeLocalizationResponse::setMidocoSystemAttributeLocalization()
     * @param \Pggns\MidocoApi\Documents\StructType\AttributeDefinitionLocalDTO[] $midocoSystemAttributeLocalization
     */
    public function __construct(?array $midocoSystemAttributeLocalization = null)
    {
        $this
            ->setMidocoSystemAttributeLocalization($midocoSystemAttributeLocalization);
    }
    /**
     * Get MidocoSystemAttributeLocalization value
     * @return \Pggns\MidocoApi\Documents\StructType\AttributeDefinitionLocalDTO[]
     */
    public function getMidocoSystemAttributeLocalization(): ?array
    {
        return $this->MidocoSystemAttributeLocalization;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSystemAttributeLocalization method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSystemAttributeLocalization method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSystemAttributeLocalizationForArrayConstraintsFromSetMidocoSystemAttributeLocalization(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchMidocoAttributeLocalizationResponseMidocoSystemAttributeLocalizationItem) {
            // validation for constraint: itemType
            if (!$searchMidocoAttributeLocalizationResponseMidocoSystemAttributeLocalizationItem instanceof \Pggns\MidocoApi\Documents\StructType\AttributeDefinitionLocalDTO) {
                $invalidValues[] = is_object($searchMidocoAttributeLocalizationResponseMidocoSystemAttributeLocalizationItem) ? get_class($searchMidocoAttributeLocalizationResponseMidocoSystemAttributeLocalizationItem) : sprintf('%s(%s)', gettype($searchMidocoAttributeLocalizationResponseMidocoSystemAttributeLocalizationItem), var_export($searchMidocoAttributeLocalizationResponseMidocoSystemAttributeLocalizationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSystemAttributeLocalization property can only contain items of type \Pggns\MidocoApi\Documents\StructType\AttributeDefinitionLocalDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSystemAttributeLocalization value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\AttributeDefinitionLocalDTO[] $midocoSystemAttributeLocalization
     * @return \Pggns\MidocoApi\Documents\StructType\SearchMidocoAttributeLocalizationResponse
     */
    public function setMidocoSystemAttributeLocalization(?array $midocoSystemAttributeLocalization = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSystemAttributeLocalizationArrayErrorMessage = self::validateMidocoSystemAttributeLocalizationForArrayConstraintsFromSetMidocoSystemAttributeLocalization($midocoSystemAttributeLocalization))) {
            throw new InvalidArgumentException($midocoSystemAttributeLocalizationArrayErrorMessage, __LINE__);
        }
        $this->MidocoSystemAttributeLocalization = $midocoSystemAttributeLocalization;
        
        return $this;
    }
    /**
     * Add item to MidocoSystemAttributeLocalization value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\AttributeDefinitionLocalDTO $item
     * @return \Pggns\MidocoApi\Documents\StructType\SearchMidocoAttributeLocalizationResponse
     */
    public function addToMidocoSystemAttributeLocalization(\Pggns\MidocoApi\Documents\StructType\AttributeDefinitionLocalDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Documents\StructType\AttributeDefinitionLocalDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoSystemAttributeLocalization property can only contain items of type \Pggns\MidocoApi\Documents\StructType\AttributeDefinitionLocalDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSystemAttributeLocalization[] = $item;
        
        return $this;
    }
}
