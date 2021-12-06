<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveInsurerResponse StructType
 * @subpackage Structs
 */
class SaveInsurerResponse extends AbstractStructBase
{
    /**
     * The MidocoInsurer
     * Meta information extracted from the WSDL
     * - ref: MidocoInsurer
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoInsurer|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoInsurer $MidocoInsurer = null;
    /**
     * Constructor method for SaveInsurerResponse
     * @uses SaveInsurerResponse::setMidocoInsurer()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoInsurer $midocoInsurer
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\MidocoInsurer $midocoInsurer = null)
    {
        $this
            ->setMidocoInsurer($midocoInsurer);
    }
    /**
     * Get MidocoInsurer value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoInsurer|null
     */
    public function getMidocoInsurer(): ?\Pggns\MidocoApi\Documents\StructType\MidocoInsurer
    {
        return $this->MidocoInsurer;
    }
    /**
     * Set MidocoInsurer value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoInsurer $midocoInsurer
     * @return \Pggns\MidocoApi\Documents\StructType\SaveInsurerResponse
     */
    public function setMidocoInsurer(?\Pggns\MidocoApi\Documents\StructType\MidocoInsurer $midocoInsurer = null): self
    {
        $this->MidocoInsurer = $midocoInsurer;
        
        return $this;
    }
}
