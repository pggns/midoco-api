<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListTourOperatorInsurerRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ListTourOperatorInsurerRequest extends AbstractStructBase
{
    /**
     * The touroperatorId
     * @var int|null
     */
    protected ?int $touroperatorId = null;
    /**
     * The insurerId
     * @var int|null
     */
    protected ?int $insurerId = null;
    /**
     * The isAssessor
     * @var bool|null
     */
    protected ?bool $isAssessor = null;
    /**
     * Constructor method for ListTourOperatorInsurerRequest
     * @uses ListTourOperatorInsurerRequest::setTouroperatorId()
     * @uses ListTourOperatorInsurerRequest::setInsurerId()
     * @uses ListTourOperatorInsurerRequest::setIsAssessor()
     * @param int $touroperatorId
     * @param int $insurerId
     * @param bool $isAssessor
     */
    public function __construct(?int $touroperatorId = null, ?int $insurerId = null, ?bool $isAssessor = null)
    {
        $this
            ->setTouroperatorId($touroperatorId)
            ->setInsurerId($insurerId)
            ->setIsAssessor($isAssessor);
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
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\ListTourOperatorInsurerRequest
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
    /**
     * Get insurerId value
     * @return int|null
     */
    public function getInsurerId(): ?int
    {
        return $this->insurerId;
    }
    /**
     * Set insurerId value
     * @param int $insurerId
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\ListTourOperatorInsurerRequest
     */
    public function setInsurerId(?int $insurerId = null): self
    {
        // validation for constraint: int
        if (!is_null($insurerId) && !(is_int($insurerId) || ctype_digit($insurerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($insurerId, true), gettype($insurerId)), __LINE__);
        }
        $this->insurerId = $insurerId;
        
        return $this;
    }
    /**
     * Get isAssessor value
     * @return bool|null
     */
    public function getIsAssessor(): ?bool
    {
        return $this->isAssessor;
    }
    /**
     * Set isAssessor value
     * @param bool $isAssessor
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\ListTourOperatorInsurerRequest
     */
    public function setIsAssessor(?bool $isAssessor = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isAssessor) && !is_bool($isAssessor)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isAssessor, true), gettype($isAssessor)), __LINE__);
        }
        $this->isAssessor = $isAssessor;
        
        return $this;
    }
}
