<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LogSecurityOrgunitDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class LogSecurityOrgunitDTO extends AbstractStructBase
{
    /**
     * The adminId
     * @var int|null
     */
    protected ?int $adminId = null;
    /**
     * The adminOrgunit
     * @var string|null
     */
    protected ?string $adminOrgunit = null;
    /**
     * The details
     * @var string|null
     */
    protected ?string $details = null;
    /**
     * The eventId
     * @var string|null
     */
    protected ?string $eventId = null;
    /**
     * The id
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * The orgunit
     * @var string|null
     */
    protected ?string $orgunit = null;
    /**
     * The recordDate
     * @var string|null
     */
    protected ?string $recordDate = null;
    /**
     * Constructor method for LogSecurityOrgunitDTO
     * @uses LogSecurityOrgunitDTO::setAdminId()
     * @uses LogSecurityOrgunitDTO::setAdminOrgunit()
     * @uses LogSecurityOrgunitDTO::setDetails()
     * @uses LogSecurityOrgunitDTO::setEventId()
     * @uses LogSecurityOrgunitDTO::setId()
     * @uses LogSecurityOrgunitDTO::setOrgunit()
     * @uses LogSecurityOrgunitDTO::setRecordDate()
     * @param int $adminId
     * @param string $adminOrgunit
     * @param string $details
     * @param string $eventId
     * @param int $id
     * @param string $orgunit
     * @param string $recordDate
     */
    public function __construct(?int $adminId = null, ?string $adminOrgunit = null, ?string $details = null, ?string $eventId = null, ?int $id = null, ?string $orgunit = null, ?string $recordDate = null)
    {
        $this
            ->setAdminId($adminId)
            ->setAdminOrgunit($adminOrgunit)
            ->setDetails($details)
            ->setEventId($eventId)
            ->setId($id)
            ->setOrgunit($orgunit)
            ->setRecordDate($recordDate);
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
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\LogSecurityOrgunitDTO
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
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\LogSecurityOrgunitDTO
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
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\LogSecurityOrgunitDTO
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
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\LogSecurityOrgunitDTO
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
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\LogSecurityOrgunitDTO
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
     * Get orgunit value
     * @return string|null
     */
    public function getOrgunit(): ?string
    {
        return $this->orgunit;
    }
    /**
     * Set orgunit value
     * @param string $orgunit
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\LogSecurityOrgunitDTO
     */
    public function setOrgunit(?string $orgunit = null): self
    {
        // validation for constraint: string
        if (!is_null($orgunit) && !is_string($orgunit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgunit, true), gettype($orgunit)), __LINE__);
        }
        $this->orgunit = $orgunit;
        
        return $this;
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
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\LogSecurityOrgunitDTO
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
}
