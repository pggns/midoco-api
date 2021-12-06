<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoReceiptInfoType StructType
 * @subpackage Structs
 */
class MidocoReceiptInfoType extends AbstractStructBase
{
    /**
     * The MidocoReceiptInfo
     * Meta information extracted from the WSDL
     * - ref: MidocoReceiptInfo
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoReceiptInfo|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoReceiptInfo $MidocoReceiptInfo = null;
    /**
     * Constructor method for MidocoReceiptInfoType
     * @uses MidocoReceiptInfoType::setMidocoReceiptInfo()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoReceiptInfo $midocoReceiptInfo
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoReceiptInfo $midocoReceiptInfo = null)
    {
        $this
            ->setMidocoReceiptInfo($midocoReceiptInfo);
    }
    /**
     * Get MidocoReceiptInfo value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoReceiptInfo|null
     */
    public function getMidocoReceiptInfo(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoReceiptInfo
    {
        return $this->MidocoReceiptInfo;
    }
    /**
     * Set MidocoReceiptInfo value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoReceiptInfo $midocoReceiptInfo
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoReceiptInfoType
     */
    public function setMidocoReceiptInfo(?\Pggns\MidocoApi\Orderlists\StructType\MidocoReceiptInfo $midocoReceiptInfo = null): self
    {
        $this->MidocoReceiptInfo = $midocoReceiptInfo;
        
        return $this;
    }
}
