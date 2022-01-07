@foreach (['success', 'warning', 'danger'] as $type)
    <x-alert :type="$type" class="text-sm leading-5">
        @if ($type === 'warning')
            <div class="bg-yellow-700 text-yellow-100 p-4">
                <x-heroicon-o-exclamation-circle class="h-5 w-5" />
                {{ $component->message() }}
            </div>
        @elseif ($type === 'danger')
            <div class="bg-red-700 text-red-100 p-4">
                <x-heroicon-o-x-circle class="h-5 w-5" />
                {{ $component->message() }}
            </div>
        @else
            <div class="bg-green-700 text-green-100 p-4">
                <x-heroicon-o-check-circle class="h-5 w-5" />
                {{ $component->message() }}
            </div>
        @endif
    </x-alert>
@endforeach

