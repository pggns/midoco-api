<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\System\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveTourOperatorInsurerRequest StructType
 * @subpackage Structs
 */
class SaveTourOperatorInsurerRequest extends AbstractStructBase
{
    /**
     * The MidocoTourOperatorInsurer
     * Meta information extracted from the WSDL
     * - ref: MidocoTourOperatorInsurer
     * @var \Pggns\MidocoApi\System\StructType\MidocoTourOperatorInsurer|null
     */
    protected ?\Pggns\MidocoApi\System\StructType\MidocoTourOperatorInsurer $MidocoTourOperatorInsurer = null;
    /**
     * Constructor method for SaveTourOperatorInsurerRequest
     * @uses SaveTourOperatorInsurerRequest::setMidocoTourOperatorInsurer()
     * @param \Pggns\MidocoApi\System\StructType\MidocoTourOperatorInsurer $midocoTourOperatorInsurer
     */
    public function __construct(?\Pggns\MidocoApi\System\StructType\MidocoTourOperatorInsurer $midocoTourOperatorInsurer = null)
    {
        $this
            ->setMidocoTourOperatorInsurer($midocoTourOperatorInsurer);
    }
    /**
     * Get MidocoTourOperatorInsurer value
     * @return \Pggns\MidocoApi\System\StructType\MidocoTourOperatorInsurer|null
     */
    public function getMidocoTourOperatorInsurer(): ?\Pggns\MidocoApi\System\StructType\MidocoTourOperatorInsurer
    {
        return $this->MidocoTourOperatorInsurer;
    }
    /**
     * Set MidocoTourOperatorInsurer value
     * @param \Pggns\MidocoApi\System\StructType\MidocoTourOperatorInsurer $midocoTourOperatorInsurer
     * @return \Pggns\MidocoApi\System\StructType\SaveTourOperatorInsurerRequest
     */
    public function setMidocoTourOperatorInsurer(?\Pggns\MidocoApi\System\StructType\MidocoTourOperatorInsurer $midocoTourOperatorInsurer = null): self
    {
        $this->MidocoTourOperatorInsurer = $midocoTourOperatorInsurer;
        
        return $this;
    }
}
