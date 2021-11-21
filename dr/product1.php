<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GENOMICS DNA API | Datareveal</title>

    <!-- Boostrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/product1.css">
</head>

<body>

    <!-- Navigation Section -->
    <section for="Nav-bar-menu">
        <?php
         include "navbar.php";
        ?>
    </section>

    <!-- Navigation Section For Mobile -->
    <section for="Nav-bar-menu" class="d-block d-sm-none">
        <?php
            include "mobile-navbar.php";
        ?>
    </section>

    <!-- Landing Contents -->
    <section for="Landing-contents">
        <div class="row" id="landing" style="padding: 0;margin: 0;">

            <div class="col-1"></div>
            <div class="col-lg-5 col-md-5 col-sm-12 my-auto p-4" id="landing-contents">
                <h5 id="landing-contents-h5">Datareveal Extract - GENOMICS DNA API</h5>
                <h3 id="landing-contents-h3">Genomic DNA from hela cells exposed to normoxia (N) or hypoxia (H) for 5 h or to staurosporine (St) for 24 hours was extracted by the Apoptotic DNA Ladder Isolation Kit and electrophorsesd in an agarose gel, which was stained with ethidium bromide.</h3>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 ms-lg-5 my-auto" id="landing-image">
                <img src="images/genomics-land.png" class="img-fluid mt-5 ms-4 ms-sm-0" alt="Datareveal-Vision"
                    height="100%" width=90%">
            </div>
        </div>
    </section>

    <!-- Product Features -->
    <section for="Product-features">
        <div class="row p-5 border bg-light">
            <h4 class="text-center"><strong>Genomic deoxyribonucleic acid is chromosomal DNA, in contrast to extra-chromosomal DNAs like plasmids. It is also then abbreviated as   DNA</strong> </h4>
            <div class="col-lg-6 col-md-4 p-5">
                <img src="images/bulletpoint__squr-01.svg">
                <span id="pro-con-sub" style="margin-left: 15px;">Easy to use UI - Locate the exact points in video
                    files where objects and people surface.</span>
            </div>

            <div class="col-lg-6 col-md-4 p-5">
                <img src="images/bulletpoint__squr-01.svg">
                <span id="pro-con-sub" style="margin-left: 15px;">Pre-trained and expandable — Recognize 80 object
                    classes out of the box, train new classes with no coding required.</span>
            </div>

            <div class="col-lg-6 col-md-4 p-5">
                <img src="images/bulletpoint__squr-01.svg">
                <span id="pro-con-sub" style="margin-left: 15px;"> Advanced Facial Recognition – Identify individuals
                    from multiple angles, even with face masks.</span>
            </div>

            <div class="col-lg-6 col-md-4 p-5">
                <img src="images/bulletpoint__squr-01.svg">
                <span id="pro-con-sub" style="margin-left: 15px;">Cloud, On Premise, and Edge Ready</span>
            </div>
        </div>
    </section>

    <!-- Contents Section -->
    <section for="Product-contents">
        <!-- 1 -->
        <div class="row p-5">
            <div class="col-lg-5 col-sm-12 p-5">
                <img src="images/genomics-content-one.png" id="pro-img">
            </div>
            <div class="col-lg-7 col-sm-12 p-5" style="margin-top: -5%;">
                <p id="pro-con"><strong>GENOMICS DNA API INTELLIGENT</strong></p>
                <p id="pro-con-sub">The genome of an organism (encoded by the genomic DNA) is the (biological) information of heredity which is passed from one generation of organism to the next. That genome is transcribed to produce various RNAs, which are necessary for the function of the organism.</p>
            </div>
        </div>

        <!-- 2 -->
        <div class="row p-5" style="margin-top: -8%;">
            <div class="col-lg-5 col-sm-12 p-5 my-auto d-block d-sm-none">
                <img src="images/genomics-content-two.jpg" id="pro-img">
            </div>
            <div class="col-lg-7 col-sm-12 p-5" style="margin-top: -5%;">
                <p id="pro-con"><strong>BUILDING BLOCK OF LIFE</strong></p>
                <p id="pro-con-sub">Deoxyribonucleic acid, (DNA) is the molecule that carries the instructions for all aspects of an organism’s functions, from growth, to metabolism, to reproduction. In living organisms, most of the DNA resides in tightly coiled structures called chromosomes, located inside the nucleus in each cell.</p>
            </div>
            <div class="col-lg-5 col-sm-12 p-5 my-auto d-none d-sm-block">
                <img src="images/genomics-content-two.jpg" id="pro-img">
            </div>
        </div>

        <!-- 3 -->
        <div class="row p-5" style="margin-top: -8%;">
            <div class="col-lg-5 col-sm-12 p-5">
                <img src="images/genomics-content-three.jpg" id="pro-img">
            </div>
            <div class="col-lg-7 col-sm-12 p-5" style="margin-top: -5%;">
                <p id="pro-con"><strong>FUNCTION OF GENOMICS</strong></p>
                <p id="pro-con-sub">Genomic DNA, or gDNA, is the chromosomal DNA of an organism, representing the bulk of its genetic material. It is distinct from bacterial plasmid DNA, complementary DNA, or mitochondrial DNA. Genome sizes vary by organism, ranging from a few kilobases in viruses, a few megabases in bacteria, and tens to hundreds of gigabases in higher eukaryotes.</p>
            </div>
        </div>
    </section>

    <!-- Parellex Section -->
    <section for="Parellex">
        <div class="row p-4" id="parallax" style="margin: 0; padding: 0">
            <h3 id="parallax-h3">
                SMART Genomics provide support for using genomic information in the healthcare environment by providing new resource definitions and resource extensions to the existing SMART on FHIR framework.
            </h3>
        </div>
    </section>


    <!-- Features Section -->
    <section for="Subpage-feature-contents">
        <?php
        include "feature.php";
        ?>
    </section>

    <!-- Get In Touch Section -->
    <section for="Get-in-touch">
        <?php
        include "get-in-touch.php";
        ?>
    </section>


    <!-- Footer Section -->
    <section for="Footer">
        <?php
            include "footer.php";
        ?>
    </section>
</body>

</html>