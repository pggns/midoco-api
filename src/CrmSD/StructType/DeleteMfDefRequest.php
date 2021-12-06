<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

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
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoMfDef|null
     */
    protected ?\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoMfDef $MidocoMfDef = null;
    /**
     * Constructor method for DeleteMfDefRequest
     * @uses DeleteMfDefRequest::setMidocoMfDef()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoMfDef $midocoMfDef
     */
    public function __construct(?\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoMfDef $midocoMfDef = null)
    {
        $this
            ->setMidocoMfDef($midocoMfDef);
    }
    /**
     * Get MidocoMfDef value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoMfDef|null
     */
    public function getMidocoMfDef(): ?\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoMfDef
    {
        return $this->MidocoMfDef;
    }
    /**
     * Set MidocoMfDef value
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoMfDef $midocoMfDef
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\DeleteMfDefRequest
     */
    public function setMidocoMfDef(?\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoMfDef $midocoMfDef = null): self
    {
        $this->MidocoMfDef = $midocoMfDef;
        
        return $this;
    }
}