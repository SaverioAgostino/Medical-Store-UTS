<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Store</title>
    <link rel="stylesheet" href="Store.css" />
</head>


<body>
    <!-- navbar -->
    <div class="sticky-top">
        <header class="header">
            <img src="./img/logo.png" alt="logo">
            <nav class="navbar">
                <a href="#">Store</a>
                <a href="#">Home</a>
                <a href="#">Checkout</a>
            </nav>

        </header>
    </div>
    <!-- navbar end -->

    <!-- search -->
    <div class="container-2">
        <input type="text" name="text" class="box" placeholder="Search" />
    </div>
    <!-- end search -->

    <!-- Card -->
    <div class="store p-5 d-flex flex-wrap justify-content-center">
        <?php
    $img = array("rhinos.png", "cdr.png", "eyeflush.png", "safecare.png", "freshcare-hot.png", "freshcare-lavender.png", "polysilane.png", "medicated-oil.png", "enkasari.png", "paracetamol.png", "sakatonik.png", "woods.png");
    $title = array("Rhinos SR", "CDR Vitamin", "Rohto Eyeflush", "Safe Care", "Freshcare Hot", "Freshcare Lavender", "Polysilane", "Medicated Oil", "Enkasari Herbal", "Paracetamol", "Sakatonik Activ", "Woods Peppermint");
    $desc = array("Rhinos SR dapat Meredakan gejala yang berhubungan dengan rinitis alergi misalnya bersin, hidung tersumbat, rinore, pruritus & lakrimasi.", 
    "CDR mengandung kalsium, vitamin C, vitamin D, dan vitamin B6 untuk menjaga kesehatan tulang, serta membantu memenuhi kebutuhan kalsium.", 
    "Rohto Eyeflush adalah obat tetes mata steril dengan sensasi dingin untuk mengatasi mata merah karena iritasi ringan.",
    "Safe Care adalah Aromaterapi untuk membantu meringankan sakit kepala, pusing, mabuk, mual, masuk angin, gatal-gatal.",
    "Freshcare adalah minyak angin aromatherapy yang berkhasiat untuk membantu meringankan sakit kepala, perut kembung, mabuk perjalanan, gejala flu dan pegal.",
    "Freshcare adalah minyak angin aromatherapy yang berkhasiat untuk membantu meringankan sakit kepala, perut kembung, mabuk perjalanan, gejala flu dan pegal.",
    "Polysilane adalah obat untuk mengatasi gangguan pada saluran pencernaan seperti gastritis, perut kembung, maag, dispepsia, hiatus hernia, tukak lambung dan usus duabelas jari.",
    "Medicated Oil merupakan minyak herbal untuk membantu meredakan sakit kepala, perut kembung, mual dan gatal akibat gigitan serangga, juga meredakan pegal-pegal dan nyeri otot.",
    "Enkasari Herbal merupakan cairan obat kumur untuk membantu mengurangi sariawan, menyegarkan mulut dan mengurangi bau mulut.",
    "Paracetamol adalah obat untuk meredakan demam dan nyeri ringan hingga sedang, misalnya sakit kepala, nyeri haid, atau pegal-pegal.",
    "Sakatonik Active membantu memenuhi kebutuhan vitamin D serta membantu penyerapan kalsium dan fosfor di dalam tubuh.",
    "Woods Peppermint adalah obat sirup dengan bahan alami yang digunakan untuk membantu meredakan batuk berdahak.");
    $img_tot = count($img);
    echo '<div class="store p-5 d-flex flex-wrap justify-content-center">';
    

    for ($i = 0; $i < $img_tot; $i++) {
      $img_name = $img[$i];
      echo '<div class="card mx-auto m-3" style="width: 250px;">
        <img src="./obat/' . $img_name . '"  class="card-img-top" alt="' .$img_name .'">
        <div class="card-body">
          <h5 class="card-title fw-bold">' .$title[$i] .'</h5>
          <p class="card-text justify-text">'. $desc[$i] .'</p>
          <a href="#" class="btn btn-primary">Beli Sekarang!</a>
        </div>
      </div>';
    }
    echo '</div>';
    ?>
    </div>
    <!-- card end -->

    <!-- footer -->
    <footer>
        Copyright &copy; TokoObatWistika 2045 menuju Indonesia Maju

    </footer>
    <!-- Footer end -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>