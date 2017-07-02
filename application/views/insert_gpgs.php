<!--Naked Form-->
<div class="card-block col-md-6 offset-3">

<!--Header-->
<div class="text-center">
	<h3><i class="fa fa-envelope"></i> Novo</h3>
	<hr class="mt-2 mb-2">
</div>

<!--Body-->

    <!--Body-->
    <form action="<?= base_url("gpgs/$action") ?>" method="post">
	    <div class="md-form">
	        <i class="fa fa-user prefix"></i>
	        <input value="<?= set_value('playerID') ?>" type="text" id="playerID" name="playerID" class="form-control">
	        <label for="playerID">Player ID</label>
	    </div>
	
	   
	
	    <div class="md-form">
	        <i class="fa fa-tag prefix"></i>
	        <input value="<?= set_value('language') ?>" type="text" id="language" name="language" class="form-control">
	        <label for="language">Language</label>
	    </div>
	
	    <div class="md-form">
	        <i class="fa fa-pencil prefix"></i>
	        <input value="<?= set_value('maxResults') ?>" type="text" id="maxResults" name="maxResults" class="md-textarea">
	        <label for="maxResults">Maximum Results</label>
	    </div>
	    
	    <div class="md-form">
	        <i class="fa fa-pencil prefix"></i>
	        <input value="<?= set_value('pageToken') ?>" type="text" id="pageToken" name="pageToken" class="md-textarea">
	        <label for="pageToken">Page Token</label>
	    </div>
	    

		<div class="md-form">
	        <i class="fa fa-pencil prefix"></i>
	        <input value="<?= set_value('fields') ?>" type="text" id="fields" name="fields" class="md-textarea">
	        <label for="fields">Fields</label>
	    </div>
		
		<div class="md-form">
	        <i class="fa fa-pencil prefix"></i>
	        <input value="<?= set_value('apiKey') ?>" type="text" id="apiKey" name="apiKey" class="md-textarea">
	        <label for="apiKey">Key</label>
	    </div>
		
		<div class="md-form">
	        <i class="fa fa-pencil prefix"></i>
	        <input value="<?= set_value('oauth_token') ?>" type="text" id="oauth_token" name="oauth_token" class="md-textarea">
	        <label for="oauth_token">Oauth Token</label>
	    </div>
		
		<div class="md-form">
	        <i class="fa fa-pencil prefix"></i>
	        <input value="<?= set_value('prettyPrint') ?>" type="text" id="prettyPrint" name="prettyPrint" class="md-textarea">
	        <label for="prettyPrint">Pretty Print</label>
	    </div>
		
		<div class="md-form">
	        <i class="fa fa-pencil prefix"></i>
	        <input value="<?= set_value('quotaUser') ?>" type="text" id="quotaUser" name="quotaUser" class="md-textarea">
	        <label for="quotaUser">Quota User</label>
	    </div>
		
		<div class="md-form">
	        <i class="fa fa-pencil prefix"></i>
	        <input value="<?= set_value('userIp') ?>" type="text" id="userIp" name="userIp" class="md-textarea">
	        <label for="userIp">User IP Address</label>
	    </div>
	
	    <div class="text-center">
	        <button class="btn btn-default">Enviar</button>
	    </div>
	</form>
</div>
<!--Naked Form-->
