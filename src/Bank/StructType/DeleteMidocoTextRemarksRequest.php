<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteMidocoTextRemarksRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteMidocoTextRemarksRequest extends AbstractStructBase
{
    /**
     * The MidocoTextRemark
     * Meta information extracted from the WSDL
     * - ref: MidocoTextRemark
     * @var \Pggns\MidocoApi\Bank\StructType\MidocoTextRemark|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\MidocoTextRemark $MidocoTextRemark = null;
    /**
     * Constructor method for DeleteMidocoTextRemarksRequest
     * @uses DeleteMidocoTextRemarksRequest::setMidocoTextRemark()
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoTextRemark $midocoTextRemark
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\MidocoTextRemark $midocoTextRemark = null)
    {
        $this
            ->setMidocoTextRemark($midocoTextRemark);
    }
    /**
     * Get MidocoTextRemark value
     * @return \Pggns\MidocoApi\Bank\StructType\MidocoTextRemark|null
     */
    public function getMidocoTextRemark(): ?\Pggns\MidocoApi\Bank\StructType\MidocoTextRemark
    {
        return $this->MidocoTextRemark;
    }
    /**
     * Set MidocoTextRemark value
     * @param \Pggns\MidocoApi\Bank\StructType\MidocoTextRemark $midocoTextRemark
     * @return \Pggns\MidocoApi\Bank\StructType\DeleteMidocoTextRemarksRequest
     */
    public function setMidocoTextRemark(?\Pggns\MidocoApi\Bank\StructType\MidocoTextRemark $midocoTextRemark = null): self
    {
        $this->MidocoTextRemark = $midocoTextRemark;
        
        return $this;
    }
}
