<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoUserChangesListCriteriaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoUserChangesListCriteriaType extends AbstractStructBase
{
    /**
     * The userId
     * @var int|null
     */
    protected ?int $userId = null;
    /**
     * The adminId
     * @var int|null
     */
    protected ?int $adminId = null;
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
     * Constructor method for MidocoUserChangesListCriteriaType
     * @uses MidocoUserChangesListCriteriaType::setUserId()
     * @uses MidocoUserChangesListCriteriaType::setAdminId()
     * @uses MidocoUserChangesListCriteriaType::setDateFrom()
     * @uses MidocoUserChangesListCriteriaType::setDateTo()
     * @param int $userId
     * @param int $adminId
     * @param string $dateFrom
     * @param string $dateTo
     */
    public function __construct(?int $userId = null, ?int $adminId = null, ?string $dateFrom = null, ?string $dateTo = null)
    {
        $this
            ->setUserId($userId)
            ->setAdminId($adminId)
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoUserChangesListCriteriaType
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
     * Get adminId value
     * @return int|null
     */
    public function getAdminId(): ?int
    {
        return $this->adminId;
    }
    /**
     * Set adminId value
     * @param int $adminId
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoUserChangesListCriteriaType
     */
    public function setAdminId(?int $adminId = null): self
    {
        // validation for constraint: int
        if (!is_null($adminId) && !(is_int($adminId) || ctype_digit($adminId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($adminId, true), gettype($adminId)), __LINE__);
        }
        $this->adminId = $adminId;
        
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoUserChangesListCriteriaType
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoUserChangesListCriteriaType
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
