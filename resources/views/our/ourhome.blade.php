@extends('our.ourwelcome')
@section('content')
    <div class="bg-purple-100 flex justify-between flex-grow pt-16">
        <div>
            <div class="text-4xl p-6">Adopt DON'T Buy</div>
            <div class="p-6 pt-40 text-2xl">Find an animal in your area</div>
            <div class="p-6 flex">
                <div class="p-4 text-2xl">Location:</div>
                <input type="text" class="rounded-lg pl-4" placeholder="Search..">

                <div class="p-4 text-2xl">Type:</div>
                <input type="text" class="rounded-lg pl-4" placeholder="Search..">
            </div> 
            <div class="pl-64">
                    <button type="submit" class="bg-gradient-to-r from-black  hover:from-green-400 hover:to-blue-500 text-white px-4 py-3 rounded font-medium w-44">Search!</button>
            </div>
        </div>
        
        <img class="inline w-1/2 pb-32 pt-2" src="images/Selena_Gomez.jpeg" >
        
    </div>
    <div class="grid grid-cols-3 divide-x divide-transparent bg-gradient-to-r from-green-400 to-blue-500  p-4 flex justify-center">
        <div class="flex justify-center">
            <div class="divide-y grid grid-cols-1 mx-auto divide-transparent">
                <div class="text-2xl flex justify-center">Find a pet</div>
                <img class="inline w-1/2   mx-auto p-4" src="images/dogsearch.jpeg" >
                <div class="text-center text-xl">
                    Click Here  
                </div>
                <div class="text-center text-xl">
                    To find a pet near you that needs you
                </div>
            </div>
        </div>
        <div class="flex justify-center">
            <div class="divide-y grid grid-cols-1 mx-auto divide-transparent">
                <div class="text-2xl flex justify-center">Upload a pet</div>
                <img class="inline w-3/4   mx-auto p-4" src="images/adoptapet.jpeg" >
                <div class="text-center text-xl">
                    Click Here   
                </div>
                <div class="text-center text-xl">
                    To upload a stray animal near you
                </div>
            </div>
        </div>
        <div class="flex justify-center">
            <div class="divide-y grid grid-cols-1 mx-auto divide-transparent">
                <div class="text-2xl flex justify-center">Accessories</div>
                <img class="inline w-2/3   mx-auto p-4" src="images/dogcoler.jpeg" >
                <div class="text-center text-xl">
                    Click Here   
                </div>
                <div class="text-center text-xl">
                    To check out cool accessories for animals
                </div>
            </div>
        </div>
    </div>
    
    <div class="bg-purple-100 flex justify-between p-4">
        <div>
            <div class="text-4xl">Why adopt?</div>
            <div class="p-6 text-3xl">-Because you'll save a life.</div>
            <div class="text-xl">
                Each year, it's estimated that more than one million adoptable dogs and cats are euthanized in the United States, simply because too many pets come into shelters and too few people consider adoption when looking for a pet.

                The number of euthanized animals could be reduced dramatically if more people adopted pets instead of buying them. When you adopt, you save a loving animal by making them part of your family and open up shelter space for another animal who might desperately need it.
            </div>
            <div class="pl-72">
                <button type="submit" class="bg-gradient-to-r from-black hover:from-green-400 hover:to-blue-500 text-white px-4 py-3 rounded font-medium w-44">
                    <a href="{{route('ourlearnmorewhyadopt')}}" class="px-5">see more</a>
                </button>
            </div>
        </div>
        
        <img class="inline w-1/3 py-6 p-2 " src="images/whyadopt.jpg" >
        
    </div>
    <div class="bg-gradient-to-r from-green-400 to-blue-500  flex justify-between p-4">
        <div>
            <div class="text-4xl">About us</div>
            <div class="text-2xl p-5 pt-20 w-1/2 text-center">
            Haywanat Share3na is a new step in the right direction on how we can help the stray animals on
            the streets and provide a new life without hunger and pain for them. Be the connection between a
            good human and a lonely,need saving animal.
            </div>
            
        </div>
        
        <img class="inline w-1/3 py-6 p-2 " src="images/aboutus.jpg" >
        
    </div>
    <div class="bg-purple-100 ">
        <div class=" divide-x  grid grid-cols-2 divide-transparent">
                <div class="mx-auto">
                    <div class="text-left text-2xl">contact us</div>
                    
                </div>
                <div class="">
                    <div class="mx-auto text-center text-2xl">privacy policy</div>
                    
                </div>
        </div>
        <div class="flex justify-center ">
            <img class="inline w-40 mx-auto" src="images/dog.jpg" > 
        </div>
    </div>
@endsection