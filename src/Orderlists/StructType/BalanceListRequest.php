<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BalanceListRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class BalanceListRequest extends AbstractStructBase
{
    /**
     * The MidocoBalanceListCriteria
     * Meta information extracted from the WSDL
     * - ref: MidocoBalanceListCriteria
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoBalanceListCriteriaType|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoBalanceListCriteriaType $MidocoBalanceListCriteria = null;
    /**
     * The groupByCostUnit
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $groupByCostUnit = null;
    /**
     * Constructor method for BalanceListRequest
     * @uses BalanceListRequest::setMidocoBalanceListCriteria()
     * @uses BalanceListRequest::setGroupByCostUnit()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoBalanceListCriteriaType $midocoBalanceListCriteria
     * @param bool $groupByCostUnit
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoBalanceListCriteriaType $midocoBalanceListCriteria = null, ?bool $groupByCostUnit = null)
    {
        $this
            ->setMidocoBalanceListCriteria($midocoBalanceListCriteria)
            ->setGroupByCostUnit($groupByCostUnit);
    }
    /**
     * Get MidocoBalanceListCriteria value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBalanceListCriteriaType|null
     */
    public function getMidocoBalanceListCriteria(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoBalanceListCriteriaType
    {
        return $this->MidocoBalanceListCriteria;
    }
    /**
     * Set MidocoBalanceListCriteria value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoBalanceListCriteriaType $midocoBalanceListCriteria
     * @return \Pggns\MidocoApi\Orderlists\StructType\BalanceListRequest
     */
    public function setMidocoBalanceListCriteria(?\Pggns\MidocoApi\Orderlists\StructType\MidocoBalanceListCriteriaType $midocoBalanceListCriteria = null): self
    {
        $this->MidocoBalanceListCriteria = $midocoBalanceListCriteria;
        
        return $this;
    }
    /**
     * Get groupByCostUnit value
     * @return bool|null
     */
    public function getGroupByCostUnit(): ?bool
    {
        return $this->groupByCostUnit;
    }
    /**
     * Set groupByCostUnit value
     * @param bool $groupByCostUnit
     * @return \Pggns\MidocoApi\Orderlists\StructType\BalanceListRequest
     */
    public function setGroupByCostUnit(?bool $groupByCostUnit = null): self
    {
        // validation for constraint: boolean
        if (!is_null($groupByCostUnit) && !is_bool($groupByCostUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($groupByCostUnit, true), gettype($groupByCostUnit)), __LINE__);
        }
        $this->groupByCostUnit = $groupByCostUnit;
        
        return $this;
    }
}
