<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

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
     * @var \Pggns\MidocoApi\Crm\StructType\Error|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\Error $Error = null;
    /**
     * The State
     * @var string|null
     */
    protected ?string $State = null;
    /**
     * Constructor method for response
     * @uses Response::setError()
     * @uses Response::setState()
     * @param \Pggns\MidocoApi\Crm\StructType\Error $error
     * @param string $state
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\Error $error = null, ?string $state = null)
    {
        $this
            ->setError($error)
            ->setState($state);
    }
    /**
     * Get Error value
     * @return \Pggns\MidocoApi\Crm\StructType\Error|null
     */
    public function getError(): ?\Pggns\MidocoApi\Crm\StructType\Error
    {
        return $this->Error;
    }
    /**
     * Set Error value
     * @param \Pggns\MidocoApi\Crm\StructType\Error $error
     * @return \Pggns\MidocoApi\Crm\StructType\Response
     */
    public function setError(?\Pggns\MidocoApi\Crm\StructType\Error $error = null): self
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
     * @uses \Pggns\MidocoApi\Crm\EnumType\StatusType::valueIsValid()
     * @uses \Pggns\MidocoApi\Crm\EnumType\StatusType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $state
     * @return \Pggns\MidocoApi\Crm\StructType\Response
     */
    public function setState(?string $state = null): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Crm\EnumType\StatusType::valueIsValid($state)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Crm\EnumType\StatusType', is_array($state) ? implode(', ', $state) : var_export($state, true), implode(', ', \Pggns\MidocoApi\Crm\EnumType\StatusType::getValidValues())), __LINE__);
        }
        $this->State = $state;
        
        return $this;
    }
}
