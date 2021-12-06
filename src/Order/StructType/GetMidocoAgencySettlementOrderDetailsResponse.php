<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoAgencySettlementOrderDetailsResponse StructType
 * @subpackage Structs
 */
class GetMidocoAgencySettlementOrderDetailsResponse extends AbstractStructBase
{
    /**
     * The MidocoAgencyProvisionDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAgencyProvisionDetails
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoAgencyProvisionDetails[]
     */
    protected ?array $MidocoAgencyProvisionDetails = null;
    /**
     * The MidocoAgencySettlement
     * Meta information extracted from the WSDL
     * - ref: MidocoAgencySettlement
     * @var \Pggns\MidocoApi\Api\Order\StructType\AgencySettlementDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\AgencySettlementDTO $MidocoAgencySettlement = null;
    /**
     * Constructor method for GetMidocoAgencySettlementOrderDetailsResponse
     * @uses GetMidocoAgencySettlementOrderDetailsResponse::setMidocoAgencyProvisionDetails()
     * @uses GetMidocoAgencySettlementOrderDetailsResponse::setMidocoAgencySettlement()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoAgencyProvisionDetails[] $midocoAgencyProvisionDetails
     * @param \Pggns\MidocoApi\Api\Order\StructType\AgencySettlementDTO $midocoAgencySettlement
     */
    public function __construct(?array $midocoAgencyProvisionDetails = null, ?\Pggns\MidocoApi\Api\Order\StructType\AgencySettlementDTO $midocoAgencySettlement = null)
    {
        $this
            ->setMidocoAgencyProvisionDetails($midocoAgencyProvisionDetails)
            ->setMidocoAgencySettlement($midocoAgencySettlement);
    }
    /**
     * Get MidocoAgencyProvisionDetails value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoAgencyProvisionDetails[]
     */
    public function getMidocoAgencyProvisionDetails(): ?array
    {
        return $this->MidocoAgencyProvisionDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoAgencyProvisionDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAgencyProvisionDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAgencyProvisionDetailsForArrayConstraintsFromSetMidocoAgencyProvisionDetails(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMidocoAgencySettlementOrderDetailsResponseMidocoAgencyProvisionDetailsItem) {
            // validation for constraint: itemType
            if (!$getMidocoAgencySettlementOrderDetailsResponseMidocoAgencyProvisionDetailsItem instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoAgencyProvisionDetails) {
                $invalidValues[] = is_object($getMidocoAgencySettlementOrderDetailsResponseMidocoAgencyProvisionDetailsItem) ? get_class($getMidocoAgencySettlementOrderDetailsResponseMidocoAgencyProvisionDetailsItem) : sprintf('%s(%s)', gettype($getMidocoAgencySettlementOrderDetailsResponseMidocoAgencyProvisionDetailsItem), var_export($getMidocoAgencySettlementOrderDetailsResponseMidocoAgencyProvisionDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAgencyProvisionDetails property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoAgencyProvisionDetails, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAgencyProvisionDetails value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoAgencyProvisionDetails[] $midocoAgencyProvisionDetails
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetMidocoAgencySettlementOrderDetailsResponse
     */
    public function setMidocoAgencyProvisionDetails(?array $midocoAgencyProvisionDetails = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAgencyProvisionDetailsArrayErrorMessage = self::validateMidocoAgencyProvisionDetailsForArrayConstraintsFromSetMidocoAgencyProvisionDetails($midocoAgencyProvisionDetails))) {
            throw new InvalidArgumentException($midocoAgencyProvisionDetailsArrayErrorMessage, __LINE__);
        }
        $this->MidocoAgencyProvisionDetails = $midocoAgencyProvisionDetails;
        
        return $this;
    }
    /**
     * Add item to MidocoAgencyProvisionDetails value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoAgencyProvisionDetails $item
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetMidocoAgencySettlementOrderDetailsResponse
     */
    public function addToMidocoAgencyProvisionDetails(\Pggns\MidocoApi\Api\Order\StructType\MidocoAgencyProvisionDetails $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoAgencyProvisionDetails) {
            throw new InvalidArgumentException(sprintf('The MidocoAgencyProvisionDetails property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoAgencyProvisionDetails, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAgencyProvisionDetails[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoAgencySettlement value
     * @return \Pggns\MidocoApi\Api\Order\StructType\AgencySettlementDTO|null
     */
    public function getMidocoAgencySettlement(): ?\Pggns\MidocoApi\Api\Order\StructType\AgencySettlementDTO
    {
        return $this->MidocoAgencySettlement;
    }
    /**
     * Set MidocoAgencySettlement value
     * @param \Pggns\MidocoApi\Api\Order\StructType\AgencySettlementDTO $midocoAgencySettlement
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetMidocoAgencySettlementOrderDetailsResponse
     */
    public function setMidocoAgencySettlement(?\Pggns\MidocoApi\Api\Order\StructType\AgencySettlementDTO $midocoAgencySettlement = null): self
    {
        $this->MidocoAgencySettlement = $midocoAgencySettlement;
        
        return $this;
    }
}
