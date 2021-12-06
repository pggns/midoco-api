<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTemplateTextForCustomerRequest StructType
 * @subpackage Structs
 */
class GetTemplateTextForCustomerRequest extends AbstractStructBase
{
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The customerOrgUnit
     * @var string|null
     */
    protected ?string $customerOrgUnit = null;
    /**
     * The language
     * @var string|null
     */
    protected ?string $language = null;
    /**
     * The templateId
     * @var int|null
     */
    protected ?int $templateId = null;
    /**
     * The templateOrgUnit
     * @var string|null
     */
    protected ?string $templateOrgUnit = null;
    /**
     * The campaignId
     * @var int|null
     */
    protected ?int $campaignId = null;
    /**
     * The campaignOrgUnit
     * @var string|null
     */
    protected ?string $campaignOrgUnit = null;
    /**
     * Constructor method for GetTemplateTextForCustomerRequest
     * @uses GetTemplateTextForCustomerRequest::setCustomerId()
     * @uses GetTemplateTextForCustomerRequest::setCustomerOrgUnit()
     * @uses GetTemplateTextForCustomerRequest::setLanguage()
     * @uses GetTemplateTextForCustomerRequest::setTemplateId()
     * @uses GetTemplateTextForCustomerRequest::setTemplateOrgUnit()
     * @uses GetTemplateTextForCustomerRequest::setCampaignId()
     * @uses GetTemplateTextForCustomerRequest::setCampaignOrgUnit()
     * @param int $customerId
     * @param string $customerOrgUnit
     * @param string $language
     * @param int $templateId
     * @param string $templateOrgUnit
     * @param int $campaignId
     * @param string $campaignOrgUnit
     */
    public function __construct(?int $customerId = null, ?string $customerOrgUnit = null, ?string $language = null, ?int $templateId = null, ?string $templateOrgUnit = null, ?int $campaignId = null, ?string $campaignOrgUnit = null)
    {
        $this
            ->setCustomerId($customerId)
            ->setCustomerOrgUnit($customerOrgUnit)
            ->setLanguage($language)
            ->setTemplateId($templateId)
            ->setTemplateOrgUnit($templateOrgUnit)
            ->setCampaignId($campaignId)
            ->setCampaignOrgUnit($campaignOrgUnit);
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
     * @return \Pggns\MidocoApi\Mis\StructType\GetTemplateTextForCustomerRequest
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
     * Get customerOrgUnit value
     * @return string|null
     */
    public function getCustomerOrgUnit(): ?string
    {
        return $this->customerOrgUnit;
    }
    /**
     * Set customerOrgUnit value
     * @param string $customerOrgUnit
     * @return \Pggns\MidocoApi\Mis\StructType\GetTemplateTextForCustomerRequest
     */
    public function setCustomerOrgUnit(?string $customerOrgUnit = null): self
    {
        // validation for constraint: string
        if (!is_null($customerOrgUnit) && !is_string($customerOrgUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerOrgUnit, true), gettype($customerOrgUnit)), __LINE__);
        }
        $this->customerOrgUnit = $customerOrgUnit;
        
        return $this;
    }
    /**
     * Get language value
     * @return string|null
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }
    /**
     * Set language value
     * @param string $language
     * @return \Pggns\MidocoApi\Mis\StructType\GetTemplateTextForCustomerRequest
     */
    public function setLanguage(?string $language = null): self
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($language, true), gettype($language)), __LINE__);
        }
        $this->language = $language;
        
        return $this;
    }
    /**
     * Get templateId value
     * @return int|null
     */
    public function getTemplateId(): ?int
    {
        return $this->templateId;
    }
    /**
     * Set templateId value
     * @param int $templateId
     * @return \Pggns\MidocoApi\Mis\StructType\GetTemplateTextForCustomerRequest
     */
    public function setTemplateId(?int $templateId = null): self
    {
        // validation for constraint: int
        if (!is_null($templateId) && !(is_int($templateId) || ctype_digit($templateId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($templateId, true), gettype($templateId)), __LINE__);
        }
        $this->templateId = $templateId;
        
        return $this;
    }
    /**
     * Get templateOrgUnit value
     * @return string|null
     */
    public function getTemplateOrgUnit(): ?string
    {
        return $this->templateOrgUnit;
    }
    /**
     * Set templateOrgUnit value
     * @param string $templateOrgUnit
     * @return \Pggns\MidocoApi\Mis\StructType\GetTemplateTextForCustomerRequest
     */
    public function setTemplateOrgUnit(?string $templateOrgUnit = null): self
    {
        // validation for constraint: string
        if (!is_null($templateOrgUnit) && !is_string($templateOrgUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($templateOrgUnit, true), gettype($templateOrgUnit)), __LINE__);
        }
        $this->templateOrgUnit = $templateOrgUnit;
        
        return $this;
    }
    /**
     * Get campaignId value
     * @return int|null
     */
    public function getCampaignId(): ?int
    {
        return $this->campaignId;
    }
    /**
     * Set campaignId value
     * @param int $campaignId
     * @return \Pggns\MidocoApi\Mis\StructType\GetTemplateTextForCustomerRequest
     */
    public function setCampaignId(?int $campaignId = null): self
    {
        // validation for constraint: int
        if (!is_null($campaignId) && !(is_int($campaignId) || ctype_digit($campaignId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($campaignId, true), gettype($campaignId)), __LINE__);
        }
        $this->campaignId = $campaignId;
        
        return $this;
    }
    /**
     * Get campaignOrgUnit value
     * @return string|null
     */
    public function getCampaignOrgUnit(): ?string
    {
        return $this->campaignOrgUnit;
    }
    /**
     * Set campaignOrgUnit value
     * @param string $campaignOrgUnit
     * @return \Pggns\MidocoApi\Mis\StructType\GetTemplateTextForCustomerRequest
     */
    public function setCampaignOrgUnit(?string $campaignOrgUnit = null): self
    {
        // validation for constraint: string
        if (!is_null($campaignOrgUnit) && !is_string($campaignOrgUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($campaignOrgUnit, true), gettype($campaignOrgUnit)), __LINE__);
        }
        $this->campaignOrgUnit = $campaignOrgUnit;
        
        return $this;
    }
}
