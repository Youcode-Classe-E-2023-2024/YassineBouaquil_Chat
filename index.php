


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="favicon.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>AVITO CHAT</title>
  </head>
  <body>
    <section id="content" class="bg-gray-100">
      <div class="container mx-auto flex gap-28 justify-between py-40 px-60">
        <div class="w-3/5 relative  pt-20">
          <img class="w relative -left-6" src="">
          <h2 class="text-3xl">Connect with friends and the world around you on AVITO CHAT.</h2>
        </div>
        <div class="w-2/5">
          <div class="shadow-lg bg-white p-10 rounded-xl">
            <form>
              <input type="text" class="block border-2 w-full p-3 text-lg rounded-md mb-5" placeholder="Email or phone number"/>
              <input type="password" class="block border-2 w-full p-3 text-lg rounded-md mb-5" placeholder="Password"/>
              <input type="submit" class="block w-full rounded-md text-lg font-bold p-3 bg-blue-500 text-white" value="Log In">
            </form>
            <a href="#" class="block my-5 text-center text-md text-blue-600">Forgot password?</a>
            <hr class="mb-10">
            <div class="text-center">
              <a href="./views/signup.php" class="rounded-md text-lg font-bold p-3 bg-green-500 text-white">Create new account</a>
            </div>
            
          </div>
          <div class="text-center text-md mt-5">
            <p><a href="./views/RegisterView.php" class="font-bold">Create a Page</a> for a celebrity, brand or business.</p>
          </div>
        </div>
      </div>
    </section>
    
    <footer class="bg-white">
      <div class="container mx-auto py-10 px-60">
        <div>
          <ul class="flex flex-wrap gap-3 text-gray-600">
            <li><a href="" class="inline-block text-gray-700 hover:underline">English (US)</a></li>
            <li><a href="" class="inline-block hover:underline">Español</a></li>
            <li><a href="" class="inline-block hover:underline">Français (France)</a></li>
            <li><a href="" class="inline-block hover:underline">中文(简体)</a></li>
            <li><a href="" class="inline-block hover:underline">Português (Brasil)</a></li>
            <li><a href="" class="inline-block hover:underline">Italiano</a></li>
            <li><a href="" class="inline-block hover:underline">한국어</a></li>
            <li><a href="" class="inline-block hover:underline">Deutsch</a></li>
            <li><a href="" class="inline-block hover:underline">हिन्दी</a></li>
            <li><a href="" class="inline-block hover:underline">日本語</a></li>
          </ul>
          <hr class="my-2">
          <ul class="flex flex-wrap gap-3 text-gray-600">
            <li><a href="#" class="inline-block hover:underline">Sign Up</a></li>
            <li><a href="#" class="inline-block hover:underline">Log In</a></li>
            <li><a href="#" class="inline-block hover:underline">Messenger</a></li>
            <li><a href="#" class="inline-block hover:underline">Facebook Lite</a></li>
            <li><a href="#" class="inline-block hover:underline">Watch</a></li>
            <li><a href="#" class="inline-block hover:underline">Places</a></li>
          </ul>
        </div>
      </div>
    </footer>
    <script type="module" src="/main.js"></script>
  </body>
</html>