<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCabinClassResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCabinClassResponse extends AbstractStructBase
{
    /**
     * The MidocoCabinClass
     * Meta information extracted from the WSDL
     * - ref: MidocoCabinClass
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoCabinClass|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoCabinClass $MidocoCabinClass = null;
    /**
     * Constructor method for GetCabinClassResponse
     * @uses GetCabinClassResponse::setMidocoCabinClass()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoCabinClass $midocoCabinClass
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\MidocoCabinClass $midocoCabinClass = null)
    {
        $this
            ->setMidocoCabinClass($midocoCabinClass);
    }
    /**
     * Get MidocoCabinClass value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoCabinClass|null
     */
    public function getMidocoCabinClass(): ?\Pggns\MidocoApi\Documents\StructType\MidocoCabinClass
    {
        return $this->MidocoCabinClass;
    }
    /**
     * Set MidocoCabinClass value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoCabinClass $midocoCabinClass
     * @return \Pggns\MidocoApi\Documents\StructType\GetCabinClassResponse
     */
    public function setMidocoCabinClass(?\Pggns\MidocoApi\Documents\StructType\MidocoCabinClass $midocoCabinClass = null): self
    {
        $this->MidocoCabinClass = $midocoCabinClass;
        
        return $this;
    }
}
