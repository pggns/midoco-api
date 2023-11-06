<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteTourOperatorInsurerRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteTourOperatorInsurerRequest extends AbstractStructBase
{
    /**
     * The touroperatorInsurerId
     * @var int|null
     */
    protected ?int $touroperatorInsurerId = null;
    /**
     * Constructor method for DeleteTourOperatorInsurerRequest
     * @uses DeleteTourOperatorInsurerRequest::setTouroperatorInsurerId()
     * @param int $touroperatorInsurerId
     */
    public function __construct(?int $touroperatorInsurerId = null)
    {
        $this
            ->setTouroperatorInsurerId($touroperatorInsurerId);
    }
    /**
     * Get touroperatorInsurerId value
     * @return int|null
     */
    public function getTouroperatorInsurerId(): ?int
    {
        return $this->touroperatorInsurerId;
    }
    /**
     * Set touroperatorInsurerId value
     * @param int $touroperatorInsurerId
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\DeleteTourOperatorInsurerRequest
     */
    public function setTouroperatorInsurerId(?int $touroperatorInsurerId = null): self
    {
        // validation for constraint: int
        if (!is_null($touroperatorInsurerId) && !(is_int($touroperatorInsurerId) || ctype_digit($touroperatorInsurerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($touroperatorInsurerId, true), gettype($touroperatorInsurerId)), __LINE__);
        }
        $this->touroperatorInsurerId = $touroperatorInsurerId;
        
        return $this;
    }
}
