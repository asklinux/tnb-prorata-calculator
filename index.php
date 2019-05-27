<?php
/**
 * Tnb prorata Calculator
 * 
 * @package TNB calculator
 * @author hasnan hasim  (nan asklinux) <hasnan@tunnelbiz.com>
 * @version 1.1.1
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TNB Online Calculator @ techsemut.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<style>
.input-group-prepend {
  width : 50%; /*adjust as needed*/
}

.input-group-prepend label {
  width: 100%;
  overflow: hidden;
}
</style>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">TNB Online Calculator</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="http://techsemut.com">techsemut.com <span class="sr-only">(current)</span></a>
      </li>
      
    </ul>
  </div>
</nav>

<center>
<img src="https://i.pinimg.com/736x/d1/21/f1/d121f1b0dd3ec6236aea83adbcae6772.jpg" alt="">    
</center>
<hr/>
  

    <div class="container">
  <div class="row">
    <div class="col-sm">
    </div>
    <div class="col-sm">
   <!--
    <div class="input-group mb-3">
         
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">Jumlah Hari Bacaan</span>
            </div>
                <select name="bulan" id="bulan">
                    <option value="31">Januari</option>
                    <option value="28">Febuari</option>
                    <option value="31">Mac</option>
                    <option value="30">April</option>
                    <option value="31">May</option>
                    <option value="30">Jun</option>
                    <option value="31">Julai</option>
                    <option value="31">Ogos</option>
                    <option value="30">September</option>
                    <option value="31">Oktober</option>
                    <option value="30">November</option>
                    <option value="31">Disamber</option>

                </select>
        </div>   
        -->

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text w-100" id="inputGroup-sizing-default">Jum. Hari Bacaan</span>
            </div>
                <input type="number" id="hari" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>   

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text  w-100" id="inputGroup-sizing-default">Faktor Prorata</span>
            </div>
                <input type="number" id="prorata2" readonly class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>  


        <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text  w-100" id="inputGroup-sizing-default">Kegunaan kWh</span>
                    </div>
                        <input type="number" id="kegunaan" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>  
        </div>


       
    <div class="col-sm"> 
    <div class="alert alert-primary" role="alert">
                <p id="p1"></p>
                <p id="p2"></p>
                <p id="p3"></p>
                <p id="p4"></p>
                <p id="p5"></p>
                Kadar Bil Anda =  <b id="hasil"></b>
        </div>
    </div>
  </div>
</div>
<br/><br/>
<center>
<a href="https://www.tnb.com.my/residential/pricing-tariffs/"> Sumber Rujukan</a> | 
<a href="https://github.com/asklinux/tnb-prorata-calculator">Source Code</a>
<br/>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- csgerakkhas_crosscol_AdSense1_728x90_as -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-6407931689016181"
     data-ad-slot="2950463103"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<br/>
* Kiraan ini bukan lah kiraan rasmi dari pihak TNB , Ia hanya kiraan dari pengguna merujuk kepada kiraan yang di keluarkan dalam laman web TNB sahaja .<br/><br/>
<b>Penafian</b> : pihak kami tidak bertanggungjawab terhadap sebarang kehilangan atau kerugian yang dialami kerana menggunakan mana-mana maklumat yang diperolehi dari laman web ini. 
</center>

</body>
</html>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script>

    $("#hari").on('keyup change',function(){

        hari = $(this).val();

        prorata = hari/30;

        if (hari == 31){
            nilaiprorata = 1;
        }
        else if (prorata < 1){
            nilaiprorata = 1;
        }
        else {
            nilaiprorata = prorata.toFixed(3);;
        }

        $("#prorata2").val(nilaiprorata);
        $("#kegunaan").val('');

    });

    $("#kegunaan").on('keyup change',function(){

        guna = $(this).val();
        pra = $("#prorata2").val();
     

        if (guna <= 200 || guna <= 200*pra){
            

            $("#p1").empty();
            $("#p2").empty();
            $("#p3").empty();
            $("#p4").empty();
            $("#p5").empty();
            $("#hasil").empty();
            bayaran = guna*0.218;

            rumus = guna+" X 0.218";

            $("#p1").text(rumus);
            $("#hasil").text(bayaran);

        }
        else {
            $("#p1").empty();
            $("#p2").empty();
            $("#p3").empty();
            $("#p4").empty();
            $("#p5").empty();
            $("#hasil").empty();
                    
                    semak = 200+(100*pra);
                    semakx = (200*pra)+(100*pra);
                    if ( guna < semak || guna < semakx){
                        j1 = 200*pra*0.218;
                        j2 = (guna-200)*pra*0.334;

                        bayaran = j1+j2;

                        rumus =200+" X "+pra+" X 0.218";
                        rumus2 =guna-200+" X 0.334"; 

                        $("#p1").text(rumus);
                        $("#p2").text(rumus2);
                        $("#hasil").text(bayaran);
                    }
                    else {
                        $("#p1").empty();
                        $("#p2").empty();
                        $("#p3").empty();
                        $("#p4").empty();
                        $("#p5").empty();
                        $("#hasil").empty();

                        semak2 = (200*pra)+(100*pra)+(300*pra);

                        if (guna <= semak2){
                            
                            j1 = 200*pra*0.218;
                            j2 = 100*pra*0.334;
                            j3 = (guna-((200*pra)+(100*pra)))*0.516;

                            bayaran = j1+j2+j3;
                            
                            rumus =200+" X "+pra+" X 0.218";
                            rumus2 =100+" X "+pra+" X 0.334"; 
                            rumus3 = (guna-(200*pra+100*pra))+" X 0.516";

                            $("#p1").text(rumus);
                            $("#p2").text(rumus2);
                            $("#p3").text(rumus3);
                            $("#hasil").text(bayaran);


                        }
                        else {
                            $("#p1").empty();
                            $("#p2").empty();
                            $("#p3").empty();
                            $("#p4").empty();
                            $("#p5").empty();
                            $("#hasil").empty();

                            semak3 = (200*pra)+(100*pra)+(300*pra)+(300*pra);

                            if(guna <= semak3){

                                j1 = 200*pra*0.218;
                                j2 = 100*pra*0.334;
                                j3 = 300*pra*0.516;
                                j4 = (guna-((200*pra)+(100*pra)+(300*pra)))*0.546;

                                bayaran = j1+j2+j3+j4;
                                
                                rumus =200+" X "+pra+" X 0.218";
                                rumus2 =100+" X "+pra+" X 0.334"; 
                                rumus3 =300+" X "+pra+" X 0.516"; 
                                rumus4 = guna-(200*pra+100*pra+300*pra)+" X 0.546";

                                $("#p1").text(rumus);
                                $("#p2").text(rumus2);
                                $("#p3").text(rumus3);
                                $("#p4").text(rumus4);
                                $("#hasil").text(bayaran);
                            }
                            else {
                                j1 = 200*pra*0.218;
                                j2 = 100*pra*0.334;
                                j3 = 300*pra*0.516;
                                j4 = 300*pra*0.546;
                                j5 = (guna-((200*pra)+(100*pra)+(300*pra)+(300*pra)))*0.571;

                                bayaran = j1+j2+j3+j4+j5;
                                
                                rumus  =200+" X "+pra+" X 0.218";
                                rumus2 =100+" X "+pra+" X 0.334"; 
                                rumus3 =300+" X "+pra+" X 0.516"; 
                                rumus4 =300+" X "+pra+" X 0.546"; 
                                rumus5 =guna-((200*pra)+(100*pra)+(300*pra)+(300*pra))+" X 0.571";

                                $("#p1").text(rumus);
                                $("#p2").text(rumus2);
                                $("#p3").text(rumus3);
                                $("#p4").text(rumus4);
                                $("#p5").text(rumus5);
                                $("#hasil").text(bayaran);
                            }
                        }

                    }
           
          
        }

                   

        

    });

</script>