<x-layout>
    <h1>hello</h1>
    @if (env('APP_NAME') == 'Laravel')
        <h1>
            {{ env('APP_NAME') }}
        </h1>
    @endif
</x-layout>
