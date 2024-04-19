<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bedah Rumah</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../css/app.css">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body>
    <div class="w-full">
        <div class="flex">
            <div class="lg:flex hidden w-full bg-blue-300 h-[100vh] justify-center items-center">
                <img src="/images/logo-bedahrumah.jpg" alt="logo" class="w-[300px] h-[300px] rounded">
            </div>
            <div class="w-full bg-slate-50 h-[100vh] flex justify-center items-center">
                <div class="bg-white shadow-lg max-w-lg w-full p-7 rounded flex flex-col gap-2 justify-center items-center">
                    <p class="font-bold text-xl">LOGIN</p>
                    <form>
                        <input type="email" name="email" autofocus placeholder="Masukkan email" class="p-1 px-3 rounded-full border-2 w-full">
                        <input type="password" name="password" placeholder="********" class="p-1 px-3 rounded-full border-2 w-full mt-2">
                        <button class="p-2 w-full h-auto bg-blue-700 hover:bg-blue-500 duration-200 transition-all text-white rounded-full mt-4 px-4 text-sm">
                            Masuk
                        </button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</body>

</html>