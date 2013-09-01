<?php
namespace Witooh\Error;

use Illuminate\Support\ServiceProvider;
use Response;

class ErrorServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

    public function boot()
    {
        $this->app->error(
            function (\ValidateException $e, $code) {
                return Response::json($e->getMessages(), $code);
            }
        );

        $this->app->error(
            function (\AuthenticateException $e, $code) {
                return Response::json($e->getMessage(), $e->getCode());
            }
        );

        $this->app->error(
            function (\NotFoundException $e, $code) {
                return Response::json($e->getMessage(), $e->getCode());
            }
        );

        $this->app->error(
            function (\PermissionException $e, $code) {
                return Response::json($e->getMessage(), $e->getCode());
            }
        );
    }

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}