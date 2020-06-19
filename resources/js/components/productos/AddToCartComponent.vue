<template>
	<button @click="addToCart" class="btn btn-primary">{{message}}</button>
</template>

<script>
export default{
	data(){
		return {
			message: 'Agregar al carrito',
			endpoint: '/in_shoppinh_carts'
		}
	},
	props: { producto: { type: Object } },
	methods:{
		addToCart(){
			axios({
				method: 'POST',
				url: this.endpoint,
				data: {
					producto_id: this.producto_id
				},
				headers: {
					'Accept':'application/json',
					'Content-Type': 'application/json'
				}
			}).then(()=>{
				window.store.commit("increment");
				//console.log('Se agregó el producto');
			})
		}
	}
}
</script>