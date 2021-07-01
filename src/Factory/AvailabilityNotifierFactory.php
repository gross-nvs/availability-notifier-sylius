<?php

declare(strict_types=1);

namespace Workouse\AvailabilityNotifierPlugin\Factory;

use Sylius\Component\Resource\Factory\FactoryInterface;
use Workouse\AvailabilityNotifierPlugin\Entity\AvailabilityNotifier;

class AvailabilityNotifierFactory implements FactoryInterface
{
    public function createNew()
    {
        return new AvailabilityNotifier();
    }
}
