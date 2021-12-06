<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMergedMfRequest StructType
 * @subpackage Structs
 */
class GetMergedMfRequest extends AbstractStructBase
{
    /**
     * The MidocoMf
     * Meta information extracted from the WSDL
     * - ref: MidocoMf
     * @var \Pggns\MidocoApi\Api\Mis\StructType\MidocoMf|null
     */
    protected ?\Pggns\MidocoApi\Api\Mis\StructType\MidocoMf $MidocoMf = null;
    /**
     * Constructor method for GetMergedMfRequest
     * @uses GetMergedMfRequest::setMidocoMf()
     * @param \Pggns\MidocoApi\Api\Mis\StructType\MidocoMf $midocoMf
     */
    public function __construct(?\Pggns\MidocoApi\Api\Mis\StructType\MidocoMf $midocoMf = null)
    {
        $this
            ->setMidocoMf($midocoMf);
    }
    /**
     * Get MidocoMf value
     * @return \Pggns\MidocoApi\Api\Mis\StructType\MidocoMf|null
     */
    public function getMidocoMf(): ?\Pggns\MidocoApi\Api\Mis\StructType\MidocoMf
    {
        return $this->MidocoMf;
    }
    /**
     * Set MidocoMf value
     * @param \Pggns\MidocoApi\Api\Mis\StructType\MidocoMf $midocoMf
     * @return \Pggns\MidocoApi\Api\Mis\StructType\GetMergedMfRequest
     */
    public function setMidocoMf(?\Pggns\MidocoApi\Api\Mis\StructType\MidocoMf $midocoMf = null): self
    {
        $this->MidocoMf = $midocoMf;
        
        return $this;
    }
}
