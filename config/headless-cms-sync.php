<?php

return [
    'enabled' => env('HEADLESS_CMS_SYNC_ENABLED', true),
    'timeout' => env('HEADLESS_CMS_SYNC_TIMEOUT', 30),
    'log_channel' => env('HEADLESS_CMS_SYNC_LOG', 'stack'),
];
