<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>WebEgresso</title>
</head>

<body>
    <!-- Global Container -->
    <div class="flex items-center justify-center min-h-screen bg-gray-50">
        <!-- Card Container -->
        <div
            class="relative flex flex-col m-6 space-y-10 bg-white shadow-2xl rounded-2xl md:flex-row md:space-y-0 md:m-0">
            <div class="p-6 md:p-20">
                <h1 class="text-3xl font-bold">
                    Hello world!
                </h1>
            </div>
        </div>
    </div>
</body>

</html>
