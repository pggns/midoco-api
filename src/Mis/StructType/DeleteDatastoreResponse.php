<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteDatastoreResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteDatastoreResponse extends AbstractStructBase
{
    /**
     * The MidocoDatastore
     * Meta information extracted from the WSDL
     * - ref: MidocoDatastore
     * @var \Pggns\MidocoApi\Mis\StructType\DatastoreDTO|null
     */
    protected ?\Pggns\MidocoApi\Mis\StructType\DatastoreDTO $MidocoDatastore = null;
    /**
     * Constructor method for DeleteDatastoreResponse
     * @uses DeleteDatastoreResponse::setMidocoDatastore()
     * @param \Pggns\MidocoApi\Mis\StructType\DatastoreDTO $midocoDatastore
     */
    public function __construct(?\Pggns\MidocoApi\Mis\StructType\DatastoreDTO $midocoDatastore = null)
    {
        $this
            ->setMidocoDatastore($midocoDatastore);
    }
    /**
     * Get MidocoDatastore value
     * @return \Pggns\MidocoApi\Mis\StructType\DatastoreDTO|null
     */
    public function getMidocoDatastore(): ?\Pggns\MidocoApi\Mis\StructType\DatastoreDTO
    {
        return $this->MidocoDatastore;
    }
    /**
     * Set MidocoDatastore value
     * @param \Pggns\MidocoApi\Mis\StructType\DatastoreDTO $midocoDatastore
     * @return \Pggns\MidocoApi\Mis\StructType\DeleteDatastoreResponse
     */
    public function setMidocoDatastore(?\Pggns\MidocoApi\Mis\StructType\DatastoreDTO $midocoDatastore = null): self
    {
        $this->MidocoDatastore = $midocoDatastore;
        
        return $this;
    }
}
