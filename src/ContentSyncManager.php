<?php

declare(strict_types=1);

namespace SmitBackend\CmsRelay;

use SmitBackend\CmsRelay\Contracts\CmsWebhookHandlerInterface;

/**
 * Class ContentSyncManager
 *
 * @package SmitBackend\CmsRelay
 */
class ContentSyncManager implements CmsWebhookHandlerInterface
{
    private array $config;

    public function __construct(array $config = [])
    {
        $this->config = $config;
    }

    public function execute(array $payload = []): mixed
    {
        // Primary lifecycle processing
        return array_merge($this->config, $payload);
    }
}
