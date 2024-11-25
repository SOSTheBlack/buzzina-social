<?php
return [
    'laravel/fortify'                                   =>
        [
            'providers' =>
                [
                    0 => 'Laravel\\Fortify\\FortifyServiceProvider',
                ],
        ],
    'laravel/jetstream'                                 =>
        [
            'providers' =>
                [
                    0 => 'Laravel\\Jetstream\\JetstreamServiceProvider',
                ],
        ],
    'laravel/sail'                                      =>
        [
            'providers' =>
                [
                    0 => 'Laravel\\Sail\\SailServiceProvider',
                ],
        ],
    'laravel/sanctum'                                   =>
        [
            'providers' =>
                [
                    0 => 'Laravel\\Sanctum\\SanctumServiceProvider',
                ],
        ],
    'laravel/tinker'                                    =>
        [
            'providers' =>
                [
                    0 => 'Laravel\\Tinker\\TinkerServiceProvider',
                ],
        ],
    'livewire/livewire'                                 =>
        [
            'providers' =>
                [
                    0 => 'Livewire\\LivewireServiceProvider',
                ],
            'aliases'   =>
                [
                    'Livewire' => 'Livewire\\Livewire',
                ],
        ],
    'lucascudo/laravel-pt-br-localization'              =>
        [
            'providers' =>
                [
                    0 => 'Lucascudo\\LaravelPtBrLocalization\\LaravelPtBrLocalizationServiceProvider',
                ],
        ],
    'nesbot/carbon'                                     =>
        [
            'providers' =>
                [
                    0 => 'Carbon\\Laravel\\ServiceProvider',
                ],
        ],
    'nunomaduro/collision'                              =>
        [
            'providers' =>
                [
                    0 => 'NunoMaduro\\Collision\\Adapters\\Laravel\\CollisionServiceProvider',
                ],
        ],
    'nunomaduro/termwind'                               =>
        [
            'providers' =>
                [
                    0 => 'Termwind\\Laravel\\TermwindServiceProvider',
                ],
        ],
    'pixinvent/materialize-laravel-bootstrap-jetstream' =>
        [
            'providers' =>
                [
                    0 => 'Pixinvent\\Jetstrap\\JetstrapServiceProvider',
                ],
            'aliases'   =>
                [
                    'Jetstrap' => 'Pixinvent\\Jetstrap\\JetstrapFacade',
                ],
        ],
    'spatie/laravel-ignition'                           =>
        [
            'providers' =>
                [
                    0 => 'Spatie\\LaravelIgnition\\IgnitionServiceProvider',
                ],
            'aliases'   =>
                [
                    'Flare' => 'Spatie\\LaravelIgnition\\Facades\\Flare',
                ],
        ],
];
