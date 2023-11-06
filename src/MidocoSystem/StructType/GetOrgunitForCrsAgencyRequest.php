<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrgunitForCrsAgencyRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetOrgunitForCrsAgencyRequest extends AbstractStructBase
{
    /**
     * The crs
     * @var string|null
     */
    protected ?string $crs = null;
    /**
     * The agencyId
     * @var string|null
     */
    protected ?string $agencyId = null;
    /**
     * Constructor method for GetOrgunitForCrsAgencyRequest
     * @uses GetOrgunitForCrsAgencyRequest::setCrs()
     * @uses GetOrgunitForCrsAgencyRequest::setAgencyId()
     * @param string $crs
     * @param string $agencyId
     */
    public function __construct(?string $crs = null, ?string $agencyId = null)
    {
        $this
            ->setCrs($crs)
            ->setAgencyId($agencyId);
    }
    /**
     * Get crs value
     * @return string|null
     */
    public function getCrs(): ?string
    {
        return $this->crs;
    }
    /**
     * Set crs value
     * @param string $crs
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetOrgunitForCrsAgencyRequest
     */
    public function setCrs(?string $crs = null): self
    {
        // validation for constraint: string
        if (!is_null($crs) && !is_string($crs)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($crs, true), gettype($crs)), __LINE__);
        }
        $this->crs = $crs;
        
        return $this;
    }
    /**
     * Get agencyId value
     * @return string|null
     */
    public function getAgencyId(): ?string
    {
        return $this->agencyId;
    }
    /**
     * Set agencyId value
     * @param string $agencyId
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetOrgunitForCrsAgencyRequest
     */
    public function setAgencyId(?string $agencyId = null): self
    {
        // validation for constraint: string
        if (!is_null($agencyId) && !is_string($agencyId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agencyId, true), gettype($agencyId)), __LINE__);
        }
        $this->agencyId = $agencyId;
        
        return $this;
    }
}
