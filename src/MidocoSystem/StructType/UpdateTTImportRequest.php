<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateTTImportRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UpdateTTImportRequest extends AbstractStructBase
{
    /**
     * The username
     * @var string|null
     */
    protected ?string $username = null;
    /**
     * The password
     * @var string|null
     */
    protected ?string $password = null;
    /**
     * The bookingId
     * @var string|null
     */
    protected ?string $bookingId = null;
    /**
     * Constructor method for UpdateTTImportRequest
     * @uses UpdateTTImportRequest::setUsername()
     * @uses UpdateTTImportRequest::setPassword()
     * @uses UpdateTTImportRequest::setBookingId()
     * @param string $username
     * @param string $password
     * @param string $bookingId
     */
    public function __construct(?string $username = null, ?string $password = null, ?string $bookingId = null)
    {
        $this
            ->setUsername($username)
            ->setPassword($password)
            ->setBookingId($bookingId);
    }
    /**
     * Get username value
     * @return string|null
     */
    public function getUsername(): ?string
    {
        return $this->username;
    }
    /**
     * Set username value
     * @param string $username
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\UpdateTTImportRequest
     */
    public function setUsername(?string $username = null): self
    {
        // validation for constraint: string
        if (!is_null($username) && !is_string($username)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($username, true), gettype($username)), __LINE__);
        }
        $this->username = $username;
        
        return $this;
    }
    /**
     * Get password value
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }
    /**
     * Set password value
     * @param string $password
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\UpdateTTImportRequest
     */
    public function setPassword(?string $password = null): self
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        $this->password = $password;
        
        return $this;
    }
    /**
     * Get bookingId value
     * @return string|null
     */
    public function getBookingId(): ?string
    {
        return $this->bookingId;
    }
    /**
     * Set bookingId value
     * @param string $bookingId
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\UpdateTTImportRequest
     */
    public function setBookingId(?string $bookingId = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingId) && !is_string($bookingId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingId, true), gettype($bookingId)), __LINE__);
        }
        $this->bookingId = $bookingId;
        
        return $this;
    }
}
