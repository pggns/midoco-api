<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

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
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoMfDef|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoMfDef $MidocoMfDef = null;
    /**
     * Constructor method for SaveMfDefRequest
     * @uses SaveMfDefRequest::setMidocoMfDef()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoMfDef $midocoMfDef
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\MidocoMfDef $midocoMfDef = null)
    {
        $this
            ->setMidocoMfDef($midocoMfDef);
    }
    /**
     * Get MidocoMfDef value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoMfDef|null
     */
    public function getMidocoMfDef(): ?\Pggns\MidocoApi\Crm\StructType\MidocoMfDef
    {
        return $this->MidocoMfDef;
    }
    /**
     * Set MidocoMfDef value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoMfDef $midocoMfDef
     * @return \Pggns\MidocoApi\Crm\StructType\SaveMfDefRequest
     */
    public function setMidocoMfDef(?\Pggns\MidocoApi\Crm\StructType\MidocoMfDef $midocoMfDef = null): self
    {
        $this->MidocoMfDef = $midocoMfDef;
        
        return $this;
    }
}
