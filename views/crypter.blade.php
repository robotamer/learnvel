<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Lernvel: A demo app for the Laravel Framework For Web Artisans</title>
        <meta name="viewport" content="width=device-width">
        {{ HTML::style('laravel/css/style.css') }}
    </head>
    <body>
        <div class="wrapper">
            <header>
                <h1><img src="http://static.s7.riky.net/img/robotamer90x110.gif" alt="RT" /> Lernvel</h1><h2>A learning bundle for the Laravel Framework</h2><h3>Working With Encryption <a href="http://laravel.com/docs/encryption" target="_blank">=></a></h3>
                <p class="intro-text" style="margin-top: 45px;">
                    This file is located at:
                </p>
                <pre>~/laravel/bundles/learnvel/views/lobby.blade.php</pre>
            </header>
            <div role="main" class="main">
                <div class="home">
                    <pre>$encrypted = Crypter::encrypt('Scrable Me Please);</pre>
                    <p>
                        {{ $encrypted = Crypter::encrypt('Scramble Me Please') }}
                    </p>
                    <hr />
                    <pre>echo Crypter::decrypt($encrypted);</pre>
                    <p>
                        <strong>Result:</strong> {{ Crypter::decrypt($encrypted); }}
                    </p>
                    <p>
                        <a href="{{ URL::to('/learnvel') }}">Back to Learnvel Lobby</a>
                    </p>
                    <ul class="out-links">
                        <li>
                            <a href="http://github.com/robotamer/lernvel">Lernvel Repository</a>
                        </li>
                        <li>
                            <a href="http://laravel.com">Laravel Website</a>
                        </li>
                        <li>
                            <a href="http://forums.laravel.com">Laravel Forums</a>
                        </li>
                        <li>
                            <a href="http://github.com/laravel/laravel">Laravel Repository</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>
