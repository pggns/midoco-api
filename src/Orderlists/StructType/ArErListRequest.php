<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ArErListRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ArErListRequest extends AbstractStructBase
{
    /**
     * The MidocoArErListCriteria
     * Meta information extracted from the WSDL
     * - ref: MidocoArErListCriteria
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoArErListCriteriaType|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoArErListCriteriaType $MidocoArErListCriteria = null;
    /**
     * Constructor method for ArErListRequest
     * @uses ArErListRequest::setMidocoArErListCriteria()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoArErListCriteriaType $midocoArErListCriteria
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoArErListCriteriaType $midocoArErListCriteria = null)
    {
        $this
            ->setMidocoArErListCriteria($midocoArErListCriteria);
    }
    /**
     * Get MidocoArErListCriteria value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoArErListCriteriaType|null
     */
    public function getMidocoArErListCriteria(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoArErListCriteriaType
    {
        return $this->MidocoArErListCriteria;
    }
    /**
     * Set MidocoArErListCriteria value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoArErListCriteriaType $midocoArErListCriteria
     * @return \Pggns\MidocoApi\Orderlists\StructType\ArErListRequest
     */
    public function setMidocoArErListCriteria(?\Pggns\MidocoApi\Orderlists\StructType\MidocoArErListCriteriaType $midocoArErListCriteria = null): self
    {
        $this->MidocoArErListCriteria = $midocoArErListCriteria;
        
        return $this;
    }
}
