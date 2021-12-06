<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAgencyCommissionResponse StructType
 * @subpackage Structs
 */
class GetAgencyCommissionResponse extends AbstractStructBase
{
    /**
     * The MidocoAgencyCommission
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAgencyCommission
     * @var \Pggns\MidocoApi\Crm\StructType\AgencyCommissionDTO[]
     */
    protected ?array $MidocoAgencyCommission = null;
    /**
     * Constructor method for GetAgencyCommissionResponse
     * @uses GetAgencyCommissionResponse::setMidocoAgencyCommission()
     * @param \Pggns\MidocoApi\Crm\StructType\AgencyCommissionDTO[] $midocoAgencyCommission
     */
    public function __construct(?array $midocoAgencyCommission = null)
    {
        $this
            ->setMidocoAgencyCommission($midocoAgencyCommission);
    }
    /**
     * Get MidocoAgencyCommission value
     * @return \Pggns\MidocoApi\Crm\StructType\AgencyCommissionDTO[]
     */
    public function getMidocoAgencyCommission(): ?array
    {
        return $this->MidocoAgencyCommission;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoAgencyCommission method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAgencyCommission method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAgencyCommissionForArrayConstraintsFromSetMidocoAgencyCommission(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAgencyCommissionResponseMidocoAgencyCommissionItem) {
            // validation for constraint: itemType
            if (!$getAgencyCommissionResponseMidocoAgencyCommissionItem instanceof \Pggns\MidocoApi\Crm\StructType\AgencyCommissionDTO) {
                $invalidValues[] = is_object($getAgencyCommissionResponseMidocoAgencyCommissionItem) ? get_class($getAgencyCommissionResponseMidocoAgencyCommissionItem) : sprintf('%s(%s)', gettype($getAgencyCommissionResponseMidocoAgencyCommissionItem), var_export($getAgencyCommissionResponseMidocoAgencyCommissionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAgencyCommission property can only contain items of type \Pggns\MidocoApi\Crm\StructType\AgencyCommissionDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAgencyCommission value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\AgencyCommissionDTO[] $midocoAgencyCommission
     * @return \Pggns\MidocoApi\Crm\StructType\GetAgencyCommissionResponse
     */
    public function setMidocoAgencyCommission(?array $midocoAgencyCommission = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAgencyCommissionArrayErrorMessage = self::validateMidocoAgencyCommissionForArrayConstraintsFromSetMidocoAgencyCommission($midocoAgencyCommission))) {
            throw new InvalidArgumentException($midocoAgencyCommissionArrayErrorMessage, __LINE__);
        }
        $this->MidocoAgencyCommission = $midocoAgencyCommission;
        
        return $this;
    }
    /**
     * Add item to MidocoAgencyCommission value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\AgencyCommissionDTO $item
     * @return \Pggns\MidocoApi\Crm\StructType\GetAgencyCommissionResponse
     */
    public function addToMidocoAgencyCommission(\Pggns\MidocoApi\Crm\StructType\AgencyCommissionDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\AgencyCommissionDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoAgencyCommission property can only contain items of type \Pggns\MidocoApi\Crm\StructType\AgencyCommissionDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAgencyCommission[] = $item;
        
        return $this;
    }
}
