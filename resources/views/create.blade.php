@extends('layout')

@section('content')

<x-card class=" max-w-lg mx-auto mt-24" >
<header class="text-center">
    <h2 class="text-2xl font-bold uppercase mb-1">
        Upload The Disaster
    </h2>
    <p class="mb-4">Post Disaster Site</p>
</header>

<form method="POST" action="/listings" enctype="multipart/form-data" >
    @csrf
    <div class="mb-6">
        <label
            for="title"
            class="inline-block text-lg mb-2"
            >Name of the Site</label
        >
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="title" value="{{old('title')}}"
        />
        @error('title')
        <P class="text-red-500 text-xs mt-1">{{$message}}</P>  
        @enderror
    </div>

    <div class="mb-6">
        <label for="address" class="inline-block text-lg mb-2"
            >Address</label
        >
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="address"
            placeholder="Example: Senior Laravel Developer"
            value="{{old('address')}}"
        />
        @error('address')
        <P class="text-red-500 text-xs mt-1">{{$message}}</P>  
        @enderror
    </div>

    <div class="mb-6">
        <label
            for="country"
            class="inline-block text-lg mb-2"
            >country</label
        >
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="country"
            placeholder="Example: Remote, Boston MA, etc"
            value="{{old('country')}}"
        />
        @error('country')
        <P class="text-red-500 text-xs mt-1">{{$message}}</P>  
        @enderror
    </div>

    <div class="mb-6">
        <label for="damage" class="inline-block text-lg mb-2"
            >Type of Damage</label
        >
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="damage"
            value="{{old('damage')}}"
        />
        @error('damage')
        <P class="text-red-500 text-xs mt-1">{{$message}}</P>  
        @enderror
    </div>

    <div class="mb-6">
        <label
            for="source"
            class="inline-block text-lg mb-2"
        >
            Sources URL
        </label>
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="source"
            value="{{old('source')}}"
        />
        @error('source')
        <P class="text-red-500 text-xs mt-1">{{$message}}</P>  
        @enderror
    </div>
    <div class="mb-6">
        <label
            for="email"
            class="inline-block text-lg mb-2"
        >
           Email
        </label>
        <input
            type="email"
            class="border border-gray-200 rounded p-2 w-full"
            name="email"
            value="{{old('email')}}"
        />
        @error('email')
        <P class="text-red-500 text-xs mt-1">{{$message}}</P>  
        @enderror
    </div>
     <div class="mb-6">
        <label
            for="fullname"
            class="inline-block text-lg mb-2"
        >
           Full Name
        </label>
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="fullname"
            value="{{old('fullname')}}"
        />
        @error('fullname')
        <P class="text-red-500 text-xs mt-1">{{$message}}</P>  
        @enderror
    </div>

    <div class="mb-6">
        <label
            for="contact"
            class="inline-block text-lg mb-2"
        >
           Phone Number
        </label>
        <input
            type="number"
            class="border border-gray-200 rounded p-2 w-full"
            name="contact"
            value="{{old('contact')}}"
        />
        @error('contact')
        <P class="text-red-500 text-xs mt-1">{{$message}}</P>  
        @enderror
    </div>

    <div class="mb-6">
        <label for="tags" class="inline-block text-lg mb-2">
            Tags (Comma Separated)
        </label>
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="tags"
            placeholder="Example: Laravel, Backend, Postgres, etc"
            value="{{old('tags')}}"
        />
        @error('tags')
        <P class="text-red-500 text-xs mt-1">{{$message}}</P>  
        @enderror
    </div>

    <div class="mb-6">
        <label for="logo" class="inline-block text-lg mb-2">
            Picture of the Site
        </label>
        <input
            type="file"
            class="border border-gray-200 rounded p-2 w-full"
            name="logo"
            value="{{old('logo')}}"
        />
        @error('logo')
        <P class="text-red-500 text-xs mt-1">{{$message}}</P>  
        @enderror
    </div>

    <div class="mb-6">
        <label
            for="description"
            class="inline-block text-lg mb-2"
        >
             Description
        </label>
        <textarea
            class="border border-gray-200 rounded p-2 w-full"
            name="description"
            rows="10"
            placeholder="Include tasks, requirements, salary, etc"
          
        >{{old('description')}}</textarea>
        @error('description')
        <P class="text-red-500 text-xs mt-1">{{$message}}</P>  
        @enderror
    </div>

    <div class="mb-6">
        <button
            class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
        >
            Submit
        </button>

        <a href="/" class="text-black ml-4"> Back </a>
    </div>
</form>
</x-card>
@endsection