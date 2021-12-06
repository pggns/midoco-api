<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCashBookItemTypeResponse StructType
 * @subpackage Structs
 */
class GetCashBookItemTypeResponse extends AbstractStructBase
{
    /**
     * The MidocoCashBookItemType
     * Meta information extracted from the WSDL
     * - ref: MidocoCashBookItemType
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoCashBookItemType|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoCashBookItemType $MidocoCashBookItemType = null;
    /**
     * Constructor method for GetCashBookItemTypeResponse
     * @uses GetCashBookItemTypeResponse::setMidocoCashBookItemType()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoCashBookItemType $midocoCashBookItemType
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoCashBookItemType $midocoCashBookItemType = null)
    {
        $this
            ->setMidocoCashBookItemType($midocoCashBookItemType);
    }
    /**
     * Get MidocoCashBookItemType value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoCashBookItemType|null
     */
    public function getMidocoCashBookItemType(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoCashBookItemType
    {
        return $this->MidocoCashBookItemType;
    }
    /**
     * Set MidocoCashBookItemType value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoCashBookItemType $midocoCashBookItemType
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetCashBookItemTypeResponse
     */
    public function setMidocoCashBookItemType(?\Pggns\MidocoApi\Orderlists\StructType\MidocoCashBookItemType $midocoCashBookItemType = null): self
    {
        $this->MidocoCashBookItemType = $midocoCashBookItemType;
        
        return $this;
    }
}
