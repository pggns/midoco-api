<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteMfLocalRequest StructType
 * @subpackage Structs
 */
class DeleteMfLocalRequest extends AbstractStructBase
{
    /**
     * The MidocoMfLocal
     * Meta information extracted from the WSDL
     * - ref: MidocoMfLocal
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoMfLocal|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoMfLocal $MidocoMfLocal = null;
    /**
     * Constructor method for DeleteMfLocalRequest
     * @uses DeleteMfLocalRequest::setMidocoMfLocal()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoMfLocal $midocoMfLocal
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoMfLocal $midocoMfLocal = null)
    {
        $this
            ->setMidocoMfLocal($midocoMfLocal);
    }
    /**
     * Get MidocoMfLocal value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoMfLocal|null
     */
    public function getMidocoMfLocal(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoMfLocal
    {
        return $this->MidocoMfLocal;
    }
    /**
     * Set MidocoMfLocal value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoMfLocal $midocoMfLocal
     * @return \Pggns\MidocoApi\Orderlists\StructType\DeleteMfLocalRequest
     */
    public function setMidocoMfLocal(?\Pggns\MidocoApi\Orderlists\StructType\MidocoMfLocal $midocoMfLocal = null): self
    {
        $this->MidocoMfLocal = $midocoMfLocal;
        
        return $this;
    }
}
