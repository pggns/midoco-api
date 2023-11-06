<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoUserChangesListType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoUserChangesListType extends AbstractStructBase
{
    /**
     * The recordDate
     * @var string|null
     */
    protected ?string $recordDate = null;
    /**
     * The adminId
     * @var int|null
     */
    protected ?int $adminId = null;
    /**
     * The userId
     * @var int|null
     */
    protected ?int $userId = null;
    /**
     * The eventId
     * @var string|null
     */
    protected ?string $eventId = null;
    /**
     * The details
     * @var string|null
     */
    protected ?string $details = null;
    /**
     * The adminOrgunit
     * @var string|null
     */
    protected ?string $adminOrgunit = null;
    /**
     * Constructor method for MidocoUserChangesListType
     * @uses MidocoUserChangesListType::setRecordDate()
     * @uses MidocoUserChangesListType::setAdminId()
     * @uses MidocoUserChangesListType::setUserId()
     * @uses MidocoUserChangesListType::setEventId()
     * @uses MidocoUserChangesListType::setDetails()
     * @uses MidocoUserChangesListType::setAdminOrgunit()
     * @param string $recordDate
     * @param int $adminId
     * @param int $userId
     * @param string $eventId
     * @param string $details
     * @param string $adminOrgunit
     */
    public function __construct(?string $recordDate = null, ?int $adminId = null, ?int $userId = null, ?string $eventId = null, ?string $details = null, ?string $adminOrgunit = null)
    {
        $this
            ->setRecordDate($recordDate)
            ->setAdminId($adminId)
            ->setUserId($userId)
            ->setEventId($eventId)
            ->setDetails($details)
            ->setAdminOrgunit($adminOrgunit);
    }
    /**
     * Get recordDate value
     * @return string|null
     */
    public function getRecordDate(): ?string
    {
        return $this->recordDate;
    }
    /**
     * Set recordDate value
     * @param string $recordDate
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoUserChangesListType
     */
    public function setRecordDate(?string $recordDate = null): self
    {
        // validation for constraint: string
        if (!is_null($recordDate) && !is_string($recordDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recordDate, true), gettype($recordDate)), __LINE__);
        }
        $this->recordDate = $recordDate;
        
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoUserChangesListType
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoUserChangesListType
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
     * Get eventId value
     * @return string|null
     */
    public function getEventId(): ?string
    {
        return $this->eventId;
    }
    /**
     * Set eventId value
     * @param string $eventId
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoUserChangesListType
     */
    public function setEventId(?string $eventId = null): self
    {
        // validation for constraint: string
        if (!is_null($eventId) && !is_string($eventId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eventId, true), gettype($eventId)), __LINE__);
        }
        $this->eventId = $eventId;
        
        return $this;
    }
    /**
     * Get details value
     * @return string|null
     */
    public function getDetails(): ?string
    {
        return $this->details;
    }
    /**
     * Set details value
     * @param string $details
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoUserChangesListType
     */
    public function setDetails(?string $details = null): self
    {
        // validation for constraint: string
        if (!is_null($details) && !is_string($details)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($details, true), gettype($details)), __LINE__);
        }
        $this->details = $details;
        
        return $this;
    }
    /**
     * Get adminOrgunit value
     * @return string|null
     */
    public function getAdminOrgunit(): ?string
    {
        return $this->adminOrgunit;
    }
    /**
     * Set adminOrgunit value
     * @param string $adminOrgunit
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoUserChangesListType
     */
    public function setAdminOrgunit(?string $adminOrgunit = null): self
    {
        // validation for constraint: string
        if (!is_null($adminOrgunit) && !is_string($adminOrgunit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($adminOrgunit, true), gettype($adminOrgunit)), __LINE__);
        }
        $this->adminOrgunit = $adminOrgunit;
        
        return $this;
    }
}
