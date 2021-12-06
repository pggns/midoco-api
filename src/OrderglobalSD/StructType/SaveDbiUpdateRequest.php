<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\OrderglobalSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveDbiUpdateRequest StructType
 * @subpackage Structs
 */
class SaveDbiUpdateRequest extends AbstractStructBase
{
    /**
     * The MidocoDbiUpdate
     * Meta information extracted from the WSDL
     * - ref: MidocoDbiUpdate
     * @var \Pggns\MidocoApi\Api\OrderglobalSD\StructType\DbiUpdateDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\OrderglobalSD\StructType\DbiUpdateDTO $MidocoDbiUpdate = null;
    /**
     * The isUpdateTaxVerification
     * Meta information extracted from the WSDL
     * - default: true
     * @var bool|null
     */
    protected ?bool $isUpdateTaxVerification = null;
    /**
     * Constructor method for SaveDbiUpdateRequest
     * @uses SaveDbiUpdateRequest::setMidocoDbiUpdate()
     * @uses SaveDbiUpdateRequest::setIsUpdateTaxVerification()
     * @param \Pggns\MidocoApi\Api\OrderglobalSD\StructType\DbiUpdateDTO $midocoDbiUpdate
     * @param bool $isUpdateTaxVerification
     */
    public function __construct(?\Pggns\MidocoApi\Api\OrderglobalSD\StructType\DbiUpdateDTO $midocoDbiUpdate = null, ?bool $isUpdateTaxVerification = true)
    {
        $this
            ->setMidocoDbiUpdate($midocoDbiUpdate)
            ->setIsUpdateTaxVerification($isUpdateTaxVerification);
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
     * @return \Pggns\MidocoApi\Api\OrderglobalSD\StructType\SaveDbiUpdateRequest
     */
    public function setMidocoDbiUpdate(?\Pggns\MidocoApi\Api\OrderglobalSD\StructType\DbiUpdateDTO $midocoDbiUpdate = null): self
    {
        $this->MidocoDbiUpdate = $midocoDbiUpdate;
        
        return $this;
    }
    /**
     * Get isUpdateTaxVerification value
     * @return bool|null
     */
    public function getIsUpdateTaxVerification(): ?bool
    {
        return $this->isUpdateTaxVerification;
    }
    /**
     * Set isUpdateTaxVerification value
     * @param bool $isUpdateTaxVerification
     * @return \Pggns\MidocoApi\Api\OrderglobalSD\StructType\SaveDbiUpdateRequest
     */
    public function setIsUpdateTaxVerification(?bool $isUpdateTaxVerification = true): self
    {
        // validation for constraint: boolean
        if (!is_null($isUpdateTaxVerification) && !is_bool($isUpdateTaxVerification)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isUpdateTaxVerification, true), gettype($isUpdateTaxVerification)), __LINE__);
        }
        $this->isUpdateTaxVerification = $isUpdateTaxVerification;
        
        return $this;
    }
}
