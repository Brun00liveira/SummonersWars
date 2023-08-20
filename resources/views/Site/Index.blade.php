<div>
    {{-- {{dd($user,$situacoes,$participacoes)}} --}}

    @foreach($participacoes as $participacao)
        <p>User: {{ $participacao->user->name }}</p>
        <p>Situacao: {{ $participacao->situacao->status }}</p>
        <p>Pontos: {{ $participacao->pontos }}</p>
        <p>Subjugacao: {{ $participacao->subjugacao }}</p>
        <p>Tartarus: {{ $participacao->tartarus }}</p>
        <p>Check-in: {{ $participacao->check_in }}</p>
    {{-- <hr> --}}
    @endforeach 
    <p>Bom dia Evocadores</p>
</div>
