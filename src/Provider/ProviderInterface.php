<?php

/*
 * This file is part of the scr-be/teavee-html-generator-bundle
 *
 * (c) Rob Frawley 2nd <rmf@build.fail>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Scribe\Teavee\HtmlGeneratorBundle\Provider;

/**
 * Class ProviderInterface.
 */
interface ProviderInterface
{
    /**
     * @param mixed[]    $opts
     * @param null|mixed $subject
     *
     * @return mixed
     */
    public function find(array $opts = [], $subject = null);
}

/* EOF */
