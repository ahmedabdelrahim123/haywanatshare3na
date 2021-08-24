@extends('our.ourwelcome')
@section('content')
    <div class='flex justify-center  pt-20 bg-gradient-to-r from-green-400 to-blue-500 h-screen'>
        <div class='w-3/12 p-4 rounded-lg bg-gray-200 h-3/5'>
            <form action="{{route('ouradminaccessories')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div>
                    <label for="exampleInputEmail1">Upload Picture</label>
                    <input type="file" class="bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue hover:text-white" name="image">
                    @error('image')
                        <small class="">{{$message}}</small>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="name" class="sr-only">Name</label>
                    <input type="text" name="name" id="name" placeholder="Your name" 
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror" 
                    value="{{ old('name') }}">
                    @error('name')
                        <div class="text-red-500 mt-2 text-sm">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="quantity" class="sr-only">quantity</label>
                    <input type="text" name="quantity" id="quantity" placeholder="quantity" 
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('quantity') border-red-500 @enderror" 
                    value="{{ old('quantity') }}">
                    @error('quantity')
                        <div class="text-green-500 mt-2 text-sm">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="price" class="sr-only">price</label>
                    <input type="text" name="price" id="email" placeholder="price" 
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('price') border-red-500 @enderror" 
                    value="{{ old('price') }}">
                    @error('price')
                        <div class="text-green-500 mt-2 text-sm">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="AnimalType" class="sr-only">Animal Type</label>
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