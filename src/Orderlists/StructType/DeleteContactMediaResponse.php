<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteContactMediaResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteContactMediaResponse extends AbstractStructBase
{
    /**
     * The MidocoContactMedia
     * Meta information extracted from the WSDL
     * - ref: MidocoContactMedia
     * @var \Pggns\MidocoApi\Orderlists\StructType\ContactMediaDTO|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\ContactMediaDTO $MidocoContactMedia = null;
    /**
     * Constructor method for DeleteContactMediaResponse
     * @uses DeleteContactMediaResponse::setMidocoContactMedia()
     * @param \Pggns\MidocoApi\Orderlists\StructType\ContactMediaDTO $midocoContactMedia
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\ContactMediaDTO $midocoContactMedia = null)
    {
        $this
            ->setMidocoContactMedia($midocoContactMedia);
    }
    /**
     * Get MidocoContactMedia value
     * @return \Pggns\MidocoApi\Orderlists\StructType\ContactMediaDTO|null
     */
    public function getMidocoContactMedia(): ?\Pggns\MidocoApi\Orderlists\StructType\ContactMediaDTO
    {
        return $this->MidocoContactMedia;
    }
    /**
     * Set MidocoContactMedia value
     * @param \Pggns\MidocoApi\Orderlists\StructType\ContactMediaDTO $midocoContactMedia
     * @return \Pggns\MidocoApi\Orderlists\StructType\DeleteContactMediaResponse
     */
    public function setMidocoContactMedia(?\Pggns\MidocoApi\Orderlists\StructType\ContactMediaDTO $midocoContactMedia = null): self
    {
        $this->MidocoContactMedia = $midocoContactMedia;
        
        return $this;
    }
}
