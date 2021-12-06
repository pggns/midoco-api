<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

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
     * @var \Pggns\MidocoApi\OrderSD\StructType\MidocoMfLocal|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\MidocoMfLocal $MidocoMfLocal = null;
    /**
     * Constructor method for SaveMfLocalRequest
     * @uses SaveMfLocalRequest::setMidocoMfLocal()
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoMfLocal $midocoMfLocal
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\MidocoMfLocal $midocoMfLocal = null)
    {
        $this
            ->setMidocoMfLocal($midocoMfLocal);
    }
    /**
     * Get MidocoMfLocal value
     * @return \Pggns\MidocoApi\OrderSD\StructType\MidocoMfLocal|null
     */
    public function getMidocoMfLocal(): ?\Pggns\MidocoApi\OrderSD\StructType\MidocoMfLocal
    {
        return $this->MidocoMfLocal;
    }
    /**
     * Set MidocoMfLocal value
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoMfLocal $midocoMfLocal
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveMfLocalRequest
     */
    public function setMidocoMfLocal(?\Pggns\MidocoApi\OrderSD\StructType\MidocoMfLocal $midocoMfLocal = null): self
    {
        $this->MidocoMfLocal = $midocoMfLocal;
        
        return $this;
    }
}
