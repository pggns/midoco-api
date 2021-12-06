<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\System\StructType;

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
     * @var \Pggns\MidocoApi\System\StructType\MidocoInsurer|null
     */
    protected ?\Pggns\MidocoApi\System\StructType\MidocoInsurer $MidocoInsurer = null;
    /**
     * Constructor method for SaveInsurerResponse
     * @uses SaveInsurerResponse::setMidocoInsurer()
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
     * @return \Pggns\MidocoApi\System\StructType\SaveInsurerResponse
     */
    public function setMidocoInsurer(?\Pggns\MidocoApi\System\StructType\MidocoInsurer $midocoInsurer = null): self
    {
        $this->MidocoInsurer = $midocoInsurer;
        
        return $this;
    }
}
