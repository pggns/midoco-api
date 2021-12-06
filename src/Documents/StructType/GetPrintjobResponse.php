<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPrintjobResponse StructType
 * @subpackage Structs
 */
class GetPrintjobResponse extends AbstractStructBase
{
    /**
     * The MidocoPrintjob
     * Meta information extracted from the WSDL
     * - ref: MidocoPrintjob
     * @var \Pggns\MidocoApi\Documents\StructType\PrintjobDTO|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\PrintjobDTO $MidocoPrintjob = null;
    /**
     * Constructor method for GetPrintjobResponse
     * @uses GetPrintjobResponse::setMidocoPrintjob()
     * @param \Pggns\MidocoApi\Documents\StructType\PrintjobDTO $midocoPrintjob
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\PrintjobDTO $midocoPrintjob = null)
    {
        $this
            ->setMidocoPrintjob($midocoPrintjob);
    }
    /**
     * Get MidocoPrintjob value
     * @return \Pggns\MidocoApi\Documents\StructType\PrintjobDTO|null
     */
    public function getMidocoPrintjob(): ?\Pggns\MidocoApi\Documents\StructType\PrintjobDTO
    {
        return $this->MidocoPrintjob;
    }
    /**
     * Set MidocoPrintjob value
     * @param \Pggns\MidocoApi\Documents\StructType\PrintjobDTO $midocoPrintjob
     * @return \Pggns\MidocoApi\Documents\StructType\GetPrintjobResponse
     */
    public function setMidocoPrintjob(?\Pggns\MidocoApi\Documents\StructType\PrintjobDTO $midocoPrintjob = null): self
    {
        $this->MidocoPrintjob = $midocoPrintjob;
        
        return $this;
    }
}
