<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">
    <title>GPA Calculator</title>
</head>

<body>
    <h1 class="text-3xl font-semibold text-center my-10">GPA Calculator</h1>
    <form action="getResult.php" method="POST" class="w-11/12 sm:w-8/12 mx-auto">
        <div class="relative mb-4">
            <label for="number" class="leading-7 text-sm text-gray-600 font-semibold">Number</label>
            <input type="number" id="number" name="number" class="w-full bg-white rounded border border-gray-300 focus:border-green-500 focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" placeholder="Enter your Number">
        </div>
        <div class="mt-6">
            <button class="inline-flex text-white font-semibold bg-green-500 border-0 py-2 px-4 focus:outline-none hover:bg-green-800 rounded text-base" type="submit">
                Submit
            </button>
        </div>
    </form>
</body>

</html>