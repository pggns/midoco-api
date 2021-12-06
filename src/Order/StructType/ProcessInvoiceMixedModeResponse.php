<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProcessInvoiceMixedModeResponse StructType
 * @subpackage Structs
 */
class ProcessInvoiceMixedModeResponse extends AbstractStructBase
{
    /**
     * The success
     * @var bool|null
     */
    protected ?bool $success = null;
    /**
     * Constructor method for ProcessInvoiceMixedModeResponse
     * @uses ProcessInvoiceMixedModeResponse::setSuccess()
     * @param bool $success
     */
    public function __construct(?bool $success = null)
    {
        $this
            ->setSuccess($success);
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
     * @return \Pggns\MidocoApi\Api\Order\StructType\ProcessInvoiceMixedModeResponse
     */
    public function setSuccess(?bool $success = null): self
    {
        // validation for constraint: boolean
        if (!is_null($success) && !is_bool($success)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($success, true), gettype($success)), __LINE__);
        }
        $this->success = $success;
        
        return $this;
    }
}