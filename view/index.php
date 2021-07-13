<div class="container">
    <h1 class="h1">Lista de indicados</h1>
    <div class="card">
        <div class="m-2">
            <div class="info-box">
                <span class="info-box-icon bg-info"><i class="fas fa-table"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Total de Registros: </span>
                    <span class="info-box-number"><?php echo count($response); ?></span>
                </div>
            </div>
        </div>

        <div class="card-body">
            <table id="dataTable" class="table table-striped table-bordered" style="width:100%">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Status</th>
                    <th>Opções</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($response as $value) : ?>
                    <tr>
                        <td><?php echo $value->id; ?></td>
                        <td><?php echo $value->name; ?></td>
                        <td><?php echo $value->cpf; ?></td>
                        <td><?php echo $value->email; ?></td>
                        <td><?php echo $value->phone; ?></td>
                        <td><?php echo $value->status; ?></td>
                        <td style="display: flex">
                            <button title="Atualizar status" data-id="<?php echo $value->id; ?>" type="button" class="btn btn-success edit"><i class="fas fa-edit"></i></button>
                            <button title="Excluir" type="submit" data-id="<?php echo $value->id; ?>" class="btn btn-danger del"><i class="far fa-trash-alt"></i></button>
                        </td>
                    </tr>
                <?php endforeach ?>
                </tbody>
                <tfoot>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Status</th>
                    <th>Opções</th>
                </tfoot>
            </table>
        </div>
    </div>
    <a href="/adicionar.php">
        <button type="button" class="btn btn-primary mt-2">ADICIONAR INDICAÇÃO</button>
    </a>
</div>