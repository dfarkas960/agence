<html>
<head>
    <title>CRUD Résurgences</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-bootgrid/1.3.1/jquery.bootgrid.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-bootgrid/1.3.1/jquery.bootgrid.js"></script>
</head>
<body>
    <div class="container box">
        <h3 align="center">Administration CRUD</h3><br />
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-10">
                        <h3 class="panel-title">Liste Employés</h3>
                    </div>
                    <div class="col-md-2" align="right">
                        <button type="button" id="add_button" data-toggle="modal" data-target="#employeeModal" class="btn btn-info btn-xs">Add</button>
                    </div>
                </div>

            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="employee_data" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th data-column-id="id_fonction">ID fonction</th>
                                <th data-column-id="id_role">ID Role</th>
                                <th data-column-id="id_contrat">ID Contrat</th>
                                <th data-column-id="nom">Nom</th>
                                <th data-column-id="prenom">Prénom</th>
                                <th data-column-id="mail">Email</th>
                                <th data-column-id="date_entree">Date Entrée</th>
                                <th data-column-id="date_sortie">Date Sortie</th>
                                <th data-column-id="login">Login</th>
                                <th data-column-id="photo">Photo</th>
                                <th data-column-id="commands" data-formatter="commands" data-sortable="false">Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
       </div>
    </div>
</body>
</html>

<div id="employeeModal" class="modal fade">
    <div class="modal-dialog">
        <form method="post" id="employee_form">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Ajouter Employé</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Entrer Nom</label>
                        <input type="text" name="nom" id="nom" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Entrer Prénom</label>
                        <input type="text" name="prenom" id="prenom" class="form-control" />
                    </div>

                    <div class="form-group">
                        <label>Entrer Email</label>
                        <input type="text" name="mail" id="mail" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Entrer login</label>
                        <input type="text" name="login" id="login" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Entrer date entree</label>
                        <input type="text" name="date_entree" id="date_entree" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Entrer ID fonction</label>
                        <input type="text" name="id_fonction" id="id_fonction" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Entrer ID rôle</label>
                        <input type="text" name="id_role" id="id_role" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Entrer ID contrat</label>
                        <input type="text" name="id_contrat" id="id_contrat" class="form-control" />
                    </div>


                </div>
                <div class="modal-footer">
                    <input type="hidden" name="employee_id" id="employee_id" />
                    <input type="hidden" name="operation" id="operation" value="Add" />
                    <input type="submit" name="action" id="action" class="btn btn-success" value="Add" />
                </div>
            </div>
        </form>
    </div>
</div>

<script type="text/javascript" language="javascript" >
$(document).ready(function(){

    var employeeTable = $('#employee_data').bootgrid({
        ajax:true,
        rowSelect: true,
        post:function()
        {
            return{
                id:"b0df282a-0d67-40e5-8558-c9e93b7befed"
            }
        },
        url:"<?php echo base_url(); ?>bootgrid/fetch_data",
        formatters:{
            "commands":function(column, row)
            {
                return "<button type='button' class='btn btn-warning btn-xs update' data-row-id='"+row.id+"'>Edit</button>" + "&nbsp; <button type='button' class='btn btn-danger btn-xs delete' data-row-id='"+row.id+"'>Delete</button>";
            }
        }
    });

    $('#add_button').click(function(){
        $('#employee_form')[0].reset();
        $('.modal-title').text("Ajouter Employé");
        $('#action').val("Add");
        $('#operation').val("Add");
    });

    $(document).on('submit', '#employee_form', function(event){
        event.preventDefault();
        var id_fonction =$('#id_fonction').val();
        var id_role =$('#id_role').val();
        var id_contrat =$('#id_contrat').val();
        var nom = $('#nom').val();
        var prenom = $('#prenom').val();
        var mail = $('#mail').val();
        var date_entree = $('#date_entree').val();
        var login = $('#login').val();
        var form_data = $(this).serialize();
        if(id_fonction != '' && id_role != '' &&  id_contrat != '' &&  nom != '' && prenom != '' && mail !='' && login != '')
        {
            $.ajax({
                url:"<?php echo base_url(); ?>bootgrid/action",
                method:"POST",
                data:form_data,
                success:function(data)
                {
                    alert(data);
                    $('#employee_form')[0].reset();
                    $('#employeeModal').modal('hide');
                    $('#employee_data').bootgrid('reload');
                }
            });
        }
        else
        {
            alert("Tout les champs sont requis");
        }
    });

    $(document).on("loaded.rs.jquery.bootgrid", function(){
        employeeTable.find('.update').on('click', function(event){
            var id = $(this).data('row-id');
            $.ajax({
                url:"<?php echo base_url(); ?>bootgrid/fetch_single_data",
                method:"POST",
                data:{id:id},
                dataType:"json",
                success:function(data)
                {
                    $('#employeeModal').modal('show');
                    $('#id_fonction').modal('show');
                    $('#id_role').modal('show');
                    $('#id_contrat').modal('show');
                    $('#nom').val(data.nom);
                    $('#prenom').val(data.prenom);
                    $('#mail').val(data.mail);
                    $('#date_entree').val(data.date_entree);
                    $('#login').val(data.login);
                    $('.modal-title').text("Edit Employee Details");
                    $('#employee_id').val(id);
                    $('#action').val('Edit');
                    $('#operation').val('Edit');
                }
            });
        });

        employeeTable.find('.delete').on('click', function(event){
            if(confirm("Etes vous sûr de vouloir supprimer?"))
            {
                var id = $(this).data('row-id');
                $.ajax({
                    url:"<?php echo base_url(); ?>bootgrid/delete_data",
                    method:"POST",
                    data:{id:id},
                    success:function(data)
                    {
                        alert(data);
                        $('#employee_data').bootgrid('reload');
                    }
                });
            }
            else
            {
                return false;
            }
        });
    });

});
</script>
