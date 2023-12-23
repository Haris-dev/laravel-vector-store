<?php

namespace AdrianTanase\VectorStore\Providers\Pinecone\Requests;

use AdrianTanase\VectorStore\Providers\Pinecone\Abstracts\PineconeRequestAbstract;

class PineconeDeleteRequest extends PineconeRequestAbstract {
	public function __construct(
		protected ?array $ids = null,
		protected ?bool $deleteAll = null,
		protected ?array $filter = []
	)
	{
	}

	public function ids(array $ids): self {
		$this->ids = $ids;

		return $this;
	}

	public function deleteAll(bool $deleteAll) : self {
		$this->deleteAll = $deleteAll;

		return $this;
	}

	public function filter(array $filter): self {
		$this->filter = $filter;

		return $this;
	}
}