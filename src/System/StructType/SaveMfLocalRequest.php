<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\System\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMfLocalRequest StructType
 * @subpackage Structs
 */
class SaveMfLocalRequest extends AbstractStructBase
{
    /**
     * The MidocoMfLocal
     * Meta information extracted from the WSDL
     * - ref: MidocoMfLocal
     * @var \Pggns\MidocoApi\System\StructType\MidocoMfLocal|null
     */
    protected ?\Pggns\MidocoApi\System\StructType\MidocoMfLocal $MidocoMfLocal = null;
    /**
     * Constructor method for SaveMfLocalRequest
     * @uses SaveMfLocalRequest::setMidocoMfLocal()
     * @param \Pggns\MidocoApi\System\StructType\MidocoMfLocal $midocoMfLocal
     */
    public function __construct(?\Pggns\MidocoApi\System\StructType\MidocoMfLocal $midocoMfLocal = null)
    {
        $this
            ->setMidocoMfLocal($midocoMfLocal);
    }
    /**
     * Get MidocoMfLocal value
     * @return \Pggns\MidocoApi\System\StructType\MidocoMfLocal|null
     */
    public function getMidocoMfLocal(): ?\Pggns\MidocoApi\System\StructType\MidocoMfLocal
    {
        return $this->MidocoMfLocal;
    }
    /**
     * Set MidocoMfLocal value
     * @param \Pggns\MidocoApi\System\StructType\MidocoMfLocal $midocoMfLocal
     * @return \Pggns\MidocoApi\System\StructType\SaveMfLocalRequest
     */
    public function setMidocoMfLocal(?\Pggns\MidocoApi\System\StructType\MidocoMfLocal $midocoMfLocal = null): self
    {
        $this->MidocoMfLocal = $midocoMfLocal;
        
        return $this;
    }
}
