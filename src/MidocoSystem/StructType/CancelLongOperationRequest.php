<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelLongOperationRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CancelLongOperationRequest extends AbstractStructBase
{
    /**
     * The operation
     * @var string|null
     */
    protected ?string $operation = null;
    /**
     * Constructor method for CancelLongOperationRequest
     * @uses CancelLongOperationRequest::setOperation()
     * @param string $operation
     */
    public function __construct(?string $operation = null)
    {
        $this
            ->setOperation($operation);
    }
    /**
     * Get operation value
     * @return string|null
     */
    public function getOperation(): ?string
    {
        return $this->operation;
    }
    /**
     * Set operation value
     * @param string $operation
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\CancelLongOperationRequest
     */
    public function setOperation(?string $operation = null): self
    {
        // validation for constraint: string
        if (!is_null($operation) && !is_string($operation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($operation, true), gettype($operation)), __LINE__);
        }
        $this->operation = $operation;
        
        return $this;
    }
}
