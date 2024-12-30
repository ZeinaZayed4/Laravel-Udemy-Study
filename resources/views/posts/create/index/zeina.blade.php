<div>
{{--    {!! $data !!} --}}
{{--    {{ $data }} --}}

{{--    @dump('Zeina Zayed')--}}
{{--    @dd('Zeina Zayed')--}}
{{--    <h1>Hello</h1>--}}

{{--    @php--}}
{{--        dump('Hello from php directive!');--}}
{{--    @endphp--}}

{{--    @if ($data == 'Hana')--}}
{{--         <h1>Hana</h1>--}}
{{--    @elseif ($data == 'Zeina')--}}
{{--        <h1>Zeina</h1>--}}
{{--    @else--}}
{{--        <h1>Someone else</h1>--}}
{{--    @endif--}}

{{--    <ul>--}}
{{--    @foreach($data as $d)--}}
{{--        <li>{{ $d }}</li>--}}
{{--    @endforeach--}}
{{--    </ul>--}}

    @switch($data)
        @case('Zeina')
            <h1>Zeina</h1>
            @break
        @case('Hana')
            <h1>Hana</h1>
        @default
            <h1>Someone else</h1>
    @endswitch
</div>
