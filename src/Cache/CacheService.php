<?php

namespace {

    use Max\Cache\Setter;

    if (false === function_exists('cache')) {
        /**
         * Cache操作
         * @return Setter
         */
        function cache()
        {
            return app('cache');
        }
    }

}


namespace Max\Cache {

    use Max\Contracts\Service;

    class CacheService extends Service
    {

        public function register()
        {
            app()->bind('cache', Setter::class);
        }

        public function boot()
        {
            app('config')->load('cache');
        }

    }

}


