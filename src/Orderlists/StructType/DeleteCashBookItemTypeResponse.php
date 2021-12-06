<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteCashBookItemTypeResponse StructType
 * @subpackage Structs
 */
class DeleteCashBookItemTypeResponse extends AbstractStructBase
{
    /**
     * The MidocoCashBookItemType
     * Meta information extracted from the WSDL
     * - ref: MidocoCashBookItemType
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoCashBookItemType|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoCashBookItemType $MidocoCashBookItemType = null;
    /**
     * Constructor method for DeleteCashBookItemTypeResponse
     * @uses DeleteCashBookItemTypeResponse::setMidocoCashBookItemType()
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\DeleteCashBookItemTypeResponse
     */
    public function setMidocoCashBookItemType(?\Pggns\MidocoApi\Orderlists\StructType\MidocoCashBookItemType $midocoCashBookItemType = null): self
    {
        $this->MidocoCashBookItemType = $midocoCashBookItemType;
        
        return $this;
    }
}
