<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('edit') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="first_name" :value="__('Имя')" />

                <x-input id="first_name" class="block mt-1 w-full" type="text" name="first_name"
:value="old('first_name')"
                value="{{$user->first_name}}" required autofocus />
            </div>

            <!-- last_name -->
            <div>
                <x-label for="last_name" :value="__('Фамилия')" />

                <x-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" value="{{$user->last_name}}" required autofocus />
            </div>

            <!-- father_name -->
            <div>
                <x-label for="father_name" :value="__('Отчество')" />

                <x-input id="father_name" class="block mt-1 w-full" type="text" name="father_name" :value="old('father_name')" value="{{$user->father_name}}" required autofocus />
            </div>

            <!-- passpot_s -->
            <div>
                <x-label for="passpot_s" :value="__('Серия паспорта')" />

                <x-input id="passpot_s" class="block mt-1 w-full" type="text" name="passpot_s" :value="old('passpot_s')" value="{{$user->passpot_s}}" required autofocus />
            </div>

            <!-- passpot_n -->
            <div>
                <x-label for="passpot_n" :value="__('Номер паспорта')" />

                <x-input id="passpot_n" class="block mt-1 w-full" type="text" name="passpot_n" :value="old('passpot_n')" value="{{$user->passpot_n}}" required autofocus />
            </div>

            <!-- gender -->
            <div>
                <x-label for="gender" :value="__('Пол')" />

                <select id="gender" class="block mt-1 w-full" name="gender" :value="old('gender')">
                    <option value="m" {{$user->gender === 'm' ? 'selected' : ''}}>Мужской</option>
                    <option value="f" {{$user->gender === 'f' ? 'selected': ''}}>Женский</option>
                </select>
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" value="{{$user->email}}" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-4">
                    {{ __('Обновить пользователя') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
