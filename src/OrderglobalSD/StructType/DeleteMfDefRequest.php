<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderglobalSD\StructType;

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
     * @var \Pggns\MidocoApi\OrderglobalSD\StructType\MidocoMfDef|null
     */
    protected ?\Pggns\MidocoApi\OrderglobalSD\StructType\MidocoMfDef $MidocoMfDef = null;
    /**
     * Constructor method for DeleteMfDefRequest
     * @uses DeleteMfDefRequest::setMidocoMfDef()
     * @param \Pggns\MidocoApi\OrderglobalSD\StructType\MidocoMfDef $midocoMfDef
     */
    public function __construct(?\Pggns\MidocoApi\OrderglobalSD\StructType\MidocoMfDef $midocoMfDef = null)
    {
        $this
            ->setMidocoMfDef($midocoMfDef);
    }
    /**
     * Get MidocoMfDef value
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\MidocoMfDef|null
     */
    public function getMidocoMfDef(): ?\Pggns\MidocoApi\OrderglobalSD\StructType\MidocoMfDef
    {
        return $this->MidocoMfDef;
    }
    /**
     * Set MidocoMfDef value
     * @param \Pggns\MidocoApi\OrderglobalSD\StructType\MidocoMfDef $midocoMfDef
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\DeleteMfDefRequest
     */
    public function setMidocoMfDef(?\Pggns\MidocoApi\OrderglobalSD\StructType\MidocoMfDef $midocoMfDef = null): self
    {
        $this->MidocoMfDef = $midocoMfDef;
        
        return $this;
    }
}
