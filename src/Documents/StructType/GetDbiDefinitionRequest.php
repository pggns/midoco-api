<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDbiDefinitionRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetDbiDefinitionRequest extends AbstractStructBase
{
    /**
     * The MidocoDbiCcInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: mail:MidocoDbiCcInfo
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoDbiCcInfo|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoDbiCcInfo $MidocoDbiCcInfo = null;
    /**
     * The emailIfNew
     * Meta information extracted from the WSDL
     * - default: true
     * @var bool|null
     */
    protected ?bool $emailIfNew = null;
    /**
     * The publisherId
     * Meta information extracted from the WSDL
     * - documentation: The credit card publisherId - optional. If absent, the publisherId is derived from the credit card info.
     * @var string|null
     */
    protected ?string $publisherId = null;
    /**
     * The dbiItemType
     * Meta information extracted from the WSDL
     * - documentation: An item type classification - optional. The respected values for Amex cards are "DB" and "NONDB". In case of "NONDB", no FxDB fields are returned. In case of "DB", the FxDB fields are returned as optional. Otherwise all fields are
     * returned as is.
     * @var string|null
     */
    protected ?string $dbiItemType = null;
    /**
     * The customerId
     * Meta information extracted from the WSDL
     * - documentation: The CRM customerId - conditional. If the credit card is an AirPlus Virtual Card either the CRM customerId or the companyAccount is required. The Acceptance WebDBI service requires the company account. In case only the customerId is
     * provided, we look for the account number in the CRM.
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The companyAccount
     * Meta information extracted from the WSDL
     * - documentation: A company account number - conditional. If the credit card is an AirPlus Virtual Card either the CRM customerId or the companyAccount is required. The Acceptance WebDBI service requires the company account. In case the account number
     * is provided in this request, we ignore the customerId. If DBI-definitions exist for the credit card but are associated to a different company account, the DBI-definitions are updated from the WebDBI service.
     * @var string|null
     */
    protected ?string $companyAccount = null;
    /**
     * Constructor method for GetDbiDefinitionRequest
     * @uses GetDbiDefinitionRequest::setMidocoDbiCcInfo()
     * @uses GetDbiDefinitionRequest::setEmailIfNew()
     * @uses GetDbiDefinitionRequest::setPublisherId()
     * @uses GetDbiDefinitionRequest::setDbiItemType()
     * @uses GetDbiDefinitionRequest::setCustomerId()
     * @uses GetDbiDefinitionRequest::setCompanyAccount()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoDbiCcInfo $midocoDbiCcInfo
     * @param bool $emailIfNew
     * @param string $publisherId
     * @param string $dbiItemType
     * @param int $customerId
     * @param string $companyAccount
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\MidocoDbiCcInfo $midocoDbiCcInfo = null, ?bool $emailIfNew = true, ?string $publisherId = null, ?string $dbiItemType = null, ?int $customerId = null, ?string $companyAccount = null)
    {
        $this
            ->setMidocoDbiCcInfo($midocoDbiCcInfo)
            ->setEmailIfNew($emailIfNew)
            ->setPublisherId($publisherId)
            ->setDbiItemType($dbiItemType)
            ->setCustomerId($customerId)
            ->setCompanyAccount($companyAccount);
    }
    /**
     * Get MidocoDbiCcInfo value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoDbiCcInfo|null
     */
    public function getMidocoDbiCcInfo(): ?\Pggns\MidocoApi\Documents\StructType\MidocoDbiCcInfo
    {
        return $this->MidocoDbiCcInfo;
    }
    /**
     * Set MidocoDbiCcInfo value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoDbiCcInfo $midocoDbiCcInfo
     * @return \Pggns\MidocoApi\Documents\StructType\GetDbiDefinitionRequest
     */
    public function setMidocoDbiCcInfo(?\Pggns\MidocoApi\Documents\StructType\MidocoDbiCcInfo $midocoDbiCcInfo = null): self
    {
        $this->MidocoDbiCcInfo = $midocoDbiCcInfo;
        
        return $this;
    }
    /**
     * Get emailIfNew value
     * @return bool|null
     */
    public function getEmailIfNew(): ?bool
    {
        return $this->emailIfNew;
    }
    /**
     * Set emailIfNew value
     * @param bool $emailIfNew
     * @return \Pggns\MidocoApi\Documents\StructType\GetDbiDefinitionRequest
     */
    public function setEmailIfNew(?bool $emailIfNew = true): self
    {
        // validation for constraint: boolean
        if (!is_null($emailIfNew) && !is_bool($emailIfNew)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($emailIfNew, true), gettype($emailIfNew)), __LINE__);
        }
        $this->emailIfNew = $emailIfNew;
        
        return $this;
    }
    /**
     * Get publisherId value
     * @return string|null
     */
    public function getPublisherId(): ?string
    {
        return $this->publisherId;
    }
    /**
     * Set publisherId value
     * @param string $publisherId
     * @return \Pggns\MidocoApi\Documents\StructType\GetDbiDefinitionRequest
     */
    public function setPublisherId(?string $publisherId = null): self
    {
        // validation for constraint: string
        if (!is_null($publisherId) && !is_string($publisherId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($publisherId, true), gettype($publisherId)), __LINE__);
        }
        $this->publisherId = $publisherId;
        
        return $this;
    }
    /**
     * Get dbiItemType value
     * @return string|null
     */
    public function getDbiItemType(): ?string
    {
        return $this->dbiItemType;
    }
    /**
     * Set dbiItemType value
     * @param string $dbiItemType
     * @return \Pggns\MidocoApi\Documents\StructType\GetDbiDefinitionRequest
     */
    public function setDbiItemType(?string $dbiItemType = null): self
    {
        // validation for constraint: string
        if (!is_null($dbiItemType) && !is_string($dbiItemType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dbiItemType, true), gettype($dbiItemType)), __LINE__);
        }
        $this->dbiItemType = $dbiItemType;
        
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
     * @return \Pggns\MidocoApi\Documents\StructType\GetDbiDefinitionRequest
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
     * Get companyAccount value
     * @return string|null
     */
    public function getCompanyAccount(): ?string
    {
        return $this->companyAccount;
    }
    /**
     * Set companyAccount value
     * @param string $companyAccount
     * @return \Pggns\MidocoApi\Documents\StructType\GetDbiDefinitionRequest
     */
    public function setCompanyAccount(?string $companyAccount = null): self
    {
        // validation for constraint: string
        if (!is_null($companyAccount) && !is_string($companyAccount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($companyAccount, true), gettype($companyAccount)), __LINE__);
        }
        $this->companyAccount = $companyAccount;
        
        return $this;
    }
}
