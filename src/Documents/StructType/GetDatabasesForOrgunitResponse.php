<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDatabasesForOrgunitResponse StructType
 * @subpackage Structs
 */
class GetDatabasesForOrgunitResponse extends AbstractStructBase
{
    /**
     * The MidocoDatabaseType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoDatabaseType
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoDatabaseType[]
     */
    protected ?array $MidocoDatabaseType = null;
    /**
     * Constructor method for GetDatabasesForOrgunitResponse
     * @uses GetDatabasesForOrgunitResponse::setMidocoDatabaseType()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoDatabaseType[] $midocoDatabaseType
     */
    public function __construct(?array $midocoDatabaseType = null)
    {
        $this
            ->setMidocoDatabaseType($midocoDatabaseType);
    }
    /**
     * Get MidocoDatabaseType value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoDatabaseType[]
     */
    public function getMidocoDatabaseType(): ?array
    {
        return $this->MidocoDatabaseType;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoDatabaseType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoDatabaseType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoDatabaseTypeForArrayConstraintsFromSetMidocoDatabaseType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getDatabasesForOrgunitResponseMidocoDatabaseTypeItem) {
            // validation for constraint: itemType
            if (!$getDatabasesForOrgunitResponseMidocoDatabaseTypeItem instanceof \Pggns\MidocoApi\Documents\StructType\MidocoDatabaseType) {
                $invalidValues[] = is_object($getDatabasesForOrgunitResponseMidocoDatabaseTypeItem) ? get_class($getDatabasesForOrgunitResponseMidocoDatabaseTypeItem) : sprintf('%s(%s)', gettype($getDatabasesForOrgunitResponseMidocoDatabaseTypeItem), var_export($getDatabasesForOrgunitResponseMidocoDatabaseTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoDatabaseType property can only contain items of type \Pggns\MidocoApi\Documents\StructType\MidocoDatabaseType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoDatabaseType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoDatabaseType[] $midocoDatabaseType
     * @return \Pggns\MidocoApi\Documents\StructType\GetDatabasesForOrgunitResponse
     */
    public function setMidocoDatabaseType(?array $midocoDatabaseType = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoDatabaseTypeArrayErrorMessage = self::validateMidocoDatabaseTypeForArrayConstraintsFromSetMidocoDatabaseType($midocoDatabaseType))) {
            throw new InvalidArgumentException($midocoDatabaseTypeArrayErrorMessage, __LINE__);
        }
        $this->MidocoDatabaseType = $midocoDatabaseType;
        
        return $this;
    }
    /**
     * Add item to MidocoDatabaseType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoDatabaseType $item
     * @return \Pggns\MidocoApi\Documents\StructType\GetDatabasesForOrgunitResponse
     */
    public function addToMidocoDatabaseType(\Pggns\MidocoApi\Documents\StructType\MidocoDatabaseType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Documents\StructType\MidocoDatabaseType) {
            throw new InvalidArgumentException(sprintf('The MidocoDatabaseType property can only contain items of type \Pggns\MidocoApi\Documents\StructType\MidocoDatabaseType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoDatabaseType[] = $item;
        
        return $this;
    }
}
