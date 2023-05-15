<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sidebar Navigation</title>
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://cdn.tailwindcss.com"></script>
    </head>

    <body>
    <div class="container">
        <div class="sidebar bg-gray-900 w-32 h-screen fixed top-0 left-0">
            <a href="#" class="block text-gray-400 hover:text-white mt-5 text-center text-xl">
                <i class="fa fa-bars"></i>
            </a>
            <ul class="mt-10 list-disc list-inside">
                <li class="hidden text-gray-400 mx-2 list-none font-semibold my-4 cursor-pointer hover:text-white">
                    <i class="fa fa-user"></i>
                    <span class="ml-2">User</span>
                </li>

                <li class="hidden text-gray-400 mx-2 list-none font-semibold my-4 cursor-pointer hover:text-white">
                    <i class="fa fa-star"></i>
                    <span class="ml-2">Star</span>
                </li>

                <li class="hidden text-gray-400 mx-2 list-none font-semibold my-4 cursor-pointer hover:text-white">
                    <i class="fa fa-cog"></i>
                    <span class="ml-2">Settings</span>
                </li>

                <li class="hidden text-gray-400 mx-2 list-none font-semibold my-4 cursor-pointer hover:text-white">
                    <i class="fa fa-file"></i>
                    <span class="ml-2">Documents</span>
                </li>
            </ul>
        </div>
        <div class="p-5 w-full">
            <nav class="shadow-xl text-gray-900">
                <ul class="nav nav-tabs flex justify-end gap-3">
                    <li class="nav-item my-4 mx-2">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                            aria-controls="home" aria-selected="true">Home</a>
                    </li>
                    <li class="nav-item my-4 mx-2">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                            aria-controls="profile" aria-selected="false">Profile</a>
                    </li>
                    <li class="nav-item my-4 mx-2">
                        <a class="nav-link" id="messages-tab" data-toggle="tab" href="#messages" role="tab"
                            aria-controls="messages" aria-selected="false">Messages</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla vitae voluptates itaque quam ut! Ex vero incidunt pariatur, doloremque minima voluptates tempore labore aliquid at accusantium. Recusandae sit consectetur ipsum!</p>
        </div>
    </div>
    </body>

    <script>
        const sidebar = document.querySelector('.sidebar');
                const menuItems = document.querySelectorAll('.sidebar ul li');
                sidebar.addEventListener('click', () => {
                  menuItems.forEach((item) => {
                    item.classList.toggle('hidden');
                  });
                });
    </script>

    </html>