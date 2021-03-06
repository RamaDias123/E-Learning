@extends('layouts.dashboard')

@section('Title', 'SmartSchool')

@section('content')
    <div class="main-content flex-1 bg-gray-200 md:pb-5 h-screen">
        <div class="bg-blue-500 ">
            <div
            class="
              py-2 px-5
              border-blue-900 border-b-4
              shadow-xl
              text-2xl text-white
              flex justify-between items-center
            "
            >
                <h3 class="font-medium pl-2" data-aos="fade-right" data-aos-duration="800" data-aos-delay="100"><a href="{{ route('Admin') }}">Profile</a></h3>
                <div class="flex z-10" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="800">
                        <a href="{{ route('home') }}" class="block md:inline-block text-white text-xl font-medium transition duration-500 transform hover:-translate-y-0 hover:scale-110 hover:text-yellow-400 px-3 py-2">Home</a>
                        <div x-data="{ dropdownOpen: false }" class="relative px-3" data-aos="zoom-in" data-aos-delay="300" data-aos-duration="800">
                            <button @click="dropdownOpen = !dropdownOpen" class="relative z-10 block rounded-md focus:outline-none">
                                <img class="rounded-full h-12 w-12" src="{{ asset('image/ui.png') }}" alt="image">
                            </button>

                            <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"></div>

                            <div x-show="dropdownOpen" class="absolute right-0 mt-2 w-28 bg-white rounded-md shadow-xl z-20 text-center font-medium">
                                <a href="{{ route('AdminEdit') }}" class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white">
                                    Settings
                                </a>
                                <form class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white" action="{{ route('logout') }}" method="post">
                                @csrf
                                @method('POST')
                                    <button class="font-medium" type="submit">
                                        Sign Out
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
            </div>
        </div>


        <div class="mt-10 mb-5 flex justify-center items-center" data-aos="zoom-in" data-aos-duration="500">
            <div class="bg-blue-500 shadow-lg px-10 py-6 rounded-2xl text-white text-center space-y-6">
                <h1 class="text-4xl font-bold mb-3">My Profile</h1>
                <img class="w-32 h-32 mx-auto rounded-full" src="{{ asset('image/ui.png') }}" alt="image">
                <div class="flex-1 font-medium space-y-2">
                    <h1 class="text-2xl font-bold">Muhamad Ramadhan Tri Nurdias</h1>
                    <h2 class="text-xl">FrontEndDeveloper</h2>
                    <h4 class="text-md text-blue-200">Nurdias45@gmail.com</h4>
                </div>
                <div class="flex justify-end mt-5">
                    <a href="{{ route('AdminEdit') }}" class="rounded-full text-lg font-bold px-8 py-1 text-center bg-yellow-500 hover:bg-yellow-400 tracking-wider transition duration-300 shadow-md delay-150 transform hover:-translate-y-0 hover:scale-110">Edit</a>
                </div>
            </div>
        </div>
        </div>
    </div>
@endsection

