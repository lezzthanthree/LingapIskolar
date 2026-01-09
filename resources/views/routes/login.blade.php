@extends("layouts.main")

@section("main")
    <div class="flex w-full items-center justify-center">
        <div class="flex flex-col items-center justify-center gap-4">
            <img src="/img/front-logo.png" class="h-48" />
            <form
                class="flex w-80 flex-col gap-4"
                method="POST"
                action="/login"
            >
                @csrf
                <x-text-input
                    :type="'text'"
                    :label="'Username / Email'"
                    :id="'username'"
                    :icon="'bi-person-circle'"
                />
                <x-text-input
                    :type="'password'"
                    :label="'Password'"
                    :id="'password'"
                    :icon="'bi-lock-fill'"
                />
                <x-button :type="'submit'">Log In</x-button>
            </form>
        </div>
    </div>
@endsection
