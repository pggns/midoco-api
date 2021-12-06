<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveVatAccountSchemaRequest StructType
 * @subpackage Structs
 */
class SaveVatAccountSchemaRequest extends AbstractStructBase
{
    /**
     * The MidocoVatAccountSchema
     * Meta information extracted from the WSDL
     * - ref: MidocoVatAccountSchema
     * @var \Pggns\MidocoApi\OrderSD\StructType\MidocoVatAccountSchema|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\MidocoVatAccountSchema $MidocoVatAccountSchema = null;
    /**
     * Constructor method for SaveVatAccountSchemaRequest
     * @uses SaveVatAccountSchemaRequest::setMidocoVatAccountSchema()
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoVatAccountSchema $midocoVatAccountSchema
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\MidocoVatAccountSchema $midocoVatAccountSchema = null)
    {
        $this
            ->setMidocoVatAccountSchema($midocoVatAccountSchema);
    }
    /**
     * Get MidocoVatAccountSchema value
     * @return \Pggns\MidocoApi\OrderSD\StructType\MidocoVatAccountSchema|null
     */
    public function getMidocoVatAccountSchema(): ?\Pggns\MidocoApi\OrderSD\StructType\MidocoVatAccountSchema
    {
        return $this->MidocoVatAccountSchema;
    }
    /**
     * Set MidocoVatAccountSchema value
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoVatAccountSchema $midocoVatAccountSchema
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveVatAccountSchemaRequest
     */
    public function setMidocoVatAccountSchema(?\Pggns\MidocoApi\OrderSD\StructType\MidocoVatAccountSchema $midocoVatAccountSchema = null): self
    {
        $this->MidocoVatAccountSchema = $midocoVatAccountSchema;
        
        return $this;
    }
}
