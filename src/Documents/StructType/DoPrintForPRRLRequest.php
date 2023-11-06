<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DoPrintForPRRLRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DoPrintForPRRLRequest extends AbstractStructBase
{
    /**
     * The countryCode
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $countryCode;
    /**
     * The MidocoTourOperatorAddress
     * Meta information extracted from the WSDL
     * - ref: system:MidocoTourOperatorAddress
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoTourOperatorAddress|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoTourOperatorAddress $MidocoTourOperatorAddress = null;
    /**
     * The MidocoInsurerInfo
     * Meta information extracted from the WSDL
     * - ref: system:MidocoInsurerInfo
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoInsurerInfo|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoInsurerInfo $MidocoInsurerInfo = null;
    /**
     * The MidocoAssessorInfo
     * Meta information extracted from the WSDL
     * - ref: system:MidocoAssessorInfo
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoAssessorInfo|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoAssessorInfo $MidocoAssessorInfo = null;
    /**
     * The media
     * @var string|null
     */
    protected ?string $media = null;
    /**
     * The MidocoPrintSelect
     * Meta information extracted from the WSDL
     * - ref: system:MidocoPrintSelect
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoPrintSelect|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoPrintSelect $MidocoPrintSelect = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The saveDocument
     * @var bool|null
     */
    protected ?bool $saveDocument = null;
    /**
     * The customerName
     * @var string|null
     */
    protected ?string $customerName = null;
    /**
     * Constructor method for DoPrintForPRRLRequest
     * @uses DoPrintForPRRLRequest::setCountryCode()
     * @uses DoPrintForPRRLRequest::setMidocoTourOperatorAddress()
     * @uses DoPrintForPRRLRequest::setMidocoInsurerInfo()
     * @uses DoPrintForPRRLRequest::setMidocoAssessorInfo()
     * @uses DoPrintForPRRLRequest::setMedia()
     * @uses DoPrintForPRRLRequest::setMidocoPrintSelect()
     * @uses DoPrintForPRRLRequest::setOrderId()
     * @uses DoPrintForPRRLRequest::setCustomerId()
     * @uses DoPrintForPRRLRequest::setSaveDocument()
     * @uses DoPrintForPRRLRequest::setCustomerName()
     * @param string $countryCode
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoTourOperatorAddress $midocoTourOperatorAddress
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoInsurerInfo $midocoInsurerInfo
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoAssessorInfo $midocoAssessorInfo
     * @param string $media
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoPrintSelect $midocoPrintSelect
     * @param int $orderId
     * @param int $customerId
     * @param bool $saveDocument
     * @param string $customerName
     */
    public function __construct(string $countryCode, ?\Pggns\MidocoApi\Documents\StructType\MidocoTourOperatorAddress $midocoTourOperatorAddress = null, ?\Pggns\MidocoApi\Documents\StructType\MidocoInsurerInfo $midocoInsurerInfo = null, ?\Pggns\MidocoApi\Documents\StructType\MidocoAssessorInfo $midocoAssessorInfo = null, ?string $media = null, ?\Pggns\MidocoApi\Documents\StructType\MidocoPrintSelect $midocoPrintSelect = null, ?int $orderId = null, ?int $customerId = null, ?bool $saveDocument = null, ?string $customerName = null)
    {
        $this
            ->setCountryCode($countryCode)
            ->setMidocoTourOperatorAddress($midocoTourOperatorAddress)
            ->setMidocoInsurerInfo($midocoInsurerInfo)
            ->setMidocoAssessorInfo($midocoAssessorInfo)
            ->setMedia($media)
            ->setMidocoPrintSelect($midocoPrintSelect)
            ->setOrderId($orderId)
            ->setCustomerId($customerId)
            ->setSaveDocument($saveDocument)
            ->setCustomerName($customerName);
    }
    /**
     * Get countryCode value
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }
    /**
     * Set countryCode value
     * @param string $countryCode
     * @return \Pggns\MidocoApi\Documents\StructType\DoPrintForPRRLRequest
     */
    public function setCountryCode(string $countryCode): self
    {
        // validation for constraint: string
        if (!is_null($countryCode) && !is_string($countryCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryCode, true), gettype($countryCode)), __LINE__);
        }
        $this->countryCode = $countryCode;
        
        return $this;
    }
    /**
     * Get MidocoTourOperatorAddress value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoTourOperatorAddress|null
     */
    public function getMidocoTourOperatorAddress(): ?\Pggns\MidocoApi\Documents\StructType\MidocoTourOperatorAddress
    {
        return $this->MidocoTourOperatorAddress;
    }
    /**
     * Set MidocoTourOperatorAddress value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoTourOperatorAddress $midocoTourOperatorAddress
     * @return \Pggns\MidocoApi\Documents\StructType\DoPrintForPRRLRequest
     */
    public function setMidocoTourOperatorAddress(?\Pggns\MidocoApi\Documents\StructType\MidocoTourOperatorAddress $midocoTourOperatorAddress = null): self
    {
        $this->MidocoTourOperatorAddress = $midocoTourOperatorAddress;
        
        return $this;
    }
    /**
     * Get MidocoInsurerInfo value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoInsurerInfo|null
     */
    public function getMidocoInsurerInfo(): ?\Pggns\MidocoApi\Documents\StructType\MidocoInsurerInfo
    {
        return $this->MidocoInsurerInfo;
    }
    /**
     * Set MidocoInsurerInfo value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoInsurerInfo $midocoInsurerInfo
     * @return \Pggns\MidocoApi\Documents\StructType\DoPrintForPRRLRequest
     */
    public function setMidocoInsurerInfo(?\Pggns\MidocoApi\Documents\StructType\MidocoInsurerInfo $midocoInsurerInfo = null): self
    {
        $this->MidocoInsurerInfo = $midocoInsurerInfo;
        
        return $this;
    }
    /**
     * Get MidocoAssessorInfo value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoAssessorInfo|null
     */
    public function getMidocoAssessorInfo(): ?\Pggns\MidocoApi\Documents\StructType\MidocoAssessorInfo
    {
        return $this->MidocoAssessorInfo;
    }
    /**
     * Set MidocoAssessorInfo value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoAssessorInfo $midocoAssessorInfo
     * @return \Pggns\MidocoApi\Documents\StructType\DoPrintForPRRLRequest
     */
    public function setMidocoAssessorInfo(?\Pggns\MidocoApi\Documents\StructType\MidocoAssessorInfo $midocoAssessorInfo = null): self
    {
        $this->MidocoAssessorInfo = $midocoAssessorInfo;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Documents\StructType\DoPrintForPRRLRequest
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
     * Get MidocoPrintSelect value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoPrintSelect|null
     */
    public function getMidocoPrintSelect(): ?\Pggns\MidocoApi\Documents\StructType\MidocoPrintSelect
    {
        return $this->MidocoPrintSelect;
    }
    /**
     * Set MidocoPrintSelect value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoPrintSelect $midocoPrintSelect
     * @return \Pggns\MidocoApi\Documents\StructType\DoPrintForPRRLRequest
     */
    public function setMidocoPrintSelect(?\Pggns\MidocoApi\Documents\StructType\MidocoPrintSelect $midocoPrintSelect = null): self
    {
        $this->MidocoPrintSelect = $midocoPrintSelect;
        
        return $this;
    }
    /**
     * Get orderId value
     * @return int|null
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }
    /**
     * Set orderId value
     * @param int $orderId
     * @return \Pggns\MidocoApi\Documents\StructType\DoPrintForPRRLRequest
     */
    public function setOrderId(?int $orderId = null): self
    {
        // validation for constraint: int
        if (!is_null($orderId) && !(is_int($orderId) || ctype_digit($orderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->orderId = $orderId;
        
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
     * @return \Pggns\MidocoApi\Documents\StructType\DoPrintForPRRLRequest
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
     * Get saveDocument value
     * @return bool|null
     */
    public function getSaveDocument(): ?bool
    {
        return $this->saveDocument;
    }
    /**
     * Set saveDocument value
     * @param bool $saveDocument
     * @return \Pggns\MidocoApi\Documents\StructType\DoPrintForPRRLRequest
     */
    public function setSaveDocument(?bool $saveDocument = null): self
    {
        // validation for constraint: boolean
        if (!is_null($saveDocument) && !is_bool($saveDocument)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($saveDocument, true), gettype($saveDocument)), __LINE__);
        }
        $this->saveDocument = $saveDocument;
        
        return $this;
    }
    /**
     * Get customerName value
     * @return string|null
     */
    public function getCustomerName(): ?string
    {
        return $this->customerName;
    }
    /**
     * Set customerName value
     * @param string $customerName
     * @return \Pggns\MidocoApi\Documents\StructType\DoPrintForPRRLRequest
     */
    public function setCustomerName(?string $customerName = null): self
    {
        // validation for constraint: string
        if (!is_null($customerName) && !is_string($customerName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerName, true), gettype($customerName)), __LINE__);
        }
        $this->customerName = $customerName;
        
        return $this;
    }
}
