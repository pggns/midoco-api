<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListInsurersRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ListInsurersRequest extends AbstractStructBase
{
    /**
     * The MidocoInsurer
     * Meta information extracted from the WSDL
     * - ref: MidocoInsurer
     * @var \Pggns\MidocoApi\MidocoSystem\StructType\MidocoInsurer|null
     */
    protected ?\Pggns\MidocoApi\MidocoSystem\StructType\MidocoInsurer $MidocoInsurer = null;
    /**
     * Constructor method for ListInsurersRequest
     * @uses ListInsurersRequest::setMidocoInsurer()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\MidocoInsurer $midocoInsurer
     */
    public function __construct(?\Pggns\MidocoApi\MidocoSystem\StructType\MidocoInsurer $midocoInsurer = null)
    {
        $this
            ->setMidocoInsurer($midocoInsurer);
    }
    /**
     * Get MidocoInsurer value
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\MidocoInsurer|null
     */
    public function getMidocoInsurer(): ?\Pggns\MidocoApi\MidocoSystem\StructType\MidocoInsurer
    {
        return $this->MidocoInsurer;
    }
    /**
     * Set MidocoInsurer value
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\MidocoInsurer $midocoInsurer
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\ListInsurersRequest
     */
    public function setMidocoInsurer(?\Pggns\MidocoApi\MidocoSystem\StructType\MidocoInsurer $midocoInsurer = null): self
    {
        $this->MidocoInsurer = $midocoInsurer;
        
        return $this;
    }
}
