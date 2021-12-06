<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

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
     * @var \Pggns\MidocoApi\CrmSD\StructType\DatastoreDTO|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\DatastoreDTO $MidocoDatastore = null;
    /**
     * Constructor method for SearchDatastoresRequest
     * @uses SearchDatastoresRequest::setMidocoDatastore()
     * @param \Pggns\MidocoApi\CrmSD\StructType\DatastoreDTO $midocoDatastore
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\DatastoreDTO $midocoDatastore = null)
    {
        $this
            ->setMidocoDatastore($midocoDatastore);
    }
    /**
     * Get MidocoDatastore value
     * @return \Pggns\MidocoApi\CrmSD\StructType\DatastoreDTO|null
     */
    public function getMidocoDatastore(): ?\Pggns\MidocoApi\CrmSD\StructType\DatastoreDTO
    {
        return $this->MidocoDatastore;
    }
    /**
     * Set MidocoDatastore value
     * @param \Pggns\MidocoApi\CrmSD\StructType\DatastoreDTO $midocoDatastore
     * @return \Pggns\MidocoApi\CrmSD\StructType\SearchDatastoresRequest
     */
    public function setMidocoDatastore(?\Pggns\MidocoApi\CrmSD\StructType\DatastoreDTO $midocoDatastore = null): self
    {
        $this->MidocoDatastore = $midocoDatastore;
        
        return $this;
    }
}
