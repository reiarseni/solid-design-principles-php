<?php

namespace Worker\Jobs\Webdesigner;

use Worker\Jobs\JobInterface;

interface DesignInterface extends JobInterface
{
    public function designate(): string;
}
