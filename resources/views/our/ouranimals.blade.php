@extends('our.ourwelcome')
@section('content')
    <div class='flex justify-center  pt-20 bg-gradient-to-r from-green-400 to-blue-500 h-screen'>
        <form action="{{route('ouranimals')}}" method="POST" enctype="multipart/form-data"
        class='w-3/12 p-4 rounded-lg bg-gray-200 h-2/3'>
            @csrf
            <div class="p-2 mb-4">
                <label for="image">Upload Picture</label>
                <input name="image" type="file" class="bg-white text-blue rounded-lg 
                tracking-wide uppercase border border-blue cursor-pointer " name="">
                @error('image')
                    <small class="">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-4">
                <label for="color" class="sr-only">color</label>
                <input type="text" name="color" id="color" placeholder="Color" 
                class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('color') border-red-500 @enderror" 
                value="{{ old('color') }}">
                @error('color')
                    <div class="text-green-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="AnimalType" class="sr-only">AnimalType</label>
                <select type="AnimalType" name="AnimalType" id="AnimalType" placeholder="AnimalType" 
                class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('AnimalType') border-red-500 @enderror" 
                value="">
                    <option value="dog">Dog</option>
                    <option value="cat">Cat</option>
                </select>
                @error('AnimalType')
                    <div class="text-green-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="breed" class="sr-only">Breed</label>
                <input type="text" name="breed" id="breed" placeholder="Breed" 
                class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('breed') border-red-500 @enderror" 
                value="{{ old('breed') }}">
                @error('breed')
                    <div class="text-green-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="location" class="sr-only">location</label>
                <input type="text" name="location" id="location" placeholder="Location" 
                class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('location') border-red-500 @enderror" 
                value="{{ old('location') }}">
                @error('location')
                    <div class="text-green-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div>
                <button type="submit" class="hover:bg-blue-700 bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Upload</button>
            </div>

        </form> 
    </div>
@endsection