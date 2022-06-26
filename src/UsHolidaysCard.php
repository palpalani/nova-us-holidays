<?php

namespace palPalani\UsHolidaysCard;

use Laravel\Nova\Card;
use USHolidays\Carbon;

class UsHolidaysCard extends Card
{
    public ?array $holidays = null;

    /**
     * The width of the card (1/3, 1/2, or full).
     *
     * @var string
     */
    public $width = '1/3';

    /**
     * @param mixed $cacheFor
     * @param string|null $component
     */
    public function __construct(?string $title = null, $cacheFor = null, ?string $component = null)
    {
        $carbon = Carbon::create(now());
        $this->holidays = $carbon->getHolidaysInDays(90, 'all');

        parent::__construct($component);
    }

    /**
     * Get the component name for the element.
     *
     * @return string
     */
    public function component()
    {
        return 'us-holidays-card';
    }

    /**
     * @return array
     */
    public function jsonSerialize(): array
    {
        return array_merge([
            'holidays' => $this->holidays,
        ], parent::jsonSerialize());
    }
}