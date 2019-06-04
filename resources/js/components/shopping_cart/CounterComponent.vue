<template lang="html">
	<a href="/carrito">Mi carrito {{productosCount}}</a>
</template>

<script>
	export default{
		computed:{
			productosCount(){
				return window.store.state.productosCount;
			}
		}
	}
</script>