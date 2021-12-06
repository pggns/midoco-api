<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchDatastoresRequest StructType
 * @subpackage Structs
 */
class SearchDatastoresRequest extends AbstractStructBase
{
    /**
     * The MidocoDatastore
     * Meta information extracted from the WSDL
     * - ref: MidocoDatastore
     * @var \Pggns\MidocoApi\Api\OrderSD\StructType\DatastoreDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\OrderSD\StructType\DatastoreDTO $MidocoDatastore = null;
    /**
     * Constructor method for SearchDatastoresRequest
     * @uses SearchDatastoresRequest::setMidocoDatastore()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\DatastoreDTO $midocoDatastore
     */
    public function __construct(?\Pggns\MidocoApi\Api\OrderSD\StructType\DatastoreDTO $midocoDatastore = null)
    {
        $this
            ->setMidocoDatastore($midocoDatastore);
    }
    /**
     * Get MidocoDatastore value
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DatastoreDTO|null
     */
    public function getMidocoDatastore(): ?\Pggns\MidocoApi\Api\OrderSD\StructType\DatastoreDTO
    {
        return $this->MidocoDatastore;
    }
    /**
     * Set MidocoDatastore value
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\DatastoreDTO $midocoDatastore
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\SearchDatastoresRequest
     */
    public function setMidocoDatastore(?\Pggns\MidocoApi\Api\OrderSD\StructType\DatastoreDTO $midocoDatastore = null): self
    {
        $this->MidocoDatastore = $midocoDatastore;
        
        return $this;
    }
}