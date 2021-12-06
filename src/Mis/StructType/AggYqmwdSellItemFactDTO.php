<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AggYqmwdSellItemFactDTO StructType
 * @subpackage Structs
 */
class AggYqmwdSellItemFactDTO extends AbstractStructBase
{
    /**
     * The accomodationCode
     * @var string|null
     */
    protected ?string $accomodationCode = null;
    /**
     * The accomodationDescription
     * @var string|null
     */
    protected ?string $accomodationDescription = null;
    /**
     * The addressType
     * @var string|null
     */
    protected ?string $addressType = null;
    /**
     * The agCity
     * @var string|null
     */
    protected ?string $agCity = null;
    /**
     * The agCountryCode
     * @var string|null
     */
    protected ?string $agCountryCode = null;
    /**
     * The agEndorsement
     * @var string|null
     */
    protected ?string $agEndorsement = null;
    /**
     * The agOrganisationName
     * @var string|null
     */
    protected ?string $agOrganisationName = null;
    /**
     * The agPhoneticCity
     * @var string|null
     */
    protected ?string $agPhoneticCity = null;
    /**
     * The agPhoneticName
     * @var string|null
     */
    protected ?string $agPhoneticName = null;
    /**
     * The agPhoneticStreet
     * @var string|null
     */
    protected ?string $agPhoneticStreet = null;
    /**
     * The agPostalCode
     * @var string|null
     */
    protected ?string $agPostalCode = null;
    /**
     * The agState
     * @var string|null
     */
    protected ?string $agState = null;
    /**
     * The agStreet
     * @var string|null
     */
    protected ?string $agStreet = null;
    /**
     * The agStreetNo
     * @var string|null
     */
    protected ?string $agStreetNo = null;
    /**
     * The agencyId
     * @var int|null
     */
    protected ?int $agencyId = null;
    /**
     * The arrivalTime
     * @var string|null
     */
    protected ?string $arrivalTime = null;
    /**
     * The attrib10Value
     * @var string|null
     */
    protected ?string $attrib10Value = null;
    /**
     * The attrib1Value
     * @var string|null
     */
    protected ?string $attrib1Value = null;
    /**
     * The attrib2Value
     * @var string|null
     */
    protected ?string $attrib2Value = null;
    /**
     * The attrib3Value
     * @var string|null
     */
    protected ?string $attrib3Value = null;
    /**
     * The attrib4Value
     * @var string|null
     */
    protected ?string $attrib4Value = null;
    /**
     * The attrib5Value
     * @var string|null
     */
    protected ?string $attrib5Value = null;
    /**
     * The attrib6Value
     * @var string|null
     */
    protected ?string $attrib6Value = null;
    /**
     * The attrib7Value
     * @var string|null
     */
    protected ?string $attrib7Value = null;
    /**
     * The attrib8Value
     * @var string|null
     */
    protected ?string $attrib8Value = null;
    /**
     * The attrib9Value
     * @var string|null
     */
    protected ?string $attrib9Value = null;
    /**
     * The attributeId
     * @var int|null
     */
    protected ?int $attributeId = null;
    /**
     * The bookingId
     * @var string|null
     */
    protected ?string $bookingId = null;
    /**
     * The CDatabaseDate
     * @var string|null
     */
    protected ?string $CDatabaseDate = null;
    /**
     * The CDayNoInMonth
     * @var int|null
     */
    protected ?int $CDayNoInMonth = null;
    /**
     * The CDayOfWeek
     * @var string|null
     */
    protected ?string $CDayOfWeek = null;
    /**
     * The CMonth
     * @var int|null
     */
    protected ?int $CMonth = null;
    /**
     * The CQuarter
     * @var int|null
     */
    protected ?int $CQuarter = null;
    /**
     * The CWeekNoInYear
     * @var int|null
     */
    protected ?int $CWeekNoInYear = null;
    /**
     * The CWeekend
     * @var bool|null
     */
    protected ?bool $CWeekend = null;
    /**
     * The CYear
     * @var int|null
     */
    protected ?int $CYear = null;
    /**
     * The calcMediatorAmount
     * @var float|null
     */
    protected ?float $calcMediatorAmount = null;
    /**
     * The calcRevenueAmount
     * @var float|null
     */
    protected ?float $calcRevenueAmount = null;
    /**
     * The carrier
     * @var string|null
     */
    protected ?string $carrier = null;
    /**
     * The catalogKey
     * @var bool|null
     */
    protected ?bool $catalogKey = null;
    /**
     * The city
     * @var string|null
     */
    protected ?string $city = null;
    /**
     * The commisionLevelId
     * @var string|null
     */
    protected ?string $commisionLevelId = null;
    /**
     * The commissionAmount
     * @var float|null
     */
    protected ?float $commissionAmount = null;
    /**
     * The cooperationId
     * @var string|null
     */
    protected ?string $cooperationId = null;
    /**
     * The costCenter
     * @var string|null
     */
    protected ?string $costCenter = null;
    /**
     * The countryCode
     * @var string|null
     */
    protected ?string $countryCode = null;
    /**
     * The creationDateId
     * @var int|null
     */
    protected ?int $creationDateId = null;
    /**
     * The creationUserId
     * @var int|null
     */
    protected ?int $creationUserId = null;
    /**
     * The cruiseCode
     * @var string|null
     */
    protected ?string $cruiseCode = null;
    /**
     * The cruiseDescription
     * @var string|null
     */
    protected ?string $cruiseDescription = null;
    /**
     * The custCity
     * @var string|null
     */
    protected ?string $custCity = null;
    /**
     * The custCountry
     * @var string|null
     */
    protected ?string $custCountry = null;
    /**
     * The custForename
     * @var string|null
     */
    protected ?string $custForename = null;
    /**
     * The custName
     * @var string|null
     */
    protected ?string $custName = null;
    /**
     * The custPostalCode
     * @var string|null
     */
    protected ?string $custPostalCode = null;
    /**
     * The custState
     * @var string|null
     */
    protected ?string $custState = null;
    /**
     * The custStreet
     * @var string|null
     */
    protected ?string $custStreet = null;
    /**
     * The custStreetNo
     * @var string|null
     */
    protected ?string $custStreetNo = null;
    /**
     * The custType
     * @var string|null
     */
    protected ?string $custType = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The departureCode
     * @var string|null
     */
    protected ?string $departureCode = null;
    /**
     * The departureCodeId
     * @var int|null
     */
    protected ?int $departureCodeId = null;
    /**
     * The departureTime
     * @var string|null
     */
    protected ?string $departureTime = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The destinationCode
     * @var string|null
     */
    protected ?string $destinationCode = null;
    /**
     * The destinationCodeId
     * @var int|null
     */
    protected ?int $destinationCodeId = null;
    /**
     * The destinationKey
     * @var string|null
     */
    protected ?string $destinationKey = null;
    /**
     * The durationKey
     * @var string|null
     */
    protected ?string $durationKey = null;
    /**
     * The EDatabaseDate
     * @var string|null
     */
    protected ?string $EDatabaseDate = null;
    /**
     * The EDayNoInMonth
     * @var int|null
     */
    protected ?int $EDayNoInMonth = null;
    /**
     * The EDayOfWeek
     * @var string|null
     */
    protected ?string $EDayOfWeek = null;
    /**
     * The EMonth
     * @var int|null
     */
    protected ?int $EMonth = null;
    /**
     * The EQuarter
     * @var int|null
     */
    protected ?int $EQuarter = null;
    /**
     * The EWeekNoInYear
     * @var int|null
     */
    protected ?int $EWeekNoInYear = null;
    /**
     * The EWeekend
     * @var bool|null
     */
    protected ?bool $EWeekend = null;
    /**
     * The EYear
     * @var int|null
     */
    protected ?int $EYear = null;
    /**
     * The endTravelDateId
     * @var int|null
     */
    protected ?int $endTravelDateId = null;
    /**
     * The extSystem
     * @var string|null
     */
    protected ?string $extSystem = null;
    /**
     * The factCount
     * @var int|null
     */
    protected ?int $factCount = null;
    /**
     * The flightNo
     * @var string|null
     */
    protected ?string $flightNo = null;
    /**
     * The forename
     * @var string|null
     */
    protected ?string $forename = null;
    /**
     * The grantedRevenue
     * @var float|null
     */
    protected ?float $grantedRevenue = null;
    /**
     * The group1
     * @var string|null
     */
    protected ?string $group1 = null;
    /**
     * The group2
     * @var string|null
     */
    protected ?string $group2 = null;
    /**
     * The group3
     * @var string|null
     */
    protected ?string $group3 = null;
    /**
     * The inkassoType
     * @var string|null
     */
    protected ?string $inkassoType = null;
    /**
     * The isChild
     * @var string|null
     */
    protected ?string $isChild = null;
    /**
     * The isMain
     * @var string|null
     */
    protected ?string $isMain = null;
    /**
     * The isPackage
     * @var string|null
     */
    protected ?string $isPackage = null;
    /**
     * The itemType
     * @var string|null
     */
    protected ?string $itemType = null;
    /**
     * The itemTypeId
     * @var int|null
     */
    protected ?int $itemTypeId = null;
    /**
     * The locationId
     * @var int|null
     */
    protected ?int $locationId = null;
    /**
     * The medCity
     * @var string|null
     */
    protected ?string $medCity = null;
    /**
     * The medCountryCode
     * @var string|null
     */
    protected ?string $medCountryCode = null;
    /**
     * The medEndorsement
     * @var string|null
     */
    protected ?string $medEndorsement = null;
    /**
     * The medOrganisationName
     * @var string|null
     */
    protected ?string $medOrganisationName = null;
    /**
     * The medPhoneticCity
     * @var string|null
     */
    protected ?string $medPhoneticCity = null;
    /**
     * The medPhoneticName
     * @var string|null
     */
    protected ?string $medPhoneticName = null;
    /**
     * The medPhoneticStreet
     * @var string|null
     */
    protected ?string $medPhoneticStreet = null;
    /**
     * The medPostalCode
     * @var string|null
     */
    protected ?string $medPostalCode = null;
    /**
     * The medState
     * @var string|null
     */
    protected ?string $medState = null;
    /**
     * The medStreet
     * @var string|null
     */
    protected ?string $medStreet = null;
    /**
     * The medStreetNo
     * @var string|null
     */
    protected ?string $medStreetNo = null;
    /**
     * The mediatorAffiliate
     * @var string|null
     */
    protected ?string $mediatorAffiliate = null;
    /**
     * The mediatorId
     * @var int|null
     */
    protected ?int $mediatorId = null;
    /**
     * The mediatorType
     * @var string|null
     */
    protected ?string $mediatorType = null;
    /**
     * The midocoAgencyId
     * @var string|null
     */
    protected ?string $midocoAgencyId = null;
    /**
     * The midocoCreationUserId
     * @var int|null
     */
    protected ?int $midocoCreationUserId = null;
    /**
     * The midocoCustomerId
     * @var int|null
     */
    protected ?int $midocoCustomerId = null;
    /**
     * The midocoItemId
     * @var int|null
     */
    protected ?int $midocoItemId = null;
    /**
     * The midocoMediatorId
     * @var string|null
     */
    protected ?string $midocoMediatorId = null;
    /**
     * The midocoOrderId
     * @var int|null
     */
    protected ?int $midocoOrderId = null;
    /**
     * The midocoOrgUnit
     * @var string|null
     */
    protected ?string $midocoOrgUnit = null;
    /**
     * The midocoOrigSupplierId
     * @var string|null
     */
    protected ?string $midocoOrigSupplierId = null;
    /**
     * The midocoSupplierId
     * @var string|null
     */
    protected ?string $midocoSupplierId = null;
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The noOfPersons
     * @var int|null
     */
    protected ?int $noOfPersons = null;
    /**
     * The orgUnitId
     * @var int|null
     */
    protected ?int $orgUnitId = null;
    /**
     * The originalSupplierId
     * @var int|null
     */
    protected ?int $originalSupplierId = null;
    /**
     * The packageDestination
     * @var string|null
     */
    protected ?string $packageDestination = null;
    /**
     * The paidMediatorAmount
     * @var float|null
     */
    protected ?float $paidMediatorAmount = null;
    /**
     * The paymentType
     * @var string|null
     */
    protected ?string $paymentType = null;
    /**
     * The personsKey
     * @var string|null
     */
    protected ?string $personsKey = null;
    /**
     * The postalCode
     * @var string|null
     */
    protected ?string $postalCode = null;
    /**
     * The postalCodeFirst1
     * @var string|null
     */
    protected ?string $postalCodeFirst1 = null;
    /**
     * The postalCodeFirst2
     * @var string|null
     */
    protected ?string $postalCodeFirst2 = null;
    /**
     * The postalCodeFirst3
     * @var string|null
     */
    protected ?string $postalCodeFirst3 = null;
    /**
     * The postalCodeFirst4
     * @var string|null
     */
    protected ?string $postalCodeFirst4 = null;
    /**
     * The productType
     * @var string|null
     */
    protected ?string $productType = null;
    /**
     * The productTypeId
     * @var int|null
     */
    protected ?int $productTypeId = null;
    /**
     * The purchaseSaleId
     * @var int|null
     */
    protected ?int $purchaseSaleId = null;
    /**
     * The returnArrivalTime
     * @var string|null
     */
    protected ?string $returnArrivalTime = null;
    /**
     * The returnCarrier
     * @var string|null
     */
    protected ?string $returnCarrier = null;
    /**
     * The returnDepartureCode
     * @var string|null
     */
    protected ?string $returnDepartureCode = null;
    /**
     * The returnDepartureDescription
     * @var string|null
     */
    protected ?string $returnDepartureDescription = null;
    /**
     * The returnDepartureTime
     * @var string|null
     */
    protected ?string $returnDepartureTime = null;
    /**
     * The returnDestinationCode
     * @var string|null
     */
    protected ?string $returnDestinationCode = null;
    /**
     * The returnDestinationDescription
     * @var string|null
     */
    protected ?string $returnDestinationDescription = null;
    /**
     * The returnFlightNo
     * @var string|null
     */
    protected ?string $returnFlightNo = null;
    /**
     * The saleAmount
     * @var float|null
     */
    protected ?float $saleAmount = null;
    /**
     * The sellItemId
     * @var int|null
     */
    protected ?int $sellItemId = null;
    /**
     * The state
     * @var string|null
     */
    protected ?string $state = null;
    /**
     * The status
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * The statusId
     * @var int|null
     */
    protected ?int $statusId = null;
    /**
     * The subAgency
     * @var string|null
     */
    protected ?string $subAgency = null;
    /**
     * The supplierId
     * @var int|null
     */
    protected ?int $supplierId = null;
    /**
     * The TDatabaseDate
     * @var string|null
     */
    protected ?string $TDatabaseDate = null;
    /**
     * The TDayNoInMonth
     * @var int|null
     */
    protected ?int $TDayNoInMonth = null;
    /**
     * The TDayOfWeek
     * @var string|null
     */
    protected ?string $TDayOfWeek = null;
    /**
     * The TMonth
     * @var int|null
     */
    protected ?int $TMonth = null;
    /**
     * The TQuarter
     * @var int|null
     */
    protected ?int $TQuarter = null;
    /**
     * The TWeekNoInYear
     * @var int|null
     */
    protected ?int $TWeekNoInYear = null;
    /**
     * The TWeekend
     * @var bool|null
     */
    protected ?bool $TWeekend = null;
    /**
     * The TYear
     * @var int|null
     */
    protected ?int $TYear = null;
    /**
     * The taxPartPercent
     * @var float|null
     */
    protected ?float $taxPartPercent = null;
    /**
     * The totalAmount
     * @var float|null
     */
    protected ?float $totalAmount = null;
    /**
     * The transportKey
     * @var string|null
     */
    protected ?string $transportKey = null;
    /**
     * The travelDateId
     * @var int|null
     */
    protected ?int $travelDateId = null;
    /**
     * The travelDuration
     * @var int|null
     */
    protected ?int $travelDuration = null;
    /**
     * The travelPrice
     * @var float|null
     */
    protected ?float $travelPrice = null;
    /**
     * The travelType
     * @var string|null
     */
    protected ?string $travelType = null;
    /**
     * The traveltypeKey
     * @var string|null
     */
    protected ?string $traveltypeKey = null;
    /**
     * The turnaroundPoint
     * @var string|null
     */
    protected ?string $turnaroundPoint = null;
    /**
     * Constructor method for AggYqmwdSellItemFactDTO
     * @uses AggYqmwdSellItemFactDTO::setAccomodationCode()
     * @uses AggYqmwdSellItemFactDTO::setAccomodationDescription()
     * @uses AggYqmwdSellItemFactDTO::setAddressType()
     * @uses AggYqmwdSellItemFactDTO::setAgCity()
     * @uses AggYqmwdSellItemFactDTO::setAgCountryCode()
     * @uses AggYqmwdSellItemFactDTO::setAgEndorsement()
     * @uses AggYqmwdSellItemFactDTO::setAgOrganisationName()
     * @uses AggYqmwdSellItemFactDTO::setAgPhoneticCity()
     * @uses AggYqmwdSellItemFactDTO::setAgPhoneticName()
     * @uses AggYqmwdSellItemFactDTO::setAgPhoneticStreet()
     * @uses AggYqmwdSellItemFactDTO::setAgPostalCode()
     * @uses AggYqmwdSellItemFactDTO::setAgState()
     * @uses AggYqmwdSellItemFactDTO::setAgStreet()
     * @uses AggYqmwdSellItemFactDTO::setAgStreetNo()
     * @uses AggYqmwdSellItemFactDTO::setAgencyId()
     * @uses AggYqmwdSellItemFactDTO::setArrivalTime()
     * @uses AggYqmwdSellItemFactDTO::setAttrib10Value()
     * @uses AggYqmwdSellItemFactDTO::setAttrib1Value()
     * @uses AggYqmwdSellItemFactDTO::setAttrib2Value()
     * @uses AggYqmwdSellItemFactDTO::setAttrib3Value()
     * @uses AggYqmwdSellItemFactDTO::setAttrib4Value()
     * @uses AggYqmwdSellItemFactDTO::setAttrib5Value()
     * @uses AggYqmwdSellItemFactDTO::setAttrib6Value()
     * @uses AggYqmwdSellItemFactDTO::setAttrib7Value()
     * @uses AggYqmwdSellItemFactDTO::setAttrib8Value()
     * @uses AggYqmwdSellItemFactDTO::setAttrib9Value()
     * @uses AggYqmwdSellItemFactDTO::setAttributeId()
     * @uses AggYqmwdSellItemFactDTO::setBookingId()
     * @uses AggYqmwdSellItemFactDTO::setCDatabaseDate()
     * @uses AggYqmwdSellItemFactDTO::setCDayNoInMonth()
     * @uses AggYqmwdSellItemFactDTO::setCDayOfWeek()
     * @uses AggYqmwdSellItemFactDTO::setCMonth()
     * @uses AggYqmwdSellItemFactDTO::setCQuarter()
     * @uses AggYqmwdSellItemFactDTO::setCWeekNoInYear()
     * @uses AggYqmwdSellItemFactDTO::setCWeekend()
     * @uses AggYqmwdSellItemFactDTO::setCYear()
     * @uses AggYqmwdSellItemFactDTO::setCalcMediatorAmount()
     * @uses AggYqmwdSellItemFactDTO::setCalcRevenueAmount()
     * @uses AggYqmwdSellItemFactDTO::setCarrier()
     * @uses AggYqmwdSellItemFactDTO::setCatalogKey()
     * @uses AggYqmwdSellItemFactDTO::setCity()
     * @uses AggYqmwdSellItemFactDTO::setCommisionLevelId()
     * @uses AggYqmwdSellItemFactDTO::setCommissionAmount()
     * @uses AggYqmwdSellItemFactDTO::setCooperationId()
     * @uses AggYqmwdSellItemFactDTO::setCostCenter()
     * @uses AggYqmwdSellItemFactDTO::setCountryCode()
     * @uses AggYqmwdSellItemFactDTO::setCreationDateId()
     * @uses AggYqmwdSellItemFactDTO::setCreationUserId()
     * @uses AggYqmwdSellItemFactDTO::setCruiseCode()
     * @uses AggYqmwdSellItemFactDTO::setCruiseDescription()
     * @uses AggYqmwdSellItemFactDTO::setCustCity()
     * @uses AggYqmwdSellItemFactDTO::setCustCountry()
     * @uses AggYqmwdSellItemFactDTO::setCustForename()
     * @uses AggYqmwdSellItemFactDTO::setCustName()
     * @uses AggYqmwdSellItemFactDTO::setCustPostalCode()
     * @uses AggYqmwdSellItemFactDTO::setCustState()
     * @uses AggYqmwdSellItemFactDTO::setCustStreet()
     * @uses AggYqmwdSellItemFactDTO::setCustStreetNo()
     * @uses AggYqmwdSellItemFactDTO::setCustType()
     * @uses AggYqmwdSellItemFactDTO::setCustomerId()
     * @uses AggYqmwdSellItemFactDTO::setDepartureCode()
     * @uses AggYqmwdSellItemFactDTO::setDepartureCodeId()
     * @uses AggYqmwdSellItemFactDTO::setDepartureTime()
     * @uses AggYqmwdSellItemFactDTO::setDescription()
     * @uses AggYqmwdSellItemFactDTO::setDestinationCode()
     * @uses AggYqmwdSellItemFactDTO::setDestinationCodeId()
     * @uses AggYqmwdSellItemFactDTO::setDestinationKey()
     * @uses AggYqmwdSellItemFactDTO::setDurationKey()
     * @uses AggYqmwdSellItemFactDTO::setEDatabaseDate()
     * @uses AggYqmwdSellItemFactDTO::setEDayNoInMonth()
     * @uses AggYqmwdSellItemFactDTO::setEDayOfWeek()
     * @uses AggYqmwdSellItemFactDTO::setEMonth()
     * @uses AggYqmwdSellItemFactDTO::setEQuarter()
     * @uses AggYqmwdSellItemFactDTO::setEWeekNoInYear()
     * @uses AggYqmwdSellItemFactDTO::setEWeekend()
     * @uses AggYqmwdSellItemFactDTO::setEYear()
     * @uses AggYqmwdSellItemFactDTO::setEndTravelDateId()
     * @uses AggYqmwdSellItemFactDTO::setExtSystem()
     * @uses AggYqmwdSellItemFactDTO::setFactCount()
     * @uses AggYqmwdSellItemFactDTO::setFlightNo()
     * @uses AggYqmwdSellItemFactDTO::setForename()
     * @uses AggYqmwdSellItemFactDTO::setGrantedRevenue()
     * @uses AggYqmwdSellItemFactDTO::setGroup1()
     * @uses AggYqmwdSellItemFactDTO::setGroup2()
     * @uses AggYqmwdSellItemFactDTO::setGroup3()
     * @uses AggYqmwdSellItemFactDTO::setInkassoType()
     * @uses AggYqmwdSellItemFactDTO::setIsChild()
     * @uses AggYqmwdSellItemFactDTO::setIsMain()
     * @uses AggYqmwdSellItemFactDTO::setIsPackage()
     * @uses AggYqmwdSellItemFactDTO::setItemType()
     * @uses AggYqmwdSellItemFactDTO::setItemTypeId()
     * @uses AggYqmwdSellItemFactDTO::setLocationId()
     * @uses AggYqmwdSellItemFactDTO::setMedCity()
     * @uses AggYqmwdSellItemFactDTO::setMedCountryCode()
     * @uses AggYqmwdSellItemFactDTO::setMedEndorsement()
     * @uses AggYqmwdSellItemFactDTO::setMedOrganisationName()
     * @uses AggYqmwdSellItemFactDTO::setMedPhoneticCity()
     * @uses AggYqmwdSellItemFactDTO::setMedPhoneticName()
     * @uses AggYqmwdSellItemFactDTO::setMedPhoneticStreet()
     * @uses AggYqmwdSellItemFactDTO::setMedPostalCode()
     * @uses AggYqmwdSellItemFactDTO::setMedState()
     * @uses AggYqmwdSellItemFactDTO::setMedStreet()
     * @uses AggYqmwdSellItemFactDTO::setMedStreetNo()
     * @uses AggYqmwdSellItemFactDTO::setMediatorAffiliate()
     * @uses AggYqmwdSellItemFactDTO::setMediatorId()
     * @uses AggYqmwdSellItemFactDTO::setMediatorType()
     * @uses AggYqmwdSellItemFactDTO::setMidocoAgencyId()
     * @uses AggYqmwdSellItemFactDTO::setMidocoCreationUserId()
     * @uses AggYqmwdSellItemFactDTO::setMidocoCustomerId()
     * @uses AggYqmwdSellItemFactDTO::setMidocoItemId()
     * @uses AggYqmwdSellItemFactDTO::setMidocoMediatorId()
     * @uses AggYqmwdSellItemFactDTO::setMidocoOrderId()
     * @uses AggYqmwdSellItemFactDTO::setMidocoOrgUnit()
     * @uses AggYqmwdSellItemFactDTO::setMidocoOrigSupplierId()
     * @uses AggYqmwdSellItemFactDTO::setMidocoSupplierId()
     * @uses AggYqmwdSellItemFactDTO::setName()
     * @uses AggYqmwdSellItemFactDTO::setNoOfPersons()
     * @uses AggYqmwdSellItemFactDTO::setOrgUnitId()
     * @uses AggYqmwdSellItemFactDTO::setOriginalSupplierId()
     * @uses AggYqmwdSellItemFactDTO::setPackageDestination()
     * @uses AggYqmwdSellItemFactDTO::setPaidMediatorAmount()
     * @uses AggYqmwdSellItemFactDTO::setPaymentType()
     * @uses AggYqmwdSellItemFactDTO::setPersonsKey()
     * @uses AggYqmwdSellItemFactDTO::setPostalCode()
     * @uses AggYqmwdSellItemFactDTO::setPostalCodeFirst1()
     * @uses AggYqmwdSellItemFactDTO::setPostalCodeFirst2()
     * @uses AggYqmwdSellItemFactDTO::setPostalCodeFirst3()
     * @uses AggYqmwdSellItemFactDTO::setPostalCodeFirst4()
     * @uses AggYqmwdSellItemFactDTO::setProductType()
     * @uses AggYqmwdSellItemFactDTO::setProductTypeId()
     * @uses AggYqmwdSellItemFactDTO::setPurchaseSaleId()
     * @uses AggYqmwdSellItemFactDTO::setReturnArrivalTime()
     * @uses AggYqmwdSellItemFactDTO::setReturnCarrier()
     * @uses AggYqmwdSellItemFactDTO::setReturnDepartureCode()
     * @uses AggYqmwdSellItemFactDTO::setReturnDepartureDescription()
     * @uses AggYqmwdSellItemFactDTO::setReturnDepartureTime()
     * @uses AggYqmwdSellItemFactDTO::setReturnDestinationCode()
     * @uses AggYqmwdSellItemFactDTO::setReturnDestinationDescription()
     * @uses AggYqmwdSellItemFactDTO::setReturnFlightNo()
     * @uses AggYqmwdSellItemFactDTO::setSaleAmount()
     * @uses AggYqmwdSellItemFactDTO::setSellItemId()
     * @uses AggYqmwdSellItemFactDTO::setState()
     * @uses AggYqmwdSellItemFactDTO::setStatus()
     * @uses AggYqmwdSellItemFactDTO::setStatusId()
     * @uses AggYqmwdSellItemFactDTO::setSubAgency()
     * @uses AggYqmwdSellItemFactDTO::setSupplierId()
     * @uses AggYqmwdSellItemFactDTO::setTDatabaseDate()
     * @uses AggYqmwdSellItemFactDTO::setTDayNoInMonth()
     * @uses AggYqmwdSellItemFactDTO::setTDayOfWeek()
     * @uses AggYqmwdSellItemFactDTO::setTMonth()
     * @uses AggYqmwdSellItemFactDTO::setTQuarter()
     * @uses AggYqmwdSellItemFactDTO::setTWeekNoInYear()
     * @uses AggYqmwdSellItemFactDTO::setTWeekend()
     * @uses AggYqmwdSellItemFactDTO::setTYear()
     * @uses AggYqmwdSellItemFactDTO::setTaxPartPercent()
     * @uses AggYqmwdSellItemFactDTO::setTotalAmount()
     * @uses AggYqmwdSellItemFactDTO::setTransportKey()
     * @uses AggYqmwdSellItemFactDTO::setTravelDateId()
     * @uses AggYqmwdSellItemFactDTO::setTravelDuration()
     * @uses AggYqmwdSellItemFactDTO::setTravelPrice()
     * @uses AggYqmwdSellItemFactDTO::setTravelType()
     * @uses AggYqmwdSellItemFactDTO::setTraveltypeKey()
     * @uses AggYqmwdSellItemFactDTO::setTurnaroundPoint()
     * @param string $accomodationCode
     * @param string $accomodationDescription
     * @param string $addressType
     * @param string $agCity
     * @param string $agCountryCode
     * @param string $agEndorsement
     * @param string $agOrganisationName
     * @param string $agPhoneticCity
     * @param string $agPhoneticName
     * @param string $agPhoneticStreet
     * @param string $agPostalCode
     * @param string $agState
     * @param string $agStreet
     * @param string $agStreetNo
     * @param int $agencyId
     * @param string $arrivalTime
     * @param string $attrib10Value
     * @param string $attrib1Value
     * @param string $attrib2Value
     * @param string $attrib3Value
     * @param string $attrib4Value
     * @param string $attrib5Value
     * @param string $attrib6Value
     * @param string $attrib7Value
     * @param string $attrib8Value
     * @param string $attrib9Value
     * @param int $attributeId
     * @param string $bookingId
     * @param string $cDatabaseDate
     * @param int $cDayNoInMonth
     * @param string $cDayOfWeek
     * @param int $cMonth
     * @param int $cQuarter
     * @param int $cWeekNoInYear
     * @param bool $cWeekend
     * @param int $cYear
     * @param float $calcMediatorAmount
     * @param float $calcRevenueAmount
     * @param string $carrier
     * @param bool $catalogKey
     * @param string $city
     * @param string $commisionLevelId
     * @param float $commissionAmount
     * @param string $cooperationId
     * @param string $costCenter
     * @param string $countryCode
     * @param int $creationDateId
     * @param int $creationUserId
     * @param string $cruiseCode
     * @param string $cruiseDescription
     * @param string $custCity
     * @param string $custCountry
     * @param string $custForename
     * @param string $custName
     * @param string $custPostalCode
     * @param string $custState
     * @param string $custStreet
     * @param string $custStreetNo
     * @param string $custType
     * @param int $customerId
     * @param string $departureCode
     * @param int $departureCodeId
     * @param string $departureTime
     * @param string $description
     * @param string $destinationCode
     * @param int $destinationCodeId
     * @param string $destinationKey
     * @param string $durationKey
     * @param string $eDatabaseDate
     * @param int $eDayNoInMonth
     * @param string $eDayOfWeek
     * @param int $eMonth
     * @param int $eQuarter
     * @param int $eWeekNoInYear
     * @param bool $eWeekend
     * @param int $eYear
     * @param int $endTravelDateId
     * @param string $extSystem
     * @param int $factCount
     * @param string $flightNo
     * @param string $forename
     * @param float $grantedRevenue
     * @param string $group1
     * @param string $group2
     * @param string $group3
     * @param string $inkassoType
     * @param string $isChild
     * @param string $isMain
     * @param string $isPackage
     * @param string $itemType
     * @param int $itemTypeId
     * @param int $locationId
     * @param string $medCity
     * @param string $medCountryCode
     * @param string $medEndorsement
     * @param string $medOrganisationName
     * @param string $medPhoneticCity
     * @param string $medPhoneticName
     * @param string $medPhoneticStreet
     * @param string $medPostalCode
     * @param string $medState
     * @param string $medStreet
     * @param string $medStreetNo
     * @param string $mediatorAffiliate
     * @param int $mediatorId
     * @param string $mediatorType
     * @param string $midocoAgencyId
     * @param int $midocoCreationUserId
     * @param int $midocoCustomerId
     * @param int $midocoItemId
     * @param string $midocoMediatorId
     * @param int $midocoOrderId
     * @param string $midocoOrgUnit
     * @param string $midocoOrigSupplierId
     * @param string $midocoSupplierId
     * @param string $name
     * @param int $noOfPersons
     * @param int $orgUnitId
     * @param int $originalSupplierId
     * @param string $packageDestination
     * @param float $paidMediatorAmount
     * @param string $paymentType
     * @param string $personsKey
     * @param string $postalCode
     * @param string $postalCodeFirst1
     * @param string $postalCodeFirst2
     * @param string $postalCodeFirst3
     * @param string $postalCodeFirst4
     * @param string $productType
     * @param int $productTypeId
     * @param int $purchaseSaleId
     * @param string $returnArrivalTime
     * @param string $returnCarrier
     * @param string $returnDepartureCode
     * @param string $returnDepartureDescription
     * @param string $returnDepartureTime
     * @param string $returnDestinationCode
     * @param string $returnDestinationDescription
     * @param string $returnFlightNo
     * @param float $saleAmount
     * @param int $sellItemId
     * @param string $state
     * @param string $status
     * @param int $statusId
     * @param string $subAgency
     * @param int $supplierId
     * @param string $tDatabaseDate
     * @param int $tDayNoInMonth
     * @param string $tDayOfWeek
     * @param int $tMonth
     * @param int $tQuarter
     * @param int $tWeekNoInYear
     * @param bool $tWeekend
     * @param int $tYear
     * @param float $taxPartPercent
     * @param float $totalAmount
     * @param string $transportKey
     * @param int $travelDateId
     * @param int $travelDuration
     * @param float $travelPrice
     * @param string $travelType
     * @param string $traveltypeKey
     * @param string $turnaroundPoint
     */
    public function __construct(?string $accomodationCode = null, ?string $accomodationDescription = null, ?string $addressType = null, ?string $agCity = null, ?string $agCountryCode = null, ?string $agEndorsement = null, ?string $agOrganisationName = null, ?string $agPhoneticCity = null, ?string $agPhoneticName = null, ?string $agPhoneticStreet = null, ?string $agPostalCode = null, ?string $agState = null, ?string $agStreet = null, ?string $agStreetNo = null, ?int $agencyId = null, ?string $arrivalTime = null, ?string $attrib10Value = null, ?string $attrib1Value = null, ?string $attrib2Value = null, ?string $attrib3Value = null, ?string $attrib4Value = null, ?string $attrib5Value = null, ?string $attrib6Value = null, ?string $attrib7Value = null, ?string $attrib8Value = null, ?string $attrib9Value = null, ?int $attributeId = null, ?string $bookingId = null, ?string $cDatabaseDate = null, ?int $cDayNoInMonth = null, ?string $cDayOfWeek = null, ?int $cMonth = null, ?int $cQuarter = null, ?int $cWeekNoInYear = null, ?bool $cWeekend = null, ?int $cYear = null, ?float $calcMediatorAmount = null, ?float $calcRevenueAmount = null, ?string $carrier = null, ?bool $catalogKey = null, ?string $city = null, ?string $commisionLevelId = null, ?float $commissionAmount = null, ?string $cooperationId = null, ?string $costCenter = null, ?string $countryCode = null, ?int $creationDateId = null, ?int $creationUserId = null, ?string $cruiseCode = null, ?string $cruiseDescription = null, ?string $custCity = null, ?string $custCountry = null, ?string $custForename = null, ?string $custName = null, ?string $custPostalCode = null, ?string $custState = null, ?string $custStreet = null, ?string $custStreetNo = null, ?string $custType = null, ?int $customerId = null, ?string $departureCode = null, ?int $departureCodeId = null, ?string $departureTime = null, ?string $description = null, ?string $destinationCode = null, ?int $destinationCodeId = null, ?string $destinationKey = null, ?string $durationKey = null, ?string $eDatabaseDate = null, ?int $eDayNoInMonth = null, ?string $eDayOfWeek = null, ?int $eMonth = null, ?int $eQuarter = null, ?int $eWeekNoInYear = null, ?bool $eWeekend = null, ?int $eYear = null, ?int $endTravelDateId = null, ?string $extSystem = null, ?int $factCount = null, ?string $flightNo = null, ?string $forename = null, ?float $grantedRevenue = null, ?string $group1 = null, ?string $group2 = null, ?string $group3 = null, ?string $inkassoType = null, ?string $isChild = null, ?string $isMain = null, ?string $isPackage = null, ?string $itemType = null, ?int $itemTypeId = null, ?int $locationId = null, ?string $medCity = null, ?string $medCountryCode = null, ?string $medEndorsement = null, ?string $medOrganisationName = null, ?string $medPhoneticCity = null, ?string $medPhoneticName = null, ?string $medPhoneticStreet = null, ?string $medPostalCode = null, ?string $medState = null, ?string $medStreet = null, ?string $medStreetNo = null, ?string $mediatorAffiliate = null, ?int $mediatorId = null, ?string $mediatorType = null, ?string $midocoAgencyId = null, ?int $midocoCreationUserId = null, ?int $midocoCustomerId = null, ?int $midocoItemId = null, ?string $midocoMediatorId = null, ?int $midocoOrderId = null, ?string $midocoOrgUnit = null, ?string $midocoOrigSupplierId = null, ?string $midocoSupplierId = null, ?string $name = null, ?int $noOfPersons = null, ?int $orgUnitId = null, ?int $originalSupplierId = null, ?string $packageDestination = null, ?float $paidMediatorAmount = null, ?string $paymentType = null, ?string $personsKey = null, ?string $postalCode = null, ?string $postalCodeFirst1 = null, ?string $postalCodeFirst2 = null, ?string $postalCodeFirst3 = null, ?string $postalCodeFirst4 = null, ?string $productType = null, ?int $productTypeId = null, ?int $purchaseSaleId = null, ?string $returnArrivalTime = null, ?string $returnCarrier = null, ?string $returnDepartureCode = null, ?string $returnDepartureDescription = null, ?string $returnDepartureTime = null, ?string $returnDestinationCode = null, ?string $returnDestinationDescription = null, ?string $returnFlightNo = null, ?float $saleAmount = null, ?int $sellItemId = null, ?string $state = null, ?string $status = null, ?int $statusId = null, ?string $subAgency = null, ?int $supplierId = null, ?string $tDatabaseDate = null, ?int $tDayNoInMonth = null, ?string $tDayOfWeek = null, ?int $tMonth = null, ?int $tQuarter = null, ?int $tWeekNoInYear = null, ?bool $tWeekend = null, ?int $tYear = null, ?float $taxPartPercent = null, ?float $totalAmount = null, ?string $transportKey = null, ?int $travelDateId = null, ?int $travelDuration = null, ?float $travelPrice = null, ?string $travelType = null, ?string $traveltypeKey = null, ?string $turnaroundPoint = null)
    {
        $this
            ->setAccomodationCode($accomodationCode)
            ->setAccomodationDescription($accomodationDescription)
            ->setAddressType($addressType)
            ->setAgCity($agCity)
            ->setAgCountryCode($agCountryCode)
            ->setAgEndorsement($agEndorsement)
            ->setAgOrganisationName($agOrganisationName)
            ->setAgPhoneticCity($agPhoneticCity)
            ->setAgPhoneticName($agPhoneticName)
            ->setAgPhoneticStreet($agPhoneticStreet)
            ->setAgPostalCode($agPostalCode)
            ->setAgState($agState)
            ->setAgStreet($agStreet)
            ->setAgStreetNo($agStreetNo)
            ->setAgencyId($agencyId)
            ->setArrivalTime($arrivalTime)
            ->setAttrib10Value($attrib10Value)
            ->setAttrib1Value($attrib1Value)
            ->setAttrib2Value($attrib2Value)
            ->setAttrib3Value($attrib3Value)
            ->setAttrib4Value($attrib4Value)
            ->setAttrib5Value($attrib5Value)
            ->setAttrib6Value($attrib6Value)
            ->setAttrib7Value($attrib7Value)
            ->setAttrib8Value($attrib8Value)
            ->setAttrib9Value($attrib9Value)
            ->setAttributeId($attributeId)
            ->setBookingId($bookingId)
            ->setCDatabaseDate($cDatabaseDate)
            ->setCDayNoInMonth($cDayNoInMonth)
            ->setCDayOfWeek($cDayOfWeek)
            ->setCMonth($cMonth)
            ->setCQuarter($cQuarter)
            ->setCWeekNoInYear($cWeekNoInYear)
            ->setCWeekend($cWeekend)
            ->setCYear($cYear)
            ->setCalcMediatorAmount($calcMediatorAmount)
            ->setCalcRevenueAmount($calcRevenueAmount)
            ->setCarrier($carrier)
            ->setCatalogKey($catalogKey)
            ->setCity($city)
            ->setCommisionLevelId($commisionLevelId)
            ->setCommissionAmount($commissionAmount)
            ->setCooperationId($cooperationId)
            ->setCostCenter($costCenter)
            ->setCountryCode($countryCode)
            ->setCreationDateId($creationDateId)
            ->setCreationUserId($creationUserId)
            ->setCruiseCode($cruiseCode)
            ->setCruiseDescription($cruiseDescription)
            ->setCustCity($custCity)
            ->setCustCountry($custCountry)
            ->setCustForename($custForename)
            ->setCustName($custName)
            ->setCustPostalCode($custPostalCode)
            ->setCustState($custState)
            ->setCustStreet($custStreet)
            ->setCustStreetNo($custStreetNo)
            ->setCustType($custType)
            ->setCustomerId($customerId)
            ->setDepartureCode($departureCode)
            ->setDepartureCodeId($departureCodeId)
            ->setDepartureTime($departureTime)
            ->setDescription($description)
            ->setDestinationCode($destinationCode)
            ->setDestinationCodeId($destinationCodeId)
            ->setDestinationKey($destinationKey)
            ->setDurationKey($durationKey)
            ->setEDatabaseDate($eDatabaseDate)
            ->setEDayNoInMonth($eDayNoInMonth)
            ->setEDayOfWeek($eDayOfWeek)
            ->setEMonth($eMonth)
            ->setEQuarter($eQuarter)
            ->setEWeekNoInYear($eWeekNoInYear)
            ->setEWeekend($eWeekend)
            ->setEYear($eYear)
            ->setEndTravelDateId($endTravelDateId)
            ->setExtSystem($extSystem)
            ->setFactCount($factCount)
            ->setFlightNo($flightNo)
            ->setForename($forename)
            ->setGrantedRevenue($grantedRevenue)
            ->setGroup1($group1)
            ->setGroup2($group2)
            ->setGroup3($group3)
            ->setInkassoType($inkassoType)
            ->setIsChild($isChild)
            ->setIsMain($isMain)
            ->setIsPackage($isPackage)
            ->setItemType($itemType)
            ->setItemTypeId($itemTypeId)
            ->setLocationId($locationId)
            ->setMedCity($medCity)
            ->setMedCountryCode($medCountryCode)
            ->setMedEndorsement($medEndorsement)
            ->setMedOrganisationName($medOrganisationName)
            ->setMedPhoneticCity($medPhoneticCity)
            ->setMedPhoneticName($medPhoneticName)
            ->setMedPhoneticStreet($medPhoneticStreet)
            ->setMedPostalCode($medPostalCode)
            ->setMedState($medState)
            ->setMedStreet($medStreet)
            ->setMedStreetNo($medStreetNo)
            ->setMediatorAffiliate($mediatorAffiliate)
            ->setMediatorId($mediatorId)
            ->setMediatorType($mediatorType)
            ->setMidocoAgencyId($midocoAgencyId)
            ->setMidocoCreationUserId($midocoCreationUserId)
            ->setMidocoCustomerId($midocoCustomerId)
            ->setMidocoItemId($midocoItemId)
            ->setMidocoMediatorId($midocoMediatorId)
            ->setMidocoOrderId($midocoOrderId)
            ->setMidocoOrgUnit($midocoOrgUnit)
            ->setMidocoOrigSupplierId($midocoOrigSupplierId)
            ->setMidocoSupplierId($midocoSupplierId)
            ->setName($name)
            ->setNoOfPersons($noOfPersons)
            ->setOrgUnitId($orgUnitId)
            ->setOriginalSupplierId($originalSupplierId)
            ->setPackageDestination($packageDestination)
            ->setPaidMediatorAmount($paidMediatorAmount)
            ->setPaymentType($paymentType)
            ->setPersonsKey($personsKey)
            ->setPostalCode($postalCode)
            ->setPostalCodeFirst1($postalCodeFirst1)
            ->setPostalCodeFirst2($postalCodeFirst2)
            ->setPostalCodeFirst3($postalCodeFirst3)
            ->setPostalCodeFirst4($postalCodeFirst4)
            ->setProductType($productType)
            ->setProductTypeId($productTypeId)
            ->setPurchaseSaleId($purchaseSaleId)
            ->setReturnArrivalTime($returnArrivalTime)
            ->setReturnCarrier($returnCarrier)
            ->setReturnDepartureCode($returnDepartureCode)
            ->setReturnDepartureDescription($returnDepartureDescription)
            ->setReturnDepartureTime($returnDepartureTime)
            ->setReturnDestinationCode($returnDestinationCode)
            ->setReturnDestinationDescription($returnDestinationDescription)
            ->setReturnFlightNo($returnFlightNo)
            ->setSaleAmount($saleAmount)
            ->setSellItemId($sellItemId)
            ->setState($state)
            ->setStatus($status)
            ->setStatusId($statusId)
            ->setSubAgency($subAgency)
            ->setSupplierId($supplierId)
            ->setTDatabaseDate($tDatabaseDate)
            ->setTDayNoInMonth($tDayNoInMonth)
            ->setTDayOfWeek($tDayOfWeek)
            ->setTMonth($tMonth)
            ->setTQuarter($tQuarter)
            ->setTWeekNoInYear($tWeekNoInYear)
            ->setTWeekend($tWeekend)
            ->setTYear($tYear)
            ->setTaxPartPercent($taxPartPercent)
            ->setTotalAmount($totalAmount)
            ->setTransportKey($transportKey)
            ->setTravelDateId($travelDateId)
            ->setTravelDuration($travelDuration)
            ->setTravelPrice($travelPrice)
            ->setTravelType($travelType)
            ->setTraveltypeKey($traveltypeKey)
            ->setTurnaroundPoint($turnaroundPoint);
    }
    /**
     * Get accomodationCode value
     * @return string|null
     */
    public function getAccomodationCode(): ?string
    {
        return $this->accomodationCode;
    }
    /**
     * Set accomodationCode value
     * @param string $accomodationCode
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setAccomodationCode(?string $accomodationCode = null): self
    {
        // validation for constraint: string
        if (!is_null($accomodationCode) && !is_string($accomodationCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accomodationCode, true), gettype($accomodationCode)), __LINE__);
        }
        $this->accomodationCode = $accomodationCode;
        
        return $this;
    }
    /**
     * Get accomodationDescription value
     * @return string|null
     */
    public function getAccomodationDescription(): ?string
    {
        return $this->accomodationDescription;
    }
    /**
     * Set accomodationDescription value
     * @param string $accomodationDescription
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setAccomodationDescription(?string $accomodationDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($accomodationDescription) && !is_string($accomodationDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accomodationDescription, true), gettype($accomodationDescription)), __LINE__);
        }
        $this->accomodationDescription = $accomodationDescription;
        
        return $this;
    }
    /**
     * Get addressType value
     * @return string|null
     */
    public function getAddressType(): ?string
    {
        return $this->addressType;
    }
    /**
     * Set addressType value
     * @param string $addressType
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setAddressType(?string $addressType = null): self
    {
        // validation for constraint: string
        if (!is_null($addressType) && !is_string($addressType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($addressType, true), gettype($addressType)), __LINE__);
        }
        $this->addressType = $addressType;
        
        return $this;
    }
    /**
     * Get agCity value
     * @return string|null
     */
    public function getAgCity(): ?string
    {
        return $this->agCity;
    }
    /**
     * Set agCity value
     * @param string $agCity
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setAgCity(?string $agCity = null): self
    {
        // validation for constraint: string
        if (!is_null($agCity) && !is_string($agCity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agCity, true), gettype($agCity)), __LINE__);
        }
        $this->agCity = $agCity;
        
        return $this;
    }
    /**
     * Get agCountryCode value
     * @return string|null
     */
    public function getAgCountryCode(): ?string
    {
        return $this->agCountryCode;
    }
    /**
     * Set agCountryCode value
     * @param string $agCountryCode
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setAgCountryCode(?string $agCountryCode = null): self
    {
        // validation for constraint: string
        if (!is_null($agCountryCode) && !is_string($agCountryCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agCountryCode, true), gettype($agCountryCode)), __LINE__);
        }
        $this->agCountryCode = $agCountryCode;
        
        return $this;
    }
    /**
     * Get agEndorsement value
     * @return string|null
     */
    public function getAgEndorsement(): ?string
    {
        return $this->agEndorsement;
    }
    /**
     * Set agEndorsement value
     * @param string $agEndorsement
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setAgEndorsement(?string $agEndorsement = null): self
    {
        // validation for constraint: string
        if (!is_null($agEndorsement) && !is_string($agEndorsement)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agEndorsement, true), gettype($agEndorsement)), __LINE__);
        }
        $this->agEndorsement = $agEndorsement;
        
        return $this;
    }
    /**
     * Get agOrganisationName value
     * @return string|null
     */
    public function getAgOrganisationName(): ?string
    {
        return $this->agOrganisationName;
    }
    /**
     * Set agOrganisationName value
     * @param string $agOrganisationName
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setAgOrganisationName(?string $agOrganisationName = null): self
    {
        // validation for constraint: string
        if (!is_null($agOrganisationName) && !is_string($agOrganisationName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agOrganisationName, true), gettype($agOrganisationName)), __LINE__);
        }
        $this->agOrganisationName = $agOrganisationName;
        
        return $this;
    }
    /**
     * Get agPhoneticCity value
     * @return string|null
     */
    public function getAgPhoneticCity(): ?string
    {
        return $this->agPhoneticCity;
    }
    /**
     * Set agPhoneticCity value
     * @param string $agPhoneticCity
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setAgPhoneticCity(?string $agPhoneticCity = null): self
    {
        // validation for constraint: string
        if (!is_null($agPhoneticCity) && !is_string($agPhoneticCity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agPhoneticCity, true), gettype($agPhoneticCity)), __LINE__);
        }
        $this->agPhoneticCity = $agPhoneticCity;
        
        return $this;
    }
    /**
     * Get agPhoneticName value
     * @return string|null
     */
    public function getAgPhoneticName(): ?string
    {
        return $this->agPhoneticName;
    }
    /**
     * Set agPhoneticName value
     * @param string $agPhoneticName
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setAgPhoneticName(?string $agPhoneticName = null): self
    {
        // validation for constraint: string
        if (!is_null($agPhoneticName) && !is_string($agPhoneticName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agPhoneticName, true), gettype($agPhoneticName)), __LINE__);
        }
        $this->agPhoneticName = $agPhoneticName;
        
        return $this;
    }
    /**
     * Get agPhoneticStreet value
     * @return string|null
     */
    public function getAgPhoneticStreet(): ?string
    {
        return $this->agPhoneticStreet;
    }
    /**
     * Set agPhoneticStreet value
     * @param string $agPhoneticStreet
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setAgPhoneticStreet(?string $agPhoneticStreet = null): self
    {
        // validation for constraint: string
        if (!is_null($agPhoneticStreet) && !is_string($agPhoneticStreet)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agPhoneticStreet, true), gettype($agPhoneticStreet)), __LINE__);
        }
        $this->agPhoneticStreet = $agPhoneticStreet;
        
        return $this;
    }
    /**
     * Get agPostalCode value
     * @return string|null
     */
    public function getAgPostalCode(): ?string
    {
        return $this->agPostalCode;
    }
    /**
     * Set agPostalCode value
     * @param string $agPostalCode
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setAgPostalCode(?string $agPostalCode = null): self
    {
        // validation for constraint: string
        if (!is_null($agPostalCode) && !is_string($agPostalCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agPostalCode, true), gettype($agPostalCode)), __LINE__);
        }
        $this->agPostalCode = $agPostalCode;
        
        return $this;
    }
    /**
     * Get agState value
     * @return string|null
     */
    public function getAgState(): ?string
    {
        return $this->agState;
    }
    /**
     * Set agState value
     * @param string $agState
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setAgState(?string $agState = null): self
    {
        // validation for constraint: string
        if (!is_null($agState) && !is_string($agState)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agState, true), gettype($agState)), __LINE__);
        }
        $this->agState = $agState;
        
        return $this;
    }
    /**
     * Get agStreet value
     * @return string|null
     */
    public function getAgStreet(): ?string
    {
        return $this->agStreet;
    }
    /**
     * Set agStreet value
     * @param string $agStreet
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setAgStreet(?string $agStreet = null): self
    {
        // validation for constraint: string
        if (!is_null($agStreet) && !is_string($agStreet)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agStreet, true), gettype($agStreet)), __LINE__);
        }
        $this->agStreet = $agStreet;
        
        return $this;
    }
    /**
     * Get agStreetNo value
     * @return string|null
     */
    public function getAgStreetNo(): ?string
    {
        return $this->agStreetNo;
    }
    /**
     * Set agStreetNo value
     * @param string $agStreetNo
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setAgStreetNo(?string $agStreetNo = null): self
    {
        // validation for constraint: string
        if (!is_null($agStreetNo) && !is_string($agStreetNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agStreetNo, true), gettype($agStreetNo)), __LINE__);
        }
        $this->agStreetNo = $agStreetNo;
        
        return $this;
    }
    /**
     * Get agencyId value
     * @return int|null
     */
    public function getAgencyId(): ?int
    {
        return $this->agencyId;
    }
    /**
     * Set agencyId value
     * @param int $agencyId
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setAgencyId(?int $agencyId = null): self
    {
        // validation for constraint: int
        if (!is_null($agencyId) && !(is_int($agencyId) || ctype_digit($agencyId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($agencyId, true), gettype($agencyId)), __LINE__);
        }
        $this->agencyId = $agencyId;
        
        return $this;
    }
    /**
     * Get arrivalTime value
     * @return string|null
     */
    public function getArrivalTime(): ?string
    {
        return $this->arrivalTime;
    }
    /**
     * Set arrivalTime value
     * @param string $arrivalTime
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setArrivalTime(?string $arrivalTime = null): self
    {
        // validation for constraint: string
        if (!is_null($arrivalTime) && !is_string($arrivalTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arrivalTime, true), gettype($arrivalTime)), __LINE__);
        }
        $this->arrivalTime = $arrivalTime;
        
        return $this;
    }
    /**
     * Get attrib10Value value
     * @return string|null
     */
    public function getAttrib10Value(): ?string
    {
        return $this->attrib10Value;
    }
    /**
     * Set attrib10Value value
     * @param string $attrib10Value
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setAttrib10Value(?string $attrib10Value = null): self
    {
        // validation for constraint: string
        if (!is_null($attrib10Value) && !is_string($attrib10Value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attrib10Value, true), gettype($attrib10Value)), __LINE__);
        }
        $this->attrib10Value = $attrib10Value;
        
        return $this;
    }
    /**
     * Get attrib1Value value
     * @return string|null
     */
    public function getAttrib1Value(): ?string
    {
        return $this->attrib1Value;
    }
    /**
     * Set attrib1Value value
     * @param string $attrib1Value
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setAttrib1Value(?string $attrib1Value = null): self
    {
        // validation for constraint: string
        if (!is_null($attrib1Value) && !is_string($attrib1Value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attrib1Value, true), gettype($attrib1Value)), __LINE__);
        }
        $this->attrib1Value = $attrib1Value;
        
        return $this;
    }
    /**
     * Get attrib2Value value
     * @return string|null
     */
    public function getAttrib2Value(): ?string
    {
        return $this->attrib2Value;
    }
    /**
     * Set attrib2Value value
     * @param string $attrib2Value
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setAttrib2Value(?string $attrib2Value = null): self
    {
        // validation for constraint: string
        if (!is_null($attrib2Value) && !is_string($attrib2Value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attrib2Value, true), gettype($attrib2Value)), __LINE__);
        }
        $this->attrib2Value = $attrib2Value;
        
        return $this;
    }
    /**
     * Get attrib3Value value
     * @return string|null
     */
    public function getAttrib3Value(): ?string
    {
        return $this->attrib3Value;
    }
    /**
     * Set attrib3Value value
     * @param string $attrib3Value
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setAttrib3Value(?string $attrib3Value = null): self
    {
        // validation for constraint: string
        if (!is_null($attrib3Value) && !is_string($attrib3Value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attrib3Value, true), gettype($attrib3Value)), __LINE__);
        }
        $this->attrib3Value = $attrib3Value;
        
        return $this;
    }
    /**
     * Get attrib4Value value
     * @return string|null
     */
    public function getAttrib4Value(): ?string
    {
        return $this->attrib4Value;
    }
    /**
     * Set attrib4Value value
     * @param string $attrib4Value
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setAttrib4Value(?string $attrib4Value = null): self
    {
        // validation for constraint: string
        if (!is_null($attrib4Value) && !is_string($attrib4Value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attrib4Value, true), gettype($attrib4Value)), __LINE__);
        }
        $this->attrib4Value = $attrib4Value;
        
        return $this;
    }
    /**
     * Get attrib5Value value
     * @return string|null
     */
    public function getAttrib5Value(): ?string
    {
        return $this->attrib5Value;
    }
    /**
     * Set attrib5Value value
     * @param string $attrib5Value
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setAttrib5Value(?string $attrib5Value = null): self
    {
        // validation for constraint: string
        if (!is_null($attrib5Value) && !is_string($attrib5Value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attrib5Value, true), gettype($attrib5Value)), __LINE__);
        }
        $this->attrib5Value = $attrib5Value;
        
        return $this;
    }
    /**
     * Get attrib6Value value
     * @return string|null
     */
    public function getAttrib6Value(): ?string
    {
        return $this->attrib6Value;
    }
    /**
     * Set attrib6Value value
     * @param string $attrib6Value
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setAttrib6Value(?string $attrib6Value = null): self
    {
        // validation for constraint: string
        if (!is_null($attrib6Value) && !is_string($attrib6Value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attrib6Value, true), gettype($attrib6Value)), __LINE__);
        }
        $this->attrib6Value = $attrib6Value;
        
        return $this;
    }
    /**
     * Get attrib7Value value
     * @return string|null
     */
    public function getAttrib7Value(): ?string
    {
        return $this->attrib7Value;
    }
    /**
     * Set attrib7Value value
     * @param string $attrib7Value
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setAttrib7Value(?string $attrib7Value = null): self
    {
        // validation for constraint: string
        if (!is_null($attrib7Value) && !is_string($attrib7Value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attrib7Value, true), gettype($attrib7Value)), __LINE__);
        }
        $this->attrib7Value = $attrib7Value;
        
        return $this;
    }
    /**
     * Get attrib8Value value
     * @return string|null
     */
    public function getAttrib8Value(): ?string
    {
        return $this->attrib8Value;
    }
    /**
     * Set attrib8Value value
     * @param string $attrib8Value
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setAttrib8Value(?string $attrib8Value = null): self
    {
        // validation for constraint: string
        if (!is_null($attrib8Value) && !is_string($attrib8Value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attrib8Value, true), gettype($attrib8Value)), __LINE__);
        }
        $this->attrib8Value = $attrib8Value;
        
        return $this;
    }
    /**
     * Get attrib9Value value
     * @return string|null
     */
    public function getAttrib9Value(): ?string
    {
        return $this->attrib9Value;
    }
    /**
     * Set attrib9Value value
     * @param string $attrib9Value
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setAttrib9Value(?string $attrib9Value = null): self
    {
        // validation for constraint: string
        if (!is_null($attrib9Value) && !is_string($attrib9Value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attrib9Value, true), gettype($attrib9Value)), __LINE__);
        }
        $this->attrib9Value = $attrib9Value;
        
        return $this;
    }
    /**
     * Get attributeId value
     * @return int|null
     */
    public function getAttributeId(): ?int
    {
        return $this->attributeId;
    }
    /**
     * Set attributeId value
     * @param int $attributeId
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setAttributeId(?int $attributeId = null): self
    {
        // validation for constraint: int
        if (!is_null($attributeId) && !(is_int($attributeId) || ctype_digit($attributeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($attributeId, true), gettype($attributeId)), __LINE__);
        }
        $this->attributeId = $attributeId;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
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
     * Get CDatabaseDate value
     * @return string|null
     */
    public function getCDatabaseDate(): ?string
    {
        return $this->CDatabaseDate;
    }
    /**
     * Set CDatabaseDate value
     * @param string $cDatabaseDate
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setCDatabaseDate(?string $cDatabaseDate = null): self
    {
        // validation for constraint: string
        if (!is_null($cDatabaseDate) && !is_string($cDatabaseDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cDatabaseDate, true), gettype($cDatabaseDate)), __LINE__);
        }
        $this->CDatabaseDate = $cDatabaseDate;
        
        return $this;
    }
    /**
     * Get CDayNoInMonth value
     * @return int|null
     */
    public function getCDayNoInMonth(): ?int
    {
        return $this->CDayNoInMonth;
    }
    /**
     * Set CDayNoInMonth value
     * @param int $cDayNoInMonth
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setCDayNoInMonth(?int $cDayNoInMonth = null): self
    {
        // validation for constraint: int
        if (!is_null($cDayNoInMonth) && !(is_int($cDayNoInMonth) || ctype_digit($cDayNoInMonth))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($cDayNoInMonth, true), gettype($cDayNoInMonth)), __LINE__);
        }
        $this->CDayNoInMonth = $cDayNoInMonth;
        
        return $this;
    }
    /**
     * Get CDayOfWeek value
     * @return string|null
     */
    public function getCDayOfWeek(): ?string
    {
        return $this->CDayOfWeek;
    }
    /**
     * Set CDayOfWeek value
     * @param string $cDayOfWeek
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setCDayOfWeek(?string $cDayOfWeek = null): self
    {
        // validation for constraint: string
        if (!is_null($cDayOfWeek) && !is_string($cDayOfWeek)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cDayOfWeek, true), gettype($cDayOfWeek)), __LINE__);
        }
        $this->CDayOfWeek = $cDayOfWeek;
        
        return $this;
    }
    /**
     * Get CMonth value
     * @return int|null
     */
    public function getCMonth(): ?int
    {
        return $this->CMonth;
    }
    /**
     * Set CMonth value
     * @param int $cMonth
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setCMonth(?int $cMonth = null): self
    {
        // validation for constraint: int
        if (!is_null($cMonth) && !(is_int($cMonth) || ctype_digit($cMonth))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($cMonth, true), gettype($cMonth)), __LINE__);
        }
        $this->CMonth = $cMonth;
        
        return $this;
    }
    /**
     * Get CQuarter value
     * @return int|null
     */
    public function getCQuarter(): ?int
    {
        return $this->CQuarter;
    }
    /**
     * Set CQuarter value
     * @param int $cQuarter
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setCQuarter(?int $cQuarter = null): self
    {
        // validation for constraint: int
        if (!is_null($cQuarter) && !(is_int($cQuarter) || ctype_digit($cQuarter))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($cQuarter, true), gettype($cQuarter)), __LINE__);
        }
        $this->CQuarter = $cQuarter;
        
        return $this;
    }
    /**
     * Get CWeekNoInYear value
     * @return int|null
     */
    public function getCWeekNoInYear(): ?int
    {
        return $this->CWeekNoInYear;
    }
    /**
     * Set CWeekNoInYear value
     * @param int $cWeekNoInYear
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setCWeekNoInYear(?int $cWeekNoInYear = null): self
    {
        // validation for constraint: int
        if (!is_null($cWeekNoInYear) && !(is_int($cWeekNoInYear) || ctype_digit($cWeekNoInYear))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($cWeekNoInYear, true), gettype($cWeekNoInYear)), __LINE__);
        }
        $this->CWeekNoInYear = $cWeekNoInYear;
        
        return $this;
    }
    /**
     * Get CWeekend value
     * @return bool|null
     */
    public function getCWeekend(): ?bool
    {
        return $this->CWeekend;
    }
    /**
     * Set CWeekend value
     * @param bool $cWeekend
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setCWeekend(?bool $cWeekend = null): self
    {
        // validation for constraint: boolean
        if (!is_null($cWeekend) && !is_bool($cWeekend)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($cWeekend, true), gettype($cWeekend)), __LINE__);
        }
        $this->CWeekend = $cWeekend;
        
        return $this;
    }
    /**
     * Get CYear value
     * @return int|null
     */
    public function getCYear(): ?int
    {
        return $this->CYear;
    }
    /**
     * Set CYear value
     * @param int $cYear
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setCYear(?int $cYear = null): self
    {
        // validation for constraint: int
        if (!is_null($cYear) && !(is_int($cYear) || ctype_digit($cYear))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($cYear, true), gettype($cYear)), __LINE__);
        }
        $this->CYear = $cYear;
        
        return $this;
    }
    /**
     * Get calcMediatorAmount value
     * @return float|null
     */
    public function getCalcMediatorAmount(): ?float
    {
        return $this->calcMediatorAmount;
    }
    /**
     * Set calcMediatorAmount value
     * @param float $calcMediatorAmount
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setCalcMediatorAmount(?float $calcMediatorAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($calcMediatorAmount) && !(is_float($calcMediatorAmount) || is_numeric($calcMediatorAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($calcMediatorAmount, true), gettype($calcMediatorAmount)), __LINE__);
        }
        $this->calcMediatorAmount = $calcMediatorAmount;
        
        return $this;
    }
    /**
     * Get calcRevenueAmount value
     * @return float|null
     */
    public function getCalcRevenueAmount(): ?float
    {
        return $this->calcRevenueAmount;
    }
    /**
     * Set calcRevenueAmount value
     * @param float $calcRevenueAmount
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setCalcRevenueAmount(?float $calcRevenueAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($calcRevenueAmount) && !(is_float($calcRevenueAmount) || is_numeric($calcRevenueAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($calcRevenueAmount, true), gettype($calcRevenueAmount)), __LINE__);
        }
        $this->calcRevenueAmount = $calcRevenueAmount;
        
        return $this;
    }
    /**
     * Get carrier value
     * @return string|null
     */
    public function getCarrier(): ?string
    {
        return $this->carrier;
    }
    /**
     * Set carrier value
     * @param string $carrier
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setCarrier(?string $carrier = null): self
    {
        // validation for constraint: string
        if (!is_null($carrier) && !is_string($carrier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($carrier, true), gettype($carrier)), __LINE__);
        }
        $this->carrier = $carrier;
        
        return $this;
    }
    /**
     * Get catalogKey value
     * @return bool|null
     */
    public function getCatalogKey(): ?bool
    {
        return $this->catalogKey;
    }
    /**
     * Set catalogKey value
     * @param bool $catalogKey
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setCatalogKey(?bool $catalogKey = null): self
    {
        // validation for constraint: boolean
        if (!is_null($catalogKey) && !is_bool($catalogKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($catalogKey, true), gettype($catalogKey)), __LINE__);
        }
        $this->catalogKey = $catalogKey;
        
        return $this;
    }
    /**
     * Get city value
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }
    /**
     * Set city value
     * @param string $city
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setCity(?string $city = null): self
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($city, true), gettype($city)), __LINE__);
        }
        $this->city = $city;
        
        return $this;
    }
    /**
     * Get commisionLevelId value
     * @return string|null
     */
    public function getCommisionLevelId(): ?string
    {
        return $this->commisionLevelId;
    }
    /**
     * Set commisionLevelId value
     * @param string $commisionLevelId
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setCommisionLevelId(?string $commisionLevelId = null): self
    {
        // validation for constraint: string
        if (!is_null($commisionLevelId) && !is_string($commisionLevelId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($commisionLevelId, true), gettype($commisionLevelId)), __LINE__);
        }
        $this->commisionLevelId = $commisionLevelId;
        
        return $this;
    }
    /**
     * Get commissionAmount value
     * @return float|null
     */
    public function getCommissionAmount(): ?float
    {
        return $this->commissionAmount;
    }
    /**
     * Set commissionAmount value
     * @param float $commissionAmount
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setCommissionAmount(?float $commissionAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($commissionAmount) && !(is_float($commissionAmount) || is_numeric($commissionAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($commissionAmount, true), gettype($commissionAmount)), __LINE__);
        }
        $this->commissionAmount = $commissionAmount;
        
        return $this;
    }
    /**
     * Get cooperationId value
     * @return string|null
     */
    public function getCooperationId(): ?string
    {
        return $this->cooperationId;
    }
    /**
     * Set cooperationId value
     * @param string $cooperationId
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setCooperationId(?string $cooperationId = null): self
    {
        // validation for constraint: string
        if (!is_null($cooperationId) && !is_string($cooperationId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cooperationId, true), gettype($cooperationId)), __LINE__);
        }
        $this->cooperationId = $cooperationId;
        
        return $this;
    }
    /**
     * Get costCenter value
     * @return string|null
     */
    public function getCostCenter(): ?string
    {
        return $this->costCenter;
    }
    /**
     * Set costCenter value
     * @param string $costCenter
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setCostCenter(?string $costCenter = null): self
    {
        // validation for constraint: string
        if (!is_null($costCenter) && !is_string($costCenter)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($costCenter, true), gettype($costCenter)), __LINE__);
        }
        $this->costCenter = $costCenter;
        
        return $this;
    }
    /**
     * Get countryCode value
     * @return string|null
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }
    /**
     * Set countryCode value
     * @param string $countryCode
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setCountryCode(?string $countryCode = null): self
    {
        // validation for constraint: string
        if (!is_null($countryCode) && !is_string($countryCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryCode, true), gettype($countryCode)), __LINE__);
        }
        $this->countryCode = $countryCode;
        
        return $this;
    }
    /**
     * Get creationDateId value
     * @return int|null
     */
    public function getCreationDateId(): ?int
    {
        return $this->creationDateId;
    }
    /**
     * Set creationDateId value
     * @param int $creationDateId
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setCreationDateId(?int $creationDateId = null): self
    {
        // validation for constraint: int
        if (!is_null($creationDateId) && !(is_int($creationDateId) || ctype_digit($creationDateId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($creationDateId, true), gettype($creationDateId)), __LINE__);
        }
        $this->creationDateId = $creationDateId;
        
        return $this;
    }
    /**
     * Get creationUserId value
     * @return int|null
     */
    public function getCreationUserId(): ?int
    {
        return $this->creationUserId;
    }
    /**
     * Set creationUserId value
     * @param int $creationUserId
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setCreationUserId(?int $creationUserId = null): self
    {
        // validation for constraint: int
        if (!is_null($creationUserId) && !(is_int($creationUserId) || ctype_digit($creationUserId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($creationUserId, true), gettype($creationUserId)), __LINE__);
        }
        $this->creationUserId = $creationUserId;
        
        return $this;
    }
    /**
     * Get cruiseCode value
     * @return string|null
     */
    public function getCruiseCode(): ?string
    {
        return $this->cruiseCode;
    }
    /**
     * Set cruiseCode value
     * @param string $cruiseCode
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setCruiseCode(?string $cruiseCode = null): self
    {
        // validation for constraint: string
        if (!is_null($cruiseCode) && !is_string($cruiseCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cruiseCode, true), gettype($cruiseCode)), __LINE__);
        }
        $this->cruiseCode = $cruiseCode;
        
        return $this;
    }
    /**
     * Get cruiseDescription value
     * @return string|null
     */
    public function getCruiseDescription(): ?string
    {
        return $this->cruiseDescription;
    }
    /**
     * Set cruiseDescription value
     * @param string $cruiseDescription
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setCruiseDescription(?string $cruiseDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($cruiseDescription) && !is_string($cruiseDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cruiseDescription, true), gettype($cruiseDescription)), __LINE__);
        }
        $this->cruiseDescription = $cruiseDescription;
        
        return $this;
    }
    /**
     * Get custCity value
     * @return string|null
     */
    public function getCustCity(): ?string
    {
        return $this->custCity;
    }
    /**
     * Set custCity value
     * @param string $custCity
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setCustCity(?string $custCity = null): self
    {
        // validation for constraint: string
        if (!is_null($custCity) && !is_string($custCity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($custCity, true), gettype($custCity)), __LINE__);
        }
        $this->custCity = $custCity;
        
        return $this;
    }
    /**
     * Get custCountry value
     * @return string|null
     */
    public function getCustCountry(): ?string
    {
        return $this->custCountry;
    }
    /**
     * Set custCountry value
     * @param string $custCountry
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setCustCountry(?string $custCountry = null): self
    {
        // validation for constraint: string
        if (!is_null($custCountry) && !is_string($custCountry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($custCountry, true), gettype($custCountry)), __LINE__);
        }
        $this->custCountry = $custCountry;
        
        return $this;
    }
    /**
     * Get custForename value
     * @return string|null
     */
    public function getCustForename(): ?string
    {
        return $this->custForename;
    }
    /**
     * Set custForename value
     * @param string $custForename
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setCustForename(?string $custForename = null): self
    {
        // validation for constraint: string
        if (!is_null($custForename) && !is_string($custForename)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($custForename, true), gettype($custForename)), __LINE__);
        }
        $this->custForename = $custForename;
        
        return $this;
    }
    /**
     * Get custName value
     * @return string|null
     */
    public function getCustName(): ?string
    {
        return $this->custName;
    }
    /**
     * Set custName value
     * @param string $custName
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setCustName(?string $custName = null): self
    {
        // validation for constraint: string
        if (!is_null($custName) && !is_string($custName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($custName, true), gettype($custName)), __LINE__);
        }
        $this->custName = $custName;
        
        return $this;
    }
    /**
     * Get custPostalCode value
     * @return string|null
     */
    public function getCustPostalCode(): ?string
    {
        return $this->custPostalCode;
    }
    /**
     * Set custPostalCode value
     * @param string $custPostalCode
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setCustPostalCode(?string $custPostalCode = null): self
    {
        // validation for constraint: string
        if (!is_null($custPostalCode) && !is_string($custPostalCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($custPostalCode, true), gettype($custPostalCode)), __LINE__);
        }
        $this->custPostalCode = $custPostalCode;
        
        return $this;
    }
    /**
     * Get custState value
     * @return string|null
     */
    public function getCustState(): ?string
    {
        return $this->custState;
    }
    /**
     * Set custState value
     * @param string $custState
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setCustState(?string $custState = null): self
    {
        // validation for constraint: string
        if (!is_null($custState) && !is_string($custState)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($custState, true), gettype($custState)), __LINE__);
        }
        $this->custState = $custState;
        
        return $this;
    }
    /**
     * Get custStreet value
     * @return string|null
     */
    public function getCustStreet(): ?string
    {
        return $this->custStreet;
    }
    /**
     * Set custStreet value
     * @param string $custStreet
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setCustStreet(?string $custStreet = null): self
    {
        // validation for constraint: string
        if (!is_null($custStreet) && !is_string($custStreet)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($custStreet, true), gettype($custStreet)), __LINE__);
        }
        $this->custStreet = $custStreet;
        
        return $this;
    }
    /**
     * Get custStreetNo value
     * @return string|null
     */
    public function getCustStreetNo(): ?string
    {
        return $this->custStreetNo;
    }
    /**
     * Set custStreetNo value
     * @param string $custStreetNo
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setCustStreetNo(?string $custStreetNo = null): self
    {
        // validation for constraint: string
        if (!is_null($custStreetNo) && !is_string($custStreetNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($custStreetNo, true), gettype($custStreetNo)), __LINE__);
        }
        $this->custStreetNo = $custStreetNo;
        
        return $this;
    }
    /**
     * Get custType value
     * @return string|null
     */
    public function getCustType(): ?string
    {
        return $this->custType;
    }
    /**
     * Set custType value
     * @param string $custType
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setCustType(?string $custType = null): self
    {
        // validation for constraint: string
        if (!is_null($custType) && !is_string($custType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($custType, true), gettype($custType)), __LINE__);
        }
        $this->custType = $custType;
        
        return $this;
    }
    /**
     * Get customerId value
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setCustomerId(?int $customerId = null): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
    /**
     * Get departureCode value
     * @return string|null
     */
    public function getDepartureCode(): ?string
    {
        return $this->departureCode;
    }
    /**
     * Set departureCode value
     * @param string $departureCode
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setDepartureCode(?string $departureCode = null): self
    {
        // validation for constraint: string
        if (!is_null($departureCode) && !is_string($departureCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departureCode, true), gettype($departureCode)), __LINE__);
        }
        $this->departureCode = $departureCode;
        
        return $this;
    }
    /**
     * Get departureCodeId value
     * @return int|null
     */
    public function getDepartureCodeId(): ?int
    {
        return $this->departureCodeId;
    }
    /**
     * Set departureCodeId value
     * @param int $departureCodeId
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setDepartureCodeId(?int $departureCodeId = null): self
    {
        // validation for constraint: int
        if (!is_null($departureCodeId) && !(is_int($departureCodeId) || ctype_digit($departureCodeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($departureCodeId, true), gettype($departureCodeId)), __LINE__);
        }
        $this->departureCodeId = $departureCodeId;
        
        return $this;
    }
    /**
     * Get departureTime value
     * @return string|null
     */
    public function getDepartureTime(): ?string
    {
        return $this->departureTime;
    }
    /**
     * Set departureTime value
     * @param string $departureTime
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setDepartureTime(?string $departureTime = null): self
    {
        // validation for constraint: string
        if (!is_null($departureTime) && !is_string($departureTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departureTime, true), gettype($departureTime)), __LINE__);
        }
        $this->departureTime = $departureTime;
        
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
    /**
     * Get destinationCode value
     * @return string|null
     */
    public function getDestinationCode(): ?string
    {
        return $this->destinationCode;
    }
    /**
     * Set destinationCode value
     * @param string $destinationCode
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setDestinationCode(?string $destinationCode = null): self
    {
        // validation for constraint: string
        if (!is_null($destinationCode) && !is_string($destinationCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destinationCode, true), gettype($destinationCode)), __LINE__);
        }
        $this->destinationCode = $destinationCode;
        
        return $this;
    }
    /**
     * Get destinationCodeId value
     * @return int|null
     */
    public function getDestinationCodeId(): ?int
    {
        return $this->destinationCodeId;
    }
    /**
     * Set destinationCodeId value
     * @param int $destinationCodeId
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setDestinationCodeId(?int $destinationCodeId = null): self
    {
        // validation for constraint: int
        if (!is_null($destinationCodeId) && !(is_int($destinationCodeId) || ctype_digit($destinationCodeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($destinationCodeId, true), gettype($destinationCodeId)), __LINE__);
        }
        $this->destinationCodeId = $destinationCodeId;
        
        return $this;
    }
    /**
     * Get destinationKey value
     * @return string|null
     */
    public function getDestinationKey(): ?string
    {
        return $this->destinationKey;
    }
    /**
     * Set destinationKey value
     * @param string $destinationKey
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setDestinationKey(?string $destinationKey = null): self
    {
        // validation for constraint: string
        if (!is_null($destinationKey) && !is_string($destinationKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destinationKey, true), gettype($destinationKey)), __LINE__);
        }
        $this->destinationKey = $destinationKey;
        
        return $this;
    }
    /**
     * Get durationKey value
     * @return string|null
     */
    public function getDurationKey(): ?string
    {
        return $this->durationKey;
    }
    /**
     * Set durationKey value
     * @param string $durationKey
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setDurationKey(?string $durationKey = null): self
    {
        // validation for constraint: string
        if (!is_null($durationKey) && !is_string($durationKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($durationKey, true), gettype($durationKey)), __LINE__);
        }
        $this->durationKey = $durationKey;
        
        return $this;
    }
    /**
     * Get EDatabaseDate value
     * @return string|null
     */
    public function getEDatabaseDate(): ?string
    {
        return $this->EDatabaseDate;
    }
    /**
     * Set EDatabaseDate value
     * @param string $eDatabaseDate
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setEDatabaseDate(?string $eDatabaseDate = null): self
    {
        // validation for constraint: string
        if (!is_null($eDatabaseDate) && !is_string($eDatabaseDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eDatabaseDate, true), gettype($eDatabaseDate)), __LINE__);
        }
        $this->EDatabaseDate = $eDatabaseDate;
        
        return $this;
    }
    /**
     * Get EDayNoInMonth value
     * @return int|null
     */
    public function getEDayNoInMonth(): ?int
    {
        return $this->EDayNoInMonth;
    }
    /**
     * Set EDayNoInMonth value
     * @param int $eDayNoInMonth
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setEDayNoInMonth(?int $eDayNoInMonth = null): self
    {
        // validation for constraint: int
        if (!is_null($eDayNoInMonth) && !(is_int($eDayNoInMonth) || ctype_digit($eDayNoInMonth))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($eDayNoInMonth, true), gettype($eDayNoInMonth)), __LINE__);
        }
        $this->EDayNoInMonth = $eDayNoInMonth;
        
        return $this;
    }
    /**
     * Get EDayOfWeek value
     * @return string|null
     */
    public function getEDayOfWeek(): ?string
    {
        return $this->EDayOfWeek;
    }
    /**
     * Set EDayOfWeek value
     * @param string $eDayOfWeek
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setEDayOfWeek(?string $eDayOfWeek = null): self
    {
        // validation for constraint: string
        if (!is_null($eDayOfWeek) && !is_string($eDayOfWeek)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eDayOfWeek, true), gettype($eDayOfWeek)), __LINE__);
        }
        $this->EDayOfWeek = $eDayOfWeek;
        
        return $this;
    }
    /**
     * Get EMonth value
     * @return int|null
     */
    public function getEMonth(): ?int
    {
        return $this->EMonth;
    }
    /**
     * Set EMonth value
     * @param int $eMonth
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setEMonth(?int $eMonth = null): self
    {
        // validation for constraint: int
        if (!is_null($eMonth) && !(is_int($eMonth) || ctype_digit($eMonth))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($eMonth, true), gettype($eMonth)), __LINE__);
        }
        $this->EMonth = $eMonth;
        
        return $this;
    }
    /**
     * Get EQuarter value
     * @return int|null
     */
    public function getEQuarter(): ?int
    {
        return $this->EQuarter;
    }
    /**
     * Set EQuarter value
     * @param int $eQuarter
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setEQuarter(?int $eQuarter = null): self
    {
        // validation for constraint: int
        if (!is_null($eQuarter) && !(is_int($eQuarter) || ctype_digit($eQuarter))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($eQuarter, true), gettype($eQuarter)), __LINE__);
        }
        $this->EQuarter = $eQuarter;
        
        return $this;
    }
    /**
     * Get EWeekNoInYear value
     * @return int|null
     */
    public function getEWeekNoInYear(): ?int
    {
        return $this->EWeekNoInYear;
    }
    /**
     * Set EWeekNoInYear value
     * @param int $eWeekNoInYear
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setEWeekNoInYear(?int $eWeekNoInYear = null): self
    {
        // validation for constraint: int
        if (!is_null($eWeekNoInYear) && !(is_int($eWeekNoInYear) || ctype_digit($eWeekNoInYear))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($eWeekNoInYear, true), gettype($eWeekNoInYear)), __LINE__);
        }
        $this->EWeekNoInYear = $eWeekNoInYear;
        
        return $this;
    }
    /**
     * Get EWeekend value
     * @return bool|null
     */
    public function getEWeekend(): ?bool
    {
        return $this->EWeekend;
    }
    /**
     * Set EWeekend value
     * @param bool $eWeekend
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setEWeekend(?bool $eWeekend = null): self
    {
        // validation for constraint: boolean
        if (!is_null($eWeekend) && !is_bool($eWeekend)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($eWeekend, true), gettype($eWeekend)), __LINE__);
        }
        $this->EWeekend = $eWeekend;
        
        return $this;
    }
    /**
     * Get EYear value
     * @return int|null
     */
    public function getEYear(): ?int
    {
        return $this->EYear;
    }
    /**
     * Set EYear value
     * @param int $eYear
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setEYear(?int $eYear = null): self
    {
        // validation for constraint: int
        if (!is_null($eYear) && !(is_int($eYear) || ctype_digit($eYear))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($eYear, true), gettype($eYear)), __LINE__);
        }
        $this->EYear = $eYear;
        
        return $this;
    }
    /**
     * Get endTravelDateId value
     * @return int|null
     */
    public function getEndTravelDateId(): ?int
    {
        return $this->endTravelDateId;
    }
    /**
     * Set endTravelDateId value
     * @param int $endTravelDateId
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setEndTravelDateId(?int $endTravelDateId = null): self
    {
        // validation for constraint: int
        if (!is_null($endTravelDateId) && !(is_int($endTravelDateId) || ctype_digit($endTravelDateId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($endTravelDateId, true), gettype($endTravelDateId)), __LINE__);
        }
        $this->endTravelDateId = $endTravelDateId;
        
        return $this;
    }
    /**
     * Get extSystem value
     * @return string|null
     */
    public function getExtSystem(): ?string
    {
        return $this->extSystem;
    }
    /**
     * Set extSystem value
     * @param string $extSystem
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setExtSystem(?string $extSystem = null): self
    {
        // validation for constraint: string
        if (!is_null($extSystem) && !is_string($extSystem)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($extSystem, true), gettype($extSystem)), __LINE__);
        }
        $this->extSystem = $extSystem;
        
        return $this;
    }
    /**
     * Get factCount value
     * @return int|null
     */
    public function getFactCount(): ?int
    {
        return $this->factCount;
    }
    /**
     * Set factCount value
     * @param int $factCount
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setFactCount(?int $factCount = null): self
    {
        // validation for constraint: int
        if (!is_null($factCount) && !(is_int($factCount) || ctype_digit($factCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($factCount, true), gettype($factCount)), __LINE__);
        }
        $this->factCount = $factCount;
        
        return $this;
    }
    /**
     * Get flightNo value
     * @return string|null
     */
    public function getFlightNo(): ?string
    {
        return $this->flightNo;
    }
    /**
     * Set flightNo value
     * @param string $flightNo
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setFlightNo(?string $flightNo = null): self
    {
        // validation for constraint: string
        if (!is_null($flightNo) && !is_string($flightNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($flightNo, true), gettype($flightNo)), __LINE__);
        }
        $this->flightNo = $flightNo;
        
        return $this;
    }
    /**
     * Get forename value
     * @return string|null
     */
    public function getForename(): ?string
    {
        return $this->forename;
    }
    /**
     * Set forename value
     * @param string $forename
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setForename(?string $forename = null): self
    {
        // validation for constraint: string
        if (!is_null($forename) && !is_string($forename)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($forename, true), gettype($forename)), __LINE__);
        }
        $this->forename = $forename;
        
        return $this;
    }
    /**
     * Get grantedRevenue value
     * @return float|null
     */
    public function getGrantedRevenue(): ?float
    {
        return $this->grantedRevenue;
    }
    /**
     * Set grantedRevenue value
     * @param float $grantedRevenue
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setGrantedRevenue(?float $grantedRevenue = null): self
    {
        // validation for constraint: float
        if (!is_null($grantedRevenue) && !(is_float($grantedRevenue) || is_numeric($grantedRevenue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($grantedRevenue, true), gettype($grantedRevenue)), __LINE__);
        }
        $this->grantedRevenue = $grantedRevenue;
        
        return $this;
    }
    /**
     * Get group1 value
     * @return string|null
     */
    public function getGroup1(): ?string
    {
        return $this->group1;
    }
    /**
     * Set group1 value
     * @param string $group1
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setGroup1(?string $group1 = null): self
    {
        // validation for constraint: string
        if (!is_null($group1) && !is_string($group1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($group1, true), gettype($group1)), __LINE__);
        }
        $this->group1 = $group1;
        
        return $this;
    }
    /**
     * Get group2 value
     * @return string|null
     */
    public function getGroup2(): ?string
    {
        return $this->group2;
    }
    /**
     * Set group2 value
     * @param string $group2
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setGroup2(?string $group2 = null): self
    {
        // validation for constraint: string
        if (!is_null($group2) && !is_string($group2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($group2, true), gettype($group2)), __LINE__);
        }
        $this->group2 = $group2;
        
        return $this;
    }
    /**
     * Get group3 value
     * @return string|null
     */
    public function getGroup3(): ?string
    {
        return $this->group3;
    }
    /**
     * Set group3 value
     * @param string $group3
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setGroup3(?string $group3 = null): self
    {
        // validation for constraint: string
        if (!is_null($group3) && !is_string($group3)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($group3, true), gettype($group3)), __LINE__);
        }
        $this->group3 = $group3;
        
        return $this;
    }
    /**
     * Get inkassoType value
     * @return string|null
     */
    public function getInkassoType(): ?string
    {
        return $this->inkassoType;
    }
    /**
     * Set inkassoType value
     * @param string $inkassoType
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setInkassoType(?string $inkassoType = null): self
    {
        // validation for constraint: string
        if (!is_null($inkassoType) && !is_string($inkassoType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($inkassoType, true), gettype($inkassoType)), __LINE__);
        }
        $this->inkassoType = $inkassoType;
        
        return $this;
    }
    /**
     * Get isChild value
     * @return string|null
     */
    public function getIsChild(): ?string
    {
        return $this->isChild;
    }
    /**
     * Set isChild value
     * @param string $isChild
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setIsChild(?string $isChild = null): self
    {
        // validation for constraint: string
        if (!is_null($isChild) && !is_string($isChild)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($isChild, true), gettype($isChild)), __LINE__);
        }
        $this->isChild = $isChild;
        
        return $this;
    }
    /**
     * Get isMain value
     * @return string|null
     */
    public function getIsMain(): ?string
    {
        return $this->isMain;
    }
    /**
     * Set isMain value
     * @param string $isMain
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setIsMain(?string $isMain = null): self
    {
        // validation for constraint: string
        if (!is_null($isMain) && !is_string($isMain)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($isMain, true), gettype($isMain)), __LINE__);
        }
        $this->isMain = $isMain;
        
        return $this;
    }
    /**
     * Get isPackage value
     * @return string|null
     */
    public function getIsPackage(): ?string
    {
        return $this->isPackage;
    }
    /**
     * Set isPackage value
     * @param string $isPackage
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setIsPackage(?string $isPackage = null): self
    {
        // validation for constraint: string
        if (!is_null($isPackage) && !is_string($isPackage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($isPackage, true), gettype($isPackage)), __LINE__);
        }
        $this->isPackage = $isPackage;
        
        return $this;
    }
    /**
     * Get itemType value
     * @return string|null
     */
    public function getItemType(): ?string
    {
        return $this->itemType;
    }
    /**
     * Set itemType value
     * @param string $itemType
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setItemType(?string $itemType = null): self
    {
        // validation for constraint: string
        if (!is_null($itemType) && !is_string($itemType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemType, true), gettype($itemType)), __LINE__);
        }
        $this->itemType = $itemType;
        
        return $this;
    }
    /**
     * Get itemTypeId value
     * @return int|null
     */
    public function getItemTypeId(): ?int
    {
        return $this->itemTypeId;
    }
    /**
     * Set itemTypeId value
     * @param int $itemTypeId
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setItemTypeId(?int $itemTypeId = null): self
    {
        // validation for constraint: int
        if (!is_null($itemTypeId) && !(is_int($itemTypeId) || ctype_digit($itemTypeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemTypeId, true), gettype($itemTypeId)), __LINE__);
        }
        $this->itemTypeId = $itemTypeId;
        
        return $this;
    }
    /**
     * Get locationId value
     * @return int|null
     */
    public function getLocationId(): ?int
    {
        return $this->locationId;
    }
    /**
     * Set locationId value
     * @param int $locationId
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setLocationId(?int $locationId = null): self
    {
        // validation for constraint: int
        if (!is_null($locationId) && !(is_int($locationId) || ctype_digit($locationId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($locationId, true), gettype($locationId)), __LINE__);
        }
        $this->locationId = $locationId;
        
        return $this;
    }
    /**
     * Get medCity value
     * @return string|null
     */
    public function getMedCity(): ?string
    {
        return $this->medCity;
    }
    /**
     * Set medCity value
     * @param string $medCity
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setMedCity(?string $medCity = null): self
    {
        // validation for constraint: string
        if (!is_null($medCity) && !is_string($medCity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($medCity, true), gettype($medCity)), __LINE__);
        }
        $this->medCity = $medCity;
        
        return $this;
    }
    /**
     * Get medCountryCode value
     * @return string|null
     */
    public function getMedCountryCode(): ?string
    {
        return $this->medCountryCode;
    }
    /**
     * Set medCountryCode value
     * @param string $medCountryCode
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setMedCountryCode(?string $medCountryCode = null): self
    {
        // validation for constraint: string
        if (!is_null($medCountryCode) && !is_string($medCountryCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($medCountryCode, true), gettype($medCountryCode)), __LINE__);
        }
        $this->medCountryCode = $medCountryCode;
        
        return $this;
    }
    /**
     * Get medEndorsement value
     * @return string|null
     */
    public function getMedEndorsement(): ?string
    {
        return $this->medEndorsement;
    }
    /**
     * Set medEndorsement value
     * @param string $medEndorsement
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setMedEndorsement(?string $medEndorsement = null): self
    {
        // validation for constraint: string
        if (!is_null($medEndorsement) && !is_string($medEndorsement)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($medEndorsement, true), gettype($medEndorsement)), __LINE__);
        }
        $this->medEndorsement = $medEndorsement;
        
        return $this;
    }
    /**
     * Get medOrganisationName value
     * @return string|null
     */
    public function getMedOrganisationName(): ?string
    {
        return $this->medOrganisationName;
    }
    /**
     * Set medOrganisationName value
     * @param string $medOrganisationName
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setMedOrganisationName(?string $medOrganisationName = null): self
    {
        // validation for constraint: string
        if (!is_null($medOrganisationName) && !is_string($medOrganisationName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($medOrganisationName, true), gettype($medOrganisationName)), __LINE__);
        }
        $this->medOrganisationName = $medOrganisationName;
        
        return $this;
    }
    /**
     * Get medPhoneticCity value
     * @return string|null
     */
    public function getMedPhoneticCity(): ?string
    {
        return $this->medPhoneticCity;
    }
    /**
     * Set medPhoneticCity value
     * @param string $medPhoneticCity
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setMedPhoneticCity(?string $medPhoneticCity = null): self
    {
        // validation for constraint: string
        if (!is_null($medPhoneticCity) && !is_string($medPhoneticCity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($medPhoneticCity, true), gettype($medPhoneticCity)), __LINE__);
        }
        $this->medPhoneticCity = $medPhoneticCity;
        
        return $this;
    }
    /**
     * Get medPhoneticName value
     * @return string|null
     */
    public function getMedPhoneticName(): ?string
    {
        return $this->medPhoneticName;
    }
    /**
     * Set medPhoneticName value
     * @param string $medPhoneticName
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setMedPhoneticName(?string $medPhoneticName = null): self
    {
        // validation for constraint: string
        if (!is_null($medPhoneticName) && !is_string($medPhoneticName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($medPhoneticName, true), gettype($medPhoneticName)), __LINE__);
        }
        $this->medPhoneticName = $medPhoneticName;
        
        return $this;
    }
    /**
     * Get medPhoneticStreet value
     * @return string|null
     */
    public function getMedPhoneticStreet(): ?string
    {
        return $this->medPhoneticStreet;
    }
    /**
     * Set medPhoneticStreet value
     * @param string $medPhoneticStreet
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setMedPhoneticStreet(?string $medPhoneticStreet = null): self
    {
        // validation for constraint: string
        if (!is_null($medPhoneticStreet) && !is_string($medPhoneticStreet)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($medPhoneticStreet, true), gettype($medPhoneticStreet)), __LINE__);
        }
        $this->medPhoneticStreet = $medPhoneticStreet;
        
        return $this;
    }
    /**
     * Get medPostalCode value
     * @return string|null
     */
    public function getMedPostalCode(): ?string
    {
        return $this->medPostalCode;
    }
    /**
     * Set medPostalCode value
     * @param string $medPostalCode
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setMedPostalCode(?string $medPostalCode = null): self
    {
        // validation for constraint: string
        if (!is_null($medPostalCode) && !is_string($medPostalCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($medPostalCode, true), gettype($medPostalCode)), __LINE__);
        }
        $this->medPostalCode = $medPostalCode;
        
        return $this;
    }
    /**
     * Get medState value
     * @return string|null
     */
    public function getMedState(): ?string
    {
        return $this->medState;
    }
    /**
     * Set medState value
     * @param string $medState
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setMedState(?string $medState = null): self
    {
        // validation for constraint: string
        if (!is_null($medState) && !is_string($medState)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($medState, true), gettype($medState)), __LINE__);
        }
        $this->medState = $medState;
        
        return $this;
    }
    /**
     * Get medStreet value
     * @return string|null
     */
    public function getMedStreet(): ?string
    {
        return $this->medStreet;
    }
    /**
     * Set medStreet value
     * @param string $medStreet
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setMedStreet(?string $medStreet = null): self
    {
        // validation for constraint: string
        if (!is_null($medStreet) && !is_string($medStreet)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($medStreet, true), gettype($medStreet)), __LINE__);
        }
        $this->medStreet = $medStreet;
        
        return $this;
    }
    /**
     * Get medStreetNo value
     * @return string|null
     */
    public function getMedStreetNo(): ?string
    {
        return $this->medStreetNo;
    }
    /**
     * Set medStreetNo value
     * @param string $medStreetNo
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setMedStreetNo(?string $medStreetNo = null): self
    {
        // validation for constraint: string
        if (!is_null($medStreetNo) && !is_string($medStreetNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($medStreetNo, true), gettype($medStreetNo)), __LINE__);
        }
        $this->medStreetNo = $medStreetNo;
        
        return $this;
    }
    /**
     * Get mediatorAffiliate value
     * @return string|null
     */
    public function getMediatorAffiliate(): ?string
    {
        return $this->mediatorAffiliate;
    }
    /**
     * Set mediatorAffiliate value
     * @param string $mediatorAffiliate
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setMediatorAffiliate(?string $mediatorAffiliate = null): self
    {
        // validation for constraint: string
        if (!is_null($mediatorAffiliate) && !is_string($mediatorAffiliate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediatorAffiliate, true), gettype($mediatorAffiliate)), __LINE__);
        }
        $this->mediatorAffiliate = $mediatorAffiliate;
        
        return $this;
    }
    /**
     * Get mediatorId value
     * @return int|null
     */
    public function getMediatorId(): ?int
    {
        return $this->mediatorId;
    }
    /**
     * Set mediatorId value
     * @param int $mediatorId
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setMediatorId(?int $mediatorId = null): self
    {
        // validation for constraint: int
        if (!is_null($mediatorId) && !(is_int($mediatorId) || ctype_digit($mediatorId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($mediatorId, true), gettype($mediatorId)), __LINE__);
        }
        $this->mediatorId = $mediatorId;
        
        return $this;
    }
    /**
     * Get mediatorType value
     * @return string|null
     */
    public function getMediatorType(): ?string
    {
        return $this->mediatorType;
    }
    /**
     * Set mediatorType value
     * @param string $mediatorType
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setMediatorType(?string $mediatorType = null): self
    {
        // validation for constraint: string
        if (!is_null($mediatorType) && !is_string($mediatorType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediatorType, true), gettype($mediatorType)), __LINE__);
        }
        $this->mediatorType = $mediatorType;
        
        return $this;
    }
    /**
     * Get midocoAgencyId value
     * @return string|null
     */
    public function getMidocoAgencyId(): ?string
    {
        return $this->midocoAgencyId;
    }
    /**
     * Set midocoAgencyId value
     * @param string $midocoAgencyId
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setMidocoAgencyId(?string $midocoAgencyId = null): self
    {
        // validation for constraint: string
        if (!is_null($midocoAgencyId) && !is_string($midocoAgencyId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($midocoAgencyId, true), gettype($midocoAgencyId)), __LINE__);
        }
        $this->midocoAgencyId = $midocoAgencyId;
        
        return $this;
    }
    /**
     * Get midocoCreationUserId value
     * @return int|null
     */
    public function getMidocoCreationUserId(): ?int
    {
        return $this->midocoCreationUserId;
    }
    /**
     * Set midocoCreationUserId value
     * @param int $midocoCreationUserId
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setMidocoCreationUserId(?int $midocoCreationUserId = null): self
    {
        // validation for constraint: int
        if (!is_null($midocoCreationUserId) && !(is_int($midocoCreationUserId) || ctype_digit($midocoCreationUserId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($midocoCreationUserId, true), gettype($midocoCreationUserId)), __LINE__);
        }
        $this->midocoCreationUserId = $midocoCreationUserId;
        
        return $this;
    }
    /**
     * Get midocoCustomerId value
     * @return int|null
     */
    public function getMidocoCustomerId(): ?int
    {
        return $this->midocoCustomerId;
    }
    /**
     * Set midocoCustomerId value
     * @param int $midocoCustomerId
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setMidocoCustomerId(?int $midocoCustomerId = null): self
    {
        // validation for constraint: int
        if (!is_null($midocoCustomerId) && !(is_int($midocoCustomerId) || ctype_digit($midocoCustomerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($midocoCustomerId, true), gettype($midocoCustomerId)), __LINE__);
        }
        $this->midocoCustomerId = $midocoCustomerId;
        
        return $this;
    }
    /**
     * Get midocoItemId value
     * @return int|null
     */
    public function getMidocoItemId(): ?int
    {
        return $this->midocoItemId;
    }
    /**
     * Set midocoItemId value
     * @param int $midocoItemId
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setMidocoItemId(?int $midocoItemId = null): self
    {
        // validation for constraint: int
        if (!is_null($midocoItemId) && !(is_int($midocoItemId) || ctype_digit($midocoItemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($midocoItemId, true), gettype($midocoItemId)), __LINE__);
        }
        $this->midocoItemId = $midocoItemId;
        
        return $this;
    }
    /**
     * Get midocoMediatorId value
     * @return string|null
     */
    public function getMidocoMediatorId(): ?string
    {
        return $this->midocoMediatorId;
    }
    /**
     * Set midocoMediatorId value
     * @param string $midocoMediatorId
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setMidocoMediatorId(?string $midocoMediatorId = null): self
    {
        // validation for constraint: string
        if (!is_null($midocoMediatorId) && !is_string($midocoMediatorId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($midocoMediatorId, true), gettype($midocoMediatorId)), __LINE__);
        }
        $this->midocoMediatorId = $midocoMediatorId;
        
        return $this;
    }
    /**
     * Get midocoOrderId value
     * @return int|null
     */
    public function getMidocoOrderId(): ?int
    {
        return $this->midocoOrderId;
    }
    /**
     * Set midocoOrderId value
     * @param int $midocoOrderId
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setMidocoOrderId(?int $midocoOrderId = null): self
    {
        // validation for constraint: int
        if (!is_null($midocoOrderId) && !(is_int($midocoOrderId) || ctype_digit($midocoOrderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($midocoOrderId, true), gettype($midocoOrderId)), __LINE__);
        }
        $this->midocoOrderId = $midocoOrderId;
        
        return $this;
    }
    /**
     * Get midocoOrgUnit value
     * @return string|null
     */
    public function getMidocoOrgUnit(): ?string
    {
        return $this->midocoOrgUnit;
    }
    /**
     * Set midocoOrgUnit value
     * @param string $midocoOrgUnit
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setMidocoOrgUnit(?string $midocoOrgUnit = null): self
    {
        // validation for constraint: string
        if (!is_null($midocoOrgUnit) && !is_string($midocoOrgUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($midocoOrgUnit, true), gettype($midocoOrgUnit)), __LINE__);
        }
        $this->midocoOrgUnit = $midocoOrgUnit;
        
        return $this;
    }
    /**
     * Get midocoOrigSupplierId value
     * @return string|null
     */
    public function getMidocoOrigSupplierId(): ?string
    {
        return $this->midocoOrigSupplierId;
    }
    /**
     * Set midocoOrigSupplierId value
     * @param string $midocoOrigSupplierId
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setMidocoOrigSupplierId(?string $midocoOrigSupplierId = null): self
    {
        // validation for constraint: string
        if (!is_null($midocoOrigSupplierId) && !is_string($midocoOrigSupplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($midocoOrigSupplierId, true), gettype($midocoOrigSupplierId)), __LINE__);
        }
        $this->midocoOrigSupplierId = $midocoOrigSupplierId;
        
        return $this;
    }
    /**
     * Get midocoSupplierId value
     * @return string|null
     */
    public function getMidocoSupplierId(): ?string
    {
        return $this->midocoSupplierId;
    }
    /**
     * Set midocoSupplierId value
     * @param string $midocoSupplierId
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setMidocoSupplierId(?string $midocoSupplierId = null): self
    {
        // validation for constraint: string
        if (!is_null($midocoSupplierId) && !is_string($midocoSupplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($midocoSupplierId, true), gettype($midocoSupplierId)), __LINE__);
        }
        $this->midocoSupplierId = $midocoSupplierId;
        
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        
        return $this;
    }
    /**
     * Get noOfPersons value
     * @return int|null
     */
    public function getNoOfPersons(): ?int
    {
        return $this->noOfPersons;
    }
    /**
     * Set noOfPersons value
     * @param int $noOfPersons
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setNoOfPersons(?int $noOfPersons = null): self
    {
        // validation for constraint: int
        if (!is_null($noOfPersons) && !(is_int($noOfPersons) || ctype_digit($noOfPersons))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noOfPersons, true), gettype($noOfPersons)), __LINE__);
        }
        $this->noOfPersons = $noOfPersons;
        
        return $this;
    }
    /**
     * Get orgUnitId value
     * @return int|null
     */
    public function getOrgUnitId(): ?int
    {
        return $this->orgUnitId;
    }
    /**
     * Set orgUnitId value
     * @param int $orgUnitId
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setOrgUnitId(?int $orgUnitId = null): self
    {
        // validation for constraint: int
        if (!is_null($orgUnitId) && !(is_int($orgUnitId) || ctype_digit($orgUnitId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orgUnitId, true), gettype($orgUnitId)), __LINE__);
        }
        $this->orgUnitId = $orgUnitId;
        
        return $this;
    }
    /**
     * Get originalSupplierId value
     * @return int|null
     */
    public function getOriginalSupplierId(): ?int
    {
        return $this->originalSupplierId;
    }
    /**
     * Set originalSupplierId value
     * @param int $originalSupplierId
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setOriginalSupplierId(?int $originalSupplierId = null): self
    {
        // validation for constraint: int
        if (!is_null($originalSupplierId) && !(is_int($originalSupplierId) || ctype_digit($originalSupplierId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($originalSupplierId, true), gettype($originalSupplierId)), __LINE__);
        }
        $this->originalSupplierId = $originalSupplierId;
        
        return $this;
    }
    /**
     * Get packageDestination value
     * @return string|null
     */
    public function getPackageDestination(): ?string
    {
        return $this->packageDestination;
    }
    /**
     * Set packageDestination value
     * @param string $packageDestination
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setPackageDestination(?string $packageDestination = null): self
    {
        // validation for constraint: string
        if (!is_null($packageDestination) && !is_string($packageDestination)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($packageDestination, true), gettype($packageDestination)), __LINE__);
        }
        $this->packageDestination = $packageDestination;
        
        return $this;
    }
    /**
     * Get paidMediatorAmount value
     * @return float|null
     */
    public function getPaidMediatorAmount(): ?float
    {
        return $this->paidMediatorAmount;
    }
    /**
     * Set paidMediatorAmount value
     * @param float $paidMediatorAmount
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setPaidMediatorAmount(?float $paidMediatorAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($paidMediatorAmount) && !(is_float($paidMediatorAmount) || is_numeric($paidMediatorAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($paidMediatorAmount, true), gettype($paidMediatorAmount)), __LINE__);
        }
        $this->paidMediatorAmount = $paidMediatorAmount;
        
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
     * @param string $paymentType
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setPaymentType(?string $paymentType = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentType) && !is_string($paymentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentType, true), gettype($paymentType)), __LINE__);
        }
        $this->paymentType = $paymentType;
        
        return $this;
    }
    /**
     * Get personsKey value
     * @return string|null
     */
    public function getPersonsKey(): ?string
    {
        return $this->personsKey;
    }
    /**
     * Set personsKey value
     * @param string $personsKey
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setPersonsKey(?string $personsKey = null): self
    {
        // validation for constraint: string
        if (!is_null($personsKey) && !is_string($personsKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($personsKey, true), gettype($personsKey)), __LINE__);
        }
        $this->personsKey = $personsKey;
        
        return $this;
    }
    /**
     * Get postalCode value
     * @return string|null
     */
    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }
    /**
     * Set postalCode value
     * @param string $postalCode
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setPostalCode(?string $postalCode = null): self
    {
        // validation for constraint: string
        if (!is_null($postalCode) && !is_string($postalCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postalCode, true), gettype($postalCode)), __LINE__);
        }
        $this->postalCode = $postalCode;
        
        return $this;
    }
    /**
     * Get postalCodeFirst1 value
     * @return string|null
     */
    public function getPostalCodeFirst1(): ?string
    {
        return $this->postalCodeFirst1;
    }
    /**
     * Set postalCodeFirst1 value
     * @param string $postalCodeFirst1
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setPostalCodeFirst1(?string $postalCodeFirst1 = null): self
    {
        // validation for constraint: string
        if (!is_null($postalCodeFirst1) && !is_string($postalCodeFirst1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postalCodeFirst1, true), gettype($postalCodeFirst1)), __LINE__);
        }
        $this->postalCodeFirst1 = $postalCodeFirst1;
        
        return $this;
    }
    /**
     * Get postalCodeFirst2 value
     * @return string|null
     */
    public function getPostalCodeFirst2(): ?string
    {
        return $this->postalCodeFirst2;
    }
    /**
     * Set postalCodeFirst2 value
     * @param string $postalCodeFirst2
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setPostalCodeFirst2(?string $postalCodeFirst2 = null): self
    {
        // validation for constraint: string
        if (!is_null($postalCodeFirst2) && !is_string($postalCodeFirst2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postalCodeFirst2, true), gettype($postalCodeFirst2)), __LINE__);
        }
        $this->postalCodeFirst2 = $postalCodeFirst2;
        
        return $this;
    }
    /**
     * Get postalCodeFirst3 value
     * @return string|null
     */
    public function getPostalCodeFirst3(): ?string
    {
        return $this->postalCodeFirst3;
    }
    /**
     * Set postalCodeFirst3 value
     * @param string $postalCodeFirst3
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setPostalCodeFirst3(?string $postalCodeFirst3 = null): self
    {
        // validation for constraint: string
        if (!is_null($postalCodeFirst3) && !is_string($postalCodeFirst3)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postalCodeFirst3, true), gettype($postalCodeFirst3)), __LINE__);
        }
        $this->postalCodeFirst3 = $postalCodeFirst3;
        
        return $this;
    }
    /**
     * Get postalCodeFirst4 value
     * @return string|null
     */
    public function getPostalCodeFirst4(): ?string
    {
        return $this->postalCodeFirst4;
    }
    /**
     * Set postalCodeFirst4 value
     * @param string $postalCodeFirst4
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setPostalCodeFirst4(?string $postalCodeFirst4 = null): self
    {
        // validation for constraint: string
        if (!is_null($postalCodeFirst4) && !is_string($postalCodeFirst4)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postalCodeFirst4, true), gettype($postalCodeFirst4)), __LINE__);
        }
        $this->postalCodeFirst4 = $postalCodeFirst4;
        
        return $this;
    }
    /**
     * Get productType value
     * @return string|null
     */
    public function getProductType(): ?string
    {
        return $this->productType;
    }
    /**
     * Set productType value
     * @param string $productType
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setProductType(?string $productType = null): self
    {
        // validation for constraint: string
        if (!is_null($productType) && !is_string($productType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productType, true), gettype($productType)), __LINE__);
        }
        $this->productType = $productType;
        
        return $this;
    }
    /**
     * Get productTypeId value
     * @return int|null
     */
    public function getProductTypeId(): ?int
    {
        return $this->productTypeId;
    }
    /**
     * Set productTypeId value
     * @param int $productTypeId
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setProductTypeId(?int $productTypeId = null): self
    {
        // validation for constraint: int
        if (!is_null($productTypeId) && !(is_int($productTypeId) || ctype_digit($productTypeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($productTypeId, true), gettype($productTypeId)), __LINE__);
        }
        $this->productTypeId = $productTypeId;
        
        return $this;
    }
    /**
     * Get purchaseSaleId value
     * @return int|null
     */
    public function getPurchaseSaleId(): ?int
    {
        return $this->purchaseSaleId;
    }
    /**
     * Set purchaseSaleId value
     * @param int $purchaseSaleId
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setPurchaseSaleId(?int $purchaseSaleId = null): self
    {
        // validation for constraint: int
        if (!is_null($purchaseSaleId) && !(is_int($purchaseSaleId) || ctype_digit($purchaseSaleId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($purchaseSaleId, true), gettype($purchaseSaleId)), __LINE__);
        }
        $this->purchaseSaleId = $purchaseSaleId;
        
        return $this;
    }
    /**
     * Get returnArrivalTime value
     * @return string|null
     */
    public function getReturnArrivalTime(): ?string
    {
        return $this->returnArrivalTime;
    }
    /**
     * Set returnArrivalTime value
     * @param string $returnArrivalTime
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setReturnArrivalTime(?string $returnArrivalTime = null): self
    {
        // validation for constraint: string
        if (!is_null($returnArrivalTime) && !is_string($returnArrivalTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnArrivalTime, true), gettype($returnArrivalTime)), __LINE__);
        }
        $this->returnArrivalTime = $returnArrivalTime;
        
        return $this;
    }
    /**
     * Get returnCarrier value
     * @return string|null
     */
    public function getReturnCarrier(): ?string
    {
        return $this->returnCarrier;
    }
    /**
     * Set returnCarrier value
     * @param string $returnCarrier
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setReturnCarrier(?string $returnCarrier = null): self
    {
        // validation for constraint: string
        if (!is_null($returnCarrier) && !is_string($returnCarrier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnCarrier, true), gettype($returnCarrier)), __LINE__);
        }
        $this->returnCarrier = $returnCarrier;
        
        return $this;
    }
    /**
     * Get returnDepartureCode value
     * @return string|null
     */
    public function getReturnDepartureCode(): ?string
    {
        return $this->returnDepartureCode;
    }
    /**
     * Set returnDepartureCode value
     * @param string $returnDepartureCode
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setReturnDepartureCode(?string $returnDepartureCode = null): self
    {
        // validation for constraint: string
        if (!is_null($returnDepartureCode) && !is_string($returnDepartureCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnDepartureCode, true), gettype($returnDepartureCode)), __LINE__);
        }
        $this->returnDepartureCode = $returnDepartureCode;
        
        return $this;
    }
    /**
     * Get returnDepartureDescription value
     * @return string|null
     */
    public function getReturnDepartureDescription(): ?string
    {
        return $this->returnDepartureDescription;
    }
    /**
     * Set returnDepartureDescription value
     * @param string $returnDepartureDescription
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setReturnDepartureDescription(?string $returnDepartureDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($returnDepartureDescription) && !is_string($returnDepartureDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnDepartureDescription, true), gettype($returnDepartureDescription)), __LINE__);
        }
        $this->returnDepartureDescription = $returnDepartureDescription;
        
        return $this;
    }
    /**
     * Get returnDepartureTime value
     * @return string|null
     */
    public function getReturnDepartureTime(): ?string
    {
        return $this->returnDepartureTime;
    }
    /**
     * Set returnDepartureTime value
     * @param string $returnDepartureTime
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setReturnDepartureTime(?string $returnDepartureTime = null): self
    {
        // validation for constraint: string
        if (!is_null($returnDepartureTime) && !is_string($returnDepartureTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnDepartureTime, true), gettype($returnDepartureTime)), __LINE__);
        }
        $this->returnDepartureTime = $returnDepartureTime;
        
        return $this;
    }
    /**
     * Get returnDestinationCode value
     * @return string|null
     */
    public function getReturnDestinationCode(): ?string
    {
        return $this->returnDestinationCode;
    }
    /**
     * Set returnDestinationCode value
     * @param string $returnDestinationCode
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setReturnDestinationCode(?string $returnDestinationCode = null): self
    {
        // validation for constraint: string
        if (!is_null($returnDestinationCode) && !is_string($returnDestinationCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnDestinationCode, true), gettype($returnDestinationCode)), __LINE__);
        }
        $this->returnDestinationCode = $returnDestinationCode;
        
        return $this;
    }
    /**
     * Get returnDestinationDescription value
     * @return string|null
     */
    public function getReturnDestinationDescription(): ?string
    {
        return $this->returnDestinationDescription;
    }
    /**
     * Set returnDestinationDescription value
     * @param string $returnDestinationDescription
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setReturnDestinationDescription(?string $returnDestinationDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($returnDestinationDescription) && !is_string($returnDestinationDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnDestinationDescription, true), gettype($returnDestinationDescription)), __LINE__);
        }
        $this->returnDestinationDescription = $returnDestinationDescription;
        
        return $this;
    }
    /**
     * Get returnFlightNo value
     * @return string|null
     */
    public function getReturnFlightNo(): ?string
    {
        return $this->returnFlightNo;
    }
    /**
     * Set returnFlightNo value
     * @param string $returnFlightNo
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setReturnFlightNo(?string $returnFlightNo = null): self
    {
        // validation for constraint: string
        if (!is_null($returnFlightNo) && !is_string($returnFlightNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnFlightNo, true), gettype($returnFlightNo)), __LINE__);
        }
        $this->returnFlightNo = $returnFlightNo;
        
        return $this;
    }
    /**
     * Get saleAmount value
     * @return float|null
     */
    public function getSaleAmount(): ?float
    {
        return $this->saleAmount;
    }
    /**
     * Set saleAmount value
     * @param float $saleAmount
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setSaleAmount(?float $saleAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($saleAmount) && !(is_float($saleAmount) || is_numeric($saleAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($saleAmount, true), gettype($saleAmount)), __LINE__);
        }
        $this->saleAmount = $saleAmount;
        
        return $this;
    }
    /**
     * Get sellItemId value
     * @return int|null
     */
    public function getSellItemId(): ?int
    {
        return $this->sellItemId;
    }
    /**
     * Set sellItemId value
     * @param int $sellItemId
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setSellItemId(?int $sellItemId = null): self
    {
        // validation for constraint: int
        if (!is_null($sellItemId) && !(is_int($sellItemId) || ctype_digit($sellItemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sellItemId, true), gettype($sellItemId)), __LINE__);
        }
        $this->sellItemId = $sellItemId;
        
        return $this;
    }
    /**
     * Get state value
     * @return string|null
     */
    public function getState(): ?string
    {
        return $this->state;
    }
    /**
     * Set state value
     * @param string $state
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setState(?string $state = null): self
    {
        // validation for constraint: string
        if (!is_null($state) && !is_string($state)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($state, true), gettype($state)), __LINE__);
        }
        $this->state = $state;
        
        return $this;
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;
        
        return $this;
    }
    /**
     * Get statusId value
     * @return int|null
     */
    public function getStatusId(): ?int
    {
        return $this->statusId;
    }
    /**
     * Set statusId value
     * @param int $statusId
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setStatusId(?int $statusId = null): self
    {
        // validation for constraint: int
        if (!is_null($statusId) && !(is_int($statusId) || ctype_digit($statusId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($statusId, true), gettype($statusId)), __LINE__);
        }
        $this->statusId = $statusId;
        
        return $this;
    }
    /**
     * Get subAgency value
     * @return string|null
     */
    public function getSubAgency(): ?string
    {
        return $this->subAgency;
    }
    /**
     * Set subAgency value
     * @param string $subAgency
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setSubAgency(?string $subAgency = null): self
    {
        // validation for constraint: string
        if (!is_null($subAgency) && !is_string($subAgency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subAgency, true), gettype($subAgency)), __LINE__);
        }
        $this->subAgency = $subAgency;
        
        return $this;
    }
    /**
     * Get supplierId value
     * @return int|null
     */
    public function getSupplierId(): ?int
    {
        return $this->supplierId;
    }
    /**
     * Set supplierId value
     * @param int $supplierId
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setSupplierId(?int $supplierId = null): self
    {
        // validation for constraint: int
        if (!is_null($supplierId) && !(is_int($supplierId) || ctype_digit($supplierId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($supplierId, true), gettype($supplierId)), __LINE__);
        }
        $this->supplierId = $supplierId;
        
        return $this;
    }
    /**
     * Get TDatabaseDate value
     * @return string|null
     */
    public function getTDatabaseDate(): ?string
    {
        return $this->TDatabaseDate;
    }
    /**
     * Set TDatabaseDate value
     * @param string $tDatabaseDate
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setTDatabaseDate(?string $tDatabaseDate = null): self
    {
        // validation for constraint: string
        if (!is_null($tDatabaseDate) && !is_string($tDatabaseDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tDatabaseDate, true), gettype($tDatabaseDate)), __LINE__);
        }
        $this->TDatabaseDate = $tDatabaseDate;
        
        return $this;
    }
    /**
     * Get TDayNoInMonth value
     * @return int|null
     */
    public function getTDayNoInMonth(): ?int
    {
        return $this->TDayNoInMonth;
    }
    /**
     * Set TDayNoInMonth value
     * @param int $tDayNoInMonth
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setTDayNoInMonth(?int $tDayNoInMonth = null): self
    {
        // validation for constraint: int
        if (!is_null($tDayNoInMonth) && !(is_int($tDayNoInMonth) || ctype_digit($tDayNoInMonth))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($tDayNoInMonth, true), gettype($tDayNoInMonth)), __LINE__);
        }
        $this->TDayNoInMonth = $tDayNoInMonth;
        
        return $this;
    }
    /**
     * Get TDayOfWeek value
     * @return string|null
     */
    public function getTDayOfWeek(): ?string
    {
        return $this->TDayOfWeek;
    }
    /**
     * Set TDayOfWeek value
     * @param string $tDayOfWeek
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setTDayOfWeek(?string $tDayOfWeek = null): self
    {
        // validation for constraint: string
        if (!is_null($tDayOfWeek) && !is_string($tDayOfWeek)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tDayOfWeek, true), gettype($tDayOfWeek)), __LINE__);
        }
        $this->TDayOfWeek = $tDayOfWeek;
        
        return $this;
    }
    /**
     * Get TMonth value
     * @return int|null
     */
    public function getTMonth(): ?int
    {
        return $this->TMonth;
    }
    /**
     * Set TMonth value
     * @param int $tMonth
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setTMonth(?int $tMonth = null): self
    {
        // validation for constraint: int
        if (!is_null($tMonth) && !(is_int($tMonth) || ctype_digit($tMonth))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($tMonth, true), gettype($tMonth)), __LINE__);
        }
        $this->TMonth = $tMonth;
        
        return $this;
    }
    /**
     * Get TQuarter value
     * @return int|null
     */
    public function getTQuarter(): ?int
    {
        return $this->TQuarter;
    }
    /**
     * Set TQuarter value
     * @param int $tQuarter
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setTQuarter(?int $tQuarter = null): self
    {
        // validation for constraint: int
        if (!is_null($tQuarter) && !(is_int($tQuarter) || ctype_digit($tQuarter))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($tQuarter, true), gettype($tQuarter)), __LINE__);
        }
        $this->TQuarter = $tQuarter;
        
        return $this;
    }
    /**
     * Get TWeekNoInYear value
     * @return int|null
     */
    public function getTWeekNoInYear(): ?int
    {
        return $this->TWeekNoInYear;
    }
    /**
     * Set TWeekNoInYear value
     * @param int $tWeekNoInYear
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setTWeekNoInYear(?int $tWeekNoInYear = null): self
    {
        // validation for constraint: int
        if (!is_null($tWeekNoInYear) && !(is_int($tWeekNoInYear) || ctype_digit($tWeekNoInYear))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($tWeekNoInYear, true), gettype($tWeekNoInYear)), __LINE__);
        }
        $this->TWeekNoInYear = $tWeekNoInYear;
        
        return $this;
    }
    /**
     * Get TWeekend value
     * @return bool|null
     */
    public function getTWeekend(): ?bool
    {
        return $this->TWeekend;
    }
    /**
     * Set TWeekend value
     * @param bool $tWeekend
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setTWeekend(?bool $tWeekend = null): self
    {
        // validation for constraint: boolean
        if (!is_null($tWeekend) && !is_bool($tWeekend)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($tWeekend, true), gettype($tWeekend)), __LINE__);
        }
        $this->TWeekend = $tWeekend;
        
        return $this;
    }
    /**
     * Get TYear value
     * @return int|null
     */
    public function getTYear(): ?int
    {
        return $this->TYear;
    }
    /**
     * Set TYear value
     * @param int $tYear
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setTYear(?int $tYear = null): self
    {
        // validation for constraint: int
        if (!is_null($tYear) && !(is_int($tYear) || ctype_digit($tYear))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($tYear, true), gettype($tYear)), __LINE__);
        }
        $this->TYear = $tYear;
        
        return $this;
    }
    /**
     * Get taxPartPercent value
     * @return float|null
     */
    public function getTaxPartPercent(): ?float
    {
        return $this->taxPartPercent;
    }
    /**
     * Set taxPartPercent value
     * @param float $taxPartPercent
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setTaxPartPercent(?float $taxPartPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($taxPartPercent) && !(is_float($taxPartPercent) || is_numeric($taxPartPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($taxPartPercent, true), gettype($taxPartPercent)), __LINE__);
        }
        $this->taxPartPercent = $taxPartPercent;
        
        return $this;
    }
    /**
     * Get totalAmount value
     * @return float|null
     */
    public function getTotalAmount(): ?float
    {
        return $this->totalAmount;
    }
    /**
     * Set totalAmount value
     * @param float $totalAmount
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setTotalAmount(?float $totalAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($totalAmount) && !(is_float($totalAmount) || is_numeric($totalAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalAmount, true), gettype($totalAmount)), __LINE__);
        }
        $this->totalAmount = $totalAmount;
        
        return $this;
    }
    /**
     * Get transportKey value
     * @return string|null
     */
    public function getTransportKey(): ?string
    {
        return $this->transportKey;
    }
    /**
     * Set transportKey value
     * @param string $transportKey
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setTransportKey(?string $transportKey = null): self
    {
        // validation for constraint: string
        if (!is_null($transportKey) && !is_string($transportKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transportKey, true), gettype($transportKey)), __LINE__);
        }
        $this->transportKey = $transportKey;
        
        return $this;
    }
    /**
     * Get travelDateId value
     * @return int|null
     */
    public function getTravelDateId(): ?int
    {
        return $this->travelDateId;
    }
    /**
     * Set travelDateId value
     * @param int $travelDateId
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setTravelDateId(?int $travelDateId = null): self
    {
        // validation for constraint: int
        if (!is_null($travelDateId) && !(is_int($travelDateId) || ctype_digit($travelDateId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($travelDateId, true), gettype($travelDateId)), __LINE__);
        }
        $this->travelDateId = $travelDateId;
        
        return $this;
    }
    /**
     * Get travelDuration value
     * @return int|null
     */
    public function getTravelDuration(): ?int
    {
        return $this->travelDuration;
    }
    /**
     * Set travelDuration value
     * @param int $travelDuration
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setTravelDuration(?int $travelDuration = null): self
    {
        // validation for constraint: int
        if (!is_null($travelDuration) && !(is_int($travelDuration) || ctype_digit($travelDuration))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($travelDuration, true), gettype($travelDuration)), __LINE__);
        }
        $this->travelDuration = $travelDuration;
        
        return $this;
    }
    /**
     * Get travelPrice value
     * @return float|null
     */
    public function getTravelPrice(): ?float
    {
        return $this->travelPrice;
    }
    /**
     * Set travelPrice value
     * @param float $travelPrice
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setTravelPrice(?float $travelPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($travelPrice) && !(is_float($travelPrice) || is_numeric($travelPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($travelPrice, true), gettype($travelPrice)), __LINE__);
        }
        $this->travelPrice = $travelPrice;
        
        return $this;
    }
    /**
     * Get travelType value
     * @return string|null
     */
    public function getTravelType(): ?string
    {
        return $this->travelType;
    }
    /**
     * Set travelType value
     * @param string $travelType
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setTravelType(?string $travelType = null): self
    {
        // validation for constraint: string
        if (!is_null($travelType) && !is_string($travelType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelType, true), gettype($travelType)), __LINE__);
        }
        $this->travelType = $travelType;
        
        return $this;
    }
    /**
     * Get traveltypeKey value
     * @return string|null
     */
    public function getTraveltypeKey(): ?string
    {
        return $this->traveltypeKey;
    }
    /**
     * Set traveltypeKey value
     * @param string $traveltypeKey
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setTraveltypeKey(?string $traveltypeKey = null): self
    {
        // validation for constraint: string
        if (!is_null($traveltypeKey) && !is_string($traveltypeKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($traveltypeKey, true), gettype($traveltypeKey)), __LINE__);
        }
        $this->traveltypeKey = $traveltypeKey;
        
        return $this;
    }
    /**
     * Get turnaroundPoint value
     * @return string|null
     */
    public function getTurnaroundPoint(): ?string
    {
        return $this->turnaroundPoint;
    }
    /**
     * Set turnaroundPoint value
     * @param string $turnaroundPoint
     * @return \Pggns\MidocoApi\Mis\StructType\AggYqmwdSellItemFactDTO
     */
    public function setTurnaroundPoint(?string $turnaroundPoint = null): self
    {
        // validation for constraint: string
        if (!is_null($turnaroundPoint) && !is_string($turnaroundPoint)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($turnaroundPoint, true), gettype($turnaroundPoint)), __LINE__);
        }
        $this->turnaroundPoint = $turnaroundPoint;
        
        return $this;
    }
}
