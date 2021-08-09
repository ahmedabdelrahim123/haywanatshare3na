@extends('our.ourwelcome')
@section('content')
<div class="flex justify-center">
        <div class="w-8/12 bg-white p-20 rounded-lg">
            
                <form action="{{ route('oursearch') }}" method="post" class="mb-4">
                    @csrf
                    <div class="mb-4">
                        <label for="body" class="sr-only">Body</label>
                        <textarea name="body" id="body" class="bg-gray-100 border-2 w-11/12 p-4 rounded-lg h-16" placeholder="search for a pet by details"></textarea>
                    </div>

                    <div>
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded font-medium">search</button>
                    </div>
                </form>
            
            
                    
                        <div class="">
                        
                            
                            
                            
                        </div>
                    
                   
                
            
        </div>
    </div>
@endsection