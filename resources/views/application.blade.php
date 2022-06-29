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
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form method="POST" action="{{ route('application.save') }}" class="pt-5">
                        @csrf

                        <x-input id="userr_id" class="block mt-1 w-full" type="hidden" name="user_id" value="{{ Auth::user()->id }}" />

                        <!-- Graduate Type -->
                        <div class="mb-4">
                            <x-label for="appliction_type" value="{{__('Graduate Type')}}" />
                            <x-select id="application_type" class="block mt-1 w-full" name="application_type" required autofocus>
                                <option value=""></option>
                                <option value="graduate">Post-Graduate</option>
                                <option value="undergraduate">Undergraduate</option>
                            </x-select>
                        </div>

                        <!-- Major -->
                        <div class="mb-4 mt-5">
                            <x-label for="major" :value="__('Major')" />
                            <x-input id="major" class="block mt-1 w-full" type="text" name="major" :value="old('major')" required autofocus />
                        </div>

                        <!-- Programme -->
                        <div class="mb-4">
                            <x-label for="programme" :value="__('Programme')" />
                            <x-input id="programme" class="block mt-1 w-full" type="text" name="programme" :value="old('programme')" required autofocus />
                        </div>

                        <!-- Programme -->
                        <div class="mb-4">
                            <x-label for="phone" :value="__('phone')" />
                            <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autofocus />
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