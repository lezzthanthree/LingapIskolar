@extends("layouts.main")

@section("side")
    <x-button :href="route('ticket-create')">New Ticket</x-button>
@endsection

@section("main")
    <div class="flex w-full flex-1 flex-col items-center justify-center p-4">
        <div
            class="flex w-[90%] flex-1 flex-col gap-4 rounded-xl border-2 border-black bg-white p-8"
        >
            <h1 class="text-4xl font-bold">My Tickets</h1>
            <div
                class="tickets-container flex w-full flex-1 flex-col gap-2 overflow-y-auto"
            >
                @if (count($tickets) === 0)
                    <x-empty-list :message="'Create a ticket first!'" />
                @else
                    @foreach ($tickets as $ticket)
                        <a href="/ticket/{{ $ticket["id"] }}">
                            <div
                                class="ticket-row flex flex-row items-center justify-between gap-8"
                            >
                                <div
                                    class="flex flex-1 flex-row justify-between overflow-hidden rounded-2xl border-2 border-neutral-500 p-4 whitespace-nowrap"
                                >
                                    <p class="font-bold">
                                        {{ $ticket["subject"] }}
                                    </p>
                                    <p>{{ $ticket["id"] }}</p>
                                </div>
                                <x-ticket-status :status="$ticket['status']" />
                            </div>
                        </a>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
@endsection
