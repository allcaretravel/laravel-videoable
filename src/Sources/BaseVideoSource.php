<?php

namespace Nwidart\LaravelVideoable\Sources;

use Illuminate\Support\Arr;
use Nwidart\LaravelVideoable\Models\Video;

abstract class BaseVideoSource
{
    /**
     * @var \Nwidart\LaravelVideoable\Models\Video
     */
    protected $entity;

    public function __construct(array $vars)
    {
        $this->entity = new Video(Arr::get($vars, 'attributes', []));
    }

    /**
     * @return string
     */
    abstract public function getEmbedCode();
}
