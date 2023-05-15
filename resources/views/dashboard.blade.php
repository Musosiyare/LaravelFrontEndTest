<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div>
        <div>
            <nav class="shadow-xl p-4 bg-slate-800 text-white">
                <h1 class="font-bold text-xl text-gray-400">Side bar <span
                        class="text-orange-600 italic cursor-pointer">Learning</span>
                </h1>
                <div class="">
                    <ul class="flex justify-end gap-7 text-gray-400 font-bold">
                        <li>
                            <a href="http://" class="hover:text-white"><i class="fa fa-envelope "></i></a>
                        <li>
                            <a href="http://" class="hover:text-white"><i class="fa fa-bell"></i></a>
                        <li>
                            <a href="http://" class="hover:text-white"><i class="fa fa-user-plus"></i></a>
                    </ul>
                </div>
        </div>
        </nav>

        <div class="grid grid-cols-12 h-screen">
            <div class="sidebar md:col-span-1 bg-slate-600">
                <a href="#" class="block text-gray-400 hover:text-white mt-5 text-center text-xl">
                    <i class="fa fa-bars"></i>
                </a>
                <ul class="mt-10 list-disc list-inside text-xl">
                    <li class="hidden text-gray-400 mx-2 list-none font-semibold my-4 cursor-pointer hover:text-white">
                        <i class="fa fa-user-o"></i>
                        <span class="ml-2">xx</span>
                    </li>

                    <li class="hidden text-gray-400 mx-2 list-none font-semibold my-4 cursor-pointer hover:text-white ">
                        <i class="fa fa-star"></i>
                        <span class="ml-2">xx</span>
                    </li>

                    <li class="hidden text-gray-400 mx-2 list-none font-semibold my-4 cursor-pointer hover:text-white">
                        <i class="fa fa-cog"></i>
                        <span class="ml-2">xx</span>
                    </li>

                    <li class="hidden text-gray-400 mx-2 list-none font-semibold my-4 cursor-pointer hover:text-white">
                        <i class="fa fa-file"></i>
                        <span class="ml-2">xx</span>
                    </li>

                    <li class="hidden text-gray-400 mx-2 list-none font-semibold my-4 cursor-pointer hover:text-white">
                        <i class="fa fa-sign-out"></i>
                        <span class="ml-2">xx</span>
                    </li>

                </ul>
            </div>
            <div class="col-span-11 shadow-xl">
                <p class="mx-3 my-3 font-semibold ">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, totam! Quibusdam voluptates
                    laudantium doloribus praesentium possimus eligendi tempore perspiciatis sed deleniti reiciendis.
                    Fuga voluptates sunt officiis illum odio alias iure?
                </p>
            </div>
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