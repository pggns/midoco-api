<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoReceiptInfoType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoReceiptInfoType extends AbstractStructBase
{
    /**
     * The MidocoReceiptInfo
     * Meta information extracted from the WSDL
     * - ref: MidocoReceiptInfo
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoReceiptInfo|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoReceiptInfo $MidocoReceiptInfo = null;
    /**
     * Constructor method for MidocoReceiptInfoType
     * @uses MidocoReceiptInfoType::setMidocoReceiptInfo()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoReceiptInfo $midocoReceiptInfo
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\MidocoReceiptInfo $midocoReceiptInfo = null)
    {
        $this
            ->setMidocoReceiptInfo($midocoReceiptInfo);
    }
    /**
     * Get MidocoReceiptInfo value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoReceiptInfo|null
     */
    public function getMidocoReceiptInfo(): ?\Pggns\MidocoApi\Documents\StructType\MidocoReceiptInfo
    {
        return $this->MidocoReceiptInfo;
    }
    /**
     * Set MidocoReceiptInfo value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoReceiptInfo $midocoReceiptInfo
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoReceiptInfoType
     */
    public function setMidocoReceiptInfo(?\Pggns\MidocoApi\Documents\StructType\MidocoReceiptInfo $midocoReceiptInfo = null): self
    {
        $this->MidocoReceiptInfo = $midocoReceiptInfo;
        
        return $this;
    }
}
