<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

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
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoCrsSystem|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoCrsSystem $MidocoCrsSystem = null;
    /**
     * Constructor method for DeleteMidocoCrsSystemRequest
     * @uses DeleteMidocoCrsSystemRequest::setMidocoCrsSystem()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoCrsSystem $midocoCrsSystem
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\MidocoCrsSystem $midocoCrsSystem = null)
    {
        $this
            ->setMidocoCrsSystem($midocoCrsSystem);
    }
    /**
     * Get MidocoCrsSystem value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoCrsSystem|null
     */
    public function getMidocoCrsSystem(): ?\Pggns\MidocoApi\Documents\StructType\MidocoCrsSystem
    {
        return $this->MidocoCrsSystem;
    }
    /**
     * Set MidocoCrsSystem value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoCrsSystem $midocoCrsSystem
     * @return \Pggns\MidocoApi\Documents\StructType\DeleteMidocoCrsSystemRequest
     */
    public function setMidocoCrsSystem(?\Pggns\MidocoApi\Documents\StructType\MidocoCrsSystem $midocoCrsSystem = null): self
    {
        $this->MidocoCrsSystem = $midocoCrsSystem;
        
        return $this;
    }
}
