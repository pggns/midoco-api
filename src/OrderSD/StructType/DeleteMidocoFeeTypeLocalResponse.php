<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

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
     * @var \Pggns\MidocoApi\OrderSD\StructType\FeeTypeLocalDTO|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\FeeTypeLocalDTO $MidocoFeeTypeLocal = null;
    /**
     * Constructor method for DeleteMidocoFeeTypeLocalResponse
     * @uses DeleteMidocoFeeTypeLocalResponse::setMidocoFeeTypeLocal()
     * @param \Pggns\MidocoApi\OrderSD\StructType\FeeTypeLocalDTO $midocoFeeTypeLocal
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\FeeTypeLocalDTO $midocoFeeTypeLocal = null)
    {
        $this
            ->setMidocoFeeTypeLocal($midocoFeeTypeLocal);
    }
    /**
     * Get MidocoFeeTypeLocal value
     * @return \Pggns\MidocoApi\OrderSD\StructType\FeeTypeLocalDTO|null
     */
    public function getMidocoFeeTypeLocal(): ?\Pggns\MidocoApi\OrderSD\StructType\FeeTypeLocalDTO
    {
        return $this->MidocoFeeTypeLocal;
    }
    /**
     * Set MidocoFeeTypeLocal value
     * @param \Pggns\MidocoApi\OrderSD\StructType\FeeTypeLocalDTO $midocoFeeTypeLocal
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteMidocoFeeTypeLocalResponse
     */
    public function setMidocoFeeTypeLocal(?\Pggns\MidocoApi\OrderSD\StructType\FeeTypeLocalDTO $midocoFeeTypeLocal = null): self
    {
        $this->MidocoFeeTypeLocal = $midocoFeeTypeLocal;
        
        return $this;
    }
}
