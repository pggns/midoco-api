<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoCCSaleListRequest StructType
 * @subpackage Structs
 */
class GetMidocoCCSaleListRequest extends AbstractStructBase
{
    /**
     * The MidocoCCSalesCriteria
     * Meta information extracted from the WSDL
     * - ref: MidocoCCSalesCriteria
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoCCSaleListCriteriaType|null
     */
    protected ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoCCSaleListCriteriaType $MidocoCCSalesCriteria = null;
    /**
     * Constructor method for GetMidocoCCSaleListRequest
     * @uses GetMidocoCCSaleListRequest::setMidocoCCSalesCriteria()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoCCSaleListCriteriaType $midocoCCSalesCriteria
     */
    public function __construct(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoCCSaleListCriteriaType $midocoCCSalesCriteria = null)
    {
        $this
            ->setMidocoCCSalesCriteria($midocoCCSalesCriteria);
    }
    /**
     * Get MidocoCCSalesCriteria value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoCCSaleListCriteriaType|null
     */
    public function getMidocoCCSalesCriteria(): ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoCCSaleListCriteriaType
    {
        return $this->MidocoCCSalesCriteria;
    }
    /**
     * Set MidocoCCSalesCriteria value
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoCCSaleListCriteriaType $midocoCCSalesCriteria
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\GetMidocoCCSaleListRequest
     */
    public function setMidocoCCSalesCriteria(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoCCSaleListCriteriaType $midocoCCSalesCriteria = null): self
    {
        $this->MidocoCCSalesCriteria = $midocoCCSalesCriteria;
        
        return $this;
    }
}
