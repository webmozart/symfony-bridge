<?php

/*
 * This file is part of the puli/symfony-bridge package.
 *
 * (c) Bernhard Schussek <bschussek@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Puli\SymfonyBridge\Config;

use Symfony\Component\Config\FileLocator;

/**
 * @since  1.0
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class ChainableFileLocatorImpl extends FileLocator implements ChainableFileLocator
{
    public function supports($path)
    {
        return true;
    }
}
