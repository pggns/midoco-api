<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\OrderSD\StructType;

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
     * @var \Pggns\MidocoApi\Api\OrderSD\StructType\PrintjobDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\OrderSD\StructType\PrintjobDTO $MidocoPrintjob = null;
    /**
     * Constructor method for GetPrintjobResponse
     * @uses GetPrintjobResponse::setMidocoPrintjob()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\PrintjobDTO $midocoPrintjob
     */
    public function __construct(?\Pggns\MidocoApi\Api\OrderSD\StructType\PrintjobDTO $midocoPrintjob = null)
    {
        $this
            ->setMidocoPrintjob($midocoPrintjob);
    }
    /**
     * Get MidocoPrintjob value
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\PrintjobDTO|null
     */
    public function getMidocoPrintjob(): ?\Pggns\MidocoApi\Api\OrderSD\StructType\PrintjobDTO
    {
        return $this->MidocoPrintjob;
    }
    /**
     * Set MidocoPrintjob value
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\PrintjobDTO $midocoPrintjob
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetPrintjobResponse
     */
    public function setMidocoPrintjob(?\Pggns\MidocoApi\Api\OrderSD\StructType\PrintjobDTO $midocoPrintjob = null): self
    {
        $this->MidocoPrintjob = $midocoPrintjob;
        
        return $this;
    }
}
