@extends('our.ourwelcome')
@section('content')
    <div class='flex justify-center  pt-20 bg-gradient-to-r from-green-400 to-blue-500 h-screen'>
        <div class='w-3/12 p-4 rounded-lg bg-gray-200 h-2/4'>
            <form action="{{route('ouranimals')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div>
                    <label for="exampleInputEmail1">Upload Picture</label>
                    <input type="file" class="bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue hover:text-white" name="image">
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
                    <label for="breed" class="sr-only">breed</label>
                    <input type="text" name="breed" id="email" placeholder="Breed" 
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('breed') border-red-500 @enderror" 
                    value="{{ old('breed') }}">
                    @error('breed')
                        <div class="text-green-500 mt-2 text-sm">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="AnimalType" class="sr-only">AnimalType</label>
                    <input type="AnimalType" name="AnimalType" id="AnimalType" placeholder="AnimalType" 
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('AnimalType') border-red-500 @enderror" 
                    value="">
                    @error('AnimalType')
                        <div class="text-green-500 mt-2 text-sm">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Upload</button>
                </div>

            </form>
        </div>
    </div>
@endsection