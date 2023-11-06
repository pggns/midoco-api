<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

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
     * @var \Pggns\MidocoApi\MidocoSystem\StructType\MidocoMf|null
     */
    protected ?\Pggns\MidocoApi\MidocoSystem\StructType\MidocoMf $MidocoMf = null;
    /**
     * Constructor method for SaveMergedMfRequest
     * @uses SaveMergedMfRequest::setMidocoMf()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\MidocoMf $midocoMf
     */
    public function __construct(?\Pggns\MidocoApi\MidocoSystem\StructType\MidocoMf $midocoMf = null)
    {
        $this
            ->setMidocoMf($midocoMf);
    }
    /**
     * Get MidocoMf value
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\MidocoMf|null
     */
    public function getMidocoMf(): ?\Pggns\MidocoApi\MidocoSystem\StructType\MidocoMf
    {
        return $this->MidocoMf;
    }
    /**
     * Set MidocoMf value
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\MidocoMf $midocoMf
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\SaveMergedMfRequest
     */
    public function setMidocoMf(?\Pggns\MidocoApi\MidocoSystem\StructType\MidocoMf $midocoMf = null): self
    {
        $this->MidocoMf = $midocoMf;
        
        return $this;
    }
}
