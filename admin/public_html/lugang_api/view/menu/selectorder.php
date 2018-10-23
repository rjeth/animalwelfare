<?php include '../../layout/header-out.php';?>

<?php
require_once("../../data/config.php");

if($_GET['id']) {
	$id = $_GET['id'];

	$sql = "SELECT * FROM products WHERE id = {$id} " ;
	$result = $conn->query($sql);
	$data = $result->fetch_assoc();
	$conn->close();

?>
<div class="container">
<div class="Card"  tabindex="-1" role="dialog" aria-labelledby="addtocard" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<form action="create.php" method="post">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel"><?php echo $data['name']; ?></h5>
			</div>
			<?php
	 	 $stat =  $data['active'];
		 $stat1 =  $data['quantity'];
	 	 if ($stat == 1 && $stat1 != '0'){ echo "
			 <div class='modal-body'>
		 			<img class='card-img-top' src='../../../".$data['image']."' alt='Card image cap' >


		 			 <h4 class='card-title'></h4>
		 					<h2 class='card-text pull-right' style='color: red ; font-weight: bold; '>

		 			</h2>
		 			<div class='form-group'>
		 				<label for='price'>Price</label>
		 			<input type='text' oninput='calculate()' readonly class=' form-control' id='price'  name='price' value=".$data['price'].">
		 			</div>
		 			<div class='form-group'>
		 			<label for='descript'>Description</label>
		 			<p class='card-text' id='descript'>".$data['description']."</p>
		 			</div>
		 			<div class='form-group'>
		 			<label for='selection'>Quantity</label>
		 			<div class='input-group mb-3' Name='selection'>
		 				<select class=' form-control' id='selectquant'  name='selectquant' oninput='calculate()'>

		 				</select>
		 			</div>
		 			</div>
		 			<div class='form-group'>
		 				<label for='tot'>Total Price</label>
		 			<input type='text' readonly class='form-control' id='tot' name='tot' value=".$data['price'].">
		 			</div>

		 		<input type='hidden' name='id' value=".$data['id']." />
		 		<input type='hidden' id='thiss' value=".$data['quantity']."  />
<input type='hidden' name='qtys' value=".$data['quantity']."  />


		 	</div>
		 	<div class='modal-footer'>
		 			<a class='btn btn-secondary' onclick='history.go(-1);' >Cancel</a>
		 		<button  type='submit' class='btn btn-primary'>Add to Cart</button>
		 		</form>

		 	</div>




	 		 ";}
	 	 else
	 	 {echo "
			 <div class='modal-body'>
			  <img class='card-img-top' src='../../../".$data['image']."' alt='Card image cap' style='-webkit-filter: grayscale(100%);
				 filter: grayscale(100%);'> <div class='card-img-overlay'>
					<h2 class='card-text pull-right' style='color: red ; font-weight: bold; '>
					Not Available
					</h2>
					</div>


					<h4 class='card-title'></h4>
						<h2 class='card-text pull-right' style='color: red ; font-weight: bold; '>

				</h2>
				<div class='form-group'>
					<label for='price'>Price</label>
				<input type='text' oninput='calculate()' readonly class=' form-control' id='price'  name='price' value=".$data['price'].">
				</div>
				<div class='form-group'>
				<label for='descript'>Description</label>
				<p class='card-text' id='descript'>".$data['description']."</p>
				</div>

			<input type='hidden' name='id' value=".$data['id']." />
			<input type='hidden' id='thiss' value=".$data['quantity']."  />
<input type='hidden' name='qtys' value=".$data['quantity']."  />


		</div>
		<div class='modal-footer'>
				<a class='btn btn-secondary' onclick='history.go(-1);' >Cancel</a>
			<button  type='submit' class='btn btn-primary' disabled>Add to Cart</button>
			</form>

		</div>




	 		 ";}  } ?>



		</div>
	</div>
</div>

    <!-- Start your project here-->

</div>
<script>
$("#selectquant").val('1')
</script>
<script>

(function() {
		var shit = document.getElementById("thiss").value;
    var elm = document.getElementById('selectquant'),
        df = document.createDocumentFragment();
    for (var i = 1; i < shit; i++) {
        var option = document.createElement('option');
        option.value = i;
        option.appendChild(document.createTextNode(i));
        df.appendChild(option);
    }
    elm.appendChild(df);
}());
</script>
<script>
function calculate() {
		var myBox1 = document.getElementById('price').value;
		var myBox2 = document.getElementById('selectquant').value;
		var result = document.getElementById('tot');
		var myResult = myBox1 * myBox2;
		result.value = myResult;


	}
</script>


<?php include '../../layout/footer.php';?>
