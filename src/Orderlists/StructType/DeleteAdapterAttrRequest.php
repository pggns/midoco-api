<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

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
     * @var \Pggns\MidocoApi\Orderlists\StructType\AdapterAttrDTO|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\AdapterAttrDTO $MidocoAdapterAttr = null;
    /**
     * Constructor method for DeleteAdapterAttrRequest
     * @uses DeleteAdapterAttrRequest::setMidocoAdapterAttr()
     * @param \Pggns\MidocoApi\Orderlists\StructType\AdapterAttrDTO $midocoAdapterAttr
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\AdapterAttrDTO $midocoAdapterAttr = null)
    {
        $this
            ->setMidocoAdapterAttr($midocoAdapterAttr);
    }
    /**
     * Get MidocoAdapterAttr value
     * @return \Pggns\MidocoApi\Orderlists\StructType\AdapterAttrDTO|null
     */
    public function getMidocoAdapterAttr(): ?\Pggns\MidocoApi\Orderlists\StructType\AdapterAttrDTO
    {
        return $this->MidocoAdapterAttr;
    }
    /**
     * Set MidocoAdapterAttr value
     * @param \Pggns\MidocoApi\Orderlists\StructType\AdapterAttrDTO $midocoAdapterAttr
     * @return \Pggns\MidocoApi\Orderlists\StructType\DeleteAdapterAttrRequest
     */
    public function setMidocoAdapterAttr(?\Pggns\MidocoApi\Orderlists\StructType\AdapterAttrDTO $midocoAdapterAttr = null): self
    {
        $this->MidocoAdapterAttr = $midocoAdapterAttr;
        
        return $this;
    }
}
