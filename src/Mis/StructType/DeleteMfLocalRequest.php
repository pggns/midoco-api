<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Mis\StructType;

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
     * @var \Pggns\MidocoApi\Api\Mis\StructType\MidocoMfLocal|null
     */
    protected ?\Pggns\MidocoApi\Api\Mis\StructType\MidocoMfLocal $MidocoMfLocal = null;
    /**
     * Constructor method for DeleteMfLocalRequest
     * @uses DeleteMfLocalRequest::setMidocoMfLocal()
     * @param \Pggns\MidocoApi\Api\Mis\StructType\MidocoMfLocal $midocoMfLocal
     */
    public function __construct(?\Pggns\MidocoApi\Api\Mis\StructType\MidocoMfLocal $midocoMfLocal = null)
    {
        $this
            ->setMidocoMfLocal($midocoMfLocal);
    }
    /**
     * Get MidocoMfLocal value
     * @return \Pggns\MidocoApi\Api\Mis\StructType\MidocoMfLocal|null
     */
    public function getMidocoMfLocal(): ?\Pggns\MidocoApi\Api\Mis\StructType\MidocoMfLocal
    {
        return $this->MidocoMfLocal;
    }
    /**
     * Set MidocoMfLocal value
     * @param \Pggns\MidocoApi\Api\Mis\StructType\MidocoMfLocal $midocoMfLocal
     * @return \Pggns\MidocoApi\Api\Mis\StructType\DeleteMfLocalRequest
     */
    public function setMidocoMfLocal(?\Pggns\MidocoApi\Api\Mis\StructType\MidocoMfLocal $midocoMfLocal = null): self
    {
        $this->MidocoMfLocal = $midocoMfLocal;
        
        return $this;
    }
}
