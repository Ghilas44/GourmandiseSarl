<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{$titreVue}</title>
    <meta name="description" content="{$titreVue}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="public/favicon.ico">

    <link rel="stylesheet" href="public/assets/css/normalize.css">
    <link rel="stylesheet" href="public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="public/assets/css/themify-icons.css">
    <link rel="stylesheet" href="public/assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="public/assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="public/assets/css/lib/datatable/dataTables.bootstrap.min.css">
    <!-- <link rel="stylesheet" href="template/assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="public/assets/scss/style.css">
    <link href="public/assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>

<body>


<!-- Left Panel -->


{include file='public/left.tpl'}

<!-- FIN : Left Panel -->


<!-- Right Panel -->

<div id="right-panel" class="right-panel">

    <!--Header -->

    {include file='public/header.tpl'}

    <!-- FIN : header -->


    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>La gourmandise, ça se partage !</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="index.php?gestion=produit">Produits</a></li>
                        <li class="active">{$titreVue}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>



    <div class="content mt-3">
        <div class="animated fadeIn">

            <div class="row">


                <div class="col-md-6">

                    <div {if ProduitTable::getMessageErreur () neq ''} class="alert alert-danger" role="alert" {/if} >
                        {ProduitTable::getMessageErreur ()}
                    </div>

                    <div class="card">
                        <div class="card-header"><strong>{$titrePage}</strong></div>
                        <form action="index.php" method="POST">

                            <!-- PLACER LE FORMULAIRE EN CONSULTATION -->

                            <input type="hidden" name="gestion" value="produit">

                            <input type="hidden" name="action" value="{$action}">

                            <div class="card-body card-block">

                                {if $action neq 'ajouter'}


                                    <div class="form-group">
                                        <label for="text" class=" form-control">
                                            Référence :
                                        </label>
                                        <input type="text" name="reference"
                                               class="form-control"
                                               value="{$unProduit->getReference()}"
                                               readonly>
                                    </div>

                                {/if}

                                <div class="form-group">
                                    <label for="text" class=" form-control">
                                        Désignation du produit<sup>*</sup>:
                                    </label>
                                    <input type="text" name="designation" class="form-control" value="{$unProduit->getDesignation()}"

                                            {$readonly}>
                                </div>

                                <div class="form-group">
                                    <label for="text" class=" form-control">
                                         Quantité :
                                    </label>
                                    <input type="number" name="quantite" class="form-control"
                                           value="{$unProduit->getQuantite()}" {$readonly}>
                                </div>

                                <div class="form-group">
                                    <label for="text" class=" form-control">
                                        Descriptif<sup>*</sup>:
                                    </label>
                                    <input type="text" name="descriptif" class="form-control" value="{$unProduit->getDescriptif()}"
                                            {$readonly}>
                                </div>

                                <div class="form-group">
                                    <label for="text" class=" form-control">
                                        Prix unitaire Hors Taxe <sup>*</sup>:
                                    </label>
                                    <input type="number" step="any" name="prix_unitaire_HT" class="form-control"
                                           value="{$unProduit->getPrix_unitaire_HT()}" {$readonly}>
                                </div>

                                <div class="form-group">
                                    <label for="text" class=" form-control">
                                        Stock <sup>*</sup> :
                                    </label>
                                    <input type="number" name="stock" class="form-control"
                                           value="{$unProduit->getStock()}" {$readonly}>
                                </div>

                                <div class="form-group">
                                    <label for="number" class=" form-control">
                                        poids / pièce <sup>*</sup> :
                                    </label>
                                    <input type="text" name="poids_piece" class="form-control"
                                           value="{$unProduit->getPoids_piece()}" {$readonly}>
                                </div>
                                <div class="card-body card-block">

                                    <div class="col-md-6">

                                        <input type="button" class="btn btn-submit" value="Retour"
                                               onclick="location.href='index.php?gestion=produit'">

                                    </div>

                                    <div class="col-md-6">
                                        {if $action != 'consulter'}
                                            <input type="submit"
                                                   class="btn btn-submit"
                                                   name="btn-valider"
                                                   value="{$action|capitalize}">

                                        {/if}

                                    </div>
                                    <br>
                                </div>



                        </form>
                    </div>
                </div>

            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->
    <script src="public/assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="public/assets/js/plugins.js"></script>
    <script src="public/assets/js/main.js"></script>


    <script src="public/assets/js/lib/data-table/datatables.min.js"></script>
    <script src="public/assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="public/assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="public/assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="public/assets/js/lib/data-table/jszip.min.js"></script>
    <script src="public/assets/js/lib/data-table/pdfmake.min.js"></script>
    <script src="public/assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="public/assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="public/assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="public/assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="public/assets/js/lib/data-table/datatables-init.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
            $('#bootstrap-data-table-export').DataTable();
        });
    </script>

</body>

</html>