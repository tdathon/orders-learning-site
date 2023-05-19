<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/home.css">
</head>
<x-layout :header="$header">
<body>
{{-- headerspacer exists to space the body between the menu --}}
{{--1:09:10--}}
<br>
<div id="mainbody">
    <p style="text-align: center; padding-bottom: 0.25rem">This is a very basic website I created while learning Laravel/PHP.</p>
    <p style="text-align: center; padding-bottom: 0.25rem; padding-top:0.25rem">
        The website has <a href="/">this basic homepage</a>, <a href="/login">user authentication</a>, and a <a href="/sql">MySQL demo</a> with a mock customer database.
    </p>
    <p style="padding-top: 0.25rem">
        The website isn't very pretty, the purpose of creating the website was to learn more about PHP and Laravel,
        as I already know CSS. To run the site, I used a Docker container via Laravel Sail. As a result, the MySQL
        database is actually a Docker volume. I've had issues with saving my databases because of quirks in Windows 
        Subsystem for Linux, so you may need to run a migration to initialize everything. You also might have to seed
        the database too, I created factories to creaty dummy users and orders for the MySQL demo but I don't 
        know if artisan will run that automatically.
    </p>
</div>
<div id="doublecontain">
    <div class="procon" style="margin-right: 0.5rem">
    <h2 style="padding-bottom: 0rem">What I Learned</h2>
    <ul>
        <li>PHP Syntax: PHP seems to have a similar syntax to C# and Javascript,
            so it was easy for me to transition between them.</li>
        <li>Blade Syntax: Laravel's Blade templates make PHP even easier.</li>
        <li>MySQL: PHPMyAdmin helped a lot with this. I'm still learning the actual SQL language though.</li>
        <li>Laravel: The controller/views model was confusing at first, but I think I understand it now.</li>
        <li>Eloquent: I used Eloquent to make all my database models.</li>
        <li>Templates: I used a Blade template to make the top menu.</li>
        <li>Validation: All form fields are validated using the request buidler.</li>
        <li>Queries: There's a search function on the orders page.</li>
    </ul>
    </div>

    <div class="procon" style="margin-left: 0.5rem">
        <h2 style="padding-bottom: 0rem">What Needs Improvement</h2>
        <ul>
            <li>Docker/Sail: I had issues getting Sail to work properly on Windows.
                If I were to do this again I'd probably use XAMPP instead.</li>
                <li>CSS: I put almost no effort into the actual look of this site. All of the stylesheets 
                    were written by hand, hence why the theme is a bit all over the place. I thought 
                    about using Tailwind, but I couldn't get npm to install it correctly</li>
        </ul>
    </div>
</div>


</body>

</x-layout>
</html>