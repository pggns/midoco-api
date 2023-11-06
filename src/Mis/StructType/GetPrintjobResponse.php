<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPrintjobResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetPrintjobResponse extends AbstractStructBase
{
    /**
     * The MidocoPrintjob
     * Meta information extracted from the WSDL
     * - ref: MidocoPrintjob
     * @var \Pggns\MidocoApi\Mis\StructType\PrintjobDTO|null
     */
    protected ?\Pggns\MidocoApi\Mis\StructType\PrintjobDTO $MidocoPrintjob = null;
    /**
     * Constructor method for GetPrintjobResponse
     * @uses GetPrintjobResponse::setMidocoPrintjob()
     * @param \Pggns\MidocoApi\Mis\StructType\PrintjobDTO $midocoPrintjob
     */
    public function __construct(?\Pggns\MidocoApi\Mis\StructType\PrintjobDTO $midocoPrintjob = null)
    {
        $this
            ->setMidocoPrintjob($midocoPrintjob);
    }
    /**
     * Get MidocoPrintjob value
     * @return \Pggns\MidocoApi\Mis\StructType\PrintjobDTO|null
     */
    public function getMidocoPrintjob(): ?\Pggns\MidocoApi\Mis\StructType\PrintjobDTO
    {
        return $this->MidocoPrintjob;
    }
    /**
     * Set MidocoPrintjob value
     * @param \Pggns\MidocoApi\Mis\StructType\PrintjobDTO $midocoPrintjob
     * @return \Pggns\MidocoApi\Mis\StructType\GetPrintjobResponse
     */
    public function setMidocoPrintjob(?\Pggns\MidocoApi\Mis\StructType\PrintjobDTO $midocoPrintjob = null): self
    {
        $this->MidocoPrintjob = $midocoPrintjob;
        
        return $this;
    }
}
