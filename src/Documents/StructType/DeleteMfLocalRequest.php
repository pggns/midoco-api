<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteMfLocalRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteMfLocalRequest extends AbstractStructBase
{
    /**
     * The MidocoMfLocal
     * Meta information extracted from the WSDL
     * - ref: MidocoMfLocal
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoMfLocal|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoMfLocal $MidocoMfLocal = null;
    /**
     * Constructor method for DeleteMfLocalRequest
     * @uses DeleteMfLocalRequest::setMidocoMfLocal()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoMfLocal $midocoMfLocal
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\MidocoMfLocal $midocoMfLocal = null)
    {
        $this
            ->setMidocoMfLocal($midocoMfLocal);
    }
    /**
     * Get MidocoMfLocal value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoMfLocal|null
     */
    public function getMidocoMfLocal(): ?\Pggns\MidocoApi\Documents\StructType\MidocoMfLocal
    {
        return $this->MidocoMfLocal;
    }
    /**
     * Set MidocoMfLocal value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoMfLocal $midocoMfLocal
     * @return \Pggns\MidocoApi\Documents\StructType\DeleteMfLocalRequest
     */
    public function setMidocoMfLocal(?\Pggns\MidocoApi\Documents\StructType\MidocoMfLocal $midocoMfLocal = null): self
    {
        $this->MidocoMfLocal = $midocoMfLocal;
        
        return $this;
    }
}
