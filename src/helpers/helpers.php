<?php
if (!function_exists('gocardless')) {
    /**
     * Get the Go Cardless instance.
     *
     * @return \Devop360Technologies\LaravelGoCardless\GoCardlessServiceProvider
     */
    function gocardless()
    {
        return app('GoCardless');
    }
}
