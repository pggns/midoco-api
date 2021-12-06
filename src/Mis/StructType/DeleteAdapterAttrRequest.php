<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteAdapterAttrRequest StructType
 * @subpackage Structs
 */
class DeleteAdapterAttrRequest extends AbstractStructBase
{
    /**
     * The MidocoAdapterAttr
     * Meta information extracted from the WSDL
     * - ref: MidocoAdapterAttr
     * @var \Pggns\MidocoApi\Mis\StructType\AdapterAttrDTO|null
     */
    protected ?\Pggns\MidocoApi\Mis\StructType\AdapterAttrDTO $MidocoAdapterAttr = null;
    /**
     * Constructor method for DeleteAdapterAttrRequest
     * @uses DeleteAdapterAttrRequest::setMidocoAdapterAttr()
     * @param \Pggns\MidocoApi\Mis\StructType\AdapterAttrDTO $midocoAdapterAttr
     */
    public function __construct(?\Pggns\MidocoApi\Mis\StructType\AdapterAttrDTO $midocoAdapterAttr = null)
    {
        $this
            ->setMidocoAdapterAttr($midocoAdapterAttr);
    }
    /**
     * Get MidocoAdapterAttr value
     * @return \Pggns\MidocoApi\Mis\StructType\AdapterAttrDTO|null
     */
    public function getMidocoAdapterAttr(): ?\Pggns\MidocoApi\Mis\StructType\AdapterAttrDTO
    {
        return $this->MidocoAdapterAttr;
    }
    /**
     * Set MidocoAdapterAttr value
     * @param \Pggns\MidocoApi\Mis\StructType\AdapterAttrDTO $midocoAdapterAttr
     * @return \Pggns\MidocoApi\Mis\StructType\DeleteAdapterAttrRequest
     */
    public function setMidocoAdapterAttr(?\Pggns\MidocoApi\Mis\StructType\AdapterAttrDTO $midocoAdapterAttr = null): self
    {
        $this->MidocoAdapterAttr = $midocoAdapterAttr;
        
        return $this;
    }
}
