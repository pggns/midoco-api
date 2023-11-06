<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OpenErListRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class OpenErListRequest extends AbstractStructBase
{
    /**
     * The MidocoOpenErListCriteria
     * Meta information extracted from the WSDL
     * - ref: MidocoOpenErListCriteria
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoArErListCriteriaType|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoArErListCriteriaType $MidocoOpenErListCriteria = null;
    /**
     * Constructor method for OpenErListRequest
     * @uses OpenErListRequest::setMidocoOpenErListCriteria()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoArErListCriteriaType $midocoOpenErListCriteria
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoArErListCriteriaType $midocoOpenErListCriteria = null)
    {
        $this
            ->setMidocoOpenErListCriteria($midocoOpenErListCriteria);
    }
    /**
     * Get MidocoOpenErListCriteria value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoArErListCriteriaType|null
     */
    public function getMidocoOpenErListCriteria(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoArErListCriteriaType
    {
        return $this->MidocoOpenErListCriteria;
    }
    /**
     * Set MidocoOpenErListCriteria value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoArErListCriteriaType $midocoOpenErListCriteria
     * @return \Pggns\MidocoApi\Orderlists\StructType\OpenErListRequest
     */
    public function setMidocoOpenErListCriteria(?\Pggns\MidocoApi\Orderlists\StructType\MidocoArErListCriteriaType $midocoOpenErListCriteria = null): self
    {
        $this->MidocoOpenErListCriteria = $midocoOpenErListCriteria;
        
        return $this;
    }
}
