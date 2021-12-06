<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMfDefRequest StructType
 * @subpackage Structs
 */
class GetMfDefRequest extends AbstractStructBase
{
    /**
     * The MidocoMfDef
     * Meta information extracted from the WSDL
     * - ref: MidocoMfDef
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoMfDef|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoMfDef $MidocoMfDef = null;
    /**
     * Constructor method for GetMfDefRequest
     * @uses GetMfDefRequest::setMidocoMfDef()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoMfDef $midocoMfDef
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoMfDef $midocoMfDef = null)
    {
        $this
            ->setMidocoMfDef($midocoMfDef);
    }
    /**
     * Get MidocoMfDef value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoMfDef|null
     */
    public function getMidocoMfDef(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoMfDef
    {
        return $this->MidocoMfDef;
    }
    /**
     * Set MidocoMfDef value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoMfDef $midocoMfDef
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetMfDefRequest
     */
    public function setMidocoMfDef(?\Pggns\MidocoApi\Orderlists\StructType\MidocoMfDef $midocoMfDef = null): self
    {
        $this->MidocoMfDef = $midocoMfDef;
        
        return $this;
    }
}
