<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoInvoiceDataListCriteriaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoInvoiceDataListCriteriaType extends AbstractStructBase
{
    /**
     * The orgUnits
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $orgUnits = null;
    /**
     * The debitorNo
     * @var string|null
     */
    protected ?string $debitorNo = null;
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
     * The exportDateStart
     * @var string|null
     */
    protected ?string $exportDateStart = null;
    /**
     * The exportDateEnd
     * @var string|null
     */
    protected ?string $exportDateEnd = null;
    /**
     * Constructor method for MidocoInvoiceDataListCriteriaType
     * @uses MidocoInvoiceDataListCriteriaType::setOrgUnits()
     * @uses MidocoInvoiceDataListCriteriaType::setDebitorNo()
     * @uses MidocoInvoiceDataListCriteriaType::setReceiptDateStart()
     * @uses MidocoInvoiceDataListCriteriaType::setReceiptDateEnd()
     * @uses MidocoInvoiceDataListCriteriaType::setExportDateStart()
     * @uses MidocoInvoiceDataListCriteriaType::setExportDateEnd()
     * @param string[] $orgUnits
     * @param string $debitorNo
     * @param string $receiptDateStart
     * @param string $receiptDateEnd
     * @param string $exportDateStart
     * @param string $exportDateEnd
     */
    public function __construct(?array $orgUnits = null, ?string $debitorNo = null, ?string $receiptDateStart = null, ?string $receiptDateEnd = null, ?string $exportDateStart = null, ?string $exportDateEnd = null)
    {
        $this
            ->setOrgUnits($orgUnits)
            ->setDebitorNo($debitorNo)
            ->setReceiptDateStart($receiptDateStart)
            ->setReceiptDateEnd($receiptDateEnd)
            ->setExportDateStart($exportDateStart)
            ->setExportDateEnd($exportDateEnd);
    }
    /**
     * Get orgUnits value
     * @return string[]
     */
    public function getOrgUnits(): ?array
    {
        return $this->orgUnits;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setOrgUnits method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrgUnits method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOrgUnitsForArrayConstraintFromSetOrgUnits(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoInvoiceDataListCriteriaTypeOrgUnitsItem) {
            // validation for constraint: itemType
            if (!is_string($midocoInvoiceDataListCriteriaTypeOrgUnitsItem)) {
                $invalidValues[] = is_object($midocoInvoiceDataListCriteriaTypeOrgUnitsItem) ? get_class($midocoInvoiceDataListCriteriaTypeOrgUnitsItem) : sprintf('%s(%s)', gettype($midocoInvoiceDataListCriteriaTypeOrgUnitsItem), var_export($midocoInvoiceDataListCriteriaTypeOrgUnitsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The orgUnits property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set orgUnits value
     * @throws InvalidArgumentException
     * @param string[] $orgUnits
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoInvoiceDataListCriteriaType
     */
    public function setOrgUnits(?array $orgUnits = null): self
    {
        // validation for constraint: array
        if ('' !== ($orgUnitsArrayErrorMessage = self::validateOrgUnitsForArrayConstraintFromSetOrgUnits($orgUnits))) {
            throw new InvalidArgumentException($orgUnitsArrayErrorMessage, __LINE__);
        }
        $this->orgUnits = $orgUnits;
        
        return $this;
    }
    /**
     * Add item to orgUnits value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoInvoiceDataListCriteriaType
     */
    public function addToOrgUnits(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The orgUnits property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->orgUnits[] = $item;
        
        return $this;
    }
    /**
     * Get debitorNo value
     * @return string|null
     */
    public function getDebitorNo(): ?string
    {
        return $this->debitorNo;
    }
    /**
     * Set debitorNo value
     * @param string $debitorNo
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoInvoiceDataListCriteriaType
     */
    public function setDebitorNo(?string $debitorNo = null): self
    {
        // validation for constraint: string
        if (!is_null($debitorNo) && !is_string($debitorNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($debitorNo, true), gettype($debitorNo)), __LINE__);
        }
        $this->debitorNo = $debitorNo;
        
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoInvoiceDataListCriteriaType
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoInvoiceDataListCriteriaType
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
     * Get exportDateStart value
     * @return string|null
     */
    public function getExportDateStart(): ?string
    {
        return $this->exportDateStart;
    }
    /**
     * Set exportDateStart value
     * @param string $exportDateStart
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoInvoiceDataListCriteriaType
     */
    public function setExportDateStart(?string $exportDateStart = null): self
    {
        // validation for constraint: string
        if (!is_null($exportDateStart) && !is_string($exportDateStart)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exportDateStart, true), gettype($exportDateStart)), __LINE__);
        }
        $this->exportDateStart = $exportDateStart;
        
        return $this;
    }
    /**
     * Get exportDateEnd value
     * @return string|null
     */
    public function getExportDateEnd(): ?string
    {
        return $this->exportDateEnd;
    }
    /**
     * Set exportDateEnd value
     * @param string $exportDateEnd
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoInvoiceDataListCriteriaType
     */
    public function setExportDateEnd(?string $exportDateEnd = null): self
    {
        // validation for constraint: string
        if (!is_null($exportDateEnd) && !is_string($exportDateEnd)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exportDateEnd, true), gettype($exportDateEnd)), __LINE__);
        }
        $this->exportDateEnd = $exportDateEnd;
        
        return $this;
    }
}
