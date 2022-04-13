<?php include_once 'data.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
html{
    font-size: 10px;
}
body{
    background: #222;
    height: 100vh
}
.card{
    position: absolute;
    top: 40%;
    left: 50%;
    transform: translate(-50%,-50%);
    height: 60rem;
    background: #333;
    border-radius: 2rem;
    overflow: hidden;
    width: 45rem;
}
.color-top{
    height: 20%;
    width: 100%;
}
.head{
    background: #333;
    transform: translate(-50%,-50%);
    left: 50%;
    border-radius: 100%;
    position: absolute;
    width: 10rem;
    height: 10rem;
    display: flex;
    justify-content: center;
    align-items: center;
}
.head-image{
    width: 80%;
    height: 80%;
    border-radius: 100%;

}
.informations{
    display: flex;
    flex-direction: column;
    justify-content: space-evenly;
    position: absolute;
    top: 60%;
    left: 50%;
    transform: translate(-50%,-50%);
    color: white;
    font-family: sans-serif;
    width: 80%;
    height: 60%;
}
.informations p{
    font-size: 2rem;
    margin-left: 1rem;
}
.recharge{
    font-size:1rem;
    position: absolute;
    top: 80%;
    left: 50%;
    transform: translate(-50%,-50%);
    color: #222;
    font-weight: bold;
    width: 15rem;
    height: 5rem;
    border: none;
    outline: none;
    border-radius: .7rem;


}
    </style>
    <title>Générateur aléatoire</title>
</head>
<body>
    
<div class="card">
    <div class="color-top" style="background:<?= $color ?>;">
    </div>
    <div class="head">
        <div class="head-image" style="background : url('<?= $picture ?>');background-position: center; background-size: cover;background-repeat: no-repeat;">
            
        </div>
    </div>
    <div class="informations">
        <p>
            Nom : <?= $name ?>
        </p>
        <p>
            Prénom(s) : <?= $firstname ?>
        </p>
        <p>
            Sexe : <?= $gender ?>
        </p>
        <p>
            Nationalité : <?= $nat?>
        </p>
        <p>
            Né(e) le : <?= $birth?>
        </p>
        <p>
            Age : <?= $age?>
        </p>
        <p>
            Email : <?= $email?>
        </p>
        <p>
            Vit à : <?= $location?>
        </p>
        <p>
            Tel : <?= $cell?>
        </p>
    </div>

</div>
<button class="recharge" style="background-color: <?= $color?>;">RECHARGER</button>
<script>document.querySelector('.recharge').addEventListener('click',()=>{location.reload()})
    window.addEventListener('load',()=>{
    document.querySelector('html').style.fontSize = window.innerWidth/100 + 'px'
})
        window.addEventListener('resize',()=>{
    document.querySelector('html').style.fontSize = window.innerWidth/100 + 'px'
})
    
    </script>
</body>
</html>
