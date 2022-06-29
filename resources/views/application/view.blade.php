<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="flex">
                        <a href="{{ route('application') }}" class="btn btn-primary mb-4">back</a>
                    </div>
                    <h2 class="font-semibold text-lg text-gray-800 leading-tight mb-5">
                        {{ __('Transcript Application Details') }}
                    </h2>
                    <div>
                        <div>
                            {{$apply->major}}
                        </div>
                        <div>
                            {{$apply->programme}}
                        </div>
                        <div>
                            {{$apply->application_type}}
                        </div>
                        <div>
                            {{$apply->doa}}
                        </div>
                        <div>
                            {{$apply->doc}}
                        </div>
                        <div>
                            {{$apply->payment->status}}
                        </div>
                        <div>
                            &cent{{$apply->payment->total}}
                        </div>
                        <div>
                            {{$apply->payment->cellphone}}
                        </div>
                        <div>
                            {{$apply->address}}
                        </div>
                        <div>
                            {{$apply->created_at}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>