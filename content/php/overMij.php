<?php include("./content/config/config_db.php"); ?>
<script src="content/javascript/overmij.js"></script>
<div class="container home_text">
    <div class="row">
        <div class="col-md-6">
            <h1>Over mij</h1>
            <p>
                Hallo! Mijn naam is <strong> Roï Eielts</strong>, ben 18 jaar oud en ik ben geboren in Goes op 7 september 2004. Persoonlijk ben ik ben zelf erg geduldig, vrolijk, optimistisch, zelfstandig en ik ben altijd een persoon die doorzet als iets tegenzit. Daarnaast heb ik een bijbaantje als AGF bij de jumbo foodcorner in Goes. Natuurlijk heb ik hobby`s met als mijn favoriete hobby auto`s spotten, maar ik vind het ook leuk om paarden te verzorgen en met de auto rijden. Verder doe ik ook nog een opleiding genaamd Software Development waarbij ik in leerjaar 2 zit. Ik heb deze opleiding gekozen om mijn kennis op computers te kunnen verbeteren en om te leren hoe je een applicatie te ontwikkelen.
            </p>
        </div>
        <div class="col-md-6">
            <p>Dit ben ik</p>
            <img src="content/img/roi.png" class="afbeelding">
        </div>
    </div>
</div>
<div class="ruimte">
    <h3 class="center">Opleiding/School</h3>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <p>
                Ik zit nu op Scala Vlissingen hierbij werk ik nu aan een project met collega`s. Ten slot krijg ik ook nog basis vakken zoals Nederlands, Engels en Rekenen. Deze vakken kreeg ik vorig jaar ook. verder gaf scalda ook les aan me in databases, programmeren, software engineering ontwerpen en projectmatig werken (SCRUM).
            </p>
        </div>
        <div class="col-md-6">
            <form method="get" action="CV-Roï.docx">
                <button class="btn btn-primary" type="submit">Download mijn cv</button>
            </form>
        </div>
    </div>
</div>
</div>
</div>
<div class="container">
    <h1 class="center ruimte">mijn bijbaan</h1>
    <div class="inhoud">
            <div style="height: 329px; width: 329px; float: left;">
                <img src="content/img/jumbo.jpg" height="327" width="327">
            </div>
                <?php
                $sql = "SELECT * FROM werk ORDER BY id DESC;";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="overmijdiv">';
                        echo "<h4> ".$row["periode"]." </h4>";
                        echo "<h8> ".$row["als_wat"]." </h8>";
                        echo "<p> ".$row["taak"]." </p>";
                        echo '</div>';
                    }
                } else {
                    echo "oops, er ging iets mis";
                }
                $conn->close();
                ?>
                </div>
    </div>
</div>