
<?php

if (!function_exists('asset_url')){
    function asset_url($path){
        return app('url')->asset('public/'.$path);
    }
}

