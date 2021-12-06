<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\System\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveInsurerRequest StructType
 * @subpackage Structs
 */
class SaveInsurerRequest extends AbstractStructBase
{
    /**
     * The MidocoInsurer
     * Meta information extracted from the WSDL
     * - ref: MidocoInsurer
     * @var \Pggns\MidocoApi\Api\System\StructType\MidocoInsurer|null
     */
    protected ?\Pggns\MidocoApi\Api\System\StructType\MidocoInsurer $MidocoInsurer = null;
    /**
     * Constructor method for SaveInsurerRequest
     * @uses SaveInsurerRequest::setMidocoInsurer()
     * @param \Pggns\MidocoApi\Api\System\StructType\MidocoInsurer $midocoInsurer
     */
    public function __construct(?\Pggns\MidocoApi\Api\System\StructType\MidocoInsurer $midocoInsurer = null)
    {
        $this
            ->setMidocoInsurer($midocoInsurer);
    }
    /**
     * Get MidocoInsurer value
     * @return \Pggns\MidocoApi\Api\System\StructType\MidocoInsurer|null
     */
    public function getMidocoInsurer(): ?\Pggns\MidocoApi\Api\System\StructType\MidocoInsurer
    {
        return $this->MidocoInsurer;
    }
    /**
     * Set MidocoInsurer value
     * @param \Pggns\MidocoApi\Api\System\StructType\MidocoInsurer $midocoInsurer
     * @return \Pggns\MidocoApi\Api\System\StructType\SaveInsurerRequest
     */
    public function setMidocoInsurer(?\Pggns\MidocoApi\Api\System\StructType\MidocoInsurer $midocoInsurer = null): self
    {
        $this->MidocoInsurer = $midocoInsurer;
        
        return $this;
    }
}
