

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    
    <!-- get bootstrap css1 js1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
    .log_inbox_container {
        width: 100%;
        height : 100vh;
        display : grid;
        place-items: center;
        background: rgba(243, 244 ,246 ,1)
    }
    .log_inbox {
        width: 380px;
        padding: 30px;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        background-color : #fff;
    }
    .btn {
        color : #fff;
        background-color: #6571ff;
        padding: 7px 15px;
        border: 1px solid #6571ff !important;
    }
    .form-group .form-control {

    }

</style>
<body>
    <div class="log_inbox_container">
        <div class="log_inbox">
            <form  method="POST" action="{{ route('login') }}">
            @csrf
                <h4 class="mb-2">Hello - {{$showUserdata -> firstname}}</h4>
                <div class="form-group">
                    <div>
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full form-control rounded-0 shadow-none outline-none" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" />

                        <x-text-input id="password" class="form-control block mt-1 w-full rounded-0 shadow-none outline-none"
                                        type="password"
                                        name="password"
                                        required autocomplete="current-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                </div>
                <div class="d-flex justify-content-end mt-3">
                    <button class="btn btn-primary rounded-1 shadow-none outline-none">{{ __('Log in') }}</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>