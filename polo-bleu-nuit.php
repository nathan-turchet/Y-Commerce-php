<!DOCTYPE html>
<html>
<head>
	<title>Polo bleu nuit | Y-Commerce</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0c87a70838.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg="
    crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="product.css">
</head>
<body>

    <?php include('top.php'); ?>

    <div class="content">
        <div class="content-wrapper">
            <div class="column">
                <img id=featured src="images/vetement/polo-bleu-nuit1-square.png">
                <div id="slide-wrapper" >
                    <div id="slider">
                        <img class="thumbnail active" src="images/vetement/polo-bleu-nuit1-square.png">
                        <img class="thumbnail" src="images/vetement/polo-grist1-square.png">
                        <img class="thumbnail" src="images/vetement//t-shirt-blanc-logo1-square.png">
                    </div>
                </div>
            </div>
    
            <div class="column">
                <h1>Awesome Shoes</h1>
                <hr>
                <h3>$89.99</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <input value=1 min="1" max="30" type="number">
                <a class="btn btn-dark" href="#">Add to Cart</a>
            </div>
        </div>
    </div>

    <?php include('footer.php'); ?>

	<script type="text/javascript">
		let thumbnails = document.getElementsByClassName('thumbnail')

		let activeImages = document.getElementsByClassName('active')

		for (var i=0; i < thumbnails.length; i++){

			thumbnails[i].addEventListener('mouseover', function(){
				console.log(activeImages)
				
				if (activeImages.length > 0){
					activeImages[0].classList.remove('active')
				}
				

				this.classList.add('active')
				document.getElementById('featured').src = this.src
			})
		}


		let buttonRight = document.getElementById('slideRight');
		let buttonLeft = document.getElementById('slideLeft');

		buttonLeft.addEventListener('click', function(){
			document.getElementById('slider').scrollLeft -= 180
		})

		buttonRight.addEventListener('click', function(){
			document.getElementById('slider').scrollLeft += 180
		})


	</script>
    
</body>
</html>