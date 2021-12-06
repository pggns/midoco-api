<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCurrencyForOrgUnitRequest StructType
 * @subpackage Structs
 */
class GetCurrencyForOrgUnitRequest extends AbstractStructBase
{
    /**
     * The orgUnitName
     * @var string|null
     */
    protected ?string $orgUnitName = null;
    /**
     * Constructor method for GetCurrencyForOrgUnitRequest
     * @uses GetCurrencyForOrgUnitRequest::setOrgUnitName()
     * @param string $orgUnitName
     */
    public function __construct(?string $orgUnitName = null)
    {
        $this
            ->setOrgUnitName($orgUnitName);
    }
    /**
     * Get orgUnitName value
     * @return string|null
     */
    public function getOrgUnitName(): ?string
    {
        return $this->orgUnitName;
    }
    /**
     * Set orgUnitName value
     * @param string $orgUnitName
     * @return \Pggns\MidocoApi\Documents\StructType\GetCurrencyForOrgUnitRequest
     */
    public function setOrgUnitName(?string $orgUnitName = null): self
    {
        // validation for constraint: string
        if (!is_null($orgUnitName) && !is_string($orgUnitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgUnitName, true), gettype($orgUnitName)), __LINE__);
        }
        $this->orgUnitName = $orgUnitName;
        
        return $this;
    }
}
