<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="" xmlns:mso="urn:schemas-microsoft-com:office:office" xmlns:msdt="uuid:C2F41010-65B3-11d1-A29F-00AA00C14882"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Authentification {$titreVue}</title>
    <meta name="description" content="Authentification {$titreVue}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="public/assets/css/normalize.css">
    <link rel="stylesheet" href="public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="public/assets/css/themify-icons.css">
    <link rel="stylesheet" href="public/assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="public/assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="public/assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="public/assets/scss/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body class="bg-dark">x
<div class="sufee-login d-flex align-content-center flex-wrap">
    <div class="container">
        <div class="login-content">
            <div class="login-logo">
                <h3 class="titre-pLogin">{$titreVue|upper}</h3>
            </div>
            <div class="login-form">
                <div {if AuthentificationTable::getMessageErreur() neq ''} class="alert alert-danger" role="danger"{/if}>
                    {AuthentificationTable::getMessageErreur()}
                </div>
                <br>
                <form method="post" action="index.php">
                    <input type="hidden" name="gestion" value="autentification">
                    <input type="hidden" name="action" value="{$action}">
                    <div class="form-group">
                        <label></label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                            <input type="text"
                                   class="form-control"
                                   placeholder="login"
                                   name="login"
                                   value="{$unVendeur->getLogin()}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label></label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                            <input type="password"
                                   class="form-control"
                                   placeholder="mot de passe"
                                   name="motdepasse"
                                   value="">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Connexion</button>
            </div>
            </form>
        </div>
    </div>
</div>




<script src="public/assets/js/vendor/jquery-2.1.4.min.js"></script>
<script src="public/assets/js/popper.min.js"></script>
<script src="public/assets/js/plugins.js"></script>
<script src="public/assets/js/main.js"></script>


</body>
</html>
<head>
    <!--[if gte mso 9]><xml>
        <mso:CustomDocumentProperties>
            <mso:xd_Signature msdt:dt="string"></mso:xd_Signature>
            <mso:display_urn_x003a_schemas-microsoft-com_x003a_office_x003a_office_x0023_Editor msdt:dt="string">VOSGIENS Thierry</mso:display_urn_x003a_schemas-microsoft-com_x003a_office_x003a_office_x0023_Editor>
            <mso:Order msdt:dt="string">774300.000000000</mso:Order>
            <mso:xd_ProgID msdt:dt="string"></mso:xd_ProgID>
            <mso:_ExtendedDescription msdt:dt="string"></mso:_ExtendedDescription>
            <mso:SharedWithUsers msdt:dt="string"></mso:SharedWithUsers>
            <mso:display_urn_x003a_schemas-microsoft-com_x003a_office_x003a_office_x0023_Author msdt:dt="string">VOSGIENS Thierry</mso:display_urn_x003a_schemas-microsoft-com_x003a_office_x003a_office_x0023_Author>
            <mso:ComplianceAssetId msdt:dt="string"></mso:ComplianceAssetId>
            <mso:TemplateUrl msdt:dt="string"></mso:TemplateUrl>
            <mso:TriggerFlowInfo msdt:dt="string"></mso:TriggerFlowInfo>
            <mso:ContentTypeId msdt:dt="string">0x01010046FA0C9D14962941B9AF429A6E270C68</mso:ContentTypeId>
            <mso:_SourceUrl msdt:dt="string"></mso:_SourceUrl>
            <mso:_SharedFileIndex msdt:dt="string"></mso:_SharedFileIndex>
            <mso:MediaLengthInSeconds msdt:dt="string"></mso:MediaLengthInSeconds>
            <mso:TaxCatchAll msdt:dt="string"></mso:TaxCatchAll>
            <mso:MediaServiceImageTags msdt:dt="string"></mso:MediaServiceImageTags>
            <mso:lcf76f155ced4ddcb4097134ff3c332f msdt:dt="string"></mso:lcf76f155ced4ddcb4097134ff3c332f>
        </mso:CustomDocumentProperties>
    </xml><![endif]-->
    <title></title></head><!--[if gt IE 8]>