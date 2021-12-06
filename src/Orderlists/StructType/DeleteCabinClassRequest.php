<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteCabinClassRequest StructType
 * @subpackage Structs
 */
class DeleteCabinClassRequest extends AbstractStructBase
{
    /**
     * The MidocoCabinClass
     * Meta information extracted from the WSDL
     * - ref: MidocoCabinClass
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoCabinClass|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoCabinClass $MidocoCabinClass = null;
    /**
     * Constructor method for DeleteCabinClassRequest
     * @uses DeleteCabinClassRequest::setMidocoCabinClass()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoCabinClass $midocoCabinClass
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoCabinClass $midocoCabinClass = null)
    {
        $this
            ->setMidocoCabinClass($midocoCabinClass);
    }
    /**
     * Get MidocoCabinClass value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoCabinClass|null
     */
    public function getMidocoCabinClass(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoCabinClass
    {
        return $this->MidocoCabinClass;
    }
    /**
     * Set MidocoCabinClass value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoCabinClass $midocoCabinClass
     * @return \Pggns\MidocoApi\Orderlists\StructType\DeleteCabinClassRequest
     */
    public function setMidocoCabinClass(?\Pggns\MidocoApi\Orderlists\StructType\MidocoCabinClass $midocoCabinClass = null): self
    {
        $this->MidocoCabinClass = $midocoCabinClass;
        
        return $this;
    }
}
