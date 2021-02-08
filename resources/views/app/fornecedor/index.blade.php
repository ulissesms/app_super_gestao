<h3>Fornecedores</h3>

{{-- Trabalhando com o blade --}}


@if(count($fornecedor)> 0 && count($fornecedor)<10)
    <h3>Existem alguns fornecedores cadastrados</h3>
    @elseif(count($fornecedor)>10)
    <h3>Existem varios fornecedores cadastrados</h3>
    @else
    <h3>Ainda nao existem fornecedores cadastradoos</h3>
@endif
