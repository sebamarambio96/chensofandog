<html>
<head>
<title>Chainsaw Fan <!>!<&&&&&&></title>

<link rel="stylesheet" href="{{ asset('https://fonts.googleapis.com/css2?family=Hubballi&display=swap') }}">
<link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css') }}">
<link rel="stylesheet" href="{{ mix('/css/app.css') }}">

<script type="text/javascript" src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js') }}"></script>  
<script type="text/javascript" src="{{ mix('/js/app.js') }}"></script>
</head>
  
<body>

  <div class="td_error">
  <div class="td_error_">
    Error message 
    
    <div class="td_error_404">
      404
      
      <div class="td_error_404_">404</div>

      <div class="td_error_404_">404</div>
    
    </div>
      <div>That Page Cannot Be Found</div>
  </div>
</div>

<script>
document.querySelector(".td_error_404").addEventListener("click", function() {
  document.location.href = '/chainsaw';
});
</script>
</body>
  
</html>