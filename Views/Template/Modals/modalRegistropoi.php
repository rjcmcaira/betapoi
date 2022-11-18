<!-- Modal -->
<div class="modal fade" id="modalFormRegistropoi" class="modalFormRegistropoi" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" >
    <div class="modal-content">
      <div class="modal-header headerRegister">
        <h5 class="modal-title" id="titleModal">Nuevo Registro  POI</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            
            <form id="formRegistropoi" name="formRegistropoi" class="form-horizontal">
              <input type="hidden" id="idRegistropoi" name="idRegistropoi" value="">
              <p class="text-primary">Los campos con <span class="required">*</span> son obligatorios</p>

              <div class="form-row">
                <div class="form-group col-md-6">
                 
                   <label for="txtCc">Objetivo estrategico institucional <span class="required">*</span> </label>
                    <select class="form-control selecpicker" data-live-search="true" id="txtCc" name="txtCc" required>
                      
                    </select>
                                 
                </div>
                <div class="form-group col-md-6">
                  
                  <label for="txtOei">Objetivo estrategico institucional <span class="required">*</span> </label>
                    <select class="form-control selectpicker" data-live-search="true" id="txtOei" name="txtOei" >
                        <option >Fortalecer la Gestion Institucional</option>
                        <option >Fortalecer la Gestion Institucional 1</option>
                        <option >Fortalecer la Gestion Institucional 2</option>
                    </select>
                </div>
              </div>
              <div class="form-row">
                
                <div class="form-group col-md-6">
                  <label for="txtCoe">Codigo de Objetivo Estrategico <span class="required">*</span> </label>
                    <select class="form-control selectpicker" data-live-search="true" id="txtCoe" name="txtCoe" >
                        <option >OEI.03</option>
                        <option >OEI.01</option>
                        <option >OEI.02</option>
                    </select>
                </div>

                <div class="form-group col-md-6">
                  <label for="txtIoe">Indicador Objetivo Estrategico <span class="required">*</span> </label>
                  <select class="form-control selectpicker" data-live-search="true" id="txtIoe" name="txtIoe" >
                        <option >Indice de desempeño institucional de la gestion3</option>
                        <option >Indice de desempeño institucional de la gestion 1</option>
                        <option >Indice de desempeño institucional de la gestion2</option>
                    </select>
                </div>
              </div>

              <div class="form-row">
                
                <div class="form-group col-md-6">
                  <label for="txtUmoe">Unidad de Medida de Objetivo Estratico <span class="required">*</span></label>
                  <select class="form-control selectpicker" data-live-search="true" id="txtUmoe" name="txtUmoe" >
                        <option >Indice de desempeño</option>
                        <option >Indice de desempeño 1</option>
                        <option >Indice de desempeño 2</option>
                    </select>
                </div>

                <div class="form-group col-md-6">
                    
                     <label for="txtMoe">Meta Objetivo Estrategico </label>
                  <input type="text" class="form-control valid validNumber" id="txtMoe" name="txtMoe" required="" onkeypress="return controlTag(event);" maxlength="3">

                </div>
              </div>
             <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="txtAei">Accion estrategica institucional <span class="required">*</span></label>
                    <select class="form-control selectpicker" data-live-search="true" id="txtAei" name="txtAei"  >
                      <option>Capacides Fortalecidas de Manera Permanente a Los Servidores Publicos</option>
                      <option>Capacides Fortalecidas de Manera Permanente 2</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="txtCae">Codigo de accion Estrategica <span class="required">*</span></label>
                    <select class="form-control selectpicker" data-live-search="true" id="txtCae" name="txtCae"  >
                      <option>AEI.O3.03</option>
                      <option>AEI.O3.02</option>
                      <option>AEI.O3.01</option>
                    </select>
                </div>
             </div>
             <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="txtIae">Indicador Accion Estrategica <span class="required">*</span> </label>
                    <select class="form-control selectpicker" data-live-search="true" id="txtIae" name="txtIae"  >
                      <option>Porcentaje de los servidores capacitados permanente</option>
                      <option>Porcentaje de los servidores capacitados Temporal</option>
                      <option>Porcentaje de los servidores capacitados Nunca</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="txtUmae">Unidad de Medida de Accion Estrategica <span class="required">*</span></label>
                    <select class="form-control selectpicker" data-live-search="true" id="txtUmae" name="txtUmae"  >
                      <option>Servido Publico 1</option>
                      <option>Servidor Publico 2</option>
                      <option>Servidor Publico 3</option>
                    </select>
                </div>
             </div>
             <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="txtMae">Meta accion estrategica <span class="required">*</span></label>
                    <input type="text" class="form-control valid validNumber" id="txtMae" name="txtMae" required="" onkeypress="return controlTag(event);" maxlength="3">
                </div>
                
             </div>
             
            
              <div class="tile-footer">
                <button id="btnActionForm" class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i><span id="btnText">Guardar</span></button>&nbsp;&nbsp;&nbsp;
                <button class="btn btn-danger" type="button" data-dismiss="modal"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cerrar</button>
              </div> 
            </form>
      </div>
    </div>
  </div>
</div>