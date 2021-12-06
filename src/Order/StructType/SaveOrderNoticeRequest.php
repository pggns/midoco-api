<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveOrderNoticeRequest StructType
 * @subpackage Structs
 */
class SaveOrderNoticeRequest extends AbstractStructBase
{
    /**
     * The MidocoOrderNotice
     * Meta information extracted from the WSDL
     * - ref: MidocoOrderNotice
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderNotice|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoOrderNotice $MidocoOrderNotice = null;
    /**
     * Constructor method for SaveOrderNoticeRequest
     * @uses SaveOrderNoticeRequest::setMidocoOrderNotice()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderNotice $midocoOrderNotice
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MidocoOrderNotice $midocoOrderNotice = null)
    {
        $this
            ->setMidocoOrderNotice($midocoOrderNotice);
    }
    /**
     * Get MidocoOrderNotice value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderNotice|null
     */
    public function getMidocoOrderNotice(): ?\Pggns\MidocoApi\Api\Order\StructType\MidocoOrderNotice
    {
        return $this->MidocoOrderNotice;
    }
    /**
     * Set MidocoOrderNotice value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderNotice $midocoOrderNotice
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveOrderNoticeRequest
     */
    public function setMidocoOrderNotice(?\Pggns\MidocoApi\Api\Order\StructType\MidocoOrderNotice $midocoOrderNotice = null): self
    {
        $this->MidocoOrderNotice = $midocoOrderNotice;
        
        return $this;
    }
}
