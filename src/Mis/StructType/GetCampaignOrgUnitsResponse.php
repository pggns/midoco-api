<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCampaignOrgUnitsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCampaignOrgUnitsResponse extends AbstractStructBase
{
    /**
     * The unit_name
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $unit_name = null;
    /**
     * Constructor method for GetCampaignOrgUnitsResponse
     * @uses GetCampaignOrgUnitsResponse::setUnit_name()
     * @param string[] $unit_name
     */
    public function __construct(?array $unit_name = null)
    {
        $this
            ->setUnit_name($unit_name);
    }
    /**
     * Get unit_name value
     * @return string[]
     */
    public function getUnit_name(): ?array
    {
        return $this->unit_name;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setUnit_name method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUnit_name method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUnit_nameForArrayConstraintFromSetUnit_name(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCampaignOrgUnitsResponseUnit_nameItem) {
            // validation for constraint: itemType
            if (!is_string($getCampaignOrgUnitsResponseUnit_nameItem)) {
                $invalidValues[] = is_object($getCampaignOrgUnitsResponseUnit_nameItem) ? get_class($getCampaignOrgUnitsResponseUnit_nameItem) : sprintf('%s(%s)', gettype($getCampaignOrgUnitsResponseUnit_nameItem), var_export($getCampaignOrgUnitsResponseUnit_nameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The unit_name property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set unit_name value
     * @throws InvalidArgumentException
     * @param string[] $unit_name
     * @return \Pggns\MidocoApi\Mis\StructType\GetCampaignOrgUnitsResponse
     */
    public function setUnit_name(?array $unit_name = null): self
    {
        // validation for constraint: array
        if ('' !== ($unit_nameArrayErrorMessage = self::validateUnit_nameForArrayConstraintFromSetUnit_name($unit_name))) {
            throw new InvalidArgumentException($unit_nameArrayErrorMessage, __LINE__);
        }
        $this->unit_name = $unit_name;
        
        return $this;
    }
    /**
     * Add item to unit_name value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Mis\StructType\GetCampaignOrgUnitsResponse
     */
    public function addToUnit_name(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The unit_name property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->unit_name[] = $item;
        
        return $this;
    }
}
