<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoExtDocumentDesc StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoExtDocumentDesc extends AbstractStructBase
{
    /**
     * The documentType
     * @var string|null
     */
    protected ?string $documentType = null;
    /**
     * The MidocoBillingDocument
     * Meta information extracted from the WSDL
     * - choice: MidocoBillingDocument | MidocoInvoice | MidocoReceipt | CashBookInfo
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: order:MidocoBillingDocument
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoBillingDocument|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoBillingDocument $MidocoBillingDocument = null;
    /**
     * The MidocoInvoice
     * Meta information extracted from the WSDL
     * - choice: MidocoBillingDocument | MidocoInvoice | MidocoReceipt | CashBookInfo
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: order:MidocoInvoice
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoInvoice|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoInvoice $MidocoInvoice = null;
    /**
     * The MidocoReceipt
     * Meta information extracted from the WSDL
     * - choice: MidocoBillingDocument | MidocoInvoice | MidocoReceipt | CashBookInfo
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: order:MidocoReceipt
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoReceipt|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoReceipt $MidocoReceipt = null;
    /**
     * The CashBookInfo
     * Meta information extracted from the WSDL
     * - choice: MidocoBillingDocument | MidocoInvoice | MidocoReceipt | CashBookInfo
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: order:CashBookInfo
     * @var \Pggns\MidocoApi\Documents\StructType\CashBookInfo|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\CashBookInfo $CashBookInfo = null;
    /**
     * The refDocumentNumber
     * @var string|null
     */
    protected ?string $refDocumentNumber = null;
    /**
     * Constructor method for MidocoExtDocumentDesc
     * @uses MidocoExtDocumentDesc::setDocumentType()
     * @uses MidocoExtDocumentDesc::setMidocoBillingDocument()
     * @uses MidocoExtDocumentDesc::setMidocoInvoice()
     * @uses MidocoExtDocumentDesc::setMidocoReceipt()
     * @uses MidocoExtDocumentDesc::setCashBookInfo()
     * @uses MidocoExtDocumentDesc::setRefDocumentNumber()
     * @param string $documentType
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoBillingDocument $midocoBillingDocument
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoInvoice $midocoInvoice
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoReceipt $midocoReceipt
     * @param \Pggns\MidocoApi\Documents\StructType\CashBookInfo $cashBookInfo
     * @param string $refDocumentNumber
     */
    public function __construct(?string $documentType = null, ?\Pggns\MidocoApi\Documents\StructType\MidocoBillingDocument $midocoBillingDocument = null, ?\Pggns\MidocoApi\Documents\StructType\MidocoInvoice $midocoInvoice = null, ?\Pggns\MidocoApi\Documents\StructType\MidocoReceipt $midocoReceipt = null, ?\Pggns\MidocoApi\Documents\StructType\CashBookInfo $cashBookInfo = null, ?string $refDocumentNumber = null)
    {
        $this
            ->setDocumentType($documentType)
            ->setMidocoBillingDocument($midocoBillingDocument)
            ->setMidocoInvoice($midocoInvoice)
            ->setMidocoReceipt($midocoReceipt)
            ->setCashBookInfo($cashBookInfo)
            ->setRefDocumentNumber($refDocumentNumber);
    }
    /**
     * Get documentType value
     * @return string|null
     */
    public function getDocumentType(): ?string
    {
        return $this->documentType;
    }
    /**
     * Set documentType value
     * @uses \Pggns\MidocoApi\Documents\EnumType\ExtDocumentType::valueIsValid()
     * @uses \Pggns\MidocoApi\Documents\EnumType\ExtDocumentType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $documentType
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoExtDocumentDesc
     */
    public function setDocumentType(?string $documentType = null): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Documents\EnumType\ExtDocumentType::valueIsValid($documentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Documents\EnumType\ExtDocumentType', is_array($documentType) ? implode(', ', $documentType) : var_export($documentType, true), implode(', ', \Pggns\MidocoApi\Documents\EnumType\ExtDocumentType::getValidValues())), __LINE__);
        }
        $this->documentType = $documentType;
        
        return $this;
    }
    /**
     * Get MidocoBillingDocument value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoBillingDocument|null
     */
    public function getMidocoBillingDocument(): ?\Pggns\MidocoApi\Documents\StructType\MidocoBillingDocument
    {
        return $this->MidocoBillingDocument ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoBillingDocument method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBillingDocument method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateMidocoBillingDocumentForChoiceConstraintFromSetMidocoBillingDocument($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'MidocoInvoice',
            'MidocoReceipt',
            'CashBookInfo',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property MidocoBillingDocument can\'t be set as the property %s is already set. Only one property must be set among these properties: MidocoBillingDocument, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set MidocoBillingDocument value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoBillingDocument $midocoBillingDocument
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoExtDocumentDesc
     */
    public function setMidocoBillingDocument(?\Pggns\MidocoApi\Documents\StructType\MidocoBillingDocument $midocoBillingDocument = null): self
    {
        // validation for constraint: choice(MidocoBillingDocument, MidocoInvoice, MidocoReceipt, CashBookInfo)
        if ('' !== ($midocoBillingDocumentChoiceErrorMessage = self::validateMidocoBillingDocumentForChoiceConstraintFromSetMidocoBillingDocument($midocoBillingDocument))) {
            throw new InvalidArgumentException($midocoBillingDocumentChoiceErrorMessage, __LINE__);
        }
        if (is_null($midocoBillingDocument) || (is_array($midocoBillingDocument) && empty($midocoBillingDocument))) {
            unset($this->MidocoBillingDocument);
        } else {
            $this->MidocoBillingDocument = $midocoBillingDocument;
        }
        
        return $this;
    }
    /**
     * Get MidocoInvoice value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoInvoice|null
     */
    public function getMidocoInvoice(): ?\Pggns\MidocoApi\Documents\StructType\MidocoInvoice
    {
        return $this->MidocoInvoice ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoInvoice method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoInvoice method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateMidocoInvoiceForChoiceConstraintFromSetMidocoInvoice($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'MidocoBillingDocument',
            'MidocoReceipt',
            'CashBookInfo',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property MidocoInvoice can\'t be set as the property %s is already set. Only one property must be set among these properties: MidocoInvoice, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set MidocoInvoice value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoInvoice $midocoInvoice
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoExtDocumentDesc
     */
    public function setMidocoInvoice(?\Pggns\MidocoApi\Documents\StructType\MidocoInvoice $midocoInvoice = null): self
    {
        // validation for constraint: choice(MidocoBillingDocument, MidocoInvoice, MidocoReceipt, CashBookInfo)
        if ('' !== ($midocoInvoiceChoiceErrorMessage = self::validateMidocoInvoiceForChoiceConstraintFromSetMidocoInvoice($midocoInvoice))) {
            throw new InvalidArgumentException($midocoInvoiceChoiceErrorMessage, __LINE__);
        }
        if (is_null($midocoInvoice) || (is_array($midocoInvoice) && empty($midocoInvoice))) {
            unset($this->MidocoInvoice);
        } else {
            $this->MidocoInvoice = $midocoInvoice;
        }
        
        return $this;
    }
    /**
     * Get MidocoReceipt value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoReceipt|null
     */
    public function getMidocoReceipt(): ?\Pggns\MidocoApi\Documents\StructType\MidocoReceipt
    {
        return $this->MidocoReceipt ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoReceipt method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoReceipt method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateMidocoReceiptForChoiceConstraintFromSetMidocoReceipt($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'MidocoBillingDocument',
            'MidocoInvoice',
            'CashBookInfo',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property MidocoReceipt can\'t be set as the property %s is already set. Only one property must be set among these properties: MidocoReceipt, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set MidocoReceipt value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoReceipt $midocoReceipt
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoExtDocumentDesc
     */
    public function setMidocoReceipt(?\Pggns\MidocoApi\Documents\StructType\MidocoReceipt $midocoReceipt = null): self
    {
        // validation for constraint: choice(MidocoBillingDocument, MidocoInvoice, MidocoReceipt, CashBookInfo)
        if ('' !== ($midocoReceiptChoiceErrorMessage = self::validateMidocoReceiptForChoiceConstraintFromSetMidocoReceipt($midocoReceipt))) {
            throw new InvalidArgumentException($midocoReceiptChoiceErrorMessage, __LINE__);
        }
        if (is_null($midocoReceipt) || (is_array($midocoReceipt) && empty($midocoReceipt))) {
            unset($this->MidocoReceipt);
        } else {
            $this->MidocoReceipt = $midocoReceipt;
        }
        
        return $this;
    }
    /**
     * Get CashBookInfo value
     * @return \Pggns\MidocoApi\Documents\StructType\CashBookInfo|null
     */
    public function getCashBookInfo(): ?\Pggns\MidocoApi\Documents\StructType\CashBookInfo
    {
        return $this->CashBookInfo ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCashBookInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCashBookInfo method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateCashBookInfoForChoiceConstraintFromSetCashBookInfo($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'MidocoBillingDocument',
            'MidocoInvoice',
            'MidocoReceipt',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property CashBookInfo can\'t be set as the property %s is already set. Only one property must be set among these properties: CashBookInfo, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set CashBookInfo value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\CashBookInfo $cashBookInfo
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoExtDocumentDesc
     */
    public function setCashBookInfo(?\Pggns\MidocoApi\Documents\StructType\CashBookInfo $cashBookInfo = null): self
    {
        // validation for constraint: choice(MidocoBillingDocument, MidocoInvoice, MidocoReceipt, CashBookInfo)
        if ('' !== ($cashBookInfoChoiceErrorMessage = self::validateCashBookInfoForChoiceConstraintFromSetCashBookInfo($cashBookInfo))) {
            throw new InvalidArgumentException($cashBookInfoChoiceErrorMessage, __LINE__);
        }
        if (is_null($cashBookInfo) || (is_array($cashBookInfo) && empty($cashBookInfo))) {
            unset($this->CashBookInfo);
        } else {
            $this->CashBookInfo = $cashBookInfo;
        }
        
        return $this;
    }
    /**
     * Get refDocumentNumber value
     * @return string|null
     */
    public function getRefDocumentNumber(): ?string
    {
        return $this->refDocumentNumber;
    }
    /**
     * Set refDocumentNumber value
     * @param string $refDocumentNumber
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoExtDocumentDesc
     */
    public function setRefDocumentNumber(?string $refDocumentNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($refDocumentNumber) && !is_string($refDocumentNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refDocumentNumber, true), gettype($refDocumentNumber)), __LINE__);
        }
        $this->refDocumentNumber = $refDocumentNumber;
        
        return $this;
    }
}
