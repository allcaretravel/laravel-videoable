<?php

return [
    'sources' => [
        'youtube' => \Nwidart\LaravelVideoable\Sources\YoutubePresenter::class,
        'vimeo' => \Nwidart\LaravelVideoable\Sources\VimeoPresenter::class,
    ],
    'table' => 'videos',
    'model' => \Nwidart\LaravelVideoable\Models\Video::class
];
