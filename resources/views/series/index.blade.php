<x-layout title="Séries">
    <a href="/series/criar">Adicionar</a>
    <ul>
        @foreach ($series as $serie)
        <li>{{ $serie }}</li>
        @endforeach
    </ul>
{{--
    <script>
        const series = {{Js::from($series)}}; /*js from faz o mesmo que a função json_encode para passar
        uma var em php para js*/
    </script> --}}
</x-layout>
