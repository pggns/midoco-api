<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for bookingPrice StructType
 * Meta information extracted from the WSDL
 * - documentation: a price in this section is subject of reference in all priceRef attributes of services and other priceInformation
 * @subpackage Structs
 */
class BookingPrice extends AbstractStructBase
{
    /**
     * The position
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $position;
    /**
     * The supplier
     * Meta information extracted from the WSDL
     * - documentation: internal supplier id for this booking. Should match the preDefined supplier-Id in order master data
     * @var string|null
     */
    protected ?string $supplier = null;
    /**
     * The catalog
     * Meta information extracted from the WSDL
     * - documentation: optional catalog/traveltype field to differ multiple types of bookings for same supplier Id
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $catalog = null;
    /**
     * The bookingId
     * Meta information extracted from the WSDL
     * - documentation: ID of booking this is used to identify the booking for this supplier
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $bookingId = null;
    /**
     * The deposit
     * Meta information extracted from the WSDL
     * - documentation: preCalculated deposit amount
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $deposit = null;
    /**
     * The depositPaymentType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $depositPaymentType = null;
    /**
     * The totalPrice
     * Meta information extracted from the WSDL
     * - documentation: for nonPackage prices: the selling price incl. commission. For packages: the purchase price (without marge)
     * @var float|null
     */
    protected ?float $totalPrice = null;
    /**
     * The hideServicePrices
     * Meta information extracted from the WSDL
     * - documentation: Setting this to true will suppress the display of any service price on a document for the customer
     * - default: false
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $hideServicePrices = null;
    /**
     * The paymentType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $paymentType = null;
    /**
     * The extPaymentType
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - pattern: | CASH | DEBIT | CC | FULL_CREDIT
     * @var string|null
     */
    protected ?string $extPaymentType = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The vatIncluded
     * Meta information extracted from the WSDL
     * - documentation: set to true when an invoice should contain vat information for this price (when it is not already printed on the ticket for a domestic flight)
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $vatIncluded = null;
    /**
     * The salePrice
     * Meta information extracted from the WSDL
     * - documentation: only for package services, the price which the customer has to pay
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $salePrice = null;
    /**
     * The original_price
     * Meta information extracted from the WSDL
     * - documentation: Sets the sell item's foreign currency price from a creditor. The original_currency is mandatory.
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $original_price = null;
    /**
     * The original_currency
     * Meta information extracted from the WSDL
     * - documentation: The sell item's foreign currency from a creditor.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $original_currency = null;
    /**
     * The customerSellingPrice
     * Meta information extracted from the WSDL
     * - documentation: Sets the foreign currency customer selling price of a sell item. This element price has priority and could overwrite baseTotalPrice. Only available for nonPackageChild sellitems. The element displayedCurrency with foreign currency
     * for order is mandatory. Order-Adapter-Settings: FX_CALC_CUSTOMER_SELLING_PRICE_EDITABLE = Y required
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $customerSellingPrice = null;
    /**
     * The revenue_amount
     * Meta information extracted from the WSDL
     * - documentation: previously calculated revenue of this booking (commission or marge for netto prices)
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $revenue_amount = null;
    /**
     * The reduced_vat_fraction
     * Meta information extracted from the WSDL
     * - documentation: included amount for catering
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $reduced_vat_fraction = null;
    /**
     * The depositDate
     * Meta information extracted from the WSDL
     * - documentation: date of travel
     * - base: xs:string
     * - minOccurs: 0
     * - pattern: [0-9]{4}-[0-9]{2}-[0-9]{2}
     * @var string|null
     */
    protected ?string $depositDate = null;
    /**
     * The finalPaymentDate
     * Meta information extracted from the WSDL
     * - documentation: date of travel
     * - base: xs:string
     * - minOccurs: 0
     * - pattern: [0-9]{4}-[0-9]{2}-[0-9]{2}
     * @var string|null
     */
    protected ?string $finalPaymentDate = null;
    /**
     * The supplier_deposit_amount
     * Meta information extracted from the WSDL
     * - documentation: supplier deposit amount
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $supplier_deposit_amount = null;
    /**
     * The supplier_deposit_date
     * Meta information extracted from the WSDL
     * - documentation: supplier deposit date
     * - base: xs:string
     * - minOccurs: 0
     * - pattern: [0-9]{4}-[0-9]{2}-[0-9]{2}
     * @var string|null
     */
    protected ?string $supplier_deposit_date = null;
    /**
     * The supplier_final_payment_date
     * Meta information extracted from the WSDL
     * - documentation: supplier final payment date
     * - base: xs:string
     * - minOccurs: 0
     * - pattern: [0-9]{4}-[0-9]{2}-[0-9]{2}
     * @var string|null
     */
    protected ?string $supplier_final_payment_date = null;
    /**
     * The supplier_commission_amount
     * Meta information extracted from the WSDL
     * - documentation: supplier commission amount
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $supplier_commission_amount = null;
    /**
     * The vat_division
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Api\Order\StructType\Vat_division[]
     */
    protected ?array $vat_division = null;
    /**
     * The commission_value
     * Meta information extracted from the WSDL
     * - documentation: the commission for the agency
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $commission_value = null;
    /**
     * The commission_percent
     * Meta information extracted from the WSDL
     * - documentation: the commission percent for the agency
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $commission_percent = null;
    /**
     * The modeRevenueCalculation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $modeRevenueCalculation = null;
    /**
     * The valueRevenueCalculation
     * Meta information extracted from the WSDL
     * - documentation: value of revenue calculation
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $valueRevenueCalculation = null;
    /**
     * The buyCurrencyRate
     * Meta information extracted from the WSDL
     * - documentation: buy currency rate
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $buyCurrencyRate = null;
    /**
     * The feeAmount
     * Meta information extracted from the WSDL
     * - documentation: Fee amount/ Mark Up
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $feeAmount = null;
    /**
     * The calculatedMediatorAmount
     * Meta information extracted from the WSDL
     * - documentation: The mediator commission amount
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $calculatedMediatorAmount = null;
    /**
     * Constructor method for bookingPrice
     * @uses BookingPrice::setPosition()
     * @uses BookingPrice::setSupplier()
     * @uses BookingPrice::setCatalog()
     * @uses BookingPrice::setBookingId()
     * @uses BookingPrice::setDeposit()
     * @uses BookingPrice::setDepositPaymentType()
     * @uses BookingPrice::setTotalPrice()
     * @uses BookingPrice::setHideServicePrices()
     * @uses BookingPrice::setPaymentType()
     * @uses BookingPrice::setExtPaymentType()
     * @uses BookingPrice::setCurrency()
     * @uses BookingPrice::setVatIncluded()
     * @uses BookingPrice::setSalePrice()
     * @uses BookingPrice::setOriginal_price()
     * @uses BookingPrice::setOriginal_currency()
     * @uses BookingPrice::setCustomerSellingPrice()
     * @uses BookingPrice::setRevenue_amount()
     * @uses BookingPrice::setReduced_vat_fraction()
     * @uses BookingPrice::setDepositDate()
     * @uses BookingPrice::setFinalPaymentDate()
     * @uses BookingPrice::setSupplier_deposit_amount()
     * @uses BookingPrice::setSupplier_deposit_date()
     * @uses BookingPrice::setSupplier_final_payment_date()
     * @uses BookingPrice::setSupplier_commission_amount()
     * @uses BookingPrice::setVat_division()
     * @uses BookingPrice::setCommission_value()
     * @uses BookingPrice::setCommission_percent()
     * @uses BookingPrice::setModeRevenueCalculation()
     * @uses BookingPrice::setValueRevenueCalculation()
     * @uses BookingPrice::setBuyCurrencyRate()
     * @uses BookingPrice::setFeeAmount()
     * @uses BookingPrice::setCalculatedMediatorAmount()
     * @param int $position
     * @param string $supplier
     * @param string $catalog
     * @param string $bookingId
     * @param float $deposit
     * @param string $depositPaymentType
     * @param float $totalPrice
     * @param bool $hideServicePrices
     * @param string $paymentType
     * @param string $extPaymentType
     * @param string $currency
     * @param bool $vatIncluded
     * @param float $salePrice
     * @param float $original_price
     * @param string $original_currency
     * @param float $customerSellingPrice
     * @param float $revenue_amount
     * @param float $reduced_vat_fraction
     * @param string $depositDate
     * @param string $finalPaymentDate
     * @param float $supplier_deposit_amount
     * @param string $supplier_deposit_date
     * @param string $supplier_final_payment_date
     * @param float $supplier_commission_amount
     * @param \Pggns\MidocoApi\Api\Order\StructType\Vat_division[] $vat_division
     * @param float $commission_value
     * @param float $commission_percent
     * @param string $modeRevenueCalculation
     * @param float $valueRevenueCalculation
     * @param float $buyCurrencyRate
     * @param float $feeAmount
     * @param float $calculatedMediatorAmount
     */
    public function __construct(int $position, ?string $supplier = null, ?string $catalog = null, ?string $bookingId = null, ?float $deposit = null, ?string $depositPaymentType = null, ?float $totalPrice = null, ?bool $hideServicePrices = false, ?string $paymentType = null, ?string $extPaymentType = null, ?string $currency = null, ?bool $vatIncluded = null, ?float $salePrice = null, ?float $original_price = null, ?string $original_currency = null, ?float $customerSellingPrice = null, ?float $revenue_amount = null, ?float $reduced_vat_fraction = null, ?string $depositDate = null, ?string $finalPaymentDate = null, ?float $supplier_deposit_amount = null, ?string $supplier_deposit_date = null, ?string $supplier_final_payment_date = null, ?float $supplier_commission_amount = null, ?array $vat_division = null, ?float $commission_value = null, ?float $commission_percent = null, ?string $modeRevenueCalculation = null, ?float $valueRevenueCalculation = null, ?float $buyCurrencyRate = null, ?float $feeAmount = null, ?float $calculatedMediatorAmount = null)
    {
        $this
            ->setPosition($position)
            ->setSupplier($supplier)
            ->setCatalog($catalog)
            ->setBookingId($bookingId)
            ->setDeposit($deposit)
            ->setDepositPaymentType($depositPaymentType)
            ->setTotalPrice($totalPrice)
            ->setHideServicePrices($hideServicePrices)
            ->setPaymentType($paymentType)
            ->setExtPaymentType($extPaymentType)
            ->setCurrency($currency)
            ->setVatIncluded($vatIncluded)
            ->setSalePrice($salePrice)
            ->setOriginal_price($original_price)
            ->setOriginal_currency($original_currency)
            ->setCustomerSellingPrice($customerSellingPrice)
            ->setRevenue_amount($revenue_amount)
            ->setReduced_vat_fraction($reduced_vat_fraction)
            ->setDepositDate($depositDate)
            ->setFinalPaymentDate($finalPaymentDate)
            ->setSupplier_deposit_amount($supplier_deposit_amount)
            ->setSupplier_deposit_date($supplier_deposit_date)
            ->setSupplier_final_payment_date($supplier_final_payment_date)
            ->setSupplier_commission_amount($supplier_commission_amount)
            ->setVat_division($vat_division)
            ->setCommission_value($commission_value)
            ->setCommission_percent($commission_percent)
            ->setModeRevenueCalculation($modeRevenueCalculation)
            ->setValueRevenueCalculation($valueRevenueCalculation)
            ->setBuyCurrencyRate($buyCurrencyRate)
            ->setFeeAmount($feeAmount)
            ->setCalculatedMediatorAmount($calculatedMediatorAmount);
    }
    /**
     * Get position value
     * @return int
     */
    public function getPosition(): int
    {
        return $this->position;
    }
    /**
     * Set position value
     * @param int $position
     * @return \Pggns\MidocoApi\Api\Order\StructType\BookingPrice
     */
    public function setPosition(int $position): self
    {
        // validation for constraint: int
        if (!is_null($position) && !(is_int($position) || ctype_digit($position))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($position, true), gettype($position)), __LINE__);
        }
        $this->position = $position;
        
        return $this;
    }
    /**
     * Get supplier value
     * @return string|null
     */
    public function getSupplier(): ?string
    {
        return $this->supplier;
    }
    /**
     * Set supplier value
     * @param string $supplier
     * @return \Pggns\MidocoApi\Api\Order\StructType\BookingPrice
     */
    public function setSupplier(?string $supplier = null): self
    {
        // validation for constraint: string
        if (!is_null($supplier) && !is_string($supplier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplier, true), gettype($supplier)), __LINE__);
        }
        $this->supplier = $supplier;
        
        return $this;
    }
    /**
     * Get catalog value
     * @return string|null
     */
    public function getCatalog(): ?string
    {
        return $this->catalog;
    }
    /**
     * Set catalog value
     * @param string $catalog
     * @return \Pggns\MidocoApi\Api\Order\StructType\BookingPrice
     */
    public function setCatalog(?string $catalog = null): self
    {
        // validation for constraint: string
        if (!is_null($catalog) && !is_string($catalog)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($catalog, true), gettype($catalog)), __LINE__);
        }
        $this->catalog = $catalog;
        
        return $this;
    }
    /**
     * Get bookingId value
     * @return string|null
     */
    public function getBookingId(): ?string
    {
        return $this->bookingId;
    }
    /**
     * Set bookingId value
     * @param string $bookingId
     * @return \Pggns\MidocoApi\Api\Order\StructType\BookingPrice
     */
    public function setBookingId(?string $bookingId = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingId) && !is_string($bookingId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingId, true), gettype($bookingId)), __LINE__);
        }
        $this->bookingId = $bookingId;
        
        return $this;
    }
    /**
     * Get deposit value
     * @return float|null
     */
    public function getDeposit(): ?float
    {
        return $this->deposit;
    }
    /**
     * Set deposit value
     * @param float $deposit
     * @return \Pggns\MidocoApi\Api\Order\StructType\BookingPrice
     */
    public function setDeposit(?float $deposit = null): self
    {
        // validation for constraint: float
        if (!is_null($deposit) && !(is_float($deposit) || is_numeric($deposit))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($deposit, true), gettype($deposit)), __LINE__);
        }
        $this->deposit = $deposit;
        
        return $this;
    }
    /**
     * Get depositPaymentType value
     * @return string|null
     */
    public function getDepositPaymentType(): ?string
    {
        return $this->depositPaymentType;
    }
    /**
     * Set depositPaymentType value
     * @uses \Pggns\MidocoApi\Api\Order\EnumType\DepositPaymentType::valueIsValid()
     * @uses \Pggns\MidocoApi\Api\Order\EnumType\DepositPaymentType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $depositPaymentType
     * @return \Pggns\MidocoApi\Api\Order\StructType\BookingPrice
     */
    public function setDepositPaymentType(?string $depositPaymentType = null): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Api\Order\EnumType\DepositPaymentType::valueIsValid($depositPaymentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Api\Order\EnumType\DepositPaymentType', is_array($depositPaymentType) ? implode(', ', $depositPaymentType) : var_export($depositPaymentType, true), implode(', ', \Pggns\MidocoApi\Api\Order\EnumType\DepositPaymentType::getValidValues())), __LINE__);
        }
        $this->depositPaymentType = $depositPaymentType;
        
        return $this;
    }
    /**
     * Get totalPrice value
     * @return float|null
     */
    public function getTotalPrice(): ?float
    {
        return $this->totalPrice;
    }
    /**
     * Set totalPrice value
     * @param float $totalPrice
     * @return \Pggns\MidocoApi\Api\Order\StructType\BookingPrice
     */
    public function setTotalPrice(?float $totalPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($totalPrice) && !(is_float($totalPrice) || is_numeric($totalPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalPrice, true), gettype($totalPrice)), __LINE__);
        }
        $this->totalPrice = $totalPrice;
        
        return $this;
    }
    /**
     * Get hideServicePrices value
     * @return bool|null
     */
    public function getHideServicePrices(): ?bool
    {
        return $this->hideServicePrices;
    }
    /**
     * Set hideServicePrices value
     * @param bool $hideServicePrices
     * @return \Pggns\MidocoApi\Api\Order\StructType\BookingPrice
     */
    public function setHideServicePrices(?bool $hideServicePrices = false): self
    {
        // validation for constraint: boolean
        if (!is_null($hideServicePrices) && !is_bool($hideServicePrices)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hideServicePrices, true), gettype($hideServicePrices)), __LINE__);
        }
        $this->hideServicePrices = $hideServicePrices;
        
        return $this;
    }
    /**
     * Get paymentType value
     * @return string|null
     */
    public function getPaymentType(): ?string
    {
        return $this->paymentType;
    }
    /**
     * Set paymentType value
     * @uses \Pggns\MidocoApi\Api\Order\EnumType\PaymentType_1::valueIsValid()
     * @uses \Pggns\MidocoApi\Api\Order\EnumType\PaymentType_1::getValidValues()
     * @throws InvalidArgumentException
     * @param string $paymentType
     * @return \Pggns\MidocoApi\Api\Order\StructType\BookingPrice
     */
    public function setPaymentType(?string $paymentType = null): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Api\Order\EnumType\PaymentType_1::valueIsValid($paymentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Api\Order\EnumType\PaymentType_1', is_array($paymentType) ? implode(', ', $paymentType) : var_export($paymentType, true), implode(', ', \Pggns\MidocoApi\Api\Order\EnumType\PaymentType_1::getValidValues())), __LINE__);
        }
        $this->paymentType = $paymentType;
        
        return $this;
    }
    /**
     * Get extPaymentType value
     * @return string|null
     */
    public function getExtPaymentType(): ?string
    {
        return $this->extPaymentType;
    }
    /**
     * Set extPaymentType value
     * @param string $extPaymentType
     * @return \Pggns\MidocoApi\Api\Order\StructType\BookingPrice
     */
    public function setExtPaymentType(?string $extPaymentType = null): self
    {
        // validation for constraint: string
        if (!is_null($extPaymentType) && !is_string($extPaymentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($extPaymentType, true), gettype($extPaymentType)), __LINE__);
        }
        // validation for constraint: pattern(, CASH, DEBIT, CC, FULL_CREDIT)
        if (!is_null($extPaymentType) && !preg_match('/^$|CASH|DEBIT|CC|FULL_CREDIT/', $extPaymentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /^$|CASH|DEBIT|CC|FULL_CREDIT/', var_export($extPaymentType, true)), __LINE__);
        }
        $this->extPaymentType = $extPaymentType;
        
        return $this;
    }
    /**
     * Get currency value
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }
    /**
     * Set currency value
     * @param string $currency
     * @return \Pggns\MidocoApi\Api\Order\StructType\BookingPrice
     */
    public function setCurrency(?string $currency = null): self
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currency, true), gettype($currency)), __LINE__);
        }
        $this->currency = $currency;
        
        return $this;
    }
    /**
     * Get vatIncluded value
     * @return bool|null
     */
    public function getVatIncluded(): ?bool
    {
        return $this->vatIncluded;
    }
    /**
     * Set vatIncluded value
     * @param bool $vatIncluded
     * @return \Pggns\MidocoApi\Api\Order\StructType\BookingPrice
     */
    public function setVatIncluded(?bool $vatIncluded = null): self
    {
        // validation for constraint: boolean
        if (!is_null($vatIncluded) && !is_bool($vatIncluded)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($vatIncluded, true), gettype($vatIncluded)), __LINE__);
        }
        $this->vatIncluded = $vatIncluded;
        
        return $this;
    }
    /**
     * Get salePrice value
     * @return float|null
     */
    public function getSalePrice(): ?float
    {
        return $this->salePrice;
    }
    /**
     * Set salePrice value
     * @param float $salePrice
     * @return \Pggns\MidocoApi\Api\Order\StructType\BookingPrice
     */
    public function setSalePrice(?float $salePrice = null): self
    {
        // validation for constraint: float
        if (!is_null($salePrice) && !(is_float($salePrice) || is_numeric($salePrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($salePrice, true), gettype($salePrice)), __LINE__);
        }
        $this->salePrice = $salePrice;
        
        return $this;
    }
    /**
     * Get original_price value
     * @return float|null
     */
    public function getOriginal_price(): ?float
    {
        return $this->original_price;
    }
    /**
     * Set original_price value
     * @param float $original_price
     * @return \Pggns\MidocoApi\Api\Order\StructType\BookingPrice
     */
    public function setOriginal_price(?float $original_price = null): self
    {
        // validation for constraint: float
        if (!is_null($original_price) && !(is_float($original_price) || is_numeric($original_price))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($original_price, true), gettype($original_price)), __LINE__);
        }
        $this->original_price = $original_price;
        
        return $this;
    }
    /**
     * Get original_currency value
     * @return string|null
     */
    public function getOriginal_currency(): ?string
    {
        return $this->original_currency;
    }
    /**
     * Set original_currency value
     * @param string $original_currency
     * @return \Pggns\MidocoApi\Api\Order\StructType\BookingPrice
     */
    public function setOriginal_currency(?string $original_currency = null): self
    {
        // validation for constraint: string
        if (!is_null($original_currency) && !is_string($original_currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($original_currency, true), gettype($original_currency)), __LINE__);
        }
        $this->original_currency = $original_currency;
        
        return $this;
    }
    /**
     * Get customerSellingPrice value
     * @return float|null
     */
    public function getCustomerSellingPrice(): ?float
    {
        return $this->customerSellingPrice;
    }
    /**
     * Set customerSellingPrice value
     * @param float $customerSellingPrice
     * @return \Pggns\MidocoApi\Api\Order\StructType\BookingPrice
     */
    public function setCustomerSellingPrice(?float $customerSellingPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($customerSellingPrice) && !(is_float($customerSellingPrice) || is_numeric($customerSellingPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($customerSellingPrice, true), gettype($customerSellingPrice)), __LINE__);
        }
        $this->customerSellingPrice = $customerSellingPrice;
        
        return $this;
    }
    /**
     * Get revenue_amount value
     * @return float|null
     */
    public function getRevenue_amount(): ?float
    {
        return $this->revenue_amount;
    }
    /**
     * Set revenue_amount value
     * @param float $revenue_amount
     * @return \Pggns\MidocoApi\Api\Order\StructType\BookingPrice
     */
    public function setRevenue_amount(?float $revenue_amount = null): self
    {
        // validation for constraint: float
        if (!is_null($revenue_amount) && !(is_float($revenue_amount) || is_numeric($revenue_amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($revenue_amount, true), gettype($revenue_amount)), __LINE__);
        }
        $this->revenue_amount = $revenue_amount;
        
        return $this;
    }
    /**
     * Get reduced_vat_fraction value
     * @return float|null
     */
    public function getReduced_vat_fraction(): ?float
    {
        return $this->reduced_vat_fraction;
    }
    /**
     * Set reduced_vat_fraction value
     * @param float $reduced_vat_fraction
     * @return \Pggns\MidocoApi\Api\Order\StructType\BookingPrice
     */
    public function setReduced_vat_fraction(?float $reduced_vat_fraction = null): self
    {
        // validation for constraint: float
        if (!is_null($reduced_vat_fraction) && !(is_float($reduced_vat_fraction) || is_numeric($reduced_vat_fraction))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($reduced_vat_fraction, true), gettype($reduced_vat_fraction)), __LINE__);
        }
        $this->reduced_vat_fraction = $reduced_vat_fraction;
        
        return $this;
    }
    /**
     * Get depositDate value
     * @return string|null
     */
    public function getDepositDate(): ?string
    {
        return $this->depositDate;
    }
    /**
     * Set depositDate value
     * @param string $depositDate
     * @return \Pggns\MidocoApi\Api\Order\StructType\BookingPrice
     */
    public function setDepositDate(?string $depositDate = null): self
    {
        // validation for constraint: string
        if (!is_null($depositDate) && !is_string($depositDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($depositDate, true), gettype($depositDate)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{4}-[0-9]{2}-[0-9]{2})
        if (!is_null($depositDate) && !preg_match('/[0-9]{4}-[0-9]{2}-[0-9]{2}/', $depositDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{4}-[0-9]{2}-[0-9]{2}/', var_export($depositDate, true)), __LINE__);
        }
        $this->depositDate = $depositDate;
        
        return $this;
    }
    /**
     * Get finalPaymentDate value
     * @return string|null
     */
    public function getFinalPaymentDate(): ?string
    {
        return $this->finalPaymentDate;
    }
    /**
     * Set finalPaymentDate value
     * @param string $finalPaymentDate
     * @return \Pggns\MidocoApi\Api\Order\StructType\BookingPrice
     */
    public function setFinalPaymentDate(?string $finalPaymentDate = null): self
    {
        // validation for constraint: string
        if (!is_null($finalPaymentDate) && !is_string($finalPaymentDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($finalPaymentDate, true), gettype($finalPaymentDate)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{4}-[0-9]{2}-[0-9]{2})
        if (!is_null($finalPaymentDate) && !preg_match('/[0-9]{4}-[0-9]{2}-[0-9]{2}/', $finalPaymentDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{4}-[0-9]{2}-[0-9]{2}/', var_export($finalPaymentDate, true)), __LINE__);
        }
        $this->finalPaymentDate = $finalPaymentDate;
        
        return $this;
    }
    /**
     * Get supplier_deposit_amount value
     * @return float|null
     */
    public function getSupplier_deposit_amount(): ?float
    {
        return $this->supplier_deposit_amount;
    }
    /**
     * Set supplier_deposit_amount value
     * @param float $supplier_deposit_amount
     * @return \Pggns\MidocoApi\Api\Order\StructType\BookingPrice
     */
    public function setSupplier_deposit_amount(?float $supplier_deposit_amount = null): self
    {
        // validation for constraint: float
        if (!is_null($supplier_deposit_amount) && !(is_float($supplier_deposit_amount) || is_numeric($supplier_deposit_amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($supplier_deposit_amount, true), gettype($supplier_deposit_amount)), __LINE__);
        }
        $this->supplier_deposit_amount = $supplier_deposit_amount;
        
        return $this;
    }
    /**
     * Get supplier_deposit_date value
     * @return string|null
     */
    public function getSupplier_deposit_date(): ?string
    {
        return $this->supplier_deposit_date;
    }
    /**
     * Set supplier_deposit_date value
     * @param string $supplier_deposit_date
     * @return \Pggns\MidocoApi\Api\Order\StructType\BookingPrice
     */
    public function setSupplier_deposit_date(?string $supplier_deposit_date = null): self
    {
        // validation for constraint: string
        if (!is_null($supplier_deposit_date) && !is_string($supplier_deposit_date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplier_deposit_date, true), gettype($supplier_deposit_date)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{4}-[0-9]{2}-[0-9]{2})
        if (!is_null($supplier_deposit_date) && !preg_match('/[0-9]{4}-[0-9]{2}-[0-9]{2}/', $supplier_deposit_date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{4}-[0-9]{2}-[0-9]{2}/', var_export($supplier_deposit_date, true)), __LINE__);
        }
        $this->supplier_deposit_date = $supplier_deposit_date;
        
        return $this;
    }
    /**
     * Get supplier_final_payment_date value
     * @return string|null
     */
    public function getSupplier_final_payment_date(): ?string
    {
        return $this->supplier_final_payment_date;
    }
    /**
     * Set supplier_final_payment_date value
     * @param string $supplier_final_payment_date
     * @return \Pggns\MidocoApi\Api\Order\StructType\BookingPrice
     */
    public function setSupplier_final_payment_date(?string $supplier_final_payment_date = null): self
    {
        // validation for constraint: string
        if (!is_null($supplier_final_payment_date) && !is_string($supplier_final_payment_date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplier_final_payment_date, true), gettype($supplier_final_payment_date)), __LINE__);
        }
        // validation for constraint: pattern([0-9]{4}-[0-9]{2}-[0-9]{2})
        if (!is_null($supplier_final_payment_date) && !preg_match('/[0-9]{4}-[0-9]{2}-[0-9]{2}/', $supplier_final_payment_date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9]{4}-[0-9]{2}-[0-9]{2}/', var_export($supplier_final_payment_date, true)), __LINE__);
        }
        $this->supplier_final_payment_date = $supplier_final_payment_date;
        
        return $this;
    }
    /**
     * Get supplier_commission_amount value
     * @return float|null
     */
    public function getSupplier_commission_amount(): ?float
    {
        return $this->supplier_commission_amount;
    }
    /**
     * Set supplier_commission_amount value
     * @param float $supplier_commission_amount
     * @return \Pggns\MidocoApi\Api\Order\StructType\BookingPrice
     */
    public function setSupplier_commission_amount(?float $supplier_commission_amount = null): self
    {
        // validation for constraint: float
        if (!is_null($supplier_commission_amount) && !(is_float($supplier_commission_amount) || is_numeric($supplier_commission_amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($supplier_commission_amount, true), gettype($supplier_commission_amount)), __LINE__);
        }
        $this->supplier_commission_amount = $supplier_commission_amount;
        
        return $this;
    }
    /**
     * Get vat_division value
     * @return \Pggns\MidocoApi\Api\Order\StructType\Vat_division[]
     */
    public function getVat_division(): ?array
    {
        return $this->vat_division;
    }
    /**
     * This method is responsible for validating the values passed to the setVat_division method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVat_division method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateVat_divisionForArrayConstraintsFromSetVat_division(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $bookingPriceVat_divisionItem) {
            // validation for constraint: itemType
            if (!$bookingPriceVat_divisionItem instanceof \Pggns\MidocoApi\Api\Order\StructType\Vat_division) {
                $invalidValues[] = is_object($bookingPriceVat_divisionItem) ? get_class($bookingPriceVat_divisionItem) : sprintf('%s(%s)', gettype($bookingPriceVat_divisionItem), var_export($bookingPriceVat_divisionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The vat_division property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\Vat_division, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set vat_division value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\Vat_division[] $vat_division
     * @return \Pggns\MidocoApi\Api\Order\StructType\BookingPrice
     */
    public function setVat_division(?array $vat_division = null): self
    {
        // validation for constraint: array
        if ('' !== ($vat_divisionArrayErrorMessage = self::validateVat_divisionForArrayConstraintsFromSetVat_division($vat_division))) {
            throw new InvalidArgumentException($vat_divisionArrayErrorMessage, __LINE__);
        }
        $this->vat_division = $vat_division;
        
        return $this;
    }
    /**
     * Add item to vat_division value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\Vat_division $item
     * @return \Pggns\MidocoApi\Api\Order\StructType\BookingPrice
     */
    public function addToVat_division(\Pggns\MidocoApi\Api\Order\StructType\Vat_division $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Order\StructType\Vat_division) {
            throw new InvalidArgumentException(sprintf('The vat_division property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\Vat_division, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->vat_division[] = $item;
        
        return $this;
    }
    /**
     * Get commission_value value
     * @return float|null
     */
    public function getCommission_value(): ?float
    {
        return $this->commission_value;
    }
    /**
     * Set commission_value value
     * @param float $commission_value
     * @return \Pggns\MidocoApi\Api\Order\StructType\BookingPrice
     */
    public function setCommission_value(?float $commission_value = null): self
    {
        // validation for constraint: float
        if (!is_null($commission_value) && !(is_float($commission_value) || is_numeric($commission_value))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($commission_value, true), gettype($commission_value)), __LINE__);
        }
        $this->commission_value = $commission_value;
        
        return $this;
    }
    /**
     * Get commission_percent value
     * @return float|null
     */
    public function getCommission_percent(): ?float
    {
        return $this->commission_percent;
    }
    /**
     * Set commission_percent value
     * @param float $commission_percent
     * @return \Pggns\MidocoApi\Api\Order\StructType\BookingPrice
     */
    public function setCommission_percent(?float $commission_percent = null): self
    {
        // validation for constraint: float
        if (!is_null($commission_percent) && !(is_float($commission_percent) || is_numeric($commission_percent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($commission_percent, true), gettype($commission_percent)), __LINE__);
        }
        $this->commission_percent = $commission_percent;
        
        return $this;
    }
    /**
     * Get modeRevenueCalculation value
     * @return string|null
     */
    public function getModeRevenueCalculation(): ?string
    {
        return $this->modeRevenueCalculation;
    }
    /**
     * Set modeRevenueCalculation value
     * @uses \Pggns\MidocoApi\Api\Order\EnumType\ModeRevenueCalculation::valueIsValid()
     * @uses \Pggns\MidocoApi\Api\Order\EnumType\ModeRevenueCalculation::getValidValues()
     * @throws InvalidArgumentException
     * @param string $modeRevenueCalculation
     * @return \Pggns\MidocoApi\Api\Order\StructType\BookingPrice
     */
    public function setModeRevenueCalculation(?string $modeRevenueCalculation = null): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Api\Order\EnumType\ModeRevenueCalculation::valueIsValid($modeRevenueCalculation)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Api\Order\EnumType\ModeRevenueCalculation', is_array($modeRevenueCalculation) ? implode(', ', $modeRevenueCalculation) : var_export($modeRevenueCalculation, true), implode(', ', \Pggns\MidocoApi\Api\Order\EnumType\ModeRevenueCalculation::getValidValues())), __LINE__);
        }
        $this->modeRevenueCalculation = $modeRevenueCalculation;
        
        return $this;
    }
    /**
     * Get valueRevenueCalculation value
     * @return float|null
     */
    public function getValueRevenueCalculation(): ?float
    {
        return $this->valueRevenueCalculation;
    }
    /**
     * Set valueRevenueCalculation value
     * @param float $valueRevenueCalculation
     * @return \Pggns\MidocoApi\Api\Order\StructType\BookingPrice
     */
    public function setValueRevenueCalculation(?float $valueRevenueCalculation = null): self
    {
        // validation for constraint: float
        if (!is_null($valueRevenueCalculation) && !(is_float($valueRevenueCalculation) || is_numeric($valueRevenueCalculation))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($valueRevenueCalculation, true), gettype($valueRevenueCalculation)), __LINE__);
        }
        $this->valueRevenueCalculation = $valueRevenueCalculation;
        
        return $this;
    }
    /**
     * Get buyCurrencyRate value
     * @return float|null
     */
    public function getBuyCurrencyRate(): ?float
    {
        return $this->buyCurrencyRate;
    }
    /**
     * Set buyCurrencyRate value
     * @param float $buyCurrencyRate
     * @return \Pggns\MidocoApi\Api\Order\StructType\BookingPrice
     */
    public function setBuyCurrencyRate(?float $buyCurrencyRate = null): self
    {
        // validation for constraint: float
        if (!is_null($buyCurrencyRate) && !(is_float($buyCurrencyRate) || is_numeric($buyCurrencyRate))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($buyCurrencyRate, true), gettype($buyCurrencyRate)), __LINE__);
        }
        $this->buyCurrencyRate = $buyCurrencyRate;
        
        return $this;
    }
    /**
     * Get feeAmount value
     * @return float|null
     */
    public function getFeeAmount(): ?float
    {
        return $this->feeAmount;
    }
    /**
     * Set feeAmount value
     * @param float $feeAmount
     * @return \Pggns\MidocoApi\Api\Order\StructType\BookingPrice
     */
    public function setFeeAmount(?float $feeAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($feeAmount) && !(is_float($feeAmount) || is_numeric($feeAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($feeAmount, true), gettype($feeAmount)), __LINE__);
        }
        $this->feeAmount = $feeAmount;
        
        return $this;
    }
    /**
     * Get calculatedMediatorAmount value
     * @return float|null
     */
    public function getCalculatedMediatorAmount(): ?float
    {
        return $this->calculatedMediatorAmount;
    }
    /**
     * Set calculatedMediatorAmount value
     * @param float $calculatedMediatorAmount
     * @return \Pggns\MidocoApi\Api\Order\StructType\BookingPrice
     */
    public function setCalculatedMediatorAmount(?float $calculatedMediatorAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($calculatedMediatorAmount) && !(is_float($calculatedMediatorAmount) || is_numeric($calculatedMediatorAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($calculatedMediatorAmount, true), gettype($calculatedMediatorAmount)), __LINE__);
        }
        $this->calculatedMediatorAmount = $calculatedMediatorAmount;
        
        return $this;
    }
}
