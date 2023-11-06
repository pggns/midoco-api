<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrgunitForCrsAgencyResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetOrgunitForCrsAgencyResponse extends AbstractStructBase
{
    /**
     * The orgunit
     * @var string|null
     */
    protected ?string $orgunit = null;
    /**
     * Constructor method for GetOrgunitForCrsAgencyResponse
     * @uses GetOrgunitForCrsAgencyResponse::setOrgunit()
     * @param string $orgunit
     */
    public function __construct(?string $orgunit = null)
    {
        $this
            ->setOrgunit($orgunit);
    }
    /**
     * Get orgunit value
     * @return string|null
     */
    public function getOrgunit(): ?string
    {
        return $this->orgunit;
    }
    /**
     * Set orgunit value
     * @param string $orgunit
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\GetOrgunitForCrsAgencyResponse
     */
    public function setOrgunit(?string $orgunit = null): self
    {
        // validation for constraint: string
        if (!is_null($orgunit) && !is_string($orgunit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgunit, true), gettype($orgunit)), __LINE__);
        }
        $this->orgunit = $orgunit;
        
        return $this;
    }
}
