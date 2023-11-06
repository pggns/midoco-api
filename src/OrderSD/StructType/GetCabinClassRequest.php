<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCabinClassRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCabinClassRequest extends AbstractStructBase
{
    /**
     * The MidocoCabinClass
     * Meta information extracted from the WSDL
     * - ref: MidocoCabinClass
     * @var \Pggns\MidocoApi\OrderSD\StructType\MidocoCabinClass|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\MidocoCabinClass $MidocoCabinClass = null;
    /**
     * Constructor method for GetCabinClassRequest
     * @uses GetCabinClassRequest::setMidocoCabinClass()
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoCabinClass $midocoCabinClass
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\MidocoCabinClass $midocoCabinClass = null)
    {
        $this
            ->setMidocoCabinClass($midocoCabinClass);
    }
    /**
     * Get MidocoCabinClass value
     * @return \Pggns\MidocoApi\OrderSD\StructType\MidocoCabinClass|null
     */
    public function getMidocoCabinClass(): ?\Pggns\MidocoApi\OrderSD\StructType\MidocoCabinClass
    {
        return $this->MidocoCabinClass;
    }
    /**
     * Set MidocoCabinClass value
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoCabinClass $midocoCabinClass
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetCabinClassRequest
     */
    public function setMidocoCabinClass(?\Pggns\MidocoApi\OrderSD\StructType\MidocoCabinClass $midocoCabinClass = null): self
    {
        $this->MidocoCabinClass = $midocoCabinClass;
        
        return $this;
    }
}
