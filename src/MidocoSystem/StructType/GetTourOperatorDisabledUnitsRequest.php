<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTourOperatorDisabledUnitsRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: MIDOCO-38078: TourOparatorId can't be set/used with the InsurerId at the same time. To avoid to create 2 Cmds it was implemented in 1 Cmd
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetTourOperatorDisabledUnitsRequest extends AbstractStructBase
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
     * Constructor method for GetTourOperatorDisabledUnitsRequest
     * @uses GetTourOperatorDisabledUnitsRequest::setTouroperatorId()
     * @uses GetTourOperatorDisabledUnitsRequest::setInsurerId()
     * @param int $touroperatorId
     * @param int $insurerId
     */
    public function __construct(?int $touroperatorId = null, ?int $insurerId = null)
    {
        $this
            ->setTouroperatorId($touroperatorId)
            ->setInsurerId($insurerId);
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
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetTourOperatorDisabledUnitsRequest
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
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetTourOperatorDisabledUnitsRequest
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
}
