<?php declare(strict_types = 1);

namespace Phpuef\Country;

final class Country
{

    public function __construct(
        public string $name,
        public string $alpha2,
        public string $alpha3,
        public string $numeric,
    )
    {
        // Construct
    }

}
