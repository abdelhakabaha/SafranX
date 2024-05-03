@include('dachbord');

<div class="flex items-center justify-center min-h-screen bg-white">
<div class="col-span-12">
  <div class="overflow-auto lg:overflow-visible">
    <div class="flex lg:justify-between border-b-2 border-fuchsia-900 pb-1">
      <h2 class="text-2xl text-gray-500 font-bold">All Categorie</h2>
      <div class="text-center flex-auto">
        <input type="text" name="name" placeholder="Search..." class=" w-1/3 py-2 border-b-2 border-blue-600 outline-none focus:border-yellow-400"/>
      </div>

      <div>
        <a href="{{ route('layoute.creeCategory') }}"> <button class="  bg-blue-500  hover:bg-blue-700  text-white  py-1  px-3  sm  rounded-full ">Add new categoie</button></a>
      </div>
    </div>
    <table class="table text-gray-400 border-separate space-y-6 text-sm">
      <thead class="bg-blue-500 text-white">
        <tr>
          <th class="p-2">name</th>
          <th class="p-2 text-left">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($Categorys as $category )
        <tr class="bg-blue-200 lg:text-black">
        <td class="py-2 px-2 font-bold">
        <td class="p-2 font-medium capitalize">{{ "$category->name" }}</td>
        </td>

          <td class="p-2">

            <form action="//category/update {{$category->id}}" method="post">
                @csrf
                <button type="submit" class="text-red-400 hover:text-gray-100 mx-2">
                    <i class="material-icons-outlined text-base">edit</i>
                </button>
            <form action="/category/delete/{{$category->id}}" method="get">
                @csrf
                <button type="submit" class="text-red-400 hover:text-gray-100 mx-2">
                    <i class="material-icons-outlined text-base">delete</i>
                </button>
            </form>
            {{-- <a
              href="{{ route('layoute.deleteCategory') }}"
              class="text-red-400 hover:text-gray-100 ml-2"
            >
              <i class="material-icons-round text-base">delete_outline</i>
            </a> --}}
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
</div>

        </div>

    </main>

    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>



</body>
</html>


    
