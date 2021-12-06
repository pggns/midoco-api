<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\System\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteDocumentNatureRetentionRequest StructType
 * @subpackage Structs
 */
class DeleteDocumentNatureRetentionRequest extends AbstractStructBase
{
    /**
     * The MidocoDocumentNatureRetention
     * Meta information extracted from the WSDL
     * - ref: MidocoDocumentNatureRetention
     * @var \Pggns\MidocoApi\System\StructType\MidocoDocumentNatureRetentionType|null
     */
    protected ?\Pggns\MidocoApi\System\StructType\MidocoDocumentNatureRetentionType $MidocoDocumentNatureRetention = null;
    /**
     * Constructor method for DeleteDocumentNatureRetentionRequest
     * @uses DeleteDocumentNatureRetentionRequest::setMidocoDocumentNatureRetention()
     * @param \Pggns\MidocoApi\System\StructType\MidocoDocumentNatureRetentionType $midocoDocumentNatureRetention
     */
    public function __construct(?\Pggns\MidocoApi\System\StructType\MidocoDocumentNatureRetentionType $midocoDocumentNatureRetention = null)
    {
        $this
            ->setMidocoDocumentNatureRetention($midocoDocumentNatureRetention);
    }
    /**
     * Get MidocoDocumentNatureRetention value
     * @return \Pggns\MidocoApi\System\StructType\MidocoDocumentNatureRetentionType|null
     */
    public function getMidocoDocumentNatureRetention(): ?\Pggns\MidocoApi\System\StructType\MidocoDocumentNatureRetentionType
    {
        return $this->MidocoDocumentNatureRetention;
    }
    /**
     * Set MidocoDocumentNatureRetention value
     * @param \Pggns\MidocoApi\System\StructType\MidocoDocumentNatureRetentionType $midocoDocumentNatureRetention
     * @return \Pggns\MidocoApi\System\StructType\DeleteDocumentNatureRetentionRequest
     */
    public function setMidocoDocumentNatureRetention(?\Pggns\MidocoApi\System\StructType\MidocoDocumentNatureRetentionType $midocoDocumentNatureRetention = null): self
    {
        $this->MidocoDocumentNatureRetention = $midocoDocumentNatureRetention;
        
        return $this;
    }
}
