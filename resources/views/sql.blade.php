<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/sql.css">
</head>
<x-layout :header="$header">
<body>
    <div id="mainbody">
    <p style="text-align: center; padding-bottom: 0.25rem">I programmed a very basic MySQL app so I could 
        learn about SQL.</p>
        <p style="padding-top: 0.25rem">
            If you navigate to the <a href="/orders">Orders</a> tab you'll find a mock ledger with various customer
            purchases. The demo uses MySQL (of course) but the database itself is a Docker volume. 
            For some reason, I've been unable to properly save my databases, I think it's a conflict between Windows
            Subsystem for Linux and Laravel Sail. Because of this, you might have to initialize the demo with 
            "./vendor/bin/sail php artisan migrate" to create the database. I also created factories to make 
            random dummy orders. Feel free to seed the database while you are initializing it, but you can also
            add orders manually through the Orders page if seeding doesn't work.
        </p>

        <p style="padding-top: 0.25rem; margin-top:0rem">
            I had to remove pagination because of conflicts with Tailwind and npm. Functionally, it worked,
            but because Laravel uses Tailwind/Bootstrap to display pagination, I decided to remove
            it entirely.
        </p>

        <p style="padding-top: 0.25rem; margin-top:0rem">
            You'll have to log-in in order to see the /orders page. There's no default users, so you'll have
            to manually create one by going to /register. I considered adding unique order sheets for each individual
            user, but opted not to because this is supposed to be a basic demo. Instead, there's one datasheet shared
            by all users.
        </p>

        <p style="padding-top: 0.25rem; margin-top:0rem">
           Finally, if you want to access the MySQL database directly, I configured PHPMyAdmin on port 8080.
           It should be configured to have the default host, username, and password.
        </p>


    </div>
</body>

</x-layout>
</html>