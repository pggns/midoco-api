<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\System\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMfDefRequest StructType
 * @subpackage Structs
 */
class SaveMfDefRequest extends AbstractStructBase
{
    /**
     * The MidocoMfDef
     * Meta information extracted from the WSDL
     * - ref: MidocoMfDef
     * @var \Pggns\MidocoApi\System\StructType\MidocoMfDef|null
     */
    protected ?\Pggns\MidocoApi\System\StructType\MidocoMfDef $MidocoMfDef = null;
    /**
     * Constructor method for SaveMfDefRequest
     * @uses SaveMfDefRequest::setMidocoMfDef()
     * @param \Pggns\MidocoApi\System\StructType\MidocoMfDef $midocoMfDef
     */
    public function __construct(?\Pggns\MidocoApi\System\StructType\MidocoMfDef $midocoMfDef = null)
    {
        $this
            ->setMidocoMfDef($midocoMfDef);
    }
    /**
     * Get MidocoMfDef value
     * @return \Pggns\MidocoApi\System\StructType\MidocoMfDef|null
     */
    public function getMidocoMfDef(): ?\Pggns\MidocoApi\System\StructType\MidocoMfDef
    {
        return $this->MidocoMfDef;
    }
    /**
     * Set MidocoMfDef value
     * @param \Pggns\MidocoApi\System\StructType\MidocoMfDef $midocoMfDef
     * @return \Pggns\MidocoApi\System\StructType\SaveMfDefRequest
     */
    public function setMidocoMfDef(?\Pggns\MidocoApi\System\StructType\MidocoMfDef $midocoMfDef = null): self
    {
        $this->MidocoMfDef = $midocoMfDef;
        
        return $this;
    }
}
