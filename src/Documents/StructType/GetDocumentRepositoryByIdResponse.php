<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDocumentRepositoryByIdResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getDocumentRepositoryById --- retrieves a document repository record by id
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetDocumentRepositoryByIdResponse extends AbstractStructBase
{
    /**
     * The MidocoDocumentRepository
     * Meta information extracted from the WSDL
     * - ref: MidocoDocumentRepository
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoDocumentRepository|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoDocumentRepository $MidocoDocumentRepository = null;
    /**
     * The repository
     * @var string|null
     */
    protected ?string $repository = null;
    /**
     * Constructor method for GetDocumentRepositoryByIdResponse
     * @uses GetDocumentRepositoryByIdResponse::setMidocoDocumentRepository()
     * @uses GetDocumentRepositoryByIdResponse::setRepository()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoDocumentRepository $midocoDocumentRepository
     * @param string $repository
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\MidocoDocumentRepository $midocoDocumentRepository = null, ?string $repository = null)
    {
        $this
            ->setMidocoDocumentRepository($midocoDocumentRepository)
            ->setRepository($repository);
    }
    /**
     * Get MidocoDocumentRepository value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoDocumentRepository|null
     */
    public function getMidocoDocumentRepository(): ?\Pggns\MidocoApi\Documents\StructType\MidocoDocumentRepository
    {
        return $this->MidocoDocumentRepository;
    }
    /**
     * Set MidocoDocumentRepository value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoDocumentRepository $midocoDocumentRepository
     * @return \Pggns\MidocoApi\Documents\StructType\GetDocumentRepositoryByIdResponse
     */
    public function setMidocoDocumentRepository(?\Pggns\MidocoApi\Documents\StructType\MidocoDocumentRepository $midocoDocumentRepository = null): self
    {
        $this->MidocoDocumentRepository = $midocoDocumentRepository;
        
        return $this;
    }
    /**
     * Get repository value
     * @return string|null
     */
    public function getRepository(): ?string
    {
        return $this->repository;
    }
    /**
     * Set repository value
     * @param string $repository
     * @return \Pggns\MidocoApi\Documents\StructType\GetDocumentRepositoryByIdResponse
     */
    public function setRepository(?string $repository = null): self
    {
        // validation for constraint: string
        if (!is_null($repository) && !is_string($repository)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($repository, true), gettype($repository)), __LINE__);
        }
        $this->repository = $repository;
        
        return $this;
    }
}
