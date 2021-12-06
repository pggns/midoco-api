<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BonusCardDTO StructType
 * @subpackage Structs
 */
class BonusCardDTO extends AbstractStructBase
{
    /**
     * The cardNo
     * @var string|null
     */
    protected ?string $cardNo = null;
    /**
     * The issuer
     * @var string|null
     */
    protected ?string $issuer = null;
    /**
     * The owner
     * @var string|null
     */
    protected ?string $owner = null;
    /**
     * The typeId
     * @var string|null
     */
    protected ?string $typeId = null;
    /**
     * The validMonth
     * @var int|null
     */
    protected ?int $validMonth = null;
    /**
     * The validYear
     * @var int|null
     */
    protected ?int $validYear = null;
    /**
     * Constructor method for BonusCardDTO
     * @uses BonusCardDTO::setCardNo()
     * @uses BonusCardDTO::setIssuer()
     * @uses BonusCardDTO::setOwner()
     * @uses BonusCardDTO::setTypeId()
     * @uses BonusCardDTO::setValidMonth()
     * @uses BonusCardDTO::setValidYear()
     * @param string $cardNo
     * @param string $issuer
     * @param string $owner
     * @param string $typeId
     * @param int $validMonth
     * @param int $validYear
     */
    public function __construct(?string $cardNo = null, ?string $issuer = null, ?string $owner = null, ?string $typeId = null, ?int $validMonth = null, ?int $validYear = null)
    {
        $this
            ->setCardNo($cardNo)
            ->setIssuer($issuer)
            ->setOwner($owner)
            ->setTypeId($typeId)
            ->setValidMonth($validMonth)
            ->setValidYear($validYear);
    }
    /**
     * Get cardNo value
     * @return string|null
     */
    public function getCardNo(): ?string
    {
        return $this->cardNo;
    }
    /**
     * Set cardNo value
     * @param string $cardNo
     * @return \Pggns\MidocoApi\Orderlists\StructType\BonusCardDTO
     */
    public function setCardNo(?string $cardNo = null): self
    {
        // validation for constraint: string
        if (!is_null($cardNo) && !is_string($cardNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardNo, true), gettype($cardNo)), __LINE__);
        }
        $this->cardNo = $cardNo;
        
        return $this;
    }
    /**
     * Get issuer value
     * @return string|null
     */
    public function getIssuer(): ?string
    {
        return $this->issuer;
    }
    /**
     * Set issuer value
     * @param string $issuer
     * @return \Pggns\MidocoApi\Orderlists\StructType\BonusCardDTO
     */
    public function setIssuer(?string $issuer = null): self
    {
        // validation for constraint: string
        if (!is_null($issuer) && !is_string($issuer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($issuer, true), gettype($issuer)), __LINE__);
        }
        $this->issuer = $issuer;
        
        return $this;
    }
    /**
     * Get owner value
     * @return string|null
     */
    public function getOwner(): ?string
    {
        return $this->owner;
    }
    /**
     * Set owner value
     * @param string $owner
     * @return \Pggns\MidocoApi\Orderlists\StructType\BonusCardDTO
     */
    public function setOwner(?string $owner = null): self
    {
        // validation for constraint: string
        if (!is_null($owner) && !is_string($owner)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($owner, true), gettype($owner)), __LINE__);
        }
        $this->owner = $owner;
        
        return $this;
    }
    /**
     * Get typeId value
     * @return string|null
     */
    public function getTypeId(): ?string
    {
        return $this->typeId;
    }
    /**
     * Set typeId value
     * @param string $typeId
     * @return \Pggns\MidocoApi\Orderlists\StructType\BonusCardDTO
     */
    public function setTypeId(?string $typeId = null): self
    {
        // validation for constraint: string
        if (!is_null($typeId) && !is_string($typeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typeId, true), gettype($typeId)), __LINE__);
        }
        $this->typeId = $typeId;
        
        return $this;
    }
    /**
     * Get validMonth value
     * @return int|null
     */
    public function getValidMonth(): ?int
    {
        return $this->validMonth;
    }
    /**
     * Set validMonth value
     * @param int $validMonth
     * @return \Pggns\MidocoApi\Orderlists\StructType\BonusCardDTO
     */
    public function setValidMonth(?int $validMonth = null): self
    {
        // validation for constraint: int
        if (!is_null($validMonth) && !(is_int($validMonth) || ctype_digit($validMonth))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($validMonth, true), gettype($validMonth)), __LINE__);
        }
        $this->validMonth = $validMonth;
        
        return $this;
    }
    /**
     * Get validYear value
     * @return int|null
     */
    public function getValidYear(): ?int
    {
        return $this->validYear;
    }
    /**
     * Set validYear value
     * @param int $validYear
     * @return \Pggns\MidocoApi\Orderlists\StructType\BonusCardDTO
     */
    public function setValidYear(?int $validYear = null): self
    {
        // validation for constraint: int
        if (!is_null($validYear) && !(is_int($validYear) || ctype_digit($validYear))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($validYear, true), gettype($validYear)), __LINE__);
        }
        $this->validYear = $validYear;
        
        return $this;
    }
}
