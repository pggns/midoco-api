<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoKaeraBondExt StructType
 * @subpackage Structs
 */
class MidocoKaeraBondExt extends AbstractStructBase
{
    /**
     * The MidocoKaeraBondWithId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoKaeraBondWithId
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoKaeraBondWithId|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoKaeraBondWithId $MidocoKaeraBondWithId = null;
    /**
     * The MidocoKaeraBond
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoKaeraBond
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoKaeraBond|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoKaeraBond $MidocoKaeraBond = null;
    /**
     * Constructor method for MidocoKaeraBondExt
     * @uses MidocoKaeraBondExt::setMidocoKaeraBondWithId()
     * @uses MidocoKaeraBondExt::setMidocoKaeraBond()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoKaeraBondWithId $midocoKaeraBondWithId
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoKaeraBond $midocoKaeraBond
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\MidocoKaeraBondWithId $midocoKaeraBondWithId = null, ?\Pggns\MidocoApi\Documents\StructType\MidocoKaeraBond $midocoKaeraBond = null)
    {
        $this
            ->setMidocoKaeraBondWithId($midocoKaeraBondWithId)
            ->setMidocoKaeraBond($midocoKaeraBond);
    }
    /**
     * Get MidocoKaeraBondWithId value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoKaeraBondWithId|null
     */
    public function getMidocoKaeraBondWithId(): ?\Pggns\MidocoApi\Documents\StructType\MidocoKaeraBondWithId
    {
        return $this->MidocoKaeraBondWithId;
    }
    /**
     * Set MidocoKaeraBondWithId value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoKaeraBondWithId $midocoKaeraBondWithId
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoKaeraBondExt
     */
    public function setMidocoKaeraBondWithId(?\Pggns\MidocoApi\Documents\StructType\MidocoKaeraBondWithId $midocoKaeraBondWithId = null): self
    {
        $this->MidocoKaeraBondWithId = $midocoKaeraBondWithId;
        
        return $this;
    }
    /**
     * Get MidocoKaeraBond value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoKaeraBond|null
     */
    public function getMidocoKaeraBond(): ?\Pggns\MidocoApi\Documents\StructType\MidocoKaeraBond
    {
        return $this->MidocoKaeraBond;
    }
    /**
     * Set MidocoKaeraBond value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoKaeraBond $midocoKaeraBond
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoKaeraBondExt
     */
    public function setMidocoKaeraBond(?\Pggns\MidocoApi\Documents\StructType\MidocoKaeraBond $midocoKaeraBond = null): self
    {
        $this->MidocoKaeraBond = $midocoKaeraBond;
        
        return $this;
    }
}
