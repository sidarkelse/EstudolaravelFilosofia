<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<div class="container">
    <h1 class="mt-2">Inserir produto Xd</h1>
    @if(!empty($mensagem))
        <div class="alert alert-success">Produto inserido com sucesso!</div>
    @endif

    <form action="/produtos/inserir" method="post" class="mt-2">
    <input type="hidden" name="_token" value="{ { { csrf_token() } } }">
        <div class="form-group">
            <label for="descricao">Descrição: <span class="text-danger">*</span></label>
            <input type="text" id="descricao" name="descricao" class="form-control" autofocus required>
        </div>
        <div class="form-group">
            <label for="quantidade">Quantidade: <span class="text-danger">*</span></label>
            <input type="number" id="quantidade" name="quantidade" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="valor">Valor: <span class="text-danger">*</span></label>
            <input type="number" id="valor" name="valor" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="filosofia">Todos nós somos substituiveis?!: <span class="text-danger">*</span></label>
            <input type="text" id="filosofia" name="descricao" class="form-control" autofocus required>
        </div>
        <div class="form-group">
            <label for="data_vencimento">Data de vencimento: </label>
            <input type="date" id="data_vencimento" name="data_vencimento" class="form-control">
        </div>
        <div>Os campos marcados com <span class="text-danger">*</span> não podem estar em branco.</div>
        <input type="submit" class="btn btn-success mt-2" value="Inserir">

    </form>
</div>
