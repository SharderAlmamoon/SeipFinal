<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Dashboard</title>
    <style>
          .textexample{
              font-size:80px;
              font-weight:bold;
              letter-spacing:3px;
              margin-left: 6%;
               margin-top: 10%;
               color:#d63031;
          }
    </style>


</head>
<body style="background-color:rgba(0,0,0,.3);">

<div class="" style="margin : 5% 0 0 20%">
    <a href="{{Route('login')}}" class="btn btn-sm btn-dark p-2 font-weight-bold">Log In...</a>
    <a href="{{Route('register')}}" class="btn btn-sm btn-success p-2 font-weight-bold ml-5">Register</a>
</div>
    
<div class="example textexample">
  <span class="nbr ltr">0</span>
  <span class="nbr ltr">0</span>
  <span class="nbr ltr">0</span>
  <span class="nbr ltr">0</span>
  <span class="nbr ltr">0</span>
  <span class="nbr ltr">0</span>
  <span class="nbr ltr">0</span>
  <span class="nbr ltr">0</span>
  <span class="nbr ltr">0</span>
  <span class="nbr ltr">0</span>
  <span class="nbr ltr">0</span>
  <span class="nbr ltr">0</span>
  <span class="nbr ltr">0</span>
  <span class="nbr ltr">0</span>
  <span class="nbr ltr">0</span>
  <span class="nbr ltr">0</span>
  <span class="nbr ltr">0</span>
  <span class="nbr ltr">0</span>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="/path/to/cdn/jquery.slim.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {

let $randomnbr = $('.nbr'),
  $timer = 15,
  $it,
  $change,
  $index,
  $data = 0,
  $letters = ['H', 'E', 'Y', '!', '!', 'L', 'O', 'G', 'i', 'n', 'F', 'I', 'R', 'S', 'T', '.', '.', '.'];

$randomnbr.each(function() {

  $change = Math.round(Math.random() * 100);
  $(this).attr('data-change', $change)

});

function random() {
  return Math.round(Math.random() * 9);
}

function select() {
  return Math.round(Math.random() * $randomnbr.length + 1);
}

function value() {
  $('.nbr:nth-child(' + select() + ')').html('' + random() + '');
  $('.nbr:nth-child(' + select() + ')').attr('data-number', $data);
  $data++;

  $randomnbr.each(function() {

    if (parseInt($(this).attr('data-number')) > parseInt($(this).attr('data-change'))) {
      $index = $('.ltr').index(this);
      $(this).html($letters[$index]);
      $(this).removeClass('nbr');
    }
  });

}

it = setInterval(value, $timer);

})
</script>
</body>
</html>
