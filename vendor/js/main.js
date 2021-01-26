function bootboxCreate() {
   

   
    var adi = document.getElementById("adi").value;
    var soyadi = document.getElementById("soyadi").value;
    var tc_no = document.getElementById("tc_no").value;
    var o_no = document.getElementById("o_no").value;
    var d_tarihi = document.getElementById("d_tarihi").value;
    var adres = document.getElementById("adres").value;
   
        if (adi == "" || soyadi == "" || tc_no == "" || o_no == "" || d_tarihi == "" || adres == "") {

            document.getElementById("myForm").submit();
            
        }
        else {


            bootbox.confirm({
                    message: "Yeni öğrenci eklensin mi?",
                    buttons: {
                    confirm: {
                        label: 'Evet',
                        className: 'btn-success'
                    },
                    cancel: {
                        label: 'Hayır',
                        className: 'btn-danger'
                    }
                },
                callback: function (result) {
                    if (result) {

                        document.getElementById("myForm").submit();
                        
                        return result;
                    }
                    else {
                       
                        return !result;
                    }
                }
            });
        }
}

function loadPage()
{
      var anasayfa = document.getElementById("anasayfa").value;
    if(anasayfa!=null)
        {
           
            document.getElementById("anasayfanav").className=="active";
        }
}