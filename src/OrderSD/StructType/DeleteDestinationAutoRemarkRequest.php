<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteDestinationAutoRemarkRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteDestinationAutoRemarkRequest extends AbstractStructBase
{
    /**
     * The MidocoDestinationAutoRemark
     * Meta information extracted from the WSDL
     * - ref: MidocoDestinationAutoRemark
     * @var \Pggns\MidocoApi\OrderSD\StructType\DestinationAutoRemarkDTO|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\DestinationAutoRemarkDTO $MidocoDestinationAutoRemark = null;
    /**
     * Constructor method for DeleteDestinationAutoRemarkRequest
     * @uses DeleteDestinationAutoRemarkRequest::setMidocoDestinationAutoRemark()
     * @param \Pggns\MidocoApi\OrderSD\StructType\DestinationAutoRemarkDTO $midocoDestinationAutoRemark
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\DestinationAutoRemarkDTO $midocoDestinationAutoRemark = null)
    {
        $this
            ->setMidocoDestinationAutoRemark($midocoDestinationAutoRemark);
    }
    /**
     * Get MidocoDestinationAutoRemark value
     * @return \Pggns\MidocoApi\OrderSD\StructType\DestinationAutoRemarkDTO|null
     */
    public function getMidocoDestinationAutoRemark(): ?\Pggns\MidocoApi\OrderSD\StructType\DestinationAutoRemarkDTO
    {
        return $this->MidocoDestinationAutoRemark;
    }
    /**
     * Set MidocoDestinationAutoRemark value
     * @param \Pggns\MidocoApi\OrderSD\StructType\DestinationAutoRemarkDTO $midocoDestinationAutoRemark
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteDestinationAutoRemarkRequest
     */
    public function setMidocoDestinationAutoRemark(?\Pggns\MidocoApi\OrderSD\StructType\DestinationAutoRemarkDTO $midocoDestinationAutoRemark = null): self
    {
        $this->MidocoDestinationAutoRemark = $midocoDestinationAutoRemark;
        
        return $this;
    }
}
