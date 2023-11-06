<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveTourOperatorInsurerRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveTourOperatorInsurerRequest extends AbstractStructBase
{
    /**
     * The MidocoTourOperatorInsurer
     * Meta information extracted from the WSDL
     * - ref: MidocoTourOperatorInsurer
     * @var \Pggns\MidocoApi\MidocoSystem\StructType\MidocoTourOperatorInsurer|null
     */
    protected ?\Pggns\MidocoApi\MidocoSystem\StructType\MidocoTourOperatorInsurer $MidocoTourOperatorInsurer = null;
    /**
     * Constructor method for SaveTourOperatorInsurerRequest
     * @uses SaveTourOperatorInsurerRequest::setMidocoTourOperatorInsurer()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\MidocoTourOperatorInsurer $midocoTourOperatorInsurer
     */
    public function __construct(?\Pggns\MidocoApi\MidocoSystem\StructType\MidocoTourOperatorInsurer $midocoTourOperatorInsurer = null)
    {
        $this
            ->setMidocoTourOperatorInsurer($midocoTourOperatorInsurer);
    }
    /**
     * Get MidocoTourOperatorInsurer value
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\MidocoTourOperatorInsurer|null
     */
    public function getMidocoTourOperatorInsurer(): ?\Pggns\MidocoApi\MidocoSystem\StructType\MidocoTourOperatorInsurer
    {
        return $this->MidocoTourOperatorInsurer;
    }
    /**
     * Set MidocoTourOperatorInsurer value
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\MidocoTourOperatorInsurer $midocoTourOperatorInsurer
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\SaveTourOperatorInsurerRequest
     */
    public function setMidocoTourOperatorInsurer(?\Pggns\MidocoApi\MidocoSystem\StructType\MidocoTourOperatorInsurer $midocoTourOperatorInsurer = null): self
    {
        $this->MidocoTourOperatorInsurer = $midocoTourOperatorInsurer;
        
        return $this;
    }
}
