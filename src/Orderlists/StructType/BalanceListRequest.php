<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BalanceListRequest StructType
 * @subpackage Structs
 */
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
     * Constructor method for BalanceListRequest
     * @uses BalanceListRequest::setMidocoBalanceListCriteria()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoBalanceListCriteriaType $midocoBalanceListCriteria
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoBalanceListCriteriaType $midocoBalanceListCriteria = null)
    {
        $this
            ->setMidocoBalanceListCriteria($midocoBalanceListCriteria);
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
}
