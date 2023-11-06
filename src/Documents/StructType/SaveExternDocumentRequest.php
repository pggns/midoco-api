<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveExternDocumentRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveExternDocumentRequest extends AbstractStructBase
{
    /**
     * The media
     * @var string|null
     */
    protected ?string $media = null;
    /**
     * The document
     * @var string|null
     */
    protected ?string $document = null;
    /**
     * The MidocoExtDocumentDesc
     * Meta information extracted from the WSDL
     * - ref: MidocoExtDocumentDesc
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoExtDocumentDesc|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoExtDocumentDesc $MidocoExtDocumentDesc = null;
    /**
     * The mailTo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var string[]
     */
    protected ?array $mailTo = null;
    /**
     * The mailCc
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $mailCc = null;
    /**
     * The mailBCc
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $mailBCc = null;
    /**
     * The MidocoVatDefinition
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: orderglobalsd:MidocoVatDefinition
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoVatDefinition[]
     */
    protected ?array $MidocoVatDefinition = null;
    /**
     * The mailFrom
     * @var string|null
     */
    protected ?string $mailFrom = null;
    /**
     * The debitorNo
     * @var string|null
     */
    protected ?string $debitorNo = null;
    /**
     * The preferredAdapter
     * @var string|null
     */
    protected ?string $preferredAdapter = null;
    /**
     * The midocoRepositoryId
     * @var int|null
     */
    protected ?int $midocoRepositoryId = null;
    /**
     * The signature
     * @var bool|null
     */
    protected ?bool $signature = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The voidedInvoiceNo
     * @var int|null
     */
    protected ?int $voidedInvoiceNo = null;
    /**
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The voidedReceiptNo
     * @var int|null
     */
    protected ?int $voidedReceiptNo = null;
    /**
     * The mailBody
     * @var string|null
     */
    protected ?string $mailBody = null;
    /**
     * The mailSubject
     * @var string|null
     */
    protected ?string $mailSubject = null;
    /**
     * Constructor method for SaveExternDocumentRequest
     * @uses SaveExternDocumentRequest::setMedia()
     * @uses SaveExternDocumentRequest::setDocument()
     * @uses SaveExternDocumentRequest::setMidocoExtDocumentDesc()
     * @uses SaveExternDocumentRequest::setMailTo()
     * @uses SaveExternDocumentRequest::setMailCc()
     * @uses SaveExternDocumentRequest::setMailBCc()
     * @uses SaveExternDocumentRequest::setMidocoVatDefinition()
     * @uses SaveExternDocumentRequest::setMailFrom()
     * @uses SaveExternDocumentRequest::setDebitorNo()
     * @uses SaveExternDocumentRequest::setPreferredAdapter()
     * @uses SaveExternDocumentRequest::setMidocoRepositoryId()
     * @uses SaveExternDocumentRequest::setSignature()
     * @uses SaveExternDocumentRequest::setCurrency()
     * @uses SaveExternDocumentRequest::setVoidedInvoiceNo()
     * @uses SaveExternDocumentRequest::setOrderNo()
     * @uses SaveExternDocumentRequest::setVoidedReceiptNo()
     * @uses SaveExternDocumentRequest::setMailBody()
     * @uses SaveExternDocumentRequest::setMailSubject()
     * @param string $media
     * @param string $document
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoExtDocumentDesc $midocoExtDocumentDesc
     * @param string[] $mailTo
     * @param string[] $mailCc
     * @param string[] $mailBCc
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoVatDefinition[] $midocoVatDefinition
     * @param string $mailFrom
     * @param string $debitorNo
     * @param string $preferredAdapter
     * @param int $midocoRepositoryId
     * @param bool $signature
     * @param string $currency
     * @param int $voidedInvoiceNo
     * @param int $orderNo
     * @param int $voidedReceiptNo
     * @param string $mailBody
     * @param string $mailSubject
     */
    public function __construct(?string $media = null, ?string $document = null, ?\Pggns\MidocoApi\Documents\StructType\MidocoExtDocumentDesc $midocoExtDocumentDesc = null, ?array $mailTo = null, ?array $mailCc = null, ?array $mailBCc = null, ?array $midocoVatDefinition = null, ?string $mailFrom = null, ?string $debitorNo = null, ?string $preferredAdapter = null, ?int $midocoRepositoryId = null, ?bool $signature = null, ?string $currency = null, ?int $voidedInvoiceNo = null, ?int $orderNo = null, ?int $voidedReceiptNo = null, ?string $mailBody = null, ?string $mailSubject = null)
    {
        $this
            ->setMedia($media)
            ->setDocument($document)
            ->setMidocoExtDocumentDesc($midocoExtDocumentDesc)
            ->setMailTo($mailTo)
            ->setMailCc($mailCc)
            ->setMailBCc($mailBCc)
            ->setMidocoVatDefinition($midocoVatDefinition)
            ->setMailFrom($mailFrom)
            ->setDebitorNo($debitorNo)
            ->setPreferredAdapter($preferredAdapter)
            ->setMidocoRepositoryId($midocoRepositoryId)
            ->setSignature($signature)
            ->setCurrency($currency)
            ->setVoidedInvoiceNo($voidedInvoiceNo)
            ->setOrderNo($orderNo)
            ->setVoidedReceiptNo($voidedReceiptNo)
            ->setMailBody($mailBody)
            ->setMailSubject($mailSubject);
    }
    /**
     * Get media value
     * @return string|null
     */
    public function getMedia(): ?string
    {
        return $this->media;
    }
    /**
     * Set media value
     * @param string $media
     * @return \Pggns\MidocoApi\Documents\StructType\SaveExternDocumentRequest
     */
    public function setMedia(?string $media = null): self
    {
        // validation for constraint: string
        if (!is_null($media) && !is_string($media)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($media, true), gettype($media)), __LINE__);
        }
        $this->media = $media;
        
        return $this;
    }
    /**
     * Get document value
     * @return string|null
     */
    public function getDocument(): ?string
    {
        return $this->document;
    }
    /**
     * Set document value
     * @param string $document
     * @return \Pggns\MidocoApi\Documents\StructType\SaveExternDocumentRequest
     */
    public function setDocument(?string $document = null): self
    {
        // validation for constraint: string
        if (!is_null($document) && !is_string($document)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($document, true), gettype($document)), __LINE__);
        }
        $this->document = $document;
        
        return $this;
    }
    /**
     * Get MidocoExtDocumentDesc value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoExtDocumentDesc|null
     */
    public function getMidocoExtDocumentDesc(): ?\Pggns\MidocoApi\Documents\StructType\MidocoExtDocumentDesc
    {
        return $this->MidocoExtDocumentDesc;
    }
    /**
     * Set MidocoExtDocumentDesc value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoExtDocumentDesc $midocoExtDocumentDesc
     * @return \Pggns\MidocoApi\Documents\StructType\SaveExternDocumentRequest
     */
    public function setMidocoExtDocumentDesc(?\Pggns\MidocoApi\Documents\StructType\MidocoExtDocumentDesc $midocoExtDocumentDesc = null): self
    {
        $this->MidocoExtDocumentDesc = $midocoExtDocumentDesc;
        
        return $this;
    }
    /**
     * Get mailTo value
     * @return string[]
     */
    public function getMailTo(): ?array
    {
        return $this->mailTo;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMailTo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMailTo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMailToForArrayConstraintFromSetMailTo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $saveExternDocumentRequestMailToItem) {
            // validation for constraint: itemType
            if (!is_string($saveExternDocumentRequestMailToItem)) {
                $invalidValues[] = is_object($saveExternDocumentRequestMailToItem) ? get_class($saveExternDocumentRequestMailToItem) : sprintf('%s(%s)', gettype($saveExternDocumentRequestMailToItem), var_export($saveExternDocumentRequestMailToItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The mailTo property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set mailTo value
     * @throws InvalidArgumentException
     * @param string[] $mailTo
     * @return \Pggns\MidocoApi\Documents\StructType\SaveExternDocumentRequest
     */
    public function setMailTo(?array $mailTo = null): self
    {
        // validation for constraint: array
        if ('' !== ($mailToArrayErrorMessage = self::validateMailToForArrayConstraintFromSetMailTo($mailTo))) {
            throw new InvalidArgumentException($mailToArrayErrorMessage, __LINE__);
        }
        $this->mailTo = $mailTo;
        
        return $this;
    }
    /**
     * Add item to mailTo value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Documents\StructType\SaveExternDocumentRequest
     */
    public function addToMailTo(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The mailTo property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->mailTo[] = $item;
        
        return $this;
    }
    /**
     * Get mailCc value
     * @return string[]
     */
    public function getMailCc(): ?array
    {
        return $this->mailCc;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMailCc method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMailCc method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMailCcForArrayConstraintFromSetMailCc(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $saveExternDocumentRequestMailCcItem) {
            // validation for constraint: itemType
            if (!is_string($saveExternDocumentRequestMailCcItem)) {
                $invalidValues[] = is_object($saveExternDocumentRequestMailCcItem) ? get_class($saveExternDocumentRequestMailCcItem) : sprintf('%s(%s)', gettype($saveExternDocumentRequestMailCcItem), var_export($saveExternDocumentRequestMailCcItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The mailCc property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set mailCc value
     * @throws InvalidArgumentException
     * @param string[] $mailCc
     * @return \Pggns\MidocoApi\Documents\StructType\SaveExternDocumentRequest
     */
    public function setMailCc(?array $mailCc = null): self
    {
        // validation for constraint: array
        if ('' !== ($mailCcArrayErrorMessage = self::validateMailCcForArrayConstraintFromSetMailCc($mailCc))) {
            throw new InvalidArgumentException($mailCcArrayErrorMessage, __LINE__);
        }
        $this->mailCc = $mailCc;
        
        return $this;
    }
    /**
     * Add item to mailCc value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Documents\StructType\SaveExternDocumentRequest
     */
    public function addToMailCc(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The mailCc property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->mailCc[] = $item;
        
        return $this;
    }
    /**
     * Get mailBCc value
     * @return string[]
     */
    public function getMailBCc(): ?array
    {
        return $this->mailBCc;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMailBCc method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMailBCc method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMailBCcForArrayConstraintFromSetMailBCc(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $saveExternDocumentRequestMailBCcItem) {
            // validation for constraint: itemType
            if (!is_string($saveExternDocumentRequestMailBCcItem)) {
                $invalidValues[] = is_object($saveExternDocumentRequestMailBCcItem) ? get_class($saveExternDocumentRequestMailBCcItem) : sprintf('%s(%s)', gettype($saveExternDocumentRequestMailBCcItem), var_export($saveExternDocumentRequestMailBCcItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The mailBCc property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set mailBCc value
     * @throws InvalidArgumentException
     * @param string[] $mailBCc
     * @return \Pggns\MidocoApi\Documents\StructType\SaveExternDocumentRequest
     */
    public function setMailBCc(?array $mailBCc = null): self
    {
        // validation for constraint: array
        if ('' !== ($mailBCcArrayErrorMessage = self::validateMailBCcForArrayConstraintFromSetMailBCc($mailBCc))) {
            throw new InvalidArgumentException($mailBCcArrayErrorMessage, __LINE__);
        }
        $this->mailBCc = $mailBCc;
        
        return $this;
    }
    /**
     * Add item to mailBCc value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Documents\StructType\SaveExternDocumentRequest
     */
    public function addToMailBCc(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The mailBCc property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->mailBCc[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoVatDefinition value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoVatDefinition[]
     */
    public function getMidocoVatDefinition(): ?array
    {
        return $this->MidocoVatDefinition;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoVatDefinition method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoVatDefinition method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoVatDefinitionForArrayConstraintFromSetMidocoVatDefinition(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $saveExternDocumentRequestMidocoVatDefinitionItem) {
            // validation for constraint: itemType
            if (!$saveExternDocumentRequestMidocoVatDefinitionItem instanceof \Pggns\MidocoApi\Documents\StructType\MidocoVatDefinition) {
                $invalidValues[] = is_object($saveExternDocumentRequestMidocoVatDefinitionItem) ? get_class($saveExternDocumentRequestMidocoVatDefinitionItem) : sprintf('%s(%s)', gettype($saveExternDocumentRequestMidocoVatDefinitionItem), var_export($saveExternDocumentRequestMidocoVatDefinitionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoVatDefinition property can only contain items of type \Pggns\MidocoApi\Documents\StructType\MidocoVatDefinition, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoVatDefinition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoVatDefinition[] $midocoVatDefinition
     * @return \Pggns\MidocoApi\Documents\StructType\SaveExternDocumentRequest
     */
    public function setMidocoVatDefinition(?array $midocoVatDefinition = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoVatDefinitionArrayErrorMessage = self::validateMidocoVatDefinitionForArrayConstraintFromSetMidocoVatDefinition($midocoVatDefinition))) {
            throw new InvalidArgumentException($midocoVatDefinitionArrayErrorMessage, __LINE__);
        }
        $this->MidocoVatDefinition = $midocoVatDefinition;
        
        return $this;
    }
    /**
     * Add item to MidocoVatDefinition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoVatDefinition $item
     * @return \Pggns\MidocoApi\Documents\StructType\SaveExternDocumentRequest
     */
    public function addToMidocoVatDefinition(\Pggns\MidocoApi\Documents\StructType\MidocoVatDefinition $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Documents\StructType\MidocoVatDefinition) {
            throw new InvalidArgumentException(sprintf('The MidocoVatDefinition property can only contain items of type \Pggns\MidocoApi\Documents\StructType\MidocoVatDefinition, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoVatDefinition[] = $item;
        
        return $this;
    }
    /**
     * Get mailFrom value
     * @return string|null
     */
    public function getMailFrom(): ?string
    {
        return $this->mailFrom;
    }
    /**
     * Set mailFrom value
     * @param string $mailFrom
     * @return \Pggns\MidocoApi\Documents\StructType\SaveExternDocumentRequest
     */
    public function setMailFrom(?string $mailFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($mailFrom) && !is_string($mailFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mailFrom, true), gettype($mailFrom)), __LINE__);
        }
        $this->mailFrom = $mailFrom;
        
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
     * @return \Pggns\MidocoApi\Documents\StructType\SaveExternDocumentRequest
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
     * Get preferredAdapter value
     * @return string|null
     */
    public function getPreferredAdapter(): ?string
    {
        return $this->preferredAdapter;
    }
    /**
     * Set preferredAdapter value
     * @param string $preferredAdapter
     * @return \Pggns\MidocoApi\Documents\StructType\SaveExternDocumentRequest
     */
    public function setPreferredAdapter(?string $preferredAdapter = null): self
    {
        // validation for constraint: string
        if (!is_null($preferredAdapter) && !is_string($preferredAdapter)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($preferredAdapter, true), gettype($preferredAdapter)), __LINE__);
        }
        $this->preferredAdapter = $preferredAdapter;
        
        return $this;
    }
    /**
     * Get midocoRepositoryId value
     * @return int|null
     */
    public function getMidocoRepositoryId(): ?int
    {
        return $this->midocoRepositoryId;
    }
    /**
     * Set midocoRepositoryId value
     * @param int $midocoRepositoryId
     * @return \Pggns\MidocoApi\Documents\StructType\SaveExternDocumentRequest
     */
    public function setMidocoRepositoryId(?int $midocoRepositoryId = null): self
    {
        // validation for constraint: int
        if (!is_null($midocoRepositoryId) && !(is_int($midocoRepositoryId) || ctype_digit($midocoRepositoryId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($midocoRepositoryId, true), gettype($midocoRepositoryId)), __LINE__);
        }
        $this->midocoRepositoryId = $midocoRepositoryId;
        
        return $this;
    }
    /**
     * Get signature value
     * @return bool|null
     */
    public function getSignature(): ?bool
    {
        return $this->signature;
    }
    /**
     * Set signature value
     * @param bool $signature
     * @return \Pggns\MidocoApi\Documents\StructType\SaveExternDocumentRequest
     */
    public function setSignature(?bool $signature = null): self
    {
        // validation for constraint: boolean
        if (!is_null($signature) && !is_bool($signature)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($signature, true), gettype($signature)), __LINE__);
        }
        $this->signature = $signature;
        
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
     * @return \Pggns\MidocoApi\Documents\StructType\SaveExternDocumentRequest
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
     * Get voidedInvoiceNo value
     * @return int|null
     */
    public function getVoidedInvoiceNo(): ?int
    {
        return $this->voidedInvoiceNo;
    }
    /**
     * Set voidedInvoiceNo value
     * @param int $voidedInvoiceNo
     * @return \Pggns\MidocoApi\Documents\StructType\SaveExternDocumentRequest
     */
    public function setVoidedInvoiceNo(?int $voidedInvoiceNo = null): self
    {
        // validation for constraint: int
        if (!is_null($voidedInvoiceNo) && !(is_int($voidedInvoiceNo) || ctype_digit($voidedInvoiceNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($voidedInvoiceNo, true), gettype($voidedInvoiceNo)), __LINE__);
        }
        $this->voidedInvoiceNo = $voidedInvoiceNo;
        
        return $this;
    }
    /**
     * Get orderNo value
     * @return int|null
     */
    public function getOrderNo(): ?int
    {
        return $this->orderNo;
    }
    /**
     * Set orderNo value
     * @param int $orderNo
     * @return \Pggns\MidocoApi\Documents\StructType\SaveExternDocumentRequest
     */
    public function setOrderNo(?int $orderNo = null): self
    {
        // validation for constraint: int
        if (!is_null($orderNo) && !(is_int($orderNo) || ctype_digit($orderNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderNo, true), gettype($orderNo)), __LINE__);
        }
        $this->orderNo = $orderNo;
        
        return $this;
    }
    /**
     * Get voidedReceiptNo value
     * @return int|null
     */
    public function getVoidedReceiptNo(): ?int
    {
        return $this->voidedReceiptNo;
    }
    /**
     * Set voidedReceiptNo value
     * @param int $voidedReceiptNo
     * @return \Pggns\MidocoApi\Documents\StructType\SaveExternDocumentRequest
     */
    public function setVoidedReceiptNo(?int $voidedReceiptNo = null): self
    {
        // validation for constraint: int
        if (!is_null($voidedReceiptNo) && !(is_int($voidedReceiptNo) || ctype_digit($voidedReceiptNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($voidedReceiptNo, true), gettype($voidedReceiptNo)), __LINE__);
        }
        $this->voidedReceiptNo = $voidedReceiptNo;
        
        return $this;
    }
    /**
     * Get mailBody value
     * @return string|null
     */
    public function getMailBody(): ?string
    {
        return $this->mailBody;
    }
    /**
     * Set mailBody value
     * @param string $mailBody
     * @return \Pggns\MidocoApi\Documents\StructType\SaveExternDocumentRequest
     */
    public function setMailBody(?string $mailBody = null): self
    {
        // validation for constraint: string
        if (!is_null($mailBody) && !is_string($mailBody)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mailBody, true), gettype($mailBody)), __LINE__);
        }
        $this->mailBody = $mailBody;
        
        return $this;
    }
    /**
     * Get mailSubject value
     * @return string|null
     */
    public function getMailSubject(): ?string
    {
        return $this->mailSubject;
    }
    /**
     * Set mailSubject value
     * @param string $mailSubject
     * @return \Pggns\MidocoApi\Documents\StructType\SaveExternDocumentRequest
     */
    public function setMailSubject(?string $mailSubject = null): self
    {
        // validation for constraint: string
        if (!is_null($mailSubject) && !is_string($mailSubject)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mailSubject, true), gettype($mailSubject)), __LINE__);
        }
        $this->mailSubject = $mailSubject;
        
        return $this;
    }
}
