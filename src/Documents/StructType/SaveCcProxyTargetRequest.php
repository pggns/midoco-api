<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCcProxyTargetRequest StructType
 * @subpackage Structs
 */
class SaveCcProxyTargetRequest extends AbstractStructBase
{
    /**
     * The MidocoCcProxyTarget
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - ref: MidocoCcProxyTarget
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoCcProxyTarget|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoCcProxyTarget $MidocoCcProxyTarget = null;
    /**
     * Constructor method for SaveCcProxyTargetRequest
     * @uses SaveCcProxyTargetRequest::setMidocoCcProxyTarget()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoCcProxyTarget $midocoCcProxyTarget
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\MidocoCcProxyTarget $midocoCcProxyTarget = null)
    {
        $this
            ->setMidocoCcProxyTarget($midocoCcProxyTarget);
    }
    /**
     * Get MidocoCcProxyTarget value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoCcProxyTarget|null
     */
    public function getMidocoCcProxyTarget(): ?\Pggns\MidocoApi\Documents\StructType\MidocoCcProxyTarget
    {
        return $this->MidocoCcProxyTarget;
    }
    /**
     * Set MidocoCcProxyTarget value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoCcProxyTarget $midocoCcProxyTarget
     * @return \Pggns\MidocoApi\Documents\StructType\SaveCcProxyTargetRequest
     */
    public function setMidocoCcProxyTarget(?\Pggns\MidocoApi\Documents\StructType\MidocoCcProxyTarget $midocoCcProxyTarget = null): self
    {
        $this->MidocoCcProxyTarget = $midocoCcProxyTarget;
        
        return $this;
    }
}
