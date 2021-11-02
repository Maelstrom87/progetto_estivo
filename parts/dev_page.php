
            <!-- -genera utenti
            <form action="parts/genera.php" method="post">
                <input id="generaN" type="text" name="num">
                <input type="submit">
            </form> -->
            <div class="gestione">
                -genera viaggio
                <form id="form_dev" class="w-30 form-group"action="parts/controlla_viaggio.php" method='post'>

                        <label class="form-label" for="">Id</label>
                        <input class="form-control"type="text" name="id" id="id" disabled>
                        <label class="form-label" for="">Destinazione</label>
                        <input class="form-control"type="text" name="destinazione readonly" id="dest">
                        <label class="form-label" for="">Data Partenza</label>
                        <input class="form-control"type="date" name="partenza" id="part">
                        <label class="form-label" for="">Data Ritorno</label>
                        <input class="form-control"type="date" name="ritorno" id="rit" >
                        <label class="form-label" for="">tipo</label>
                        <input class="form-control"type="text" name="tipo" id="tipo">
                        <label class="form-label" for="">Foto</label>
                        <input class="form-control"type="text" name="foto" id="foto" >
                        <label class="form-label" for="">Prezzo</label>
                        <input class="form-control"type="text" name="prezzo" id="prezzo" >
                        <label class="form-label" for="">offerta</label>
                        <input class="form-control"type="text" name="offerta" id="offerta" >

                        <input type="submit" value="invia" class="btn btn-success " >

                </form>
                <div id="devTab">
                </div>
            </div>
            <script>

            </script>
