<head>
    <title></title>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
    <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
  
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script>
  
/* jquery.validate plagin added using cdn. Go to jqueryvalidation.org to see what methods are provided */
/* Create custom validation method */
$.validator.addMethod("startWithA", function(value, element) {
	return /^A/.test(value);
}, "Field must start with A");
$("form").validate({
	rules: {
		fullname: {
			required: true
			//minlength: 5,
			//maxlength: 10,
			//email: true
			//startWithA: true
		},
		password: {
			required: true
		},
		pet: {
			required: true,
			maxlength: 2
		}
	},
// Custom message for error
	messages: {
		fullname: {
			required: "You must enter your fullname"
		}
	},
	messages: {
		pet: {
			required: "You must select at least 1 box",
			maxlength: "You must select no more then 2 boxes"
		}
	},
	highlight: function(element, errorClass) {
		$(element).closest(".form-group").addClass("has-error");
	},
	unhighlight: function(element, errorClass) {
		$(element).closest(".form-group").removeClass("has-error");
	},
	errorPlacement: function (error, element) {
		error.appendTo(element.parent().next());
	},
	errorPlacement: function (error, element) {
		if(element.attr("type") == "checkbox") {
			element.closest(".form-group").children(0).prepend(error);
		}
		else
			error.insertAfter(element);
	}
});</script>
  </head>
  <body>
  
  <!-- I get this modal from getbootstrap.com -->
  
  <!-- Button trigger modal -->
  
  <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
    Launch demo modal
  </button>
  
  <!-- Modal -->
  
  
  
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Modal</h4>
        </div>
        <div class="modal-body">
        
  
  <!-- use method="post" to send your form to server -->
  
  <form class="form-horizontal" method="post" action="/">
  
  <fieldset class="col-sm-6">
    <legend>Information</legend>	
  
    <div class="form-group">
      <lable for="fullname" class="col-sm-3 control-label">Name</lable>
      <div class="col-sm-6">
        <input type="text" id="fullname" name="fullname" class="form-control" required/>
      </div>
      <div class="col-sm-3">
      </div>
    </div>
  
    <div class="form-group">
      <label for="password" class="col-sm-3 control-label">Password</label>
      <div class="col-sm-9">
        <input type="password" id="password" name="password" class="form-control"  required/>
      </div>
    </div>
  
    <div class="form-group">
      <lable for="comments" class="col-sm-3 control-lable">Comments</lable>
    <div class="col-sm-9">
      <textarea name="comments" id="comments" class="form-control" rows="5" cols="40"></textarea>
    </div>
    </div>
  
    <div class="form-group">
      <lable for="luckynumber" class="col-sm-3 control-lable">Lucky Number</lable>
    <div class="col-sm-9">
      <select name="luckynumber" id="luckynumber" class="col-sm-10 form-control">
        <option>double zero</option>
        <option>seven</option>
        <option>thirteen</option>
      </select>
    </div>
    </div>
  </fieldset>
  
  
  <fieldset class="col-sm-6">
    <legend>Survey</legend>
  <div class="form-group">
  <div class="col-sm-offset-2 col-sm-10">
    <div class="checkbox">
      <label><input type="checkbox" name="pet" value="dog"/>Own a dog</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="pet" value="cat"/>Own a cat</label>
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="pet" value="owned"/>Own by a cat</label>
    </div>
  </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <span><b>Your favorite weather?</b></span></br>
    <div class="radio">
      <label><input type="radio" name="hot" value="hot"/>hot</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="cold" value="cold"/>cold</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="rainy" value="rainy"/>rainy</label>
    </div>
  </div>
  
  <!-- <div class="col-sm-offset-2 col-sm-10 rsButtons">
    <button type="reset" class="btn btn-primary">Reset</button>
    <button type="submit" class="btn btn-primary">Submit</button>
  </div> -->
  
  </fieldset>
  
   <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <input type="submit" class="btn btn-primary" value="Submit">
    </div>
  </div>
    </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  
  </body>
  