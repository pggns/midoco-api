<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveDestinationAutoRemarkRequest StructType
 * @subpackage Structs
 */
class SaveDestinationAutoRemarkRequest extends AbstractStructBase
{
    /**
     * The MidocoDestinationAutoRemark
     * Meta information extracted from the WSDL
     * - ref: MidocoDestinationAutoRemark
     * @var \Pggns\MidocoApi\Documents\StructType\DestinationAutoRemarkDTO|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\DestinationAutoRemarkDTO $MidocoDestinationAutoRemark = null;
    /**
     * Constructor method for SaveDestinationAutoRemarkRequest
     * @uses SaveDestinationAutoRemarkRequest::setMidocoDestinationAutoRemark()
     * @param \Pggns\MidocoApi\Documents\StructType\DestinationAutoRemarkDTO $midocoDestinationAutoRemark
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\DestinationAutoRemarkDTO $midocoDestinationAutoRemark = null)
    {
        $this
            ->setMidocoDestinationAutoRemark($midocoDestinationAutoRemark);
    }
    /**
     * Get MidocoDestinationAutoRemark value
     * @return \Pggns\MidocoApi\Documents\StructType\DestinationAutoRemarkDTO|null
     */
    public function getMidocoDestinationAutoRemark(): ?\Pggns\MidocoApi\Documents\StructType\DestinationAutoRemarkDTO
    {
        return $this->MidocoDestinationAutoRemark;
    }
    /**
     * Set MidocoDestinationAutoRemark value
     * @param \Pggns\MidocoApi\Documents\StructType\DestinationAutoRemarkDTO $midocoDestinationAutoRemark
     * @return \Pggns\MidocoApi\Documents\StructType\SaveDestinationAutoRemarkRequest
     */
    public function setMidocoDestinationAutoRemark(?\Pggns\MidocoApi\Documents\StructType\DestinationAutoRemarkDTO $midocoDestinationAutoRemark = null): self
    {
        $this->MidocoDestinationAutoRemark = $midocoDestinationAutoRemark;
        
        return $this;
    }
}
