<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoSellItemType StructType
 * @subpackage Structs
 */
class MidocoSellItemType extends SellItemDTO
{
    /**
     * The MidocoPriceDetail
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoPriceDetail
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoPriceDetailType[]
     */
    protected ?array $MidocoPriceDetail = null;
    /**
     * The MidocoOnlinePaymentTransaction
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOnlinePaymentTransaction
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoOnlinePaymentTransaction[]
     */
    protected ?array $MidocoOnlinePaymentTransaction = null;
    /**
     * The MidocoSellPassenger
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSellPassenger
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoSellPassenger[]
     */
    protected ?array $MidocoSellPassenger = null;
    /**
     * The MidocoSellRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSellRemark
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoSellRemark[]
     */
    protected ?array $MidocoSellRemark = null;
    /**
     * The MidocoDocumentItem
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoDocumentItem
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoDocumentItem|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoDocumentItem $MidocoDocumentItem = null;
    /**
     * The MidocoTravelItem
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoTravelItem
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoTravelItemType|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoTravelItemType $MidocoTravelItem = null;
    /**
     * The MidocoManualItem
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoManualItem
     * @var \Pggns\MidocoApi\Documents\StructType\ManualitemDTO|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\ManualitemDTO $MidocoManualItem = null;
    /**
     * The MidocoCalcItem
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoCalcItem
     * @var \Pggns\MidocoApi\Documents\StructType\CalcitemDTO|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\CalcitemDTO $MidocoCalcItem = null;
    /**
     * The MidocoPackageInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoPackageInfo
     * @var \Pggns\MidocoApi\Documents\StructType\PackageitemDTO|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\PackageitemDTO $MidocoPackageInfo = null;
    /**
     * The MidocoSellItemPricing
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoSellItemPricing
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoSellItemPricing|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoSellItemPricing $MidocoSellItemPricing = null;
    /**
     * The MidocoSellItemError
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSellItemError
     * @var \Pggns\MidocoApi\Documents\StructType\SellItemErrorDTO[]
     */
    protected ?array $MidocoSellItemError = null;
    /**
     * The MidocoSellItem
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSellItem
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoSellItemType[]
     */
    protected ?array $MidocoSellItem = null;
    /**
     * The RevenueBookingInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: RevenueBookingInfo
     * @var \Pggns\MidocoApi\Documents\StructType\RevenueBookingInfoType[]
     */
    protected ?array $RevenueBookingInfo = null;
    /**
     * The MidocoSellItemAttribute
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSellItemAttribute
     * @var \Pggns\MidocoApi\Documents\StructType\SellItemAttributeDTO[]
     */
    protected ?array $MidocoSellItemAttribute = null;
    /**
     * The MidocoSellItemVatDivision
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSellItemVatDivision
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoSellItemVatDivision[]
     */
    protected ?array $MidocoSellItemVatDivision = null;
    /**
     * The MidocoSellDetailsPrice
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSellDetailsPrice
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoSellDetailsPrice[]
     */
    protected ?array $MidocoSellDetailsPrice = null;
    /**
     * The MidocoSellItemItem
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoSellItemItem
     * @var \Pggns\MidocoApi\Documents\StructType\SellItemItemDTO|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\SellItemItemDTO $MidocoSellItemItem = null;
    /**
     * The MidocoSellItemSaving
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSellItemSaving
     * @var \Pggns\MidocoApi\Documents\StructType\SellItemSavingDTO[]
     */
    protected ?array $MidocoSellItemSaving = null;
    /**
     * The MidocoSellItemEinvoice
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: MidocoSellItemEinvoice
     * @var \Pggns\MidocoApi\Documents\StructType\SellItemEinvoiceDTO|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\SellItemEinvoiceDTO $MidocoSellItemEinvoice = null;
    /**
     * The unitAlias
     * @var string|null
     */
    protected ?string $unitAlias = null;
    /**
     * The isPackageChild
     * Meta information extracted from the WSDL
     * - documentation: true = is child of a package Warning! This is new since 14.7.1, rearly used. Maybe there is better solution to extends the MidocoSellItem with ParentMidocoSellItem?
     * @var bool|null
     */
    protected ?bool $isPackageChild = null;
    /**
     * The billingStatus
     * @var int|null
     */
    protected ?int $billingStatus = null;
    /**
     * The is_deletable
     * @var bool|null
     */
    protected ?bool $is_deletable = null;
    /**
     * The displayedItemPrice
     * @var float|null
     */
    protected ?float $displayedItemPrice = null;
    /**
     * The displayedCurrency
     * @var string|null
     */
    protected ?string $displayedCurrency = null;
    /**
     * Constructor method for MidocoSellItemType
     * @uses MidocoSellItemType::setMidocoPriceDetail()
     * @uses MidocoSellItemType::setMidocoOnlinePaymentTransaction()
     * @uses MidocoSellItemType::setMidocoSellPassenger()
     * @uses MidocoSellItemType::setMidocoSellRemark()
     * @uses MidocoSellItemType::setMidocoDocumentItem()
     * @uses MidocoSellItemType::setMidocoTravelItem()
     * @uses MidocoSellItemType::setMidocoManualItem()
     * @uses MidocoSellItemType::setMidocoCalcItem()
     * @uses MidocoSellItemType::setMidocoPackageInfo()
     * @uses MidocoSellItemType::setMidocoSellItemPricing()
     * @uses MidocoSellItemType::setMidocoSellItemError()
     * @uses MidocoSellItemType::setMidocoSellItem()
     * @uses MidocoSellItemType::setRevenueBookingInfo()
     * @uses MidocoSellItemType::setMidocoSellItemAttribute()
     * @uses MidocoSellItemType::setMidocoSellItemVatDivision()
     * @uses MidocoSellItemType::setMidocoSellDetailsPrice()
     * @uses MidocoSellItemType::setMidocoSellItemItem()
     * @uses MidocoSellItemType::setMidocoSellItemSaving()
     * @uses MidocoSellItemType::setMidocoSellItemEinvoice()
     * @uses MidocoSellItemType::setUnitAlias()
     * @uses MidocoSellItemType::setIsPackageChild()
     * @uses MidocoSellItemType::setBillingStatus()
     * @uses MidocoSellItemType::setIs_deletable()
     * @uses MidocoSellItemType::setDisplayedItemPrice()
     * @uses MidocoSellItemType::setDisplayedCurrency()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoPriceDetailType[] $midocoPriceDetail
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoOnlinePaymentTransaction[] $midocoOnlinePaymentTransaction
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoSellPassenger[] $midocoSellPassenger
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoSellRemark[] $midocoSellRemark
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoDocumentItem $midocoDocumentItem
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoTravelItemType $midocoTravelItem
     * @param \Pggns\MidocoApi\Documents\StructType\ManualitemDTO $midocoManualItem
     * @param \Pggns\MidocoApi\Documents\StructType\CalcitemDTO $midocoCalcItem
     * @param \Pggns\MidocoApi\Documents\StructType\PackageitemDTO $midocoPackageInfo
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoSellItemPricing $midocoSellItemPricing
     * @param \Pggns\MidocoApi\Documents\StructType\SellItemErrorDTO[] $midocoSellItemError
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoSellItemType[] $midocoSellItem
     * @param \Pggns\MidocoApi\Documents\StructType\RevenueBookingInfoType[] $revenueBookingInfo
     * @param \Pggns\MidocoApi\Documents\StructType\SellItemAttributeDTO[] $midocoSellItemAttribute
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoSellItemVatDivision[] $midocoSellItemVatDivision
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoSellDetailsPrice[] $midocoSellDetailsPrice
     * @param \Pggns\MidocoApi\Documents\StructType\SellItemItemDTO $midocoSellItemItem
     * @param \Pggns\MidocoApi\Documents\StructType\SellItemSavingDTO[] $midocoSellItemSaving
     * @param \Pggns\MidocoApi\Documents\StructType\SellItemEinvoiceDTO $midocoSellItemEinvoice
     * @param string $unitAlias
     * @param bool $isPackageChild
     * @param int $billingStatus
     * @param bool $is_deletable
     * @param float $displayedItemPrice
     * @param string $displayedCurrency
     */
    public function __construct(?array $midocoPriceDetail = null, ?array $midocoOnlinePaymentTransaction = null, ?array $midocoSellPassenger = null, ?array $midocoSellRemark = null, ?\Pggns\MidocoApi\Documents\StructType\MidocoDocumentItem $midocoDocumentItem = null, ?\Pggns\MidocoApi\Documents\StructType\MidocoTravelItemType $midocoTravelItem = null, ?\Pggns\MidocoApi\Documents\StructType\ManualitemDTO $midocoManualItem = null, ?\Pggns\MidocoApi\Documents\StructType\CalcitemDTO $midocoCalcItem = null, ?\Pggns\MidocoApi\Documents\StructType\PackageitemDTO $midocoPackageInfo = null, ?\Pggns\MidocoApi\Documents\StructType\MidocoSellItemPricing $midocoSellItemPricing = null, ?array $midocoSellItemError = null, ?array $midocoSellItem = null, ?array $revenueBookingInfo = null, ?array $midocoSellItemAttribute = null, ?array $midocoSellItemVatDivision = null, ?array $midocoSellDetailsPrice = null, ?\Pggns\MidocoApi\Documents\StructType\SellItemItemDTO $midocoSellItemItem = null, ?array $midocoSellItemSaving = null, ?\Pggns\MidocoApi\Documents\StructType\SellItemEinvoiceDTO $midocoSellItemEinvoice = null, ?string $unitAlias = null, ?bool $isPackageChild = null, ?int $billingStatus = null, ?bool $is_deletable = null, ?float $displayedItemPrice = null, ?string $displayedCurrency = null)
    {
        $this
            ->setMidocoPriceDetail($midocoPriceDetail)
            ->setMidocoOnlinePaymentTransaction($midocoOnlinePaymentTransaction)
            ->setMidocoSellPassenger($midocoSellPassenger)
            ->setMidocoSellRemark($midocoSellRemark)
            ->setMidocoDocumentItem($midocoDocumentItem)
            ->setMidocoTravelItem($midocoTravelItem)
            ->setMidocoManualItem($midocoManualItem)
            ->setMidocoCalcItem($midocoCalcItem)
            ->setMidocoPackageInfo($midocoPackageInfo)
            ->setMidocoSellItemPricing($midocoSellItemPricing)
            ->setMidocoSellItemError($midocoSellItemError)
            ->setMidocoSellItem($midocoSellItem)
            ->setRevenueBookingInfo($revenueBookingInfo)
            ->setMidocoSellItemAttribute($midocoSellItemAttribute)
            ->setMidocoSellItemVatDivision($midocoSellItemVatDivision)
            ->setMidocoSellDetailsPrice($midocoSellDetailsPrice)
            ->setMidocoSellItemItem($midocoSellItemItem)
            ->setMidocoSellItemSaving($midocoSellItemSaving)
            ->setMidocoSellItemEinvoice($midocoSellItemEinvoice)
            ->setUnitAlias($unitAlias)
            ->setIsPackageChild($isPackageChild)
            ->setBillingStatus($billingStatus)
            ->setIs_deletable($is_deletable)
            ->setDisplayedItemPrice($displayedItemPrice)
            ->setDisplayedCurrency($displayedCurrency);
    }
    /**
     * Get MidocoPriceDetail value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoPriceDetailType[]
     */
    public function getMidocoPriceDetail(): ?array
    {
        return $this->MidocoPriceDetail;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoPriceDetail method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoPriceDetail method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoPriceDetailForArrayConstraintsFromSetMidocoPriceDetail(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoSellItemTypeMidocoPriceDetailItem) {
            // validation for constraint: itemType
            if (!$midocoSellItemTypeMidocoPriceDetailItem instanceof \Pggns\MidocoApi\Documents\StructType\MidocoPriceDetailType) {
                $invalidValues[] = is_object($midocoSellItemTypeMidocoPriceDetailItem) ? get_class($midocoSellItemTypeMidocoPriceDetailItem) : sprintf('%s(%s)', gettype($midocoSellItemTypeMidocoPriceDetailItem), var_export($midocoSellItemTypeMidocoPriceDetailItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoPriceDetail property can only contain items of type \Pggns\MidocoApi\Documents\StructType\MidocoPriceDetailType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoPriceDetail value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoPriceDetailType[] $midocoPriceDetail
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoSellItemType
     */
    public function setMidocoPriceDetail(?array $midocoPriceDetail = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoPriceDetailArrayErrorMessage = self::validateMidocoPriceDetailForArrayConstraintsFromSetMidocoPriceDetail($midocoPriceDetail))) {
            throw new InvalidArgumentException($midocoPriceDetailArrayErrorMessage, __LINE__);
        }
        $this->MidocoPriceDetail = $midocoPriceDetail;
        
        return $this;
    }
    /**
     * Add item to MidocoPriceDetail value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoPriceDetailType $item
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoSellItemType
     */
    public function addToMidocoPriceDetail(\Pggns\MidocoApi\Documents\StructType\MidocoPriceDetailType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Documents\StructType\MidocoPriceDetailType) {
            throw new InvalidArgumentException(sprintf('The MidocoPriceDetail property can only contain items of type \Pggns\MidocoApi\Documents\StructType\MidocoPriceDetailType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoPriceDetail[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoOnlinePaymentTransaction value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoOnlinePaymentTransaction[]
     */
    public function getMidocoOnlinePaymentTransaction(): ?array
    {
        return $this->MidocoOnlinePaymentTransaction;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoOnlinePaymentTransaction method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOnlinePaymentTransaction method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOnlinePaymentTransactionForArrayConstraintsFromSetMidocoOnlinePaymentTransaction(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoSellItemTypeMidocoOnlinePaymentTransactionItem) {
            // validation for constraint: itemType
            if (!$midocoSellItemTypeMidocoOnlinePaymentTransactionItem instanceof \Pggns\MidocoApi\Documents\StructType\MidocoOnlinePaymentTransaction) {
                $invalidValues[] = is_object($midocoSellItemTypeMidocoOnlinePaymentTransactionItem) ? get_class($midocoSellItemTypeMidocoOnlinePaymentTransactionItem) : sprintf('%s(%s)', gettype($midocoSellItemTypeMidocoOnlinePaymentTransactionItem), var_export($midocoSellItemTypeMidocoOnlinePaymentTransactionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOnlinePaymentTransaction property can only contain items of type \Pggns\MidocoApi\Documents\StructType\MidocoOnlinePaymentTransaction, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOnlinePaymentTransaction value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoOnlinePaymentTransaction[] $midocoOnlinePaymentTransaction
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoSellItemType
     */
    public function setMidocoOnlinePaymentTransaction(?array $midocoOnlinePaymentTransaction = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOnlinePaymentTransactionArrayErrorMessage = self::validateMidocoOnlinePaymentTransactionForArrayConstraintsFromSetMidocoOnlinePaymentTransaction($midocoOnlinePaymentTransaction))) {
            throw new InvalidArgumentException($midocoOnlinePaymentTransactionArrayErrorMessage, __LINE__);
        }
        $this->MidocoOnlinePaymentTransaction = $midocoOnlinePaymentTransaction;
        
        return $this;
    }
    /**
     * Add item to MidocoOnlinePaymentTransaction value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoOnlinePaymentTransaction $item
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoSellItemType
     */
    public function addToMidocoOnlinePaymentTransaction(\Pggns\MidocoApi\Documents\StructType\MidocoOnlinePaymentTransaction $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Documents\StructType\MidocoOnlinePaymentTransaction) {
            throw new InvalidArgumentException(sprintf('The MidocoOnlinePaymentTransaction property can only contain items of type \Pggns\MidocoApi\Documents\StructType\MidocoOnlinePaymentTransaction, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOnlinePaymentTransaction[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoSellPassenger value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoSellPassenger[]
     */
    public function getMidocoSellPassenger(): ?array
    {
        return $this->MidocoSellPassenger;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSellPassenger method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSellPassenger method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSellPassengerForArrayConstraintsFromSetMidocoSellPassenger(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoSellItemTypeMidocoSellPassengerItem) {
            // validation for constraint: itemType
            if (!$midocoSellItemTypeMidocoSellPassengerItem instanceof \Pggns\MidocoApi\Documents\StructType\MidocoSellPassenger) {
                $invalidValues[] = is_object($midocoSellItemTypeMidocoSellPassengerItem) ? get_class($midocoSellItemTypeMidocoSellPassengerItem) : sprintf('%s(%s)', gettype($midocoSellItemTypeMidocoSellPassengerItem), var_export($midocoSellItemTypeMidocoSellPassengerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSellPassenger property can only contain items of type \Pggns\MidocoApi\Documents\StructType\MidocoSellPassenger, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSellPassenger value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoSellPassenger[] $midocoSellPassenger
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoSellItemType
     */
    public function setMidocoSellPassenger(?array $midocoSellPassenger = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSellPassengerArrayErrorMessage = self::validateMidocoSellPassengerForArrayConstraintsFromSetMidocoSellPassenger($midocoSellPassenger))) {
            throw new InvalidArgumentException($midocoSellPassengerArrayErrorMessage, __LINE__);
        }
        $this->MidocoSellPassenger = $midocoSellPassenger;
        
        return $this;
    }
    /**
     * Add item to MidocoSellPassenger value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoSellPassenger $item
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoSellItemType
     */
    public function addToMidocoSellPassenger(\Pggns\MidocoApi\Documents\StructType\MidocoSellPassenger $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Documents\StructType\MidocoSellPassenger) {
            throw new InvalidArgumentException(sprintf('The MidocoSellPassenger property can only contain items of type \Pggns\MidocoApi\Documents\StructType\MidocoSellPassenger, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSellPassenger[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoSellRemark value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoSellRemark[]
     */
    public function getMidocoSellRemark(): ?array
    {
        return $this->MidocoSellRemark;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSellRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSellRemark method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSellRemarkForArrayConstraintsFromSetMidocoSellRemark(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoSellItemTypeMidocoSellRemarkItem) {
            // validation for constraint: itemType
            if (!$midocoSellItemTypeMidocoSellRemarkItem instanceof \Pggns\MidocoApi\Documents\StructType\MidocoSellRemark) {
                $invalidValues[] = is_object($midocoSellItemTypeMidocoSellRemarkItem) ? get_class($midocoSellItemTypeMidocoSellRemarkItem) : sprintf('%s(%s)', gettype($midocoSellItemTypeMidocoSellRemarkItem), var_export($midocoSellItemTypeMidocoSellRemarkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSellRemark property can only contain items of type \Pggns\MidocoApi\Documents\StructType\MidocoSellRemark, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSellRemark value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoSellRemark[] $midocoSellRemark
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoSellItemType
     */
    public function setMidocoSellRemark(?array $midocoSellRemark = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSellRemarkArrayErrorMessage = self::validateMidocoSellRemarkForArrayConstraintsFromSetMidocoSellRemark($midocoSellRemark))) {
            throw new InvalidArgumentException($midocoSellRemarkArrayErrorMessage, __LINE__);
        }
        $this->MidocoSellRemark = $midocoSellRemark;
        
        return $this;
    }
    /**
     * Add item to MidocoSellRemark value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoSellRemark $item
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoSellItemType
     */
    public function addToMidocoSellRemark(\Pggns\MidocoApi\Documents\StructType\MidocoSellRemark $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Documents\StructType\MidocoSellRemark) {
            throw new InvalidArgumentException(sprintf('The MidocoSellRemark property can only contain items of type \Pggns\MidocoApi\Documents\StructType\MidocoSellRemark, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSellRemark[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoDocumentItem value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoDocumentItem|null
     */
    public function getMidocoDocumentItem(): ?\Pggns\MidocoApi\Documents\StructType\MidocoDocumentItem
    {
        return $this->MidocoDocumentItem;
    }
    /**
     * Set MidocoDocumentItem value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoDocumentItem $midocoDocumentItem
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoSellItemType
     */
    public function setMidocoDocumentItem(?\Pggns\MidocoApi\Documents\StructType\MidocoDocumentItem $midocoDocumentItem = null): self
    {
        $this->MidocoDocumentItem = $midocoDocumentItem;
        
        return $this;
    }
    /**
     * Get MidocoTravelItem value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoTravelItemType|null
     */
    public function getMidocoTravelItem(): ?\Pggns\MidocoApi\Documents\StructType\MidocoTravelItemType
    {
        return $this->MidocoTravelItem;
    }
    /**
     * Set MidocoTravelItem value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoTravelItemType $midocoTravelItem
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoSellItemType
     */
    public function setMidocoTravelItem(?\Pggns\MidocoApi\Documents\StructType\MidocoTravelItemType $midocoTravelItem = null): self
    {
        $this->MidocoTravelItem = $midocoTravelItem;
        
        return $this;
    }
    /**
     * Get MidocoManualItem value
     * @return \Pggns\MidocoApi\Documents\StructType\ManualitemDTO|null
     */
    public function getMidocoManualItem(): ?\Pggns\MidocoApi\Documents\StructType\ManualitemDTO
    {
        return $this->MidocoManualItem;
    }
    /**
     * Set MidocoManualItem value
     * @param \Pggns\MidocoApi\Documents\StructType\ManualitemDTO $midocoManualItem
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoSellItemType
     */
    public function setMidocoManualItem(?\Pggns\MidocoApi\Documents\StructType\ManualitemDTO $midocoManualItem = null): self
    {
        $this->MidocoManualItem = $midocoManualItem;
        
        return $this;
    }
    /**
     * Get MidocoCalcItem value
     * @return \Pggns\MidocoApi\Documents\StructType\CalcitemDTO|null
     */
    public function getMidocoCalcItem(): ?\Pggns\MidocoApi\Documents\StructType\CalcitemDTO
    {
        return $this->MidocoCalcItem;
    }
    /**
     * Set MidocoCalcItem value
     * @param \Pggns\MidocoApi\Documents\StructType\CalcitemDTO $midocoCalcItem
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoSellItemType
     */
    public function setMidocoCalcItem(?\Pggns\MidocoApi\Documents\StructType\CalcitemDTO $midocoCalcItem = null): self
    {
        $this->MidocoCalcItem = $midocoCalcItem;
        
        return $this;
    }
    /**
     * Get MidocoPackageInfo value
     * @return \Pggns\MidocoApi\Documents\StructType\PackageitemDTO|null
     */
    public function getMidocoPackageInfo(): ?\Pggns\MidocoApi\Documents\StructType\PackageitemDTO
    {
        return $this->MidocoPackageInfo;
    }
    /**
     * Set MidocoPackageInfo value
     * @param \Pggns\MidocoApi\Documents\StructType\PackageitemDTO $midocoPackageInfo
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoSellItemType
     */
    public function setMidocoPackageInfo(?\Pggns\MidocoApi\Documents\StructType\PackageitemDTO $midocoPackageInfo = null): self
    {
        $this->MidocoPackageInfo = $midocoPackageInfo;
        
        return $this;
    }
    /**
     * Get MidocoSellItemPricing value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoSellItemPricing|null
     */
    public function getMidocoSellItemPricing(): ?\Pggns\MidocoApi\Documents\StructType\MidocoSellItemPricing
    {
        return $this->MidocoSellItemPricing;
    }
    /**
     * Set MidocoSellItemPricing value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoSellItemPricing $midocoSellItemPricing
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoSellItemType
     */
    public function setMidocoSellItemPricing(?\Pggns\MidocoApi\Documents\StructType\MidocoSellItemPricing $midocoSellItemPricing = null): self
    {
        $this->MidocoSellItemPricing = $midocoSellItemPricing;
        
        return $this;
    }
    /**
     * Get MidocoSellItemError value
     * @return \Pggns\MidocoApi\Documents\StructType\SellItemErrorDTO[]
     */
    public function getMidocoSellItemError(): ?array
    {
        return $this->MidocoSellItemError;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSellItemError method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSellItemError method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSellItemErrorForArrayConstraintsFromSetMidocoSellItemError(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoSellItemTypeMidocoSellItemErrorItem) {
            // validation for constraint: itemType
            if (!$midocoSellItemTypeMidocoSellItemErrorItem instanceof \Pggns\MidocoApi\Documents\StructType\SellItemErrorDTO) {
                $invalidValues[] = is_object($midocoSellItemTypeMidocoSellItemErrorItem) ? get_class($midocoSellItemTypeMidocoSellItemErrorItem) : sprintf('%s(%s)', gettype($midocoSellItemTypeMidocoSellItemErrorItem), var_export($midocoSellItemTypeMidocoSellItemErrorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSellItemError property can only contain items of type \Pggns\MidocoApi\Documents\StructType\SellItemErrorDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSellItemError value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\SellItemErrorDTO[] $midocoSellItemError
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoSellItemType
     */
    public function setMidocoSellItemError(?array $midocoSellItemError = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSellItemErrorArrayErrorMessage = self::validateMidocoSellItemErrorForArrayConstraintsFromSetMidocoSellItemError($midocoSellItemError))) {
            throw new InvalidArgumentException($midocoSellItemErrorArrayErrorMessage, __LINE__);
        }
        $this->MidocoSellItemError = $midocoSellItemError;
        
        return $this;
    }
    /**
     * Add item to MidocoSellItemError value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\SellItemErrorDTO $item
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoSellItemType
     */
    public function addToMidocoSellItemError(\Pggns\MidocoApi\Documents\StructType\SellItemErrorDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Documents\StructType\SellItemErrorDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoSellItemError property can only contain items of type \Pggns\MidocoApi\Documents\StructType\SellItemErrorDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSellItemError[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoSellItem value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoSellItemType[]
     */
    public function getMidocoSellItem(): ?array
    {
        return $this->MidocoSellItem;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSellItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSellItem method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSellItemForArrayConstraintsFromSetMidocoSellItem(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoSellItemTypeMidocoSellItemItem) {
            // validation for constraint: itemType
            if (!$midocoSellItemTypeMidocoSellItemItem instanceof \Pggns\MidocoApi\Documents\StructType\MidocoSellItemType) {
                $invalidValues[] = is_object($midocoSellItemTypeMidocoSellItemItem) ? get_class($midocoSellItemTypeMidocoSellItemItem) : sprintf('%s(%s)', gettype($midocoSellItemTypeMidocoSellItemItem), var_export($midocoSellItemTypeMidocoSellItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSellItem property can only contain items of type \Pggns\MidocoApi\Documents\StructType\MidocoSellItemType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSellItem value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoSellItemType[] $midocoSellItem
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoSellItemType
     */
    public function setMidocoSellItem(?array $midocoSellItem = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSellItemArrayErrorMessage = self::validateMidocoSellItemForArrayConstraintsFromSetMidocoSellItem($midocoSellItem))) {
            throw new InvalidArgumentException($midocoSellItemArrayErrorMessage, __LINE__);
        }
        $this->MidocoSellItem = $midocoSellItem;
        
        return $this;
    }
    /**
     * Add item to MidocoSellItem value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoSellItemType $item
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoSellItemType
     */
    public function addToMidocoSellItem(\Pggns\MidocoApi\Documents\StructType\MidocoSellItemType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Documents\StructType\MidocoSellItemType) {
            throw new InvalidArgumentException(sprintf('The MidocoSellItem property can only contain items of type \Pggns\MidocoApi\Documents\StructType\MidocoSellItemType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSellItem[] = $item;
        
        return $this;
    }
    /**
     * Get RevenueBookingInfo value
     * @return \Pggns\MidocoApi\Documents\StructType\RevenueBookingInfoType[]
     */
    public function getRevenueBookingInfo(): ?array
    {
        return $this->RevenueBookingInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setRevenueBookingInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRevenueBookingInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRevenueBookingInfoForArrayConstraintsFromSetRevenueBookingInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoSellItemTypeRevenueBookingInfoItem) {
            // validation for constraint: itemType
            if (!$midocoSellItemTypeRevenueBookingInfoItem instanceof \Pggns\MidocoApi\Documents\StructType\RevenueBookingInfoType) {
                $invalidValues[] = is_object($midocoSellItemTypeRevenueBookingInfoItem) ? get_class($midocoSellItemTypeRevenueBookingInfoItem) : sprintf('%s(%s)', gettype($midocoSellItemTypeRevenueBookingInfoItem), var_export($midocoSellItemTypeRevenueBookingInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RevenueBookingInfo property can only contain items of type \Pggns\MidocoApi\Documents\StructType\RevenueBookingInfoType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set RevenueBookingInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\RevenueBookingInfoType[] $revenueBookingInfo
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoSellItemType
     */
    public function setRevenueBookingInfo(?array $revenueBookingInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($revenueBookingInfoArrayErrorMessage = self::validateRevenueBookingInfoForArrayConstraintsFromSetRevenueBookingInfo($revenueBookingInfo))) {
            throw new InvalidArgumentException($revenueBookingInfoArrayErrorMessage, __LINE__);
        }
        $this->RevenueBookingInfo = $revenueBookingInfo;
        
        return $this;
    }
    /**
     * Add item to RevenueBookingInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\RevenueBookingInfoType $item
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoSellItemType
     */
    public function addToRevenueBookingInfo(\Pggns\MidocoApi\Documents\StructType\RevenueBookingInfoType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Documents\StructType\RevenueBookingInfoType) {
            throw new InvalidArgumentException(sprintf('The RevenueBookingInfo property can only contain items of type \Pggns\MidocoApi\Documents\StructType\RevenueBookingInfoType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->RevenueBookingInfo[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoSellItemAttribute value
     * @return \Pggns\MidocoApi\Documents\StructType\SellItemAttributeDTO[]
     */
    public function getMidocoSellItemAttribute(): ?array
    {
        return $this->MidocoSellItemAttribute;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSellItemAttribute method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSellItemAttribute method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSellItemAttributeForArrayConstraintsFromSetMidocoSellItemAttribute(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoSellItemTypeMidocoSellItemAttributeItem) {
            // validation for constraint: itemType
            if (!$midocoSellItemTypeMidocoSellItemAttributeItem instanceof \Pggns\MidocoApi\Documents\StructType\SellItemAttributeDTO) {
                $invalidValues[] = is_object($midocoSellItemTypeMidocoSellItemAttributeItem) ? get_class($midocoSellItemTypeMidocoSellItemAttributeItem) : sprintf('%s(%s)', gettype($midocoSellItemTypeMidocoSellItemAttributeItem), var_export($midocoSellItemTypeMidocoSellItemAttributeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSellItemAttribute property can only contain items of type \Pggns\MidocoApi\Documents\StructType\SellItemAttributeDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSellItemAttribute value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\SellItemAttributeDTO[] $midocoSellItemAttribute
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoSellItemType
     */
    public function setMidocoSellItemAttribute(?array $midocoSellItemAttribute = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSellItemAttributeArrayErrorMessage = self::validateMidocoSellItemAttributeForArrayConstraintsFromSetMidocoSellItemAttribute($midocoSellItemAttribute))) {
            throw new InvalidArgumentException($midocoSellItemAttributeArrayErrorMessage, __LINE__);
        }
        $this->MidocoSellItemAttribute = $midocoSellItemAttribute;
        
        return $this;
    }
    /**
     * Add item to MidocoSellItemAttribute value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\SellItemAttributeDTO $item
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoSellItemType
     */
    public function addToMidocoSellItemAttribute(\Pggns\MidocoApi\Documents\StructType\SellItemAttributeDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Documents\StructType\SellItemAttributeDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoSellItemAttribute property can only contain items of type \Pggns\MidocoApi\Documents\StructType\SellItemAttributeDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSellItemAttribute[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoSellItemVatDivision value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoSellItemVatDivision[]
     */
    public function getMidocoSellItemVatDivision(): ?array
    {
        return $this->MidocoSellItemVatDivision;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSellItemVatDivision method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSellItemVatDivision method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSellItemVatDivisionForArrayConstraintsFromSetMidocoSellItemVatDivision(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoSellItemTypeMidocoSellItemVatDivisionItem) {
            // validation for constraint: itemType
            if (!$midocoSellItemTypeMidocoSellItemVatDivisionItem instanceof \Pggns\MidocoApi\Documents\StructType\MidocoSellItemVatDivision) {
                $invalidValues[] = is_object($midocoSellItemTypeMidocoSellItemVatDivisionItem) ? get_class($midocoSellItemTypeMidocoSellItemVatDivisionItem) : sprintf('%s(%s)', gettype($midocoSellItemTypeMidocoSellItemVatDivisionItem), var_export($midocoSellItemTypeMidocoSellItemVatDivisionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSellItemVatDivision property can only contain items of type \Pggns\MidocoApi\Documents\StructType\MidocoSellItemVatDivision, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSellItemVatDivision value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoSellItemVatDivision[] $midocoSellItemVatDivision
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoSellItemType
     */
    public function setMidocoSellItemVatDivision(?array $midocoSellItemVatDivision = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSellItemVatDivisionArrayErrorMessage = self::validateMidocoSellItemVatDivisionForArrayConstraintsFromSetMidocoSellItemVatDivision($midocoSellItemVatDivision))) {
            throw new InvalidArgumentException($midocoSellItemVatDivisionArrayErrorMessage, __LINE__);
        }
        $this->MidocoSellItemVatDivision = $midocoSellItemVatDivision;
        
        return $this;
    }
    /**
     * Add item to MidocoSellItemVatDivision value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoSellItemVatDivision $item
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoSellItemType
     */
    public function addToMidocoSellItemVatDivision(\Pggns\MidocoApi\Documents\StructType\MidocoSellItemVatDivision $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Documents\StructType\MidocoSellItemVatDivision) {
            throw new InvalidArgumentException(sprintf('The MidocoSellItemVatDivision property can only contain items of type \Pggns\MidocoApi\Documents\StructType\MidocoSellItemVatDivision, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSellItemVatDivision[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoSellDetailsPrice value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoSellDetailsPrice[]
     */
    public function getMidocoSellDetailsPrice(): ?array
    {
        return $this->MidocoSellDetailsPrice;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSellDetailsPrice method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSellDetailsPrice method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSellDetailsPriceForArrayConstraintsFromSetMidocoSellDetailsPrice(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoSellItemTypeMidocoSellDetailsPriceItem) {
            // validation for constraint: itemType
            if (!$midocoSellItemTypeMidocoSellDetailsPriceItem instanceof \Pggns\MidocoApi\Documents\StructType\MidocoSellDetailsPrice) {
                $invalidValues[] = is_object($midocoSellItemTypeMidocoSellDetailsPriceItem) ? get_class($midocoSellItemTypeMidocoSellDetailsPriceItem) : sprintf('%s(%s)', gettype($midocoSellItemTypeMidocoSellDetailsPriceItem), var_export($midocoSellItemTypeMidocoSellDetailsPriceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSellDetailsPrice property can only contain items of type \Pggns\MidocoApi\Documents\StructType\MidocoSellDetailsPrice, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSellDetailsPrice value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoSellDetailsPrice[] $midocoSellDetailsPrice
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoSellItemType
     */
    public function setMidocoSellDetailsPrice(?array $midocoSellDetailsPrice = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSellDetailsPriceArrayErrorMessage = self::validateMidocoSellDetailsPriceForArrayConstraintsFromSetMidocoSellDetailsPrice($midocoSellDetailsPrice))) {
            throw new InvalidArgumentException($midocoSellDetailsPriceArrayErrorMessage, __LINE__);
        }
        $this->MidocoSellDetailsPrice = $midocoSellDetailsPrice;
        
        return $this;
    }
    /**
     * Add item to MidocoSellDetailsPrice value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoSellDetailsPrice $item
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoSellItemType
     */
    public function addToMidocoSellDetailsPrice(\Pggns\MidocoApi\Documents\StructType\MidocoSellDetailsPrice $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Documents\StructType\MidocoSellDetailsPrice) {
            throw new InvalidArgumentException(sprintf('The MidocoSellDetailsPrice property can only contain items of type \Pggns\MidocoApi\Documents\StructType\MidocoSellDetailsPrice, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSellDetailsPrice[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoSellItemItem value
     * @return \Pggns\MidocoApi\Documents\StructType\SellItemItemDTO|null
     */
    public function getMidocoSellItemItem(): ?\Pggns\MidocoApi\Documents\StructType\SellItemItemDTO
    {
        return $this->MidocoSellItemItem;
    }
    /**
     * Set MidocoSellItemItem value
     * @param \Pggns\MidocoApi\Documents\StructType\SellItemItemDTO $midocoSellItemItem
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoSellItemType
     */
    public function setMidocoSellItemItem(?\Pggns\MidocoApi\Documents\StructType\SellItemItemDTO $midocoSellItemItem = null): self
    {
        $this->MidocoSellItemItem = $midocoSellItemItem;
        
        return $this;
    }
    /**
     * Get MidocoSellItemSaving value
     * @return \Pggns\MidocoApi\Documents\StructType\SellItemSavingDTO[]
     */
    public function getMidocoSellItemSaving(): ?array
    {
        return $this->MidocoSellItemSaving;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSellItemSaving method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSellItemSaving method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSellItemSavingForArrayConstraintsFromSetMidocoSellItemSaving(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoSellItemTypeMidocoSellItemSavingItem) {
            // validation for constraint: itemType
            if (!$midocoSellItemTypeMidocoSellItemSavingItem instanceof \Pggns\MidocoApi\Documents\StructType\SellItemSavingDTO) {
                $invalidValues[] = is_object($midocoSellItemTypeMidocoSellItemSavingItem) ? get_class($midocoSellItemTypeMidocoSellItemSavingItem) : sprintf('%s(%s)', gettype($midocoSellItemTypeMidocoSellItemSavingItem), var_export($midocoSellItemTypeMidocoSellItemSavingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSellItemSaving property can only contain items of type \Pggns\MidocoApi\Documents\StructType\SellItemSavingDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSellItemSaving value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\SellItemSavingDTO[] $midocoSellItemSaving
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoSellItemType
     */
    public function setMidocoSellItemSaving(?array $midocoSellItemSaving = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSellItemSavingArrayErrorMessage = self::validateMidocoSellItemSavingForArrayConstraintsFromSetMidocoSellItemSaving($midocoSellItemSaving))) {
            throw new InvalidArgumentException($midocoSellItemSavingArrayErrorMessage, __LINE__);
        }
        $this->MidocoSellItemSaving = $midocoSellItemSaving;
        
        return $this;
    }
    /**
     * Add item to MidocoSellItemSaving value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\SellItemSavingDTO $item
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoSellItemType
     */
    public function addToMidocoSellItemSaving(\Pggns\MidocoApi\Documents\StructType\SellItemSavingDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Documents\StructType\SellItemSavingDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoSellItemSaving property can only contain items of type \Pggns\MidocoApi\Documents\StructType\SellItemSavingDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSellItemSaving[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoSellItemEinvoice value
     * @return \Pggns\MidocoApi\Documents\StructType\SellItemEinvoiceDTO|null
     */
    public function getMidocoSellItemEinvoice(): ?\Pggns\MidocoApi\Documents\StructType\SellItemEinvoiceDTO
    {
        return $this->MidocoSellItemEinvoice;
    }
    /**
     * Set MidocoSellItemEinvoice value
     * @param \Pggns\MidocoApi\Documents\StructType\SellItemEinvoiceDTO $midocoSellItemEinvoice
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoSellItemType
     */
    public function setMidocoSellItemEinvoice(?\Pggns\MidocoApi\Documents\StructType\SellItemEinvoiceDTO $midocoSellItemEinvoice = null): self
    {
        $this->MidocoSellItemEinvoice = $midocoSellItemEinvoice;
        
        return $this;
    }
    /**
     * Get unitAlias value
     * @return string|null
     */
    public function getUnitAlias(): ?string
    {
        return $this->unitAlias;
    }
    /**
     * Set unitAlias value
     * @param string $unitAlias
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoSellItemType
     */
    public function setUnitAlias(?string $unitAlias = null): self
    {
        // validation for constraint: string
        if (!is_null($unitAlias) && !is_string($unitAlias)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitAlias, true), gettype($unitAlias)), __LINE__);
        }
        $this->unitAlias = $unitAlias;
        
        return $this;
    }
    /**
     * Get isPackageChild value
     * @return bool|null
     */
    public function getIsPackageChild(): ?bool
    {
        return $this->isPackageChild;
    }
    /**
     * Set isPackageChild value
     * @param bool $isPackageChild
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoSellItemType
     */
    public function setIsPackageChild(?bool $isPackageChild = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isPackageChild) && !is_bool($isPackageChild)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isPackageChild, true), gettype($isPackageChild)), __LINE__);
        }
        $this->isPackageChild = $isPackageChild;
        
        return $this;
    }
    /**
     * Get billingStatus value
     * @return int|null
     */
    public function getBillingStatus(): ?int
    {
        return $this->billingStatus;
    }
    /**
     * Set billingStatus value
     * @param int $billingStatus
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoSellItemType
     */
    public function setBillingStatus(?int $billingStatus = null): self
    {
        // validation for constraint: int
        if (!is_null($billingStatus) && !(is_int($billingStatus) || ctype_digit($billingStatus))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($billingStatus, true), gettype($billingStatus)), __LINE__);
        }
        $this->billingStatus = $billingStatus;
        
        return $this;
    }
    /**
     * Get is_deletable value
     * @return bool|null
     */
    public function getIs_deletable(): ?bool
    {
        return $this->is_deletable;
    }
    /**
     * Set is_deletable value
     * @param bool $is_deletable
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoSellItemType
     */
    public function setIs_deletable(?bool $is_deletable = null): self
    {
        // validation for constraint: boolean
        if (!is_null($is_deletable) && !is_bool($is_deletable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($is_deletable, true), gettype($is_deletable)), __LINE__);
        }
        $this->is_deletable = $is_deletable;
        
        return $this;
    }
    /**
     * Get displayedItemPrice value
     * @return float|null
     */
    public function getDisplayedItemPrice(): ?float
    {
        return $this->displayedItemPrice;
    }
    /**
     * Set displayedItemPrice value
     * @param float $displayedItemPrice
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoSellItemType
     */
    public function setDisplayedItemPrice(?float $displayedItemPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($displayedItemPrice) && !(is_float($displayedItemPrice) || is_numeric($displayedItemPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($displayedItemPrice, true), gettype($displayedItemPrice)), __LINE__);
        }
        $this->displayedItemPrice = $displayedItemPrice;
        
        return $this;
    }
    /**
     * Get displayedCurrency value
     * @return string|null
     */
    public function getDisplayedCurrency(): ?string
    {
        return $this->displayedCurrency;
    }
    /**
     * Set displayedCurrency value
     * @param string $displayedCurrency
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoSellItemType
     */
    public function setDisplayedCurrency(?string $displayedCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($displayedCurrency) && !is_string($displayedCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayedCurrency, true), gettype($displayedCurrency)), __LINE__);
        }
        $this->displayedCurrency = $displayedCurrency;
        
        return $this;
    }
}
