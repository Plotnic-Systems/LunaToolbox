<?php

use LunaToolbox\Framework\Illuminate\Support\Facades\Auth;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ config('app')->name }}</title>
    <link rel="stylesheet" href="{{ assets('/css/bootstrap.min.css') }}" />
</head>

<body>
    <div class="container">
        <div class="row justify-content-center align-items-center vh-100">
            <div class="col-md-6">
                <h1>Welcome to <span class="text-danger">{{ config('app')->name }}</span></h1>
                <div class="mb-4">
                    The <span class="text-danger">{{ config('app')->name }}</span> simple PHP Framework.
                </div>
                @if (Auth::user())
                <div class="mb-4">
                    <a href="/auth/logout">Logout</a>
                </div>
                @endif
                <div class="my-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                    </svg>
                    <a href="https://github.com/naventum/naventum" target="_blank" rel="noopener noreferrer"><span>github.com/plotnicsystems/lunatoolbox</span></a>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ assets('/assets/js/bootstrap.min.js') }}"></script>
</body>

</html>