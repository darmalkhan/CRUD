   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   <div class="container px-12 mx-auto">
        <h1 class="p-5 px-0 text-5xl">
            Table
        </h1>
<table class="min-w-full table-auto">
    <thead class="justify-between">
      <tr class="bg-gray-800 ">
        <th class="px-16 py-2">
          <span class="hidden text-gray-300">ID</span>
        </th>
        <th class="px-16 py-2">
          <span class="text-gray-300">Name</span>
        </th>
        <th class="px-16 py-2">
          <span class="text-gray-300">Last Name</span>
        </th>
        <th class="px-16 py-2">
          <span class="text-gray-300">Father Name</span>
        </th>
        <th class="px-16 py-2">
          <span class="text-gray-300">Oprition</span>
        </th>
      </tr>
    </thead>

  @foreach ($users as $user)
      <tbody class="bg-gray-200">
        <tr class="bg-white border-4 border-gray-200">
          <td class="px-16 py-6">
            <span>{{ $user->id }}</span>
          </td>
          <td class="px-16 py-2">
            <span>{{ $user->name }}</span>
          </td>
          <td class="px-16 py-2">
            <span>{{ $user->lastname }}</span>
          </td>
          <td class="px-16 py-2">
            <span>{{ $user->fname }}</span>
          </td>
          <td class="px-16 py-2">
            <span><a href="{{ "delete/".$user->id }}" class="btn">Delete</a>
            <a href="{{ "update/".$user->id }}" class="btn">Edit</a></span>
          </td>
    </tr>
    @endforeach

</table>

<span>
    {{ $users->links() }}
</span>

<div class="flex justify-center box-border py-1">
<button onclick="window.location.href='add'" class="flex items-center px-7 btn">Add</button>
</div>
<div class="flex justify-center py-1">
<form action="add" method="POST">
    {{ method_field('DELETE') }}
    @csrf
    <button type="submit" class="flex items-center px-7  btn ">Delete All</button>
</form> 
</div>
</div>