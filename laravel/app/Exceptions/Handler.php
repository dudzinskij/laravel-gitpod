<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Illuminate\Auth\AuthenticationException;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Throwable  $exception
     * @return void
     *
     * @throws \Exception
     */
    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $exception)
    {

        if ($exception instanceof NotFoundHttpException && $request->wantsJson()) {
            return response()->json([
                'data' => 'Resource not found'
            ], 404);
        }

        if ($exception instanceof ModelNotFoundException) {
            return response()->json([
                'data' => 'Resource not found'
            ], 404);
        }

        if ($exception instanceof QueryException && $request->wantsJson()) {
            return response()->json([
                'message' => 'Bad Request'
            ], 400);
        }

        // return not authorized when application
        // tries to redirect to  the login route
        if ($exception instanceof RouteNotFoundException) {
            return response()->json([
                'message' => 'Not Authorized'
            ], 401);
        }

        return parent::render($request, $exception);
    }
}
