<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
    <title>Store</title>
</head>
<body>
	<div id="st">
			<div class="container">
				<div class="wrapper">
					<div class="oven">
						<h2>Духовки</h2>
						<div class="products">
							<div v-for ='(product, index) in store.data["ovens"]'>
								<img :src="product.img">
								<p>{{ product.name }}</p>
								<p>{{product.price}}</p>
							</div>
						</div>
					</div>
					<div class="cupboard">
						<h2>Шкафы</h2>
						<div class="products">
							<div v-for ='(product, index) in store.data["cupboards"]'>
								<img :src="product.img">
								<p>{{ product.name }}</p>
								<p>{{product.price}}</p>
							</div>
						</div>
					</div>
					<div class="stoves">
						<h2>Плиты</h2>
						<div class="products">
							<div v-for ='(product, index) in store.data["stoves"]'>
								<img :src="product.img">
								<p>{{ product.name }}</p>
								<p>{{product.price}}</p>
							</div>
						</div>
					</div>
				</div>
			</div>

	</div>

	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.1/axios.js"></script>
	<script type="text/javascript" src="script.js"></script>
	</div>
</body>
</html>