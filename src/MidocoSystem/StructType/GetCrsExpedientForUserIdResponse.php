<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCrsExpedientForUserIdResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCrsExpedientForUserIdResponse extends AbstractStructBase
{
    /**
     * The expedientId
     * @var string|null
     */
    protected ?string $expedientId = null;
    /**
     * Constructor method for GetCrsExpedientForUserIdResponse
     * @uses GetCrsExpedientForUserIdResponse::setExpedientId()
     * @param string $expedientId
     */
    public function __construct(?string $expedientId = null)
    {
        $this
            ->setExpedientId($expedientId);
    }
    /**
     * Get expedientId value
     * @return string|null
     */
    public function getExpedientId(): ?string
    {
        return $this->expedientId;
    }
    /**
     * Set expedientId value
     * @param string $expedientId
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetCrsExpedientForUserIdResponse
     */
    public function setExpedientId(?string $expedientId = null): self
    {
        // validation for constraint: string
        if (!is_null($expedientId) && !is_string($expedientId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expedientId, true), gettype($expedientId)), __LINE__);
        }
        $this->expedientId = $expedientId;
        
        return $this;
    }
}
