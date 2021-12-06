<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoVatReconciliationCriteriaType StructType
 * @subpackage Structs
 */
class MidocoVatReconciliationCriteriaType extends AbstractStructBase
{
    /**
     * The vatCode
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $vatCode = null;
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
     * @var int|null
     */
    protected ?int $isExported = null;
    /**
     * Constructor method for MidocoVatReconciliationCriteriaType
     * @uses MidocoVatReconciliationCriteriaType::setVatCode()
     * @uses MidocoVatReconciliationCriteriaType::setBookingPeriodStart()
     * @uses MidocoVatReconciliationCriteriaType::setBookingPeriodEnd()
     * @uses MidocoVatReconciliationCriteriaType::setBookingYear()
     * @uses MidocoVatReconciliationCriteriaType::setReceiptDateStart()
     * @uses MidocoVatReconciliationCriteriaType::setReceiptDateEnd()
     * @uses MidocoVatReconciliationCriteriaType::setExportId()
     * @uses MidocoVatReconciliationCriteriaType::setIsExported()
     * @param string[] $vatCode
     * @param int $bookingPeriodStart
     * @param int $bookingPeriodEnd
     * @param int $bookingYear
     * @param string $receiptDateStart
     * @param string $receiptDateEnd
     * @param int $exportId
     * @param int $isExported
     */
    public function __construct(?array $vatCode = null, ?int $bookingPeriodStart = null, ?int $bookingPeriodEnd = null, ?int $bookingYear = null, ?string $receiptDateStart = null, ?string $receiptDateEnd = null, ?int $exportId = null, ?int $isExported = null)
    {
        $this
            ->setVatCode($vatCode)
            ->setBookingPeriodStart($bookingPeriodStart)
            ->setBookingPeriodEnd($bookingPeriodEnd)
            ->setBookingYear($bookingYear)
            ->setReceiptDateStart($receiptDateStart)
            ->setReceiptDateEnd($receiptDateEnd)
            ->setExportId($exportId)
            ->setIsExported($isExported);
    }
    /**
     * Get vatCode value
     * @return string[]
     */
    public function getVatCode(): ?array
    {
        return $this->vatCode;
    }
    /**
     * This method is responsible for validating the values passed to the setVatCode method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVatCode method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateVatCodeForArrayConstraintsFromSetVatCode(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoVatReconciliationCriteriaTypeVatCodeItem) {
            // validation for constraint: itemType
            if (!is_string($midocoVatReconciliationCriteriaTypeVatCodeItem)) {
                $invalidValues[] = is_object($midocoVatReconciliationCriteriaTypeVatCodeItem) ? get_class($midocoVatReconciliationCriteriaTypeVatCodeItem) : sprintf('%s(%s)', gettype($midocoVatReconciliationCriteriaTypeVatCodeItem), var_export($midocoVatReconciliationCriteriaTypeVatCodeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The vatCode property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set vatCode value
     * @throws InvalidArgumentException
     * @param string[] $vatCode
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoVatReconciliationCriteriaType
     */
    public function setVatCode(?array $vatCode = null): self
    {
        // validation for constraint: array
        if ('' !== ($vatCodeArrayErrorMessage = self::validateVatCodeForArrayConstraintsFromSetVatCode($vatCode))) {
            throw new InvalidArgumentException($vatCodeArrayErrorMessage, __LINE__);
        }
        $this->vatCode = $vatCode;
        
        return $this;
    }
    /**
     * Add item to vatCode value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoVatReconciliationCriteriaType
     */
    public function addToVatCode(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The vatCode property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->vatCode[] = $item;
        
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoVatReconciliationCriteriaType
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoVatReconciliationCriteriaType
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoVatReconciliationCriteriaType
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoVatReconciliationCriteriaType
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoVatReconciliationCriteriaType
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoVatReconciliationCriteriaType
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
     * @return int|null
     */
    public function getIsExported(): ?int
    {
        return $this->isExported;
    }
    /**
     * Set isExported value
     * @param int $isExported
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoVatReconciliationCriteriaType
     */
    public function setIsExported(?int $isExported = null): self
    {
        // validation for constraint: int
        if (!is_null($isExported) && !(is_int($isExported) || ctype_digit($isExported))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($isExported, true), gettype($isExported)), __LINE__);
        }
        $this->isExported = $isExported;
        
        return $this;
    }
}
