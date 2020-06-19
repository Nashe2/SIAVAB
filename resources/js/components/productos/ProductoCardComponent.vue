<template>
        <div  class="card col-xs-12 col-sm-10 col-md-4">
            <div class="card">
                <header class="bg-primary adding">

                </header>
                <div class="card-body padding">
                  <h2 class="card-title">
                    <a :href="'/productos/'+producto.id"> {{producto.title}}</a>
                  </h2>

                  <h4 class="card-subtitle">{{producto.humanprice}}</h4>
                   <p class="card-text">{{producto.description}}</p>
                </div>
            </div>

        </div>
</template>

<script>
    export default {
      props:{
        producto: {
          type: Objetc
        }
      }
    }
</script>
