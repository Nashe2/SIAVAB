<template>
	<div>
		<material-transition-group tag="div">
			<article class="" :key="producto_id" class="card-producto" :data-index="index" v-for="(producto,index) in productos">
				<div class="row">
					<div class="col-10">
						<strong>{{producto.title}}</strong>
					</div>
					<div class="col-2">
						{{producto.humanPrice}}
					</div>
				</div>
			</article>

		  </material-transition-group>
		  <article class="total card-producto">
		  	<div class="row">
		  		<div class="col-10">
		  			<strong>Total</strong>
		  		</div>
		  		<div class="col-2">
		  			{{total}}
		  		</div>
		  	</div>
		  </article>
	</div>
	
</template>

<script>
export default{
	data(){
		return{
			endpoint:'/carrito/productos',
			productos:[]
		}
	},
	created(){
		this.fetchProductos();
	},
	computed:{
		total(){
			let cents = this.productos.reduce((acumulator,currentObj)=>{
				return acumulator + currentObj.numberPrice
			},0);

			return `$${cents/100}`;
		}
	},
	methods:{
		fetchProductos(){
			axios.get(this.endpoint).then(responce=>{
				this.productos=response.data.data;
				console.log(this.productos);
			})
		}
	}
}
</script>