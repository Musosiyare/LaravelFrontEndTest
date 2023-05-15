<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="{{ asset('css/tailwindcss.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div>
        <nav class="shadow-xl p-3 bg-slate-600 text-white border border-slate-500">
            <ul class="flex justify-between ">
                <li class="font-semibold text-xl">
                    <i class="fa fa-bars"></i>
                    Laravel <span class="text-orange-600">Website</span>
                </li>
                <div class="flex font-semibold gap-3 ">
                    <li class="hover:text-orange-600 cursor-pointer">
                        <i class="fa fa-user-o"></i>
                        Login
                    </li>
                    <li>
                        <i
                            class="fa fa-moon-o text-xl text-black-600 font-bold hover:text-orange-600 cursor-pointer"></i>
                    </li>
                </div>
            </ul>
        </nav>
        <div class="grid grid-cols-12">
            <div class="col-span-4 shadow-xl bg-slate-600 text-white border border-slate-500">

                <div class="text-center font-semibold text-slate-900 mx-8">
                    <div class="flex justify-between">
                        <p class="p-3 text-xl text-left text-white">Login Here!!!</p>

                        <button class=" text-yellow-200 hover:text-yellow-400 text-xl font-bold">
                            <i class="fa fa-window-close"></i>
                        </button>
                    </div>
                    <hr>
                    <div class="text-left text-white">
                        <label for="username">Username</label><br>
                    </div>
                    <input type="text" name="username" id="" placeholder="Username: ex: Musocial"
                        class="w-full p-2 bg-slate-300 rounded"><br>
                    <div class="text-left text-white">
                        <label for="password">Password</label><br>
                    </div>
                    <input type="password" name="password" id="" placeholder="Password to login"
                        class="w-full p-2 bg-slate-300 rounded"><br>
                    <div class="text-left my-2 text-white">
                        <label for="check" class="cursor-pointer">Remember me</label>
                        <input type="checkbox" name="check" id="check"><br>
                    </div>
                    <input type="submit" value="Login"
                        class="w-full p-2 bg-orange-600 rounded hover:bg-orange-700 text-white"><br>
                    <div class="flex justify-between my-3 underline text-white">
                        <p><a href="http://" class="hover:text-orange-600 italic">I don't have an account</a></p>
                        <p><a href="http://" class="hover:text-orange-600 italic">I forgot my password</a></p>
                    </div>
                </div>

            </div>
            <div class="col-span-8 bg-slate-300 shadow-xl">
                <p class="mx-3 text-xl font-bold text-orange-600 text-center p-2">
                    Available products in our Stock
                </p>
                <hr>
                <div class="grid grid-cols-8 gap-4 mx-2 my-3">
                    <div class="bg-slate-600 col-span-2 p-5 rounded text-white text-xl font-semibold">
                        Product [ <span class="text-orange-600">1</span> ]
                        <hr>
                        <p class="text-sm">
                            Why do we use it?
                            It is a long established fact that a reader will be
                            content here', making it look like readable English.
                        </p>
                    </div>
                    <div class="bg-slate-600 col-span-2 p-5 rounded text-white text-xl font-semibold text-center">
                        Product [ <span class="text-orange-600">2</span> ]
                        <hr>
                        <p class="text-sm">
                            Where does it come from?
                            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece
                            of classical Latin literature from 45 BC,
                        </p>
                    </div>
                    <div class="bg-slate-600 col-span-2 p-5 rounded text-white text-xl font-semibold text-center">
                        Product [ <span class="text-orange-600">3</span> ]
                        <hr>
                    </div>
                    <div class="bg-slate-600 col-span-2 p-5 rounded text-white text-xl font-semibold text-center">
                        Product [ <span class="text-orange-600">4</span> ]
                        <hr>
                    </div>
                    <div class="bg-slate-600 col-span-2 p-5 rounded text-white text-xl font-semibold text-center">
                        Product [ <span class="text-orange-600">5</span> ]
                        <hr>
                    </div>
                    <div class="bg-slate-600 col-span-2 p-5 rounded text-white text-xl font-semibold text-center">
                        Product [ <span class="text-orange-600">6</span> ]
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
