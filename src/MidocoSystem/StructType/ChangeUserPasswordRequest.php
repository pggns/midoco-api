<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ChangeUserPasswordRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ChangeUserPasswordRequest extends AbstractStructBase
{
    /**
     * The oldPassword
     * @var string|null
     */
    protected ?string $oldPassword = null;
    /**
     * The newPassword
     * @var string|null
     */
    protected ?string $newPassword = null;
    /**
     * Constructor method for ChangeUserPasswordRequest
     * @uses ChangeUserPasswordRequest::setOldPassword()
     * @uses ChangeUserPasswordRequest::setNewPassword()
     * @param string $oldPassword
     * @param string $newPassword
     */
    public function __construct(?string $oldPassword = null, ?string $newPassword = null)
    {
        $this
            ->setOldPassword($oldPassword)
            ->setNewPassword($newPassword);
    }
    /**
     * Get oldPassword value
     * @return string|null
     */
    public function getOldPassword(): ?string
    {
        return $this->oldPassword;
    }
    /**
     * Set oldPassword value
     * @param string $oldPassword
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\ChangeUserPasswordRequest
     */
    public function setOldPassword(?string $oldPassword = null): self
    {
        // validation for constraint: string
        if (!is_null($oldPassword) && !is_string($oldPassword)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($oldPassword, true), gettype($oldPassword)), __LINE__);
        }
        $this->oldPassword = $oldPassword;
        
        return $this;
    }
    /**
     * Get newPassword value
     * @return string|null
     */
    public function getNewPassword(): ?string
    {
        return $this->newPassword;
    }
    /**
     * Set newPassword value
     * @param string $newPassword
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\ChangeUserPasswordRequest
     */
    public function setNewPassword(?string $newPassword = null): self
    {
        // validation for constraint: string
        if (!is_null($newPassword) && !is_string($newPassword)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($newPassword, true), gettype($newPassword)), __LINE__);
        }
        $this->newPassword = $newPassword;
        
        return $this;
    }
}
