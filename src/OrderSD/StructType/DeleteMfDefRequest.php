<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteMfDefRequest StructType
 * @subpackage Structs
 */
class DeleteMfDefRequest extends AbstractStructBase
{
    /**
     * The MidocoMfDef
     * Meta information extracted from the WSDL
     * - ref: MidocoMfDef
     * @var \Pggns\MidocoApi\OrderSD\StructType\MidocoMfDef|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\MidocoMfDef $MidocoMfDef = null;
    /**
     * Constructor method for DeleteMfDefRequest
     * @uses DeleteMfDefRequest::setMidocoMfDef()
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoMfDef $midocoMfDef
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\MidocoMfDef $midocoMfDef = null)
    {
        $this
            ->setMidocoMfDef($midocoMfDef);
    }
    /**
     * Get MidocoMfDef value
     * @return \Pggns\MidocoApi\OrderSD\StructType\MidocoMfDef|null
     */
    public function getMidocoMfDef(): ?\Pggns\MidocoApi\OrderSD\StructType\MidocoMfDef
    {
        return $this->MidocoMfDef;
    }
    /**
     * Set MidocoMfDef value
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoMfDef $midocoMfDef
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteMfDefRequest
     */
    public function setMidocoMfDef(?\Pggns\MidocoApi\OrderSD\StructType\MidocoMfDef $midocoMfDef = null): self
    {
        $this->MidocoMfDef = $midocoMfDef;
        
        return $this;
    }
}
