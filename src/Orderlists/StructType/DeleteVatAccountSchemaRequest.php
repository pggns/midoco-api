<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteVatAccountSchemaRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteVatAccountSchemaRequest extends AbstractStructBase
{
    /**
     * The MidocoVatAccountSchema
     * Meta information extracted from the WSDL
     * - ref: MidocoVatAccountSchema
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoVatAccountSchema|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoVatAccountSchema $MidocoVatAccountSchema = null;
    /**
     * Constructor method for DeleteVatAccountSchemaRequest
     * @uses DeleteVatAccountSchemaRequest::setMidocoVatAccountSchema()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoVatAccountSchema $midocoVatAccountSchema
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoVatAccountSchema $midocoVatAccountSchema = null)
    {
        $this
            ->setMidocoVatAccountSchema($midocoVatAccountSchema);
    }
    /**
     * Get MidocoVatAccountSchema value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoVatAccountSchema|null
     */
    public function getMidocoVatAccountSchema(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoVatAccountSchema
    {
        return $this->MidocoVatAccountSchema;
    }
    /**
     * Set MidocoVatAccountSchema value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoVatAccountSchema $midocoVatAccountSchema
     * @return \Pggns\MidocoApi\Orderlists\StructType\DeleteVatAccountSchemaRequest
     */
    public function setMidocoVatAccountSchema(?\Pggns\MidocoApi\Orderlists\StructType\MidocoVatAccountSchema $midocoVatAccountSchema = null): self
    {
        $this->MidocoVatAccountSchema = $midocoVatAccountSchema;
        
        return $this;
    }
}
