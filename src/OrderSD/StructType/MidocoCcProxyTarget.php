<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCcProxyTarget StructType
 * @subpackage Structs
 */
class MidocoCcProxyTarget extends CcproxyTargetDTO
{
    /**
     * The MidocoCcProxyHandler
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: MidocoCcProxyHandler
     * @var \Pggns\MidocoApi\OrderSD\StructType\CcproxyHandlerDTO
     */
    protected \Pggns\MidocoApi\OrderSD\StructType\CcproxyHandlerDTO $MidocoCcProxyHandler;
    /**
     * Constructor method for MidocoCcProxyTarget
     * @uses MidocoCcProxyTarget::setMidocoCcProxyHandler()
     * @param \Pggns\MidocoApi\OrderSD\StructType\CcproxyHandlerDTO $midocoCcProxyHandler
     */
    public function __construct(\Pggns\MidocoApi\OrderSD\StructType\CcproxyHandlerDTO $midocoCcProxyHandler)
    {
        $this
            ->setMidocoCcProxyHandler($midocoCcProxyHandler);
    }
    /**
     * Get MidocoCcProxyHandler value
     * @return \Pggns\MidocoApi\OrderSD\StructType\CcproxyHandlerDTO
     */
    public function getMidocoCcProxyHandler(): \Pggns\MidocoApi\OrderSD\StructType\CcproxyHandlerDTO
    {
        return $this->MidocoCcProxyHandler;
    }
    /**
     * Set MidocoCcProxyHandler value
     * @param \Pggns\MidocoApi\OrderSD\StructType\CcproxyHandlerDTO $midocoCcProxyHandler
     * @return \Pggns\MidocoApi\OrderSD\StructType\MidocoCcProxyTarget
     */
    public function setMidocoCcProxyHandler(\Pggns\MidocoApi\OrderSD\StructType\CcproxyHandlerDTO $midocoCcProxyHandler): self
    {
        $this->MidocoCcProxyHandler = $midocoCcProxyHandler;
        
        return $this;
    }
}
