function tampilData() {
    $('#data-succes').html('');
    $('#data-list').html('');


    $.ajax({
        url: 'https://apicovid19indonesia-v2.vercel.app/api/indonesia/provinsi/more?=',
        type: 'get',
        dataType: 'json',
        data: {
            'name': $('#search-input').val()
        },
        success: function (result) {
           if (result.length !== 0){
				let dataprov = result;
				$('#data-list').html(``);
                $.each(dataprov, function (i, data) {
                  var terkonfirmasi = new Number(data.kasus).toLocaleString("id-ID");
                  var dirawat = new Number(data.dirawat).toLocaleString("id-ID");
                  var sembuh = new Number(data.sembuh).toLocaleString("id-ID");
                  var meninggal = new Number(data.meninggal).toLocaleString("id-ID");
                    $('#data-succes').append(`  
                <div class="col-sm-4">
                  <div class="prov-box mb-3" id="data-succes">
						        <p class="font-weight-bold text-center pb-3"><span>${data.provinsi}</span></p>
						          <div class="d-flex justify-content-between text-success">
						            <p class="text-danger">Terkonfirmasi</p>
						            <p><span>${terkonfirmasi}</span></p>
						          </div>
						          <div class="d-flex justify-content-between text-success">
						            <p class="text-warning">Dirawat</p>
						            <p><span>${dirawat}</span></p>
						          </div>
						          <div class="d-flex justify-content-between text-success">
						            <p class="text-success">Sembuh </p>
						            <p><span>${sembuh}</span></p>
						          </div>
						          <div class="d-flex justify-content-between">
						            <p style="color:#AE60C6;">Meninggal </p>
						            <p><span>${meninggal}</span></p>
						          </div>
                      <div class="d-flex justify-content-end">
						            <a href="#" class="btn btn-primary text-light see-detail" data-id="${data.provinsi}" data-toggle="modal" data-target="#exampleModalLong">Lihat detail</a>
						          </div>
                      </div>
                      </div>
                    `);
                });


                $('#search-input').val('');

            } else {
                $('#search-input').val('');
                $('#data-list').html(`
                    <div class="col-sm-12">
                        <h4 class="text-center font-weight-bold"><span>Data Tidak Ditemukan</span></h4>
                    </div>
                `)
            }
        }
    });
}

tampilData();


$('#data-succes').on('click','.see-detail', function(){
    $.ajax({
        url: 'https://apicovid19indonesia-v2.vercel.app/api/indonesia/provinsi/more?=',
        dataType: 'json',
        data:{
          'name' : $(this).data('id')
        },
        success: function(detailData){
          if (detailData.length !== null){
           $.each(detailData, function (i, data){
            //kelompok umur
           var dini1 = new Number(data.kelompok_umur["0-5"]).toLocaleString("id-ID");
           var anak = new Number(data.kelompok_umur["6-18"]).toLocaleString("id-ID");
           var remaja = new Number(data.kelompok_umur["19-30"]).toLocaleString("id-ID");
           var dewasa = new Number(data.kelompok_umur["31-45"]).toLocaleString("id-ID");
           var dewasa1 = new Number(data.kelompok_umur["46-59"]).toLocaleString("id-ID");
           var tua = new Number(data.kelompok_umur["≥ 60"]).toLocaleString("id-ID");
           //kelompok jenis kelamin
           var laki = new Number(data.jenis_kelamin["laki-laki"]).toLocaleString("id-ID");
           var perempuan = new Number(data.jenis_kelamin.perempuan).toLocaleString("id-ID");
           //kelompok penambahan
           var Ppositif = new Number(data.penambahan.positif).toLocaleString("id-ID");
           var Psembuh = new Number(data.penambahan.sembuh).toLocaleString("id-ID");
           var Pmeninggal = new Number(data.penambahan.meninggal).toLocaleString("id-ID");
          

            $('.modal-body').html(`
                              <div class="d-flex justify-content-between">
                              <p class="font-weight-bold">[Rentang Usia]</p>
                              <p class="font-weight-bold">[Jenis Kelamin]</p>
                              </div>
                              <div class="d-flex justify-content-between">
                               <p>0-5 : ${dini1}</p>
                               <p>Laki-Laki : ${laki}</p>   
                              </div>
                              <div class="d-flex justify-content-between">
                               <p>6-18 : ${anak}</p>
                               <p>Perempuan : ${perempuan}</p>   
                              </div>
                              <div class="d-flex justify-content-between">
                               <p>19-30 : ${remaja}</p>
                               <p class="font-weight-bold" >[Penambahan]</p>    
                              </div>
                              <div class="d-flex justify-content-between">
                               <p >31-45 : ${dewasa}</p>
                               <p class="text-danger">Positif : ${Ppositif}</p> 
                              </div>
                              <div class="d-flex justify-content-between">
                               <p >46-59 : ${dewasa1}</p>
                               <p class="text-success">Sembuh : ${Psembuh}</p>
                              </div>
                              <div class="d-flex justify-content-between">
                               <p >≥ 60 : ${tua}</p>
                               <p style="color:#AE60C6;">Meninggal : ${Pmeninggal}</p>  
                              </div>
              `);
            });
          }
        }
    });

});

$('#refresh').on('click', function () {
    tampilData();
});


$('#search-button').on('click', function () {
    tampilData();
});


$('#search-input').on('keyup', function (e) {
    if (e.which === 13) {
        tampilData();
    }
});
