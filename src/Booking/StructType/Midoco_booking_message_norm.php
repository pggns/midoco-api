<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Booking\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for midoco_booking_message_norm StructType
 * Meta information extracted from the WSDL
 * - documentation: optional dunning infos at order level | optional payments at order level | This section contains the payment information which is given by the customer | a message containing information of booked items in a reservation system
 * @subpackage Structs
 */
class Midoco_booking_message_norm extends AbstractStructBase
{
    /**
     * The agencyIdentity
     * @var \Pggns\MidocoApi\Api\Booking\StructType\AgencyIdentity|null
     */
    protected ?\Pggns\MidocoApi\Api\Booking\StructType\AgencyIdentity $agencyIdentity = null;
    /**
     * The customer
     * Meta information extracted from the WSDL
     * - maxOccurs: 2
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Api\Booking\StructType\Customer[]
     */
    protected ?array $customer = null;
    /**
     * The packageInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Api\Booking\StructType\PackageInfo[]
     */
    protected ?array $packageInfo = null;
    /**
     * The booking
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Api\Booking\StructType\Booking[]
     */
    protected ?array $booking = null;
    /**
     * The prices
     * @var \Pggns\MidocoApi\Api\Booking\StructType\Prices|null
     */
    protected ?\Pggns\MidocoApi\Api\Booking\StructType\Prices $prices = null;
    /**
     * The ticket
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Api\Booking\StructType\Ticket[]
     */
    protected ?array $ticket = null;
    /**
     * The paymentInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: paymentInfo
     * @var \Pggns\MidocoApi\Api\Booking\StructType\PaymentInfo|null
     */
    protected ?\Pggns\MidocoApi\Api\Booking\StructType\PaymentInfo $paymentInfo = null;
    /**
     * The marketingInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Api\Booking\StructType\MarketingInfo|null
     */
    protected ?\Pggns\MidocoApi\Api\Booking\StructType\MarketingInfo $marketingInfo = null;
    /**
     * The internal_treatment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Api\Booking\StructType\Internal_treatment|null
     */
    protected ?\Pggns\MidocoApi\Api\Booking\StructType\Internal_treatment $internal_treatment = null;
    /**
     * The orderRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Api\Booking\StructType\OrderRemark[]
     */
    protected ?array $orderRemark = null;
    /**
     * The ExternalPayment
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: ExternalPayment
     * @var \Pggns\MidocoApi\Api\Booking\StructType\ExternalPayment[]
     */
    protected ?array $ExternalPayment = null;
    /**
     * The importedDocument
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Api\Booking\StructType\ImportedDocument[]
     */
    protected ?array $importedDocument = null;
    /**
     * The DunningInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: DunningInfo
     * @var \Pggns\MidocoApi\Api\Booking\StructType\DunningInfo[]
     */
    protected ?array $DunningInfo = null;
    /**
     * The voucher
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Api\Booking\StructType\Voucher[]
     */
    protected ?array $voucher = null;
    /**
     * The verkData
     * Meta information extracted from the WSDL
     * - documentation: VERK Data
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Api\Booking\StructType\VerkDataInfo[]
     */
    protected ?array $verkData = null;
    /**
     * The messageVersion
     * Meta information extracted from the WSDL
     * - default: 1
     * @var int|null
     */
    protected ?int $messageVersion = null;
    /**
     * Constructor method for midoco_booking_message_norm
     * @uses Midoco_booking_message_norm::setAgencyIdentity()
     * @uses Midoco_booking_message_norm::setCustomer()
     * @uses Midoco_booking_message_norm::setPackageInfo()
     * @uses Midoco_booking_message_norm::setBooking()
     * @uses Midoco_booking_message_norm::setPrices()
     * @uses Midoco_booking_message_norm::setTicket()
     * @uses Midoco_booking_message_norm::setPaymentInfo()
     * @uses Midoco_booking_message_norm::setMarketingInfo()
     * @uses Midoco_booking_message_norm::setInternal_treatment()
     * @uses Midoco_booking_message_norm::setOrderRemark()
     * @uses Midoco_booking_message_norm::setExternalPayment()
     * @uses Midoco_booking_message_norm::setImportedDocument()
     * @uses Midoco_booking_message_norm::setDunningInfo()
     * @uses Midoco_booking_message_norm::setVoucher()
     * @uses Midoco_booking_message_norm::setVerkData()
     * @uses Midoco_booking_message_norm::setMessageVersion()
     * @param \Pggns\MidocoApi\Api\Booking\StructType\AgencyIdentity $agencyIdentity
     * @param \Pggns\MidocoApi\Api\Booking\StructType\Customer[] $customer
     * @param \Pggns\MidocoApi\Api\Booking\StructType\PackageInfo[] $packageInfo
     * @param \Pggns\MidocoApi\Api\Booking\StructType\Booking[] $booking
     * @param \Pggns\MidocoApi\Api\Booking\StructType\Prices $prices
     * @param \Pggns\MidocoApi\Api\Booking\StructType\Ticket[] $ticket
     * @param \Pggns\MidocoApi\Api\Booking\StructType\PaymentInfo $paymentInfo
     * @param \Pggns\MidocoApi\Api\Booking\StructType\MarketingInfo $marketingInfo
     * @param \Pggns\MidocoApi\Api\Booking\StructType\Internal_treatment $internal_treatment
     * @param \Pggns\MidocoApi\Api\Booking\StructType\OrderRemark[] $orderRemark
     * @param \Pggns\MidocoApi\Api\Booking\StructType\ExternalPayment[] $externalPayment
     * @param \Pggns\MidocoApi\Api\Booking\StructType\ImportedDocument[] $importedDocument
     * @param \Pggns\MidocoApi\Api\Booking\StructType\DunningInfo[] $dunningInfo
     * @param \Pggns\MidocoApi\Api\Booking\StructType\Voucher[] $voucher
     * @param \Pggns\MidocoApi\Api\Booking\StructType\VerkDataInfo[] $verkData
     * @param int $messageVersion
     */
    public function __construct(?\Pggns\MidocoApi\Api\Booking\StructType\AgencyIdentity $agencyIdentity = null, ?array $customer = null, ?array $packageInfo = null, ?array $booking = null, ?\Pggns\MidocoApi\Api\Booking\StructType\Prices $prices = null, ?array $ticket = null, ?\Pggns\MidocoApi\Api\Booking\StructType\PaymentInfo $paymentInfo = null, ?\Pggns\MidocoApi\Api\Booking\StructType\MarketingInfo $marketingInfo = null, ?\Pggns\MidocoApi\Api\Booking\StructType\Internal_treatment $internal_treatment = null, ?array $orderRemark = null, ?array $externalPayment = null, ?array $importedDocument = null, ?array $dunningInfo = null, ?array $voucher = null, ?array $verkData = null, ?int $messageVersion = 1)
    {
        $this
            ->setAgencyIdentity($agencyIdentity)
            ->setCustomer($customer)
            ->setPackageInfo($packageInfo)
            ->setBooking($booking)
            ->setPrices($prices)
            ->setTicket($ticket)
            ->setPaymentInfo($paymentInfo)
            ->setMarketingInfo($marketingInfo)
            ->setInternal_treatment($internal_treatment)
            ->setOrderRemark($orderRemark)
            ->setExternalPayment($externalPayment)
            ->setImportedDocument($importedDocument)
            ->setDunningInfo($dunningInfo)
            ->setVoucher($voucher)
            ->setVerkData($verkData)
            ->setMessageVersion($messageVersion);
    }
    /**
     * Get agencyIdentity value
     * @return \Pggns\MidocoApi\Api\Booking\StructType\AgencyIdentity|null
     */
    public function getAgencyIdentity(): ?\Pggns\MidocoApi\Api\Booking\StructType\AgencyIdentity
    {
        return $this->agencyIdentity;
    }
    /**
     * Set agencyIdentity value
     * @param \Pggns\MidocoApi\Api\Booking\StructType\AgencyIdentity $agencyIdentity
     * @return \Pggns\MidocoApi\Api\Booking\StructType\Midoco_booking_message_norm
     */
    public function setAgencyIdentity(?\Pggns\MidocoApi\Api\Booking\StructType\AgencyIdentity $agencyIdentity = null): self
    {
        $this->agencyIdentity = $agencyIdentity;
        
        return $this;
    }
    /**
     * Get customer value
     * @return \Pggns\MidocoApi\Api\Booking\StructType\Customer[]
     */
    public function getCustomer(): ?array
    {
        return $this->customer;
    }
    /**
     * This method is responsible for validating the values passed to the setCustomer method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustomer method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCustomerForArrayConstraintsFromSetCustomer(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midoco_booking_message_normCustomerItem) {
            // validation for constraint: itemType
            if (!$midoco_booking_message_normCustomerItem instanceof \Pggns\MidocoApi\Api\Booking\StructType\Customer) {
                $invalidValues[] = is_object($midoco_booking_message_normCustomerItem) ? get_class($midoco_booking_message_normCustomerItem) : sprintf('%s(%s)', gettype($midoco_booking_message_normCustomerItem), var_export($midoco_booking_message_normCustomerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The customer property can only contain items of type \Pggns\MidocoApi\Api\Booking\StructType\Customer, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set customer value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Booking\StructType\Customer[] $customer
     * @return \Pggns\MidocoApi\Api\Booking\StructType\Midoco_booking_message_norm
     */
    public function setCustomer(?array $customer = null): self
    {
        // validation for constraint: array
        if ('' !== ($customerArrayErrorMessage = self::validateCustomerForArrayConstraintsFromSetCustomer($customer))) {
            throw new InvalidArgumentException($customerArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(2)
        if (is_array($customer) && count($customer) > 2) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 2', count($customer)), __LINE__);
        }
        $this->customer = $customer;
        
        return $this;
    }
    /**
     * Add item to customer value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Booking\StructType\Customer $item
     * @return \Pggns\MidocoApi\Api\Booking\StructType\Midoco_booking_message_norm
     */
    public function addToCustomer(\Pggns\MidocoApi\Api\Booking\StructType\Customer $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Booking\StructType\Customer) {
            throw new InvalidArgumentException(sprintf('The customer property can only contain items of type \Pggns\MidocoApi\Api\Booking\StructType\Customer, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(2)
        if (is_array($this->customer) && count($this->customer) >= 2) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 2', count($this->customer)), __LINE__);
        }
        $this->customer[] = $item;
        
        return $this;
    }
    /**
     * Get packageInfo value
     * @return \Pggns\MidocoApi\Api\Booking\StructType\PackageInfo[]
     */
    public function getPackageInfo(): ?array
    {
        return $this->packageInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setPackageInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPackageInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePackageInfoForArrayConstraintsFromSetPackageInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midoco_booking_message_normPackageInfoItem) {
            // validation for constraint: itemType
            if (!$midoco_booking_message_normPackageInfoItem instanceof \Pggns\MidocoApi\Api\Booking\StructType\PackageInfo) {
                $invalidValues[] = is_object($midoco_booking_message_normPackageInfoItem) ? get_class($midoco_booking_message_normPackageInfoItem) : sprintf('%s(%s)', gettype($midoco_booking_message_normPackageInfoItem), var_export($midoco_booking_message_normPackageInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The packageInfo property can only contain items of type \Pggns\MidocoApi\Api\Booking\StructType\PackageInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set packageInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Booking\StructType\PackageInfo[] $packageInfo
     * @return \Pggns\MidocoApi\Api\Booking\StructType\Midoco_booking_message_norm
     */
    public function setPackageInfo(?array $packageInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($packageInfoArrayErrorMessage = self::validatePackageInfoForArrayConstraintsFromSetPackageInfo($packageInfo))) {
            throw new InvalidArgumentException($packageInfoArrayErrorMessage, __LINE__);
        }
        $this->packageInfo = $packageInfo;
        
        return $this;
    }
    /**
     * Add item to packageInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Booking\StructType\PackageInfo $item
     * @return \Pggns\MidocoApi\Api\Booking\StructType\Midoco_booking_message_norm
     */
    public function addToPackageInfo(\Pggns\MidocoApi\Api\Booking\StructType\PackageInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Booking\StructType\PackageInfo) {
            throw new InvalidArgumentException(sprintf('The packageInfo property can only contain items of type \Pggns\MidocoApi\Api\Booking\StructType\PackageInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->packageInfo[] = $item;
        
        return $this;
    }
    /**
     * Get booking value
     * @return \Pggns\MidocoApi\Api\Booking\StructType\Booking[]
     */
    public function getBooking(): ?array
    {
        return $this->booking;
    }
    /**
     * This method is responsible for validating the values passed to the setBooking method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBooking method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBookingForArrayConstraintsFromSetBooking(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midoco_booking_message_normBookingItem) {
            // validation for constraint: itemType
            if (!$midoco_booking_message_normBookingItem instanceof \Pggns\MidocoApi\Api\Booking\StructType\Booking) {
                $invalidValues[] = is_object($midoco_booking_message_normBookingItem) ? get_class($midoco_booking_message_normBookingItem) : sprintf('%s(%s)', gettype($midoco_booking_message_normBookingItem), var_export($midoco_booking_message_normBookingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The booking property can only contain items of type \Pggns\MidocoApi\Api\Booking\StructType\Booking, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set booking value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Booking\StructType\Booking[] $booking
     * @return \Pggns\MidocoApi\Api\Booking\StructType\Midoco_booking_message_norm
     */
    public function setBooking(?array $booking = null): self
    {
        // validation for constraint: array
        if ('' !== ($bookingArrayErrorMessage = self::validateBookingForArrayConstraintsFromSetBooking($booking))) {
            throw new InvalidArgumentException($bookingArrayErrorMessage, __LINE__);
        }
        $this->booking = $booking;
        
        return $this;
    }
    /**
     * Add item to booking value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Booking\StructType\Booking $item
     * @return \Pggns\MidocoApi\Api\Booking\StructType\Midoco_booking_message_norm
     */
    public function addToBooking(\Pggns\MidocoApi\Api\Booking\StructType\Booking $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Booking\StructType\Booking) {
            throw new InvalidArgumentException(sprintf('The booking property can only contain items of type \Pggns\MidocoApi\Api\Booking\StructType\Booking, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->booking[] = $item;
        
        return $this;
    }
    /**
     * Get prices value
     * @return \Pggns\MidocoApi\Api\Booking\StructType\Prices|null
     */
    public function getPrices(): ?\Pggns\MidocoApi\Api\Booking\StructType\Prices
    {
        return $this->prices;
    }
    /**
     * Set prices value
     * @param \Pggns\MidocoApi\Api\Booking\StructType\Prices $prices
     * @return \Pggns\MidocoApi\Api\Booking\StructType\Midoco_booking_message_norm
     */
    public function setPrices(?\Pggns\MidocoApi\Api\Booking\StructType\Prices $prices = null): self
    {
        $this->prices = $prices;
        
        return $this;
    }
    /**
     * Get ticket value
     * @return \Pggns\MidocoApi\Api\Booking\StructType\Ticket[]
     */
    public function getTicket(): ?array
    {
        return $this->ticket;
    }
    /**
     * This method is responsible for validating the values passed to the setTicket method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTicket method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTicketForArrayConstraintsFromSetTicket(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midoco_booking_message_normTicketItem) {
            // validation for constraint: itemType
            if (!$midoco_booking_message_normTicketItem instanceof \Pggns\MidocoApi\Api\Booking\StructType\Ticket) {
                $invalidValues[] = is_object($midoco_booking_message_normTicketItem) ? get_class($midoco_booking_message_normTicketItem) : sprintf('%s(%s)', gettype($midoco_booking_message_normTicketItem), var_export($midoco_booking_message_normTicketItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ticket property can only contain items of type \Pggns\MidocoApi\Api\Booking\StructType\Ticket, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ticket value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Booking\StructType\Ticket[] $ticket
     * @return \Pggns\MidocoApi\Api\Booking\StructType\Midoco_booking_message_norm
     */
    public function setTicket(?array $ticket = null): self
    {
        // validation for constraint: array
        if ('' !== ($ticketArrayErrorMessage = self::validateTicketForArrayConstraintsFromSetTicket($ticket))) {
            throw new InvalidArgumentException($ticketArrayErrorMessage, __LINE__);
        }
        $this->ticket = $ticket;
        
        return $this;
    }
    /**
     * Add item to ticket value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Booking\StructType\Ticket $item
     * @return \Pggns\MidocoApi\Api\Booking\StructType\Midoco_booking_message_norm
     */
    public function addToTicket(\Pggns\MidocoApi\Api\Booking\StructType\Ticket $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Booking\StructType\Ticket) {
            throw new InvalidArgumentException(sprintf('The ticket property can only contain items of type \Pggns\MidocoApi\Api\Booking\StructType\Ticket, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ticket[] = $item;
        
        return $this;
    }
    /**
     * Get paymentInfo value
     * @return \Pggns\MidocoApi\Api\Booking\StructType\PaymentInfo|null
     */
    public function getPaymentInfo(): ?\Pggns\MidocoApi\Api\Booking\StructType\PaymentInfo
    {
        return $this->paymentInfo;
    }
    /**
     * Set paymentInfo value
     * @param \Pggns\MidocoApi\Api\Booking\StructType\PaymentInfo $paymentInfo
     * @return \Pggns\MidocoApi\Api\Booking\StructType\Midoco_booking_message_norm
     */
    public function setPaymentInfo(?\Pggns\MidocoApi\Api\Booking\StructType\PaymentInfo $paymentInfo = null): self
    {
        $this->paymentInfo = $paymentInfo;
        
        return $this;
    }
    /**
     * Get marketingInfo value
     * @return \Pggns\MidocoApi\Api\Booking\StructType\MarketingInfo|null
     */
    public function getMarketingInfo(): ?\Pggns\MidocoApi\Api\Booking\StructType\MarketingInfo
    {
        return $this->marketingInfo;
    }
    /**
     * Set marketingInfo value
     * @param \Pggns\MidocoApi\Api\Booking\StructType\MarketingInfo $marketingInfo
     * @return \Pggns\MidocoApi\Api\Booking\StructType\Midoco_booking_message_norm
     */
    public function setMarketingInfo(?\Pggns\MidocoApi\Api\Booking\StructType\MarketingInfo $marketingInfo = null): self
    {
        $this->marketingInfo = $marketingInfo;
        
        return $this;
    }
    /**
     * Get internal_treatment value
     * @return \Pggns\MidocoApi\Api\Booking\StructType\Internal_treatment|null
     */
    public function getInternal_treatment(): ?\Pggns\MidocoApi\Api\Booking\StructType\Internal_treatment
    {
        return $this->internal_treatment;
    }
    /**
     * Set internal_treatment value
     * @param \Pggns\MidocoApi\Api\Booking\StructType\Internal_treatment $internal_treatment
     * @return \Pggns\MidocoApi\Api\Booking\StructType\Midoco_booking_message_norm
     */
    public function setInternal_treatment(?\Pggns\MidocoApi\Api\Booking\StructType\Internal_treatment $internal_treatment = null): self
    {
        $this->internal_treatment = $internal_treatment;
        
        return $this;
    }
    /**
     * Get orderRemark value
     * @return \Pggns\MidocoApi\Api\Booking\StructType\OrderRemark[]
     */
    public function getOrderRemark(): ?array
    {
        return $this->orderRemark;
    }
    /**
     * This method is responsible for validating the values passed to the setOrderRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrderRemark method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOrderRemarkForArrayConstraintsFromSetOrderRemark(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midoco_booking_message_normOrderRemarkItem) {
            // validation for constraint: itemType
            if (!$midoco_booking_message_normOrderRemarkItem instanceof \Pggns\MidocoApi\Api\Booking\StructType\OrderRemark) {
                $invalidValues[] = is_object($midoco_booking_message_normOrderRemarkItem) ? get_class($midoco_booking_message_normOrderRemarkItem) : sprintf('%s(%s)', gettype($midoco_booking_message_normOrderRemarkItem), var_export($midoco_booking_message_normOrderRemarkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The orderRemark property can only contain items of type \Pggns\MidocoApi\Api\Booking\StructType\OrderRemark, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set orderRemark value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Booking\StructType\OrderRemark[] $orderRemark
     * @return \Pggns\MidocoApi\Api\Booking\StructType\Midoco_booking_message_norm
     */
    public function setOrderRemark(?array $orderRemark = null): self
    {
        // validation for constraint: array
        if ('' !== ($orderRemarkArrayErrorMessage = self::validateOrderRemarkForArrayConstraintsFromSetOrderRemark($orderRemark))) {
            throw new InvalidArgumentException($orderRemarkArrayErrorMessage, __LINE__);
        }
        $this->orderRemark = $orderRemark;
        
        return $this;
    }
    /**
     * Add item to orderRemark value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Booking\StructType\OrderRemark $item
     * @return \Pggns\MidocoApi\Api\Booking\StructType\Midoco_booking_message_norm
     */
    public function addToOrderRemark(\Pggns\MidocoApi\Api\Booking\StructType\OrderRemark $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Booking\StructType\OrderRemark) {
            throw new InvalidArgumentException(sprintf('The orderRemark property can only contain items of type \Pggns\MidocoApi\Api\Booking\StructType\OrderRemark, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->orderRemark[] = $item;
        
        return $this;
    }
    /**
     * Get ExternalPayment value
     * @return \Pggns\MidocoApi\Api\Booking\StructType\ExternalPayment[]
     */
    public function getExternalPayment(): ?array
    {
        return $this->ExternalPayment;
    }
    /**
     * This method is responsible for validating the values passed to the setExternalPayment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExternalPayment method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateExternalPaymentForArrayConstraintsFromSetExternalPayment(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midoco_booking_message_normExternalPaymentItem) {
            // validation for constraint: itemType
            if (!$midoco_booking_message_normExternalPaymentItem instanceof \Pggns\MidocoApi\Api\Booking\StructType\ExternalPayment) {
                $invalidValues[] = is_object($midoco_booking_message_normExternalPaymentItem) ? get_class($midoco_booking_message_normExternalPaymentItem) : sprintf('%s(%s)', gettype($midoco_booking_message_normExternalPaymentItem), var_export($midoco_booking_message_normExternalPaymentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ExternalPayment property can only contain items of type \Pggns\MidocoApi\Api\Booking\StructType\ExternalPayment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ExternalPayment value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Booking\StructType\ExternalPayment[] $externalPayment
     * @return \Pggns\MidocoApi\Api\Booking\StructType\Midoco_booking_message_norm
     */
    public function setExternalPayment(?array $externalPayment = null): self
    {
        // validation for constraint: array
        if ('' !== ($externalPaymentArrayErrorMessage = self::validateExternalPaymentForArrayConstraintsFromSetExternalPayment($externalPayment))) {
            throw new InvalidArgumentException($externalPaymentArrayErrorMessage, __LINE__);
        }
        $this->ExternalPayment = $externalPayment;
        
        return $this;
    }
    /**
     * Add item to ExternalPayment value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Booking\StructType\ExternalPayment $item
     * @return \Pggns\MidocoApi\Api\Booking\StructType\Midoco_booking_message_norm
     */
    public function addToExternalPayment(\Pggns\MidocoApi\Api\Booking\StructType\ExternalPayment $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Booking\StructType\ExternalPayment) {
            throw new InvalidArgumentException(sprintf('The ExternalPayment property can only contain items of type \Pggns\MidocoApi\Api\Booking\StructType\ExternalPayment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ExternalPayment[] = $item;
        
        return $this;
    }
    /**
     * Get importedDocument value
     * @return \Pggns\MidocoApi\Api\Booking\StructType\ImportedDocument[]
     */
    public function getImportedDocument(): ?array
    {
        return $this->importedDocument;
    }
    /**
     * This method is responsible for validating the values passed to the setImportedDocument method
     * This method is willingly generated in order to preserve the one-line inline validation within the setImportedDocument method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateImportedDocumentForArrayConstraintsFromSetImportedDocument(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midoco_booking_message_normImportedDocumentItem) {
            // validation for constraint: itemType
            if (!$midoco_booking_message_normImportedDocumentItem instanceof \Pggns\MidocoApi\Api\Booking\StructType\ImportedDocument) {
                $invalidValues[] = is_object($midoco_booking_message_normImportedDocumentItem) ? get_class($midoco_booking_message_normImportedDocumentItem) : sprintf('%s(%s)', gettype($midoco_booking_message_normImportedDocumentItem), var_export($midoco_booking_message_normImportedDocumentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The importedDocument property can only contain items of type \Pggns\MidocoApi\Api\Booking\StructType\ImportedDocument, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set importedDocument value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Booking\StructType\ImportedDocument[] $importedDocument
     * @return \Pggns\MidocoApi\Api\Booking\StructType\Midoco_booking_message_norm
     */
    public function setImportedDocument(?array $importedDocument = null): self
    {
        // validation for constraint: array
        if ('' !== ($importedDocumentArrayErrorMessage = self::validateImportedDocumentForArrayConstraintsFromSetImportedDocument($importedDocument))) {
            throw new InvalidArgumentException($importedDocumentArrayErrorMessage, __LINE__);
        }
        $this->importedDocument = $importedDocument;
        
        return $this;
    }
    /**
     * Add item to importedDocument value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Booking\StructType\ImportedDocument $item
     * @return \Pggns\MidocoApi\Api\Booking\StructType\Midoco_booking_message_norm
     */
    public function addToImportedDocument(\Pggns\MidocoApi\Api\Booking\StructType\ImportedDocument $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Booking\StructType\ImportedDocument) {
            throw new InvalidArgumentException(sprintf('The importedDocument property can only contain items of type \Pggns\MidocoApi\Api\Booking\StructType\ImportedDocument, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->importedDocument[] = $item;
        
        return $this;
    }
    /**
     * Get DunningInfo value
     * @return \Pggns\MidocoApi\Api\Booking\StructType\DunningInfo[]
     */
    public function getDunningInfo(): ?array
    {
        return $this->DunningInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setDunningInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDunningInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDunningInfoForArrayConstraintsFromSetDunningInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midoco_booking_message_normDunningInfoItem) {
            // validation for constraint: itemType
            if (!$midoco_booking_message_normDunningInfoItem instanceof \Pggns\MidocoApi\Api\Booking\StructType\DunningInfo) {
                $invalidValues[] = is_object($midoco_booking_message_normDunningInfoItem) ? get_class($midoco_booking_message_normDunningInfoItem) : sprintf('%s(%s)', gettype($midoco_booking_message_normDunningInfoItem), var_export($midoco_booking_message_normDunningInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DunningInfo property can only contain items of type \Pggns\MidocoApi\Api\Booking\StructType\DunningInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set DunningInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Booking\StructType\DunningInfo[] $dunningInfo
     * @return \Pggns\MidocoApi\Api\Booking\StructType\Midoco_booking_message_norm
     */
    public function setDunningInfo(?array $dunningInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($dunningInfoArrayErrorMessage = self::validateDunningInfoForArrayConstraintsFromSetDunningInfo($dunningInfo))) {
            throw new InvalidArgumentException($dunningInfoArrayErrorMessage, __LINE__);
        }
        $this->DunningInfo = $dunningInfo;
        
        return $this;
    }
    /**
     * Add item to DunningInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Booking\StructType\DunningInfo $item
     * @return \Pggns\MidocoApi\Api\Booking\StructType\Midoco_booking_message_norm
     */
    public function addToDunningInfo(\Pggns\MidocoApi\Api\Booking\StructType\DunningInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Booking\StructType\DunningInfo) {
            throw new InvalidArgumentException(sprintf('The DunningInfo property can only contain items of type \Pggns\MidocoApi\Api\Booking\StructType\DunningInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->DunningInfo[] = $item;
        
        return $this;
    }
    /**
     * Get voucher value
     * @return \Pggns\MidocoApi\Api\Booking\StructType\Voucher[]
     */
    public function getVoucher(): ?array
    {
        return $this->voucher;
    }
    /**
     * This method is responsible for validating the values passed to the setVoucher method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVoucher method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateVoucherForArrayConstraintsFromSetVoucher(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midoco_booking_message_normVoucherItem) {
            // validation for constraint: itemType
            if (!$midoco_booking_message_normVoucherItem instanceof \Pggns\MidocoApi\Api\Booking\StructType\Voucher) {
                $invalidValues[] = is_object($midoco_booking_message_normVoucherItem) ? get_class($midoco_booking_message_normVoucherItem) : sprintf('%s(%s)', gettype($midoco_booking_message_normVoucherItem), var_export($midoco_booking_message_normVoucherItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The voucher property can only contain items of type \Pggns\MidocoApi\Api\Booking\StructType\Voucher, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set voucher value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Booking\StructType\Voucher[] $voucher
     * @return \Pggns\MidocoApi\Api\Booking\StructType\Midoco_booking_message_norm
     */
    public function setVoucher(?array $voucher = null): self
    {
        // validation for constraint: array
        if ('' !== ($voucherArrayErrorMessage = self::validateVoucherForArrayConstraintsFromSetVoucher($voucher))) {
            throw new InvalidArgumentException($voucherArrayErrorMessage, __LINE__);
        }
        $this->voucher = $voucher;
        
        return $this;
    }
    /**
     * Add item to voucher value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Booking\StructType\Voucher $item
     * @return \Pggns\MidocoApi\Api\Booking\StructType\Midoco_booking_message_norm
     */
    public function addToVoucher(\Pggns\MidocoApi\Api\Booking\StructType\Voucher $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Booking\StructType\Voucher) {
            throw new InvalidArgumentException(sprintf('The voucher property can only contain items of type \Pggns\MidocoApi\Api\Booking\StructType\Voucher, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->voucher[] = $item;
        
        return $this;
    }
    /**
     * Get verkData value
     * @return \Pggns\MidocoApi\Api\Booking\StructType\VerkDataInfo[]
     */
    public function getVerkData(): ?array
    {
        return $this->verkData;
    }
    /**
     * This method is responsible for validating the values passed to the setVerkData method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVerkData method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateVerkDataForArrayConstraintsFromSetVerkData(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midoco_booking_message_normVerkDataItem) {
            // validation for constraint: itemType
            if (!$midoco_booking_message_normVerkDataItem instanceof \Pggns\MidocoApi\Api\Booking\StructType\VerkDataInfo) {
                $invalidValues[] = is_object($midoco_booking_message_normVerkDataItem) ? get_class($midoco_booking_message_normVerkDataItem) : sprintf('%s(%s)', gettype($midoco_booking_message_normVerkDataItem), var_export($midoco_booking_message_normVerkDataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The verkData property can only contain items of type \Pggns\MidocoApi\Api\Booking\StructType\VerkDataInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set verkData value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Booking\StructType\VerkDataInfo[] $verkData
     * @return \Pggns\MidocoApi\Api\Booking\StructType\Midoco_booking_message_norm
     */
    public function setVerkData(?array $verkData = null): self
    {
        // validation for constraint: array
        if ('' !== ($verkDataArrayErrorMessage = self::validateVerkDataForArrayConstraintsFromSetVerkData($verkData))) {
            throw new InvalidArgumentException($verkDataArrayErrorMessage, __LINE__);
        }
        $this->verkData = $verkData;
        
        return $this;
    }
    /**
     * Add item to verkData value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Booking\StructType\VerkDataInfo $item
     * @return \Pggns\MidocoApi\Api\Booking\StructType\Midoco_booking_message_norm
     */
    public function addToVerkData(\Pggns\MidocoApi\Api\Booking\StructType\VerkDataInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Booking\StructType\VerkDataInfo) {
            throw new InvalidArgumentException(sprintf('The verkData property can only contain items of type \Pggns\MidocoApi\Api\Booking\StructType\VerkDataInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->verkData[] = $item;
        
        return $this;
    }
    /**
     * Get messageVersion value
     * @return int|null
     */
    public function getMessageVersion(): ?int
    {
        return $this->messageVersion;
    }
    /**
     * Set messageVersion value
     * @param int $messageVersion
     * @return \Pggns\MidocoApi\Api\Booking\StructType\Midoco_booking_message_norm
     */
    public function setMessageVersion(?int $messageVersion = 1): self
    {
        // validation for constraint: int
        if (!is_null($messageVersion) && !(is_int($messageVersion) || ctype_digit($messageVersion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($messageVersion, true), gettype($messageVersion)), __LINE__);
        }
        $this->messageVersion = $messageVersion;
        
        return $this;
    }
}
