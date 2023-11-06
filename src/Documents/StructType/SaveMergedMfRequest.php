<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMergedMfRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveMergedMfRequest extends AbstractStructBase
{
    /**
     * The MidocoMf
     * Meta information extracted from the WSDL
     * - ref: MidocoMf
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoMf|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoMf $MidocoMf = null;
    /**
     * Constructor method for SaveMergedMfRequest
     * @uses SaveMergedMfRequest::setMidocoMf()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoMf $midocoMf
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\MidocoMf $midocoMf = null)
    {
        $this
            ->setMidocoMf($midocoMf);
    }
    /**
     * Get MidocoMf value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoMf|null
     */
    public function getMidocoMf(): ?\Pggns\MidocoApi\Documents\StructType\MidocoMf
    {
        return $this->MidocoMf;
    }
    /**
     * Set MidocoMf value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoMf $midocoMf
     * @return \Pggns\MidocoApi\Documents\StructType\SaveMergedMfRequest
     */
    public function setMidocoMf(?\Pggns\MidocoApi\Documents\StructType\MidocoMf $midocoMf = null): self
    {
        $this->MidocoMf = $midocoMf;
        
        return $this;
    }
}
