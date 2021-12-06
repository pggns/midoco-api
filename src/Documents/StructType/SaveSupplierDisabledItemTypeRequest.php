<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveSupplierDisabledItemTypeRequest StructType
 * @subpackage Structs
 */
class SaveSupplierDisabledItemTypeRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierDisabledItemType
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierDisabledItemType
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoSupplierDisabledItemType|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoSupplierDisabledItemType $MidocoSupplierDisabledItemType = null;
    /**
     * Constructor method for SaveSupplierDisabledItemTypeRequest
     * @uses SaveSupplierDisabledItemTypeRequest::setMidocoSupplierDisabledItemType()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoSupplierDisabledItemType $midocoSupplierDisabledItemType
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\MidocoSupplierDisabledItemType $midocoSupplierDisabledItemType = null)
    {
        $this
            ->setMidocoSupplierDisabledItemType($midocoSupplierDisabledItemType);
    }
    /**
     * Get MidocoSupplierDisabledItemType value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoSupplierDisabledItemType|null
     */
    public function getMidocoSupplierDisabledItemType(): ?\Pggns\MidocoApi\Documents\StructType\MidocoSupplierDisabledItemType
    {
        return $this->MidocoSupplierDisabledItemType;
    }
    /**
     * Set MidocoSupplierDisabledItemType value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoSupplierDisabledItemType $midocoSupplierDisabledItemType
     * @return \Pggns\MidocoApi\Documents\StructType\SaveSupplierDisabledItemTypeRequest
     */
    public function setMidocoSupplierDisabledItemType(?\Pggns\MidocoApi\Documents\StructType\MidocoSupplierDisabledItemType $midocoSupplierDisabledItemType = null): self
    {
        $this->MidocoSupplierDisabledItemType = $midocoSupplierDisabledItemType;
        
        return $this;
    }
}
