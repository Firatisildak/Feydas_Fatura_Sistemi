<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bootstrap.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html-to-image/2.1.0/html2canvas.min.js"></script>
  

  <title>Document</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="table-responsive">
          <table class="table table-bordered border-dark">
            <tbody>
              <tr>
                <td>From</td>
                <td> : </td>
                <td>FEYDAŞ MAKİNE</td>
              </tr>
              <tr>
                <td>TO</td>
                <td> : </td>
              </tr>
              <tr>
                <td>Contact person</td>
                <td> : </td>
                <td>ARIAAN</td>
              </tr>
              <tr>
                <td>Tel No</td>
                <td> : </td>
                <td>+31 6 19174717</td>
              </tr>
              <tr>
                <td>E-mail Address</td>
                <td> : </td>
                <td>info@greenfoils.nl</td>
              </tr>
              <tr>
                <td>Address</td>
                <td> : </td>
                <td>HOLLAND</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="col-md-4 offset-md-4">
        <div class="table-responsive">
          <table class="table table-bordered border-dark">
            <tbody>
              <form action="index.php" method="post"> <!-- burası inputa yazılan yazıyı modal sayfasında çıktı olarak gösteriyor.-->
                <tr>
                  <td>DATE</td>
                  <td> : </td>
                  <td><input type="datetime-local" onInput="getValue('dateid', 'dateresult')" id="dateid" class="form-control"></td>
                </tr>
                <tr>
                  <td>QUOTATION NO</td>
                  <td> : </td>
                  <td><input type="text" onInput="getValue('quotatiid', 'result')" id="quotatiid" class="ps-3"></td>
                </tr>
              </form>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="row">
      <form action="index.php" method="post">
        <div class="input-group mb-3">
          <input type="text" name="motor_power" class="ms-2" placeholder="Makine Sayısı Gir">
        </div>
        <input type="submit" value="Gönder" name="makineSayisi">
      </form>
      <?php
      // PHP kodunuz burada başlıyor
      if (isset($_POST['makineSayisi'])) {
        $degisken = $_POST["motor_power"];
        for ($i = 1; $i <= intval($degisken); $i++) {
          echo '<div class="col-md-12">
        <table class="table table-bordered border-dark text-center">
          <thead>
            <tr>
              <th scope="col">ITEM NO</th>
              <th scope="col">DESCRIPTION</th>
              <th scope="col">QTY</th>
              <th scope="col">UNIT PRICE</th>
              <th scope="col">TOTAL PRICE</th>
            </tr>
          </thead>
          <tbody>
            <form action="index.php" method="post">
              <tr>
                <th rowspan="3" scope="row">' . $i . '</th>
                <th scope="col">
                  <div class="input-group mb-3">
                    <select class="form-select" id="inputGroupSelect01_' . $i . '" onchange="handleSelectChange(' . $i . ')" name="selected_option_' . $i . '">
                      <option selected>Seçiniz...</option>
                      <option value="1">GRANÜL MAKİNESİ</option>
                      <option value="2">AGLOMER MAKİNESİ</option>
                      <option value="3">PP PE FİLM YATAY SIKMA MAKİNESİ</option>
                      <option value="4">KURUTMALI SIKMA MAKİNESİ</option>
                      <option value="5">KIRMA MAKİNESİ</option>
                      <option value="6">SHREDDER PARÇALAYICI</option>
                      <option value="7">YIKAMA HAVUZU</option>
                      <option value="8">YATAY ÇIRPMA MAKİNESİ</option>
                      <option value="9">SİLO</option>
                      <option value="10">TURBO ÇIRPMA</option>
                      <option value="11">FİLTRE</option>
                      <option value="12">OTOMATİK FİLTRE</option>
                      <option value="13">DUBLE ERİYİK FİLTRESİ</option>
                    </select>
                  </div>
                </th>
                <td>
                  <div class="input-group">
                    <input type="text" onInput="getValue(\'QTY_' . $i . '\', \'QTY_result_' . $i . '\')" class="ms-2 ps-3" id="QTY_' . $i . '">
                    <span class="input-group-text offset-md-3">PCS</span>
                  </div>
                </td>
                <td>
                  <div class="input-group mb-3">
                    <input type="text" onInput="getValue(\'unit_price_' . $i . '\', \'unit_price_result_' . $i . '\')" class="ms-2 ps-3" id="unit_price_' . $i . '">
                    <span class="input-group-text offset-md-3">USD</span>
                  </div>
                </td>
                <td>
                  <div class="input-group mb-3">
                    <input type="text" onInput="getValue(\'total_price_' . $i . '\', \'total_price_result_' . $i . '\')" class="ms-2 ps-3" id="total_price_' . $i . '">
                    <span class="input-group-text offset-md-3">USD</span>
                  </div>
                </td>
              </tr>
              <tr id="conditionalRow1_' . $i . '" style="display:none;">
                <td>
                  <span>MİL ÇAPI ve UZUNLUĞU :</span><br>
                  <input onInput="getValue(\'mil_capi_zunlugu_1' . $i . '\', \'mil_capi_zunlugu_1result_' . $i . '\')" id="mil_capi_zunlugu_1' . $i . '" type="text"><br>
                  <span>FİLTRE ÇAPI :</span><br>
                  <input onInput="getValue(\'fitre_capi_1' . $i . '\', \'fitre_capi_1result_' . $i . '\')" id="fitre_capi_1' . $i . '" type="text"><br>
                  <span>MAKİNE UZUNLUĞU :</span><br>
                  <input onInput="getValue(\'makine_uzunlugu_1' . $i . '\', \'makine_uzunlugu_1result_' . $i . '\')" id="makine_uzunlugu_1' . $i . '" type="text"><br>
                  <span>MAKİNE ENİ :</span><br>
                  <input onInput="getValue(\'makine_eni_1' . $i . '\', \'makine_eni_1result_' . $i . '\')" id="makine_eni_1' . $i . '" type="text"><br>
                  <span>MAKİNE YÜKSEKLİĞİ :</span><br>
                  <input onInput="getValue(\'makine_yuksekligi_1' . $i . '\', \'makine_yuksekligi_1result_' . $i . '\')" id="makine_yuksekligi_1' . $i . '" type="text"><br>
                  <span>MOTOR GÜCÜ :</span><br>
                  <input onInput="getValue(\'motor_gucu_1' . $i . '\', \'motor_gucu_1result_' . $i . '\')" id="motor_gucu_1' . $i . '" type="text"><br>
                  <span>TOPLAM GÜÇ :</span><br>
                  <input onInput="getValue(\'toplam_güc_1' . $i . '\', \'toplam_güc_1result_' . $i . '\')" id="toplam_güc_1' . $i . '" type="text"><br>
                  <span>KAPASİTE :</span><br>
                  <input onInput="getValue(\'kapasite_1' . $i . '\', \'kapasite_1result_' . $i . '\')" id="kapasite_1' . $i . '" type="text"><br>
                </td>
                <td colspan="3">
                  <div>
                    <img id="img1_' . $i . '" src="./img/1.jpeg" height="300">
                  </div>
                </td>
              </tr>
              <tr id="conditionalRow2_' . $i . '" style="display:none;">
                <td>
                  <span>BIÇAK SAYISI :</span><br>
                  <input onInput="getValue(\'bicak_sayisi_1' . $i . '\', \'bicak_sayisi_1result_' . $i . '\')" id="bicak_sayisi_1' . $i . '" type="text"><br>
                  <span>KAZAN ÇAPI :</span><br>
                  <input onInput="getValue(\'kazan_capi_1' . $i . '\', \'kazan_capi_1result_' . $i . '\')" id="kazan_capi_1' . $i . '" type="text"><br>
                  <span>MAKİNE UZUNLUĞU :</span><br>
                  <input onInput="getValue(\'makine_uzunlugu_2' . $i . '\', \'makine_uzunlugu_2result_' . $i . '\')" id="makine_uzunlugu_2' . $i . '" type="text"><br>
                  <span>MAKİNE ENİ :</span><br>
                  <input onInput="getValue(\'makine_eni_2' . $i . '\', \'makine_eni_2result_' . $i . '\')" id="makine_eni_2' . $i . '" type="text"><br>
                  <span>MAKİNE YÜKSEKLİĞİ :</span><br>
                  <input onInput="getValue(\'makine_yuksekligi_2' . $i . '\', \'makine_yuksekligi_2result_' . $i . '\')" id="makine_yuksekligi_2' . $i . '" type="text"><br>
                  <span>MOTOR GÜCÜ :</span><br>
                  <input onInput="getValue(\'motor_gucu_2' . $i . '\', \'motor_gucu_2result_' . $i . '\')" id="motor_gucu_2' . $i . '" type="text"><br>
                  <span>KAPASİTE :</span><br>
                  <input onInput="getValue(\'kapasite_2' . $i . '\', \'kapasite_2result_' . $i . '\')" id="kapasite_2' . $i . '" type="text"><br>
                </td>
                <td colspan="3">
                  <div>
                    <img id="img2_' . $i . '" src="./img/2.jpeg" height="300">
                  </div>
                </td>
              </tr>
              <tr id="conditionalRow3_' . $i . '" style="display:none;">
                <td>
                  <span>MAKİNE UZUNLUĞU :</span><br>
                  <input onInput="getValue(\'makine_uzunlugu_3' . $i . '\', \'makine_uzunlugu_3result_' . $i . '\')" id="makine_uzunlugu_3' . $i . '" type="text"><br>
                  <span>HELEZON ÇAPI :</span><br>
                  <input onInput="getValue(\'helezon_capi_1' . $i . '\', \'helezon_capi_1result_' . $i . '\')" id="helezon_capi_1' . $i . '" type="text"><br>
                  <span>MAKİNE ENİ :</span><br>
                  <input onInput="getValue(\'makine_eni_3' . $i . '\', \'makine_eni_3result_' . $i . '\')" id="makine_eni_3' . $i . '" type="text"><br>
                  <span>MAKİNE YÜKSEKLİĞİ :</span><br>
                  <input onInput="getValue(\'makine_yuksekligi_3' . $i . '\', \'makine_yuksekligi_3result_' . $i . '\')" id="makine_yuksekligi_3' . $i . '" type="text"><br>
                  <span>MOTOR GÜCÜ :</span><br>
                  <input onInput="getValue(\'motor_gucu_3' . $i . '\', \'motor_gucu_3result_' . $i . '\')" id="motor_gucu_3' . $i . '" type="text"><br>
                  <span>KAPASİTE :</span><br>
                  <input onInput="getValue(\'kapasite_3' . $i . '\', \'kapasite_3result_' . $i . '\')" id="kapasite_3' . $i . '" type="text"><br>
                </td>
                <td colspan="3">
                  <div>
                    <img id="img3_' . $i . '" src="./img/3.jpeg" height="300">
                  </div>
                </td>
              </tr>
              <tr id="conditionalRow4_' . $i . '" style="display:none;">
                <td>
                  <span>ANA MOTOR GÜCÜ :</span><br>
                  <input onInput="getValue(\'ana_motor_gucu_1' . $i . '\', \'ana_motor_gucu_1result_' . $i . '\')" id="ana_motor_gucu_1' . $i . '" type="text"><br>
                  <span>MİL ÇAPI :</span><br>
                  <input onInput="getValue(\'mil_capi_1' . $i . '\', \'mil_capi_1result_' . $i . '\')" id="mil_capi_1' . $i . '" type="text"><br>
                  <span>MAKİNE UZUNLUĞU :</span><br>
                  <input onInput="getValue(\'makine_uzunlugu_4' . $i . '\', \'makine_uzunlugu_4result_' . $i . '\')" id="makine_uzunlugu_4' . $i . '" type="text"><br>
                  <span>MAKİNE YÜKSEKLİĞİ :</span><br>
                  <input onInput="getValue(\'makine_yuksekligi_4' . $i . '\', \'makine_yuksekligi_4result_' . $i . '\')" id="makine_yuksekligi_4' . $i . '" type="text"><br>
                  <span>MAKİNE ENİ :</span><br>
                  <input onInput="getValue(\'makine_eni_4' . $i . '\', \'makine_eni_4result_' . $i . '\')" id="makine_eni_4' . $i . '" type="text"><br>
                  <span>KAPASİTE :</span><br>
                  <input onInput="getValue(\'kapasite_4' . $i . '\', \'kapasite_4result_' . $i . '\')" id="kapasite_4' . $i . '" type="text"><br>
                  <span>NEMLİLİK :</span><br>
                  <input onInput="getValue(\'nemlilik_1' . $i . '\', \'nemlilik_1result_' . $i . '\')" id="nemlilik_1' . $i . '" type="text"><br>
                  <span>FAN MOTOR GÜCÜ :</span><br>
                  <input onInput="getValue(\'fan_motor_gucu_1' . $i . '\', \'fan_motor_gucu_1result_' . $i . '\')" id="fan_motor_gucu_1' . $i . '" type="text"><br>
                  <span>SİLO ÇAPI :</span><br>
                  <input onInput="getValue(\'silo_capi_1' . $i . '\', \'silo_capi_1result_' . $i . '\')" id="silo_capi_1' . $i . '" type="text"><br>
                  <span>BIÇAK MOTOR GÜCÜ :</span><br>
                  <input onInput="getValue(\'bicak_motor_gucu_1' . $i . '\', \'bicak_motor_gucu_1result_' . $i . '\')" id="bicak_motor_gucu_1' . $i . '" type="text"><br>
                </td>
                <td colspan="3">
                  <div>
                    <img id="img3_' . $i . '" src="./img/4.jpeg" height="300">
                  </div>
                </td>
              </tr>
              <tr id="conditionalRow5_' . $i . '" style="display:none;">
                <td>
                  <span>ROTOR KANAT SAYISI :</span><br>
                  <input onInput="getValue(\'roto_kanat_sayisi_1' . $i . '\', \'roto_kanat_sayisi_1result_' . $i . '\')" id="roto_kanat_sayisi_1' . $i . '" type="text"><br>
                  <span>SABİT BIÇAK SAYISI :</span><br>
                  <input onInput="getValue(\'sabit_bicak_sayisi_1' . $i . '\', \'sabit_bicak_sayisi_1result_' . $i . '\')" id="sabit_bicak_sayisi_1' . $i . '" type="text"><br>
                  <span>MAKİNE UZUNLUĞU :</span><br>
                  <input onInput="getValue(\'makine_uzunlugu_5' . $i . '\', \'makine_uzunlugu_5result_' . $i . '\')" id="makine_uzunlugu_5' . $i . '" type="text"><br>
                  <span>MAKİNE ENİ :</span><br>
                  <input onInput="getValue(\'makine_eni_5' . $i . '\', \'makine_eni_5result_' . $i . '\')" id="makine_eni_5' . $i . '" type="text"><br>
                  <span>MAKİNE YÜKSEKLİĞİ :</span><br>
                  <input onInput="getValue(\'makine_yuksekligi_5' . $i . '\', \'makine_yuksekligi_5result_' . $i . '\')" id="makine_yuksekligi_5' . $i . '" type="text"><br>
                  <span>MOTOR GÜCÜ :</span><br>
                  <input onInput="getValue(\'motor_gucu_4' . $i . '\', \'motor_gucu_4result_' . $i . '\')" id="motor_gucu_4' . $i . '" type="text"><br>
                  <span>KAPASİTE :</span><br>
                  <input onInput="getValue(\'kapasite_5' . $i . '\', \'kapasite_5result_' . $i . '\')" id="kapasite_5' . $i . '" type="text"><br>
                </td>
                <td colspan="3">
                  <div>
                    <img id="img3_' . $i . '" src="./img/5.jpeg" height="300">
                  </div>
                </td>
              </tr>
              <tr id="conditionalRow6_' . $i . '" style="display:none;">
                <td>
                  <span>ROTOR UZUNLUĞU :</span><br>
                  <input onInput="getValue(\'rotor_uzunlugu_1' . $i . '\', \'rotor_uzunlugu_1result_' . $i . '\')" id="rotor_uzunlugu_1' . $i . '" type="text"><br>
                  <span>ROTOR ÇAPI :</span><br>
                  <input onInput="getValue(\'rotor_capi_1' . $i . '\', \'rotor_capi_1result_' . $i . '\')" id="rotor_capi_1' . $i . '" type="text"><br>
                  <span>ROTOR BIÇAK SAYISI :</span><br>
                  <input onInput="getValue(\'rotor_bicak_sayisi_1' . $i . '\', \'rotor_bicak_sayisi_1result_' . $i . '\')" id="rotor_bicak_sayisi_1' . $i . '" type="text"><br>
                  <span>SABİT BIÇAK SAYISI :</span><br>
                  <input onInput="getValue(\'sabit_bicak_sayisi_2' . $i . '\', \'sabit_bicak_sayisi_2result_' . $i . '\')" id="sabit_bicak_sayisi_2' . $i . '" type="text"><br>
                  <span>SIYIRICI BIÇAK SAYISI :</span><br>
                  <input onInput="getValue(\'siyirici_bicak_sayisi_1' . $i . '\', \'siyirici_bicak_sayisi_1result_' . $i . '\')" id="siyirici_bicak_sayisi_1' . $i . '" type="text"><br>
                  <span>MAKİNE UZUNLUĞU :</span><br>
                  <input onInput="getValue(\'makine_uzunlugu_6' . $i . '\', \'makine_uzunlugu_6result_' . $i . '\')" id="makine_uzunlugu_6' . $i . '" type="text"><br>
                  <span>MAKİNE ENİ :</span><br>
                  <input onInput="getValue(\'makine_eni_6' . $i . '\', \'makine_eni_6result_' . $i . '\')" id="makine_eni_6' . $i . '" type="text"><br>
                  <span>MAKİNE YÜKSEKLİĞİ :</span><br>
                  <input onInput="getValue(\'makine_yuksekligi_6' . $i . '\', \'makine_yuksekligi_6result_' . $i . '\')" id="makine_yuksekligi_6' . $i . '" type="text"><br>
                  <span>MOTOR GÜCÜ :</span><br>
                  <input onInput="getValue(\'motor_gucu_5' . $i . '\', \'motor_gucu_5result_' . $i . '\')" id="motor_gucu_5' . $i . '" type="text"><br>
                  <span>HİDROLİK MOTOR :</span><br>
                  <input onInput="getValue(\'hidrolik_motor_1' . $i . '\', \'hidrolik_motor_1result_' . $i . '\')" id="hidrolik_motor_1' . $i . '" type="text"><br>
                  <span>KAPASİTE :</span><br>
                  <input onInput="getValue(\'kapasite_6' . $i . '\', \'kapasite_6result_' . $i . '\')" id="kapasite_6' . $i . '" type="text"><br>
                </td>
                <td colspan="3">
                  <div>
                    <img id="img3_' . $i . '" src="./img/6.jpeg" height="300">
                  </div>
                </td>
              </tr>
              <tr id="conditionalRow7_' . $i . '" style="display:none;">
                <td>
                  <span>HAVUZ BOYU :</span><br>
                  <input onInput="getValue(\'havuz_boyu_1' . $i . '\', \'havuz_boyu_1result_' . $i . '\')" id="havuz_boyu_1' . $i . '" type="text"><br>
                  <span>HAVUZ ENİ :</span><br>
                  <input onInput="getValue(\'havuz_eni_1' . $i . '\', \'havuz_eni_1result_' . $i . '\')" id="havuz_eni_1' . $i . '" type="text"><br>
                  <span>MAKİNE YÜKSEKLİĞİ :</span><br>
                  <input onInput="getValue(\'makine_yuksekligi_7' . $i . '\', \'makine_yuksekligi_7result_' . $i . '\')" id="makine_yuksekligi_7' . $i . '" type="text"><br>
                  <span>PALET SAYISI :</span><br>
                  <input onInput="getValue(\'palet_sayisi_1' . $i . '\', \'palet_sayisi_1result_' . $i . '\')" id="palet_sayisi_1' . $i . '" type="text"><br>
                  <span>PALET MOTOR GÜCÜ :</span><br>
                  <input onInput="getValue(\'palet_motor_gucu_1' . $i . '\', \'palet_motor_gucu_1result_' . $i . '\')" id="palet_motor_gucu_1' . $i . '" type="text"><br>
                  <span>ÇAMUR ALMA HELEZONU MOTOR GÜCÜ<input onInput="getValue(\'camur_helezonu_gucu_1' . $i . '\', \'camur_helezonu_gucu_1result_' . $i . '\')" id="camur_helezonu_gucu_1' . $i . '" type="text"><br>
                  <span>ÜRÜN ÇIKIŞ HELEZON MOTOR GÜCÜ :</span><br>
                  <input onInput="getValue(\'urun_cıkıs_gucu_1' . $i . '\', \'urun_cıkıs_gucu_1result_' . $i . '\')" id="urun_cıkıs_gucu_1' . $i . '" type="text"><br>
                </td>
                <td colspan="3">
                  <div>
                    <img id="img3_' . $i . '" src="./img/7.jpeg" height="300">
                  </div>
                </td>
              </tr>
              <tr id="conditionalRow8_' . $i . '" style="display:none;">
                <td>
                  <span>HELEZON BOYU :</span><br>
                  <input onInput="getValue(\'helezon_boyu_1' . $i . '\', \'helezon_boyu_1result_' . $i . '\')" id="helezon_boyu_1' . $i . '" type="text"><br>
                  <span>MALZEME KALİTESİ :</span><br>
                  <input onInput="getValue(\'malzeme_kalitesi_1' . $i . '\', \'malzeme_kalitesi_1result_' . $i . '\')" id="malzeme_kalitesi_1' . $i . '" type="text"><br>
                  <span>MALZEME KALINLIĞI :</span><br>
                  <input onInput="getValue(\'malzeme_kalinligi_1' . $i . '\', \'malzeme_kalinligi_1result_' . $i . '\')" id="malzeme_kalinligi_1' . $i . '" type="text"><br>
                  <span>MAKİNE ENİ :</span><br>
                  <input onInput="getValue(\'makine_eni_7' . $i . '\', \'makine_eni_7result_' . $i . '\')" id="makine_eni_7' . $i . '" type="text"><br>
                  <span>MAKİNE YÜKSEKLİĞİ :</span><br>
                  <input onInput="getValue(\'makine_yuksekligi_8' . $i . '\', \'makine_yuksekligi_8result_' . $i . '\')" id="makine_yuksekligi_8' . $i . '" type="text"><br>
                  <span>MOTOR GÜCÜ :</span><br>
                  <input onInput="getValue(\'motor_gucu_6' . $i . '\', \'motor_gucu_6result_' . $i . '\')" id="motor_gucu_6' . $i . '" type="text"><br>
                  <span>KAPASİTE :</span><br>
                  <input onInput="getValue(\'kapasite_7' . $i . '\', \'kapasite_7result_' . $i . '\')" id="kapasite_7' . $i . '" type="text"><br>
                </td>
                <td colspan="3">
                  <div>
                    <img id="img3_' . $i . '" src="./img/8.jpeg" height="300">
                  </div>
                </td>
              </tr>
              <tr id="conditionalRow9_' . $i . '" style="display:none;">
                <td>
                  <span>UZUNLUK :</span><br>
                  <input onInput="getValue(\'uzunluk_1' . $i . '\', \'uzunluk_1result_' . $i . '\')" id="uzunluk_1' . $i . '" type="text"><br>
                  <span>EN :</span><br>
                  <input onInput="getValue(\'en_1' . $i . '\', \'en_1result_' . $i . '\')" id="en_1' . $i . '" type="text"><br>
                  <span>YÜKSEKLİK :</span><br>
                  <input onInput="getValue(\'yukseklik_1' . $i . '\', \'yukseklik_1result_' . $i . '\')" id="yukseklik_1' . $i . '" type="text"><br>
                  <span>HELEZON REDÜKTOR MOTOR GÜCÜ :</span><br>
                  <input onInput="getValue(\'helezon_reduktor_1' . $i . '\', \'helezon_reduktor_1result_' . $i . '\')" id="helezon_reduktor_1' . $i . '" type="text"><br>
                  <span>KARIŞTIRICI MOTORU :</span><br>
                  <input onInput="getValue(\'karistirici_motoru_1' . $i . '\', \'karistirici_motoru_1result_' . $i . '\')" id="karistirici_motoru_1' . $i . '" type="text"><br>
                  <span>MALZEME KALINLIĞI :</span><br>
                  <input onInput="getValue(\'malzeme_kalinligi_2' . $i . '\', \'malzeme_kalinligi_2result_' . $i . '\')" id="malzeme_kalinligi_2' . $i . '" type="text"><br>
                  <span>KAPASİTE :</span><br>
                  <input onInput="getValue(\'kapasite_8' . $i . '\', \'kapasite_8result_' . $i . '\')" id="kapasite_8' . $i . '" type="text"><br>
                </td>
                <td colspan="3">
                  <div>
                    <img id="img3_' . $i . '" src="./img/9.jpeg" height="300">
                  </div>
                </td>
              </tr>
              <tr id="conditionalRow10_' . $i . '" style="display:none;">
                <td>
                  <span>ANA MALZEME :</span><br>
                  <input onInput="getValue(\'ana_malzeme_1' . $i . '\', \'ana_malzeme_1result_' . $i . '\')" id="ana_malzeme_1' . $i . '" type="text"><br>
                  <span>ROTOR ÇAPI :</span><br>
                  <input onInput="getValue(\'rotor_capi_2' . $i . '\', \'rotor_capi_2result_' . $i . '\')" id="rotor_capi_2' . $i . '" type="text"><br>
                  <span>ROTOR UZUNLUĞU :</span><br>
                  <input onInput="getValue(\'rotor_uzunlugu_2' . $i . '\', \'rotor_uzunlugu_2result_' . $i . '\')" id="rotor_uzunlugu_2' . $i . '" type="text"><br>
                  <span>MAKİNE UZUNLUĞU :</span><br>
                  <input onInput="getValue(\'makine_uzunlugu_8' . $i . '\', \'makine_uzunlugu_8result_' . $i . '\')" id="makine_uzunlugu_8' . $i . '" type="text"><br>
                  <span>MAKİNE ENİ :</span><br>
                  <input onInput="getValue(\'makine_eni_8' . $i . '\', \'makine_eni_8result_' . $i . '\')" id="makine_eni_8' . $i . '" type="text"><br>
                  <span>MAKİNE YÜKSEKLİĞİ :</span><br>
                  <input onInput="getValue(\'makine_yuksekligi_9' . $i . '\', \'makine_yuksekligi_9result_' . $i . '\')" id="makine_yuksekligi_9' . $i . '" type="text"><br>
                  <span>PE FİLM ÇIKIŞ NEM ORANI :</span><br>
                  <input onInput="getValue(\'pe_film_1' . $i . '\', \'pe_film_1result_' . $i . '\')" id="pe_film_1' . $i . '" type="text"><br>
                  <span>SERT PLASTİK ÇIKIŞ NEM ORANI :</span><br>
                  <input onInput="getValue(\'sert_plastik_1' . $i . '\', \'sert_plastik_1result_' . $i . '\')" id="sert_plastik_1' . $i . '" type="text"><br>
                  <span>MOTOR GÜCÜ :</span><br>
                  <input onInput="getValue(\'motor_gucu_7' . $i . '\', \'motor_gucu_7result_' . $i . '\')" id="motor_gucu_7' . $i . '" type="text"><br>
                  <span>VERİM :</span><br>
                  <input onInput="getValue(\'verim_1' . $i . '\', \'verim_1result_' . $i . '\')" id="verim_1' . $i . '" type="text"><br>
                </td>
                <td colspan="3">
                  <div>
                    <img id="img3_' . $i . '" src="./img/10.jpeg" height="300">
                  </div>
                </td>
              </tr>
              <tr id="conditionalRow11_' . $i . '" style="display:none;">
                <td>
                  <span>FİLTRE MALZEMESİ :</span><br>
                  <input onInput="getValue(\'filtre_malzemesi_1' . $i . '\', \'filtre_malzemesi_1result_' . $i . '\')" id="filtre_malzemesi_1' . $i . '" type="text"><br>
                  <span>FİLTRE SİSTEMİ :</span><br>
                  <input onInput="getValue(\'fitre_sistemi_1' . $i . '\', \'fitre_sistemi_1result_' . $i . '\')" id="fitre_sistemi_1' . $i . '" type="text"><br>
                  <span>FİLTRE ÇAPI :</span><br>
                  <input onInput="getValue(\'fitre_capi_2' . $i . '\', \'fitre_capi_2result_' . $i . '\')" id="fitre_capi_2' . $i . '" type="text"><br>
                  <span>FİLTRE HAREKET SİSTEMİ :</span><br>
                  <input onInput="getValue(\'filtre_hareket_sistemi_1' . $i . '\', \'filtre_hareket_sistemi_1result_' . $i . '\')" id="filtre_hareket_sistemi_1' . $i . '" type="text"><br>
                  <span>HİDROLİK MOTOR :</span><br>
                  <input onInput="getValue(\'hidrolik_motor_2' . $i . '\', \'hidrolik_motor_2result_' . $i . '\')" id="hidrolik_motor_2' . $i . '" type="text"><br>
                  <span>ISITMA REZİSTANS GÜCÜ :</span><br>
                  <input onInput="getValue(\'isitma_rezistans_gucu_1' . $i . '\', \'isitma_rezistans_gucu_1result_' . $i . '\')" id="isitma_rezistans_gucu_1' . $i . '" type="text"><br>
                </td>
                <td colspan="3">
                  <div>
                    <img id="img3_' . $i . '" src="./img/11.jpeg" height="300">
                  </div>
                </td>
              </tr>
              <tr id="conditionalRow12_' . $i . '" style="display:none;">
                <td>
                  <span>FİLTRE ÇAPI :</span><br>
                  <input onInput="getValue(\'fitre_capi_3' . $i . '\', \'fitre_capi_3result_' . $i . '\')" id="fitre_capi_3' . $i . '" type="text"><br>
                  <span>LAZER FİLTRE :</span><br>
                  <input onInput="getValue(\'lazer_filtre_1' . $i . '\', \'lazer_filtre_1result_' . $i . '\')" id="lazer_filtre_1' . $i . '" type="text"><br>
                  <span>FİLTRE MALZEMESİ :</span><br>
                  <input onInput="getValue(\'filtre_malzemesi_2' . $i . '\', \'filtre_malzemesi_2result_' . $i . '\')" id="filtre_malzemesi_2' . $i . '" type="text"><br>
                  <span>FİLTRE SİSTEMİ :</span><br>
                  <input onInput="getValue(\'fitre_sistemi_2' . $i . '\', \'fitre_sistemi_2result_' . $i . '\')" id="fitre_sistemi_2' . $i . '" type="text"><br>
                </td>
                <td colspan="3">
                  <div>
                    <img id="img3_' . $i . '" src="./img/12.jpeg" height="300">
                  </div>
                </td>
              </tr>
              <tr id="conditionalRow13_' . $i . '" style="display:none;">
                <td>
                  <span>FİLTRE MALZEMESİ :</span><br>
                  <input onInput="getValue(\'filtre_malzemesi_3' . $i . '\', \'filtre_malzemesi_3result_' . $i . '\')" id="filtre_malzemesi_3' . $i . '" type="text"><br>
                  <span>FİLTRE SİSTEMİ :</span><br>
                  <input onInput="getValue(\'fitre_sistemi_3' . $i . '\', \'fitre_sistemi_3result_' . $i . '\')" id="fitre_sistemi_3' . $i . '" type="text"><br>
                  <span>FİLTRE ÇAPI :</span><br>
                  <input onInput="getValue(\'fitre_capi_4' . $i . '\', \'fitre_capi_4result_' . $i . '\')" id="fitre_capi_4' . $i . '" type="text"><br>
                  <span>ELEK SAYISI :</span><br>
                  <input onInput="getValue(\'elek_sayisi_1' . $i . '\', \'elek_sayisi_1result_' . $i . '\')" id="elek_sayisi_1' . $i . '" type="text"><br>
                  <span>FİLTRE HAREKET SİSTEMİ :</span><br>
                  <input onInput="getValue(\'filtre_hareket_sistemi_2' . $i . '\', \'filtre_hareket_sistemi_2result_' . $i . '\')" id="filtre_hareket_sistemi_2' . $i . '" type="text"><br>
                  <span>HİDROLİK MOTOR :</span><br>
                  <input onInput="getValue(\'hidrolik_motor_3' . $i . '\', \'hidrolik_motor_3result_' . $i . '\')" id="hidrolik_motor_3' . $i . '" type="text"><br>
                  <span>REZİSTANS :</span><br>
                  <input onInput="getValue(\'rezistans_1' . $i . '\', \'rezistans_1result_' . $i . '\')" id="rezistans_1' . $i . '" type="text"><br>
                </td>
                <td colspan="3">
                  <div>
                    <img id="img3_' . $i . '" src="./img/13.jpeg" height="300">
                  </div>
                </td>
              </tr>
            </form>
          </tbody>
        </table>
      </div>';
        }
      }
      ?>
    </div>
    <!-- Trigger butonu -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tamEkranModal">
      Yazdır
    </button>
    <div id="icerik">
      <!-- Tam ekran modal -->
      <div class="modal fade" id="tamEkranModal" tabindex="-1" aria-labelledby="tamEkranModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="tamEkranModalLabel">Tam Ekran Modal Başlık</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Kapat"></button>
            </div>
            <div class="modal-body">
              <div class="container border">
                <div class="row">
                  <img src="./img/baslikgörseli.png" alt="" class="text-center mb-5" height="250">
                  <div class="col-md-4">
                    <div class="table-responsive">
                      <table class="table table-bordered border-dark">
                        <tbody>
                          <tr>
                            <td>From</td>
                            <td> : </td>
                            <td>FEYDAŞ MAKİNE</td>
                          </tr>
                          <tr>
                            <td>TO</td>
                            <td> : </td>
                          </tr>
                          <tr>
                            <td>Contact person</td>
                            <td> : </td>
                            <td>ARIAAN</td>
                          </tr>
                          <tr>
                            <td>Tel No</td>
                            <td> : </td>
                            <td>+31 6 19174717</td>
                          </tr>
                          <tr>
                            <td>E-mail Address</td>
                            <td> : </td>
                            <td>info@greenfoils.nl</td>
                          </tr>
                          <tr>
                            <td>Address</td>
                            <td> : </td>
                            <td>HOLLAND</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="col-md-4 offset-md-4">
                    <div class="table-responsive">
                      <table class="table table-bordered border-dark">
                        <tbody>
                          <tr>
                            <td>DATE</td>
                            <td> : </td>
                            <td><span id="dateresult"></span></td>
                          </tr>
                          <tr>
                            <td>QUOTATION NO</td>
                            <td> : </td>
                            <td><span id="result"></span></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <?php
                  // Modal sayfasındaki tabloları ve içeriğini yazdıralım.
                  for ($i = 1; $i <= intval($degisken); $i++) {
                    echo '<div class="col-md-12">
                    <table class="table table-bordered border-dark text-center">
                      <thead>
                        <tr>
                          <th scope="col">ITEM NO</th>
                          <th scope="col">DESCRIPTION</th>
                          <th scope="col">QTY</th>
                          <th scope="col">UNIT PRICE</th>
                          <th scope="col">TOTAL PRICE</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th rowspan="3" scope="row">' . $i . '</th>
                          <td>
                            <div class="input-group mb-3">
                              <select class="form-select" id="inputGroupSelect01_2' . $i . '" onchange="handleSelectChange2(' . $i . ')" name="selected_option_2' . $i . '">
                                <option selected>Seçiniz...</option>
                                <option value="1">GRANÜL MAKİNESİ</option>
                                <option value="2">AGLOMER MAKİNESİ</option>
                                <option value="3">PP PE FİLM YATAY SIKMA MAKİNESİ</option>
                                <option value="4">KURUTMALI SIKMA MAKİNESİ</option>
                                <option value="5">KIRMA MAKİNESİ</option>
                                <option value="6">SHREDDER PARÇALAYICI</option>
                                <option value="7">YIKAMA HAVUZU</option>
                                <option value="8">YATAY ÇIRPMA MAKİNESİ</option>
                                <option value="9">SİLO</option>
                                <option value="10">TURBO ÇIRPMA</option>
                                <option value="11">FİLTRE</option>
                                <option value="12">OTOMATİK FİLTRE</option>
                                <option value="13">DUBLE ERİYİK FİLTRESİ</option>
                              </select>
                            </div>
                          </td>
                          <td>
                            <div class="input-group">
                              <!-- Girdi değerini yazdırmak için span elemanı kullanıyoruz. -->
                              <span class="ms-5 me-2" id="QTY_result_' . $i . '"></span>PCS
                            </div>
                          </td>
                          <td>
                            <div class="input-group text-center">
                              <span class="ms-5 me-2" id="unit_price_result_' . $i . '"></span> USD
                            </div>
                          </td>
                          <td>
                            <div class="input-group text-center">
                              <span class="ms-5 me-2" id="total_price_result_' . $i . '"></span> USD
                            </div>
                          </td>
                        </tr>
                        <tr id="conditionalRow1_2' . $i . '" style="display:none;">
                          <td>
                            <span>MİL ÇAPI ve UZUNLUĞU :<span id="mil_capi_zunlugu_1result_' . $i . '"></span> MM</span></br>
                            <span>FİLTRE ÇAPI :<span id="fitre_capi_1result_' . $i . '"></span> MM</span></br>
                            <span>MAKİNE UZUNLUĞU :<span id="makine_uzunlugu_1result_' . $i . '"></span> MM</span></br>
                            <span>MAKİNE ENİ :<span id="makine_eni_1result_' . $i . '"></span> MM</span></br>
                            <span>MAKİNE YÜKSEKLİĞİ :<span id="makine_yuksekligi_1result_' . $i . '"></span> MM</span></br>
                            <span>MOTOR GÜCÜ :<span id="motor_gucu_1result_' . $i . '"></span> KW</span></br>
                            <span>TOPLAM GÜÇ :<span id="toplam_güc_1result_' . $i . '"></span> KW</span></br>
                            <span>KAPASİTE :<span id="kapasite_1result_' . $i . '"></span> KG/H</span></br>
                          </td>
                          <td colspan="3">
                            <div>
                              <img id="img1_' . $i . '" src="./img/1.jpeg" height="300">
                            </div>
                          </td>
                        </tr>
                        <tr id="conditionalRow2_2' . $i . '" style="display:none;">
                          <td>
                            <span>BIÇAK SAYISI :<span id="bicak_sayisi_1result_' . $i . '"></span> MM</span></br>
                            <span>KAZAN ÇAPI :<span id="kazan_capi_1result_' . $i . '"></span> MM</span></br>
                            <span>MAKİNE UZUNLUĞU :<span id="makine_uzunlugu_2result_' . $i . '"></span> MM</span></br>
                            <span>MAKİNE ENİ :<span id="makine_eni_2result_' . $i . '"></span> MM</span></br>
                            <span>MAKİNE YÜKSEKLİĞİ :<span id="makine_yuksekligi_2result_' . $i . '"></span> MM</span></br>
                            <span>MOTOR GÜCÜ :<span id="motor_gucu_2result_' . $i . '"></span> KW</span></br>
                            <span>KAPASİTE :<span id="kapasite_2result_' . $i . '"></span> KG/H</span></br>
                          </td>
                          <td colspan="3">
                            <div>
                              <img id="img2_' . $i . '" src="./img/2.jpeg" height="300">
                            </div>
                          </td>
                        </tr>
                        <tr id="conditionalRow3_2' . $i . '" style="display:none;">
                          <td>
                            <span>MAKİNE UZUNLUĞU :<span id="makine_uzunlugu_3result_' . $i . '"></span> MM</span></br>
                            <span>HELEZON ÇAPI :<span id="helezon_capi_1result_' . $i . '"></span> MM</span></br>
                            <span>MAKİNE ENİ : <span id="makine_eni_3result_' . $i . '"></span> MM</span></br>
                            <span>MAKİNE YÜKSEKLİĞİ :<span id="makine_yuksekligi_3result_' . $i . '"></span> MM</span></br>
                            <span>MOTOR GÜCÜ :<span id="motor_gucu_3result_' . $i . '"></span> KW</span></br>
                            <span>KAPASİTE :<span id="kapasite_3result_' . $i . '"></span> KG/H</span></br>
                          </td>
                          <td colspan="3">
                            <div>
                              <img id="img3_' . $i . '" src="./img/3.jpeg" height="300">
                            </div>
                          </td>
                        </tr>
                        <tr id="conditionalRow4_2' . $i . '" style="display:none;">
                          <td>
                            <span>ANA MOTOR GÜCÜ :<span id="ana_motor_gucu_1result_' . $i . '"></span> KW</span></br>
                            <span>MİL ÇAPI :<span id="mil_capi_1result_' . $i . '"></span> MM</span></br>
                            <span>MAKİNE UZUNLUĞU :<span id="makine_uzunlugu_4result_' . $i . '"></span> MM</span></br>
                            <span>MAKİNE YÜKSEKLİĞİ :<span id="makine_yuksekligi_4result_' . $i . '"></span> MM</span></br>
                            <span>MAKİNE ENİ :<span id="makine_eni_4result_' . $i . '"></span> MM</span></br>
                            <span>KAPASİTE :<span id="kapasite_4result_' . $i . '"></span> KG/H</span></br>
                            <span>NEMLİLİK :<span id="nemlilik_1result_' . $i . '"></span></span></br>
                            <span>FAN MOTOR GÜCÜ :<span id="fan_motor_gucu_1result_' . $i . '"></span> KW</span></br>
                            <span>SİLO ÇAPI :<span id="silo_capi_1result_' . $i . '"></span> MM</span></br>
                            <span>BIÇAK MOTOR GÜCÜ :<span id="bicak_motor_gucu_1result_' . $i . '"></span> KW</span></br>
                          </td>
                          <td colspan="3">
                            <div>
                              <img id="img3_' . $i . '" src="./img/4.jpeg" height="300">
                            </div>
                          </td>
                        </tr>
                        <tr id="conditionalRow5_2' . $i . '" style="display:none;">
                          <td>
                            <span>ROTOR KANAT SAYISI :<span id="roto_kanat_sayisi_1result_' . $i . '"></span> AD / PCS</span></br>
                            <span>SABİT BIÇAK SAYISI :<span id="sabit_bicak_sayisi_1result_' . $i . '"></span>AD / PCS</span></br>
                            <span>MAKİNE UZUNLUĞU :<span id="makine_uzunlugu_5result_' . $i . '"></span> MM</span></br>
                            <span>MAKİNE ENİ :<span id="makine_eni_5result_' . $i . '"></span> MM</span></br>
                            <span>MAKİNE YÜKSEKLİĞİ :<span id="makine_yuksekligi_5result_' . $i . '"></span> MM</span></br>
                            <span>MOTOR GÜCÜ :<span id="motor_gucu_4result_' . $i . '"></span> KW</span></br>
                            <span>KAPASİTE :<span id="kapasite_5result_' . $i . '"></span> KG/H</span></br>
                          </td>
                          <td colspan="3">
                            <div>
                              <img id="img3_' . $i . '" src="./img/5.jpeg" height="300">
                            </div>
                          </td>
                        </tr>
                        <tr id="conditionalRow6_2' . $i . '" style="display:none;">
                          <td>
                            <span>ROTOR UZUNLUĞU :<span id="rotor_uzunlugu_1result_' . $i . '"></span> MM</span></br>
                            <span>ROTOR ÇAPI :<span id="rotor_capi_1result_' . $i . '"></span> MM</span></br>
                            <span>ROTOR BIÇAK SAYISI :<span id="rotor_bicak_sayisi_1result_' . $i . '"></span> AD / PCS</span></br>
                            <span>SABİT BIÇAK SAYISI :<span id="sabit_bicak_sayisi_2result_' . $i . '"></span> AD / PCS</span></br>
                            <span>SIYIRICI BIÇAK SAYISI :<span id="siyirici_bicak_sayisi_1result_' . $i . '"></span> AD / PCS</span></br>
                            <span>MAKİNE UZUNLUĞU :<span id="makine_uzunlugu_6result_' . $i . '"></span> MM</span></br>
                            <span>MAKİNE ENİ :<span id="makine_eni_6result_' . $i . '"></span> MM</span></br>
                            <span>MAKİNE YÜKSEKLİĞİ :<span id="makine_yuksekligi_6result_' . $i . '"></span> MM</span></br>
                            <span>MOTOR GÜCÜ :<span id="motor_gucu_5result_' . $i . '"></span> KW</span></br>
                            <span>HİDROLİK MOTOR :<span id="hidrolik_motor_1result_' . $i . '"></span> HP</span></br>
                            <span>KAPASİTE :<span id="kapasite_6result_' . $i . '"></span> KG/H</span></br>
                          </td>
                          <td colspan="3">
                            <div>
                              <img id="img3_' . $i . '" src="./img/6.jpeg" height="300">
                            </div>
                          </td>
                        </tr>
                        <tr id="conditionalRow7_2' . $i . '" style="display:none;">
                          <td>
                            <span>HAVUZ BOYU :<span id="havuz_boyu_1result_' . $i . '"></span> MM</span></br>
                            <span>HAVUZ ENİ :<span id="havuz_eni_1result_' . $i . '"></span> MM</span></br>
                            <span>MAKİNE YÜKSEKLİĞİ :<span id="makine_yuksekligi_7result_' . $i . '"></span> MM</span></br>
                            <span>PALET SAYISI :<span id="palet_sayisi_1result_' . $i . '"></span> AD / PCS</span></br>
                            <span>PALET MOTOR GÜCÜ :<span id="palet_motor_gucu_1result_' . $i . '"></span> KW</span></br>
                            <span>ÇAMUR ALMA HELEZONU MOTOR GÜCÜ :<span id="camur_helezonu_gucu_1result_' . $i . '"></span> KW</span></br>
                            <span>ÜRÜN ÇIKIŞ HELEZON MOTOR GÜCÜ :<span id="urun_cıkıs_gucu_1result_' . $i . '"></span> KW</span></br>
                          </td>
                          <td colspan="3">
                            <div>
                              <img id="img3_' . $i . '" src="./img/7.jpeg" height="300">
                            </div>
                          </td>
                        </tr>
                        <tr id="conditionalRow8_2' . $i . '" style="display:none;">
                          <td>
                            <span>HELEZON BOYU :<span id="helezon_boyu_1result_' . $i . '"></span> MM</span></br>
                            <span>MALZEME KALİTESİ :<span id="malzeme_kalitesi_1result_' . $i . '"></span> SS</span></br>
                            <span>MALZEME KALINLIĞI :<span id="malzeme_kalinligi_1result_' . $i . '"></span>< MM/span></br>
                            <span>MAKİNE ENİ :<span id="makine_eni_7result_' . $i . '"></span> MM</span></br>
                            <span>MAKİNE YÜKSEKLİĞİ :<span id="makine_yuksekligi_8result_' . $i . '"></span> MM</span></br>
                            <span>MOTOR GÜCÜ :<span id="motor_gucu_6result_' . $i . '"></span> KW</span></br>
                            <span>KAPASİTE :<span id="kapasite_7result_' . $i . '"></span> KG/H</span></br>
                          </td>
                          <td colspan="3">
                            <div>
                              < <img id="img3_' . $i . '" src="./img/8.jpeg" height="300">
                            </div>
                          </td>
                        </tr>
                        <tr id="conditionalRow9_2' . $i . '" style="display:none;">
                          <td>
                            <span>UZUNLUK :<span id="uzunluk_1result_' . $i . '"></span> MM</span></br>
                            <span>EN :<span id="en_1result_' . $i . '"></span> MM</span></br>
                            <span>YÜKSEKLİK :<span id="yukseklik_1result_' . $i . '"></span> MM</span></br>
                            <span>HELEZON REDÜKTOR MOTOR GÜCÜ :<span id="helezon_reduktor_1result_' . $i . '"></span> KW</span></br>
                            <span>KARIŞTIRICI MOTORU :<span id="karistirici_motoru_1result_' . $i . '"></span> KW</span></br>
                            <span>MALZEME KALINLIĞI :<span id="malzeme_kalinligi_2result_' . $i . '"></span> MM</span></br>
                            <span>KAPASİTE :<span id="kapasite_8result_' . $i . '"></span> KG</span></br>
                          </td>
                          <td colspan="3">
                            <div>
                              <img id="img3_' . $i . '" src="./img/9.jpeg" height="300">
                            </div>
                          </td>
                        </tr>
                        <tr id="conditionalRow10_2' . $i . '" style="display:none;">
                          <td>
                            <span>ANA MALZEME :<span id="ana_malzeme_1result_' . $i . '"></span></span></br>
                            <span>ROTOR ÇAPI :<span id="rotor_capi_2result_' . $i . '"></span></span></br>
                            <span>ROTOR UZUNLUĞU :<span id="rotor_uzunlugu_2result_' . $i . '"></span></span></br>
                            <span>MAKİNE UZUNLUĞU :<span id="makine_uzunlugu_8result_' . $i . '"></span></span></br>
                            <span>MAKİNE ENİ :<span id="makine_eni_8result_' . $i . '"></span></span></br>
                            <span>MAKİNE YÜKSEKLİĞİ :<span id="makine_yuksekligi_9result_' . $i . '"></span></span></br>
                            <span>PE FİLM ÇIKIŞ NEM ORANI :<span id="pe_film_1result_' . $i . '"></span></span></br>
                            <span>SERT PLASTİK ÇIKIŞ NEM ORANI :<span id="sert_plastik_1result_' . $i . '"></span></span></br>
                            <span>MOTOR GÜCÜ :<span id="motor_gucu_7result_' . $i . '"></span> KW</span></br>
                            <span>VERİM :<span id="verim_1result_' . $i . '"></span> KG/H</span></br>
                          </td>
                          <td colspan="3">
                            <div>
                              <img id="img3_' . $i . '" src="./img/10.jpeg" height="300">
                            </div>
                          </td>
                        </tr>
                        <tr id="conditionalRow11_2' . $i . '" style="display:none;">
                          <td>
                            <span>FİLTRE MALZEMESİ :<span id="filtre_malzemesi_1result_' . $i . '"></span></span></br>
                            <span>FİLTRE SİSTEMİ :<span id="fitre_sistemi_1result_' . $i . '"></span></span></br>
                            <span>FİLTRE ÇAPI :<span id="fitre_capi_2result_' . $i . '"></span> MM</span></br>
                            <span>FİLTRE HAREKET SİSTEMİ :<span id="filtre_hareket_sistemi_1result_' . $i . '"></span></span></br>
                            <span>HİDROLİK MOTOR :<span id="hidrolik_motor_2result_' . $i . '"></span> KW</span></br>
                            <span>ISITMA REZİSTANS GÜCÜ :<span id="isitma_rezistans_gucu_1result_' . $i . '"></span> KW</span></br>
                          </td>
                          <td colspan="3">
                            <div>
                              <img id="img3_' . $i . '" src="./img/11.jpeg" height="300">
                            </div>
                          </td>
                        </tr>
                        <tr id="conditionalRow12_2' . $i . '" style="display:none;">
                          <td>
                            <span>FİLTRE ÇAPI :<span id="fitre_capi_3result_' . $i . '"></span> MM</span></br>
                            <span>LAZER FİLTRE :<span id="lazer_filtre_1result_' . $i . '"></span></span></br>
                            <span>FİLTRE MALZEMESİ :<span id="filtre_malzemesi_2result_' . $i . '"></span></span></br>
                            <span>FİLTRE SİSTEMİ :<span id="fitre_sistemi_2result_' . $i . '"></span></span></br>
                          </td>
                          <td colspan="3">
                            <div>
                              <img id="img3_' . $i . '" src="./img/12.jpeg" height="300">
                            </div>
                          </td>
                        </tr>
                        <tr id="conditionalRow13_2' . $i . '" style="display:none;">
                          <td>
                            <span>FİLTRE MALZEMESİ :<span id="filtre_malzemesi_3result_' . $i . '"></span></span></br>
                            <span>FİLTRE SİSTEMİ :<span id="fitre_sistemi_3result_' . $i . '"></span></span></br>
                            <span>FİLTRE ÇAPI :<span id="fitre_capi_4result_' . $i . '"></span> MM</span></br>
                            <span>ELEK SAYISI :<span id="elek_sayisi_1result_' . $i . '"></span></span></br>
                            <span>FİLTRE HAREKET SİSTEMİ :<span id="filtre_hareket_sistemi_2result_' . $i . '"></span></span></br>
                            <span>HİDROLİK MOTOR :<span id="hidrolik_motor_3result_' . $i . '"></span> KW</span></br>
                            <span>REZİSTANS :<span id="rezistans_1result_' . $i . '"></span></span></br>
                          </td>
                          <td colspan="3">
                            <div>
                              <img id="img3_' . $i . '" src="./img/13.jpeg" height="300">
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>';
                  }
                  ?>
                  <!-- Toplam alanı -->
                  <h2>
                    <div id="toplamAlan"></div>
                  </h2>
                </div>
                <ul class="text-danger">
                  YESILOBA MAH.M BASPINAR ORT OLC SANAYI SITESI 465249 SK.SEYHAN-ADANA, TURKIYE Tel:+903224280145-55 Gsm:+905309422490 Web:www.feydasmakina.com export@feydasmakina.com
                </ul>
                <div class="row border">
                  <div class="col-md-12 border">
                    <h2>Payment:</h2>
                    <ul>
                      <li>%50advance payment by TT. </li>
                      <li>%50 before shipment by TT. </li>
                    </ul>
                    <h2>Delivery Terms: EX –WORKS –ADANA</h2>
                    <ul>
                      <li>Delivery Time: 160 days after receiving advance payment.Installation and training include the price. Flight tickets , foods and hotel expenses of techinical team should be covered by Buyer. </li>
                    </ul>
                    <h2>BANK INFORMATION(USD):</h2>
                    <ul>
                      <li>ACCOUNT NAME : FEYDAŞ MAKİNA VE MÜHENDİSLİK LTD ŞTİ</li>
                      <li>BANK NAME : YAPI KREDİ BANKASI A.Ş </li>
                      <li>BRANCH NAME : ATİKOP </li>
                      <li>BRANCH CODE : 850 </li>
                      <li>BANK ACCOUNT NO : 80791114 </li>
                      <li>SWIFT CODE : YAPITRIS </li>
                      <li>IBAN NO : TR05 0006 7010 0000 0080 7911 14 </li>
                    </ul>
                  </div>
                  <div class="col-md-12 border">
                    <h2>Conditions:</h2>
                    <ul>
                      <li>Proposal valid for 10 days from date of offer. </li>
                      <li>The Delay of requested set could be caused due Gearbox, resistance, panel and power engine supplier's accordingly the receiving date would be changed. </li>
                      <li>Our machines are guaranteed for 2 year against manufacturing defects. Exposed to abrasion, knives, electric motors and equipment are excluded from coverage. In addition, the consignee, misuse or faulty workmanship warranty malfunctions excluded. </li>
                      <li>Supply of spare parts provided by us at the request of the consignee. </li>
                      <li>Replaceable components are already installed on the machine, when prompted, spare parts could be provided with cost. </li>
                      <li>Machines, Assembly & Start up, operation time, and the first that was sent to an authorized service personnel expenses (transportation, lodging, food and beverage, etc.). shall be done by the buyer. </li>
                      <li>Our Machine is Totally on EXW basis ,all shipment, inspection and insurance belong to the buyer. </li>
                      <li>the preparation before machine installation such as plumping and electricity lines and also during machine downloading the required equipment's such as cranes , forklifts and so on ıs the responsibility of the buyer. </li>
                      <li>While system installation all needed conditioning, electrical grounding safety and health measures should be provided by the buyer. </li>
                      <li>by the end of manufacturing the required set and before delivery the buyer should make the full payment.</li>
                      <li>Once dispute the republic of Turkey-ADANA will be the authorized courts. </li>
                      <li>VAT excluded. </li>
                      <li>The giving images and measurement is for informational purposes only, should not bind with the proposal. </li>
                    </ul>
                  </div>
                  <div>
                    <ul class="text-danger">
                      YESILOBA MAH.M BASPINAR ORT OLC SANAYI SITESI 465249 SK.SEYHAN-ADANA, TURKIYE Tel:+903224280145-55 Gsm:+905309422490 Web:www.feydasmakina.com export@feydasmakina.com
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="bootstrap.js"></script>

  <script>
    // JavaScript fonksiyonu, toplamı hesaplar ve ekrana yazdırır
    function hesaplaToplam() {
      var toplam = 0;

      // Toplamı hesaplamak için input alanlarından geçerli değerleri alın
      var inputAlanlari = document.querySelectorAll('[id^="total_price_"]');
      for (var i = 0; i < inputAlanlari.length; i++) {
        var deger = parseFloat(inputAlanlari[i].value);
        if (!isNaN(deger)) {
          toplam += deger;
        }
      }

      // Toplamı ekrana yazdır
      var toplamAlan = document.getElementById('toplamAlan');
      toplamAlan.innerHTML = 'Toplam: ' + toplam.toFixed(2) + ' USD';
    }

    // Sayfa yüklendiğinde ve her bir input değiştiğinde "hesaplaToplam" fonksiyonunu çağırın
    document.addEventListener('DOMContentLoaded', hesaplaToplam);
    var inputAlanlari = document.querySelectorAll('[id^="total_price_"]');
    for (var i = 0; i < inputAlanlari.length; i++) {
      inputAlanlari[i].addEventListener('input', hesaplaToplam);
    }
  </script>

  <script>
    function handleSelectChange2(index) {
      var selectElement2 = document.getElementById('inputGroupSelect01_2' + index);
      var conditionalRow1_2 = document.getElementById('conditionalRow1_2' + index);
      var conditionalRow2_2 = document.getElementById('conditionalRow2_2' + index);
      var conditionalRow3_2 = document.getElementById('conditionalRow3_2' + index);
      var conditionalRow4_2 = document.getElementById('conditionalRow4_2' + index);
      var conditionalRow5_2 = document.getElementById('conditionalRow5_2' + index);
      var conditionalRow6_2 = document.getElementById('conditionalRow6_2' + index);
      var conditionalRow7_2 = document.getElementById('conditionalRow7_2' + index);
      var conditionalRow8_2 = document.getElementById('conditionalRow8_2' + index);
      var conditionalRow9_2 = document.getElementById('conditionalRow9_2' + index);
      var conditionalRow10_2 = document.getElementById('conditionalRow10_2' + index);
      var conditionalRow11_2 = document.getElementById('conditionalRow11_2' + index);
      var conditionalRow12_2 = document.getElementById('conditionalRow12_2' + index);
      var conditionalRow13_2 = document.getElementById('conditionalRow13_2' + index);

      if (selectElement2.value === '1') {
        conditionalRow1_2.style.display = 'table-row';
        conditionalRow2_2.style.display = 'none';
        conditionalRow3_2.style.display = 'none';
        conditionalRow4_2.style.display = 'none';
        conditionalRow5_2.style.display = 'none';
        conditionalRow6_2.style.display = 'none';
        conditionalRow7_2.style.display = 'none';
        conditionalRow8_2.style.display = 'none';
        conditionalRow9_2.style.display = 'none';
        conditionalRow10_2.style.display = 'none';
        conditionalRow11_2.style.display = 'none';
        conditionalRow12_2.style.display = 'none';
        conditionalRow13_2.style.display = 'none';
      } else if (selectElement2.value === '2') {
        conditionalRow1_2.style.display = 'none';
        conditionalRow2_2.style.display = 'table-row';
        conditionalRow3_2.style.display = 'none';
        conditionalRow4_2.style.display = 'none';
        conditionalRow5_2.style.display = 'none';
        conditionalRow6_2.style.display = 'none';
        conditionalRow7_2.style.display = 'none';
        conditionalRow8_2.style.display = 'none';
        conditionalRow9_2.style.display = 'none';
        conditionalRow10_2.style.display = 'none';
        conditionalRow11_2.style.display = 'none';
        conditionalRow12_2.style.display = 'none';
        conditionalRow13_2.style.display = 'none';
      } else if (selectElement2.value === '3') {
        conditionalRow1_2.style.display = 'none';
        conditionalRow2_2.style.display = 'none';
        conditionalRow3_2.style.display = 'table-row';
        conditionalRow4_2.style.display = 'none';
        conditionalRow5_2.style.display = 'none';
        conditionalRow6_2.style.display = 'none';
        conditionalRow7_2.style.display = 'none';
        conditionalRow8_2.style.display = 'none';
        conditionalRow9_2.style.display = 'none';
        conditionalRow10_2.style.display = 'none';
        conditionalRow11_2.style.display = 'none';
        conditionalRow12_2.style.display = 'none';
        conditionalRow13_2.style.display = 'none';
      } else if (selectElement2.value === '4') {
        conditionalRow1_2.style.display = 'none';
        conditionalRow2_2.style.display = 'none';
        conditionalRow3_2.style.display = 'none';
        conditionalRow4_2.style.display = 'table-row';
        conditionalRow5_2.style.display = 'none';
        conditionalRow6_2.style.display = 'none';
        conditionalRow7_2.style.display = 'none';
        conditionalRow8_2.style.display = 'none';
        conditionalRow9_2.style.display = 'none';
        conditionalRow10_2.style.display = 'none';
        conditionalRow11_2.style.display = 'none';
        conditionalRow12_2.style.display = 'none';
        conditionalRow13_2.style.display = 'none';
      } else if (selectElement2.value === '5') {
        conditionalRow1_2.style.display = 'none';
        conditionalRow2_2.style.display = 'none';
        conditionalRow3_2.style.display = 'none';
        conditionalRow4_2.style.display = 'none';
        conditionalRow5_2.style.display = 'table-row';
        conditionalRow6_2.style.display = 'none';
        conditionalRow7_2.style.display = 'none';
        conditionalRow8_2.style.display = 'none';
        conditionalRow9_2.style.display = 'none';
        conditionalRow10_2.style.display = 'none';
        conditionalRow11_2.style.display = 'none';
        conditionalRow12_2.style.display = 'none';
        conditionalRow13_2.style.display = 'none';
      } else if (selectElement2.value === '6') {
        conditionalRow1_2.style.display = 'none';
        conditionalRow2_2.style.display = 'none';
        conditionalRow3_2.style.display = 'none';
        conditionalRow4_2.style.display = 'none';
        conditionalRow5_2.style.display = 'none';
        conditionalRow6_2.style.display = 'table-row';
        conditionalRow7_2.style.display = 'none';
        conditionalRow8_2.style.display = 'none';
        conditionalRow9_2.style.display = 'none';
        conditionalRow10_2.style.display = 'none';
        conditionalRow11_2.style.display = 'none';
        conditionalRow12_2.style.display = 'none';
        conditionalRow13_2.style.display = 'none';
      } else if (selectElement2.value === '7') {
        conditionalRow1_2.style.display = 'none';
        conditionalRow2_2.style.display = 'none';
        conditionalRow3_2.style.display = 'none';
        conditionalRow4_2.style.display = 'none';
        conditionalRow5_2.style.display = 'none';
        conditionalRow6_2.style.display = 'none';
        conditionalRow7_2.style.display = 'table-row';
        conditionalRow8_2.style.display = 'none';
        conditionalRow9_2.style.display = 'none';
        conditionalRow10_2.style.display = 'none';
        conditionalRow11_2.style.display = 'none';
        conditionalRow12_2.style.display = 'none';
        conditionalRow13_2.style.display = 'none';
      } else if (selectElement2.value === '8') {
        conditionalRow1_2.style.display = 'none';
        conditionalRow2_2.style.display = 'none';
        conditionalRow3_2.style.display = 'none';
        conditionalRow4_2.style.display = 'none';
        conditionalRow5_2.style.display = 'none';
        conditionalRow6_2.style.display = 'none';
        conditionalRow7_2.style.display = 'none';
        conditionalRow8_2.style.display = 'table-row';
        conditionalRow9_2.style.display = 'none';
        conditionalRow10_2.style.display = 'none';
        conditionalRow11_2.style.display = 'none';
        conditionalRow12_2.style.display = 'none';
        conditionalRow13_2.style.display = 'none';
      } else if (selectElement2.value === '9') {
        conditionalRow1_2.style.display = 'none';
        conditionalRow2_2.style.display = 'none';
        conditionalRow3_2.style.display = 'none';
        conditionalRow4_2.style.display = 'none';
        conditionalRow5_2.style.display = 'none';
        conditionalRow6_2.style.display = 'none';
        conditionalRow7_2.style.display = 'none';
        conditionalRow8_2.style.display = 'none';
        conditionalRow9_2.style.display = 'table-row';
        conditionalRow10_2.style.display = 'none';
        conditionalRow11_2.style.display = 'none';
        conditionalRow12_2.style.display = 'none';
        conditionalRow13_2.style.display = 'none';
      } else if (selectElement2.value === '10') {
        conditionalRow1_2.style.display = 'none';
        conditionalRow2_2.style.display = 'none';
        conditionalRow3_2.style.display = 'none';
        conditionalRow4_2.style.display = 'none';
        conditionalRow5_2.style.display = 'none';
        conditionalRow6_2.style.display = 'none';
        conditionalRow7_2.style.display = 'none';
        conditionalRow8_2.style.display = 'none';
        conditionalRow9_2.style.display = 'none';
        conditionalRow10_2.style.display = 'table-row';
        conditionalRow11_2.style.display = 'none';
        conditionalRow12_2.style.display = 'none';
        conditionalRow13_2.style.display = 'none';
      } else if (selectElement2.value === '11') {
        conditionalRow1_2.style.display = 'none';
        conditionalRow2_2.style.display = 'none';
        conditionalRow3_2.style.display = 'none';
        conditionalRow4_2.style.display = 'none';
        conditionalRow5_2.style.display = 'none';
        conditionalRow6_2.style.display = 'none';
        conditionalRow7_2.style.display = 'none';
        conditionalRow8_2.style.display = 'none';
        conditionalRow9_2.style.display = 'none';
        conditionalRow10_2.style.display = 'none';
        conditionalRow11_2.style.display = 'table-row';
        conditionalRow12_2.style.display = 'none';
        conditionalRow13_2.style.display = 'none';
      } else if (selectElement2.value === '12') {
        conditionalRow1_2.style.display = 'none';
        conditionalRow2_2.style.display = 'none';
        conditionalRow3_2.style.display = 'none';
        conditionalRow4_2.style.display = 'none';
        conditionalRow5_2.style.display = 'none';
        conditionalRow6_2.style.display = 'none';
        conditionalRow7_2.style.display = 'none';
        conditionalRow8_2.style.display = 'none';
        conditionalRow9_2.style.display = 'none';
        conditionalRow10_2.style.display = 'none';
        conditionalRow11_2.style.display = 'none';
        conditionalRow12_2.style.display = 'table-row';
        conditionalRow13_2.style.display = 'none';
      } else if (selectElement2.value === '13') {
        conditionalRow1_2.style.display = 'none';
        conditionalRow2_2.style.display = 'none';
        conditionalRow3_2.style.display = 'none';
        conditionalRow4_2.style.display = 'none';
        conditionalRow5_2.style.display = 'none';
        conditionalRow6_2.style.display = 'none';
        conditionalRow7_2.style.display = 'none';
        conditionalRow8_2.style.display = 'none';
        conditionalRow9_2.style.display = 'none';
        conditionalRow10_2.style.display = 'none';
        conditionalRow11_2.style.display = 'none';
        conditionalRow12_2.style.display = 'none';
        conditionalRow13_2.style.display = 'table-row';
      } else {
        conditionalRow1_2.style.display = 'none';
        conditionalRow2_2.style.display = 'none';
        conditionalRow3_2.style.display = 'none';
        conditionalRow4_2.style.display = 'none';
        conditionalRow5_2.style.display = 'none';
        conditionalRow6_2.style.display = 'none';
        conditionalRow7_2.style.display = 'none';
        conditionalRow8_2.style.display = 'none';
        conditionalRow9_2.style.display = 'none';
        conditionalRow10_2.style.display = 'none';
        conditionalRow11_2.style.display = 'none';
        conditionalRow12_2.style.display = 'none';
        conditionalRow13_2.style.display = 'none';
      }
    }
  </script>


  <script>
    function handleSelectChange(index) {
      var selectElement = document.getElementById('inputGroupSelect01_' + index);
      var conditionalRow1 = document.getElementById('conditionalRow1_' + index);
      var conditionalRow2 = document.getElementById('conditionalRow2_' + index);
      var conditionalRow3 = document.getElementById('conditionalRow3_' + index);
      var conditionalRow4 = document.getElementById('conditionalRow4_' + index);
      var conditionalRow5 = document.getElementById('conditionalRow5_' + index);
      var conditionalRow6 = document.getElementById('conditionalRow6_' + index);
      var conditionalRow7 = document.getElementById('conditionalRow7_' + index);
      var conditionalRow8 = document.getElementById('conditionalRow8_' + index);
      var conditionalRow9 = document.getElementById('conditionalRow9_' + index);
      var conditionalRow10 = document.getElementById('conditionalRow10_' + index);
      var conditionalRow11 = document.getElementById('conditionalRow11_' + index);
      var conditionalRow12 = document.getElementById('conditionalRow12_' + index);
      var conditionalRow13 = document.getElementById('conditionalRow13_' + index);

      if (selectElement.value === '1') {
        conditionalRow1.style.display = 'table-row';
        conditionalRow2.style.display = 'none';
        conditionalRow3.style.display = 'none';
        conditionalRow4.style.display = 'none';
        conditionalRow5.style.display = 'none';
        conditionalRow6.style.display = 'none';
        conditionalRow7.style.display = 'none';
        conditionalRow8.style.display = 'none';
        conditionalRow9.style.display = 'none';
        conditionalRow10.style.display = 'none';
        conditionalRow11.style.display = 'none';
        conditionalRow12.style.display = 'none';
        conditionalRow13.style.display = 'none';
      } else if (selectElement.value === '2') {
        conditionalRow1.style.display = 'none';
        conditionalRow2.style.display = 'table-row';
        conditionalRow3.style.display = 'none';
        conditionalRow4.style.display = 'none';
        conditionalRow5.style.display = 'none';
        conditionalRow6.style.display = 'none';
        conditionalRow7.style.display = 'none';
        conditionalRow8.style.display = 'none';
        conditionalRow9.style.display = 'none';
        conditionalRow10.style.display = 'none';
        conditionalRow11.style.display = 'none';
        conditionalRow12.style.display = 'none';
        conditionalRow13.style.display = 'none';
      } else if (selectElement.value === '3') {
        conditionalRow1.style.display = 'none';
        conditionalRow2.style.display = 'none';
        conditionalRow3.style.display = 'table-row';
        conditionalRow4.style.display = 'none';
        conditionalRow5.style.display = 'none';
        conditionalRow6.style.display = 'none';
        conditionalRow7.style.display = 'none';
        conditionalRow8.style.display = 'none';
        conditionalRow9.style.display = 'none';
        conditionalRow10.style.display = 'none';
        conditionalRow11.style.display = 'none';
        conditionalRow12.style.display = 'none';
        conditionalRow13.style.display = 'none';
      } else if (selectElement.value === '4') {
        conditionalRow1.style.display = 'none';
        conditionalRow2.style.display = 'none';
        conditionalRow3.style.display = 'none';
        conditionalRow4.style.display = 'table-row';
        conditionalRow5.style.display = 'none';
        conditionalRow6.style.display = 'none';
        conditionalRow7.style.display = 'none';
        conditionalRow8.style.display = 'none';
        conditionalRow9.style.display = 'none';
        conditionalRow10.style.display = 'none';
        conditionalRow11.style.display = 'none';
        conditionalRow12.style.display = 'none';
        conditionalRow13.style.display = 'none';
      } else if (selectElement.value === '5') {
        conditionalRow1.style.display = 'none';
        conditionalRow2.style.display = 'none';
        conditionalRow3.style.display = 'none';
        conditionalRow4.style.display = 'none';
        conditionalRow5.style.display = 'table-row';
        conditionalRow6.style.display = 'none';
        conditionalRow7.style.display = 'none';
        conditionalRow8.style.display = 'none';
        conditionalRow9.style.display = 'none';
        conditionalRow10.style.display = 'none';
        conditionalRow11.style.display = 'none';
        conditionalRow12.style.display = 'none';
        conditionalRow13.style.display = 'none';
      } else if (selectElement.value === '6') {
        conditionalRow1.style.display = 'none';
        conditionalRow2.style.display = 'none';
        conditionalRow3.style.display = 'none';
        conditionalRow4.style.display = 'none';
        conditionalRow5.style.display = 'none';
        conditionalRow6.style.display = 'table-row';
        conditionalRow7.style.display = 'none';
        conditionalRow8.style.display = 'none';
        conditionalRow9.style.display = 'none';
        conditionalRow10.style.display = 'none';
        conditionalRow11.style.display = 'none';
        conditionalRow12.style.display = 'none';
        conditionalRow13.style.display = 'none';
      } else if (selectElement.value === '7') {
        conditionalRow1.style.display = 'none';
        conditionalRow2.style.display = 'none';
        conditionalRow3.style.display = 'none';
        conditionalRow4.style.display = 'none';
        conditionalRow5.style.display = 'none';
        conditionalRow6.style.display = 'none';
        conditionalRow7.style.display = 'table-row';
        conditionalRow8.style.display = 'none';
        conditionalRow9.style.display = 'none';
        conditionalRow10.style.display = 'none';
        conditionalRow11.style.display = 'none';
        conditionalRow12.style.display = 'none';
        conditionalRow13.style.display = 'none';
      } else if (selectElement.value === '8') {
        conditionalRow1.style.display = 'none';
        conditionalRow2.style.display = 'none';
        conditionalRow3.style.display = 'none';
        conditionalRow4.style.display = 'none';
        conditionalRow5.style.display = 'none';
        conditionalRow6.style.display = 'none';
        conditionalRow7.style.display = 'none';
        conditionalRow8.style.display = 'table-row';
        conditionalRow9.style.display = 'none';
        conditionalRow10.style.display = 'none';
        conditionalRow11.style.display = 'none';
        conditionalRow12.style.display = 'none';
        conditionalRow13.style.display = 'none';
      } else if (selectElement.value === '9') {
        conditionalRow1.style.display = 'none';
        conditionalRow2.style.display = 'none';
        conditionalRow3.style.display = 'none';
        conditionalRow4.style.display = 'none';
        conditionalRow5.style.display = 'none';
        conditionalRow6.style.display = 'none';
        conditionalRow7.style.display = 'none';
        conditionalRow8.style.display = 'none';
        conditionalRow9.style.display = 'table-row';
        conditionalRow10.style.display = 'none';
        conditionalRow11.style.display = 'none';
        conditionalRow12.style.display = 'none';
        conditionalRow13.style.display = 'none';
      } else if (selectElement.value === '10') {
        conditionalRow1.style.display = 'none';
        conditionalRow2.style.display = 'none';
        conditionalRow3.style.display = 'none';
        conditionalRow4.style.display = 'none';
        conditionalRow5.style.display = 'none';
        conditionalRow6.style.display = 'none';
        conditionalRow7.style.display = 'none';
        conditionalRow8.style.display = 'none';
        conditionalRow9.style.display = 'none';
        conditionalRow10.style.display = 'table-row';
        conditionalRow11.style.display = 'none';
        conditionalRow12.style.display = 'none';
        conditionalRow13.style.display = 'none';
      } else if (selectElement.value === '11') {
        conditionalRow1.style.display = 'none';
        conditionalRow2.style.display = 'none';
        conditionalRow3.style.display = 'none';
        conditionalRow4.style.display = 'none';
        conditionalRow5.style.display = 'none';
        conditionalRow6.style.display = 'none';
        conditionalRow7.style.display = 'none';
        conditionalRow8.style.display = 'none';
        conditionalRow9.style.display = 'none';
        conditionalRow10.style.display = 'none';
        conditionalRow11.style.display = 'table-row';
        conditionalRow12.style.display = 'none';
        conditionalRow13.style.display = 'none';
      } else if (selectElement.value === '12') {
        conditionalRow1.style.display = 'none';
        conditionalRow2.style.display = 'none';
        conditionalRow3.style.display = 'none';
        conditionalRow4.style.display = 'none';
        conditionalRow5.style.display = 'none';
        conditionalRow6.style.display = 'none';
        conditionalRow7.style.display = 'none';
        conditionalRow8.style.display = 'none';
        conditionalRow9.style.display = 'none';
        conditionalRow10.style.display = 'none';
        conditionalRow11.style.display = 'none';
        conditionalRow12.style.display = 'table-row';
        conditionalRow13.style.display = 'none';
      } else if (selectElement.value === '13') {
        conditionalRow1.style.display = 'none';
        conditionalRow2.style.display = 'none';
        conditionalRow3.style.display = 'none';
        conditionalRow4.style.display = 'none';
        conditionalRow5.style.display = 'none';
        conditionalRow6.style.display = 'none';
        conditionalRow7.style.display = 'none';
        conditionalRow8.style.display = 'none';
        conditionalRow9.style.display = 'none';
        conditionalRow10.style.display = 'none';
        conditionalRow11.style.display = 'none';
        conditionalRow12.style.display = 'none';
        conditionalRow13.style.display = 'table-row';
      } else {
        conditionalRow1.style.display = 'none';
        conditionalRow2.style.display = 'none';
        conditionalRow3.style.display = 'none';
        conditionalRow4.style.display = 'none';
        conditionalRow5.style.display = 'none';
        conditionalRow6.style.display = 'none';
        conditionalRow7.style.display = 'none';
        conditionalRow8.style.display = 'none';
        conditionalRow9.style.display = 'none';
        conditionalRow10.style.display = 'none';
        conditionalRow11.style.display = 'none';
        conditionalRow12.style.display = 'none';
        conditionalRow13.style.display = 'none';
      }
    }
  </script>
  <script>
    function getValue(inputId, resultId) {
      const inputElement = document.getElementById(inputId);
      const inputValue = inputElement.value;
      const resultElement = document.getElementById(resultId);
      resultElement.innerText = inputValue;
    }
  </script>
  <script>
    let img = document.getElementById('img');
    let input = document.getElementById('input');
    input.onchange = (e) => {
      if (input.files[0])
        img.src = URL.createObjectURL(input.files[0]);
    };
  </script>
</body>

</html>