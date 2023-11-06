<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetJsonUrlForTrafficsCosmonautStringRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetJsonUrlForTrafficsCosmonautStringRequest extends AbstractStructBase
{
    /**
     * The MidocoCustomerId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: MidocoCustomerId
     * @var \Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO
     */
    protected \Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO $MidocoCustomerId;
    /**
     * The MidocoCrmCustomer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoCrmCustomer
     * @var \Pggns\MidocoApi\Crmsd\StructType\CrmCustomerDTO|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\CrmCustomerDTO $MidocoCrmCustomer = null;
    /**
     * The MidocoSelectedCrmPersonTraveller
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSelectedCrmPersonTraveller
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoSelectedCrmPersonTraveller[]
     */
    protected ?array $MidocoSelectedCrmPersonTraveller = null;
    /**
     * The MidocoCustomerTravel
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCustomerTravel
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerTravelType[]
     */
    protected ?array $MidocoCustomerTravel = null;
    /**
     * Constructor method for GetJsonUrlForTrafficsCosmonautStringRequest
     * @uses GetJsonUrlForTrafficsCosmonautStringRequest::setMidocoCustomerId()
     * @uses GetJsonUrlForTrafficsCosmonautStringRequest::setMidocoCrmCustomer()
     * @uses GetJsonUrlForTrafficsCosmonautStringRequest::setMidocoSelectedCrmPersonTraveller()
     * @uses GetJsonUrlForTrafficsCosmonautStringRequest::setMidocoCustomerTravel()
     * @param \Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO $midocoCustomerId
     * @param \Pggns\MidocoApi\Crmsd\StructType\CrmCustomerDTO $midocoCrmCustomer
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoSelectedCrmPersonTraveller[] $midocoSelectedCrmPersonTraveller
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerTravelType[] $midocoCustomerTravel
     */
    public function __construct(\Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO $midocoCustomerId, ?\Pggns\MidocoApi\Crmsd\StructType\CrmCustomerDTO $midocoCrmCustomer = null, ?array $midocoSelectedCrmPersonTraveller = null, ?array $midocoCustomerTravel = null)
    {
        $this
            ->setMidocoCustomerId($midocoCustomerId)
            ->setMidocoCrmCustomer($midocoCrmCustomer)
            ->setMidocoSelectedCrmPersonTraveller($midocoSelectedCrmPersonTraveller)
            ->setMidocoCustomerTravel($midocoCustomerTravel);
    }
    /**
     * Get MidocoCustomerId value
     * @return \Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO
     */
    public function getMidocoCustomerId(): \Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO
    {
        return $this->MidocoCustomerId;
    }
    /**
     * Set MidocoCustomerId value
     * @param \Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO $midocoCustomerId
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetJsonUrlForTrafficsCosmonautStringRequest
     */
    public function setMidocoCustomerId(\Pggns\MidocoApi\Crmsd\StructType\CustomerIdDTO $midocoCustomerId): self
    {
        $this->MidocoCustomerId = $midocoCustomerId;
        
        return $this;
    }
    /**
     * Get MidocoCrmCustomer value
     * @return \Pggns\MidocoApi\Crmsd\StructType\CrmCustomerDTO|null
     */
    public function getMidocoCrmCustomer(): ?\Pggns\MidocoApi\Crmsd\StructType\CrmCustomerDTO
    {
        return $this->MidocoCrmCustomer;
    }
    /**
     * Set MidocoCrmCustomer value
     * @param \Pggns\MidocoApi\Crmsd\StructType\CrmCustomerDTO $midocoCrmCustomer
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetJsonUrlForTrafficsCosmonautStringRequest
     */
    public function setMidocoCrmCustomer(?\Pggns\MidocoApi\Crmsd\StructType\CrmCustomerDTO $midocoCrmCustomer = null): self
    {
        $this->MidocoCrmCustomer = $midocoCrmCustomer;
        
        return $this;
    }
    /**
     * Get MidocoSelectedCrmPersonTraveller value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoSelectedCrmPersonTraveller[]
     */
    public function getMidocoSelectedCrmPersonTraveller(): ?array
    {
        return $this->MidocoSelectedCrmPersonTraveller;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoSelectedCrmPersonTraveller method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSelectedCrmPersonTraveller method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSelectedCrmPersonTravellerForArrayConstraintFromSetMidocoSelectedCrmPersonTraveller(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getJsonUrlForTrafficsCosmonautStringRequestMidocoSelectedCrmPersonTravellerItem) {
            // validation for constraint: itemType
            if (!$getJsonUrlForTrafficsCosmonautStringRequestMidocoSelectedCrmPersonTravellerItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoSelectedCrmPersonTraveller) {
                $invalidValues[] = is_object($getJsonUrlForTrafficsCosmonautStringRequestMidocoSelectedCrmPersonTravellerItem) ? get_class($getJsonUrlForTrafficsCosmonautStringRequestMidocoSelectedCrmPersonTravellerItem) : sprintf('%s(%s)', gettype($getJsonUrlForTrafficsCosmonautStringRequestMidocoSelectedCrmPersonTravellerItem), var_export($getJsonUrlForTrafficsCosmonautStringRequestMidocoSelectedCrmPersonTravellerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSelectedCrmPersonTraveller property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoSelectedCrmPersonTraveller, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSelectedCrmPersonTraveller value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoSelectedCrmPersonTraveller[] $midocoSelectedCrmPersonTraveller
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetJsonUrlForTrafficsCosmonautStringRequest
     */
    public function setMidocoSelectedCrmPersonTraveller(?array $midocoSelectedCrmPersonTraveller = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSelectedCrmPersonTravellerArrayErrorMessage = self::validateMidocoSelectedCrmPersonTravellerForArrayConstraintFromSetMidocoSelectedCrmPersonTraveller($midocoSelectedCrmPersonTraveller))) {
            throw new InvalidArgumentException($midocoSelectedCrmPersonTravellerArrayErrorMessage, __LINE__);
        }
        $this->MidocoSelectedCrmPersonTraveller = $midocoSelectedCrmPersonTraveller;
        
        return $this;
    }
    /**
     * Add item to MidocoSelectedCrmPersonTraveller value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoSelectedCrmPersonTraveller $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetJsonUrlForTrafficsCosmonautStringRequest
     */
    public function addToMidocoSelectedCrmPersonTraveller(\Pggns\MidocoApi\Crmsd\StructType\MidocoSelectedCrmPersonTraveller $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoSelectedCrmPersonTraveller) {
            throw new InvalidArgumentException(sprintf('The MidocoSelectedCrmPersonTraveller property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoSelectedCrmPersonTraveller, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSelectedCrmPersonTraveller[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoCustomerTravel value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerTravelType[]
     */
    public function getMidocoCustomerTravel(): ?array
    {
        return $this->MidocoCustomerTravel;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCustomerTravel method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCustomerTravel method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCustomerTravelForArrayConstraintFromSetMidocoCustomerTravel(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getJsonUrlForTrafficsCosmonautStringRequestMidocoCustomerTravelItem) {
            // validation for constraint: itemType
            if (!$getJsonUrlForTrafficsCosmonautStringRequestMidocoCustomerTravelItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerTravelType) {
                $invalidValues[] = is_object($getJsonUrlForTrafficsCosmonautStringRequestMidocoCustomerTravelItem) ? get_class($getJsonUrlForTrafficsCosmonautStringRequestMidocoCustomerTravelItem) : sprintf('%s(%s)', gettype($getJsonUrlForTrafficsCosmonautStringRequestMidocoCustomerTravelItem), var_export($getJsonUrlForTrafficsCosmonautStringRequestMidocoCustomerTravelItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCustomerTravel property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerTravelType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCustomerTravel value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerTravelType[] $midocoCustomerTravel
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetJsonUrlForTrafficsCosmonautStringRequest
     */
    public function setMidocoCustomerTravel(?array $midocoCustomerTravel = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCustomerTravelArrayErrorMessage = self::validateMidocoCustomerTravelForArrayConstraintFromSetMidocoCustomerTravel($midocoCustomerTravel))) {
            throw new InvalidArgumentException($midocoCustomerTravelArrayErrorMessage, __LINE__);
        }
        $this->MidocoCustomerTravel = $midocoCustomerTravel;
        
        return $this;
    }
    /**
     * Add item to MidocoCustomerTravel value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerTravelType $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetJsonUrlForTrafficsCosmonautStringRequest
     */
    public function addToMidocoCustomerTravel(\Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerTravelType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerTravelType) {
            throw new InvalidArgumentException(sprintf('The MidocoCustomerTravel property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerTravelType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCustomerTravel[] = $item;
        
        return $this;
    }
}
