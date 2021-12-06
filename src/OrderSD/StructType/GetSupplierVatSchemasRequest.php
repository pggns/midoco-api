<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSupplierVatSchemasRequest StructType
 * @subpackage Structs
 */
class GetSupplierVatSchemasRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierVatSchema
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierVatSchema
     * @var \Pggns\MidocoApi\Api\OrderSD\StructType\SupplierVatSchemaDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\OrderSD\StructType\SupplierVatSchemaDTO $MidocoSupplierVatSchema = null;
    /**
     * Constructor method for GetSupplierVatSchemasRequest
     * @uses GetSupplierVatSchemasRequest::setMidocoSupplierVatSchema()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\SupplierVatSchemaDTO $midocoSupplierVatSchema
     */
    public function __construct(?\Pggns\MidocoApi\Api\OrderSD\StructType\SupplierVatSchemaDTO $midocoSupplierVatSchema = null)
    {
        $this
            ->setMidocoSupplierVatSchema($midocoSupplierVatSchema);
    }
    /**
     * Get MidocoSupplierVatSchema value
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\SupplierVatSchemaDTO|null
     */
    public function getMidocoSupplierVatSchema(): ?\Pggns\MidocoApi\Api\OrderSD\StructType\SupplierVatSchemaDTO
    {
        return $this->MidocoSupplierVatSchema;
    }
    /**
     * Set MidocoSupplierVatSchema value
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\SupplierVatSchemaDTO $midocoSupplierVatSchema
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetSupplierVatSchemasRequest
     */
    public function setMidocoSupplierVatSchema(?\Pggns\MidocoApi\Api\OrderSD\StructType\SupplierVatSchemaDTO $midocoSupplierVatSchema = null): self
    {
        $this->MidocoSupplierVatSchema = $midocoSupplierVatSchema;
        
        return $this;
    }
}
