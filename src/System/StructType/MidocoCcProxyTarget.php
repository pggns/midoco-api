<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\System\StructType;

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
     * @var \Pggns\MidocoApi\System\StructType\CcproxyHandlerDTO
     */
    protected \Pggns\MidocoApi\System\StructType\CcproxyHandlerDTO $MidocoCcProxyHandler;
    /**
     * Constructor method for MidocoCcProxyTarget
     * @uses MidocoCcProxyTarget::setMidocoCcProxyHandler()
     * @param \Pggns\MidocoApi\System\StructType\CcproxyHandlerDTO $midocoCcProxyHandler
     */
    public function __construct(\Pggns\MidocoApi\System\StructType\CcproxyHandlerDTO $midocoCcProxyHandler)
    {
        $this
            ->setMidocoCcProxyHandler($midocoCcProxyHandler);
    }
    /**
     * Get MidocoCcProxyHandler value
     * @return \Pggns\MidocoApi\System\StructType\CcproxyHandlerDTO
     */
    public function getMidocoCcProxyHandler(): \Pggns\MidocoApi\System\StructType\CcproxyHandlerDTO
    {
        return $this->MidocoCcProxyHandler;
    }
    /**
     * Set MidocoCcProxyHandler value
     * @param \Pggns\MidocoApi\System\StructType\CcproxyHandlerDTO $midocoCcProxyHandler
     * @return \Pggns\MidocoApi\System\StructType\MidocoCcProxyTarget
     */
    public function setMidocoCcProxyHandler(\Pggns\MidocoApi\System\StructType\CcproxyHandlerDTO $midocoCcProxyHandler): self
    {
        $this->MidocoCcProxyHandler = $midocoCcProxyHandler;
        
        return $this;
    }
}
