<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoMisCampaignOrgUnitsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMidocoMisCampaignOrgUnitsResponse extends AbstractStructBase
{
    /**
     * The MidocoMisCampaignOrgUnit
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMisCampaignOrgUnit
     * @var \Pggns\MidocoApi\Mis\StructType\MisCampaignOrgUnitDTO[]
     */
    protected ?array $MidocoMisCampaignOrgUnit = null;
    /**
     * Constructor method for GetMidocoMisCampaignOrgUnitsResponse
     * @uses GetMidocoMisCampaignOrgUnitsResponse::setMidocoMisCampaignOrgUnit()
     * @param \Pggns\MidocoApi\Mis\StructType\MisCampaignOrgUnitDTO[] $midocoMisCampaignOrgUnit
     */
    public function __construct(?array $midocoMisCampaignOrgUnit = null)
    {
        $this
            ->setMidocoMisCampaignOrgUnit($midocoMisCampaignOrgUnit);
    }
    /**
     * Get MidocoMisCampaignOrgUnit value
     * @return \Pggns\MidocoApi\Mis\StructType\MisCampaignOrgUnitDTO[]
     */
    public function getMidocoMisCampaignOrgUnit(): ?array
    {
        return $this->MidocoMisCampaignOrgUnit;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoMisCampaignOrgUnit method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMisCampaignOrgUnit method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMisCampaignOrgUnitForArrayConstraintFromSetMidocoMisCampaignOrgUnit(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMidocoMisCampaignOrgUnitsResponseMidocoMisCampaignOrgUnitItem) {
            // validation for constraint: itemType
            if (!$getMidocoMisCampaignOrgUnitsResponseMidocoMisCampaignOrgUnitItem instanceof \Pggns\MidocoApi\Mis\StructType\MisCampaignOrgUnitDTO) {
                $invalidValues[] = is_object($getMidocoMisCampaignOrgUnitsResponseMidocoMisCampaignOrgUnitItem) ? get_class($getMidocoMisCampaignOrgUnitsResponseMidocoMisCampaignOrgUnitItem) : sprintf('%s(%s)', gettype($getMidocoMisCampaignOrgUnitsResponseMidocoMisCampaignOrgUnitItem), var_export($getMidocoMisCampaignOrgUnitsResponseMidocoMisCampaignOrgUnitItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMisCampaignOrgUnit property can only contain items of type \Pggns\MidocoApi\Mis\StructType\MisCampaignOrgUnitDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMisCampaignOrgUnit value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\MisCampaignOrgUnitDTO[] $midocoMisCampaignOrgUnit
     * @return \Pggns\MidocoApi\Mis\StructType\GetMidocoMisCampaignOrgUnitsResponse
     */
    public function setMidocoMisCampaignOrgUnit(?array $midocoMisCampaignOrgUnit = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMisCampaignOrgUnitArrayErrorMessage = self::validateMidocoMisCampaignOrgUnitForArrayConstraintFromSetMidocoMisCampaignOrgUnit($midocoMisCampaignOrgUnit))) {
            throw new InvalidArgumentException($midocoMisCampaignOrgUnitArrayErrorMessage, __LINE__);
        }
        $this->MidocoMisCampaignOrgUnit = $midocoMisCampaignOrgUnit;
        
        return $this;
    }
    /**
     * Add item to MidocoMisCampaignOrgUnit value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\MisCampaignOrgUnitDTO $item
     * @return \Pggns\MidocoApi\Mis\StructType\GetMidocoMisCampaignOrgUnitsResponse
     */
    public function addToMidocoMisCampaignOrgUnit(\Pggns\MidocoApi\Mis\StructType\MisCampaignOrgUnitDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Mis\StructType\MisCampaignOrgUnitDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoMisCampaignOrgUnit property can only contain items of type \Pggns\MidocoApi\Mis\StructType\MisCampaignOrgUnitDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMisCampaignOrgUnit[] = $item;
        
        return $this;
    }
}
