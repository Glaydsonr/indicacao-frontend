<?php include 'view/template-parts/header.php'; ?>

<title>Adicionar Indicação</title>

<div class="container">
    <div class="card col-md-12">
        <div class="py-5 text-center">
            <h2>Formulário de indicação</h2>
            <p class="lead">Preencha o formulário abaixo para entrar na lista dos indicados.</p>
        </div>

        <div class="card-body">
            <form action="src/create-ajax.php" id="create" class="form" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="name">Nome:</label>
                    <input type="text" name="name" class="form-control"
                           placeholder="Nome" value="">
                </div>

                <div class="mb-3">
                    <label for="name">CPF:</label>
                    <input type="text" name="cpf" class="form-control" id="cpf"
                           placeholder="CPF" value="">
                </div>

                <div class="mb-3">
                    <label for="name">Email:</label>
                    <input type="text" name="email" class="form-control"
                           placeholder="Email" value="">
                </div>

                <div class="mb-3">
                    <label for="name">Telefone:</label>
                    <input type="text" name="phone" class="form-control" id="phone"
                           placeholder="Telefone" value="">
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-success">Salvar</button>
                    <a href="/" class="btn btn-info">Voltar</a>
                </div>

            </form>
        </div>
    </div>
</div>


<?php include 'view/template-parts/footer.php'; ?>