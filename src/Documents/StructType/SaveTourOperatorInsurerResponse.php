<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveTourOperatorInsurerResponse StructType
 * @subpackage Structs
 */
class SaveTourOperatorInsurerResponse extends AbstractStructBase
{
    /**
     * The MidocoTourOperatorInsurer
     * Meta information extracted from the WSDL
     * - ref: MidocoTourOperatorInsurer
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoTourOperatorInsurer|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoTourOperatorInsurer $MidocoTourOperatorInsurer = null;
    /**
     * Constructor method for SaveTourOperatorInsurerResponse
     * @uses SaveTourOperatorInsurerResponse::setMidocoTourOperatorInsurer()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoTourOperatorInsurer $midocoTourOperatorInsurer
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\MidocoTourOperatorInsurer $midocoTourOperatorInsurer = null)
    {
        $this
            ->setMidocoTourOperatorInsurer($midocoTourOperatorInsurer);
    }
    /**
     * Get MidocoTourOperatorInsurer value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoTourOperatorInsurer|null
     */
    public function getMidocoTourOperatorInsurer(): ?\Pggns\MidocoApi\Documents\StructType\MidocoTourOperatorInsurer
    {
        return $this->MidocoTourOperatorInsurer;
    }
    /**
     * Set MidocoTourOperatorInsurer value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoTourOperatorInsurer $midocoTourOperatorInsurer
     * @return \Pggns\MidocoApi\Documents\StructType\SaveTourOperatorInsurerResponse
     */
    public function setMidocoTourOperatorInsurer(?\Pggns\MidocoApi\Documents\StructType\MidocoTourOperatorInsurer $midocoTourOperatorInsurer = null): self
    {
        $this->MidocoTourOperatorInsurer = $midocoTourOperatorInsurer;
        
        return $this;
    }
}
