<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

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
     * @var \Pggns\MidocoApi\Orderlists\StructType\DestinationAutoRemarkDTO|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\DestinationAutoRemarkDTO $MidocoDestinationAutoRemark = null;
    /**
     * Constructor method for DeleteDestinationAutoRemarkRequest
     * @uses DeleteDestinationAutoRemarkRequest::setMidocoDestinationAutoRemark()
     * @param \Pggns\MidocoApi\Orderlists\StructType\DestinationAutoRemarkDTO $midocoDestinationAutoRemark
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\DestinationAutoRemarkDTO $midocoDestinationAutoRemark = null)
    {
        $this
            ->setMidocoDestinationAutoRemark($midocoDestinationAutoRemark);
    }
    /**
     * Get MidocoDestinationAutoRemark value
     * @return \Pggns\MidocoApi\Orderlists\StructType\DestinationAutoRemarkDTO|null
     */
    public function getMidocoDestinationAutoRemark(): ?\Pggns\MidocoApi\Orderlists\StructType\DestinationAutoRemarkDTO
    {
        return $this->MidocoDestinationAutoRemark;
    }
    /**
     * Set MidocoDestinationAutoRemark value
     * @param \Pggns\MidocoApi\Orderlists\StructType\DestinationAutoRemarkDTO $midocoDestinationAutoRemark
     * @return \Pggns\MidocoApi\Orderlists\StructType\DeleteDestinationAutoRemarkRequest
     */
    public function setMidocoDestinationAutoRemark(?\Pggns\MidocoApi\Orderlists\StructType\DestinationAutoRemarkDTO $midocoDestinationAutoRemark = null): self
    {
        $this->MidocoDestinationAutoRemark = $midocoDestinationAutoRemark;
        
        return $this;
    }
}
