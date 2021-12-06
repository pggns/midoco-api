<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\System\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for response StructType
 * @subpackage Structs
 */
class Response extends AbstractStructBase
{
    /**
     * The Error
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: Error
     * @var \Pggns\MidocoApi\System\StructType\Error|null
     */
    protected ?\Pggns\MidocoApi\System\StructType\Error $Error = null;
    /**
     * The State
     * @var string|null
     */
    protected ?string $State = null;
    /**
     * Constructor method for response
     * @uses Response::setError()
     * @uses Response::setState()
     * @param \Pggns\MidocoApi\System\StructType\Error $error
     * @param string $state
     */
    public function __construct(?\Pggns\MidocoApi\System\StructType\Error $error = null, ?string $state = null)
    {
        $this
            ->setError($error)
            ->setState($state);
    }
    /**
     * Get Error value
     * @return \Pggns\MidocoApi\System\StructType\Error|null
     */
    public function getError(): ?\Pggns\MidocoApi\System\StructType\Error
    {
        return $this->Error;
    }
    /**
     * Set Error value
     * @param \Pggns\MidocoApi\System\StructType\Error $error
     * @return \Pggns\MidocoApi\System\StructType\Response
     */
    public function setError(?\Pggns\MidocoApi\System\StructType\Error $error = null): self
    {
        $this->Error = $error;
        
        return $this;
    }
    /**
     * Get State value
     * @return string|null
     */
    public function getState(): ?string
    {
        return $this->State;
    }
    /**
     * Set State value
     * @uses \Pggns\MidocoApi\System\EnumType\StatusType::valueIsValid()
     * @uses \Pggns\MidocoApi\System\EnumType\StatusType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $state
     * @return \Pggns\MidocoApi\System\StructType\Response
     */
    public function setState(?string $state = null): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\System\EnumType\StatusType::valueIsValid($state)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\System\EnumType\StatusType', is_array($state) ? implode(', ', $state) : var_export($state, true), implode(', ', \Pggns\MidocoApi\System\EnumType\StatusType::getValidValues())), __LINE__);
        }
        $this->State = $state;
        
        return $this;
    }
}
