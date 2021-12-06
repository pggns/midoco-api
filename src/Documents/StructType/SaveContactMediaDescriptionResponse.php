<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveContactMediaDescriptionResponse StructType
 * @subpackage Structs
 */
class SaveContactMediaDescriptionResponse extends AbstractStructBase
{
    /**
     * The MidocoContactMediaDescription
     * Meta information extracted from the WSDL
     * - ref: MidocoContactMediaDescription
     * @var \Pggns\MidocoApi\Documents\StructType\MediaDescriptionDTO|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MediaDescriptionDTO $MidocoContactMediaDescription = null;
    /**
     * Constructor method for SaveContactMediaDescriptionResponse
     * @uses SaveContactMediaDescriptionResponse::setMidocoContactMediaDescription()
     * @param \Pggns\MidocoApi\Documents\StructType\MediaDescriptionDTO $midocoContactMediaDescription
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\MediaDescriptionDTO $midocoContactMediaDescription = null)
    {
        $this
            ->setMidocoContactMediaDescription($midocoContactMediaDescription);
    }
    /**
     * Get MidocoContactMediaDescription value
     * @return \Pggns\MidocoApi\Documents\StructType\MediaDescriptionDTO|null
     */
    public function getMidocoContactMediaDescription(): ?\Pggns\MidocoApi\Documents\StructType\MediaDescriptionDTO
    {
        return $this->MidocoContactMediaDescription;
    }
    /**
     * Set MidocoContactMediaDescription value
     * @param \Pggns\MidocoApi\Documents\StructType\MediaDescriptionDTO $midocoContactMediaDescription
     * @return \Pggns\MidocoApi\Documents\StructType\SaveContactMediaDescriptionResponse
     */
    public function setMidocoContactMediaDescription(?\Pggns\MidocoApi\Documents\StructType\MediaDescriptionDTO $midocoContactMediaDescription = null): self
    {
        $this->MidocoContactMediaDescription = $midocoContactMediaDescription;
        
        return $this;
    }
}
