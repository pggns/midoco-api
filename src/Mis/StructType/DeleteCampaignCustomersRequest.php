<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteCampaignCustomersRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteCampaignCustomersRequest extends AbstractStructBase
{
    /**
     * The MidocoCustomerId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCustomerId
     * @var \Pggns\MidocoApi\Mis\StructType\MidocoCustomerIdType[]
     */
    protected ?array $MidocoCustomerId = null;
    /**
     * The campaignId
     * @var int|null
     */
    protected ?int $campaignId = null;
    /**
     * Constructor method for DeleteCampaignCustomersRequest
     * @uses DeleteCampaignCustomersRequest::setMidocoCustomerId()
     * @uses DeleteCampaignCustomersRequest::setCampaignId()
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoCustomerIdType[] $midocoCustomerId
     * @param int $campaignId
     */
    public function __construct(?array $midocoCustomerId = null, ?int $campaignId = null)
    {
        $this
            ->setMidocoCustomerId($midocoCustomerId)
            ->setCampaignId($campaignId);
    }
    /**
     * Get MidocoCustomerId value
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoCustomerIdType[]
     */
    public function getMidocoCustomerId(): ?array
    {
        return $this->MidocoCustomerId;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCustomerId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCustomerId method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCustomerIdForArrayConstraintFromSetMidocoCustomerId(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $deleteCampaignCustomersRequestMidocoCustomerIdItem) {
            // validation for constraint: itemType
            if (!$deleteCampaignCustomersRequestMidocoCustomerIdItem instanceof \Pggns\MidocoApi\Mis\StructType\MidocoCustomerIdType) {
                $invalidValues[] = is_object($deleteCampaignCustomersRequestMidocoCustomerIdItem) ? get_class($deleteCampaignCustomersRequestMidocoCustomerIdItem) : sprintf('%s(%s)', gettype($deleteCampaignCustomersRequestMidocoCustomerIdItem), var_export($deleteCampaignCustomersRequestMidocoCustomerIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCustomerId property can only contain items of type \Pggns\MidocoApi\Mis\StructType\MidocoCustomerIdType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCustomerId value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoCustomerIdType[] $midocoCustomerId
     * @return \Pggns\MidocoApi\Mis\StructType\DeleteCampaignCustomersRequest
     */
    public function setMidocoCustomerId(?array $midocoCustomerId = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCustomerIdArrayErrorMessage = self::validateMidocoCustomerIdForArrayConstraintFromSetMidocoCustomerId($midocoCustomerId))) {
            throw new InvalidArgumentException($midocoCustomerIdArrayErrorMessage, __LINE__);
        }
        $this->MidocoCustomerId = $midocoCustomerId;
        
        return $this;
    }
    /**
     * Add item to MidocoCustomerId value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoCustomerIdType $item
     * @return \Pggns\MidocoApi\Mis\StructType\DeleteCampaignCustomersRequest
     */
    public function addToMidocoCustomerId(\Pggns\MidocoApi\Mis\StructType\MidocoCustomerIdType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Mis\StructType\MidocoCustomerIdType) {
            throw new InvalidArgumentException(sprintf('The MidocoCustomerId property can only contain items of type \Pggns\MidocoApi\Mis\StructType\MidocoCustomerIdType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCustomerId[] = $item;
        
        return $this;
    }
    /**
     * Get campaignId value
     * @return int|null
     */
    public function getCampaignId(): ?int
    {
        return $this->campaignId;
    }
    /**
     * Set campaignId value
     * @param int $campaignId
     * @return \Pggns\MidocoApi\Mis\StructType\DeleteCampaignCustomersRequest
     */
    public function setCampaignId(?int $campaignId = null): self
    {
        // validation for constraint: int
        if (!is_null($campaignId) && !(is_int($campaignId) || ctype_digit($campaignId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($campaignId, true), gettype($campaignId)), __LINE__);
        }
        $this->campaignId = $campaignId;
        
        return $this;
    }
}
