<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBankAccounts4OrgUnitRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: return all bank accounts to a given orgUnit
 * @subpackage Structs
 */
class GetBankAccounts4OrgUnitRequest extends AbstractStructBase
{
    /**
     * The orgUnit
     * @var string|null
     */
    protected ?string $orgUnit = null;
    /**
     * Constructor method for GetBankAccounts4OrgUnitRequest
     * @uses GetBankAccounts4OrgUnitRequest::setOrgUnit()
     * @param string $orgUnit
     */
    public function __construct(?string $orgUnit = null)
    {
        $this
            ->setOrgUnit($orgUnit);
    }
    /**
     * Get orgUnit value
     * @return string|null
     */
    public function getOrgUnit(): ?string
    {
        return $this->orgUnit;
    }
    /**
     * Set orgUnit value
     * @param string $orgUnit
     * @return \Pggns\MidocoApi\Documents\StructType\GetBankAccounts4OrgUnitRequest
     */
    public function setOrgUnit(?string $orgUnit = null): self
    {
        // validation for constraint: string
        if (!is_null($orgUnit) && !is_string($orgUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgUnit, true), gettype($orgUnit)), __LINE__);
        }
        $this->orgUnit = $orgUnit;
        
        return $this;
    }
}
