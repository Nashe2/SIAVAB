<template>
 <section>
    <material-transition-group tag="div" class="row">
      <add-to-cart-component :key="producto.id" :data-index="index" v-bind:producto="producto" v-for="(producto,index) in productos">
      </add-to-cart-component>
    </material-transition-group>
  </section>


</template>

<script>
    export default {
        data(){
            return{
                name:'Productos Component',
              productos:[],
              endpoint: "/productos"
            }
        },
        created(){
          this.fetchProductos();
        },
        methods: {
          fetchProductos(){
            axios.get(this.endpoint).then((response)=>{
              console.log(response.data.data);
              this.productos = response.data.data;
            });
          }
        }
    }
</script>
