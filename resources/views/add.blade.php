<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<div class="bg-gray-100 p-60">
<div class="w-full max-w-lg container py-20 mx-auto">
  <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="add" method="POST">
      @csrf
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
        Name
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" name="name" type="text" placeholder="Enter Name">
    </div>

    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
        Last Name
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="lastname" name="lastname" type="text" placeholder="Enter Last Name">
    </div>

    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
        Father Name
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="fname" name="fname" type="text" placeholder="Enter Father Name">
    </div>

    <div class="flex items-center justify-between">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
        Update
      </button>
    </div>
  </form>
  <p class="text-center text-gray-500 text-xs">
    &copy;2021 Test Corp. All rights reserved.
  </p>
</div>
</div>