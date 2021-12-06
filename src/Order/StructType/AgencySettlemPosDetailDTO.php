<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AgencySettlemPosDetailDTO StructType
 * @subpackage Structs
 */
class AgencySettlemPosDetailDTO extends AbstractStructBase
{
    /**
     * The baseAmount
     * @var float|null
     */
    protected ?float $baseAmount = null;
    /**
     * The commissionAmount
     * @var float|null
     */
    protected ?float $commissionAmount = null;
    /**
     * The commissionInsuranceAmount
     * @var float|null
     */
    protected ?float $commissionInsuranceAmount = null;
    /**
     * The commissionVatAmount
     * @var float|null
     */
    protected ?float $commissionVatAmount = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The id
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * The isAgencyFee
     * @var bool|null
     */
    protected ?bool $isAgencyFee = null;
    /**
     * The isManual
     * @var bool|null
     */
    protected ?bool $isManual = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The settlementPositionId
     * @var int|null
     */
    protected ?int $settlementPositionId = null;
    /**
     * The vatPercent
     * @var float|null
     */
    protected ?float $vatPercent = null;
    /**
     * Constructor method for AgencySettlemPosDetailDTO
     * @uses AgencySettlemPosDetailDTO::setBaseAmount()
     * @uses AgencySettlemPosDetailDTO::setCommissionAmount()
     * @uses AgencySettlemPosDetailDTO::setCommissionInsuranceAmount()
     * @uses AgencySettlemPosDetailDTO::setCommissionVatAmount()
     * @uses AgencySettlemPosDetailDTO::setDescription()
     * @uses AgencySettlemPosDetailDTO::setId()
     * @uses AgencySettlemPosDetailDTO::setIsAgencyFee()
     * @uses AgencySettlemPosDetailDTO::setIsManual()
     * @uses AgencySettlemPosDetailDTO::setItemId()
     * @uses AgencySettlemPosDetailDTO::setSettlementPositionId()
     * @uses AgencySettlemPosDetailDTO::setVatPercent()
     * @param float $baseAmount
     * @param float $commissionAmount
     * @param float $commissionInsuranceAmount
     * @param float $commissionVatAmount
     * @param string $description
     * @param int $id
     * @param bool $isAgencyFee
     * @param bool $isManual
     * @param int $itemId
     * @param int $settlementPositionId
     * @param float $vatPercent
     */
    public function __construct(?float $baseAmount = null, ?float $commissionAmount = null, ?float $commissionInsuranceAmount = null, ?float $commissionVatAmount = null, ?string $description = null, ?int $id = null, ?bool $isAgencyFee = null, ?bool $isManual = null, ?int $itemId = null, ?int $settlementPositionId = null, ?float $vatPercent = null)
    {
        $this
            ->setBaseAmount($baseAmount)
            ->setCommissionAmount($commissionAmount)
            ->setCommissionInsuranceAmount($commissionInsuranceAmount)
            ->setCommissionVatAmount($commissionVatAmount)
            ->setDescription($description)
            ->setId($id)
            ->setIsAgencyFee($isAgencyFee)
            ->setIsManual($isManual)
            ->setItemId($itemId)
            ->setSettlementPositionId($settlementPositionId)
            ->setVatPercent($vatPercent);
    }
    /**
     * Get baseAmount value
     * @return float|null
     */
    public function getBaseAmount(): ?float
    {
        return $this->baseAmount;
    }
    /**
     * Set baseAmount value
     * @param float $baseAmount
     * @return \Pggns\MidocoApi\Order\StructType\AgencySettlemPosDetailDTO
     */
    public function setBaseAmount(?float $baseAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($baseAmount) && !(is_float($baseAmount) || is_numeric($baseAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($baseAmount, true), gettype($baseAmount)), __LINE__);
        }
        $this->baseAmount = $baseAmount;
        
        return $this;
    }
    /**
     * Get commissionAmount value
     * @return float|null
     */
    public function getCommissionAmount(): ?float
    {
        return $this->commissionAmount;
    }
    /**
     * Set commissionAmount value
     * @param float $commissionAmount
     * @return \Pggns\MidocoApi\Order\StructType\AgencySettlemPosDetailDTO
     */
    public function setCommissionAmount(?float $commissionAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($commissionAmount) && !(is_float($commissionAmount) || is_numeric($commissionAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($commissionAmount, true), gettype($commissionAmount)), __LINE__);
        }
        $this->commissionAmount = $commissionAmount;
        
        return $this;
    }
    /**
     * Get commissionInsuranceAmount value
     * @return float|null
     */
    public function getCommissionInsuranceAmount(): ?float
    {
        return $this->commissionInsuranceAmount;
    }
    /**
     * Set commissionInsuranceAmount value
     * @param float $commissionInsuranceAmount
     * @return \Pggns\MidocoApi\Order\StructType\AgencySettlemPosDetailDTO
     */
    public function setCommissionInsuranceAmount(?float $commissionInsuranceAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($commissionInsuranceAmount) && !(is_float($commissionInsuranceAmount) || is_numeric($commissionInsuranceAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($commissionInsuranceAmount, true), gettype($commissionInsuranceAmount)), __LINE__);
        }
        $this->commissionInsuranceAmount = $commissionInsuranceAmount;
        
        return $this;
    }
    /**
     * Get commissionVatAmount value
     * @return float|null
     */
    public function getCommissionVatAmount(): ?float
    {
        return $this->commissionVatAmount;
    }
    /**
     * Set commissionVatAmount value
     * @param float $commissionVatAmount
     * @return \Pggns\MidocoApi\Order\StructType\AgencySettlemPosDetailDTO
     */
    public function setCommissionVatAmount(?float $commissionVatAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($commissionVatAmount) && !(is_float($commissionVatAmount) || is_numeric($commissionVatAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($commissionVatAmount, true), gettype($commissionVatAmount)), __LINE__);
        }
        $this->commissionVatAmount = $commissionVatAmount;
        
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Pggns\MidocoApi\Order\StructType\AgencySettlemPosDetailDTO
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \Pggns\MidocoApi\Order\StructType\AgencySettlemPosDetailDTO
     */
    public function setId(?int $id = null): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
    }
    /**
     * Get isAgencyFee value
     * @return bool|null
     */
    public function getIsAgencyFee(): ?bool
    {
        return $this->isAgencyFee;
    }
    /**
     * Set isAgencyFee value
     * @param bool $isAgencyFee
     * @return \Pggns\MidocoApi\Order\StructType\AgencySettlemPosDetailDTO
     */
    public function setIsAgencyFee(?bool $isAgencyFee = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isAgencyFee) && !is_bool($isAgencyFee)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isAgencyFee, true), gettype($isAgencyFee)), __LINE__);
        }
        $this->isAgencyFee = $isAgencyFee;
        
        return $this;
    }
    /**
     * Get isManual value
     * @return bool|null
     */
    public function getIsManual(): ?bool
    {
        return $this->isManual;
    }
    /**
     * Set isManual value
     * @param bool $isManual
     * @return \Pggns\MidocoApi\Order\StructType\AgencySettlemPosDetailDTO
     */
    public function setIsManual(?bool $isManual = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isManual) && !is_bool($isManual)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isManual, true), gettype($isManual)), __LINE__);
        }
        $this->isManual = $isManual;
        
        return $this;
    }
    /**
     * Get itemId value
     * @return int|null
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }
    /**
     * Set itemId value
     * @param int $itemId
     * @return \Pggns\MidocoApi\Order\StructType\AgencySettlemPosDetailDTO
     */
    public function setItemId(?int $itemId = null): self
    {
        // validation for constraint: int
        if (!is_null($itemId) && !(is_int($itemId) || ctype_digit($itemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemId, true), gettype($itemId)), __LINE__);
        }
        $this->itemId = $itemId;
        
        return $this;
    }
    /**
     * Get settlementPositionId value
     * @return int|null
     */
    public function getSettlementPositionId(): ?int
    {
        return $this->settlementPositionId;
    }
    /**
     * Set settlementPositionId value
     * @param int $settlementPositionId
     * @return \Pggns\MidocoApi\Order\StructType\AgencySettlemPosDetailDTO
     */
    public function setSettlementPositionId(?int $settlementPositionId = null): self
    {
        // validation for constraint: int
        if (!is_null($settlementPositionId) && !(is_int($settlementPositionId) || ctype_digit($settlementPositionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($settlementPositionId, true), gettype($settlementPositionId)), __LINE__);
        }
        $this->settlementPositionId = $settlementPositionId;
        
        return $this;
    }
    /**
     * Get vatPercent value
     * @return float|null
     */
    public function getVatPercent(): ?float
    {
        return $this->vatPercent;
    }
    /**
     * Set vatPercent value
     * @param float $vatPercent
     * @return \Pggns\MidocoApi\Order\StructType\AgencySettlemPosDetailDTO
     */
    public function setVatPercent(?float $vatPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($vatPercent) && !(is_float($vatPercent) || is_numeric($vatPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vatPercent, true), gettype($vatPercent)), __LINE__);
        }
        $this->vatPercent = $vatPercent;
        
        return $this;
    }
}
