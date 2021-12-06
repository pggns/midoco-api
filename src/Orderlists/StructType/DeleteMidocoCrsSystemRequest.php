<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteMidocoCrsSystemRequest StructType
 * @subpackage Structs
 */
class DeleteMidocoCrsSystemRequest extends AbstractStructBase
{
    /**
     * The MidocoCrsSystem
     * Meta information extracted from the WSDL
     * - ref: MidocoCrsSystem
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoCrsSystem|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoCrsSystem $MidocoCrsSystem = null;
    /**
     * Constructor method for DeleteMidocoCrsSystemRequest
     * @uses DeleteMidocoCrsSystemRequest::setMidocoCrsSystem()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoCrsSystem $midocoCrsSystem
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoCrsSystem $midocoCrsSystem = null)
    {
        $this
            ->setMidocoCrsSystem($midocoCrsSystem);
    }
    /**
     * Get MidocoCrsSystem value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoCrsSystem|null
     */
    public function getMidocoCrsSystem(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoCrsSystem
    {
        return $this->MidocoCrsSystem;
    }
    /**
     * Set MidocoCrsSystem value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoCrsSystem $midocoCrsSystem
     * @return \Pggns\MidocoApi\Orderlists\StructType\DeleteMidocoCrsSystemRequest
     */
    public function setMidocoCrsSystem(?\Pggns\MidocoApi\Orderlists\StructType\MidocoCrsSystem $midocoCrsSystem = null): self
    {
        $this->MidocoCrsSystem = $midocoCrsSystem;
        
        return $this;
    }
}
