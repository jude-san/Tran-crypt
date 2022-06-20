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

                        <!-- application Type -->
                        <div class="mb-4">
                            <x-label for="appliction_type" :value="__('Application Type')" />
                            <select id="application_type" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="application_type" :value="old('application_type')" required autofocus>
                                <option value=""></option>
                                <option value="graduate">Graduate</option>
                                <option value="undergraduate">undergraduate</option>
                            </select>
                        </div>

                        <!-- User name -->
                        <div class="mb-4 mt-5">
                            <x-input id="userid" class="block mt-1 w-full" type="text" name="userid" value="{{$profile()->id}}" required autofocus />
                        </div>
                        
                        <!-- Gender -->
                        <div class="mb-4 mt-5">
                            <x-input id="gender" class="block mt-1 w-full" type="hidden" name="gender" value="{{Auth::user()->name}}" required autofocus />
                        </div>

                        <!-- Registration Number -->
                        <div class="mb-4 mt-5">
                            <x-input id="regid" class="block mt-1 w-full" type="hidden" name="regid" value="{{Auth::user()->name}}" required autofocus />
                        </div>


                        <!-- Major -->
                        <div class="mb-4 mt-5">
                            <x-label for="major" :value="__('Major')" />
                            <select id="major" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="major" :value="old('major')" required autofocus>
                                <option value=""></option>
                                <option value="graduate">Graduate</option>
                                <option value="undergraduate">Undergraduate</option>
                            </select>
                        </div>

                        <!-- Programme -->
                        <div class="mb-4">
                            <x-label for="programme" :value="__('Programme')" />
                            <select id="programme" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="programme" :value="old('programme')" required autofocus>
                                @foreach ($select as $user)
                                <option value="{{$user->id}}">{{$user ->name}}</option>
                                @endforeach

                            </select>
                        </div>

                        <!-- cellphone -->
                        <div class="mb-4">
                            <x-label for="cellphone" :value="__('Phone Number')" />
                            <x-input id="cellphone" class="block mt-1 w-full" type="tel" name="celphone" :value="old('{{$profiles->index_number}}')" required autofocus />
                        </div>

                        <!-- DOA -->
                        <div class="mb-4">
                            <x-label for="doa" :value="__('Date of Acceptance')" />
                            <x-input id="doa" class="block mt-1 w-full" type="date" name="doa" :value="old('doa')" required autofocus />
                        </div>

                        <!-- DOC -->
                        <div class="mb-4">
                            <x-label for="doc" :value="__('Date of Completion')" />
                            <x-input id="doc" class="block mt-1 w-full" type="date" name="doc" :value="old('doc')" required autofocus />
                        </div>

                        <!-- Address -->
                        <div class="mb-4">
                            <x-label for="address" :value="__('Delivery Address')" />
                            <x-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autofocus />
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