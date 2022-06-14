<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Application Process  1 of 3') }}
        </h2>
</x-slot>
   
     <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="font-semibold text-lg text-gray-800 leading-tight mb-5">
                        {{ __('Transcript Application ') }}
                    </h2>
                    <form method="POST" action="{{ route('profile.save') }}" class="pt-5">
                        @csrf

                        <!-- Name -->
                        <div class="mb-4 mt-5">
                            <x-label for="firstname" :value="__('First Name')" />
                            <x-input id="firstname" class="block mt-1 w-full" type="text" name="firstname" :value="old('firstname')" required autofocus />
                        </div>

                        <!-- Name -->
                        <div class="mb-4">
                            <x-label for="middlename" :value="__('Middle Name')" />
                            <x-input id="middlename" class="block mt-1 w-full" type="text" name="middlename" :value="old('middlename')" autofocus />
                        </div>
                        <!-- Name -->
                        <div class="mb-4">
                            <x-label for="surname" :value="__('Surname')" />
                            <x-input id="surname" class="block mt-1 w-full" type="text" name="surname" :value="old('surname')" required autofocus />
                        </div>
                        <!-- Name -->
                        <div class="mb-4">
                            <x-label for="index_number" :value="__('Registration / Index Number')" />
                            <x-input id="index_number" class="block mt-1 w-full" type="text" name="index_number" :value="old('index_number')" required autofocus />
                        </div>
                        <!-- Name -->
                        <div class="mb-4">
                            <x-label for="gender" :value="__('Gender')" />
                            <select id="gender" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="gender" :value="old('gender')" required autofocus>
                                <option value=""></option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>


                        <div class="flex items-center justify-end mt-4">

                            <x-button class="ml-4">
                                {{ __('NEXT') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
