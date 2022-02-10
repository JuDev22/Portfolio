<?= $this->extend('layouts/base') ?>
<?= $this->section('content') ?>
<!-- HELLO -->
<div class="container container-hello position-relative unselectable">
    <div class="position-absolute top-0 start-0 pad">
        <span class="d-inline-block bg-danger rounded-circle icon"></span>
        <span class="d-inline-block bg-warning rounded-circle icon"></span>
        <span class="d-inline-block bg-success rounded-circle icon"></span>
    </div>
    <div class="fenetre">
        <h1 class="hello m-5">
            <div class="typewrite font" data-period="1000" data-type='["Console.WriteLine(\"Hello world !\")","display dialog \"Hello world !\"","echo \"Hello world !\"","print (\"Hello world !\")" ]'>
                <span class="wrap"></span>
            </div>
        </h1>
    </div>
</div>
<span id="about"></span>
<br>
<br>
<!-- ABOUT -->
<h1 class="h1-about">ABOUT ME !</h1>
<div class="container container-about justify-content-around align-items-center">
    <div class="left-side d-flex flex-column">
        <div class="text-propos">
            <p class="text-white">Bienvenue sur mon Portfolio. Je m'appelle Julian et je suis en formation pour devenir développeur d'application Web et Mobile. Passionné de lignes de codes, j'ai décidé de me former aux métiers très vastes et innovants du développement.</p>
            <p class="text-white ps-3">Voici quelques langages qui me sont familiers : </p>
        </div>
        <div class="icon-propos d-flex flex-row">
            <span class="d-flex flex-column p-3 align-items-center justify-content-center">
                <i class='bx bxl-html5'></i>
                <p class="text-white ft-size">HTML5</p>
            </span>
            <span class="d-flex flex-column p-3 align-items-center justify-content-center">
                <i class='bx bxl-css3'></i>
                <p class="text-white ft-size">CSS3</p>
            </span>
            <span class="d-flex flex-column p-3 align-items-center justify-content-center">
                <i class='bx bxl-javascript'></i>
                <p class="text-white ft-size">JavaScript</p>
            </span>
            <span class="d-flex flex-column p-3 align-items-center justify-content-center">
                <i class='bx bxl-python'></i>
                <p class="text-white ft-size">Python</p>
            </span>
            <span class="d-flex flex-column p-3 align-items-center justify-content-center">
                <i class='bx bxl-php'></i>
                <p class="text-white ft-size">PHP</p>
            </span>
        </div>
    </div>
    <div class="right-side">
        <img src="<?= img_url('contact.png') ?>" alt="" height="200px" width="200px">
    </div>
</div>
<span id="projets"></span>
<h1 class="h1-about p-5">PROJECTS !</h1>
<div class="container bloc-projet d-flex align-items-center justify-content-center flex-row">
    <?php foreach ($projets as $projet) : ?>
        <span class="back-title d-flex align-items-center justify-content-center mx-5 flex-column">
            <h2 class="title-projet text-white"><?= $projet['titre'] ?></h2>
            <img src="<?= img_url($projet['image']) ?>" class="img-projet" alt="<?= $projet['titre'] ?>" height="200px" width="400px">
            <p class="date text-white">Publié le : </p>
        </span>
    <?php endforeach; ?>
</div>
<!-- DIPLOMES / CERTIFICATS -->
<!-- CONTACT -->
<div class="container-fluid">
        
</div>
<?= $this->endSection() ?>