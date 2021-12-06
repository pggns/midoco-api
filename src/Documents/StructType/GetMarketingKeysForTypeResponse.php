<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMarketingKeysForTypeResponse StructType
 * @subpackage Structs
 */
class GetMarketingKeysForTypeResponse extends AbstractStructBase
{
    /**
     * The MidocoMarketingKey
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMarketingKey
     * @var \Pggns\MidocoApi\Api\Documents\StructType\MarketingKeyDTO[]
     */
    protected ?array $MidocoMarketingKey = null;
    /**
     * Constructor method for GetMarketingKeysForTypeResponse
     * @uses GetMarketingKeysForTypeResponse::setMidocoMarketingKey()
     * @param \Pggns\MidocoApi\Api\Documents\StructType\MarketingKeyDTO[] $midocoMarketingKey
     */
    public function __construct(?array $midocoMarketingKey = null)
    {
        $this
            ->setMidocoMarketingKey($midocoMarketingKey);
    }
    /**
     * Get MidocoMarketingKey value
     * @return \Pggns\MidocoApi\Api\Documents\StructType\MarketingKeyDTO[]
     */
    public function getMidocoMarketingKey(): ?array
    {
        return $this->MidocoMarketingKey;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoMarketingKey method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMarketingKey method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMarketingKeyForArrayConstraintsFromSetMidocoMarketingKey(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMarketingKeysForTypeResponseMidocoMarketingKeyItem) {
            // validation for constraint: itemType
            if (!$getMarketingKeysForTypeResponseMidocoMarketingKeyItem instanceof \Pggns\MidocoApi\Api\Documents\StructType\MarketingKeyDTO) {
                $invalidValues[] = is_object($getMarketingKeysForTypeResponseMidocoMarketingKeyItem) ? get_class($getMarketingKeysForTypeResponseMidocoMarketingKeyItem) : sprintf('%s(%s)', gettype($getMarketingKeysForTypeResponseMidocoMarketingKeyItem), var_export($getMarketingKeysForTypeResponseMidocoMarketingKeyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMarketingKey property can only contain items of type \Pggns\MidocoApi\Api\Documents\StructType\MarketingKeyDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMarketingKey value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Documents\StructType\MarketingKeyDTO[] $midocoMarketingKey
     * @return \Pggns\MidocoApi\Api\Documents\StructType\GetMarketingKeysForTypeResponse
     */
    public function setMidocoMarketingKey(?array $midocoMarketingKey = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMarketingKeyArrayErrorMessage = self::validateMidocoMarketingKeyForArrayConstraintsFromSetMidocoMarketingKey($midocoMarketingKey))) {
            throw new InvalidArgumentException($midocoMarketingKeyArrayErrorMessage, __LINE__);
        }
        $this->MidocoMarketingKey = $midocoMarketingKey;
        
        return $this;
    }
    /**
     * Add item to MidocoMarketingKey value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Documents\StructType\MarketingKeyDTO $item
     * @return \Pggns\MidocoApi\Api\Documents\StructType\GetMarketingKeysForTypeResponse
     */
    public function addToMidocoMarketingKey(\Pggns\MidocoApi\Api\Documents\StructType\MarketingKeyDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Documents\StructType\MarketingKeyDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoMarketingKey property can only contain items of type \Pggns\MidocoApi\Api\Documents\StructType\MarketingKeyDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMarketingKey[] = $item;
        
        return $this;
    }
}
