<div class="container">  
<div class="row justify-content-center">

<div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                <form action="/action_page.php">
    <div class="form-group col-md-4">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group col-md-4">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

</div>
</div>
</div>
</div>
</div>