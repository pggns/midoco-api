<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoFeeTypeLocalResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: contains the fee localization
 * @subpackage Structs
 */
class SaveMidocoFeeTypeLocalResponse extends AbstractStructBase
{
    /**
     * The MidocoFeeTypeLocal
     * Meta information extracted from the WSDL
     * - ref: MidocoFeeTypeLocal
     * @var \Pggns\MidocoApi\Documents\StructType\FeeTypeLocalDTO|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\FeeTypeLocalDTO $MidocoFeeTypeLocal = null;
    /**
     * Constructor method for SaveMidocoFeeTypeLocalResponse
     * @uses SaveMidocoFeeTypeLocalResponse::setMidocoFeeTypeLocal()
     * @param \Pggns\MidocoApi\Documents\StructType\FeeTypeLocalDTO $midocoFeeTypeLocal
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\FeeTypeLocalDTO $midocoFeeTypeLocal = null)
    {
        $this
            ->setMidocoFeeTypeLocal($midocoFeeTypeLocal);
    }
    /**
     * Get MidocoFeeTypeLocal value
     * @return \Pggns\MidocoApi\Documents\StructType\FeeTypeLocalDTO|null
     */
    public function getMidocoFeeTypeLocal(): ?\Pggns\MidocoApi\Documents\StructType\FeeTypeLocalDTO
    {
        return $this->MidocoFeeTypeLocal;
    }
    /**
     * Set MidocoFeeTypeLocal value
     * @param \Pggns\MidocoApi\Documents\StructType\FeeTypeLocalDTO $midocoFeeTypeLocal
     * @return \Pggns\MidocoApi\Documents\StructType\SaveMidocoFeeTypeLocalResponse
     */
    public function setMidocoFeeTypeLocal(?\Pggns\MidocoApi\Documents\StructType\FeeTypeLocalDTO $midocoFeeTypeLocal = null): self
    {
        $this->MidocoFeeTypeLocal = $midocoFeeTypeLocal;
        
        return $this;
    }
}
