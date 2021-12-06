<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoBalanceListCriteriaType StructType
 * @subpackage Structs
 */
class MidocoBalanceListCriteriaType extends AbstractStructBase
{
    /**
     * The accountType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $accountType = null;
    /**
     * The accountIdFrom
     * @var string|null
     */
    protected ?string $accountIdFrom = null;
    /**
     * The accountIdTo
     * @var string|null
     */
    protected ?string $accountIdTo = null;
    /**
     * The bookingPeriodStart
     * @var int|null
     */
    protected ?int $bookingPeriodStart = null;
    /**
     * The bookingPeriodEnd
     * @var int|null
     */
    protected ?int $bookingPeriodEnd = null;
    /**
     * The bookingYear
     * @var int|null
     */
    protected ?int $bookingYear = null;
    /**
     * The bookingDateStart
     * @var string|null
     */
    protected ?string $bookingDateStart = null;
    /**
     * The bookingDateEnd
     * @var string|null
     */
    protected ?string $bookingDateEnd = null;
    /**
     * The useSummaryAccounts
     * @var bool|null
     */
    protected ?bool $useSummaryAccounts = null;
    /**
     * The receiptDateStart
     * @var string|null
     */
    protected ?string $receiptDateStart = null;
    /**
     * The receiptDateEnd
     * @var string|null
     */
    protected ?string $receiptDateEnd = null;
    /**
     * The exportId
     * @var int|null
     */
    protected ?int $exportId = null;
    /**
     * The isExported
     * @var bool|null
     */
    protected ?bool $isExported = null;
    /**
     * The monthlyView
     * @var bool|null
     */
    protected ?bool $monthlyView = null;
    /**
     * The isSortBalancePosition
     * @var bool|null
     */
    protected ?bool $isSortBalancePosition = null;
    /**
     * Constructor method for MidocoBalanceListCriteriaType
     * @uses MidocoBalanceListCriteriaType::setAccountType()
     * @uses MidocoBalanceListCriteriaType::setAccountIdFrom()
     * @uses MidocoBalanceListCriteriaType::setAccountIdTo()
     * @uses MidocoBalanceListCriteriaType::setBookingPeriodStart()
     * @uses MidocoBalanceListCriteriaType::setBookingPeriodEnd()
     * @uses MidocoBalanceListCriteriaType::setBookingYear()
     * @uses MidocoBalanceListCriteriaType::setBookingDateStart()
     * @uses MidocoBalanceListCriteriaType::setBookingDateEnd()
     * @uses MidocoBalanceListCriteriaType::setUseSummaryAccounts()
     * @uses MidocoBalanceListCriteriaType::setReceiptDateStart()
     * @uses MidocoBalanceListCriteriaType::setReceiptDateEnd()
     * @uses MidocoBalanceListCriteriaType::setExportId()
     * @uses MidocoBalanceListCriteriaType::setIsExported()
     * @uses MidocoBalanceListCriteriaType::setMonthlyView()
     * @uses MidocoBalanceListCriteriaType::setIsSortBalancePosition()
     * @param string[] $accountType
     * @param string $accountIdFrom
     * @param string $accountIdTo
     * @param int $bookingPeriodStart
     * @param int $bookingPeriodEnd
     * @param int $bookingYear
     * @param string $bookingDateStart
     * @param string $bookingDateEnd
     * @param bool $useSummaryAccounts
     * @param string $receiptDateStart
     * @param string $receiptDateEnd
     * @param int $exportId
     * @param bool $isExported
     * @param bool $monthlyView
     * @param bool $isSortBalancePosition
     */
    public function __construct(?array $accountType = null, ?string $accountIdFrom = null, ?string $accountIdTo = null, ?int $bookingPeriodStart = null, ?int $bookingPeriodEnd = null, ?int $bookingYear = null, ?string $bookingDateStart = null, ?string $bookingDateEnd = null, ?bool $useSummaryAccounts = null, ?string $receiptDateStart = null, ?string $receiptDateEnd = null, ?int $exportId = null, ?bool $isExported = null, ?bool $monthlyView = null, ?bool $isSortBalancePosition = null)
    {
        $this
            ->setAccountType($accountType)
            ->setAccountIdFrom($accountIdFrom)
            ->setAccountIdTo($accountIdTo)
            ->setBookingPeriodStart($bookingPeriodStart)
            ->setBookingPeriodEnd($bookingPeriodEnd)
            ->setBookingYear($bookingYear)
            ->setBookingDateStart($bookingDateStart)
            ->setBookingDateEnd($bookingDateEnd)
            ->setUseSummaryAccounts($useSummaryAccounts)
            ->setReceiptDateStart($receiptDateStart)
            ->setReceiptDateEnd($receiptDateEnd)
            ->setExportId($exportId)
            ->setIsExported($isExported)
            ->setMonthlyView($monthlyView)
            ->setIsSortBalancePosition($isSortBalancePosition);
    }
    /**
     * Get accountType value
     * @return string[]
     */
    public function getAccountType(): ?array
    {
        return $this->accountType;
    }
    /**
     * This method is responsible for validating the values passed to the setAccountType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAccountType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAccountTypeForArrayConstraintsFromSetAccountType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoBalanceListCriteriaTypeAccountTypeItem) {
            // validation for constraint: itemType
            if (!is_string($midocoBalanceListCriteriaTypeAccountTypeItem)) {
                $invalidValues[] = is_object($midocoBalanceListCriteriaTypeAccountTypeItem) ? get_class($midocoBalanceListCriteriaTypeAccountTypeItem) : sprintf('%s(%s)', gettype($midocoBalanceListCriteriaTypeAccountTypeItem), var_export($midocoBalanceListCriteriaTypeAccountTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The accountType property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set accountType value
     * @throws InvalidArgumentException
     * @param string[] $accountType
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBalanceListCriteriaType
     */
    public function setAccountType(?array $accountType = null): self
    {
        // validation for constraint: array
        if ('' !== ($accountTypeArrayErrorMessage = self::validateAccountTypeForArrayConstraintsFromSetAccountType($accountType))) {
            throw new InvalidArgumentException($accountTypeArrayErrorMessage, __LINE__);
        }
        $this->accountType = $accountType;
        
        return $this;
    }
    /**
     * Add item to accountType value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBalanceListCriteriaType
     */
    public function addToAccountType(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The accountType property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->accountType[] = $item;
        
        return $this;
    }
    /**
     * Get accountIdFrom value
     * @return string|null
     */
    public function getAccountIdFrom(): ?string
    {
        return $this->accountIdFrom;
    }
    /**
     * Set accountIdFrom value
     * @param string $accountIdFrom
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBalanceListCriteriaType
     */
    public function setAccountIdFrom(?string $accountIdFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($accountIdFrom) && !is_string($accountIdFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountIdFrom, true), gettype($accountIdFrom)), __LINE__);
        }
        $this->accountIdFrom = $accountIdFrom;
        
        return $this;
    }
    /**
     * Get accountIdTo value
     * @return string|null
     */
    public function getAccountIdTo(): ?string
    {
        return $this->accountIdTo;
    }
    /**
     * Set accountIdTo value
     * @param string $accountIdTo
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBalanceListCriteriaType
     */
    public function setAccountIdTo(?string $accountIdTo = null): self
    {
        // validation for constraint: string
        if (!is_null($accountIdTo) && !is_string($accountIdTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountIdTo, true), gettype($accountIdTo)), __LINE__);
        }
        $this->accountIdTo = $accountIdTo;
        
        return $this;
    }
    /**
     * Get bookingPeriodStart value
     * @return int|null
     */
    public function getBookingPeriodStart(): ?int
    {
        return $this->bookingPeriodStart;
    }
    /**
     * Set bookingPeriodStart value
     * @param int $bookingPeriodStart
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBalanceListCriteriaType
     */
    public function setBookingPeriodStart(?int $bookingPeriodStart = null): self
    {
        // validation for constraint: int
        if (!is_null($bookingPeriodStart) && !(is_int($bookingPeriodStart) || ctype_digit($bookingPeriodStart))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bookingPeriodStart, true), gettype($bookingPeriodStart)), __LINE__);
        }
        $this->bookingPeriodStart = $bookingPeriodStart;
        
        return $this;
    }
    /**
     * Get bookingPeriodEnd value
     * @return int|null
     */
    public function getBookingPeriodEnd(): ?int
    {
        return $this->bookingPeriodEnd;
    }
    /**
     * Set bookingPeriodEnd value
     * @param int $bookingPeriodEnd
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBalanceListCriteriaType
     */
    public function setBookingPeriodEnd(?int $bookingPeriodEnd = null): self
    {
        // validation for constraint: int
        if (!is_null($bookingPeriodEnd) && !(is_int($bookingPeriodEnd) || ctype_digit($bookingPeriodEnd))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bookingPeriodEnd, true), gettype($bookingPeriodEnd)), __LINE__);
        }
        $this->bookingPeriodEnd = $bookingPeriodEnd;
        
        return $this;
    }
    /**
     * Get bookingYear value
     * @return int|null
     */
    public function getBookingYear(): ?int
    {
        return $this->bookingYear;
    }
    /**
     * Set bookingYear value
     * @param int $bookingYear
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBalanceListCriteriaType
     */
    public function setBookingYear(?int $bookingYear = null): self
    {
        // validation for constraint: int
        if (!is_null($bookingYear) && !(is_int($bookingYear) || ctype_digit($bookingYear))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bookingYear, true), gettype($bookingYear)), __LINE__);
        }
        $this->bookingYear = $bookingYear;
        
        return $this;
    }
    /**
     * Get bookingDateStart value
     * @return string|null
     */
    public function getBookingDateStart(): ?string
    {
        return $this->bookingDateStart;
    }
    /**
     * Set bookingDateStart value
     * @param string $bookingDateStart
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBalanceListCriteriaType
     */
    public function setBookingDateStart(?string $bookingDateStart = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingDateStart) && !is_string($bookingDateStart)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingDateStart, true), gettype($bookingDateStart)), __LINE__);
        }
        $this->bookingDateStart = $bookingDateStart;
        
        return $this;
    }
    /**
     * Get bookingDateEnd value
     * @return string|null
     */
    public function getBookingDateEnd(): ?string
    {
        return $this->bookingDateEnd;
    }
    /**
     * Set bookingDateEnd value
     * @param string $bookingDateEnd
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBalanceListCriteriaType
     */
    public function setBookingDateEnd(?string $bookingDateEnd = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingDateEnd) && !is_string($bookingDateEnd)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingDateEnd, true), gettype($bookingDateEnd)), __LINE__);
        }
        $this->bookingDateEnd = $bookingDateEnd;
        
        return $this;
    }
    /**
     * Get useSummaryAccounts value
     * @return bool|null
     */
    public function getUseSummaryAccounts(): ?bool
    {
        return $this->useSummaryAccounts;
    }
    /**
     * Set useSummaryAccounts value
     * @param bool $useSummaryAccounts
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBalanceListCriteriaType
     */
    public function setUseSummaryAccounts(?bool $useSummaryAccounts = null): self
    {
        // validation for constraint: boolean
        if (!is_null($useSummaryAccounts) && !is_bool($useSummaryAccounts)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($useSummaryAccounts, true), gettype($useSummaryAccounts)), __LINE__);
        }
        $this->useSummaryAccounts = $useSummaryAccounts;
        
        return $this;
    }
    /**
     * Get receiptDateStart value
     * @return string|null
     */
    public function getReceiptDateStart(): ?string
    {
        return $this->receiptDateStart;
    }
    /**
     * Set receiptDateStart value
     * @param string $receiptDateStart
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBalanceListCriteriaType
     */
    public function setReceiptDateStart(?string $receiptDateStart = null): self
    {
        // validation for constraint: string
        if (!is_null($receiptDateStart) && !is_string($receiptDateStart)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiptDateStart, true), gettype($receiptDateStart)), __LINE__);
        }
        $this->receiptDateStart = $receiptDateStart;
        
        return $this;
    }
    /**
     * Get receiptDateEnd value
     * @return string|null
     */
    public function getReceiptDateEnd(): ?string
    {
        return $this->receiptDateEnd;
    }
    /**
     * Set receiptDateEnd value
     * @param string $receiptDateEnd
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBalanceListCriteriaType
     */
    public function setReceiptDateEnd(?string $receiptDateEnd = null): self
    {
        // validation for constraint: string
        if (!is_null($receiptDateEnd) && !is_string($receiptDateEnd)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiptDateEnd, true), gettype($receiptDateEnd)), __LINE__);
        }
        $this->receiptDateEnd = $receiptDateEnd;
        
        return $this;
    }
    /**
     * Get exportId value
     * @return int|null
     */
    public function getExportId(): ?int
    {
        return $this->exportId;
    }
    /**
     * Set exportId value
     * @param int $exportId
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBalanceListCriteriaType
     */
    public function setExportId(?int $exportId = null): self
    {
        // validation for constraint: int
        if (!is_null($exportId) && !(is_int($exportId) || ctype_digit($exportId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($exportId, true), gettype($exportId)), __LINE__);
        }
        $this->exportId = $exportId;
        
        return $this;
    }
    /**
     * Get isExported value
     * @return bool|null
     */
    public function getIsExported(): ?bool
    {
        return $this->isExported;
    }
    /**
     * Set isExported value
     * @param bool $isExported
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBalanceListCriteriaType
     */
    public function setIsExported(?bool $isExported = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isExported) && !is_bool($isExported)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isExported, true), gettype($isExported)), __LINE__);
        }
        $this->isExported = $isExported;
        
        return $this;
    }
    /**
     * Get monthlyView value
     * @return bool|null
     */
    public function getMonthlyView(): ?bool
    {
        return $this->monthlyView;
    }
    /**
     * Set monthlyView value
     * @param bool $monthlyView
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBalanceListCriteriaType
     */
    public function setMonthlyView(?bool $monthlyView = null): self
    {
        // validation for constraint: boolean
        if (!is_null($monthlyView) && !is_bool($monthlyView)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($monthlyView, true), gettype($monthlyView)), __LINE__);
        }
        $this->monthlyView = $monthlyView;
        
        return $this;
    }
    /**
     * Get isSortBalancePosition value
     * @return bool|null
     */
    public function getIsSortBalancePosition(): ?bool
    {
        return $this->isSortBalancePosition;
    }
    /**
     * Set isSortBalancePosition value
     * @param bool $isSortBalancePosition
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBalanceListCriteriaType
     */
    public function setIsSortBalancePosition(?bool $isSortBalancePosition = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isSortBalancePosition) && !is_bool($isSortBalancePosition)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isSortBalancePosition, true), gettype($isSortBalancePosition)), __LINE__);
        }
        $this->isSortBalancePosition = $isSortBalancePosition;
        
        return $this;
    }
}
