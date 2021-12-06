<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveDatastoreRequest StructType
 * @subpackage Structs
 */
class SaveDatastoreRequest extends AbstractStructBase
{
    /**
     * The MidocoDatastore
     * Meta information extracted from the WSDL
     * - ref: MidocoDatastore
     * @var \Pggns\MidocoApi\OrderSD\StructType\DatastoreDTO|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\DatastoreDTO $MidocoDatastore = null;
    /**
     * Constructor method for SaveDatastoreRequest
     * @uses SaveDatastoreRequest::setMidocoDatastore()
     * @param \Pggns\MidocoApi\OrderSD\StructType\DatastoreDTO $midocoDatastore
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\DatastoreDTO $midocoDatastore = null)
    {
        $this
            ->setMidocoDatastore($midocoDatastore);
    }
    /**
     * Get MidocoDatastore value
     * @return \Pggns\MidocoApi\OrderSD\StructType\DatastoreDTO|null
     */
    public function getMidocoDatastore(): ?\Pggns\MidocoApi\OrderSD\StructType\DatastoreDTO
    {
        return $this->MidocoDatastore;
    }
    /**
     * Set MidocoDatastore value
     * @param \Pggns\MidocoApi\OrderSD\StructType\DatastoreDTO $midocoDatastore
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveDatastoreRequest
     */
    public function setMidocoDatastore(?\Pggns\MidocoApi\OrderSD\StructType\DatastoreDTO $midocoDatastore = null): self
    {
        $this->MidocoDatastore = $midocoDatastore;
        
        return $this;
    }
}
