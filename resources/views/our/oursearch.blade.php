@extends('our.ourwelcome')
@section('content')
<div class="flex justify-center bg-gradient-to-r from-green-400 to-blue-500">
    <div class="w-8/12 pt-20 pl-20 rounded-lg">
        <form action="{{ route('oursearch') }}" method="post" class="mb-4">
            @csrf
            <div class="p-6 flex">
                <label for="location" class="p-4 text-2xl">Location:</label>
                <input name="location" type="text" class="rounded-lg pl-4" placeholder="e.g. Alexandria">

                <label for="animal_type" class="p-4 text-2xl">Type:</label>
                <select name="animal_type" class="rounded-lg pl-4">
                    <option value="dog">Dog</option>
                    <option value="cat">Cat</option>
                </select>
                <button type="submit" class="ml-12 bg-blue-700 hover:bg-blue-200 hover:text-black text-white py-3 rounded-lg font-medium w-44">Search!</button>
            </div> 
        </form>
    </div>
</div>
                    
<div class="grid grid-cols-3 gap-4 flex justify-center text-center bg-gradient-to-r from-green-400 to-blue-500 h-full">
    <!-- hane3mel 7etet for each beta3et el pages -->
    @if ($animals->count())
        @foreach ($animals as $animal) 
            <div class="mb-24">
                <div class="flex justify-center">   
                    <div class="bg-opacity-70 divide-y grid grid-cols-1 rounded-lg mx-auto divide-transparent bg-gray-300">
                        <div class="h-96 mb-6">
                            <img class="max-w-sm overflow-hidden bg-white border-black border-2 inline rounded-lg w-full h-96 object-contain " src="images/animals/{{$animal->image}}" >
                        </div>               

                        <div class="text-center text-xl">
                            Color: {{$animal->color}}    
                        </div>
                        <div class="text-center text-xl">
                            Breed: {{$animal->breed}} 
                        </div>
                        <div class="text-center text-xl">
                            Type: {{$animal->AnimalType}} 
                        </div>
                        <div class="text-center text-xl">
                            Location: {{$animal->location}} 
                        </div>
                        @if(auth()->user()->admin)
                            <form action="{{ route('oursearch.destroy',$animal->id) }}" method="post" class="mb-4">
                            
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-white text-black px-4 py-2 rounded font-medium">Delete</button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>  
        @endforeach

        {{-- {{$animals->links()}} --}}
                
    @else
        <p>There are no posts</p>
    @endif           
</div>
                    
                   
                
            

@endsection