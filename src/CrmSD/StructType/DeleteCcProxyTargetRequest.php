<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteCcProxyTargetRequest StructType
 * @subpackage Structs
 */
class DeleteCcProxyTargetRequest extends AbstractStructBase
{
    /**
     * The MidocoCcProxyTarget
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - ref: MidocoCcProxyTarget
     * @var \Pggns\MidocoApi\CrmSD\StructType\MidocoCcProxyTarget|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\MidocoCcProxyTarget $MidocoCcProxyTarget = null;
    /**
     * Constructor method for DeleteCcProxyTargetRequest
     * @uses DeleteCcProxyTargetRequest::setMidocoCcProxyTarget()
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoCcProxyTarget $midocoCcProxyTarget
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\MidocoCcProxyTarget $midocoCcProxyTarget = null)
    {
        $this
            ->setMidocoCcProxyTarget($midocoCcProxyTarget);
    }
    /**
     * Get MidocoCcProxyTarget value
     * @return \Pggns\MidocoApi\CrmSD\StructType\MidocoCcProxyTarget|null
     */
    public function getMidocoCcProxyTarget(): ?\Pggns\MidocoApi\CrmSD\StructType\MidocoCcProxyTarget
    {
        return $this->MidocoCcProxyTarget;
    }
    /**
     * Set MidocoCcProxyTarget value
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoCcProxyTarget $midocoCcProxyTarget
     * @return \Pggns\MidocoApi\CrmSD\StructType\DeleteCcProxyTargetRequest
     */
    public function setMidocoCcProxyTarget(?\Pggns\MidocoApi\CrmSD\StructType\MidocoCcProxyTarget $midocoCcProxyTarget = null): self
    {
        $this->MidocoCcProxyTarget = $midocoCcProxyTarget;
        
        return $this;
    }
}
