<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DepositListRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DepositListRequest extends AbstractStructBase
{
    /**
     * The MidocoDepositListCriteria
     * Meta information extracted from the WSDL
     * - ref: MidocoDepositListCriteria
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListCriteriaType|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListCriteriaType $MidocoDepositListCriteria = null;
    /**
     * Constructor method for DepositListRequest
     * @uses DepositListRequest::setMidocoDepositListCriteria()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListCriteriaType $midocoDepositListCriteria
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListCriteriaType $midocoDepositListCriteria = null)
    {
        $this
            ->setMidocoDepositListCriteria($midocoDepositListCriteria);
    }
    /**
     * Get MidocoDepositListCriteria value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListCriteriaType|null
     */
    public function getMidocoDepositListCriteria(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListCriteriaType
    {
        return $this->MidocoDepositListCriteria;
    }
    /**
     * Set MidocoDepositListCriteria value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListCriteriaType $midocoDepositListCriteria
     * @return \Pggns\MidocoApi\Orderlists\StructType\DepositListRequest
     */
    public function setMidocoDepositListCriteria(?\Pggns\MidocoApi\Orderlists\StructType\MidocoDepositListCriteriaType $midocoDepositListCriteria = null): self
    {
        $this->MidocoDepositListCriteria = $midocoDepositListCriteria;
        
        return $this;
    }
}
