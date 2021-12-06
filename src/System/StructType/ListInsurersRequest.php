<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\System\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListInsurersRequest StructType
 * @subpackage Structs
 */
class ListInsurersRequest extends AbstractStructBase
{
    /**
     * The MidocoInsurer
     * Meta information extracted from the WSDL
     * - ref: MidocoInsurer
     * @var \Pggns\MidocoApi\System\StructType\MidocoInsurer|null
     */
    protected ?\Pggns\MidocoApi\System\StructType\MidocoInsurer $MidocoInsurer = null;
    /**
     * Constructor method for ListInsurersRequest
     * @uses ListInsurersRequest::setMidocoInsurer()
     * @param \Pggns\MidocoApi\System\StructType\MidocoInsurer $midocoInsurer
     */
    public function __construct(?\Pggns\MidocoApi\System\StructType\MidocoInsurer $midocoInsurer = null)
    {
        $this
            ->setMidocoInsurer($midocoInsurer);
    }
    /**
     * Get MidocoInsurer value
     * @return \Pggns\MidocoApi\System\StructType\MidocoInsurer|null
     */
    public function getMidocoInsurer(): ?\Pggns\MidocoApi\System\StructType\MidocoInsurer
    {
        return $this->MidocoInsurer;
    }
    /**
     * Set MidocoInsurer value
     * @param \Pggns\MidocoApi\System\StructType\MidocoInsurer $midocoInsurer
     * @return \Pggns\MidocoApi\System\StructType\ListInsurersRequest
     */
    public function setMidocoInsurer(?\Pggns\MidocoApi\System\StructType\MidocoInsurer $midocoInsurer = null): self
    {
        $this->MidocoInsurer = $midocoInsurer;
        
        return $this;
    }
}
