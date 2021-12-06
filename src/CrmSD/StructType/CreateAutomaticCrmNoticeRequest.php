<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateAutomaticCrmNoticeRequest StructType
 * @subpackage Structs
 */
class CreateAutomaticCrmNoticeRequest extends AbstractStructBase
{
    /**
     * The MidocoCrmCustomer
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmCustomer
     * @var \Pggns\MidocoApi\CrmSD\StructType\CrmCustomerDTO|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\CrmCustomerDTO $MidocoCrmCustomer = null;
    /**
     * The typeAttribute
     * @var bool|null
     */
    protected ?bool $typeAttribute = null;
    /**
     * The ruleDefinitionId
     * @var int|null
     */
    protected ?int $ruleDefinitionId = null;
    /**
     * Constructor method for CreateAutomaticCrmNoticeRequest
     * @uses CreateAutomaticCrmNoticeRequest::setMidocoCrmCustomer()
     * @uses CreateAutomaticCrmNoticeRequest::setTypeAttribute()
     * @uses CreateAutomaticCrmNoticeRequest::setRuleDefinitionId()
     * @param \Pggns\MidocoApi\CrmSD\StructType\CrmCustomerDTO $midocoCrmCustomer
     * @param bool $typeAttribute
     * @param int $ruleDefinitionId
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\CrmCustomerDTO $midocoCrmCustomer = null, ?bool $typeAttribute = null, ?int $ruleDefinitionId = null)
    {
        $this
            ->setMidocoCrmCustomer($midocoCrmCustomer)
            ->setTypeAttribute($typeAttribute)
            ->setRuleDefinitionId($ruleDefinitionId);
    }
    /**
     * Get MidocoCrmCustomer value
     * @return \Pggns\MidocoApi\CrmSD\StructType\CrmCustomerDTO|null
     */
    public function getMidocoCrmCustomer(): ?\Pggns\MidocoApi\CrmSD\StructType\CrmCustomerDTO
    {
        return $this->MidocoCrmCustomer;
    }
    /**
     * Set MidocoCrmCustomer value
     * @param \Pggns\MidocoApi\CrmSD\StructType\CrmCustomerDTO $midocoCrmCustomer
     * @return \Pggns\MidocoApi\CrmSD\StructType\CreateAutomaticCrmNoticeRequest
     */
    public function setMidocoCrmCustomer(?\Pggns\MidocoApi\CrmSD\StructType\CrmCustomerDTO $midocoCrmCustomer = null): self
    {
        $this->MidocoCrmCustomer = $midocoCrmCustomer;
        
        return $this;
    }
    /**
     * Get typeAttribute value
     * @return bool|null
     */
    public function getTypeAttribute(): ?bool
    {
        return $this->typeAttribute;
    }
    /**
     * Set typeAttribute value
     * @param bool $typeAttribute
     * @return \Pggns\MidocoApi\CrmSD\StructType\CreateAutomaticCrmNoticeRequest
     */
    public function setTypeAttribute(?bool $typeAttribute = null): self
    {
        // validation for constraint: boolean
        if (!is_null($typeAttribute) && !is_bool($typeAttribute)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($typeAttribute, true), gettype($typeAttribute)), __LINE__);
        }
        $this->typeAttribute = $typeAttribute;
        
        return $this;
    }
    /**
     * Get ruleDefinitionId value
     * @return int|null
     */
    public function getRuleDefinitionId(): ?int
    {
        return $this->ruleDefinitionId;
    }
    /**
     * Set ruleDefinitionId value
     * @param int $ruleDefinitionId
     * @return \Pggns\MidocoApi\CrmSD\StructType\CreateAutomaticCrmNoticeRequest
     */
    public function setRuleDefinitionId(?int $ruleDefinitionId = null): self
    {
        // validation for constraint: int
        if (!is_null($ruleDefinitionId) && !(is_int($ruleDefinitionId) || ctype_digit($ruleDefinitionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ruleDefinitionId, true), gettype($ruleDefinitionId)), __LINE__);
        }
        $this->ruleDefinitionId = $ruleDefinitionId;
        
        return $this;
    }
}
