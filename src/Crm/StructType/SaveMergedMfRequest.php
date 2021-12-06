<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMergedMfRequest StructType
 * @subpackage Structs
 */
class SaveMergedMfRequest extends AbstractStructBase
{
    /**
     * The MidocoMf
     * Meta information extracted from the WSDL
     * - ref: MidocoMf
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoMf|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoMf $MidocoMf = null;
    /**
     * Constructor method for SaveMergedMfRequest
     * @uses SaveMergedMfRequest::setMidocoMf()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoMf $midocoMf
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\MidocoMf $midocoMf = null)
    {
        $this
            ->setMidocoMf($midocoMf);
    }
    /**
     * Get MidocoMf value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoMf|null
     */
    public function getMidocoMf(): ?\Pggns\MidocoApi\Crm\StructType\MidocoMf
    {
        return $this->MidocoMf;
    }
    /**
     * Set MidocoMf value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoMf $midocoMf
     * @return \Pggns\MidocoApi\Crm\StructType\SaveMergedMfRequest
     */
    public function setMidocoMf(?\Pggns\MidocoApi\Crm\StructType\MidocoMf $midocoMf = null): self
    {
        $this->MidocoMf = $midocoMf;
        
        return $this;
    }
}
