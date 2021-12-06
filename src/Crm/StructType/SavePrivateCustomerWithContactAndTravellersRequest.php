<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SavePrivateCustomerWithContactAndTravellersRequest
 * StructType
 * @subpackage Structs
 */
class SavePrivateCustomerWithContactAndTravellersRequest extends AbstractStructBase
{
    /**
     * The MidocoCrmCustomer
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmCustomer
     * @var \Pggns\MidocoApi\Api\Crm\StructType\CrmCustomerDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Crm\StructType\CrmCustomerDTO $MidocoCrmCustomer = null;
    /**
     * The MidocoContactEntryWithSource
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoContactEntryWithSource
     * @var \Pggns\MidocoApi\Api\Crm\StructType\MidocoContactEntryWithSource[]
     */
    protected ?array $MidocoContactEntryWithSource = null;
    /**
     * The MidocoCrmPersonTraveller
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmPersonTraveller
     * @var \Pggns\MidocoApi\Api\Crm\StructType\CrmPersonTravellerDTO[]
     */
    protected ?array $MidocoCrmPersonTraveller = null;
    /**
     * Constructor method for SavePrivateCustomerWithContactAndTravellersRequest
     * @uses SavePrivateCustomerWithContactAndTravellersRequest::setMidocoCrmCustomer()
     * @uses SavePrivateCustomerWithContactAndTravellersRequest::setMidocoContactEntryWithSource()
     * @uses SavePrivateCustomerWithContactAndTravellersRequest::setMidocoCrmPersonTraveller()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\CrmCustomerDTO $midocoCrmCustomer
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoContactEntryWithSource[] $midocoContactEntryWithSource
     * @param \Pggns\MidocoApi\Api\Crm\StructType\CrmPersonTravellerDTO[] $midocoCrmPersonTraveller
     */
    public function __construct(?\Pggns\MidocoApi\Api\Crm\StructType\CrmCustomerDTO $midocoCrmCustomer = null, ?array $midocoContactEntryWithSource = null, ?array $midocoCrmPersonTraveller = null)
    {
        $this
            ->setMidocoCrmCustomer($midocoCrmCustomer)
            ->setMidocoContactEntryWithSource($midocoContactEntryWithSource)
            ->setMidocoCrmPersonTraveller($midocoCrmPersonTraveller);
    }
    /**
     * Get MidocoCrmCustomer value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\CrmCustomerDTO|null
     */
    public function getMidocoCrmCustomer(): ?\Pggns\MidocoApi\Api\Crm\StructType\CrmCustomerDTO
    {
        return $this->MidocoCrmCustomer;
    }
    /**
     * Set MidocoCrmCustomer value
     * @param \Pggns\MidocoApi\Api\Crm\StructType\CrmCustomerDTO $midocoCrmCustomer
     * @return \Pggns\MidocoApi\Api\Crm\StructType\SavePrivateCustomerWithContactAndTravellersRequest
     */
    public function setMidocoCrmCustomer(?\Pggns\MidocoApi\Api\Crm\StructType\CrmCustomerDTO $midocoCrmCustomer = null): self
    {
        $this->MidocoCrmCustomer = $midocoCrmCustomer;
        
        return $this;
    }
    /**
     * Get MidocoContactEntryWithSource value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\MidocoContactEntryWithSource[]
     */
    public function getMidocoContactEntryWithSource(): ?array
    {
        return $this->MidocoContactEntryWithSource;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoContactEntryWithSource method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoContactEntryWithSource method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoContactEntryWithSourceForArrayConstraintsFromSetMidocoContactEntryWithSource(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $savePrivateCustomerWithContactAndTravellersRequestMidocoContactEntryWithSourceItem) {
            // validation for constraint: itemType
            if (!$savePrivateCustomerWithContactAndTravellersRequestMidocoContactEntryWithSourceItem instanceof \Pggns\MidocoApi\Api\Crm\StructType\MidocoContactEntryWithSource) {
                $invalidValues[] = is_object($savePrivateCustomerWithContactAndTravellersRequestMidocoContactEntryWithSourceItem) ? get_class($savePrivateCustomerWithContactAndTravellersRequestMidocoContactEntryWithSourceItem) : sprintf('%s(%s)', gettype($savePrivateCustomerWithContactAndTravellersRequestMidocoContactEntryWithSourceItem), var_export($savePrivateCustomerWithContactAndTravellersRequestMidocoContactEntryWithSourceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoContactEntryWithSource property can only contain items of type \Pggns\MidocoApi\Api\Crm\StructType\MidocoContactEntryWithSource, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoContactEntryWithSource value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoContactEntryWithSource[] $midocoContactEntryWithSource
     * @return \Pggns\MidocoApi\Api\Crm\StructType\SavePrivateCustomerWithContactAndTravellersRequest
     */
    public function setMidocoContactEntryWithSource(?array $midocoContactEntryWithSource = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoContactEntryWithSourceArrayErrorMessage = self::validateMidocoContactEntryWithSourceForArrayConstraintsFromSetMidocoContactEntryWithSource($midocoContactEntryWithSource))) {
            throw new InvalidArgumentException($midocoContactEntryWithSourceArrayErrorMessage, __LINE__);
        }
        $this->MidocoContactEntryWithSource = $midocoContactEntryWithSource;
        
        return $this;
    }
    /**
     * Add item to MidocoContactEntryWithSource value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoContactEntryWithSource $item
     * @return \Pggns\MidocoApi\Api\Crm\StructType\SavePrivateCustomerWithContactAndTravellersRequest
     */
    public function addToMidocoContactEntryWithSource(\Pggns\MidocoApi\Api\Crm\StructType\MidocoContactEntryWithSource $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Crm\StructType\MidocoContactEntryWithSource) {
            throw new InvalidArgumentException(sprintf('The MidocoContactEntryWithSource property can only contain items of type \Pggns\MidocoApi\Api\Crm\StructType\MidocoContactEntryWithSource, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoContactEntryWithSource[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoCrmPersonTraveller value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\CrmPersonTravellerDTO[]
     */
    public function getMidocoCrmPersonTraveller(): ?array
    {
        return $this->MidocoCrmPersonTraveller;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCrmPersonTraveller method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmPersonTraveller method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmPersonTravellerForArrayConstraintsFromSetMidocoCrmPersonTraveller(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $savePrivateCustomerWithContactAndTravellersRequestMidocoCrmPersonTravellerItem) {
            // validation for constraint: itemType
            if (!$savePrivateCustomerWithContactAndTravellersRequestMidocoCrmPersonTravellerItem instanceof \Pggns\MidocoApi\Api\Crm\StructType\CrmPersonTravellerDTO) {
                $invalidValues[] = is_object($savePrivateCustomerWithContactAndTravellersRequestMidocoCrmPersonTravellerItem) ? get_class($savePrivateCustomerWithContactAndTravellersRequestMidocoCrmPersonTravellerItem) : sprintf('%s(%s)', gettype($savePrivateCustomerWithContactAndTravellersRequestMidocoCrmPersonTravellerItem), var_export($savePrivateCustomerWithContactAndTravellersRequestMidocoCrmPersonTravellerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmPersonTraveller property can only contain items of type \Pggns\MidocoApi\Api\Crm\StructType\CrmPersonTravellerDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmPersonTraveller value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Crm\StructType\CrmPersonTravellerDTO[] $midocoCrmPersonTraveller
     * @return \Pggns\MidocoApi\Api\Crm\StructType\SavePrivateCustomerWithContactAndTravellersRequest
     */
    public function setMidocoCrmPersonTraveller(?array $midocoCrmPersonTraveller = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmPersonTravellerArrayErrorMessage = self::validateMidocoCrmPersonTravellerForArrayConstraintsFromSetMidocoCrmPersonTraveller($midocoCrmPersonTraveller))) {
            throw new InvalidArgumentException($midocoCrmPersonTravellerArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmPersonTraveller = $midocoCrmPersonTraveller;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmPersonTraveller value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Crm\StructType\CrmPersonTravellerDTO $item
     * @return \Pggns\MidocoApi\Api\Crm\StructType\SavePrivateCustomerWithContactAndTravellersRequest
     */
    public function addToMidocoCrmPersonTraveller(\Pggns\MidocoApi\Api\Crm\StructType\CrmPersonTravellerDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Crm\StructType\CrmPersonTravellerDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmPersonTraveller property can only contain items of type \Pggns\MidocoApi\Api\Crm\StructType\CrmPersonTravellerDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmPersonTraveller[] = $item;
        
        return $this;
    }
}
