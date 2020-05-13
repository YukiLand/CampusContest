<div class="modal-dialog modal-lg">
		        <div class="modal-content">
		          <div class="modal-content">
		                <div class="modal-header">
		                <h4 class="modal-title" id="myModalLabel">Questionnaire</h4>
		                </div>
		                <div class="modal-body">
		                     <form id="requestacallform" method="POST" name="requestacallform">

		                                <div class="form-group">
		                                    <div class="input-group">                               
		                                    <span class="input-group-addon "><i class="fa fa-user"></i></span>
		                                    <input id="first_name" type="text" class="form-control" placeholder="Préom" name="first_name"/>
		                                    </div>
		                              </div>
		                              <div class="form-group">
		                                    <div class="input-group">                               
		                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
		                                    <input id="last_name" type="text" class="form-control" placeholder="Nom" name="last_name"/>
		                                    </div>
		                              </div>
		                                <div class="form-group">
		                                    <div class="input-group">                               
		                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
		                                    <input id="email1" type="text" class="form-control" placeholder="Email" name="email1" onchange="validateEmailAdd();"/>
		                                    </div>
		                              </div>
		                               <div class="form-group">
									    <label for="formGroupExampleInput">La page s'est-elle bien affichée ? Si non, quel(s) élément(s) vous a posé problème ?</label>
									    <input type="text" class="form-control" id="formGroupExampleInput" class="" placeholder="Example input placeholder">
									  </div>
									  <div class="form-group">
									    <label for="formGroupExampleInput2">Recommenderiez-vous ce site à vos proches ?</label>
									    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
									  </div>
									  <div class="form-group">
									    <label for="formGroupExampleInput3">Le design était-il plaisant ?</label>
									    <input type="text" class="form-control" id="formGroupExampleInput3" placeholder="Another input placeholder">
									  </div>
									  <div class="form-group">
									    <label for="formGroupExampleInput4">Quelle(s) fonctionnalité(s) pourrait-il y avoir en plus ?</label>
									    <input type="text" class="form-control" id="formGroupExampleInput4" placeholder="Another input placeholder">
									  </div>
									  <div class="form-group">
									    <label for="formGroupExampleInput5">Les informations semblaient-elles pertinentes ?</label>
									    <input type="text" class="form-control" id="formGroupExampleInput5" placeholder="Another input placeholder">
									  </div>
									  <div class="form-group">
									    <label for="formGroupExampleInput6">Autre(s) remarque(s) :</label>
									    <input type="text" class="form-control" id="formGroupExampleInput6" placeholder="Another input placeholder">
									  </div>





		                            </form>
		                  </div>


		              <div class="modal-footer">
		                <button id="btnContact" type="button" class="btn btn-blue">Envoyer</button>
		              </div>          
		        </div>
		        </div>