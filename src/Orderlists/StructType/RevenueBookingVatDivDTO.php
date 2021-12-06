<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RevenueBookingVatDivDTO StructType
 * @subpackage Structs
 */
class RevenueBookingVatDivDTO extends AbstractStructBase
{
    /**
     * The commenttext
     * @var string|null
     */
    protected ?string $commenttext = null;
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * The ratio
     * @var float|null
     */
    protected ?float $ratio = null;
    /**
     * The revenueId
     * @var int|null
     */
    protected ?int $revenueId = null;
    /**
     * The vatCode
     * @var string|null
     */
    protected ?string $vatCode = null;
    /**
     * The vatPercent
     * @var float|null
     */
    protected ?float $vatPercent = null;
    /**
     * Constructor method for RevenueBookingVatDivDTO
     * @uses RevenueBookingVatDivDTO::setCommenttext()
     * @uses RevenueBookingVatDivDTO::setPosition()
     * @uses RevenueBookingVatDivDTO::setRatio()
     * @uses RevenueBookingVatDivDTO::setRevenueId()
     * @uses RevenueBookingVatDivDTO::setVatCode()
     * @uses RevenueBookingVatDivDTO::setVatPercent()
     * @param string $commenttext
     * @param int $position
     * @param float $ratio
     * @param int $revenueId
     * @param string $vatCode
     * @param float $vatPercent
     */
    public function __construct(?string $commenttext = null, ?int $position = null, ?float $ratio = null, ?int $revenueId = null, ?string $vatCode = null, ?float $vatPercent = null)
    {
        $this
            ->setCommenttext($commenttext)
            ->setPosition($position)
            ->setRatio($ratio)
            ->setRevenueId($revenueId)
            ->setVatCode($vatCode)
            ->setVatPercent($vatPercent);
    }
    /**
     * Get commenttext value
     * @return string|null
     */
    public function getCommenttext(): ?string
    {
        return $this->commenttext;
    }
    /**
     * Set commenttext value
     * @param string $commenttext
     * @return \Pggns\MidocoApi\Orderlists\StructType\RevenueBookingVatDivDTO
     */
    public function setCommenttext(?string $commenttext = null): self
    {
        // validation for constraint: string
        if (!is_null($commenttext) && !is_string($commenttext)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($commenttext, true), gettype($commenttext)), __LINE__);
        }
        $this->commenttext = $commenttext;
        
        return $this;
    }
    /**
     * Get position value
     * @return int|null
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }
    /**
     * Set position value
     * @param int $position
     * @return \Pggns\MidocoApi\Orderlists\StructType\RevenueBookingVatDivDTO
     */
    public function setPosition(?int $position = null): self
    {
        // validation for constraint: int
        if (!is_null($position) && !(is_int($position) || ctype_digit($position))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($position, true), gettype($position)), __LINE__);
        }
        $this->position = $position;
        
        return $this;
    }
    /**
     * Get ratio value
     * @return float|null
     */
    public function getRatio(): ?float
    {
        return $this->ratio;
    }
    /**
     * Set ratio value
     * @param float $ratio
     * @return \Pggns\MidocoApi\Orderlists\StructType\RevenueBookingVatDivDTO
     */
    public function setRatio(?float $ratio = null): self
    {
        // validation for constraint: float
        if (!is_null($ratio) && !(is_float($ratio) || is_numeric($ratio))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($ratio, true), gettype($ratio)), __LINE__);
        }
        $this->ratio = $ratio;
        
        return $this;
    }
    /**
     * Get revenueId value
     * @return int|null
     */
    public function getRevenueId(): ?int
    {
        return $this->revenueId;
    }
    /**
     * Set revenueId value
     * @param int $revenueId
     * @return \Pggns\MidocoApi\Orderlists\StructType\RevenueBookingVatDivDTO
     */
    public function setRevenueId(?int $revenueId = null): self
    {
        // validation for constraint: int
        if (!is_null($revenueId) && !(is_int($revenueId) || ctype_digit($revenueId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($revenueId, true), gettype($revenueId)), __LINE__);
        }
        $this->revenueId = $revenueId;
        
        return $this;
    }
    /**
     * Get vatCode value
     * @return string|null
     */
    public function getVatCode(): ?string
    {
        return $this->vatCode;
    }
    /**
     * Set vatCode value
     * @param string $vatCode
     * @return \Pggns\MidocoApi\Orderlists\StructType\RevenueBookingVatDivDTO
     */
    public function setVatCode(?string $vatCode = null): self
    {
        // validation for constraint: string
        if (!is_null($vatCode) && !is_string($vatCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vatCode, true), gettype($vatCode)), __LINE__);
        }
        $this->vatCode = $vatCode;
        
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\RevenueBookingVatDivDTO
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
