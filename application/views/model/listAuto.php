<div class="box span12">
    <div class="box-header well" data-original-title>
        <h2>Lista modele auto</h2>
    </div>
    <div class="box-content">
        <table class="table table-striped table-bordered bootstrap-datatable datatable">
            <thead>
                <tr>
                    <th>Nume Masina</th>
                    <th>Descriere Model</th>
                    <th>Nume Marca</th>
                    <th></th>

                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $id => $auto) : ?>
                    <tr>
                        <td><?php echo $auto['name']; ?></td>
                        <td class="center"><?php echo $auto['weight']; ?></td>
                        <td class="center"><?php echo $auto['doorsNumber']; ?></td>
                        <td class="center">
                            <a class="btn-mini btn-danger" href="/model/edit/<?php echo $auto['id']; ?>">
                                <i class="icon-edit icon-white"></i>
                                Editeaza model
                            </a>
                            <a class="btn-mini btn-success" href="/auto/add/<?php echo $auto['id']; ?>">
                                <i class="icon-edit icon-white"></i>
                                Adauga masina
                            </a>
                            <a class="btn-mini btn-success" href="/model/listAuto/<?php echo $auto['id']; ?>">
                                <i class="icon-list icon-white"></i>
                                Lista masini
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>


            </tbody>
        </table>
    </div>
</div>