<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteMidocoTextRemarksRequest StructType
 * @subpackage Structs
 */
class DeleteMidocoTextRemarksRequest extends AbstractStructBase
{
    /**
     * The MidocoTextRemark
     * Meta information extracted from the WSDL
     * - ref: MidocoTextRemark
     * @var \Pggns\MidocoApi\OrderSD\StructType\MidocoTextRemark|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\MidocoTextRemark $MidocoTextRemark = null;
    /**
     * Constructor method for DeleteMidocoTextRemarksRequest
     * @uses DeleteMidocoTextRemarksRequest::setMidocoTextRemark()
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoTextRemark $midocoTextRemark
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\MidocoTextRemark $midocoTextRemark = null)
    {
        $this
            ->setMidocoTextRemark($midocoTextRemark);
    }
    /**
     * Get MidocoTextRemark value
     * @return \Pggns\MidocoApi\OrderSD\StructType\MidocoTextRemark|null
     */
    public function getMidocoTextRemark(): ?\Pggns\MidocoApi\OrderSD\StructType\MidocoTextRemark
    {
        return $this->MidocoTextRemark;
    }
    /**
     * Set MidocoTextRemark value
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoTextRemark $midocoTextRemark
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteMidocoTextRemarksRequest
     */
    public function setMidocoTextRemark(?\Pggns\MidocoApi\OrderSD\StructType\MidocoTextRemark $midocoTextRemark = null): self
    {
        $this->MidocoTextRemark = $midocoTextRemark;
        
        return $this;
    }
}
