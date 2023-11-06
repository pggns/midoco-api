<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDebitCardsResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getDebitCards --- returns the list of debit cards for a customer transmitted as parameter by customer id and the addresses
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetDebitCardsResponse extends AbstractStructBase
{
    /**
     * The MidocoCrmDebitCard
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmDebitCard
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmDebitCard[]
     */
    protected ?array $MidocoCrmDebitCard = null;
    /**
     * The MidocoCrmAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmAddress
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmAddress[]
     */
    protected ?array $MidocoCrmAddress = null;
    /**
     * The MidocoCrmCompany
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: MidocoCrmCompany
     * @var \Pggns\MidocoApi\Crmsd\StructType\CrmCompanyDTO|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\CrmCompanyDTO $MidocoCrmCompany = null;
    /**
     * The MidocoCrmPerson
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: MidocoCrmPerson
     * @var \Pggns\MidocoApi\Crmsd\StructType\CrmPersonDTO|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\CrmPersonDTO $MidocoCrmPerson = null;
    /**
     * The MidocoContactEntry
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoContactEntry
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoContactEntryType[]
     */
    protected ?array $MidocoContactEntry = null;
    /**
     * The MidocoMandate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoMandate
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoMandate|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\MidocoMandate $MidocoMandate = null;
    /**
     * The salutationId
     * @var string|null
     */
    protected ?string $salutationId = null;
    /**
     * Constructor method for GetDebitCardsResponse
     * @uses GetDebitCardsResponse::setMidocoCrmDebitCard()
     * @uses GetDebitCardsResponse::setMidocoCrmAddress()
     * @uses GetDebitCardsResponse::setMidocoCrmCompany()
     * @uses GetDebitCardsResponse::setMidocoCrmPerson()
     * @uses GetDebitCardsResponse::setMidocoContactEntry()
     * @uses GetDebitCardsResponse::setMidocoMandate()
     * @uses GetDebitCardsResponse::setSalutationId()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmDebitCard[] $midocoCrmDebitCard
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmAddress[] $midocoCrmAddress
     * @param \Pggns\MidocoApi\Crmsd\StructType\CrmCompanyDTO $midocoCrmCompany
     * @param \Pggns\MidocoApi\Crmsd\StructType\CrmPersonDTO $midocoCrmPerson
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoContactEntryType[] $midocoContactEntry
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoMandate $midocoMandate
     * @param string $salutationId
     */
    public function __construct(?array $midocoCrmDebitCard = null, ?array $midocoCrmAddress = null, ?\Pggns\MidocoApi\Crmsd\StructType\CrmCompanyDTO $midocoCrmCompany = null, ?\Pggns\MidocoApi\Crmsd\StructType\CrmPersonDTO $midocoCrmPerson = null, ?array $midocoContactEntry = null, ?\Pggns\MidocoApi\Crmsd\StructType\MidocoMandate $midocoMandate = null, ?string $salutationId = null)
    {
        $this
            ->setMidocoCrmDebitCard($midocoCrmDebitCard)
            ->setMidocoCrmAddress($midocoCrmAddress)
            ->setMidocoCrmCompany($midocoCrmCompany)
            ->setMidocoCrmPerson($midocoCrmPerson)
            ->setMidocoContactEntry($midocoContactEntry)
            ->setMidocoMandate($midocoMandate)
            ->setSalutationId($salutationId);
    }
    /**
     * Get MidocoCrmDebitCard value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmDebitCard[]
     */
    public function getMidocoCrmDebitCard(): ?array
    {
        return $this->MidocoCrmDebitCard;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCrmDebitCard method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmDebitCard method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmDebitCardForArrayConstraintFromSetMidocoCrmDebitCard(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getDebitCardsResponseMidocoCrmDebitCardItem) {
            // validation for constraint: itemType
            if (!$getDebitCardsResponseMidocoCrmDebitCardItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmDebitCard) {
                $invalidValues[] = is_object($getDebitCardsResponseMidocoCrmDebitCardItem) ? get_class($getDebitCardsResponseMidocoCrmDebitCardItem) : sprintf('%s(%s)', gettype($getDebitCardsResponseMidocoCrmDebitCardItem), var_export($getDebitCardsResponseMidocoCrmDebitCardItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmDebitCard property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmDebitCard, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmDebitCard value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmDebitCard[] $midocoCrmDebitCard
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetDebitCardsResponse
     */
    public function setMidocoCrmDebitCard(?array $midocoCrmDebitCard = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmDebitCardArrayErrorMessage = self::validateMidocoCrmDebitCardForArrayConstraintFromSetMidocoCrmDebitCard($midocoCrmDebitCard))) {
            throw new InvalidArgumentException($midocoCrmDebitCardArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmDebitCard = $midocoCrmDebitCard;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmDebitCard value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmDebitCard $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetDebitCardsResponse
     */
    public function addToMidocoCrmDebitCard(\Pggns\MidocoApi\Crmsd\StructType\MidocoCrmDebitCard $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmDebitCard) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmDebitCard property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmDebitCard, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmDebitCard[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoCrmAddress value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmAddress[]
     */
    public function getMidocoCrmAddress(): ?array
    {
        return $this->MidocoCrmAddress;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCrmAddress method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmAddress method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmAddressForArrayConstraintFromSetMidocoCrmAddress(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getDebitCardsResponseMidocoCrmAddressItem) {
            // validation for constraint: itemType
            if (!$getDebitCardsResponseMidocoCrmAddressItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmAddress) {
                $invalidValues[] = is_object($getDebitCardsResponseMidocoCrmAddressItem) ? get_class($getDebitCardsResponseMidocoCrmAddressItem) : sprintf('%s(%s)', gettype($getDebitCardsResponseMidocoCrmAddressItem), var_export($getDebitCardsResponseMidocoCrmAddressItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmAddress property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmAddress, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmAddress value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmAddress[] $midocoCrmAddress
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetDebitCardsResponse
     */
    public function setMidocoCrmAddress(?array $midocoCrmAddress = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmAddressArrayErrorMessage = self::validateMidocoCrmAddressForArrayConstraintFromSetMidocoCrmAddress($midocoCrmAddress))) {
            throw new InvalidArgumentException($midocoCrmAddressArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmAddress = $midocoCrmAddress;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmAddress value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmAddress $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetDebitCardsResponse
     */
    public function addToMidocoCrmAddress(\Pggns\MidocoApi\Crmsd\StructType\MidocoCrmAddress $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmAddress) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmAddress property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoCrmAddress, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmAddress[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoCrmCompany value
     * @return \Pggns\MidocoApi\Crmsd\StructType\CrmCompanyDTO|null
     */
    public function getMidocoCrmCompany(): ?\Pggns\MidocoApi\Crmsd\StructType\CrmCompanyDTO
    {
        return $this->MidocoCrmCompany;
    }
    /**
     * Set MidocoCrmCompany value
     * @param \Pggns\MidocoApi\Crmsd\StructType\CrmCompanyDTO $midocoCrmCompany
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetDebitCardsResponse
     */
    public function setMidocoCrmCompany(?\Pggns\MidocoApi\Crmsd\StructType\CrmCompanyDTO $midocoCrmCompany = null): self
    {
        $this->MidocoCrmCompany = $midocoCrmCompany;
        
        return $this;
    }
    /**
     * Get MidocoCrmPerson value
     * @return \Pggns\MidocoApi\Crmsd\StructType\CrmPersonDTO|null
     */
    public function getMidocoCrmPerson(): ?\Pggns\MidocoApi\Crmsd\StructType\CrmPersonDTO
    {
        return $this->MidocoCrmPerson;
    }
    /**
     * Set MidocoCrmPerson value
     * @param \Pggns\MidocoApi\Crmsd\StructType\CrmPersonDTO $midocoCrmPerson
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetDebitCardsResponse
     */
    public function setMidocoCrmPerson(?\Pggns\MidocoApi\Crmsd\StructType\CrmPersonDTO $midocoCrmPerson = null): self
    {
        $this->MidocoCrmPerson = $midocoCrmPerson;
        
        return $this;
    }
    /**
     * Get MidocoContactEntry value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoContactEntryType[]
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
        foreach ($values as $getDebitCardsResponseMidocoContactEntryItem) {
            // validation for constraint: itemType
            if (!$getDebitCardsResponseMidocoContactEntryItem instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoContactEntryType) {
                $invalidValues[] = is_object($getDebitCardsResponseMidocoContactEntryItem) ? get_class($getDebitCardsResponseMidocoContactEntryItem) : sprintf('%s(%s)', gettype($getDebitCardsResponseMidocoContactEntryItem), var_export($getDebitCardsResponseMidocoContactEntryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoContactEntry property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoContactEntryType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoContactEntry value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoContactEntryType[] $midocoContactEntry
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetDebitCardsResponse
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
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoContactEntryType $item
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetDebitCardsResponse
     */
    public function addToMidocoContactEntry(\Pggns\MidocoApi\Crmsd\StructType\MidocoContactEntryType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crmsd\StructType\MidocoContactEntryType) {
            throw new InvalidArgumentException(sprintf('The MidocoContactEntry property can only contain items of type \Pggns\MidocoApi\Crmsd\StructType\MidocoContactEntryType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoContactEntry[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoMandate value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoMandate|null
     */
    public function getMidocoMandate(): ?\Pggns\MidocoApi\Crmsd\StructType\MidocoMandate
    {
        return $this->MidocoMandate;
    }
    /**
     * Set MidocoMandate value
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoMandate $midocoMandate
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetDebitCardsResponse
     */
    public function setMidocoMandate(?\Pggns\MidocoApi\Crmsd\StructType\MidocoMandate $midocoMandate = null): self
    {
        $this->MidocoMandate = $midocoMandate;
        
        return $this;
    }
    /**
     * Get salutationId value
     * @return string|null
     */
    public function getSalutationId(): ?string
    {
        return $this->salutationId;
    }
    /**
     * Set salutationId value
     * @param string $salutationId
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetDebitCardsResponse
     */
    public function setSalutationId(?string $salutationId = null): self
    {
        // validation for constraint: string
        if (!is_null($salutationId) && !is_string($salutationId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($salutationId, true), gettype($salutationId)), __LINE__);
        }
        $this->salutationId = $salutationId;
        
        return $this;
    }
}
