<div class="modal fade" id="Request-Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            {{-- Cabeçalho do Modal --}}
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Novo Pedido</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            {{-- Corpo do Modal --}}
            <div class="modal-body">
                <form action="{{ route('addSale.action') }}" method="POST" id="AddSale">
                    @csrf
                    <h3>Produtos</h3>
                    <div id="products" class="p-3">
                        <div class="row mb-3">
                            <div class="col">
                                <input list="names" name="name0" id="name" class="form-control input-new-request"
                                    placeholder="Nome do produto" autocomplete="no" required>
                                <datalist id="names">
                                    @foreach ($products as $product)
                                        <option value="{{ $product->name }}">
                                    @endforeach

                                </datalist>
                            </div>
                            <div class="col">
                                <input type="text" name="price0" id="price0"
                                    class="form-control input-new-request price" placeholder="Valor do produto"
                                    required>
                            </div>
                            <div class="col">
                                <input type="number" name="qtde0" id="qtde0" class="form-control input-new-request"
                                    placeholder="Quantidade do produto" min="1" value="1" required>
                            </div>
                            <button type="button" class="btn btn-success" id="btn-add-product">Adicionar</button>
                        </div>
                    </div>
                    <hr>
                    <h3>Endereço</h3>
                    <label>Cep:
                        <input class="form-control" class="form-control" name="CEP" type="text" id="cep" value=""
                            maxlength="9" /></label><br />
                    <label>Rua:
                        <input class="form-control" name="street" type="text" id="rua" /></label><br />
                    <label>Bairro:
                        <input class="form-control" name="neighborhood" type="text" id="bairro" /></label><br />
                    <label>Numero:
                        <input class="form-control" name="number" type="text" id="numero" /></label><br />
                    <label>Cidade:
                        <input class="form-control" name="city" type="text" id="cidade" /></label><br />
                    <label>Estado:
                        <input class="form-control" name="UF" type="text" id="uf" /></label><br />


                    <input type="hidden" name="amount" id="FinalPriceInput">
                </form>
            </div>

            {{-- Footer do Modal --}}
            <div class="modal-footer navbar fixed-bottom justify-content-between bg-white">
                <div class="display-4 text-left FinalPrice">R$ 0</div>
                <div class="button">
                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-outline-success"
                        onclick="$('form#AddSale').submit();">Adicionar Pedido</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $("#btn-add-product").click(function() {
        var requests = $('#products .row').length;
        var id = $('#names option').attr('id');
        $("#products").append(`
            <div class="row mb-3">
                <div class="col">
                    <input list="names" name="name${requests}" id="name"  class="form-control input-new-request"
                        placeholder="Nome do produto" autocomplete="no"  required>
                    <datalist id="names">
                        <option value="Edge">
                        <option value="Firefox">
                        <option value="Chrome">
                        <option value="Opera">
                        <option value="Safari">
                    </datalist>
                </div>
                <div class="col">
                    <input type="text" name="price${requests}" id="price${requests}" class="form-control input-new-request"
                        placeholder="Valor do produto"  required>
                </div>
                <div class="col">
                    <input type="number" name="qtde${requests}" id="qtde${requests}" class="form-control input-new-request"
                        placeholder="Quantidade do produto" min="1" value="1"  required>
                </div>
                    <button class="btn btn-danger"  onclick="$(parentNode).remove()">remover</button>
            </div>`);
    });


    $(".modal-body").on("keyup", (function(e) {
        var length = $('#products .row').length;
        var price;
        var qtde;
        var Totalprice;
        for (var i = 0; i <= length; i++) {
            qtde = parseFloat($(`#qtde${i}`).val()) || 0;
            price = (parseFloat($(`#price${i}`).val()) || 0) * qtde;

            Totalprice = (parseFloat(Totalprice) || 0) + price;

            $(".FinalPrice").html("");
        }

        $(".FinalPrice").append("R$ " + Totalprice);
        $("#FinalPriceInput").val(Totalprice);
    }));

</script>
