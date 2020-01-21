<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
    <title>Store</title>
</head>
<body>
	<div id="st">
			<div class="container">
				<div class="wrapper">
					<div class="ovens products_container" v-bind:class="{ active: (active_tab == 'ovens') }">
						<h2>Духовки</h2>
						<div class="products">
							<div v-for ='(product, index) in store.data["ovens"]' v-on:click="toCupboards(product)">
								<img :src="product.img">
								<h3>{{ product.name }}</h3>
								<p>Цена:{{product.price}}₽</p>
								<span>{{ product.description }}</span>
							</div>
						</div>
					</div>
					<div class="cupboards products_container" v-bind:class="{ active: (active_tab == 'cupboards') }">
						<h2>Шкафы</h2>
						<div class="products">
							<div v-for ='(product, index) in store.data["cupboards"]' v-on:click="toStoves(product)">
								<img :src="product.img">
								<h3>{{ product.name }}</h3>
								<p>Цена:{{product.price}}₽</p>
								<span>{{ product.description }}</span>
							</div>
						</div>
					</div>
					<div class="stoves products_container" v-bind:class="{ active: (active_tab == 'stoves') }">
						<h2>Плиты</h2>
						<div class="products">
							<div v-for ='(product, index) in store.data["stoves"]'>
								<img :src="product.img">
								<h3>{{ product.name }}</h3>
								<p>Цена:{{product.price}}₽</p>
								<span>{{ product.description }}</span>
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