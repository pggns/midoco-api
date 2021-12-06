<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCCAccessListCriteriaType StructType
 * @subpackage Structs
 */
class MidocoCCAccessListCriteriaType extends AbstractStructBase
{
    /**
     * The userId
     * @var int|null
     */
    protected ?int $userId = null;
    /**
     * The ccNo
     * @var string|null
     */
    protected ?string $ccNo = null;
    /**
     * The dateFrom
     * @var string|null
     */
    protected ?string $dateFrom = null;
    /**
     * The dateTo
     * @var string|null
     */
    protected ?string $dateTo = null;
    /**
     * Constructor method for MidocoCCAccessListCriteriaType
     * @uses MidocoCCAccessListCriteriaType::setUserId()
     * @uses MidocoCCAccessListCriteriaType::setCcNo()
     * @uses MidocoCCAccessListCriteriaType::setDateFrom()
     * @uses MidocoCCAccessListCriteriaType::setDateTo()
     * @param int $userId
     * @param string $ccNo
     * @param string $dateFrom
     * @param string $dateTo
     */
    public function __construct(?int $userId = null, ?string $ccNo = null, ?string $dateFrom = null, ?string $dateTo = null)
    {
        $this
            ->setUserId($userId)
            ->setCcNo($ccNo)
            ->setDateFrom($dateFrom)
            ->setDateTo($dateTo);
    }
    /**
     * Get userId value
     * @return int|null
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }
    /**
     * Set userId value
     * @param int $userId
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoCCAccessListCriteriaType
     */
    public function setUserId(?int $userId = null): self
    {
        // validation for constraint: int
        if (!is_null($userId) && !(is_int($userId) || ctype_digit($userId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($userId, true), gettype($userId)), __LINE__);
        }
        $this->userId = $userId;
        
        return $this;
    }
    /**
     * Get ccNo value
     * @return string|null
     */
    public function getCcNo(): ?string
    {
        return $this->ccNo;
    }
    /**
     * Set ccNo value
     * @param string $ccNo
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoCCAccessListCriteriaType
     */
    public function setCcNo(?string $ccNo = null): self
    {
        // validation for constraint: string
        if (!is_null($ccNo) && !is_string($ccNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccNo, true), gettype($ccNo)), __LINE__);
        }
        $this->ccNo = $ccNo;
        
        return $this;
    }
    /**
     * Get dateFrom value
     * @return string|null
     */
    public function getDateFrom(): ?string
    {
        return $this->dateFrom;
    }
    /**
     * Set dateFrom value
     * @param string $dateFrom
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoCCAccessListCriteriaType
     */
    public function setDateFrom(?string $dateFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($dateFrom) && !is_string($dateFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateFrom, true), gettype($dateFrom)), __LINE__);
        }
        $this->dateFrom = $dateFrom;
        
        return $this;
    }
    /**
     * Get dateTo value
     * @return string|null
     */
    public function getDateTo(): ?string
    {
        return $this->dateTo;
    }
    /**
     * Set dateTo value
     * @param string $dateTo
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoCCAccessListCriteriaType
     */
    public function setDateTo(?string $dateTo = null): self
    {
        // validation for constraint: string
        if (!is_null($dateTo) && !is_string($dateTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateTo, true), gettype($dateTo)), __LINE__);
        }
        $this->dateTo = $dateTo;
        
        return $this;
    }
}
