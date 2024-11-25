<?php
/* @noinspection ALL */

// @formatter:off
// phpcs:ignoreFile

/**
 * A helper file for Laravel, to provide autocomplete information to your IDE
 * Generated for Laravel 11.33.2.
 *
 * This file should not be included in your code, only analyzed by your IDE!
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 * @see https://github.com/barryvdh/laravel-ide-helper
 */

namespace Livewire {
            /**
     *
     *
     * @see \Livewire\LivewireManager
     */        class Livewire {
                    /**
         *
         *
         * @static
         */        public static function setProvider($provider)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->setProvider($provider);
        }
                    /**
         *
         *
         * @static
         */        public static function provide($callback)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->provide($callback);
        }
                    /**
         *
         *
         * @static
         */        public static function component($name, $class = null)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->component($name, $class);
        }
                    /**
         *
         *
         * @static
         */        public static function componentHook($hook)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->componentHook($hook);
        }
                    /**
         *
         *
         * @static
         */        public static function propertySynthesizer($synth)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->propertySynthesizer($synth);
        }
                    /**
         *
         *
         * @static
         */        public static function directive($name, $callback)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->directive($name, $callback);
        }
                    /**
         *
         *
         * @static
         */        public static function precompiler($callback)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->precompiler($callback);
        }
                    /**
         *
         *
         * @static
         */        public static function new($name, $id = null)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->new($name, $id);
        }
                    /**
         *
         *
         * @static
         */        public static function isDiscoverable($componentNameOrClass)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->isDiscoverable($componentNameOrClass);
        }
                    /**
         *
         *
         * @static
         */        public static function resolveMissingComponent($resolver)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->resolveMissingComponent($resolver);
        }
                    /**
         *
         *
         * @static
         */        public static function mount($name, $params = [], $key = null)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->mount($name, $params, $key);
        }
                    /**
         *
         *
         * @static
         */        public static function snapshot($component)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->snapshot($component);
        }
                    /**
         *
         *
         * @static
         */        public static function fromSnapshot($snapshot)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->fromSnapshot($snapshot);
        }
                    /**
         *
         *
         * @static
         */        public static function listen($eventName, $callback)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->listen($eventName, $callback);
        }
                    /**
         *
         *
         * @static
         */        public static function current()
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->current();
        }
                    /**
         *
         *
         * @static
         */        public static function update($snapshot, $diff, $calls)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->update($snapshot, $diff, $calls);
        }
                    /**
         *
         *
         * @static
         */        public static function updateProperty($component, $path, $value)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->updateProperty($component, $path, $value);
        }
                    /**
         *
         *
         * @static
         */        public static function isLivewireRequest()
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->isLivewireRequest();
        }
                    /**
         *
         *
         * @static
         */        public static function componentHasBeenRendered()
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->componentHasBeenRendered();
        }
                    /**
         *
         *
         * @static
         */        public static function forceAssetInjection()
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->forceAssetInjection();
        }
                    /**
         *
         *
         * @static
         */        public static function setUpdateRoute($callback)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->setUpdateRoute($callback);
        }
                    /**
         *
         *
         * @static
         */        public static function getUpdateUri()
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->getUpdateUri();
        }
                    /**
         *
         *
         * @static
         */        public static function setScriptRoute($callback)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->setScriptRoute($callback);
        }
                    /**
         *
         *
         * @static
         */        public static function useScriptTagAttributes($attributes)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->useScriptTagAttributes($attributes);
        }
                    /**
         *
         *
         * @static
         */        public static function withUrlParams($params)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->withUrlParams($params);
        }
                    /**
         *
         *
         * @static
         */        public static function withQueryParams($params)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->withQueryParams($params);
        }
                    /**
         *
         *
         * @static
         */        public static function withCookie($name, $value)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->withCookie($name, $value);
        }
                    /**
         *
         *
         * @static
         */        public static function withCookies($cookies)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->withCookies($cookies);
        }
                    /**
         *
         *
         * @static
         */        public static function withHeaders($headers)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->withHeaders($headers);
        }
                    /**
         *
         *
         * @static
         */        public static function withoutLazyLoading()
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->withoutLazyLoading();
        }
                    /**
         *
         *
         * @static
         */        public static function test($name, $params = [])
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->test($name, $params);
        }
                    /**
         *
         *
         * @static
         */        public static function visit($name)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->visit($name);
        }
                    /**
         *
         *
         * @static
         */        public static function actingAs($user, $driver = null)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->actingAs($user, $driver);
        }
                    /**
         *
         *
         * @static
         */        public static function isRunningServerless()
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->isRunningServerless();
        }
                    /**
         *
         *
         * @static
         */        public static function addPersistentMiddleware($middleware)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->addPersistentMiddleware($middleware);
        }
                    /**
         *
         *
         * @static
         */        public static function setPersistentMiddleware($middleware)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->setPersistentMiddleware($middleware);
        }
                    /**
         *
         *
         * @static
         */        public static function getPersistentMiddleware()
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->getPersistentMiddleware();
        }
                    /**
         *
         *
         * @static
         */        public static function flushState()
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->flushState();
        }
                    /**
         *
         *
         * @static
         */        public static function originalUrl()
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->originalUrl();
        }
                    /**
         *
         *
         * @static
         */        public static function originalPath()
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->originalPath();
        }
                    /**
         *
         *
         * @static
         */        public static function originalMethod()
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->originalMethod();
        }
            }
    }

namespace Spatie\LaravelIgnition\Facades {
            /**
     *
     *
     * @see \Spatie\FlareClient\Flare
     */        class Flare {
                    /**
         *
         *
         * @static
         */        public static function make($apiKey = null, $contextDetector = null)
        {
                        return \Spatie\FlareClient\Flare::make($apiKey, $contextDetector);
        }
                    /**
         *
         *
         * @static
         */        public static function setApiToken($apiToken)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->setApiToken($apiToken);
        }
                    /**
         *
         *
         * @static
         */        public static function apiTokenSet()
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->apiTokenSet();
        }
                    /**
         *
         *
         * @static
         */        public static function setBaseUrl($baseUrl)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->setBaseUrl($baseUrl);
        }
                    /**
         *
         *
         * @static
         */        public static function setStage($stage)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->setStage($stage);
        }
                    /**
         *
         *
         * @static
         */        public static function sendReportsImmediately()
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->sendReportsImmediately();
        }
                    /**
         *
         *
         * @static
         */        public static function determineVersionUsing($determineVersionCallable)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->determineVersionUsing($determineVersionCallable);
        }
                    /**
         *
         *
         * @static
         */        public static function reportErrorLevels($reportErrorLevels)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->reportErrorLevels($reportErrorLevels);
        }
                    /**
         *
         *
         * @static
         */        public static function filterExceptionsUsing($filterExceptionsCallable)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->filterExceptionsUsing($filterExceptionsCallable);
        }
                    /**
         *
         *
         * @static
         */        public static function filterReportsUsing($filterReportsCallable)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->filterReportsUsing($filterReportsCallable);
        }
                    /**
         *
         *
         * @param array<class-string<ArgumentReducer>|ArgumentReducer>|\Spatie\Backtrace\Arguments\ArgumentReducers|null $argumentReducers
         * @static
         */        public static function argumentReducers($argumentReducers)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->argumentReducers($argumentReducers);
        }
                    /**
         *
         *
         * @static
         */        public static function withStackFrameArguments($withStackFrameArguments = true, $forcePHPIniSetting = false)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->withStackFrameArguments($withStackFrameArguments, $forcePHPIniSetting);
        }
                    /**
         *
         *
         * @static
         */        public static function version()
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->version();
        }
                    /**
         *
         *
         * @return array<int, FlareMiddleware|class-string<FlareMiddleware>>
         * @static
         */        public static function getMiddleware()
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->getMiddleware();
        }
                    /**
         *
         *
         * @static
         */        public static function setContextProviderDetector($contextDetector)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->setContextProviderDetector($contextDetector);
        }
                    /**
         *
         *
         * @static
         */        public static function setContainer($container)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->setContainer($container);
        }
                    /**
         *
         *
         * @static
         */        public static function registerFlareHandlers()
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->registerFlareHandlers();
        }
                    /**
         *
         *
         * @static
         */        public static function registerExceptionHandler()
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->registerExceptionHandler();
        }
                    /**
         *
         *
         * @static
         */        public static function registerErrorHandler($errorLevels = null)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->registerErrorHandler($errorLevels);
        }
                    /**
         *
         *
         * @param \Spatie\FlareClient\FlareMiddleware\FlareMiddleware|array<FlareMiddleware>|\Spatie\FlareClient\class-string<FlareMiddleware>|callable $middleware
         * @return \Spatie\FlareClient\Flare
         * @static
         */        public static function registerMiddleware($middleware)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->registerMiddleware($middleware);
        }
                    /**
         *
         *
         * @return array<int,FlareMiddleware|class-string<FlareMiddleware>>
         * @static
         */        public static function getMiddlewares()
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->getMiddlewares();
        }
                    /**
         *
         *
         * @param string $name
         * @param string $messageLevel
         * @param array<int, mixed> $metaData
         * @return \Spatie\FlareClient\Flare
         * @static
         */        public static function glow($name, $messageLevel = 'info', $metaData = [])
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->glow($name, $messageLevel, $metaData);
        }
                    /**
         *
         *
         * @static
         */        public static function handleException($throwable)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->handleException($throwable);
        }
                    /**
         *
         *
         * @return mixed
         * @static
         */        public static function handleError($code, $message, $file = '', $line = 0)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->handleError($code, $message, $file, $line);
        }
                    /**
         *
         *
         * @static
         */        public static function applicationPath($applicationPath)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->applicationPath($applicationPath);
        }
                    /**
         *
         *
         * @static
         */        public static function report($throwable, $callback = null, $report = null, $handled = null)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->report($throwable, $callback, $report, $handled);
        }
                    /**
         *
         *
         * @static
         */        public static function reportHandled($throwable)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->reportHandled($throwable);
        }
                    /**
         *
         *
         * @static
         */        public static function reportMessage($message, $logLevel, $callback = null)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->reportMessage($message, $logLevel, $callback);
        }
                    /**
         *
         *
         * @static
         */        public static function sendTestReport($throwable)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->sendTestReport($throwable);
        }
                    /**
         *
         *
         * @static
         */        public static function reset()
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->reset();
        }
                    /**
         *
         *
         * @static
         */        public static function anonymizeIp()
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->anonymizeIp();
        }
                    /**
         *
         *
         * @param array<int, string> $fieldNames
         * @return \Spatie\FlareClient\Flare
         * @static
         */        public static function censorRequestBodyFields($fieldNames)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->censorRequestBodyFields($fieldNames);
        }
                    /**
         *
         *
         * @static
         */        public static function createReport($throwable)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->createReport($throwable);
        }
                    /**
         *
         *
         * @static
         */        public static function createReportFromMessage($message, $logLevel)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->createReportFromMessage($message, $logLevel);
        }
                    /**
         *
         *
         * @static
         */        public static function stage($stage)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->stage($stage);
        }
                    /**
         *
         *
         * @static
         */        public static function messageLevel($messageLevel)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->messageLevel($messageLevel);
        }
                    /**
         *
         *
         * @param string $groupName
         * @param mixed $default
         * @return array<int, mixed>
         * @static
         */        public static function getGroup($groupName = 'context', $default = [])
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->getGroup($groupName, $default);
        }
                    /**
         *
         *
         * @static
         */        public static function context($key, $value)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->context($key, $value);
        }
                    /**
         *
         *
         * @param string $groupName
         * @param array<string, mixed> $properties
         * @return \Spatie\FlareClient\Flare
         * @static
         */        public static function group($groupName, $properties)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->group($groupName, $properties);
        }
            }
    }

namespace Illuminate\Http {
            /**
     *
     *
     */        class Request {
                    /**
         *
         *
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestValidation()
         * @param array $rules
         * @param mixed $params
         * @static
         */        public static function validate($rules, ...$params)
        {
                        return \Illuminate\Http\Request::validate($rules, ...$params);
        }
                    /**
         *
         *
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestValidation()
         * @param string $errorBag
         * @param array $rules
         * @param mixed $params
         * @static
         */        public static function validateWithBag($errorBag, $rules, ...$params)
        {
                        return \Illuminate\Http\Request::validateWithBag($errorBag, $rules, ...$params);
        }
                    /**
         *
         *
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestSignatureValidation()
         * @param mixed $absolute
         * @static
         */        public static function hasValidSignature($absolute = true)
        {
                        return \Illuminate\Http\Request::hasValidSignature($absolute);
        }
                    /**
         *
         *
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestSignatureValidation()
         * @static
         */        public static function hasValidRelativeSignature()
        {
                        return \Illuminate\Http\Request::hasValidRelativeSignature();
        }
                    /**
         *
         *
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestSignatureValidation()
         * @param mixed $ignoreQuery
         * @param mixed $absolute
         * @static
         */        public static function hasValidSignatureWhileIgnoring($ignoreQuery = [], $absolute = true)
        {
                        return \Illuminate\Http\Request::hasValidSignatureWhileIgnoring($ignoreQuery, $absolute);
        }
                    /**
         *
         *
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestSignatureValidation()
         * @param mixed $ignoreQuery
         * @static
         */        public static function hasValidRelativeSignatureWhileIgnoring($ignoreQuery = [])
        {
                        return \Illuminate\Http\Request::hasValidRelativeSignatureWhileIgnoring($ignoreQuery);
        }
            }
            /**
     *
     *
     */        class RedirectResponse {
                    /**
         *
         *
         * @see \Laravel\Jetstream\JetstreamServiceProvider::boot()
         * @param mixed $message
         * @static
         */        public static function banner($message)
        {
                        return \Illuminate\Http\RedirectResponse::banner($message);
        }
                    /**
         *
         *
         * @see \Laravel\Jetstream\JetstreamServiceProvider::boot()
         * @param mixed $message
         * @static
         */        public static function warningBanner($message)
        {
                        return \Illuminate\Http\RedirectResponse::warningBanner($message);
        }
                    /**
         *
         *
         * @see \Laravel\Jetstream\JetstreamServiceProvider::boot()
         * @param mixed $message
         * @static
         */        public static function dangerBanner($message)
        {
                        return \Illuminate\Http\RedirectResponse::dangerBanner($message);
        }
            }
    }

namespace Illuminate\Routing {
            /**
     *
     *
     */        class Route {
                    /**
         *
         *
         * @see \Livewire\Features\SupportLazyLoading\SupportLazyLoading::registerRouteMacro()
         * @param mixed $enabled
         * @static
         */        public static function lazy($enabled = true)
        {
                        return \Illuminate\Routing\Route::lazy($enabled);
        }
            }
    }

namespace Illuminate\View {
            /**
     *
     *
     */        class ComponentAttributeBag {
                    /**
         *
         *
         * @see \Livewire\Features\SupportBladeAttributes\SupportBladeAttributes::provide()
         * @param mixed $name
         * @static
         */        public static function wire($name)
        {
                        return \Illuminate\View\ComponentAttributeBag::wire($name);
        }
            }
            /**
     *
     *
     */        class View {
                    /**
         *
         *
         * @see \Livewire\Features\SupportPageComponents\SupportPageComponents::registerLayoutViewMacros()
         * @param mixed $data
         * @static
         */        public static function layoutData($data = [])
        {
                        return \Illuminate\View\View::layoutData($data);
        }
                    /**
         *
         *
         * @see \Livewire\Features\SupportPageComponents\SupportPageComponents::registerLayoutViewMacros()
         * @param mixed $section
         * @static
         */        public static function section($section)
        {
                        return \Illuminate\View\View::section($section);
        }
                    /**
         *
         *
         * @see \Livewire\Features\SupportPageComponents\SupportPageComponents::registerLayoutViewMacros()
         * @param mixed $title
         * @static
         */        public static function title($title)
        {
                        return \Illuminate\View\View::title($title);
        }
                    /**
         *
         *
         * @see \Livewire\Features\SupportPageComponents\SupportPageComponents::registerLayoutViewMacros()
         * @param mixed $slot
         * @static
         */        public static function slot($slot)
        {
                        return \Illuminate\View\View::slot($slot);
        }
                    /**
         *
         *
         * @see \Livewire\Features\SupportPageComponents\SupportPageComponents::registerLayoutViewMacros()
         * @param mixed $view
         * @param mixed $params
         * @static
         */        public static function extends($view, $params = [])
        {
                        return \Illuminate\View\View::extends($view, $params);
        }
                    /**
         *
         *
         * @see \Livewire\Features\SupportPageComponents\SupportPageComponents::registerLayoutViewMacros()
         * @param mixed $view
         * @param mixed $params
         * @static
         */        public static function layout($view, $params = [])
        {
                        return \Illuminate\View\View::layout($view, $params);
        }
                    /**
         *
         *
         * @see \Livewire\Features\SupportPageComponents\SupportPageComponents::registerLayoutViewMacros()
         * @param callable $callback
         * @static
         */        public static function response($callback)
        {
                        return \Illuminate\View\View::response($callback);
        }
            }
    }


namespace  {
            class MaterializeTemplate extends \App\Helpers\MaterializeTemplate {}
            class Livewire extends \Livewire\Livewire {}
            class Flare extends \Spatie\LaravelIgnition\Facades\Flare {}
    }



namespace {


use Illuminate\Support\Arr;use Illuminate\Support\Env;use Illuminate\Support\Str;use Illuminate\Support\Once;use Illuminate\Support\Sleep;use Illuminate\Support\Fluent;use Illuminate\Support\Onceable;use Illuminate\Support\Optional;use Illuminate\Contracts\Support\Htmlable;use Illuminate\Support\HigherOrderTapProxy;use Illuminate\Contracts\Support\DeferringDisplayableValue;

if (! function_exists('append_config')) {
    /**
     * Assign high numeric IDs to a config item to force appending.
     *
     * @param  array  $array
     * @return array
     */
    function append_config(array $array)
    {
        $start = 9999;

        foreach ($array as $key => $value) {
            if (is_numeric($key)) {
                $start++;

                $array[$start] = Arr::pull($array, $key);
            }
        }

        return $array;
    }
}

if (! function_exists('blank')) {
    /**
     * Determine if the given value is "blank".
     *
     * @phpstan-assert-if-false !=null|'' $value
     *
     * @phpstan-assert-if-true !=numeric|bool $value
     *
     * @param  mixed  $value
     * @return bool
     */
    function blank($value)
    {
        if (is_null($value)) {
            return true;
        }

        if (is_string($value)) {
            return trim($value) === '';
        }

        if (is_numeric($value) || is_bool($value)) {
            return false;
        }

        if ($value instanceof Countable) {
            return count($value) === 0;
        }

        if ($value instanceof Stringable) {
            return trim((string) $value) === '';
        }

        return empty($value);
    }
}

if (! function_exists('class_basename')) {
    /**
     * Get the class "basename" of the given object / class.
     *
     * @param  string|object  $class
     * @return string
     */
    function class_basename($class)
    {
        $class = is_object($class) ? get_class($class) : $class;

        return basename(str_replace('\\', '/', $class));
    }
}

if (! function_exists('class_uses_recursive')) {
    /**
     * Returns all traits used by a class, its parent classes and trait of their traits.
     *
     * @param  object|string  $class
     * @return array
     */
    function class_uses_recursive($class)
    {
        if (is_object($class)) {
            $class = get_class($class);
        }

        $results = [];

        foreach (array_reverse(class_parents($class) ?: []) + [$class => $class] as $class) {
            $results += trait_uses_recursive($class);
        }

        return array_unique($results);
    }
}

if (! function_exists('e')) {
    /**
     * Encode HTML special characters in a string.
     *
     * @param  \Illuminate\Contracts\Support\DeferringDisplayableValue|\Illuminate\Contracts\Support\Htmlable|\BackedEnum|string|int|float|null  $value
     * @param  bool  $doubleEncode
     * @return string
     */
    function e($value, $doubleEncode = true)
    {
        if ($value instanceof DeferringDisplayableValue) {
            $value = $value->resolveDisplayableValue();
        }

        if ($value instanceof Htmlable) {
            return $value->toHtml();
        }

        if ($value instanceof BackedEnum) {
            $value = $value->value;
        }

        return htmlspecialchars($value ?? '', ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8', $doubleEncode);
    }
}

if (! function_exists('env')) {
    /**
     * Gets the value of an environment variable.
     *
     * @param  string  $key
     * @param  mixed  $default
     * @return mixed
     */
    function env($key, $default = null)
    {
        return Env::get($key, $default);
    }
}

if (! function_exists('filled')) {
    /**
     * Determine if a value is "filled".
     *
     * @phpstan-assert-if-true !=null|'' $value
     *
     * @phpstan-assert-if-false !=numeric|bool $value
     *
     * @param  mixed  $value
     * @return bool
     */
    function filled($value)
    {
        return ! blank($value);
    }
}

if (! function_exists('fluent')) {
    /**
     * Create an Fluent object from the given value.
     *
     * @param  object|array  $value
     * @return \Illuminate\Support\Fluent
     */
    function fluent($value)
    {
        return new Fluent($value);
    }
}

if (! function_exists('literal')) {
    /**
     * Return a new literal or anonymous object using named arguments.
     *
     * @return \stdClass
     */
    function literal(...$arguments)
    {
        if (count($arguments) === 1 && array_is_list($arguments)) {
            return $arguments[0];
        }

        return (object) $arguments;
    }
}

if (! function_exists('object_get')) {
    /**
     * Get an item from an object using "dot" notation.
     *
     * @template TValue of object
     *
     * @param  TValue  $object
     * @param  string|null  $key
     * @param  mixed  $default
     * @return ($key is empty ? TValue : mixed)
     */
    function object_get($object, $key, $default = null)
    {
        if (is_null($key) || trim($key) === '') {
            return $object;
        }

        foreach (explode('.', $key) as $segment) {
            if (! is_object($object) || ! isset($object->{$segment})) {
                return value($default);
            }

            $object = $object->{$segment};
        }

        return $object;
    }
}

if (! function_exists('once')) {
    /**
     * Ensures a callable is only called once, and returns the result on subsequent calls.
     *
     * @template  TReturnType
     *
     * @param  callable(): TReturnType  $callback
     * @return TReturnType
     */
    function once(callable $callback)
    {
        $onceable = Onceable::tryFromTrace(
            debug_backtrace(DEBUG_BACKTRACE_PROVIDE_OBJECT, 2),
            $callback,
        );

        return $onceable ? Once::instance()->value($onceable) : call_user_func($callback);
    }
}

if (! function_exists('optional')) {
    /**
     * Provide access to optional objects.
     *
     * @template TValue
     * @template TReturn
     *
     * @param  TValue  $value
     * @param  (callable(TValue): TReturn)|null  $callback
     * @return ($callback is null ? \Illuminate\Support\Optional : ($value is null ? null : TReturn))
     */
    function optional($value = null, ?callable $callback = null)
    {
        if (is_null($callback)) {
            return new Optional($value);
        } elseif (! is_null($value)) {
            return $callback($value);
        }
    }
}

if (! function_exists('preg_replace_array')) {
    /**
     * Replace a given pattern with each value in the array in sequentially.
     *
     * @param  string  $pattern
     * @param  array  $replacements
     * @param  string  $subject
     * @return string
     */
    function preg_replace_array($pattern, array $replacements, $subject)
    {
        return preg_replace_callback($pattern, function () use (&$replacements) {
            foreach ($replacements as $value) {
                return array_shift($replacements);
            }
        }, $subject);
    }
}

if (! function_exists('retry')) {
    /**
     * Retry an operation a given number of times.
     *
     * @template TValue
     *
     * @param  int|array<int, int>  $times
     * @param  callable(int): TValue  $callback
     * @param  int|\Closure(int, \Throwable): int  $sleepMilliseconds
     * @param  (callable(\Throwable): bool)|null  $when
     * @return TValue
     *
     * @throws \Throwable
     */
    function retry($times, callable $callback, $sleepMilliseconds = 0, $when = null)
    {
        $attempts = 0;

        $backoff = [];

        if (is_array($times)) {
            $backoff = $times;

            $times = count($times) + 1;
        }

        beginning:
        $attempts++;
        $times--;

        try {
            return $callback($attempts);
        } catch (Throwable $e) {
            if ($times < 1 || ($when && ! $when($e))) {
                throw $e;
            }

            $sleepMilliseconds = $backoff[$attempts - 1] ?? $sleepMilliseconds;

            if ($sleepMilliseconds) {
                Sleep::usleep(value($sleepMilliseconds, $attempts, $e) * 1000);
            }

            goto beginning;
        }
    }
}

if (! function_exists('str')) {
    /**
     * Get a new stringable object from the given string.
     *
     * @param  string|null  $string
     * @return ($string is null ? object : \Illuminate\Support\Stringable)
     */
    function str($string = null)
    {
        if (func_num_args() === 0) {
            return new class
            {
                public function __call($method, $parameters)
                {
                    return Str::$method(...$parameters);
                }

                public function __toString()
                {
                    return '';
                }
            };
        }

        return Str::of($string);
    }
}

if (! function_exists('tap')) {
    /**
     * Call the given Closure with the given value then return the value.
     *
     * @template TValue
     *
     * @param  TValue  $value
     * @param  (callable(TValue): mixed)|null  $callback
     * @return ($callback is null ? \Illuminate\Support\HigherOrderTapProxy : TValue)
     */
    function tap($value, $callback = null)
    {
        if (is_null($callback)) {
            return new HigherOrderTapProxy($value);
        }

        $callback($value);

        return $value;
    }
}

if (! function_exists('throw_if')) {
    /**
     * Throw the given exception if the given condition is true.
     *
     * @template TValue
     * @template TException of \Throwable
     *
     * @param  TValue  $condition
     * @param  TException|class-string<TException>|string  $exception
     * @param  mixed  ...$parameters
     * @return ($condition is true ? never : ($condition is non-empty-mixed ? never : TValue))
     *
     * @throws TException
     */
    function throw_if($condition, $exception = 'RuntimeException', ...$parameters)
    {
        if ($condition) {
            if (is_string($exception) && class_exists($exception)) {
                $exception = new $exception(...$parameters);
            }

            throw is_string($exception) ? new RuntimeException($exception) : $exception;
        }

        return $condition;
    }
}

if (! function_exists('throw_unless')) {
    /**
     * Throw the given exception unless the given condition is true.
     *
     * @template TValue
     * @template TException of \Throwable
     *
     * @param  TValue  $condition
     * @param  TException|class-string<TException>|string  $exception
     * @param  mixed  ...$parameters
     * @return ($condition is false ? never : ($condition is non-empty-mixed ? TValue : never))
     *
     * @throws TException
     */
    function throw_unless($condition, $exception = 'RuntimeException', ...$parameters)
    {
        throw_if(! $condition, $exception, ...$parameters);

        return $condition;
    }
}

if (! function_exists('trait_uses_recursive')) {
    /**
     * Returns all traits used by a trait and its traits.
     *
     * @param  object|string  $trait
     * @return array
     */
    function trait_uses_recursive($trait)
    {
        $traits = class_uses($trait) ?: [];

        foreach ($traits as $trait) {
            $traits += trait_uses_recursive($trait);
        }

        return $traits;
    }
}

if (! function_exists('transform')) {
    /**
     * Transform the given value if it is present.
     *
     * @template TValue
     * @template TReturn
     * @template TDefault
     *
     * @param  TValue  $value
     * @param  callable(TValue): TReturn  $callback
     * @param  TDefault|callable(TValue): TDefault  $default
     * @return ($value is empty ? TDefault : TReturn)
     */
    function transform($value, callable $callback, $default = null)
    {
        if (filled($value)) {
            return $callback($value);
        }

        if (is_callable($default)) {
            return $default($value);
        }

        return $default;
    }
}

if (! function_exists('windows_os')) {
    /**
     * Determine whether the current environment is Windows based.
     *
     * @return bool
     */
    function windows_os()
    {
        return PHP_OS_FAMILY === 'Windows';
    }
}

if (! function_exists('with')) {
    /**
     * Return the given value, optionally passed through the given callback.
     *
     * @template TValue
     * @template TReturn
     *
     * @param  TValue  $value
     * @param  (callable(TValue): (TReturn))|null  $callback
     * @return ($callback is null ? TValue : TReturn)
     */
    function with($value, ?callable $callback = null)
    {
        return is_null($callback) ? $value : $callback($value);
    }
}
}

namespace Illuminate\Support {
    /**
     * Methods commonly used in migrations
     *
     * @method Fluent after(string $column) Add the after modifier
     * @method Fluent charset(string $charset) Add the character set modifier
     * @method Fluent collation(string $collation) Add the collation modifier
     * @method Fluent comment(string $comment) Add comment
     * @method Fluent default($value) Add the default modifier
     * @method Fluent first() Select first row
     * @method Fluent index(string $name = null) Add the in dex clause
     * @method Fluent on(string $table) `on` of a foreign key
     * @method Fluent onDelete(string $action) `on delete` of a foreign key
     * @method Fluent onUpdate(string $action) `on update` of a foreign key
     * @method Fluent primary() Add the primary key modifier
     * @method Fluent references(string $column) `references` of a foreign key
     * @method Fluent nullable(bool $value = true) Add the nullable modifier
     * @method Fluent unique(string $name = null) Add unique index clause
     * @method Fluent unsigned() Add the unsigned modifier
     * @method Fluent useCurrent() Add the default timestamp value
     * @method Fluent change() Add the change modifier
     */
    class Fluent {}
}

