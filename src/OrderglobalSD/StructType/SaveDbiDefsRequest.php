<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\OrderglobalSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveDbiDefsRequest StructType
 * @subpackage Structs
 */
class SaveDbiDefsRequest extends AbstractStructBase
{
    /**
     * The MidocoDbiDefs
     * Meta information extracted from the WSDL
     * - ref: MidocoDbiDefs
     * @var \Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoDbiDefs|null
     */
    protected ?\Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoDbiDefs $MidocoDbiDefs = null;
    /**
     * The MidocoDbiUpdate
     * Meta information extracted from the WSDL
     * - ref: MidocoDbiUpdate
     * @var \Pggns\MidocoApi\Api\OrderglobalSD\StructType\DbiUpdateDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\OrderglobalSD\StructType\DbiUpdateDTO $MidocoDbiUpdate = null;
    /**
     * Constructor method for SaveDbiDefsRequest
     * @uses SaveDbiDefsRequest::setMidocoDbiDefs()
     * @uses SaveDbiDefsRequest::setMidocoDbiUpdate()
     * @param \Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoDbiDefs $midocoDbiDefs
     * @param \Pggns\MidocoApi\Api\OrderglobalSD\StructType\DbiUpdateDTO $midocoDbiUpdate
     */
    public function __construct(?\Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoDbiDefs $midocoDbiDefs = null, ?\Pggns\MidocoApi\Api\OrderglobalSD\StructType\DbiUpdateDTO $midocoDbiUpdate = null)
    {
        $this
            ->setMidocoDbiDefs($midocoDbiDefs)
            ->setMidocoDbiUpdate($midocoDbiUpdate);
    }
    /**
     * Get MidocoDbiDefs value
     * @return \Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoDbiDefs|null
     */
    public function getMidocoDbiDefs(): ?\Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoDbiDefs
    {
        return $this->MidocoDbiDefs;
    }
    /**
     * Set MidocoDbiDefs value
     * @param \Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoDbiDefs $midocoDbiDefs
     * @return \Pggns\MidocoApi\Api\OrderglobalSD\StructType\SaveDbiDefsRequest
     */
    public function setMidocoDbiDefs(?\Pggns\MidocoApi\Api\OrderglobalSD\StructType\MidocoDbiDefs $midocoDbiDefs = null): self
    {
        $this->MidocoDbiDefs = $midocoDbiDefs;
        
        return $this;
    }
    /**
     * Get MidocoDbiUpdate value
     * @return \Pggns\MidocoApi\Api\OrderglobalSD\StructType\DbiUpdateDTO|null
     */
    public function getMidocoDbiUpdate(): ?\Pggns\MidocoApi\Api\OrderglobalSD\StructType\DbiUpdateDTO
    {
        return $this->MidocoDbiUpdate;
    }
    /**
     * Set MidocoDbiUpdate value
     * @param \Pggns\MidocoApi\Api\OrderglobalSD\StructType\DbiUpdateDTO $midocoDbiUpdate
     * @return \Pggns\MidocoApi\Api\OrderglobalSD\StructType\SaveDbiDefsRequest
     */
    public function setMidocoDbiUpdate(?\Pggns\MidocoApi\Api\OrderglobalSD\StructType\DbiUpdateDTO $midocoDbiUpdate = null): self
    {
        $this->MidocoDbiUpdate = $midocoDbiUpdate;
        
        return $this;
    }
}
