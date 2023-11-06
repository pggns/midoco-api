<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ChangeRecoveryQuestionResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ChangeRecoveryQuestionResponse extends AbstractStructBase
{
    /**
     * The success
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $success = null;
    /**
     * The reason
     * @var string|null
     */
    protected ?string $reason = null;
    /**
     * Constructor method for ChangeRecoveryQuestionResponse
     * @uses ChangeRecoveryQuestionResponse::setSuccess()
     * @uses ChangeRecoveryQuestionResponse::setReason()
     * @param bool $success
     * @param string $reason
     */
    public function __construct(?bool $success = false, ?string $reason = null)
    {
        $this
            ->setSuccess($success)
            ->setReason($reason);
    }
    /**
     * Get success value
     * @return bool|null
     */
    public function getSuccess(): ?bool
    {
        return $this->success;
    }
    /**
     * Set success value
     * @param bool $success
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\ChangeRecoveryQuestionResponse
     */
    public function setSuccess(?bool $success = false): self
    {
        // validation for constraint: boolean
        if (!is_null($success) && !is_bool($success)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($success, true), gettype($success)), __LINE__);
        }
        $this->success = $success;
        
        return $this;
    }
    /**
     * Get reason value
     * @return string|null
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }
    /**
     * Set reason value
     * @param string $reason
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\ChangeRecoveryQuestionResponse
     */
    public function setReason(?string $reason = null): self
    {
        // validation for constraint: string
        if (!is_null($reason) && !is_string($reason)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reason, true), gettype($reason)), __LINE__);
        }
        $this->reason = $reason;
        
        return $this;
    }
}
