@extends('our.ourwelcome')
@section('content')
<div class="flex justify-center bg-gradient-to-r from-green-400 to-blue-500">
        <div class="w-8/12 pt-20 pl-20 rounded-lg">
            
                <form action="" method="post" class="mb-4">
                    @csrf
                    <div class="mb-4">
                        <label for="body" class="sr-only">Body</label>
                        <textarea name="body" id="body" class="bg-gray-100 border-2 w-11/12 p-4 rounded-lg h-16" placeholder="search for a pet by details"></textarea>
                    </div>

                    <div>
                        <button type="submit" class="bg-white text-black  px-4 py-2 rounded font-medium">search</button>
                    </div>
                </form>
            
        </div>
</div>
                    
<div class="grid grid-cols-3 gap-4 flex justify-center text-center bg-gradient-to-r from-green-400 to-blue-500 h-full">
                        <!-- hane3mel 7etet for each beta3et el pages -->
    @if ($accessories->count())
        @foreach ($accessories as $accessory)
            <div>
                <div class="flex justify-center">
                                        
                    <div class="divide-y grid grid-cols-1 mx-auto divide-transparent">
                        <div class="h-96">
                            <img class="inline w-full h-96 object-contain  mx-auto p-4" src="images/offers/{{$accessory->image}}" >
                        </div>               
                       
                        
                        <div class="text-center text-xl">
                            {{$accessory->name}}    
                        </div>
                        <div class="text-center text-xl">
                        {{$accessory->price}} 
                        </div>
                        <form action="{{ route('ouraccessories.destroy',$accessory->id) }}" method="post" class="mb-4">
                         
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-white text-black px-4 py-2 rounded font-medium">Buy</button>
                        </form>
                    </div>
                </div>
            </div>  
        @endforeach

        {{$accessories->links()}}
                
    @else
        <p>There are no posts</p>
    @endif           
</div>
                    
                   
                
            

@endsection