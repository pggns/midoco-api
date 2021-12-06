<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteMidocoFeeTypeLocalResponse StructType
 * @subpackage Structs
 */
class DeleteMidocoFeeTypeLocalResponse extends AbstractStructBase
{
    /**
     * The MidocoFeeTypeLocal
     * Meta information extracted from the WSDL
     * - ref: MidocoFeeTypeLocal
     * @var \Pggns\MidocoApi\Orderlists\StructType\FeeTypeLocalDTO|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\FeeTypeLocalDTO $MidocoFeeTypeLocal = null;
    /**
     * Constructor method for DeleteMidocoFeeTypeLocalResponse
     * @uses DeleteMidocoFeeTypeLocalResponse::setMidocoFeeTypeLocal()
     * @param \Pggns\MidocoApi\Orderlists\StructType\FeeTypeLocalDTO $midocoFeeTypeLocal
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\FeeTypeLocalDTO $midocoFeeTypeLocal = null)
    {
        $this
            ->setMidocoFeeTypeLocal($midocoFeeTypeLocal);
    }
    /**
     * Get MidocoFeeTypeLocal value
     * @return \Pggns\MidocoApi\Orderlists\StructType\FeeTypeLocalDTO|null
     */
    public function getMidocoFeeTypeLocal(): ?\Pggns\MidocoApi\Orderlists\StructType\FeeTypeLocalDTO
    {
        return $this->MidocoFeeTypeLocal;
    }
    /**
     * Set MidocoFeeTypeLocal value
     * @param \Pggns\MidocoApi\Orderlists\StructType\FeeTypeLocalDTO $midocoFeeTypeLocal
     * @return \Pggns\MidocoApi\Orderlists\StructType\DeleteMidocoFeeTypeLocalResponse
     */
    public function setMidocoFeeTypeLocal(?\Pggns\MidocoApi\Orderlists\StructType\FeeTypeLocalDTO $midocoFeeTypeLocal = null): self
    {
        $this->MidocoFeeTypeLocal = $midocoFeeTypeLocal;
        
        return $this;
    }
}
