<?php

declare(strict_types=1);

namespace App\Decorator\EventDecorator;

/**
 * Class NullEventDecorator
 * @package App\Decorator\EventDecorator
 */
final class NullEventDecorator implements EventDecorator
{
    /** @var string */
    private $bank;

    /**
     * OriginalPricePriceDecorator constructor.
     * @param string $bank
     */
    public function __construct(string $bank)
    {
        $this->bank = $bank;
    }

    /**
     * @return string
     */
    public function getBank(): string
    {
        return $this->bank;
    }

    /**
     * @param array $events
     * @return array
     */
    public function getEvents(array $events): array
    {
        return $events;
    }
}
