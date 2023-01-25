<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Sweet Alert</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- TailwindCss CDN -->
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
        <div class="p-2 bg-amber-300">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-2">
              <div class="p-4 bg-cyan-400 rounded-md flex items-center justify-center">
                <button class="bg-sky-500 hover:bg-sky-700 ...">
                    Save changes
                  </button>
              </div>
              <div class="p-4 bg-cyan-400 rounded-md flex items-center justify-center">2</div>
              <div class="p-4 bg-cyan-400 rounded-md flex items-center justify-center">3</div>
              <div class="p-4 bg-cyan-400 rounded-md flex items-center justify-center">4</div>
              <div class="p-4 bg-cyan-400 rounded-md flex items-center justify-center">5</div>
              <div class="p-4 bg-cyan-400 rounded-md flex items-center justify-center">6</div>
              <div class="p-4 bg-cyan-400 rounded-md flex items-center justify-center">7</div>
              <div class="p-4 bg-cyan-400 rounded-md flex items-center justify-center">8</div>
            </div>
          </div>
    </body>
</html>
