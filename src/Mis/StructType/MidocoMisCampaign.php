<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoMisCampaign StructType
 * @subpackage Structs
 */
class MidocoMisCampaign extends MisCampaignDTO
{
    /**
     * The isParticipating
     * Meta information extracted from the WSDL
     * - default: true
     * @var bool|null
     */
    protected ?bool $isParticipating = null;
    /**
     * The statusChangedBy
     * @var int|null
     */
    protected ?int $statusChangedBy = null;
    /**
     * Constructor method for MidocoMisCampaign
     * @uses MidocoMisCampaign::setIsParticipating()
     * @uses MidocoMisCampaign::setStatusChangedBy()
     * @param bool $isParticipating
     * @param int $statusChangedBy
     */
    public function __construct(?bool $isParticipating = true, ?int $statusChangedBy = null)
    {
        $this
            ->setIsParticipating($isParticipating)
            ->setStatusChangedBy($statusChangedBy);
    }
    /**
     * Get isParticipating value
     * @return bool|null
     */
    public function getIsParticipating(): ?bool
    {
        return $this->isParticipating;
    }
    /**
     * Set isParticipating value
     * @param bool $isParticipating
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoMisCampaign
     */
    public function setIsParticipating(?bool $isParticipating = true): self
    {
        // validation for constraint: boolean
        if (!is_null($isParticipating) && !is_bool($isParticipating)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isParticipating, true), gettype($isParticipating)), __LINE__);
        }
        $this->isParticipating = $isParticipating;
        
        return $this;
    }
    /**
     * Get statusChangedBy value
     * @return int|null
     */
    public function getStatusChangedBy(): ?int
    {
        return $this->statusChangedBy;
    }
    /**
     * Set statusChangedBy value
     * @param int $statusChangedBy
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoMisCampaign
     */
    public function setStatusChangedBy(?int $statusChangedBy = null): self
    {
        // validation for constraint: int
        if (!is_null($statusChangedBy) && !(is_int($statusChangedBy) || ctype_digit($statusChangedBy))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($statusChangedBy, true), gettype($statusChangedBy)), __LINE__);
        }
        $this->statusChangedBy = $statusChangedBy;
        
        return $this;
    }
}
