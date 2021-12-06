<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteContactMediaDescriptionResponse StructType
 * @subpackage Structs
 */
class DeleteContactMediaDescriptionResponse extends AbstractStructBase
{
    /**
     * The MidocoContactMediaDescription
     * Meta information extracted from the WSDL
     * - ref: MidocoContactMediaDescription
     * @var \Pggns\MidocoApi\Orderlists\StructType\MediaDescriptionDTO|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MediaDescriptionDTO $MidocoContactMediaDescription = null;
    /**
     * Constructor method for DeleteContactMediaDescriptionResponse
     * @uses DeleteContactMediaDescriptionResponse::setMidocoContactMediaDescription()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MediaDescriptionDTO $midocoContactMediaDescription
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MediaDescriptionDTO $midocoContactMediaDescription = null)
    {
        $this
            ->setMidocoContactMediaDescription($midocoContactMediaDescription);
    }
    /**
     * Get MidocoContactMediaDescription value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MediaDescriptionDTO|null
     */
    public function getMidocoContactMediaDescription(): ?\Pggns\MidocoApi\Orderlists\StructType\MediaDescriptionDTO
    {
        return $this->MidocoContactMediaDescription;
    }
    /**
     * Set MidocoContactMediaDescription value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MediaDescriptionDTO $midocoContactMediaDescription
     * @return \Pggns\MidocoApi\Orderlists\StructType\DeleteContactMediaDescriptionResponse
     */
    public function setMidocoContactMediaDescription(?\Pggns\MidocoApi\Orderlists\StructType\MediaDescriptionDTO $midocoContactMediaDescription = null): self
    {
        $this->MidocoContactMediaDescription = $midocoContactMediaDescription;
        
        return $this;
    }
}
