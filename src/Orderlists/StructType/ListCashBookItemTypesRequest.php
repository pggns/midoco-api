<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListCashBookItemTypesRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ListCashBookItemTypesRequest extends AbstractStructBase
{
    /**
     * The MidocoCashBookItemType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoCashBookItemType
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoCashBookItemType|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoCashBookItemType $MidocoCashBookItemType = null;
    /**
     * Constructor method for ListCashBookItemTypesRequest
     * @uses ListCashBookItemTypesRequest::setMidocoCashBookItemType()
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\ListCashBookItemTypesRequest
     */
    public function setMidocoCashBookItemType(?\Pggns\MidocoApi\Orderlists\StructType\MidocoCashBookItemType $midocoCashBookItemType = null): self
    {
        $this->MidocoCashBookItemType = $midocoCashBookItemType;
        
        return $this;
    }
}
