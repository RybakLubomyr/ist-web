<?php
    include 'header.php';
?>

<main class="container">
  <div class="row">
	  <div  class="col">
	  </div>
  </div>
  <div class="row">
    <article class="col-sm col-md-8">
        <div id="content" role="main">
			</br>
			Тут будемо вгадувати(числа від 1 до 10)</br>
			<input name = "number" id = "you_num">
			<button id = "input_num" >Відгадати</button>
			<div id = "rez"> </div>
			
			<script type="text/javascript">

        var rand_num = Math.floor(Math.random() * 10);  
console.log(rand_num);
var hints = '';
var check = false;

input_num.onclick = function() {
        
    var num = $('#you_num').val(); 
      if (num == rand_num) {
        hints += 'Ви вгадали' + '<br>' ;
        hints += 'Game ouwer' + '<br>' ;
          } else {
			  if(num < rand_num){
				  hints += num +' Ви не вгадали, ваше число менше за загадане' + '<br>' ;
			  } else{
				  hints += num +' Ви не вгадали, ваше число більше за загадане' + '<br>' ;
			  }
             }
      
      $('#rez').html(hints);
   
    
   
  }

    </script>
			
		</div>
    </article>
    <aside class="col-sm col-md-4">
     <?php
    include 'sidebar.php';
?>
    </aside>
  </div>
</main>


<?php
    include 'footer.php';
?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>