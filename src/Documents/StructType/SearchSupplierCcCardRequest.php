<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchSupplierCcCardRequest StructType
 * @subpackage Structs
 */
class SearchSupplierCcCardRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierCcCard
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierCcCard
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoSupplierCcCard|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoSupplierCcCard $MidocoSupplierCcCard = null;
    /**
     * Constructor method for SearchSupplierCcCardRequest
     * @uses SearchSupplierCcCardRequest::setMidocoSupplierCcCard()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoSupplierCcCard $midocoSupplierCcCard
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\MidocoSupplierCcCard $midocoSupplierCcCard = null)
    {
        $this
            ->setMidocoSupplierCcCard($midocoSupplierCcCard);
    }
    /**
     * Get MidocoSupplierCcCard value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoSupplierCcCard|null
     */
    public function getMidocoSupplierCcCard(): ?\Pggns\MidocoApi\Documents\StructType\MidocoSupplierCcCard
    {
        return $this->MidocoSupplierCcCard;
    }
    /**
     * Set MidocoSupplierCcCard value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoSupplierCcCard $midocoSupplierCcCard
     * @return \Pggns\MidocoApi\Documents\StructType\SearchSupplierCcCardRequest
     */
    public function setMidocoSupplierCcCard(?\Pggns\MidocoApi\Documents\StructType\MidocoSupplierCcCard $midocoSupplierCcCard = null): self
    {
        $this->MidocoSupplierCcCard = $midocoSupplierCcCard;
        
        return $this;
    }
}
