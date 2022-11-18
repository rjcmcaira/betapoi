//agrega eleetos al momento de cargar

document.addEventListener('DOMContentLoaded', function(){
 if(document.querySelector("#formRegistropoi")){
        var formRegistropoi = document.querySelector("#formRegistropoi");
        formRegistropoi.onsubmit = function(e) {
            e.preventDefault();
            var strCc = document.querySelector('#txtCc').value;
            var strOei = document.querySelector('#txtOei').value;
            var strCoe = document.querySelector('#txtCoe').value;
            var strIoe = document.querySelector('#txtIoe').value;
            var strUmoe = document.querySelector('#txtUmoe').value;
            var strMoe = document.querySelector('#txtMoe').value;
            var strAei = document.querySelector('#txtAei').value;
            var strCae = document.querySelector('#txtCae').value;
            var strIae = document.querySelector('#txtIae').value;
            var strUmae = document.querySelector('#txtUmae').value;
            var strMae = document.querySelector('#txtMae').value;

            if(strCc == '' || strOei == '' || strCoe == '' || strIoe == '' || strUmoe == '' || strMoe == '' || strAei == '' || strCae == '' || strIae == '' || strUmae == ''|| strMae == '')
            {
                swal("Atención", "Todos los campos son obligatorios." , "error");
                return false;
            }

            let elementsValid = document.getElementsByClassName("valid");
            for (let i = 0; i < elementsValid.length; i++) { 
                if(elementsValid[i].classList.contains('is-invalid')) { 
                    swal("Atención", "Por favor verifique los campos en rojo." , "error");
                    return false;
                } 
            } 
            divLoading.style.display = "flex";
            var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
            var ajaxUrl = base_url+'/Registropoi/setRegistropoi'; 
            var formData = new FormData(formRegistropoi);
            request.open("POST",ajaxUrl,true);
            request.send(formData);
            request.onreadystatechange = function(){
                if(request.readyState == 4 && request.status == 200){
                    var objData = JSON.parse(request.responseText);
                    if(objData.status)
                    {
                        $('#modalFormRegistropoi').modal("hide");
                        formRegistropoi.reset();
                        swal("Registropoi", objData.msg ,"success");
                        tableUsuarios.api().ajax.reload();
                    }else{
                        swal("Error", objData.msg , "error");
                    }
                }
                divLoading.style.display = "none";
                return false;
            }
        }
    }
  
},false);

function openModal()
{
    document.querySelector('#idRegistropoi').value ='';
    document.querySelector('.modal-header').classList.replace("headerUpdate", "headerRegister");
    document.querySelector('#btnActionForm').classList.replace("btn-info", "btn-primary");
    document.querySelector('#btnText').innerHTML ="Guardar";
    document.querySelector('#titleModal').innerHTML = "Nuevo Registro Ficha POI";
    document.querySelector("#formRegistropoi").reset();
    //document.querySelector("#modalFormRegistropoi").reset();
    $('#modalFormRegistropoi').modal('show');
}
function openModalPerfil(){
    $('#modalFormPerfil').modal('show');
}
//extraer centro de costo
/*
function fntCentroCosto(){
    
        var ajaxUrl = base_url+'/Centrocosto/getSelectCentrocosto';
		
        var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
        request.open("GET",ajaxUrl,true);
        request.send();
        //alert(request.responseText);
        request.onreadystatechange = function(){
            if(request.readyState == 4 && request.status == 200){
                document.querySelector('#txtCc').innerHTML = request.responseText;
                $('#txtCc').selectpicker('render');
            }
        }

    
}

**/

window.addEventListener('load',function(){
    fntCentroCosto();
},false)

function fntCentroCosto(){
    if(document.querySelector('#txtCc')){
        var ajaxUrl = base_url+'/Centrocosto/getSelectCentrocosto';
        var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
        request.open("GET",ajaxUrl,true);
        request.send();
        request.onreadystatechange = function(){
            if(request.readyState == 4 && request.status == 200){
                document.querySelector('#txtCc').innerHTML = request.responseText;
                $('#txtCc').selectpicker('render');
            }
        }
    }
}