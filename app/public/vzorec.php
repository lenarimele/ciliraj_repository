<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
    <div class="container p-2 m-3 fs-4 text-start text-break">
        <p><span class="fw-bold">Ime in priimek: </span><?php echo $izpis['ime'].' '.$izpis['priimek'];?></p>
        <p><span class="fw-bold">Telefon: </span><?php echo $izpis['telefon']?></p>
        <p><span class="fw-bold">Naslov: </span><?php echo $izpis['naslov'].' '.$izpis['kraj'];?></p>
        <p><span class="fw-bold">Pošta: </span><?php echo $izpis['postna_stevilka'].' '.$izpis['kraj'];?></p>
        <p><span class="fw-bold">Naziv podjetja: </span><?php echo $izpis['naziv_podjetja'].' '?></p>
        <p><span class="fw-bold">DDV: </span><?php echo $izpis['ddv'].' '?></p>
        <p><span class="fw-bold">Email: </span><?php echo $izpis['email']?></p>
        

    </div>
</div>