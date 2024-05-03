@include('dachbord');





<link
href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet"/>

<div class="flex items-center justify-center min-h-screen bg-white">
<div class="col-span-12">
  <div class="overflow-auto lg:overflow-visible">
    <div class="flex lg:justify-between border-b-2 border-fuchsia-900 pb-1">
      <h2 class="text-2xl text-gray-500 font-bold">All Users</h2>
      <div class="text-center flex-auto">
        <input type="text" name="name" placeholder="Search..." class=" w-1/3 py-2 border-b-2 border-blue-600 outline-none focus:border-yellow-400"/>
      </div>

      <div>
        <a href="{{ route('layoute.creeArticle') }}"> <button class="  bg-blue-500  hover:bg-blue-700  text-white  py-1  px-3  sm  rounded-full ">Add new Article</button></a>
      </div>
    </div>
    <table class="table text-gray-400 border-separate space-y-6 text-sm">
      <thead class="bg-blue-500 text-white">
        <tr>
          <th class="p-3">photo</th>
          <th class="p-3">titre</th>
          <th class="p-3 text-left">description</th>


          <th class="p-3 text-left">Status</th>
          <th class="p-3 text-left">Action</th>
        </tr>
      </thead>
      <tbody>
    
      @foreach ($articls as $articl )
        

      <tr class="bg-blue-200 lg:text-black">
          <td class="py-3 px-2 font-bold">
              <div class="inline-flex space-x-3 items-center">
                <span><img class="rounded-full w-8 h-8" src="{{ asset('storage/'.$articl->image)}}" alt=""></span>

              </div>
          </td>
          <td class="p-3 font-medium capitalize">{{ "$articl->titre" }}</td>
          <td class="p-3">{{ "$articl->description" }}</td>


          <td class="p-3">
            <span class="bg-green-400 text-gray-50 rounded-md px-2"
              >ACTIVE</span
            >
          </td>

          <td class="p-3">
            <a href="{{ route('layoute.voireArticle') }}" class="text-gray-500 hover:text-gray-100 mr-2">
              <i class="material-icons-outlined text-base">visibility</i>
            </a>
            <a href="{{ route('layoute.updateArticle',$articl->id) }}" class="text-yellow-400 hover:text-gray-100 mx-2">
              <i class="material-icons-outlined text-base">edit</i>
            </a>
            <a
              href="{{ route('layoute.deleteArticle', $articl->id) }}"
              class="text-red-400 hover:text-gray-100 ml-2"
            >
              <i class="material-icons-round text-base">delete_outline</i>
            </a>
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


    
