<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCrmImport StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoCrmImport extends AbstractStructBase
{
    /**
     * The MidocoCrmCustomer
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmCustomer
     * @var \Pggns\MidocoApi\Documents\StructType\CrmCustomerDTO|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\CrmCustomerDTO $MidocoCrmCustomer = null;
    /**
     * The MidocoSaveAddress
     * Meta information extracted from the WSDL
     * - ref: MidocoSaveAddress
     * @var \Pggns\MidocoApi\Documents\StructType\SaveAddressDTO|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\SaveAddressDTO $MidocoSaveAddress = null;
    /**
     * The MidocoContactEntry
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoContactEntry
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoContactEntryType[]
     */
    protected ?array $MidocoContactEntry = null;
    /**
     * The MidocoCrmCriteria
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmCriteria
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoCrmCriteria[]
     */
    protected ?array $MidocoCrmCriteria = null;
    /**
     * The MidocoCustomerTravel
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCustomerTravel
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoCustomerTravelType[]
     */
    protected ?array $MidocoCustomerTravel = null;
    /**
     * The MidocoContactHistory
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoContactHistory
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoContactHistory[]
     */
    protected ?array $MidocoContactHistory = null;
    /**
     * The MidocoCrmPersonTraveller
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmPersonTraveller
     * @var \Pggns\MidocoApi\Documents\StructType\CrmPersonTravellerDTO[]
     */
    protected ?array $MidocoCrmPersonTraveller = null;
    /**
     * The MidocoCrmNotice
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmNotice
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoCrmNotice[]
     */
    protected ?array $MidocoCrmNotice = null;
    /**
     * The MidocoCrmBonusCard
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmBonusCard
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoCrmBonusCard[]
     */
    protected ?array $MidocoCrmBonusCard = null;
    /**
     * The MidocoCrmCcCard
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmCcCard
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoCrmCcCard[]
     */
    protected ?array $MidocoCrmCcCard = null;
    /**
     * Constructor method for MidocoCrmImport
     * @uses MidocoCrmImport::setMidocoCrmCustomer()
     * @uses MidocoCrmImport::setMidocoSaveAddress()
     * @uses MidocoCrmImport::setMidocoContactEntry()
     * @uses MidocoCrmImport::setMidocoCrmCriteria()
     * @uses MidocoCrmImport::setMidocoCustomerTravel()
     * @uses MidocoCrmImport::setMidocoContactHistory()
     * @uses MidocoCrmImport::setMidocoCrmPersonTraveller()
     * @uses MidocoCrmImport::setMidocoCrmNotice()
     * @uses MidocoCrmImport::setMidocoCrmBonusCard()
     * @uses MidocoCrmImport::setMidocoCrmCcCard()
     * @param \Pggns\MidocoApi\Documents\StructType\CrmCustomerDTO $midocoCrmCustomer
     * @param \Pggns\MidocoApi\Documents\StructType\SaveAddressDTO $midocoSaveAddress
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoContactEntryType[] $midocoContactEntry
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoCrmCriteria[] $midocoCrmCriteria
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoCustomerTravelType[] $midocoCustomerTravel
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoContactHistory[] $midocoContactHistory
     * @param \Pggns\MidocoApi\Documents\StructType\CrmPersonTravellerDTO[] $midocoCrmPersonTraveller
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoCrmNotice[] $midocoCrmNotice
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoCrmBonusCard[] $midocoCrmBonusCard
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoCrmCcCard[] $midocoCrmCcCard
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\CrmCustomerDTO $midocoCrmCustomer = null, ?\Pggns\MidocoApi\Documents\StructType\SaveAddressDTO $midocoSaveAddress = null, ?array $midocoContactEntry = null, ?array $midocoCrmCriteria = null, ?array $midocoCustomerTravel = null, ?array $midocoContactHistory = null, ?array $midocoCrmPersonTraveller = null, ?array $midocoCrmNotice = null, ?array $midocoCrmBonusCard = null, ?array $midocoCrmCcCard = null)
    {
        $this
            ->setMidocoCrmCustomer($midocoCrmCustomer)
            ->setMidocoSaveAddress($midocoSaveAddress)
            ->setMidocoContactEntry($midocoContactEntry)
            ->setMidocoCrmCriteria($midocoCrmCriteria)
            ->setMidocoCustomerTravel($midocoCustomerTravel)
            ->setMidocoContactHistory($midocoContactHistory)
            ->setMidocoCrmPersonTraveller($midocoCrmPersonTraveller)
            ->setMidocoCrmNotice($midocoCrmNotice)
            ->setMidocoCrmBonusCard($midocoCrmBonusCard)
            ->setMidocoCrmCcCard($midocoCrmCcCard);
    }
    /**
     * Get MidocoCrmCustomer value
     * @return \Pggns\MidocoApi\Documents\StructType\CrmCustomerDTO|null
     */
    public function getMidocoCrmCustomer(): ?\Pggns\MidocoApi\Documents\StructType\CrmCustomerDTO
    {
        return $this->MidocoCrmCustomer;
    }
    /**
     * Set MidocoCrmCustomer value
     * @param \Pggns\MidocoApi\Documents\StructType\CrmCustomerDTO $midocoCrmCustomer
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoCrmImport
     */
    public function setMidocoCrmCustomer(?\Pggns\MidocoApi\Documents\StructType\CrmCustomerDTO $midocoCrmCustomer = null): self
    {
        $this->MidocoCrmCustomer = $midocoCrmCustomer;
        
        return $this;
    }
    /**
     * Get MidocoSaveAddress value
     * @return \Pggns\MidocoApi\Documents\StructType\SaveAddressDTO|null
     */
    public function getMidocoSaveAddress(): ?\Pggns\MidocoApi\Documents\StructType\SaveAddressDTO
    {
        return $this->MidocoSaveAddress;
    }
    /**
     * Set MidocoSaveAddress value
     * @param \Pggns\MidocoApi\Documents\StructType\SaveAddressDTO $midocoSaveAddress
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoCrmImport
     */
    public function setMidocoSaveAddress(?\Pggns\MidocoApi\Documents\StructType\SaveAddressDTO $midocoSaveAddress = null): self
    {
        $this->MidocoSaveAddress = $midocoSaveAddress;
        
        return $this;
    }
    /**
     * Get MidocoContactEntry value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoContactEntryType[]
     */
    public function getMidocoContactEntry(): ?array
    {
        return $this->MidocoContactEntry;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoContactEntry method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoContactEntry method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoContactEntryForArrayConstraintFromSetMidocoContactEntry(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCrmImportMidocoContactEntryItem) {
            // validation for constraint: itemType
            if (!$midocoCrmImportMidocoContactEntryItem instanceof \Pggns\MidocoApi\Documents\StructType\MidocoContactEntryType) {
                $invalidValues[] = is_object($midocoCrmImportMidocoContactEntryItem) ? get_class($midocoCrmImportMidocoContactEntryItem) : sprintf('%s(%s)', gettype($midocoCrmImportMidocoContactEntryItem), var_export($midocoCrmImportMidocoContactEntryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoContactEntry property can only contain items of type \Pggns\MidocoApi\Documents\StructType\MidocoContactEntryType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoContactEntry value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoContactEntryType[] $midocoContactEntry
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoCrmImport
     */
    public function setMidocoContactEntry(?array $midocoContactEntry = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoContactEntryArrayErrorMessage = self::validateMidocoContactEntryForArrayConstraintFromSetMidocoContactEntry($midocoContactEntry))) {
            throw new InvalidArgumentException($midocoContactEntryArrayErrorMessage, __LINE__);
        }
        $this->MidocoContactEntry = $midocoContactEntry;
        
        return $this;
    }
    /**
     * Add item to MidocoContactEntry value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoContactEntryType $item
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoCrmImport
     */
    public function addToMidocoContactEntry(\Pggns\MidocoApi\Documents\StructType\MidocoContactEntryType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Documents\StructType\MidocoContactEntryType) {
            throw new InvalidArgumentException(sprintf('The MidocoContactEntry property can only contain items of type \Pggns\MidocoApi\Documents\StructType\MidocoContactEntryType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoContactEntry[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoCrmCriteria value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoCrmCriteria[]
     */
    public function getMidocoCrmCriteria(): ?array
    {
        return $this->MidocoCrmCriteria;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCrmCriteria method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmCriteria method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmCriteriaForArrayConstraintFromSetMidocoCrmCriteria(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCrmImportMidocoCrmCriteriaItem) {
            // validation for constraint: itemType
            if (!$midocoCrmImportMidocoCrmCriteriaItem instanceof \Pggns\MidocoApi\Documents\StructType\MidocoCrmCriteria) {
                $invalidValues[] = is_object($midocoCrmImportMidocoCrmCriteriaItem) ? get_class($midocoCrmImportMidocoCrmCriteriaItem) : sprintf('%s(%s)', gettype($midocoCrmImportMidocoCrmCriteriaItem), var_export($midocoCrmImportMidocoCrmCriteriaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmCriteria property can only contain items of type \Pggns\MidocoApi\Documents\StructType\MidocoCrmCriteria, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmCriteria value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoCrmCriteria[] $midocoCrmCriteria
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoCrmImport
     */
    public function setMidocoCrmCriteria(?array $midocoCrmCriteria = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmCriteriaArrayErrorMessage = self::validateMidocoCrmCriteriaForArrayConstraintFromSetMidocoCrmCriteria($midocoCrmCriteria))) {
            throw new InvalidArgumentException($midocoCrmCriteriaArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmCriteria = $midocoCrmCriteria;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmCriteria value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoCrmCriteria $item
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoCrmImport
     */
    public function addToMidocoCrmCriteria(\Pggns\MidocoApi\Documents\StructType\MidocoCrmCriteria $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Documents\StructType\MidocoCrmCriteria) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmCriteria property can only contain items of type \Pggns\MidocoApi\Documents\StructType\MidocoCrmCriteria, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmCriteria[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoCustomerTravel value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoCustomerTravelType[]
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
        foreach ($values as $midocoCrmImportMidocoCustomerTravelItem) {
            // validation for constraint: itemType
            if (!$midocoCrmImportMidocoCustomerTravelItem instanceof \Pggns\MidocoApi\Documents\StructType\MidocoCustomerTravelType) {
                $invalidValues[] = is_object($midocoCrmImportMidocoCustomerTravelItem) ? get_class($midocoCrmImportMidocoCustomerTravelItem) : sprintf('%s(%s)', gettype($midocoCrmImportMidocoCustomerTravelItem), var_export($midocoCrmImportMidocoCustomerTravelItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCustomerTravel property can only contain items of type \Pggns\MidocoApi\Documents\StructType\MidocoCustomerTravelType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCustomerTravel value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoCustomerTravelType[] $midocoCustomerTravel
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoCrmImport
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
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoCustomerTravelType $item
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoCrmImport
     */
    public function addToMidocoCustomerTravel(\Pggns\MidocoApi\Documents\StructType\MidocoCustomerTravelType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Documents\StructType\MidocoCustomerTravelType) {
            throw new InvalidArgumentException(sprintf('The MidocoCustomerTravel property can only contain items of type \Pggns\MidocoApi\Documents\StructType\MidocoCustomerTravelType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCustomerTravel[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoContactHistory value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoContactHistory[]
     */
    public function getMidocoContactHistory(): ?array
    {
        return $this->MidocoContactHistory;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoContactHistory method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoContactHistory method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoContactHistoryForArrayConstraintFromSetMidocoContactHistory(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCrmImportMidocoContactHistoryItem) {
            // validation for constraint: itemType
            if (!$midocoCrmImportMidocoContactHistoryItem instanceof \Pggns\MidocoApi\Documents\StructType\MidocoContactHistory) {
                $invalidValues[] = is_object($midocoCrmImportMidocoContactHistoryItem) ? get_class($midocoCrmImportMidocoContactHistoryItem) : sprintf('%s(%s)', gettype($midocoCrmImportMidocoContactHistoryItem), var_export($midocoCrmImportMidocoContactHistoryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoContactHistory property can only contain items of type \Pggns\MidocoApi\Documents\StructType\MidocoContactHistory, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoContactHistory value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoContactHistory[] $midocoContactHistory
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoCrmImport
     */
    public function setMidocoContactHistory(?array $midocoContactHistory = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoContactHistoryArrayErrorMessage = self::validateMidocoContactHistoryForArrayConstraintFromSetMidocoContactHistory($midocoContactHistory))) {
            throw new InvalidArgumentException($midocoContactHistoryArrayErrorMessage, __LINE__);
        }
        $this->MidocoContactHistory = $midocoContactHistory;
        
        return $this;
    }
    /**
     * Add item to MidocoContactHistory value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoContactHistory $item
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoCrmImport
     */
    public function addToMidocoContactHistory(\Pggns\MidocoApi\Documents\StructType\MidocoContactHistory $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Documents\StructType\MidocoContactHistory) {
            throw new InvalidArgumentException(sprintf('The MidocoContactHistory property can only contain items of type \Pggns\MidocoApi\Documents\StructType\MidocoContactHistory, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoContactHistory[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoCrmPersonTraveller value
     * @return \Pggns\MidocoApi\Documents\StructType\CrmPersonTravellerDTO[]
     */
    public function getMidocoCrmPersonTraveller(): ?array
    {
        return $this->MidocoCrmPersonTraveller;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCrmPersonTraveller method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmPersonTraveller method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmPersonTravellerForArrayConstraintFromSetMidocoCrmPersonTraveller(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCrmImportMidocoCrmPersonTravellerItem) {
            // validation for constraint: itemType
            if (!$midocoCrmImportMidocoCrmPersonTravellerItem instanceof \Pggns\MidocoApi\Documents\StructType\CrmPersonTravellerDTO) {
                $invalidValues[] = is_object($midocoCrmImportMidocoCrmPersonTravellerItem) ? get_class($midocoCrmImportMidocoCrmPersonTravellerItem) : sprintf('%s(%s)', gettype($midocoCrmImportMidocoCrmPersonTravellerItem), var_export($midocoCrmImportMidocoCrmPersonTravellerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmPersonTraveller property can only contain items of type \Pggns\MidocoApi\Documents\StructType\CrmPersonTravellerDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmPersonTraveller value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\CrmPersonTravellerDTO[] $midocoCrmPersonTraveller
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoCrmImport
     */
    public function setMidocoCrmPersonTraveller(?array $midocoCrmPersonTraveller = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmPersonTravellerArrayErrorMessage = self::validateMidocoCrmPersonTravellerForArrayConstraintFromSetMidocoCrmPersonTraveller($midocoCrmPersonTraveller))) {
            throw new InvalidArgumentException($midocoCrmPersonTravellerArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmPersonTraveller = $midocoCrmPersonTraveller;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmPersonTraveller value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\CrmPersonTravellerDTO $item
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoCrmImport
     */
    public function addToMidocoCrmPersonTraveller(\Pggns\MidocoApi\Documents\StructType\CrmPersonTravellerDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Documents\StructType\CrmPersonTravellerDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmPersonTraveller property can only contain items of type \Pggns\MidocoApi\Documents\StructType\CrmPersonTravellerDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmPersonTraveller[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoCrmNotice value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoCrmNotice[]
     */
    public function getMidocoCrmNotice(): ?array
    {
        return $this->MidocoCrmNotice;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCrmNotice method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmNotice method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmNoticeForArrayConstraintFromSetMidocoCrmNotice(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCrmImportMidocoCrmNoticeItem) {
            // validation for constraint: itemType
            if (!$midocoCrmImportMidocoCrmNoticeItem instanceof \Pggns\MidocoApi\Documents\StructType\MidocoCrmNotice) {
                $invalidValues[] = is_object($midocoCrmImportMidocoCrmNoticeItem) ? get_class($midocoCrmImportMidocoCrmNoticeItem) : sprintf('%s(%s)', gettype($midocoCrmImportMidocoCrmNoticeItem), var_export($midocoCrmImportMidocoCrmNoticeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmNotice property can only contain items of type \Pggns\MidocoApi\Documents\StructType\MidocoCrmNotice, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmNotice value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoCrmNotice[] $midocoCrmNotice
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoCrmImport
     */
    public function setMidocoCrmNotice(?array $midocoCrmNotice = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmNoticeArrayErrorMessage = self::validateMidocoCrmNoticeForArrayConstraintFromSetMidocoCrmNotice($midocoCrmNotice))) {
            throw new InvalidArgumentException($midocoCrmNoticeArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmNotice = $midocoCrmNotice;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmNotice value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoCrmNotice $item
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoCrmImport
     */
    public function addToMidocoCrmNotice(\Pggns\MidocoApi\Documents\StructType\MidocoCrmNotice $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Documents\StructType\MidocoCrmNotice) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmNotice property can only contain items of type \Pggns\MidocoApi\Documents\StructType\MidocoCrmNotice, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmNotice[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoCrmBonusCard value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoCrmBonusCard[]
     */
    public function getMidocoCrmBonusCard(): ?array
    {
        return $this->MidocoCrmBonusCard;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCrmBonusCard method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmBonusCard method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmBonusCardForArrayConstraintFromSetMidocoCrmBonusCard(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCrmImportMidocoCrmBonusCardItem) {
            // validation for constraint: itemType
            if (!$midocoCrmImportMidocoCrmBonusCardItem instanceof \Pggns\MidocoApi\Documents\StructType\MidocoCrmBonusCard) {
                $invalidValues[] = is_object($midocoCrmImportMidocoCrmBonusCardItem) ? get_class($midocoCrmImportMidocoCrmBonusCardItem) : sprintf('%s(%s)', gettype($midocoCrmImportMidocoCrmBonusCardItem), var_export($midocoCrmImportMidocoCrmBonusCardItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmBonusCard property can only contain items of type \Pggns\MidocoApi\Documents\StructType\MidocoCrmBonusCard, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmBonusCard value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoCrmBonusCard[] $midocoCrmBonusCard
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoCrmImport
     */
    public function setMidocoCrmBonusCard(?array $midocoCrmBonusCard = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmBonusCardArrayErrorMessage = self::validateMidocoCrmBonusCardForArrayConstraintFromSetMidocoCrmBonusCard($midocoCrmBonusCard))) {
            throw new InvalidArgumentException($midocoCrmBonusCardArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmBonusCard = $midocoCrmBonusCard;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmBonusCard value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoCrmBonusCard $item
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoCrmImport
     */
    public function addToMidocoCrmBonusCard(\Pggns\MidocoApi\Documents\StructType\MidocoCrmBonusCard $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Documents\StructType\MidocoCrmBonusCard) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmBonusCard property can only contain items of type \Pggns\MidocoApi\Documents\StructType\MidocoCrmBonusCard, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmBonusCard[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoCrmCcCard value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoCrmCcCard[]
     */
    public function getMidocoCrmCcCard(): ?array
    {
        return $this->MidocoCrmCcCard;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCrmCcCard method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmCcCard method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmCcCardForArrayConstraintFromSetMidocoCrmCcCard(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCrmImportMidocoCrmCcCardItem) {
            // validation for constraint: itemType
            if (!$midocoCrmImportMidocoCrmCcCardItem instanceof \Pggns\MidocoApi\Documents\StructType\MidocoCrmCcCard) {
                $invalidValues[] = is_object($midocoCrmImportMidocoCrmCcCardItem) ? get_class($midocoCrmImportMidocoCrmCcCardItem) : sprintf('%s(%s)', gettype($midocoCrmImportMidocoCrmCcCardItem), var_export($midocoCrmImportMidocoCrmCcCardItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmCcCard property can only contain items of type \Pggns\MidocoApi\Documents\StructType\MidocoCrmCcCard, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmCcCard value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoCrmCcCard[] $midocoCrmCcCard
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoCrmImport
     */
    public function setMidocoCrmCcCard(?array $midocoCrmCcCard = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmCcCardArrayErrorMessage = self::validateMidocoCrmCcCardForArrayConstraintFromSetMidocoCrmCcCard($midocoCrmCcCard))) {
            throw new InvalidArgumentException($midocoCrmCcCardArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmCcCard = $midocoCrmCcCard;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmCcCard value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoCrmCcCard $item
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoCrmImport
     */
    public function addToMidocoCrmCcCard(\Pggns\MidocoApi\Documents\StructType\MidocoCrmCcCard $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Documents\StructType\MidocoCrmCcCard) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmCcCard property can only contain items of type \Pggns\MidocoApi\Documents\StructType\MidocoCrmCcCard, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmCcCard[] = $item;
        
        return $this;
    }
}
