<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoArErListSumsType StructType
 * @subpackage Structs
 */
class MidocoArErListSumsType extends AbstractStructBase
{
    /**
     * The outgoingIncoming
     * @var string|null
     */
    protected ?string $outgoingIncoming = null;
    /**
     * The orgUnit
     * @var string|null
     */
    protected ?string $orgUnit = null;
    /**
     * The creditAccount
     * @var string|null
     */
    protected ?string $creditAccount = null;
    /**
     * The beforeAfterTravel
     * @var string|null
     */
    protected ?string $beforeAfterTravel = null;
    /**
     * The amount
     * @var float|null
     */
    protected ?float $amount = null;
    /**
     * Constructor method for MidocoArErListSumsType
     * @uses MidocoArErListSumsType::setOutgoingIncoming()
     * @uses MidocoArErListSumsType::setOrgUnit()
     * @uses MidocoArErListSumsType::setCreditAccount()
     * @uses MidocoArErListSumsType::setBeforeAfterTravel()
     * @uses MidocoArErListSumsType::setAmount()
     * @param string $outgoingIncoming
     * @param string $orgUnit
     * @param string $creditAccount
     * @param string $beforeAfterTravel
     * @param float $amount
     */
    public function __construct(?string $outgoingIncoming = null, ?string $orgUnit = null, ?string $creditAccount = null, ?string $beforeAfterTravel = null, ?float $amount = null)
    {
        $this
            ->setOutgoingIncoming($outgoingIncoming)
            ->setOrgUnit($orgUnit)
            ->setCreditAccount($creditAccount)
            ->setBeforeAfterTravel($beforeAfterTravel)
            ->setAmount($amount);
    }
    /**
     * Get outgoingIncoming value
     * @return string|null
     */
    public function getOutgoingIncoming(): ?string
    {
        return $this->outgoingIncoming;
    }
    /**
     * Set outgoingIncoming value
     * @param string $outgoingIncoming
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoArErListSumsType
     */
    public function setOutgoingIncoming(?string $outgoingIncoming = null): self
    {
        // validation for constraint: string
        if (!is_null($outgoingIncoming) && !is_string($outgoingIncoming)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($outgoingIncoming, true), gettype($outgoingIncoming)), __LINE__);
        }
        $this->outgoingIncoming = $outgoingIncoming;
        
        return $this;
    }
    /**
     * Get orgUnit value
     * @return string|null
     */
    public function getOrgUnit(): ?string
    {
        return $this->orgUnit;
    }
    /**
     * Set orgUnit value
     * @param string $orgUnit
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoArErListSumsType
     */
    public function setOrgUnit(?string $orgUnit = null): self
    {
        // validation for constraint: string
        if (!is_null($orgUnit) && !is_string($orgUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgUnit, true), gettype($orgUnit)), __LINE__);
        }
        $this->orgUnit = $orgUnit;
        
        return $this;
    }
    /**
     * Get creditAccount value
     * @return string|null
     */
    public function getCreditAccount(): ?string
    {
        return $this->creditAccount;
    }
    /**
     * Set creditAccount value
     * @param string $creditAccount
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoArErListSumsType
     */
    public function setCreditAccount(?string $creditAccount = null): self
    {
        // validation for constraint: string
        if (!is_null($creditAccount) && !is_string($creditAccount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creditAccount, true), gettype($creditAccount)), __LINE__);
        }
        $this->creditAccount = $creditAccount;
        
        return $this;
    }
    /**
     * Get beforeAfterTravel value
     * @return string|null
     */
    public function getBeforeAfterTravel(): ?string
    {
        return $this->beforeAfterTravel;
    }
    /**
     * Set beforeAfterTravel value
     * @param string $beforeAfterTravel
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoArErListSumsType
     */
    public function setBeforeAfterTravel(?string $beforeAfterTravel = null): self
    {
        // validation for constraint: string
        if (!is_null($beforeAfterTravel) && !is_string($beforeAfterTravel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($beforeAfterTravel, true), gettype($beforeAfterTravel)), __LINE__);
        }
        $this->beforeAfterTravel = $beforeAfterTravel;
        
        return $this;
    }
    /**
     * Get amount value
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param float $amount
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoArErListSumsType
     */
    public function setAmount(?float $amount = null): self
    {
        // validation for constraint: float
        if (!is_null($amount) && !(is_float($amount) || is_numeric($amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->amount = $amount;
        
        return $this;
    }
}
