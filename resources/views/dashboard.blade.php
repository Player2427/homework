<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Личный кабинет') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Добро пожаловать!!!<br />
                    Имя: {{$user->first_name}} <br />
                    Фамилия: {{$user->last_name}} <br />
                    Отчество: {{$user->father_name}} <br />
                    Серия паспорта: {{$user->passpot_s}} <br />
                    Номер паспорта: {{$user->passpot_n}} <br />
                    Пол: {{ $user->gender == 'f' ? 'Женский' : 'Мужской' }} <br />
                    Email: {{$user->email}} <br />


                    <form method="GET" action="{{ route('edit') }}">
                        @csrf
                        <div class="flex items-center justify-end mt-4">
                            <button type="submit" class="ml-4">
                                {{ __('Редактировать данные') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
