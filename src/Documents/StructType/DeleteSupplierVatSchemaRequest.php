<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteSupplierVatSchemaRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteSupplierVatSchemaRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierVatSchema
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierVatSchema
     * @var \Pggns\MidocoApi\Documents\StructType\SupplierVatSchemaDTO|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\SupplierVatSchemaDTO $MidocoSupplierVatSchema = null;
    /**
     * Constructor method for DeleteSupplierVatSchemaRequest
     * @uses DeleteSupplierVatSchemaRequest::setMidocoSupplierVatSchema()
     * @param \Pggns\MidocoApi\Documents\StructType\SupplierVatSchemaDTO $midocoSupplierVatSchema
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\SupplierVatSchemaDTO $midocoSupplierVatSchema = null)
    {
        $this
            ->setMidocoSupplierVatSchema($midocoSupplierVatSchema);
    }
    /**
     * Get MidocoSupplierVatSchema value
     * @return \Pggns\MidocoApi\Documents\StructType\SupplierVatSchemaDTO|null
     */
    public function getMidocoSupplierVatSchema(): ?\Pggns\MidocoApi\Documents\StructType\SupplierVatSchemaDTO
    {
        return $this->MidocoSupplierVatSchema;
    }
    /**
     * Set MidocoSupplierVatSchema value
     * @param \Pggns\MidocoApi\Documents\StructType\SupplierVatSchemaDTO $midocoSupplierVatSchema
     * @return \Pggns\MidocoApi\Documents\StructType\DeleteSupplierVatSchemaRequest
     */
    public function setMidocoSupplierVatSchema(?\Pggns\MidocoApi\Documents\StructType\SupplierVatSchemaDTO $midocoSupplierVatSchema = null): self
    {
        $this->MidocoSupplierVatSchema = $midocoSupplierVatSchema;
        
        return $this;
    }
}
