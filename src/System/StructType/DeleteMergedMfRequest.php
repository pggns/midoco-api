<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\System\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteMergedMfRequest StructType
 * @subpackage Structs
 */
class DeleteMergedMfRequest extends AbstractStructBase
{
    /**
     * The MidocoMf
     * Meta information extracted from the WSDL
     * - ref: MidocoMf
     * @var \Pggns\MidocoApi\System\StructType\MidocoMf|null
     */
    protected ?\Pggns\MidocoApi\System\StructType\MidocoMf $MidocoMf = null;
    /**
     * Constructor method for DeleteMergedMfRequest
     * @uses DeleteMergedMfRequest::setMidocoMf()
     * @param \Pggns\MidocoApi\System\StructType\MidocoMf $midocoMf
     */
    public function __construct(?\Pggns\MidocoApi\System\StructType\MidocoMf $midocoMf = null)
    {
        $this
            ->setMidocoMf($midocoMf);
    }
    /**
     * Get MidocoMf value
     * @return \Pggns\MidocoApi\System\StructType\MidocoMf|null
     */
    public function getMidocoMf(): ?\Pggns\MidocoApi\System\StructType\MidocoMf
    {
        return $this->MidocoMf;
    }
    /**
     * Set MidocoMf value
     * @param \Pggns\MidocoApi\System\StructType\MidocoMf $midocoMf
     * @return \Pggns\MidocoApi\System\StructType\DeleteMergedMfRequest
     */
    public function setMidocoMf(?\Pggns\MidocoApi\System\StructType\MidocoMf $midocoMf = null): self
    {
        $this->MidocoMf = $midocoMf;
        
        return $this;
    }
}
