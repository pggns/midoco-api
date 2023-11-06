<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteTourOperatorRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteTourOperatorRequest extends AbstractStructBase
{
    /**
     * The touroperatorId
     * @var int|null
     */
    protected ?int $touroperatorId = null;
    /**
     * Constructor method for DeleteTourOperatorRequest
     * @uses DeleteTourOperatorRequest::setTouroperatorId()
     * @param int $touroperatorId
     */
    public function __construct(?int $touroperatorId = null)
    {
        $this
            ->setTouroperatorId($touroperatorId);
    }
    /**
     * Get touroperatorId value
     * @return int|null
     */
    public function getTouroperatorId(): ?int
    {
        return $this->touroperatorId;
    }
    /**
     * Set touroperatorId value
     * @param int $touroperatorId
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\DeleteTourOperatorRequest
     */
    public function setTouroperatorId(?int $touroperatorId = null): self
    {
        // validation for constraint: int
        if (!is_null($touroperatorId) && !(is_int($touroperatorId) || ctype_digit($touroperatorId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($touroperatorId, true), gettype($touroperatorId)), __LINE__);
        }
        $this->touroperatorId = $touroperatorId;
        
        return $this;
    }
}
