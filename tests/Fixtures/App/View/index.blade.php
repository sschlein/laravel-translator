<html lang="en">
    <head>
        <title>Laravel Translator</title>
    </head>
    <body>
        <div>
            @lang('Welcome, :name', [':name' => 'Arthur Dent'])
        </div>

        <div>
            {{ lang('Trip to :planet, check-in opens :time', [':place' => 'Argabuthon', ':time' => '9 days']) }}
        </div>

        <div>
            {{ __('Check offers to :planet', [':place' => 'Damogran']) }}
        </div>
    </body>
</html>