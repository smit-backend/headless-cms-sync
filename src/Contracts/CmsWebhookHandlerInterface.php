<?php

declare(strict_types=1);

namespace SmitBackend\CmsRelay\Contracts;

/**
 * Interface CmsWebhookHandlerInterface
 *
 * @package SmitBackend\CmsRelay
 */
interface CmsWebhookHandlerInterface
{
    public function execute(array $payload = []): mixed;
}
