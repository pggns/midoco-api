<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveSupplierVatSchemaRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveSupplierVatSchemaRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierVatSchema
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierVatSchema
     * @var \Pggns\MidocoApi\Bank\StructType\SupplierVatSchemaDTO|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\SupplierVatSchemaDTO $MidocoSupplierVatSchema = null;
    /**
     * Constructor method for SaveSupplierVatSchemaRequest
     * @uses SaveSupplierVatSchemaRequest::setMidocoSupplierVatSchema()
     * @param \Pggns\MidocoApi\Bank\StructType\SupplierVatSchemaDTO $midocoSupplierVatSchema
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\SupplierVatSchemaDTO $midocoSupplierVatSchema = null)
    {
        $this
            ->setMidocoSupplierVatSchema($midocoSupplierVatSchema);
    }
    /**
     * Get MidocoSupplierVatSchema value
     * @return \Pggns\MidocoApi\Bank\StructType\SupplierVatSchemaDTO|null
     */
    public function getMidocoSupplierVatSchema(): ?\Pggns\MidocoApi\Bank\StructType\SupplierVatSchemaDTO
    {
        return $this->MidocoSupplierVatSchema;
    }
    /**
     * Set MidocoSupplierVatSchema value
     * @param \Pggns\MidocoApi\Bank\StructType\SupplierVatSchemaDTO $midocoSupplierVatSchema
     * @return \Pggns\MidocoApi\Bank\StructType\SaveSupplierVatSchemaRequest
     */
    public function setMidocoSupplierVatSchema(?\Pggns\MidocoApi\Bank\StructType\SupplierVatSchemaDTO $midocoSupplierVatSchema = null): self
    {
        $this->MidocoSupplierVatSchema = $midocoSupplierVatSchema;
        
        return $this;
    }
}
