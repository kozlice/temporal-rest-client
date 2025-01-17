<?php
/**
 * Temporal REST Client
 *
 * @author Valentin Nazarov <v.nazarov@pos-credit.ru>
 * @copyright Copyright (c) 2024, The Vanta
 */

declare(strict_types=1);

namespace Vanta\Integration\Temporal\Infrastructure\HttpClient;

final readonly class ConfigurationClient
{
    /**
     * @param non-empty-string $url
     */
    public function __construct(
        public string $url,
        public string $namespace = 'default',
    ) {
    }

    /**
     * @param non-empty-string $url
     */
    public function withUrl(string $url): self
    {
        return new self(
            url: $url,
            namespace: $this->namespace,
        );
    }

    /**
     * @param non-empty-string $namespace
     */
    public function withNamespace(string $namespace): self
    {
        return new self(
            url: $this->url,
            namespace: $namespace,
        );
    }
}
