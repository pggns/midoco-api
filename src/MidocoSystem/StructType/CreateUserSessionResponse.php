<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateUserSessionResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreateUserSessionResponse extends AbstractStructBase
{
    /**
     * The sessionId
     * @var string|null
     */
    protected ?string $sessionId = null;
    /**
     * Constructor method for CreateUserSessionResponse
     * @uses CreateUserSessionResponse::setSessionId()
     * @param string $sessionId
     */
    public function __construct(?string $sessionId = null)
    {
        $this
            ->setSessionId($sessionId);
    }
    /**
     * Get sessionId value
     * @return string|null
     */
    public function getSessionId(): ?string
    {
        return $this->sessionId;
    }
    /**
     * Set sessionId value
     * @param string $sessionId
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\CreateUserSessionResponse
     */
    public function setSessionId(?string $sessionId = null): self
    {
        // validation for constraint: string
        if (!is_null($sessionId) && !is_string($sessionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sessionId, true), gettype($sessionId)), __LINE__);
        }
        $this->sessionId = $sessionId;
        
        return $this;
    }
}
