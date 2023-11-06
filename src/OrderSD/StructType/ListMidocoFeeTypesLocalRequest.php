<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListMidocoFeeTypesLocalRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: list the fee types localizations after a criteria
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ListMidocoFeeTypesLocalRequest extends AbstractStructBase
{
    /**
     * The MidocoFeeTypeLocal
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoFeeTypeLocal
     * @var \Pggns\MidocoApi\OrderSD\StructType\FeeTypeLocalDTO|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\FeeTypeLocalDTO $MidocoFeeTypeLocal = null;
    /**
     * Constructor method for ListMidocoFeeTypesLocalRequest
     * @uses ListMidocoFeeTypesLocalRequest::setMidocoFeeTypeLocal()
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
     * @return \Pggns\MidocoApi\OrderSD\StructType\ListMidocoFeeTypesLocalRequest
     */
    public function setMidocoFeeTypeLocal(?\Pggns\MidocoApi\OrderSD\StructType\FeeTypeLocalDTO $midocoFeeTypeLocal = null): self
    {
        $this->MidocoFeeTypeLocal = $midocoFeeTypeLocal;
        
        return $this;
    }
}
