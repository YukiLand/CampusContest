<div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <p class="modal-title" id="exampleModalLabel">Nouvelle recommandation</p>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
		  <form method="POST" action="">
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label">Nom Prénom :</label>
	            <input type="text" class="form-control" name="name" id="recipient-name">
	          </div>
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label">Compétences / Entreprise :</label>
	            <input type="text" class="form-control" name="skill" id="recipient-name">
	          </div>
	          <div class="form-group">
	            <label for="message-text" class="col-form-label">Message:</label>
	            <textarea class="form-control" name="message" id="message-text"></textarea>
	          </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <input type="submit" name="recommandation" class="btn btn-primary"></input>
	      </div>
		  </form>
	    </div>
	  </div>

<?php
    if (!empty($_POST["recommandation"])){
 
        ini_set( 'display_errors', 1 );
    
        error_reporting( E_ALL );
    
        $from = "neekeyo537@gmail.com";
    
        $to = "monsite76@outlook.fr";
    
        $subject = "Recommandation de ".$_POST['name'];
    
        $message = "Compétence recommander: ".$_POST['skill'] . "\n\n".$_POST['message'];
    
        $headers = "From:" . $from;

        mail($to, utf8_decode($subject), utf8_decode($message), $headers);
	}?>