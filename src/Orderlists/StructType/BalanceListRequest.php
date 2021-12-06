<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

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
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBalanceListCriteriaType|null
     */
    protected ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBalanceListCriteriaType $MidocoBalanceListCriteria = null;
    /**
     * Constructor method for BalanceListRequest
     * @uses BalanceListRequest::setMidocoBalanceListCriteria()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBalanceListCriteriaType $midocoBalanceListCriteria
     */
    public function __construct(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBalanceListCriteriaType $midocoBalanceListCriteria = null)
    {
        $this
            ->setMidocoBalanceListCriteria($midocoBalanceListCriteria);
    }
    /**
     * Get MidocoBalanceListCriteria value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBalanceListCriteriaType|null
     */
    public function getMidocoBalanceListCriteria(): ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBalanceListCriteriaType
    {
        return $this->MidocoBalanceListCriteria;
    }
    /**
     * Set MidocoBalanceListCriteria value
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBalanceListCriteriaType $midocoBalanceListCriteria
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\BalanceListRequest
     */
    public function setMidocoBalanceListCriteria(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBalanceListCriteriaType $midocoBalanceListCriteria = null): self
    {
        $this->MidocoBalanceListCriteria = $midocoBalanceListCriteria;
        
        return $this;
    }
}
