<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoSalesListByAgencyCriteriaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoSalesListByAgencyCriteriaType extends MidocoSalesListCriteriaType
{
    /**
     * The agency
     * @var string|null
     */
    protected ?string $agency = null;
    /**
     * The allSupplier
     * @var bool|null
     */
    protected ?bool $allSupplier = null;
    /**
     * Constructor method for MidocoSalesListByAgencyCriteriaType
     * @uses MidocoSalesListByAgencyCriteriaType::setAgency()
     * @uses MidocoSalesListByAgencyCriteriaType::setAllSupplier()
     * @param string $agency
     * @param bool $allSupplier
     */
    public function __construct(?string $agency = null, ?bool $allSupplier = null)
    {
        $this
            ->setAgency($agency)
            ->setAllSupplier($allSupplier);
    }
    /**
     * Get agency value
     * @return string|null
     */
    public function getAgency(): ?string
    {
        return $this->agency;
    }
    /**
     * Set agency value
     * @param string $agency
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListByAgencyCriteriaType
     */
    public function setAgency(?string $agency = null): self
    {
        // validation for constraint: string
        if (!is_null($agency) && !is_string($agency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agency, true), gettype($agency)), __LINE__);
        }
        $this->agency = $agency;
        
        return $this;
    }
    /**
     * Get allSupplier value
     * @return bool|null
     */
    public function getAllSupplier(): ?bool
    {
        return $this->allSupplier;
    }
    /**
     * Set allSupplier value
     * @param bool $allSupplier
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSalesListByAgencyCriteriaType
     */
    public function setAllSupplier(?bool $allSupplier = null): self
    {
        // validation for constraint: boolean
        if (!is_null($allSupplier) && !is_bool($allSupplier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($allSupplier, true), gettype($allSupplier)), __LINE__);
        }
        $this->allSupplier = $allSupplier;
        
        return $this;
    }
}
