<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCrmContextResponse StructType
 * @subpackage Structs
 */
class GetCrmContextResponse extends AbstractStructBase
{
    /**
     * The hasMediators
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    protected bool $hasMediators;
    /**
     * The hasAgencies
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    protected bool $hasAgencies;
    /**
     * The hasCooperations
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    protected bool $hasCooperations;
    /**
     * The hasCreditors
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    protected bool $hasCreditors;
    /**
     * The hasDebteeId
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    protected bool $hasDebteeId;
    /**
     * The hasCustomerCategories
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    protected bool $hasCustomerCategories;
    /**
     * Constructor method for GetCrmContextResponse
     * @uses GetCrmContextResponse::setHasMediators()
     * @uses GetCrmContextResponse::setHasAgencies()
     * @uses GetCrmContextResponse::setHasCooperations()
     * @uses GetCrmContextResponse::setHasCreditors()
     * @uses GetCrmContextResponse::setHasDebteeId()
     * @uses GetCrmContextResponse::setHasCustomerCategories()
     * @param bool $hasMediators
     * @param bool $hasAgencies
     * @param bool $hasCooperations
     * @param bool $hasCreditors
     * @param bool $hasDebteeId
     * @param bool $hasCustomerCategories
     */
    public function __construct(bool $hasMediators, bool $hasAgencies, bool $hasCooperations, bool $hasCreditors, bool $hasDebteeId, bool $hasCustomerCategories)
    {
        $this
            ->setHasMediators($hasMediators)
            ->setHasAgencies($hasAgencies)
            ->setHasCooperations($hasCooperations)
            ->setHasCreditors($hasCreditors)
            ->setHasDebteeId($hasDebteeId)
            ->setHasCustomerCategories($hasCustomerCategories);
    }
    /**
     * Get hasMediators value
     * @return bool
     */
    public function getHasMediators(): bool
    {
        return $this->hasMediators;
    }
    /**
     * Set hasMediators value
     * @param bool $hasMediators
     * @return \Pggns\MidocoApi\Api\Crm\StructType\GetCrmContextResponse
     */
    public function setHasMediators(bool $hasMediators): self
    {
        // validation for constraint: boolean
        if (!is_null($hasMediators) && !is_bool($hasMediators)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasMediators, true), gettype($hasMediators)), __LINE__);
        }
        $this->hasMediators = $hasMediators;
        
        return $this;
    }
    /**
     * Get hasAgencies value
     * @return bool
     */
    public function getHasAgencies(): bool
    {
        return $this->hasAgencies;
    }
    /**
     * Set hasAgencies value
     * @param bool $hasAgencies
     * @return \Pggns\MidocoApi\Api\Crm\StructType\GetCrmContextResponse
     */
    public function setHasAgencies(bool $hasAgencies): self
    {
        // validation for constraint: boolean
        if (!is_null($hasAgencies) && !is_bool($hasAgencies)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasAgencies, true), gettype($hasAgencies)), __LINE__);
        }
        $this->hasAgencies = $hasAgencies;
        
        return $this;
    }
    /**
     * Get hasCooperations value
     * @return bool
     */
    public function getHasCooperations(): bool
    {
        return $this->hasCooperations;
    }
    /**
     * Set hasCooperations value
     * @param bool $hasCooperations
     * @return \Pggns\MidocoApi\Api\Crm\StructType\GetCrmContextResponse
     */
    public function setHasCooperations(bool $hasCooperations): self
    {
        // validation for constraint: boolean
        if (!is_null($hasCooperations) && !is_bool($hasCooperations)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasCooperations, true), gettype($hasCooperations)), __LINE__);
        }
        $this->hasCooperations = $hasCooperations;
        
        return $this;
    }
    /**
     * Get hasCreditors value
     * @return bool
     */
    public function getHasCreditors(): bool
    {
        return $this->hasCreditors;
    }
    /**
     * Set hasCreditors value
     * @param bool $hasCreditors
     * @return \Pggns\MidocoApi\Api\Crm\StructType\GetCrmContextResponse
     */
    public function setHasCreditors(bool $hasCreditors): self
    {
        // validation for constraint: boolean
        if (!is_null($hasCreditors) && !is_bool($hasCreditors)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasCreditors, true), gettype($hasCreditors)), __LINE__);
        }
        $this->hasCreditors = $hasCreditors;
        
        return $this;
    }
    /**
     * Get hasDebteeId value
     * @return bool
     */
    public function getHasDebteeId(): bool
    {
        return $this->hasDebteeId;
    }
    /**
     * Set hasDebteeId value
     * @param bool $hasDebteeId
     * @return \Pggns\MidocoApi\Api\Crm\StructType\GetCrmContextResponse
     */
    public function setHasDebteeId(bool $hasDebteeId): self
    {
        // validation for constraint: boolean
        if (!is_null($hasDebteeId) && !is_bool($hasDebteeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasDebteeId, true), gettype($hasDebteeId)), __LINE__);
        }
        $this->hasDebteeId = $hasDebteeId;
        
        return $this;
    }
    /**
     * Get hasCustomerCategories value
     * @return bool
     */
    public function getHasCustomerCategories(): bool
    {
        return $this->hasCustomerCategories;
    }
    /**
     * Set hasCustomerCategories value
     * @param bool $hasCustomerCategories
     * @return \Pggns\MidocoApi\Api\Crm\StructType\GetCrmContextResponse
     */
    public function setHasCustomerCategories(bool $hasCustomerCategories): self
    {
        // validation for constraint: boolean
        if (!is_null($hasCustomerCategories) && !is_bool($hasCustomerCategories)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasCustomerCategories, true), gettype($hasCustomerCategories)), __LINE__);
        }
        $this->hasCustomerCategories = $hasCustomerCategories;
        
        return $this;
    }
}
