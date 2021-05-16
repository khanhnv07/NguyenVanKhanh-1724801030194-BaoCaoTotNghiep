<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1569006288/BBBootstrap/choices.min.css?version=7.0.0">
    <script src="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1569006273/BBBootstrap/choices.min.js?version=7.0.0"></script>



    <style>
    .mt-100 {
    margin-top: 100px
}

body {
    background: #00B4DB;
    background: -webkit-linear-gradient(to right, #0083B0, #00B4DB);
    background: linear-gradient(to right, #0083B0, #00B4DB);
    color: #514B64;
    min-height: 100vh
}

    </style>
</head>
<body>
   
    <div class="row d-flex justify-content-center mt-100">
        <div class="col-md-6"> <select id="choices-multiple-remove-button" placeholder="Select upto 5 tags" multiple>
                <option value="HTML">HTML</option>
                <option value="Jquery">Jquery</option>
                <option value="CSS">CSS</option>
                <option value="Bootstrap 3">Bootstrap 3</option>
                <option value="Bootstrap 4">Bootstrap 4</option>
                <option value="Java">Java</option>
                <option value="Javascript">Javascript</option>
                <option value="Angular">Angular</option>
                <option value="Python">Python</option>
                <option value="Hybris">Hybris</option>
                <option value="SQL">SQL</option>
                <option value="NOSQL">NOSQL</option>
                <option value="NodeJS">NodeJS</option>
            </select> </div>
    </div>

<script>
$(document).ready(function(){

var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
removeItemButton: true,
maxItemCount:5,
searchResultLimit:5,
renderChoiceLimit:5
});


});
</script>
</body>
</html>