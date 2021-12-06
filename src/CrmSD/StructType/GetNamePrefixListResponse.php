<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetNamePrefixListResponse StructType
 * @subpackage Structs
 */
class GetNamePrefixListResponse extends AbstractStructBase
{
    /**
     * The MidocoNamePrefix
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoNamePrefix
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\NamePrefixDTO[]
     */
    protected ?array $MidocoNamePrefix = null;
    /**
     * Constructor method for GetNamePrefixListResponse
     * @uses GetNamePrefixListResponse::setMidocoNamePrefix()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\NamePrefixDTO[] $midocoNamePrefix
     */
    public function __construct(?array $midocoNamePrefix = null)
    {
        $this
            ->setMidocoNamePrefix($midocoNamePrefix);
    }
    /**
     * Get MidocoNamePrefix value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\NamePrefixDTO[]
     */
    public function getMidocoNamePrefix(): ?array
    {
        return $this->MidocoNamePrefix;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoNamePrefix method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoNamePrefix method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoNamePrefixForArrayConstraintsFromSetMidocoNamePrefix(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getNamePrefixListResponseMidocoNamePrefixItem) {
            // validation for constraint: itemType
            if (!$getNamePrefixListResponseMidocoNamePrefixItem instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\NamePrefixDTO) {
                $invalidValues[] = is_object($getNamePrefixListResponseMidocoNamePrefixItem) ? get_class($getNamePrefixListResponseMidocoNamePrefixItem) : sprintf('%s(%s)', gettype($getNamePrefixListResponseMidocoNamePrefixItem), var_export($getNamePrefixListResponseMidocoNamePrefixItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoNamePrefix property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\NamePrefixDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoNamePrefix value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\NamePrefixDTO[] $midocoNamePrefix
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\GetNamePrefixListResponse
     */
    public function setMidocoNamePrefix(?array $midocoNamePrefix = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoNamePrefixArrayErrorMessage = self::validateMidocoNamePrefixForArrayConstraintsFromSetMidocoNamePrefix($midocoNamePrefix))) {
            throw new InvalidArgumentException($midocoNamePrefixArrayErrorMessage, __LINE__);
        }
        $this->MidocoNamePrefix = $midocoNamePrefix;
        
        return $this;
    }
    /**
     * Add item to MidocoNamePrefix value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\NamePrefixDTO $item
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\GetNamePrefixListResponse
     */
    public function addToMidocoNamePrefix(\Pggns\MidocoApi\Api\CrmSD\StructType\NamePrefixDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\NamePrefixDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoNamePrefix property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\NamePrefixDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoNamePrefix[] = $item;
        
        return $this;
    }
}
