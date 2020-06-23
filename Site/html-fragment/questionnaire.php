<div class="modal-dialog modal-lg">
		        <div class="modal-content">
		          <div class="modal-content">
		                <div class="modal-header">
		                <h4 class="modal-title" id="myModalLabel">Questionnaire</h4>
		                </div>
		                <div class="modal-body">
		                     <form id="requestacallform" method="POST" action="" name="requestacallform">

		                                <div class="form-group">
		                                    <div class="input-group">                               
		                                    <span class="input-group-addon "><i class="fa fa-user"></i></span>
		                                    <input id="first_name" type="text" class="form-control" placeholder="Prénom" name="first_name"/>
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
									    <input type="text" class="form-control" id="formGroupExampleInput" name="Q1" class="">
									  </div>
									  <div class="form-group">
									    <label for="formGroupExampleInput2">Recommenderiez-vous ce site à vos proches ? Si oui pourquoi ?</label>
									    <input type="text" class="form-control" name="Q2" id="formGroupExampleInput2">
									  </div>
									  <div class="form-group">
									    <label for="formGroupExampleInput3">Le design était-il plaisant ?</label>
									    <input type="text" class="form-control" name="Q3" id="formGroupExampleInput3">
									  </div>
									  <div class="form-group">
									    <label for="formGroupExampleInput4">Quelle(s) fonctionnalité(s) pourrait-il y avoir en plus ?</label>
									    <input type="text" class="form-control"  name="Q4"id="formGroupExampleInput4">
									  </div>
									  <div class="form-group">
									    <label for="formGroupExampleInput5">Les informations semblaient-elles pertinentes ?</label>
									    <input type="text" class="form-control" name="Q5" id="formGroupExampleInput5">
									  </div>
									  <div class="form-group">
									    <label for="formGroupExampleInput6">Autre(s) remarque(s) :</label>
									    <input type="text" class="form-control" name="Q6" id="formGroupExampleInput6">
									  </div>





		                            
		                  </div>


		              <div class="modal-footer">
						  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						  <input type="submit" name="questionnaire" class="btn btn-primary"></input>
						  </form>
		              </div>          
		        </div>
				</div>
				
<?php
    if (!empty($_POST["questionnaire"])){
 
        ini_set( 'display_errors', 1 );
    
        error_reporting( E_ALL );
    
        $from = "neekeyo537@gmail.com";
    
        $to = "monsite76@outlook.fr";
    
		$subject = "Questionnaire à propos du portfolio de ".$_POST['first_name'] . " " .$_POST['last_name'] ;
		
		$question1 = "La page s'est-elle bien affichée ? Si non, quel(s) élément(s) vous a posé problème ?" . " " .$_POST['Q1'] ;

		$question2 = "Recommenderiez-vous ce site à vos proches ? Si oui pourquoi ?" . " " .$_POST['Q2'] ;

		$question3 = "Le design était-il plaisant ?" . " " .$_POST['Q3'] ;

		$question4 = "Quelle(s) fonctionnalité(s) pourrait-il y avoir en plus ?" . " " .$_POST['Q4'] ;

		$question5 = "Les informations semblaient-elles pertinentes ?" . " " .$_POST['Q5'] ;

		$question6 = "Autre(s) remarque(s) :" . " " .$_POST['Q6'] ;

		$message = $question1 . "\n\n" . $question2 . "\n\n" . $question3 . "\n\n" . $question4 . "\n\n" . $question5 . "\n\n" . $question6 . "\n\n" . "Adresse mail du contact: ".$_POST['email'];;
    
        $headers = "From:" . $from;

        mail($to, utf8_decode($subject), utf8_decode($message), $headers);
	}?>