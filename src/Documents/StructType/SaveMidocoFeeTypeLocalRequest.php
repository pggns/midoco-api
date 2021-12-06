<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoFeeTypeLocalRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: add/update a fee type localization
 * @subpackage Structs
 */
class SaveMidocoFeeTypeLocalRequest extends AbstractStructBase
{
    /**
     * The MidocoFeeTypeLocal
     * Meta information extracted from the WSDL
     * - ref: MidocoFeeTypeLocal
     * @var \Pggns\MidocoApi\Documents\StructType\FeeTypeLocalDTO|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\FeeTypeLocalDTO $MidocoFeeTypeLocal = null;
    /**
     * Constructor method for SaveMidocoFeeTypeLocalRequest
     * @uses SaveMidocoFeeTypeLocalRequest::setMidocoFeeTypeLocal()
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
     * @return \Pggns\MidocoApi\Documents\StructType\SaveMidocoFeeTypeLocalRequest
     */
    public function setMidocoFeeTypeLocal(?\Pggns\MidocoApi\Documents\StructType\FeeTypeLocalDTO $midocoFeeTypeLocal = null): self
    {
        $this->MidocoFeeTypeLocal = $midocoFeeTypeLocal;
        
        return $this;
    }
}
